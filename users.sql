-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 08:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezaw_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `profile_photo` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `password` int(250) NOT NULL,
  `is_admin` int(50) NOT NULL,
  `remember_me` varchar(250) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `profile_photo`, `password`, `is_admin`, `remember_me`) VALUES
(34, 'locklyboy', 'svsvsv@email.com', 'http://localhost/mp/Upload_File205477aa530727dbc3ddb9337122faf0.jpg', 147, 0, 'd784329325abf1b810fe640fd4ccc819'),
(35, 'nahal', 'nahal@gmail.com', 'http://localhost/mp/Upload_Fileb9122e4df3f5b347b334a1cf851c7890.jpg', 1234, 0, '55ba00096a0525657790222126df47ad'),
(36, 'reza', 'reaalizadeh3036@email.com', 'http://localhost/mp/Upload_Fileac4bc0177fb420f00625ac6b5edc0c9e.jpg', 12345, 0, '46e63a9bc6382eb3df9c40aefabec5ac'),
(37, 'tina', 'gsgsgsgsg@gmail.com', 'http://localhost/mp/Upload_File167014200120210306_191423.jpgjpg', 15985, 0, 'dd4659f38296109ebdc847342addf84d'),
(39, 'vali', 'Alizadeh@gmail.com', 'http://localhost/mp/Upload_File1670143379IMG_20210620_104227_313.jpgjpg', 15985, 0, '0c56795f15bb5912788bf5df126cd415'),
(40, 'reza12', 'svsvsv@email.com', 'http://localhost/mp/Upload_File167187409120210314_185835.jpgjpg', 15985, 0, '1250d0f3ac57a9c1950806492e0e3fda'),
(41, 'reza12', 'svsvsv@email.com', 'http://localhost/mp/Upload_File167187410820210314_185835.jpgjpg', 15985, 0, '1250d0f3ac57a9c1950806492e0e3fda'),
(42, 'reza12', 'svsvsv@email.com', 'http://localhost/mp/Upload_File167187411220210314_185835.jpgjpg', 15985, 0, '1250d0f3ac57a9c1950806492e0e3fda'),
(43, 'reza12', 'svsvsv@email.com', 'http://localhost/mp/Upload_File', 15985, 0, '1250d0f3ac57a9c1950806492e0e3fda'),
(44, 'reza12', 'svsvsv@email.com', 'http://localhost/mp/Upload_File', 15985, 0, '1250d0f3ac57a9c1950806492e0e3fda'),
(45, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_FileUpload_File/167187444920210326_185449.jpgjpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(46, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_FileUpload_File/167187449920210326_190045.jpgjpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(47, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_File167187476920210326_190045.jpgjpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(48, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_FileUpload_File/1671874916@Wallpaper_4K3D (10713).jpgjpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(49, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_File1671875040jpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(50, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_File1671875100@Wallpaper_4K3D (10713).jpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(51, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_File1671875121@Wallpaper_4K3D (10713).jpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(52, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_File1671875130@Wallpaper_4K3D (11092).jpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(53, 'reza125555', 'svsvsv@email.com', 'http://localhost/mp/Upload_File1671875557@Wallpaper_4K3D (11092).jpgjpg', 15985, 0, '1885433bead83bb4871e1046f9a820c5'),
(54, 'locklyboy', 'svsvsv@email.com', 'http://localhost/mp/Upload_File1671875608png', 15985, 0, 'd784329325abf1b810fe640fd4ccc819'),
(55, 'Rezaweh', 'nahal@gmail.com', 'http://localhost/mp/Upload_File1671875722wp11143928-blue-purple-car-wallpapers.jpg', 15985, 0, 'f5f37de43ea7baeb2a34f62ce303fd53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `is_admin` (`is_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
