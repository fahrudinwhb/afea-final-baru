-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2015 at 12:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afea`
--

-- --------------------------------------------------------

--
-- Table structure for table `afea_user`
--

CREATE TABLE IF NOT EXISTS `afea_user` (
`ID_USER` int(6) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `USER_PASSWORD` varchar(100) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `NoTelp` varchar(15) DEFAULT NULL,
  `TanggalLahir` date NOT NULL,
  `JenisKelamin` varchar(12) NOT NULL,
  `NamaPengguna` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `afea_user`
--

INSERT INTO `afea_user` (`ID_USER`, `NAMA`, `USER_PASSWORD`, `EMAIL`, `NoTelp`, `TanggalLahir`, `JenisKelamin`, `NamaPengguna`) VALUES
(3, 'Afif Nandya', 'kokokok', 'afifnandya@gmail.com', '2147483647', '2015-05-05', '', 'AfifBumiAsri'),
(4, 'ednan', '', 'ednan@gmail.com', '085721658090', '2015-05-05', '', 'ednan123'),
(5, 'gogo', 'bumiasri123', 'gogo@mail.com', '085721658060', '1995-12-13', '', 'gogo341'),
(6, 'lolo', 'bumiasri', 'lolo@mail.com', '085721658060', '2005-12-04', '', 'lolo312'),
(7, 'popo', 'opoo', 'popo@mail.com', '085721658060', '2015-06-06', '', 'popo092'),
(8, 'jojo', 'jojoj', 'jojo@mail.com', '085721658060', '1888-03-01', '', 'joj312'),
(9, 'hoho', 'asawa', 'hihi@mail.com', '085721658060', '1411-01-01', '', 'fofo13'),
(10, 'qwqq', 'fafafa', 'fofo@mail.com', '845444', '1414-03-15', '', 'qwqq'),
(11, '', '', '', '', '0000-00-00', '', ''),
(12, 'dodo', 'hhoho0909', 'dodo@mail.com', '085721658060', '1995-04-12', '', 'dodo4131'),
(13, 'tra', '09a0kowa', 'afifnandya@gmail.com', '085721658060', '2015-05-13', '', 'qsq'),
(17, 'Afif Nandya', 'qqqqq', 'afifnandyas@gmail.com', 'awasdad', '2015-05-13', '', 'qqqqq'),
(18, 'Fahrudin Wahabi', '19950327', 'fahrudinwhb@gmail.com', '085258269088', '1995-03-27', '', 'fahrudinwhb'),
(19, 'adit', '123456789', 'asi@siub.co', '12345678', '2013-11-02', '', 'Aditya'),
(20, 'adon', 'qwerty12345', 'adon@cekape.com', '9871234', '1994-11-03', '', 'Adon'),
(21, 'kaka', 'kaka', 'kaka@mail.ub', '085721658060', '2015-05-13', 'Laki-laki', 'kaka');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `ID_EVENT` varchar(6) NOT NULL,
  `PROVINSI` varchar(100) DEFAULT NULL,
  `KOTA` varchar(100) DEFAULT NULL,
  `JALAN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`ID_EVENT`, `PROVINSI`, `KOTA`, `JALAN`) VALUES
('1', 'JAWA TIMUR', 'MALANG', 'Gajayana'),
('10', 'Jawa Barat', 'Garut', 'Puncak'),
('11', 'Jawa Timur', 'TulungAgung', 'Wayang'),
('12', 'Jakarta Pusat', 'Jakarta', 'Istora Senayan'),
('2', 'JAWA TIMUR', 'Surabaya', 'Tugu'),
('3', 'JAWA TIMUR', 'Sidoarjo', 'Sakti'),
('4', 'Jawa Barat', 'Bogor', 'Jaksa Agung'),
('5', 'Jawa Tengah', 'Kebumen', 'Malioboro'),
('6', 'Jakarta Pusat', 'Gambir', 'Mawar'),
('7', 'Jawa Timur', 'Malang', 'Pluto'),
('8', 'Jawa Tengah', 'Solo', 'Bengawan Solo'),
('9', 'Jawa Timur', 'Surabaya', 'Pahlawan');

-- --------------------------------------------------------

--
-- Table structure for table `music_event`
--

