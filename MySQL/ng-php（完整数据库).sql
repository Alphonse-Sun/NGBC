/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50635
Source Host           : localhost:3306
Source Database       : ng-php

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2020-02-03 17:56:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `abouts`
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '标题',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '副标题',
  `title_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '列表图片',
  `content` text COLLATE utf8mb4_unicode_ci COMMENT '活动说明',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1关于我们',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正常1热门',
  `sort` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '排序',
  `title_content` text COLLATE utf8mb4_unicode_ci COMMENT '标题内容',
  `rule_content` text COLLATE utf8mb4_unicode_ci COMMENT '活动规则',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES ('3', '关于我们', null, null, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 2em;\"><span style=\"box-sizing: border-box; font-family: 宋体; font-size: 14px; color: rgb(38, 38, 38);\">&nbsp;FC博娱乐城为菲律宾合法注册之博彩公司。 我们一切博彩营业行为皆遵从菲律宾政府博彩条约。 我们在越来越热络的网路博彩市场中，不断地求新求变，寻找最新的创意，秉持最好的服务。以带给客户高品质的服务、产品、娱乐，是我们的企业永恒宗旨。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 2em;\"><span style=\"box-sizing: border-box; font-family: 宋体; font-size: 14px; color: rgb(38, 38, 38);\">&nbsp; &nbsp; 我们的运动博彩拥有顶级的盘房操盘，投入大量的人力以及资源，提高完整赛事，丰富玩法给热爱体育的玩家。真人视讯游戏拥有经国际赌场专业训练的荷官，进行各种赌场游戏，所有赌局都依荷官动作，而不是预设的电脑机率结果，以高科技的网路直播技术，带给玩家身历赌场的刺激经验! 各式彩票游戏，是依官方赛果产生游戏结果，让玩家在活泼的投注界面，享受最公正的娱乐。而我们的电子游戏使用最公平的随机数产生机率，让玩家安心享受多元化的娱乐性游戏。FC博娱乐城所有的游戏皆有共同的优点: 无须下载、介面操作简易、功能齐全、画面精致、游戏秉持公平、公正、公开!</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 2em;\"><span style=\"box-sizing: border-box; font-family: 宋体; font-size: 14px; color: rgb(38, 38, 38);\">&nbsp; &nbsp; 在市场上众多的博彩网站中，玩家选择FC博娱乐城，除了多元化的产品，以及高品质的服务 ，我们的用心随处可见，并获得GEOTRUST国际认证，确保网站公平公正性，所有会员资料均经过加密，保障玩家隐私。FC博娱乐城以客户至上精神，24小时处理会员出入款相关事宜，令我们骄傲的客服团队，亲切又专业，解决玩家对于网站、游戏的种种疑难杂症，让每位玩家有宾至如归的感觉! 我们自豪的以业界最强的各种优惠方式回馈我们的会员，FC博娱乐城的实力和信誉绝对是玩家最明智的选择!</span></p><p><br/></p>', '1', '1', '0', '1', null, null, '2017-02-03 09:52:51', '2018-07-09 15:36:54');
INSERT INTO `abouts` VALUES ('4', '存款帮助', null, null, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">您现在可以通过以下方式存款到FC博娱乐城：</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">公司入款:</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. 会员登入后点击[个人中心]选择 [存款]，人后选择 [公司入款]<br style=\"box-sizing: border-box;\"/>2. 请选择欲使用的银行卡。&nbsp;<br style=\"box-sizing: border-box;\"/>3. 选择银行后，网页会显示可存入的银行账号。可直接点击网页上银行标志，自动为您带到银行首页，&nbsp;<br style=\"box-sizing: border-box;\"/>登入您个人网银后，请将款项转入公司提供的入款账号。&nbsp;<br style=\"box-sizing: border-box;\"/>※如您使用农业银行/工商银行， 请将公司入款订单号贴入您网银 [备注/附言] 字段&nbsp;<br style=\"box-sizing: border-box;\"/>※建议选择与您转账的银行同一家，同银行间转账可以立即到帐，若跨行转账有可能较晚到帐。※&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>可以自由选择:&nbsp;<br style=\"box-sizing: border-box;\"/>(1).网络银行: 登入自己的网络银行页面，从银行网页上转账到指定银行账户中.&nbsp;<br style=\"box-sizing: border-box;\"/>(2).ATM自动柜员机: 到实体自动柜员机以银行卡或是现金方式存入，没有开启网银功能与存现金的会员可用.&nbsp;<br style=\"box-sizing: border-box;\"/>(3).银行柜台转账: 到银行柜台完成转账手续.<br style=\"box-sizing: border-box;\"/>※公司入款注意事项※&nbsp;<br style=\"box-sizing: border-box;\"/>亲切提醒您，公司入款银行随时更变，请于每次入款前，确认您可以使用的入款账号。&nbsp;<br style=\"box-sizing: border-box;\"/>如入款账号已过期，FC博娱乐城恕不负责！万请见谅，感谢配合。&nbsp;<br style=\"box-sizing: border-box;\"/>4. 核对提交数据/提交申请&nbsp;<br style=\"box-sizing: border-box;\"/>汇款完成请填写并提交相关数据，并备份您的公司入款订单号。 系统在收到款项后会进行比对，如果存款金额、时间相符合，则会将款项加入您的游戏账号中。处理时间通常为5-30分钟。(跨行转账时间可能会超过30分)<br style=\"box-sizing: border-box;\"/>5. 若5钟内未到帐，请联系系在线客服人员。&nbsp;<br style=\"box-sizing: border-box;\"/>客服人员会与您核对存款数据，必要时需要您提供截图、转账数据等相关证明。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">二、 线上支付</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. 会员登入后点击[个人中心]选择 [存款]，选择 [在线支付]&nbsp;<br style=\"box-sizing: border-box;\"/>填写入款额度&nbsp;，选择”支付银行”。&nbsp;<br style=\"box-sizing: border-box;\"/>支持借记卡：中国民生银行总行,中国工商银行,中国建设银行,兴业银行,中国光大银行,深圳发展银行,中国邮政,华夏银行,上海浦东发展银行,中国银行,上海银行,交通银行,广东发展银行,北京银行,中信银行,深圳平安银行,中国农业银行,招商银行。&nbsp;<br style=\"box-sizing: border-box;\"/>确认送出后﹐将请您确认您的支付订单无误，并建议您记录您的支付订单号后，确认送出，并耐心等待载入网络银行页面﹐传输中已将您账户数据加密﹐请耐心等待。&nbsp;<br style=\"box-sizing: border-box;\"/>进入网络银行页面﹐请确实填写您银行账号信息﹐支付成功﹐额度将在10分钟内系统处理完成，立即加入您的会员账户。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">存款需知:</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">FC博娱乐城最低存款为￥100人民币﹐使用在线支付单笔最高上限￥50000，使用银行卡划款无最高限制，会员存款金额一经确认将会在5分钟之内完成额度添加动作，未开通网银的会员，请亲洽您的银行柜台办理。&nbsp;<br style=\"box-sizing: border-box;\"/>如有任何问题，请您联系</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">24小时线上客服</span></p><p><br/></p>', '2', '1', '0', '1', null, null, '2017-02-03 09:52:51', '2018-07-09 03:25:34');
INSERT INTO `abouts` VALUES ('5', '取款帮助', null, null, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\"><strong style=\"box-sizing: border-box;\">取款方法</strong></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. 会员登入後，选择&quot;个人中心&quot;，然后选择“取款”选项，就可进入取款页面。&nbsp;<br style=\"box-sizing: border-box;\"/>2. 输入取款密码﹐确认取款人姓名与您银行帐号持有人相符。&nbsp;<br style=\"box-sizing: border-box;\"/>3. 输入出款额度。&nbsp;<br style=\"box-sizing: border-box;\"/>4. 确认取款银行帐号正确。&nbsp;<br style=\"box-sizing: border-box;\"/>5. 绑定中国工商银行(优先)、中国农业银行、北京银行、交通银行、中国银行、中国建设银行、中国光大银行、兴业银行、中国民生银行总行、招商银行、中信银行、广东发展银行、中国邮政、深圳发展银行、上海浦东发展银行、华夏银行、农村信用。&nbsp;<br style=\"box-sizing: border-box;\"/>如有任何问题，请洽24小时在线客服，取款￥2000000RMB以内，可24小时提出申请，并享受5分钟内到帐。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">取款需知:</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">1. FC博娱乐城最低取款为￥100人民币，取款上限为单笔200000人民币。(线上支付每日最高取款总额上限为5000000人民币,公司入款每日最高取款总额上限为5000000人民币)。&nbsp;<br style=\"box-sizing: border-box;\"/>2. 每位会员存款後，累计有效投注达到&quot;最後一次入款後帐户总余额&quot;，即可办理提款。每天前3次可享受免费取款。第4次及以上次数出款，每次加收50元手续费。&nbsp;<br style=\"box-sizing: border-box;\"/>3. FC博娱乐城保留权利审核会员帐户﹐若由上次出款起﹐有效下注金额未达&quot;最後一次入款後帐户总余额&quot;﹐而申请出款者﹐公司将收取&quot;最後一次入款後帐户的总余额&quot;10%的行政费用。&nbsp;<br style=\"box-sizing: border-box;\"/>【例1】1月1日 12:00当下额度1000,并在存入3000元,则在1月1日 12:00後,有效投注额必须为(1000+3000)以上出款,才不被扣除行政费用+手续费用&nbsp;<br style=\"box-sizing: border-box;\"/>【例2】若有效投注未达到(1000+3000)元,则会扣除行政费用(1000+3000)*20%+手续费50 = 须被扣除850元&nbsp;<br style=\"box-sizing: border-box;\"/>4. **请注意: 各游戏和局/未接受/取消注单﹐不纳入有效投注计算。 运动博弈游戏项目﹐大赔率玩法计算有效投注金额﹐小赔率玩法计算输赢金额为有效投注。**大赔率产品包括: 过关﹑波胆﹑总入球﹑半全场﹑双胜彩﹑冠军赛。&nbsp;<br style=\"box-sizing: border-box;\"/>5. 如有任何问题﹐请洽24小时&quot;线上客服&quot;！</span></p><p><br/></p>', '3', '1', '0', '1', null, null, '2017-02-03 09:52:51', '2018-07-09 03:28:56');
INSERT INTO `abouts` VALUES ('6', '常见问题', null, null, '<p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 16px;\">一般问题</span></strong></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);\">Q1: 如何加入FC博娱乐？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\"><span style=\"box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A1: 您只要点FC博娱乐主页，选择“立即注册”，进入注册页面，按照页面表格，如实填写个人信息后，核对信息后，点击“确定”即可新增一个属于您自己的账号，成为我们公司的会员；您亦可立即存款并正式开始下注，享有各项丰厚的优惠，欢迎您的加入喔！&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q2: 我可以直接在网络上存款吗？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A2: 可以，FC博提供多种线上存款选择，详情请参照 &quot;存款帮助 &quot;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q3: 我在那里可以找到游戏的规则？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A3: 在登入后，您可以在游戏的最外层看到&quot;规则说明&quot;选项，清楚告诉您游戏的玩法、规则及派彩方式。 在游戏视窗中,也有&quot;规则&quot;选项，让您在享受游戏乐趣的同时，可以弹跳视窗随时提醒您游戏规则。&nbsp;</span></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);\">Q4：你们的游戏会用多少副牌？</span><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\"><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\"></span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A4: 在百家乐我们会用8副牌，其他游戏则会根据其性质有所调整。&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q5: 你们何时会洗牌?</span><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A5: 所有纸牌游戏，当红的洗牌记号出现或游戏因线路问题中断时便会进行重新洗牌。</span>&nbsp;<br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q6: 我的注码的限制是多少？</span><span style=\"box-sizing: border-box; color: rgb(255, 0, 0);\">&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A6: 您的注码会根据您的存款有所不同，运动博弈单场单注最低是10至1000~30000元人民币，娱乐场单场单注最低是10至30000元人民币。</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q7: 如果忘记密码怎么办？&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A7: 您只要点FC博娱乐主页，选择“忘记密码”，填写您的会员账号和取款密码，核对正确后,系统会自动发送邮件至会员资料内所设置之E-MAIL信箱！当您无法接收邮件时，请将您的姓名、游戏账号、经常登录地区、发送到公司的会员部邮件：843874192@rjfxz.com，我们工作人员将在24小时内处理好您的问题，并通过邮件回复通知您。谢谢！&nbsp;</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(149, 55, 52);\">Q8: 当您注册时出现，姓名已注册。</span><br style=\"box-sizing: border-box; font-family: 微软雅黑;\"/><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\">A8: 您可通过24小时在线客服人员协助处理。</span></span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><br style=\"box-sizing: border-box;\"/></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">技术常见问题</span></strong></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);\">Q: 最低的硬体系统要求是什么?</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">1. 任何可以接上互联网的电脑。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">2. SVGA显示卡–最少要1204x768像素256色彩以上。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">3. 区域宽频。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">4. Windows , Mac OS X , Linux作业系统。</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">5. Internet Explorer浏览器v6.0 或以上 (版本7.0 或以上更好)，Mozilla Firefox (浏览器v3.0 或以上)，</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">Opera (浏览器v8.0 或以上)，Chrome(浏览器v6.0 或以上)，Safari (浏览器v4.0 或以上)</span></p><p style=\"box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">6. 要浏览线上娱乐场，你可以在 Macromedia网站下载Macromedia Flash Player浏览器附加程式(8.0或以上版本)。</span></p><p><br/></p>', '4', '1', '0', '1', null, null, '2017-02-03 09:52:51', '2018-07-09 03:31:41');

-- ----------------------------
-- Table structure for `activities`
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '标题',
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '副标题',
  `title_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '列表图片',
  `content` text COLLATE utf8mb4_unicode_ci COMMENT '活动说明',
  `type` tinyint(4) NOT NULL DEFAULT '3' COMMENT '1返水2红利3充值',
  `money` decimal(8,2) DEFAULT NULL COMMENT '活动所需达到的金额',
  `rate` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赠送比例',
  `gift_limit_money` decimal(8,2) DEFAULT NULL COMMENT '赠送的上限金额',
  `date_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '活动时间描述',
  `start_at` timestamp NULL DEFAULT NULL COMMENT '活动开始时间',
  `end_at` timestamp NULL DEFAULT NULL COMMENT '活动截止时间',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正常1热门',
  `sort` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '排序',
  `title_content` text COLLATE utf8mb4_unicode_ci COMMENT '标题内容',
  `rule_content` text COLLATE utf8mb4_unicode_ci COMMENT '活动规则',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_apply` tinyint(1) DEFAULT '1' COMMENT '0需要申请1不需要',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('3', '诚招代理', null, '/uploads/2018-10-26/373bd406906b9e1c84e6695ab7e8d7af1c63b528.png', null, '4', '10000.00', '2', '100.00', '长期有效', null, null, '0', '0', '2', '<h1 style=\"margin: 0px; padding: 5px 0px 20px; text-align: center; color: rgb(255, 0, 0); border-bottom: 1px solid rgb(51, 51, 51);\"><span style=\"font-size: 24px;\">新会员首存赠送18元彩金</span></h1><p>现在起只要您加入澳博娛樂場并完成首次充值100元以上，即可获得澳博娛樂場派送的18元幸运彩金，老品牌值得信赖！<br style=\"margin: 0px; padding: 0px;\"/></p><table width=\"960\" style=\"width: 100%;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\" class=\"firstRow\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">开始时间</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">充值金额</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">赠送金额</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">流水要求</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">即日起</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">100+</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">18元</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">1倍</td></tr></tbody></table><p><br style=\"margin: 0px; padding: 0px;\"/></p><h6 style=\"margin: 0px 0px 10px; padding: 0px; height: 35px; position: relative;\"><span style=\"margin: 0px; padding: 0px 20px; display: block; position: absolute; left: 0px; top: 0px; height: 35px; text-align: center; line-height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; font-size: 2em;\">活动说明</span></h6><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">1、￥18幸运彩金只需1倍下注即可提现，每个会员只能申请一次。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">2、符合申请条件的会员请在成功存款后未进行投注前提出申请，如已进行投注，则申请视为无效。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><h6 style=\"margin: 0px 0px 10px; padding: 0px; height: 35px; position: relative;\"><span style=\"margin: 0px; padding: 0px 20px; display: block; position: absolute; left: 0px; top: 0px; height: 35px; text-align: center; line-height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; font-size: 2em;\">规则及条款</span></h6><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">1、每位玩家﹑每户﹑每一住址 、每一电子邮箱地址﹑每一电话号码﹑相同支付方式(相同借记卡/信用卡/银行账户) 及IP地址只能享有一次优惠；若会员有重复申请账号行为，公司保留取消或收回会员优惠彩金的权利。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">2、澳博娛樂場的所有优惠特为玩家而设，如发现任何团体或个人，以不诚实方式套取红利或任何威胁、滥用公司优惠等行为，公司保留冻结、取消该团体或个人账户及账户结余的权利。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">3、若会员对活动有争议时，为确保双方利益，杜绝身份盗用行为，澳博有权要求会员向我们提供充足有效的文件，用以确认是否享有该优惠的资格。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">4、当参与优惠会员未能完全遵守、或违反、或滥用任何有关公司优惠或推广的条款，又或我们有任何证据有任何团队或个人投下一连串的关联赌注，造成无论赛果怎样都可以确保可以从该存款红利或其他推广活动提供的优惠获利，澳博保留权利向此团队或个人停止、取消优惠或索回已支付的全部优惠红利。此外，公司亦保留权利向这些客户扣取相当于优惠红利价值的行政费用，以补偿我们的行政成本。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">5、澳博娛樂場保留对活动的最终解释权；以及在无通知的情况下修改、终止活动的权利；适用于所有优惠。</p><p><br/></p>', null, '2018-07-09 20:21:13', '2018-10-26 15:23:41', '1');
