-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2024 at 10:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistematisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `allianz`
--

CREATE TABLE `allianz` (
  `id` int NOT NULL,
  `No` varchar(255) NOT NULL,
  `Client Name` varchar(255) NOT NULL,
  `DateYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date Month` varchar(255) NOT NULL,
  `Nomor Polis` varchar(255) NOT NULL,
  `Insured Name` varchar(255) NOT NULL,
  `Area 1` varchar(255) NOT NULL,
  `Area 2` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `Provinsi 2` varchar(255) NOT NULL,
  `Claim Type` varchar(255) NOT NULL,
  `Type Of Project` varchar(255) NOT NULL,
  `Investigator` varchar(255) NOT NULL,
  `Investigator 2` varchar(255) NOT NULL,
  `Case Received` varchar(255) NOT NULL,
  `PO Received` varchar(255) NOT NULL,
  `Date Line Preliminary` varchar(255) NOT NULL,
  `Date Line Investigasi` varchar(255) NOT NULL,
  `TAT` varchar(255) NOT NULL,
  `UP` varchar(255) NOT NULL,
  `Klaim Yang Diajukan` varchar(255) NOT NULL,
  `DOB Insured Name` varchar(255) NOT NULL,
  `Investigation Status` varchar(255) NOT NULL,
  `% Comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Report Send` varchar(255) NOT NULL,
  `Date Now` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Project Result` varchar(255) NOT NULL,
  `Result Detail` text,
  `PIC` varchar(255) NOT NULL,
  `ON Going` varchar(255) NOT NULL,
  `TAT On Going` varchar(255) NOT NULL,
  `TAT Completed` varchar(255) NOT NULL,
  `Temuan` varchar(255) NOT NULL,
  `QA Reporting` varchar(255) NOT NULL,
  `Nomor ID` varchar(255) NOT NULL,
  `QA Investigator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `allianz`
--

INSERT INTO `allianz` (`id`, `No`, `Client Name`, `DateYear`, `Date Month`, `Nomor Polis`, `Insured Name`, `Area 1`, `Area 2`, `Provinsi`, `Provinsi 2`, `Claim Type`, `Type Of Project`, `Investigator`, `Investigator 2`, `Case Received`, `PO Received`, `Date Line Preliminary`, `Date Line Investigasi`, `TAT`, `UP`, `Klaim Yang Diajukan`, `DOB Insured Name`, `Investigation Status`, `% Comp`, `Report Send`, `Date Now`, `Result`, `Project Result`, `Result Detail`, `PIC`, `ON Going`, `TAT On Going`, `TAT Completed`, `Temuan`, `QA Reporting`, `Nomor ID`, `QA Investigator`) VALUES
(1, '1165', 'Allianz', '2024', 'January', '000074274617', 'Suanning Rudi Tanardi', 'Tangerang', '', 'Banten', '', 'HS ', '', 'Ahmad Firdaus', '', '8/1/2024', '9/1/2024', '1/15/2024', '1/22/2024', '31', '', '494548374', '4/4/1967', 'Done', '100%', '2/8/2024', '', 'No Finding', '', 'LAS karena menunggu faskes luar negeri', 'Dhea', '', '', 'Over 14 Days', '', '', '3603284404670007', ''),
(2, '1166', 'Allianz', '2024', 'January', '000070528107', 'Jane Nancy Marylintanur', 'Manokwari', '', 'Papua', '', 'CI', '', 'Edy Siswoyo', '', '1/12/2024', '1/13/2024', '1/19/2024', '1/26/2024', '14', '500000000', '', '2/23/1981', 'Done', '100%', '1/26/2024', '', 'No Finding', '', '', 'Salsa', '', '', 'Over 14 Days', 'Temuan', 'Done', '9202016302810002', ''),
(3, '1167', 'Allianz', '2024', 'January', '000070218488', 'Basriah Dalle', 'Bontang', '', 'Kalimantan Timur', '', 'DC', '', 'Dedi Rochmansyah', '', '1/12/2024', '1/13/2024', '1/19/2024', '1/26/2024', '14', '125000000', '', '1/16/1963', 'Done', '100%', '1/26/2024', '', 'PEC', '', 'TB Paru, DM Tipe II dan Hipertensi', 'Rima', '', '', 'Over 14 Days', 'Temuan', 'Done', '6474015601630003', ''),
(4, '1168', 'Allianz', '2024', 'January', '000070934788', 'Fitri Nurjannah', 'Nunukan', '', 'Kalimantan Utara', '', 'DC', '', 'Haris Fatkhurokhman', '', '1/12/2024', '1/13/2024', '1/19/2024', '1/26/2024', '14', '150000000', '', '31/12/1973', 'Done', '100%', '1/26/2024', '', 'No Finding', '', '', 'Angga', '', '', 'Over 14 Days', '', '', '6405027112730005', 'Done'),
(5, '1169', 'Allianz', '2024', 'January', '000063173137', 'Simon Sampe Palumpun', 'Mimika', '', 'Papua', '', 'DC', '', 'Billy Jefry Joly', '', '1/12/2024', '1/13/2024', '1/19/2024', '1/26/2024', '14', '200000000', '', '12/5/1971', 'Done', '100%', '1/26/2024', '', 'PEC', '', 'Diabetes Melitus', 'Dhea', '', '', 'Over 14 Days', 'Temuan', 'Done', '9109010512710002', ''),
(6, '1170', 'Allianz', '2024', 'January', '000068441775', 'Naomi Ampang Allo', 'Tarakan', '', 'Kalimantan Utara', '', 'DC', '', 'Ifran Dwi Indra Sw', '', '1/12/2024', '1/13/2024', '1/19/2024', '1/26/2024', '24', '250000000', '', '4/3/1980', 'Done', '100%', '2/5/2024', '', 'PEC', '', 'Tumor Mammae, Hipertensi, Efusi Pleura dan Kista Ovarium. Menunggu hasil APS dari faskes terkait', 'Dzikrina', '', '', 'Over 14 Days', 'Temuan', '', '1209126505570001', ''),
(7, '1179', 'Allianz', '2024', 'January', '000074583406', 'Inge Mardianingsih', 'Jakarta Barat', '', 'DKI Jakarta', '', 'HS', '', 'Billy Jefry Joly', '', '1/23/2024', '1/23/2024', '1/29/2024', '2/5/2024', '25', '', '427116870', '2/19/1965', 'Done', '100%', '2/16/2024', '', 'No Finding', '', 'Menunggu hasil APS dari faskes terkait', 'Dzikrina', '', '', 'Over 14 Days', '', '', '3173075902650002', 'Done'),
(8, '1180', 'Allianz', '2024', 'January', '000072149555', 'Remigius Sigid Tri Hardjanto', 'Bantul', '', 'Daerah Istimewa Yogyakarta', '', 'HS', '', 'Dedi Rochmansyah', '', '1/24/2024', '1/24/2024', '1/30/2024', '2/6/2024', '28', '', '1083588792', '10/1/1964', 'Done', '100%', '2/20/2024', '', 'Re Underwriting', '', 'Otitis Eksterna Eczematosa, ADS Otitis Eksterna Ekzema, AD AS Cerumen dengan OED, Tubair Catarh Otitis Eksterna Eczematosa, & Pharyngitis ISP. Menunggu hasil APS dari RS. Panti Rapih', 'Salsa', '', '', 'Over 14 Days', '', '', '3578210110640002', 'Done'),
(9, '1181', 'Allianz', '2024', 'January', '000052625700', 'Hendryson Hartono', 'Deli Serdang', '', 'Sumatera Utara', '', 'HS', '', 'Andi Eko Pratama Samosir', '', '1/24/2024', '1/24/2024', '1/30/2024', '2/6/2024', '71', '', '2300000000', '4/7/1960', 'Done', '100%', '4/3/2024', '', 'Re Underwriting', '', 'LBP, Trigger Finger, & Cerumen Prop Aurkula Sinistra. Klaim yang diajukan berdasarkan tabel yang diberikan allianz, menunggu faskes luar negeri', 'Rima', '', '', 'Over 14 Days', 'Temuan', '', '1207260704600004', ''),
(10, '1182', 'Allianz', '2024', 'January', '000073108237	', 'Lawrence Andi Budiarto', 'Jakarta Barat', '', 'DKI Jakarta', '', 'HS', '', 'Muhamad Iswadi', '', '1/26/2024', '1/27/2024', '2/2/2024', '2/9/2024', '45', '', '520447437', '7/7/1974', 'Done', '100%', '3/11/2024', '', 'No Finding', '', 'Menunggu hasil APS dari faskes terkait', 'Fadlan', '', '', 'Over 14 Days', '', '', '3173050707740008', 'Done'),
(11, '1183', 'Allianz', '2024', 'January', '000074791419', 'Natalia', 'Jakarta Barat', '', 'DKI Jakarta', '', 'HS', '', 'Ifran Dwi Indra Sw', '', '1/26/2024', '1/27/2024', '2/2/2024', '2/9/2024', '40', '', '136491000', '29/12/1962', 'Done', '100%', '3/6/2024', '', 'No Finding', '', 'Menunggu hasil penelusuran lebih lanjut pada beberapa faskes dan pengecekan faskes luar negeri', 'Rima', '', '', 'Over 14 Days', '', '', '3173026912620004', ''),
(12, '1184', 'Allianz', '2024', 'January', '000070270327', 'Tjhai Djun Fa', 'Jakarta Utara', '', 'DKI Jakarta', '', 'HS', '', 'Ahmad Firdaus', '', '1/26/2024', '1/27/2024', '2/2/2024', '2/9/2024', '52', '', '335000000', '18/11/1955', 'Done', '100%', '3/18/2024', '', 'Re Underwriting', '', 'Sindroma Dispepsia. Menunggu hasil lebih lanjut terhadap paspor Tertanggung', 'Dhea', '', '', 'Over 14 Days', '', '', '3172041811550003', ''),
(13, '1185', 'Allianz', '2024', 'January', '000074156136', 'Verryanto', 'Jakarta Barat', '', 'DKI Jakarta', '', 'HS', '', 'Billy Jefry Joly', '', '1/26/2024', '1/27/2024', '2/2/2024', '2/9/2024', '48', '', '200000000', '11/9/1983', 'Done', '100%', '3/14/2024', '', 'No Finding', '', 'dibalikan ke asuransi, menunggu untuk dapat bertemu dengan Tertanggung dan mendalami terkait riwayat perawatan Tertanggung', 'Angga', '', '', 'Over 14 Days', '', '', '3671050911830005', ''),
(14, '1186', 'Allianz', '2024', 'January', '000062725549        ', 'Efendy Kosumo', 'Medan', '', 'Sumatera Utara', '', 'HS', '', 'Naswardi', '', '1/31/2024', '1/31/2024', '2/6/2024', '2/13/2024', '45', '', '500000000', '5/18/1958', 'Done', '100%', '3/15/2024', '', 'No Finding', '', 'Menunggu hasil penelusuran pada faskes Luar Negeri', 'Sarah', '', '', 'Over 14 Days', '', 'Done', '1271101805580001', 'Done'),
(15, '1187', 'Allianz', '2024', 'January', '000074417130\n', 'Wilien', 'Bandar Lampung', '', 'Lampung', '', 'HS', '', 'Dedi Rochmansyah', '', '1/31/2024', '2/1/2024', '2/7/2024', '2/14/2024', '16', '', '12487499', '2/9/1976', 'Done', '100%', '2/16/2024', '', 'No Finding', '', '', 'Rima', '', '', 'Over 14 Days', 'Temuan', '', '1871074902760002', 'Done'),
(16, '1188', 'Allianz', '2024', 'February', '000071293269', 'A Lik', 'Jakarta Utara', '', 'DKI Jakarta', '', 'HS', '', 'Muhamad Iswadi', '', '2/1/2024', '2/2/2024', '2/8/2024', '2/15/2024', '22', '', '57000000', '6/8/1952', 'Done', '100%', '2/23/2024', '', 'No Finding', '', 'Menunggu untuk mendalami terkait riwayat perawatan Tertanggung', 'Angga', '', '', 'Over 14 Days', 'Temuan', '', '1407060806520002', ''),
(17, '1189', 'Allianz', '2024', 'February', '000073101800', 'Budi Santoso Rachman', 'Medan', '', 'Sumatera Utara', '', 'HS', '', 'Alonsius Tarihoran', '', '2/1/2024', '2/2/2024', '2/8/2024', '2/15/2024', '42', '', '23000000', '9/1/1975', 'Done', '100%', '3/14/2024', '', 'No Finding', '', 'Menunggu hasil APS dan penelusuran pada faskes Luar Negeri', 'Fadlan', '', '', 'Over 14 Days', '', '', '1271060109750002', ''),
(18, '1198', 'Allianz', '2024', 'February', '000075070144', 'Yulianti', 'Jakarta Pusat', '', 'DKI Jakarta', '', 'HS', '', 'Billy Jefry Joly', '', '2/5/2024', '2/6/2024', '2/12/2024', '2/19/2024', '24', '', '68000000', '5/30/1966', 'Done', '100%', '2/29/2024', '', 'Re Underwriting', '', 'Acne Vulgaris, Conjunctivitis unspecified, Chronic Pharyngitis, Gastro-oesophageal reflux disease without oesophagitis, & Osteoarthritis Manus, Spasmofilia, Disorder of lipoprotein metabolism unspecified. Menunggu hasil APS dari faskes terkait', 'Dzikrina', '', '', 'Over 14 Days', 'Temuan', '', '3171027005660002', ''),
(19, '1199', 'Allianz', '2024', 'February', '000075130234', 'Be Mike Riasari', 'Tangerang', '', 'Banten', '', 'HS', '', 'Ahmad Firdaus', '', '2/5/2024', '2/6/2024', '2/12/2024', '2/19/2024', '31', '', '177000000', '1/11/1978', 'Done', '100%', '3/7/2024', '', 'PEC', '', 'PCO, Internal Haemorrhoids Without Complication, Intervertebral Disc Disorder dan Anxiety Disorder. Menunggu hasil penelusuran faskes di luar negeri dan APS yang diajukan pada faskes terkait', 'Sarah', '', '', 'Over 14 Days', 'Temuan', '', '3173025101780003', 'Done'),
(20, '1200', 'Allianz', '2024', 'February', '000074213660', 'Michelle Harijanto', 'Bogor', '', 'Jawa Barat', '', 'HS', '', 'Dedi Rochmansyah', '', '2/5/2024', '2/6/2024', '2/12/2024', '2/19/2024', '31', '', '465000000', '11/11/1976', 'Done', '100%', '3/7/2024', '', 'No Finding', '', 'Menunggu hasil penelusuran pada faskes Luar Negeri', 'Dhea', '', '', 'Over 14 Days', 'Temuan', '', '3271025111760008', ''),
(21, '1201', 'Allianz', '2024', 'February', '000066397222', 'Oky Santoso Triutomo', 'Salatiga', '', 'Jawa Tengah', '', 'CI', '', 'Ahmad Nur Salim', '', '2/12/2024', '2/13/2024', '2/19/2024', '4/26/2024', '14', '500000000', '', '16/10/1978', 'Done', '100%', '2/26/2024', '', 'Second Opinion', '', '', 'Dhea', '', '', 'Over 14 Days', 'Temuan', 'Done', '3373041610780001', ''),
(22, '1202', 'Allianz', '2024', 'February', '000075563054', 'Oky Santoso Triutomo', 'Salatiga', '', 'Jawa Tengah', '', 'CI', '', 'Ahmad Nur Salim', '', '2/12/2024', '2/13/2024', '2/19/2024', '4/26/2024', '14', '0', '', '16/10/1978', 'Done', '100%', '2/26/2024', '', 'Second Opinion', '', '', 'Dhea', '', '', 'Over 14 Days', 'Temuan', 'Done', '3373041610780001', ''),
(23, '1203', 'Allianz', '2024', 'February', '75584689', 'Oky Santoso Triutomo', 'Salatiga', '', 'Jawa Tengah', '', 'CI', '', 'Ahmad Nur Salim', '', '2/12/2024', '2/13/2024', '2/19/2024', '4/26/2024', '14', '0', '', '16/10/1978', 'Done', '100%', '2/26/2024', '', 'Second Opinion', '', '', 'Dhea', '', '', 'Over 14 Days', 'Temuan', 'Done', '3373041610780001', ''),
(24, '1204', 'Allianz', '2024', 'February', '75561427', 'Oky Santoso Triutomo', 'Salatiga', '', 'Jawa Tengah', '', 'CI', '', 'Ahmad Nur Salim', '', '2/12/2024', '2/13/2024', '2/19/2024', '4/26/2024', '14', '1000000000', '', '16/10/1978', 'Done', '100%', '2/26/2024', '', 'Second Opinion', '', '', 'Dhea', '', '', 'Over 14 Days', '', 'Done', '3373041610780001', ''),
(25, '1205', 'Allianz', '2024', 'February', '75571750', 'Oky Santoso Triutomo', 'Salatiga', '', 'Jawa Tengah', '', 'CI', '', 'Ahmad Nur Salim', '', '2/12/2024', '2/13/2024', '2/19/2024', '4/26/2024', '14', '0', '', '16/10/1978', 'Done', '100%', '2/26/2024', '', 'Second Opinion', '', '', 'Dhea', '', '', 'Over 14 Days', '', 'Done', '3373041610780001', ''),
(26, '1206', 'Allianz', '2024', 'February', '000076357252', 'Elton Gunawan', 'Makassar', '', 'Sulawesi Selatan', '', 'DC', '', 'Haris Fatkhurokhman', '', '2/12/2024', '2/13/2024', '2/19/2024', '4/26/2024', '31', '2000000000', '', '2/18/1989', 'Done', '100%', '3/14/2024', '', 'Re Underwriting', '', 'Ruptur total ACL Knee & Kontrol Post Operasi. Menunggu hasil APS dari RS. Siloam Makassar dan menunggu hasil pengecekan beberapa faskes di luar negeri', 'Angga', '', '', 'Over 14 Days', '', '', '7371041802890001', ''),
(27, '1208', 'Allianz', '2024', 'February', '000074804630', 'Yitshak Boari', 'Jayapura', '', 'Papua', '', 'CI', '', 'Hanny Prasetyo', '', '2/12/2024', '2/20/2024', '2/26/2024', '3/4/2024', '14', '0', '', '10/9/1992', 'Done', '100%', '3/4/2024', '', 'No Finding', '', '', 'Rima', '', '', 'Over 14 Days', '', 'Done', '9171050910920004', 'Done'),
(28, '1209', 'Allianz', '2024', 'February', '000058877836', 'Yitshak Boari', 'Jayapura', '', 'Papua', '', 'CI', '', 'Hanny Prasetyo', '', '2/12/2024', '2/20/2024', '2/26/2024', '3/4/2024', '14', '1000000000', '', '10/9/1992', 'Done', '100%', '3/4/2024', '', 'No Finding', '', '', 'Rima', '', '', 'Over 14 Days', '', 'Done', '9171050910920004', 'Done'),
(29, '1210', 'Allianz', '2024', 'February', '000059604914', 'Yitshak Boari', 'Jayapura', '', 'Papua', '', 'CI', '', 'Hanny Prasetyo', '', '2/12/2024', '2/20/2024', '2/26/2024', '3/4/2024', '14', '0', '', '10/9/1992', 'Done', '100%', '3/4/2024', '', 'No Finding', '', '', 'Rima', '', '', 'Over 14 Days', '', 'Done', '9171050910920004', 'Done'),
(30, '1211', 'Allianz', '2024', 'February', '000064703050', 'Yitshak Boari', 'Jayapura', '', 'Papua', '', 'CI', '', 'Hanny Prasetyo', '', '2/12/2024', '2/20/2024', '2/26/2024', '3/4/2024', '14', '0', '', '10/9/1992', 'Done', '100%', '3/4/2024', '', 'No Finding', '', '', 'Rima', '', '', 'Over 14 Days', 'Temuan', 'Done', '9171050910920004', 'Done'),
(31, '1214', 'Allianz', '2024', 'February', '000075485945 ', 'Robertus Manek Lay ', 'Kupang', '', 'Nusa Tenggara Timur', '', 'HS', '', 'Ifran Dwi Indra Sw', '', '2/16/2024', '2/17/2024', '2/23/2024', '3/1/2024', '47', '', '147379910', '1/14/1967', 'Done', '100%', '4/3/2024', '', 'No Finding', '', 'Klaim yang diajukan berdasarkan tabel yang diberikan allianz, Menunggu hasil penelusuran pada faskes Luar Negeri', 'Fadlan', '', '', 'Over 14 Days', '', '', '5371061401670001', ''),
(32, '1215', 'Allianz', '2024', 'February', '000073381179', 'Karolina', 'Palembang', '', 'Sumatera Selatan', '', 'HS', '', 'Fahmi Yudi Fadillah', '', '2/16/2024', '2/17/2024', '2/23/2024', '3/1/2024', '17', '', '170000000', '6/6/1963', 'Done', '100%', '3/4/2024', '', 'No Finding', '', 'Menunggu hasil pengecekan tempat ibadah', 'Dzikrina', '', '', 'Over 14 Days', '', '', '1671044606630007', ''),
(33, '1216', 'Allianz', '2024', 'February', '000069610527', 'Rusdy Santoso', 'Jakarta Timur', '', 'DKI Jakarta', '', 'CI', '', 'Billy Jefry Joly', '', '2/16/2024', '2/17/2024', '2/23/2024', '3/1/2024', '27', '1500000000', '', '8/22/1967', 'Done', '100%', '3/14/2024', '', 'Re Underwriting', '', 'Faringitis & Dermatitis. Menunggu hasil penelusuran pada faskes Luar Negeri', 'Angga', '', '', 'Over 14 Days', '', '', '3175022208670003', 'Done'),
(34, '1219', 'Allianz', '2024', 'March', '75286324', 'Mery', 'Jakarta Pusat', '', 'DKI Jakarta', '', 'DC', '', 'Billy Jefry Joly', '', '3/4/2024', '3/5/2024', '3/11/2024', '3/18/2024', '42', '260000000', '', '5/1/1973', 'Done', '100%', '4/15/2024', '', 'No Finding', '', 'Menunggu hasil APS dari faskes terkait', 'Dzikrina', '', '', 'Over 14 Days', 'Temuan', '', '3175064105730022', ''),
(35, '1220', 'Allianz', '2024', 'March', '73845243', 'Mery', 'Jakarta Pusat', '', 'DKI Jakarta', '', 'DC', '', 'Billy Jefry Joly', '', '3/4/2024', '3/5/2024', '3/11/2024', '3/18/2024', '42', '100000000', '', '5/1/1973', 'Done', '100%', '4/15/2024', '', 'No Finding', '', 'Menunggu hasil APS dari faskes terkait', 'Dzikrina', '', '', 'Over 14 Days', 'Temuan', '', '3175064105730022', ''),
(36, '1221', 'Allianz', '2024', 'March', '78027657', 'Mery', 'Jakarta Pusat', '', 'DKI Jakarta', '', 'DC', '', 'Billy Jefry Joly', '', '3/4/2024', '3/5/2024', '3/11/2024', '3/18/2024', '42', '1000000000', '', '5/1/1973', 'Done', '100%', '4/15/2024', '', 'No Finding', '', 'Menunggu hasil APS dari faskes terkait', 'Dzikrina', '', '', 'Over 14 Days', 'Temuan', '', '3175064105730022', ''),
(37, '1222', 'Allianz', '2024', 'March', '72158006', 'Setiawan', 'Jakarta Barat', '', 'DKI Jakarta', '', 'CI', '', 'Dhirada Bayu Bagaswara', '', '3/4/2024', '3/5/2024', '3/11/2024', '3/18/2024', '14', '5000000000', '', '4/18/1980', 'Done', '100%', '3/18/2024', '', 'PEC', '', 'Hipertensi', 'Angga', '', '', 'Over 14 Days', 'Temuan', '', '3173041804800007', 'Done'),
(38, '1224', 'Allianz', '2024', 'March', '72251982', 'Sunianto', 'Bangka', '', 'Bangka Belitung', '', 'DC', '', 'Ifran Dwi Indra Sw', '', '3/4/2024', '3/5/2024', '3/11/2024', '3/18/2024', '14', '215000000', '', '6/16/1956', 'Done', '100%', '3/18/2024', '', 'PEC', '', 'DM Type II Non Insulin dan HT Stage I', 'Sarah', '', '', 'Over 14 Days', 'Temuan', 'Done', '1901031607560001', ''),
(39, '1230', 'Allianz', '2024', 'March', '000067418206	', 'Faonasekhi', 'Indragiri Hilir', '', 'Riau', '', 'DC', '', 'Erik Putra', '', '3/20/2024', '3/20/2024', '3/26/2024', '4/2/2024', '20', '2500000000', '', '11/5/1976', 'Done', '100%', '4/8/2024', '', 'PEC', '', 'Hipertensi', 'Dzikrina', '', '', 'Over 14 Days', 'Temuan', 'Done', '1404060511760002', ''),
(40, '1235', 'Allianz', '2024', 'April', '000059418305', 'Edy Harianto', 'Bandung', '', 'Jawa Barat', '', 'CI', '', 'Billy Jefry Joly', '', '4/17/2024', '4/17/2024', '4/23/2024', '4/30/2024', '22', '1000000000', '', '3/29/1980', 'Done', '100%', '5/8/2024', '', 'PEC', '', 'Stemi Anterolateral, Lama karena LN ', 'Sarah', '', '', 'Over 14 Days', 'Temuan', '', '3273072903800002', ''),
(41, '1239', 'Allianz', '2024', 'April', '000071225280', 'Avan Isabella Taslim', 'Tangerang Selatan', '', 'Banten', '', 'CI', '', 'Ifran Dwi Indra Sw', '', '4/17/2024', '4/17/2024', '4/23/2024', '4/30/2024', '29', '0', '', '5/10/1987', 'Done', '100%', '5/15/2024', '', 'Re Underwriting', '', 'Menunggu Luar Negeri, Terdapat PEC yang bersifat non material dengan diagnosa Cytitis Hemoragis dan Atypical glandular cells of undetermined significant (AGUS)', 'Fadlan', '', '', 'Over 14 Days', '', '', '3273115005870001', ''),
(42, '1371', 'Allianz', '2024', 'May', '000071640692', 'HERNI VERYANY W', 'Jakarta Selatan', 'Medan', 'DKI Jakarta', 'Sumatera Utara', 'CI', '', 'Dhirada Bayu Bagaswara', 'Andi Eko Pratama Samosir', '5/27/2024', '5/28/2024', '6/3/2024', '6/10/2024', '32', '1500000000', '', '2/22/1990', 'Done', '100%', '6/28/2024', '', 'PEC', '', 'Bulging diskus intervertebralis L4-5 dan ditambah dengan ditemukan beberapa riwayat sebelum polis diterbitkan, namun tidak disampaikan kepada Asuransi pada saat pengisian SPAJ sehingga dalam hal ini Nasabah tidak ada itikad baik (utmost good faith) dalam penyampaian informasi mengenai riwayat penyakit sebelumnya. Menunggu APS dari RSPI Puri Indah & RS Siloam Medan', 'Dhea', '', '', '', '', '', '1871016202900007', 'Done'),
(43, '1372', 'Allianz', '2024', 'May', '000070991290', 'DR. MUHAMAD ZAINI', 'Jakarta Selatan', '', 'DKI Jakarta', '', 'HS', '', 'Dhirada Bayu Bagaswara', '', '5/27/2024', '5/28/2024', '6/3/2024', '6/10/2024', '37', '', '1000000000', '10/3/1953', 'Done', '100%', '7/3/2024', '', 'PEC', '', 'CVT kiri (Cerebral Venous Trombosis) + BPH Post Embolisasi. Menunggu hasil konfirmasi dari Mount Elizabeth Novena Singapura (rumah sakit terdata)', 'Rima', '', '', '', '', '', '3173080310530003', 'Done'),
(44, '1625', 'Allianz', '2024', 'June', '000070200039', 'ERIN YOLANDA', 'Bogor', '', 'Jawa Barat', '', 'CI', '', 'Dedi Rochmansyah', '', '6/28/2024', '6/28/2024', '7/4/2024', '7/11/2024', '25', '1250000000', '', '8/22/1982', 'Done', '100%', '7/22/2024', '', 'No Finding', '', '', 'Dhea', '', '', '', '', 'Done', '3271016208820011', 'Done'),
(45, '1626', 'Allianz', '2024', 'June', '000070199970', 'ERIN YOLANDA', 'Bogor', '', 'Jawa Barat', '', 'CI', '', 'Dedi Rochmansyah', '', '6/28/2024', '6/28/2024', '7/4/2024', '7/11/2024', '25', '20000000', '', '8/22/1982', 'Done', '100%', '7/22/2024', '', 'No Finding', '', '', 'Dhea', '', '', '', '', 'Done', '3271016208820011', 'Done'),
(46, '1627', 'Allianz', '2024', 'June', '000074111450', 'JUSTIN KENNEDY RYONALDO', 'Tangerang', '', 'Jawa Barat', '', 'DC', '', 'Ifran Dwi Indra Sw', '', '6/28/2024', '6/28/2024', '7/4/2024', '7/11/2024', '14', '1000000000', '', '1/14/2009', 'Done', '100%', '7/11/2024', '', 'Re Underwriting', '', 'Hipersekresi Bronkus, Hipertrofi Tonsil dan Granuloma Piogenik', 'Fadlan', '', '', '', '', '', '3602ALU20090250', 'Done'),
(47, '1636', 'Allianz', '2024', 'July', '000069432639', 'Jesslyn Miranda', 'Jakarta Selatan', '', 'DKI Jakarta', '', 'CI', '', 'Billy Jefry Joly', '', '7/18/2024', '7/18/2024', '7/24/2024', '7/31/2024', '42', '1000000000', '', '6/30/1995', 'Done', '100%', '8/28/2024', '', 'No Finding', '', 'Menunggu hasil APS dari faskes terkait & hasil pengecekan pada LN', 'Rima', '', '', '', '', 'Done', '3174017006950001', 'Done'),
(48, '1696', 'Allianz', '2024', 'September', '000073858672', 'Randy Cahyana', 'Jakarta Barat', '', 'DKI Jakarta', '', 'DC', '', 'Dhirada Bayu Bagaswara', '', '9/12/2024', '9/13/2024', '9/19/2024', '9/26/2024', '25', '1000000000', '', '27/11/1991', 'Done', '100%', '10/7/2024', '', 'No Finding', '', '', 'Bondan', '', '', '', '', '', '3204102711910004', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil_investigasi`
--

CREATE TABLE `analisa_hasil_investigasi` (
  `id` int NOT NULL,
  `hasil_investigasi` text NOT NULL,
  `id_hasil_investigasi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `analisa_hasil_investigasi`
--

INSERT INTO `analisa_hasil_investigasi` (`id`, `hasil_investigasi`, `id_hasil_investigasi`) VALUES
(1, 'Dari total 222 polis atau 186 nasabah yang telah dilakukan investigasi, terdapat 71 polis atau 56 nasabah (31.98% dari total polis) yang dapat dijadikan acuan untuk menolak klaim serta membatalkan polis.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `analisa_sebaran_wilayah_hasil_investigasi`
--

CREATE TABLE `analisa_sebaran_wilayah_hasil_investigasi` (
  `id` int NOT NULL,
  `analisa` text NOT NULL,
  `id_analisa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `analisa_sebaran_wilayah_hasil_investigasi`
--

INSERT INTO `analisa_sebaran_wilayah_hasil_investigasi` (`id`, `analisa`, `id_analisa`) VALUES
(1, 'testing 123', 2),
(2, '1.	Hasil Investigasi klaim dengan temuan PECj\r\nBerdasarkan 63 kasus dengan temuan PEC (Pre Exiciting condition) diperoleh data sebagai berikut:\r\n-	Top 3 diagnosa penyakit yang ditemukan meliputi HT, DM dan Stroke.\r\n-	Wilayah dengan hasil temuan terbanyak adalah daerah Sumatera Utara yaitu sebanyak 22 kasus (atau 34.92% dari total 63 kasus).\r\n\r\n2.	Hasil investigasi klaim dengan temuan fraud.\r\nBerdasarkan 8 kasus Fraud diperoleh data informasi sebagai berikut:\r\n-	Ahli waris mengakui telah melakukan pemalsuan tandatangan Ketua RT pada Surat Keterangan Kematian Tertanggung.\r\n-	Berdasarkan hasil silence investigation, Tertanggung diketahui dapat melakukan komunikasi secara normal tanpa menggunakan alat bantu dengar (kasus penyakit kritis ketulian).\r\n-	Berdasarkan hasil investigasi dan pengakuan dari Ahli waris, bahwa Tertanggung sudah meninggal sebelum polis diterbitkan.\r\nUdul d\r\n-	Berdasarkan pengakuan dari Tertanggung bahwa polis dibelikan dan dibayarkan oleh atasan Tertanggung\r\n-	Bahwa Pemegang Polis sekaligus Ahli waris mengaku tidak pernah menandatangani SPAJ dan tidak mengetahui mengenai informasi polis.\r\n-	Berdasarkan pengecekan pada faskes terdata dan informasi dari Wakil Kepala Rumah Sakit, bahwa Tertanggung tidak pernah menjalani perawatan di faskes tersebut dan dokumen klaim tidak pernag dikeluarkan oleh pihak rumah sakit.\r\n\r\n3.	Hasil investigasi klaim dengan temuan Batal Polis\r\nBerdasarkan 2 kasus Fraud diperoleh data informasi sebagai berikut:\r\n-	Ahli waris mengakui bahwa terdapat ketidakbenaran dalam memberikan informasi mengenai tempat kematian Tertanggung, dimana pada saat pengajuan klaim Tertanggung \r\n-	dinyatakan meninggal di Pasaman Barat, namun dari hasil investigasi diketahui Tertanggung meninggal di Nias.\r\n-	Nasabah membatalkan polis karena merasa proses klaim di Asuransi Allianz yang lama dan meminta untuk klaim yang sudah diajukan dapat dibayarkan.\r\n\r\n4.	Hasil investigasi klaim dengan Hasil Case Closed\r\n-	Proses investigasi dihentikan (case closed) sehubungan dengan nasabah tidak berhasil ditemui dan nomor telepon tidak berhasil dihubungi\r\n-	Rumah sakit mensyaratkan  adanya Surat Kuasa asli dari Nasabah, dimana dalam hal inj sesuai dengan permintaan dari Asuransi Allianz nasabah tidak diperkenankan untuk ditemui.\r\n\r\n5.	Hasil investigasi klaim dengan Hasil No Finding\r\n-	Berdasarkan hasil investigasi ke berbagai pihak baik pada fasilitas kesehatan, institusi pemerintah serta hasil wawancara, tidak ditemukan data medis sebelum polis diterbitkan yang bersifat material. \r\n-	Dari sisi financial background telah sesuai baik informasi di dalam SPAJ dan temuan di lapangan, dalam hal ini pembayar premi memiliki kemampuan untuk membeli dan membayarkan premi.\r\n-	Tidak terdapat indikasi fraud baik dalam proses penutupan polis maupun pengajuan klaim. Tidak ada kejanggalan apapun pada saat melakukan wawancara dengan nasabah dimana semua informasi dapat dijawab dengan baik dan lancar serta dapat menunjukan bukti-bukti yang ditanyakan oleh investigator.\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `analisa_tat`
--

CREATE TABLE `analisa_tat` (
  `id` int NOT NULL,
  `tat` text NOT NULL,
  `id_tat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `analisa_tat`
--

INSERT INTO `analisa_tat` (`id`, `tat`, `id_tat`) VALUES
(1, 'Adapun yang menjadi penyebab proses investigasi dapat melewati batas waktu 14 hari kalender \r\nadalah sebagai berikut:\r\n-	Perlu dilakukannya proses penelusuran pada beberapa fasilitas kesehatan di Malaysia dan \r\nSingapura yang tidak dapat ditentukan waktunya.\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `analisa_top_wilayah`
--

CREATE TABLE `analisa_top_wilayah` (
  `id` int NOT NULL,
  `top` text NOT NULL,
  `id_top` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `analisa_top_wilayah`
--

INSERT INTO `analisa_top_wilayah` (`id`, `top`, `id_top`) VALUES
(1, 'Dengan demikian wilayah dengan kasus investigasi terbanyak berdasarkan jumlah nasabah adalah wilayah (% dari total 48 polis) dan (% dari total 48 polis).', 2);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`) VALUES
(1, 'PT Asuransi Allianz Indonesia', 'alianz.png'),
(2, 'PT. MSIG Insurance Life', 'msig.png'),
(3, 'PT. Asuransi Jiwa Generali Indonesia', 'generali.png');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `periode` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `client_id`, `periode`, `tanggal`) VALUES
(2, 1, 'Juli - Agustus - September', '14 Agustus 2024');

-- --------------------------------------------------------

--
-- Table structure for table `generali`
--

CREATE TABLE `generali` (
  `id` int NOT NULL,
  `No` varchar(255) NOT NULL,
  `Client Name` varchar(255) NOT NULL,
  `DateYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date Month` varchar(255) NOT NULL,
  `Nomor Polis` varchar(255) NOT NULL,
  `Insured Name` varchar(255) NOT NULL,
  `Area 1` varchar(255) NOT NULL,
  `Area 2` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `Provinsi 2` varchar(255) NOT NULL,
  `Claim Type` varchar(255) NOT NULL,
  `Type Of Project` varchar(255) NOT NULL,
  `Investigator` varchar(255) NOT NULL,
  `Investigator 2` varchar(255) NOT NULL,
  `Case Received` varchar(255) NOT NULL,
  `PO Received` varchar(255) NOT NULL,
  `Date Line Preliminary` varchar(255) NOT NULL,
  `Date Line Investigasi` varchar(255) NOT NULL,
  `TAT` varchar(255) NOT NULL,
  `UP` varchar(255) NOT NULL,
  `Klaim Yang Diajukan` varchar(255) NOT NULL,
  `DOB Insured Name` varchar(255) NOT NULL,
  `Investigation Status` varchar(255) NOT NULL,
  `% Comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Report Send` varchar(255) NOT NULL,
  `Date Now` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Project Result` varchar(255) NOT NULL,
  `Result Detail` text,
  `PIC` varchar(255) NOT NULL,
  `ON Going` varchar(255) NOT NULL,
  `TAT On Going` varchar(255) NOT NULL,
  `TAT Completed` varchar(255) NOT NULL,
  `Temuan` varchar(255) NOT NULL,
  `QA Reporting` varchar(255) NOT NULL,
  `Nomor ID` varchar(255) NOT NULL,
  `QA Investigator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kesimpulan`
--

CREATE TABLE `kesimpulan` (
  `id` int NOT NULL,
  `kesimpulan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_kesimpulan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kesimpulan`
--

INSERT INTO `kesimpulan` (`id`, `kesimpulan`, `id_kesimpulan`) VALUES
(1, 'dan ini adalah kesimpulan terakhir dari performance report wkwkwk', 2),
(2, '1.	Wilayah dengan kasus investigasi terbanyak adalah wilayah Sumatera Utara yaitu sebanyak 92 polis (atau 41.4% dari total polis).  Bahasa baku, untuk wilayah dan data disesuaikan berdasarkan policy level, persentase diambil dari total kasus wilayah tersebut per total polis keseluruhan\r\n\r\n2.	Berdasarkan temuan investigasi, untuk temuan Pre-Existing Condition (PEC) merupakan kasus dengan temuan terbanyak yaitu sebanyak 63 kasus (atau 31% dari total kasus).  free teks\r\n\r\n3.	Terdapat 78 temuan yang dapat dijadikan sebagai dasar penolakan klaim. Dengan demikian sukses rate atas klaim untuk proses investigasi adalah sebesar 35.13%.  free teks\r\n\r\n4.	Rata-rata turnaround time (TAT) penyelesain kasus adalah 14 hari kalender (Normal Case) dan 30 hari kalender untuk Non-Normal Case.  free teks\r\n\r\n5.	Bahwa uang pertanggungan yang dapat diselamatkan atas ke 222 kasus yang dilakukan investigasi periode tahun 2023 adalah sebesar Rp 42,878,603,345 (atau 43% dari total kasus yang dilakukan investigasi).  free teks\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `msig`
--

CREATE TABLE `msig` (
  `id` int NOT NULL,
  `No` varchar(255) NOT NULL,
  `Client Name` varchar(255) NOT NULL,
  `DateYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Date Month` varchar(255) NOT NULL,
  `Nomor Polis` varchar(255) NOT NULL,
  `Insured Name` varchar(255) NOT NULL,
  `Area 1` varchar(255) NOT NULL,
  `Area 2` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `Provinsi 2` varchar(255) NOT NULL,
  `Claim Type` varchar(255) NOT NULL,
  `Type Of Project` varchar(255) NOT NULL,
  `Investigator` varchar(255) NOT NULL,
  `Investigator 2` varchar(255) NOT NULL,
  `Case Received` varchar(255) NOT NULL,
  `PO Received` varchar(255) NOT NULL,
  `Date Line Preliminary` varchar(255) NOT NULL,
  `Date Line Investigasi` varchar(255) NOT NULL,
  `TAT` varchar(255) NOT NULL,
  `UP` varchar(255) NOT NULL,
  `Klaim Yang Diajukan` varchar(255) NOT NULL,
  `DOB Insured Name` varchar(255) NOT NULL,
  `Investigation Status` varchar(255) NOT NULL,
  `% Comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Report Send` varchar(255) NOT NULL,
  `Date Now` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Project Result` varchar(255) NOT NULL,
  `Result Detail` text,
  `PIC` varchar(255) NOT NULL,
  `ON Going` varchar(255) NOT NULL,
  `TAT On Going` varchar(255) NOT NULL,
  `TAT Completed` varchar(255) NOT NULL,
  `Temuan` varchar(255) NOT NULL,
  `QA Reporting` varchar(255) NOT NULL,
  `Nomor ID` varchar(255) NOT NULL,
  `QA Investigator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int NOT NULL,
  `rekomendasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_rekomendasi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `rekomendasi`, `id_rekomendasi`) VALUES
(2, '1.	Bahwa perlu adanya perhatian khusus terhadap pengajuan klaim atas polis-polis yang ditutup di wilayah dengan jumlah temuan investigasi terbanyak, dan apabila diperlukan penelusuran lebih lanjut atas pengajuan klaim tersebut.', 2),
(3, '2.	Bahwa temuan-temuan dalam proses Investigasi ini baik adanya bagi area underwriting dalam melakukan mitigasi fraud kedepan, sehingga ada penguatan dalam proses seleksi resiko.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allianz`
--
ALTER TABLE `allianz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_hasil_investigasi`
--
ALTER TABLE `analisa_hasil_investigasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hasil_invesitgasi` (`id_hasil_investigasi`);

--
-- Indexes for table `analisa_sebaran_wilayah_hasil_investigasi`
--
ALTER TABLE `analisa_sebaran_wilayah_hasil_investigasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_analisa` (`id_analisa`);

--
-- Indexes for table `analisa_tat`
--
ALTER TABLE `analisa_tat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tat` (`id_tat`);

--
-- Indexes for table `analisa_top_wilayah`
--
ALTER TABLE `analisa_top_wilayah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_top` (`id_top`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `kesimpulan`
--
ALTER TABLE `kesimpulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kesimpulan` (`id_kesimpulan`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rekomendasi` (`id_rekomendasi`),
  ADD KEY `id_rekomendasi_2` (`id_rekomendasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allianz`
--
ALTER TABLE `allianz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `analisa_hasil_investigasi`
--
ALTER TABLE `analisa_hasil_investigasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `analisa_sebaran_wilayah_hasil_investigasi`
--
ALTER TABLE `analisa_sebaran_wilayah_hasil_investigasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `analisa_tat`
--
ALTER TABLE `analisa_tat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `analisa_top_wilayah`
--
ALTER TABLE `analisa_top_wilayah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kesimpulan`
--
ALTER TABLE `kesimpulan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analisa_hasil_investigasi`
--
ALTER TABLE `analisa_hasil_investigasi`
  ADD CONSTRAINT `hasil_investigasi` FOREIGN KEY (`id_hasil_investigasi`) REFERENCES `document` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `analisa_sebaran_wilayah_hasil_investigasi`
--
ALTER TABLE `analisa_sebaran_wilayah_hasil_investigasi`
  ADD CONSTRAINT `analisis` FOREIGN KEY (`id_analisa`) REFERENCES `document` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kesimpulan`
--
ALTER TABLE `kesimpulan`
  ADD CONSTRAINT `kesimpulan` FOREIGN KEY (`id_kesimpulan`) REFERENCES `document` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi` FOREIGN KEY (`id_rekomendasi`) REFERENCES `document` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
