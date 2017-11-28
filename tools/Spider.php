<?php
namespace Tools;

/**
 * 蜘蛛类
 * User: <Alex Mo>momo1a@qq.com
 * Date: 2017/11/14 0014
 * Time: 下午 10:42
 */


class Spider
{


    /**
     * userAgent
     * @var array
     */
    protected $_userAgent = array(
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 OPR/26.0.1656.60",
        "Opera/8.0 (Windows NT 5.1; U; en)",
        "Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 9.50",
        "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 9.50",
        "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0",
        "Mozilla/5.0 (X11; U; Linux x86_64; zh-CN; rv:1.9.2.10) Gecko/20100922 Ubuntu/10.10 (maverick) Firefox/3.6.10",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36",
        "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11",
        "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.133 Safari/534.16",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36",
        "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.11 TaoBrowser/2.0 Safari/536.11",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.71 Safari/537.1 LBBROWSER",
        "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; LBBROWSER)",
        "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; QQDownload 732; .NET4.0C; .NET4.0E; LBBROWSER)",
        "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; QQBrowser/7.0.3698.400)",
        "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; QQDownload 732; .NET4.0C; .NET4.0E)",
        "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.84 Safari/535.11 SE 2.X MetaSr 1.0",
        "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SV1; QQDownload 732; .NET4.0C; .NET4.0E; SE 2.X MetaSr 1.0)",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Maxthon/4.4.3.4000 Chrome/30.0.1599.101 Safari/537.36",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.122 UBrowser/4.0.3214.0 Safari/537.36",

        /*  mobile  */
        "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
        "Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
        "Mozilla/5.0 (iPad; U; CPU OS 4_2_1 like Mac OS X; zh-cn) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5",
        "Mozilla/5.0 (iPad; U; CPU OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
        "Mozilla/5.0 (Linux; U; Android 2.2.1; zh-cn; HTC_Wildfire_A3333 Build/FRG83D) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
        "Mozilla/5.0 (Linux; U; Android 2.3.7; en-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
        "MQQBrowser/26 Mozilla/5.0 (Linux; U; Android 2.3.7; zh-cn; MB200 Build/GRJ22; CyanogenMod-7) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
        "Opera/9.80 (Android 2.3.4; Linux; Opera Mobi/build-1107180945; U; en-GB) Presto/2.8.149 Version/11.10",
        "Mozilla/5.0 (Linux; U; Android 3.0; en-us; Xoom Build/HRI39) AppleWebKit/534.13 (KHTML, like Gecko) Version/4.0 Safari/534.13",
        "Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+",
        "Mozilla/5.0 (hp-tablet; Linux; hpwOS/3.0.0; U; en-US) AppleWebKit/534.6 (KHTML, like Gecko) wOSBrowser/233.70 Safari/534.6 TouchPad/1.0",
        "Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/20.0.019; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.18124",
        "Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; HTC; Titan)",

        "UCWEB7.0.2.37/28/999",
        "NOKIA5700/ UCWEB7.0.2.37/28/999",

        "Openwave/ UCWEB7.0.2.37/28/999",
        "Mozilla/4.0 (compatible; MSIE 6.0; ) Opera/UCWEB7.0.2.37/28/999",

    );

    /**
     * will fetch the sites first page
     * @var array
     */
    protected $_urls = array(
        'stackoverflow'  =>  'https://stackoverflow.com/tags'
    );


    /**
     * fetch base site domain
     * @var array
     */

    protected $_baseSite = array(
        'stackoverflow' =>  'https://stackoverflow.com'
    );

    /**
     * Tag has next page
     * @var bool
     */
    protected $_stackOverFlowTagHasNextList =  true;


    /**
     * production env  false
     * @var bool
     */
    protected $_debug = true;

    /**
     * save fetch data
     * @var null
     */
    protected $_data = null;

    /**
     * database connection object
     * @var null
     */
    protected $_databaseConn = null;


    /**
     * table name
     * @var string
     */
    protected $_questions_table = 'my_questions';

    /**
     * table name
     * @var string
     */
    protected $_tags_table = 'my_tags';

    /**
     * @var int
     */
    protected $_currentTagId = 0;


    /**
     * @var null
     */
    protected $_saveImageObj = null;

    /**
     *
     * Spider constructor.
     */
    public function __construct()
    {
        try {
            if (!$this->_databaseConn) {
                $this->_databaseConn = new Connection('192.168.1.103', '3306', 'root', '123456', 'questions');
            }

            if (!$this->_saveImageObj){
                $this->_saveImageObj = new ImageSave();
            }

        }catch (\Exception $e){
            $this->_printMeg($e->getTraceAsString(),'500','ERROR');
        }

    }