INSERT INTO `activities` VALUES ('4', '翻本彩金', null, '/uploads/2018-10-26/c5f401fd0047768b77db5b75362144ad3e865aad.png', null, '4', null, null, null, '长期有效', null, null, '0', '0', '3', '<h1 style=\"margin: 0px; padding: 5px 0px 20px; text-align: center; color: rgb(255, 0, 0); border-bottom: 1px solid rgb(51, 51, 51);\"><span style=\"font-size: 24px;\">天天救援金，助您东山再起</span></h1><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">全场游戏亏损即送救援金</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">注：北京时间1天内，负盈利1000元以上，次日可申请救援金</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">申请金额为：亏损金额×5%=可赠救援金</p><table width=\"960\" style=\"width: 100%;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\" class=\"firstRow\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">亏损金额</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">救援金百分比</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">提款流水</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">1000+</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">5%</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">1倍</td></tr></tbody></table><p><br style=\"margin: 0px; padding: 0px;\"/></p><h6 style=\"margin: 0px 0px 10px; padding: 0px; height: 35px; position: relative;\"><span style=\"margin: 0px; padding: 0px 20px; display: block; position: absolute; left: 0px; top: 0px; height: 35px; text-align: center; line-height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; font-size: 2em;\">规则及条款</span></h6><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">1、每位玩家帐号及IP地址每天只能享有1次优惠；若会员有重复申请账号行为，公司保留取消或收回会员优惠彩金的权利。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">2、澳博娱乐的所有优惠特为玩家而设，如发现任何团体或个人，以不诚实方式套取红利或任何威胁、滥用公司优惠等行为，公司保留冻结、取消该团体或个人账户及账户结余的权利。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">3、若会员对活动有争议时，为确保双方利益，杜绝身份盗用行为，澳博娱乐有权要求会员向我们提供充足有效的文件，用以确认是否享有该优惠的资质</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">4、澳博娱乐保留对活动的最终解释权；以及在无通知的情况下修改、终止活动的权利；适用于所有优惠。</p><p><br/></p>', null, '2018-07-09 20:28:50', '2018-10-26 15:23:59', '1');
INSERT INTO `activities` VALUES ('5', '返利100%', null, '/uploads/2018-10-26/b0a3a75b86b006f88432bd8c4a993a82f15a5143.png', null, '3', null, null, null, '长期有效', null, null, '0', '0', '4', '<h1 style=\"margin: 0px; padding: 5px 0px 20px; text-align: center; color: rgb(255, 0, 0); border-bottom: 1px solid rgb(51, 51, 51);\"><span style=\"font-size: 24px;\">新会员首存赠送100%彩金</span></h1><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">新注册会员，即可享有首存100%、二存50%、三存25%优惠。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p class=\"red\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; color: red; text-indent: 2em;\">注：会员存款后需在未投注之前提出申请，否则视为放弃参与此优惠活动。</p><table width=\"960\" style=\"width: 100%;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\" class=\"firstRow\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">类别</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">存款金额</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">彩金百分比</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\">提款流水</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">首存</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">500~5000</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">100%</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">35倍</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">二存</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">300~3000</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">50%</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">30倍</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">三存</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">100~1000</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">25%</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\">25倍</td></tr></tbody></table><p><br style=\"margin: 0px; padding: 0px;\"/></p><h6 style=\"margin: 0px 0px 10px; padding: 0px; height: 35px; position: relative;\"><span style=\"margin: 0px; padding: 0px 20px; display: block; position: absolute; left: 0px; top: 0px; height: 35px; text-align: center; line-height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; font-size: 2em;\">规则及条款</span></h6><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">1、同一会员账号、同一IP地址，首存、二存、三存，最多分别申请1次</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">2、任何团体或个人，以不诚实方式套取红利、图利的行为，账号及账号余额将被取消</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">3、澳博娛樂場保留对活动的最终解释权及随时终止此活动的权利，并不作提前通知</p><p><br/></p>', null, '2018-07-09 20:30:01', '2018-10-26 15:24:15', '1');
INSERT INTO `activities` VALUES ('9', '手机APP', null, '/uploads/2018-10-26/5b1c20f9e3e3458e377268c1df177fb6044a6d77.png', null, '4', null, null, null, '长期有效', '2019-01-04 00:00:00', '2019-01-04 00:09:07', '0', '0', '1', '<h1 style=\"margin: 0px; padding: 5px 0px 20px; text-align: center; color: rgb(255, 0, 0); border-bottom: 1px solid rgb(51, 51, 51);\"><span style=\"font-size: 24px;\">全场游戏天天返水最高2%</span></h1><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">澳博娛樂場给力优惠活动，为了感谢广大玩家的支持与信任公司决定返水调整，让玩家更好的体验游戏与优惠。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">凡在本公司注册会员成功充值，投注您最喜爱的娱乐游戏，投注起即可享受优惠，返水最高可达，相信品牌的力量，澳博娱乐场期待您的到来。</p><table width=\"659\" style=\"width:100%;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\" class=\"firstRow\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\" width=\"148\">游戏类型</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\" width=\"151\">返水比例</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"148\">视讯</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"151\">0.8%</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"148\">电子</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"151\">1.2%</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"148\">彩票</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"151\">0.6%</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"148\">体育</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"151\">0.6%</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"148\">捕鱼</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"151\">1.0%</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"148\">棋牌</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"151\">0.8%</td></tr></tbody></table><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">返水优惠无需申请，结算和发放时间如下：</p><table width=\"659\" style=\"width:100%;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\" class=\"firstRow\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\" width=\"149\">返水北京时间</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(204, 0, 0); font-weight: bold;\" width=\"150\">返水美东时间</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"149\">次日14:30~15:00</td><td style=\"margin: 0px; padding-right: 0px; padding-left: 0px; border-right-color: rgb(34, 34, 34); border-bottom-color: rgb(34, 34, 34); text-align: center; border-left: none; border-top: none; background-color: rgb(0, 0, 0);\" width=\"150\">次日02:30~03:00</td></tr></tbody></table><p><br style=\"margin: 0px; padding: 0px;\"/></p><h6 style=\"margin: 0px 0px 10px; padding: 0px; height: 35px; position: relative;\"><span style=\"margin: 0px; padding: 0px 20px; display: block; position: absolute; left: 0px; top: 0px; height: 35px; text-align: center; line-height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; font-size: 2em;\">优惠与条款</span></h6><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">1、不可使用多账号参加本次活动，不可对打，凡同一IP地址（如IP地址其中有3组相同）同一姓名、同一银行账号、同一联系方式、同一电脑均被视为同一账号。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">2、若会员对活动出现争议时，为确保双方利益，杜绝身份盗用行为，澳博娛樂場保留要求客户提供充足有效的证件资料，通过任何方式辨别客户是否符合申请此优惠活动。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">3、在运动博弈投注，对冲或对打投注不计，真人娱乐和电子游艺，彩票投注，无风险投注不计。无风险投注包括同时押庄押闲，大小，单双，红黑等，任何取消注单，赛果或局数不计。</p><p><br style=\"margin: 0px; padding: 0px;\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box; text-indent: 2em;\">4、澳博娛樂場保留对活动的最终解释权；以及在无通知的情况下修改、终止活动的权利；适用于所有优惠。</p><p><br/></p>', null, '2018-07-14 12:35:17', '2019-01-04 00:09:17', '1');

