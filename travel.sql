-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 05:58 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `a_pass` varchar(25) NOT NULL,
  `a_email` varchar(25) NOT NULL,
  `a_name` varchar(25) NOT NULL,
  `a_image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_pass`, `a_email`, `a_name`, `a_image`) VALUES
(1, '123', 'admin@gmail.com', 'admin', 'dhoni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(11) NOT NULL,
  `city` varchar(100) CHARACTER SET ascii DEFAULT NULL,
  `stateid` int(11) DEFAULT NULL,
  `countryid` tinyint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `city`, `stateid`, `countryid`) VALUES
(429, 'AMBIKAPUR', 6, 101),
(430, 'ANTAGARH', 6, 101),
(431, 'ARANG', 6, 101),
(432, 'BACHELI', 6, 101),
(433, 'BAGBAHERA', 6, 101),
(434, 'BAGICHA', 6, 101),
(435, 'BAIKUNTHPUR', 6, 101),
(436, 'BALOD', 6, 101),
(437, 'BALODABAZAR', 6, 101),
(438, 'BALRAMPUR', 6, 101),
(439, 'BARPALLI', 6, 101),
(440, 'BASANA', 6, 101),
(441, 'BASTANAR', 6, 101),
(442, 'BDERAJPUR', 6, 101),
(443, 'BEMETARA', 6, 101),
(444, 'BERLA', 6, 101),
(445, 'BHAIRONGARH', 6, 101),
(446, 'BHANUPRATAPPUR', 6, 101),
(447, 'BHARATHPUR', 6, 101),
(448, 'BHATAPARA', 6, 101),
(449, 'BHILAIGARH', 6, 101),
(450, 'BHOPALPATNAM', 6, 101),
(451, 'BIJAPUR', 6, 101),
(452, 'BILASPUR', 6, 101),
(453, 'BODLA', 6, 101),
(454, 'BOKABAND', 6, 101),
(455, 'CHANDIPARA', 6, 101),
(456, 'CHHINAGARH', 6, 101),
(457, 'CHHURIAKALA', 6, 101),
(458, 'CHINGMUT', 6, 101),
(459, 'CHUIKHADAN', 6, 101),
(460, 'DABHARA', 6, 101),
(461, 'DALLIRAJHARA', 6, 101),
(462, 'DANTEWADA', 6, 101),
(463, 'DEOBHOG', 6, 101),
(464, 'DHAMDA', 6, 101),
(465, 'DHAMTARI', 6, 101),
(466, 'DHARAMJAIGARH', 6, 101),
(467, 'DONGARGARH', 6, 101),
(468, 'DURG', 6, 101),
(469, 'DURGAKONDAL', 6, 101),
(470, 'FINGESHWAR', 6, 101),
(471, 'GARIABAND', 6, 101),
(472, 'GARPA', 6, 101),
(473, 'GHARGHODA', 6, 101),
(474, 'GOGUNDA', 6, 101),
(475, 'ILAMIDI', 6, 101),
(476, 'JAGDALPUR', 6, 101),
(477, 'JANJGIR', 6, 101),
(478, 'JARWA', 6, 101),
(479, 'JASHPURNAGAR', 6, 101),
(480, 'KANKER', 6, 101),
(481, 'KASDOL', 6, 101),
(482, 'KATHDOL', 6, 101),
(483, 'KATHGHORA', 6, 101),
(484, 'KAWARDHA', 6, 101),
(485, 'KESKAL', 6, 101),
(486, 'KHAIRGARH', 6, 101),
(487, 'KONDAGAON', 6, 101),
(488, 'KONTA', 6, 101),
(489, 'KORBA', 6, 101),
(490, 'KOTA', 6, 101),
(491, 'KOYELIBEDA', 6, 101),
(492, 'KUAKUNDA', 6, 101),
(493, 'KUNKURI', 6, 101),
(494, 'KURUD', 6, 101),
(495, 'LOHADIGUNDAH', 6, 101),
(496, 'LORMI', 6, 101),
(497, 'LUCKWADA', 6, 101),
(498, 'MAHASAMUND', 6, 101),
(499, 'MAKODI', 6, 101),
(500, 'MANENDRAGARH', 6, 101),
(501, 'MANPUR', 6, 101),
(502, 'MANPUR', 6, 101),
(503, 'MARWAHI', 6, 101),
(504, 'MOHLA', 6, 101),
(505, 'MUNGELI', 6, 101),
(506, 'NAGRI', 6, 101),
(507, 'NARAINPUR', 6, 101),
(508, 'NEORA', 6, 101),
(509, 'NETANAR', 6, 101),
(510, 'ODGI', 6, 101),
(511, 'PADAMKOT', 6, 101),
(512, 'PAKHANJUR', 6, 101),
(513, 'PALI', 6, 101),
(514, 'PANDARIA', 6, 101),
(515, 'PANDISHANKAR', 6, 101),
(516, 'PARASGAON', 6, 101),
(517, 'PASAN', 6, 101),
(518, 'PATAN', 6, 101),
(519, 'PATHALGAON', 6, 101),
(520, 'PENDRA', 6, 101),
(521, 'PRATAPPUR', 6, 101),
(522, 'PREMNAGAR', 6, 101),
(523, 'RAIGARH', 6, 101),
(524, 'RAIPUR', 6, 101),
(525, 'RAJANDGAON', 6, 101),
(526, 'RAJPUR', 6, 101),
(527, 'RAMCHANDRAPUR', 6, 101),
(528, 'SARAIPALI', 6, 101),
(529, 'SARANGGARH', 6, 101),
(530, 'SARONA', 6, 101),
(531, 'SEMARIA', 6, 101),
(532, 'SHAKTI', 6, 101),
(533, 'SITAPUR', 6, 101),
(534, 'SUKMA', 6, 101),
(535, 'SURAJPUR', 6, 101),
(536, 'TAPKARA', 6, 101),
(537, 'TOYNAR', 6, 101),
(538, 'UDAIPUR', 6, 101),
(539, 'UPRODA', 6, 101),
(540, 'WADRAINAGAR', 6, 101),
(541, 'udaypur', 7, 101),
(544, 'Jodhpur', 7, 101),
(543, 'jaipur', 7, 101);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `co_id` int(5) NOT NULL,
  `co_description` varchar(100) NOT NULL,
  `u_id` int(5) NOT NULL,
  `p_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`co_id`, `co_description`, `u_id`, `p_id`) VALUES
(1, 'thats a very nice blog', 1, '9'),
(2, 'thats a new and interesting place', 2, '23'),
(3, 'Wow! The decoration looks stupendous!\r\nMerry Christmas !!', 3, '24'),
(4, 'Great Smiles. there are many things which you have to cover \"kyunki india bahut bada hai\"', 4, '25'),
(5, 'A beautiful concept laid out in a beautiful way! Smiles connect people and places like nothing else ', 5, '26'),
(11, 'awesome and wonderful', 1, '40'),
(14, 'This is My Favourite Blog And My Favourite Place', 4, '42'),
(18, 'my favorite one', 4, '42'),
(19, 'this is awesome', 4, '42'),
(24, 'Awesome man', 5, '40'),
(25, 'favvv', 5, '40'),
(26, 'Awesome look', 0, '40'),
(27, 'awesome dude', 5, '40'),
(28, 'nice place i will visit there asap', 1, ''),
(29, 'niceeeeeeeeeeeeeeeee', 1, ''),
(30, 'niceeeeeeeeeeeeeeeee', 1, ''),
(31, 'love this place', 1, ''),
(32, 'ihgtygbhjnkml', 1, ''),
(33, 'asdfadfg', 1, '40'),
(34, 'nice site yaar', 2, '44'),
(35, 'very very good looking site', 2, '44'),
(36, 'jbjbhjhvjvgjvgchfcfxffxfxgbkbk', 2, '44'),
(37, 'this is a very nice place to visit and i love this place', 2, '44');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `i_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `i_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`i_id`, `p_id`, `i_name`) VALUES
(6, 39, '1483644513humayun2.jpg'),
(7, 39, '1483644513humayun3.jpg'),
(8, 39, '1483644513humayun4.jpg'),
(9, 39, '1483644513humayun5.jpg'),
(10, 39, '1483644513humayun6.jpg'),
(11, 39, '1483644513humayun7.jpg'),
(12, 39, '1483644513humayun8.jpg'),
(13, 40, '1483649840borra2.JPG'),
(14, 40, '1483649840borra3.jpg'),
(15, 40, '1483649840borra4.jpg'),
(16, 40, '1483649840borra5.jpg'),
(17, 40, '1483649840borra6.jpg'),
(18, 40, '1483649840borra7.jpg'),
(19, 41, '1483692095victoria1.jpg'),
(20, 41, '1483692095victoria2.jpg'),
(21, 41, '1483692095victoria3.jpg'),
(22, 41, '1483692095victoria4.jpg'),
(23, 41, '1483692095victoria5.jpg'),
(24, 41, '1483692095victoria6.jpg'),
(25, 42, '1484120800amer2.jpg'),
(26, 42, '1484120800amer3.jpg'),
(27, 42, '1484120800amer4.jpg'),
(28, 42, '1484120800amer5.jpg'),
(29, 42, '1484120800amer6.jpg'),
(30, 42, '1484120801amer7.jpg'),
(31, 43, '1484122492manali1.jpg'),
(32, 43, '1484122492manali3.jpg'),
(33, 43, '1484122492manali4.jpg'),
(34, 43, '1484122492manali5.jpg'),
(35, 43, '1484122492manali6.jpg'),
(36, 43, '1484122492manali7.jpg'),
(37, 44, '1484124684a2.jpg'),
(38, 44, '1484124684a4.jpg'),
(39, 44, '1484124684a5.jpg'),
(40, 44, '1484124684a6.jpg'),
(41, 44, '1484124685a7.jpg'),
(42, 45, '1484125999amar2.jpg'),
(43, 45, '1484125999amar3.jpg'),
(44, 45, '1484126000amar4.jpg'),
(45, 45, '1484126000amar5.jpg'),
(46, 45, '1484126000amar6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(5) NOT NULL,
  `m_message` text NOT NULL,
  `m_subject` varchar(30) NOT NULL,
  `u_id` int(10) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(40) NOT NULL,
  `u_image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `m_message`, `m_subject`, `u_id`, `u_name`, `u_email`, `u_image`) VALUES
