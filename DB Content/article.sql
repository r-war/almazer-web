-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2020 at 11:30 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rivalwar_almazer`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `content`, `picture`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Baru Beroperasi 2 Tahun di Indonesia, 3 Produk Wuling Kembali Sabet Penghargaan Bergengsi!', '<p><strong><a href=\"https://www.wartaekonomi.co.id/dateline1/jakarta.html\">WE Online, Jakarta</a></strong>&nbsp;- Kabar baik datang dari produsen mobil asal China,&nbsp;<a href=\"https://www.wartaekonomi.co.id/tag11071/wuling-motors.html\">Wuling Motors</a>&nbsp;(Wuling)! Perusahaan itu berhasil mengantongi penghormatan dari sektor otomotif Indonesia. Produk Almaz dan Seri Cortez karya Wuling masing-masing dihadiahi penghargaan dari ajang Gridoto Award 2019 yang bertajuk&nbsp;<em>Ignite The Consumer</em>.</p>\r\n\r\n<p>Apa saja sih penghargaan yang diraih? Berdasarkan informasi yang dihimpun&nbsp;<em>Warta Ekonomi</em>, Almaz menyabet anugerah&nbsp;<em>Car of The Year 2019</em>&nbsp;dan&nbsp;<em>Best Medium SUV</em>, Cortez CT mengantongi gelar&nbsp;<em>Best Medium MPV</em>, sedangkan Cortez 1.8 memperoleh apresiasi dalam kategori baru,&nbsp;<em>Best Total Cost Ownership 2019</em>.</p>\r\n\r\n<p>&quot;Semenjak peluncurannya, Almaz dan seri Cortez telah mendapatkan sambutan hangat dari masyarakat Indonesia. Oleh karena itu, kami akan selalu meningkatkan inovasi produk serta layanan yang dapat memenuhi kebutuhan masyarakat yang sejalan dengan semangat&nbsp;<em>Drive for a Better Life</em>,&rdquo; begitu kata&nbsp;<em>Senior Brand Manager</em>&nbsp;Wuling Motors, Dian Asmahani, untuk merespons penghargaan yang diterima oleh perusahaan.</p>\r\n\r\n<p>Usut punya usut, proses pengujian atau penilaian dalam gelaran penghargaan tersebut dilakukan sejak Oktober 2018 hingga Oktober 2019. Pengujian dilakukan terhadap segmen roda dua dan roda empat, termasuk kategori baru yang disabet oleh Cortez 1.8 loh, otolovers.</p>\r\n\r\n<p>Dalam pengujian itu, ada beberapa faktor yang dinilai oleh tim pemberi penghargaan. Mulai dari desain, fitur, performa, pengendalian, konsumsi bahan bakar, sampai dengan harga produk.</p>\r\n\r\n<p>Almaz yang dijuluki mobil terbaik tahun 2019 mengusung inovasi Wuling Indonesian Command (WIND), sebuah&nbsp;<em>voice command</em>&nbsp;pintar dan interaktif yang didukung oleh bahasa Indonesia. Fitur seperti itu memungkinkan Anda mengatur fitur-fitur dalam kendaraan hanya melalui suara saja, sudah seperti asisten virtual saja ya?</p>\r\n\r\n<p>Dari segi spesifikasi, Smart Technology SUV Wuling Almaz punya mesin dengan tenaga 1.500 cc dengan transmisi CVT, dan manual 6-percepatan. Tak cuma itu, Almaz juga dilengkapi oleh deretan fasilitas modern, dari&nbsp;<em>panoramic sunroof</em>, tombol&nbsp;<em>start-stop</em>,&nbsp;<em>keyless remote, keyless entry</em>, sistem pengeras suara keluaran Infinity by Harman, kamera 360&deg;, serta fitur keselamatan yang lengkap.</p>\r\n\r\n<p>Di sisi lain, Seri Cortez CT dari Wuling dengan slogan&nbsp;<em>The New Advanced MPV</em>&nbsp;dibekali mesin 1.500 cc dengan Turbochanger yang mampu melahirkan tenaga maksimal hingga 140 HP, serta torsi 250 Nm. Tak kalah dengan Almaz, Cortez CT juga dilengkapi fitur berkendara modern, seperti&nbsp;<em>One Push Start/Stop Button</em>,&nbsp;<em>Keyless Entry</em>, hingga&nbsp;<em>Emergency Stop Signal</em>&nbsp;(ESS).</p>\r\n\r\n<p>Sementara, pemenang penghargaan&nbsp;<em>Best Total Cost Ownership Medium MPV</em>&nbsp;ditenagai oleh mesin dengan kubilasi 1.800 cc. Kendaraan itu mampu menghasilkan daya maksimal 129 HP dengan torsi 174 Nm, dipadukan dengan dua pilihan transmisi loh, yakni manual 6-percepatan dan I-AMT (<em>Intelligent Automated Mechanical Transmission</em>).</p>\r\n\r\n<p>Nah, yang paling penting, semua produk Wuling dijual lengkap dengan komponen dari pemasok global! Diproduksinya pun di pabrik lokal dengan sistem yang setara dengan pabrik-pabrik internasional (<em>global manufacturing system</em>/GMS). Basis dari Almaz juga sudah mengikuti standar internasional loh! Buktinya, Wuling sudah melakukan ekspor ke beberapa negara di Asia Tenggara dan Oseania pada September lalu.</p>', 'uploads/wuling_motors_181434_big.jpg', '2020-01-10 17:19:04', '2020-01-15 06:50:02', '2020-01-15 06:50:02'),
(2, 'Fitur Tercanggih dari Wuling Almaz Bisa Bahasa Indonesia', '<p><strong>SEMARANG, suaramerdeka.com</strong>&nbsp;&ndash; Wuling Motors (Wuling) terus melakukan inovasi dalam setiap produknya. Pada lini produk SUV, Wuling Almaz menghadirkan fitur dan teknologi cerdas standar global tanpa meninggalkan esensi lokal.</p>\r\n\r\n<p>Salah satu teknologi yang tersemat adalah fitur Wuling Indonesian Command (WIND), yakni inovasi voice command atau perintah suara pertama berbahasa Indonesia.</p>\r\n\r\n<p>&quot;Kehadiran inovasi WIND serta beragam fitur terdepan semakin menegaskan identitas Almaz sebagai Smart Technology SUV. Dengan kualitas berstandar global dan apresiasi positif dari industri otomotif di tanah air, kami yakin Almaz dapat menghadirkan pengalaman berkendara tanpa batas dan mendorong para konsumen untuk terus melaju menuju kehidupan yang lebih baik sejalan dengan semangat &lsquo;Drive For A Better Life&rsquo;,&rdquo; Senior Brand Manager Wuling Motors, Dian Asmahani.</p>\r\n\r\n<p>Teknologi Wuling Indonesian Command (WIND) memungkinkan pengguna untuk menyalakan, mematikan, atau mengoperasikan beragam fitur kendaraan. Mulai dari pendingin udara, jendela, panoramic sunroof, akses fitur hiburan seperti musik atau radio, melakukan panggilan telepon, menjalankan aplikasi misalnya Wuling Link ataupun TPMS, hingga informasi waktu dan tanggal. Fitur canggih ini membentuk smart ecosystem dalam era mobilitas modern.</p>\r\n\r\n<p>&ldquo;Pada Wuling Almaz, kamipun menawarkan pilihan konfigurasi bangku 5-seater dan 7-seater. Perihal spesifikasi dan fitur, Almaz diperkuat dengan mesin 1.500cc turbocharged yang mampu memproduksi tenaga maksimal 140 HP dan torsi 250 Nm yang disalurkan melalui transmisi CVT dengan pilihan mode berkendara eco, sport dan 8-speed manual simulation yang responsif,&rdquo; jelas Dian.</p>\r\n\r\n<p>Selain itu, Almaz juga hadir dengan opsi transmisi manual 6-percepatan. Kemudian beralih ke sisi fitur, Medium SUV Wuling ini diakomodasi dengan panoramic sunroof, start-stop button, keyless remote, keyless entry, sound system keluaran Infinity by Harman, 360o camera, sampai dengan peranti keselamatan yang lengkap.</p>\r\n\r\n<p>Almaz mengusung rancang desain eksterior beraura stunning dan sporty pada bagian depan dan masih menjadi daya tariknya melalui Integrated Future Eyes LED dan lampu utama proyektor LED yang ditanamkan di area bawah. Tak hanya itu, di sisi samping diterapkan gaya dynamic parallel dan floating roof yang menjadikan tampilannya semakin modern.</p>\r\n\r\n<p>Dian menambahkan, hingga saat ini Almaz pun telah mendapatkan beragam apresiasi dari khalayak media, mulai dari dua penghargaan Car of The Year 2019 dari FORWOT dan Gridoto Award 2019, Best Medium SUV versi Gridoto Award 2019, Carvaganza Editors&rsquo; Choice Award 2019, hingga Apresiasi Inovasi 2019 kategori Teknologi oleh Koran Sindo dan Sindonews.com untuk teknologi WIND yang dimiliki Almaz.</p>', 'uploads/article-1.jpg', '2019-12-19 16:43:22', '2020-01-15 06:51:33', '2020-01-15 06:51:33'),
(3, '2019 Wuling Motors Indonesia Jual 22.343 Mobil, Almaz Terlaris', '<p><strong>TEMPO.CO</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;-&nbsp;<a href=\"https://otomotif.tempo.co/read/1270231/penjualan-wuling-oktober-2019-capai-2-700-unit-almaz-terlaris\" target=\"_blank\">Wuling</a>&nbsp;Motors Indonesia mencatat total penjualan wholesales sebanyak 22.343 unit mobil sepanjang Januari-Desember 2019. Dari angka itu, Wuling Almaz menjadi kontributor penjualan dengan capaian 9.743 unit. Disusul Wuling Confero (9.137 unit), Wuling Cortez (3.160 unit), dan Wuling Formo (303 unit).&nbsp;</p>\r\n\r\n<p>Media Relation Wuling Motors Indonesia, Brian Gomgom, mengatakan bahwa penjualan sepanjang 2019 mengalami pertumbuhan positif dibandingkan 2018 sebesar 17.002 unit. &ldquo;Capaian 2019 positif untuk Wuling Motors di tengah lesunya penjualan otomotif secara nasional,&rdquo; kata Gomgom kepada&nbsp;<em>Tempo</em>, Jumat, 2020.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dari data yang diperoleh Tempo, penjualan wholesales Wuling Motors Indonesia pada Desember 2019 mencapai 4.612 unit. Angka ini melonjak lebih dari dua kali lipat dibanding penjualan November 2019 sebanyak 1.948 unit.&nbsp;</p>\r\n\r\n<p>Peningkatan terbesar terjadi pada Almaz, dari 726 unit (November) menjadi 2.314 unit (Desember). Wuling Confero juga mencatat peningkatan penjualan yang signifikan, dari 820 unit (November) menjadi 1.909 unit (Desember).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sementara itu, Wuling Motors Indonesia juga mencatat total ekspor untuk Wuling Almaz sebanyak 2.678 unit sepanjang 2019. Seperti diketahui, Wuling Almaz buatan pabrik&nbsp;<a href=\"https://otomotif.tempo.co/read/1258408/januari-september-2019-13-808-wuling-terjual-almaz-terlaris\" target=\"_blank\">Wuling</a>&nbsp;di Cikarang, Bekasi, Jawa Barat, perdana diekspor ke Thailand dan Fiji dengan merek Chevrolet Captiva. Ekspor perdana dilakukan pada 25 September 2019.&nbsp;</p>', 'uploads/814564_720.jpg', '2020-01-16 17:24:01', '2020-01-15 07:11:36', '2020-02-11 23:45:32'),
(4, 'Peduli Korban Banjir, Komunitas Wuling Almaz Adakan ‘Almazers Peduli’', '<p><strong>Jakarta</strong>&nbsp;&ndash; Dalam menunjukkan rasa kepedulian terhadap masyarakat yang terkena dampak banjir beberapa hari lalu, komunitas&nbsp;<a href=\"https://www.carmudi.co.id/mobilbaru/merek/wuling/almaz/\">Wuling Almaz</a>&nbsp;Indonesia bernama Almazers melaksanakan kegiatan bertajuk &ldquo;Almazers Peduli&rdquo;. Kegiatan ini diadakan dalam bentuk memberikan sumbangan kepada warga yang terkena dampak bencana banjir di Kampung Banar, Kampung Rajabakti, dan Pesanggrahan Bintaro selama delapan hari dari 4-12 Januari 2020 lalu.</p>\r\n\r\n<p>Roy L. Tjahyadi selaku Ketua Umum Almazers mengatakan bahwa tujuan diadakannya kegiatan Almazers Peduli ini sebagai bentuk perhatian mereka pada warga yang terkena bencana banjir di kawasan Jakarta dan Banten.</p>\r\n\r\n<p>&ldquo;Kegiatan ini tidak hanya bertujuan mengenalkan komunitas kami ke masyarakat. Tetapi, juga untuk menumbuhkan rasa kepedulian para anggota Almazers pada masyarakat sekitar,&rdquo; kata Roy dalam keterangan resminya.</p>\r\n\r\n<p>Roy juga mengatakan bahwa kegiatan Almazers Peduli diwakili oleh dua orang anggota Almazers. Mereka melakukan pembagian bantuan secara door to door, serta ke posko bencana.</p>\r\n\r\n<p>&ldquo;Karena sulitnya medan jalan yang harus ditempuh, kami melakukan kegiatan ini di tanggal dan tempat yang berbeda,&rdquo; jelas Roy.</p>\r\n\r\n<p>Roy menambahkan bahwa dalam waktu dekat ini, komunitas Almazers akan mengadakan kegiatan Endurance Touring. Namun, belum diberitahukan secara detail mengenai acara tersebut.</p>\r\n\r\n<h2><strong>Mengenal Almazers</strong></h2>\r\n\r\n<p><strong><img alt=\"\" src=\"https://almazer.rivalwar.xyz/uploads/IMG_20200116_100921_112_1581493653.jpg\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seperti diketahui sebelumnya, Almazers merupakan komunitas pengguna mobil Wuling di Indonesia. Komunitas ini dibentuk pada 14 Oktober 2019 dan diresmikan dalam Musyawarah Nasional pada 15 Desember 2019 di Semarang, Jawa Tengah.</p>\r\n\r\n<p>Hingga saat ini, Almazers sudah memiliki anggota sebanyak 300 orang, serta 14 chapter (bagian). Terdiri dari Jabodetabek, Jawa Barat, Jawa Tengah, Jawa Timur, Aceh, Sumatera Utara, Sulawesi, Nusa Tenggara Barat (NTB), Palembang, Bali, Aceh, Kalimantan Tengah, Kalimantan Timur, dan Riau.</p>\r\n\r\n<p>Bagi Carmudian yang tertarik untuk bergabung dengan komunitas Almazers ini, dapat mengisi data registrasi di member.almazer.id atau melalui aplikasi di Playstore dengan kata kunci ALMAZERS. Adapun syarat bergabung di komunitas tersebut, Carmudian pastinya adalah pengguna mobil Wuling Almaz. Selain itu, Carmudian sudah melakukan registrasi via website atau aplikasi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Penulis: Nadya Andari</em></p>\r\n\r\n<p><em>Editor: Dimas</em></p>', 'uploads/bantuan.jpg', '2020-01-20 14:46:14', '2020-02-11 23:47:50', '2020-02-13 17:59:54'),
(5, 'Libas Jalur Cangar, Wuling Almaz Buktikan Ketangguhannya', '<p><strong>Otosia.com</strong>&nbsp;- Jalur Cangar yang menghubungkan Kabupaten Mojokerto dan Kota Batu dikenal dengan jalur yang cukup ekstrem. Tikungannya cukup tajam dan turunannya cukup curam. Berada di area kaki gunung, membuat cuaca di jalur Cangar juga tak menentu.</p>\r\n\r\n<p>Namun, rupanya Wuling Almaz tak gentar melewati medan seperti itu kala para anggota Komunitas ALMAZER menjajal jalur tersebut, pada 16 Februari 2020 lalu. Sekretaris Nasional ALMAZER, Miming Permadi menjelaskan, warga sekitar juga ikut menyaksikan kekuatan dan kenyamana Almaz yang selama ini diragukan lantaran Almaz merupakan produk Cina.</p>\r\n\r\n<p>&quot;Kami menguji kekuatan kenyamanan Almaz di track yang cukup ekstrem dalam agenda Almaz Endurance Test. Track yang kami pilih cukup terjal dengan kemiringan 45 derajat. Cuaca yang tak menentu jadi tantangan tersendiri untuk menaklukkan trek tersebut dengan Almaz,&quot; ujar Miming.</p>\r\n\r\n<p><img alt=\"\" src=\"https://almazer.rivalwar.xyz/uploads/WhatsApp Image 2020-02-20 at 16.19.13_1582338469.jpeg\" /></p>\r\n\r\n<p>Setidaknya ada 80 orang dan menggunakan 40 unit Wuling Almaz untuk menaklukkan jalur Cangar. Perjalanan dimulai dari Vanda Hotel, Trawas. Lalu pengetesan itu dimulai melalui Pacet, Kabupaten Mojokerto.</p>\r\n\r\n<p>Benar saja, di tengah perjalanan hujan deras. Jarak pandang sangat terbatas lantaran kabut yang tebal.</p>\r\n\r\n<p>&quot;Jarak pandang hanya sekitar 5 meter. Kami menghabiskan waktu 2 jam dari Trawas menuju Batu,&quot; lanjutnya.</p>\r\n\r\n<p>Pada agenda yang dihadiri oleh pihak ATPM (Agen Tunggal Pemegang Merek) itu, para anggota komunitas juga ingin meningkatkan brand awareness untuk para anggota komunitas. &quot;Komunitas ini mandiri dan Independent. Bahkan event ini tidak disponsori oleh pihak ATPM,&quot; imbuh Miming.</p>\r\n\r\n<p><img alt=\"\" src=\"https://almazer.rivalwar.xyz/uploads/WhatsApp Image 2020-02-20 at 16.19.18_1582338523.jpeg\" /></p>\r\n\r\n<p>Selain awareness untuk anggota komunitas sendiri, mereka juga ingin masyarakat semakin mengenal Wuling Almaz. Bahkan menariknya, para anggota komunitas ingin memberikan solusi kepada ATPM terkait permasalahan-permasalahan yang terjadi pada Almaz.</p>\r\n\r\n<p>&quot;Kami memberikan data-data penting yang bisa dipakai ATPM untuk melakukan Research and Development. Kami juga berharap masyarakat menyadarai mobil Cina cukup tangguh dan nyaman di berbagai rintangan,&quot; paparnya.</p>\r\n\r\n<p>Almaz Endurance Test ini baru memasuki stage 1. Menurut Miming, selanjutnya akan ada stage-stage lain yang akan ditaklukkan oleh Wuling Almaz. Saat bulan Ramadhan nanti, ALMAZER juga berencana akan megnadakan bakti sosial di seluruh chapter.</p>\r\n\r\n<h2>Komunitas ALMAZER</h2>\r\n\r\n<p><img alt=\"\" src=\"https://almazer.rivalwar.xyz/uploads/WhatsApp Image 2020-02-20 at 16.19.03 (1)_1582338629.jpeg\" /></p>\r\n\r\n<p>Komunitas ALMAZER sendiri mulai berdiri sejak tanggal 14 ktober 2019. Komunitas ini diresmikan dalam Musyawarah Nasional pada 15 Desember 2019 di Semarang, Jawa Tengah.</p>\r\n\r\n<p>Hingga saat ini, sudah ada 350 anggota dan 15 chapter di seluruh Indonesia. Para pemilik Wuling Almaz bisa bergabung dengan ALMAZER dengan cara mendaftar melalaui website (https://member.almazer.id) atau melalui aplikasi yang bisa diunduh di Playstore dengan kata kunci ALMAZER.</p>\r\n\r\n<p>Informasi lain terkait aktivitas komunitas bisa dilihat di media sosial Facebook (facebook.com/groups/almazers), Instagram (instagram.com/wulingalmazofficial/), dan website (www.almazer.id/)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>(Sumber: Otomotif Indonesia)</p>', 'uploads/WhatsApp Image 2020-02-20 at 16.19.15.jpeg', '2020-02-21 09:25:55', '2020-02-21 18:31:07', '2020-02-21 22:10:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;