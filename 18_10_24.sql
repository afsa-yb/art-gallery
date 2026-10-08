-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 04:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `admin_id` int(15) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Administration', 'admin123@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `artist_master`
--

CREATE TABLE `artist_master` (
  `artist_id` int(15) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `artist_description` varchar(500) NOT NULL,
  `artist_address` varchar(150) NOT NULL,
  `artist_city` varchar(50) NOT NULL,
  `artist_pincode` varchar(10) NOT NULL,
  `artist_mobile` varchar(15) NOT NULL,
  `artist_email` varchar(50) NOT NULL,
  `artist_password` varchar(15) NOT NULL,
  `cat_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist_master`
--

INSERT INTO `artist_master` (`artist_id`, `artist_name`, `artist_description`, `artist_address`, `artist_city`, `artist_pincode`, `artist_mobile`, `artist_email`, `artist_password`, `cat_id`) VALUES
(3, 'Workers', 'They make home décor items.', '2nd Floor, Mega Mall-2', 'Surendranagar', '363002', '9737822111', 'info@hasmukhfurniture.com', 'hasmuh@123', 7),
(5, 'Amrita Sher-Gil', 'Amrita Sher-Gil was a Hungarian-Indian painter', 'Budapest', 'Hungary', '1007', '9979903670', 'amrita12@gmail.com', 'amrita@123', 6),
(6, 'Jyoti Bhatt', 'Jyoti Bhatt is a painter and printmaker from Gujarat who is associated with the Baroda School of Art. His work incorporates Indian folk art motifs and explores the cultural traditions of rural Gujarat.', 'Baroda', 'Gujarat', '380012', '9969987678', 'jyoti123@gmail.com', 'Jyoti@123', 6),
(7, 'Surendra Patel', 'Surendra Patel is an artist and sculptor from Gujarat who has made significant contributions to both painting and public art installations. His works frequently explore themes of spirituality and cultural heritage, blending modern techniques with traditional Indian art forms.', 'Ahmedabad ', 'Gujarat', '380001', '9949987878', 'surendra123@gmail.com', 'Surendra@123', 6),
(8, 'Raghu Rai', 'Raghu Rai is one of Indian most renowned photographers, known for his powerful photojournalism. A former photographer for The Times of India and Magnum Photos, he has captured some of the most iconic images in Indian history, from political leaders to rural landscapes and social issues. His work has had a major influence on Indian photography for decades.', 'New Delhi', 'Delhi', '110001', '7046532145', 'radhu123@gmail.com', 'radhu@123', 9),
(9, 'Atul Kasbekar', 'Atul Kasbekar is a fashion photographer and Bollywood film producer. He is best known for his work with Kingfisher Calendar and has been a leading figure in commercial photography in India. His stylish and glamorous portraits have become a benchmark in fashion photography.', 'Mumbai', 'Maharashtra', '400001', '9127465365', 'atul123@gmail.com', 'Atul@123', 9),
(10, 'Prabuddha Dasgupta', 'Prabuddha Dasgupta was an influential fashion and fine-art photographer. Known for his striking black-and-white photography, his work often explored human emotions, intimacy, and urban life. His book Women is one of his most famous works, celebrating the strength and beauty of Indian women.', 'Bengaluru', 'Karnataka', '560001', '8530898786', 'prabuddha123@gmail.com', 'Prabuddha@123', 9),
(11, 'Bharti Kher', 'Bharti Kher is a prominent contemporary artist known for her installations and mixed media works. She often uses traditional Indian motifs like the bindi to explore themes of identity, culture, and gender. Kher i s works push the boundaries of painting and sculpture, making her an important figure in contemporary Indian art.', 'New Delhi', 'Delhi', '110016', '9428040360', 'bharti123@gmail.com', 'Bharti@123', 6),
(12, 'Swati Kale', 'Swati Kale is an acclaimed painter recognized for her exquisite work that merges traditional Indian themes with modern artistic expressions. Her work often features nature, culture, and abstract interpretations, gaining attention both nationally and internationally.', 'Pune', 'Maharashtra', '411001', '95587464446', 'swati123@gmail.com', 'Swati@123', 6),
(13, 'Balu Sadalge', 'Balu Sadalge is an artist deeply influenced by the rural life and traditions of India, particularly from the southern region. His paintings often depict rustic landscapes, village life, and cultural heritage, blending realism with a deep emotional connection to the subjects he portrays.', 'Belgaum', 'Karnataka', '590001', '7046503670', 'balu123@gmail.com', 'Balu@123', 6),
(15, 'Ceramics Workers', 'They makes ceramics products.', 'Than', 'Surendranagar', '363001', '7046503670', 'ceramics@gmail.com', 'ceramics@123', 8);

-- --------------------------------------------------------

--
-- Table structure for table `cart_master`
--

CREATE TABLE `cart_master` (
  `cart_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `total_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cat_master`
--

CREATE TABLE `cat_master` (
  `cat_id` int(15) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(500) NOT NULL,
  `cat_photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_master`
--

INSERT INTO `cat_master` (`cat_id`, `cat_name`, `cat_description`, `cat_photo`) VALUES
(6, 'Paintings', 'Painting is a visual art, which is characterized by the practice of applying paint, pigment, color or other medium to a solid surface. The medium is commonly applied to the base with a brush, but other implements, such as knives, sponges, and airbrushes, may be used.', 'images/Paintings.jpeg'),
(7, 'Home Décor ', 'Short for home decoration, interior décor encompasses items and you guessed it, decorations, that make your home look nice. This can include a range of items such as woodcrafts, Lipan arts, Lampshades, Metal products, Wall clock, Tealight.', 'images/home.jpg'),
(8, 'Ceramic', 'A ceramic is a material that is neither metallic nor organic.  It may be crystalline, glassy or both crystalline and glassy.  Ceramics are typically hard and chemically non-reactive and can be formed or  densified with heat.', 'images/Ceramics.jpeg'),
(9, 'Photography ', 'Photography is the process of recording an image – a photograph – on  light sensitive film or, in the case of digital photography, via a digital electronic or  magnetic memory.', 'images/Photography.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE `feedback_master` (
  `feedback_id` int(15) NOT NULL,
  `feedback_msg` varchar(150) NOT NULL,
  `feedback_date` varchar(50) NOT NULL,
  `artist_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`feedback_id`, `feedback_msg`, `feedback_date`, `artist_id`, `user_id`) VALUES
(2, 'I have a great experience on Curio Art! The selection is impressive and the layout is user-friendly. I will definitely it to others!', '2024-08-20', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(15) NOT NULL,
  `order_qty` varchar(15) NOT NULL,
  `total_price` varchar(15) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `user_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `order_qty`, `total_price`, `order_date`, `user_id`, `product_id`) VALUES
(5, '3', '9000', '18/10/2024', 1, 16),
(8, '1', '1099', '18/10/2024', 2, 15),
(9, '2', '14558', '18/10/2024', 2, 37),
(12, '4', '402000', '18/10/2024', 1, 35),
(14, '2', '1600', '18/10/2024', 1, 14),
(15, '5', '40000', '18/10/2024', 1, 48);

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(15) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_description` varchar(1500) NOT NULL,
  `product_photo` varchar(250) NOT NULL,
  `product_mfg_date` varchar(50) NOT NULL,
  `product_price` varchar(15) NOT NULL,
  `cat_id` int(15) NOT NULL,
  `sub_cat_id` int(15) NOT NULL,
  `artist_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_name`, `product_description`, `product_photo`, `product_mfg_date`, `product_price`, `cat_id`, `sub_cat_id`, `artist_id`) VALUES
(12, 'Wood Water Fountain', 'Size               Medium Product            35.6L x 3W CentimetersItem Dimensions   Weight             1000 Grams Orientation        Portrait Shape              Rectangular Theme              Religious Frame Type         Framed', 'images/wood1.jpeg', '2021-01-31', '16920', 7, 4, 3),
(13, 'Islamic quotes wooden Framed', 'Size : Medium, Product Dimensions : 35.6L x 3W Centimeters, Item Weight : 1000 Grams, Orientation : Portrait, Shape : Rectangular, Theme : Religious, Frame Type : Framed', 'images/wood2.jpeg', '2023-08-18', '1710', 7, 4, 3),
(14, 'Lippan art wall hanging mirror', 'Room Type : Living Room, Shape : Round, Product Dimensions : 30L x 30W Centimeters, Frame Material : Engineered Wood, Mounting Type : Wall Mount, Finish Type : Painted, Colour : Multicolour, Theme : Abstract', 'images/lippan1.jpeg', '2024-09-11', '800', 7, 5, 3),
(15, 'Rajasthani/marwari boy & girl padharo sa', 'Room Type : Living Room, Shape : Rouund, product Dimensions : 35L X 35W Centimeters, Item Weight : 160 Grmas, Colors : Multicolour, Orientation : Landscape', 'images/lippan2.jpeg', '2024-07-10', '1099', 7, 5, 3),
(16, 'Metal Wall Art Wall Sculpture Wall Hanging Showpiece', 'Size : Large, Product Dimensions : 46L x 19W Centimeters, Item Weight : 1500 Grams,  Orientation : Landscape & Portraite, Shape : Rectangular, Theme : Nature, Frame Type : Framed, Material : Metal', 'images/metal1.jpeg', '2023-02-21', '3000', 7, 11, 3),
(17, 'Metal Abstract Figures Handcrafted', 'Size : Large, Product Dimensions : 90L x 32.5W Centimeters, Item Weight : 3.6 Kilograms, Orientation : Portrait, Shape : Rectangular, Theme : Abstract, Frame Type : Framed, Material : Metal, Colour : Lotus set of 2', 'images/metal2.jpeg', '2024-02-11', '2770', 7, 11, 3),
(19, 'Bamboo Lampshade', 'Material: Natural Bamboo/Cane/Rattan. Bamboo lamps and lights not only serve as decorative pieces but also contribute to eco-friendliness.  Dimension : Diameter 36 CM, Height 31 CM', 'images/lamshade1.jpeg', '2023-09-17', '7999', 7, 8, 3),
(20, 'Lights Pendant Lampshade', 'Colour : Matte Gold, Material : Powder Coated Iron, Style : Moroccan, Light fixture form : Pendant, Product Dimensions : 18.4L x 18.4W x 18.4H Centimeters, Power Source : Corded Electric', 'images/lamshade2.jpeg', '2023-08-16', '5750', 7, 8, 3),
(21, 'Islamic Wall Clock', 'Colour:Black, Display Type:Analog, Style:Arabic Number, Special Feature:Silent Clock, Product Dimensions:50W x 0.2H Centimeters, Power Source:Battery Powered, Shape:Round', 'images/clock1.jpeg', '2023-09-23', '2499', 7, 12, 3),
(22, 'Creative Flower Wall Clock', 'Colour:SS-03, Product Dimensions:32W x 8H Centimeters, Material:Polyvinyl Chloride (PVC), Glass, Metal, Item Weight:475 Grams', 'images/clock2.jpeg', '2022-12-22', '11992', 7, 12, 3),
(23, 'Pillar Candle Holder', 'Colour:Green, Material:Wood, Product Dimensions:5L x 5W x 5H Centimeters, Finish Type:Painted, Item Weight:300 Grams', 'images/tealight1.jpeg', '2024-10-20', '2499', 7, 13, 3),
(24, 'Nightstand table lamp', 'Finish Type:Painted, Based Material:Ceramic, Item Weight:227g, Lamp Type:Desk lamp,Table lamp, Shade Colour:White', 'images/tealight2.jpeg', '2024-10-31', '8077', 7, 13, 3),
(25, 'Colourful Graphic Tree Hand Painting', 'Size:WIDTH - 56 INCHES & HEIGHT - 28 INCHES, Framing:Comes with an golden colour floater frame, Technique:Hand painted by artist', 'images/oil1.jpeg', '2022-09-22', '10999', 6, 14, 11),
(26, 'Premium Handmade Oil Painting', 'Material: Oil Painting on Stretched Canvas, Aluminium Alloy Frame, Dimensions(cm):Big:(H) 150 cm x (L) 100 cm//Small:(H) 100 cm x (L) 70 cm, Care Instructions:Clean with a damp cloth/ soft brush for dusting. Do not use chemicals.', 'images/oil2.jpeg', '2023-10-31', '24999', 6, 14, 6),
(27, 'Pastel Abstract Painting', 'Type:Original, Size:30x22in/76x55cm, Material:Paper, Medium:Oil Pastel, Subject:Abstract', 'images/pastel1.jpeg', '2022-05-11', '45000', 6, 16, 7),
(28, 'Spring Drawing', 'Type:Original, Size:WIDTH-21sm,HEIGHT-29.6sm, Material:Paper, Medium:Pastel', 'images/patel2.jpeg', '2023-10-10', '29390', 6, 16, 5),
(29, 'Modern Pop Art', 'Materials: Wood, Canvas Stretched, Museum Print, High Quality Canvas, Width: 80 centimetres, Height: 120 centimetres', 'images/pop1.jpeg', '2022-03-08', '196000', 6, 15, 8),
(30, 'Butterfly Wall Art Canvas', 'Materials: Wood, Canvas Stretched, Museum Print, High Quality Canvas, Width: 120 centimetres, Height: 80 centimetres', 'images/pop2.jpeg', '2024-04-13', '104500', 6, 15, 6),
(31, 'Trees Landscape Painting', 'Type:Oil Paintings, Frame mode:Unframed, Material:Canvas, Style:Modern, Frame:No, Medium:Acrylic Support, Base:Canvas, Form:Single, Technics:Hand Painted', 'images/landscape1.jpeg', '2022-09-28', '179200', 6, 17, 12),
(32, 'Northfield Landscapes', 'Type:Oil Paintings, Material:Canvas, Art Print On:Canvas, Print Size:25.4X33.02(10X13 inch), Frame:Slate Black(1.98cm,0.78 inch), Finished Size:27.94X27.94(11\"X14\")inch', 'images/landscape2.jpeg', '2024-01-30', '250660', 6, 17, 11),
(33, 'Garden Beauty Painting', 'Type:Original, Size:24x24in/60x60cm, Material:Canvas, Medium:Oil, Subject:Nature', 'images/realism1.jpeg', '2021-09-26', '125000', 6, 18, 12),
(34, 'Spirit of Chet Singh Ghat', 'Size:30(w)x36(h)inches, Medium:Oil, Surface:Canvas, Shipped as:Rolled, Shipping:IND=7-10 Working Days, Timelines:INTL=10-15Working Days', 'images/realism2.jpeg', '2022-03-25', '186000', 6, 18, 13),
(35, 'Restaurant Interior Painting', 'Size in Centimetres:125cm x 150cm, Customizable:Yes, Product Type:Printed Painting, Colors:Ink, Material:Canvas, Width(Inches):50, Height(Inches):60, Orientation:Vertical', 'images/impressionist1.jpg', '2023-02-20', '100500', 6, 19, 12),
(36, 'Victorian Woman Portrait Painting', 'Size in Centimetres:150cm x 175cm, Customizable:Yes, Colors:Ink, Material:Canvas, Width(Inches):60, Height(Inches):70, Orientation:Vertical', 'images/impressionist2.jpg', '2022-11-10', '160100', 6, 19, 7),
(37, 'Natural Floor Lamp Shades', 'Henka collection represents all things in life, including you, are in an imperfect state of flux. Change is the only constant. Everything is transient and nothing is ever complete. And that is why perfection doesn’t exist.', 'images/lampshade3.jpg', '2023-01-11', '7279', 7, 8, 3),
(38, 'Kody Cotton Lamp Shade', 'Net Quantity:1N, Product Dimensions:35.0cmHx35.0cmWx20.0cm, LPackage Contains:1, Country of Origin:India', 'images/lampshade4.jpg', '2024-03-31', '4299', 7, 8, 3),
(39, 'Moon Floor Lamp Shade', 'Finish Type:Polished, Base Material:Metal, Product Dimensions:19Dx27Wx161HCentimeters, Lamp Type:Mood Light, Shade Colour:Gold', 'images/lampshade5.jpg', '2023-12-22', '14999', 7, 8, 3),
(40, 'Terracotta Craft Birdhouse', 'Handcrafted by artisans from our Madhya Pradesh Terracotta Pottery cluster, this beautiful terracotta birdhouse in rich red color and fine finish is sure to add magic to your gardens and balconies, Dimensions: Approx. 6x4.5x6 inches.', 'images/earth1.jpeg', '2024-09-18', '2399', 8, 21, 15),
(41, 'Nolina Ceramic Vase', 'Decorate your home with these modern art Nordic minimalist white ceramic vase sets. Perfect for enhancing your center table decor.', 'images/earth2.jpg', '2024-08-18', '4399', 8, 21, 15),
(42, 'Modern Art Nordic Minimalist White Ceramic Vase', 'Decorate your home with these modern art Nordic minimalist white ceramic vase sets. Perfect for enhancing your center table decor, they bring a touch of contemporary elegance to any space.', 'images/Stoneware1.jpg', '2024-10-10', '8394', 8, 22, 15),
(43, 'Mushroom Coral Wall Sculpture', 'This one of a kind mushroom coral inspired wall sculpture is handmade from porcelain clay. It measures 5 3/4 d x 3 h. The piece has a hole in the back for secure hanging, hardware and care instructions are included.', 'images/Stoneware2.jpg', '2024-10-10', '10199', 8, 22, 15),
(44, 'Summer Serenade Woman Figurine', 'Figurine woman in glossy porcelain with long, flowing white dress with blue floral details and a bird shawl.', 'images/Porcelain1.jpg', '2024-09-09', '58000', 8, 23, 15),
(45, 'Anatomical Heart Vase', 'Figurine woman in glossy porcelain with long, flowing white dress with blue floral details and a bird shawl.', 'images/Porcelain2.jpg', '2024-08-09', '53600', 8, 23, 15),
(46, 'Gourd Flower Vase', 'Theme:Flowers, Number of pieces:1, Base Metrail:Vitreous China', 'images/v1.jpg', '2024-08-24', '4000', 8, 24, 15),
(47, 'Antique Maddock, Johnz& Sons Royal Vitreous', 'This is a real antique piece - Maddock & Sons Stafford blue and white covered casserole with the gilt rim on the edge, handles, and foot, Size: 10 L x 7.5 wide x 6 H', 'images/v2.jpg', '2024-09-25', '6000', 8, 24, 15),
(48, 'Colourful Bubble Glass Vase', 'Technology, ecology, exquisite workmanship, Good gifts for Christmas birthday, etc. for children, lovers. friend, Glass vase belong to hand blown, there will be some bubbles, belongs to a reasonable range.', 'images/glass1.jpg', '2024-08-25', '8000', 8, 25, 15),
(49, 'Craftfry Ganesha Idol', 'Base Metarial:Glass, Product Type:Decorations, Address:26,OM SAI TRADING CENTER,OPPOSITE RANIVALA MARKET, Firozabad, Uttar Pradesh', 'images/glass2.jpg', '2024-09-23', '2000', 8, 25, 15),
(50, 'Handicrafts Ceramic', 'Introducing our exquisite Ceramic Floral Fridge Magnet Planter, a charming addition to your home decor that combines functionality with aesthetic appeal. This unique fridge magnet is not just a decorative piece but also a practical planter, allowing you to bring a touch of greenery to your kitchen or any metal surface.', 'images/magnetic1.jpg', '2023-12-22', '1199', 8, 26, 15),
(51, '3D Ceramic Colorful Parrot', 'Size:Small, Number of Items:4, Orientation:Landscape, Theme:Animal, Room Type:Living Room', 'images/magnetic2.jpg', '2024-02-22', '1099', 8, 26, 15),
(52, 'Winter in the Alps', 'Photography, Digital on Canvas, Size: 90 W x 60 H x 2 D cm', 'images/lphoto1.jpg', '2023-02-22', '65230', 9, 28, 10),
(53, 'Desert landscape', 'Photography, Digital on Canvas, Size: 90 W x 60 H x 2 D cm', 'images/lphoto2.jpg', '2023-01-22', '88988', 9, 28, 10),
(54, 'leopard Photo', 'Photography, Color on Paper, Size: 50 W x 50 H x 1 D cm', 'images/w1.jpg', '2023-01-31', '153200', 9, 29, 10),
(55, 'Simba Photo', 'Photography, Digital on Paper, Size: 121.9 W x 81.3 H x 0.3 D cm', 'images/w2.jpg', '2023-03-31', '254327', 9, 29, 10),
(56, 'Le bonaparte', 'Photography, Digital on Paper, Size: 121.9 W x 81.3 H x 0.3 D cm', 'images/a1.jpg', '2024-01-31', '10479', 9, 30, 9),
(57, 'Peace', 'Photography, Color on Paper, Size: 50 W x 50 H x 1 D cm', 'images/a2.jpg', '2024-03-31', '27390', 9, 30, 9),
(59, 'Striking Digital Art', 'Photography, Color on Paper, Size: 50 W x 50 H x 1 D cm', 'images/b1.jpg', '2024-02-29', '10540', 9, 31, 9),
(60, 'Lion Fine Art', 'Photography, Digital on Paper, Size: 121.9 W x 81.3 H x 0.3 D cm', 'images/b2.jpg', '2024-02-29', '10540', 9, 31, 9),
(61, 'Bloody Rose', 'Photography, Paper on Paper, Size: 101.6 W x 76.2 H x 0.3 D c', 'images/m1.jpg', '2023-04-16', '38788', 9, 32, 8),
(62, 'Memory Magnolia Photograph', 'Photography, Digital on Paper, Size: 60 W x 60 H x 0.1 D cm', 'images/m2.jpg', '2023-05-16', '78374', 9, 32, 8),
(63, 'Underwater World', 'Photography, Color on Paper, Size: 50 W x 50 H x 1 D cm', 'images/u1.jpg', '2023-07-23', '10380', 9, 33, 8),
(64, 'Underwater fishes', 'Photography, Color on Paper, Size: 50 W x 50 H x 1 D cm', 'images/u2.jpg', '2024-09-23', '11579', 9, 33, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat_master`
--

CREATE TABLE `sub_cat_master` (
  `sub_cat_id` int(15) NOT NULL,
  `sub_cat_name` varchar(50) NOT NULL,
  `sub_cat_description` varchar(500) NOT NULL,
  `sub_cat_photo` varchar(250) NOT NULL,
  `cat_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_cat_master`
--

INSERT INTO `sub_cat_master` (`sub_cat_id`, `sub_cat_name`, `sub_cat_description`, `sub_cat_photo`, `cat_id`) VALUES
(4, 'Woodcraft', 'It includes a wide range of handmade items such as furniture, cabinets, shelves,  decorative items, toys, carvings, and even wooden sculptures. Woodcraft can made using various types of wood.', 'images/wood.jpg', 7),
(5, 'Lipan art', 'Lipan handicraft is a traditional fine art of Rajasthan and Gujarat desert regions.  Lipan means to apply.', 'images/lippan.jpeg', 7),
(8, 'Lampshades', 'Lampshades are made of fabric, parchment, glass, Tiffany glass, paper or plastic. Common fabric materials include silk, linen and cotton.', 'images/lampshades.jpeg', 7),
(11, 'Metal product', 'It can be used to create furniture, exterior or interior furnishings and accents  such as light switches, curtain rods and handles.', 'images/Metal.jpeg', 7),
(12, 'Wall clock', 'Definitions of wall clock. noun. a clock mounted on a wall. type of:  clock. a timepiece that shows the time of day.', 'images/wall_clock.jpeg', 7),
(13, 'Tealight', 'A small circular candle, often in a circular metal container, used as decoration  and sometimes in a device for keeping something such as food or drink warm', 'images/tealight.jpeg', 7),
(14, 'Oil paintings', 'Oil painting, painting in oil colors, a medium consisting of pigments suspended in drying oils.', 'images/oil.jpeg', 6),
(15, 'Pop paintings', 'By creating paintings or sculptures of mass culture objects and media stars, the Pop Art movement aimed to blur the boundaries between high art and low culture.', 'images/pop.jpeg', 6),
(16, 'Pastel paintings', 'A pastel is made by letting the sticks move over an abrasive ground, leaving color on the grain of the painting surface. ', 'images/pastel.jpeg', 6),
(17, 'Landscape paintings', 'Landscape painting, also known as landscape art, is the depiction in painting of natural scenery such as mountains, valleys, rivers, trees, and forests, especially where the main subject is a wide view—with its elements arranged into a coherent composition.', 'images/landscape.jpeg', 6),
(18, 'Realism Paintings', 'Description: Strives to depict subjects as accurately and truthfully as possible, with attention to detail.', 'images/realism.jpeg', 6),
(19, 'Impressionist Paintings', 'Description: Captures the impression of a moment, often with loose brushwork and an emphasis on light and color.', 'images/Impressionist.jpeg', 6),
(21, 'Earthenware', 'Rustic and porous, with earthy tones. Ideal for handmade pottery, vases, and tiles with a warm, natural appeal.', 'images/earthenware.jpeg', 8),
(22, 'Stoneware', 'Durable and dense, often in neutral colors. Perfect for everyday dishes, mugs, and decorative items with a sturdy, substantial feel.', 'images/stoneware.jpeg', 8),
(23, 'Porcelain', 'Fine, white, and often translucent. Used for elegant vases, figurines, and tableware with a delicate, refined finish.', 'images/porcelain.jpeg', 8),
(24, 'Vitreous China', 'Smooth and glossy, often white or ivory. Common in high-quality bathroom fixtures and decorative dinnerware with a polished, luxurious look.', 'images/vitreous_china.jpeg', 8),
(25, 'Glass', 'Transparent or colored, with a smooth, sleek surface. Used for decorative bowls, vases, and art pieces that add a modern, elegant touch.', 'images/glass.jpeg', 8),
(26, 'Magnetic Ceramics', 'Functional and decorative, often used for magnetic tiles or ornaments. Combines utility with stylish design for versatile home decor.', 'images/megnatic.jpeg', 8),
(28, 'Landscape Photography', 'Capture the beauty of nature with stunning landscape photography. From majestic mountains and serene lakes to sprawling deserts and lush forests, these images bring the outdoors into any space, creating a sense of tranquility and wonder.', 'images/landscape(photo).jpeg', 9),
(29, 'Wildlife Photography', 'Explore the animal kingdom with breathtaking wildlife photography. These images showcase animals in their natural habitats, highlighting their beauty, strength, and grace.', 'images/wildlife.jpeg', 9),
(30, 'Architectural Photography', 'Architectural photography captures the artistry and design of buildings, structures, and cityscapes. From modern skyscrapers and historic landmarks to intricate interiors and unique architectural details, these images are perfect for urban enthusiasts and design aficionados.', 'images/architectural.jpeg', 9),
(31, 'Black and White Photography', 'Black and white photography strips away color to focus on contrast, light, and shadow, creating timeless and classic images.', 'images/black_white.jpeg', 9),
(32, 'Macro Photography', 'This involves taking close-up photographs of small subjects, such as insects, flowers, or everyday objects, revealing details that are not visible to the naked eye. It highlights the intricate details and patterns of the subject. ', 'images/macro.jpeg', 9),
(33, 'Underwater Photography', 'Captures the world beneath the water is surface, often highlighting marine life and underwater landscapes.', 'images/underwater.jpeg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(150) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_pincode` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `user_name`, `user_address`, `user_city`, `user_pincode`, `user_email`, `user_password`, `user_mobile`) VALUES
(1, 'Mariya', 'Behind police station, Ratanpar', 'Surendranagar', '363020', 'mariya123@gmail.com', 'Mariya@123', '9979903670'),
(2, 'Khusi', 'Chandan chock, Dholipol', 'Wadhavan', '363030', 'khusi123@gmail.com', 'Khusi@123', '6356994039'),
(10, 'Mitali', 'Near new S. P. School', 'Surendranagar', '363002', 'mitali123@gmail.com', 'Mitali@123', '6356994039');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artist_master`
--
ALTER TABLE `artist_master`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `cart_master`
--
ALTER TABLE `cart_master`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cat_master`
--
ALTER TABLE `cat_master`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `feedback_master`
--
ALTER TABLE `feedback_master`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sub_cat_master`
--
ALTER TABLE `sub_cat_master`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artist_master`
--
ALTER TABLE `artist_master`
  MODIFY `artist_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart_master`
--
ALTER TABLE `cart_master`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cat_master`
--
ALTER TABLE `cat_master`
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback_master`
--
ALTER TABLE `feedback_master`
  MODIFY `feedback_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `sub_cat_master`
--
ALTER TABLE `sub_cat_master`
  MODIFY `sub_cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
