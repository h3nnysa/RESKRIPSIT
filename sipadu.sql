-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2013 at 08:16 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel`
--

CREATE TABLE IF NOT EXISTS `t_artikel` (
  `idArtikel` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `content` text,
  `author` varchar(25) DEFAULT NULL,
  `datePub` datetime DEFAULT NULL,
  `views` int(5) DEFAULT NULL,
  PRIMARY KEY (`idArtikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `t_artikel`
--

INSERT INTO `t_artikel` (`idArtikel`, `title`, `content`, `author`, `datePub`, `views`) VALUES
(44, 'Kanker Ovarium', '<p><span style="font-size: small;"><span style="color: #800000;"><span style="color: #800000;"><strong><span style="color: #77020c;">Apa itu kanker ovarium?</span></strong></span></span></span></p>\r\n<p style="text-align: justify;"><span style="white-space: pre;"> </span>Kanker ovarium adalah sebuah penyakit sel tumor ganas didalam ovarium  wanita. Merupakan salah satu tumor yang paling sering ditemukan pada organ  reproduksi wanita. Dikarenakan jaringan di dalam ovarium dan kompleksitas fungsi  endokrin, sulit mendeteksi apakah tumor tersebut jinak atau ganas. Saat  diagnosis, mayoritas sel kanker sudah menyebar ke organ disekitarnya.<!--more--></p>\r\n<p style="text-align: justify;"><span style="white-space: pre;"> </span>Tingkat kematian tumor ganas ovarium menduduki urutan pertama pada onkologi  ginekologi. Sudah menjadi ancaman serius buat kehidupan dan kesehatan para kaum  wanita. Setelah ditemukan adanya kanker ovarium, sekitar 2/3 diantaranya sudah  memasuki stadium lanjut. Oleh karena itu tingkat kelangsungan hidup dalam waktu  lima tahun hanya tinggal 20%-30%. Setelah timbul penyakit, sedikit yang bisa  hidup sampai 3 tahun. Semakin tua usianya, tingkat kematian kanker ovarium juga  semakin tinggi.</p>\r\n<p style="text-align: justify;"><span style="white-space: pre;"> </span>Namun masih ada harapan seperti, semakin cepat terdeteksi kanker ovarium  dan menggunakan teknik pengobatan yang maju akan mendapatkan hasil pengobatan  yang efektif, memperpanjang kehidupan wanita dan meningkatkan kualitas  hidup.</p>\r\n<p style="text-align: justify;"><span style="font-size: small;"><span style="color: #800000;"><strong>Apa yang menjadi penyebab kanker Ovarium ?</strong></span></span></p>\r\n<p style="text-align: justify;"><strong>1. Faktor lingkungan :</strong> tingkat kejadian kanker ovarium lebih tinggi di  negara industri yang berkembang dan wanita dilapisan masyarakat atas,  kemungkinan berhubungan dengan pola makan yang tinggi kolesterol. Selain itu,  radiasi komputer, asbes dan talek dapat meningkatkan resiko terkena kanker  ovarium. Merokok dan kurangnya vitamin A,C,E juga ada kaitannya.</p>\r\n<p style="text-align: justify;"><strong>2. Faktor endokrin :</strong> kanker ovarium lebih banyak terjadi pada nulipara atau  wanita steril. Kehamilan tampaknya memiliki efek melawan kanker ovarium. Menurut  kedokteran, ovulasi yang setiap hari menyebabkan epitel ovarium rusak berulang  kali, ada hubungannya dengan kanker ovarium. Selain itu, <a title="kanker payudara" href="http://www.asiancancer.com/indonesian/cancer-topics/breast-cancer/">kanker payudara</a>, kanker  endometrium dan kanker ovarium mudah terjadi bersamaan. Ketiga penyakit ini  mempunyai sifat ketergantungan terhadap endokrin.</p>\r\n<p style="text-align: justify;"><strong>3. Faktor genetik dan keluarga : </strong>sekitar 20%-25% pasien kanker ovarium  anggota keluarganya mengidap kanker.&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p>&nbsp;</p>', 'Henny Maher', '2013-03-21 19:37:44', 13),
(45, 'Kanker Servik', '<p style="text-align: justify;"><span style="font-size: small;"><strong>Apakah yang dimaksud dengan kanker servik ?</strong></span></p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; Kanker serviks adalah tumor ganas yang terletak pada saluran rahim vagina  dan serviks. Tingginya kasus kanker serviks umumnya berusia sekitar 50 tahun,  dan pasien dengan kanker serviks pada pernikahan dini, hamil dini, perempuan  dari infeksi HPV produktif. Dalam beberapatahun terakhir, kejadian kanker serviks secara bertahap usia dekatdengan wanita muda.&nbsp;</p>\r\n<p><img style="margin: 3px 10px; border: 1px solid black; vertical-align: middle; float: left;" src="http://www.asiancancer.com/uploads/allimg/120702/4-20120F2115622300.jpg" alt="" width="300" height="219" /></p>\r\n<p style="text-align: justify;"><span style="font-size: small; font-weight: bold; text-decoration: blink;">Seberapa tingg</span><span style="text-decoration: blink; font-size: small; font-weight: bold;">i kasus kanker serviks &amp; angka kematiannya ?</span></p>\r\n<p style="text-align: justify;">&nbsp; &nbsp;&nbsp; kasus kanker serviks menduduki peringkat kedua di seluruh kanker perempuan.  Setiap tahunnya sekitar 53.000 kasus kanker serviks terjadi, dimana 85% kasus  kanker serviks berasal dari negara berkembang.</p>\r\n<p style="text-align: justify;">Setiap tahunnya sekitar 7,6 juta orang di seluruh dunia meninggal karena  kanker, akuntansi untuk 13 persen kematian kanker secara global, termasuk korban  kanker serviks dari sekitar 27.000, dan 88% angka kematian berasal dari negara  berkembang.&nbsp;</p><!--more-->\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><span style="text-decoration: blink; font-size: small;"><strong>Apa penyebab kanker servik ?</strong></span></p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; 70% kanker serviks disebabkan oleh human papillomavirus (HPV), diikuti oleh  kanker serviks yang disebabkan oleh merokok dan human immunodeficiency virus  (HIV), dan faktor risiko lainnya saling terkait yang juga dapat menyebabkan  kanker serviks.</p>\r\n<p style="text-align: justify;">&nbsp;Faktor risiko kanker serviks lainnya antara lainnya meliputi : klamidia,  kebiasaan makan yang buruk, menggunakan obat-obatan yang mengandung hormon,  riwayat keluarga yang terkena kanker serviks, terlalu sering mengkonsumsi pil  kontrasepsi, berhubungan seksual di usia muda, hamil dini, melahirkan banyak  anak dan faktor lain yang cenderung memicu kanker serviks.&nbsp;</p>\r\n<p style="text-align: justify;"><strong><span style="font-size: small; text-decoration: blink;">Bagaimana mencegah kanker servik ?</span></strong></p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; Berikut ini adalah beberapa hal yang dapat dilakukan kaum perempuan dalam hal <a title="7 Cara Efektif Mencegah Kanker Payudara" href="http://lovira.com/7-cara-efektif-mencegah-kanker-payudara/">mencegah kanker</a> serviks agar tidak menimpa dirinya, antara lain:</p>\r\n<ol style="text-align: justify;">\r\n<li>Jalani pola hidup sehat dengan mengkonsumsi makanan yang cukup nutrisi dan bergizi</li>\r\n<li>Selalu menjaga kesehatan tubuh dan sanitasi lingkungan</li>\r\n<li>Hindari pembersihan bagian genital dengan air yang kotor</li>\r\n<li>Jika anda perokok, segera hentikan kebiasaan buruk ini</li>\r\n<li>Hindari berhubungan intim saat usia dini</li>\r\n<li>Selalu setia kepada pasangan anda, jangan bergonta-ganti apalagi diikuti dengan hubungan intim.</li>\r\n<li>Lakukan pemeriksaan pap smear minimal lakukan selama 2 tahun sekali, khususnya bagi yang telah aktif melakukan hubungan intim</li>\r\n<li>Jika anda belum pernah melakukan hubungan intim, ada baiknya melakukan vaksinasi HPV</li>\r\n<li>Perbanyaklah konsumsi makanan &nbsp;sayuran yang kandungan beta karotennya cukup banyak, konsumsi vitamin c dan e.</li>\r\n</ol>\r\n<div style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp;Meskipun demikian, jika anda sudah  terdeteksi mengidap kanker serviks, maka ada beberapa metode pengobatan  yang bisa dilakukan. Jika terdeteksi kanker serviks stadium awal, maka  pengobatannya dilakukan dengan cara menghilangkan kanker serviks  tersebut dengan cara dilakukan pembedahan, baik pembedahan laser,  listrik atau dengan cara pembekuan dan membuang jaringan kanker serviks  (cyrosurgery)</div>\r\n<div style="text-align: justify;">Untuk kasus kanker serviks stadium  lanjut akan dilakukan pengobatan dengan cara kemoterapi serta  radioterapi, namun jika sudah terdeteksi cukup parah, tiada lain kecuali  dengan mengangkat rahim (histerektomi) secara menyeluruh agar kanker  tidak berkembang.</div>\r\n<div style="text-align: justify;"><br />Dikutip dari berbagai sumber.</div>\r\n<p style="text-align: justify;">&nbsp;</p>', 'Henny Maher', '2013-03-25 16:57:22', 26),
(48, 'Kanker Vagina', '<p><span style="text-align: justify;">Vagina adalah saluran yang berhubungan langsung  dengan bagian terendah dari rahim, yaitu leher rahim. Dinding vagina  yang dilapisi oleh epithelium yang terbentuk dari sel-sel skuamosa  memiliki banyak lipatan yang membantu agar vagina tetap terbuka selama  hubungan seksual atau proses persalinan berlangsung.</span></p>\r\n<p class="MsoNormal" style="text-align: justify;">Kanker atau tumor ganas biasanya ditemukan di dalam  saluran menuju leher rahim atau pada dinding vagina.Kanker ini tidak  muncul secara tiba-tiba, tetapi berkembang  selama bertahun-tahun. Kanker yang muncul pada vagina akan menyebabkan  kerusakan atau luka pada lapisan vagina yang bisa menimbulkan pendarahan  dan infeksi.</p>\r\n<p class="MsoNormal" style="font-size: 14px; font-style: normal; font-weight: bold; color: #c84836; text-decoration: blink; text-align: justify;">Faktor Resiko Timbulnya kanker Vagina</p><!--more-->\r\n<p class="MsoNormal" style="text-align: justify;">Penyebab kanker vagina belum diketahui secara pasti  sampai saat ini. Namun faktor resiko sebagai pemicu timbulnya kanker  pada alat reproduksi wanita ini antara lain sebagai berikut :</p>\r\n<ol type="1">\r\n<li class="MsoNormal">Wanita      berusia di atas 50 tahun atau menopause.</li>\r\n<li class="MsoNormal">Obat      hormon untuk mencegah keguguran yang  digunakan secara berlebihan dan dikonsumsi dalam jangka waktu lama,  seperti DES (DiEtilStilbestrol).</li>\r\n<li class="MsoNormal">Wanita      terkena infeksi HPV (Human Papiloma  Virus), yaitu virus penyebab kutil      kelamin yang ditularkan melalui  hubungan seksual.</li>\r\n<li class="MsoNormal">Hubungan      seksual dilakukan pada umur belasan tahun.</li>\r\n<li class="MsoNormal">Wanita      suka beganti-ganti pasangan.</li>\r\n<li class="MsoNormal">Wanita      terkena kanker leher rahim.</li>\r\n<li class="MsoNormal">Wanita      mengalami iritasi pada vaginanya.</li>\r\n<li class="MsoNormal">Wanita      perokok.</li>\r\n</ol>\r\n<div style="font-size: 14px; font-weight: bold; color: #bc5143; text-decoration: blink;">Pemeriksaan Secara Dini&nbsp;</div>\r\n<div style="text-align: justify;">Pemeriksaan yang biasa dilakukan antara lain pemeriksaan panggul untuk  mendeteksi adanya benjolan yang abnormal. Selain itu dapat dilakukan  pemeriksaan lanjutan berupa pemeriksaan dinding vagina dengan kaca  pembesar (kolposkopi) atau pemeriksaan mikroskopik terhadap sample  jaringan vagina (biopsy).</div>', 'Henny Maher', '2013-05-14 08:31:15', 12);

