<?php
/**
 * 蜘蛛类
 * User: <Alex Mo>momo1a@qq.com
 * Date: 2017/11/14 0014
 * Time: 下午 10:42
 */

class Spider
{


    protected $_urls = array(
        'stackoverflow'  =>  'https://stackoverflow.com/tags'
    );

    protected $_headers = array(
        'CLIENT-IP: 192.168.1.100',
        'X-FORWARDED-FOR: 192.168.1.100'
    );

    public function __construct()
    {

    }

    public function parse(){
        foreach ($this->_urls as $key=>$url){
            switch ($key){
                case 'stackoverflow':
                    $this->fetStackOverFlow($url,'https://stackoverflow.com');
                    break;
                default :
                    break;
            }

        }


    }

    protected function fetStackOverFlow($url,$referer){
        $document = new DOMDocument();
        $documentTag = $this->_httpRequest($url,$referer,$this->_headers);
        @$document->loadHTML($documentTag);
        $xpath = new DOMXPath($document);
        $pageTagsNode = $xpath->query('//table[@id="tags-browser"]/tr/td/a[@class="post-tag"]');
        for ($i = 0; $i<$pageTagsNode->length; $i++){
            $tagsListPage = $pageTagsNode->item($i)->getAttribute('href');
            $tagName = $pageTagsNode->item($i)->textContent;
            echo 'https://stackoverflow.com'.$tagsListPage."===".$tagName."\r\n";
        }

    }

    protected function _httpRequest($url,$referer,$header){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);

        // 模拟来源
        curl_setopt($ch, CURLOPT_REFERER, $referer);

        $response = curl_exec($ch);

        if($error=curl_error($ch)){
            die($error);
        }

        curl_close($ch);

        return $response;
    }

}

$spider = new  Spider();

$spider->parse();