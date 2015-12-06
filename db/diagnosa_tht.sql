-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 07:46 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diagnosa_tht`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `kategori_id` int(3) DEFAULT NULL,
  `isi` text,
  `foto_artikel` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `creaed_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `kategori_id`, `isi`, `foto_artikel`, `created_by`, `creaed_date`, `updated_by`, `updated_date`) VALUES
(1, 'Cara membersihkan telinga yang benar', 1, '<div style="text-align: justify;"><strong>Cara Membersihkan Telinga yang Benar</strong>. Kita semua tahu bahwa telinga adalah organ vital dari sistem sensori tubuh manusia. Telinga adalah organ sistem pendengaran yang bertanggung jawab untuk indera pendengaran. Fungsi utamanya adalah untuk menerima gelombang suara dan mengirimkan sinyalnya ke otak. Melalui cara inilah kita dapat mendeteksi dan menginterpretasikan jenis-jenis suara yang berbeda. Selain berfungsi sebagai organ sistem pendengaran, telinga juga berfungsi untuk menjaga keseimbangan tubuh. Tanpa telinga, kita tidak akan bisa mendengar suara-suara dan tubuh menjadi tidak seimbang.</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Telinga yang nampak dari luar bukanlah keseluruhan bagian dari telinga. Telinga terdiri dari tiga bagian yang keseluruhannya bekerja membentuk suatu sistem pendengaran. Telinga luar atau yang kita biasa lihat adalah telinga bagian luar yang berfungsi sebagai organ pelindung gendang telinga. Fungsi dari telinga luar adalah untuk mengumpulkan dan memandu gelombang suara menuju telinga tengah. Telinga luar pun terdiri dari dua bagian Pinna (telinga flap) dan Meatus (saluran telinga). Telinga tengah terletak diantara telinga luar dan telinga dalam.Telinga tengah berfungsi untuk merasakan gelombang suara dari telinga luar dalam bentuk gelombang tekanan. Telinga tengah adalah rongga berisi udara dan terdiri dari gendang telinga dan tulang-tulang kecil.Telinga bagian dalam, sesuai dengan namanya adalah bagian terdalam dari telinga. Telinga dalam berfungsi sebagai untuk pendengaran sekaligus sistem keseimbangan tubuh. Telinga dalam terdiri dari koklea, saluran setengah lingkarang dan saraf auditori.</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Setiap bagian telinga melakukan fungsi tertentu yang berkontribusi terhadap fungsi keseluruhan sistem pendengaran manusia. Setiap kerusakan pada tiap bagian telinga dan menyebabkan gangguan pendengaran bahkan hingga kehilangan kemampuan mendengar (tuli).</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Seringkali kita merasa terganggu dan risih dengan adanya kotoran pada telinga kita. Baik yang berbentuk cair ataupun padat. <a href="http://www.detiksehat.com/2014/09/cara-membersihkan-telinga-yang-benar.htm">Kotoran telinga</a> terbuat dari sekresi campuran antara lemak dan keringat. Ada pula cairan telinga yang diproduksi oleh daerah di sepertiga bagian terluar lubang telinga, cairan ini biasa disebut cerumen. Cairan ini adalah salah satu mekanisme alami tubuh kita untuk membersihkan lubang telinga dan membuat lubang telinga tetap bisa mendengar. Singkatnya cairan ini yang bertanggung jawab untuk proses pembersihan telinga secara alamiah. Cairan ini akan memberi manfaat bila tidak berlebihan jumlahnya. Setelah membersihkan telinga, cairan ini akan terdorong hingga daun telinga dan menjadi serpihan.</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Membersihkan telinga dari kotoran memang penting karena kadang telinga kotor bisa sedikit banyak berpengaruh baik secara estetika maupun kesehatan. Tetapi <a href="http://www.detiksehat.com/">membersihkan telinga</a> pun mempunyai caranya tersendiri agar tidak mengganggu dan tidak membahayakan.</div>\r\n<h3 style="text-align: justify;"><strong>&nbsp;</strong></h3>\r\n<h3 style="text-align: justify;"><strong>Cara Membersihkan Telinga yang Benar </strong></h3>\r\n<ol>\r\n<ol>\r\n<li>Menggunakan cairan baby oil untuk membersihkan daun telinga.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<ol>\r\n<li>Hindari membersihkan telinga hingga terlalu dalam. Cukup bersihkan sebatas daun telinga saja terutama bila menggunakan cotton bud, karena cotton bud di disain untuk membersihkan daun telinga saja, bukan untuk membersihkan bagian dalam. Jika terlalu dalam akan menyebabkan kotoran terdorong dan menumpuk.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<ol>\r\n<li>Bila telinga terasa gatal, gunakan kapas yang telah direndam air panas lalu untir dan gunakan untuk membersihkan bagian telinga yang gatal.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<ol>\r\n<li>Bila terdapat kotoran telinga yang mengeras pada bagian dalam, gunakan cotton bud yang memiliki ujung seperti kail, jangan gunakan pembersih yang berbentuk sama namun terbuat dari logam.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<ol>\r\n<li>Jika terlalu banyak dirangsang, kelenjar minyak pencegah kotoran yang masuk dari luar akanmengeluarkan minyak/cairan berlebih. Untuk itu, hindari membersihkan telinga terlalu sering.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<ol>\r\n<li>Jika kotoran terasa sangat menganggu pendengaran, segera periksakan ke dokter THT untuk mendapat perawatan.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>Cara lain untuk membersihkan telinga bisa dengan memasukan air ke telinga ketika mandi, lalu miringkan kepala untuk mengeluarkan airnya. Pastikan airnya hangat, karena jika terlalu panas atau dingin dapat menyebabkan vertigo.</li>\r\n</ol>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Perhatikan <em>kebersihan telinga</em> anda, namun jangan terlalu berlebihan karena tubuh anda pun memproduksi mekanisme untuk membersihkan telinga secara alami. (sumber <a href="http://www.detiksehat.com">www.detiksehat.com</a> )</div>\r\n<div style="overflow: hidden; color: #000000; background-color: #ffffff; text-align: left; text-decoration: none;"><br /><br /></div>\r\n<p>&nbsp;</p>', 'edKo4Zw7FLNv7P8V6JSMTB8fXLRgvB8P.jpg', 1, '2015-04-16 19:02:24', 2, '2015-04-21 16:20:03'),
(2, 'Manfaat tanaman di dalam rumah', 1, '<p class="p1" style="text-align: justify;"><span class="s1">Jika pot tanaman yang Anda miliki biasanya hanya diletakkan di luar rumah, kini Anda bisa mempertimbangkan untuk memindahkannya ke dalam ruangan. Mengapa?</span></p>\r\n<p class="p2" style="text-align: justify;">Hasil beberapa studi yang berbeda mengungkapkan bahwa kebiasaan ini rupanya turut memengaruhi kesehatan Anda. Berikut rangkumannya seperti ditulis <em>detikHealth</em>:</p>\r\n<p class="p1" style="text-align: justify;"><strong><span class="s1">1. Menambah jumlah oksigen</span></strong></p>\r\n<p class="p1" style="text-align: justify;"><span class="s1">Kita bernapas dengan menghirup oksigen dan melepaskan karbon dioksida, sementara tanaman menyerap karbon dioksida dan melepaskan oksigen. Nah, dengan menambahkan tanaman di dalam rumah maka dipastikan Anda telah meningkatkan kadar oksigen.</span></p>\r\n<p class="p1" style="text-align: justify;"><span class="s1">Polutan seperti formalin, aseton dan benzene yang terdapat di benda-benda seperti karpet, asap rokok, dan cat diyakini dapat diminimalkan efeknya dengan tanaman. Beberapa jenis tanaman juga disebutkan dapat mengurangi senyawa organik volatil (VOC) di udara dalam waktu 24 jam hingga 87 persen. Misalnya palem bambu dan tanaman lady palm.</span></p>\r\n<p class="p1" style="text-align: justify;"><strong><span class="s1">2. Mengurangi alergi dan asma</span></strong></p>\r\n<p class="p1" style="text-align: justify;"><span class="s1">Sebuah studi yang dilakukan oleh University of Agriculture di Norwegia menemukan bahwa tanaman hias dapat membantu meringankan gejala alergi. Alasannya, tanaman meningkatkan kadar kelembaban dan mengurangi debu di dalam rumah. Studi ini juga menunjukkan bahwa tanaman di dalam ruangan dapat mengurangi risiko batuk, sakit tenggorokan, dan gejala asma hingga lebih dari 30 persen.</span></p>\r\n<p class="p1" style="text-align: justify;"><strong><span class="s1">3. Membantu proses penyembuhan</span></strong></p>\r\n<p class="p1" style="text-align: justify;"><span class="s1">Penelitian menunjukkan bahwa memiliki tanaman di dalam ruangan dapat mempercepat tingkat pemulihan seseorang setelah sakit, termasuk pada pasien pasca operasi. Mereka yang sedang berada dalam proses penyembuhan dan memiliki tanaman di dalam kamarnya disimpulkan memiliki detak jantung dan tekanan darah yang lebih stabil, serta lebih jarang stres dan cemas berlebihan.</span></p>\r\n<p class="p1" style="text-align: justify;"><strong><span class="s1">4. Meningkatkan fungsi kognitif</span></strong></p>\r\n<p class="p1" style="text-align: justify;"><span class="s1">Tanaman meningkatkan kemampuan mental, konsentrasi dan memori, dan membantu mengatasi stres. Sebuah penelitian menunjukkan bahwa anak akan lebih mudah fokus jika di dalam rumahnya ada beragam tanaman dalam pot.</span></p>\r\n<p class="p1" style="text-align: justify;"><span class="s1">Penelitian lain yang dilakukan di Texas A&amp;M University juga menunjukkan bahwa mereka yang memiliki tanaman di rumahnya memiliki kreativitas lebih tinggi 13 persen, jika dibandingkan dengan mereka yang tidak memilikinya.</span></p>\r\n<p class="p1" style="text-align: justify;"><strong><span class="s1">5. Menyehatkan sisi mental</span></strong></p>\r\n<p class="p1" style="text-align: justify;"><span class="s1">Efek kesehatan mental yang bisa didapat dengan memiliki tanaman di dalam rumah di antaranya mengurangi stres dan kecemasan, serta suasana hati yang lebih baik. Sebuah studi juga menemukan bahwa mereka yang memiliki tanaman di dalam rumahnya mengalami penurunan tekanan darah sistolik yang lebih stabil saat uji stres, dibandingkan dengan mereka yang tidak memilikinya.(sumber : wartasehat.com )</span></p>', 'P7xglUpEK6l1d1OcWZMx-yGL2TrQPS4l.jpg', 1, '2015-04-18 18:53:09', 2, '2015-04-21 16:34:43'),
(3, 'Waspadai Hemofilia, Saat Bayi Belajar Merangkak', 2, '<p>Mungkin sebagian masyarakat di tanah air masih awam dengan kata hemofilia, khususnya para orang tua yang memiliki bayi. Sebenarnya hemofolia adalah salah satu penyakit yang diturunkan oleh sang ibu kepada buah hatinya saat si buah hati dilahirkan. Seperti nama hemophilia yang berasal dari bahasa Yunani, terdiri dari 2 kata yaitu haima dan philia. Haima berarti darah sedangkan philia berarti cinta atau kasih sayang.</p>\r\n<p>Bisa dikatakan hemophilia sulit untuk dicegah, gejalanya bisa dibedakan menjadi ringan, sedang dan berat. Untuk mewaspadai hemofilia terhadap bayi, bisa dengan memperhatikan kegiatan si bayi khususnya saat mereka sedang belajar meragkak. Perhatikan bila tubuh anak membiru saat belajar merangkak.</p>\r\n<p>Saat jumpa pers dengan para wartawan, Divisi Hematology Onkologi Departemen Ilmu Kesehatan Anak FK-UI RSCM Prof. Dr. dr Djajadiman Gatot Amelia C, Sp. A (K) menyampaikan, gejala yang paling mudah diperhatikan untuk mengetahui anak hemofilia atau tidak sebenarnya cukup mudah.</p>\r\n<p>"Ketika lutut beradu di lantai dan tubuhnya menjadi biru-biru, waspadai hemofilia berat. Tapi kalau hanya jatuh dan bengkak, kemungkinan sedang. Dan kalau dicubit atau dipukul baru biru, biasanya ringan. Tapi dalam hal ini tidak bisa yang ringan jadi berat atau sebaliknya karena sudah bawaan lahirnya begitu," kata Djajadiman yang juga Ketua Himpunan Masyarakat Hemofilia Indonesia (HMHI), beberapa waktu lalu (16/4/).</p>\r\n<p>Lebih jauh Djajiman menjelaskan, saat ini di dunia sedang dilakukan ujicoba rekayasa genetika untuk mengetahui risiko hemofilia sejak kehamilan. Namun sayangnya hingga saat ini penelitian yang dilakukan belum membuahkan hasil yang signifikan untuk wilayah Amerika dan Eropa.</p>\r\n<p>Penyakit hemofilia tidak mengenal ras dan dapat ditemukan di seluruh dunia termasuk di Indonesia. Pada tahun 2011, jumlah pasien hemofilia di Indonesia mencapai 1.388 orang. Namun, HMHI memperkirakan jumlah pasien hemofilia mencapai lebih dari 20.000 orang. Perbedaan angka tersebut dikarenakan keterbatasan informasi dan rendahnya pengetahuan masyarakat mengenai penyakit ini. Akibatnya penderita hemofilia banyak yang tidak terdeteksi.(sumber : wartasehat.com)</p>', 'lUp2hr0rtWCtPMmryzRwgfQDg6OCIfvz.jpg', 1, '2015-04-18 19:01:13', 2, '2015-04-21 16:34:54'),
(4, 'Cara menghitung  berat badan ideal pria dan wanita', 1, '<p>RUMUS Berat Badan IDEAL (Pria &amp; Wanita)</p>\r\n<p>Rumus menghitung berat ideal WANITA<br /> Berat badan ideal wanita (kg) = (Tinggi badan(cm) &ndash; 100) &ndash; (15% x Tinggi badan &ndash; 100).</p>\r\n<p>Sebagai perumpamaan jika Tinggi badan wanita tersebut adalah 170 cm, maka berat badan anda ideal adalah:<br /> (170 - 100) - (15% x Tinggi badan - 100) = 59.5 Kg</p>\r\n<p>Penggunaan persentasi 15% bisa diganti 10% dengan syarat apabila anda merasa bugar dan sehat. Sehat disini dalam artian tidak mudah lelah, dan senantiasa merasa fresh yang di imbangi rajin olah raga.</p>\r\n<p><br /> Rumus berat badan ideal pada PRIA<br /> Berat badan ideal pada pria = (Tinggi badan(cm) &ndash; 100) &ndash; (10% x Tinggi badan &ndash; 100)</p>\r\n<p>Perumpamaan jika tinggi pria adalah 180 cm, maka berat badan ideal anda adalah:<br /> (180 - 100) - (10% x Tinggi badan - 100) = 72 Kg</p>\r\n<p>(sumber : botanical gold fb group)</p>', 'jUwrASA5h6l1mTDF0KAcuolEttAQ7n8w.jpg', 1, '2015-04-18 19:10:35', 2, '2015-04-21 16:35:11'),
(5, 'Cara alamai untuk mengobati bisul', 1, '<div style="text-align: justify;">Siapa yang pernah merasakan bisul? Atau anda sekarang sedang merasakan bisul? penyakit ini memang amat sangat mengganggu bagi aktifitas, karena selain sakit yang amat sangat juga sering mengeluarkan darah kotor dan nanah.</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Penyakit <a href="http://www.detiksehat.com/">bisul</a> ini adalah penyakit infeksi kulit yang meradang, penyebabnya adalah &nbsp;karena kuman dan bakteri yang terdapat pada kulit, dan ditunjang oleh kebiasaan mengkonsumsi makanan yang mengandung protein secara berlebihan, darah kotor, pori-pori yang tertutup dan sebagainya.&nbsp;</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Sebenarnya bisul ini adalah suatu pertahanan tubuh jika ada benda asing yang masuk ke dalam tubuh, sehingga tubuh akan beraksi supaya menghindari benda asing tadi agar tidak menyebrang ke bagian tubuh lain. Untuk itu anda baiknya <strong>mengobati bisul</strong> tersebut. Silahkan anda baca beberapa cara untuk mengobati bisul berikut ini.</div>\r\n<div style="text-align: justify;"><br /> &nbsp;&nbsp;</div>\r\n<h3 style="text-align: justify;"><strong>Cara Mengobati Bisul</strong></h3>\r\n<div style="text-align: justify;"><strong>Parutan Mentimun</strong></div>\r\n<div style="text-align: justify;">Mentimun dapat <span style="text-decoration: underline;">mengobati bisul</span> caranya, siapkan satu buah mentimun dan biji pala, anda dapat memarut bahan tadi lalu hasil parutan tersebut dicampurkan lalu siapkan daun pisang untuk membungkus ramuan tadi dan siap dipanggang, pada saat ramuan tersebut masih hangat ramuan tersebut segeralah balurkan pada bagian bisul dan perban, ramuan tadi dapat diganti dua kali sehari.</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;"><strong>Bawang Putih</strong></div>\r\n<div style="text-align: justify;">Ternyata bawang putih bisa juga mengobati penyakit bisul, karena pada bawang putih terdapat antibiotik. Caranya siapkan beberapa bawang putih lalu tumbuk sampai halus dan hasil tumbukan tersebut dibalurkan pada bagian bisul.</div>\r\n<div style="overflow: hidden; color: #000000; background-color: #ffffff; text-align: left; text-decoration: none;">\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Daun sirih ini memang banyak sekali khasiatnya termasuk juga bisa mengobati penyakit bisul, caranya cukup mudah ambil 6 sampai 7 lembar daun sirih dan tentunya yang sudah dicuci bersih, tumbuk sampai halus dan dibalurkan pada bagian bisul dan gunakanlah perban supaya menempel.</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;"><strong>Daun Bayam</strong></div>\r\n<div style="text-align: justify;">Untuk mengobati bisul kita bisa menggunakan daun bayam, daun bayam dipercaya bisa mengobati bisul. Caranya ambil dua atau lebih daun bayam yang masih segar dan cuci sampai bersih, tumbuklah atau lumatlah daun bayam dengan ditambah sedikit garam lalu tempelkan pada bagian tubuh yang terkena bisul tapi jangan sampai menutupi <a href="http://www.detiksehat.com/2014/08/mengatasi-mata-gatal-dan-merah.html">mata</a> bisul. Daun bayam dan garam akan memberikan efek dingin pada bisul yang berasa panas dan berdenyut-denyut, lakukan ini beberapa kali sehari sampai bisul anda sembuh.</div>\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;">Nah itulah <em>Cara Mengobati Bisul Secara Alami</em>. Tentunya masih banyak sekali bahan alami yang dapat mengobati bisul, namun ramuan di atas sudah cukup ampuh untuk mengusir bisul, semoga tips-tips yang sudah kami berikan tadi bisa bermanfaat buat kalian semua.</div>\r\n<div style="overflow: hidden; color: #000000; background-color: #ffffff; text-align: left; text-decoration: none;">(sumber&nbsp;&nbsp; : www.detiksehat.com)</div>\r\n</div>', NULL, 1, '2015-04-19 16:45:41', NULL, NULL),
(6, 'tes', 4, '<p>tess</p>', '', 1, '2015-06-05 08:51:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_kategori`
--

CREATE TABLE IF NOT EXISTS `artikel_kategori` (
`id` int(3) NOT NULL,
  `nama` tinytext,
  `ket` text,
  `status` smallint(1) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel_kategori`
--

INSERT INTO `artikel_kategori` (`id`, `nama`, `ket`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Tips Kesehatan', 'kategori ini menampilkan informasi tentang tips-tips kesehatan.', 1, 1, '2015-04-16 17:54:14', NULL, NULL),
(2, 'Obat', 'Informasi obat-obatan ', 1, 1, '2015-04-18 17:42:53', NULL, NULL),
(3, 'Penyakit', 'Informasi mengenai penyakit-penyakit ', 1, 1, '2015-04-18 19:04:41', NULL, NULL),
(4, 'Tees', 'a', 0, 1, '2015-05-10 11:14:32', 3, '2015-06-18 15:13:34'),
(7, 'aa', 'aa', 0, 1, '2015-06-05 09:35:26', 3, '2015-06-18 15:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_komentar`
--

CREATE TABLE IF NOT EXISTS `artikel_komentar` (
  `artikel_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `komentar` text,
  `komentar_oleh` int(11) DEFAULT NULL,
  `komentar_waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel_komentar`
--

INSERT INTO `artikel_komentar` (`artikel_id`, `user_id`, `komentar`, `komentar_oleh`, `komentar_waktu`) VALUES
(5, 1, 'ah moso sih......', 1, '2015-04-19 18:39:22'),
(5, 1, 'iyo...... ra percoyo aku', 1, '2015-04-19 18:57:40'),
(5, 1, 'Daun Bayam\r\nUntuk mengobati bisul kita bisa menggunakan daun bayam, daun bayam dipercaya bisa mengobati bisul. Caranya ambil dua atau lebih daun bayam yang masih segar dan cuci sampai bersih, tumbuklah atau lumatlah daun bayam dengan ditambah sedikit garam lalu tempelkan pada bagian tubuh yang terkena bisul tapi jangan sampai menutupi mata bisul. Daun bayam dan garam akan memberikan efek dingin pada bisul yang berasa panas dan berdenyut-denyut, lakukan ini beberapa kali sehari sampai bisul anda sembuh.\r\n ', 1, '2015-04-19 19:25:09'),
(4, 1, 'wah berarti boobot ku kurang iki..........\r\nkudu madang sing akeh :)', 1, '2015-04-19 19:33:37'),
(3, 2, 'hoak...', 2, '2015-04-21 15:54:48'),
(5, 2, 'hahahaha \r\ngelar tiker gan....', 2, '2015-04-21 16:39:15'),
(3, 2, 'yuhuuu wlwlwlw', 2, '2015-04-21 16:51:58'),
(5, 2, 'haaa', 2, '2015-05-26 00:48:40'),
(4, 1, 'tes', 1, '2015-06-01 23:07:38'),
(5, 1, 'a', 1, '2015-06-01 23:41:13'),
(5, 1, 'a', 1, '2015-06-01 23:41:13'),
(4, 1, 'a', 1, '2015-06-01 23:41:24'),
(5, 1, 'a', 1, '2015-06-01 23:42:07'),
(5, 1, 'ass', 1, '2015-06-01 23:42:39'),
(2, 1, 'wow bener po ra vroh', 1, '2015-06-01 23:46:11'),
(2, 1, 'aaa', 1, '2015-06-01 23:47:16'),
(2, 1, 'aaa', 1, '2015-06-01 23:47:16'),
(2, 1, 's', 1, '2015-06-01 23:49:20'),
(2, 1, 's', 1, '2015-06-01 23:49:20'),
(2, 1, 'sssssssssss', 1, '2015-06-01 23:56:44'),
(1, 1, 'a', 1, '2015-06-01 23:57:00'),
(1, 1, 'a', 1, '2015-06-01 23:57:00'),
(1, 1, 'okeh', 1, '2015-06-02 00:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Administrator', '1', 1428931496),
('Administrator', '18', 1434277568),
('gii', '1', 1434272039),
('Home', '2', 1434265713),
('Home', '3', 1434265737),
('Pakar', '2', 1434265693),
('Pakar', '20', 1434278620),
('Publisher', '3', 1434258283),
('RBAC', '1', 1434264258);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1434179583, 1434179583),
('/admin/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1434179579, 1434179579),
('/admin/assignment/role-search', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/default/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/default/index', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/menu/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/menu/create', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/menu/index', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/menu/update', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/menu/view', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/create', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/index', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/role-search', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/update', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/permission/view', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/assign', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/create', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/delete', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/index', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/role-search', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/update', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/role/view', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/route/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/route/assign', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/route/create', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/route/index', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/route/route-search', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/rule/*', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/rule/create', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/rule/index', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/rule/update', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/admin/rule/view', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/agama/*', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/agama/add-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/agama/delete', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/agama/delete-all', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/agama/detail-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/agama/index', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/agama/update-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel-kategori/*', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel-kategori/add-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel-kategori/delete', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel-kategori/delete-all', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel-kategori/detail-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel-kategori/index', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel-kategori/update-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel/*', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel/add-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel/delete', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel/delete-all', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel/detail-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel/index', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/artikel/update-data', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/debug/*', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/debug/default/*', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/debug/default/index', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/debug/default/view', 2, NULL, NULL, NULL, 1434179580, 1434179580),
('/diagnosa/*', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/diagnosa/add-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/diagnosa/delete', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/diagnosa/delete-all', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/diagnosa/detail-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/diagnosa/diagnosa-tht', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/diagnosa/index', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/diagnosa/info', 2, NULL, NULL, NULL, 1434257864, 1434257864),
('/diagnosa/update-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gejala-penyakit/*', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gejala-penyakit/add-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gejala-penyakit/delete', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gejala-penyakit/delete-all', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gejala-penyakit/detail-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gejala-penyakit/index', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gejala-penyakit/update-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/gii/*', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/gii/default/*', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/gii/default/action', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/gii/default/diff', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/gii/default/index', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/gii/default/preview', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/gii/default/view', 2, NULL, NULL, NULL, 1434179581, 1434179581),
('/info/*', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/info/add-data', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/info/delete', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/info/delete-all', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/info/detail-data', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/info/index', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/info/update-data', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/jenis-penyakit/*', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/jenis-penyakit/add-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/jenis-penyakit/delete', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/jenis-penyakit/delete-all', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/jenis-penyakit/detail-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/jenis-penyakit/index', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/jenis-penyakit/update-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/penyakit/*', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/penyakit/add-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/penyakit/delete', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/penyakit/delete-all', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/penyakit/detail-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/penyakit/index', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/penyakit/update-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/*', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/add-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/create', 2, NULL, NULL, NULL, 1434266172, 1434266172),
('/profil-user/delete', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/delete-all', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/detail-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/index', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/me', 2, NULL, NULL, NULL, 1434179751, 1434179751),
('/profil-user/password', 2, NULL, NULL, NULL, 1434823752, 1434823752),
('/profil-user/update-data', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/profil-user/update-profil', 2, NULL, NULL, NULL, 1434266172, 1434266172),
('/site/*', 2, NULL, NULL, NULL, 1434179583, 1434179583),
('/site/error', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/site/ex', 2, NULL, NULL, NULL, 1434179583, 1434179583),
('/site/index', 2, NULL, NULL, NULL, 1434179582, 1434179582),
('/site/login', 2, NULL, NULL, NULL, 1434179583, 1434179583),
('/site/logout', 2, NULL, NULL, NULL, 1434179583, 1434179583),
('/site/pdf', 2, NULL, NULL, NULL, 1434179583, 1434179583),
('/site/word', 2, NULL, NULL, NULL, 1434179583, 1434179583),
('/uncertanty-term/*', 2, NULL, NULL, NULL, 1434871415, 1434871415),
('/uncertanty-term/add-data', 2, NULL, NULL, NULL, 1434871415, 1434871415),
('/uncertanty-term/delete', 2, NULL, NULL, NULL, 1434871415, 1434871415),
('/uncertanty-term/delete-all', 2, NULL, NULL, NULL, 1434871415, 1434871415),
('/uncertanty-term/detail-data', 2, NULL, NULL, NULL, 1434871415, 1434871415),
('/uncertanty-term/index', 2, NULL, NULL, NULL, 1434871415, 1434871415),
('/uncertanty-term/update-data', 2, NULL, NULL, NULL, 1434871415, 1434871415),
('/user/*', 2, NULL, NULL, NULL, 1434180611, 1434180611),
('/user/add-data', 2, NULL, NULL, NULL, 1434180611, 1434180611),
('/user/delete', 2, NULL, NULL, NULL, 1434180611, 1434180611),
('/user/delete-all', 2, NULL, NULL, NULL, 1434180611, 1434180611),
('/user/detail-data', 2, NULL, NULL, NULL, 1434180611, 1434180611),
('/user/index', 2, NULL, NULL, NULL, 1434180611, 1434180611),
('/user/update-data', 2, NULL, NULL, NULL, 1434180611, 1434180611),
('Administrator', 1, 'Mengatur akses dan register user', 'isAdmin', NULL, 1419084603, 1434823810),
('Artikel', 2, 'CRUD Artikel yang dipublikasi', NULL, NULL, 1434178701, 1434179841),
('ArtikelInfoAplikasi', 2, 'CRUD artikel untuk informasi user', NULL, NULL, 1434178701, 1434179869),
('ArtikelKategori', 2, 'CRUD kategori artikel', NULL, NULL, 1434178701, 1434179906),
('Diagnosa', 2, 'Diagnosa penyakit', NULL, NULL, 1419086716, 1434257877),
('gantiPassword', 2, NULL, NULL, NULL, 1434823776, 1434823776),
('gii', 2, NULL, NULL, NULL, 1434272021, 1434272021),
('Home', 2, 'halaman depan', NULL, NULL, 1434256776, 1434256776),
('logout', 2, NULL, NULL, NULL, 1434265784, 1434265784),
('MasterDiagnosa', 2, 'CRUD Nilai MB.MD dari gejala-gejala penyakit', NULL, NULL, 1434178701, 1434878305),
('MasterPenyakit', 2, 'CRUD data master penyakit', NULL, NULL, 1434178701, 1434180010),
('MasterPenyakitGejala', 2, 'Crud master gejala-gejala penyakit', NULL, NULL, 1434178701, 1434180046),
('MasterPenyakitJenis', 2, 'CRUD data master jenis penyakit', NULL, NULL, 1434178701, 1434180079),
('Pakar', 1, 'CRUD data diagnosa', 'isPakar', NULL, 1434178454, 1435506386),
('Publisher', 1, 'CRUD Artikel', 'isPublisher', NULL, 1434178537, 1434823841),
('RBAC', 2, 'Mengatur data hak akses user', NULL, NULL, 1434178701, 1434264630),
('seeOwnProfile', 2, NULL, NULL, NULL, 1434265602, 1434266130),
('skalaKetidakpastian', 2, NULL, NULL, NULL, 1434871697, 1434871697),
('updateOwnProfile', 2, NULL, NULL, NULL, 1434266161, 1434266187),
('user', 2, 'user password dll', NULL, NULL, 1434180468, 1434180642),
('userAgama', 2, 'CRUD master data agama', NULL, NULL, 1434178701, 1434180369),
('UserProfil', 2, 'Crud Profil User', NULL, NULL, 1434178701, 1434180312),
('UserTerotentikasi', 1, 'Akses ke halaman depan/frontend', 'isUser', NULL, 1434178625, 1434823854);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('RBAC', '/admin/*'),
('RBAC', '/admin/assignment/*'),
('RBAC', '/admin/assignment/assign'),
('RBAC', '/admin/assignment/index'),
('RBAC', '/admin/assignment/role-search'),
('RBAC', '/admin/assignment/view'),
('RBAC', '/admin/default/*'),
('RBAC', '/admin/default/index'),
('RBAC', '/admin/menu/*'),
('RBAC', '/admin/menu/create'),
('RBAC', '/admin/menu/delete'),
('RBAC', '/admin/menu/index'),
('RBAC', '/admin/menu/update'),
('RBAC', '/admin/menu/view'),
('RBAC', '/admin/permission/*'),
('RBAC', '/admin/permission/assign'),
('RBAC', '/admin/permission/create'),
('RBAC', '/admin/permission/delete'),
('RBAC', '/admin/permission/index'),
('RBAC', '/admin/permission/role-search'),
('RBAC', '/admin/permission/update'),
('RBAC', '/admin/permission/view'),
('RBAC', '/admin/role/*'),
('RBAC', '/admin/role/assign'),
('RBAC', '/admin/role/create'),
('RBAC', '/admin/role/delete'),
('RBAC', '/admin/role/index'),
('RBAC', '/admin/role/role-search'),
('RBAC', '/admin/role/update'),
('RBAC', '/admin/role/view'),
('RBAC', '/admin/route/*'),
('RBAC', '/admin/route/assign'),
('RBAC', '/admin/route/create'),
('RBAC', '/admin/route/index'),
('RBAC', '/admin/route/route-search'),
('RBAC', '/admin/rule/*'),
('RBAC', '/admin/rule/create'),
('RBAC', '/admin/rule/delete'),
('RBAC', '/admin/rule/index'),
('RBAC', '/admin/rule/update'),
('RBAC', '/admin/rule/view'),
('userAgama', '/agama/*'),
('ArtikelKategori', '/artikel-kategori/*'),
('Artikel', '/artikel/*'),
('MasterDiagnosa', '/diagnosa/add-data'),
('MasterDiagnosa', '/diagnosa/delete'),
('MasterDiagnosa', '/diagnosa/delete-all'),
('MasterDiagnosa', '/diagnosa/detail-data'),
('Diagnosa', '/diagnosa/diagnosa-tht'),
('MasterDiagnosa', '/diagnosa/index'),
('Diagnosa', '/diagnosa/info'),
('MasterDiagnosa', '/diagnosa/update-data'),
('MasterPenyakitGejala', '/gejala-penyakit/*'),
('gii', '/gii/*'),
('ArtikelInfoAplikasi', '/info/*'),
('MasterPenyakitJenis', '/jenis-penyakit/*'),
('MasterPenyakit', '/penyakit/*'),
('UserProfil', '/profil-user/add-data'),
('UserProfil', '/profil-user/delete'),
('UserProfil', '/profil-user/delete-all'),
('UserProfil', '/profil-user/detail-data'),
('UserProfil', '/profil-user/index'),
('seeOwnProfile', '/profil-user/me'),
('gantiPassword', '/profil-user/password'),
('UserProfil', '/profil-user/update-data'),
('updateOwnProfile', '/profil-user/update-profil'),
('Home', '/site/index'),
('logout', '/site/logout'),
('skalaKetidakpastian', '/uncertanty-term/*'),
('skalaKetidakpastian', '/uncertanty-term/add-data'),
('skalaKetidakpastian', '/uncertanty-term/delete'),
('skalaKetidakpastian', '/uncertanty-term/delete-all'),
('skalaKetidakpastian', '/uncertanty-term/detail-data'),
('skalaKetidakpastian', '/uncertanty-term/index'),
('skalaKetidakpastian', '/uncertanty-term/update-data'),
('user', '/user/*'),
('Publisher', 'Artikel'),
('Publisher', 'ArtikelInfoAplikasi'),
('Publisher', 'ArtikelKategori'),
('Administrator', 'gantiPassword'),
('Pakar', 'gantiPassword'),
('Publisher', 'gantiPassword'),
('UserTerotentikasi', 'gantiPassword'),
('Administrator', 'Home'),
('Pakar', 'Home'),
('Publisher', 'Home'),
('UserTerotentikasi', 'Home'),
('Administrator', 'logout'),
('Pakar', 'logout'),
('Publisher', 'logout'),
('UserTerotentikasi', 'logout'),
('Pakar', 'MasterDiagnosa'),
('Pakar', 'MasterPenyakit'),
('Pakar', 'MasterPenyakitGejala'),
('Pakar', 'MasterPenyakitJenis'),
('Administrator', 'RBAC'),
('Administrator', 'seeOwnProfile'),
('Pakar', 'seeOwnProfile'),
('Publisher', 'seeOwnProfile'),
('UserTerotentikasi', 'seeOwnProfile'),
('Pakar', 'skalaKetidakpastian'),
('Administrator', 'updateOwnProfile'),
('Pakar', 'updateOwnProfile'),
('Publisher', 'updateOwnProfile'),
('UserTerotentikasi', 'updateOwnProfile'),
('Administrator', 'user'),
('Administrator', 'userAgama'),
('Administrator', 'UserProfil');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAdmin', 'O:30:"mdm\\admin\\components\\RouteRule":3:{s:4:"name";s:7:"isAdmin";s:9:"createdAt";i:1434257937;s:9:"updatedAt";i:1434263324;}', 1434257937, 1434263324),
('isPakar', 'O:30:"mdm\\admin\\components\\RouteRule":3:{s:4:"name";s:7:"isPakar";s:9:"createdAt";i:1434258087;s:9:"updatedAt";i:1434258087;}', 1434258087, 1434258087),
('isPublisher', 'O:30:"mdm\\admin\\components\\RouteRule":3:{s:4:"name";s:11:"isPublisher";s:9:"createdAt";i:1434258104;s:9:"updatedAt";i:1434258104;}', 1434258104, 1434258104),
('isUser', 'O:30:"mdm\\admin\\components\\RouteRule":3:{s:4:"name";s:6:"isUser";s:9:"createdAt";i:1434258123;s:9:"updatedAt";i:1434258123;}', 1434258123, 1434258123);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE IF NOT EXISTS `diagnosa` (
  `penyakit_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `mb` float DEFAULT NULL,
  `md` float DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`penyakit_id`, `gejala_id`, `mb`, `md`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 1, 0.95, 0.2, NULL, NULL, NULL, NULL),
(1, 2, 0.23, 0.67, NULL, NULL, NULL, NULL),
(1, 3, 0.48, 0.01, NULL, NULL, NULL, NULL),
(1, 4, 0.89, 0.68, NULL, NULL, NULL, NULL),
(1, 5, 0.82, 0.7, NULL, NULL, NULL, NULL),
(1, 6, 0.01, 0.5, NULL, NULL, NULL, NULL),
(1, 7, 0.92, 0.19, NULL, NULL, NULL, NULL),
(1, 8, 0.4, 0.54, NULL, NULL, NULL, NULL),
(1, 9, 0.91, 0.69, NULL, NULL, NULL, NULL),
(1, 10, 0.44, 0.72, NULL, NULL, NULL, NULL),
(2, 1, 0.15, 0.93, NULL, NULL, NULL, NULL),
(2, 2, 0.19, 0.33, NULL, NULL, NULL, NULL),
(2, 3, 0.85, 0.39, NULL, NULL, NULL, NULL),
(2, 4, 0.49, 0.62, NULL, NULL, NULL, NULL),
(2, 5, 0.45, 0.65, NULL, NULL, NULL, NULL),
(2, 6, 0.45, 0.41, NULL, NULL, NULL, NULL),
(2, 7, 0.29, 0.59, NULL, NULL, NULL, NULL),
(2, 8, 0.65, 0.51, NULL, NULL, NULL, NULL),
(2, 9, 0.55, 0.48, NULL, NULL, NULL, NULL),
(2, 10, 0.19, 0.96, NULL, NULL, NULL, NULL),
(3, 1, 0.04, 0.27, NULL, NULL, NULL, NULL),
(3, 2, 0.57, 0.62, NULL, NULL, NULL, NULL),
(3, 3, 0.96, 0.05, NULL, NULL, NULL, NULL),
(3, 4, 0.75, 0.08, NULL, NULL, NULL, NULL),
(3, 5, 0.8, 0.9, NULL, NULL, NULL, NULL),
(3, 6, 0.63, 0.47, NULL, NULL, NULL, NULL),
(3, 7, 0.6, 0.59, NULL, NULL, NULL, NULL),
(3, 8, 0.51, 0.95, NULL, NULL, NULL, NULL),
(3, 9, 0.42, 0.02, NULL, NULL, NULL, NULL),
(3, 10, 0.89, 0.44, NULL, NULL, NULL, NULL),
(4, 1, 0.26, 0.16, NULL, NULL, NULL, NULL),
(4, 2, 0.53, 0.03, NULL, NULL, NULL, NULL),
(4, 3, 0.21, 0.97, NULL, NULL, NULL, NULL),
(4, 4, 0.21, 0.95, NULL, NULL, NULL, NULL),
(4, 5, 0.66, 0.05, NULL, NULL, NULL, NULL),
(4, 6, 0.31, 0.59, NULL, NULL, NULL, NULL),
(4, 7, 0.95, 0.18, NULL, NULL, NULL, NULL),
(4, 8, 0.12, 0.78, NULL, NULL, NULL, NULL),
(4, 9, 0.91, 0.87, NULL, NULL, NULL, NULL),
(4, 10, 0.72, 0.31, NULL, NULL, NULL, NULL),
(5, 1, 0.72, 0.22, NULL, NULL, NULL, NULL),
(5, 2, 0.84, 0.32, NULL, NULL, NULL, NULL),
(5, 3, 0.95, 0.31, NULL, NULL, NULL, NULL),
(5, 4, 0.65, 0.25, NULL, NULL, NULL, NULL),
(5, 5, 0.34, 0.5, NULL, NULL, NULL, NULL),
(5, 6, 0.88, 0.18, NULL, NULL, NULL, NULL),
(5, 7, 0.15, 0.88, NULL, NULL, NULL, NULL),
(5, 8, 0.44, 0.45, NULL, NULL, NULL, NULL),
(5, 9, 0.39, 0.13, NULL, NULL, NULL, NULL),
(5, 10, 0.78, 0.85, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa_uncertanty_term`
--

CREATE TABLE IF NOT EXISTS `diagnosa_uncertanty_term` (
`id` int(11) NOT NULL,
  `uncertanty_term` varchar(35) DEFAULT NULL,
  `cf` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa_uncertanty_term`
--

INSERT INTO `diagnosa_uncertanty_term` (`id`, `uncertanty_term`, `cf`) VALUES
(1, 'Pasti Tidak', -1),
(2, 'Hampir Pasti Tidak', -0.8),
(3, 'Kemungkinan Besar Tidak', -0.6),
(4, 'Mungkin Tidak', -0.4),
(5, 'Tidak Tahu', -0.2),
(6, 'Tidak Tahu', 0.2),
(7, 'Mungkin', 0.4),
(8, 'Kemungkinan Besar', 0.6),
(9, 'Hampir pasti', 0.8),
(10, 'Pasti', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa_user`
--

CREATE TABLE IF NOT EXISTS `diagnosa_user` (
`id` int(11) NOT NULL,
  `diagnosa_ke` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `diagnosa_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa_user`
--

INSERT INTO `diagnosa_user` (`id`, `diagnosa_ke`, `user_id`, `diagnosa_date`) VALUES
(57, 1, 1, '2015-06-24 15:06:46'),
(58, 2, 1, '2015-06-24 15:23:27'),
(59, 3, 1, '2015-06-24 15:41:40'),
(60, 4, 1, '2015-06-24 16:02:59'),
(61, 5, 1, '2015-06-24 16:16:54'),
(62, 1, 2, '2015-06-25 21:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa_user_detil`
--

CREATE TABLE IF NOT EXISTS `diagnosa_user_detil` (
`id` int(11) NOT NULL,
  `diagnosa_user_id` int(11) DEFAULT NULL,
  `gejala_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa_user_detil`
--

INSERT INTO `diagnosa_user_detil` (`id`, `diagnosa_user_id`, `gejala_id`) VALUES
(4, 57, 1),
(5, 57, 2),
(6, 57, 3),
(7, 58, 8),
(8, 58, 9),
(9, 58, 10),
(10, 59, 8),
(11, 59, 9),
(12, 59, 10),
(13, 60, 1),
(14, 60, 5),
(15, 60, 10),
(16, 61, 1),
(17, 62, 1),
(18, 62, 2);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
`id` int(4) NOT NULL,
  `judul` varchar(60) DEFAULT NULL,
  `isi` text,
  `created_by` int(6) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(6) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Pengertian CF', '<p style="text-align: justify;">Sistem pakar harus mampu bekerja dalam ketidakpastian. Sejumlah teori telah ditemukan untuk menyelesaikan ketidakpastian, termasuk diantaranya probabilitas klasik (<em>classical probability</em>), probabilitas Bayes (<em>Bayesian probability</em>), teori fuzzy Zadeh (<em>Zadeh&rsquo;s fuzzy theory</em>) dan faktor kepastian (<em>certainty factor</em>). Definisi menurut David McAllister, <em>certainty</em> <em>factor</em> adalah suatu metode untuk membuktikan apakah suatu fakta itu pasti ataukah tidak pasti yang berbentuk <em>metric </em>yang biasanya digunakan dalam sistem pakar. Metode ini sangat cocok untuk sistem pakar yang mendiagnosis sesuatu yang belum pasti.</p>\r\n<p style="text-align: justify;">Faktor kepastian (certainty factor) diperkenalkan oleh Shortliffe Buchanan dalam pembuatan MYCIN. Certainty Factor (CF) merupakan nilai parameter klinis yang diberikan MYCIN untuk menunjukkan besarnya kepercayaan. Certainty Factor&nbsp; didefinisikan sebagai persamaan berikut :<br />CF (H, E) = MB (H, E) &ndash; MD (H, E)<br />CF (H, E) : Certainty Factor dari hipotesis H yang dipengaruhi oleh gejala (evidence) E. Besarnya CF berkisar antara -1 sampai 1. Nilai -1 menunjukkan ketidakpercayaan mutlak sedangkan nilai 1 menunjukkan kepercayaan mutlak.<br />MB (H, E)&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; ukuran kenaikan kepercayaan (measure of increased belief) terhadap hipotesis H yang dipengaruhi oleh gejala E.<br />MD (H, E)&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; ukuran kenaikan ketidakpercayaan (measure of increased disbelief) terhadap hipotesis H yang dipengaruhi oleh gejala E.<br /><br />Bentuk dasar rumus certainty factor, adalah sebuah aturan JIKA E MAKA H seperti ditunjukkan oleh persamaan 2 berikut:<br /><br />CF (H, e) = CF (E, e) * CF (H, E)<br /><br />Dimana<br />CF (H, e)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; certainty factor hipotesis yang dipengaruhi oleh evidence e.<br />CF (E, e)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; certainty factor evidence E yang dipengaruhi oleh evidence e<br />CF (H, E)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; certainty factor hipotesis dengan asumsi evidence diketahui dengan pasti, yaitu ketika CF(E, e) = 1<br /><br />Jika semua evidence pada antecedent diketahui dengan pasti maka persamaannya akan menjadi:<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CF (E, e) = CF (H, E)<br /><br />Dalam aplikasinya, CF(H,E) merupakan nilai kepastian yang diberikan oleh pakar terhadap suatu aturan, sedangkan CF(E,e) merupakan nilai kerpercayaan yang diberikan oleh pengguna terhadap gejala yang dialaminya.<br />Sebagai contoh, berikut ini adalah sebuah aturan dengan CF yang diberikan oleh seorang pakar:<br /><br />JIKA batuk<br />DAN demam<br />DAN sakit kepala<br />DAN bersin-bersin<br />MAKA influensa, CF: 0,7<br />Metode certainty factor ini hanya bisa mengolah 2 bobot dalam sekali perhitungan. Untuk bobot yang lebih dari 2 banyaknya, untuk melakukan perhitungan tidak terjadi masalah apabila bobot yang dihitung teracak, artinya tidak ada aturan untuk mengkombinasikan bobotnya, karena untuk kombinasi seperti apapun hasilnya akan tetap sama. Misalnya, untuk mengetahui apakah seorang pasien tersebut menderita penyakit jantung atau tidak, dilihat dari hasil perhitungan bobot setelah semua keluhan-keluhan diinputkan dan semua bobot dihitung dengan menggunakan metode certainty factor. Pasien yang divonis mengidap penyakit jantung adalah pasien yang memiliki bobot mendekati +1 dengan keluhan-keluhan yang dimiliki mengarah kepada penyakit jantung. Sedangkan pasien yang mempunyai bobot mendekati -1 adalah pasien yang dianggap tidak mengidap penyakit jantung, serta pasien yang memiliki bobot sama dengan 0 diagnosisnya tidak diketahui atau unknown atau bisa disebut dengan netral.<br /><br />Kelebihan metode Certainty Factor adalah:<br />1.&nbsp;&nbsp;&nbsp; Metode ini cocok dipakai dalam sistem pakar untuk mengukur sesuatu apakah pasti atau tidak pasti dalam mendiagnosis penyakit sebagai salah satu contohnya.<br />2.&nbsp;&nbsp;&nbsp; Perhitungan dengan menggunakan metode ini dalam sekali hitung hanya dapat mengolah 2 data saja sehingga keakuratan data dapat terjaga.<br /><br />Kekurangan metode Certainty Factor adalah:<br />1. Ide umum dari pemodelan ketidakpastian manusia dengan menggunakan numerik metode certainty factor biasanya diperdebatkan. Sebagian orang akan membantah pendapat bahwa formula untuk metode certainty factor diatas memiliki sedikit kebenaran.<br />2.&nbsp; Metode ini hanya dapat mengolah ketidakpastian/kepastian hanya 2 data saja. Perlu dilakukan beberapa kali pengolahan data untuk data yang lebih dari 2 buah.</p>', 1, '2015-06-09 23:27:38', 1, '2015-06-10 00:31:39'),
(2, 'Pengertian Sistem Pakar', '<p style="text-align: justify;">Sistem pakar merupakan salah satu bidang teknik kecerdasan buatan yang cukup diminati karena penerapannya diberbagai bidang baik bidang ilmu pengetahuan maupun bisnis yang terbukti sangat membantu dalam mengambil keputusan dan sangat luas penerapanya. Sistem pakar adalah suatu sistem komputer yang dirancang agar dapat melakukan penalaran seperti layaknya seorang pakar pada suatu bidang keahlian tertentu</p>\r\n<p style="text-align: justify;"><strong>Ciri-ciri sistem pakar</strong></p>\r\n<p style="text-align: justify;">Ciri-ciri sistem pakar adalah sebagai berikut:</p>\r\n<ol style="text-align: justify;">\r\n<li>Terbatas pada domain keahlian tertentu.</li>\r\n<li>Dapat memberikan penalaran untuk data data yang tidak pasti.</li>\r\n<li>Dapat mengemukan rangkaian alasan-alasan yang diberikannya dengan cara yang dapat dipahami.</li>\r\n<li>Berdasarkan pada kaidah/rRule tertentu.</li>\r\n<li>Dirancang untuk dapat dikembangkan secara bertahap.</li>\r\n<li>Keluaranya bersifat anjuran.</li>\r\n</ol>\r\n<p style="text-align: justify;"><strong>Komponen sistem pakar terbagi menjadi empat bagian, yaitu:</strong></p>\r\n<ol style="text-align: justify;">\r\n<li><strong>Knowledge Base (Basis Pengetahuan)</strong>Knowledge Base merupakan inti dari program sistem pakar karena basis pengetahuan itu merupakan presentasi pengetahuan atau knowledge representation basis pengetahuan adalah sebuah basis data pengetahuan ini terdiri dari kumpulan objek beserta aturan dan atributnya (sifat atau cirinya).Contoh : If hewan merupakan sayap dan bertelur then hewan jenis burung.</li>\r\n</ol>\r\n<ol style="text-align: justify;">\r\n<li><strong>Working Memory (Basis Data atau Memori Kerja)</strong>Working memory adalah bagian yang mengandung semua fakta-fakta baik fakta awal pada saat sistem beroperasi maupun fakta-fakta pada saat pengambilan klesimpulan sedang dilaksanakan selama sistem pakar beroperasi basis data berada di adalam memori kerja.</li>\r\n</ol>\r\n<ol style="text-align: justify;">\r\n<li><strong>Inference Engine (Mesin Inferensia)</strong></li>\r\n</ol>\r\n<p style="text-align: justify;">Inference Engine adalah bagian yang menyediakan mekanisme fungsi berfikir dan pola-pola penalaran sistem yang digunakan oleh seorang pakar.</p>\r\n<ul style="text-align: justify;">\r\n<li>Mekanisme ini akan menganalisa masalah tertentu dan selanjutnya akan mencari jawaban atau kesimpulan yang terbaik.</li>\r\n</ul>\r\n<ul style="text-align: justify;">\r\n<li>Mesin ini akan dimulai pelacakannya dengan mencocokan kaidah-kaidah dalam basis pengetahuan dengan fakta-fakta yang ada dalam basis data.</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>Dua teknik Inference, yaitu:</strong></p>\r\n<ul style="text-align: justify;">\r\n<li><strong><em>Backward Chaining </em></strong><strong>(Pelacakan kebelakang)</strong></li>\r\n</ul>\r\n<p style="text-align: justify;">Melalui penalaranya dari sekumpulan hipotesis menuju fakta-fakta yang mendukung tersebut,jadi proses pelacakan berjalan mundur dimulai dengan menentukan kesimpulan yang akan dicari baru kemudian fakta-fakta pembangun kesimpulan atau <em>a Goal Driven</em>.</p>\r\n<ul style="text-align: justify;">\r\n<li><strong><em>Forward Chaining </em></strong><strong>(Pelacakan ke depan)</strong></li>\r\n</ul>\r\n<p style="text-align: justify;"><em>Forward Chaining </em>merupakan kebalikan dari <em>Backward Chaining </em>yaitu mulai dari kumpulan data menuju kesimpulan. Suatu kasus kesimpulannya dibangun berdasarkan fakta-fakta yang telah diketahui atau data driven.</p>\r\n<p style="text-align: justify;"><strong>Sistem Kerja Pakar</strong></p>\r\n<ol style="text-align: justify;">\r\n<li><strong><em>Modul Penerimaan Pengetahuan</em></strong></li>\r\n</ol>\r\n<p style="text-align: justify;">Untuk mendapatkan pengetahuan sistem pakar dilakukan proses penerimaan pengetahuan. Proses ini dilakukakan melalui interaksi dengan pakar penerimaan pengetahuan dilakukan dengan bantuan <strong>Knowledge Engineer (KE)</strong>, yaitu seorang spesialis sistem yang menterjemahkan pengetahuan yang dimiliki seorang pakar menjadi pengetahuan yang akan tersimpan dalam basis pengetahuan pada sebuah sistem pakar</p>\r\n<ol style="text-align: justify;">\r\n<li><strong><em>Modul Konsultasi</em></strong></li>\r\n</ol>\r\n<p style="text-align: justify;">Sistem pakar pada modul konsultasi apabila sistem memberikan konsultasi berupa jawaban atas permasalahan yang diajukan oleh pemakai pada modul ini pemakai yang awam berinteraksi dengan sistem dengan memasukkan data dan jawaban-jawaban pertanyaan sistem.Data yang dimasukkan oleh pemakai ditempatkan dalam database sistem dan kemudian diakses oleh pembangkit inference untuk mendapatkan kesimpulan.</p>\r\n<ol style="text-align: justify;">\r\n<li><strong><em>Modul Penjelasan</em></strong></li>\r\n</ol>\r\n<p style="text-align: justify;">Modul Penjelasan adalah menjelaskan proses pengambilan keputusan yang dilakukan oleh sistem.</p>', 1, '2015-06-09 23:35:12', 1, '2015-06-10 00:32:04'),
(3, 'Penyakit THT', '<p style="text-align: justify;">THT ( Otolaringologi/Otoringolaringologi ) adalah cabang ilmu kedokteran yang khusus meneliti diagnosis dan pengobatan penyakit telinga,hidung,tenggorok serta kepala dan leher.Otolaringologi diambil dari 3 kata yaitu Otologi,Rinologi,dan Laringofaringologi.Di Indonesia, cabang kedokteran ini populer dengan nama Ilmu Telinga Hidung Tenggorokan Bedah Kepala Leher atau THT-KL.<br />Otolaringologi terdiri dari beberapa cabang yaitu:<br />1.&nbsp;&nbsp; &nbsp;Otologi : ilmu yang mempelajari tentang telinga dan kelainan serta operasi mikro telinga.<br />2.&nbsp;&nbsp; &nbsp;Rinologi: ilmu tentang hidung dan sinus paranasal sehingga saat ini sering juga disebut rinologi dan sinusologi<br />3.&nbsp;&nbsp; &nbsp;Laringofaringologi: ilmu tentang tenggorok<br />4.&nbsp;&nbsp; &nbsp;Onkologi Bedah Kepala Leher: Subbagian yang menangani tumor di THT Kepala dan leher<br />5.&nbsp;&nbsp; &nbsp;Neurotologi<br />6.&nbsp;&nbsp; &nbsp;Bronkoesofagologi<br />7.&nbsp;&nbsp; &nbsp;Plastik Rekonstruksi<br />8.&nbsp;&nbsp; &nbsp;Alergi Imunologi<br />9.&nbsp;&nbsp; &nbsp;THT-Komunitas<br />THT (Oto Rhino laryngologi) adalah sebuah cabang ilmu kedokteran yang dikenal secara umum menangani permasalahan tentang telinga, hidung, dan tenggorokan mesipun ada cabang kedokteran yang lebih luas lagi dari THT yaitu Otolaringologi.<br />Penyakit yang ditangani di bagian Otoringolaringologi<br />Bagian Telinga<br />&bull;&nbsp;&nbsp; &nbsp;Gangguan pendengaran (tuli)<br />&bull;&nbsp;&nbsp; &nbsp;Otitis media (Congkek)<br />&bull;&nbsp;&nbsp; &nbsp;Othematoma (terjadi gangguan pada tulang rawan telinga yang dibarengi dengan pendarahan internal serta pertumbuhan jaringan telinga yang berlebihan (sehingga telinga tampak berumbai laksana bunga kol)<br />&bull;&nbsp;&nbsp; &nbsp;Perikondritis (infeksi pada tulang rawan (kartilago) telinga luar)<br />&bull;&nbsp;&nbsp; &nbsp;Penyumbatan telinga<br />&bull;&nbsp;&nbsp; &nbsp;Otitis eksterna<br />&bull;&nbsp;&nbsp; &nbsp;Vertigo<br />Bagian hidung<br />&bull;&nbsp;&nbsp; &nbsp;sinusitis<br />&bull;&nbsp;&nbsp; &nbsp;Kemasukan benda asing<br />&bull;&nbsp;&nbsp; &nbsp;Polip hidung<br />&bull;&nbsp;&nbsp; &nbsp;mimisan<br />&bull;&nbsp;&nbsp; &nbsp;Sinus pranais<br />&bull;&nbsp;&nbsp; &nbsp;Rinitis atrofi<br />&bull;&nbsp;&nbsp; &nbsp;Patogenesis<br />&bull;&nbsp;&nbsp; &nbsp;Tumor nasofaring<br />&bull;&nbsp;&nbsp; &nbsp;Chronic Rhinitis<br />&bull;&nbsp;&nbsp; &nbsp;Rhinitis Alerca<br />Bagian tenggorokan<br />&bull;&nbsp;&nbsp; &nbsp;Paresis pita suara<br />&bull;&nbsp;&nbsp; &nbsp;Faringitis<br />&bull;&nbsp;&nbsp; &nbsp;Disfagia (Gangguan deglutasi/menean)<br />&bull;&nbsp;&nbsp; &nbsp;Tonsilitis (Radang amandel)<br />&bull;&nbsp;&nbsp; &nbsp;Kanker tenggorokan<br />&bull;&nbsp;&nbsp; &nbsp;Anedoid<br />&bull;&nbsp;&nbsp; &nbsp;Hoarseness (Suara serak)<br />Subspesialisasi dalam otolaringologi<br />a. Otolaringologi umum yang menangani masalah-masalah:<br />&bull;&nbsp;&nbsp; &nbsp;Laringitis,yaitu peradangan tenggorokan dan pita suara.<br />&bull;&nbsp;&nbsp; &nbsp;Parotitis,yaitu peradangan kelenjar parotid<br />&bull;&nbsp;&nbsp; &nbsp;Pharingitis,yaitu peradangan pangka; tenggorokan<br />&bull;&nbsp;&nbsp; &nbsp;Tonsilitis,yaitu peradangan tonsil<br />b. Kepala dan Leher menangani maslah-masalah:<br />&bull;&nbsp;&nbsp; &nbsp;Kangker kepala dan leher<br />&bull;&nbsp;&nbsp; &nbsp;Hiperparatiroid<br />&bull;&nbsp;&nbsp; &nbsp;Kangker tiroid</p>', 1, '2015-06-09 23:35:13', 1, '2015-06-10 00:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(1, 'Home', NULL, '/site/index', 0, NULL),
(2, 'Diagnosa', NULL, '/diagnosa/diagnosa-tht', 1, NULL),
(3, 'Data Diagnosa', NULL, NULL, 2, NULL),
(4, 'Artikel', NULL, NULL, 3, NULL),
(5, 'User Informasi', NULL, NULL, 4, NULL),
(6, 'Master Diagnosa', 3, '/diagnosa/index', 0, NULL),
(7, 'Master Penyakit', 3, '/penyakit/index', 1, NULL),
(8, 'Master Gejala Penyakit', 3, '/gejala-penyakit/index', 2, NULL),
(9, 'Master Jenis Penyakit', 3, '/jenis-penyakit/index', 3, NULL),
(10, 'Artikel', 4, '/artikel/index', 0, NULL),
(11, 'Kategori Artikel', 4, '/artikel-kategori/index', 1, NULL),
(12, 'Info App', 4, '/info/index', 2, NULL),
(13, 'Master User', 5, '/user/index', 0, NULL),
(14, 'Master Profil User', 5, '/profil-user/index', 1, NULL),
(15, 'Master Agama', 5, '/agama/index', 2, NULL),
(16, 'RBAC Akses Management', NULL, '', 5, NULL),
(17, 'Assignment', 16, '/admin/assignment', 0, NULL),
(18, 'Permission', 16, '/admin/permission', 1, NULL),
(19, 'Role', 16, '/admin/role', 2, NULL),
(20, 'Route', 16, '/admin/route', 4, NULL),
(21, 'Menu', 16, '/admin/menu', 5, NULL),
(22, 'Rule', 16, '/admin/rule', 3, NULL),
(23, 'Skala Ketidakpastian', NULL, '/uncertanty-term/index', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1421249576),
('m130524_201442_init', 1421249578),
('m140506_102106_rbac_init', 1428415017);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
`id` int(11) NOT NULL,
  `nama_penyakit` varchar(75) DEFAULT NULL,
  `ket` text,
  `penyakit_jenis_id` int(2) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama_penyakit`, `ket`, `penyakit_jenis_id`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Contact Ulcers', '<div id="content-wrapper">\r\n<article id="post-wrapper">\r\n<div id="main" class="posting section">\r\n<div id="Blog1" class="widget Blog">\r\n<div class="date-outer">\r\n<div class="date-posts">\r\n<div class="post-outer">\r\n<div class="post hentry">\r\n<div id="post-body-760626428677893347" class="post-body entry-content">\r\n<div style="text-align: justify;">Contact ulcers adalah luka/koreng yang terasa nyeri pada selaput lendir yang membungkus kartilago (tulang rawan) tempat melekatnya pita suara.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</article>\r\n</div>\r\n<p><strong>PENYEBAB</strong><br />Contact ulcers biasanya disebakan oleh penyalahgunaan suara (berbicara sekuat tenaga).<br />Luka ini sering ditemukan pada penceramah (pendeta, mubalig), sales representative dan pengacara.<br /><br />Contact ulcers juga bisa disebabkanoleh:<br />- rokok<br />- batuk menahun<br />- aliran balik asam dari lambung (refluks asam lambung).<br /><br /><strong>GEJALA</strong><br />Gejalanya berupa nyeri ringan ketika penderita berbicara atau menelan dan suara serak.<br /><br /><strong>DIAGNOSA</strong><br />Diagnosis ditegakkan berdasarkan gejalanya.<br />Untuk memastikan bahwa bukan merupakan keganasan, dilakukan pengambilan jaringan untuk diperiksa secara mikroskopis.<br /><br /><strong>PENGOBATAN</strong><br />Penderita diharuskan istirahat berbicara atau berbicara seperlunya, minimal selama 6 minggu.<br />Untuk menghindari kekambuhan, penderita harus mengetahui batas-batas suaranya dan belajar menyesuaikan suaranya. Bisa dilakukan terapi suara.<br />Jika hasil rontgen menunjukkan adanya refluks asam lambung, diberikan antasid atau obat anti-ulkus (misalnya penghambat histamin) dan penderita tidur dengan posisi kepala lebih tinggi.</p>\r\n<p>sumber : terapisehat.com</p>', 1, 1, NULL, NULL, 1, '2015-06-10 08:50:18'),
(2, 'Barotitis Media', '<div class="column-center-outer">\r\n<div class="column-center-inner">\r\n<div id="main" class="main section">\r\n<div id="Blog1" class="widget Blog">\r\n<div class="blog-posts hfeed">\r\n<div class="date-outer">\r\n<div class="date-posts">\r\n<div class="post-outer">\r\n<div class="post hentry">\r\n<div id="post-body-1834061566857824755" class="post-body entry-content">Barotitis Media (<em>Aerotitis</em>, <em>Barotrauma</em>) adalah gangguan telinga yang terjadi akibat perubahan tekanan udara di telinga luar dan telinga tengah yang dipisahkan oleh gendang telinga. Gendang telinga merupakan pemisah antara saluran telinga dan telinga tengah. Jika tekanan udara di dalam saluran telinga dan tekanan udara di dalam telinga tengah tidak sama, maka bisa terjadi kerusakan pada gendang telinga. <br /> <br /> Dalam keadaan normal, <em>tuba eustakius</em> (yang merupakan penghubung antara telinga tengah dan hidung bagian belakang) membantu menjaga agar tekanan di kedua tempat tersebut tetap sama dengan cara membiarkan udara dari luar masuk ke telinga tengah atau sebaliknya. <br /> <br /> <span class="fullpost"><br /> <span style="color: #000000;"><strong>PENYEBAB</strong></span><br /> Penyebab terjadinya barotrauma adalah penyumbatan pada tuba eustakius. Jika tuba eustakius mengalami penyumbatan sebagian maupun penyumbatan total akibat adanya jaringan parut, infeksi atau alergi, maka udara tidak akan sampai ke telinga tengah dan terjadilah perbedaan tekanan. <br /> <br /> Faktor resiko terjadinya barotrauma adalah:<br /></span>\r\n<ul>\r\n<li>Perubahan ketinggian : misalnya penerbangan, menyelam atau bepergian ke daerah pegunungan.</li>\r\n<li>Hidung tersumbat akibat alergi, pilek atau infeksi saluran nafas atas.</li>\r\n</ul>\r\n<span class="fullpost"><br /> <span style="color: #000000;"><strong>GEJALA</strong></span><br /> Penderita akan merasakan nyeri pada salah satu atau kedua telinganya, yang disertai dengan hilangnya pendengaran yang sifatnya ringan. Penderita juga merasakan telinganya penuh dan pusing. Jika keadaannya berat atau berlangsung lama maka ketulian bisa bertambah berat, penderita merasakan adanya tekanan di dalam telinganya dan mungkin akan terjadi perdarahan hidung. <br /> <br /> <br /> <strong><span style="color: #000000;">DIAGNOSA</span></strong><br /> Diagnosis ditegakkan berdasarkan gejala-gejalanya. Pada pemeriksaan telinga dengan <em>otoskop</em> akan tampak penggembungan ringan atau <em>retraksi</em> (tarikan ke dalam) pada gendang telinga. <br /> <br /> <br /><strong> <span style="color: #000000;">PENGOBATAN</span></strong><br /> Jika selama mengikuti penerbangan perubahan tekanan yang terjadi secara tiba-tiba menyebabkan rasa penuh atau nyeri di telinga, maka untuk menyamakan tekanan di telinga tengah dan mengurangi rasa nyeri bisa diatasi dengan:<br /></span>\r\n<ul>\r\n<li>menguap</li>\r\n<li>mengunyah permen karet</li>\r\n<li>mengisap permen</li>\r\n<li>menelan.</li>\r\n</ul>\r\n<span class="fullpost">Mengunyah atau menelan bisa membantu membuka tuba eustakius sehingga udara bisa keluar-masuk untuk menyamakan tekanan dengan udara luar. Penderita infeksi atau alergi hidung dan tenggorokan bisa mengalami rasa nyeri ketika bepergian dengan pesawat terbang atau menyelam. Untuk meringankan penyumbatan dan membantu membuka tuba eustakius bisa diberikan <em>dekongestan</em>, misalnya penilefrin dalam bentuk tetes hidung atau obat semprot. <br /> <br /> <br /> <span style="color: #000000;"><strong>PENCEGAHAN</strong></span><br /> Gunakan dekongestan atau antihistamin sebelum mengalami perubahan ketinggian. Selama menderita infeksi saluran nafas atas atau selama serangan alergi sebaiknya tidak mengikuti penerbangan, menyelam atau bepergian ke daerah dengan ketinggian yang berbeda.<br /> </span></div>\r\n<div class="post-body entry-content">&nbsp;</div>\r\n<div class="post-body entry-content"><span class="fullpost">sumber : http://sehat-enak.blogspot.com/</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, 1, NULL, NULL, 1, '2015-06-10 08:46:10'),
(3, 'Deviasi Septum', '<p style="text-align: justify;">Septum merupakan pembatas lubang hidung bagian kiri dan kanan yang merupakan kerangka penunjang berlapis selaput lendir dan sebagian besar terdiri dari tulang rawan (kartilago). Normalnya, septum hidung terletak pada garis tengah hidung. Namun, pada beberapa orang letaknya menyimpang dari garis tengah.</p>\r\n<p style="text-align: justify;">Deviasi septum dibagi atas beberapa klasifikasi berdasarkan letak deviasi, yaitu:</p>\r\n<p style="text-align: justify;"><strong>Tipe 1</strong></p>\r\n<p style="text-align: justify;">Benjolan unilateral yang belum mengganggu aliran udara.</p>\r\n<p style="text-align: justify;"><strong>Tipe 2</strong></p>\r\n<p style="text-align: justify;">Benjolan unilateral yang sudah mengganggu aliran udara, namun masih belum menunjukkan gejala klinis yang bermakna.</p>\r\n<p style="text-align: justify;"><strong>Tipe 3</strong></p>\r\n<p style="text-align: justify;">Deviasi pada konka media (area osteomeatal dan turbinasi tengah).</p>\r\n<p style="text-align: justify;"><strong>Tipe 4</strong></p>\r\n<p style="text-align: justify;">&nbsp;&ldquo;S&rdquo; septum (posterior ke sisi lain, dan anterior ke sisi lainnya).</p>\r\n<p style="text-align: justify;"><strong>Tipe 5</strong></p>\r\n<p style="text-align: justify;">Tonjolan besar unilateral pada dasar septum, sementara di sisi lain masih normal.</p>\r\n<p style="text-align: justify;"><strong>Tipe 6</strong></p>\r\n<p style="text-align: justify;">Yakni dipe 5 ditambah sulkus unilateral dari kaudal-ventral, sehingga menunjukkan rongga yang asimetri.</p>\r\n<p style="text-align: justify;"><strong>Tipe 7</strong></p>\r\n<p style="text-align: justify;">Kombinasi lebih dari satu tipe, yaitu tipe 1 sampai tipe 6.</p>\r\n<p style="text-align: justify;"><strong>Penyebab</strong></p>\r\n<p style="text-align: justify;">Biasanya deviasi septum disebabkan oleh cacat bawaan atau akibat cedera yang keras hingga hingga merubah posisi septum.</p>\r\n<p style="text-align: justify;"><strong>Gejala</strong></p>\r\n<p style="text-align: justify;">Latak septum yang tidak normal dapat menunjukkan satu atau beberap gejala, seperti:</p>\r\n<ul style="text-align: justify;">\r\n<li>Penyumbatan pada salah satu atau kedua lubang hidung</li>\r\n<li>Infeksi sinus berulang</li>\r\n<li>Perdarahan hidung berulang</li>\r\n<li>Sakit kepala, nyeri wajah, post nasal drip</li>\r\n<li>Mendengkur saat tidur yang terjadi padabayi dan anak-anak</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>Diagnosa</strong></p>\r\n<p style="text-align: justify;">Diagnosis ditegakkan berdasarkan gejala dan hasil pemeriksaan fisik.</p>\r\n<p style="text-align: justify;"><strong>Pengobatan</strong></p>\r\n<p style="text-align: justify;">Bila deviasi septum mengakibatkan perdarahan hidung atau infeksi sinus berulang, maka &nbsp;dianjurkan untuk menjalani pembedahan septoplasti.</p>\r\n<p style="text-align: justify;">sumber : doktersehat.com</p>', 1, 1, NULL, NULL, 1, '2015-06-10 08:42:33'),
(4, 'Laringitis', '<p style="text-align: justify;">Laringitis adalah peradangan yang terjadi pada pita suara karena terlalu banyak digunakan, karena iritasi atau karena adanya infeksi. Pita suara adalah suatu susunan yang terdiri dari tulang rawan, otot dan membran mukosa yang membentuk pintu masuk dari batang tenggorok (trachea). Di dalam kotak suara terdapat pita suara&mdash;dua buah membran mukosa yang terlipat dua membungkus otot dan tulang rawan.</p>\r\n<p style="text-align: justify;">Biasanya pita suara akan membuka dan menutup dengan lancar, membentuk suara melalui pergerakan dan getaran yang terbentuk. Tapi bila terjadi laringitis, pita suara akan meradang atau terjadi iritasi pada pita suara. Pita suara tersebut akan membengkak, menyebabkan terjadinya perubahan suara yang diproduksi oleh udara yang lewat melalui celah diantara keduanya. Akibatnya, suara akan terdengar serak. Pada beberapa kasus laringitis, suara&nbsp; akan menjadi sangat lemah sehingga tidak terdengar.</p>\r\n<p style="text-align: justify;">Laringitis dapat berlangsung dalam waktu singkat (akut) atau berlansung lama (kronis). Meskipun laringitis akut biasanya hanya karena terjadinya iritasi dan peradagnan akibat virus, suara serak yang sering terjadi dapat menjadi tanda adanya masalah yang lebih serius.</p>\r\n<p style="text-align: justify;">Tanda-tanda dan gejala</p>\r\n<p style="text-align: justify;">Laringitis sering kali membuat anda merasa harus berulang kali berdehem untuk membersihkan tenggorokan anda. Tanda-tanda dan gejala lain adalah sebagai berikut:</p>\r\n<ul style="text-align: justify;">\r\n<li>Suara serak</li>\r\n<li>Suara pelan</li>\r\n<li>Rasa gatal dan kasar di tenggorokan</li>\r\n<li>Sakit tenggorokan</li>\r\n<li>Tenggorokan kering Batuk kering</li>\r\n</ul>\r\n<p style="text-align: justify;">Penyebab</p>\r\n<p style="text-align: justify;">Biasanya infeksi virus menyebabkan laringitis akut. Infeksi bakteri seperti difteri juga dapat menjadi penyebabnya, tapi hal ini jarang terjadi. Laringitis akut dapat jgua terjadi saat anda menderita suatu penyakit atau setelah anda sembuh dari suatu penyakit, seperti selesma, flu atau radang paru-paru (pneumonia).</p>\r\n<p style="text-align: justify;">Kasus yang sering terjadi pada laringitis kronis termasuk juga iritasi yang terus menerus terjadi karena penggunaan alkohol yang berlebihan, banyak merokok atau asam dari perut yang mengalir kembali ke dalam kerongkongan dan tenggorokan, suatu kondisi yang disebut gastroesophageal reflux disease (GERD).</p>\r\n<p style="text-align: justify;">Pada orang dewasa, penyebab lain terjadinya suara serak yang kronis adalah:</p>\r\n<ul style="text-align: justify;">\r\n<li>Perlukaan (sariawan) pada pita suara</li>\r\n<li>Bisul (polip atau nodules) pada pita suara</li>\r\n<li>Pita suara yang kendur karena faktor usia</li>\r\n<li>Kelumpuhan pada pita suara, yang merupakan akibat dari suatu cedera, serangan stroke atau adanya tumor pada paru-paru</li>\r\n</ul>\r\n<p style="text-align: justify;">Faktor Risiko</p>\r\n<p style="text-align: justify;">Faktor-faktor berikut ini akan membuat anda memiliki risiko yang lebih besar untuk mengidap laringitis:</p>\r\n<p style="text-align: justify;">Adanya infeksi pada saluran pernafasan, seperti selesma, influensa, bronkhitis atau sinusitis<br /> Keterpaparan terhadap zat-zat yang membuat iritasi, seperti asap rokok, alkohol yang berlebihan, asam lambung atau zat-zat kimia yang terdapat pada tempat kerja anda.<br /> Terlalu banyak menggunakan suara, dengan terlalu banyak bicara, berbicara terlalu keras atau menyanyi.</p>\r\n<p style="text-align: justify;">Kapan harus mencari pertolongan medis</p>\r\n<p style="text-align: justify;">Laringitis biasanya adalah masalah yang bersifat sementara, karena dapat membaik dengan sendirinya atau setelah menjalani pengobatan. Anda dapat menangani kasus laringitis akut dengan langkah-langkah perawatan sendiri, seperti dengan mengistirahatkan suara anda, minum banyak cairan dan mengisap pelega tenggorokan. Bila suara serak sudah diderita berlangsung lebih dari dua minggu pada orang dewasa atau lebih dari satu minggu pada anak-anak, kunjungi dokter anda.</p>\r\n<p style="text-align: justify;">Bila anak anda mengalami laringitis dan menderita demam tinggi, tidak mau makan atau minum, mengeluarkan banyak air liur, atau mengalami kesulitan bernapas, segera kunjungi dokter anda.&nbsp; Anak-anak berusia kurang dari empat tahun yang mengalami laringitis dapat menderinta croup &ndash; peradangan pada pita suara dan saluran udara yang terletak tepat dibawah pita suara. Croup dapat menyebabkan suara batuk yang keras dan suara yang serak.</p>\r\n<p style="text-align: justify;">Pengamatan dan Diagnosis</p>\r\n<p style="text-align: justify;">Tanda-tanda utama terjadinya laringitis adalah suara serak. Perubahan pada suara dapat bervariasi tergantung pada tingkat infeksi atau iritasi, bisa hanya sedikit serak hingga suara yang hilang total. Dokter&nbsp; mungkin akan menanyakan apakan anda seorang perokok atau kondisi kesehatan anda saat itu &ndash; apakah anda sedang menderita selesa, influenza atau apakah anda menderita alergi &ndash; yang dapat menjadi penyebab terjadinya iritasi pada pita suara. Dokter mungkin juga akan menanyakan apakah anda terlalu banyak menggunakan pita suara anda &ndash; seperti dengan menyanyi atau berteriak &ndash; yang juga dapat menyebabkan iritasi pada pita suara anda.</p>\r\n<p style="text-align: justify;">Bila anda mengalami suara serak yang sifatnya kronis, dokter anda mungkin akan mendengarkan suara anda dan memvisualisasikan pita suara anda atau mereferensikan anda pada spesialis telinga, hidung dan tenggorokan (otolaryngologist). Dokter anda dapat menggunakan teknik-teknik dibawah ini untuk membantu diagnosis laringitis:</p>\r\n<ul style="text-align: justify;">\r\n<li>Laryngoscopy. Dokter akan secara visual memeriksa pita suara anda melalui prosedur yang disebut laryngoscopy, dengan memasukkan semacam cermin yang ringan dan sangat kecil ke belakang tenggorokan anda. Atau dokter mungkin akan menggunakan fiber-optic laryngoscopy. Tindakan ini berarti memasukkan tabung yang kecil dan fleksibel (endoscope) dengan kamera berukuran mini dan sangat ringan melalui hidung atau mulut ke arah belakang tenggorokan anda. Kemudian dokter akan melihat pergerakan pita suara saat anda berbicara.</li>\r\n<li>Biopsi. Bila dokter melihat adanya wilayah yang mencurigakan, dokter akan melakukan biopsi &ndash; mengambil contoh jaringan untuk diperiksa dibawah mikroskop.</li>\r\n</ul>\r\n<p style="text-align: justify;">Pengobatan</p>\r\n<p style="text-align: justify;">Pengobatan yang dilakukan tergantung pada penyebab terjadinya laringitis. Pengobatan terbaik untuk laringitis yang diakibatkan oleh sebab-sebab yang umum, seperti virus, adalah dengan mengistirahatkan suara anda sebanyak mungkin dan tidak membersihkan tenggorokan dengan berdehem. Bila penyebabnya adalah zat yang dihirup, maka hindari zat penyebab iritasi tersebut.&nbsp; Anda juga mungkin akant erbantu bila anda menghirup uap hangat dari baskom yang diisi air panas.</p>\r\n<p style="text-align: justify;">Bila anak anda yang masih berusia balita mengalami laringitis yang berindikasi ke arah croup, dokter anak mungkin akan meresepkan kortikosteroid seperti dexamethasone.</p>\r\n<p style="text-align: justify;">Untuk laringitis kronis yang juga berhubungan dengan kondisi lain seperti rasa terbakar di ulu hati, merokok atau alkoholisme, anda harus memperbaiki dulu kondisi-kondisi tersebut bila anda ingin membaik.</p>\r\n<p style="text-align: justify;">Bila anda merokok, berhentilah merokok. Sebagai tambahan, bila anda seorang perokok dan sering mengalami suara serak yang kerap kali terjadi, temui dokter dan lakukan pemeriksaan menyeluruh pada pita suara anda untuk memastikan tidak adanya sel-sel kanker pada pita suara anda. Bila dideteksi secara dini, kanker pada laring biasanya dapat diatasi dengan baik melalui tindakan operasi atau radiasi</p>\r\n<p style="text-align: justify;">Bila laringitis yang anda alami disebabkan oleh konsumsi alkohol, berhentilah minum alkohol. Bila anda tidak dapat berhenti mengkonsumsi alkohol secara sukarela, cari terapi yang dapat membantu anda melakukannya.</p>\r\n<p style="text-align: justify;">Pencegahan</p>\r\n<p style="text-align: justify;">Untuk mencegah kekeringan atau iritasi pada pita suara anda:</p>\r\n<ul style="text-align: justify;">\r\n<li>Jangan merokok, dan hindari asap rokok dengan tidak menjadi perokok tidak langsung. Rokok akan membuat tenggorokan anda kering dan mengakibatkan iritasi pada pita suara anda.</li>\r\n<li>Minum banyak air. Cairan akan membantu menjaga agar lendir yang terdapat pada tenggorokan tidak terlalu banyak dan mudah untuk dibersihkan.</li>\r\n<li>Batasi penggunaan alkohol dan kafein untuk mencegah tenggorokan kering. Bila anda mengalami laringitis, hindari kedua zat tersebut diatas.</li>\r\n<li>Jangan berdehem untuk membersihkan tenggorokan anda. Berdehem tidak akan berakibat baik bagi anda, karena berdehem akan menyebabkan terjadinya vibrasi abnormal pada pita suara anda dan meningkatkan pembengkakan. Berdehem juga akan menyebabkan tenggorokan anda memproduksi lebih banyak lendir dan merasa lebih iritasi, membuat anda ingin berdehem lagi.</li>\r\n</ul>\r\n<p style="text-align: justify;">Perawatan sendiri</p>\r\n<p style="text-align: justify;">Langkah-langkah perawatan sendiri berikut ini mungkin dapat meringankan gejala-gejala laringitis dan mengurangi tekanan pada suara anda:</p>\r\n<ul style="text-align: justify;">\r\n<li>Lembabkan tenggorokan anda. Cobalah untuk mengisap pelega tenggorokan, berkumur dengan air garam atau mengunyah permen karet.</li>\r\n<li>Gunakan alat pelembab ruangan. Jaga agar udara di sekitar rumah anda tetap lembab.</li>\r\n<li>Hindari berbicara atau menyanyi terlalu keras atau terlalu lama. Bila anda perlu berbicara dihadapan banyak orang, coba untuk menggunakan mikrophone atau megafon.</li>\r\n<li>Beri jeda pada suara anda. Istirahatkan suara anda bilamana mungkin.</li>\r\n<li>Cari pelatih suara. Pertimbangkan pilihan ini bila anda seorang penyanyi atau bila kualitas suara sangat penting bagi anda.</li>\r\n<li>Jangan berbisik-bisik. Berbisik akan menyebabkan lebih banyak tekanan pada pita surara anda daripada bila anda berbicara dengan suara normal.</li>\r\n</ul>\r\n<p style="text-align: justify;">Sumber : kimiafarmaapotek.com</p>', 1, 1, NULL, NULL, 1, '2015-06-10 08:38:10'),
(5, 'Osteoskl erosis', '<p>Otosclerosis adalah pertumbuhan tulang abnormal di telinga tengah yang menyebabkan gangguan pendengaran. Penyebab pasti dari Otosclerosis belum diketahui, kedokteran memperkirakan ada sebuah komponen kelainan, yang diturunkan melalui keluarga. <br /><br />Pada kondisi normal, getaran suara yang diterima oleh gendang telinga akan disampaikan ke tulang pendengaran. Masing-masing tulang pendengaran akan menyampaikan getaran ke tulang berikutnya. Tulang sanggurdi yang merupakan tulang terkecil di tubuh meneruskan getaran ke koklea atau rumah siput. <br /><br />Pada Otosclerosis yang terjadi adalah kurangnya getaran yang menyebabkan gangguan pendengaran, gangguan itu terus memburuk seiring dengan waktu.<br />Otosclerosis adalah yang paling sering menjadi penyebab gangguan pendengaran telinga tengah pada orang usia dewasa. Kelainan ini semakin buruk secara perlahan-lahan, biasanya dimulai pada awal hingga pertengahan dewasa. Hal ini lebih sering terjadi pada wanita dibandingkan pria dan biasanya Otosclerosis mempengaruhi kedua telinga. <br /><br /><span style="text-decoration: underline;"><strong>Gejala</strong></span><br />Pendengaran berkurang, lambat laun gangguan pendengaran terus memburuk, pendengaran akan berfungsi baik di daerah yang tenang. <br /><br /><span style="text-decoration: underline;"><strong>Pengobatan</strong></span><br />Belum ada obat yang terbukti efektif untuk pengobatan Otosclerosis. Meskipun alat bantu dengar dapat dipakai oleh sebagian besar pasien, pendengaran alami lebih disukai oleh orang. Oleh karena itu operasi menjadi metode yang paling efektif untuk memperbaiki gangguan pendengaran yang disebabkan oleh Otosklerosis.<br /><br />Sumber: medlineplus dan UMM.</p>', 1, 1, 0, NULL, 1, '2015-06-10 08:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_gejala`
--

CREATE TABLE IF NOT EXISTS `penyakit_gejala` (
`id` int(11) NOT NULL,
  `nama_gejala` varchar(75) DEFAULT NULL,
  `ket` text,
  `status` smallint(1) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit_gejala`
--

INSERT INTO `penyakit_gejala` (`id`, `nama_gejala`, `ket`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Demam', NULL, 1, NULL, NULL, NULL, NULL),
(2, 'Sakit Kepala', '', 1, NULL, NULL, 1, '2015-06-13 10:47:02'),
(3, 'Batuk', NULL, 1, NULL, NULL, NULL, NULL),
(4, 'Hidung tersumbat', NULL, 1, NULL, NULL, NULL, NULL),
(5, 'Letih dan lesu', NULL, 1, NULL, NULL, NULL, NULL),
(6, 'Hidung meler', NULL, 1, NULL, NULL, NULL, NULL),
(7, 'Nyeri Leher', NULL, 1, NULL, NULL, NULL, NULL),
(8, 'Suara serak', NULL, 1, NULL, NULL, NULL, NULL),
(9, 'Dahi sakit', NULL, 1, NULL, NULL, NULL, NULL),
(10, 'Sakit gigi', NULL, 1, NULL, NULL, NULL, NULL),
(11, 'Panas', NULL, 1, NULL, NULL, NULL, NULL),
(12, 'sakit Kepala', NULL, 1, NULL, NULL, NULL, NULL),
(13, 'Bersin', NULL, 1, NULL, NULL, NULL, NULL),
(14, 'Badan Lemas', NULL, 1, NULL, NULL, NULL, NULL),
(15, 'Menggigil', '', 1, NULL, NULL, 1, '2015-06-05 09:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_jenis`
--

CREATE TABLE IF NOT EXISTS `penyakit_jenis` (
`id` int(11) NOT NULL,
  `nama_jenis` varchar(30) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit_jenis`
--

INSERT INTO `penyakit_jenis` (`id`, `nama_jenis`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Penyakit THT', 1, 1, '2015-04-16 18:55:24', NULL, NULL),
(2, 'Penyakit Kulit', 1, 1, '2015-04-18 19:46:37', NULL, NULL),
(3, 'Penyakit Umum', 1, 2, '2015-04-23 22:53:55', 1, '2015-06-05 08:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `confirmed_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `confirmed_at`) VALUES
(1, 'mimin', 'ENSFfuQjp0dzDeFmyWOh7T95Mxd2b1ux', '$2y$13$eZCT5LdLecfQokxo2eCZnuf9p1VZnhwj13BBagtvsqf6CWadyxUmS', NULL, 'mimin@gmail.com', 10, 1421249614, 1434824396, NULL),
(2, 'Febri', 'byztc5OjQ_XOlhwUEH3IZrIvJjDzKlQ-', '$2y$13$rCMcmTaFOntIYT3XujVvieShdveCc/QlRWgqLvvVfh8p/7t2oIYWS', NULL, 'febrimaschut@gmail.com', 10, 1429583058, 1432473881, 1429583956),
(3, 'rio', 'mfa59MvX5XHlRFr791Qv6K-05_CHMZwh', '$2y$13$eZCT5LdLecfQokxo2eCZnuf9p1VZnhwj13BBagtvsqf6CWadyxUmS', NULL, 'rioarbu@gmail.com', 10, 1434185473, 1434185473, NULL),
(4, 'adittt', '2dE0GJVKB5Yu_7kL0gu3Oh4YM4AlJu-v', '$2y$13$z/1mDjaWt1bPtrooApexZeYd4CbVyIQgmcsx5XolbMUxKxTEQJLlG', NULL, 'adit@gg.com', 10, 1434272928, 1435165593, NULL),
(5, 'ajong', 'WX4frYZ1sbf-rp3xP7WLTzeD5fUU1JPf', '$2y$13$sGzoYS4oEuYoVnu1vQxbde6qJLb7X.AqFB.2s6zsKtLGUaRbIMrs.', NULL, 'ajong@gmia.com', 10, 1434272984, 1434272984, NULL),
(6, 'suid', 'UmEXX_usnAad9WezjdT-qKVwTb7NotIw', '$2y$13$cdK7AQ7GyuIsxgbU8GSKIuLLn4n2IWLh.PH0OjkB5XLN1/USRsPEe', NULL, 'suid@gmail.com', 10, 1434273048, 1434273048, NULL),
(10, 'gugun', 'Oqau2JCFTjFtWJzMTrEE-KXO7t6OBZp8', '$2y$13$ZTl3vDeaqjVmQOpg2eAFuO0d9NwMqWbgWF9xeSBOTMZPQpxWhxNEO', NULL, 'gugun@gmia.com', 10, 1434273918, 1434819526, NULL),
(11, 'sonia', '6KYYS3gc_4vNVgny6AxNow63HG_NQbqv', '$2y$13$XxDb4J7z2Q4Fa8ORlXhSL.QorVu87T8I2lRcBPaiP8A4E8IaczwRy', NULL, 'sonia@gmia.com', 10, 1434274063, 1434819506, NULL),
(12, 'maman', 'kUIfQMPE6Nta0X2JCzD9vZArPZ--9S3e', '$2y$13$CTakA5EgnMiC8GIGWnCV0ejsuWnhrbrZ.BcJSTSU4sR67gMAx4isK', NULL, 'maman@gg.com', 10, 1434276947, 1434819492, NULL),
(13, 'ronald', '2t1lNwEyGyPGrXLoJ-hhEQwpqpLGz-nd', '$2y$13$7qGpWABBcQEd.2dXCGCPzexscFvXuJxjCJxNqrDkLxaILdoZXCiSe', NULL, 'ronald@gmia.com', 10, 1434276963, 1434819472, NULL),
(14, 'astrid', 'HlKTgJX1XBy25mnN8OODx0W_GfF1N-oD', '$2y$13$clRy.hlnbGxSjl2/n1zh9uia0hiyFAtIZkUVekQ5cfto2z1b3fev2', NULL, 'astrid@gmia.com', 10, 1434277015, 1434819458, NULL),
(15, 'yanti', 'QGRdGc8v_RwR24lk_4N-8nnF_sOzzCGo', '$2y$13$vX6D1F0paLYRA0bT1U.3L.scdCUhXb98DMB8tZ4BJ3Z2dliZdAxcK', NULL, 'yanti@gmia.com', 10, 1434277214, 1434819437, NULL),
(16, 'messi', 'GGE_-4sKQk9ZfnEPvbQeQ1DYAj6MRe7Z', '$2y$13$FllVW2YlpFb.UIB/Q4R9KOi603uUQgkz6xcqBhkG4BUYUKO.yow7O', NULL, 'messi@ggg.com', 10, 1434277348, 1434818500, NULL),
(17, 'reina', 'zYAnCDxYSJRqzbdPIffSETrWyJQFzAF5', '$2y$13$.NjoS.NjMwc4yT3VEI9iqOJVBDUU5eSSiLnNmsI9stJzLjAQhZR1i', NULL, 'aditss@gg.com', 10, 1434277397, 1434818478, NULL),
(18, 'pepe', 'gVLgtsYjTwtMGC4p7qRZhT3vP3C8xtze', '$2y$13$QFvXzfj5H9udNmS2z728te9LpNY9rrCB825tEdxYcgqYM8ZvD9AR.', NULL, 'xxxxc@dd.nn', 0, 1434277531, 1434819789, NULL),
(19, 'adit', 'szXtlTZrw6SAgL_65T3aY0muN_9Vh7vo', '$2y$13$iqNxJ2fXOwqaMZpdQLJYl.lFESGtHcdFsXtnZHKDTNv64Eo.FaxCm', NULL, 'adit@gg.com', 10, 1434277780, 1434818455, NULL),
(20, 'morata', 'M_8Ve4r1fBueToG--xoYOdb5XJfDGY7B', '$2y$13$xWvv77P2MhTHzrE0Iy46juc1ByduIcgemkh58gIAz7W7hijutexG2', NULL, 'morata@ggs.com', 0, 1434277820, 1434819765, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_agama`
--

CREATE TABLE IF NOT EXISTS `user_agama` (
`id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_agama`
--

INSERT INTO `user_agama` (`id`, `name`, `status`, `created`, `createdBy`, `modified`, `modifiedBy`) VALUES
(1, 'Islam', 1, '2014-04-18 13:31:10', 1, NULL, NULL),
(2, 'Kristen Katolik', 1, '2014-04-18 13:31:10', 1, NULL, NULL),
(3, 'Kristen Protestan', 1, '2014-04-18 13:31:10', 1, '2015-06-25 00:05:32', 1),
(4, 'Hindu', 1, '2014-04-18 13:31:10', 1, '2015-06-14 14:12:54', 1),
(5, 'Budhas', 1, '2014-04-18 13:31:10', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profil`
--

CREATE TABLE IF NOT EXISTS `user_profil` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenkel` enum('L','P') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `agama_id` int(11) DEFAULT NULL,
  `tinggi_badan` float DEFAULT NULL,
  `berat_badan` float DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(12) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profil`
--

INSERT INTO `user_profil` (`id`, `user_id`, `nama`, `jenkel`, `tempat_lahir`, `agama_id`, `tinggi_badan`, `berat_badan`, `tgl_lahir`, `alamat`, `no_telp`, `foto`, `created_at`, `updated_by`, `updated_date`) VALUES
(1, 1, 'Cak Pep', 'L', 'Yogyakarta', 1, 171, 56, '1991-12-27', 'Jl. janti banguntapan , bantul , yogyakarta', '085645761977', 'nsZTKsDKT47ndzNT47bLKKIA9w5KwzmV.jpg', NULL, 1, '2015-06-14 05:44:21'),
(2, 2, 'Febri Maschut Wicaksono', 'L', 'Ponorogo', 1, 171, 55, '1991-12-27', 'dukuh krajan rt 03 rw 01 maguwan sambit pnorogo', '085645761977', 'xpgRwB1yzswKvfT3yaH-no9sRzOgqO3D.jpg', '2015-04-21 03:19:16', 2, '2015-06-14 02:25:12'),
(6, 3, 'Rio Kurniawan', 'L', 'Bunyu', 1, 165, 55, '2015-06-17', 'jl raya solo jogja sleman yogyakarta', '33', '0AbrkyOysKOi8TDpGPGPremS50e19ySe.jpg', '2015-06-14 01:17:23', 3, '2015-06-14 02:28:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`), ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel_komentar`
--
ALTER TABLE `artikel_komentar`
 ADD KEY `artikel_id` (`artikel_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
 ADD PRIMARY KEY (`penyakit_id`,`gejala_id`), ADD KEY `gejala_id` (`gejala_id`);

--
-- Indexes for table `diagnosa_uncertanty_term`
--
ALTER TABLE `diagnosa_uncertanty_term`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosa_user`
--
ALTER TABLE `diagnosa_user`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `diagnosa_user_detil`
--
ALTER TABLE `diagnosa_user_detil`
 ADD PRIMARY KEY (`id`), ADD KEY `diagnosa_user_id` (`diagnosa_user_id`), ADD KEY `gejala_id` (`gejala_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`), ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
 ADD PRIMARY KEY (`id`), ADD KEY `penyakit_jenis_id` (`penyakit_jenis_id`);

--
-- Indexes for table `penyakit_gejala`
--
ALTER TABLE `penyakit_gejala`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit_jenis`
--
ALTER TABLE `penyakit_jenis`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_agama`
--
ALTER TABLE `user_agama`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `user_profil`
--
ALTER TABLE `user_profil`
 ADD PRIMARY KEY (`id`), ADD KEY `user_profil` (`user_id`), ADD KEY `user_agama` (`agama_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `diagnosa_uncertanty_term`
--
ALTER TABLE `diagnosa_uncertanty_term`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `diagnosa_user`
--
ALTER TABLE `diagnosa_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `diagnosa_user_detil`
--
ALTER TABLE `diagnosa_user_detil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penyakit_gejala`
--
ALTER TABLE `penyakit_gejala`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `penyakit_jenis`
--
ALTER TABLE `penyakit_jenis`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_agama`
--
ALTER TABLE `user_agama`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_profil`
--
ALTER TABLE `user_profil`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `artikel_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artikel_komentar`
--
ALTER TABLE `artikel_komentar`
ADD CONSTRAINT `artikel_komentar_ibfk_1` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `artikel_komentar_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`gejala_id`) REFERENCES `penyakit_gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosa_user`
--
ALTER TABLE `diagnosa_user`
ADD CONSTRAINT `diagnosa_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosa_user_detil`
--
ALTER TABLE `diagnosa_user_detil`
ADD CONSTRAINT `diagnosa_user_detil_ibfk_1` FOREIGN KEY (`diagnosa_user_id`) REFERENCES `diagnosa_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `diagnosa_user_detil_ibfk_2` FOREIGN KEY (`gejala_id`) REFERENCES `penyakit_gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `penyakit`
--
ALTER TABLE `penyakit`
ADD CONSTRAINT `penyakit_ibfk_1` FOREIGN KEY (`penyakit_jenis_id`) REFERENCES `penyakit_jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_profil`
--
ALTER TABLE `user_profil`
ADD CONSTRAINT `user_agama` FOREIGN KEY (`agama_id`) REFERENCES `user_agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `user_profil` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
