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
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `gameID` int(11) NOT NULL,
  `newsHeadline` varchar(70) CHARACTER SET latin1 NOT NULL,
  `newsSummary` varchar(200) CHARACTER SET latin1 NOT NULL,
  `newsContent` text CHARACTER SET latin1 NOT NULL,
  `newsDate` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `newsImage` varchar(70) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`newsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `gameID`, `newsHeadline`, `newsSummary`, `newsContent`, `newsDate`, `newsImage`) VALUES
(1, 1, 'WHAT''S THE FUTURE OF TEAM CURSE?', 'Don''t worry, Team Curse fans. You''ll still be able to watch your League of Legends team play every LCS weekend.', 'Don''t worry, Team Curse fans. You''ll still be able to watch your League of Legends team play every LCS weekend.\r\n\r\nIn a recent announcement, Team Curse revealed that it will charge into the 2015 NA LCS season under a new name. More details will be revealed in early January 2015, but as there are a lot of questions surrounding the news, we spoke with a few members of the team to find out what this change means for them moving forward.\r\n\r\n"I know the players haven''t, and will not, have a hard time adjusting to the new brand," Team Curse owner Steven "Liquid122" Arhancet told Lolesports. Arhancet has been overseeing the team since Season 1, and has been responsible for the Curse organization''s esports presence since 2011.', '2015-01-04', 'lol_news1.jpg'),
(2, 2, 'The New Grand Champions - Newbee', 'They didn''t listen to the noise. The team that finished a lowly 7-8 in the group stage did what they do best - play great Dota. ', 'If you would have been forced to make a bet the day after the first round, you would have laid your money on ViCi Gaming. They dominated the first game. After, people were wondering if Newbee even would be able to squeak out a single victory.\n\nThen Newbee did what they did all tournament. \n\nThey didn''t listen to the noise. The team that finished a lowly 7-8 in the group stage did what they do best - play great Dota. ', '', 'dota_news1.jpg'),
(3, 3, 'Re-introducing Train', 'Train is back, available for all CS:GO players right now as part of the Operation Vanguard Map Group!', 'Train is a memorable and classic Counter-Strike map. We''re excited to begin a new chapter in the history of Train by releasing a new and upgraded version for Counter-Strike: Global Offensive. We''ve rebuilt the map from the ground up in order to improve both the visual appearance and competitive gameplay balance of this iconic location. \n\nOur primary goals were to improve the gameplay balance of the map while simultaneously upgrading the overall visual experience. This meant making more intuitive layout changes, then re-interpreting large and small-scale environment elements to improve judgement of space and distance. Check out the video to see a montage of iterative changes made during development. We''ve also outlined some in-depth explanations of these changes in more detail below. \n\nTrain is available now in Competitive Matchmaking and other game modes as a part of the Operation Vanguard map group. Help us improve the map by playing it and giving us your feedback!', '', 'csgo_news1.png'),
(4, 4, 'Hearthstone January 2015 Ranked Play Season', 'The tenth official Hearthstone Ranked Play Season is now live?and we?re unveiling a new card back you can add to your collection!', 'It?s time to put your faith in the light! This season, your divine purpose is to ascend the Ranked Play ladder to earn the Shadow-slaying Maraad card back! You can only earn this card back by playing Hearthstone during the month of January.\n\nThese card backs replace the art decorating the reverse side of your cards and are a great way to show off your Hearthstone accomplishments. Add the Maraad card back to your collection by hitting Rank 20 in Ranked Play mode. You?ll receive the Maraad card back at the end of January?s Ranked Play Season.', '2015-01-01', 'hs_news1.jpg'),
(5, 5, 'Happy New Year!', 'Happy New Year everyone!', 'Happy New Year everyone!\n\nWhether you''re looking back with fondness or forward with determination, there''s reason to celebrate the turn of the new year! From all of us here at Blizzard, we''re wishing that this year is a great one for you, and we are looking forward to a truly great year for StarCraft as well. No matter the reason you play StarCraft, thanks for being a part of this rather excellent community.', '2015-01-01', 'sc_news1.jpg'),
(6, 6, 'Advanced Warfare Havoc DLC Official Description Revealed\n\n', 'Sledgehammer Games went ahead and provided a teaser image earlier this week for the Havoc DLC, the first for Call of Duty: Advanced Warfare on PlayStation and Xbox consoles, plus the PC.', 'Sledgehammer Games went ahead and provided a teaser image earlier this week for the Havoc DLC, the first for Call of Duty: Advanced Warfare on PlayStation and Xbox consoles, plus the PC. Now we have an official description of the new multiplayer maps and the Exo Zombies mode thanks to a GameStop listing that hit Friday.\n\nThe four multiplayer maps in the Havoc DLC come with the usual variety of locations mixed in with different themes and map altering events. For example, players can ride a carousel on the ?Drift? map where they can perfectly watch an avalanche engulf the Rocky Mountain ski resort. Meanwhile, players on the ?Core? can activate decontamination drones to take out the enemy team.', '2014-12-30', 'cod_news2.jpg'),
(7, 1, 'GET REK?D - THE VOID BURROWER', 'Rek?Sai Rushed onto the Rift equipped with unique mechanics that could make her a boon to the right team - but require a unique playstyle.', 'Jungling is about pressure. Take away the jungler and you simply have laners fighting for cs. Most junglers apply pressure when they leave the jungle, by applying pressure on opposing laners. As such, what makes a good jungler is typically gap-closing ability and CC for strong ganks.Rek?Sai is completely unique as a jungler, in that while she is built more like a standard jungler (complete with gap-closer and CC), she has the capacity of a control jungler built straight into her kit.', '2014-12-20', 'lol_news2.jpg'),
(8, 2, 'The International Grand Finals', 'Today we play the Grand Finals to decide who will win the Aegis and be crowned Champions.', 'At the end of Phase 2 (group stage) there could not have been two teams further apart. VG had dominated the entire set of round robin matches ending on top of the standings with a 12-3 record. Newbee on the other hand, squeaked in with a 7-8 record that forced them into a three way TieBreaker.\n\nVG?s record gave them an instant trip to the Main Event. Newbee?s record gave them the longest road to the main event but that trip forged the team into something new. They no longer struggled, but dominated matches and now enter today from the Upper Bracket and VG comes from the Lower Bracket.\n\nThe two have met at KeyArena. Newbee the bottom seed, played VG the top seed to start the Main Event. Newbee is the team that sent VG down to the Lower Bracket that day while they moved on straight to the Grand Finals today. A familiar story but reversed. Has VG?s road back from the Lower Bracket created a team that can now defeat Newbee? Or is Newbee unstoppable?\n\nWe find out today, Who will reign supreme?', '2014-07-20', 'dota_news2.jpg'),
(9, 3, 'DreamHack 2014: Winners', 'Congratulations to Team LDLC on winning the The 2014 DreamHack CS:GO Championship! They take home $100,000 of the $250,000 community funded prize pool.', 'Congratulations to Team LDLC on winning the The 2014 DreamHack CS:GO Championship! They take home $100,000 of the $250,000 community funded prize pool. Team LDLC won the best of three against Ninjas in Pyjamas, with a great run in overtime that denied Ninjas in Pyjamas the chance to win another title.\nIf you missed any of the matches or want to watch the highlights, you can download all the games from the DreamHack 2014 tab in the WATCH menu.\nWe?d like to thank all the teams, everyone at DreamHack, and most of all the Counter-Strike community for making this tournament possible.', '2014-11-20', 'csgo_news2.jpg'),
(10, 4, 'Hearthstone December 2014 Ranked Play Season', 'Hearthstone?s December 2014 Ranked Play Season: Go Big or Go Gnome is coming to a close at the end of the month, and your chances of acquiring the Gnome card back for your collection will soon be deco', 'Hearthstone?s December 2014 Ranked Play Season: Go Big or Go Gnome is coming to a close at the end of the month, and your chances of acquiring the Gnome card back for your collection will soon be decommissioned!\n\nThe tastefully tinkered Gnome card back will only be available during December, so be sure to hit Rank 20 before the 1st of January and the card back will be awarded to you at the end of the season.\n\nThe January 2015 Ranked Play Season?and a new card back along with it?await you next month!', '2014-12-23', 'hs_news2.jpg'),
(11, 5, '2014 Ladder Season 4 Lock Incoming', '2014 Ladder Season 4 is drawing to a close, and all ladders will be locked soon as we approach the fourth season of 2014 ladder play.', '2014 Ladder Season 4 is drawing to a close, and all ladders will be locked soon as we approach the fourth season of 2014 ladder play.\n\nHere?s what this means for you:\n\nDuring the 2014 Season 4 lock, you can?t be promoted or demoted from your current league or division, and your bonus pool stops growing.\nThough you?ll be locked to a league and division, you''ll still be able to play out your remaining bonus pool and compete for standing within your division until the end of the season.\nIf you''re pursuing a league promotion, then you still have a chance to get there. The 2014 Season 4 lock will go into effect for the Americas region of Battle.net on Monday, January 5 at 12:01 a.m. PDT.', '2015-01-02', 'sc_news2.jpg'),
(13, 2, 'TEST', 'TEST', 'TEST', '2015-01-04', 'TEST');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
