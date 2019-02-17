-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: products
-- ------------------------------------------------------
-- Server version	5.7.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`),
  UNIQUE KEY `image_id_UNIQUE` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'/Gucci/Bukser/Light-Wool-cropped.jpg'),(2,'/Gucci/Bukser/Light-Wool-cropped1.jpg'),(3,'/Gucci/Gensere/Gucci \'80s.jpg'),(4,'/Gucci/Gensere/Gucci.black.rainbow.jpg'),(5,'/Gucci/Gensere/Gucci.black.rainbow1.jpg'),(6,'/Gucci/Gensere/Gucci.sparkling.jpg'),(7,'/Gucci/Gensere/Gucci.sparkling1.jpg'),(8,'/Gucci/Gensere/Gucci.sweatshirt.jpg'),(9,'/Gucci/Gensere/Gucci.sweatshirt1.jpg'),(10,'/Gucci/Gensere/Gucci-80s-patch.jpg'),(11,'/Gucci/Sko/Rhyton-Gucci-logo-leather-sneaker.jpg'),(12,'/Gucci/Sko/Rhyton-Gucci-logo-leather-sneaker2.jpg'),(13,'/Gucci/Sko/Rhyton-Gucci-logo-leather-sneaker3.jpg'),(14,'/Gucci/Sko/Rhyton-Web-Print-Leather-Sneaker.png'),(15,'/Gucci/Sko/Rhyton-Web-Print-Leather-Sneaker2.png'),(16,'/Gucci/Sko/Rhyton-Web-Print-Leather-Sneaker3.png'),(17,'/Gucci/Sko/Screener-GG-Sneaker.png'),(18,'/Gucci/Sko/Screener-GG-Sneaker2.png'),(19,'/Gucci/Sko/Screener-GG-Sneaker3.png'),(20,'/Louis Vuitton/bukser/double_layer_trousers.png'),(21,'/Louis Vuitton/bukser/double_layer_trousers-2.png'),(22,'/Louis Vuitton/bukser/monogram_regular_jeans.png'),(23,'/Louis Vuitton/bukser/monogram_regular_jeans-2.png'),(24,'/Louis Vuitton/bukser/slim_fit_jeans_with_patches.png'),(25,'/Louis Vuitton/bukser/slim_fit_jeans_with_patches-2.png'),(26,'/Louis Vuitton/bukser/tie_and_dye_athletic_shorts.png'),(27,'/Louis Vuitton/bukser/zip_detail_metallic_sports_trousers.png'),(28,'/Louis Vuitton/bukser/zip_detail_metallic_sports_trousers-2.png'),(29,'/Louis Vuitton/gensere/cotton_velour_monogram_blouson.png'),(30,'/Louis Vuitton/gensere/cotton_velour_monogram_blouson-2.png'),(31,'/Louis Vuitton/gensere/half_zip_reflective_monogram_print_rashguard.png'),(32,'/Louis Vuitton/gensere/half_zip_reflective_monogram_print_rashguard-2.png'),(33,'/Louis Vuitton/gensere/jacquard_gravity_raglan_half_zip_sweat.png'),(34,'/Louis Vuitton/gensere/jacquard_gravity_raglan_half_zip_sweat-2.png'),(35,'/Louis Vuitton/gensere/lv_hooded.png'),(36,'/Louis Vuitton/gensere/lv_hooded2.png'),(37,'/Louis Vuitton/gensere/patches_long_sleeve_polo.png'),(38,'/Louis Vuitton/gensere/patches_long_sleeve_polo-2.png'),(39,'/Louis Vuitton/gensere/printed_logo_collar_long_sleeve_tee.png'),(40,'/Louis Vuitton/gensere/printed_logo_collar_long_sleeve_tee-2.png'),(41,'/Louis Vuitton/gensere/reflective_sleeves_gravity_hoodie.png'),(42,'/Louis Vuitton/gensere/reflective_sleeves_gravity_hoodie-2.png'),(43,'/Louis Vuitton/gensere/upside_down_lv_sweatshirt.png'),(44,'/Louis Vuitton/gensere/upside_down_lv_sweatshirt-2.png'),(45,'/Louis Vuitton/gensere/zip_through_reversible_blouson.png'),(46,'/Louis Vuitton/gensere/zip_through_reversible_blouson-2.png'),(47,'/Louis Vuitton/gensere/zip_through_reversible_blouson-3.png'),(48,'/Louis Vuitton/sko/aftergame-black.png'),(49,'/Louis Vuitton/sko/aftergame-gold.png'),(50,'/Louis Vuitton/sko/auteuil-blue.png'),(51,'/Louis Vuitton/sko/auteuil-green.png'),(52,'/Louis Vuitton/sko/auteuil-orange.png'),(53,'/Louis Vuitton/sko/auteuil-pink.png'),(54,'/Louis Vuitton/sko/auteuil-red.png'),(55,'/Louis Vuitton/sko/Long-boot.png'),(56,'/Louis Vuitton/sko/Long-boot1.jpg.png'),(57,'/Louis Vuitton/sko/luxembourg-sneaker.png'),(58,'/Louis Vuitton/sko/luxembourg-sneaker1.png'),(59,'/Louis Vuitton/sko/lv_creeper_ankle_boot.png'),(60,'/Louis Vuitton/sko/lv_creeper_ankle_boot-2.png'),(61,'/Louis Vuitton/sko/lv_trainer_boot.png'),(62,'/Louis Vuitton/sko/lv_trainer_boot-2.png'),(63,'/Louis Vuitton/sko/slippers.orange.png'),(64,'/Louis Vuitton/sko/Slippers.yellow.png'),(65,'/Supreme/bukser/Supreme_jesusandmary_sweatpant_gold.png'),(66,'/Supreme/bukser/Supreme_sweatpants_gold.png'),(67,'/Supreme/bukser/Supreme_x_lacoste_trackpant_black.png'),(68,'/Supreme/bukser/Supreme_x_Nike_cottontwill_overalls_black.png'),(69,'/Supreme/gensere/Supreme_hettejakke_grey2.png'),(70,'/Supreme/gensere/Supreme_pink_crewneck.png'),(71,'/Supreme/gensere/Supreme_pink_crewneck2.png'),(72,'/Supreme/gensere/Supreme_x_champion.png'),(73,'/Supreme/gensere/Supreme_x_champion2.png'),(74,'/Supreme/gensere/Supreme_x_champion3.png'),(75,'/Supreme/gensere/Supreme_X_LouisVuitton_jacket.png'),(76,'/Supreme/gensere/Supreme_X_LouisVuitton_jacket2.png'),(77,'/Supreme/gensere/Supreme_X_LouisVuitton_jacket3.png'),(78,'/Supreme/gensere/Supreme-Jewels-Hooded-Sweatshirt-Black.jpg'),(79,'/Supreme/gensere/Supreme-Jewels-Hooded-Sweatshirt-Black1.jpg'),(80,'/Supreme/gensere/Supreme-Tricolor-Hooded.jpg'),(81,'/Supreme/gensere/Supreme-Tricolor-Hooded1.jpg'),(82,'/Supreme/t-shirts/Supreme_fire_whitetee.png'),(83,'/Supreme/t-shirts/Supreme_fire_whitetee2.png'),(84,'/Supreme/t-shirts/Supreme_Jordan_tee.png'),(85,'/Supreme/t-shirts/Supreme_MonaLisa_tee.png'),(86,'/Supreme/t-shirts/Supreme_MonaLisa_tee-blue.png'),(87,'/Supreme/t-shirts/Supreme_MonaLisa_tee-pink.png'),(88,'/Supreme/t-shirts/Supreme_Northface_black.png'),(89,'/Supreme/t-shirts/Supreme_Northface_black-behind.png'),(90,'/Supreme/t-shirts/Supreme_smallogo_pink.png'),(91,'/Supreme/t-shirts/Supreme_smallogo_red.png'),(92,'/showcase.png'),(93,'/stoneisland.png');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Wool cropped pant with stripe','Gucci','980'),(2,'Sweatshirt with Gucci \'80s patch','Gucci','1300'),(3,'Cotton sweatshirt with Gucci logo','Gucci','1280'),(4,'Laminated sparkling GG jersey jacket','Gucci','1400'),(5,'Oversize sweatshirt with Gucci logo','Gucci','1700'),(6,'Gucci Sneakers','Gucci','10000'),(7,'Pink leather with Gucci vintage logo','Gucci','8600'),(8,'Double layer trousers','Louis Vuitton','12000'),(9,'Monogram regular jeans','Louis Vuitton','7000'),(10,'Slim fit jeans with patches','Louis Vuitton','6400'),(11,'Tie and dye athletic shorts','Louis Vuitton','3200'),(12,'Zip detail metallic sports trousers','Louis Vuitton','5700'),(13,'Cotton velour monogram blouson','Louis Vuitton','2900'),(14,'Half zip reflective monogram print rashguard','Louis Vuitton','5900'),(15,'Jacquard gravity raglan half zip sweat','Louis Vuitton','6000'),(16,'Lv hooded','Louis Vuitton','11000'),(17,'patches long sleeve polo','Louis Vuitton','8300'),(18,'Printed logo collar long sleeve tee','Louis Vuitton','2300'),(19,'Reflective sleeves gravity hoodie','Louis Vuitton','7000'),(20,'Upside down lv sweatshirt','Louis Vuitton','5000'),(21,'Zip through reversible blouson','Louis Vuitton','3000'),(22,'Aftergame','Louis Vuitton','6666'),(23,'Long-boot','Louis Vuitton','6969'),(24,'luxembourg-sneaker','Louis Vuitton','2300'),(25,'Lv creeper ankle boot','Louis Vuitton','7800'),(26,'Lv trainer boot','Louis Vuitton','3000'),(27,'Slippers','Louis Vuitton','90000'),(28,'Supreme jesusandmary sweatpant gold','Supreme','9300'),(29,'Supreme sweatpants gold','Supreme','2800'),(30,'Supreme x lacoste trackpant black','Supreme','9900'),(31,'Supreme x Nike cottontwill overalls black','Supreme','2800'),(32,'illegal business supreme','Supreme','5800'),(33,'Supreme black sleevelogo','Supreme','4600'),(34,'Supreme camo','Supreme','3750'),(35,'Supreme darkblue cornerlogo','Supreme','5000'),(36,'Supreme genser boxlogo','Supreme','3000'),(37,'Supreme green-red sleevelogo','Supreme','9000'),(38,'supreme hettegenser','Supreme','6969'),(39,'Supreme pink crewneck','Supreme','69'),(40,'Supreme x champion','Supreme','90000'),(41,'Supreme X LouisVuitton jacket','Supreme','10000'),(42,'Supreme-Jewels-Hooded-Sweatshirt-Black','Supreme','30000'),(43,'Supreme-Tricolor-Hooded','Supreme','8888'),(44,'Supreme fire whitetee','Supreme','5500'),(45,'Supreme Jordan tee','Supreme','2700'),(46,'Supreme_MonaLisa_tee','Supreme','4000'),(47,'Supreme Northface black','Supreme','6800'),(48,'Supreme smallog','Supreme','9600'),(49,'Supreme Dog Taped Seam Jakke','Supreme','3000'),(50,'Stone Island LOOM WOVEN DOWN','Stone Island','4000');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`image_id`),
  KEY `image_id_idx` (`image_id`),
  CONSTRAINT `image_id` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1),(48,1),(1,2),(47,2),(1,3),(2,3),(2,4),(3,4),(3,5),(3,6),(4,6),(4,7),(4,8),(5,8),(5,9),(2,10),(5,10),(6,11),(6,12),(6,13),(7,14),(7,15),(7,16),(8,17),(9,17),(8,18),(9,18),(8,19),(9,19),(10,20),(10,21),(11,22),(11,23),(12,24),(12,25),(13,26),(13,27),(14,27),(14,28),(14,29),(15,29),(15,30),(15,31),(16,31),(16,32),(16,33),(17,33),(10,34),(11,34),(17,34),(12,35),(17,35),(18,35),(18,36),(18,37),(19,37),(19,38),(19,39),(20,39),(13,40),(20,40),(20,41),(21,41),(21,42),(21,43),(22,43),(22,44),(22,45),(23,45),(23,46),(23,47),(24,48),(24,49),(24,50),(25,50),(25,51),(25,52),(26,55),(26,56),(26,57),(27,57),(27,58),(27,59),(28,59),(28,60),(28,61),(29,61),(29,62),(29,63),(30,63),(30,64),(30,65),(31,65),(31,66),(32,66),(31,67),(32,67),(33,67),(32,68),(33,68),(34,68),(33,69),(34,69),(35,69),(34,70),(35,70),(35,71),(36,71),(36,72),(36,73),(37,73),(37,74),(37,75),(38,75),(38,76),(38,77),(39,77),(39,78),(39,79),(40,79),(40,80),(41,80),(40,81),(41,81),(42,81),(41,82),(42,82),(42,83),(43,83),(43,84),(44,84),(45,84),(43,85),(44,85),(45,85),(46,85),(44,86),(45,86),(46,86),(46,87),(47,88),(47,89),(48,90),(48,91),(49,92),(50,93);
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-17 16:52:19
