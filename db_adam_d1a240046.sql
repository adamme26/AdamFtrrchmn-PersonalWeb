-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2025 pada 09.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adam_d1a240046`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(2, 'Hai, aku Adam Faturrachman.\r\nMahasiswa aktif di Universitas Subang,\r\ndari Fakultas Ilmu Komputer,\r\nProgram Studi Sistem Informasi, semester 2.\r\n\r\nHalaman ini adalah karya pertamaku menggunakan PHP dan Tailwind CSS v4.0.\r\nMungkin belum sempurna, tapi setiap baris kodenya kutulis dengan semangat belajar.\r\n\r\n\"Jika hidup adalah rangkaian logika,\r\nmaka menulis kode adalah caraku memahami dunia,\r\ndan halaman ini—meski sederhana—menyimpan bagian kecil dari mimpiku.\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(2, 'Menemukan Inspirasi di Balik Setiap Perjalanan', 'Perjalanan bukan sekadar perpindahan dari satu tempat ke tempat lain. Lebih dari itu, setiap langkah yang kita tempuh membawa cerita, pelajaran, dan inspirasi yang mungkin tidak kita sadari saat itu juga. Ketika kita menjelajahi tempat baru—baik itu pegunungan yang sunyi, jalanan kota yang ramai, maupun desa kecil yang sederhana—kita diperkenalkan pada kehidupan yang berbeda dari keseharian kita. Dari perbedaan budaya, bahasa, hingga cara berpikir masyarakat setempat, semua itu memperkaya cara pandang kita terhadap dunia.\r\n\r\nSeringkali, inspirasi justru muncul dari hal-hal yang paling sederhana. Senyum tulus dari orang asing, aroma makanan khas yang asing namun menggoda, hingga suasana senja yang tenang di tempat yang belum pernah kita datangi sebelumnya, mampu menggerakkan hati dan menyalakan ide-ide baru. Dalam perjalanan, kita juga memiliki lebih banyak waktu untuk merenung, jauh dari rutinitas dan hiruk-pikuk pekerjaan. Inilah saat di mana kita bisa lebih dekat dengan diri sendiri, mengenali apa yang sebenarnya kita rasakan dan inginkan.\r\n\r\nTak jarang pula, tantangan yang kita hadapi selama perjalanan—seperti tersesat, cuaca yang tidak bersahabat, atau kondisi yang serba terbatas—membentuk kita menjadi pribadi yang lebih tangguh dan bijak. Justru dari pengalaman-pengalaman tersebut, kita belajar beradaptasi, berpikir kreatif, dan menemukan solusi yang tak terpikirkan sebelumnya. Sepulang dari perjalanan, kenangan dan pelajaran tersebut sering kali menjadi bahan bakar untuk ide-ide baru, tulisan, karya seni, bahkan perubahan arah hidup.\r\n\r\nPada akhirnya, setiap perjalanan menyimpan potensi untuk menjadi sumber inspirasi yang luar biasa. Ia mengajarkan kita untuk lebih terbuka, lebih peka, dan lebih bersyukur. Maka dari itu, setiap kali kita berkesempatan untuk menjelajah, jangan hanya fokus pada tujuan, tapi rasakan dan nikmati setiap prosesnya. Karena inspirasi sejati seringkali tersembunyi di balik langkah-langkah kecil yang kita ambil di sepanjang jalan.'),
(3, 'Belajar Menerima: Kunci Hidup yang Lebih Tenang dan Bahagia', 'Dalam hidup, tidak semua hal berjalan sesuai dengan harapan. Ada kalanya kita menghadapi kegagalan, kehilangan, atau kenyataan yang jauh dari ekspektasi. Saat itulah kita diuji, bukan hanya oleh situasi, tapi juga oleh bagaimana kita menyikapinya. Salah satu sikap paling penting yang bisa membawa kita pada ketenangan dan kebahagiaan sejati adalah menerima.\r\n\r\nBelajar menerima bukan berarti pasrah tanpa usaha, melainkan menyadari bahwa ada hal-hal yang berada di luar kendali kita. Kita tetap bisa berjuang dan berusaha semaksimal mungkin, namun hasil akhirnya sering kali tidak sepenuhnya bisa kita atur. Saat kita terus memaksa dunia untuk berjalan sesuai keinginan kita, maka kita akan terus berada dalam kecemasan dan rasa kecewa yang tak ada habisnya.\r\n\r\nMenerima berarti berdamai dengan kenyataan. Saat seseorang kehilangan pekerjaan, misalnya, rasa marah dan kecewa tentu wajar. Tapi menerima keadaan itu membuat kita bisa segera bangkit dan mencari peluang baru, bukan terjebak dalam penyesalan. Ketika hubungan yang kita jaga berakhir, menerima membuat kita mampu melihat bahwa mungkin itu adalah bagian dari proses tumbuh, bukan akhir dari segalanya.\r\n\r\nLebih dari itu, penerimaan mengajarkan kita untuk tidak terlalu keras pada diri sendiri. Kita tidak selalu harus sempurna, tidak harus selalu kuat. Kadang, mengakui bahwa kita lelah dan butuh jeda justru membuat kita lebih manusiawi. Di sinilah letak kekuatan dalam menerima: ia tidak melemahkan, justru menguatkan dari dalam.\r\n\r\nHidup yang tenang bukanlah hidup yang tanpa masalah, tetapi hidup yang dijalani dengan hati yang lapang. Dan kebahagiaan sejati tidak datang dari pencapaian yang terus dikejar, melainkan dari kemampuan kita untuk bersyukur dan menerima apa yang ada, sembari tetap berusaha menjadi lebih baik.\r\n\r\nBelajar menerima memang butuh proses. Tapi semakin kita berlatih, semakin kita sadar bahwa kedamaian itu bukan sesuatu yang kita temukan di luar, melainkan sesuatu yang tumbuh di dalam diri — saat kita memilih untuk menerima, bukan melawan.'),
(4, 'Arti Syukur dalam Keseharian', 'Dalam kehidupan yang serba cepat dan penuh tuntutan, kita sering kali lupa untuk berhenti sejenak dan menghargai hal-hal kecil yang sudah kita miliki. Padahal, syukur adalah salah satu kunci utama untuk menjalani hidup dengan lebih damai dan bahagia. Bersyukur tidak selalu tentang mendapatkan hal besar atau keberuntungan luar biasa. Justru, arti syukur yang paling mendalam terletak pada kesadaran kita akan nikmat-nikmat sederhana yang hadir setiap hari — udara yang kita hirup, tubuh yang sehat, makanan yang cukup, atau bahkan senyum dari orang terdekat.\r\n\r\nSaat kita membiasakan diri untuk bersyukur dalam keseharian, perspektif kita terhadap hidup pun berubah. Kita menjadi lebih fokus pada apa yang ada, bukan terus-menerus merasa kurang dengan apa yang belum dimiliki. Hal ini membuat hati terasa lebih ringan dan pikiran lebih jernih. Bahkan dalam situasi sulit, orang yang memiliki rasa syukur cenderung lebih kuat karena ia mampu melihat sisi baik dari setiap keadaan, sekecil apa pun itu.\r\n\r\nSyukur juga melatih kita untuk tidak membandingkan hidup kita dengan orang lain. Di era media sosial, godaan untuk merasa kurang karena melihat pencapaian orang lain sangatlah besar. Namun, ketika kita sadar bahwa setiap orang punya perjalanan masing-masing, kita akan lebih bisa menerima hidup kita dengan lapang dada. Rasa syukur menjadi benteng dari rasa iri dan kecewa yang tidak perlu.\r\n\r\nMenumbuhkan rasa syukur bisa dimulai dari hal sederhana, seperti menuliskan tiga hal yang kita syukuri setiap hari, atau sekadar meluangkan waktu untuk merenung di penghujung hari. Meskipun terlihat kecil, kebiasaan ini perlahan membentuk pola pikir yang lebih positif dan memperkuat kesehatan mental.\r\n\r\nPada akhirnya, syukur bukan hanya bentuk ucapan terima kasih, tapi juga cara pandang hidup. Ia mengajarkan kita untuk menghargai perjalanan, bukan hanya hasil akhir. Dalam kesibukan dan rutinitas yang padat, syukur mengingatkan kita bahwa hidup adalah anugerah — dan menyadarinya adalah langkah pertama menuju kebahagiaan yang sejati.'),
(5, 'Menemukan Makna dalam Kesendirian', 'Kesendirian sering kali dianggap sebagai sesuatu yang negatif, identik dengan rasa sepi atau kesepian. Namun, jika kita mampu melihatnya dari perspektif yang berbeda, kesendirian justru bisa menjadi momen berharga untuk menemukan makna dalam hidup. Saat sendiri, kita memiliki kesempatan untuk mendengarkan suara hati tanpa gangguan dari hiruk-pikuk dunia luar. Dalam keheningan itu, banyak orang menemukan inspirasi, kreativitas, dan kedamaian yang sulit didapat saat berada di tengah keramaian. Kesendirian mengajarkan kita untuk mengenal diri sendiri lebih dalam — menyadari kelebihan dan kekurangan, mengevaluasi perjalanan hidup, dan merencanakan langkah ke depan dengan lebih bijak. Selain itu, waktu sendiri juga memberi ruang untuk refleksi, penyembuhan emosional, dan penguatan mental. Dengan begitu, kesendirian bukanlah hukuman, melainkan hadiah yang memungkinkan kita tumbuh menjadi pribadi yang lebih kuat dan utuh. Jadi, bukannya dihindari, kesendirian sebaiknya dirangkul sebagai bagian penting dari kehidupan yang membawa makna dan keseimbangan.'),
(6, 'Hidup Sederhana, Bahagia Luar Biasa', 'Hidup sederhana seringkali disalahpahami sebagai hidup yang membosankan atau minim pencapaian, padahal sesungguhnya kesederhanaan dapat menjadi kunci kebahagiaan yang luar biasa. Ketika kita memilih untuk menjalani hidup dengan tidak berlebihan, fokus pada hal-hal yang benar-benar penting, dan mengurangi ketergantungan pada materi, kita memberi ruang bagi ketenangan dan rasa cukup dalam hati. Hidup sederhana mengajarkan kita untuk lebih bersyukur atas apa yang dimiliki, menikmati momen kecil seperti secangkir kopi di pagi hari atau waktu berkualitas bersama keluarga. Dengan cara ini, kita tidak terjebak dalam perlombaan tanpa akhir mengejar status atau kekayaan, melainkan mampu menemukan kebahagiaan sejati dalam hal-hal yang sederhana namun bermakna. Kesederhanaan juga membantu mengurangi stres dan tekanan hidup, karena kita belajar untuk menerima dan mensyukuri setiap keadaan. Pada akhirnya, hidup yang sederhana bukan berarti hidup yang kurang, melainkan hidup yang kaya akan makna, kedamaian, dan kebahagiaan yang hakiki.\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(1, 'INI SAYA , LAGI NONGKRONG+NGOPI+NONTON TIMNAS DI TENTANG KOPI SUBANG ', 'adamTK.jpg'),
(3, 'MELAKUKAN TUGAS PENELETIAN ( SYSTEM INVENTORY ) DARI IBU TAZKIA, INI DI INDOMARET CIBOGO KAB.SUBANG ', 'INDOMARET.jpg'),
(4, 'KUCINGNYA DIMAS!', 'KUCINGNYA DIMAS.jpg'),
(5, 'INI SEKOLAH DULU SAYA , SAYA MAMPIR KESINI UNTUK MELEPAS RASA RINDU PADA SEKOLAH INI...', 'BINTAR.jpg'),
(6, 'KUMPUL-KUMPUL + NGOPI', 'JABONG.jpg'),
(7, 'FUTSAL HIMASI CUP', 'HIMASICUP.jpg'),
(8, 'INI LAGIN NYURABI SAMA NGOPI DI ALUN-ALUN JALANCAGAK', 'CAGAK.jpg'),
(9, 'INI LAGI NGERJAIN TUGAS AKHIR DARI BAPAK BAGUS , DI TENTANG KOPI SUBANG', 'NGODING.jpg'),
(10, 'NONGKRONG BERSAMA SAHABAT-SAHABAT SEKOLAH SAYA DI TENTANG KOPI SUBANG', 'barudak.jpg'),
(11, 'INI LAGI NYOBAIN BAJU BENGKEL, BAGUS JUGA YA...', 'tbsm.jpg'),
(12, 'INI FOTO SAYA PAS HARI RAYA IDUL FITRI KEMARIN', 'Idul Fitri Kemarin.jpg'),
(13, 'INI SAYA LAGI GANTENG KAN? TENTU', 'di ma ade.jpg'),
(14, 'SAYA LAGI BERADA DI CAFFE DUKOPI DAYEUH KOLOT SAGALAHERANG ', 'DUKOPI.jpg'),
(15, 'INI MASIH DI CAFFE DUKOPI \" lagi foto-foto \"', 'DUDUK SANTAI.jpg'),
(16, 'INI SAYA DAN TEMAN TEMAN SAYA BERADA DI SARI ATER HOT SPRING ', 'rendem.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`Username`, `Password`) VALUES
('Dadam', 'Dadam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
