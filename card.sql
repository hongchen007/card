/*
Navicat MySQL Data Transfer

Source Server         : link
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : card

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-09-13 02:04:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `weixin` varchar(255) DEFAULT NULL COMMENT '客服微信',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('1', '吕老板');
INSERT INTO `about` VALUES ('4', '苏总');

-- ----------------------------
-- Table structure for access_tokenvalue
-- ----------------------------
DROP TABLE IF EXISTS `access_tokenvalue`;
CREATE TABLE `access_tokenvalue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `access_token` text,
  `expire_time` varchar(100) DEFAULT NULL COMMENT 'access_token过期时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of access_tokenvalue
-- ----------------------------
INSERT INTO `access_tokenvalue` VALUES ('189', 'diprK94InFtUPWrGUpuGzB2HoYye5G7JEwPeg3dE0nvi1oqhsxLEVrlL5IkzibRZ5YjQcs7y4Ilxcwolg7GoXrQHQPK_vOxw71NsJ_OZXtadmeiorIk2mXwN3dmFmYKfFFSeAJAZZM', '1504849681');
INSERT INTO `access_tokenvalue` VALUES ('188', 'TqXb1yJPwRBCsDx-HJZX20FS2DCwwkAG3IT6r6MGmpY9hI3CLG8dOUAY7DixzPZDY_HmAPLRUaZADUvE4Gzs91D_uttwXMtABsnHEd0aSpH_lzB7ocKnLjZvMTBxorEQGNGgAFATAT', '1504842472');
INSERT INTO `access_tokenvalue` VALUES ('190', 'iu0lOj8TE9mmh0Rr_xkueVmziOGu9xhGo-cTcb64Z-5a4DuAxbt1HBoiWlFSGAgD_st1WLbrnagCtwiQvpu8veAjWirl4K7YyC_aF83Ru3mqxUX-4IWTeNvKj5f1o72VVGTaAAANYL', '1504856748');
INSERT INTO `access_tokenvalue` VALUES ('191', 'uxYx7SNqRQJQL7AE-ixs0PD82Aq8zTDNrDDWQqwLMl9znQlBHmtlfnpmIqX-v9EdZHsd3cUCw1IzgAy167zEVrhHQi224Jos716qipy5FPbjD2DsaCuopo-FZMEZMGxjVSLaACAGDW', '1504871085');
INSERT INTO `access_tokenvalue` VALUES ('192', 'KVyguvtAl73DBDI_HTQaoy0nAu79DBL-tKUcGCHgRd8QCCjLdNGTPwqDBQ6G7Ryay--3rM1crWLHTVdY9D44LKrOgLxUAYgnKQINY0gkNg97YzBRy2xfTN1oQipJuLBkIQEaABAYGU', '1504886476');
INSERT INTO `access_tokenvalue` VALUES ('193', null, '1504928958');
INSERT INTO `access_tokenvalue` VALUES ('194', 'oBggnR5PGi1J5Pw8uBMHEbwMZJ1Vx6RrI4nmyCBhPSICGWYi-dNvAL6-1F_CmIiRS844JBEZJ4c5Lr-lsx8ERoPmbA3Ro-qOZlphGT--Ir8MLPbAEATSW', '1504929160');
INSERT INTO `access_tokenvalue` VALUES ('195', 'I2ZtG2-IKTmUW-Q9MQjg0HxzBWScMP2M4TwqsVLmHExeEULmH9ATL4C5UCq0hqb-RrRdCqbnSNRs47YJZ8g72Pd389ZC2q3VvzjvZE68BoDwiBn6BN4AQDE-kri0-7gSPVHhAGACIU', '1504940499');
INSERT INTO `access_tokenvalue` VALUES ('196', 'kZ3y0Q8fm1-NtSJc1GDoR_5aAGSegX4sdj10Y-72b1FRjP04qtXpXMhttUmx8vvN5IUobxc5tHd-vYUkDSxdhGJwS7A1Kt4RRkVa5FrGB9Tc5fKSu9pSpMvLUF9aRDofRTAgABALNU', '1504966678');
INSERT INTO `access_tokenvalue` VALUES ('197', 'pXv-Eo5FiBESCkc5UV-306FMr0ERyTGhrhcYua_aE2OB6k_MOLcLJU5WOdQ33_JtNCZN7jmF84be4LvVkyvm0asq654MS8U0KXOLtRI1QbXusYM7ibCUyeh3qe__R8FSZPQdABAJZA', '1505013433');
INSERT INTO `access_tokenvalue` VALUES ('198', 'fTkdMj20JozWcmZHRB2XrCJcfkiFjXxM6EetWfnhfTFiviuDNd-CkQCtdgMJ5XX0faWaZRViIJV5u3CcCwpuKXNdhHv61OS_QGwZPKzfp4-DILnFVdL-jgaJmkH4_5n3UZOhAFAKPE', '1505020503');
INSERT INTO `access_tokenvalue` VALUES ('199', '0K3XehFkRcd2rV3i1XdKj65jQy1i9tffmv8z2JswFKssiK4UeJe9ulCbDjhGvcX3mlYPiQ6yhDCg3QZ6OtvGeBTa3Lt0vpLpR9-_mxFq9dwPPe2q-G_lpcrqAI-wIjT4DCHaAAASRW', '1505027799');
INSERT INTO `access_tokenvalue` VALUES ('200', 'i0REqMgBObsBr6DSNHH1mQI8FCjp_4EgMonYptKPq6k3hQM610_mN-pgfsvTFwUNZIzt4IS5wuEts2-zYj-YnFraPYdEuKMfWqFxM9ztKOOWylAktDzszfMulOTSxe91AGAhAAADJD', '1505039116');
INSERT INTO `access_tokenvalue` VALUES ('201', 'vi4xjI_I6D-Y8f-usLIOx2Iy_nlAgBU1ZYjpYHEC4EvpiL4gz3JTWKizlrPIrMnw7dj09uuNRD-IfbDLfqQDlWAjbgsoE69-fwaPKEZIO0HvtHSZ4O20gGQpifY7lqCtNVQiAJAVDY', '1505051549');
INSERT INTO `access_tokenvalue` VALUES ('202', 'KCPK_TO3AzeyLSfOLt0Zq1BICb5aWqfcUS5QIN9s1wSV-cr02nVd7LAyjsZDbYPprlqeXUbIMESrwUqTbk8Fb9IsX-dq7d6bcUm0TJejRi3-5A1-lJcDfLawQHxSFWDSPCSbAJATGW', '1505058692');
INSERT INTO `access_tokenvalue` VALUES ('203', 'AHMjXKHN2Q30UMzB52Ot1h3UI0i2b87WKDp9UlfiHLXlOsywAxXD0i9fuyR23Zx5Ice3Jp-uCc1TRcFp8lmrSMuRw5S1CVbop9Z7tghD8mn4daQapBpETFVKvsyfKHavGVRaAIAPEA', '1505066159');
INSERT INTO `access_tokenvalue` VALUES ('204', null, '1505100678');
INSERT INTO `access_tokenvalue` VALUES ('205', null, '1505101124');
INSERT INTO `access_tokenvalue` VALUES ('206', null, '1505102562');
INSERT INTO `access_tokenvalue` VALUES ('207', null, '1505102572');
INSERT INTO `access_tokenvalue` VALUES ('208', null, '1505104056');
INSERT INTO `access_tokenvalue` VALUES ('209', null, '1505104556');
INSERT INTO `access_tokenvalue` VALUES ('210', null, '1505105516');
INSERT INTO `access_tokenvalue` VALUES ('211', null, '1505105579');
INSERT INTO `access_tokenvalue` VALUES ('212', null, '1505105586');
INSERT INTO `access_tokenvalue` VALUES ('213', null, '1505105600');
INSERT INTO `access_tokenvalue` VALUES ('214', null, '1505105606');
INSERT INTO `access_tokenvalue` VALUES ('215', null, '1505113203');
INSERT INTO `access_tokenvalue` VALUES ('216', null, '1505114698');
INSERT INTO `access_tokenvalue` VALUES ('217', null, '1505114887');
INSERT INTO `access_tokenvalue` VALUES ('218', null, '1505115046');
INSERT INTO `access_tokenvalue` VALUES ('219', null, '1505115051');
INSERT INTO `access_tokenvalue` VALUES ('220', null, '1505116011');
INSERT INTO `access_tokenvalue` VALUES ('221', null, '1505116195');
INSERT INTO `access_tokenvalue` VALUES ('222', null, '1505116238');
INSERT INTO `access_tokenvalue` VALUES ('223', null, '1505116244');
INSERT INTO `access_tokenvalue` VALUES ('224', null, '1505116308');
INSERT INTO `access_tokenvalue` VALUES ('225', null, '1505116336');
INSERT INTO `access_tokenvalue` VALUES ('226', null, '1505116373');
INSERT INTO `access_tokenvalue` VALUES ('227', null, '1505116378');
INSERT INTO `access_tokenvalue` VALUES ('228', null, '1505116383');
INSERT INTO `access_tokenvalue` VALUES ('229', null, '1505116398');
INSERT INTO `access_tokenvalue` VALUES ('230', null, '1505116401');
INSERT INTO `access_tokenvalue` VALUES ('231', null, '1505116405');
INSERT INTO `access_tokenvalue` VALUES ('232', null, '1505116424');
INSERT INTO `access_tokenvalue` VALUES ('233', null, '1505116435');
INSERT INTO `access_tokenvalue` VALUES ('234', null, '1505116441');
INSERT INTO `access_tokenvalue` VALUES ('235', null, '1505116496');
INSERT INTO `access_tokenvalue` VALUES ('236', '5xQvCM5nRCBotOkk7tFqHAaeXZVoFmnd34RZXF5OYGzaAoCDAPqg1mSoYlKrZl1NwsYta1EGQc35lLgxRh8EIBSQfsi2PugymDEW8CEvG5yRmpxW5uWuLgAKdtTPiJauLKGiAFACBX', '1505116559');
INSERT INTO `access_tokenvalue` VALUES ('237', 'Ia9BBr2UjSO8mS1p3EiQy0t9q9xpl1FWez95gQwzQ7dWMqb2ursLSUBC3TIdBKlIKIAwOHehkyBXnazVCV8bImO0eElTwjGnlXvsgK3UyTXFO-AzNjJhxkWbUt-3zF0EOKScAEAHDL', '1505129351');
INSERT INTO `access_tokenvalue` VALUES ('238', 'Ia9BBr2UjSO8mS1p3EiQy39hIP0UbwE7sLt0hRYcWi2W8HoIF5lQ--4Bd9BdkhcfH099RCkp9hYKrIO5WZov9qukPHhuS4w2Pg22uk2w-m9hpZ3OeWGw9vC3fZabr6XBEVJiABAPGU', '1505188078');
INSERT INTO `access_tokenvalue` VALUES ('239', 'LIXOMyU4pGesyGe1rm0LEyF8wa17XpswwC5Cb3er0w2yoPtD-3DrSvHgsdBIYh6AhcG0oJMihOPlJ7iSXPbqTCvI1vxT5w0ezWAV2iwnszcLVwoWLNOTbRhZhgNIVgYWUCHhAIAMUZ', '1505203225');
INSERT INTO `access_tokenvalue` VALUES ('240', 'vi4xjI_I6D-Y8f-usLIOxzJz1rwR2KPyIpuip3ZAJb6JP7VzyL0p54jJZRGkLlZJpfzteJlcYAJNrBJ3ZeiCTDRRsW9JlJjFra3RpraE5JMT-4d1WxMJdnkYLM7QECkKKEXaADAZTM', '1505210233');
INSERT INTO `access_tokenvalue` VALUES ('241', 'TUfOcpYZIEn_lwpLdea5qUpA0feg1E0SPYdfc8Y7ORRt_EHqTC1NU9xw1B5FwhrQYDbFAHLntvGeTB8oyXHB-pRXkceIa4apq9gHYpp9qDReulCpqHpb6ZHB8ZaH4JE6ZDRgAJAHLZ', '1505217872');
INSERT INTO `access_tokenvalue` VALUES ('242', '7FA-2HfPHCsOl4O2j-Q2bY24AilRniLLF-JKoqnwoTSbdOg5VH4rG3bZUn6o9A5JHpf8LcgKZQwN5JDk0V4CcpD8mO4QzLOUqBH99IY64SH2HjjKNzGFYdvm1NV57VttCLXbABAPYK', '1505225931');
INSERT INTO `access_tokenvalue` VALUES ('243', 'ZXUAna5U6rEsaZEmrRyEY5X4VXaPD-GjPN-XHqZNDPDADt1Sk7YFGjUwfWZ9vB9smBXDZ-s5FJy11y7dz6lsPuR3p_wo3kOkH-FdKvmNOlaomS_Liect82-2tJYbHzruDRAfADAWKT', '1505233433');

-- ----------------------------
-- Table structure for article_card
-- ----------------------------
DROP TABLE IF EXISTS `article_card`;
CREATE TABLE `article_card` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COMMENT '信用卡知识文章',
  `addtime` datetime DEFAULT NULL,
  `classes` tinyint(4) DEFAULT '2' COMMENT '状态 1显示 2禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_card
-- ----------------------------
INSERT INTO `article_card` VALUES ('1', '信用卡产业是传统金融业务与现代信息技术有机结合的新兴产业,在国际上已经发展成为一个庞大的产业体系,并且保持着较高的增长速度。真正意义上的国际标准信用卡自2003年在内地获得了快速发展,发卡量从2003年初的100多万张猛增至2003年底的400万张。目前,我国信用卡发卡量已突破2000万张,发展势头良好。信用卡的消费信贷功能在解决持卡人临时资金短缺、提高即时购买力、满足大众消费信贷需要等方面有着得天独厚的优势。近几年来,内地信用卡业务的外部发展环境逐渐完善,“金卡”、“金网”工程建设加快,银行卡商户受理范围逐步扩大,政府相继出台扶持内地银行卡产业的相关政策,并加大了对信用卡犯罪的打击力度,人民银行牵头启动的个人征信体系也已逐步投入使用。发展信用卡产业有利于调整和改善银行资产结构。信用卡业务是国外大型商业银行的主要盈利来源之一,净资产回报率普遍高出传统信贷业务一倍以上,获利空间巨大。因此,内地商业银行应大力发展信用卡业务。相对于传统银行业务,信用卡业务具有高成长、高盈利、客户群体庞大、发展前景广阔的特点。', '2017-06-28 14:27:54', '2');
INSERT INTO `article_card` VALUES ('2', 'aserfsdfSFD', '2017-06-28 16:05:08', '2');

-- ----------------------------
-- Table structure for article_fin
-- ----------------------------
DROP TABLE IF EXISTS `article_fin`;
CREATE TABLE `article_fin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COMMENT '金融理财知识文章',
  `addtime` datetime DEFAULT NULL,
  `classes` tinyint(4) DEFAULT '2' COMMENT '状态 1显示 2禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_fin
-- ----------------------------
INSERT INTO `article_fin` VALUES ('1', '底什么是个人理财呢？个人理财就是通过对财务资源的适当管理来实现个人生活目标的一个过程，是一个为实现整体理财目标设计的统一的互相协调的计划。这个计划非常长，有三个核心意思：第一，财务资源，要清楚自己的财务资源有哪些；第二，生活目标，要对自己的生活目标有清醒的认识；第三，要有一系列统一协调的计划，要保证所有的计划不会冲突，协调起来都能够实现。核心内容就包括保险计划、投资计划、教育计划、所得税计划、退休计划、房产计划。用现金流的管理把所有的计划综合在一起，协调所有的计划，并让所有的计划都能够满足你的现金流，这就是个人理财的核心内容。', '2017-06-28 15:50:00', '2');

-- ----------------------------
-- Table structure for article_genera
-- ----------------------------
DROP TABLE IF EXISTS `article_genera`;
CREATE TABLE `article_genera` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COMMENT '推广须知 ',
  `addtime` datetime DEFAULT NULL,
  `classes` tinyint(4) DEFAULT '2' COMMENT '状态 1显示 2禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_genera
-- ----------------------------
INSERT INTO `article_genera` VALUES ('2', '    推广须知有甲方提供\r\n    1、集合提供全网贷款、信用卡办理通道，为会员提供自助申请办理平台。\r\n    为会员节省筹款时间\r\n    为会员节省金融中介相关费用\r\n    为会员节省购买市面金融一体机费用\r\n    2、整理适合个人理财、信用卡使用等相关金融知识与会员分享学习。\r\n    帮助会员提高金融理财相关知识\r\n    帮助会员提高金融风险防范知识\r\n    帮助会员提高个人贷款、信用卡使用知识\r\n    3、借助互联网发展趋势，为会员提供兼职赚钱机会，实现平台与会员互惠共赢。\r\n    为会员提供金融相关知识及金融平台\r\n    为会员提供管理规范、客源充足的销售平台\r\n    为会员提供货真价实、物美价廉的购物平台\r\n    （采用三级分销模式，佣金实行当天 、秒结）\r\n    1、88元注册银卡会员，推广会员注册得56元推广费用\r\n    2、388元注册金卡会员，公司赠送0.5%-0.65%移动刷卡软件，一级会员得136元（如银卡会员升级得80元），二级会员得56元，三级会员得96元\r\n    所有推广返利均是秒结算，剩余费用转入公司账户\r\n    会员帮助平台提升市场知名度', '2017-06-28 16:18:22', '2');

-- ----------------------------
-- Table structure for article_new
-- ----------------------------
DROP TABLE IF EXISTS `article_new`;
CREATE TABLE `article_new` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COMMENT '新手帮助',
  `addtime` datetime DEFAULT NULL,
  `classes` tinyint(4) DEFAULT '2' COMMENT '状态 1显示 2禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_new
-- ----------------------------

-- ----------------------------
-- Table structure for case
-- ----------------------------
DROP TABLE IF EXISTS `case`;
CREATE TABLE `case` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `content` text COMMENT '案例',
  `title` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of case
-- ----------------------------
INSERT INTO `case` VALUES ('2', null, '小时妈妈对我讲，大海就是我故乡； ', '坤坤的故事123', '2017-07-06 23:31:35');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL COMMENT '商户ID',
  `name` varchar(100) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `price` double(11,2) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `state` tinyint(4) DEFAULT '1' COMMENT '商品的状态   1新添加  2在售   3下架',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '55', '金卡', '2017-07-08/59609ef3d2348.png', '公司赠送0.5%-0.65%移动刷卡软件', '0.03', '2017-07-08 16:59:31', '1');
INSERT INTO `goods` VALUES ('2', '55', '银卡', '2017-07-08/59609f2a445c0.png', '推广会员注册得60%元推广费用', '0.01', '2017-07-08 17:00:26', '1');
INSERT INTO `goods` VALUES ('3', null, '补卡', '2017-09-08/59b2acc007f58.png', '厉害了', '0.02', '2017-09-08 22:44:16', '1');

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(50) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('4', '农行', 'http://www.abchina.com/cn/CreditCard/11', '2017-06-29/59545216c5e75.jpg', '2017-06-29 09:04:22');
INSERT INTO `link` VALUES ('5', '农行12', 'http://www.abchina.com/cn/CreditCard/adkjhk', '2017-06-29/595459d2d6fe5.jpg', '2017-06-29 09:05:56');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `des` text,
  `money` double(11,2) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `ordernum` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('58', '1', '76', null, null, null, '0.01', '2017-09-08 17:56:00', '12312207020170908175402');
INSERT INTO `order` VALUES ('59', '1', '76', '', '', '', '0.01', '2017-09-09 17:56:00', '12312207020170908175402');
INSERT INTO `order` VALUES ('60', '1', '76', '', '', '', '0.01', '2017-09-10 17:56:00', '12312207020170908175402');
INSERT INTO `order` VALUES ('61', '1', '76', '', '', '', '0.01', '2017-09-11 17:56:00', '12312207020170908175402');
INSERT INTO `order` VALUES ('74', '2', '76', null, null, null, '0.01', '2017-09-09 14:57:09', '12358487920170909145642');
INSERT INTO `order` VALUES ('75', '2', '76', null, null, null, '0.01', '2017-09-13 00:14:27', '12379673920170913001415');
INSERT INTO `order` VALUES ('76', '2', '76', null, null, null, '0.01', '2017-09-13 00:22:35', '12398600220170913002227');
INSERT INTO `order` VALUES ('77', '2', '76', null, null, null, '0.01', '2017-09-13 00:28:40', '12330916320170913002831');

-- ----------------------------
-- Table structure for pro
-- ----------------------------
DROP TABLE IF EXISTS `pro`;
CREATE TABLE `pro` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sum_pro` varchar(4) DEFAULT NULL COMMENT '总佣金比例',
  `one_pro` varchar(4) DEFAULT NULL COMMENT '一级佣金比例',
  `two_pro` varchar(4) DEFAULT NULL COMMENT '二级佣金比例',
  `three_pro` varchar(4) DEFAULT NULL COMMENT '三级佣金比例',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pro
-- ----------------------------

-- ----------------------------
-- Table structure for recode
-- ----------------------------
DROP TABLE IF EXISTS `recode`;
CREATE TABLE `recode` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `money` double(11,2) DEFAULT NULL,
  `des` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '什么事情',
  `grade` int(11) DEFAULT NULL COMMENT '1 申请提现 2提现成功\r\n 3提现失败',
  `addtime` datetime DEFAULT NULL,
  `openid` text CHARACTER SET utf8,
  `zfb` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '支付宝账户',
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cardnum` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '银行卡号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of recode
-- ----------------------------
INSERT INTO `recode` VALUES ('19', '76', '1.00', null, '2', '2017-09-07 11:45:02', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', '123', null, null);
INSERT INTO `recode` VALUES ('20', '76', '1.00', null, '3', '2017-09-07 14:48:18', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', null, 'ghh', '123456789987654321');
INSERT INTO `recode` VALUES ('21', '76', '2.00', null, '1', '2017-09-07 16:07:46', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', null, '123', '123456789987654321');
INSERT INTO `recode` VALUES ('22', '79', '2.00', '', '3', '2017-09-07 16:07:46', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', '', '123', '123456789987654321');
INSERT INTO `recode` VALUES ('23', '79', '2.00', '', '2', '2017-09-07 16:07:46', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', '', '123', '123456789987654321');
INSERT INTO `recode` VALUES ('24', '79', '2.00', '', '1', '2017-09-07 16:07:46', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', '', '123', '123456789987654321');
INSERT INTO `recode` VALUES ('25', '79', '2.00', '', '4', '2017-09-07 16:07:46', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', '', '', '');
INSERT INTO `recode` VALUES ('56', '76', '127.80', null, '4', '2017-09-11 14:04:07', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', null, null, null);
INSERT INTO `recode` VALUES ('57', '75', '149.00', null, '4', '2017-09-11 14:04:07', null, null, null, null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login_pwd` varchar(100) DEFAULT NULL,
  `pid` int(11) DEFAULT '1' COMMENT '推荐人的id',
  `grade` tinyint(4) DEFAULT '1' COMMENT '会员的等级  默认 1银卡会员  2钻石会员  11超级管理员',
  `state` tinyint(4) DEFAULT '1' COMMENT '账号状态 1正常 2冻结',
  `name` varchar(50) DEFAULT NULL COMMENT '会员名称',
  `wechat_name` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `head_pic` varchar(255) DEFAULT NULL,
  `atten_time` datetime DEFAULT NULL COMMENT '关注时间',
  `money` int(11) DEFAULT '0',
  `weixin_openid` varchar(255) DEFAULT NULL,
  `random` varchar(100) DEFAULT NULL COMMENT '随机数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'e10adc3949ba59abbe56e057f20f883e', '0', '11', '1', 'admin', 'hongchen', '15638861289', null, '', '2017-00-25 00:00:00', '10000', 'oFWn3w-FOrOP-XUzMkUL8alC-kr4', null);
INSERT INTO `user` VALUES ('6', 'e10adc3949ba59abbe56e057f20f883e', '3', '2', '1', '444444', 'hongchen3', '', '', '', '2017-06-28 22:54:52', '0', 'oFWn3w2Wkw2m2UMdiJlaKP7jc7pU', null);
INSERT INTO `user` VALUES ('5', 'e10adc3949ba59abbe56e057f20f883e', '3', '1', '1', '555555', 'hongchen2', '', '', null, '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('7', 'e10adc3949ba59abbe56e057f20f883e', '6', '2', '1', '4444441', 'hongchen11', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('8', 'e10adc3949ba59abbe56e057f20f883e', '6', '1', '1', '4444442', 'hongchen22', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('9', 'e10adc3949ba59abbe56e057f20f883e', '7', '2', '1', '44444411', 'hongchen111', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('10', 'e10adc3949ba59abbe56e057f20f883e', '8', '1', '1', '44444421', 'hongchen4', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('11', 'e10adc3949ba59abbe56e057f20f883e', '9', '2', '1', '6666661', 'hongchen61', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('12', 'e10adc3949ba59abbe56e057f20f883e', '10', '1', '1', '6666662', 'hongchen62', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('13', 'e10adc3949ba59abbe56e057f20f883e', '12', '2', '1', '6666663', 'hongchen63', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('14', 'e10adc3949ba59abbe56e057f20f883e', '13', '1', '1', '6666664', 'hongchen64', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('15', 'e10adc3949ba59abbe56e057f20f883e', '14', '2', '1', '6666665', 'hongchen65', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('16', 'e10adc3949ba59abbe56e057f20f883e', '15', '1', '1', '6666666', 'hongchen66', '', '', '', '2017-06-28 22:54:52', '0', null, null);
INSERT INTO `user` VALUES ('17', 'e10adc3949ba59abbe56e057f20f883e', '16', '2', '1', '6666667', 'hongchen67', '', '', '', '2017-06-28 22:54:52', '0', null, null);

-- ----------------------------
-- Table structure for weixin_user
-- ----------------------------
DROP TABLE IF EXISTS `weixin_user`;
CREATE TABLE `weixin_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `weixin_name` text CHARACTER SET utf8 COMMENT '微信名',
  `weixin_sex` char(4) CHARACTER SET utf8 DEFAULT NULL,
  `weixin_city` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weixin_province` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weixin_country` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weixin_headimgurl` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weixin_addtime` datetime DEFAULT NULL,
  `openid` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `money` double(11,2) DEFAULT NULL,
  `random` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `grade` int(4) DEFAULT NULL COMMENT '1银卡会员  2钻石会员 ',
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `state` int(4) DEFAULT '1' COMMENT '状态 1正常2冻结',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of weixin_user
-- ----------------------------
INSERT INTO `weixin_user` VALUES ('73', '红尘3', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqjoI0', null, '456788', null, '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('74', '红尘2', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqjoI1', null, '456787', '73', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('75', '红尘1', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqjoI2', '149.00', '123456', '74', '2', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('76', '红尘', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqjoI', '127.80', '805555', '75', '1', null, null, null, '1');
INSERT INTO `weixin_user` VALUES ('77', '红尘a', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqjoI3', '97.00', '269958', '76', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('78', '红尘b', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t10', null, '998966', '76', '1', '', null, null, '1');
INSERT INTO `weixin_user` VALUES ('79', '红尘c', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t11', null, '998966', '76', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('80', '红尘aa', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqj12', '97.00', '269958', '77', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('81', '红尘ab', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t13', null, '998966', '78', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('82', '红尘ac', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t14', null, '998966', '79', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('83', '红尘aaa', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqj15', '97.00', '269958', '80', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('84', '红尘aab', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t16', null, '998966', '80', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('85', '红尘aac', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t17', null, '998966', '80', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('86', '红尘ba', '1', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/YclFLQJwGXYqr9QwE1RAHPwlLAdpTV8BjawfKASU2oROqxfby54YPPyfsDeqiazCdEunq8kXAekOAs5v2ozZqPRFQ72iaQHNSic/0', '2017-09-08 10:23:11', 'opZti1ftrwWuIq1dE_QDBG_fqj12', '97.00', '269958', '77', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('87', '红尘bb', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t13', null, '998966', '78', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('88', '红尘bc', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-09 20:46:17', 'opZti1RKbriIy1qb7Tu6D2Y46t14', null, '998966', '79', '1', '', '', '', '1');
INSERT INTO `weixin_user` VALUES ('89', '小太阳', '2', '郑州', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icTdbqWNOwNSbFUJqMbnwcIJldMJKo3ibn5YehMkKBA73DvhcbHGX9eBdtCibGSvIqYC4M1fibC66jDTiaklhibiaShrZm0MgdibfLC5/0', '2017-09-11 13:59:43', 'opZti1RKbriIy1qb7Tu6D2Y46tZM', null, '749511', '76', '1', null, null, null, '1');
INSERT INTO `weixin_user` VALUES ('90', '吕冰', '1', '许昌', '河南', '中国', 'http://wx.qlogo.cn/mmopen/icn0HNQvel3Ubh9ibAQAq0icfo0ibbnrJSxYzBarutd2Xe7xOjW0ibqTqQPsc9ogLxIicTiaxibia9jFEmUWrPsxw9FuYYvicLmGlewOLF/0', '2017-09-11 14:02:50', 'opZti1aofp7bUU7gaujdUPNbR7Rw', null, null, null, '2', null, null, null, '1');
INSERT INTO `weixin_user` VALUES ('91', 'E-C Smart ', '1', '', '', '苏丹', 'http://wx.qlogo.cn/mmopen/PiajxSqBRaELYdYs69cUgeYq02TFLY9RibWcPuGd2rsyLC3V4JrzXOHPm3coSeJzowFAMhjaPc6SiaVfpeeK0VyAg/0', '2017-09-11 14:12:32', 'opZti1d7ZC1Ww0g3X0qcPv3KWpl8', null, '520453', null, '2', null, null, null, '1');
INSERT INTO `weixin_user` VALUES ('92', '张凯月', '2', '开封', '河南', '中国', 'http://wx.qlogo.cn/mmopen/WxrTNpU1x7IhLia0jtgCFZ8Qf684aHhZqFbg3rTydMtncKouMbVMDqVibvDT5lEricNicREK2I0RNnoRWblDIhayZ2H10ALBDJtQ/0', '2017-09-11 14:42:19', 'opZti1aNJSwwXJt90_Qniu5UfHXw', null, '957790', null, '2', null, null, null, '1');