    /**
     * parse fetching
     */
    public function parse(){

        $this->_printMeg('Spider Initialization.');

        foreach ($this->_urls as $key=>$url){
            $this->_printMeg('Spider start fetch '.$key.'.');
            try {
                switch ($key) {
                    case 'stackoverflow':
                        $j = 1;
                        while ($this->_stackOverFlowTagHasNextList) {
                            $this->fetchStackOverFlow($url . '?page='.$j.'&tab=popular', $this->_baseSite['stackoverflow']);
                            $j++;
                        }
                        break;
                    default :
                        break;
                }
            }catch (Exception $e){
                $this->_printMeg($e->getTraceAsString(),500,'ERROR');
            }
        }

    }


    /**
     * fetch stackoverflow
     * @param $url
     * @param $referer
     */
    protected function fetchStackOverFlow($url,$referer){

        $documentTag = $this->_httpRequest($url,$referer);
        $xpath = $this->_loadXpath($documentTag);
        $pageTagsNode = $xpath->query('//table[@id="tags-browser"]/tr/td/a[@class="post-tag"]');
        for ($i = 0; $i<$pageTagsNode->length; $i++){
            $j = 1;
            while (true) {
                $tagsListPage = $this->_baseSite['stackoverflow'] . $pageTagsNode->item($i)->getAttribute('href') . '?sort=newest&page='.$j.'&pagesize=50';
                // 标签名插入标签表 如果存在略过
                $tagName = $pageTagsNode->item($i)->textContent;
                $tagExists = $this->_databaseConn->select('`id`')->from($this->_tags_table)->where(array('value ="'.$tagName.'"'))->row();
                if (!$tagExists){
                    $this->_databaseConn->insert($this->_tags_table)->set('value','"'.$tagName.'"')->set('dateline',time())->query();
                    $this->_currentTagId = $this->_databaseConn->lastInsertId();
                }else{
                    $this->_currentTagId = $tagExists['id'];
                }
                $this->_printMeg('Start request list page: ' . $tagsListPage);
                $listFirstPageContent = $this->_httpRequest($tagsListPage, $this->_baseSite['stackoverflow']);
                $listXpath = $this->_loadXpath($listFirstPageContent);
                $nextPageNode = $listXpath->query('//span[contains(@class,"next")]');
                $this->fetchStackOverFlowQuestionPage($listXpath);
                if($nextPageNode->length == 0)
                    $this->_printMeg('Over Fetch '.$tagName.' Tag content');
                    break;
                $j++;
            }

        }
        // 标签页下一页节点
        $tagNextPage = $xpath->query('//span[contains(@class,"next")]');
        if ($tagNextPage->length == 0){
            $this->_stackOverFlowTagHasNextList = false;
        }


    }


    /**
     * @param $tagsListPage
     */
    protected function fetchStackOverFlowQuestionPage($listXpath){

        //获得问题列表页的问题节点
        $questionsNode = $listXpath->query('//div[@id="questions"]/div/div/h3/a[@class="question-hyperlink"]');
        if($questionsNode->length > 0){
            /*  *  获取到每个节点的链接 id   如果id已经采集了略过 *  */
            for ($j = 0; $j < $questionsNode->length; $j++){
                $relativeQuestionUrl  = $questionsNode->item($j)->getAttribute('href');
                // 问题内容页的链接地址
                //$questionUrl = $this->_baseSite['stackoverflow'].$relativeQuestionUrl;
                $questionUrl = 'https://stackoverflow.com/questions/20035101/why-does-my-javascript-get-a-no-access-control-allow-origin-header-is-present';
                $this->_data['originUrl'] = $questionUrl;
                $this->_data['origin'] = 1;
                $this->_data['dateline'] = time();
                // 问题id
                preg_match('/^\/questions\/(\d+)\/.+/',$relativeQuestionUrl,$match);
                $this->_data['qid'] = $match[1];

                /* 问题已采集跳过 */
                $questionExists = $this->_databaseConn->select('*')
                    ->from($this->_questions_table)
                    ->where('qid="'.$this->_data['qid'].'"')
                    ->row();
                if ($questionExists)
                    continue;

                $this->_data['tagId'] = $this->_currentTagId;

                // 请求问题页面
                $this->_printMeg('start request question url : '.$questionUrl);
                $questionDocument = $this->_httpRequest($questionUrl,$this->_baseSite['stackoverflow']);
                $questionXpath = $this->_loadXpath($questionDocument);

                // 标题
                $titleNode = $questionXpath->query('//div[@id="question-header"]/h1/a');
                if($titleNode->length == 1){
                    $this->_data['title'] = $titleNode->item(0)->textContent;
                }else{
                    $this->_printMeg('Not Fetched Title Url:'.$questionUrl,301,'WARNING');
                    continue;
                }

                // 问题和答案内容 (提问，回答，评论)

                $contentNode = $questionXpath->query('//div[@aria-label="question and answers"]/descendant::div[@class="post-text" or contains(@class,"js-comments-container")]');
                //var_dump($contentNode->length);
                if ($contentNode->length >0) {
                    for($i=0,$answerNum = 1,$html = ''; $i<$contentNode->length; $i++){
                        $htmlStr = preg_replace('/&#xD;/','',$contentNode->item($i)->C14N());
                        $replaceStr = preg_replace('/\s*–\s*<a class=\"comment-user\"[\s\S]+?<\/span><\/span>/u','',$htmlStr);
                        $imgPattern = '/<img[\s\S]+?src=\"(.+?)\"><\/img>/';
                        preg_match_all($imgPattern,$replaceStr,$matchs);

                        if (count($matchs[1]) > 0){
                            for ($imgNum=0;$imgNum < count($matchs[1]);$imgNum++){
                                $imgPath = $this->_saveImageObj->save($matchs[1][$imgNum]);
                                $pattern = '/'.preg_quote($matchs[1][$imgNum],'/').'/';
                                $replaceStr = preg_replace($pattern,$imgPath,$replaceStr);
                            }
                        }
                        if($i == 0) {
                            // 问题标识
                            $html .= '<h1 id="my-question">问题内容:</h1>'.$replaceStr;
                        }elseif($i == 1){
                            // 问题评论
                            $html .= '<h2 id="my-comment">问题评论:</h2>'.$replaceStr;
                        }elseif ($i >= 2){
                            if ($i == 2)
                                $html .= '<h1 id="my-answers">答案:</h1>';
                            if($i % 2 == 0) {
                                $html .= '<h2 class="answers-num">答案' . $answerNum . ':</h2>'.$replaceStr;
                                $answerNum++;
                            }else{
                                $html .= '<h2 class="my-comment">答案评论:</h2>'.$replaceStr;
                            }
                        }
                    }
                    $this->_data['content'] = $html;



                }else {
                    $this->_printMeg('Not Fetched Content Container Url:' . $questionUrl, 301, 'WARNING');
                    continue;
                }

                // 插入数据库

                $this->_databaseConn->insert($this->_questions_table)->cols($this->_data)->query();

                exit;
            }
        }
    }