-- ----------------------------
-- Table structure for `activities_apply`
-- ----------------------------
DROP TABLE IF EXISTS `activities_apply`;
CREATE TABLE `activities_apply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `activity_id` int(10) DEFAULT NULL,
  `member_id` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '2瀹℃牳閫氳繃锛?瀹℃牳涓嶉€氳繃',
  `fail_reason` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activities_apply
-- ----------------------------

-- ----------------------------
-- Table structure for `admin_action_money_log`
-- ----------------------------
DROP TABLE IF EXISTS `admin_action_money_log`;
CREATE TABLE `admin_action_money_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '管理员ID',
  `member_id` int(11) NOT NULL COMMENT '会员ID',
  `old_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '原余额',
  `new_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '修改后的余额',
  `old_fs_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '原返水余额',
  `new_fs_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '修改后的返水余额',
  `remark` text COLLATE utf8mb4_unicode_ci COMMENT '描述',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of admin_action_money_log
-- ----------------------------

-- ----------------------------
-- Table structure for `admin_login_log`
-- ----------------------------
DROP TABLE IF EXISTS `admin_login_log`;
CREATE TABLE `admin_login_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '登录ip',
  `is_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0登录 1登出',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=282 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of admin_login_log
-- ----------------------------
INSERT INTO `admin_login_log` VALUES ('281', '2', '2001:4450:4679:8000:', '0', '2019-10-23 16:24:27', '2019-10-23 16:24:27');

