/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : mingshi

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-09-08 16:32:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for txht_article
-- ----------------------------
DROP TABLE IF EXISTS `txht_article`;
CREATE TABLE `txht_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `is_top` tinyint(1) DEFAULT '0',
  `keywords` longtext,
  `description` longtext,
  `pic` varchar(255) DEFAULT NULL,
  `content` longtext,
  `add_time` bigint(11) DEFAULT NULL,
  `view` int(11) DEFAULT '0' COMMENT '浏览量',
  `status` tinyint(1) DEFAULT '1',
  `from` varchar(255) DEFAULT NULL COMMENT '文章来源',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_article
-- ----------------------------
INSERT INTO `txht_article` VALUES ('1', '27', '教学信息文章', '1', '', '觉得很假看好爱的爱好 好啊  觉得很假看好爱的爱好 好啊  觉得很假看好爱的爱好 好啊  觉得很假看好爱的爱好 好啊  觉得很假看好爱的爱好 好啊  觉得很假看好爱的爱好 好啊  \r\n\r\n\r\n\r\n\r\n							', '/uploads/20170906/5a576be2196158423e21bf1441f9baae.png', '<p>觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; <br/>觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; <br/>觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; 觉得很假看好爱的爱好 好啊&nbsp; <br/></p>', '1503045720', '15', '1', '');
INSERT INTO `txht_article` VALUES ('2', '27', '新闻动态文章', '1', '', '新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章', '/uploads/20170906/7c83adeb7de594445292a76ad3c6aeb1.png', '<p>新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章新闻动态文章</p>', '1503045780', '9', '1', '新闻动态文章');
INSERT INTO `txht_article` VALUES ('3', '27', '新闻动态文章', '1', '', '新闻动态文章', '/uploads/20170906/22c4ff7eee7e366d4bf07367f8c829bc.png', '<p>新闻动态文章电饭锅电饭锅电饭锅啊实打实大声道阿斯达萨达</p>', '1503045960', '72', '1', '');
INSERT INTO `txht_article` VALUES ('4', '27', '新闻动态文', '1', '', '新闻动态文章', '/uploads/20170906/aa784b5704fd84c42d0ac7c7f36978ff.png', '<p>为选拔、培养、造就一批能够发挥骨干示范作用的知名教师和高水平教师，发挥高层次人才的“旗帜效应”，促进我省教师队伍素质的整体提升，2015年起，我省将评选“湖北名师”升级为评建“湖北名师工作室”。撒发顺丰</p><p><span style=\"white-space:pre\"></span></p><p><br/></p>', '1503046020', '30', '1', '');
INSERT INTO `txht_article` VALUES ('6', '38', '品牌介绍', '1', '', '新闻动态文章', '', '<p>北京盛世民安科技发展有限公司始于2009年，总部位北京经济技术发区（国家级），是一家集的设计、研发、制造的集成产业公司。公司主要技术人员主要来自各大公司、各大院校，在研制、生产、销售上有多年的综合管理经验，多年的产品销售和优质售后服务，让很多的行业对我公司产品有了更好的认识和认可，在我公司自己的不断努力下和客户们的拥戴下，在上海、南京、西安、成都等地区分别设立了办事处，为全国24小时提供优质服务机制。公司涉及软件、动漫、自动化、机械、液压、电子等多个行业。\r\n \r\n主要业务有消防体验馆、地震、防灾减灾教育馆、交通安全体验馆、人防民防、居家安全、低碳环保等科普安全馆的设计、施工、互动设备的生产制造。公司经过不懈努力部分产品达到了国内领先的水平，公司始终坚持以质量取胜、以服务求客户。我们售前免费为客户提供设计方案、效果图，施工中我们严格遵守各项规定，售后我们将为产品提供终身技术指导，如出现质量问题，我们将会在第一时间为客户解决。\r\n 公司不断发展壮大，形成了以北京为中心，覆盖全国的产业模式。北京总部主要负责产品的设计、研发、市场营销。成都分公司主要机械的制造基地。 \r\n公司主要产品有：模拟灭火、模拟烟道逃生、模拟地震体验馆、地震平台、地震屋、模拟报警电话、红绿灯斑马线模拟、模拟自行车驾驶、知识抢答、知识查询、虚拟翻书、电子留言、电子翻书、抠像系统、电子沙盘、投影互动、触摸屏、灭火体验、报警电话、仿真地震体验，仿真坠梯体验、高空坠物、全息成像等多媒体产品。\r\n \r\n公司经过多年的努力，已经在国内得到客户的一致赞誉，为追求更高的目标，我们将一如既往坚持优惠的价格，高质量要求及完善的售后服务，赢得广大新老客户的信赖。\r\n \r\n近年来公司完成的案例：黑龙江北安市青少年活动中心、黑龙江鹤岗市二九农场社区安全教育馆、辽宁沈阳市苏家屯学校安全教育馆，北京市门头沟青少年宫、北京市三环新城社区安全教育馆、北京市西罗园社区安全教育馆、北京市朝阳区公共安全教育馆升级改造、河北邢台市人防教育馆、陕西榆林消防安全教育馆、山东东营市消防安全教育馆、山东青岛即墨市校园安全教育馆、北京蓝天成儿童职业教育基地、山东枣庄社区安全教育馆、山东莱芜职业学校安全培训中心、青海神格尔木市昆仑山世界地质遗址公园防震减灾教育馆、泰安市满庄镇第一中学安全教育馆、赤峰市人防教育馆、淄博市游乐园模拟灭火提供、上海松江区社区安全教育馆、江苏无锡梅津幼儿园安全教育馆、江苏常州高新区社区安全教育馆、江西分宜县消防培训中心、广东深圳某社区安全教育馆、贵州安顺消防体验馆、贵州毕节消防教育馆、四川省汶川县映秀镇防震减灾旅游中心、山东济南国华经典社区安全及哦啊与馆、山东济南历下区社区安全体验馆、济南市芙蓉社区安全教育馆、北京市民防灾减灾教育馆、北京市丰台区防灾馆教育基地、蓝天梦工厂儿童职业体验中心、包头防灾减灾教育馆、天津希乐城地震体验馆、天津希乐城风云体验馆、天津希乐城模拟灭火体验馆、济南少年宫地震馆、徐州丰县人防体验工程、南京谷里中学安全教育体验馆、北京永定门外大街社区安全体验馆、北京市朝阳区欢乐谷社区安全教育馆、北京市昌平区北七家地震体验馆、北京市西罗园社区体验馆、黑龙江哈尔滨哈乐城儿童体验馆消防体验馆、辽宁沈阳沈河区教育实践中心等等。</p>', '1504684013', '0', '1', '');
INSERT INTO `txht_article` VALUES ('7', '39', '企业文化', '1', '', '新闻动态文章', '', '<p>企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化</p>', '1504684062', '0', '1', '');
INSERT INTO `txht_article` VALUES ('8', '40', '荣誉资质', '1', '', '新闻动态文章', '', '<p>荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质</p>', '1504684107', '0', '1', '');
INSERT INTO `txht_article` VALUES ('9', '41', '子公司', '1', '', '新闻动态文章', '', '<p>子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司</p>', '1504684218', '0', '1', '');
INSERT INTO `txht_article` VALUES ('10', '24', '关于我们', '1', '', '新闻动态文章', '', '<p>关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们</p>', '1504690079', '0', '1', '');
INSERT INTO `txht_article` VALUES ('11', '46', '公司动态', '0', '', '安全馆让“安全”深入人心', '', '<p>走进安全体验馆，让通过高科技技术让体验者感同身受，亲身经历到在工作环境、家庭环境中存在的危险，让体验者进一步的提高自身的安全意识。安全体验馆包括安全帽撞击体验、安全带体验、洞口坠落体验、灭火器使用、搬重物体验等。</p>', '1504751700', '0', '1', '');
INSERT INTO `txht_article` VALUES ('12', '47', '科普小课堂', '0', '', '科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂', '', '<p>科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂科普小课堂</p>', '1504751851', '1', '1', '');
INSERT INTO `txht_article` VALUES ('13', '69', '新闻案例', '0', '', '新闻案例新闻案例新闻案例新闻案例新闻案例', '', '<p>新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例新闻案例</p>', '1504751887', '0', '1', '');
INSERT INTO `txht_article` VALUES ('14', '51', '公共安全馆', '0', '', '公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆', '/uploads/20170907/3bbfbdc15efbe51744fb80d2acb619c1.png', '<p>公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆</p>', '1504770091', '0', '1', '');
INSERT INTO `txht_article` VALUES ('15', '51', '公共安全馆2', '0', '', '公共安全馆2公共安全馆2公共安全馆2公共安全馆2公共安全馆2公共安全馆2', '', '<p>公共安全馆2公共安全馆2公共安全馆2公共安全馆2公共安全馆2公共安全馆2</p>', '1504770263', '0', '1', '');
INSERT INTO `txht_article` VALUES ('16', '51', '公共安全馆3', '0', '', '公共安全馆3公共安全馆3公共安全馆3公共安全馆3', '', '<p>公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3公共安全馆3</p>', '1504770292', '0', '1', '');

-- ----------------------------
-- Table structure for txht_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `txht_auth_group`;
CREATE TABLE `txht_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_auth_group
-- ----------------------------
INSERT INTO `txht_auth_group` VALUES ('4', '文章编辑', '1', '13,15,12,10,6');
INSERT INTO `txht_auth_group` VALUES ('5', '测试', '1', '13,15');
INSERT INTO `txht_auth_group` VALUES ('6', '123', '1', '13,15');