    /**
     * load xpath document
     * @param $documentTree
     * @return DOMXPath
     */

    protected function _loadXpath($documentTree){
        $document = new \DOMDocument();
        libxml_use_internal_errors(true);
        @$document->loadHTML($documentTree);
        $xpath = new \DOMXPath($document);

        return $xpath;
    }

    /**
     * http request
     * @param $url
     * @param $referer
     * @return mixed
     */
    protected function _httpRequest($url,$referer){
        //随机IP
        $ip2id= round(rand(600000, 2550000) / 10000);
        $ip3id= round(rand(600000, 2550000) / 10000);
        $ip4id= round(rand(600000, 2550000) / 10000);
        $arr_1 = array("218","218","66","66","218","218","60","60","202","204","66","66","66","59","61","60","222","221","66","59","60","60","66","218","218","62","63","64","66","66","122","211");
        $randarr= mt_rand(0,count($arr_1)-1);
        $ip1id = $arr_1[$randarr];
        $ip = $ip1id.".".$ip2id.".".$ip3id.".".$ip4id;
        try {
            $ch2 = curl_init();
            curl_setopt($ch2, CURLOPT_URL, $url);
            curl_setopt($ch2, CURLOPT_TIMEOUT, 100);  // 100秒超时
            curl_setopt($ch2, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:' . $ip, 'CLIENT-IP:' . $ip));

            curl_setopt($ch2, CURLOPT_HEADER, true);  //追踪返回302状态码，继续抓取
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);

            curl_setopt($ch2, CURLOPT_NOBODY, false);
            curl_setopt($ch2, CURLOPT_REFERER, $referer);//模拟来路
            curl_setopt($ch2, CURLOPT_USERAGENT, $this->_userAgent[rand(0,count($this->_userAgent) - 1)]);

            // 解析gzip压缩
            curl_setopt($ch2,CURLOPT_ENCODING,'gzip,deflate');

            /* 跳过ssl错误验证s */
            curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch2,CURLOPT_SSL_VERIFYHOST,false);
            /* 跳过ssl错误验证e */

            $temp = curl_exec($ch2);
            if (FALSE === $temp)
                throw new Exception(curl_error($ch2), curl_errno($ch2));
            curl_close($ch2);
        }catch (Exception $e){
            $this->_printMeg(
                sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),
                '500',
                'ERROR'
            );
        }
        return $temp;
    }

    /**
     * print message
     * @param string $level  INFO WARNING ERROR
     * @param string $code
     * @param string $msg
     */
    protected function _printMeg($msg = 'success',$code = '200' ,$level = 'INFO' ){
        if ($this->_debug) {

            echo "[" . date('Y-m-d H:i:s') . "]Spider:::[" . $code . "][" . strtoupper($level) . "]:::" . $msg . "\r\n";
        }else{

            if (strtoupper($level) == 'WARNING' || strtoupper($level) == 'ERROR'){

                echo "[" . date('Y-m-d H:i:s') . "]Spider:::[" . $code . "][" . strtoupper($level) . "]:::" . $msg . "\r\n";
            }

        }

    }

}