-- ----------------------------
-- Table structure for `api`
-- ----------------------------
DROP TABLE IF EXISTS `api`;
CREATE TABLE `api` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `api_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台名称',
  `api_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '平台描述名称',
  `api_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '请求的基础域名',
  `api_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'key 值',
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1',
  `api_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `is_demo` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正式 1测试',
  `prefix` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '账号前缀',
  `on_line` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `sort` int(10) unsigned NOT NULL DEFAULT '10' COMMENT '排序',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型1b2d3bs4T',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=323 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of api
-- ----------------------------
INSERT INTO `api` VALUES ('250', 'SELF', 'SELF', 'http://api.ng-api.com', '', '', null, null, null, '0.00', '0', 'abz', '1', '10', '5', '2017-02-03 09:17:51', '2018-10-16 15:27:33');
INSERT INTO `api` VALUES ('251', 'AG', 'AG', null, null, null, null, null, null, '0.00', '0', null, '0', '1', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('252', 'BBIN', 'BBIN', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:01');
INSERT INTO `api` VALUES ('253', 'MG', 'MG', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:00');
INSERT INTO `api` VALUES ('254', 'EG', 'EG彩票', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:00');
INSERT INTO `api` VALUES ('255', 'PT', 'PT', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:01');
INSERT INTO `api` VALUES ('256', 'ALLBET', '欧博视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:00');
INSERT INTO `api` VALUES ('257', 'SS', '三昇体育', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('258', 'LEBO', 'LEBO视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-09-30 12:58:18');
INSERT INTO `api` VALUES ('261', 'IBC', '沙巴体育', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('266', 'SUNBET', '申博视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('268', 'OG', 'OG视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('270', 'GD', 'GD视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:00');
INSERT INTO `api` VALUES ('271', 'KY', '开元棋牌', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('272', 'CQ9', 'CQ9电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('273', 'GPI', 'GPI', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:01');
INSERT INTO `api` VALUES ('274', 'DG', 'DG视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('275', 'SG', 'SG电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('276', 'PP', 'PP电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2017-02-03 09:17:51', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('277', 'BG', 'BG', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 13:24:05', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('278', 'QT', 'QT电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:23:11', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('279', 'SA', 'SA', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:24:19', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('280', 'MW', 'MW电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:24:50', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('281', 'VR', 'VR彩票', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:25:46', '2018-11-26 18:48:30');
INSERT INTO `api` VALUES ('282', 'GJ', '皇冠体育', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:27:23', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('283', 'IG', 'IG彩票', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:28:17', '2018-12-22 22:32:01');
INSERT INTO `api` VALUES ('285', 'MT', '美天棋牌', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:29:38', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('286', 'JDB', 'JDB电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:29:53', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('287', 'ESB', 'ESB电竞', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-19 17:30:12', '2018-12-22 22:32:01');
INSERT INTO `api` VALUES ('288', 'VG', 'VG棋牌', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-22 21:50:22', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('289', 'NEWBB', 'NEWBB体育', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-27 12:11:52', '2018-12-22 22:32:02');
INSERT INTO `api` VALUES ('290', 'FG', 'FG电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-09-29 11:34:13', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('322', 'FH', 'FH乐利凤凰彩票', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2019-12-12 12:26:04', '2019-12-12 12:26:04');
INSERT INTO `api` VALUES ('292', 'AVIA', '泛亚电竞', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-10-09 02:21:57', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('293', 'SW', 'SW电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-10-10 13:29:37', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('294', 'BNG', 'BNG电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-10-10 18:16:11', '2018-12-22 22:32:01');
INSERT INTO `api` VALUES ('295', 'LEG', '乐游棋牌', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-10-11 17:53:37', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('296', 'AP', 'AP棋牌', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-10-23 16:13:57', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('297', 'DT', 'DT电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-11-02 12:01:29', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('298', 'PG', 'PG电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-11-02 12:01:54', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('299', 'GTI', 'GTI电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-11-02 12:02:17', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('300', 'PNG', 'PNG电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-11-02 12:02:27', '2018-12-22 22:32:02');
INSERT INTO `api` VALUES ('301', 'SGL', 'SG彩票', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 13:58:11', '2018-12-22 22:32:02');
INSERT INTO `api` VALUES ('302', 'SGP', 'SG棋牌', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 13:58:54', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('303', 'GA', 'GA电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 13:59:27', '2018-12-22 22:32:01');
INSERT INTO `api` VALUES ('304', 'EBET', 'EBET视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 13:59:51', '2018-12-22 22:32:02');
INSERT INTO `api` VALUES ('305', 'GNS', 'GNS电子捕鱼', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:00:10', '2018-12-22 22:32:02');
INSERT INTO `api` VALUES ('306', 'HB', 'HB电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:00:31', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('307', 'RT', 'RT电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:01:08', '2018-12-22 22:32:03');
INSERT INTO `api` VALUES ('308', 'GG', 'GG捕鱼', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:01:32', '2018-12-22 22:32:02');
INSERT INTO `api` VALUES ('309', 'BL', '新皇冠体育', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:02:00', '2018-12-22 22:32:04');
INSERT INTO `api` VALUES ('310', 'ISB', 'ISB电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:02:33', '2018-12-21 14:02:33');
INSERT INTO `api` VALUES ('311', 'IM', 'IM体育', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:03:20', '2018-12-21 14:03:20');
INSERT INTO `api` VALUES ('312', 'PGS', 'PGS电子', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2018-12-21 14:03:20', '2018-12-21 14:03:20');
INSERT INTO `api` VALUES ('317', 'AGS', 'AGS', null, null, null, null, null, null, '0.00', '0', null, '0', '2', '5', '2019-02-25 12:26:04', '2019-02-25 12:26:04');
INSERT INTO `api` VALUES ('321', 'SUNBETS', 'SUNBETS视讯', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', '2019-09-12 13:28:04', '2019-09-12 13:28:04');
INSERT INTO `api` VALUES ('320', 'SEXY', 'SEXY真人', null, null, null, null, null, null, '0.00', '0', null, '0', '10', '5', null, null);

-- ----------------------------
-- Table structure for `api_activity`
-- ----------------------------
DROP TABLE IF EXISTS `api_activity`;
CREATE TABLE `api_activity` (
  `api_id` int(10) unsigned NOT NULL,
  `activity_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of api_activity
-- ----------------------------

-- ----------------------------
-- Table structure for `bank_cards`
-- ----------------------------
DROP TABLE IF EXISTS `bank_cards`;
CREATE TABLE `bank_cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_no` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '卡号',
  `card_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '卡类型 储蓄卡',
  `bank_id` int(11) NOT NULL COMMENT '银行ID',
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '办卡预留手机号',
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '持卡人姓名',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '持卡人姓名',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0 上线1下线',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of bank_cards
-- ----------------------------

-- ----------------------------
-- Table structure for `banners`
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '标题',
  `path` text COLLATE utf8mb4_unicode_ci COMMENT '活动说明',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1电脑，2手机',
  `sort` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumpurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of banners
-- ----------------------------
INSERT INTO `banners` VALUES ('4', '11', '/uploads/2019-01-15/9128d6404fea093e9786c61ce87b372e7ed7a06f.jpg', '1', '2', '2018-11-26 12:14:21', '2019-01-15 15:54:47', '');
INSERT INTO `banners` VALUES ('5', '11', '/uploads/2019-01-15/1c030db584bfcafa73b5c7fc87027a1284cf2901.jpg', '1', '5', '2018-11-26 12:14:21', '2019-01-15 15:55:55', '');
INSERT INTO `banners` VALUES ('8', '11', '/uploads/2019-01-15/46777d2bdef5ae720557fa43bc5861fb46f8383c.jpg', '1', '4', '2019-01-14 15:49:09', '2019-01-15 15:58:18', '');
INSERT INTO `banners` VALUES ('7', '111', '/uploads/2019-01-15/c6a3821140f53a1ffe3a20729fa605314d24a64e.jpg', '1', '3', '2019-01-14 15:45:37', '2019-01-15 15:54:56', '');
INSERT INTO `banners` VALUES ('9', 'a', '/uploads/2019-01-15/511096065d98117fcc5b6533146bd2741e9c921b.jpg', '1', '1', '2019-01-15 13:37:35', '2019-01-15 15:53:30', '');
INSERT INTO `banners` VALUES ('10', 'a', '/uploads/2019-01-15/9fd82c66c85f9a9a2cf50069bbfc3eca31c7692e.jpg', '2', '3', '2019-01-15 14:02:24', '2019-01-15 15:49:06', '');
INSERT INTO `banners` VALUES ('11', 'a', '/uploads/2019-01-15/26b26c574c013a60f8dff3db98cda6ab06992aac.jpg', '2', '2', '2019-01-15 14:02:43', '2019-01-15 15:48:42', '');
INSERT INTO `banners` VALUES ('12', '11', '/uploads/2019-01-15/d256c6ad2becfae45c3b4d451f9120628f7be88d.jpg', '2', '1', '2019-01-15 14:02:55', '2019-02-22 14:50:48', '');

-- ----------------------------
-- Table structure for `black_list_ip`
-- ----------------------------
DROP TABLE IF EXISTS `black_list_ip`;
CREATE TABLE `black_list_ip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'IP 地址',
  `remark` text COLLATE utf8mb4_unicode_ci COMMENT '备注',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of black_list_ip
-- ----------------------------
INSERT INTO `black_list_ip` VALUES ('1', '58.22.114.42', '1', '2018-10-08 23:48:01', '2018-10-08 23:48:01');
INSERT INTO `black_list_ip` VALUES ('2', '117.29.43.233', null, '2018-10-09 03:43:37', '2018-10-09 03:43:37');

-- ----------------------------
-- Table structure for `ctrs`
-- ----------------------------
DROP TABLE IF EXISTS `ctrs`;
CREATE TABLE `ctrs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `api_id` int(11) NOT NULL COMMENT '接口',
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '概率',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of ctrs
-- ----------------------------

-- ----------------------------
-- Table structure for `daili_money_log`
-- ----------------------------
DROP TABLE IF EXISTS `daili_money_log`;
CREATE TABLE `daili_money_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `yl_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '盈利情况',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '佣金',
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_month` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of daili_money_log
-- ----------------------------

