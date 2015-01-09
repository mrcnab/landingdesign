/*
SQLyog Community v11.51 (64 bit)
MySQL - 5.5.32 : Database - landingdesigns
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`landingdesigns` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `country` */

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  `address_format` text NOT NULL,
  `postcode_required` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=252 DEFAULT CHARSET=utf8;

/*Data for the table `country` */

insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (1,'Afghanistan','AF','AFG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (3,'Algeria','DZ','DZA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (4,'American Samoa','AS','ASM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (5,'Andorra','AD','AND','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (6,'Angola','AO','AGO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (7,'Anguilla','AI','AIA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (8,'Antarctica','AQ','ATA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (9,'Antigua and Barbuda','AG','ATG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (10,'Argentina','AR','ARG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (11,'Armenia','AM','ARM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (12,'Aruba','AW','ABW','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (13,'Australia','AU','AUS','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (14,'Austria','AT','AUT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (15,'Azerbaijan','AZ','AZE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (16,'Bahamas','BS','BHS','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (17,'Bahrain','BH','BHR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (18,'Bangladesh','BD','BGD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (19,'Barbados','BB','BRB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (20,'Belarus','BY','BLR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (21,'Belgium','BE','BEL','{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (22,'Belize','BZ','BLZ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (23,'Benin','BJ','BEN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (24,'Bermuda','BM','BMU','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (25,'Bhutan','BT','BTN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (26,'Bolivia','BO','BOL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (27,'Bosnia and Herzegovina','BA','BIH','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (28,'Botswana','BW','BWA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (29,'Bouvet Island','BV','BVT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (30,'Brazil','BR','BRA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (31,'British Indian Ocean Territory','IO','IOT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (32,'Brunei Darussalam','BN','BRN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (33,'Bulgaria','BG','BGR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (34,'Burkina Faso','BF','BFA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (35,'Burundi','BI','BDI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (36,'Cambodia','KH','KHM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (37,'Cameroon','CM','CMR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (38,'Canada','CA','CAN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (39,'Cape Verde','CV','CPV','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (40,'Cayman Islands','KY','CYM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (41,'Central African Republic','CF','CAF','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (42,'Chad','TD','TCD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (43,'Chile','CL','CHL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (44,'China','CN','CHN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (45,'Christmas Island','CX','CXR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (46,'Cocos (Keeling) Islands','CC','CCK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (47,'Colombia','CO','COL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (48,'Comoros','KM','COM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (49,'Congo','CG','COG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (50,'Cook Islands','CK','COK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (51,'Costa Rica','CR','CRI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (52,'Cote D\'Ivoire','CI','CIV','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (53,'Croatia','HR','HRV','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (54,'Cuba','CU','CUB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (55,'Cyprus','CY','CYP','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (56,'Czech Republic','CZ','CZE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (57,'Denmark','DK','DNK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (58,'Djibouti','DJ','DJI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (59,'Dominica','DM','DMA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (60,'Dominican Republic','DO','DOM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (61,'East Timor','TL','TLS','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (62,'Ecuador','EC','ECU','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (63,'Egypt','EG','EGY','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (64,'El Salvador','SV','SLV','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (65,'Equatorial Guinea','GQ','GNQ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (66,'Eritrea','ER','ERI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (67,'Estonia','EE','EST','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (68,'Ethiopia','ET','ETH','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (69,'Falkland Islands (Malvinas)','FK','FLK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (70,'Faroe Islands','FO','FRO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (71,'Fiji','FJ','FJI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (72,'Finland','FI','FIN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (74,'France, Metropolitan','FR','FRA','{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}',1,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (75,'French Guiana','GF','GUF','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (76,'French Polynesia','PF','PYF','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (77,'French Southern Territories','TF','ATF','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (78,'Gabon','GA','GAB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (79,'Gambia','GM','GMB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (80,'Georgia','GE','GEO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (81,'Germany','DE','DEU','{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}',1,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (82,'Ghana','GH','GHA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (83,'Gibraltar','GI','GIB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (84,'Greece','GR','GRC','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (85,'Greenland','GL','GRL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (86,'Grenada','GD','GRD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (87,'Guadeloupe','GP','GLP','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (88,'Guam','GU','GUM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (89,'Guatemala','GT','GTM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (90,'Guinea','GN','GIN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (91,'Guinea-Bissau','GW','GNB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (92,'Guyana','GY','GUY','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (93,'Haiti','HT','HTI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (94,'Heard and Mc Donald Islands','HM','HMD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (95,'Honduras','HN','HND','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (96,'Hong Kong','HK','HKG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (97,'Hungary','HU','HUN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (98,'Iceland','IS','ISL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (99,'India','IN','IND','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (100,'Indonesia','ID','IDN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (101,'Iran (Islamic Republic of)','IR','IRN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (102,'Iraq','IQ','IRQ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (103,'Ireland','IE','IRL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (104,'Israel','IL','ISR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (105,'Italy','IT','ITA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (106,'Jamaica','JM','JAM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (107,'Japan','JP','JPN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (108,'Jordan','JO','JOR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (109,'Kazakhstan','KZ','KAZ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (110,'Kenya','KE','KEN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (111,'Kiribati','KI','KIR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (112,'North Korea','KP','PRK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (113,'Korea, Republic of','KR','KOR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (114,'Kuwait','KW','KWT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (115,'Kyrgyzstan','KG','KGZ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (116,'Lao People\'s Democratic Republic','LA','LAO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (117,'Latvia','LV','LVA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (118,'Lebanon','LB','LBN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (119,'Lesotho','LS','LSO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (120,'Liberia','LR','LBR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (121,'Libyan Arab Jamahiriya','LY','LBY','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (122,'Liechtenstein','LI','LIE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (123,'Lithuania','LT','LTU','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (124,'Luxembourg','LU','LUX','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (125,'Macau','MO','MAC','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (126,'FYROM','MK','MKD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (127,'Madagascar','MG','MDG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (128,'Malawi','MW','MWI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (129,'Malaysia','MY','MYS','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (130,'Maldives','MV','MDV','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (131,'Mali','ML','MLI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (132,'Malta','MT','MLT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (133,'Marshall Islands','MH','MHL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (134,'Martinique','MQ','MTQ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (135,'Mauritania','MR','MRT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (136,'Mauritius','MU','MUS','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (137,'Mayotte','YT','MYT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (138,'Mexico','MX','MEX','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (139,'Micronesia, Federated States of','FM','FSM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (140,'Moldova, Republic of','MD','MDA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (141,'Monaco','MC','MCO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (142,'Mongolia','MN','MNG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (143,'Montserrat','MS','MSR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (144,'Morocco','MA','MAR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (145,'Mozambique','MZ','MOZ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (146,'Myanmar','MM','MMR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (147,'Namibia','NA','NAM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (148,'Nauru','NR','NRU','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (149,'Nepal','NP','NPL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (150,'Netherlands','NL','NLD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (151,'Netherlands Antilles','AN','ANT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (152,'New Caledonia','NC','NCL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (153,'New Zealand','NZ','NZL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (154,'Nicaragua','NI','NIC','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (155,'Niger','NE','NER','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (156,'Nigeria','NG','NGA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (157,'Niue','NU','NIU','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (158,'Norfolk Island','NF','NFK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (159,'Northern Mariana Islands','MP','MNP','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (160,'Norway','NO','NOR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (161,'Oman','OM','OMN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (162,'Pakistan','PK','PAK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (163,'Palau','PW','PLW','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (164,'Panama','PA','PAN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (165,'Papua New Guinea','PG','PNG','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (166,'Paraguay','PY','PRY','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (167,'Peru','PE','PER','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (168,'Philippines','PH','PHL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (169,'Pitcairn','PN','PCN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (170,'Poland','PL','POL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (171,'Portugal','PT','PRT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (172,'Puerto Rico','PR','PRI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (173,'Qatar','QA','QAT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (174,'Reunion','RE','REU','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (175,'Romania','RO','ROM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (176,'Russian Federation','RU','RUS','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (177,'Rwanda','RW','RWA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (178,'Saint Kitts and Nevis','KN','KNA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (179,'Saint Lucia','LC','LCA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (180,'Saint Vincent and the Grenadines','VC','VCT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (181,'Samoa','WS','WSM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (182,'San Marino','SM','SMR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (183,'Sao Tome and Principe','ST','STP','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (184,'Saudi Arabia','SA','SAU','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (185,'Senegal','SN','SEN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (186,'Seychelles','SC','SYC','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (187,'Sierra Leone','SL','SLE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (188,'Singapore','SG','SGP','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (189,'Slovak Republic','SK','SVK','{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city} {postcode}\r\n{zone}\r\n{country}',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (190,'Slovenia','SI','SVN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (191,'Solomon Islands','SB','SLB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (192,'Somalia','SO','SOM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (193,'South Africa','ZA','ZAF','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (194,'South Georgia &amp; South Sandwich Islands','GS','SGS','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (195,'Spain','ES','ESP','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (196,'Sri Lanka','LK','LKA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (197,'St. Helena','SH','SHN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (198,'St. Pierre and Miquelon','PM','SPM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (199,'Sudan','SD','SDN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (200,'Suriname','SR','SUR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (201,'Svalbard and Jan Mayen Islands','SJ','SJM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (202,'Swaziland','SZ','SWZ','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (203,'Sweden','SE','SWE','{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}',1,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (204,'Switzerland','CH','CHE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (205,'Syrian Arab Republic','SY','SYR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (206,'Taiwan','TW','TWN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (207,'Tajikistan','TJ','TJK','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (208,'Tanzania, United Republic of','TZ','TZA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (209,'Thailand','TH','THA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (210,'Togo','TG','TGO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (211,'Tokelau','TK','TKL','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (212,'Tonga','TO','TON','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (213,'Trinidad and Tobago','TT','TTO','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (214,'Tunisia','TN','TUN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (215,'Turkey','TR','TUR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (216,'Turkmenistan','TM','TKM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (217,'Turks and Caicos Islands','TC','TCA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (218,'Tuvalu','TV','TUV','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (219,'Uganda','UG','UGA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (220,'Ukraine','UA','UKR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (221,'United Arab Emirates','AE','ARE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (222,'United Kingdom','GB','GBR','',1,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (223,'United States','US','USA','{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city}, {zone} {postcode}\r\n{country}',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (224,'United States Minor Outlying Islands','UM','UMI','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (225,'Uruguay','UY','URY','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (226,'Uzbekistan','UZ','UZB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (227,'Vanuatu','VU','VUT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (228,'Vatican City State (Holy See)','VA','VAT','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (229,'Venezuela','VE','VEN','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (230,'Viet Nam','VN','VNM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (231,'Virgin Islands (British)','VG','VGB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (232,'Virgin Islands (U.S.)','VI','VIR','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (233,'Wallis and Futuna Islands','WF','WLF','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (234,'Western Sahara','EH','ESH','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (235,'Yemen','YE','YEM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (237,'Democratic Republic of Congo','CD','COD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (238,'Zambia','ZM','ZMB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (239,'Zimbabwe','ZW','ZWE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (240,'Jersey','JE','JEY','',1,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (241,'Guernsey','GG','GGY','',1,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (242,'Montenegro','ME','MNE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (243,'Serbia','RS','SRB','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (244,'Aaland Islands','AX','ALA','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (245,'Bonaire, Sint Eustatius and Saba','BQ','BES','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (246,'Curacao','CW','CUW','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (247,'Palestinian Territory, Occupied','PS','PSE','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (248,'South Sudan','SS','SSD','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (249,'St. Barthelemy','BL','BLM','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (250,'St. Martin (French part)','MF','MAF','',0,1);
insert  into `country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`postcode_required`,`status`) values (251,'Canary Islands','IC','ICA','',0,1);

/*Table structure for table `modules` */

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  `module_path` tinytext NOT NULL,
  `module_status` tinyint(1) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `modules` */

insert  into `modules`(`module_id`,`module_name`,`module_path`,`module_status`,`addeddate`,`modifieddate`) values (10,'user_management','modules/user_management/user_management.php',1,'2010-10-07 12:00:13','2010-10-07 12:00:13');
insert  into `modules`(`module_id`,`module_name`,`module_path`,`module_status`,`addeddate`,`modifieddate`) values (42,'content_management','modules/content_management/content_management.php',1,'2013-12-17 16:53:07','2013-12-17 16:53:07');
insert  into `modules`(`module_id`,`module_name`,`module_path`,`module_status`,`addeddate`,`modifieddate`) values (25,'profile_management','modules/profile_management/profile_management.php',1,'2013-08-21 08:43:23','2013-08-21 08:43:23');
insert  into `modules`(`module_id`,`module_name`,`module_path`,`module_status`,`addeddate`,`modifieddate`) values (54,'brand_management','modules/brand_management/brand_management.php',1,'2014-03-10 21:57:47','2014-03-10 21:57:47');
insert  into `modules`(`module_id`,`module_name`,`module_path`,`module_status`,`addeddate`,`modifieddate`) values (53,'product_management','modules/product_management/product_management.php',1,'2014-03-10 21:36:08','2014-03-10 21:36:08');

/*Table structure for table `tbl_brands` */

CREATE TABLE `tbl_brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_brands` */

insert  into `tbl_brands`(`brand_id`,`title`,`image`) values (5,'Cnab','data/brand_management/wQmcP7oSI14EdVtg_BOHLMD382.jpg');
insert  into `tbl_brands`(`brand_id`,`title`,`image`) values (6,'Dell','data/brand_management/_Yf3FWG2aHR5VtsnKUhdOZxEj215757_1959147860153_826317_n.jpg');

/*Table structure for table `tbl_contents` */

CREATE TABLE `tbl_contents` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` tinytext NOT NULL,
  `content_text` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `addeddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_contents` */

insert  into `tbl_contents`(`content_id`,`content_title`,`content_text`,`meta_title`,`meta_description`,`meta_keywords`,`addeddate`,`modifieddate`) values (1,'WE CREATE BEAUTIFUL THEMES FOR LEADING BRANDs','<p>A wonderful serenity has taken possession of my entire soul, like these sweet<br />\r\nmornings of spring which I enjoy with my whole heart. I am alone, and feel the charm<br />\r\nof existence in this spot, which was created.</p>\r\n\r\n<p>A wonderful serenity has taken possession of my entire soul, like these sweet<br />\r\nmornings of spring which I enjoy with my whole heart. I am alone, and feel the charm<br />\r\nof existence in this spot, which was created.</p>\r\n\r\n<p>A wonderful serenity has taken possession of my entire soul, like these sweet<br />\r\nmornings of spring which I enjoy with my whole heart. I am alone, and feel the charm<br />\r\nof existence in this spot, which was created.</p>\r\n','Welcome to Landing Designs','Welcome to Landing Designs','Landing, websites, designs, development','2014-03-11 01:56:23','0000-00-00 00:00:00');
insert  into `tbl_contents`(`content_id`,`content_title`,`content_text`,`meta_title`,`meta_description`,`meta_keywords`,`addeddate`,`modifieddate`) values (2,'About Landing Designs','<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>\r\n','About Landing Designs','About Landing Designs','About Landing Designs','2014-03-11 01:56:48','0000-00-00 00:00:00');
insert  into `tbl_contents`(`content_id`,`content_title`,`content_text`,`meta_title`,`meta_description`,`meta_keywords`,`addeddate`,`modifieddate`) values (3,'Our latest Projects','<p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.</p>\r\n\r\n<p>&nbsp;</p>\r\n','Our latest Projects','Our latest Projects','Our latest Projects','2014-03-11 01:57:14','0000-00-00 00:00:00');
insert  into `tbl_contents`(`content_id`,`content_title`,`content_text`,`meta_title`,`meta_description`,`meta_keywords`,`addeddate`,`modifieddate`) values (4,'Our Awesome Work','<p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.</p>\r\n','Our Awesome Work','Our Awesome Work','Our Awesome Work','2014-03-11 01:57:39','0000-00-00 00:00:00');
insert  into `tbl_contents`(`content_id`,`content_title`,`content_text`,`meta_title`,`meta_description`,`meta_keywords`,`addeddate`,`modifieddate`) values (5,'get in touch with us','<div class=\"text\">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.</div>\r\n','get in touch with us','get in touch with us','get in touch with us','2014-03-11 01:57:57','0000-00-00 00:00:00');

/*Table structure for table `tbl_products` */

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `addeddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_products` */

insert  into `tbl_products`(`product_id`,`title`,`description`,`url`,`image`,`addeddate`,`modifieddate`) values (1,'Project Name','<div class=\"des\">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. The bedding was hardly able to cover it and seemed ready to slide off any moment.</div>\r\n\r\n<div class=\"des\">\r\n<div class=\"des\">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. The bedding was hardly able to cover it and seemed ready to slide off any moment.</div>\r\n</div>\r\n','https://www.facebook.com','data/product_management/FnPGS0DHB_XfM5YA9NKamVkdiLiburnianAdvisors.jpg','2014-03-11 07:54:58','0000-00-00 00:00:00');

/*Table structure for table `users` */

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `addeddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_type`,`user_name`,`password`,`first_name`,`last_name`,`email_address`,`phoneNumber`,`address`,`image`,`status`,`addeddate`,`modifieddate`) values (21,1,'mrcnab','admin','naveed','asghar','mrcnab@gmail.com','234234234','test','data/profile_management/5IoYxs0twXM9g2BuE8ANlhJib665AFC2B-79CF-4F20-B60C-9ABE8F4F0760.JPG',1,'2014-03-11 01:49:26','2013-12-12 21:19:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