(1, 'What is Your Name', 'About You', 1, 'Kanha ', 'kanha@gmail.com', 'arjit.jpg'),
(4, 'How are you?', 'Yourself', 4, 'Deepkiran', 'deepkiran12@gmail.co', '587597.jpg'),
(9, 'Can You Help Me Out?', 'About me', 3, 'Payal', 'payalagrawal@gmail.c', 'sunidhi.jpg'),
(11, 'How You Made This Blog?', 'About Blog', 2, 'Sunita', 'sunita@gmail.com', 'illena.jpg'),
(12, 'hello', 'rrrrr', 1, 'Kanha ', 'kanha@gmail.com', 'arjit.jpg'),
(13, 'Do you know about him', 'About Goku', 5, 'Nilesh', 'nilesh96@gmail.com', 'dragon.jpg'),
(15, 'fdsfs', 'sfs', 5, 'Nilesh', 'nilesh96@gmail.com', 'dragon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `p_id` int(5) NOT NULL,
  `p_heading` varchar(30) NOT NULL,
  `p_cityid` int(5) NOT NULL,
  `place_near` varchar(50) NOT NULL,
  `p_description` text NOT NULL,
  `p_history` text NOT NULL,
  `p_hotel` varchar(50) NOT NULL,
  `p_postdate` varchar(15) NOT NULL,
  `p_image` varchar(30) NOT NULL,
  `p_popular` varchar(30) NOT NULL,
  `p_short` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`p_id`, `p_heading`, `p_cityid`, `place_near`, `p_description`, `p_history`, `p_hotel`, `p_postdate`, `p_image`, `p_popular`, `p_short`) VALUES
