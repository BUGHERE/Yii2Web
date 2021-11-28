/*
Navicat MySQL Data Transfer

Source Server         : 101.200.41.24
Source Server Version : 50726
Source Host           : 101.200.41.24:3306
Source Database       : yii2web

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2021-11-28 21:53:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 2016interval_num
-- ----------------------------
DROP TABLE IF EXISTS `2016interval_num`;
CREATE TABLE `2016interval_num` (
  `my_interval` varchar(255) DEFAULT NULL,
  `my_num` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of 2016interval_num
-- ----------------------------
INSERT INTO `2016interval_num` VALUES ('less100', '211');
INSERT INTO `2016interval_num` VALUES ('100to200', '19');
INSERT INTO `2016interval_num` VALUES ('200to300', '6');
INSERT INTO `2016interval_num` VALUES ('300to400', '5');
INSERT INTO `2016interval_num` VALUES ('more400', '8');

-- ----------------------------
-- Table structure for athlete_num
-- ----------------------------
DROP TABLE IF EXISTS `athlete_num`;
CREATE TABLE `athlete_num` (
  `num` varchar(255) DEFAULT NULL,
  `Year` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of athlete_num
-- ----------------------------
INSERT INTO `athlete_num` VALUES ('380', '1896');
INSERT INTO `athlete_num` VALUES ('1936', '1900');
INSERT INTO `athlete_num` VALUES ('1301', '1904');
INSERT INTO `athlete_num` VALUES ('1733', '1906');
INSERT INTO `athlete_num` VALUES ('3101', '1908');
INSERT INTO `athlete_num` VALUES ('4040', '1912');
INSERT INTO `athlete_num` VALUES ('4292', '1920');
INSERT INTO `athlete_num` VALUES ('5233', '1924');
INSERT INTO `athlete_num` VALUES ('4992', '1928');
INSERT INTO `athlete_num` VALUES ('2969', '1932');
INSERT INTO `athlete_num` VALUES ('6506', '1936');
INSERT INTO `athlete_num` VALUES ('6405', '1948');
INSERT INTO `athlete_num` VALUES ('8270', '1952');
INSERT INTO `athlete_num` VALUES ('5127', '1956');
INSERT INTO `athlete_num` VALUES ('8119', '1960');
INSERT INTO `athlete_num` VALUES ('7702', '1964');
INSERT INTO `athlete_num` VALUES ('8588', '1968');
INSERT INTO `athlete_num` VALUES ('10304', '1972');
INSERT INTO `athlete_num` VALUES ('8641', '1976');
INSERT INTO `athlete_num` VALUES ('7191', '1980');
INSERT INTO `athlete_num` VALUES ('9454', '1984');
INSERT INTO `athlete_num` VALUES ('12037', '1988');
INSERT INTO `athlete_num` VALUES ('12977', '1992');
INSERT INTO `athlete_num` VALUES ('13780', '1996');
INSERT INTO `athlete_num` VALUES ('13821', '2000');
INSERT INTO `athlete_num` VALUES ('13443', '2004');
INSERT INTO `athlete_num` VALUES ('13602', '2008');
INSERT INTO `athlete_num` VALUES ('12920', '2012');
INSERT INTO `athlete_num` VALUES ('13688', '2016');

-- ----------------------------
-- Table structure for china_medal_num
-- ----------------------------
DROP TABLE IF EXISTS `china_medal_num`;
CREATE TABLE `china_medal_num` (
  `g` varchar(255) DEFAULT NULL,
  `s` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `t` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of china_medal_num
-- ----------------------------
INSERT INTO `china_medal_num` VALUES ('38', '32', '18', '2021');
INSERT INTO `china_medal_num` VALUES ('26', '18', '26', '2016');
INSERT INTO `china_medal_num` VALUES ('38', '27', '23', '2012');
INSERT INTO `china_medal_num` VALUES ('51', '21', '28', '2008');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `news_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comment_time` datetime DEFAULT NULL,
  `comment_content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`news_id`,`comment_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '2021-07-23 11:04:29', '疫情期间，安全第一！');
INSERT INTO `comment` VALUES ('1', '2', '2021-07-28 11:06:46', '真是令人期待，在当前形势下还能举办实属不易，衷心希望东京奥运会一切顺利');
INSERT INTO `comment` VALUES ('1', '3', '2021-07-29 11:10:03', '中国竞走必胜');
INSERT INTO `comment` VALUES ('2', '1', '2021-10-07 11:17:01', '夺金时刻彰显中国精神');
INSERT INTO `comment` VALUES ('2', '2', '2021-11-06 11:17:26', '中国军团蓄势待发');
INSERT INTO `comment` VALUES ('2', '3', '2021-07-09 11:18:32', '哪些项目是金牌大户？');
INSERT INTO `comment` VALUES ('2', '4', '2021-10-09 11:19:02', '奖牌榜的前三甲会是谁？');
INSERT INTO `comment` VALUES ('3', '1', '2021-07-31 11:19:53', '东京2020');
INSERT INTO `comment` VALUES ('4', '1', '2021-08-12 11:20:26', '奥运火炬传递');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'John', '1234@qwer.asdf', '咨询问题', '请问互联网数据库开发大作业要截至了吗？');
INSERT INTO `contact` VALUES ('2', '1234', '1234', '1234', '1234');
INSERT INTO `contact` VALUES ('3', '1234', 'wqer', 'asdf', 'zxcv');

-- ----------------------------
-- Table structure for country_medal_top10
-- ----------------------------
DROP TABLE IF EXISTS `country_medal_top10`;
CREATE TABLE `country_medal_top10` (
  `country` varchar(255) DEFAULT NULL,
  `GoldMedal` varchar(255) DEFAULT NULL,
  `SilverMedal` varchar(255) DEFAULT NULL,
  `BronzeMedal` varchar(255) DEFAULT NULL,
  `Total` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of country_medal_top10
-- ----------------------------
INSERT INTO `country_medal_top10` VALUES ('USA', '39', '41', '33', '113');
INSERT INTO `country_medal_top10` VALUES ('China', '38', '32', '18', '88');
INSERT INTO `country_medal_top10` VALUES ('ROC', '20', '28', '23', '71');
INSERT INTO `country_medal_top10` VALUES ('Great Britain', '22', '21', '22', '65');
INSERT INTO `country_medal_top10` VALUES ('Japan', '27', '14', '17', '58');
INSERT INTO `country_medal_top10` VALUES ('Australia', '17', '7', '22', '46');
INSERT INTO `country_medal_top10` VALUES ('Italy', '10', '10', '20', '40');
INSERT INTO `country_medal_top10` VALUES ('Germany', '10', '11', '16', '37');
INSERT INTO `country_medal_top10` VALUES ('Netherlands', '10', '12', '14', '36');
INSERT INTO `country_medal_top10` VALUES ('France', '10', '12', '11', '33');

-- ----------------------------
-- Table structure for developer
-- ----------------------------
DROP TABLE IF EXISTS `developer`;
CREATE TABLE `developer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of developer
-- ----------------------------
INSERT INTO `developer` VALUES ('1', '王云浩', 'Coding...Yead', '2021-11-27 22:49:00', '天津 津南', 'https://bughere.github.io/');
INSERT INTO `developer` VALUES ('2', '王艺杰', '那些斑驳时光', '2021-11-27 22:52:14', '天津 津南', 'https://github.com/TheLastSavior');
INSERT INTO `developer` VALUES ('3', '闫晓晓', '一时想不起来了', '2021-11-27 22:53:06', '天津 津南', 'https://github.com/5-456');
INSERT INTO `developer` VALUES ('4', '张世辰', '这一行叫晚安', '2021-11-27 22:53:08', '天津 津南', 'https://github.com/Attractivehaha');

-- ----------------------------
-- Table structure for echart_test
-- ----------------------------
DROP TABLE IF EXISTS `echart_test`;
CREATE TABLE `echart_test` (
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of echart_test
-- ----------------------------
INSERT INTO `echart_test` VALUES ('john', '20', '50');
INSERT INTO `echart_test` VALUES ('mahone', '30', '60');

-- ----------------------------
-- Table structure for info
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', '互联网数据库开发', '互联网数据库开发大作业的截止日期是11.30');
INSERT INTO `info` VALUES ('2', 'Hello', 'Hello');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1637851105');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1637851116');
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', '1637851116');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_hits` int(11) DEFAULT NULL,
  `news_time` date DEFAULT NULL,
  `news_content` varchar(16000) DEFAULT NULL,
  PRIMARY KEY (`news_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '五年之约，东京奥运会今启幕！五大亮点值得关注', '15', '2021-07-23', '中新网客户端北京7月23日电(刘星晨)毫无疑问，东京奥运会将会成为近年来最为特殊的一届。从5年的备战周期，到疫情防控下的诸多新规诞生，无不证明着这一点。今晚，这届备受瞩目的盛会终于要揭开神秘面纱。\r\n\r\n东京奥运会将于7月23日至8月8日举行，历时17天。在滑板、冲浪、空手道等5个新项加入后，东京奥运共有33个大项，最终产生339枚金牌。由于比赛进程相对漫长，包括足球、垒球等项目已经先于开幕式开赛。\r\n\r\n看点1：开幕式值得期待\r\n\r\n北京时间今晚19时，开幕式将在东京新国立竞技场举行。根据最新版奥运防疫手册，代表团入场队列要保持2米间距，因此整体时间预计将延长30分钟。随着7月22日几内亚代表团宣布退出，原本排在第111位出场的中国代表团在开幕式上的出场顺位也将发生变化。那么在本届开幕式上，有哪些亮点值得期待呢？\r\n\r\n2021年3月8日，国际奥委会及东京奥组委等五方发表联合声明，鼓励各代表团在本次奥运会和残奥会派出一男一女两名运动员共同担任旗手。此前中国奥委会宣布，中国女排队长朱婷和跆拳道奥运冠军赵帅将担任旗手；而东道主日本代表团则由篮球运动员八村塁和摔跤世界冠军须崎优衣共同担任。\r\n\r\n由于疫情原因，开幕式将没有观众入场。对此奥组委表示，虽然会空场开幕，但是烟花秀以及运动员入场依旧可以看到，同时在现场也将听到观众的欢呼声。\r\n\r\n东京奥运会上，为了强调团结、包容、非歧视和平等的重要性，对奥运誓言进行了大幅修改，或将首次加入“性别平等”的内容。在开幕式上，宣誓人数也从3人增加到6人，其中包括2名运动员、2名教练员和2名裁判员。\r\n\r\n看点2：中国军团蓄势待发\r\n\r\n本次出征的中国代表团总人数为777人，其中运动员431人，是中国体育代表团境外参赛规模最大的一届奥运会，其中参加过奥运会的有138人。运动员平均年龄25.4岁，年龄最小的是跳水队的全红婵，年仅14岁；年龄最大的是马术队李振强，52岁，二人年龄差达到了38岁。\r\n\r\n本次东京奥运会的431名运动员中，有包括曹缘、赵帅、朱婷、钟天使、马龙、谌龙等24位奥运冠军领衔，他们将在各自项目上再次向金牌发起冲击。中国队在包括乒乓球、跳水、举重、射击、羽毛球、体操等项目中拥有一定集团优势，并在多个潜优势项目中有冲击金牌的希望。\r\n\r\n本届东京奥运会的首枚金牌，将在当地时间7月24日10：45进行的女子10米气步枪决赛中诞生。而中国代表团的两名运动员杨倩、王璐瑶将在该项目向首金发起冲击。\r\n\r\n作为两名后起新秀，二人有着出色的实力。2000年出生的杨倩在之前国家射击队东京奥运会选拔赛四站比赛中，四次收获10米气步枪冠军；而小将王璐瑶在2017年首次进入国家集训队后，便夺得亚洲射击锦标赛女子10米气步枪团体冠军。\r\n\r\n看点3：哪些项目是金牌大户？\r\n\r\n本届东京奥运会，将在46个大项上产生339枚金牌，那么哪些项目产生的金牌数量最多呢？\r\n\r\n根据东京奥运会官方网站的赛程和结果显示，田径、游泳、摔跤、柔道、射击所产生的金牌数量排在前5位。其中田径项目以48枚金牌排在首位，中国选手苏炳添、巩立姣、刘虹等人将出战。\r\n\r\n排在第二位的是游泳，共计产生35枚金牌，首金将于当地时间7月25日诞生，张雨霏在女子蝶泳项目上有望为中国代表团摘金；摔跤以21枚金牌排在第三位；而射击和柔道将分别产生15枚金牌。\r\n\r\n看点4：奖牌榜的前三甲会是谁？\r\n\r\n作为一届特殊的奥运会，本次东京奥运会的后期备战是在新冠疫情背景下进行的，在国际赛事大面积取消、运动员们无法按之前计划备战的情况下，奖牌榜前景更加扑朔迷离。\r\n\r\n在奥运会开幕倒计时100天时，著名数据公司Gracenote发布了对本届奥运会奖牌榜的预测。美国将以43枚金牌、114枚奖牌排名榜首，中国以38枚金牌、85枚奖牌位居次席，东道主日本将拿到34枚金牌、59枚奖牌。而在昨日发布的最后一期奖牌预测榜中，前三甲依旧被美国、中国、日本占据。\r\n\r\n作为传统体育强国，美国代表团早些时候公布了本次的613人名单， 这一参赛规模仅次于美国主场作战的1996年亚特兰大奥运会。在田径、游泳等项目上继续强势以外，美国在体操、自行车等项目上同样拥有不俗的实力。\r\n\r\n中国代表团在跳水、举重、乒乓球、羽毛球等项目上依旧有着不小的统治力，体操、射击等项目也有望在里约奥运会后重拾辉煌。\r\n\r\n作为东道主的日本，此番也由582名运动员组成了历史上规模最大的奥运代表团。据悉，日本队计划在家门口赢得30枚金牌，从而超越之前16块金牌的奥运最佳战绩。\r\n\r\n但此前日本奥委会主席山下泰裕在提及目标时认为，在疫情之下，难以理解提出奥运奖牌目标的意义，并指出日本代表团不会拘泥于“30枚金牌”。\r\n\r\n看点5：贯穿始终的日本动漫元素\r\n\r\n2016年的盛夏，在里约热内卢的马拉卡纳体育场，“东京8分钟”在闭幕式上压轴上演，哆啦A梦、大空翼、马里奥等形象一同在节目中亮相，日本动漫角色用“2020年东京见”向全世界发出了邀约。\r\n\r\n在东京奥运会上，赛场内外也随处可见日本的动漫元素。\r\n\r\n在日本具有超高人气的动漫《排球少年》中两位主角身披国家队战袍，在新建成的有明体育馆内，圆梦奥运会；设计师们也以国旗为基础，融合了日本特色动漫元素，为多个代表团设计了不同人物形象；此外，在开幕式上也有望出现融合展现当代日本文化的动漫游戏等“流行文化”。\r\n\r\n今天，等待了5年的体坛饕餮盛宴将揭开大幕，东京奥运会，这本要承载荣誉的记事本将被翻开。(完)');
INSERT INTO `news` VALUES ('2', '东京奥运会，让世界见证中国精神', '300', '2021-07-24', '8月8日晚上，历时16天的第32届东京奥林匹克运动会落下帷幕，中国体育代表团奥运健儿不断超越自我、实现突破，取得38枚金牌、32枚银牌、18枚铜牌的优异成绩，实现了运动成绩和精神文明双丰收，让世界见证中国精神，为祖国和人民赢得了荣誉。党中央、国务院发来贺电，向他们表示热烈祝贺和亲切慰问。\r\n\r\n夺金时刻彰显中国精神。东京奥运赛场上，中国奥运健儿克服新冠肺炎疫情带来的严峻挑战，勇于拼搏，超越自我，圆满完成参赛任务。从1932年刘长春代表中国单枪匹马独闯奥运，到1984年许海峰一击制胜零的突破；从2008年梦圆百年奥运，到2021年777人的中国体育代表团奔赴东京赛场续写篇章，中国奥运健儿不负党和人民嘱托，不忘初心，牢记使命，不畏艰难，敢于争先，迸发出强劲的中国力量。每块奖牌都是汗水和智慧的结晶，奏响《义勇军进行曲》的背后，是广大奥运健儿积极备战超乎常人想象的艰辛付出。他们弘扬奥林匹克精神和中华体育精神，以卓越的表现，践行“更快、更高、更强、更团结”的奥林匹克格言，为中国体育描绘出无比精彩的美好未来，向世界展示华夏儿女无以伦比的炫丽风采。\r\n\r\n并非夺冠才是英雄。习近平总书记指出：“成绩不仅仅在于能否拿到或拿到多少块奖牌，更在于体现奥林匹克精神，自强不息，战胜自我、超越自我。”奥运会最动人的瞬间不是只有夺金时刻，那些拼搏与挑战、突破与超越，都在诠释奥林匹克的意义。东京奥运赛场上，我国体育健儿奋力拼搏、永不言败，实现了“使命在肩、奋斗有我”的人生誓言。苏炳添9秒98的历史性一刻，王春雨800米挺进前五，马龙与樊振东的顶峰相见，肖若腾的无冕之王，昕雯组合的憾失金牌，女排的伤痛与泪……并非夺冠才是英雄，他们一次次改写历史，实现新的突破，践行为国争光使命，增强了中华民族的凝聚力、向心力、自信心，比获得金牌更珍贵。\r\n\r\n奥运赛场上不是只有竞技。奥运会不仅是世界性的体育竞技比赛，而且象征着世界的和平、友谊和团结，这就是奥运精神之所在。正如党中央、国务院给中国奥运健儿贺信中所写：“你们表现出你们与世界各国各地区运动员同台竞技、相互切磋，促进了交流，增进了友谊。”奥运健儿们场上他们相互激励，共同成长；场下，他们彼此拥抱，为对方喝彩，向奋进者祝贺。为参加本届东京奥运会，各国运动员克服新冠肺炎疫情带领的各种艰难险阻，跨越千山万水，不仅建立了弥足珍贵的友谊，更见证了世界和平、友谊团结、携手抗疫的不屈力量。\r\n\r\n奥运圣火生生不息，奥运精神薪火相传。告别东京2021年奥运会，走进2022北京冬奥会，期盼巴黎2024年奥运会，祝愿中国体育健儿再接再厉、再铸辉煌，为在全面建设社会主义现代化国家新征程上汇聚团结奋斗、凝心聚力的中国精神不懈努力。');
INSERT INTO `news` VALUES ('3', '官宣！东京奥组委：东京奥运会将如期举行', '30', '2021-07-24', '东京奥组委首席执行官武藤敏郎12日表示，关于东京奥运会取消或者推迟到2024年甚至2032年的消息都是假新闻。东京奥组委主席森喜朗在当天的讲话中也承诺，东京奥运会和残奥会将在今年夏天如期举行。\r\n\r\n这是东京奥组委高层官员近三个星期内首次发表公开谈话。这段时间日本疫情不断恶化，东京都和附近三个县都再次进入了紧急状态。日本民众对奥运会的信心出现动摇，共同社进行的最新民意调查表明，超过80%的日本民众希望奥运会被推迟或者取消。');
INSERT INTO `news` VALUES ('4', '日媒：东京奥运会改期至2021年7月23日开幕', '105', '2020-03-30', '3月30日，国际奥委会和日本政府决定，将东京奥运会开幕时间推迟到明年7月23日。　　日本《产经新闻》3月30日报道，国际奥委会和日本政府当日决定，东京奥运会改期至2021年7月23日开幕。　　3月24日，鉴于当前新冠肺炎疫情形势，国际奥委会与东京奥组委发表联合声明，宣布东京奥运会将改期至2020年后，但不迟于2021年夏天的日期举行。　　在3月30日东京奥组委召开的新闻发布会上，东京奥组委表示已经售出奥运的门票可以在延期后继续使用，如果由于时间变更无法继续使用门票的观众可以办理退票。　　奥运圣火将保存在日本，但是目前奥运圣火传递活动随着奥运会日程更改而延期。武藤敏郎表示，在日本境内的奥运圣火传递暂停，日程待定，如果奥运圣火传递重新确定日程的话，优先考虑奥运火炬传递的方式。　　延期后的东京奥运会，仍然沿用“东京2020（TOKYO2020）的名称。');

-- ----------------------------
-- Table structure for news_comment
-- ----------------------------
DROP TABLE IF EXISTS `news_comment`;
CREATE TABLE `news_comment` (
  `news_id` varchar(255) DEFAULT NULL,
  `comment_id` varchar(255) DEFAULT NULL,
  `comment_time` varchar(255) DEFAULT NULL,
  `comment_content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_comment
-- ----------------------------
INSERT INTO `news_comment` VALUES ('1', '1', '23/7/2021 11:04:29', '疫情期间，安全第一！');
INSERT INTO `news_comment` VALUES ('1', '2', '28/7/2021 11:06:46', '真是令人期待，在当前形势下还能举办实属不易，衷心希望东京奥运会一切顺利');
INSERT INTO `news_comment` VALUES ('1', '3', '29/7/2021 11:10:03', '中国竞走必胜');
INSERT INTO `news_comment` VALUES ('2', '1', '7/10/2021 11:17:01', '夺金时刻彰显中国精神');
INSERT INTO `news_comment` VALUES ('2', '2', '6/11/2021 11:17:26', '中国军团蓄势待发');
INSERT INTO `news_comment` VALUES ('2', '3', '9/7/2021 11:18:32', '哪些项目是金牌大户？');
INSERT INTO `news_comment` VALUES ('2', '4', '9/10/2021 11:19:02', '奖牌榜的前三甲会是谁？');
INSERT INTO `news_comment` VALUES ('3', '1', '31/7/2021 11:19:53', '东京2020');
INSERT INTO `news_comment` VALUES ('4', '1', '12/8/2021 11:20:26', '奥运火炬传递');

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('1', '2');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'root', 'vVmqi6053gPMXoCFVRfCc9KoUV_P-GAE', '$2y$13$8O/YSXWWy12a7l44onGhxekqcUFxysi92Deo0WAX4OqvrkjUp9Fbi', null, '1234@qwer.com', '10', '1637851178', '1637851178', '02y1Um_o94PXonLd7GwkFtgu7OY7yYJQ_1637851178');
