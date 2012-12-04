-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2012 at 01:41 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.6-1ubuntu1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `showdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE IF NOT EXISTS `translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `part` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `translate`
--

INSERT INTO `translate` (`id`, `ru`, `en`, `part`) VALUES
(1, 'будет перевод', '<p>Our product is ShowDev <strong>development lifecycle</strong>:</p>\r\n<p>Fully distributed teams which is cheap</p>\r\n<p>Agile with delivery on time, cost and value</p>\r\n<p>Ready for launch and naturally fit for every Lean startup</p>\r\n<p>Full accountability by Co-Founders Chief Engineer and Chief Product Owner</p><br/>\r\n\r\n<p>We are able to deliver Web/Native software applications as well as solutions in construction/ electronics/ robotics/ ai.</p><br/>\r\n\r\n<p><strong>If you don''t know how to build your technology product - engage with us.</strong></p>', 'index'),
(2, '<div class="contact">\r\n<p>Владимир Стасевич <span>+7 (926) 124-8431</span></p>\r\n<p><span>E-mail:</span> vladimir.stasevich@gmail.com</p> \r\n<p><span>Skype:</span> vladimir.stasevich</p>\r\n</div>\r\n<div class="contact">\r\n<p>Роман Ефимушкин <span>+7 (965) 187-6571</span></p>\r\n<p><span>E-mail:</span> roman.efimushkin@gmail.com</p>\r\n<p><span>Skype:<span> roman.n.efimushkin</p>\r\n</div>', '<div class="contact">\r\n<p>Vladimir Stasevich <span>+7 (926) 124-8431</span></p>\r\n<p><span>E-mail:</span> vladimir.stasevich@gmail.com</p> \r\n<p><span>Skype:</span> vladimir.stasevich</p>\r\n</div>\r\n<div class="contact">\r\n<p>Roman Efimushkin <span>+7 (965) 187-6571</span></p>\r\n<p><span>E-mail:</span> roman.efimushkin@gmail.com</p>\r\n<p><span>Skype:<span> roman.n.efimushkin</p>\r\n</div>', 'contacts'),
(3, '', '<div id = "problem">\r\n	<h1>Problem</h1>\r\n	<p>Working on our 2 projects (<span>showcode.ru</span>, <span>showstaff.ru</span>) we''ve discovered the simple but hard issue - we could not just hire the web development firm because of their low quality, lack of timely delivery and lack of expertise. We could not hire big software firms because of their massiveness and non-agile approach as well as high costs.</p>\r\n	<p>Putting altogether we''ve observed the issue of lacking of robust, qualitative, timely, reasonable in cost technical product development teams on the market.</p>\r\n	<p>And we discovered that exactly the same issue happened with lot of startup-ers in their beginnings.</p>\r\n</div>\r\n<div id = "solution">\r\n	<h1>Solution</h1>\r\n	<p>Having the IT background we''ve decided to create such team ourselves.\r\n	We''ve invented and proved the development cycle with fully distributed team working with online collaboration techniques.</p>\r\n	<p>We''ve created and setup specialists engagement model. And we''ve tuned intra and extra engagement approaches.</p>\r\n	<p>As a result we can announce: We''ve built the robust and scalable development process. If you have an idea but you dont'' know how to create your tech solution - engage with us.</p>\r\n</div>\r\n<div id = "sales">\r\n	<h1>Marketing/ Sales</h1>\r\n	<p>Our target market is teams of startups that search for qualitative, timely, reasonable and manageble product development capacity to enter into partnership.</p>\r\n	<p>We''re selling the product development cycle, not outsourcing or technical services. Saying this we looks for product partnerships instead of targeting revenue. Carefully selecting partners we''ll invest with our product development capability in gaining share in the business.</p>\r\n</div>\r\n<div id = "milestones">\r\n	<h1>Milestones</h1>\r\n	<ul>\r\n		<li>We''ve delivered showcode.ru service of e-ticketing. Start of sales was in Jun 2011. We continue with enhancements since than an deliver new release every 2 weeks</li>\r\n		<li>We''ve delivered showstaff.ru service of resources mgmt. Start of sales was in Oct 2012. We continute deliver iterations of major product features within planned iterations</li>\r\n		<li>We''ve started separation of Showdev as a separate product in Sep 2012</li>\r\n		<li>Next milestone: First 3 partners will be key to assesing our business model</li>\r\n	</ul>\r\n</div>\r\n<div id = "competition">\r\n	<h1>Competition</h1>\r\n	<ul>\r\n		<li>The technology development services market is really very high packaged with a lot of companies from the quality of think tanks to large "body shops"</li>\r\n		<li>Technology development in outsourcing model is really popular theme for enterprises</li>\r\n	</ul>\r\n	<p>Though those existing tech development models often don''t fit well for startups.</p>\r\n	<p>Startups require:</p>\r\n	<ul>\r\n		<li>Agile and Lean</li>\r\n		<li>Manageability, transparency and fast response</li>\r\n		<li>All 3 simultaneously: Time/Cost/Value</li>\r\n	</ul>\r\n</div>\r\n<div id = "business">\r\n	<h1>Business model</h1>\r\n	<p>3 types of partnerships are considered:</p>\r\n	<p>1) Preferable: Moderate level of payments for our engagement (below the most competition) + equity in the business</p>\r\n	<p>2) Equity not possible: Service engagement model with aligned to market payments level. Product IP ownership terms are negotiable</p>\r\n	<p>3) Payments not possible: No payment, only equity in business. Considered to be our prop investment and will be a separate stream of business value through running own products</p>\r\n</div>\r\n<div id = "financing">\r\n	<h1>Financing</h1>\r\n	<p>1) Bootstrap - we''re financing our current expenses ourselves</p>\r\n	<p>2) First revenue streams will be re-invested in the Showdev infrastructure, human capital and high promising products</p>\r\n	<p>3) We target for seeking seed investors mostly for customer development activities financing</p>\r\n	<p>4) After stable revenue streams are created and product portfolio is in place, we''ll be seeking partner venture capital for promising products financing</p>\r\n</div>\r\n<div id = "team">\r\n	<h1>Team</h1>\r\n	<table>\r\n		<tr>\r\n			<td>\r\n				<img src="/web/images/v.png" />\r\n			</td>\r\n			<td>\r\n				<span>Vladimir Stasevich</span><br/> \r\n				CEO. Tech professional with 15 years IT-industry background.<br/>\r\n				Responsible for Product ownership in the Showdev development lifecycle.<br/>\r\n				Having business development experience with big international banks. <br/>\r\n				<span>Education:</span> PhD in System Analysis, Graduate in Robotics and AI from Bauman Moscow State Technical University\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<img src="/web/images/r.png" />\r\n			</td>\r\n			<td>\r\n				<span>Roman Efimushkin</span> <br/>\r\n				CTO. Tech professional with 15 years IT-industry background. Having experience in mechanical and electronics systems design.<br/>\r\n				Responsible for Development in the Showdev development lifecycle.<br/>\r\n				Having strong engineering background working in different state backed and commercial projects across different tech domains.<br/>\r\n				<span>Education:</span> Graduate in Engineering from Bauman Moscow State Technical University\r\n			</td>\r\n		</tr>\r\n	</table>\r\n	<span>Dev team</span><br/> \r\n	(flexible according to demand)<br/>\r\n	Web developers, UX designers, UI designers<br/>\r\n	Mobile developers - iOS, Android, WinCE, Win RT ?:)<br/>\r\n	Win, Unix native app developers, Java developers<br/>\r\n	MS Kinect, Robotics, AI, electronics and construction<br/>\r\n	Vlad and Roman are teammates from BMSTU and know each other for 15 years\r\n</div>', 'company');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
