-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2015 at 07:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esports`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `gameID` int(11) NOT NULL AUTO_INCREMENT,
  `gameCertificate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gameName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gameDeveloper` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `gameDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `gameImage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gameIcon` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `platformID` int(11) NOT NULL DEFAULT '1',
  `metacriticScore` int(11) NOT NULL,
  `releaseDate` date NOT NULL,
  `gameSummary` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `twitterID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `twitterURL` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gameID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameID`, `gameCertificate`, `gameName`, `gameDeveloper`, `gameDescription`, `gameImage`, `gameIcon`, `platformID`, `metacriticScore`, `releaseDate`, `gameSummary`, `twitterID`, `twitterURL`) VALUES
(1, 'Teen', 'League of Legends', 'Riot Games', 'League of Legends (LoL) is a multiplayer online battle arena?video game developed and published by?Riot Games, the game was released on October 27, 2009. In League of Legends, players assume the role of a character, called a "champion", with unique abilities, battling with a team against other player or computer-controlled champions. In the most popular game modes, each team''s goal is to destroy the opposing team''s nexus, a building which lies at the heart of a base protected by defensive structures. Each League of Legends game is discrete, with all champions starting off each game fairly weak and progressing by accumulating gold and experience over the course of the game.', 'lol_cover.jpg', 'lol_icon.png', 1, 78, '2008-10-27', 'League of Legends, or ''LoL'' as it is more commonly known - is an online 5v5 battle arena game where 2 teams fight it out for victory on Summoner''s Rift.', '550856862250598401', 'https://twitter.com/LeagueOfLegends'),
(2, 'Teen', 'DotA 2', 'Valve Corporation', 'Dota 2 is a 2013 multiplayer online battle arena video game and the stand-alone sequel to the Defense of the Ancients (DotA) Warcraft III: Reign of Chaos and Warcraft III: The Frozen Throne mod. Developed by Valve Corporation. Dota 2 is played in discrete matches involving two teams of five players, each of which occupies a stronghold at a corner of the map. Each stronghold contains a building called the "Ancient", which the opposite team must destroy to win the match. Each player controls a "Hero" character and focuses on leveling up, collecting gold, acquiring items and fighting against the other team to achieve victory.', 'dota_cover.png', 'dota2_icon.png', 1, 90, '2013-07-09', 'DotA 2, by Valve Software is an online 5v5 battle arena game where 2 teams fight it out to defend their own ancient.', '550857071261126657', 'https://twitter.com/DOTA2'),
(3, 'Mature', 'CS: Global Offensive', 'Valve Corporation', 'Counter-Strike: Global Offensive (abbreviated as CS:GO) is an online tactical and first-person shooter developed by Valve Corporation. It is the fourth game in the main Counter-Strike franchise and was released on August 21, 2012. Global Offensive is an objective-based multiplayer first-person shooter. Each player joins either the Terrorist or Counter-Terrorist team and attempts to complete objectives or eliminate the enemy team. The game operates in short rounds that end when all players on one side are dead or a team''s objective is completed. For most game modes, once a player dies, they must wait until the round ends to respawn. Players purchase weapons and equipment at the beginning of every round with money awarded based on their performance.', 'csgo_cover.jpg', 'csgo_icon.png', 1, 83, '2012-08-21', 'Counter-Strike: Global Offensive (CS:GO) is an online tactical and first-person shooter developed by Valve Corporation.', '550898913096790016', 'https://twitter.com/csgo_dev'),
(4, 'Teen', 'Hearthstone', 'Blizzard Entertainment', 'Hearthstone: Heroes of Warcraft is a free-to-play digital collectible card game (CCG) developed by Blizzard Entertainment. Hearthstone is a collectible card game that revolves around turn-based matches between two opponents, operated through Blizzard''s Battle.net. Players can choose from a number of game modes, with each offering a slightly different experience. Players start the game with a substantial collection of ''basic'' cards, but can gain rarer and more powerful cards through purchasing packs of additional cards, or as reward for competing in the Arena.', 'hs_cover.jpg', 'hs_icon.png', 1, 88, '2014-03-11', 'Hearthstone: Heroes of Warcraft is a free-to-play digital collectible card game (CCG) developed by Blizzard Entertainment.', '550853076807323649', 'https://twitter.com/PlayHearthstone'),
(5, 'Teen', 'Starcraft 2', 'Blizzard Entertainment', 'StarCraft II: Wings of Liberty is a military science fiction real-time strategy video game developed and released by Blizzard Entertainment and a sequel to the award-winning 1998 video game StarCraft. The game revolves around three species: the Terrans, human exiles from Earth; the Zerg, a super-species of assimilated life forms; and the Protoss, a technologically advanced species with vast mental powers. Wings of Liberty focuses on the Terrans, while the expansions Heart of the Swarm and Legacy of the Void will focus on the Zerg and Protoss, respectively. The game is set four years after the events of 1998''s StarCraft: Brood War, and follows the exploits of Jim Raynor as he leads an insurgent group against the autocratic Terran Dominion. The game includes both new and returning characters and locations from the original game.', 'sc_cover.jpg', 'sc2_icon.png', 1, 93, '2010-07-27', 'StarCraft II is a military science fiction real-time strategy game developed Blizzard Entertainment.', '551528668468875264', 'https://twitter.com/StarCraft'),
(6, 'Mature', 'CoD: Advanced Warfare', 'Sledgehammer Games', 'Call of Duty: Advanced Warfare is a 2014 first-person shooter video game developed by Sledgehammer Games and published by Activision. Advanced Warfare, like the other Call of Duty titles, is presented in a first-person shooter perspective. However, the game features several changes; unlike other installments, Advanced Warfare does not use a traditional heads-up display; instead, all information is relayed to the player via holographic projections from the weapon equipped. The general gun-play remains unchanged, apart from new mechanics; for example, certain guns will be able to recharge slowly. The player can also switch between different types of grenades. The game will also be the first in the Call of Duty series that will allow the player to choose differing types of conventional weaponry; for example, the game will feature regular conventional firearms, but the player can also choose to use Laser or Energy directed weaponry, both of which have differing attributes.', 'cod_cover.jpg', 'cod_icon.png', 2, 81, '2014-11-04', 'Call of Duty: Advanced Warfare is a 2014 first-person shooter video game developed by Sledgehammer Games and published by Activision.', '551528960119808000', 'https://twitter.com/CallofDuty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