-- ----------------------------
-- Table structure for txht_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `txht_auth_group_access`;
CREATE TABLE `txht_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_auth_group_access
-- ----------------------------
INSERT INTO `txht_auth_group_access` VALUES ('6', '4');
INSERT INTO `txht_auth_group_access` VALUES ('7', '6');

-- ----------------------------
-- Table structure for txht_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `txht_auth_rule`;
CREATE TABLE `txht_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_auth_rule
-- ----------------------------
INSERT INTO `txht_auth_rule` VALUES ('6', 'add_article', '添加/修改文章', '1', '1', '', '8');
INSERT INTO `txht_auth_rule` VALUES ('7', 'add_cate', '添加/修改栏目', '1', '1', '', '7');
INSERT INTO `txht_auth_rule` VALUES ('8', 'add_link', '添加/修改链接', '1', '1', '', '10');
INSERT INTO `txht_auth_rule` VALUES ('9', 'add_pic', '添加/修改图片', '1', '1', '', '9');
INSERT INTO `txht_auth_rule` VALUES ('10', 'article_list', '文章列表', '1', '1', '', '4');
INSERT INTO `txht_auth_rule` VALUES ('12', 'cate_list', '栏目列表', '1', '1', '', '3');
INSERT INTO `txht_auth_rule` VALUES ('13', 'index', '首页显示', '1', '1', '', '1');
INSERT INTO `txht_auth_rule` VALUES ('14', 'link_list', '链接列表', '1', '1', '', '6');
INSERT INTO `txht_auth_rule` VALUES ('15', 'main', '主页显示', '1', '1', '', '2');
INSERT INTO `txht_auth_rule` VALUES ('16', 'pic_list', '图片列表', '1', '1', '', '5');
INSERT INTO `txht_auth_rule` VALUES ('17', 'sys_setting', '基本设置', '1', '1', '', '11');

