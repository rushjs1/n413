-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 01, 2020 at 04:21 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ampjam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `item`, `description`, `image`) VALUES
(1, 'Tyrannosaurus Rex', 'Tyrannosaurus, meaning \"tyrant lizard\", from the Ancient Greek tyrannos, \"tyrant\", and sauros, \"lizard\" is a genus of coelurosaurian theropod dinosaur. It also had a tremendous bite force, the strongest of any Dinosaur and living terrestrial animal. Its bite force reached up to 12,800 pounds (roughly 5805 Kilograms).', 't_rex.jpg'),
(2, 'Spinosaurus', 'Spinosaurus is a genus of theropod dinosaur that lived in what now is North Africa, during the lower Albian to lower Cenomanian stages of the Cretaceous period, about 112 to 97 million years ago.', 'spinosaurus.jpg'),
(3, 'Velociraptor', 'Velociraptor is a genus of dromaeosaurid theropod dinosaur that lived approximately 75 to 71 million years ago during the later part of the Cretaceous Period.', 'velociraptor.jpg'),
(4, 'Triceratops', 'Triceratops is a genus of herbivorous ceratopsid dinosaur that first appeared during the late Maastrichtian stage of the late Cretaceous period, about 68 million years ago in what is now North America.', 'triceratops.jpg'),
(5, 'Stegosaurus', 'Stegosaurus is a type of armored dinosaur. Their fossil bones have been found in rocks dated to the Late Jurassic period, between 155 and 150 million years ago, in the western United States and Portugal.', 'stegasaurus.jpg'),
(6, 'Parasaurolophus', 'Parasaurolophus is a genus of ornithopod dinosaur that lived in what is now North America during the Late Cretaceous Period, about 76.5-74.5 million years ago.', 'parasaurolophus.jpg'),
(7, 'Ankylosaurus', 'Ankylosaurus is a genus of armored dinosaur. Fossils of Ankylosaurus have been found in geological formations dating to the very end of the Cretaceous Period, between about 68-66 million years ago, in western North America, making it among the last of the non-avian dinosaurs.', 'ankylosaurus.jpg'),
(8, 'Brachiosaurus', 'Brachiosaurus is a genus of sauropod dinosaur that lived in North America during the Late Jurassic, about 154-153 million years ago.', 'brachiosaurus.jpg'),
(9, 'Carcharodontosaurus', 'Carcharodontosaurus is a genus of carnivorous carcharodontosaurid dinosaurs that existed between 100 and 94 million years ago, during the Cenomanian stages of the mid-Cretaceous Period.', 'carcharodontosaurus.jpg'),
(10, 'Allosaurus', 'Allosaurus is a genus of large theropod dinosaur that lived 155 to 150 million years ago during the late Jurassic period.', 'allosaurus.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