(40, 'Borra Caves', 526, 'Vishkhapatanam', ' Borra caves are situated at the distance of 90- 95 km from the city of Visakhapatnam. They are located at the height of 1450 feet above the sea level. They are spread in the Ananthagiri hill ranges of eastern ghats, which ranges between 800 to 1300 meters M.S.L. In Andhra Pradesh. November and December are considered as the best time to visit these caves.Borra caves are the natural caves, that are said to have originated from the Gosthani river, which flows through these caves. The caves were created due to the flow of river over the limestone area. The pressure was exerted by the humic acid in the water on the mineral deposits and the limestone dissolved in the water. The dissolved limestone trickled down drop by drop forming the different shapes in the cave. These Borra caves spreaded over the one square km and are formed over the period of million of years. The opening of the cave measures upto 100 m horizontally and 75 m vertically. The cave is filled with stalagmite and stalactite formations. Visitors have given different names to the different shapes of these stalagmite and stalactite formations such as Shiv Parvathi, Mother child, Human brain, crocodile, Rushis Beard etc. Some more interesting structures inside the cave include mushroom formation, temple, church and many more. You may find here crystal white calcium stones in various forms. The Borra caves glitters and illuminates by the sixty three lamps of mercury, sodium vapour and halogen\r\n', ' The caves of Borra are said to be more than 150 years old. These wonder caves were discovered by the British geologist William King Gorge in the year 1807. The local tribals inhabitating in this area have a different story to tell. They say once a cowherd lost his cow while grazing. He soon realized that his cow had fallen down. He got worried, on looking down he found 60 feet deep hole, where he saw his cow was alive and feeding on the grass deep below. This was the time when the tribal has discovered the cave.These million year old Borra caves holds the great religious importance among the Hindus in India. Among the formations found in the cave, you may also find here \'Shivalingam\' and the idol of the cow known as Kamadhenu. \r\n', 'Mountain View Resorts', 'January 03,2017', 'borra1.jpg', 'yes', 'Borra caves are situated at the distance of 90- 95 km from the city of Visakhapatnam. They are located at the height of 1450 feet above the sea level. They are spread in the Ananthagiri hill ranges of eastern ghats, which ranges between 800 to 1300 meters M.S.L. In Andhra Pradesh. November and December are considered as the best time to visit these caves.'),
(41, 'Victoria Memorial ', 447, 'Kolkata', ' The Victoria Memorial, a huge monument made of white marble located in the heart of the City of Joy, Kolkata (erstwhile Calcutta) in West Bengal, India is one of the most famous monuments in West Bengal that has become a museum and popular tourist spot of the state. A brainchild of George Curzon, 1st Marquess Curzon of Kedleston and Viceroy of India, this monument epitomising beauty and elegance was dedicated to the memory of Queen Victoria (1819â€“1901). This grand and exquisite memorial not only stands as reminiscence to the rule of British Crown in the Indian subcontinent but also stands out as an excellent architectural gem in Indo-Saracenic revivalist style. It is a must visit tourist destination for first time visitors to experience the essence of Victorian era in the midst of the bustling metro city of Kolkata.William Emerson, the then president of the Royal Institute of British Architects was the chief architect of the memorial that was designed in Indo-Saracenic revivalist style. The style encompassed a blend of British architectural style with that of Egyptian, Venetian, Deccani, Mughal and other Islamic styles. Build of Makrana marble brought from Jodhpur, Rajasthan, it measures 103 m by 69 m with a height of 56 m. Scottish physician and botanist Sir David Prain and Lord Redesdale were entrusted to design the vast garden areas covering 64 acres while garden gates and the bridge of the north aspect were designed by Vincent J. Esch. Messrs. The garden is presently maintained by a group of 21 gardeners. Martin & Co. of Calcutta carried out the construction work of the memorial. Certain additions were made to the memorial post independence of India.', ' Queen Victoria who remained Queen of the United Kingdom of Great Britain and Ireland since June 20, 1837 and Empress of India since May 1, 1876 passed away on January 22, 1901. Following her demise, Lord Curzon conceived the idea of constructing a colossal and grand building with a museum and gardens where one and all can have a glimpse of the rich past. The foundation stone of the monument was laid on January 4, 1906 by the Prince of Wales George V who later became King George V on May 6, 1910. In 1921, the memorial was opened to public; however it became part of a provincial city instead of the capital city as by the time its construction completed, the capital of India was transferred from Calcutta to New Delhi under the instruction of King George V. An appeal made by Curzon to fund the construction of the memorial saw many including royals, individuals as well as the British government in London to come forward and contribute voluntarily. The total cost of building the memorial came to Rs. 105, 00,000.', 'FairLawn Hotel', 'January 04,2017', 'victoria1.jpg', 'yes', ' The Victoria Memorial, a huge monument made of white marble located in the heart of the City of Joy, Kolkata (erstwhile Calcutta) in West Bengal, India is one of the most famous monuments in West Bengal that has become a museum and popular tourist spot of the state. A brainchild of George Curzon, 1st Marquess Curzon of Kedleston and Viceroy of India, this monument epitomising beauty and elegance was dedicated to the memory of Queen Victoria (1819â€“1901).'),
(42, 'Amer Fort', 435, 'Vijay Garh', ' Amer Fort is the best tourist attraction of Jaipur and the sprawling complex combines both immense fortifications with unexpected beauty and charm. The fort which visitors are able to explore today dates from the 16th century and is situated on a natural ridge 11km north of Jaipur.Amer Fort is open every day from 8:00 until 17:30 and the entrance fee is Rs 200. Amer Fort lies12km to the north of Jaipur and a single taxi fare will cost Rs200-250 while using the supposedly enforced auto rickshaw rate will cost Rs85 but most visitors pay Rs250-300 for round trip with 2 hours of waiting time.', ' Amer was once known as Dhundar and was ruled by the Kachhwahas from the 11th to the 16th century, until the capital was moved from here to Jaipur. Raja Man Singh built this fort in 1592 AD and Raja Jai Sigh I expanded and renovated it later. While many such old structures have been either destroyed or replaced by other things, this fort has stood against all the tests of time and invasions.', 'Hotel Maharani Palace', 'November 12,201', 'Amer-Fort-jaipur1.jpg', 'Amer Fort', ' Amer Fort is the best tourist attraction of Jaipur and the sprawling complex combines both immense fortifications with unexpected beauty and charm. The fort which visitors are able to explore today dates from the 16th century and is situated on a natural ridge 11km north of Jaipur.'),
(43, 'Manali,Shimla', 434, 'Shimla', ' Manali which lies in the lap of the Kullu valley is one of the most visited tourist spot.It is located at an altitude of 2050 meters above sea level and is spread along the banks of the river Beas.\r\nManali derived its name from Manavalaya meaning the abode of Manu or \"Home of Manu\" and here, the temples are treated as pilgrimages. Its cool atmosphere provides a perfect haven for the ones afflicted by the hot Indian summers. Manali is also famous for adventure sports like skiing, hiking, mountaineering, para gliding, rafting, trekking, kayaking, and mountain biking. Manali is quite famous for its lush green forests of deodar and snow capped mountains.Manali is named after the sage Manu who was the creator of human race on the earth and it is believed that he meditated here. This is supposed to be the only temple of Manu in India.In winters, the temperature can drop below freezing point when heavy woolens are required. Summer temperatures are mild and light woolens/cottons are recommended. In Manali, one can find high mountains shrouded by silent snows and deep boulder strewn gorges. There are thick forests, filled with cool breezes and bird song. Best Time to visit is throughout the year.', ' Manali is named after the Sanatan Hindu lawgiver Manu. The name Manali is regarded as the derivative of \'Manu-Alaya\' which literally means \'the abode of Manu\'. Legend has it that sage Manu stepped off his ark in Manali to recreate human life after a great flood had deluged the world. Manali lies in the North of Kullu Valley. The valley is often referred to as the \'Valley of the Gods\'. Old Manali village has an ancient temple dedicated to sage Manu.\r\n\r\nThe British introduced apple trees in the area. The first apple orchard was set up by the British near Patlikuhl, prior to this no Apple trees grew in the area. To this day, appleâ€”along with plum and pearâ€”remain the best source of income for the majority of inhabitants. Both Rainbow and Brown Trout was also introduced into the rivers and streams of the area by the colonisers.', 'Manali Hotel', 'January 09,2017', 'manali2.jpg', 'Kullu Manali', '  Manali which lies in the lap of the Kullu valley is one of the most visited tourist spot.It is located at an altitude of 2050 meters above sea level and is spread along the banks of the river Beas.\r\nManali derived its name from Manavalaya meaning the abode of Manu or \"Home of Manu\" and here, the temples are treated as pilgrimages.'),
(44, 'Alappuzha,Kerala', 447, 'Kerala', ' Alappuzha also known as Alleppey, is the administrative headquarters of Alappuzha District of Kerala state of southern India. Alappuzha is a municipality in Kerala with an urban population of 174,164 and third among the districts having highest literacy rate in Kerala. In 2016, Centre for Science and Environment rated Alappuzha as the top cleanest town in India followed by Panaji & Mysuru.The Backwaters of Alappuzha are the most popular tourist attraction in Kerala. A houseboat cruise in these backwaters can be booked.It connects Kumarakom and Cochin to the North and Quilon to the South.Alappuzha is the access point for the annual Nehru Trophy Boat Race, held on the Punnamada Lake, near Alappuzha, on the second Saturday of August every year. This is the most competitive and popular of the boat races in India.The mullackal chirap is also one of the attractions of Allapuzha which is the festive season held for ten days every year in December.', 'In the early first decade of the 20th century the Viceroy of the Indian Empire, Lord Curzon made a visit in the State to Alleppey, now Alappuzha. Fascinated by the scenic beauty of the place, he exclaimed,\r\n\r\nHere nature has spent up on the land her richest bounties. Alleppey, the Venice of the East.Kuttanad, the rice bowl of Kerala, with its paddy fields, small streams and canals with lush green coconut palms, was well known even from the early periods of the Sangam age.[14] History says Alappuzha had trade relations with ancient Greece and Rome in the Middle Ages.\r\n\r\nThe early Cheras, who had their home in Kuttanad, were called `Kuttuvans`, so named after this place. Pliny and Ptolemy of the 1st and 2nd centuries had mentioned places like Purakkad or Barace in their classical works.', 'Ramady Allepey', 'January 10,2017', 'a3.jpg', 'Alappuzha,Kerala', ' Alappuzha also known as Alleppey, is the administrative headquarters of Alappuzha District of Kerala state of southern India. Alappuzha is a municipality in Kerala with an urban population of 174,164 and third among the districts having highest literacy rate in Kerala.'),
(45, 'Amarnath Temple,Jammu And Kash', 445, 'Jammu And Kashmir', ' Amarnath cave is a Hindu shrine located in Jammu and Kashmir, India. The cave is situated at an altitude of 3,888 m (12,756 ft),[1] about 141 km (88 mi) from Srinagar, the capital of Jammu and Kashmir and reached through Pahalgam town. The shrine forms an important part of Hinduism,[2] and is considered to be one of the holiest shrines in Hinduism.[3] The cave is surrounded by snowy mountains. The cave itself is covered with snow most of the year except for a short period of time in summer when it is open for pilgrims. Thousands of Hindu devotees make an annual pilgrimage to the Amarnath cave on challenging mountainous terrain to see an ice stalagmite formed inside the cave.Inside the 40 m (130 ft) high Amarnath cave, the stalagmite is formed due to freezing of water drops that fall from the roof of the cave on to the floor and grows up vertically from the cave floor.[4] It is considered to be a Shiva Linga by Hindus. The Cave waxes during May to August, as snow melts in the Himalayas above the cave and the resultant water seeps into the rocks that form the cave and gradually wanes thereafter.[1] As per the religious beliefs, it has been claimed that the lingam grows and shrinks with the phases of the moon reaching its height during the summer festival, although there is no scientific evidence for this belief.', ' It is believed that after the Middle Ages, this cave was forgotten by people before it was discovered by a shepherd in the 15th century once again.Another story relates to Bhrigu Muni. Long time ago it is believed that The Vale of Kashmir was submerged under water and Kashyapa Muni drained it through a series of rivers and rivulets. Therefore, when the waters drained, Bhrigu Muni was the first to have Darshan of Lord Amarnath. Thereafter, when people heard of the Lingam, it became an abode of Lord Bholenath for all believers and a pilgrimage which is done by lakhs of people each year.', 'Amar Hotel', 'January 11,2017', 'amar1.jpg', 'Temple', ' Amarnath cave is a Hindu shrine located in Jammu and Kashmir, India. The cave is situated at an altitude of 3,888 m (12,756 ft),[1] about 141 km (88 mi) from Srinagar, the capital of Jammu and Kashmir and reached through Pahalgam town.');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `r_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `service_rate` varchar(50) NOT NULL,
  `design_rating` varchar(50) NOT NULL,
  `support_rating` varchar(50) NOT NULL,
  `general_rating` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `review_rating` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`r_id`, `u_id`, `service_rate`, `design_rating`, `support_rating`, `general_rating`, `contact`, `review_rating`) VALUES
(2, 1, 'two', 'three', 'four', 'three', '9407900443', 'awesome site');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `r_id` int(10) NOT NULL,
  `m_id` int(20) NOT NULL,
  `a_image` varchar(30) NOT NULL,
  `r_reply` text NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`r_id`, `m_id`, `a_image`, `r_reply`, `a_name`, `a_id`) VALUES
(2, 2, 'dhoni.jpg', '     My name is Divyansh Agrawal       ', 'admin', 1),
(5, 4, 'dhoni.jpg', 'I am fine      ', 'admin', 1),
(7, 10, 'dhoni.jpg', 'Yes of Course I will Help YOU', 'admin', 1),
(9, 11, 'dhoni.jpg', '  I made This Blog With the help of PHP          ', 'admin', 1),
(11, 13, 'dhoni.jpg', '            hello then how r u', 'admin', 1),
(14, 13, 'dhoni.jpg', '            m fine', 'admin', 1),
(15, 14, 'dhoni.jpg', '            Yes I My fav hero ', 'admin', 1),
(16, 16, 'dhoni.jpg', '            njfdsnkfjs', 'admin', 1),
(17, 11, 'dhoni.jpg', '      i MADE my myself      ', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(100) CHARACTER SET ascii NOT NULL,
  `countryid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `statename`, `countryid`) VALUES