CREATE TABLE IF NOT EXISTS `music_event` (
  `ID_Event` varchar(6) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `GENRE` varchar(10) DEFAULT NULL,
  `DESKRIPSI` varchar(400) DEFAULT NULL,
  `DESKRIPSI2` varchar(2000) NOT NULL,
  `TANGGAL` date DEFAULT NULL,
  `Map` varchar(500) DEFAULT NULL,
  `gambar` varchar(500) NOT NULL,
  `Jam` time DEFAULT NULL,
  `TAG` varchar(200) DEFAULT NULL,
  `HargaVIP` int(11) NOT NULL,
  `HargaReguler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_event`
--

INSERT INTO `music_event` (`ID_Event`, `NAMA`, `GENRE`, `DESKRIPSI`, `DESKRIPSI2`, `TANGGAL`, `Map`, `gambar`, `Jam`, `TAG`, `HargaVIP`, `HargaReguler`) VALUES
('1', 'Konser Likin Park', 'Rock', 'Konser Pertama Likin Park di Kota Malang', '          Linkin Park adalah grup musik beraliran nu metal dan rock alternatif yang berasal dari Agoura Hills, California, di Amerika Serikat. Mereka sempat beberapa kali berganti nama, antara lain Xero, Hybrid Theory, hingga nama Linkin Park sampai sekarang. Nama "Linkin Park" sendiri merupakan plesetan dari nama sebuah taman di Los Angeles, Lincoln Park.\r\n\r\n          Sebelum Chester Bennington menjadi vokalis Linkin Park, Mark Wakefield lebih dulu menjadi vokalisnya. Namun, ia keluar dari Linkin Park untuk mencari proyek lain (menjadi manajer grup band Taproot)– saat itu menggunakan nama Hybrid Theory – untuk menjadi manajer grup musik Taproot. Bassis Dave Farrell alias "Phoenix" juga pernah keluar sebentar dari Linkin Park untuk mengikuti tur bersama band lamanya, Tasty Snax. Sedangkan 4 personel lainnya – Brad Delson, Mike Shinoda, Joe Hahn, dan Rob Bourdon – selalu bertahan di Linkin Park sejak awal pembentukannya.', '2015-04-01', '-7.976453, 112.627652', 'Foto-event/likin.jpg', '06:15:00', 'terbaru', 1000000, 500000),
('10', 'Konser ColdPlay', 'Pop', 'ColdPlay siap hebohkan Indonesia', '        Coldplay adalah grup musik rock alternatif yang dibentuk di London, Britania Raya, pada tahun 1996. Grup musik ini terdiri dari Chris Martin sebagai vokalis utama, Jonny Buckland sebagai gitaris utama, Guy Berryman sebagai bassis, dan Will Champion sebagai drummer.\r\n\r\n       Coldplay menjadi terkenal dengan dirilisnya singel "Yellow" pada tahun 2000 dan dilanjuti oleh album debut mereka yang dirilis pada tahun yang sama, Parachutes, yang masuk ke nominasi Mercury Prize. Album ke-2 mereka, A Rush of Blood to the Head (2002), memenangi beberapa penghargaan, termasuk Album of the Year dari NME. Sementara, singel Clocks dari album ini memenangi penghargaan Record of the Year di Grammy Award ke-46.', '2015-06-26', '-6.920037, 107.610141', 'Foto-event/coldplay.gif', '17:32:00', 'rekomendasi', 1250000, 750000),
('11', 'Konser Boys Like Girl', 'Pop', 'Tour pertama BLG ke Indonesia ', '       Boys Like Girls adalah sebuah band rock asal Massachusetts, Amerika Serikat. Dibentuk pada tahun 2005, mereka menuai mulai sukes komersial ketika merilis album pertama mereka, Boys Like Girls. Boys Like Girls saat itu menjadi bintang bersama Good Charlotte dalam Soundtrack of Your Summer Tour tahun 2008 yang mengelilingi Amerika Serikat.\r\n       Album studio kedua karya mereka, Love Drunk, dirilis pada tanggal 8 September 2009. Pada akhir tahun 2011 mereka mengumumkan bahwa mereka akan memasuki masa vakum. Pada tanggal 17 November 2011 pukul 17:17, Martin Johnson mengumumkan via Twitter bahwa Boys Like Girls telah kembali bersama dan sedang bekerja pada album ketiga mereka. Namun kemudian mereka juga mengumumkan bahwa bassist Bryan Donahue telah meninggalkan band ini.', '2015-06-04', '-8.250226, 111.984305', 'Foto-event/blg.jpg', '08:00:00', 'rekomendasi', 800000, 400000),
('12', 'Konser One Ok Rock', 'Rock', 'One OK rock asia tour', '         Band ini dibentuk oleh Toru Yamashita yang ingin mendirikan band ketika masih murid sekolah menengah atas. Ia mengajak seorang kawan bernama Ryota Kohama, temannya di grup tari hip hop bernama Heads. Ryota disuruhnya belajar main bass, dan Alex Onizawa diajaknya untuk bergabung. Setelah melihat permainan Taka Moriuchi bersama band lagu daur ulang, Toru mengajaknya untuk bergabung. Tomoya Kanki sudah melengkapi formasi awal mereka sebagai pemain drum sejak tahun 2006, tapi dia baru dijadikan anggota resmi ketika band ini melakukan debutnya pada tahun 2007.\r\n\r\n        Nama band, One Ok Rock berasal dari frasa bahasa Inggris one o''clock yang      berarti pukul 1.00 tepat. Mereka dulunya berlatih band setiap akhir pekan pukul 1.00 dini hari, sehingga 1 o''clock dijadikan nama band mereka. Bahasa Jepang tidak mengenal perbedaan antara r dan l sehingga o''clock disebut o''crock; oc diganti menjadi OK hingga akhirnya ok rock dipakai mereka sebagai nama band.', '2015-05-16', '-6.219728, 106.814305', 'Foto-event/oneOkRock.jpg', '11:00:00', 'rekomendasi', 2000000, 1000000),
('2', 'Konser Owl City', 'Elektronik', 'Owl City siap hadir di Malang', '            Owl City adalah sebuah proyek musik elektronik oleh penyanyi-pengarang lagu dan multi-instrumentalis Adam Young yang dibentuk tahun 2007 di Owatonna, Minnesota. Young membuat proyek ini saat bereksperimen dengan musik di ruang bawah tanah rumah orang tuanya. Owl City mendapat perhatian luas di situs jejaring sosial Myspace, seperti musisi lain yang sukses pada akhir 2000-an, sebelum bergabung dengan Universal Republic tahun 2008.\r\n\r\n           Setelah dua rilis berbeda, Owl City mendapat popularitas tinggi melalui album debut berlabel besarnya pada tahun 2009, Ocean Eyes, yang di dalamnya terdapat singel pemenang empat penghargaan platinum "Fireflies". Album ini masuk kategori Platinum di Amerika Serikat pada bulan April 2010.', '2015-04-13', '-7.245880, 112.737826', 'Foto-event/owl.jpg', '16:30:00', 'terbaru', 1500000, 750000),
('3', 'Konser Faber Drive', 'Rock', 'Faber Drive live konser', '           Faber Drive is a four-piece Juno Award-nominated Canadian rock band from Mission, British Columbia. They have toured with bands such as Hedley, Stereos, Marianas Trench, Simple Plan and Metro Station. They have gained a huge amount of popularity in many parts of Canada. Already well known for a local fan base, Faber Drive released a limited edition three-song EP under the band name Faber. Due to legal issues, the band changed their name to Faber Drive.\r\n\r\n       Discovered by Chad Kroeger of Nickelback and signed to his 604 Records label, Faber Drive released their debut album Seven Second Surgery on May 1, 2007, which was followed by the release of four singles. The band''s biggest influencees are U2, The Police, Def Leppard, Jimmy Eat World, Stryper and Winger. The band also featured in the American drama ', '2015-05-06', '-7.457300, 112.712455', 'Foto-event/faber3.jpg', '18:00:00', 'terbaru', 900000, 450000),
('4', 'Konser Simple Plan', 'Rock', 'Tour Simple Plan ke Indonesia #2', 'Simple Plan adalah band pop punk asal Montréal, Québec, Kanada. Sejak terbentuk mereka tidak pernah mengalami pergantian personel dan mereka adalah Pierre Bouvier, Jeff Stinco, Sébastien Lefebvre, Chuck Comeau, dan David Desrosiers. Sampai saat ini mereka telah merilis 4 album studio: No Pads, No Helmets...Just Balls (2002), Still Not Getting Any... (2004), Simple Plan (2008), dan Get Your Heart On! (2011).', '2015-05-03', '-6.597943, 106.797385', 'Foto-event/simplePlan.jpg', '08:00:00', 'PalingSeringDilihat', 2500000, 2000000),
('5', 'Konser Paramore', 'Rock', 'Paramore siap ramaikan Indonesia', 'Paramore dibentuk pada tahun 2004 di Franklin, Tennessee, Amerika Serikat oleh vokalis Hayley Williams, gitaris Josh Farro dan drummer Zac Farro, serta bassist Jason Clarke. Namun pada saat mereka akan masuk ke dunia major label, pihak label kurang setuju dengan keberadaan Taylor York dan Jason Clarke. Kemudian Hayley membawa bassist Jeremy Davis dan gitaris Jason Bynum untuk menggantikan mereka, dan pihak label pun setuju. Paramore lalu menandatangani kontrak dengan Fueled by Ramen pada April 2005 Nama Paramore sendiri dikabarkan diambil dari nama ibu dari bassist pertama mereka.', '2015-05-25', '-7.677169, 109.663945', 'Foto-event/paramore.jpg', '15:30:00', 'PalingSeringDilihat', 1800000, 900000),
('6', 'Konser The Script', 'Pop', 'Tour The Script ke Indonesia', 'The Script adalah band rock Irlandia asal Dublin. Band ini terdiri dari vokalis Danny O''Donoghue, gitaris Mark Sheehan, dan drummer Glen Power. The Script merilis album perdana bertajuk The Script pada Agustus 2008 dengan single "We Cry" , "The Man Who Can''t Be Moved" , "Breakeven" , "Talk You Down" , dan terakhir "Before The Worst". Album perdana ini menempati posisi 1 di Irlandia dan UK, dan menempati posisi 64 di Billboard 200 (AS). Album kedua mereka yang bertajuk Science & Faith dengan single "For The First Time" , "Nothing" , "If You Ever Comeback" , dan "Science & Faith" diliris pada tahun 2010.', '2015-04-21', '-6.177115, 106.829097', 'Foto-event/The-Script.jpg', '21:28:00', 'PalingSeringDilihat', 1400000, 700000),
('7', 'Konser Maroon 5', 'Pop', 'Maroon 5 siap bernyanyi di Indoensia', '        Maroon 5 adalah sebuah grup musik beraliran underground group band ini dibentuk di california,amerika serikat.Grup ini awalnya terbentuk pada tahun 1997 dengan nama Kara''s flowers saat mereka masih bersekolah di Sekolah Menengah Atas. Dengan anggota Adam Levine, Micky Madden ,Matt flyn dan Ryan Dusick, mereka menandatangani Reprise Record dan meluncurkan album The Fourth World pada tahun 1997. \r\n       Setelah tanggapan yang hangat pada album tersebut, band ini memisahkan diri dari label rekaman mereka dan masuk perguruan tinggi. Pada tahun 2001, band ini bersatu kembali dan menambah James Valentine menjadi anggotanya, dan menuju arah yang baru di bawah nama Maroon 5.', '2015-05-19', '-7.933881, 112.605174', 'Foto-event/maroon5.jpg', '11:42:00', 'populer', 2000000, 1500000),
('8', 'Konser Noah', 'Pop', 'Konser Noah paling top', 'NOAH (sebelumnya bernama Ariel Uki Lukman Reza David, Peterpan, dan Topi) adalah sebuah grup musik Pop/Rock alternatif dari Bandung, Indonesia. Grup musik ini dibentuk pada tahun 2000 dan terkenal berkat lagunya "Mimpi Yang Sempurna". Grup musik ini juga terkenal dengan lirik yang sederhana dan puitis, musik yang mudah di ingat dengan ciri khas suara vokal Ariel. Sekarang grup musik ini hanya terdiri dari: Ariel, Uki, Lukman, dan David. Pada November 2006, Andika dan Indra keluar dari grup musik ini, Selanjutnya pada tahun 2006, David masuk ke grup musik ini.', '2015-05-31', '-6.141794, 106.651652', 'Foto-event/noah.jpg', '19:39:00', 'populer', 600000, 300000),
('9', 'Imagine Dragon', 'Pop', 'Imagine Dragon Siap mengguncang Indonesia', 'Band ini dimulai pada tahun 2008 di Provo, Utah dimana sang vokalis Dan Reynolds bertemu dengan drummer Andrew Tolman. Reynolds dan Tolman sama-sama belajar di Universitas Brigham Young. Setalah formasi, Tolman merekrut teman lama SMAnya Daniel Wayne "Wing" Sermon yang baru saja kembali ke kampung halamannya di American Fork, Utah setelah belajar di Berklee School of Music', '2015-04-14', '-7.245242, 112.738322', 'Foto-event/dragon.jpg', '14:38:00', 'rekomendasi', 2400000, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `ID_PEMESANAN` varchar(25) NOT NULL,
  `ID_Event` varchar(6) NOT NULL,
  `ID_USER` int(6) NOT NULL,
  `JumlahVIP` int(11) DEFAULT NULL,
  `JumlahReguler` int(11) DEFAULT NULL,
  `TotalHargaVIP` int(11) DEFAULT NULL,
  `TotalHargaReguler` int(11) DEFAULT NULL,
  `TotalPembayaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`ID_PEMESANAN`, `ID_Event`, `ID_USER`, `JumlahVIP`, `JumlahReguler`, `TotalHargaVIP`, `TotalHargaReguler`, `TotalPembayaran`) VALUES
('10Adon88', '10', 20, 8, 8, 10000000, 6000000, 16000000),
('10AfifBumiAsri', '10', 3, 0, 0, 0, 0, 0),
('10AfifBumiAsri12', '10', 3, 1, 2, 1250000, 1500000, 2750000),
('11AfifBumiAsri12', '11', 3, 1, 2, 800000, 800000, 1600000),
('11fahrudinwhb11', '11', 18, 1, 1, 800000, 400000, 1200000),
('12AfifBumiAsri11', '12', 3, 1, 1, 2000000, 1000000, 3000000),
('12AfifBumiAsri32', '12', 3, 3, 2, 6000000, 2000000, 8000000),
('1AfifBumiAsri11', '1', 3, 1, 1, 1000000, 500000, 1500000),
('1AfifBumiAsri201', '1', 3, 20, 1, 20000000, 500000, 20500000),
('2AfifBumiAsri', '2', 3, 0, 0, 0, 0, 0),
('2AfifBumiAsri1', '2', 3, 0, 1, 0, 750000, 750000),
('2AfifBumiAsri12', '2', 3, 1, 2, 1500000, 1500000, 3000000),
('2fahrudinwhb129', '2', 18, 12, 9, 18000000, 6750000, 24750000),
('3AfifBumiAsri11', '3', 3, 1, 1, 900000, 450000, 1350000),
('5Adon43', '5', 20, 4, 3, 7200000, 2700000, 9900000),
('5AfifBumiAsri12', '5', 3, 1, 2, 1800000, 1800000, 3600000),
('6AfifBumiAsri51', '6', 3, 5, 1, 7000000, 700000, 7700000),
('7AfifBumiAsri12', '7', 3, 1, 2, 2000000, 3000000, 5000000),
('7AfifBumiAsri42', '7', 3, 4, 2, 8000000, 3000000, 11000000),
('7kaka12', '7', 21, 1, 2, 2000000, 3000000, 5000000),
('8Adon12', '8', 20, 1, 2, 600000, 600000, 1200000),
('9AfifBumiAsri14', '9', 3, 1, 4, 2400000, 8000000, 10400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afea_user`
--
ALTER TABLE `afea_user`
 ADD PRIMARY KEY (`ID_USER`), ADD UNIQUE KEY `NamaPengguna` (`NamaPengguna`), ADD FULLTEXT KEY `NamaPengguna_2` (`NamaPengguna`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
 ADD PRIMARY KEY (`ID_EVENT`);

--
-- Indexes for table `music_event`
--
ALTER TABLE `music_event`
 ADD PRIMARY KEY (`ID_Event`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
 ADD PRIMARY KEY (`ID_PEMESANAN`), ADD KEY `ID_Event` (`ID_Event`), ADD KEY `ID_USER` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afea_user`
--
ALTER TABLE `afea_user`
MODIFY `ID_USER` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`ID_EVENT`) REFERENCES `music_event` (`ID_Event`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`ID_Event`) REFERENCES `music_event` (`ID_Event`),
ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `afea_user` (`ID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
