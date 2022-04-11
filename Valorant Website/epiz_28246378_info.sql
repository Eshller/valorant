-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql107.epizy.com
-- Generation Time: Apr 10, 2022 at 03:56 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28246378_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `conf`
--

CREATE TABLE `conf` (
  `Sno` int(11) NOT NULL,
  `identity` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conf`
--

INSERT INTO `conf` (`Sno`, `identity`, `content`) VALUES
(468, 'bhullar11aman', 'Awesome ðŸ˜ŽðŸ‘ðŸ»'),
(467, 'Anonymous', 'Test 2'),
(466, 'Eshller', 'Test 1'),
(470, 'Anonymous', 'F***'),
(471, 'Anonymous', 'Test1'),
(472, 'Anonymous', 'test2'),
(473, 'Anonymous', 'sahi cheez hai ye to '),
(474, 'Anonymous', 'Hi there I am tester');

-- --------------------------------------------------------

--
-- Table structure for table `pubg`
--

CREATE TABLE `pubg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `BGMIID` varchar(50) NOT NULL,
  `Discord` varchar(100) NOT NULL,
  `Rank` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pubg`
--

INSERT INTO `pubg` (`id`, `name`, `BGMIID`, `Discord`, `Rank`) VALUES
(1, 'Eshller', '516308051', 'Eshller#8236', 'Gold 5'),
(2, 'HarshitOP3007', '55502064684', 'Harshit Raj#4617', 'Crown 2'),
(3, 'ShubakOP', '555502038', 'ShubakOP#3593', 'Gold 2'),
(4, 'FearXAdarsh', '55506069590', 'FearXAdarsh#7063', 'Platinum 4'),
(5, 'SchrÃ¶dingern', '55512405100', 'Nishkarsh Bansal#4962', 'Gold 4'),
(6, 'SAMOSA', '531781966', 'EreN99#2095', 'Ace'),
(7, 'ConquerorVS', '55513586959', '860603027194511380', 'Gold 1'),
(8, 'ãƒ„THEã‚·ã‚·MADãƒƒ', '5494523367', 'Hemanth reddy#0257', 'Crown 5'),
(9, 'à¤œà¤¾BEà¤­à¤¡à¤µà¥‡', '5502215542', 'popeyethesailorman#9740', 'Platinum 1'),
(10, 'invader43', '55504343360', 'invader43#9984', 'Gold 1'),
(11, 'GameChaser7820', '5780166478', 'GameChaser', 'Gold 1'),
(12, 'HÃ˜Dã€…Flux', '5165440476', 'MaYhEM#3220', 'Platinum 5'),
(13, 'NÍœÍ¡Gãƒ»BHULAR', '5255120662', 'bhullar11aman#9980', 'Platinum 2'),
(14, 'Eshukoli', '512312331', 'Eshller#8236', 'Conqueror'),
(15, 'TeriMuMMyMerih', '5138595906', 'Atul chauhan#4625', 'Gold 2'),
(16, 'CSRã€…Destroyer', '5113217943', 'Destroyer5x#7522', 'Gold 2'),
(17, 'JakePeralta121', '55559566442', 'Din Djarin#7790', 'Silver 5'),
(18, '5148549368', 'DÃ€RKã‚·LORD', '@anshuman jha#5645 ', 'Gold 1'),
(19, 'DÃ€RKã‚·LORD', '5148549368', '@anshuman jha#5645 ', 'Gold 1'),
(20, 'INDä¹ˆSHIRSH', '5332840617', 'Shirshsrijan', 'Silver 5'),
(21, 'Krish753', '55556647540', 'Krishna Gaggar#7636', 'Ace'),
(22, 'harsheet35', '55545671169', 'harsheet35#1062', 'Unranked'),
(23, 'ZiggleRÃ—OP', '55534739592', 'Ashu212#6480', 'Gold 5'),
(24, 'DemonSS2', '55586185773', '8210423523', 'Platinum 2'),
(25, 'Krngill123', '55501898443', 'Krngill#5734', 'Gold 3');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id` int(11) NOT NULL,
  `C_name` varchar(100) NOT NULL,
  `C_ID` varchar(100) NOT NULL,
  `C_Rank` varchar(50) NOT NULL,
  `C_No` varchar(100) NOT NULL,
  `C_Discord` varchar(100) NOT NULL,
  `C_dept` varchar(100) NOT NULL,
  `C_year` varchar(100) NOT NULL,
  `Team Name` varchar(50) NOT NULL,
  `M2_name` varchar(100) NOT NULL,
  `M2_ID` varchar(100) NOT NULL,
  `M2_Rank` varchar(50) NOT NULL,
  `M2_No` varchar(100) NOT NULL,
  `M2_Discord` varchar(100) NOT NULL,
  `M2_dept` varchar(100) NOT NULL,
  `M2_year` varchar(100) NOT NULL,
  `M3_name` varchar(100) NOT NULL,
  `M3_ID` varchar(100) NOT NULL,
  `M3_Rank` varchar(50) NOT NULL,
  `M3_No` varchar(100) NOT NULL,
  `M3_Discord` varchar(100) NOT NULL,
  `M3_dept` varchar(100) NOT NULL,
  `M3_year` varchar(100) NOT NULL,
  `M4_name` varchar(100) NOT NULL,
  `M4_ID` varchar(100) NOT NULL,
  `M4_Rank` varchar(50) NOT NULL,
  `M4_No` varchar(100) NOT NULL,
  `M4_Discord` varchar(100) NOT NULL,
  `M4_dept` varchar(100) NOT NULL,
  `M4_year` varchar(100) NOT NULL,
  `Team Number` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id`, `C_name`, `C_ID`, `C_Rank`, `C_No`, `C_Discord`, `C_dept`, `C_year`, `Team Name`, `M2_name`, `M2_ID`, `M2_Rank`, `M2_No`, `M2_Discord`, `M2_dept`, `M2_year`, `M3_name`, `M3_ID`, `M3_Rank`, `M3_No`, `M3_Discord`, `M3_dept`, `M3_year`, `M4_name`, `M4_ID`, `M4_Rank`, `M4_No`, `M4_Discord`, `M4_dept`, `M4_year`, `Team Number`) VALUES
(1, 'Eshller', '151231', 'Conqueror', '2147483647', 'Eshller#8236', 'Chemistry', '2020', 'CHAMPS', 'M2_name', 'M2_id', 'Gold 5', '2147483647', 'M2_did', 'M2_dept', '2020', 'M3_name', 'M3_id', 'Crown 5', '2147483647', 'M3_did', 'M3_dept', '2020', 'M4_name', 'M4_id', 'Bronze 5', '2147483647', 'M4_did', 'M4_dept', '2020', 0),
(5, 'Aman', '5255120662', 'Platinum 2', '7888817604', 'bhullar11aman#9980', 'Chemistry', '2020', 'H@cker$', 'IM SASUKE', '5659392213', 'Platinum 2', '7737813036', 'Hell Nitesh#4355', 'Civil', '2020', 'SAMOSA', '531781966', 'Ace', '6260057111', 'EreN99#2095', 'Chemical', '', 'HOD Flux', '5165440476', 'Platinum 5', '8529779763', 'MaYhEM#3220', 'Chemical', '2020', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_solo`
--

CREATE TABLE `tournament_solo` (
  `id` int(11) NOT NULL,
  `I_name` varchar(50) NOT NULL,
  `I_rank` varchar(50) NOT NULL,
  `I_No` varchar(100) NOT NULL,
  `I_Discord` varchar(50) NOT NULL,
  `I_dept` varchar(50) NOT NULL,
  `I_year` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament_solo`
--

INSERT INTO `tournament_solo` (`id`, `I_name`, `I_rank`, `I_No`, `I_Discord`, `I_dept`, `I_year`) VALUES
(1, 'Dhairya Parekh', '', '0', 'Dhairya #1113', 'CSE', '2020'),
(2, 'Rishabh5Prince', 'Bronze 1', '2147483647', 'Rishabh Ratan#8060', 'Chemistry', '2020'),
(3, 'Harshit Upadhyay', 'Gold 1', '2147483647', 'GameChaser', 'Meta', '2020'),
(4, 'ShubakOP', 'Gold 2', '2147483647', 'ShubakOP #3593', 'CSE', '2020'),
(5, 'Kunal Krishna', 'Silver 3', '9931142324', 'annihilus#8512', 'CSE', '2020'),
(6, 'Anshuman Jha', 'Gold 1', '7903262497', '@anshuman jha#5645', 'Ece', '2021'),
(7, 'Anshuman Jha', 'Gold 1', '7903262197', '@anshuman jha#5645', 'Ece', '2021'),
(8, 'Krn Gill', 'Gold 3', '9928893561', '', '', '2021'),
(9, 'Karan Kumar', 'Gold 3', '9928893561', 'Krngill#5734', '', '2021'),
(10, 'Player 1', 'Crown 5', '1234567898', 'Player1DiscordID', 'Chemistry', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`) VALUES
(1, 'Eshller', 'eshukoli.mba@gmail.com', 0, 'aa4caabb11d5789d59a55dfb89122563de3ddd2b9b037cd30b59a6926df7d1f1d07b104bfb162a85b9937cc97c5351a112cc', '$2y$10$gxqqYN8rOHzZwY7k2HcJN.1X4MirfJIkscPmyu3urw2vzwPXMbRA2'),
(2, 'Rituparna Meshram', 'rituparnapm@gmail.com', 0, '728a1afe579c50beee1b4a1e33f15aaf92966afb6c0fbd3e6d67747ee32bdf5ac957087ba6f3aad6ad047263fcbd289a6493', '$2y$10$9uubL7PSnD6oLrDs96KYC.PuWE81c4YCIGImgm5IzZK6XgL2smcnS'),
(3, 'HCH', '20b030019@iitb.ac.in', 0, 'e7aa702917fc9376c240fa2def00aeab705587d9e849a1f47ec2883352bc75399a8e6e455f8733737f5ded016d8319c5e436', '$2y$10$WqgGA8InbCTtYM/hqbSxyu6ZSeY5.a.opKis0nmACSgOiLiyLxtKO'),
(5, 'Harshit Upadhyay', 'gamechaseriitjee2020@gmail.com', 0, '89a00f2a9f52362154b1a0c9b1beff7899dc49c35509b5f08eadd7664cb0de21bb183ebb517b5526d4b47c56b5d1c1026aea', '$2y$10$/BnmJW/IlZECjI9Crgx9w.c7FqK5gMkqojmVW/aPDeFGuVglVAM2C'),
(4, 'Sanskriti', 'sanskritiagrawal2907@gmail.com', 0, 'af53eb572b9bfca671f76b91634f0d2e8d07709ad597b130dbc987439081a0d162cc65b4891a5196585ca1ceb93a4c45eb31', '$2y$10$5IgU6uU20z/xQIiJvYRtZOT9yertM15x1VbJBntQD511A/7X0vS5u'),
(6, 'Nandini Chandak', '20b030025@iitb.ac.in', 0, '2ed5e5a041e06397ba6cfd0c22ec882cf7093f6f1390eba2bf229743b8629510a7de15df615dd3c2721efa69157721087d2f', '$2y$10$.j4geGBwZ68NU7IIHGMWH.Vb4m4ibFAJTFZSTaMjMIS.dfHUA0aIm'),
(7, 'bhullar11aman', 'pubgmofficial011@gmail.com', 0, 'bc92e3b1811074c32fa54631cffde1a0a22b7cab295e33470e3a33252993e29910ecaa3edd473fc19c540f5b0add06ddae06', '$2y$10$QEaEb7BNCdzgu4fbzvufbeHm68MJXzEUYtRCk2EAt.91/Xod7Z9/m'),
(8, 'Shreedhar', 'shreedharmalpani12@gmail.com', 0, '739edaefdc3f053c48f8d102a1457ca7f5c95b0fc81695a68b9a55d37f7691603084f2e9fe58f6433a35a479f85b98bff06a', '$2y$10$eUawixq.y6rXwpg02ZE3y.00zh30A4kfbTT5apOlffn0nHO5xXZOK'),
(9, 'Pratham Sanghavi', 'iampr7sanghvi@gmail.com', 0, '5c92770cbb8f8ea9c42ba25d6e3d9fe7180c730a755512dc09ef7b66c804174ac29c674db752bb7c1a7ec55fa6a0667dea5b', '$2y$10$2dF.Z/a1/X7YJ4ETTDaxx.axTotkPuAydvAF5ILitlv98z8GJJjDG'),
(10, 'eshukoli', 'lightyagamiprodigy@gmail.com', 0, '51faa181710e33dba8dee319db67e12cc0d778ec21b47ba1d9b41a20656606fd0ca17a1ff47f50b0cb23b3421fb40ff44c45', '$2y$10$8FJxCzsnu1LAK0DYLAr6LuuWFjVq1pec0sbmVvxhy9AHR1rxmU3kW'),
(11, 'Aakash jha', 'jha.aakash23@gmail.com', 0, 'ecff5c1bb12f5ace1116bb25385a49ff53fa36693895e12567f980ef2f0392a632cd519356a9dbd2402cab46dfa26c81d295', '$2y$10$NRlXxoEDq1r3eeDu9xB3rO/c.0jpy35iUSaV21E/9zMnlRZhiUrF6'),
(12, 'Aakash Jha', '200040002@iitb.ac.in', 0, 'e629d67042b28853fcd036cdfd2f179d12a353e9c282b629c7e7843c6bc00c8570b8de029b8e714a18a4436c5cd1dd5b2eb1', '$2y$10$4oF6Q/svqkxv2FChDTJyd.peUAc7NoErYvlxm3drWMIwEJwblyIO.'),
(13, 'Abhiram', 'abhiramnaidumullu@gmail.com', 0, '4f30f8cffaf8032f76f7175a685e52f031deb5d9034e31c557fe84ad538c4efd1ee75cf854f8c800f9b4e4231523efce456c', '$2y$10$cEggtlzOmP4P2m2KSZNRHOar3iqPcwjogd8/ZtPBHpid5UF4MVJMG'),
(14, 'Yash1520', 'yashchoudhary450@gmail.com', 0, '80d3edc582b47df1cbc1b5cd594a16c13ceb8a7a32d6dcc54fc1f1729abe7d1d07b1919b3958fbc61963e55a3fe2d43fea31', '$2y$10$s1Q335ve8nVmYtN/FR6aC.eOBwlJilVvMp2cdAT0my89CxlpYAJp6'),
(15, 'aaa', 'a@g.com', 0, '6d3d86d80f0e040f5517e139356d6dfcb0be5270dafb474190a8b56dcacac75e424f00398b2255c8e7a7046ff242efc7f369', '$2y$10$C9Vl.1XN1StDI2Fhc9PUiuYvbNtQfrqPkEA4lIyxMUNMxbg6JLGEu'),
(16, 'Utkarsh Indolia', 'ut.in92@gmail.com', 0, 'c7f9c073041e01832a82085cb95fba3453fb2fba60e067df0dd12585c447968c6cd21bc1331d8787e7f6f2aa19d6a092e0df', '$2y$10$cFiTICavqt/yWrU9X0xbruQY.lsd0.gcQ2MzURqQvNVOrFw1Kqxx2'),
(17, 'Divij Goyal', 'goyaldivij06@gmail.com', 0, 'c0f30fb2521de40ed7193110af2ac4c828cfc6a70d5454b9aef2334bcf2fa5dcf2fd7896cefd50ec1091ae980588368a05a8', '$2y$10$LJJYfjLk.wL/Ff/nDRGnwOZnUduCkzCcIrLsVhX2pfoVz2jBULrzS'),
(18, 'Atulya', 'atulya.ty2.03@gmail.com', 0, '7c6a8bc7108105399583bba70f3a41526424944dc188d7eb6766fe7125d5a54844ff1517899312ea8b1bfd7f76b8b3da8718', '$2y$10$tFGWSC3TUVBl1LtcUlC2NOasKd.4gHUiVLW/l8Ip1DFppYuYy4yu2'),
(19, 'niggu', '203050032@iitb.ac.in', 0, '1992b17ec5001c55c55b6b57cf4fe98c3790126a4d5803e79c2dd908c77cb12a56187df2c5d203cd71f43465fa3ab69a9241', '$2y$10$pwDArsEc6mGInZ4h6FL5Q.3C.ukXgOh5/tbxo94Y.WWzhFr4/nhMu'),
(486, 'SarthakM320', 'sarthak2002.mehrotra@gmail.com', 0, '8324de543180a57136c01499df0bdd9edb96f425060e4553d364f8fb04a14c80b4bd90c48cb0e195558bae20ba7d0393820f', '$2y$10$lGBOiIpArwniyTwotuJByusaoFtLjaHQ7SqPqrpjxSVX/xa72q1ei');

-- --------------------------------------------------------

--
-- Table structure for table `valorant`
--

CREATE TABLE `valorant` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `RiotID` varchar(50) NOT NULL,
  `Tagline` varchar(50) NOT NULL,
  `Discord` varchar(100) NOT NULL,
  `Rank` varchar(50) NOT NULL,
  `Changes` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valorant`
--

INSERT INTO `valorant` (`id`, `name`, `RiotID`, `Tagline`, `Discord`, `Rank`, `Changes`) VALUES
(1, 'Eshller', 'Eshller', '7777', 'Eshller#8236', 'Gold 1', 2),
(6, 'Abhinav Ghunawat', 'Abhi', '4917', 'abhinav34#8411', 'Iron 1', 0),
(5, 'Arnav Lunia ', 'BladeWolf27', '9813', 'BladeWolf27', 'Iron 3', 0),
(4, 'Deepak ', 'Fungiio', '1917', 'fungi.io #4099', 'Gold 1', 0),
(3, 'Shrey Bavishi', 'Samrat55', '6162', 'yerhs5', 'Silver 2', 0),
(2, 'Shrey Ganatra', 'TheGreatSVG', '3196', 'TheGreatSVG#5382', 'Iron 2', 0),
(7, 'Prateek Jha', 'MirchiParatha', '4897', 'Prateek#5549', 'Bronze 2', 0),
(8, 'Gautam Asodiya', 'GreenChutney', '7154', 'Lucky7', 'Bronze 3', 0),
(12, 'Pratham Sanghavi', 'notsosure', '8548', 'Pratham#4676', 'Iron 1', 0),
(9, 'Harshit Upadhyay', 'GameChaser782', '8623', 'GameChaser782', 'Bronze 1', 0),
(10, 'Kalewar Daksesh', 'invader43', '8593', 'invader43#9984', 'Silver 2', 0),
(11, 'Mokshit', 'MNaidu10', '4654', 'Mokshit#0654', 'Iron 1', 0),
(13, 'Kumar Saurabh', 'MaYhEM', '8472', 'MaYhEM#3220', 'Iron 1', 0),
(15, 'Aakash jha', 'Ghostdragon', '3786', 'Aakash#2542', 'Silver 1', 0),
(14, 'Pratham Kurkure', 'dicksword', '2627', 'prathamk#5157', 'Iron 3', 0),
(16, 'Parth Dange', 'parthd7', '9698', 'parth#8303', 'Iron 2', 0),
(17, 'Subodh Ohal', 'FreakyThing', '4329', 'FreakyThing#5846', 'Silver 3', 0),
(18, 'Shubham Bakare', 'shubak134op', '9821', 'ShubakOP#3593', 'Unranked', 0),
(19, 'piyush banka', 'conquerorpb', '5389', 'Piyush ', 'Bronze 1', 0),
(20, 'Rushikesh', 'EZdubz', '0', 'not_bohr#8203', 'Iron 3', 0),
(21, 'Rituraj Chaudhari', 'Rituraj', '2029', 'Rituraj#6701', 'Unranked', 0),
(22, 'Himanshu M Singhal', 'Upsidedowncop', '5026', 'himanshu m singhal#4016', 'Unranked', 0),
(23, 'Hanan Basheer', 'HANAN', 'YORU', 'Hanan#3085', 'Iron 3', 0),
(24, 'Shivam Shrikant Kumbhar', 'll Shivam ll', '0000', 'Shivam#4870', 'Iron 1', 0),
(28, 'N10', 'Aadarsh1802', '1753', 'Aadarsh#4535', 'Bronze 3', 0),
(25, 'Anshuman', 'Dominic', 'A210', 'Anshu-man#2505', 'Bronze 2', 0),
(26, 'Nikhil saini', 'Nikhil Saini #4003', 'Nikhil Saini', 'Nikhil Saini#1728', 'Iron 2', 0),
(27, 'Rutvij Gondkar', 'PT Darklord69', '69RSG', 'RUTVIJ#6969', 'Unranked', 0),
(32, 'Adithyan ', 'janaki1chechi', '8744', 'babayaga#6832', 'Iron 2', 0),
(29, 'Sarthak Mehrotra', 'SarthakM320', '3110', 'SarthakM320', 'Iron 2', 0),
(30, 'Aadarsh', 'Aadarsh0801', '2427', 'Aadarsh#4535', 'Iron 3', 0),
(31, 'Deepankar ', 'DSparadox', '2995', 'DSparadox#6263', 'Unranked', 0),
(33, 'Abhay Arya', 'Eligion', '4511', 'Abhay(MEMS)#4978', 'Unranked', 0),
(34, 'Shreedhar', 'ShreDHer', '7647', 'shreedhar.28#0328', 'Iron 3', 0),
(35, 'Divij Goyal', 'DarthVader', '7677', 'DivijG#9759', 'Iron 3', 2),
(36, 'Raghav Rander', 'Killer04', '8938', 'Raghav Rander#3863', 'Unranked', 0),
(38, 'Aakash jha', 'Ghostdragon', '3786', 'Aakash#2542', 'Silver 1', 0),
(39, 'Vishal Chatragadda', 'MadVulture', '2815', 'Vishal Chatragadda#3478', 'Bronze 2', 0),
(40, 'Dhananjay Bhole', 'djounier', '7891', 'd...jounier#2439', 'Bronze 2', 0),
(41, 'Abhiram', 'Lucifer', 'DVIL', 'Abhiram#6290', 'Bronze 2', 0),
(42, 'Himanshu M Singhal', 'UpsidedownCop', '5026', 'himanshu m singhal#4016', 'Iron 2', 0),
(43, 'Aayush', 'HURRAY', '4781', 'HURRAY#0343', 'Bronze 1', 0),
(44, 'Vishal Chatragadda', 'Vishal', '2815', 'Vishal Chatragadda#3478', 'Bronze 3', 0),
(45, 'Nishant Singh', 'Nishantcr7', '8058', 'Nishant Singh#0155', 'Iron 2', 0),
(46, 'Dhvanit', 'Fren', '1160', 'Dhvanit#7720', 'Iron 2', 0),
(47, 'Karan Bhushan', 'Foxtrotter', '7777', 'Foxtrotter02#0278', 'Bronze 3', 0),
(48, 'Palash Mittal', 'Draconian', '2519', 'Draconian#6725', 'Unranked', 0),
(49, 'Rhythm Shah', 'DrKauffman', '4407', 'rhythmshah', 'Iron 3', 0),
(50, 'Abhishek Raut', 'Abh15hek', '5442', 'AbhiRaut#9342', 'Silver 1', 0),
(51, 'Atulya', 'tylonn203', '8191', 'tylon#7883', 'Silver 1', 0),
(52, 'Aman Kashyap', 'FreneticXO', 'KEKW', 'AmanXO#7637', 'Platinum 1', 0),
(53, 'Vinit', 'TRQXFatalGod#8616', '8616', 'Vinit#4563', 'Unranked', 0),
(54, 'Utkarsh Indolia', 'ExDee', '5379', 'ian#1448', 'Gold 1', 0),
(55, 'Atul Chauhan', 'Lol xd bruh what', '4278', 'Atul chauhan#4265', 'Unranked', 0),
(56, 'Manav', '7760', 'JOHNWICK', '_Jardani_Jovonovich_', 'Iron 3', 0),
(57, 'Gaurav', 'Chickenbirayani', '3131', 'Gaurav#5675', 'Iron 3', 0),
(58, 'Niranjan Deori', 'NYX urek', 'main', 'Urek#6334', 'Bronze 3', 0),
(59, 'Hanan Basheer', 'Hanu', 'Yoru', 'Hanan #3085', 'Unranked', 0),
(60, 'Naman Singh Rana', '9945', 'ohyeah', 'nsr#7357', 'Unranked', 0),
(61, 'Maulin', 'Thunderaxx3', '2567', 'MRPâš¡âš¡ #0990', 'Iron 1', 0),
(62, 'Akshat Gupta', '5ENS3', '1036', 'AKshat-41#9103', 'Silver 3', 0),
(63, 'Utsav', 'utsav', '5807', 'utsavdesai#6136', 'Unranked', 0),
(64, 'Dev Pratap Singh', 'Papa Berlin', '9109', 'Berlin#2435', 'Bronze 1', 0),
(65, 'Prateek Neema', 'Pratnee', '4392', 'Pratnee', 'Unranked', 0),
(69, 'Vivek Gohil', 'V33010', '6196', 'Happiness_galore#7903', 'Unranked', 0),
(66, 'Shinobi', 'Shinobi#7482', 'Shinobi', 'Shinobi#3262', 'Bronze 3', 0),
(70, 'Teja', 'MIDAS', '4375', 'MIDAS#4056', 'Iron 2', 0),
(71, 'PHALANSH', 'EESHEV', '6F4I', 'Phalansh#5890', 'Iron 3', 0),
(72, 'Ritik Mandal', 'Hadesãƒ„', 'KING', 'Hades#8848', 'Silver 1', 0),
(73, 'Kaiwalya Khade', 'Kiay', '8783', 'Kaiwalya#7721', 'Iron 3', 0),
(74, 'Navyansh Mahka', 'noobplayer#2412', 'noobplayer', 'navyansh#7020', 'Iron 2', 0),
(75, 'Ayush Yadav', 'NovaBlitZ', '5473', 'NovaBlitZ#1336', 'Bronze 2', 0),
(76, 'Jaideep', 'Er3nWeeberTitan3', '7462', 'McQueen#6354', 'Iron 3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conf`
--
ALTER TABLE `conf`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `pubg`
--
ALTER TABLE `pubg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament_solo`
--
ALTER TABLE `tournament_solo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `valorant`
--
ALTER TABLE `valorant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conf`
--
ALTER TABLE `conf`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=475;

--
-- AUTO_INCREMENT for table `pubg`
--
ALTER TABLE `pubg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tournament_solo`
--
ALTER TABLE `tournament_solo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=487;

--
-- AUTO_INCREMENT for table `valorant`
--
ALTER TABLE `valorant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
