-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 13, 2022 at 01:02 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urban`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(100) NOT NULL,
  `fname` varchar(360) NOT NULL,
  `lname` varchar(360) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(360) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `application` enum('Approved','Denied','In process','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `position`, `fname`, `lname`, `phone`, `email`, `city`, `age`, `created_at`, `updated_at`, `application`) VALUES
(6, 'waiter', 'thays', 'bell', 613690333, 'thaysbell43@gmail.com', 'Apeldoorn', 'true', '2022-12-08 14:37:42', '2022-12-08 14:37:42', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `f_type` (`f_type`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `f_type`) VALUES
(7, 'Alcohol beverage'),
(1, 'Breakfast'),
(8, 'Dessert'),
(5, 'Dinner'),
(9, 'Events'),
(6, 'Non-alcohol Beverage'),
(4, 'Pasta'),
(2, 'Pizza'),
(3, 'Vegan');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

DROP TABLE IF EXISTS `descriptions`;
CREATE TABLE IF NOT EXISTS `descriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(360) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `description`) VALUES
(1, 'The Caribbean flavors of these coconut pancakes with fried pineapple in a sauce of brown sugar, cinnamon and rum.'),
(2, 'French Toast I really think is pure comfort food.'),
(3, 'Elvis Waffles! Delicious soft waffles topped with banana, peanut butter and caramelized bacon.'),
(4, 'An old favorite among Jamaicans, cornmeal porridge is a go-to meal if you want a hearty, healthy start to the day..'),
(5, 'Saltfish and ackee is the national dish of Jamaica and is traditionally served with these dumplings.'),
(6, 'Fried eggs and plantain with butter toasted bread with chocolate & or coffee\r\n                      '),
(7, 'Pastries,Eggs,Bacon,Yogurt,Jams and spreads,Fruit\',\r\n                               '),
(8, 'Spice up your morning with bell pepper, onions, fluffy scrambled eggs, sausage and melty cheese, all wrapped in a soft tortilla.'),
(9, 'But when its cooked, its not only an excellent choice - its also very tasty.And this particular recipe is particularly good.'),
(10, 'Delicious scrambled eggs, bread and sausage muffin. You can also ask for it with hash browns and a nourishing orange juice or an aromatic coffee.'),
(11, 'Breakfast pizza with avocado and fried egg with hot coffee or chocolate milk'),
(12, 'Hallaca is a traditional dish from Venezuela that looks like a tamal but differs in taste, texture, ingredients and cultural significance\''),
(13, 'Tomato sauce, mozzarella, Gouda and cheddar cheese mix & soft French cheese.'),
(14, 'Tomato sauce, mozzarella, mushrooms, grilled beef, Gouda and cheddar cheese mix, soft French cheese & spring onion.'),
(15, 'Crème frache, BBQ swirl, mozzarella, grilled beef, bacon, ham, onion and spring onion.'),
(16, 'BBQ sauce, mozzarella, bacon, ham, grilled chicken, minced beef, bell pepper & onion.'),
(17, 'Tomato sauce, mozzarella, frikkadel, onion, a swirl of mayonnaise and curry.'),
(18, 'BBQ sauce, mozzarella, grilled chicken & bacon.'),
(19, 'Tomato sauce, mozzarella, shawarma & a swirl of garlic sauce.'),
(20, 'Tomato sauce, mozzarella, chicken kebab, onion and a swirl of garlic sauce.'),
(21, 'Tomato sauce, extra pepperoni and mozzarella.'),
(22, 'BBQ sauce, mozzarella, pepperoni, minced beef, chicken kebab, bacon & onion.'),
(23, 'Tomato sauce ham pineapple & extra mozzarella.'),
(24, 'Tomato sauce ham, pepperoni minced beef, mushrooms  black olives bell pepper  onion & extra mozzarella.'),
(25, 'Tomato sauce, mozzarella, mushrooms, bell pepper, onion, fresh spinach and fresh tomato.'),
(26, 'Tomato sauce, fresh spinach, fresh tomato, pizza herbs, pesto & extra mozzarella.'),
(27, 'Tomato sauce, mozzarella, vegetarian chicken, fresh tomato, onion and a pesto swirl.'),
(28, 'Tomato sauce, vegan cheese, mushrooms, fresh tomato, bell pepper, spinach and onion.'),
(29, 'Tomato sauce, vegan cheese, extra vegan cheese & pizza herbs'),
(30, 'Tomato sauce, vegan cheese, mushrooms & pizza herbs.'),
(31, 'Tomato sauce, extra mozzarella and a gluten-free base (20 cm).'),
(32, 'Tomato sauce, mozzarella and & pepperoni on a gluten-free base (20 cm).'),
(33, 'Tomato sauce, vegan cheese, mushroom, truffle tapenade, parsley and garlic on the rim.'),
(34, '-'),
(35, 'One can never go wrong with a chicken caesar salad. Healthy option with greens and proteins!'),
(36, 'Rice, vegetables, meat, sauce, herbs, spices, egg'),
(37, 'Incredibly tasty slow cooked Jamaican Spiced Curry that is full of flavor and tender to the bone!'),
(38, 'It is best to ask if the fishmonger cleans the Snappers, that is the most convenient.'),
(39, 'This is an easy way to cook whole fish, but one that few western cooks have mastered.'),
(40, 'A traditional Antillean soup, for the Antilleans this soup with red kidney beans is the ultimate comfort food.'),
(41, 'goat, broth, garlic, onion, pepper, tomato, herbs, vegetables, sauce.'),
(42, 'Making the traditional oxtail stew takes some time, but as they say: \"then you have something!\". It is the ideal dish to make on the weekend.'),
(43, 'Amazing Indian dish with tenderloin chicken off the sizzles.'),
(44, 'Chicken foot soup is a popular Jamaican one-pot dish with ingredients such as chicken foot, pumpkins, carrots, yams, potatoes and seasonings such as allspice, thyme and salt. It is traditionally prepared on Saturdays for dinner.'),
(45, 'Its ratatouille season! Ratatouille is a classic French end- of - summer stew thats fun to say (rat-tuh-TOO-ee) and fun to make.'),
(46, 'Stroopwafels feature two thin, crispy waffle- like wafers surrounding a creamy, caramel - flavored center made from molasses, brown sugar, butter, and cinnamon.'),
(47, 'The crust is warm and flaky, and the filling is chunky, sweet, and spicy. But you would not stop there!'),
(48, 'Its hard to decide what to love more about these warm, deep-fried delicacies: their incredible taste or how fun it is to say their name.'),
(49, 'Bulla cake has a round and flat shape, and it is made with flour, molasses, and baking powder. It can be either light- or dark-colored and is often spiced with ginger or nutmeg'),
(50, 'Sweet potato pudding is a favorite Sunday dessert throughout Jamaica, consisting of sweet potatoes, flour, coconut milk, dried fruits, and flavorings such as vanilla, nutmeg, sugar, and salt.'),
(51, 'Bun and Cheese comes packaged as a traditional loaf, and is most commonly eaten sandwich-style, by cutting individual slices and adding slices of cheese in between, hence the “Bun and Cheese.(ONLY Available: during easter).'),
(52, 'Gecondenseerde melk, melk, bosvruchten, suiker, essence\''),
(53, 'semi-skimmed milk, water, white sugar, vanilla aroma, peanut butter\''),
(54, '1 pint of Caramel Pecan Ice-cream'),
(55, '4 diffrent flavours: Vanilla, Tamarinda, Strawberry, Peanut'),
(56, 'Arepa di pampuna are Antillean pumpkin pancakes.'),
(57, 'Making delicious Pandushi Kokolishi for a delicious and sweet dessert');

-- --------------------------------------------------------

--
-- Table structure for table `employee-users`
--

DROP TABLE IF EXISTS `employee-users`;
CREATE TABLE IF NOT EXISTS `employee-users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee-id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `salary` float NOT NULL,
  `started-at` date NOT NULL,
  `ending-at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee-id` (`employee-id`),
  KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee-users`
--

