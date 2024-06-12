-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 10:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `agerating` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `storyline` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `img`, `title`, `agerating`, `year`, `resolution`, `length`, `storyline`, `rating`, `trailer`) VALUES
(1, 'movie-1.png', 'Challengers', 'R (16+)', '2024', '4K', '2h 11m', 'Tashi, a tennis player turned coach, has transformed her husband from a mediocre player into a world-famous grand slam champion. To jolt him out of his recent losing streak, she makes him play a challenger event -- close to the lowest level of tournament ', '7.3', 'https://www.youtube.com/embed/VobTTbg-te0'),
(2, 'movie-2.png', 'The First Omen', 'R (16+)', '2024', 'HD', '1h 57m', 'A woman starts to question her own faith when she uncovers a terrifying conspiracy to bring about the birth of evil incarnate in Rome.', '6.5', 'https://www.youtube.com/embed/lmN1Op8ygno'),
(3, 'movie-3.png', 'Dune: Part Two', 'PG-13', '2024', '4K', '2h 46m', 'Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the universe, he must prevent a terrible future only he can foresee.', '8.6', 'https://www.youtube.com/embed/U2Qp5pL3ovA'),
(4, 'movie-4.png', 'Kingdom of the Planet of the Apes', 'PG-13', '2024', '4K', '2h 25m', 'Many years after the reign of Caesar, a young ape goes on a journey that will lead him to question everything he\'s been taught about the past and make choices that will define a future for apes and humans alike.', '7.2', 'https://www.youtube.com/embed/Kdr5oedn7q8'),
(5, 'movie-5.png', 'The Fall Guy', 'PG-13', '2024', 'HD', '2h 5m', 'After leaving the business one year earlier, battle-scarred stuntman Colt Seavers springs back into action when the star of a big studio movie suddenly disappears. As the mystery surrounding the missing actor deepens, Colt soon finds himself ensnared in a', '7.0', 'https://www.youtube.com/embed/EySdVK0NK1Y'),
(6, 'movie-6.png', 'Civil War', 'R (16+)', '2024', 'HD', '1h 49m', 'In a dystopian future America, a team of military-embedded journalists races against time to reach Washington, D.C., before rebel factions descend upon the White House.', '7.2', 'https://www.youtube.com/embed/c2G18nIVpNE'),
(7, 'movie-7.png', 'Atlas', 'PG-13', '2024', 'HD', '2h', 'A brilliant data analyst with a deep distrust of AI finds it may be her only hope when a mission to capture a renegade robot goes awry.', '5.6', 'https://www.youtube.com/embed/Jokpt_LJpbw'),
(8, 'movie-8.png', 'Furiosa: A Mad Max Saga', 'R (16+)', '2024', '4K', '2h 28m', 'Snatched from the Green Place of Many Mothers, young Furiosa falls into the hands of a great biker horde led by the warlord Dementus. Sweeping through the Wasteland, they come across the Citadel, presided over by the Immortan Joe. As the two tyrants fight', '7.8', 'https://www.youtube.com/embed/FVswuip0-co'),
(9, 'series-1.png', 'Shogun', 'R (16+)', '2024', '4K', '1h', 'Set in Japan in the year 1600, Lord Yoshii Toranaga is fighting for his life as his enemies on the Council of Regents unite against him, when a mysterious European ship is found marooned in a nearby fishing village.', '8.7', 'https://www.youtube.com/embed/HIs9x49DK7I'),
(10, 'series-2.png', '3 Body Problem', 'R (15+)', '2024', '4K', '1h', 'A fateful decision in 1960s China echoes across space and time to a group of scientists in the present, forcing them to face humanity\'s greatest threat.', '7.5', 'https://www.youtube.com/embed/mogSbMD6EcY'),
(11, 'series-3.png', 'Fallout', 'R (16+)', '2024', 'HD', '1h', 'In a future, post-apocalyptic Los Angeles brought about by nuclear decimation, citizens must live in underground bunkers to protect themselves from radiation, mutants and bandits.', '8.4', 'https://www.youtube.com/embed/V-mugKDQDlg'),
(12, 'series-4.png', 'Mr. & Mrs. Smith', 'R (15+)', '2024', 'HD', '45m', 'John and Jane Smith become secret agents for a mysterious organisation. Their work puts both their skills as spies and their relationship to the test. The two have to deal with a world full of dangers.', '7.0', 'https://www.youtube.com/embed/AsaMWxppznk'),
(13, 'upcoming-1.png', 'A Quiet Place: Day One', 'PG-13', '2024', '???', '1h 39m', 'A Quiet Place: Day One is an upcoming American apocalyptic horror film written and directed by Michael Sarnoski, based on a story he conceived with John Krasinski. It serves as a spin-off prequel and the third installment in the A Quiet Place film series.', '???', 'https://www.youtube.com/embed/gjx-iHGXk9Q'),
(14, 'upcoming-2.png', 'The Watchers', 'PG-13', '2024', '???', '1h 42m', 'A 28-year-old artist gets stranded in an expansive, untouched forest in western Ireland. Finding shelter, she unknowingly becomes trapped alongside three strangers who are stalked by mysterious creatures every night.', '5.7', 'https://www.youtube.com/embed/dYo91Fq9tKY'),
(15, 'upcoming-3.png', 'Borderlands', 'R (16+)', '2024', '???', '1h 42m', 'Returning to her home planet, an infamous outlaw forms an unexpected alliance with a team of unlikely heroes. Together, they battle alien monsters and dangerous bandits to find a missing girl who holds the key to unimaginable power.', '???', 'https://www.youtube.com/embed/lU_NKNZljoQ'),
(16, 'upcoming-4.png', 'The Lord of the Rings: The War of the Rohirrim', 'R (16+)', '2024', '???', '2h 10m', 'The Lord of the Rings: The War of the Rohirrim is an upcoming anime fantasy film directed by Kenji Kamiyama from a screenplay by Phoebe Gittins and Arty Papageorgiou, based on the novel The Lord of the Rings by J. R. R. Tolkien.', '???', 'https://www.youtube.com/embed/O31sHHTzp6g'),
(17, 'upcoming-5.png', 'Gladiator 2', 'PG-13', '2024', '???', '???', 'Follows Lucius, the son of Maximus\'s love Lucilla, after Maximus\'s death.', '???', 'https://www.youtube.com/embed/3_LbFzJiETc'),
(18, 'upcoming-6.png', 'MaXXXine', 'R (16+)', '2024', '???', '1h 43m', 'In 1980s Hollywood, adult film star and aspiring actress Maxine Minx finally gets her big break. However, as a mysterious killer stalks the starlets of Los Angeles, a trail of blood threatens to reveal her sinister past.', '???', 'https://www.youtube.com/embed/y0uS3t6nFgY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
