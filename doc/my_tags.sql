DROP TABLE IF EXISTS `my_tags`;
CREATE TABLE `my_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `value` varchar(32)  NOT NULL DEFAULT '' COMMENT '标签名字',
  `dateline` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT="问题表";