(1, 'Jammu And Kashmir', 101),
(2, 'Himachal Pradesh', 101),
(3, 'Punjab', 101),
(4, 'Uttrakhand', 101),
(5, 'Harayana', 101),
(6, 'Chattisgarh', 101),
(7, 'Rajasthan', 101),
(8, 'Uttar Pradesh', 101),
(9, 'Madhya Pradesh', 101),
(10, 'Bihar', 101),
(11, 'Kerala', 101);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(5) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_pass` varchar(25) NOT NULL,
  `u_image` varchar(20) NOT NULL,
  `u_email` varchar(20) NOT NULL,
  `u_contact` varchar(11) NOT NULL,
  `u_address` varchar(50) NOT NULL,
  `u_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_pass`, `u_image`, `u_email`, `u_contact`, `u_address`, `u_date`) VALUES
(1, 'Kanha', '1234', 'arjit.jpg', 'kanha@gmail.com', '9407900443', 'Purani Basti Baniya Para', 'November 21,2015'),
(2, 'Sunita', '4567', 'illena.jpg', 'sunita@gmail.com', '9827993585', 'Shankar Nagar Raipur', 'December 25,2016'),
(3, 'Payal', '8900', 'sunidhi.jpg', 'payalagrawal@gmail.c', '8109409201', 'Maitri Kunj Risali Bhilai ', 'January 21,2015'),
(4, 'Deepkiran', '8109', '587597.jpg', 'deepkiran12@gmail.co', '9111170403', 'Amlidi near Ambuja Mall,Raipur', 'November 12,2016 '),
(5, 'Nilesh', '2345', 'dragon.jpg', 'nilesh96@gmail.com', '9874584121', 'Purani Basti Baniya Para,Raipur', 'April 12, 2016'),
(6, 'Ram Tarang Agrawal', '12345', 'Tulips.jpg', 'ramtarang@gmail.com', '9884206146', 'purani basti raipur', 'November 23,2014');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `co_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `i_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
