DROP TABLE IF EXISTS `my_questions`;
CREATE TABLE `my_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `qid` varchar(15)  NOT NULL DEFAULT '' COMMENT '第三方唯一标识 问题id',
  `origin` tinyint  NOT NULL DEFAULT '0' COMMENT '来源 1 stackoverflow; 2...',
  `title` varchar(255)  NOT NULL DEFAULT '' COMMENT '标题',
  `content` mediumtext COMMENT '内容',
  `originUrl` varchar(255)  NOT NULL DEFAULT '' COMMENT '原帖地址',
  `dateline` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `tagId` VARCHAR(255)  NOT NULL DEFAULT '' COMMENT '标签id json格式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT="问题表";