INSERT INTO `employee-users` (`id`, `employee-id`, `title`, `name`, `email`, `password`, `tel`, `salary`, `started-at`, `ending-at`) VALUES
(4, 1878959641, 12, 'DShields', 'darrel.shields@email.com', 'vpMr0WPHEt', 617239244, 13, '2022-02-02', '2024-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `eventlists`
--

DROP TABLE IF EXISTS `eventlists`;
CREATE TABLE IF NOT EXISTS `eventlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) NOT NULL,
  `name` varchar(75) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(360) DEFAULT NULL,
  `ticket` int(11) DEFAULT NULL,
  `text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category-id` (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlists`
--

INSERT INTO `eventlists` (`id`, `categoryid`, `name`, `image`, `price`, `date`, `description`, `ticket`, `text`) VALUES
(1, 9, 'Dark Buffet Madness', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-1652993293.jpg', 9.99, '2022-10-25', 'Let\'s have some dark fun together upcoming October 25 at our local restaurant. hot meals to dark meals and some spooky house fun. There will be times when we will no longer see each other as often as we used to; there will be a moment of ups and downs in our journey on the path of friendship. so come and join us now ', 0, 'Note: all purchases for events is at one of our local spot'),
(2, 9, 'Shooting Stars Festival', 'https://www.lascrucesbulletin.com/uploads/original/20201119-033714-HappyThanksgiving.jpg', 10.85, '2022-11-15', 'A sky filled with stars, counting & singing among the stars with the best entertainment ever!!', 0, 'Note: all purchases for events is at one of our local spot'),
(3, 9, 'FLASHBACK (WE ARE 80/90/00\'S)', 'https://cdn.pixabay.com/photo/2016/03/28/09/36/music-1285165_960_720.jpg', 25, '2022-11-18', 'Delicious classics from the 80s, 90s and 00s at the nicest restaurant. Back to the days of Marvin Gaye, Chaka Khan, DJ Paul Elstak, Wham and many more.', 0, 'Note: all purchases for events is at one of our local spot'),
(4, 9, 'Neptune Movie Marathon\r\n', 'https://www.leeuniversity.edu/wp-content/uploads/film.jpg', 5.95, '2022-11-20', 'It\'s been awhile since the last marathon, so let\'s bring it back Drive-in Cinema. Bring your entire family and enjoy the best night since covid-19.', 0, 'Note: all purchases for events is at one of our local spot'),
(5, 9, ' Anti-Racism Virtual Series', 'https://www.insocialwork.org/wp-content/uploads/2021/05/racism-anti-racism-racial-justice-scaled.jpg', 0, '2022-11-22', 'Come Meet A Black Person\" anti-racism networking event where non-Blacks talk about racism and eradicating racism with Blacks', 0, 'Note: all purchases for events is at one of our local spot'),
(6, 9, 'AI for ALL', 'https://indianapublicmedia.org/large-images/amos-images/ai_interpretation.jpg', 18.99, '2022-11-23', 'Artificial intelligence is developing fast, but what is the dark side of this technology? Find out at the Evoluon during AI for ALL on 23 November.', 0, 'Note: all purchases for events is at one of our local spot'),
(7, 9, 'Comedy Night', 'http://www.sweetwaterbarandgrill.com/wp-content/uploads/2016/03/live-comedy-in-gwinnett-county-copy.jpg', 19.99, '2022-11-25', 'This euphoric evening will be complemented by leading cabaret artists such as Martijn Kardol, Tobi Kooiman, and Soula Notos. Before the laughing, screaming and roaring can begin, you can visit Urban restaurant for a fulfilling dinner.', 0, 'Note: all purchases for events is at one of our local spot'),
(8, 9, 'Family Fun Day', 'https://www.eezeebee.com/wp-content/uploads/2017/12/sinterklaas-snoepgoed.jpg', 2.55, '2022-12-01', 'Yes also coming back is our special family day. we\'ve got it all bouncers, cotton candy, popcorn and many more fun adventure for everyone to enjoy.', 124, 'Note: all purchases for events is at one of our local spot'),
(9, 9, 'Urban met Gala', 'https://i.pinimg.com/originals/dc/e8/e4/dce8e4ac8230c51310c7f307f3184126.jpg', 15.98, '2022-12-14', 'Red carpet, wine, let\'s remind our youth that their are Queens & Kings of the future.', 96, 'Note: all purchases for events is at one of our local spot'),
(10, 9, 'Tango lounge night', 'https://cdn.lifehack.org/wp-content/uploads/2014/07/Tango.jpg', 13.68, '2022-12-16', 'allows you to practice and rehearse the tango steps and moves, while you can make some good “tango-mileage” in order to get the dance into your muscle memory. Dancers of all levels from the wider region frequent this event, and it is customary to “dance around” and switch partners. There is a casual atmosphere that resembles a clubcafé.', 55, 'Note: all purchases for events is at one of our local spot'),
(11, 9, 'Goodbye Covid-19', 'https://doralfamilyjournal.com/wp-content/uploads/2022/01/GOODBYE-COVID-800x445.jpg', 10.99, '2022-12-28', 'It\'s been hard in the last couple of years for everyone, So let\'s end this year with Urban Lounge biggest block party extravaganza ever!! let\'s go out with a bang!!!!', 65, 'Note: all purchases for events is at one of our local spot'),
(12, 9, 'Casket Date', 'https://createcustomwishes.com/wp-content/uploads/2021/11/Create-Goodbye-2022-Hello-2023-New-Year-Eve-with-Name.jpg', 3.95, '2022-12-30', 'The biggest firework show of eindhoven. shhh secret firework from china.', 15, 'Note: all purchases for events is at one of our local spot'),
(13, 9, 'Urban Stop', 'https://img.freepik.com/premium-vector/grand-opening-coming-soon-banner-design-with-editable-text-effect_535749-705.jpg', 0, '2023-01-06', 'We keep moving forward, opening new doors, and doing new things, because we\'re curious and curiosity keeps leading us down new paths. Upcoming Urban Stop game store.', 12, 'Note: all purchases for events is at one of our local spot'),
(14, 9, 'winter session', 'https://c4.wallpaperflare.com/wallpaper/407/817/195/photography-of-bridge-and-body-of-water-wallpaper-preview.jpg', 14.75, '2023-01-13', 'There’s many reasons to love winter, maybe it’s the snow days, the delicious taste of hot cocoa or the anticipation of the holidays. As you bundle up and make gift lists for your loved ones — make sure to celebrate the beauty of the season with the help of a good book (or a mean winter cocktail) by the fireplace at Urban Lounge.', 45, 'Note: all purchases for events is at one of our local spot'),
(15, 9, 'National Tulip Day', 'https://cdn.pixabay.com/photo/2017/02/15/13/40/tulips-2068692_960_720.jpg', 0, '2023-01-21', 'A tulip doesn’t strive to impress anyone. It doesn’t struggle to be different than a rose. It doesn’t have to. It is different. And there’s room in the garden for every flower ** workers only', 0, 'Note: all purchases for events is at one of our local spot'),
(16, 9, '1st 2023 Debate', 'https://youthincmag.com/wp-content/uploads/2019/09/debating-skills-xeniumhrcom.png', 1.25, '2023-01-25', 'For good ideas and true innovation, you need human interaction, conflict, argument, debate. *** Discord', 55, 'Note: all purchases for events is at one of our local spot'),
(17, 9, 'Winter in the Fortress', 'https://c4.wallpaperflare.com/wallpaper/696/976/998/neuschwanstien-forest-mountains-winter-wallpaper-preview.jpg', 7.75, '2023-02-10', 'You don’t need to grab the Fireball and your dancing shoes to know that there is plenty in life worth celebrating. So come on down to the fortress.', 146, 'Note: all purchases for events is at one of our local spot'),
(18, 9, 'Music event Eurosonic Noorderslag junior', 'https://www.creativefabrica.com/wp-content/uploads/2020/10/03/Festival-Logo-Vector-Modern-Symbol-Graphics-5833150-2-580x386.png', 25.75, '2023-02-13', 'Festivals are fun for kids, fun for parents, and offer a welcome break from the stresses of the nuclear family. The sheer quantities of people make life easier.', 178, 'Note: all purchases for events is at one of our local spot');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descriptionid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ingredient` (`descriptionid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id`, `descriptionid`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `ingredientdetails`
--

DROP TABLE IF EXISTS `ingredientdetails`;
CREATE TABLE IF NOT EXISTS `ingredientdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `i-id` int(11) NOT NULL,
  `i-id1` int(11) NOT NULL,
  `i-id2` int(11) NOT NULL,
  `i-id3` int(11) NOT NULL,
  `i-id4` int(11) NOT NULL,
  `i-id5` int(11) NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated-at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `i-id` (`i-id`),
  KEY `i-id1` (`i-id1`),
  KEY `i-id2` (`i-id2`),
  KEY `i-id3` (`i-id3`),
  KEY `i-id4` (`i-id4`),
  KEY `i-id5` (`i-id5`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredientdetails`
--

INSERT INTO `ingredientdetails` (`id`, `i-id`, `i-id1`, `i-id2`, `i-id3`, `i-id4`, `i-id5`, `created-at`, `updated-at`) VALUES
(1, 1, 1, 2, 4, 24, 14, '2022-10-14 12:00:26', '2022-10-14 12:00:26'),
(22, 2, 60, 70, 24, 64, 70, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(23, 3, 59, 27, 63, 70, 33, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(24, 4, 25, 24, 63, 24, 24, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(25, 5, 3, 72, 73, 21, 63, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(26, 6, 4, 64, 60, 62, 61, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(27, 7, 5, 4, 6, 66, 65, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(28, 8, 12, 67, 28, 64, 63, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(29, 9, 69, 21, 15, 64, 63, '2022-10-14 12:23:59', '2022-10-14 12:23:59'),
(30, 10, 24, 5, 61, 62, 33, '2022-10-14 12:23:59', '2022-10-14 12:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `min_salary` float NOT NULL,
  `max_salary` float NOT NULL,
  `description` varchar(360) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `min_salary`, `max_salary`, `description`) VALUES
(1, 'waiter', 10.5, 13.5, 'Waiter/Waitress responsibilities include greeting and serving customers, providing detailed information on menus, multi-tasking various front-of-the-house duties and collecting the bill. If you are able to perform well in fast-paced environments, we\'d like to meet you.'),
(2, 'General Manager', 18, 23, 'This is the most important position within your business when it comes to the operational part. General managers are those who focus on hiring/firing employees, training programs, PR and marketing, process optimization, etc. Consider them as the head of your restaurant.'),
(3, ' Assistant Manager', 18, 20, 'As the job position suggests, assistant managers are responsible for helping the general manager with the execution of his tasks. They are often responsible for dealing with the paperwork, handling the training programs, taking part in brainstorming activities, helping with the decision-making processes, etc. '),
(4, 'Executive Chef', 35, 55, 'If you aim at providing the best cuisine around town, then focus on finding the best executive chef out there. A good executive chef comes up with the meals on your menu. The great one helps you improve your overall service and tailor the food concept according to your restaurant’s needs.'),
(5, 'Sous Chef', 24, 40, 'This is basically the second most important position in the kitchen, after the executive chef. Consider sous chefs as assistants to the main man. If the executive chef takes a day off, it is the sous chef that takes charge of the kitchen. Sous chefs must be experienced and with similar skill sets as the executive chefs.'),
(6, 'Pastry Chef', 25, 36, 'Pastry chefs are responsible for the sweet treats in your menu. They develop recipes and prepares desserts such as cookies, cakes, souffles, crepes, mousses, etc. Consider hiring such if you have a big, casual restaurant. Otherwise, you may leave these duties to your other chefs, if they are experienced in pastry.'),
(7, 'Kitchen Manager', 20, 29, 'This is basically the general manager of the kitchen. The duties, related to this position are focused on hiring and firing personnel, process management and optimization, inventory management, etc. The kitchen manager should be able to form a cohesive unit that works as a team and has one main goal – to achieve high customer satisfaction.'),
(8, ' Food & Beverage Manager', 28, 39, ' Food and beverage managers are responsible for inventory management (both for bar and kitchen products and supplies), monitoring whether the kitchen and the bar are in compliance with local health requirements and codes, as well as defining the menu items and the overall working processes within the restaurant.'),
(9, 'Line Cook', 10, 14, 'This position is very important if you are running a bigger restaurant. The line cook handles various tasks that are intended to streamline the work of other cooks and the chefs. A line cook’s duties are related to taking care of one or multiple areas of the kitchen, thus ensuring the seamless and efficient work organization.'),
(10, 'Fast Food Cook', 9, 11, 'If you are running a quick-service restaurant, this position is one of the most important ones for the overall success of your business. Fast food cooks are required to work under pressure and be able to prepare orders as quickly as possible. They usually work with kitchen equipment such as grills, deep fryers, sandwich makers, ovens, etc.'),
(11, 'Short Order Cook', 12, 16, 'As the name suggests, the people on this position are responsible for handling small orders for breakfasts or brunches. Short order cooks usually prepare salads, sandwiches, burgers or other types of light food that does not require significant time to prepare.   '),
(12, 'Prep cook', 12, 15, 'All employees on this position are not directly involved in the cooking processes, they are one of the main reasons why your dish is served so quickly. Usually, the prep cook position is typical for fine dining restaurants and its duties are related to the initial preparation of the ingredients needed for the menu items.'),
(13, 'Sommelier', 21, 33, 'If you are running a fine dining or a restaurant, for which wine is a focal point of the whole experience, hiring a sommelier is a necessity. His duties are related to purchasing wine, creating a fine wine list, consulting customers or servers about the different types of wine and suggesting suitable combinations.'),
(14, 'Server', 3.5, 12, 'If the host/hostess is the face of your restaurant, then the server is the heart. Good servers are usually those which can turn a not so pleasant customer experience into a great one and vice versa. Servers are responsible not only for taking orders and sending them to the kitchen and bar staff but to take personal care of each and every customer. '),
(15, 'Runner', 9, 11, 'Some restaurants prefer to hire runners in order to make the server’s work more efficient and easier. The main responsibility of the runner is to get the meal from the kitchen, once it is ready, and to serve it to the customer as soon as possible. That way, the food arrives on time and at the appropriate temperature.'),
(16, 'Busser/Bus person', 7, 10.5, 'This position is related to table cleaning and preparation. Once a client leaves and a table becomes free, it’s the busser’s responsibility to clean it and prepare it for the next customers. Servers usually delegate less complex and more time-consuming tasks to bussers, such as providing additional utensils. '),
(17, 'Host/Hostess', 8, 11, 'The host/hostess is responsible for the customer’s first impression of your restaurant and service. Thus, hiring a cheerful person is essential, if you want to positively predispose your clients for their upcoming experience. The host/hostess usually greets your customers and takes them to their respective table. '),
(18, 'Bartender', 8, 13, 'The bartender position is very important for the image of your restaurant. Make sure to hire an experienced bartender as this can define the overall customer satisfaction. Remember that the hired person for the position will not only be sitting behind the bar, isolated from the crowd. They will usually be taking orders and talking to your customers.'),
(19, 'Barback', 9, 11, 'Barbacks are baristas’ assistants. They are responsible for numerous tasks, but in general, they make sure that the bartender has everything needed to handle his job appropriately. They are responsible for maintaining the needed quantity of bottles, tracking inventory (coffee, sugar, fruits, etc.), restocking the bar with ice, changing kegs, etc.'),
(20, 'Barista', 9, 12, 'If you are running a small bakery or a fast-food restaurant, you will need to hire a barista. Apart from the dishes, people will be willing to order coffee, tea, smoothies, etc. The one you hire should be able to listen to customers carefully and process their orders in a timely manner.'),
(21, 'Cashier', 8, 10, 'The cashier position is similar to the drive-thru operator as it is also responsible for handling cash operations and taking orders. The only difference between them is the fact that the drive-thru operator is located in (surprisingly)… a drive-thru restaurant.'),
(22, 'Dishwasher', 11, 14.5, 'This position is where most people who want to make their first steps in a restaurant’s kitchen start working at. That is all because it does not require any experience and is a great opportunity to enter a restaurant kitchen and slowly, but steadily, learn about cooking from the main chefs.');

-- --------------------------------------------------------

--
-- Table structure for table `menulists`
--

DROP TABLE IF EXISTS `menulists`;
CREATE TABLE IF NOT EXISTS `menulists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(360) NOT NULL,
  `description` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `category` (`categoryid`),
  KEY `price` (`price`),
  KEY `image` (`image`),
  KEY `description` (`description`),
  KEY `category_2` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menulists`
--

INSERT INTO `menulists` (`id`, `categoryid`, `category`, `name`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Breakfast', 'Coconut Pancakes', 6.95, 'https://media.istockphoto.com/photos/banana-pancakes-with-maple-syrup-picture-id500965580?k=20&m=500965580&s=612x612&w=0&h=NaYdj60LRDKlB6XBrL88nf3sHrY_H_LMf8FCPnsf_yg=', 1, '2022-10-11 21:03:41', '2022-10-11 21:03:41'),
(2, 1, 'Breakfast', 'French Toast', 7.95, 'https://media.istockphoto.com/photos/french-toast-with-fruit-and-syrup-on-a-marble-countertop-picture-id171269841?k=20&m=171269841&s=612x612&w=0&h=dPKhFO8ThDnsbVQ77NDxtdtRbOIMcKCljWM5fCi2Xg8=', 2, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(3, 1, 'Breakfast', 'Elvis Presley waffles', 8.99, 'https://media.istockphoto.com/photos/waffle-and-bacon-picture-id584479478?b=1&k=20&m=584479478&s=170667a&w=0&h=d5ZShxj9NACMbD2JObqcsLn0ZdUUVUOdn-a8qFS7J_w=', 3, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(4, 1, 'Breakfast', 'Cornmeal porridge', 8.99, 'https://thatgirlcookshealthy.com/wp-content/uploads/2020/03/cornmeal-porridge-image.jpg', 4, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(5, 1, 'Breakfast', 'Ackee and saltfish', 9.95, 'https://originalflava.com/wp-content/uploads/2014/05/Ackee-saltfish.jpg', 5, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(6, 1, 'Breakfast', 'Fried eggs sandwich', 9.99, 'https://www.24kitchen.nl/files/styles/social_media_share/public/2020-11/shutterstock_537319213.jpg?itok=C_Gr65ZO', 6, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(7, 1, 'Breakfast', 'All in 1 special', 9.85, 'https://simply-delicious-food.com/wp-content/uploads/2018/10/breakfast-board-500x375.jpg', 7, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(8, 1, 'Breakfast', 'EggyBurrito menu', 10.95, 'https://www.cookingclassy.com/wp-content/uploads/2019/08/breakfast-burrito-01.jpg', 8, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(9, 1, 'Breakfast', 'Steamed cabbage', 10.99, 'https://i.pinimg.com/736x/0e/ca/c3/0ecac3d403d00bc7fd5625bf1b47d579.jpg', 9, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(10, 1, 'Breakfast', 'Big Breakfast menu', 12.34, 'https://img.favpng.com/12/20/20/breakfast-scrambled-eggs-mcdonald-s-big-mac-english-muffin-hash-browns-png-favpng-avrpthAAwqaZ6LzYcifZYB2Cq.jpg', 10, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(11, 1, 'Breakfast', 'Breakfast pizza', 12.95, 'https://skinnyms.com/wp-content/uploads/2013/10/Avocado-Breakfast-Pizzas-1.jpg', 11, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(12, 1, 'Breakfast', 'Ayaka', 12.96, 'https://www.savemorefoodstores.com/storage/app/uploads/public/5a9/d45/d1b/thumb_386_600_400_0_0_auto.jpg', 12, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(13, 2, 'Pizza', 'Bacon & cheese gril', 5.95, 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PCRB/NL_PCRB_all_hero_7544.jpg?v-328673902', 13, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(14, 2, 'Pizza', 'Pizza cheese & grilled beef', 6.95, 'https://www.dominos.nl/media/0qzbiyqt/p4_menu_400x290px_nl_cheese-grilled-beef-1.jpg', 14, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(15, 2, 'Pizza', 'Pizza grillled beef meatlover', 9.95, 'https://www.dominos.nl/ManagedAssets/NL/product/PPUL/NL_PPUL_all_menu_8769.jpg?v746033714', 15, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(16, 2, 'Pizza', 'Pizza bbq Mixed grill', 8.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PBMG/NL_PBMG_all_hero_7544.png?v-1334956449', 16, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(17, 2, 'Pizza', 'Pizza frikan\'Dutchman', 8.99, 'https://www.dominos.nl/media/gfacsp4z/400x290_meaty-macho-1.jpg?width=400&height=290', 17, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(18, 2, 'Pizza', 'Pizza BBQ Chicken & Bacon', 7.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PCNB/NL_PCNB_all_hero_8263.jpg?v1349080163', 18, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(19, 2, 'Pizza', 'Pizza Shoarma', 8.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PSHO/NL_PSHO_all_hero_9068.jpg?v29382211', 19, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(20, 2, 'Pizza', 'Pizza Chicken Kebab', 8.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PKEB/NL_PKEB_all_hero_9068.jpg?v348136352', 20, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(21, 2, 'Pizza', 'Pizza Pepperoni Party', 7.99, 'https://www.dominos.be/ManagedAssets/BE/product/PDPP/BE_PDPP_all_hero_9585.jpg?v-793974938', 21, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(22, 2, 'Pizza', 'Pizza american Supreme Meatlover', 9.99, 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PMLS/NL_PMLS_all_hero_8743.jpg?v1000954861', 22, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(23, 2, 'Pizza', 'Pizza Hawaii', 7.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PHAW/NL_PHAW_all_hero_9068.jpg?v-619998184', 23, '2022-10-12 09:40:51', '2022-10-12 09:40:51'),
(24, 2, 'Pizza', 'Pizza Extravaganzza', 8.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PEXT/NL_PEXT_all_hero_7544.jpg?v-671108335', 24, '2022-10-12 09:48:01', '2022-10-12 09:48:01'),
(25, 3, 'Vegan', 'Pizza Veggi', 7.95, 'https://www.dominos.nl/ManagedAssets/NL/product/PVVE/NL_PVVE_all_hero_9508.jpg?v-1039492046', 25, '2022-10-12 10:21:07', '2022-10-12 10:21:07'),
(26, 3, 'Vegan', 'Pizza Caprese', 7.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PCAP/NL_PCAP_all_hero_9398.jpg?v609786223', 26, '2022-10-12 10:21:07', '2022-10-12 10:21:07'),
(27, 3, 'Vegan', 'Pizza Veggi Pesto Pollo', 7.95, 'https://www.dominos.nl/ManagedAssets/NL/product/PVPP/NL_PVPP_all_hero_7823.jpg?v-524881868', 27, '2022-10-12 10:21:07', '2022-10-12 10:21:07'),
(28, 3, 'Vegan', 'Pizza Vegan Veggi', 8.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PVEG/NL_PVEG_all_hero_9398.jpg?v1465047760', 28, '2022-10-12 10:21:07', '2022-10-12 10:21:07'),
(29, 3, 'Vegan', 'Vegan Margaritha', 8.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PVMA/NL_PVMA_all_hero_9508.jpg?v-180133423', 29, '2022-10-12 10:21:07', '2022-10-12 10:21:07'),
(30, 3, 'Vegan', 'Vegan Funghi', 8.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PVFH/NL_PVFH_all_hero_9508.jpg?v-1413036897', 30, '2022-10-12 10:21:07', '2022-10-12 10:21:07'),
(31, 3, 'Vegan', 'Pizza Margaritha (Glutenvrij)', 9.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PMAFGG/NL_PMAFGG_all_hero_9398.jpg?v-1158225617', 31, '2022-10-12 11:04:13', '2022-10-12 11:04:13'),
(32, 3, 'Vegan', 'Pizza Perfect Pepperoni(Glutenvrij)', 9.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PPPFGG/NL_PPPFGG_all_hero_7544.jpg?v34823017', 32, '2022-10-12 11:04:13', '2022-10-12 11:04:13'),
(33, 3, 'Vegan', 'Vegan Zwarte Truffel', 10.99, 'https://images.newyorkpizza.nl/Products/Original/Vegan_truffel-8068.png', 33, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(34, 3, 'Vegan', 'Vegan Shoarma Pizza', 10.99, 'https://images.newyorkpizza.nl/Products/Original/Vegan_Shoarma-8070.png', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(35, 3, 'Vegan', 'Pizza Tonno', 11.99, 'https://www.dominos.nl/ManagedAssets/NL/product/PTON/NL_PTON_all_hero_7544.jpg?v1659828722', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(36, 3, 'Vegan', 'BBQ Bacon & Chicken(Glutenvrij)', 12.99, 'https://images.newyorkpizza.nl/Products/Original/BBQ_Bacon-8045.png', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(37, 4, 'Pasta', 'Shirmp Pasta Alfredo', 9.95, 'https://www.dinneratthezoo.com/wp-content/uploads/2018/06/shrimp-alfredo-6.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(38, 4, 'Pasta', 'Pasta BigolÍ', 9.95, 'https://media-cdn.greatbritishchefs.com/media/mdmlndcb/img76899.jpg?mode=crop&width=768&height=512', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(39, 4, 'Pasta', 'Pasta Tortellini', 10.95, 'https://image.15gram.be/uploads/recipes/9579_tortellini-met-spinazie-en-mascarponecitroensaus_1597233961-1920x1280.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(40, 4, 'Pasta', 'Fettuccine Alfredo', 10.99, 'https://www.modernhoney.com/wp-content/uploads/2018/08/Fettuccine-Alfredo-Recipe-1.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(41, 4, 'Pasta', 'Lasagna', 11.95, 'https://www.modernhoney.com/wp-content/uploads/2019/08/Classic-Lasagna-14-scaled.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(42, 4, 'Pasta', 'Garlic Glazed Noodle', 11.99, 'https://tiffycooks.com/wp-content/uploads/2021/09/Screen-Shot-2021-09-21-at-5.21.37-PM.png', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(43, 4, 'Pasta', 'Bacon Mac & Cheese', 12.95, 'https://www.dinneratthezoo.com/wp-content/uploads/2019/07/bacon-mac-and-cheese-4.jpg', 34, '2022-10-12 12:57:15', '2022-10-12 12:57:15'),
(44, 4, 'Pasta', 'Pasta Calamarata', 12.99, 'https://antichefattorietemplari.it/wp-content/uploads/2019/01/calamarata-napoletanta-con-calamarata-di-gragnano.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(45, 4, 'Pasta', 'Lo Mein Noodles', 13.95, 'https://www.chewoutloud.com/wp-content/uploads/2021/05/lo-mein-square.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(46, 4, 'Pasta', 'Rasta Pasta', 13.99, 'https://food.theffeed.com/wp-content/uploads/sites/7/2021/03/ae62e664375b2b9397cf0c8dbc272b82-e1616700645354-768x768.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(47, 4, 'Pasta', 'Pasta alla Pescatora', 14.95, 'http://www.italianfoodforever.com/wp-content/uploads/2011/12/pescatore1.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(48, 4, 'Pasta', 'Spaghetti Vongole', 14.99, 'https://img.static-rmg.be/a/food/image/q75/w640/h400/1722/spaghetti-vongole.jpg', 34, '2022-10-12 11:18:56', '2022-10-12 11:18:56'),
(49, 5, 'Dinner', 'Chicken Caesar Salad', 10.95, 'https://images.themodernproper.com/billowy-turkey/production/posts/2019/Easy-italian-salad-recipe-10.jpg?w=1200&h=1200&q=82&fm=jpg&fit=crop&fp-x=0.5&fp-y=0.5&dm=1614096227&s=c0f63a30cef3334d97f9ecad14be51da', 35, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(50, 5, 'Dinner', 'Caribbean Mixed Rice', 10.95, 'https://i.ytimg.com/vi/RRjNuRw7RTg/maxresdefault.jpg', 36, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(51, 5, 'Dinner', 'Curry goat/mutton/chicken', 10.98, 'https://www.simplyrecipes.com/thmb/Atrxn7aREhzIuLu2h9QmmXd9ziA=/1600x900/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2010__09__jamaican-curry-goat-horiz-a-1600-b03148154b1a4ab4a9d1859b64039174.jpg', 37, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(52, 5, 'Dinner', 'Crispy Fried Red Snapper With Sauce', 10.99, 'https://i.pinimg.com/originals/e3/40/f0/e340f0ff6b7c3a027c1e4aa86d3ee56b.jpg', 38, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(53, 5, 'Dinner', 'Steamed Fish with Dumplings', 11.95, 'https://media-cldnry.s-nbcnews.com/image/upload/newscms/2021_38/1777805/ginger-scallion-fish-main-jc-210921.jpg', 39, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(54, 5, 'Dinner', 'Red Peas Soup', 11.99, 'https://cdn.foodaciously.com/static/recipes/dda36f05-21e4-4183-925a-b4424a7061db/jamaican-red-pea-soup-with-gluten-free-531d634f8fa81acebb5ffc9b6398f314-2560-q60.jpg', 40, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(55, 5, 'Dinner', 'Chilaquiles', 12.95, 'https://i2.wp.com/chilipeppermadness.com/wp-content/uploads/2020/11/Chilaquales-Recipe-Chilaquiles-Rojos-1.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(56, 5, 'Dinner', 'Tutu & Kabritu', 12.99, 'https://i.pinimg.com/474x/fa/8b/b7/fa8bb75be8381a1a446580fbd18bfbe0.jpg', 41, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(57, 5, 'Dinner', 'STEWED OXTAIL', 13.95, 'https://soulfood.nl/wp-content/uploads/2021/05/website1-2-1170x780.jpg', 42, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(58, 5, 'Dinner', 'Tandoori Chicken', 13.2, 'https://i.ytimg.com/vi/BKxGodX9NGg/maxresdefault.jpg', 43, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(59, 5, 'Dinner', 'Chicken Foot Soup', 14.95, 'https://www.bestdressedchicken.com/wp-content/uploads/2019/01/DJI_Cycle_4_JBG_20181218_0037.jpg', 44, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(60, 5, 'Dinner', 'Ratatouille', 15, 'https://bettyskitchen.nl/wp-content/uploads/2020/11/ratatouille_maken_%C2%A9-bettyskitchen_IMG_9351.jpg', 45, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(61, 6, 'Non-alcohol Beverage', 'Tick Shake Strawberry', 3.95, 'https://www.chelseasmessyapron.com/wp-content/uploads/2020/04/Strawberry-Milkshake-1.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(62, 6, 'Non-alcohol Beverage', 'Thick Shake Banana', 3.95, 'https://foodtasia.com/wp-content/uploads/2021/07/banana-milkshake-34.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(63, 6, 'Non-alcohol Beverage', 'Thick shake Premium caramel', 3.95, 'https://www.amytreasure.com/wp-content/uploads/2019/07/2K3A4574.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(64, 6, 'Non-alcohol Beverage', '0.25 LT Fuze Tea Green Tea', 2.5, 'https://static-images.jumbo.com/product_images/080920212317_428484FLS-1_360x360_2.png', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(65, 6, 'Non-alcohol Beverage', '0.33 Liter Coca Cola', 2, 'https://images.quickoffice.nl/002/600x450/897061p1.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(66, 6, 'Non-alcohol Beverage', '0.33 liter Fernandes Cherry', 2, 'https://media.foox.nl/FT/AFB/high/9492.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(67, 6, 'Non-alcohol Beverage', '0.33 liter Fanta', 2, 'https://cdn.pixabay.com/photo/2013/03/01/18/48/aluminum-87987_960_720.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(68, 6, 'Non-alcohol Beverage', '0.33 liter Fanta Cassis', 2, 'https://www.lely-shop.nl/wp-content/uploads/2022/06/product-fanta-cassis-blik.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(69, 6, 'Non-alcohol Beverage', '0.33 liter Fernandes Red Grape', 2, 'https://jilpaqshop.nl/wp-content/uploads/2020/08/2445279268583aa6e403e4cf19cd2a40_mid_r.jpg', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(70, 6, 'Non-alcohol Beverage', 'Fria Grape', 2.75, 'https://www.antilliaanse-toko.nl/media/catalog/product/cache/1ca3c8b1c6458f0eb1a5e1747c261955/f/r/fria_grape_chiki.png', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(71, 6, 'Non-alcohol Beverage', '0.5 liter Spa water', 2.95, 'https://static-images.jumbo.com/product_images/010820221916_448284FLS-1_720x720.png', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(72, 6, 'Non-alcohol Beverage', 'Minute Maid', 4.95, 'https://www.minutemaid.com/content/dam/nagbrands/us/minutemaidus/en/products/mm-lemonade-product-page.png', 34, '2022-10-12 12:50:40', '2022-10-12 12:50:40'),
(73, 7, 'Alcohol beverage', 'Smirnoff Ice Vodka Mixed Drink 70cl', 3.5, 'https://assets.sainsburys-groceries.co.uk/gol/3999417/1/640x640.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(74, 7, 'Alcohol beverage', 'White Claw Hard Seltzer 330ml', 3.95, 'https://static-images.jumbo.com/product_images/040420221002_499263STK-1_360x360_2.png', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(75, 7, 'Alcohol beverage', 'Heineken Premium Pilsener Bier', 10.95, 'https://cdn.pixabay.com/photo/2013/11/13/19/49/beer-210197_960_720.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(76, 7, 'Alcohol beverage', 'Bavaria - Pils 33cl', 7.5, 'https://syndy-content.azureedge.net/media/products/9bd7d5da-6b58-4634-95f5-487c7fb81164/images/AW0HA3GItENDpZ-NPK0ohvI./AABKcyf-AwDc9AjZUaxZxw.580x580.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(77, 7, 'Alcohol beverage', 'Jupiler Belgisch Pils 33cl', 8, 'https://cdn.pixabay.com/photo/2015/10/21/14/42/beer-tap-999786_960_720.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(78, 7, 'Alcohol beverage', 'Grolsch - Pils - 25cl', 9.4, 'https://static.ah.nl/dam/product/AHI_43545239383235343039?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(79, 7, 'Alcohol beverage', 'Orbea - Pinot Grigio - 750ML', 4.9, 'https://www.supermarktaanbiedingen.com/public/images/product/2019/27/0-270258fls-orbea-blush-pinot-grigio-750ml.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(80, 7, 'Alcohol beverage', 'Excellence - Chardonnay - 750ML', 5.99, 'https://www.supermarktaanbiedingen.com/public/images/discount/2018/06/701237.png', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(81, 7, 'Alcohol beverage', 'Leffe Blond Belgisch Abdijbier Flessen', 4, 'https://static-images.jumbo.com/product_images/170420210207_275061PAK-1_720x720.png', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(82, 7, 'Alcohol beverage', 'Ponche Crema Curacao', 9.75, 'https://www.universalfws.com/images/product/large/087236657994.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(83, 7, 'Alcohol beverage', 'Pistachio Curacao', 8.95, 'https://res.cloudinary.com/saucey/image/upload/v1556913484/ehudf9miyedbpju9jdt7.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(84, 7, 'Alcohol beverage', 'Moët & Chandon - Brut Impérial in giftbox', 6.95, 'https://cdn.webshopapp.com/shops/82078/files/318220230/image.jpg', 34, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(85, 8, 'Dessert', 'Dutch Stroopwafel', 3.95, 'https://cdn.pixabay.com/photo/2021/01/28/12/02/stroopwafels-5957805_960_720.jpg', 46, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(86, 8, 'Dessert', 'Dutch Apple Pie', 4.95, 'https://www.cookingclassy.com/wp-content/uploads/2019/11/dutch-apple-pie-4.jpg', 47, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(87, 8, 'Dessert', 'Oliebollen (Dutch Doughnuts)', 5.95, 'https://leitesculinaria.com/wp-content/uploads/2018/11/oliebollen-dutch-doughnuts-fp.jpg', 48, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(88, 8, 'Dessert', 'Bulla cake', 6.99, 'http://cdn.shopify.com/s/files/1/1621/1905/products/IMG_20180918_124054_grande.jpg?v=1538400932', 49, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(89, 8, 'Dessert', 'Sweet potato pudding', 7.95, 'https://serenalissy.com/wp-content/uploads/2021/11/Jamaican-Sweet-Potato-Pudding-Recipe-500x375.jpg', 50, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(90, 8, 'Dessert', 'Bun & Cheese', 8.99, 'https://www.caribbeannationalweekly.com/wp-content/uploads/2020/04/BunCheese.jpg', 51, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(91, 8, 'Dessert', 'Li di fruta', 2.95, 'https://cdn.shopify.com/s/files/1/0554/0298/7717/collections/20210320_074648_1400x.jpg?v=1617767397', 52, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(92, 8, 'Dessert', 'Li di Pinda', 2.99, 'http://recepten999.nl/cache/37/3768cebfc27f4a12e6a0ad15c3cebf5d.jpg', 53, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(93, 8, 'Dessert', 'Caramel Pecan Ice-cream', 3.95, 'https://cdn.shopify.com/s/files/1/0179/4028/3492/products/75261821204-1_832x1000.jpg?v=1606339658', 54, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(94, 8, 'Dessert', 'Tumba Ice-Cream', 3.99, 'https://static.wixstatic.com/media/5f01d5_1138df17952c44849608286b4091bba9~mv2.png/v1/fill/w_960,h_350,al_c,lg_1,q_85,enc_auto/5f01d5_1138df17952c44849608286b4091bba9~mv2.png', 55, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(95, 8, 'Dessert', 'Arepa di pampuna', 4.95, 'https://i1.wp.com/www.kruimelsenkaneel.nl/wp-content/uploads/2016/11/pompoenpannekoeken.jpg?fit=2636%2C1768&ssl=1', 56, '2022-10-14 13:46:10', '2022-10-14 13:46:10'),
(96, 8, 'Dessert', 'Pandushi', 4.99, 'https://www.antilliaansekeuken.nl/wp-content/uploads/2014/04/rsz_pandushi_kokolishi.jpg', 57, '2022-10-14 13:46:10', '2022-10-14 13:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerId` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_ibfk_1` (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerId`, `updated_at`, `created_at`) VALUES
(34, 35, '2022-12-01 16:44:04', '2022-12-01 16:44:04'),
(35, 36, '2022-12-06 11:56:44', '2022-12-06 11:56:44'),
(36, 37, '2022-12-06 11:58:31', '2022-12-06 11:58:31'),
(37, 38, '2022-12-06 11:59:22', '2022-12-06 11:59:22'),
(38, 39, '2022-12-06 12:03:47', '2022-12-06 12:03:47'),
(39, 40, '2022-12-06 12:19:23', '2022-12-06 12:19:23'),
(40, 41, '2022-12-06 12:22:11', '2022-12-06 12:22:11'),
(41, 42, '2022-12-06 12:22:51', '2022-12-06 12:22:51'),
(42, 43, '2022-12-06 12:23:22', '2022-12-06 12:23:22'),
(43, 44, '2022-12-06 12:25:15', '2022-12-06 12:25:15'),
(44, 45, '2022-12-06 12:27:09', '2022-12-06 12:27:09'),
(45, 46, '2022-12-06 12:27:26', '2022-12-06 12:27:26'),
(46, 47, '2022-12-06 12:30:57', '2022-12-06 12:30:57'),
(47, 48, '2022-12-06 12:31:34', '2022-12-06 12:31:34'),
(48, 49, '2022-12-06 12:33:25', '2022-12-06 12:33:25'),
(49, 50, '2022-12-06 12:33:50', '2022-12-06 12:33:50'),
(50, 51, '2022-12-06 12:34:51', '2022-12-06 12:34:51'),
(51, 52, '2022-12-06 12:35:35', '2022-12-06 12:35:35'),
(52, 53, '2022-12-06 12:36:14', '2022-12-06 12:36:14'),
(53, 54, '2022-12-06 12:37:15', '2022-12-06 12:37:15'),
(54, 55, '2022-12-06 12:37:49', '2022-12-06 12:37:49'),
(55, 56, '2022-12-06 12:38:44', '2022-12-06 12:38:44'),
(56, 57, '2022-12-06 12:40:53', '2022-12-06 12:40:53'),
(57, 58, '2022-12-06 12:41:11', '2022-12-06 12:41:11'),
(58, 59, '2022-12-06 12:41:36', '2022-12-06 12:41:36'),
(59, 60, '2022-12-06 12:41:49', '2022-12-06 12:41:49'),
(60, 61, '2022-12-06 12:42:05', '2022-12-06 12:42:05'),
(61, 62, '2022-12-06 12:43:08', '2022-12-06 12:43:08'),
(62, 63, '2022-12-06 12:44:08', '2022-12-06 12:44:08'),
(63, 64, '2022-12-06 12:45:06', '2022-12-06 12:45:06'),
(64, 65, '2022-12-06 12:46:07', '2022-12-06 12:46:07'),
(65, 66, '2022-12-06 12:47:32', '2022-12-06 12:47:32'),
(66, 67, '2022-12-06 12:48:16', '2022-12-06 12:48:16'),
(67, 68, '2022-12-06 12:48:46', '2022-12-06 12:48:46'),
(68, 69, '2022-12-06 12:54:22', '2022-12-06 12:54:22'),
(69, 70, '2022-12-06 12:54:34', '2022-12-06 12:54:34'),
(70, 71, '2022-12-06 12:55:06', '2022-12-06 12:55:06'),
(71, 72, '2022-12-06 12:55:29', '2022-12-06 12:55:29'),
(72, 73, '2022-12-06 12:56:02', '2022-12-06 12:56:02'),
(73, 74, '2022-12-06 12:57:13', '2022-12-06 12:57:13'),
(74, 75, '2022-12-06 12:57:24', '2022-12-06 12:57:24'),
(75, 76, '2022-12-06 12:59:24', '2022-12-06 12:59:24'),
(76, 77, '2022-12-06 12:59:56', '2022-12-06 12:59:56'),
(77, 78, '2022-12-07 12:03:28', '2022-12-07 12:03:28'),
(78, 79, '2022-12-07 12:04:33', '2022-12-07 12:04:33'),
(79, 80, '2022-12-07 12:06:34', '2022-12-07 12:06:34'),
(80, 81, '2022-12-07 12:07:08', '2022-12-07 12:07:08'),
(81, 82, '2022-12-07 12:07:48', '2022-12-07 12:07:48'),
(82, 83, '2022-12-07 12:08:14', '2022-12-07 12:08:14'),
(83, 84, '2022-12-07 12:08:52', '2022-12-07 12:08:52'),
(84, 85, '2022-12-07 12:09:09', '2022-12-07 12:09:09'),
(85, 86, '2022-12-07 12:10:02', '2022-12-07 12:10:02'),
(86, 87, '2022-12-07 12:10:20', '2022-12-07 12:10:20'),
(87, 88, '2022-12-07 12:36:29', '2022-12-07 12:36:29'),
(88, 89, '2022-12-07 12:36:52', '2022-12-07 12:36:52'),
(89, 90, '2022-12-07 12:40:48', '2022-12-07 12:40:48'),
(90, 91, '2022-12-07 12:41:29', '2022-12-07 12:41:29'),
(91, 92, '2022-12-07 12:41:51', '2022-12-07 12:41:51'),
(92, 93, '2022-12-07 12:42:48', '2022-12-07 12:42:48'),
(93, 94, '2022-12-07 12:43:21', '2022-12-07 12:43:21'),
(94, 95, '2022-12-07 12:43:50', '2022-12-07 12:43:50'),
(95, 96, '2022-12-07 12:44:56', '2022-12-07 12:44:56'),
(96, 97, '2022-12-07 12:45:28', '2022-12-07 12:45:28'),
(97, 98, '2022-12-07 12:46:23', '2022-12-07 12:46:23'),
(98, 99, '2022-12-07 12:57:09', '2022-12-07 12:57:09'),
(99, 100, '2022-12-07 13:02:16', '2022-12-07 13:02:16'),
(100, 101, '2022-12-07 13:02:21', '2022-12-07 13:02:21'),
(101, 102, '2022-12-07 13:02:41', '2022-12-07 13:02:41'),
(102, 103, '2022-12-07 13:02:48', '2022-12-07 13:02:48'),
(103, 104, '2022-12-07 13:04:38', '2022-12-07 13:04:38'),
(104, 105, '2022-12-07 13:05:22', '2022-12-07 13:05:22'),
(105, 106, '2022-12-07 13:05:44', '2022-12-07 13:05:44'),
(106, 107, '2022-12-07 13:09:17', '2022-12-07 13:09:17'),
(107, 108, '2022-12-07 13:10:07', '2022-12-07 13:10:07'),
(108, 109, '2022-12-07 13:11:07', '2022-12-07 13:11:07'),
(109, 110, '2022-12-07 13:14:37', '2022-12-07 13:14:37'),
(110, 111, '2022-12-07 13:14:52', '2022-12-07 13:14:52'),
(111, 112, '2022-12-07 13:16:53', '2022-12-07 13:16:53'),
(112, 113, '2022-12-07 13:17:14', '2022-12-07 13:17:14'),
(113, 114, '2022-12-07 13:18:18', '2022-12-07 13:18:18'),
(114, 115, '2022-12-07 13:19:22', '2022-12-07 13:19:22'),
(115, 116, '2022-12-07 13:19:49', '2022-12-07 13:19:49'),
(116, 117, '2022-12-07 13:21:30', '2022-12-07 13:21:30'),
(117, 118, '2022-12-07 13:21:59', '2022-12-07 13:21:59'),
(118, 119, '2022-12-07 13:22:16', '2022-12-07 13:22:16'),
(119, 120, '2022-12-07 13:22:41', '2022-12-07 13:22:41'),
(120, 121, '2022-12-07 13:30:14', '2022-12-07 13:30:14'),
(121, 122, '2022-12-07 13:30:43', '2022-12-07 13:30:43'),
(122, 123, '2022-12-07 13:31:12', '2022-12-07 13:31:12'),
(123, 124, '2022-12-07 13:31:39', '2022-12-07 13:31:39'),
(124, 125, '2022-12-07 13:31:46', '2022-12-07 13:31:46'),
(125, 126, '2022-12-07 13:31:51', '2022-12-07 13:31:51'),
(126, 127, '2022-12-07 13:33:07', '2022-12-07 13:33:07'),
(127, 128, '2022-12-07 13:34:01', '2022-12-07 13:34:01'),
(128, 129, '2022-12-12 14:51:38', '2022-12-12 14:51:38'),
(129, 130, '2022-12-12 14:59:17', '2022-12-12 14:59:17'),
(130, 131, '2022-12-12 14:59:53', '2022-12-12 14:59:53'),
(131, 132, '2022-12-12 15:00:17', '2022-12-12 15:00:17'),
(132, 133, '2022-12-12 15:00:45', '2022-12-12 15:00:45'),
(133, 134, '2022-12-12 15:01:26', '2022-12-12 15:01:26'),
(134, 135, '2022-12-12 15:03:32', '2022-12-12 15:03:32'),
(135, 136, '2022-12-12 15:03:42', '2022-12-12 15:03:42'),
(136, 137, '2022-12-12 15:06:38', '2022-12-12 15:06:38'),
(137, 138, '2022-12-12 15:06:54', '2022-12-12 15:06:54'),
(138, 139, '2022-12-12 15:10:59', '2022-12-12 15:10:59'),
(139, 140, '2022-12-12 15:12:23', '2022-12-12 15:12:23'),
(140, 141, '2022-12-12 15:15:07', '2022-12-12 15:15:07'),
(141, 142, '2022-12-12 15:16:13', '2022-12-12 15:16:13'),
(142, 143, '2022-12-12 15:17:26', '2022-12-12 15:17:26'),
(143, 144, '2022-12-12 15:17:37', '2022-12-12 15:17:37'),
(144, 145, '2022-12-12 15:18:36', '2022-12-12 15:18:36'),
(145, 146, '2022-12-12 15:19:02', '2022-12-12 15:19:02'),
(146, 147, '2022-12-12 15:20:01', '2022-12-12 15:20:01'),
(147, 148, '2022-12-12 15:21:44', '2022-12-12 15:21:44'),
(148, 149, '2022-12-12 15:46:25', '2022-12-12 15:46:25'),
(149, 150, '2022-12-12 15:47:06', '2022-12-12 15:47:06'),
(150, 151, '2022-12-12 15:48:48', '2022-12-12 15:48:48'),
(151, 152, '2022-12-12 15:49:01', '2022-12-12 15:49:01'),
(152, 153, '2022-12-12 15:52:55', '2022-12-12 15:52:55'),
(153, 154, '2022-12-12 15:53:10', '2022-12-12 15:53:10'),
(154, 155, '2022-12-12 15:53:45', '2022-12-12 15:53:45'),
(155, 156, '2022-12-12 15:56:22', '2022-12-12 15:56:22'),
(156, 157, '2022-12-12 15:56:40', '2022-12-12 15:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `productid` (`productid`),
  KEY `order_details_ibfk_3` (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `customerid`, `productid`, `quantity`, `created_at`, `updated_at`) VALUES
(9, 34, 62, 1, '2022-12-01 16:44:04', '2022-12-01 16:44:04'),
(10, 34, 6, 1, '2022-12-01 16:44:04', '2022-12-01 16:44:04'),
(11, 34, 42, 1, '2022-12-01 16:44:04', '2022-12-01 16:44:04'),
(12, 35, 1, 1, '2022-12-06 11:56:44', '2022-12-06 11:56:44'),
(13, 35, 14, 1, '2022-12-06 11:56:44', '2022-12-06 11:56:44'),
(14, 36, 1, 1, '2022-12-06 11:58:31', '2022-12-06 11:58:31'),
(15, 36, 14, 1, '2022-12-06 11:58:31', '2022-12-06 11:58:31'),
(16, 37, 1, 1, '2022-12-06 11:59:22', '2022-12-06 11:59:22'),
(17, 37, 14, 1, '2022-12-06 11:59:22', '2022-12-06 11:59:22'),
(18, 38, 1, 1, '2022-12-06 12:03:47', '2022-12-06 12:03:47'),
(19, 38, 14, 1, '2022-12-06 12:03:47', '2022-12-06 12:03:47'),
(20, 39, 1, 1, '2022-12-06 12:19:23', '2022-12-06 12:19:23'),
(21, 39, 14, 1, '2022-12-06 12:19:23', '2022-12-06 12:19:23'),
(22, 40, 1, 1, '2022-12-06 12:22:11', '2022-12-06 12:22:11'),
(23, 40, 14, 1, '2022-12-06 12:22:11', '2022-12-06 12:22:11'),
(24, 41, 1, 1, '2022-12-06 12:22:51', '2022-12-06 12:22:51'),
(25, 41, 14, 1, '2022-12-06 12:22:51', '2022-12-06 12:22:51'),
(26, 42, 1, 1, '2022-12-06 12:23:22', '2022-12-06 12:23:22'),
(27, 42, 14, 1, '2022-12-06 12:23:22', '2022-12-06 12:23:22'),
(28, 43, 1, 1, '2022-12-06 12:25:15', '2022-12-06 12:25:15'),
(29, 43, 14, 1, '2022-12-06 12:25:15', '2022-12-06 12:25:15'),
(30, 44, 1, 1, '2022-12-06 12:27:09', '2022-12-06 12:27:09'),
(31, 44, 14, 1, '2022-12-06 12:27:09', '2022-12-06 12:27:09'),
(32, 45, 1, 1, '2022-12-06 12:27:26', '2022-12-06 12:27:26'),
(33, 45, 14, 1, '2022-12-06 12:27:26', '2022-12-06 12:27:26'),
(34, 46, 1, 1, '2022-12-06 12:30:57', '2022-12-06 12:30:57'),
(35, 46, 14, 1, '2022-12-06 12:30:57', '2022-12-06 12:30:57'),
(36, 47, 1, 1, '2022-12-06 12:31:34', '2022-12-06 12:31:34'),
(37, 47, 14, 1, '2022-12-06 12:31:34', '2022-12-06 12:31:34'),
(38, 48, 1, 1, '2022-12-06 12:33:25', '2022-12-06 12:33:25'),
(39, 48, 14, 1, '2022-12-06 12:33:25', '2022-12-06 12:33:25'),
(40, 49, 1, 1, '2022-12-06 12:33:50', '2022-12-06 12:33:50'),
(41, 49, 14, 1, '2022-12-06 12:33:50', '2022-12-06 12:33:50'),
(42, 50, 1, 1, '2022-12-06 12:34:51', '2022-12-06 12:34:51'),
(43, 50, 14, 1, '2022-12-06 12:34:51', '2022-12-06 12:34:51'),
(44, 51, 1, 1, '2022-12-06 12:35:35', '2022-12-06 12:35:35'),
(45, 51, 14, 1, '2022-12-06 12:35:35', '2022-12-06 12:35:35'),
(46, 52, 1, 1, '2022-12-06 12:36:14', '2022-12-06 12:36:14'),
(47, 52, 14, 1, '2022-12-06 12:36:14', '2022-12-06 12:36:14'),
(48, 53, 1, 1, '2022-12-06 12:37:15', '2022-12-06 12:37:15'),
(49, 53, 14, 1, '2022-12-06 12:37:15', '2022-12-06 12:37:15'),
(50, 54, 1, 1, '2022-12-06 12:37:49', '2022-12-06 12:37:49'),
(51, 54, 14, 1, '2022-12-06 12:37:49', '2022-12-06 12:37:49'),
(52, 55, 1, 1, '2022-12-06 12:38:44', '2022-12-06 12:38:44'),
(53, 55, 14, 1, '2022-12-06 12:38:44', '2022-12-06 12:38:44'),
(54, 56, 1, 1, '2022-12-06 12:40:53', '2022-12-06 12:40:53'),
(55, 56, 14, 1, '2022-12-06 12:40:53', '2022-12-06 12:40:53'),
(56, 57, 1, 1, '2022-12-06 12:41:11', '2022-12-06 12:41:11'),
(57, 57, 14, 1, '2022-12-06 12:41:11', '2022-12-06 12:41:11'),
(58, 58, 1, 1, '2022-12-06 12:41:36', '2022-12-06 12:41:36'),
(59, 58, 14, 1, '2022-12-06 12:41:36', '2022-12-06 12:41:36'),
(60, 59, 1, 1, '2022-12-06 12:41:49', '2022-12-06 12:41:49'),
(61, 59, 14, 1, '2022-12-06 12:41:49', '2022-12-06 12:41:49'),
(62, 60, 1, 1, '2022-12-06 12:42:05', '2022-12-06 12:42:05'),
(63, 60, 14, 1, '2022-12-06 12:42:05', '2022-12-06 12:42:05'),
(64, 61, 1, 1, '2022-12-06 12:43:08', '2022-12-06 12:43:08'),
(65, 61, 14, 1, '2022-12-06 12:43:08', '2022-12-06 12:43:08'),
(66, 62, 1, 1, '2022-12-06 12:44:08', '2022-12-06 12:44:08'),
(67, 62, 14, 1, '2022-12-06 12:44:08', '2022-12-06 12:44:08'),
(68, 63, 1, 1, '2022-12-06 12:45:06', '2022-12-06 12:45:06'),
(69, 63, 14, 1, '2022-12-06 12:45:06', '2022-12-06 12:45:06'),
(70, 64, 1, 1, '2022-12-06 12:46:07', '2022-12-06 12:46:07'),
(71, 64, 14, 1, '2022-12-06 12:46:07', '2022-12-06 12:46:07'),
(72, 65, 1, 1, '2022-12-06 12:47:32', '2022-12-06 12:47:32'),
(73, 65, 14, 1, '2022-12-06 12:47:32', '2022-12-06 12:47:32'),
(74, 66, 1, 1, '2022-12-06 12:48:16', '2022-12-06 12:48:16'),
(75, 66, 14, 1, '2022-12-06 12:48:16', '2022-12-06 12:48:16'),
(76, 67, 1, 1, '2022-12-06 12:48:46', '2022-12-06 12:48:46'),
(77, 67, 14, 1, '2022-12-06 12:48:46', '2022-12-06 12:48:46'),
(78, 68, 1, 1, '2022-12-06 12:54:22', '2022-12-06 12:54:22'),
(79, 68, 14, 1, '2022-12-06 12:54:22', '2022-12-06 12:54:22'),
(80, 69, 1, 1, '2022-12-06 12:54:34', '2022-12-06 12:54:34'),
(81, 69, 14, 1, '2022-12-06 12:54:34', '2022-12-06 12:54:34'),
(82, 70, 1, 1, '2022-12-06 12:55:06', '2022-12-06 12:55:06'),
(83, 70, 14, 1, '2022-12-06 12:55:06', '2022-12-06 12:55:06'),
(84, 71, 1, 1, '2022-12-06 12:55:29', '2022-12-06 12:55:29'),
(85, 71, 14, 1, '2022-12-06 12:55:29', '2022-12-06 12:55:29'),
(86, 72, 1, 1, '2022-12-06 12:56:02', '2022-12-06 12:56:02'),
(87, 72, 14, 1, '2022-12-06 12:56:02', '2022-12-06 12:56:02'),
(88, 73, 1, 1, '2022-12-06 12:57:13', '2022-12-06 12:57:13'),
(89, 73, 14, 1, '2022-12-06 12:57:13', '2022-12-06 12:57:13'),
(90, 74, 1, 1, '2022-12-06 12:57:24', '2022-12-06 12:57:24'),
(91, 74, 14, 1, '2022-12-06 12:57:24', '2022-12-06 12:57:24'),
(92, 75, 1, 1, '2022-12-06 12:59:24', '2022-12-06 12:59:24'),
(93, 75, 14, 1, '2022-12-06 12:59:24', '2022-12-06 12:59:24'),
(94, 76, 1, 1, '2022-12-06 12:59:56', '2022-12-06 12:59:56'),
(95, 76, 14, 1, '2022-12-06 12:59:56', '2022-12-06 12:59:56'),
(96, 77, 1, 1, '2022-12-07 12:03:28', '2022-12-07 12:03:28'),
(97, 78, 1, 1, '2022-12-07 12:04:33', '2022-12-07 12:04:33'),
(98, 79, 1, 1, '2022-12-07 12:06:34', '2022-12-07 12:06:34'),
(99, 80, 1, 1, '2022-12-07 12:07:08', '2022-12-07 12:07:08'),
(100, 81, 1, 1, '2022-12-07 12:07:48', '2022-12-07 12:07:48'),
(101, 82, 1, 1, '2022-12-07 12:08:14', '2022-12-07 12:08:14'),
(102, 83, 1, 1, '2022-12-07 12:08:52', '2022-12-07 12:08:52'),
(103, 84, 1, 1, '2022-12-07 12:09:09', '2022-12-07 12:09:09'),
(104, 85, 1, 1, '2022-12-07 12:10:02', '2022-12-07 12:10:02'),
(105, 86, 1, 1, '2022-12-07 12:10:20', '2022-12-07 12:10:20'),
(106, 87, 1, 1, '2022-12-07 12:36:29', '2022-12-07 12:36:29'),
(107, 88, 1, 1, '2022-12-07 12:36:52', '2022-12-07 12:36:52'),
(108, 89, 1, 1, '2022-12-07 12:40:48', '2022-12-07 12:40:48'),
(109, 90, 1, 1, '2022-12-07 12:41:29', '2022-12-07 12:41:29'),
(110, 91, 1, 1, '2022-12-07 12:41:51', '2022-12-07 12:41:51'),
(111, 92, 1, 1, '2022-12-07 12:42:48', '2022-12-07 12:42:48'),
(112, 93, 1, 1, '2022-12-07 12:43:21', '2022-12-07 12:43:21'),
(113, 94, 1, 1, '2022-12-07 12:43:50', '2022-12-07 12:43:50'),
(114, 95, 1, 1, '2022-12-07 12:44:56', '2022-12-07 12:44:56'),
(115, 96, 1, 1, '2022-12-07 12:45:28', '2022-12-07 12:45:28'),
(116, 97, 1, 1, '2022-12-07 12:46:23', '2022-12-07 12:46:23'),
(117, 98, 1, 1, '2022-12-07 12:57:09', '2022-12-07 12:57:09'),
(118, 99, 1, 1, '2022-12-07 13:02:16', '2022-12-07 13:02:16'),
(119, 100, 1, 1, '2022-12-07 13:02:21', '2022-12-07 13:02:21'),
(120, 101, 1, 1, '2022-12-07 13:02:41', '2022-12-07 13:02:41'),
(121, 102, 1, 1, '2022-12-07 13:02:48', '2022-12-07 13:02:48'),
(122, 103, 1, 1, '2022-12-07 13:04:38', '2022-12-07 13:04:38'),
(123, 104, 1, 1, '2022-12-07 13:05:22', '2022-12-07 13:05:22'),
(124, 105, 1, 1, '2022-12-07 13:05:44', '2022-12-07 13:05:44'),
(125, 106, 1, 1, '2022-12-07 13:09:17', '2022-12-07 13:09:17'),
(126, 107, 1, 1, '2022-12-07 13:10:07', '2022-12-07 13:10:07'),
(127, 108, 1, 1, '2022-12-07 13:11:07', '2022-12-07 13:11:07'),
(128, 109, 1, 1, '2022-12-07 13:14:37', '2022-12-07 13:14:37'),
(129, 110, 1, 1, '2022-12-07 13:14:52', '2022-12-07 13:14:52'),
(130, 111, 1, 1, '2022-12-07 13:16:53', '2022-12-07 13:16:53'),
(131, 111, 5, 1, '2022-12-07 13:16:53', '2022-12-07 13:16:53'),
(132, 112, 1, 1, '2022-12-07 13:17:14', '2022-12-07 13:17:14'),
(133, 112, 5, 1, '2022-12-07 13:17:14', '2022-12-07 13:17:14'),
(134, 113, 1, 1, '2022-12-07 13:18:18', '2022-12-07 13:18:18'),
(135, 113, 5, 1, '2022-12-07 13:18:18', '2022-12-07 13:18:18'),
(136, 113, 2, 1, '2022-12-07 13:18:18', '2022-12-07 13:18:18'),
(137, 114, 1, 1, '2022-12-07 13:19:22', '2022-12-07 13:19:22'),
(138, 114, 5, 1, '2022-12-07 13:19:22', '2022-12-07 13:19:22'),
(139, 114, 2, 1, '2022-12-07 13:19:22', '2022-12-07 13:19:22'),
(140, 115, 1, 1, '2022-12-07 13:19:49', '2022-12-07 13:19:49'),
(141, 115, 5, 1, '2022-12-07 13:19:49', '2022-12-07 13:19:49'),
(142, 115, 2, 1, '2022-12-07 13:19:49', '2022-12-07 13:19:49'),
(143, 116, 1, 1, '2022-12-07 13:21:30', '2022-12-07 13:21:30'),
(144, 116, 5, 1, '2022-12-07 13:21:30', '2022-12-07 13:21:30'),
(145, 116, 2, 1, '2022-12-07 13:21:30', '2022-12-07 13:21:30'),
(146, 117, 1, 1, '2022-12-07 13:21:59', '2022-12-07 13:21:59'),
(147, 117, 5, 1, '2022-12-07 13:21:59', '2022-12-07 13:21:59'),
(148, 117, 2, 1, '2022-12-07 13:21:59', '2022-12-07 13:21:59'),
(149, 118, 1, 1, '2022-12-07 13:22:16', '2022-12-07 13:22:16'),
(150, 118, 5, 1, '2022-12-07 13:22:16', '2022-12-07 13:22:16'),
(151, 118, 2, 1, '2022-12-07 13:22:16', '2022-12-07 13:22:16'),
(152, 119, 1, 1, '2022-12-07 13:22:41', '2022-12-07 13:22:41'),
(153, 119, 5, 1, '2022-12-07 13:22:41', '2022-12-07 13:22:41'),
(154, 119, 2, 1, '2022-12-07 13:22:41', '2022-12-07 13:22:41'),
(155, 120, 1, 1, '2022-12-07 13:30:14', '2022-12-07 13:30:14'),
(156, 120, 5, 1, '2022-12-07 13:30:14', '2022-12-07 13:30:14'),
(157, 120, 2, 1, '2022-12-07 13:30:14', '2022-12-07 13:30:14'),
(158, 121, 1, 1, '2022-12-07 13:30:43', '2022-12-07 13:30:43'),
(159, 121, 5, 1, '2022-12-07 13:30:43', '2022-12-07 13:30:43'),
(160, 121, 2, 1, '2022-12-07 13:30:43', '2022-12-07 13:30:43'),
(161, 122, 1, 1, '2022-12-07 13:31:12', '2022-12-07 13:31:12'),
(162, 122, 5, 1, '2022-12-07 13:31:12', '2022-12-07 13:31:12'),
(163, 122, 2, 1, '2022-12-07 13:31:12', '2022-12-07 13:31:12'),
(164, 123, 1, 1, '2022-12-07 13:31:39', '2022-12-07 13:31:39'),
(165, 123, 5, 1, '2022-12-07 13:31:39', '2022-12-07 13:31:39'),
(166, 123, 2, 1, '2022-12-07 13:31:39', '2022-12-07 13:31:39'),
(167, 124, 1, 1, '2022-12-07 13:31:46', '2022-12-07 13:31:46'),
(168, 124, 5, 1, '2022-12-07 13:31:46', '2022-12-07 13:31:46'),
(169, 124, 2, 1, '2022-12-07 13:31:46', '2022-12-07 13:31:46'),
(170, 125, 1, 1, '2022-12-07 13:31:51', '2022-12-07 13:31:51'),
(171, 125, 5, 1, '2022-12-07 13:31:51', '2022-12-07 13:31:51'),
(172, 125, 2, 1, '2022-12-07 13:31:51', '2022-12-07 13:31:51'),
(173, 126, 1, 1, '2022-12-07 13:33:07', '2022-12-07 13:33:07'),
(174, 126, 5, 1, '2022-12-07 13:33:07', '2022-12-07 13:33:07'),
(175, 126, 2, 1, '2022-12-07 13:33:07', '2022-12-07 13:33:07'),
(176, 127, 1, 1, '2022-12-07 13:34:01', '2022-12-07 13:34:01'),
(177, 127, 5, 1, '2022-12-07 13:34:01', '2022-12-07 13:34:01'),
(178, 127, 2, 1, '2022-12-07 13:34:01', '2022-12-07 13:34:01'),
(179, 128, 2, 1, '2022-12-12 14:51:38', '2022-12-12 14:51:38'),
(180, 129, 2, 1, '2022-12-12 14:59:17', '2022-12-12 14:59:17'),
(181, 130, 2, 1, '2022-12-12 14:59:53', '2022-12-12 14:59:53'),
(182, 131, 2, 1, '2022-12-12 15:00:17', '2022-12-12 15:00:17'),
(183, 132, 2, 1, '2022-12-12 15:00:45', '2022-12-12 15:00:45'),
(184, 133, 2, 1, '2022-12-12 15:01:26', '2022-12-12 15:01:26'),
(185, 134, 2, 1, '2022-12-12 15:03:32', '2022-12-12 15:03:32'),
(186, 135, 2, 1, '2022-12-12 15:03:42', '2022-12-12 15:03:42'),
(187, 136, 2, 1, '2022-12-12 15:06:38', '2022-12-12 15:06:38'),
(188, 137, 2, 1, '2022-12-12 15:06:54', '2022-12-12 15:06:54'),
(189, 138, 2, 1, '2022-12-12 15:10:59', '2022-12-12 15:10:59'),
(190, 139, 2, 1, '2022-12-12 15:12:23', '2022-12-12 15:12:23'),
(191, 140, 2, 1, '2022-12-12 15:15:07', '2022-12-12 15:15:07'),
(192, 141, 2, 1, '2022-12-12 15:16:13', '2022-12-12 15:16:13'),
(193, 142, 2, 1, '2022-12-12 15:17:26', '2022-12-12 15:17:26'),
(194, 143, 2, 1, '2022-12-12 15:17:37', '2022-12-12 15:17:37'),
(195, 144, 2, 1, '2022-12-12 15:18:36', '2022-12-12 15:18:36'),
(196, 145, 2, 1, '2022-12-12 15:19:02', '2022-12-12 15:19:02'),
(197, 146, 2, 1, '2022-12-12 15:20:01', '2022-12-12 15:20:01'),
(198, 147, 2, 1, '2022-12-12 15:21:44', '2022-12-12 15:21:44'),
(199, 148, 2, 1, '2022-12-12 15:46:25', '2022-12-12 15:46:25'),
(200, 149, 2, 1, '2022-12-12 15:47:06', '2022-12-12 15:47:06'),
(201, 150, 2, 1, '2022-12-12 15:48:48', '2022-12-12 15:48:48'),
(202, 151, 2, 1, '2022-12-12 15:49:01', '2022-12-12 15:49:01'),
(203, 152, 2, 1, '2022-12-12 15:52:55', '2022-12-12 15:52:55'),
(204, 153, 2, 1, '2022-12-12 15:53:10', '2022-12-12 15:53:10'),
(205, 154, 2, 1, '2022-12-12 15:53:45', '2022-12-12 15:53:45'),
(206, 155, 2, 1, '2022-12-12 15:56:22', '2022-12-12 15:56:22'),
(207, 156, 2, 1, '2022-12-12 15:56:40', '2022-12-12 15:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ps221122@edu.summacollege.nl', '$2y$10$hCRpfiV2itkM6Cip/5mf9eztPqkkTLQ8EN1kZnFxWUnFt7xk6GJIC', '2022-08-30 06:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pcode` varchar(11) NOT NULL,
  `hnumber` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `fname`, `tel`, `email`, `pcode`, `hnumber`, `created_at`, `updated_at`) VALUES
(35, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 25, '2022-12-01 16:44:04', '2022-12-01 16:44:04'),
(36, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 25, '2022-12-06 11:56:44', '2022-12-06 11:56:44'),
(37, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 11:58:30', '2022-12-06 11:58:30'),
(38, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 11:59:22', '2022-12-06 11:59:22'),
(39, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:03:47', '2022-12-06 12:03:47'),
(40, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:19:23', '2022-12-06 12:19:23'),
(41, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:22:11', '2022-12-06 12:22:11'),
(42, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:22:51', '2022-12-06 12:22:51'),
(43, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:23:22', '2022-12-06 12:23:22'),
(44, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:25:15', '2022-12-06 12:25:15'),
(45, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:27:09', '2022-12-06 12:27:09'),
(46, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:27:26', '2022-12-06 12:27:26'),
(47, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:30:56', '2022-12-06 12:30:56'),
(48, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:31:34', '2022-12-06 12:31:34'),
(49, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:33:25', '2022-12-06 12:33:25'),
(50, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:33:50', '2022-12-06 12:33:50'),
(51, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:34:51', '2022-12-06 12:34:51'),
(52, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:35:35', '2022-12-06 12:35:35'),
(53, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:36:14', '2022-12-06 12:36:14'),
(54, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:37:15', '2022-12-06 12:37:15'),
(55, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:37:49', '2022-12-06 12:37:49'),
(56, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:38:44', '2022-12-06 12:38:44'),
(57, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:40:53', '2022-12-06 12:40:53'),
(58, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:41:11', '2022-12-06 12:41:11'),
(59, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:41:36', '2022-12-06 12:41:36'),
(60, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:41:49', '2022-12-06 12:41:49'),
(61, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:42:05', '2022-12-06 12:42:05'),
(62, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:43:08', '2022-12-06 12:43:08'),
(63, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:44:08', '2022-12-06 12:44:08'),
(64, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:45:06', '2022-12-06 12:45:06'),
(65, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:46:07', '2022-12-06 12:46:07'),
(66, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:47:32', '2022-12-06 12:47:32'),
(67, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:48:16', '2022-12-06 12:48:16'),
(68, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:48:46', '2022-12-06 12:48:46'),
(69, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:54:22', '2022-12-06 12:54:22'),
(70, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:54:34', '2022-12-06 12:54:34'),
(71, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:55:06', '2022-12-06 12:55:06'),
(72, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:55:29', '2022-12-06 12:55:29'),
(73, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:56:02', '2022-12-06 12:56:02'),
(74, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:57:13', '2022-12-06 12:57:13'),
(75, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:57:24', '2022-12-06 12:57:24'),
(76, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:59:24', '2022-12-06 12:59:24'),
(77, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 78, '2022-12-06 12:59:56', '2022-12-06 12:59:56'),
(78, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:03:27', '2022-12-07 12:03:27'),
(79, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:04:33', '2022-12-07 12:04:33'),
(80, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:06:34', '2022-12-07 12:06:34'),
(81, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:07:08', '2022-12-07 12:07:08'),
(82, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:07:48', '2022-12-07 12:07:48'),
(83, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:08:13', '2022-12-07 12:08:13'),
(84, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:08:52', '2022-12-07 12:08:52'),
(85, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:09:09', '2022-12-07 12:09:09'),
(86, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:10:02', '2022-12-07 12:10:02'),
(87, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:10:19', '2022-12-07 12:10:19'),
(88, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:36:29', '2022-12-07 12:36:29'),
(89, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:36:52', '2022-12-07 12:36:52'),
(90, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:40:48', '2022-12-07 12:40:48'),
(91, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:41:29', '2022-12-07 12:41:29'),
(92, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:41:51', '2022-12-07 12:41:51'),
(93, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:42:48', '2022-12-07 12:42:48'),
(94, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:43:21', '2022-12-07 12:43:21'),
(95, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:43:50', '2022-12-07 12:43:50'),
(96, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:44:56', '2022-12-07 12:44:56'),
(97, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:45:28', '2022-12-07 12:45:28'),
(98, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:46:23', '2022-12-07 12:46:23'),
(99, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 12:57:09', '2022-12-07 12:57:09'),
(100, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:02:16', '2022-12-07 13:02:16'),
(101, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:02:21', '2022-12-07 13:02:21'),
(102, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:02:41', '2022-12-07 13:02:41'),
(103, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:02:48', '2022-12-07 13:02:48'),
(104, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:04:38', '2022-12-07 13:04:38'),
(105, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:05:22', '2022-12-07 13:05:22'),
(106, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:05:44', '2022-12-07 13:05:44'),
(107, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:09:17', '2022-12-07 13:09:17'),
(108, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:10:07', '2022-12-07 13:10:07'),
(109, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:11:07', '2022-12-07 13:11:07'),
(110, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:14:37', '2022-12-07 13:14:37'),
(111, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 58, '2022-12-07 13:14:52', '2022-12-07 13:14:52'),
(112, 'thays', 613690333, 'thaysbell43@gmail.com', '5621ak', 85, '2022-12-07 13:16:53', '2022-12-07 13:16:53'),
(113, 'thays', 613690333, 'thaysbell43@gmail.com', '5621ak', 85, '2022-12-07 13:17:14', '2022-12-07 13:17:14'),
(114, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:18:18', '2022-12-07 13:18:18'),
(115, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:19:22', '2022-12-07 13:19:22'),
(116, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:19:49', '2022-12-07 13:19:49'),
(117, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:21:30', '2022-12-07 13:21:30'),
(118, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:21:59', '2022-12-07 13:21:59'),
(119, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:22:15', '2022-12-07 13:22:15'),
(120, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:22:41', '2022-12-07 13:22:41'),
(121, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:30:14', '2022-12-07 13:30:14'),
(122, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:30:43', '2022-12-07 13:30:43'),
(123, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:31:12', '2022-12-07 13:31:12'),
(124, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:31:39', '2022-12-07 13:31:39'),
(125, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:31:46', '2022-12-07 13:31:46'),
(126, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:31:51', '2022-12-07 13:31:51'),
(127, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:33:07', '2022-12-07 13:33:07'),
(128, 'thays', 613690334, 'thaysbell43@gmail.com', '5621HN', 85, '2022-12-07 13:34:01', '2022-12-07 13:34:01'),
(129, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 14:51:38', '2022-12-12 14:51:38'),
(130, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 14:59:17', '2022-12-12 14:59:17'),
(131, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 14:59:53', '2022-12-12 14:59:53'),
(132, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:00:17', '2022-12-12 15:00:17'),
(133, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:00:45', '2022-12-12 15:00:45'),
(134, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:01:26', '2022-12-12 15:01:26'),
(135, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:03:32', '2022-12-12 15:03:32'),
(136, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:03:42', '2022-12-12 15:03:42'),
(137, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:06:38', '2022-12-12 15:06:38'),
(138, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:06:54', '2022-12-12 15:06:54'),
(139, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:10:59', '2022-12-12 15:10:59'),
(140, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:12:23', '2022-12-12 15:12:23'),
(141, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:15:07', '2022-12-12 15:15:07'),
(142, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:16:13', '2022-12-12 15:16:13'),
(143, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:17:26', '2022-12-12 15:17:26'),
(144, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:17:37', '2022-12-12 15:17:37'),
(145, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:18:36', '2022-12-12 15:18:36'),
(146, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:19:02', '2022-12-12 15:19:02'),
(147, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:20:01', '2022-12-12 15:20:01'),
(148, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:21:44', '2022-12-12 15:21:44'),
(149, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:46:24', '2022-12-12 15:46:24'),
(150, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:47:06', '2022-12-12 15:47:06'),
(151, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:48:48', '2022-12-12 15:48:48'),
(152, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:49:01', '2022-12-12 15:49:01'),
(153, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:52:55', '2022-12-12 15:52:55'),
(154, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:53:10', '2022-12-12 15:53:10'),
(155, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:53:45', '2022-12-12 15:53:45'),
(156, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:56:22', '2022-12-12 15:56:22'),
(157, 'test', 613690333, 'thaysbell43@gmail.com', '5621HN', 46, '2022-12-12 15:56:40', '2022-12-12 15:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `unit` int(11) NOT NULL,
  `barcode` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `name`, `price`, `unit`, `barcode`) VALUES
(1, 'flour', 15.96, 4000, 71012075027),
(2, 'Coconuts', 3.95, 55, 851492002023),
(3, 'ackee', 3.56, 2, 7430034980949),
(4, 'eggs', 1.5, 15, 50461633301),
(5, 'croissant', 0.85, 100, 107659288652),
(6, 'bacon', 1.5, 25, 115228085875),
(7, 'tomato', 0.95, 150, 935737717132),
(8, 'paprika', 1.2, 200, 867511943798),
(9, 'frikkadel', 0.99, 81, 421347784465),
(10, 'ayaka', 57.2, 99, 490207491470),
(11, 'shoarma', 83.17, 76, 598730106764),
(12, 'cheese', 18.99, 150, 359881619605),
(13, 'chicken', 88.3, 53, 28455593670),
(14, 'pineapple', 5.19, 67, 34283402513),
(15, 'mushrooms', 52.89, 36, 304321360789),
(16, 'pesto', 81.62, 90, 557063030823),
(17, 'noodle', 97.22, 65, 788297546625),
(18, 'spagetti', 56.88, 80, 601559878453),
(19, 'pepperoni', 64.97, 96, 400923537852),
(20, 'truffle', 100.04, 28, 915621327066),
(21, 'oil', 4.88, 26, 577704750833),
(22, 'shrimp', 43.23, 53, 374434845614),
(23, 'macaroni', 96.47, 91, 684725265017),
(24, 'milk', 15.12, 32, 276474410177),
(25, 'cornmeal', 88.76, 11, 912605721006),
(26, 'red snapper', 47.77, 18, 942977546320),
(27, 'bannana', 4.18, 51, 197509701737),
(28, 'black peas', 69.28, 64, 973487264900),
(29, 'oxtail', 72.34, 69, 181177108058),
(30, 'potatto', 56.58, 48, 682225462295),
(31, 'chicken foot', 25.81, 60, 985207384613),
(32, 'brocoli', 94.9, 81, 577623784518),
(33, 'caramel', 10.87, 26, 382196159174),
(34, 'blue Fernandes', 41.17, 28, 369664450287),
(35, 'coca cola', 10.8, 10, 205921778971),
(36, 'fria', 83.98, 83, 649127051565),
(37, 'Minute Maid', 58.19, 8, 131232872384),
(38, 'spa water', 45.59, 90, 96513018570),
(39, 'Smirnoff Ice Vodka Mixed', 98.94, 96, 773404362499),
(40, 'orange fanta', 38.66, 36, 545092858816),
(41, 'purple fanta', 28.64, 45, 628181693154),
(42, 'red Fernandes', 10.32, 79, 624501834804),
(43, 'White Claw Hard Seltzer', 61.9, 54, 104680153162),
(44, 'Heineken ', 64.26, 16, 120809474832),
(45, 'Bavaria', 2.75, 95, 459534181239),
(46, 'Jupiler', 9.75, 89, 716990406407),
(47, 'Chardonnay', 91.44, 23, 173859651711),
(48, 'Grolsch', 17.7, 97, 737917195740),
(49, 'Pinot Grigio', 32, 71, 224612723354),
(50, 'Leffe Blond Belgisch', 2.95, 45, 86838924811),
(51, 'Ponche Crema Curacao', 3.44, 55, 43023486447),
(52, 'Pistachio Curacao', 3.25, 55, 610053890285),
(53, 'Moët & Chandon', 4.95, 55, 986858276997),
(54, 'Fuze Tea Green', 2.5, 150, 80793807925),
(55, 'blackberry', 2.95, 4000, 779709239653),
(56, 'orange', 2.33, 99, 653908621453),
(57, 'siroop', 3.99, 15, 169604693056),
(58, 'pancake mix', 2.55, 99, 89491507047),
(59, 'waffle mix', 2.45, 99, 974781712451),
(60, 'bread', 0.85, 125, 358639796813),
(61, 'coffee mix', 3.95, 5000, 788451915659),
(62, 'chocolate', 1.25, 99, 203580473745),
(63, 'salt', 2.45, 100, 284118612940),
(64, 'butter', 4.56, 100, 10272631721),
(65, 'jams', 3.95, 100, 10272631721),
(66, 'Yogurt', 1.89, 2000, 216955606597),
(67, 'tortilla', 0.99, 150, 49977080104),
(68, 'onions', 6.95, 500, 40515039203),
(69, 'cabbage', 3.85, 100, 978514175403),
(70, 'brown sugar', 3.65, 100, 279611058902),
(71, 'avocado', 0.66, 56, 244730496161),
(72, 'saltfish', 7.95, 125, 834753867345),
(73, 'dumplings', 0, 125, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(360) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(33, NULL, 'Tashya Fernandez', 'ryni@mailinator.com', NULL, '$2y$10$2swEq9OYklD9jgHzABClneTpnEKj/ZLC2CshtXZeX9nrWWebA1JDa', NULL, '2022-12-12 12:50:45', '2022-12-12 12:50:45'),
(34, NULL, 'Kameko Flowers', 'tezuvywim@mailinator.com', NULL, '$2y$10$3TAw4xBE3DNCiuhkCZzgJ.h2RFcP6vEEUgFnSHa1rdbhDHy7P7Ufu', NULL, '2022-12-12 13:04:48', '2022-12-12 13:04:48'),
(35, NULL, 'Aline Gonzalez', 'nideb@mailinator.com', NULL, '$2y$10$a75Jvdwi7tqlrvsEWGwt6.qjGy1qLfJLptXXU5.AzSTYaJp4C4Oi2', NULL, '2022-12-12 13:05:48', '2022-12-12 13:05:48'),
(36, 'https://cdn.pixabay.com/photo/2015/11/17/13/13/puppy-1047521_960_720.jpg', 'Caldwell Patrick', 'zofenykyzi@mailinator.com', NULL, '$2y$10$rEMaq7gtewGH7kLC5BOlIeASp6LFu0y3iSPQKV3ec1qEiK4N9hU3i', NULL, '2022-12-12 13:07:43', '2022-12-12 13:07:43'),
(37, 'https://cdn.pixabay.com/photo/2015/11/17/13/13/puppy-1047521_960_720.jpg', 'Deacon Cain', 'hawa@mailinator.com', NULL, '$2y$10$1sxUfF1bt42OxywQcfpfTOBFEjUwBDNLo.j2tpreTOOVPEuU4UQLe', NULL, '2022-12-12 13:08:07', '2022-12-12 13:08:07'),
(38, 'https://cdn.pixabay.com/photo/2015/11/17/13/13/puppy-1047521_960_720.jpg', 'Murphy Gibbs', 'josy@mailinator.com', NULL, '$2y$10$ANAbYwvgvVXGptEXg93p.ucWwfmHHuVV6igMgQX0ktjoHKCSG6p7K', NULL, '2022-12-12 13:08:49', '2022-12-12 13:08:49'),
(39, NULL, 'Halla Holmes', 'mixiri@mailinator.com', NULL, '$2y$10$E0XoSdisVXfxMv.RQx/zKOy5yP2J.tzrM37cvJz3UdZ0GlYg0eUEu', NULL, '2022-12-12 13:09:09', '2022-12-12 13:09:09'),
(40, NULL, 'Clio Gregory', 'xema@mailinator.com', NULL, '$2y$10$0FP4cmNsy4aRDjMG91X1QuI3AByWR5W2N6W1/A/RRqS5XFlUQ8Kai', NULL, '2022-12-12 13:09:54', '2022-12-12 13:09:54'),
(41, NULL, 'Larissa Garrett', 'ziqozawe@mailinator.com', NULL, '$2y$10$EREXAHjOaiUY4tkmYgHcwOHM5lc2z1gLrS7MNiLUeftsYz8nZ8XYy', NULL, '2022-12-12 13:10:35', '2022-12-12 13:10:35'),
(42, 'https://cdn.pixabay.com/photo/2015/11/17/13/13/puppy-1047521_960_720.jpg', 'Bianca English', 'kixajyr@mailinator.com', NULL, '$2y$10$h16VqYTwQOU85iadLlb19eBIaAZu1.Pbb13ys7RQIqE9ONc9BYG7i', NULL, '2022-12-12 13:11:52', '2022-12-12 13:11:52'),
(44, 'https://cdn.pixabay.com/photo/2015/11/17/13/13/puppy-1047521_960_720.jpg', 'thays', 'thaysbell43@gmail.com', '2022-12-12 13:42:58', '$2y$10$IetexITXEHifqJ9SIMJ92ucEJwjdR3UkkJdfSeYp4h0j90KKXSMFy', 'oQ7yKdaLniFgHDUuifznHCowYcfZ60b5o6OGc28owMKQVoRrvn3hwFOEmZ3y', '2022-12-12 13:26:30', '2022-12-12 13:42:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee-users`
--
ALTER TABLE `employee-users`
  ADD CONSTRAINT `employee` FOREIGN KEY (`title`) REFERENCES `jobs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `eventlists`
--
ALTER TABLE `eventlists`
  ADD CONSTRAINT `eventlists_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`);

--
-- Constraints for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient` FOREIGN KEY (`descriptionid`) REFERENCES `descriptions` (`id`);

--
-- Constraints for table `ingredientdetails`
--
ALTER TABLE `ingredientdetails`
  ADD CONSTRAINT `ingredientdetails_ibfk_1` FOREIGN KEY (`i-id`) REFERENCES `ingredient` (`id`),
  ADD CONSTRAINT `ingredientdetails_ibfk_2` FOREIGN KEY (`i-id1`) REFERENCES `stocks` (`id`),
  ADD CONSTRAINT `ingredientdetails_ibfk_3` FOREIGN KEY (`i-id2`) REFERENCES `stocks` (`id`),
  ADD CONSTRAINT `ingredientdetails_ibfk_4` FOREIGN KEY (`i-id3`) REFERENCES `stocks` (`id`),
  ADD CONSTRAINT `ingredientdetails_ibfk_5` FOREIGN KEY (`i-id4`) REFERENCES `stocks` (`id`),
  ADD CONSTRAINT `ingredientdetails_ibfk_6` FOREIGN KEY (`i-id5`) REFERENCES `stocks` (`id`);

--
-- Constraints for table `menulists`
--
ALTER TABLE `menulists`
  ADD CONSTRAINT `category` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `description` FOREIGN KEY (`description`) REFERENCES `descriptions` (`id`),
  ADD CONSTRAINT `menulists_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`f_type`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `people` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `menulists` (`id`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`customerid`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