-- ----------------------------
-- Table structure for `distill_red_logs`
-- ----------------------------
DROP TABLE IF EXISTS `distill_red_logs`;
CREATE TABLE `distill_red_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `recharge_id` int(10) unsigned NOT NULL,
  `times` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of distill_red_logs
-- ----------------------------

-- ----------------------------
-- Table structure for `dividend`
-- ----------------------------
DROP TABLE IF EXISTS `dividend`;
CREATE TABLE `dividend` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `member_id` int(11) NOT NULL COMMENT '用户ID',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '转换类型 1充值红利2平台红利3返水',
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '描述',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '发生前的金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '发生后的金额',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '备注',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of dividend
-- ----------------------------

-- ----------------------------
-- Table structure for `drawing`
-- ----------------------------
DROP TABLE IF EXISTS `drawing`;
CREATE TABLE `drawing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '交易流水号',
  `member_id` int(11) NOT NULL COMMENT '用户id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '充值人名称、昵称',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '提款金额',
  `payment_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '账户 支付宝账户 微信账户 银行卡号',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1待确认2成功3失败',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '提款前金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '提款后金额',
  `score` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '积分',
  `counter_fee` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '手续费',
  `fail_reason` text COLLATE utf8mb4_unicode_ci COMMENT '失败原因',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行名称',
  `bank_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行卡号',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户地址',
  `confirm_at` timestamp NULL DEFAULT NULL COMMENT '确认提款成功时间',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of drawing
-- ----------------------------

-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '反馈类型',
  `content` text COLLATE utf8mb4_unicode_ci COMMENT '内容',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机',
  `is_read` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0未读1已读',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of feedback
-- ----------------------------

-- ----------------------------
-- Table structure for `fs_level`
-- ----------------------------
DROP TABLE IF EXISTS `fs_level`;
CREATE TABLE `fs_level` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `game_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '游戏类型',
  `level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '等级',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '等级名称',
  `quota` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '额度',
  `rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '返水比例',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of fs_level
-- ----------------------------
INSERT INTO `fs_level` VALUES ('1', '1', '1', '一星会员', '100.00', '0.7', '2018-07-08 21:24:36', '2018-10-09 02:18:26');
INSERT INTO `fs_level` VALUES ('2', '5', '1', '一星会员', '100.00', '0.6', '2018-07-09 03:18:11', '2018-07-12 15:03:59');
INSERT INTO `fs_level` VALUES ('3', '3', '1', '一星会员', '100.00', '1.2', '2018-07-09 14:48:55', '2018-07-12 15:04:48');
INSERT INTO `fs_level` VALUES ('4', '1', '2', '2星会员', '100000.00', '0.8', '2018-07-12 15:05:29', '2018-07-12 15:05:29');
INSERT INTO `fs_level` VALUES ('5', '2', '1', '一星会员', '100.00', '1.2', '2018-07-12 15:06:20', '2018-07-12 15:06:20');
INSERT INTO `fs_level` VALUES ('6', '3', '2', '2星会员', '100000.00', '1.5', '2018-07-12 15:07:03', '2018-07-12 15:07:03');
INSERT INTO `fs_level` VALUES ('7', '5', '2', '2星会员', '100000.00', '0.8', '2018-07-12 15:07:27', '2018-07-12 15:07:27');
INSERT INTO `fs_level` VALUES ('8', '2', '2', '2星会员', '100000.00', '1.5', '2018-07-12 15:07:54', '2018-07-12 15:07:54');
INSERT INTO `fs_level` VALUES ('9', '1', '3', '三星会员', '500000.00', '0.9', '2018-07-12 15:08:24', '2018-07-12 15:08:24');
INSERT INTO `fs_level` VALUES ('10', '5', '3', '三星会员', '500000.00', '1', '2018-07-12 15:08:46', '2018-07-12 15:08:46');
INSERT INTO `fs_level` VALUES ('11', '3', '3', '三星会员', '500000.00', '2', '2018-07-12 15:09:04', '2018-07-12 15:09:04');
INSERT INTO `fs_level` VALUES ('12', '2', '3', '三星会员', '500000.00', '2', '2018-07-12 15:09:16', '2018-07-12 15:09:16');
INSERT INTO `fs_level` VALUES ('17', '4', '1', '一星会员', '100.00', '0.6', '2018-10-09 02:17:57', '2018-10-09 02:17:57');
INSERT INTO `fs_level` VALUES ('18', '7', '1', '一星会员', '100.00', '0.6', '2018-10-09 02:18:20', '2018-10-09 02:18:20');
INSERT INTO `fs_level` VALUES ('19', '6', '1', '一星会员', '100.00', '0.6', '2018-10-09 02:19:08', '2018-10-09 02:19:08');

-- ----------------------------
-- Table structure for `fs_log`
-- ----------------------------
DROP TABLE IF EXISTS `fs_log`;
CREATE TABLE `fs_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL COMMENT '用户ID',
  `bet_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '下注金额',
  `yx_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '有效投注',
  `yingli` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '网站盈利',
  `fs_level` tinyint(4) NOT NULL COMMENT '返水等级',
  `fs_rate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '返水比率%',
  `fs_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '返水金额',
  `fs_order` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '返水批次号',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of fs_log
-- ----------------------------