-- --------------------------------------------------------

--
-- Table structure for table `t_aturan`
--

CREATE TABLE IF NOT EXISTS `t_aturan` (
  `ida` int(3) NOT NULL AUTO_INCREMENT,
  `idg` varchar(4) NOT NULL,
  `idp` varchar(4) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=424 ;

--
-- Dumping data for table `t_aturan`
--

INSERT INTO `t_aturan` (`ida`, `idg`, `idp`, `mb`, `md`) VALUES
(422, 'G031', 'P002', 0.3, 0.05),
(421, 'G020', 'P002', 0.3, 0.05),
(420, 'G030', 'P002', 0.3, 0.05),
(419, 'G018', 'P003', 0.4, 0.1),
(418, 'G018', 'P002', 0.7, 0.05),
(423, 'G008', 'P003', 0.4, 0.05),
(416, 'G025', 'P001', 0.7, 0.05),
(415, 'G019', 'P003', 0.2, 0.05),
(414, 'G015', 'P003', 0.3, 0.1),
(413, 'G003', 'P003', 0.4, 0.2),
(412, 'G009', 'P003', 0.4, 0.15),
(411, 'G012', 'P003', 0.5, 0.2),
(410, 'G027', 'P001', 0.3, 0.05),
(409, 'G023', 'P001', 0.3, 0.05),
(408, 'G033', 'P001', 0.4, 0.1),
(407, 'G029', 'P001', 0.5, 0.05),
(406, 'G024', 'P001', 0.6, 0.2),
(405, 'G021', 'P001', 0.6, 0.15),
(404, 'G022', 'P001', 0.6, 0.1),
(403, 'G032', 'P001', 0.7, 0.05),
(402, 'G028', 'P003', 0.2, 0.15),
(401, 'G028', 'P001', 0.6, 0.1),
(400, 'G017', 'P003', 0.5, 0.05),
(399, 'G017', 'P001', 0.4, 0.1),
(398, 'G004', 'P003', 0.3, 0.2),
(397, 'G004', 'P001', 0.4, 0.1),
(396, 'G014', 'P003', 0.3, 0.15),
(395, 'G014', 'P001', 0.3, 0.15),
(394, 'G001', 'P003', 0.6, 0.2),
(393, 'G001', 'P001', 0.4, 0.1),
(392, 'G006', 'P003', 0.2, 0.1),
(391, 'G006', 'P002', 0.3, 0.05),
(390, 'G006', 'P001', 0.5, 0.15),
(389, 'G007', 'P003', 0.4, 0.1),
(388, 'G007', 'P002', 0.3, 0.05),
(387, 'G007', 'P001', 0.3, 0.1),
(386, 'G005', 'P003', 0.4, 0.05),
(385, 'G005', 'P002', 0.3, 0.1),
(384, 'G005', 'P001', 0.3, 0.15),
(383, 'G011', 'P003', 0.7, 0.1),
(382, 'G011', 'P002', 0.4, 0.05),
(381, 'G011', 'P001', 0.3, 0.1),
(380, 'G002', 'P003', 0.5, 0.15),
(379, 'G002', 'P002', 0.3, 0.1),
(378, 'G002', 'P001', 0.4, 0.1),
(377, 'G034', 'P003', 0.5, 0.15),
(376, 'G034', 'P002', 0.3, 0.1),
(375, 'G034', 'P001', 0.4, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `t_diagnosa`
--

CREATE TABLE IF NOT EXISTS `t_diagnosa` (
  `idp` varchar(4) NOT NULL,
  `ids` int(3) NOT NULL,
  `cf` varchar(6) NOT NULL,
  `tgl_diagnosa` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_diagnosa`
--

INSERT INTO `t_diagnosa` (`idp`, `ids`, `cf`, `tgl_diagnosa`) VALUES
('P003', 19, '0,575', '2013-05-20'),
('P003', 19, '0,615', '2013-05-20'),
('P003', 0, '0,575', '2013-05-20'),
('P003', 0, '0,575', '2013-05-20'),
('P003', 14, '0,575', '2013-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `t_gejala`
--

CREATE TABLE IF NOT EXISTS `t_gejala` (
  `idg` varchar(4) NOT NULL,
  `gejala` text NOT NULL,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY (`idg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_gejala`
--

INSERT INTO `t_gejala` (`idg`, `gejala`, `pertanyaan`) VALUES
('G032', 'Setelah berhubungan keluar darah dari vagina', 'Apakah setelah berhubungan keluar darah dari vagina ?'),
('G033', 'Nyeri sekitar perut seperti di tusuk-tusuk', 'Apakah anda merasakan nyeri sekitar perut seperti di tusuk-tusuk ?'),
('G034', 'Perut terasa sakit dan atau keras', 'Apakah perut anda  terasa sakit dan atau keras ?'),
('G031', 'Sesak napas, dada bagian kiri nyeri berlebih', 'Apakah anda mengalami sesak napas, dada bagian kiri nyeri berlebih ?'),
('G030', 'Perut sampai pinggang terasa nyeri', 'Apakah perut sampai pinggang terasa nyeri ?'),
('G029', 'Urin berwarna merah atau bercampur darah', 'Apakah Urin berwarna merah atau bercampur darah ?'),
('G027', 'Nyeri punggung bawah berlebih', 'Apakah anda merasakan nyeri punggung bawah berlebih ?'),
('G028', 'Keputihan tidak berbau dan atau berbau, banyak dan gatal', 'Apakah anda mengalami keputihan tidak berbau dan atau berbau, banyak dan gatal ?'),
('G026', 'Perut terasa nyeri saat duduk', 'Apakah perut anda terasa nyeri pada saat duduk ?'),
('G025', 'Terjadi pendarahan di jalan lahir', 'Apakah anda mengalami pendarahan di jalan lahir ?'),
('G024', 'Bagian vagina basah terus', 'Apakag bagian vagina basah terus ?'),
('G023', 'Perut melilit', 'Apakah perut anda melilit ?'),
('G022', 'Terjadi gangguan pada proses pengeluaran urin', 'Apakah terjadi gangguan pada proses pengeluaran urin ?'),
('G021', 'Menstruasi keluar flek', 'Apakah pada saat menstruasi keluar  ?'),
('G019', 'Perut membesar, mengecil sesuai dengan siklus haid', 'Apakah perut anda  membesar, mengecil sesuai dengan siklus haid ?'),
('G020', 'Menstruasi terasa sakit atau nyeri', 'Apakah pada saat menstruasi terasa sakit atau nyeri ?'),
('G018', 'Menstruasi tidak teratur, lama dan banyak', 'Apakah menstruasi tidak teratur, lama dan banyak ?'),
('G017', 'Kaki bengkak', 'Apakah kaki anda bengkak ?'),
('G016', 'Nyeri pada bagian vagina', 'Apakah anda merasa nyeri pada bagian vagina ?'),
('G015', 'Perut terasa panas', 'Apakah perut terasa panas ?'),
('G014', 'Nyeri perut pada bagian ulu hati', 'Apakah anda merasakan nyeri perut pada bagian ulu hati ?'),
('G013', 'Nyeri dada, demam', 'Apakah Nyeri dada dan atau demam ?'),
('G012', 'Perut terasa tidak enak, mbeseseg atau sebah', 'Apakah perut terasa tidak enak, mbeseseg atau sebah ?'),
('G011', 'Terasa ada benjolan di perut', 'Apakah anda merasakan ada benjolan di perut ?'),
('G010', 'BAB berkurang dan atau sakit', 'Apakah pada saat BAB sakit dan atau berkurang ?'),
('G009', 'Nafsu makan kurang', 'Apakah nafsu makan anda kurang ?'),
('G008', 'Keluar cairan putih dari vagina', 'Apakah keluar cairan putih dari vagina ?'),
('G006', 'Pinggang terasa nyeri, sakit', 'Apakah pinggang terasa nyeri dan atau sakit ?'),
('G007', 'Nyeri perut pada bagian kanan, kiri, bawah', 'Apakah anda merasakan nyeri perut ?'),
('G005', 'Perut kembung', 'Apakah perut anda kembung ?'),
('G004', 'Perut terasa sesak', 'Apakah perut anda terasa sesak ?'),
('G001', 'Perut terasa membesar', 'Apakah perut terasa membesar ?'),
('G002', 'Mual, muntah, mules, lemes', 'Apakah anda merasakan mual, muntah, mules atau lemes ?'),
('G003', 'Cepat kenyang', 'Apakah anda merasakan cepat kenyang ?');

-- --------------------------------------------------------

--
-- Table structure for table `t_penyakit`
--

CREATE TABLE IF NOT EXISTS `t_penyakit` (
  `idp` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `desk` text NOT NULL,
  `penanganan` text NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penyakit`
--

INSERT INTO `t_penyakit` (`idp`, `nama`, `desk`, `penanganan`) VALUES
('P001', 'Kanker Servik', 'Kanker serviks adalah keganasan yang terjadi pada leher rahim. Kanker serviks disebut juga kanker leher rahim atau kanker mulut rahim dimulai pada lapisan serviks.  ', 'Tes pep pada saat ini merupakan alat skrining yang diandalkan. Lima puluh persen pasien baru kanker servik tidak pernah melakukan tes Pap. Tes pep direkomendasikan pada saat mulai melakukan aktivitas seksual atau setelah menikah. Setelah 3 kali pemeriksaan tes Pep tiap tahun, interval pemeriksaan dapat lebih lama (tiap 3 tahun sekali). Bagi kelompok perempuan yang beisiko tinggi (infeksi hPV, HIV, kehidupan yang berisiko) dianjurkan pemeriksaan Pep setiap tahun. Pemastian diagnosis dilaksanakan dengan biopsi serviks. Diagnosis kanker servik diperoleh melalui pemeriksaan klinis berupa anamnesis, pemeriksaan fisik dan ginekologik, termasuk evaluasi kelenjar getah bening, pemeriksaan panggul dan pemeriksaan rektal. Biopsi serviks merupakan cara diagnosis pasti dari kanker serviks, sedangkan tes Pep dan atau kuret endoserviks merupakan pemeriksaan yang tidak adekuat. Pemeriksaan radiologik berupa foto paru-paru, pielografi intravena atau CT-scan merupakan pemeriksaan penunjang untuk melihat perluasan penyakit, serta menyingkirkan adanya obstruksi ureter.  '),
('P002', 'Kanker Endometrium', 'Penyakit ini sering disebut juga kanker endometrium dan paling sering di alami oleh perempuan berusia 50-60 tahun. ', '1.	Melakukan pemeriksaan aspirasi kuretase kavum uteri, yaitu untuk pemeriksaan sitologik (patologi anatomi). \r\n2.	Mengobati obesitas.\r\n3.	Memilih pil KB kombinasi dan pengawasan pemberian pengobatan hormon estrogen.\r\n4.	Melakukan aspirasi kuretase pada wanita pasca-menopause yang gemuk dengan riwayat keluarga kanker endometrium dan payudara, wanita menopause pada usia lebih dari 52 tahun dan pada wanita pre-menopause dengan siklus anovulatoar yang lama.\r\n'),
('P003', 'Kanker Ovarium               ', 'Kanker ovarium merupakan sebuah penyakit di mana ovarium yang dimiliki wanita memiliki perkembangan sel-sel abnormal. Secara umum, kanker ovarium merupakan suatu bentuk kanker yang menyerang ovarium. Kanker ini bisa berkembang sangat cepat, bahkan, dari stadium awal hingga stadium lanjut bisa terjadi hanya dalam satu tahun saja. ', 'Diagnosis dilakukan dengan anamnesis lengkap serta pemeriksaan fisik. Pemeriksaan darah tepi, tes fungi hati, tes fungsi ginjal, serta biokimia darah lainnya perlu dilakukan. Pemeriksaan radiologi berupa foto paru-paru, untuk mengevaluasi metastasis paru, efusi pleura serta pemeriksaan CT-scan abdomen pelvis.');

-- --------------------------------------------------------

--
-- Table structure for table `t_pertanyaan`
--

CREATE TABLE IF NOT EXISTS `t_pertanyaan` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `idg` varchar(4) NOT NULL,
  `g_ya` varchar(5) NOT NULL,
  `g_tidak` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `t_pertanyaan`
--

INSERT INTO `t_pertanyaan` (`id`, `idg`, `g_ya`, `g_tidak`) VALUES
(148, 'G031', '', ''),
(147, 'G020', 'G031', 'G031'),
(146, 'G030', 'G020', 'G020'),
(145, 'G018', 'G030', ''),
(144, 'G025', 'G032', 'G018'),
(143, 'G019', '', ''),
(142, 'G015', 'G013', 'G013'),
(141, 'G008', 'G015', ''),
(140, 'G009', 'G008', 'G008'),
(139, 'G012', 'G009', 'G009'),
(138, 'G027', '', ''),
(137, 'G023', 'G027', 'G027'),
(136, 'G033', 'G023', ''),
(135, 'G029', '', 'G033'),
(134, 'G024', 'G029', 'G029'),
(133, 'G021', 'G024', 'G024'),
(132, 'G022', '', 'G021'),
(131, 'G032', '', 'G022'),
(130, 'G028', 'G032', 'G012'),
(129, 'G017', 'G028', 'G028'),
(128, 'G004', 'G017', 'G017'),
(127, 'G014', 'G004', 'G004'),
(126, 'G001', 'G014', 'G025'),
(125, 'G006', 'G001', ''),
(124, 'G007', 'G005', 'G005'),
(123, 'G005', '', 'G006'),
(122, 'G011', '', 'G007'),
(121, 'G002', 'G011', 'G011'),
(120, 'G034', 'G002', 'G002');

-- --------------------------------------------------------

--
-- Table structure for table `t_saran`
--

CREATE TABLE IF NOT EXISTS `t_saran` (
  `idn` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `saran` text NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`idn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `t_saran`
--

INSERT INTO `t_saran` (`idn`, `nama`, `email`, `saran`, `waktu`) VALUES
(1, 'maherni ngadiyaningsih', 'maher_send@yahoo.com', 'cepat diselesaikan supaya nadng \r\ncepat diselesaikan supaya nadng wisuda\r\ncepat diselesaikan supaya nadng wisuda\r\ncepat diselesaikan supaya nadng wisuda\r\ncepat diselesaikan supaya nadng wisuda', '0000-00-00 00:00:00'),
(5, 'maherni', 'hy_gmbz@yahoo.com', 'hari ini henny ada bimbingan ma bu uyun,,jangan smapai telat..buruan mandi yach hhhe:)', '2013-02-01 08:12:41'),
(6, 'meika', 'meika@yoocom', 'ndari sedang sakit...semoga cepat sembuh...amin :)', '2013-02-06 18:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `idu` int(3) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `umur` int(3) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telepon` bigint(12) NOT NULL,
  `level` int(3) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`idu`, `nama_lengkap`, `userid`, `password`, `umur`, `email`, `telepon`, `level`, `create_date`) VALUES
(12, 'Meika Wulandari', 'meika', 'meika', 12, 'meikaclever@yahoo.com', 85729001164, 10, '2013-05-20'),
(13, 'bayu setiawan', 'bayu', 'cakep', 20, 'bayu@yahoo.com', 876543200, 50, '2013-05-20'),
(14, 'jodi setiawan', 'jodi', 'jodi', 14, 'febrian@yahoo.com', 986556666666, 10, '2013-05-20'),
(16, 'pipt nurul', 'pipit', 'pipit', 0, 'pipit@yahoo.com', 85729001145, 30, '2013-05-20');
