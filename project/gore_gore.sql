-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 03:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gore gore`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `orderId` bigint(20) NOT NULL,
  `customerId` bigint(20) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `productPrice` bigint(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`orderId`, `customerId`, `customerName`, `product_id`, `productPrice`, `payment_method`) VALUES
(30, 1, 'shishir', 2, 120, 'cash_on_delivary'),
(31, 1, 'shishir', 1, 100, 'cash_on_delivary'),
(32, 1, 'shishir', 25, 500, 'bkash'),
(33, 1, 'shishir', 18, 350, 'bkash');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` bigint(20) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `price` bigint(20) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `productDetails` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `price`, `pic`, `productDetails`) VALUES
(1, 'Ator', 100, 'picture/ator.jpeg', 'Product details of 6 piece 6 different smell flavour combo RT perfume Ator -(1piece-3ml).\r\n6 piece 6 different smell flavour combo RT perfume Ator -(1piece-3ml) \r\n(MAGNET,KACHA BELI,ONE MAN SHOW,BOKUL FUL,ROJONI GANDHA,JANNATUL FERDAOUS,SALMA)\r\n6 piece 6 different smell flavour combo RT perfume Ator -(1piece-3ml).'),
(2, 'Wallet', 120, 'picture/wallet.jpg', 'Gender: Men\r\nType: Wallet and card holder\r\nMaterial: Artificial leather\r\nWallet length: 7 inches\r\nWallet Width: 16 inches\r\n6 Card Slots two master pocket.\r\nColor: Blue (As given picture).\r\nWeight: 0.7 kg\r\nStyle: High Qualiety Leather Wallet\r\nVery durable'),
(3, 'Watch', 300, 'picture/watch.jpg', 'The watch has edgy and affordable design. Crafted from a rich quality material, this watch for men is light in weight and long lasting too. You can show it off with your casual & formal attires to grab compliments from everyone around. Being easily Affordable to make it sit right on your wrist, it can add a physical dimension to your Style. There’s a way to spruce up your casual outfit, and that\'s to jazz it up with this classy men\'s watch. This watch is specially designed for men who believe in a trendy and fashionable life. This watch is highly used for any occasion & highly recommendable to young people.'),
(4, 'Mushroom Light Lamp', 250, 'picture/mushroom.jpg', 'Mushroom Night Light Lamp - Multi-Color\r\nRomantic Colorful LED Mushroom Night Light Product Description\r\nto look beautiful\r\nof 3 LEDs\r\nNight lamp\r\nLow power consumption\r\ncolor change\r\nmade in china\r\nBoth sensor and switch models are available\r\nLED mushroom lights disappear.'),
(5, 'Lenovo HE05 Bluetooth 5.0 Wireless Earphones', 400, 'picture/bluetooth.jpg', 'Brand Name:Lenovo\r\nConnectors:None\r\nControl Button:Yes\r\nActive Noise-Cancellation:No\r\nStyle:True Wireless\r\nCommunication:Wireless+Wired\r\nVocalism Principle:Dynamic\r\nVolume Control:Yes\r\nWireless Type:bluetooth'),
(6, 'Fashion Note Board LED Light', 499, 'picture/ledBoard.jpg', 'Creative Fashion Note Board LED Night Light Message Board Holiday Light USB Message Board\r\n1. It can be used to record daily check-in items.\r\n2. Presents a clear pattern and comes with an erasable marker that can be scrubbed at will.\r\n3. Soft light does not hurt the eyes.\r\n\r\nProduct name: LED Note Board\r\nMaterial: ABS\r\nColor: White\r\nLamp holder size: 9.7*4cm\r\nPanel size: 10*15cm'),
(7, 'Car Key Pendant', 99, 'picture/key.jpg', 'Colour:Black\r\nShape:Square\r\nMaterial: Acrylonitrile Butadiene Styrene\r\nmade in china\r\nAnti-lost keychain\r\nYou can keep it with the key ring so that the key is lost, but you can get back, how much Jamela, who lost the key, does not want to lose the key and get Rakka from the key to lose the key.'),
(8, 'Sunglass for man', 250, 'picture/sunglass.jpg', 'Product Type - Fashion Sunglass  \r\n\r\nTrendy & fashionable sunglasses.  \r\nStylish, colorful, long-lasting sunglasses.  \r\nComfortable shape to put on.  \r\nOccasion: Anniversary, Engagement, Gift, Party, Wedding  '),
(9, 'Apple AirPods Pro 2nd generation', 1999, 'picture/airpods.jpg', 'RICHER AUDIO EXPERIENCE – The Apple-designed H2 chip pushes advanced audio performance even further, resulting in smarter noise cancellation and more immersive sound. The low-distortion, custom-built driver delivers crisp, clear high notes and deep, rich bass in stunning definition. So every sound is more vivid than ever..Note : If the size of the earbud tips does not match the size of your ear canals or the headset is not worn properly in your ears, you may not obtain the correct sound qualities or call performance. Change the earbud tips to ones that fit more snugly in your ear'),
(10, 'MIXED DRY FRUITS & NUTS', 250, 'picture/dryFruits.jpg', 'MIXED DRY FRUITS & NUTS PREMIUM 250 gm \r\nBrand: No Brand \r\n7 Day\'s return policy available \r\nQuality : premium \r\nWeight  : 250 gm \r\nPacking : Air tight crystal jar \r\nNo colour and extra sugar  \r\n100% fresh \r\nNatural & Healthy food '),
(11, 'USB Nano Mini Spray', 350, 'picture/USBspray.jpg', '✅Condition: 100% Brand New\r\n✅Battery Capacity: 550mAh\r\n✅Atomization Amount: 1.25-1.45ml/min\r\n✅Material: Atomization Chip\r\n✅Use: Charging and Adding Liquid\r\n✅Water Tank Capacity: 30ml\r\n✅Atomized Particles: 0.3μm\r\n✅Charging Time: 2-3 hours\r\n✅Color: White, Pink (optional)\r\n✅Size: Approx. 35*35*103 mm\r\n✅Weight: Approx. 56g / 2 oz\r\n✅Package list:\r\n1 * Face Sprayer.\r\n1 * USB Cable.'),
(12, 'Couple Love Ring for Lovers Men Women', 150, 'picture/coupleRing.jpg', 'Product Type- Finger Ring\r\nExclusive stone crafted finger ring!\r\nColor: Silver\r\nMaterial: Alloy\r\nSize: Adjustable.\r\nGet a ring box FREE!\r\nGood quality and good design\r\nProduct Type- Finger Ring\r\nExclusive stone crafted finger ring!\r\nColor: Silver\r\nMaterial: Alloy\r\nSize: Adjustable.\r\nGet a ring box FREE!\r\nGood quality and good design'),
(13, 'Manicure Tools', 199, 'picture/manicure.jpg', 'Total 10pieces set. Use for man, woman, and children Brand new imported from China Type: Hand Tools, Combination Number of Pieces: 10pcsEasy to use & carry Longevity product Smart look and design.'),
(14, 'Metal Velvet Churi', 159, 'picture/velvetChuri.jpg', 'Metal Velvet Churi\r\nBrand: No Brand\r\nGood Quality Stylish Design'),
(15, 'Portable Pocket Prayer Mat', 200, 'picture/prayerMat.jpg', '100% Brand New & Best Quality Product\r\nProduct Type: Pocket prayer mat\r\nSize: 40\'\'/ 23\" (Approx)\r\nWeight: 130g (Approx)\r\nColor: Multi-Color\r\nSuits For: Outdoor Activities\r\nWater Proof Nylon Material: To Avoid Rain & Water Penetration\r\nConvenient Pocket Style: Anywhere you go, Anywhere You Pray\r\nUse: Home, Hotel, Prayer, Outdoor, Office, Airport, Mall, A Great Gift\r\nGreat For The Hiking, Hunting, Camping, Fishing & Emergency Use\r\nThe Product Is Easy Carry With You For Any Outdoor Occasion\r\nThey Are Light Weight & Fit Easily In Your Pocket, Purse Or Bag\r\nEasy To Carry & Store\r\nWashable & Easy To Clean\r\nWaterproof design can make a great shelter for you in a survival situation\r\nThis Prayer mat will make a perfect gift to your beloved ones\r\nPackage Included: 1x Pocket Jaynamaz'),
(16, 'New Long Sleeve Casual Shirt', 400, 'picture/shirt.jpg', 'Product Type: Casual Shirt\r\nColor: White\r\nMain Material: Cotton\r\nGender: Men\r\nStylish and fashionable\r\nPerfect Fitting\r\nCollection for Men\r\nComfortable to wear\r\nPerfect for any Occasion\r\nSize: M, L, XL\r\nM- long: 27 \", body: 38\r\nL- long: 28 \", body: 40\r\nXL- long: 29\", body: 43\"'),
(17, 'Black Cap for Men', 150, 'picture/cap.jpg', 'Product Type: Cap\r\nColor: Black\r\nMain Material: Cotton\r\nGender: Men\r\nTrendy design..\r\nProduct details of Black Cotton Cap for Men\r\nProduct Type: Cap\r\nColor: Black\r\nMain Material: Cotton\r\nGender: Men\r\nTrendy design\r\nall type of products at reasonable price. They provide us different type of products very frequently. Shop your choice from this seller!.,,'),
(18, 'ZAHIDI DATES', 350, 'picture/dates.jpg', 'Features & details\r\nZAHIDI DATE - 2 kg\r\nNet Weight: 2 kg\r\nSophisticated Box Pack\r\nPillow packed to retain freshness\r\nAgricultural Produce of সৌদি আরব জাহিদি খেজুর\r\nPremium hand selected quality dates\r\nProduct Quality is good.\r\nDescription Carnival brings to you the choicest selection of dry fruits, nuts & dates, 100% natural. This premium hand-picked Dates weighing 1kg comes in a very sophisticated pack keeping in mind all the hygienic precautions while packing. These Dates come from Iran. After the arrival of these dates at our processing unit, we de-seed them adn package them very neatly with respect to all compliances and hygienic conditions. These Dates are checked thoroughly for any damaged piece(s) and then the perfect sorted good dates placed in a custom designed box (only made for the particular product), then these boxes with the Dates gets wrapped in a plastic film, this helps in retaining the freshness of the dates.'),
(19, 'CASIFY P1 64 GB USB 3.2 Gen1 Pendrive', 599, 'picture/pendrive.jpg', 'SKU: PENF0440\r\nProduct: USB 3.2 Gen1 & Type C Pendrive\r\nWarranty(Year): 3-Year\r\nEncryption: Yes\r\nModel Number:BHM-M026\r\nMaterial:Metal\r\nBrand Name: CASIFY\r\nInterface Type: USB 3.0, USB3.2 Gen1+Type C\r\nColor: Silver, Black\r\nType: USB 3.0 3.1 3.2 & Type C\r\nShape: Strick\r\nChip: Flash Chips\r\nWriting Speed: 40MB/s max\r\nReading Speed: 250MB/s max\r\nFull Metal Body\r\nSupport Both Type C And USB 3.0.'),
(20, 'Rose Golden Butterfly Payel', 60, 'picture/payel.jpg', 'Rose Gold Butterfly Anklet for Women\r\nElegant Design\r\nMain Material: Zinc Alloy\r\nGolden butterfly design\r\nStylish and fashionable\r\nProvides your feet a gorgeous look\r\nThis anklet is an ornament worn around the ankle.\r\nBarefoot anklets and toe rings historically have been worn for centuries by girls and women in India, where it is commonly known as Patti Lou, Payal, and sometimes as nupur.'),
(21, 'Foldable T2 Phone Stand Holder for Smartphone', 150, 'picture/phoneStand.jpg', 'phone desktop holder adopts an alloy base and plastic cover, which has a long used life span and can improve the stability of the phone desktop holder.\r\nScope of application\r\nThe phone desktop holder is widely suitable for smartphones and tablets.\r\nSpecification:\r\nType: phone desktop holder\r\nQuantity: 1pc\r\nMaterial: ABS alloy.\r\nColour: Black, Pink, and White variations\r\nSize: 10*10*15.5cm/ 3.93*3.93*6.09inch(L*W*H)\r\nFolded size: 11*6.5cm/ 4.32*2.55inch(L*W*H)\r\nNet weight: 210gphone desktop holder adopts an alloy base and plastic cover, which has a long used life span and can improve the stability of the phone desktop holder.\r\nScope of application\r\nThe phone desktop holder is widely suitable for smartphones and tablets.\r\nSpecification:\r\nType: phone desktop holder\r\nQuantity: 1pc\r\nMaterial: ABS alloy.\r\nColour: Black, Pink, and White variations\r\nSize: 10*10*15.5cm/ 3.93*3.93*6.09inch(L*W*H)\r\nFolded size: 11*6.5cm/ 4.32*2.55inch(L*W*H)\r\nNet weight: 210g'),
(22, 'Golden Metal Ball/MOROCCAL Ball Fairy Light', 399, 'picture/fairyLight.jpg', 'Moroccan 20 Led Metal Balls Golden Lights\r\nStyle: Metal Skeleton Balls\r\nBall color: Gold\r\nLight Color: Warm White\r\nTotal length: 3.3m\r\nQty of the LEDs: 20 pcs\r\nLight Source: LED Bulbs\r\nWattage: about 1.5W\r\nThe material of Ball: Alloy\r\nPlug Type: Us\r\nNo adapter needed. (Plug and Play)\r\nUsage: Birthday, Valentine\'s Day, Eid, Puja, Christmas, other Holidays, Party, Wedding, etc\r\nCertification: ROHS, ce, CCC'),
(23, '500ml Thermos Stainless steel tumbler insulated water bottle', 400, 'picture/waterBottle.jpg', 'Product name: temperature display thermos cup Product Style: LED digital temperature or ordinary Product capacity:500ML Product size: L:225mm M:64mm H:64mm Product material:304 stainless steel Food-grade safe PP material Food-grade silica gel Product weight:320grams Product origin: China\r\n2. Temperature measurement: built-in powerful smart chip chip, with LCD display, screen cleaning exquisite. High-sensitivity temperature sensor, temperature sensing accuracy is 1±°C.\r\n3. Power saving: no need to replace the battery, and the screen will automatically stop when not in use, so there is no need to worry about replacing the battery and adding troubles.\r\n4. Portability: This product is small in size and light in weight, which is very convenient to carry around.\r\n5. Beautiful: This product is made with functional exquisite craftsmanship, and appearance is very stylish and beautiful.\r\n6.Multipurpose：This vacuum flask water bottle is also a good container for coffee, Juicer, milk, beer, drinks'),
(24, 'Emoji Ceramic Mug', 300, 'picture/emojiMug.jpg', 'Giftable Packaging Dishwasher Safe Break Resistant Ideal for everyday use \r\nBest gift for any occasion Perfect purity of the material\r\n Features: China Brand\r\n China Ceramci\r\n size: 2.5 inch hight\r\n Capacity: 200 ml\r\n Color: Same As Picture Use many Emoji and Text Gift Product Drinking Tea_Coffee_water Nice Looks'),
(25, 'Vintage T9 Hair Cutting Machine Hair Trimmer', 500, 'picture/trimmer.jpg', 'Origin: CN(Origin)\r\nHair size: 0, 1.5, 2, 3, 4\r\nCommodity Quality Certification：3C\r\nSize:15.5x4x2.5cm\r\nItem Type: Hair Trimmer\r\nMaterial: Stainless, Steel stainless, steel alloy\r\nModel Number: Hair Clipper\r\nVoltage：110V-240V 50Hz-60Hz.\r\nCharging method: USB cable\r\nBattery capacity：1200mAh\r\nCharging time：2 hours\r\nUse time：90 minutes\r\nProduct size：2.4x2.4x15.8CM\r\nProduct weight：370g\r\nFunctions1：hair sculpting\r\nFunction2：hair trimming\r\nFunction3：battery display\r\n#Trimmer');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userId` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `blood` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userId`, `username`, `password`, `firstname`, `lastname`, `fathername`, `mothername`, `gender`, `birthday`, `email`, `phone`, `address`, `blood`) VALUES
(1, 'shishir', '123', 'Sadmanur Islam', 'Shishir', 'Samsul', 'Sheuly', 'Male', '2023-03-10 05:41:35', 'shishir1290@gmail.com', 3243245234, 'Gazipur', 'b+'),
(2, 'sinthia1', 'Shadia@123', 'SInthia', 'Shadia', 'Shajahan', 'Mone', 'Female', '2023-03-07 17:45:57', 'sinthia12shadia@gmail.com', 19301780544, 'Gazipur', 'o+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `orderId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