-- ----------------------------
-- Table structure for `game_lists`
-- ----------------------------
DROP TABLE IF EXISTS `game_lists`;
CREATE TABLE `game_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `api_id` int(11) DEFAULT NULL COMMENT '平台ID',
  `api_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名称',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名称',
  `en_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '英文名称',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '游戏分类',
  `client_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1PC 2手机',
  `game_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '游戏类型',
  `game_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏ID',
  `game_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名',
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机图片',
  `img_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机图片',
  `img_pc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'PC图片',
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0正常1热门',
  `sort` int(10) unsigned NOT NULL DEFAULT '100' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=880 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of game_lists
-- ----------------------------

-- ----------------------------
-- Table structure for `game_record`
-- ----------------------------
DROP TABLE IF EXISTS `game_record`;
CREATE TABLE `game_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rowid` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `billNo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注单流水号',
  `api_type` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '接口平台 如 AG MG',
  `playerName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '玩家各平台账号',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '玩家账号',
  `member_id` int(11) NOT NULL COMMENT '用户 ID',
  `agentCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代理商编号',
  `gameCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏局号',
  `netAmount` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '玩家输赢额度',
  `betTime` timestamp NULL DEFAULT NULL COMMENT '投注时间',
  `gameType` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏类型',
  `betAmount` decimal(16,2) DEFAULT '0.00' COMMENT '投注金额',
  `validBetAmount` decimal(16,2) DEFAULT '0.00' COMMENT '有效投注额度',
  `flag` int(11) DEFAULT '0' COMMENT '结算状态',
  `playType` int(11) DEFAULT '0' COMMENT '游戏玩法',
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '货币类型',
  `tableCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '桌子编号',
  `loginIP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '玩家IP',
  `recalcuTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注单重新派彩时间',
  `platformId` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '平台编号',
  `platformType` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '平台类型',
  `stringex` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '产品附注(通常为空)',
  `remark` text COLLATE utf8mb4_unicode_ci COMMENT '返回信息',
  `round` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyFlag` int(11) DEFAULT '0' COMMENT '更新标志',
  `filePath` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '文件路径',
  `cpzl` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '彩票种类',
  `wfmz` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '玩法名字',
  `xzhm` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '下注号码',
  `odds` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赔率',
  `oddsType` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赔率类型',
  `eventName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '赛事名称',
  `betStatus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注单状态',
  `netPnl` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '净输赢',
  `settleTime` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '结算时间',
  `zTeam` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '主队',
  `kTeam` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客队',
  `prefix` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '站点前缀',
  `result` text COLLATE utf8mb4_unicode_ci COMMENT '返回信息',
  `reAmount` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '备用',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isfs` tinyint(3) DEFAULT '0',
  `is_mluse` tinyint(1) DEFAULT '0' COMMENT '码量标记0为1已经',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `game_record_billno_index` (`billNo`) USING BTREE,
  KEY `game_record_api_type_index` (`api_type`) USING BTREE,
  KEY `game_record_playername_index` (`playerName`) USING BTREE,
  KEY `game_record_bettime_index` (`betTime`) USING BTREE,
  KEY `game_record_gametype_index` (`gameType`) USING BTREE,
  KEY `copyFlag` (`copyFlag`) USING BTREE,
  KEY `prefix` (`prefix`) USING BTREE,
  KEY `member_id` (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13414 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of game_record
-- ----------------------------

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '原始密码',
  `gender` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0男1女',
  `is_daili` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1为代理',
  `top_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级 id',
  `invite_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '邀请注册码',
  `qk_pwd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '取款密码',
  `money` decimal(16,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '中心账户余额',
  `fs_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '反水账户余额',
  `total_amount` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '平台总投注额',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `register_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '注册IP',
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '最后登录ip',
  `last_login_at` timestamp NULL DEFAULT NULL COMMENT '最后登录时间',
  `bank_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户人名字',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行名称',
  `bank_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户行网点',
  `bank_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '银行卡号',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '开户地址',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `is_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 未登录 1已登录',
  `o_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '登录密码',
  `agent_uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代理链接',
  `agent_uri_pre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代理链接前缀',
  `last_session` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_tips_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否开启登录提示',
  `is_in_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否内部账号',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `register_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weixin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_ag` tinyint(1) NOT NULL DEFAULT '1',
  `is_trans_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '自动转入功能，0表示关闭，1表示开启',
  `is_sunbets` tinyint(1) NOT NULL DEFAULT '1',
  `ml_money` decimal(16,2) DEFAULT '0.00' COMMENT '码量',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `members_name_unique` (`name`) USING BTREE,
  UNIQUE KEY `members_invite_code_unique` (`invite_code`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of members
-- ----------------------------

-- ----------------------------
-- Table structure for `member_api`
-- ----------------------------
DROP TABLE IF EXISTS `member_api`;
CREATE TABLE `member_api` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台账号',
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '平台密码',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '平台余额',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '描述',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of member_api
-- ----------------------------

-- ----------------------------
-- Table structure for `member_daili_apply`
-- ----------------------------
DROP TABLE IF EXISTS `member_daili_apply`;
CREATE TABLE `member_daili_apply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msn_qq` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '申请状态',
  `fail_reason` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of member_daili_apply
-- ----------------------------

-- ----------------------------
-- Table structure for `member_login_log`
-- ----------------------------
DROP TABLE IF EXISTS `member_login_log`;
CREATE TABLE `member_login_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '登录ip',
  `is_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0登录 1登出',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=898 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of member_login_log
-- ----------------------------

-- ----------------------------
-- Table structure for `member_message`
-- ----------------------------
DROP TABLE IF EXISTS `member_message`;
CREATE TABLE `member_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `is_read` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0未读1已读',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of member_message
-- ----------------------------

-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '标题 系统公告 活动公告',
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公告内容',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '跳转链接',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', 'NG演示站，请勿充值，谨防被骗', 'NG演示站，请勿充值，谨防被骗', null, '2018-07-09 15:16:24', '2018-07-09 15:16:24');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2016_12_26_171107_create_member_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_04_24_103644_create_finances_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_04_24_143636_create_transfers_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_04_25_134304_create_game_record_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_04_25_163600_create_system_config_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_04_26_124242_create_activities_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_04_28_195111_create_api_tables', '1');
INSERT INTO `migrations` VALUES ('9', '2017_05_08_090943_create_roles_table', '1');
INSERT INTO `migrations` VALUES ('10', '2017_05_19_132945_create_game_list_table', '1');
INSERT INTO `migrations` VALUES ('11', '2017_07_29_125746_create_pay_records_table', '1');
INSERT INTO `migrations` VALUES ('12', '2017_08_16_195057_create_game_lists_table', '1');
INSERT INTO `migrations` VALUES ('13', '2017_11_16_134233_create_ctrs_table', '1');
INSERT INTO `migrations` VALUES ('14', '2018_01_22_133424_create_abouts_table', '1');
INSERT INTO `migrations` VALUES ('15', '2018_03_29_130904_create_reds_table', '1');
INSERT INTO `migrations` VALUES ('16', '2018_06_16_141610_create_banners_table', '1');

-- ----------------------------
-- Table structure for `pay_records`
-- ----------------------------
DROP TABLE IF EXISTS `pay_records`;
CREATE TABLE `pay_records` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '订单号 唯一',
  `opeNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付订单号',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `member_id` int(11) NOT NULL COMMENT '用户 ID',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `payTime` timestamp NULL DEFAULT NULL COMMENT '支付时间',
  `pay_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1网银支付2扫码支付',
  `bankId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '若为银行卡支付 银行代码',
  `typeId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '若为扫码 1支付宝2微信',
  `clientIp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `before_request_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1',
  `after_request_result` text COLLATE utf8mb4_unicode_ci COMMENT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `pay_records_order_no_unique` (`order_no`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1791 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of pay_records
-- ----------------------------

-- ----------------------------
-- Table structure for `recharge`
-- ----------------------------
DROP TABLE IF EXISTS `recharge`;
CREATE TABLE `recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '交易流水号',
  `member_id` int(11) NOT NULL COMMENT '用户id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '充值人名称、昵称',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '充值金额',
  `payment_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '转账类型 1支付宝2微信3银行转账',
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '账户 支付宝账户 微信账户 银行卡号 例子 ： 11231@rjfxz.com',
  `payment_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1待确认2充值成功3充值失败',
  `diff_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '赠送金额',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '充值前金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '充值后金额',
  `score` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '积分',
  `fail_reason` text COLLATE utf8mb4_unicode_ci COMMENT '失败原因',
  `hk_at` timestamp NULL DEFAULT NULL COMMENT '客户填写的汇款时间',
  `confirm_at` timestamp NULL DEFAULT NULL COMMENT '确认转账时间',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of recharge
-- ----------------------------

-- ----------------------------
-- Table structure for `reds`
-- ----------------------------
DROP TABLE IF EXISTS `reds`;
CREATE TABLE `reds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `min_amount` decimal(16,2) NOT NULL COMMENT '1',
  `max_amount` decimal(16,2) NOT NULL COMMENT '1',
  `times` tinyint(4) NOT NULL COMMENT '1',
  `min_rate` tinyint(4) NOT NULL COMMENT '1',
  `max_rate` tinyint(4) NOT NULL COMMENT '1',
  `on_line` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `sort` int(10) unsigned NOT NULL DEFAULT '10' COMMENT '排序',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of reds
-- ----------------------------
INSERT INTO `reds` VALUES ('1', '100.00', '100.00', '1', '10', '10', '1', '1', '1', '2018-08-05 12:30:58', '2018-11-16 13:04:41');
INSERT INTO `reds` VALUES ('2', '501.00', '50000.00', '1', '5', '10', '0', '1', '1', '2018-08-06 16:15:09', '2018-08-06 16:15:09');

-- ----------------------------
-- Table structure for `red_logs`
-- ----------------------------
DROP TABLE IF EXISTS `red_logs`;
CREATE TABLE `red_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `recharge_id` int(10) unsigned NOT NULL,
  `money` decimal(16,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of red_logs
-- ----------------------------

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '描述',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', '普通管理员', null, '2017-02-03 09:52:51', '2017-02-03 09:52:51');
INSERT INTO `roles` VALUES ('2', '普通副管员', null, '2018-07-09 00:29:09', '2018-07-09 00:29:09');

-- ----------------------------
-- Table structure for `role_router`
-- ----------------------------
DROP TABLE IF EXISTS `role_router`;
CREATE TABLE `role_router` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `router` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=211 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_router
-- ----------------------------
INSERT INTO `role_router` VALUES ('161', '1', 'activity.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('160', '1', 'activity.create', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('159', '1', 'activity.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('158', '1', 'send_fs.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('157', '1', 'fs_level.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('156', '1', 'fs_level.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('155', '1', 'fs_level.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('154', '1', 'fs.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('153', '1', 'send_fs.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('152', '1', 'fs_level.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('151', '1', 'yj_level.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('150', '1', 'yj_level.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('149', '1', 'yj_level.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('148', '1', 'send_daili_money.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('147', '1', 'member_daili.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('146', '1', 'member_daili.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('145', '1', 'member_daili.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('144', '1', 'member_daili_apply.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('143', '1', 'member_daili_apply.show', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('142', '1', 'yj_level.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('141', '1', 'daili_money_log.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('140', '1', 'send_daili_money.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('139', '1', 'member_offline_game_record.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('138', '1', 'member_offline_dividend.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('137', '1', 'member_offline_drawing.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('136', '1', 'member_offline_recharge.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('135', '1', 'member_offline.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('134', '1', 'member_daili.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('133', '1', 'member_daili_apply.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('132', '1', 'red.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('131', '1', 'red.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('130', '1', 'drawing.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('129', '1', 'drawing.confirm', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('128', '1', 'recharge.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('127', '1', 'recharge.confirm', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('126', '1', 'red.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('125', '1', 'drawing.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('124', '1', 'recharge.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('123', '1', 'money_report.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('122', '1', 'member.post_assign', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('121', '1', 'member.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('120', '1', 'member.check', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('119', '1', 'member.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('118', '1', 'member.show', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('117', '1', 'transfer.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('116', '1', 'game_record.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('115', '1', 'member_login_log.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('114', '1', 'dividend.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('113', '1', 'member.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('112', '1', 'ctr.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('111', '1', 'black_list_ip.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('110', '1', 'black_list_ip.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('109', '1', 'black_list_ip.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('108', '1', 'system_config.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('107', '1', 'bank_card.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('106', '1', 'bank_card.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('105', '1', 'bank_card.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('104', '1', 'role.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('103', '1', 'role.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('102', '1', 'role.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('101', '1', 'user.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('100', '1', 'user.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('99', '1', 'ctr.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('98', '1', 'black_list_ip.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('97', '1', 'system_config.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('96', '1', 'admin_action_money_log.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('95', '1', 'bank_card.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('94', '1', 'role.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('93', '1', 'user.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('162', '1', 'activity.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('163', '1', 'activity.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('164', '1', 'system_notice.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('165', '1', 'message.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('166', '1', 'about.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('167', '1', 'system_notice.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('168', '1', 'system_notice.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('169', '1', 'system_notice.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('170', '1', 'message.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('171', '1', 'message.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('172', '1', 'message.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('173', '1', 'about.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('174', '1', 'about.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('175', '1', 'about.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('176', '1', 'apple.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('177', '1', 'tcg_game_list.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('178', '1', 'apple.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('179', '1', 'apple.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('180', '1', 'apple.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('181', '1', 'tcg_game_list.store', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('182', '1', 'tcg_game_list.update', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('183', '1', 'tcg_game_list.destroy', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('184', '1', 'user.personal.post', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('185', '1', 'feedback.index', '2018-08-05 23:18:32', '2018-08-05 23:18:32');
INSERT INTO `role_router` VALUES ('201', '2', 'game_record.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('200', '2', 'member_login_log.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('199', '2', 'dividend.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('198', '2', 'member.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('202', '2', 'transfer.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('203', '2', 'member.update', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('204', '2', 'member.destroy', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('205', '2', 'member.post_assign', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('206', '2', 'system_notice.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('207', '2', 'message.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('208', '2', 'about.index', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('209', '2', 'system_notice.store', '2018-11-26 11:20:20', '2018-11-26 11:20:20');
INSERT INTO `role_router` VALUES ('210', '2', 'system_notice.update', '2018-11-26 11:20:20', '2018-11-26 11:20:20');

-- ----------------------------
-- Table structure for `system_config`
-- ----------------------------
DROP TABLE IF EXISTS `system_config`;
CREATE TABLE `system_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站logo',
  `m_site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机站网站logo',
  `site_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站名称',
  `site_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站标题',
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '关键字',
  `phone1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客户电话1',
  `phone2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客户电话2',
  `site_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站主域名',
  `qq` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'qq',
  `service_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客服链接',
  `app_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'APP链接',
  `wap_qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'APP链接',
  `pic_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'pic链接',
  `is_maintain` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 正常1维护',
  `maintain_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '维护提示语',
  `active_member_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '活跃用户月充值金额',
  `alipay_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付宝昵称',
  `alipay_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支付宝账号',
  `alipay_qrcode` text COLLATE utf8mb4_unicode_ci,
  `wechat_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信昵称',
  `wechat_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信账号',
  `wechat_qrcode` text COLLATE utf8mb4_unicode_ci,
  `qq_nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信昵称',
  `qq_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '微信账号',
  `qq_qrcode` text COLLATE utf8mb4_unicode_ci,
  `is_qq_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_alipay_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_wechat_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_bankpay_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `is_thirdpay_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `third_version` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '版本',
  `third_userid` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'id',
  `third_userkey` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'key',
  `third_pay_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '提交链接',
  `web_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '网站域名',
  `is_sms_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `sms_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '短信 ID',
  `sms_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '短信 key',
  `sms_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '短信 token',
  `sms_temp_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '模板 ID',
  `alert_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '弹框图片',
  `is_alert_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `left_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '左侧悬浮图片',
  `is_left_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `right_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '右侧悬浮图片',
  `is_right_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `is_ctr_on` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线1下线',
  `big_amount` decimal(16,2) NOT NULL DEFAULT '10000.00',
  `transfer_times` int(10) unsigned NOT NULL DEFAULT '5',
  `is_transfer_on` tinyint(4) NOT NULL DEFAULT '0',
  `is_mbk_on` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_qq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代理QQ',
  `wx_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '客服微信二维码',
  `fs_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '返水提醒',
  `cz_ration` int(4) DEFAULT NULL COMMENT '充值赠送比例',
  `auto_logout_time` int(4) DEFAULT NULL COMMENT '后台自动登出时间',
  `is_hongbao` tinyint(4) NOT NULL DEFAULT '1' COMMENT '网站红包控制1为开启2为关闭',
  `is_real_name_1` tinyint(1) NOT NULL DEFAULT '0',
  `is_real_name_2` tinyint(1) NOT NULL DEFAULT '0',
  `is_phone_1` tinyint(1) NOT NULL DEFAULT '1',
  `is_phone_2` tinyint(1) NOT NULL DEFAULT '0',
  `is_email_1` tinyint(1) NOT NULL DEFAULT '0',
  `is_email_2` tinyint(1) NOT NULL DEFAULT '0',
  `is_weixin_1` tinyint(1) NOT NULL DEFAULT '0',
  `is_weixin_2` tinyint(1) NOT NULL DEFAULT '0',
  `is_qq_1` tinyint(1) NOT NULL DEFAULT '0',
  `is_qq_2` tinyint(1) NOT NULL DEFAULT '0',
  `is_regtj_1` tinyint(1) NOT NULL DEFAULT '0',
  `is_regtj_2` tinyint(1) NOT NULL DEFAULT '0',
  `left_ad` tinyint(1) NOT NULL DEFAULT '1',
  `right_ad` tinyint(1) NOT NULL DEFAULT '1',
  `is_new_center` tinyint(1) DEFAULT '1',
  `is_fs` tinyint(1) DEFAULT '1',
  `ml_percent` decimal(5,2) DEFAULT '0.00' COMMENT '码量倍数',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of system_config
-- ----------------------------
INSERT INTO `system_config` VALUES ('1', '/uploads/2018-11-30/6090136d3aa019497965839da1345a2a8e05e40d.png', '/uploads/2018-11-30/6090136d3aa019497965839da1345a2a8e05e40d.png', '演示站', '演示站', '演示站', null, null, null, null, null, null, '/uploads/2018-11-12/30b1f8b79a2053258742c9c864c27dfc7566a119.png', null, '0', null, '200.00', 'NG', null, '/uploads/2018-12-26/889b3abde35efb71a9dbeaec4fa8fc88160f31a8.png,/uploads/2018-12-26/0d9aeb1350b459ab1e75f800cc476af1cf6f3321.jpg,/uploads/2018-12-26/6943276745c8cf7f9698e95f82afebedd2e22bbc.png', 'NG', null, '/uploads/2018-12-26/e06513ba5c69563577056a6e606b4a3a88afd5a6.png,/uploads/2018-12-26/4f3649ed8b4d6dc76e0bef729d66da1742664a09.png,/uploads/2018-12-26/f575ae1fa445d01febfef6ebd5f766f167c7ca45.png', null, null, '/uploads/2018-12-26/43bd4c58dd815afd2e32136f20ed7d9c7b0eb1cc.png,/uploads/2018-12-26/ded1eb32c6163cdd8f39bc016f9366f75d9df503.png,/uploads/2018-12-26/5062d885e614943ea95ea7c5f7a135daf3476203.png', '0', '0', '0', '0', '1', '1.0', null, null, 'https://api.bifapay.com', null, '1', null, null, null, null, '/uploads/2018-11-12/131914df464e82aff0bf75b2a63ddddeecc897d8.png', '1', null, '1', null, '1', '1', '10000.00', '5', '0', '1', '2017-02-03 09:52:51', '2018-12-26 14:12:53', null, '/uploads/2018-12-08/839192416fd84b1778b4977c4511d413fb71197b.jpg', '15:00', '0', '2', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0.00');

-- ----------------------------
-- Table structure for `system_notice`
-- ----------------------------
DROP TABLE IF EXISTS `system_notice`;
CREATE TABLE `system_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '标题 系统公告 活动公告',
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公告内容',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_line` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0上线 1下线',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of system_notice
-- ----------------------------
INSERT INTO `system_notice` VALUES ('2', 'NG演示站，请勿充值，谨防被骗', 'NG演示站，请勿充值，谨防被骗', '1', null, '0', '2018-07-09 22:57:11', '2018-09-30 15:56:21');

-- ----------------------------
-- Table structure for `tcg_game_list`
-- ----------------------------
DROP TABLE IF EXISTS `tcg_game_list`;
CREATE TABLE `tcg_game_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `displayStatus` tinyint(4) NOT NULL DEFAULT '0',
  `gameType` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏类型',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gameName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏名称',
  `tcgGameCode` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '游戏代码',
  `productCode` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '产品名称',
  `platform` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '支持的平台 flash,html5',
  `productType` int(11) DEFAULT NULL COMMENT '产品编号',
  `sort` int(11) NOT NULL DEFAULT '1000' COMMENT '排序',
  `on_line` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0上线1下线',
  `client_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pc' COMMENT '1',
  `img_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_pc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3458 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tcg_game_list
-- ----------------------------

-- ----------------------------
-- Table structure for `template`
-- ----------------------------
DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '模板名称',
  `pic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '模板图片',
  `client_type` tinyint(255) DEFAULT '1' COMMENT '客户端类型 1 pc 2手机',
  `sort` int(4) DEFAULT NULL COMMENT '排序',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态',
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '模板路径',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of template
-- ----------------------------
INSERT INTO `template` VALUES ('1', '模板1', '/uploads/2018-11-30/16c6ede4c84d5ba259b352d19e71153cf3615e8c.jpg', '1', '1', '1', 'mb1', '2018-11-16 12:41:01.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('2', '模板2', '/uploads/2018-11-30/1f81222a4a0ccb5459134d1f2b30d29e27fa3d14.jpg', '1', '1', '1', 'mb2', '2018-11-16 14:00:00.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('3', '模板3', '/uploads/2018-11-30/93830fbdd3a0844bfa3b49897659cdae70edfc40.jpg', '1', '1', '1', 'mb3', '2018-11-16 14:00:21.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('4', '模板4', '/uploads/2018-11-30/fcc769be51f60cc888b8f1735db6f18379bd9790.jpg', '1', '1', '1', 'mb4', '2018-11-16 14:16:18.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('5', '模板5', '/uploads/2018-11-30/5156e4f305f95609dc794be0f7dd54ed5a02a533.jpg', '1', '1', '1', 'mb5', '2018-11-16 14:39:11.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('6', '模板6', '/uploads/2018-11-30/36a795fef41d2ca8777efb6bf08124fc36059943.jpg', '1', '1', '1', 'mb6', '2018-11-16 14:39:34.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('7', '模板7', '/uploads/2018-11-30/487f7871d1cd6496c154516f164d8a81942772ff.jpg', '1', '1', '1', 'mb7', '2018-11-16 15:09:29.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('8', '模板8', '/uploads/2018-11-30/4e26c6e28dbadd99858aa3461ad64293f910bee0.jpg', '1', '1', '1', 'mb8', '2018-11-16 15:09:39.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('9', '模板9', '/uploads/2018-11-30/09ad9f9b90b03924fb373bda1b6881fd786c549c.jpg', '1', '1', '1', 'mb9', '2018-11-16 15:10:09.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('10', '模板10', '/uploads/2018-11-30/fa1dee7a26e9fd7b342a339aa3e387c5ff551765.jpg', '1', '1', '1', 'mb10', '2018-11-16 15:10:26.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('11', '模板11', '/uploads/2018-11-30/90432e708a17805614db31a82058b2db5b3b7d9b.jpg', '1', '1', '1', 'mb11', '2018-11-16 15:10:45.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('12', '模板12', '/uploads/2018-11-30/c689b26fb175ffadb330909981d878e0b36b4c82.jpg', '1', '1', '1', 'mb12', '2018-11-16 15:14:22.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('13', '模板13', '/uploads/2018-11-30/013dc65d81f13d93b830a4ebf7b4e3dda08e2766.jpg', '1', '1', '1', 'mb13', '2018-11-16 15:14:26.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('14', '模板14', '/uploads/2018-11-30/7029798afadf53bf098eb87eb872a0536394c505.jpg', '1', '1', '1', 'mb14', '2018-11-16 15:27:16.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('15', '模板15', '/uploads/2018-11-30/17c19a5aa686a6f4fc7c1cabe581500636444016.jpg', '1', '1', '1', 'mb15', '2018-11-28 10:34:53.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('16', '模板16', '/uploads/2018-11-30/9d8873c5833fb1def0f09880b30812e3e12555c3.jpg', '1', '1', '1', 'mb16', '2018-11-28 13:18:45.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('17', '模板17', '/uploads/2018-11-30/a661aa992113ca9ce427937b792cee24871e922e.jpg', '1', '1', '2', 'mb17', '2018-11-28 17:15:46.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('18', '模板18', '/uploads/2018-11-30/162f22079bebaa1af4b081e1c8c3182ef7ef205f.jpg', '1', '1', '1', 'mb18', '2018-11-29 13:06:42.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('19', '模板19', '/uploads/2018-11-30/e0bece370b02202d277b36f28396dc36fc8e10bd.jpg', '1', '1', '1', 'mb19', '2018-11-29 16:03:49.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('20', '模板20', '/uploads/2018-11-30/373f0e7ade32ffc53018a9134e49fce83275c6fe.jpg', '1', '1', '1', 'mb20', '2018-11-30 11:13:28.000000', '2019-05-27 10:59:03.000000');
INSERT INTO `template` VALUES ('21', '手机模板1', '/uploads/2019-02-21/ed7dfcd88357de2eda466516f27ae5c37a914d7e.png', '2', '1', '1', null, '2019-01-12 15:03:42.000000', '2019-04-11 12:30:59.000000');
INSERT INTO `template` VALUES ('22', '手机模板2', '/uploads/2019-02-21/79c0e9524f30f02bc7845fa312a2e7193051f21e.png', '2', '1', '2', 'theme2', '2019-01-12 15:04:24.000000', '2019-04-11 12:30:59.000000');
INSERT INTO `template` VALUES ('63', '模板23', '/uploads/2019-06-12/9bb17140c96c4c57dfbdef6313fecba0148d6a08.png', '1', '1', '1', 'mb23', '2019-05-14 11:45:38.000000', '2019-06-12 15:11:22.000000');
INSERT INTO `template` VALUES ('64', '模板24', '/uploads/2019-06-12/dfa8c98948eadf8ec5e425435989ca79b26c0e0d.png', '1', '1', '1', 'mb24', '2019-05-27 15:27:22.000000', '2019-06-12 15:09:41.000000');
INSERT INTO `template` VALUES ('65', '模板25', '/uploads/2019-06-12/825f8509dd086f6a5bc123392e3935ef46163fcf.png', '1', '1', '1', 'mb25', '2019-05-28 11:05:37.000000', '2019-06-12 15:12:57.000000');
INSERT INTO `template` VALUES ('66', '模板26', '/uploads/2019-06-12/bbaf7506b46e8893dee37cb5bda563495d3362e7.png', '1', '1', '1', 'mb26', '2019-05-29 11:03:39.000000', '2019-06-12 15:14:26.000000');
INSERT INTO `template` VALUES ('67', '模板27', '/uploads/2019-06-12/462080f0ad6553518ae354ed0293ce7c5c7da95d.png', '1', '1', '1', 'mb27', '2019-05-30 10:47:54.000000', '2019-06-12 15:15:44.000000');
INSERT INTO `template` VALUES ('68', '模板28', '/uploads/2019-06-12/c7d1bcd3951af12137c323c45e6b2969130f814c.png', '1', '1', '1', 'mb28', '2019-06-06 11:21:27.000000', '2019-06-12 15:16:46.000000');
INSERT INTO `template` VALUES ('69', '模板29', '/uploads/2019-06-12/928317098c9acdabde5aa9f22f5f5d65be129bae.png', '1', '1', '1', 'mb29', '2019-06-10 10:38:31.000000', '2019-06-12 15:17:41.000000');
INSERT INTO `template` VALUES ('70', '模板30', '/uploads/2019-06-12/ff296abbd1416d2652d6533342d5553dd597f3a1.png', '1', '1', '1', 'mb30', '2019-06-11 11:18:07.000000', '2019-06-12 15:20:34.000000');
INSERT INTO `template` VALUES ('71', '模板31', '/uploads/2019-06-12/11707f5566312445713f997fceed01ee153c6ec7.png', '1', '1', '1', 'mb31', '2019-06-12 11:30:41.000000', '2019-06-12 15:21:39.000000');
INSERT INTO `template` VALUES ('72', '模板32', '/uploads/2019-10-10/f6f7c7eb868b811d10329bf2c0d5ad3da8dd9bfd.jpg', '1', '1', '1', 'mb32', '2019-11-27 17:33:13.000000', '2019-11-27 17:33:20.000000');
INSERT INTO `template` VALUES ('73', '手机模板3', '/uploads/2019-12-16/1f3baa3e580805e45454bcd8a33f23630a04313a.png', '1', null, '1', 'theme3', '2019-12-16 12:32:22.000000', '2019-12-16 12:33:10.000000');
INSERT INTO `template` VALUES ('74', '手机模板4', '/uploads/2020-01-08/66054d649e0630d9fae992a99a98efafb1222716.png', '2', '1', '1', 'theme4', '2020-01-26 12:32:22.000000', '2020-01-16 12:33:10.000000');
INSERT INTO `template` VALUES ('75', '手机模板5', '/uploads/2020-02-02/a2df877e8345d8c3bbfd09ab35afdfe2d5cf67e1.png', '2', '1', '1', 'theme5', '2020-02-03 12:32:22.000000', '2020-02-03 12:33:10.000000');

-- ----------------------------
-- Table structure for `transfers`
-- ----------------------------
DROP TABLE IF EXISTS `transfers`;
CREATE TABLE `transfers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 AG账户 2BBIN 账户 3MG账户',
  `member_id` int(11) NOT NULL COMMENT '用户ID',
  `transfer_type` tinyint(4) DEFAULT '0' COMMENT '0 转入游戏 1转出游戏',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '转换类型 1 中心账户转入MG账户',
  `money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '用户填写的转换金额',
  `diff_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '差价金额，即红利',
  `real_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '实际转换金额',
  `before_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '转账前的金额',
  `after_money` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '转账后的金额',
  `transfer_in_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '转入账户',
  `transfer_out_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '转出账户',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `result` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of transfers
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '1' COMMENT '角色 id 1游客',
  `last_session` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'admin@rjfxz.com', 'admin@rjfxz.com', '$2y$10$HM9LmRkWo91sZDJIGzdL3.6nABzw7n3V1M17Z2wW1xVbn/M.022zC', '1', '1', '58s3aW4lSMReu66QWstg0W98VPiFqcdr8XeDsiVU', '52yLGppw5s7YwpmbN6Zy4SjoIUnGZhB4lXDZTVqUhXe1eBlXz3d2gtLgrnVW', '2018-07-09 00:30:35', '2019-10-23 16:24:27', null);

-- ----------------------------
-- Table structure for `version`
-- ----------------------------
DROP TABLE IF EXISTS `version`;
CREATE TABLE `version` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ver` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_time` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of version
-- ----------------------------
INSERT INTO `version` VALUES ('1', '1.86', '2020-02-03 17:32:27', '2019-01-28 22:18:34', '2019-01-28 22:18:34');

-- ----------------------------
-- Table structure for `yj_level`
-- ----------------------------
DROP TABLE IF EXISTS `yj_level`;
CREATE TABLE `yj_level` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level` tinyint(4) NOT NULL DEFAULT '1' COMMENT '等级',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '等级名称',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '活跃人数',
  `min` decimal(16,2) NOT NULL DEFAULT '0.00' COMMENT '最小金额',
  `max` decimal(16,2) DEFAULT NULL COMMENT '最大金额',
  `rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '佣金比例',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of yj_level
-- ----------------------------
INSERT INTO `yj_level` VALUES ('1', '1', '一星会员', '1', '1.00', '1000.00', '1.5', '2018-11-27 15:07:22', '2018-11-27 15:16:41');
