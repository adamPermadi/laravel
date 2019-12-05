-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Apr 2018 pada 10.03
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_b_2018`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `flora_dan_fauna`
--

DROP TABLE IF EXISTS `flora_dan_fauna`;
CREATE TABLE IF NOT EXISTS `flora_dan_fauna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_spesies` varchar(250) NOT NULL,
  `nama_lain` varchar(250) NOT NULL,
  `ciri_khas` varchar(600) NOT NULL,
  `penyebab_kepunahan` varchar(650) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `flora_dan_fauna`
--

INSERT INTO `flora_dan_fauna` (`id`, `jenis_spesies`, `nama_lain`, `ciri_khas`, `penyebab_kepunahan`, `gambar`) VALUES
(1, 'Macan Tutul Amur', 'Panthera pardus orientalis', 'Salah satu dari empat kucing besar memiliki bulu berwarna kuning kecoklatan dengan bintik-bintik berwarna hitam. Bintik hitam di kepalanya berukuran lebih kecil. Biasanya, bulu hitam Macan Kumbang ini sangat membantu dalam beradaptasi dengan habitat hutan yang lebat dan gelap.', 'Keberadaannya sulit dipastikan, baik kondisi maupun jumlahnya. Karena sejauh ini masih kurang literatur akurat terkait mereka (Macan Tutul Jawa)', 'is (9).jpg'),
(2, 'Badak Cula', 'Rhiniceros', 'Badak ini masuk ke genus yang sama juga dengan badak india serta mempunyai kulit bermosaik yang mana mirip baju baja. badak ini mempunyai panjang antara 3,1 sampai 3,2 m serta tinggi antara 1,4 sampai 1,7 m. badak ini lebih kecil dari pada badak india serta lebih dekat atau hampir sama besar tubuhnya dengan badak hitam. ukuran culanya umumnya kurang dari 20 cm, lebih kecil dari pada cula spesies badak yang lain.', 'untuk di ambil culanya, yang amat bernilai pada proses pengobatan tradisional tiongkok, dan harganya mencapai $30. 000 per kilogram di pasar gelap', 'is (10).jpg'),
(3, 'Penyu Belimbing', 'Dermochelys coriacea', 'Sejenis penyu raksasa dan satu-satunya jenis dari suku Dermochelyidae yang masih hidup. Penyu ini merupakan penyu terbesar di dunia dan merupakan reptil keempat terbesar di dunia setelah tiga jenis buaya. Penyu belimbing dikenal oleh beberapa masyarakat dengan sebutan penyu raksasa, kantong atau mabo', 'Pemburuan, pencurian telur, pencemaran pantai', 'is (11).jpg'),
(4, 'Elang Flores', 'Spizaetus floris', 'Mempunyai ukuran tubuh yang sedang, dengan tubuh dewasa berukuran sekitar 55 sentimeter. Bagian kepalanya berbulu putih dan terkadang mempunyai garis-garis berwarna coklat di mahkotanya.', 'Akibat perburuan, kebakaran hutan, dan penebangan pohon', 'is (12).jpg'),
(5, 'Bunga Bangkai', 'Rafflesia arnoldi', 'Memiliki bau khas yang sangat busuk sampai menyerupai bau bangkai', 'Habitat dan inang tempat tumbuhnya makin sulit didapat', 'is (8).jpg'),
(6, 'Bunga Anggrek Tebu', 'Grammatophyllum speciosum', 'Bunga anggrek tebu ini berwarna kuning kekuningan. Di percantik dengan bagian bagian bunga kombinasi bintik bintik aksen polkadot berwarna cokelat, merah, dan merah tua semu kehitaman. Bunga anggrek tebu di nilai unik dan kuat. Meskipun bunganya sudah di potong dari tangkai dan batangnya, ia tidak akan lau dan tetap hidup', 'Memiliki kandungan potensi untuk kecantikan, kesehatan, dan manfaat Iainnya', 'is (13).jpg'),
(7, 'Gelada', 'Genus Theropithecus', 'Gelada merupakan monyet yang tampak seperti baboon. Primata ini hanya bisa ditemukan di dataran tinggi Ethiopia.Kumpulan gelada sangatlah kompak. Jika salah satu anggota terancam, mereka segera menyerang secara membabi-buta dengan gigi tajam dan cakar mereka. Tak peduli itu manusia atau hewan lain yang lebih besar dan buas.', 'Pemburuan liar, kehilangan habitat', 'is (14).jpg'),
(8, 'Harimau Tasmania', 'Thylacinus cynocephalus', 'Jenis hewan karnivora, dapat tumbuh sampai panjang 9 kaki, mempunyai gigi tajam yang besar', 'Penampakan harimau membunuh ternak peliharaan sehingga keberadaan mereka dianggap hama dan terusu diburu oleh peternak', 'is (16).jpg'),
(9, 'Bunga Edelweiss Jawa ', 'Bunga Senduro', 'Sebagai salah satu bentuk ikon dari gunung, bunga edelweiss banyak digunakan sebagai banyak simbol dari kesetiaan', 'Banyak nya pendaki yang naik keatas gunung. Pendaki tersebut bukan hanya mendaki saja, juga menganggu habitat dari beberapa hewan dan tumbuhan yang ada digunung', 'is (17).jpg'),
(10, 'Bunga Cendana', 'Santalum album', 'Pohon cendana merupakan ciri khas dan lambang dari provinsi', 'Kayunya digunakan sebagai rempah-rempah, bahan dupa, aromaterapi, campuran parfum, serta sangkur keris (warangka)', 'is (1).jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