-- ----------------------------
-- Table structure for txht_category
-- ----------------------------
DROP TABLE IF EXISTS `txht_category`;
CREATE TABLE `txht_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1前台 0后台',
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL COMMENT 'action地址',
  `show_link` varchar(255) DEFAULT NULL,
  `keywords` longtext,
  `description` longtext,
  `content` longtext,
  `sort` int(11) DEFAULT '0',
  `pic` varchar(255) DEFAULT NULL,
  `lock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0可编辑 1锁定',
  `show_nav` tinyint(1) DEFAULT '0',
  `add_time` bigint(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1正常 0冻结 -1删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_category
-- ----------------------------
INSERT INTO `txht_category` VALUES ('1', '0', '栏目管理', '0', 'fa-user', '0', null, null, null, '', '100', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('2', '1', '栏目列表', '0', 'fa-list', 'cate_list', null, null, null, '', '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('3', '1', '添加栏目', '0', 'fa-user', 'add_cate', null, null, null, '', '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('4', '0', '文章管理', '0', 'fa-list', '', null, null, null, '', '90', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('5', '4', '文章列表', '0', 'fa-list', 'article_list', null, null, null, '', '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('6', '4', '添加文章', '0', 'fa-list', 'add_article', null, null, null, '', '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('7', '0', '图片管理', '0', 'fa-tasks', '', null, null, null, null, '80', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('8', '7', '图片列表', '0', 'fa-tasks', 'pic_list', null, null, null, null, '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('9', '7', '增加图片', '0', 'fa-list', 'add_pic', null, null, null, null, '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('10', '0', '系统设置', '0', 'fa-cog', '', null, null, null, null, '60', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('11', '10', '基本设置', '0', 'fa-cog', 'sys_setting', null, null, null, null, '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('12', '10', '用户管理', '0', 'fa-cogs', 'user_setting', null, null, null, null, '0', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('13', '0', '链接管理', '0', 'fa-chain', '', null, null, null, null, '75', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('14', '13', '链接列表', '0', 'fa-chain', 'link_list', null, null, null, null, '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('15', '13', '增加链接', '0', 'fa-chain', 'add_link', null, null, null, null, '0', null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('16', '10', '用户分组', '0', 'fa-users', 'user_group', null, null, null, null, '0', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('17', '10', '留言列表', '0', 'fa-list', 'lyb_list', null, null, null, null, null, null, '0', '0', null, '1');
INSERT INTO `txht_category` VALUES ('18', '0', '产品管理', '0', 'fa-list', null, null, null, null, null, '70', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('19', '18', '产品列表', '0', 'fa-list', 'goods_list', null, null, null, null, '0', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('20', '18', '增加产品', '0', 'fa-list', 'add_goods', null, null, null, null, '0', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('21', '0', '会员管理', '0', 'fa-list', null, null, null, null, null, '65', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('22', '21', '会员列表', '0', 'fa-list', 'users_list', null, null, null, null, '0', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('23', '21', '添加会员', '0', 'fa-list', 'add_member', null, null, null, null, '0', null, '0', '0', null, '-1');
INSERT INTO `txht_category` VALUES ('24', '0', '关于我们', '1', null, 'news', '', '', '      北京盛世民安科技发展有限公司始于2009年，注册资金5000万元，总部位于北京经济技术开发区（国家级） ，是一家集的设计、研发、制造的集成产业公司。\n 公司主要技术人员主要来自各大公司、各大院校，在研制、生产、销售上有多年的综合管理经验，\n 多年的产品销售和优质售后服务，让很多的行业对我公司产品有了更好的认识和认可，在我公司自己的不断努力下和客户们的拥戴下，在上海、南京、西安、成都地区分别设立了办事处，为全国24小时提供优质服务机制。 公司涉及软件、动漫、自动化、机械、液压、电子等多个行业', '', '0', '/uploads/20170905/e2ec46f57c0b155442fe6669d926e85c.png', '0', '1', '1504602396', '1');
INSERT INTO `txht_category` VALUES ('25', '0', '服务领域', '1', null, 'pic', '', '', '', null, '0', '', '0', '1', '1504577980', '1');
INSERT INTO `txht_category` VALUES ('26', '0', '公司产品', '1', null, 'pic', '', '', '', null, '0', '', '0', '1', '1504754830', '1');
INSERT INTO `txht_category` VALUES ('27', '0', '新闻动态', '1', null, 'news', '', '', '', null, '0', '', '0', '1', '1504578145', '1');
INSERT INTO `txht_category` VALUES ('28', '0', '精品案例', '1', null, 'pic', '', '', '', null, '0', '', '0', '1', '1504578171', '1');
INSERT INTO `txht_category` VALUES ('29', '0', '资源中心', '1', null, 'news', '', '', '', null, '0', '', '0', '1', '1497341656', '-1');
INSERT INTO `txht_category` VALUES ('31', '0', '联系我们', '1', null, 'content', '', '', '', '<p><iframe class=\"ueditor_baidumap\" src=\"http://www.shenshiminan.com:801/static/js/ueditor/dialogs/map/show.html#center=116.07125,39.566529&zoom=10&width=530&height=340&markers=116.528541,39.785641&markerStyles=l,A\" width=\"370\" height=\"344\" frameborder=\"0\"></iframe><iframe class=\"ueditor_baidumap\" src=\"http://www.shenshiminan.com:801/static/js/ueditor/dialogs/map/show.html#center=114.403427,30.446181&zoom=18&width=530&height=340&markers=114.403427,30.446181&markerStyles=l,A\" width=\"370\" height=\"344\" frameborder=\"0\" align=\"right\"></iframe></p>', '0', '', '0', '1', '1504764160', '1');
INSERT INTO `txht_category` VALUES ('32', '0', '附加栏目', '1', null, 'content', '', '', '', null, '0', '', '0', '0', '1497341973', '1');
INSERT INTO `txht_category` VALUES ('33', '32', '首页轮播', '1', null, 'pic', '', '', '', null, '0', '', '0', '0', '1497341983', '1');
INSERT INTO `txht_category` VALUES ('34', '32', '微信二维码', '1', null, 'content', '', '', '', null, '0', '/uploads/20170905/d5276714a8ede91bb2d22d626e12d551.png', '0', '0', '1504599637', '1');
INSERT INTO `txht_category` VALUES ('35', '32', '友情链接', '1', null, 'link', '', '', '', null, '0', '', '0', '0', '1497342274', '1');
INSERT INTO `txht_category` VALUES ('36', '32', '通知公告', '1', null, 'content', '', '', '', null, '0', '', '0', '1', '1497344506', '-1');
INSERT INTO `txht_category` VALUES ('38', '24', '品牌介绍', '1', null, 'news', '', '', '', '', '0', '', '0', '1', '1504683957', '1');
INSERT INTO `txht_category` VALUES ('39', '24', '企业文化', '1', null, 'news', '', '', '', '<p>企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化企业文化</p>', '0', '', '0', '1', '1504683983', '1');
INSERT INTO `txht_category` VALUES ('40', '24', '荣誉资质', '1', null, 'news', '', '', '', '<p>荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质</p>', '0', '', '0', '1', '1504857242', '1');
INSERT INTO `txht_category` VALUES ('41', '24', '子公司', '1', null, 'news', '', '', '', '<p>子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司子公司</p>', '0', '', '0', '1', '1504684209', '1');
INSERT INTO `txht_category` VALUES ('42', '26', '消防体验馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834158268862.png\" title=\"1504834158268862.png\" alt=\"fw01.png\"/></p>', '1', '/uploads/20170906/208f86af9f9c9117e20b6dbe084b21b1.png', '0', '1', '1504834160', '1');
INSERT INTO `txht_category` VALUES ('43', '26', '地震体验馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834195661527.png\" title=\"1504834195661527.png\" alt=\"fw01.png\"/></p>', '3', '/uploads/20170906/ba3163b3ddb43b58d7012cbfb565ce4c.png', '0', '1', '1504834198', '1');
INSERT INTO `txht_category` VALUES ('44', '26', '交通安全互助', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834415118526.png\" title=\"1504834415118526.png\" alt=\"fw01.png\"/></p>', '2', '/uploads/20170906/28788268ae497e07a7f9231cc3714f30.png', '0', '1', '1504834417', '1');
INSERT INTO `txht_category` VALUES ('45', '26', '公共安全馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834235915199.png\" title=\"1504834235915199.png\" alt=\"fw01.png\"/></p>', '4', '/uploads/20170906/07c84319c4b305fe1f6f6bff9496dd58.png', '0', '1', '1504834238', '1');
INSERT INTO `txht_category` VALUES ('46', '27', '公司动态', '1', null, 'news', '', '', '', null, '0', '', '0', '1', '1504599310', '1');
INSERT INTO `txht_category` VALUES ('47', '27', '科普小课堂', '1', null, 'news', '', '', '', null, '0', '', '0', '1', '1504599354', '1');
INSERT INTO `txht_category` VALUES ('48', '26', '虚拟场馆', '1', null, 'pic', '', '', '虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆虚拟场馆', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834081115548.png\" title=\"1504834081115548.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170905/31a1c55fbfffdd12564e475653cd66a4.png', '0', '0', '1504834091', '1');
INSERT INTO `txht_category` VALUES ('49', '26', '虚拟地震', '1', null, 'pic', '', '', '虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震虚拟地震', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834112521200.png\" title=\"1504834112521200.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170905/95ad4498cd4d066927804df700279b26.png', '0', '0', '1504834115', '1');
INSERT INTO `txht_category` VALUES ('50', '26', '虚拟灭火', '1', null, 'pic', '', '', '虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火虚拟灭火', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834136123914.png\" title=\"1504834136123914.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170905/15828c4791436f9bbca3d226c72ab8d5.png', '0', '0', '1504834139', '1');
INSERT INTO `txht_category` VALUES ('51', '25', '公共安全馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170907/1504772349750560.png\" title=\"1504772349750560.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170906/e1a4f54162a23538063da069550df774.png', '0', '0', '1504772685', '1');
INSERT INTO `txht_category` VALUES ('52', '25', '居家安全', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170907/1504772396610664.png\" title=\"1504772396610664.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170906/01f141cb820e87980ff22a13ab6ef141.png', '0', '0', '1504772698', '1');
INSERT INTO `txht_category` VALUES ('53', '25', '校园安全教育馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170907/1504772418473349.png\" title=\"1504772418473349.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170906/a06b9956688066454e42da7ad57caeb1.png', '0', '0', '1504772709', '1');
INSERT INTO `txht_category` VALUES ('54', '25', '消防体验馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170907/1504772445100844.png\" title=\"1504772445100844.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170906/80def488e8bd0aba5e6a90dc9801f8d9.png', '0', '0', '1504772721', '1');
INSERT INTO `txht_category` VALUES ('55', '25', '消防体验馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170907/1504772466710583.png\" title=\"1504772466710583.png\" alt=\"fw01.png\"/></p>', '0', '/uploads/20170906/27f36c269fc7e1eea3eead5b85f23926.png', '0', '0', '1504772737', '1');
INSERT INTO `txht_category` VALUES ('56', '26', '人民人防', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834342124120.png\" title=\"1504834342124120.png\" alt=\"fw01.png\"/></p>', '6', '/uploads/20170906/7c90f5d0c74cd5e260e0fd7547c0424a.png', '0', '0', '1504834344', '1');
INSERT INTO `txht_category` VALUES ('57', '26', '自然灾害', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834320106077.png\" title=\"1504834320106077.png\" alt=\"fw01.png\"/></p>', '7', '/uploads/20170906/81405cf59dd8ffa51330618cc442cacf.png', '0', '0', '1504834322', '1');
INSERT INTO `txht_category` VALUES ('58', '26', '用电安全', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834300137701.png\" title=\"1504834300137701.png\" alt=\"fw01.png\"/></p>', '8', '/uploads/20170906/1339aa563da9f20b0d5150550892adc0.png', '0', '0', '1504834302', '1');
INSERT INTO `txht_category` VALUES ('59', '26', '校园安全', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504834259123582.png\" title=\"1504834259123582.png\" alt=\"fw01.png\"/></p>', '5', '/uploads/20170906/3de4406f1c08fe2a2a46e648e04ef094.png', '0', '0', '1504834260', '1');
INSERT INTO `txht_category` VALUES ('61', '28', '德州市公共安全教育馆', '1', null, 'pic', '', '', '', null, '0', '/uploads/20170906/57475015f48d3566c06641440c80a803.png', '0', '0', '1504669192', '-1');
INSERT INTO `txht_category` VALUES ('62', '28', '大兴区公共安全教育基地', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504856639104352.png\" title=\"1504856639104352.png\" alt=\"case2.png\"/></p>', '0', '/uploads/20170906/ba14e59a51f5536b62788265fea07f17.png', '0', '0', '1504856642', '1');
INSERT INTO `txht_category` VALUES ('63', '28', '东地区青少年活动中心', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504856598852932.png\" title=\"1504856598852932.png\" alt=\"case2.png\"/></p>', '0', '/uploads/20170906/d3e88a95381d116aabff8980e9dc1bdb.png', '0', '0', '1504856600', '1');
INSERT INTO `txht_category` VALUES ('64', '28', '凤翔县消防科普教育基地', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504856672918857.png\" title=\"1504856672918857.png\" alt=\"case4.png\"/></p>', '0', '/uploads/20170908/c67a63dae3f341ba76a6837e3dccad09.png', '0', '0', '1504856674', '1');
INSERT INTO `txht_category` VALUES ('65', '28', '重庆金渝安全教育体验馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504856695751377.png\" title=\"1504856695751377.png\" alt=\"case5.png\"/></p>', '0', '/uploads/20170906/cb08c11901b9669b3b1d481126b940a9.png', '0', '0', '1504856697', '1');
INSERT INTO `txht_category` VALUES ('66', '28', '德州市公共安全教育馆', '1', null, 'pic', '', '', '', null, '10', '/uploads/20170906/c781f444a672b4aae2f05bc81dea9ae9.png', '0', '0', '1504677015', '-1');
INSERT INTO `txht_category` VALUES ('67', '28', '德州市公共安全教育馆', '1', null, 'pic', '', '', '', '<p><img src=\"/ueditor/php/upload/image/20170908/1504856718673576.png\" title=\"1504856718673576.png\" alt=\"case1.png\"/></p>', '50', '/uploads/20170906/c781f444a672b4aae2f05bc81dea9ae9.png', '0', '0', '1504856720', '1');
INSERT INTO `txht_category` VALUES ('68', '32', '品牌轮播', '1', null, 'pic', '', '', '', null, '0', '', '0', '0', '1504767602', '1');
INSERT INTO `txht_category` VALUES ('69', '27', '新闻案例', '1', null, 'news', '', '', '', null, '0', '', '0', '0', '1504751737', '1');
INSERT INTO `txht_category` VALUES ('70', '31', '联系我们', '1', null, 'content', '', '', '联系我们联系我们联系我们联系我们联系我们联系我们', '<p>联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们</p>', '0', '', '0', '0', '1504764469', '1');
INSERT INTO `txht_category` VALUES ('71', '31', '人才招聘', '1', null, 'content', '', '', '人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘', '<p>人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘人才招聘</p>', '0', '', '0', '0', '1504764514', '1');
INSERT INTO `txht_category` VALUES ('72', '32', '服务领域轮播', '1', null, 'pic', '', '', '', null, '0', '', '0', '0', '1504768233', '1');
INSERT INTO `txht_category` VALUES ('73', '32', '服务领域轮播', '1', null, 'content', '', '', '', null, '0', '', '0', '0', '1504768032', '-1');
INSERT INTO `txht_category` VALUES ('74', '32', '公司动态轮播', '1', null, 'pic', '', '', '', null, '0', '', '0', '0', '1504768264', '1');
INSERT INTO `txht_category` VALUES ('75', '32', '精品案例轮播', '1', null, 'pic', '', '', '', null, '0', '', '0', '0', '1504768278', '1');
INSERT INTO `txht_category` VALUES ('76', '32', '精品案例轮播', '1', null, 'pic', '', '', '', null, '0', '', '0', '0', '1504768214', '-1');
INSERT INTO `txht_category` VALUES ('77', '32', '联系我们轮播', '1', null, 'pic', '', '', '', null, '0', '', '0', '0', '1504768332', '1');

-- ----------------------------
-- Table structure for txht_config
-- ----------------------------
DROP TABLE IF EXISTS `txht_config`;
CREATE TABLE `txht_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `k` varchar(255) DEFAULT NULL,
  `v` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_config
-- ----------------------------
INSERT INTO `txht_config` VALUES ('1', 'site_name', '盛世民安');
INSERT INTO `txht_config` VALUES ('2', 'site_title', '盛世民安');
INSERT INTO `txht_config` VALUES ('3', 'description', '盛世民安');
INSERT INTO `txht_config` VALUES ('4', 'keywords', '盛世民安');
INSERT INTO `txht_config` VALUES ('5', 'site_qq', '2264517956 ');
INSERT INTO `txht_config` VALUES ('6', 'site_close', '0');
INSERT INTO `txht_config` VALUES ('7', 'site_close_content', '关站原因');
INSERT INTO `txht_config` VALUES ('8', 'site_logo', '/uploads/20170905/380ca5efbb3aa148d043f3233128892b.png');
INSERT INTO `txht_config` VALUES ('9', 'site_tel', '18910754206');
INSERT INTO `txht_config` VALUES ('10', 'site_address', '北京大兴亦庄经济开发区（BDA企业大道）景园北街2号院66号楼');
INSERT INTO `txht_config` VALUES ('11', 'site_email', 'bjssma@139.com');
INSERT INTO `txht_config` VALUES ('12', 'site_contacter', 'xx先生');
INSERT INTO `txht_config` VALUES ('13', 'site_shouji', '©copyright 2017 盛世民安 版权所有 京ICP备00177338号');
INSERT INTO `txht_config` VALUES ('14', 'site_wangzhi', '天下互通');
INSERT INTO `txht_config` VALUES ('15', 'site_jishu', '©copyright 2017 盛世民安 版权所有 京ICP备00177338号');
INSERT INTO `txht_config` VALUES ('16', 'site_copyright', '©copyright 2017 盛世民安 版权所有 京ICP备00177338号');

-- ----------------------------
-- Table structure for txht_goods
-- ----------------------------
DROP TABLE IF EXISTS `txht_goods`;
CREATE TABLE `txht_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL COMMENT '产品所属分类的id',
  `keywords` longtext,
  `is_top` tinyint(1) DEFAULT NULL COMMENT '产品重要性',
  `introduce` longtext COMMENT '产品简单介绍',
  `price` float(10,2) DEFAULT NULL COMMENT '产品价格',
  `pic` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '状态值，-1代表已被删除',
  `add_time` bigint(20) DEFAULT NULL COMMENT '添加时间',
  `content` longtext COMMENT '产品详情',
  `model` varchar(255) DEFAULT NULL COMMENT '产品型号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_goods
-- ----------------------------

-- ----------------------------
-- Table structure for txht_link
-- ----------------------------
DROP TABLE IF EXISTS `txht_link`;
CREATE TABLE `txht_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(1) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `exp_time` bigint(12) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_link
-- ----------------------------
INSERT INTO `txht_link` VALUES ('1', '35', 'http://www.ifeng.com/', '凤凰网', '/uploads/20170613/ade50a6adb220a5ff04e6ba7a8ff29c9.png', null, null, '1559809440', null, null, '-1');
INSERT INTO `txht_link` VALUES ('2', '35', 'http://www.cctv7.com/', 'cctv7', '/uploads/20170905/0d03d9ba5147ebdfbfe9f1252b5183ad.jpg', null, null, '1565247120', null, null, '1');

-- ----------------------------
-- Table structure for txht_lyb
-- ----------------------------
DROP TABLE IF EXISTS `txht_lyb`;
CREATE TABLE `txht_lyb` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL COMMENT '留言展示标题',
  `reply` longtext,
  `status` tinyint(1) DEFAULT NULL,
  `content` longtext,
  `add_time` bigint(20) DEFAULT NULL COMMENT '留言时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_lyb
-- ----------------------------
INSERT INTO `txht_lyb` VALUES ('1', '打的', null, null, null, null, '1', '阿斯达萨达阿斯达', '1503038518');
INSERT INTO `txht_lyb` VALUES ('2', '阿斯达', '11@qq.com', null, null, null, null, '打啊打的', '1504678080');
INSERT INTO `txht_lyb` VALUES ('3', '岸上', '11@qq.com', null, null, null, '1', '萨达', '1504679587');

-- ----------------------------
-- Table structure for txht_member
-- ----------------------------
DROP TABLE IF EXISTS `txht_member`;
CREATE TABLE `txht_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL COMMENT '密码',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `tel` varchar(30) DEFAULT NULL COMMENT '电话',
  `add_time` bigint(20) DEFAULT NULL COMMENT '添加时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1正常，0冻结，-1删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_member
-- ----------------------------

-- ----------------------------
-- Table structure for txht_pic
-- ----------------------------
DROP TABLE IF EXISTS `txht_pic`;
CREATE TABLE `txht_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `is_top` tinyint(1) DEFAULT '0',
  `keywords` longtext,
  `description` longtext,
  `pic` varchar(255) DEFAULT NULL,
  `view` varchar(255) DEFAULT NULL,
  `content` longtext,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_pic
-- ----------------------------
INSERT INTO `txht_pic` VALUES ('1', '33', '盛世民安首页轮播1', '0', '', '消费体验馆打破了以往传播消防知识的常规，不再像以前那样仅仅依靠书来传播消防安全，消防体验馆中有各样的灭火排设备，还有VR虚拟现实技术，完美还原火灾现场，让体验者了解 ，感受火灾的危害，学会火灾逃生自救技巧。', '/uploads/20170905/6620cbdde4395fd2c2349fac9373cf58.png', null, '', '1');
INSERT INTO `txht_pic` VALUES ('2', '33', '盛世民安首页轮播2', '0', '', '消费体验馆打破了以往传播消防知识的常规，不再像以前那样仅仅依靠书来传播消防安全，消防体验馆中有各样的灭火排设备，还有VR虚拟现实技术，完美还原火灾现场，让体验者了解 ，感受火灾的危害，学会火灾逃生自救技巧。', '/uploads/20170905/fddf93e99b8f7476cc5799b143162e34.png', null, null, '1');
INSERT INTO `txht_pic` VALUES ('3', '33', '盛世民安首页轮播3', '0', '', '消费体验馆打破了以往传播消防知识的常规，不再像以前那样仅仅依靠书来传播消防安全，消防体验馆中有各样的灭火排设备，还有VR虚拟现实技术，完美还原火灾现场，让体验者了解 ，感受火灾的危害，学会火灾逃生自救技巧。', '/uploads/20170905/66c59bc5dfb8b03d7da68c0ce8c94675.png', null, null, '1');
INSERT INTO `txht_pic` VALUES ('4', '26', '虚拟场馆', '0', '', '虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍虚拟场馆介绍', '/uploads/20170905/851557ea99cf8e23df28ee4b4835152d.png', null, '', '-1');
INSERT INTO `txht_pic` VALUES ('5', '26', '虚拟地震', '0', '', '虚拟地震介绍虚拟地震介绍虚拟地震介绍虚拟地震介绍虚拟地震介绍虚拟地震介绍虚拟地震介绍虚拟地震介绍', '/uploads/20170905/e072834d2c6ae770e0acbc11e62e190d.png', null, null, '-1');
INSERT INTO `txht_pic` VALUES ('6', '26', '虚拟灭火', '0', '', '虚拟灭火介绍 虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍虚拟灭火介绍', '/uploads/20170905/3522bdd818bb2cfb0525300c77cfd37f.png', null, null, '-1');
INSERT INTO `txht_pic` VALUES ('7', '68', '品牌轮播', '0', '', '', '/uploads/20170906/ae86b059c3038bf116949ff51b2aeb5c.png', null, null, '1');
INSERT INTO `txht_pic` VALUES ('9', '27', '某某名师', '0', '', '', '/uploads/20170613/eb42fbb71570e22dca2e36a0f4f0f4f7.png', null, null, '-1');
INSERT INTO `txht_pic` VALUES ('10', '72', '服务领域轮播', '0', '', '', '/uploads/20170907/9b437d8f2f18130af74a454c4be0c7a4.png', null, null, '1');
INSERT INTO `txht_pic` VALUES ('11', '74', '公司动态', '0', '', '', '/uploads/20170907/5d77c2b5229251a2f679ff6450104ea0.png', null, null, '1');
INSERT INTO `txht_pic` VALUES ('12', '75', '精品案例', '0', '', '', '/uploads/20170907/1079c40b25116cb178bb4cbbe5b8d9ef.png', null, null, '1');
INSERT INTO `txht_pic` VALUES ('13', '77', '联系我们轮播', '0', '', '', '/uploads/20170907/84dc8d9ce871d93854ad6cf010bc235a.png', null, null, '1');
INSERT INTO `txht_pic` VALUES ('14', '51', '公共安全馆', '0', '', '', '', null, '<p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20170907/1504772842370890.png\" title=\"1504772842370890.png\" alt=\"fw01.png\"/></p><p>公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆公共安全馆</p>', '1');
INSERT INTO `txht_pic` VALUES ('15', '52', '居家安全', '0', '', '', '', null, '<p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20170907/1504772908501535.png\" title=\"1504772908501535.png\" alt=\"fw01.png\"/></p><p>居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全居家安全</p>', '1');
INSERT INTO `txht_pic` VALUES ('16', '53', '校园安全', '0', '', '', '', null, '<p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20170907/1504772975298941.png\" title=\"1504772975298941.png\" alt=\"fw01.png\"/></p><p>校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全校园安全</p>', '1');
INSERT INTO `txht_pic` VALUES ('17', '54', '消防体验馆1', '0', '', '', '', null, '<p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20170907/1504773032583984.png\" title=\"1504773032583984.png\" alt=\"fw01.png\"/></p><p>消防体验馆1消防体验馆1消防体验馆1消防体验馆1消防体验馆1消防体验馆1消防体验馆1消防体验馆1消防体验馆1消防体验馆1</p>', '1');
INSERT INTO `txht_pic` VALUES ('18', '55', '消防体验馆2', '0', '', '', '', null, '<p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20170907/1504773091334572.png\" title=\"1504773091334572.png\" alt=\"fw01.png\"/></p><p>消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2消防体验馆2</p>', '1');
INSERT INTO `txht_pic` VALUES ('19', '48', '虚拟场馆轮播1', '0', '', 'SS-XF-MH01', '/uploads/20170908/da002bc2c7ed55ef162c01df0ad333f8.png', '51', '<p style=\"text-align: left;\">设备概述：人类在同火魔做斗争的同时，灭火器扮演了不可缺少的一个角色。灭火器的种类五花八门，但其原理与用法大同小异。由于灭火器的特殊性，使用过灭火器的人并多，更多的则是日常经常见到，但没有用过。模拟灭火就是基于以上特点，专门为普通人提供灭火训练用器具，让人有一种身临其境感觉，同时训练其使用灭火器的技能，再遇到危险时能够临危不乱从容应对，将损失降到最低。模拟灭火就是专门为普通人提供灭火训练用器具，让人有一种身临其境感觉。<br/>组成结构：主要由工控主机、控制柜、传感器、投影、灭火器罐（改装）组成。<br/>模拟灭火的效果：虚拟现实技术模拟火灾场景，观众可亲身体验虚拟现实技术营造的逼真效果，并参与既惊险又刺激的灭火救灾活动，从而了解防火灭灾的有关知识，培养顽强毅志和勇敢精神。<br/>模拟场景：设备内置三到八种种场景，分别是油锅起火、垃圾桶起火、电脑起火等等，对应场景有居家、办公、厨房、卧室、工厂等等。当着火时拿起相对应的灭火器进</p>', '1');
INSERT INTO `txht_pic` VALUES ('21', '48', '虚拟场馆轮播2', '0', '', 'SS-XF-MH02', '/uploads/20170908/376fdfbc232f72aeb95e70d7997c8466.png', '51', '<p>大大大是的撒大大是的撒啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊大大大是的撒大大是的撒啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊大大大是的撒大大是的撒啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊大大大是的撒大大是的撒啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊大大大是的撒大大是的撒啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊大大大是的撒大大是的撒啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊大大大是的撒大大是的撒啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>', '1');
INSERT INTO `txht_pic` VALUES ('22', '48', '虚拟场馆轮播3', '0', '', 'SS-XF-MH03', '/uploads/20170908/2092eb66aaebde1e7a1a5e2c592fc91f.png', '51', '<p>虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3虚拟场馆轮播3</p>', '1');
INSERT INTO `txht_pic` VALUES ('23', '48', '虚拟场馆轮播4', '0', '', 'SS-XF-MH04', '/uploads/20170908/2092eb66aaebde1e7a1a5e2c592fc91f.png', '51', '<p>虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4虚拟场馆4</p>', '1');

-- ----------------------------
-- Table structure for txht_users
-- ----------------------------
DROP TABLE IF EXISTS `txht_users`;
CREATE TABLE `txht_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `sms_num` int(11) DEFAULT '5' COMMENT '默认送5条',
  `send_num` int(11) DEFAULT '0' COMMENT '已经发送条数',
  `money` decimal(11,2) DEFAULT '0.00' COMMENT '已充值货币数',
  `face_url` varchar(255) DEFAULT NULL,
  `login_ip` varchar(255) DEFAULT NULL,
  `login_time` bigint(12) DEFAULT NULL,
  `reg_time` bigint(12) DEFAULT NULL,
  `content` longtext,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of txht_users
-- ----------------------------
INSERT INTO `txht_users` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', null, '5', '0', '0.00', null, '127.0.0.1', '1504833402', null, null, '1');
INSERT INTO `txht_users` VALUES ('6', 'txht', '21232f297a57a5a743894a0e4a801fc3', null, '5', '0', '0.00', null, '0.0.0.0', '1476266510', null, null, '1');
INSERT INTO `txht_users` VALUES ('7', '德玛西亚', '21232f297a57a5a743894a0e4a801fc3', null, '5', '0', '0.00', null, null, null, null, null, '1');
