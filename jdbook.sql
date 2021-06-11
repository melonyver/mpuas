-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 03:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` varchar(13) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(25) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `bookDesc` text NOT NULL,
  `authDesc` text NOT NULL,
  `rating` int(11) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `price` int(7) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `title`, `author`, `category`, `tag`, `bookDesc`, `authDesc`, `rating`, `promo`, `price`, `image`) VALUES
('9786020332444', 'Aku Ini Binatang Jalang', 'Chairil Anwar', 'Novel', 'Puisi', 'Doa kepada pemeluk teguh Tuhanku Dalam termangu Aku masih menyebut namaMu Biar susah sungguh mengingat Kau penuh seluruh cayaMu panas suci tinggal kerdip lilin di kelam sunyi', 'Chairil Anwar lahir di Medan, Sumatera Utara, 26 Juli 1922 – meninggal di Jakarta, 28 April 1949 pada umur 26 tahun. Dia, yang dijuluki sebagai Si Binatang Jalang (dari karyanya yang berjudul Aku), adalah penyair terkemuka Indonesia. Ia diperkirakan telah menulis 96 karya, termasuk 70 puisi. Bersama Asrul Sani dan Rivai Apin, ia dinobatkan oleh H.B. Jassin sebagai pelopor Angkatan \'45 sekaligus puisi modern Indonesia.', 4, 'terlaris', 48000, 'akuinibinatang.jpg'),
('9786020383637', 'Harry Potter and the Prisoner of Azkaban', 'J.k. Rowling', 'Novel', 'Fantasi', 'Akibat melakukan kekacauan sihir luar biasa, Harry Potter kabur dari keluarga Dursley dan Little Whinging naik Bus Ksatria. Ia mengira bakal mendapat hukuman berat. Namun, Kementerian Sihir punya masalah yang lebih gawat---Sirius Black, tawanan terkenal dan pengikut setia Lord Voldemort, melarikan diri dari penjara Azkaban. Kata orang, ia mengincar Harry, sehingga Kementerian Sihir mengirimkan para Dementor dari Azkaban, dengan Kecupan pengisap jiwa yang mengerikan, untuk berpatroli di lahan sekolah. Pada tahun ketiga di Hogwarts, desas-desus kelam dan ancaman-ancaman maut mengikuti Harry. Ia juga jadi mengetahui berbagai fakta baru mengenai masa lalunya dan akhirnya berhadapan dengan salah satu pelayan Pangeran Kegelapan yang paling setia.', 'Joanne Kathleen Rowling atau lebih dikenal sebagai J.K. Rowling (lahir di Yate, Gloucestershire Utara, Inggris, 31 Juli 1965 (umur 55 tahun). Sebagai seorang ibu tunggal yang tinggal di Edinburgh, Skotlandia, Rowling menjadi sorotan kesusasteraan internasional pada tahun 1999 saat tiga seri pertama novel remaja Harry Potter mengambil alih tiga tempat teratas dalam daftar New York Times best-seller setelah memperoleh kemenangan yang sama di Britania Raya. Kekayaan Rowling semakin bertambah saat seri ke-4, Harry Potter dan Piala Api diterbitkan pada bulan Juli tahun 2000. Seri ini menjadi buku paling laris penjualannya dalam sejarah.', 5, 'terpopuler', 535000, 'harrypotter.jpg'),
('9786020637587', 'Perjamuan Khong Guan', 'Joko Pinurbo', 'Novel', 'Puisi', 'Mari kita buka, apa isi kaleng Khong Guan ini? biskuit peyek keripik ampiang atau rengginang? Simsalabim. Buka! Isinya ternyata ponsel kartu ATM tiket voucer obat jimat dan kepingan-kepingan rindu yang sudah membatu.', 'Penyair PH. Joko pinurbo lahir 11 Mei 1962 di Pelabuhan Ratu, Sukabumi, Jawa Barat. Pinurbo gemar megarang puisi sejak di Sekolah Menengah Atas. Sebagian sajak-sajak dari penyair ini merupakan tanggapan terhadap segala sesuatu yang terjadi di sekeliling. Salah satu puisinya yang melejit namanya berjudul Celana (1999).', 4, 'baru', 68000, 'perjamuankhongguan.jpg'),
('9786020639543', 'Nebula', 'Tere Liye', 'Novel', 'Fiksi Petualangan, Fantasi', 'SELENA dan NEBULA adalah buku ke-8 dan ke-9 yang menceritakan siapa orangtua Raib dalam serial petualangan dunia paralel. Dua buku ini sebaiknya dibaca berurutan. Kedua buku ini juga bercerita tentang Akademi Bayangan Tingkat Tinggi, sekolah terbaik di seluruh Klan Bulan. Tentang persahabatan tiga mahasiswa, yang diam-diam memiliki rencana bertualang ke tempat-tempat jauh. Tapi petualangan itu berakhir buruk, saat persahabatan mereka diuji dengan rasa suka, egoisme, dan pengkhianatan. Ada banyak karakter baru, tempat-tempat baru, juga sejarah dunia paralel yang diungkap. Di dua buku ini kalian akan berkenalan dengan salah satu karakter paling kuat di dunia paralel sejauh ini. Tapi itu jika kalian bisa menebaknya. Dua buku ini bukan akhir. Justru awal terbukanya kembali portal menuju Klan Aldebaran.', 'Tere Liye (lahir di Lahat, Indonesia, 21 Mei 1979), dikenal sebagai penulis novel. Beberapa karyanya yang pernah diangkat ke layar kaca yaitu Hafalan Shalat Delisa dan Moga Bunda Disayang Allah. Meskipun dia bisa meraih keberhasilan dalam dunia literasi Indonesia, kegiatan menulis cerita sekedar menjadi hobi karena sehari-hari ia masih bekerja kantoran sebagai akuntan.', 4, 'baru', 82500, 'nebula.jpg'),
('9786022203278', 'Bukan Golongan Kami', 'Coki Pardede & Tretan Muslim', 'Novel', 'Fiksi Ilmiah', 'Bukan Golongan Kami adalah kumpulan tulisan keresahan Coki & Muslim. Tak hanya soal jatuh bangun karier mereka di panggung komedi Indonesia, buku ini menggali lebih jauh ke masa lalu yang membuat cara mereka memaknai keberagaman hingga saat ini. Dua muka buku ini mewakili sudut pandang Coki dan Muslim hingga mereka akhirnya bertemu di tengah menjadi duo komedian paling dinanti saat ini.', 'Aditya Muslim (lahir di Bangkalan, Jawa Timur, Indonesia, 10 Maret 1991 (umur 30 tahun), atau lebih dikenal sebagai Tretan Muslim, merupakan seorang pelawak tunggal berkebangsaan Indonesia. Ia merupakan kontestan dari ajang Stand Up Comedy Indonesia musim ketiga pada 2013', 5, 'baru,terlaris', 77000, 'bukangolongankami.jpg'),
('9786022915249', 'Orang-orang Biasa', 'Andrea Hirata', 'Sastra', 'Novel', '“The Rainbow Troops is the first Indonesian novel to find its way into the international general fiction market.“-The Sydney Morning Herald', 'Andrea Hirata terlahir dengan nama Aqil Barraq Badruddin Seman Said Harun (lahir di Gantung, Belitung Timur, Bangka Belitung, 24 Oktober 1982 umur 35 tahun) adalah novelis yang telah merevolusi sastra Indonesia. Ia berasal dari Pulau Belitung, provinsi Bangka Belitung. Novel pertamanya adalah Laskar Pelangi yang menghasilkan tiga sekuel.', 4, 'terlaris', 89000, 'orangorangbiasa.jpg'),
('9786024248215', 'Nanti Kita Cerita Tentang Hari Ini', 'Marchella Fp', 'Novel', 'Fiksi', '“Nanti kita cerita tentang hari ini... Besok kita buat yang lebih baik lagi.“Buku visual grafis, yang menceritakan tentang perempuan bernama Awan (27th) yang takut akan lupa rasanya menjadi muda, jadi dia membuat surat yang dia kirim untuk masa depan. Sebagai pengingat untuk dia dan anaknya kelak. Berisikan kumpulan pesan dan cerita dari yang ia hadapi dan lihat. Awan mencoba sederhanakan dari pelajaran yang dia hadapin di masa mudanya.', 'Marchella Febritrisia Putri, yang lebih dikenal sebagai Marchella FP (lahir di Jakarta, 16 Februari 1990 umur 31 tahun) adalah penulis buku berkebangsaan Indonesia.', 5, 'terlaris', 93750, 'nantikitacerita.jpg'),
('9786027870413', 'Dilan : Dia Adalah Dilanku Tahun 1990', 'Pidi Baiq', 'Novel', 'Romance', '“Milea, kamu cantik, tapi aku belum mencintaimu. Enggak tahu kalau sore.Tunggu aja. ”(Dilan 1990) “Milea, jangan pernah bilang ke aku ada yang menyakitimu, nanti, besoknya, orang itu akan hilang.” (Dilan 1990) “Cinta sejati adalah kenyamanan, kepercayaan, dan dukungan. Kalau kamu tidak setuju, aku tidak peduli.” (Milea 1990)', 'Pidi Baiq (lahir di Bandung, Jawa Barat 8 Agustus 1972) adalah seniman multitalenta asal Indonesia. Dia adalah penulis novel dan buku, dosen, ilustrator, komikus, musisi dan pencipta lagu. Namanya mulai dikenal melalui grup band The Panas Dalam yang didirikan tahun 1995. Pidi Baiq semakin dikenal para pecinta karya sastra khususnya bergenre humor melalui karyanya berjudul Dilan: Dia adalah Dilanku tahun 1990 terbit tahun 2014, Dilan Bagian Kedua: Dia adalah Dilanku Tahun 1991 terbit tahun 2015 dan Milea: Suara dari Dilan terbit tahun 2016.', 4, 'terpopuler', 40000, 'dilan.jpg'),
('9786230023729', 'One Piece 95', 'Eiichiro Oda', 'Komik', 'Manga', '“PETUALANGAN ODEN” Aliansi terburuk tercipta!! Sementara Kaido membentuk aliansi dengan monster itu, kelompok Luffy berhasil mengumpulkan kawan-kawan dan serbuan ke Onigashima pun sudah di depan mata. Tapi, di balik layar, situasi dunia mulai terguncang drastis. Simak kisah petualangan di lautan, One Piece!!', 'Eiichiro Oda adalah seorang mangaka kelahiran 1 Januari 1974 di prefektur Kumamoto, Jepang. Ia sudah mulai menjadi mangaka sejak 17 Tahun. Saat itu karyanya yang berjudul WANTED medapatkan banyak penghargaan. Karya lain Eiichiro Oda yang populer sejak tahun 1997 dan menjadi Manga no 1 di dunia sampai sekarang adalah One Piece.', 5, 'baru', 28000, 'one piece.jpg'),
('9786239554507', 'Pulang', 'Tere Liye', 'Novel', 'Romance', 'Aku tahu sekarang, lebih banyak luka di hati bapakku dibanding di tubuhnya. Juga mamakku, lebih banyak tangis di hati Mamak dibanding di matanya. Sebuah kisah tentang perjalanan pulang, melalui pertarungan demi pertarungan, untuk memeluk erat semua kebencian dan rasa sakit.', 'Tere Liye (lahir di Lahat, Indonesia, 21 Mei 1979), dikenal sebagai penulis novel. Beberapa karyanya yang pernah diangkat ke layar kaca yaitu Hafalan Shalat Delisa dan Moga Bunda Disayang Allah. Meskipun dia bisa meraih keberhasilan dalam dunia literasi Indonesia, kegiatan menulis cerita sekedar menjadi hobi karena sehari-hari ia masih bekerja kantoran sebagai akuntan.', 4, 'terpopuler', 75650, 'pulang.jpg'),
('9789792201963', 'Ronggeng Dukuh Paruk', 'Ahmad Tohari', 'Novel', 'Dewasa', 'Semangat Dukuh Paruk kembali menggeliat sejak Srintil dinobatkan menjadi ronggeng baru, menggantikan ronggeng terakhir yang mati dua belas tahun yang lalu. Bagi pedukuhan yang kecil, miskin, terpencil, dan bersahaja itu, ronggeng adalah perlambang. Tanpanya, dukuh itu merasa kehilangan jati diri.', 'Ahmad Tohari merupakan seorang penulis kelahiran Banyumas yang telah banyak menerbitkan buku novel dan kumpulan cerpen. Sebut saja trilogi Ronggeng Dukuh Paruk, Kubah, Di Kaki Bukit Cibalak, Senyum Karyamin, dan masih banyak lagi yang lainnya. Salah satu karya Ahmad Tohari yang menjadi masterpiece adalah novel Ronggeng Dukuh Paruk. Kisah mengenai penari tayuban saat masa pergolakan komunis tersebut sudah diterjemahkan ke dalam berbagai bahasa, yaitu Bahasa Inggris, Jepang, Bahasa Belanda, dan Jerman. Selain itu, novel Ronggeng Dukuh Paruk juga diadaptasi ke dalam sebuah film berjudul Sang Penari yang disutradarai oleh Ifa Isfansyah pada tahun 2011. Dalam ajang Festival Film Indonesia 2011, Sang Penari bahkan memenangkan 4 piala citra. Ahmad Tohari sendiri tak luput dari berbagai penghargaan yang didapatkannya, seperti The Fellow of The University of Iowa dan SEA Write Award.', 4, 'terlaris', 89000, 'ronggengdukuh.jpg'),
('9789792248616', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Sastra', 'Novel', 'Seumur hidupnya Alif tidak pernah menginjak tanah di luar ranah Minangkabau. Masa kecilnya dilalui dengan berburu durian runtuh di rimba Bukit Maninjau. Tiba-tiba dia harus melintas punngung Sumatra menuju sebuah desa di pelosok Jawa Timur. Ibunya ingin dia menjadi Buya Hamika walau Alif ingin menjadi Habibie. Dengan setengah hati dia mengikuti perintah ibunya: belajar di pondok.', 'Ahmad Fuadi adalah novelis, pekerja sosial dan mantan wartawan dari Indonesia. Novel pertamanya adalah novel Negeri 5 Menara yang merupakan buku pertama dari trilogi novelnya. Karya fiksinya dinilai dapat menumbuhkan semangat untuk berprestasi.', 4, 'terlaris', 78400, 'negeri5menara.jpg'),
('9789792274646', 'Smart Traders Not Gamblers', 'Ellen May', 'Bisnis & Ekonomi', 'Investasi', '“Saya sudah membaca ratusan buku trading, dan buku ini adalah salah satu yang terbaik dan sangat saya rekomendasikan. Penulisnya membuat konsep psikologi trading menjadi sederhana dan pembahasan ide-ide baru serta pendekatan yang dipaparkannya dapat menjadi terobosan bagi Anda untuk menjadi seorang GREAT TRADER!” Soeratnab Doerachman (Eyang Ratman) Trader dan investor profesional Founder mailing list junior-Trader U-C/ub)', 'Ellen May lahir di Surakarta pada 20 mei 1983. Lulusan teknik informatika Universitas Bina Nusantara. Memulai investasinya dari investasi reksadana yang disarankan oleh suaminya. Ellen mulia tertarik dengan saham-saham yang ada di reksdana dan mendalami ilmunya hingga Ellen membuka akun saham sendir', 4, 'terpopuler', 78400, 'smarttraders.jpg'),
('9789797945862', 'Tapak Jejak', 'Fiersa Besari', 'Novel', 'Fiksi & Sastra', 'Bulan April, tahun 2013, berawal dengan niat dan tujuan yang berbeda, tiga pengelana memulai sebuah perjalanan menyusuri daerah-daerah di Indonesia. Meski akhirnya teman seperjalanan satu per satu memilih arah pulang, langkah yang sudah dijejakkan harus diteruskan.Tapak Jejak akan melanjutkan perjalanan Arah Langkah, mengunjungi daerah-daerah di wilayah timur Indonesia, menelusuri keindahan alam, budaya, dan tradisi, menembus dinding kegelisahan akan makna keluarga dan rumah. Namun, satu hal yang tidak akan pernah berubah bahwa sejauh apa pun kaki melangkah, hati kita akan selalu menemukan arah pulang menuju satu tempat yang paling tepat: rumah.', 'Biasa disapa “Bung”, seorang lelaki beruntung kelahiran Bandung, 3 Maret. Mengawali karier sebagai musisi sebelum akhirnya jatuh cinta pada dunia tulis-menulis. Selain menulis, Bung juga aktif berkegiatan di alam terbuka. Berkelana menyusuri Indonesia—dan melihat realitas negeri ini—membuat Bung gemar menyisipkan pesan humanism dan sosial dalam karya-karyanya yang bertema cinta dan kehidupan.', 4, 'baru', 93500, 'tapakjejak.jpg'),
('9789799731234', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Sastra', 'Novel', 'Roman Tetralogi Buru mengambil latar belakang dan cikal bakal nation Indonesia di awal abad ke-20. Dengan membacanya waktu kita dibalikkan sedemikian rupa dan hidup di era membibitnya pergerakan nasional mula-mula, juga pertautan rasa, kegamangan jiwa, percintaan, dan pertarungan kekuatan anonim para srikandi yang mengawal penyemaian bangunan nasional yang kemudian kelak melahirkan Indonesia modern.', 'Pramoedya Ananta Toer atau yang lebih akrab disapa Pram adalah salah satu sastrawan besar yang pernah dimiliki oleh Indonesia. Putra sulung dari seorang kepala sekolah Institut Budi Oetomo ini telah menghasilkan lebih dari 50 karya dan diterjemahkan dalam 41 bahasa asing.', 4, 'terpopuler', 112200, 'bumimanusia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Agama & Filsafat'),
(2, 'Buku Anak'),
(3, 'Ensiklopedia'),
(4, 'Fiksi dan Literatur'),
(5, 'Hobby & Teknologi Tepat Guna'),
(6, 'Kesehatan'),
(7, 'Komik'),
(8, 'Lifestyle'),
(9, 'Motivasi & Bisnis'),
(10, 'Novel'),
(11, 'Perguruan Tinggi'),
(12, 'Sosial, Politik, Budaya, Sejarah'),
(13, 'Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(2) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `page` int(4) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `weight` int(4) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `isbn`, `page`, `dimension`, `weight`, `publisher`, `country`) VALUES
(1, '9786230023729', 208, '11 x 17 cm', 200, 'Elex Media Komputindo', 'Indonesia'),
(2, '9786020637587', 130, '14 x 21 cm', 300, 'Gramedia Pustaka Utama', 'Indonesia'),
(3, '9786020639543', 375, '14 x 21 cm', 400, 'Gramedia Pustaka Utama', 'Indonesia'),
(4, '9786022203278', 208, '14 x 21 cm', 200, 'Bukune', 'Indonesia'),
(5, '9789797945862', 312, '14 x 21 cm', 300, 'Media Kita', 'Indonesia'),
(6, '9789792274646', 242, '16 x 23 cm', 500, 'Gramedia Pustaka Utama', 'Indonesia'),
(7, '9786020383637', 336, '22 x 27 cm', 800, 'Gramedia Pustaka Utama', 'Indonesia'),
(8, '9786027870413', 343, '14 x 21 cm', 400, 'Pastel Books!', 'Indonesia'),
(9, '9786239554507', 404, '13 x 18 cm', 400, 'Sabak Grip Nusantara', 'Indonesia'),
(10, '9789799731234', 538, '14 x 21 cm', 400, 'Lentera Dipantara', 'Indonesia'),
(11, '9786024248215', 200, '13 x 18 cm', 200, 'Kepustakaan Populer Gramedia', 'Indonesia'),
(12, '9786022915249', 262, '14 x 21 cm', 300, 'Bentang Pustaka', 'Indonesia'),
(13, '9789792201963', 412, '14 x 21 cm', 300, 'Gramedia Pustaka Utama', 'Indonesia'),
(14, '9786020332444', 134, '14 x 21 cm', 300, 'Gramedia Pustaka Utama', 'Indonesia'),
(15, '9789792248616', 224, '14 x 21 cm', 200, 'Gramedia Pustaka Utama', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'vito', 'vito', 'User'),
(3, 'revyn', 'revyn', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
