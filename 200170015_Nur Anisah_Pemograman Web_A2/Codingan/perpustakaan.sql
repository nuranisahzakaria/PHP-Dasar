-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 06:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(350) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `harga` int(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `gambar`, `penulis`, `penerbit`, `harga`, `deskripsi`) VALUES
(2, 'Filosofi Teras', 'image2.jpg', 'Henry Manampiring', 'Gramedia Pustaka Utama', 98000, 'Henry Manampiring, seorang praktisi periklanan & komunikasi, menjelaskan mengenai filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif serta membentuk mental yang tangguh dalam menghadapi masalah hidup.'),
(3, 'Insecurity is My Middle Name', 'image3.jpg', 'Alvi Syahrin', 'Gramedia Pustaka Utama', 93000, 'Setiap orang pastinya pernah mengalami perasaan insecure. Jadi buku ini merupakan buku self improvement sekaligus self healing yang bermanfaat bagi kamu yang mungkin saat ini sedang merasa insecure.'),
(4, 'You Do You: Discovering Life through Experiments & Self-Awareness', 'image4.jpg', 'Fellexandro Ruby', 'Gramedia Pustaka Utama', 128000, 'Buku You Do You lebih membahas tentang quarter life crisis yang terkadang akan terasa menakutkan bagi sebagian orang. Tetapi dengan adanya ilustrasi dan bahasa yang mudah dimengerti, buku satu ini adalah pilihan yang buat kamu yang sering merasa bosan saat membaca buku.'),
(5, 'Berani Tidak Disukai', 'image5.jpg', 'Ichiro Kisimi & Fumitake Koga', 'Gramedia Pustaka Utama', 98000, 'Buku ini memaparkan ajaran dari Alfred Adler mengenai bagaimana seharusnya manusia menjalani hidupnya dan menemukan sebuah kebahagiaan. Buku ini juga mengangkat tema untuk mencintai diri sendiri agar mendapatkan kebahagiaan. Karena terkadang kita terlalu fokus pada kehidupan orang lain yang akhirnya membuat kita tidak mencintai diri sendiri.'),
(6, 'Atomic Habits', 'image1.jpg', 'James Clear', 'Gramedia Pustaka Utama', 10300, 'Pada buku ini, James Clear, seorang pakar kelas dunia ingin menjelaskan bahwa kebiasaan kecil yang biasa kita lakukan bisa menjadi hal yang membawa pengaruh besar pada kehidupan dan keberhasilan kamu nantinya.'),
(9, 'Tak Apa-Apa Tak Sempurna', 'image7.jpg', 'Brene Brown', 'Gramedia Pustaka Utama', 76000, 'Tidak perlu memikirkan kata orang lain, pada buku ini Dokter Brown akan membantu kamu belajar menerima diri apa adanya dan tidak perlu cemas akan apa kata orang lain tentang diri kita. Jadi, kita bisa fokus lebih mencintai diri sendiri dan menumbuhkan keberanian untuk mendobrak kemampuan diri. Buku ini masuk dalam jajaran buku best seller di New York Times dan telah direkomendasikan oleh banyak orang di Goodreads, lho.'),
(10, 'Sebuah Seni untuk Bersikap Bodo Amat', 'image6.jpg', 'Mark Manson', 'Gramedia Pustaka Utama', 76000, 'Dibahas dengan bahasa yang sederhana, isi dari buku ini banyak menceritakan kisah nyata sang penulis yang hidupnya sering diterpa oleh badai. Walau demikian, Mark Manson tak berhenti dan justru semakin kuat dalam meraih cita-citanya.'),
(11, 'Esok Lebih Baik', 'image8.JPG', 'Dr. Abdullah Al-Maghluts', 'Pustaka Alvabet', 63000, 'Buku ini ditulis oleh seorang jurnalis cum motivator Timur Tengah yang sangat piawai membangun kepercayaan diri dan memperkukuh keyakinan kita untuk mengatasi masalah dan tantangan apa pun yang menghambat kemajuan dan kesuksesan. Materinya sangat praktis dan tepat serta mudah dilakukan siapa saja. Karena, didasarkan pada pengalaman pribadi, dan hasil-hasil penelitian ilmiah para ahli psikologi mutakhir.'),
(12, 'The Lessons of Life', 'image9.jpg', 'Chairawan Nusjirwan', 'Gramedia Pustaka Utama', 125000, 'Pengalaman hidup dan perjalanan karier membuta Chairawan Nusjirwan merenungkan arti kehidupan tentang pentingnya memelihara dan menggapai impian, harapan, dan cita-cita. Semuannya ditulis berdasrkan perjuangannnya yang tegar menjalani kehidupan sebagai tentara yang mengemban banyak operasi militer, yang tentunya memiliki tanggung jawab yang besar dan siap menghadapi apapun risiko jabatan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
