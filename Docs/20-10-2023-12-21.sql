-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 oct. 2023 à 12:20
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `beautymedic`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `USER_NAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `FIRST_NAME` varchar(30) DEFAULT NULL,
  `LAST_NAME` varchar(20) DEFAULT NULL,
  `PICTURE` text NOT NULL,
  `CREATED_DATE` datetime DEFAULT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `USER_NAME`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`, `PICTURE`, `CREATED_DATE`, `UPDATE_DATE`) VALUES
(1, 'anass@dermaj', 'anass123', 'anass', 'dermaj', '1688916765281.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `BLOG_ID` int(11) NOT NULL,
  `TITLE` varchar(300) DEFAULT NULL,
  `CATEGORY_ID` int(11) DEFAULT NULL,
  `PHOTO` text DEFAULT NULL,
  `VIDEO` text DEFAULT NULL,
  `PRODUCT_LINK` text DEFAULT NULL,
  `CONTENT` text DEFAULT NULL,
  `BLOG_SHORT` text DEFAULT NULL,
  `CREATED_DATE` datetime DEFAULT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`BLOG_ID`, `TITLE`, `CATEGORY_ID`, `PHOTO`, `VIDEO`, `PRODUCT_LINK`, `CONTENT`, `BLOG_SHORT`, `CREATED_DATE`, `UPDATE_DATE`) VALUES
(2, 'Cardiotocographe', 2, '1696932446.jpg', '1696932446.', 'https://www.mlslabo.ma/cardiotocographe.html', '<p>Le moniteur fœtal peut enregistrer le rythme cardiaque fœtal et les contractions utérines maternelles dans les grossesses de plus de 28 semaines.<br>Le moniteur peut afficher simultanément les valeurs FCF, TOCO et FMOV (mouvement fœtal) en analysant leurs relations afin d’évaluer, entre autres, l’état physiologique et pathologique du fœtal et le développement de grossesses.<br>Conçu pour l’utilisation en milieu hospitalier, les clinques, les cabinets médicaux et les services de santé à domicile.</p>\r\n<p><strong><span style=\"color: rgb(71, 85, 119);\">Caractéristiques :</span></strong></p>\r\n<ul>\r\n    <li>Design léger et facile à utiliser.</li>\r\n    <li>Ecran LCD 8 couleurs rabattable sur 60°.</li>\r\n    <li>Fonction de base ; FHR, TOCO, mouvement fœtal, monitoring gémellaire et canal de la mère.</li>\r\n    <li>Affichage claire des donnes au patient et de la courbe.</li>\r\n    <li>Logiciel pour stockage et l’analyse des données.</li>\r\n    <li>Plage normale FCF 120-160 bpm.</li>\r\n    <li>Enregistrement manuel des mouvements fœtaux.</li>\r\n    <li>Alarmes sonores et visuelles pour indiquer que la fréquence cardiaque est haute ou basse.</li>\r\n    <li>Fonction de surveillance continue 24 heures en temps réel.</li>\r\n    <li>Stockage continu de la courbe patient et de données pendant 12 heures, reproduction et impression.</li>\r\n    <li>Fonction d’image Frozen.</li>\r\n    <li>Sonde onde puisée large bande 9 cristaux.</li>\r\n    <li>Imprimante thermique intégrée de haute résolution et longue durée.</li>\r\n    <li>Connexion à PC et connexion réseau (interface RJ45).</li>\r\n    <li>Deux batteries rechargeables intégrées.</li>\r\n    <li>L’appareil peut fonctionner pendant deux heures sans alimentation externe.</li>\r\n</ul>\r\n<p><strong><span style=\"color: rgb(40, 50, 78);\">Accessoires inclus :</span></strong></p>\r\n<ul>\r\n    <li>Sonde à ultrasons.</li>\r\n    <li>Sonde TOCO et interrupteur à distance.</li>\r\n    <li>Ceinture abdominale.</li>\r\n    <li>Papier d’impression (type Z, 112mm).</li>\r\n</ul>\r\n<p><br></p>\r\n02', 'Le moniteur fœtal peut enregistrer le rythme cardiaque fœtal et les contractions utérines maternelles dans les grossesses de plus de 28 semaines. 02', '2023-10-10 00:00:00', '2023-10-19 06:07:43'),
(3, 'NETTOYEUR DE PORES', 4, '1696933244.jpg', '1697270242.mp4', 'https://www.mlslabo.ma/nettoyeur-de-pores.html', 'Affichage de la batterie et de l\'intensité<BR>\r\n3 embouts de différentes tailles pour différents domaines d\'application sur le visage<BR>\r\nNettoyage des pores en profondeur grâce à la technologie de vide<BR>\r\nCombat efficacement les impuretés de la peau et favorise une apparence saine de la peau du visage<BR>\r\nMultifonction grâce aux 3 embouts différents<BR>\r\nÉcran LCD pour afficher l’état de la batterie et le niveau d’intensité<BR>\r\n5 niveaux d’intensité<BR>\r\nFiltre de rechange inclus<BR>\r\nDesign moderne<BR>\r\nAdapté à tous les types de peau<BR>\r\nFonctionnement sur batterie – Environ 1.5 h d’autonomie (à l’intensité 5)<BR>', 'Affichage de la batterie et de l\'intensité\r\n3 embouts de différentes tailles pour différents domaines d\'application sur le visage\r\nNettoyage des pores en profondeur grâce à la technologie de vide', '2023-10-14 00:00:00', NULL),
(4, 'YTRU', 4, '1697279634.jpg', '1697279634.', 'http://www.orliman.com', 'JJJJJJJJJJJJJJJJJ', 'GGGGGGGGGGGGGGGGGG', '2023-10-17 00:00:00', NULL),
(5, 'aefaef', 4, '1697796032.jpg', '1697796032.', 'www.orliman.com', 'UJJJJJJFFFFFFFFFFFFFF', 'UUUUUUUUUTTTTTTTTT', '2023-10-20 12:00:31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_NAME` varchar(20) DEFAULT NULL,
  `DESCRIPTION` text NOT NULL,
  `PHOTO_PATH` text NOT NULL,
  `CREATED_DATE` datetime DEFAULT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_NAME`, `DESCRIPTION`, `PHOTO_PATH`, `CREATED_DATE`, `UPDATE_DATE`) VALUES
(1, 'Body care', '<p>Body care refers to a set of practices and products that are used to maintain and improve the health, hygiene, and appearance of the body. It involves taking care of your skin, hair, nails, and overall physical well-being. Body care can encompass a wide range of activities and products, including:</p>\r\n\r\n<ol>\r\n	<li><strong>Skincare:</strong> This involves cleansing, exfoliating, moisturizing, and protecting your skin from the sun and environmental factors. Skincare products can include cleansers, toners, serums, moisturizers, sunscreen, and more.</li>\r\n	<li><strong>Haircare: </strong>Haircare includes washing, conditioning, and styling your hair to keep it clean, healthy, and manageable. Haircare products include shampoos, conditioners, hair treatments, and styling products like gels, mousses, and hairsprays.</li>\r\n	<li><strong>Nail Care:</strong> Nail care involves keeping your nails clean, trimmed, and well-maintained. This can include regular nail trimming, filing, and using nail polish or treatments.</li>\r\n	<li><strong>Bathing and Showering:</strong> Regular bathing or showering is essential for maintaining personal hygiene and keeping the body clean. It often involves using soap, body wash, and other cleansing products.</li>\r\n	<li><strong>Body Hydration:</strong> Keeping your body properly hydrated by drinking enough water is a crucial aspect of body care. Proper hydration helps maintain healthy skin, hair, and overall well-being.</li>\r\n	<li><strong>Dental Care: </strong>Taking care of your teeth and gums is an important part of overall body care. This includes brushing, flossing, and regular dental check-ups.</li>\r\n	<li><strong>Deodorant and Perfume:</strong> Using deodorant and perfume helps control body odor and enhance personal grooming.</li>\r\n	<li><strong>Nutrition and Diet:</strong> Eating a balanced and nutritious diet is essential for maintaining good health and well-being. Proper nutrition can have a significant impact on the condition of your skin, hair, and nails.</li>\r\n	<li><strong>Exercise and Physical Activity: </strong>Regular physical activity contributes to overall body health and can improve your skin&#39;s appearance, promote circulation, and boost your mood.</li>\r\n	<li><strong>Relaxation and Stress Management:</strong> Reducing stress and getting adequate rest and sleep are important aspects of body care, as they can impact your overall health and appearance.</li>\r\n	<li><strong>Specialized Treatments:</strong> Some people may opt for specialized body care treatments such as massages, facials, body scrubs, or spa therapies to address specific concerns or relax and rejuvenate.</li>\r\n</ol>\r\n\r\n<p>Body care practices can vary widely from person to person and may be influenced by individual preferences, cultural norms, and personal needs. The goal of body care is to promote physical health, hygiene, and overall well-being, as well as to enhance one&#39;s self-esteem and confidence.</p>\r\n', 'body-care', NULL, NULL),
(2, 'BEAUTY AND SPORT', '<p>Beauty and sport products are items designed to enhance or support both physical performance and the overall appearance and well-being of individuals who lead active lifestyles. These products cater to athletes, fitness enthusiasts, and anyone looking to maintain their physical health while also addressing grooming, skincare, and cosmetic needs.</p>\r\n\r\n<p><strong>Here are some examples of beauty and sport products that we proposed:</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Sunscreen :</strong> Sunscreen products with high SPF (Sun Protection Factor) levels to protect the skin from UV radiation, which is essential for athletes who spend a lot of time outdoors.</li>\r\n	<li><strong>Sweat-Resistant Makeup : </strong>Cosmetics designed to withstand the rigors of physical activity and stay in place during workouts.</li>\r\n	<li><strong>Athletic Apparel : </strong>Performance-enhancing sportswear that wicks away moisture, provides UV protection, and promotes comfort and flexibility. This includes moisture-wicking shirts, compression clothing, and specialized footwear.</li>\r\n	<li><strong>Hair Care for Active Lifestyles : </strong>Shampoos, conditioners, and treatments formulated to cleanse and strengthen hair that is exposed to sweat, chlorine, or other workout-related factors.</li>\r\n	<li><strong>Sports Nutrition and Supplements :</strong> Dietary supplements, protein shakes, and energy bars to support athletic performance and recovery. These may contain ingredients that promote skin and hair health as well.</li>\r\n	<li><strong>Sporty Fragrances :</strong> Perfumes and colognes designed for active individuals, with scents that complement a sporty lifestyle.</li>\r\n	<li><strong>Anti-Chafing Products : </strong>Balms, powders, and creams to prevent skin chafing, which is common in areas of friction during physical activity.</li>\r\n	<li><strong>Water-Resistant Makeup Removers :</strong> Products that effectively remove makeup and sweat after a workout, allowing for clean and fresh skin.</li>\r\n	<li><strong>Hydration Products :</strong> Sports drinks, electrolyte tablets, and water bottles to help athletes stay hydrated during their workouts or competitions.</li>\r\n	<li><strong>Skin Care for Active Lifestyles :</strong> Skincare products, such as cleansers, moisturizers, and serums, tailored to the specific needs of individuals with active lifestyles. These may address issues like clogged pores due to sweat and debris.</li>\r\n	<li><strong>Body Wipes :</strong> Disposable, refreshing wipes that allow for quick post-workout cleanup when a shower isn&#39;t immediately available.</li>\r\n	<li><strong>Sports Equipment :</strong> Sport-specific equipment like yoga mats, resistance bands, and foam rollers for maintaining overall fitness.</li>\r\n	<li><strong>Fitness Gadgets : </strong>Wearable fitness trackers and smartwatches that monitor health and activity levels.</li>\r\n	<li><strong>Recovery Products :</strong> Muscle recovery tools, such as foam rollers and massage devices, to alleviate soreness and enhance muscle performance.</li>\r\n	<li><strong>Athletic Footwear :</strong> Running shoes, cross-trainers, and other sports-specific shoes designed for comfort, support, and performance.</li>\r\n</ol>\r\n\r\n<p>The beauty and sport products market is diverse, and it continues to grow as more individuals seek products that support both their athletic and grooming needs. These products aim to help people look and feel their best while maintaining active and healthy lifestyles.</p>\r\n', 'beauty-sport', NULL, NULL),
(3, 'HAIRCARE PRODUCTS', '<p>Hair care refers to the practices and products used to maintain and improve the health, cleanliness, and appearance of hair. Proper hair care is essential for keeping your hair clean, strong, and looking its best. Hair care routines can vary depending on your hair type, texture, and specific needs, but they often include a combination of the following:<br />\r\nShampooing:Regularly washing your hair with a suitable shampoo helps remove dirt, excess oils, and product buildup. Choose a shampoo that matches your hair type (e.g., oily, dry, curly, fine) for the best results. How often you should shampoo can vary depending on your hair type and lifestyle.</p>\r\n\r\n<ol>\r\n	<li><strong>Conditioning:&nbsp;</strong>Conditioning helps to moisturize and detangle hair, making it easier to manage and preventing breakage. Conditioners can be used after shampooing or as a leave-in treatment.</li>\r\n	<li><strong>Deep Conditioning:&nbsp;</strong>Deep conditioning treatments are used to provide extra moisture and nourishment to your hair. They are especially beneficial for dry, damaged, or chemically treated hair and are typically done once a week or as needed.</li>\r\n	<li><strong>Hair Masks:&nbsp;</strong>Hair masks are intensive treatments designed to address specific hair concerns, such as frizz control, repair, or hydration. They are typically applied to damp hair and left on for a specified time before rinsing.</li>\r\n	<li><strong>Scalp Care:&nbsp;</strong>A healthy scalp is essential for healthy hair growth. Scalp care includes practices like regular cleansing, exfoliation, and using products specifically formulated to address scalp issues like dandruff or excess oil.</li>\r\n	<li><strong>Protective Styling:&nbsp;</strong>Avoiding excessive heat styling, tight hairstyles, and using protective styles (e.g., braids, twists, buns) can help minimize damage and breakage.</li>\r\n	<li><strong>Heat Styling:&nbsp;</strong>When using heat styling tools like hair dryers, straighteners, or curling irons, it&#39;s important to use heat protectant sprays to minimize damage. Use these tools on lower heat settings whenever possible.</li>\r\n	<li><strong>Trimming:&nbsp;</strong>Regularly trimming your hair helps get rid of split ends and keeps your hair looking neat and healthy. How often you should trim depends on your hair type and the rate of growth.</li>\r\n	<li><strong>Nutrition and Hydration:&nbsp;</strong>A balanced diet with essential vitamins and minerals, along with adequate hydration, contributes to the health and appearance of your hair.</li>\r\n	<li><strong>Choosing the Right Products:&nbsp;</strong>Selecting hair care products that are appropriate for your hair type and concerns is crucial. This includes shampoos, conditioners, styling products, and treatments.</li>\r\n	<li><strong>Avoiding Harsh Chemicals:&nbsp;</strong>Minimizing the use of harsh chemicals, such as excessive bleach or hair dyes, can help maintain the health of your hair.</li>\r\n	<li><strong>Protecting Hair from Environmental Damage:&nbsp;</strong>Using hats or scarves to shield your hair from sun exposure, wind, and pollution can help prevent damage.</li>\r\n</ol>\r\n\r\n<p>Hair care routines can vary widely from person to person, depending on individual preferences and hair types. It&#39;s important to pay attention to the unique needs of your hair and adjust your hair care practices accordingly to keep your hair healthy and looking its best. Consulting with a professional hairstylist or trichologist can also provide valuable guidance for maintaining healthy hair.</p>\r\n', 'hair-care', NULL, NULL),
(4, 'FACE CARE', '<p>Face care is a term that refers to the practice of taking care of your facial skin to maintain its health, appearance, and overall well-being. It encompasses a range of skincare routines and practices designed to keep your face looking its best and feeling healthy. Face care involves various steps and products aimed at cleansing, moisturizing, protecting, and addressing specific skin concerns, such as acne, aging, or dryness.</p>\r\n<p><span style=\"color:#2c3e50\"><strong>Common elements of a face care routine include:</strong></span></p>\r\n\r\n<ol>\r\n	<li><strong>Cleansing:</strong> This involves using a facial cleanser to remove dirt, oil, makeup, and impurities from your skin.</li>\r\n	<li><strong>Exfoliation:</strong> The process of exfoliation removes dead skin cells, promoting a more radiant complexion.</li>\r\n	<li><strong>Toning:</strong> Toner is applied to balance the skin&#39;s pH, tighten pores, and prep the skin for the next steps.</li>\r\n	<li><strong>Moisturizing:</strong> Moisturizers help keep the skin hydrated and prevent dryness or excessive oiliness.</li>\r\n	<li><strong>Sunscreen:</strong> Daily sunscreen application is crucial for protecting the skin from the harmful effects of UV radiation and preventing premature aging.</li>\r\n	<li><strong>Serums:</strong> Serums with active ingredients, such as vitamins or antioxidants, can target specific skin concerns, like brightening, hydration, or anti-aging.</li>\r\n	<li><strong>Masks: </strong>Face masks are used periodically for deep cleansing, hydration, or addressing specific issues.</li>\r\n</ol>\r\n\r\n<p>Face care routines are often tailored to individual skin types and concerns, such as oily, dry, combination, sensitive, or acne-prone skin. It&#39;s important to use products suitable for your skin type to achieve the best results and to avoid any potential skin issues.</p>\r\n\r\n<p>Taking care of your face is not just about enhancing your appearance; it&#39;s also about maintaining the health and function of your skin, which serves as a protective barrier against environmental factors. Proper face care can help keep your skin clear, soft, and youthful, and it can also contribute to your overall sense of well-being and confidence.</p>\r\n', 'face-care', NULL, NULL),
(5, 'COSMETICS AND MAKEUP', '<p>Cosmetics and makeup are products and techniques used to enhance and beautify the appearance of the face and body. They are widely used in the beauty and fashion industries to achieve various looks, from natural and subtle to bold and dramatic. Here&#39;s an overview of cosmetics and makeup:</p>\r\n\r\n<ol>\r\n	<li><strong>Cosmetics:</strong>&nbsp;Cosmetics refer to a broad category of products designed to improve or alter the appearance of the skin, hair, and nails. They include skincare products like moisturizers and sunscreen, as well as makeup products like foundation, lipstick, and eyeshadow.&nbsp;Common cosmetic products include skincare items, fragrances, haircare products, nail polish, and more. Cosmetics&nbsp;are often used for general skincare, protection from environmental factors, and enhancing natural beauty.</li>\r\n	<li><strong>Makeup:</strong>Makeup specifically refers to products and techniques used to enhance and transform the appearance of the face. It is a subset of cosmetics.&nbsp;Makeup products include foundation, concealer, blush, eyeshadow, eyeliner, mascara, lipstick, and more. These are used to add color, definition, and texture to the face. Makeup can be used for everyday wear, special occasions, and theatrical or artistic purposes.</li>\r\n</ol>\r\n\r\n<p><span style=\"color:#2c3e50\"><strong>Common types of makeup products and their purposes include:</strong></span></p>\r\n\r\n<p>-Foundation: Used to even out the skin tone and create a smooth base for other makeup.<br />\r\n-Concealer: Applied to cover blemishes, dark circles, or imperfections.<br />\r\n-Blush: Adds color to the cheeks and provides a healthy flush.<br />\r\n-Eyeshadow: Used to add color and dimension to the eyelids.<br />\r\n-Eyeliner: Defines the eyes and enhances their shape.<br />\r\n-Mascara: Darkens, lengthens, and volumizes the eyelashes.<br />\r\n-Lipstick/Lip Gloss: Adds color and shine to the lips.<br />\r\nMakeup techniques can range from simple, natural looks for everyday wear to elaborate and artistic designs for special occasions, fashion shows, or photo shoots. Professional makeup artists are skilled in applying makeup to achieve various desired effects.</p>\r\n\r\n<p>It&#39;s important to note that while cosmetics and makeup can be fun and creative, they should be used in moderation, and the skin should be properly cared for both before and after makeup application to maintain its health and vitality. Removing makeup at the end of the day and following a good skincare routine is essential to keep the skin in good condition.</p>\r\n', 'make-up', NULL, NULL),
(6, 'BEAUTY DEVICES', '<p>Beauty devices are technological tools and gadgets designed for personal grooming, skincare, and haircare. They use various technologies to provide users with convenient and effective ways to enhance their appearance and maintain their beauty routines at home. These devices are becoming increasingly popular due to advancements in beauty technology.</p>\r\n\r\n<p><strong><span style=\"color:#2c3e50\">Here are some common types of beauty devices that we proposed:</span></strong></p>\r\n\r\n<ol>\r\n	<li><strong>Facial Cleansing Devices :</strong> These electric devices use rotating or vibrating brushes to deep-clean the skin, remove makeup, and exfoliate. They can help prevent acne and improve skin texture.</li>\r\n	<li><strong>Anti-Aging Devices :</strong> Devices like microcurrent machines and radiofrequency devices are used to stimulate collagen production, reduce wrinkles, and tighten the skin.</li>\r\n	<li><strong>Hair Removal Devices :</strong> These devices use technologies like IPL (Intense Pulsed Light) or laser to target hair follicles and provide long-term hair reduction. They are used for areas like the legs, underarms, and face.</li>\r\n	<li><strong>LED Light Therapy Devices :</strong> LED masks and handheld devices use different wavelengths of light to address various skin concerns, such as acne, redness, and signs of aging.</li>\r\n	<li><strong>Hair Growth Devices :</strong> Laser combs and helmets use low-level laser therapy (LLLT) to stimulate hair follicles and promote hair growth in individuals experiencing hair loss.</li>\r\n	<li><strong>Derma Rollers : </strong>These handheld devices have fine needles that create micro-injuries in the skin, promoting collagen production and improving the appearance of scars, fine lines, and texture.</li>\r\n	<li><strong>Microdermabrasion Devices : </strong>These devices use abrasive surfaces or crystals to exfoliate the skin, removing dead cells and improving skin tone and texture.</li>\r\n	<li><strong>Ionic Skin Infusion Devices :</strong> Devices that use ionic technology to help skincare products penetrate the skin more effectively, enhancing the absorption of serums and creams.</li>\r\n	<li><strong>Nail Care Devices : </strong>Electric nail files and buffing tools for maintaining and grooming fingernails and toenails.</li>\r\n	<li><strong>Heat Styling Tools :</strong> Hair straighteners, curling irons, and hair dryers with advanced technologies to minimize damage and promote healthy hair.</li>\r\n	<li><strong>Facial Massagers :</strong> Devices that use vibrations or rollers to improve circulation, reduce puffiness, and promote relaxation.</li>\r\n	<li><strong>Ultrasonic Skin Scrubbers :</strong> Devices that use ultrasonic waves to cleanse and exfoliate the skin, helping to remove impurities and dead skin cells.</li>\r\n	<li><strong>Teeth Whitening Devices :</strong> At-home teeth whitening kits that use LED lights and gel formulations to brighten teeth.</li>\r\n	<li><strong>Pore Vacuum Devices :</strong> Tools that use suction to clean out pores, remove blackheads, and improve skin clarity.</li>\r\n	<li><strong>Body Sculpting Devices : </strong>Devices like radiofrequency machines and fat-freezing devices that target specific areas for body contouring and fat reduction.</li>\r\n</ol>\r\n\r\n<p>When using beauty devices, it&#39;s important to follow the manufacturer&#39;s instructions carefully and to consider your specific skin or hair type. Some devices may require a patch test, and it&#39;s essential to maintain hygiene and cleanliness to avoid skin issues. Consulting with a skincare or beauty professional is advisable if you have specific concerns or questions about using these devices.</p>\r\n', 'beauty-devices', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `collection_photos`
--

CREATE TABLE `collection_photos` (
  `PHOTO_ID` int(11) NOT NULL,
  `BLOG_ID` int(11) DEFAULT NULL,
  `PHOTO_PATH` text NOT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `collection_photos`
--

INSERT INTO `collection_photos` (`PHOTO_ID`, `BLOG_ID`, `PHOTO_PATH`, `UPDATE_DATE`) VALUES
(2, 2, '428103936.jpg', NULL),
(3, 3, '1448866239.jpg', NULL),
(4, 3, '1109703348.jpg', NULL),
(5, 3, '1722979113.jpg', NULL),
(6, 4, '1483231726.', NULL),
(7, 2, '1793500894.', NULL),
(8, 5, '1055697339.', '2023-10-20 12:00:31');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `COMMENT_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `BLOG_ID` int(11) NOT NULL,
  `CONTENT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(11) NOT NULL,
  `TITLE` varchar(300) DEFAULT NULL,
  `CATEGORY_ID` int(11) DEFAULT NULL,
  `PHOTO` text DEFAULT NULL,
  `VIDEO` text DEFAULT NULL,
  `PRODUCT_LINK` text DEFAULT NULL,
  `CONTENT` text DEFAULT NULL,
  `PRODUCT_SHORT` text DEFAULT NULL,
  `PRODUCT_PRICE` double DEFAULT NULL,
  `SPONSOR_ID` int(11) DEFAULT NULL,
  `CREATED_DATE` datetime DEFAULT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `TITLE`, `CATEGORY_ID`, `PHOTO`, `VIDEO`, `PRODUCT_LINK`, `CONTENT`, `PRODUCT_SHORT`, `PRODUCT_PRICE`, `SPONSOR_ID`, `CREATED_DATE`, `UPDATE_DATE`) VALUES
(5, 'Tensiomètre au bras', 6, '1697389870.jpg', '1697389870.', 'https://www.beurer.com/fr/p/65511/', 'Brassard easyLock innovant : Placer, serrer et démarrer<br>\r\nAucun tuyau, aucun câble – mesure simple et précise<br>\r\nde la technologie d’inflation : Confort de meManchette easyLock<br>\r\nSans tuyaux ni câbles gênants pour une mesure confortable<br>\r\n\r\nDétection de l’arythmie<br>\r\nAvertissement d’éventuels troubles du rythme cardiaque<br>\r\n\r\nTechnologie d’inflation<br>\r\nMesure directe lors du gonflage – rapide et simplesure ultime grâce à une montée en pression douce et à une mesure rapide<br> 02', 'La solution tout-en-un pour votre santé03', 150, 17, '2023-10-15 00:00:00', '2023-10-19 06:09:04'),
(6, 'O.TW O.O ', 6, '1697460159.jpg', '1697460159.mp4', 'https://fr.aliexpress.com/item/1005003323255268.html?spm=a2g0o.productlist.main.3.3be3ZQE5ZQE57T&algo_pvid=b516a385-4eb3-4545-aad7-5ec51adfe354&aem_p4p_detail=202310160534333998864771633790000278590&algo_exp_id=b516a385-4eb3-4545-aad7-5ec51adfe354-1&pdp_npi=4%40dis%21MAD%2158.24%2127.33%21%21%215.69%21%21%402103011416974596733603111e0778%2112000025242139899%21sea%21MA%211870104123%21AC&curPageLogUid=q21jHZXeLTPQ&search_p4p_id=202310160534333998864771633790000278590_2', '<div class=\"detail-desc-decorate-richtext\"> \r\n  <div class=\"detailmodule_text\"> \r\n   <br> \r\n   <p style=\"font-family:OpenSans;font-size:14px;font-weight:300;line-height:20px;white-space:pre-wrap;color:rgb(0, 0, 0);margin-bottom:12px\" class=\"detail-desc-decorate-content\" data-spm-anchor-id=\"a2g0o.detail.1000023.i1.7311KuHSKuHSXq\"><strong><span style=\"font-family:arial, helvetica, sans-serif\" data-spm-anchor-id=\"a2g0o.detail.1000023.i0.7311KuHSKuHSXq\">O.TW O.O 2 EN 1 EYELINER À DOUBLE EXTÉRIEUR-Double tête double effet, facile à dessiner un eye-liner méticuleux.<br></span></strong><span style=\"font-family:arial, helvetica, sans-serif\"><br>【PENSES D\'EYELINER DOUBLE】-Chaque stylo de l\'outil de tampon eyeliner aile a 2 extrémités. Une extrémité pour l\'estampage et l\'autre a une pointe très fine pour définir le reste de l\'œil avec précision. Vous pouvez même utiliser la taille de la doublure comme pochoir pour un maquillage plus dramatique.<br><br>【 LONGUE DURÉE ET ÉTANCHE 】-Cet eye-liner longue durée est fabriqué avec une formule à séchage rapide, est imperméable, résistant à la transpiration et à l\'huile, et dure longtemps sans bavures. Avec ce crayon eyeliner imperméable, vous pouvez faire la fête toute la nuit, même nager ou transpirer.<br><br>【LES AILES PARFAITES À CHAQUE FOIS 】-Les ailes eye-liner n\'ont jamais été aussi faciles. Alignez le tampon du coin de l\'œil jusqu\'au bout de votre sourcil pour créer la même aile de chaque côté. La courbe dans chaque eyeliner de timbre fournit un regard naturel rapide d\'yeux de chat.<br><br>【FACILE À UTILISER】-Que ce soit pour les débutants ou les personnes qui utilisent régulièrement des eyeliners, ce tampon vous permet d\'avoir facilement de beaux eyeliners. L\'épaisseur de l\'eye-liner peut être contrôlée en fonction de la force et de l\'angle, facile à dessiner un eye-liner méticuleux.<br><br>【SERVICE DE RETOUR GRATUIT】: Retour pour toute raison dans les 15 jours (livraison gratuite) Pays supportant: Russie, États-Unis, Espagne, France, Brésil, Pays-Bas, Israël, Pologne, Royaume-Uni, corée du Sud, Allemagne, Italie, Canada, Australie, Arabie Saoudite, EAU, Chili, Ukraine, Japon, Mexique, Belgique, République tchèque, Suisse, Portugal.</span></p> \r\n  </div> \r\n  <div class=\"detailmodule_text\"> \r\n   <p style=\"font-family:OpenSans;font-size:14px;font-weight:300;line-height:20px;white-space:pre-wrap;color:rgb(0, 0, 0);margin-bottom:12px\" class=\"detail-desc-decorate-content\"><span style=\"font-family:arial, helvetica, sans-serif\">INGRÉDIENT:<br>PROPYLÈNE GLYCOL, GLYCÉRINE, PVP, COPOLYMÈRE D\'ACRYLATES, CI 77266, ALUMINOMÉTASILICATE DE MAGNÉSIUM<br>GLYCOL DE CAPRYLYL, PROPYLPARABÈNE</span></p> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H4a95c23b905c4b0897e2eeeb40cac013t.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/Ha3caf8456d1240a19fb5a9d8ff3d5c19L.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_text\"> \r\n   <p style=\"font-family:OpenSans;font-size:14px;font-weight:300;line-height:20px;white-space:pre-wrap;color:rgb(0, 0, 0);margin-bottom:12px\" class=\"detail-desc-decorate-content\">✨L\'épaisseur est libre de dessiner<br>Facile à démarrer, dessiner arbitrairement<br><br>✨EYELINER LIQUIDE EXTRÊMEMENT ÉTANCHE<br>Maquillage anti-transpiration longue durée et non-faible</p> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/Hb76321d837ef4485ae326cee3c74f175p.jpg\" slate-data-type=\"image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/Hed5b0a46dbf1499ebeda0c03950021eej.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_text\"> \r\n   <p style=\"font-family:OpenSans;font-size:14px;font-weight:300;line-height:20px;white-space:pre-wrap;color:rgb(0, 0, 0);margin-bottom:12px\" class=\"detail-desc-decorate-content\">❤La plume d\'éponge de conception à double extrémité ne se sépare pas<br><br>❤DESIGN ÉLASTIQUE DE NIB-Tête éponge douce, pas facile à bifurquer, montrant des lignes oculaires douces et lisses<br><br>❤O.TW O.O STAMP NIB DESIGN-Conception à double extrémité pour vous aider à dessiner rapidement un eye-liner noir épais pour créer un effet de maquillage des yeux personnalisé</p> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H240569144c7a43648e938f3cfb5438db5.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_text\"> \r\n   <p style=\"font-family:OpenSans;font-size:14px;font-weight:300;line-height:20px;white-space:pre-wrap;color:rgb(0, 0, 0);margin-bottom:12px\" class=\"detail-desc-decorate-content\">JUSTE 2 ÉTAPES LES NOVICES PEUVENT FACILEMENT CONTRÔLER<br><br>1. VAPEUR UNE PRESSE DONNE UN EYELINER ÉLEVÉ<br><br>2. LINE ONE STROKE CRÉE UN EYELINER LISSE</p> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H21dacf43ae0c4086a15b415e97e1948c4.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_text\"> \r\n   <p style=\"font-family:OpenSans;font-size:14px;font-weight:300;line-height:20px;white-space:pre-wrap;color:rgb(0, 0, 0);margin-bottom:12px\" class=\"detail-desc-decorate-content\">✨TROIS CONTOUR DE L\'ÉTAPE DÉLICAT DE MAQUILLAGE DES YEUX.<br><br>✨Le stylo est doucement estampé le long du triangle inversé à la fin du pas de l\'œil.<br><br>✨Tracez une fine ligne avec un eye-liner et connectez-vous au triangle inversé à la fin du pas de l\'œil.<br><br>✨Dessinez à nouveau pour renforcer la profondeur des yeux.</p> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H709c34ce3bd24745a9709ad7fe9cba2fZ.jpg\" slate-data-type=\"image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H891251729a844d2eb2f31b327d3dcf83B.jpg\" slate-data-type=\"image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H2ba65d2625184e6580fbcb4251d1ac77H.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_text\"> \r\n   <p style=\"font-family:OpenSans;font-size:14px;font-weight:300;line-height:20px;white-space:pre-wrap;color:rgb(0, 0, 0);margin-bottom:12px\" class=\"detail-desc-decorate-content\">ESSAI IMPERMÉABLE INSOLUBLE<br><br>DANS L\'EAU, SÉCHAGE RAPIDE EN LIGNE-Formation du film en 3 secondes sans crainte de friction.</p> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H2b5259289902441aab17987e5258c5d3y.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_text\"> \r\n   <p style=\"font-size:16px;text-align:left;display:block;width:100%\" align=\"left\">INFORMATION:</p> \r\n   <p style=\"font-weight:normal;text-align:left;display:block;width:100%\" align=\"left\">Marque: O.TW O.O<br>TAILLE: 13.2CM * 0.8CM<br>POIDS NET: 2.8g<br>DURÉE DE CONSERVATION: 3 ANS</p> \r\n  </div> \r\n  <div class=\"detailmodule_image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/H7d80a1ce74d9404c8870b95972f03ea91.jpg\" slate-data-type=\"image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/Hb92703d4a7814b21ba59f2344eb0397cA.jpg\" slate-data-type=\"image\"> \r\n   <img class=\"detail-desc-decorate-image\" src=\"https://ae01.alicdn.com/kf/Hf41fb8262ca14d3392da0d7050ef1fdcx.jpg\" slate-data-type=\"image\"> \r\n  </div> \r\n  <div class=\"detailmodule_image\"></div> \r\n  <div class=\"detailmodule_image\"></div> \r\n  <p><br></p> \r\n </div>', 'O.TW O.O-Stylo Eyeliner Liquide Noir à Double Extrémité, Waterproof, vaccage Rapide, Maquillage Cosmétique pour Femme', 2.7, 15, '2023-10-16 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `product_collection_photos`
--

CREATE TABLE `product_collection_photos` (
  `PD_COLLECTION_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `PHOTO_PATH` text DEFAULT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product_collection_photos`
--

INSERT INTO `product_collection_photos` (`PD_COLLECTION_ID`, `PRODUCT_ID`, `PHOTO_PATH`, `UPDATE_DATE`) VALUES
(7, 6, '1562679923.jpg', NULL),
(26, 5, '69747679.jpg', '2023-10-19 05:43:30'),
(27, 5, '1086240046.jpg', '2023-10-19 05:43:30');

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE `sponsor` (
  `SPONSOR_ID` int(11) NOT NULL,
  `SPONSOR_NAME` text DEFAULT NULL,
  `SPONSOR_URL` text DEFAULT NULL,
  `SPONSOR_LOGO` text DEFAULT NULL,
  `CREATED_DATE` datetime DEFAULT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sponsor`
--

INSERT INTO `sponsor` (`SPONSOR_ID`, `SPONSOR_NAME`, `SPONSOR_URL`, `SPONSOR_LOGO`, `CREATED_DATE`, `UPDATE_DATE`) VALUES
(14, 'Sephora', 'https://www.sephora.com/', '1697793357.png', NULL, '2023-10-20 11:16:19'),
(15, 'Aliexpress', 'http://www.aliexpress.com', '1697396153.png', NULL, NULL),
(16, 'Amazon', 'https://www.amazone.com', '1697396191.png', NULL, NULL),
(17, 'beurer', 'http://www.beurer.com', '1697396210.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `PHONE_NUMBER` varchar(30) DEFAULT NULL,
  `CREATED_DATE` datetime NOT NULL,
  `UPDATE_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BLOG_ID`),
  ADD KEY `FK_BLOG_CATEGORY` (`CATEGORY_ID`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Index pour la table `collection_photos`
--
ALTER TABLE `collection_photos`
  ADD PRIMARY KEY (`PHOTO_ID`),
  ADD KEY `FK_COLLECTION_PHOTO_BLOG` (`BLOG_ID`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`COMMENT_ID`),
  ADD KEY `FK_COMMENTING` (`USER_ID`),
  ADD KEY `FK_CONTAINE` (`BLOG_ID`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `fk_product_sponsor` (`SPONSOR_ID`);

--
-- Index pour la table `product_collection_photos`
--
ALTER TABLE `product_collection_photos`
  ADD PRIMARY KEY (`PD_COLLECTION_ID`),
  ADD KEY `FK_COLLECTION_PRODUCT` (`PRODUCT_ID`);

--
-- Index pour la table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`SPONSOR_ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `BLOG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `collection_photos`
--
ALTER TABLE `collection_photos`
  MODIFY `PHOTO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `product_collection_photos`
--
ALTER TABLE `product_collection_photos`
  MODIFY `PD_COLLECTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `SPONSOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_BLOG_CATEGORY` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `collection_photos`
--
ALTER TABLE `collection_photos`
  ADD CONSTRAINT `FK_COLLECTION_PHOTO_BLOG` FOREIGN KEY (`BLOG_ID`) REFERENCES `blog` (`BLOG_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_COMMENTING` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CONTAINE` FOREIGN KEY (`BLOG_ID`) REFERENCES `blog` (`BLOG_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_sponsor` FOREIGN KEY (`SPONSOR_ID`) REFERENCES `sponsor` (`SPONSOR_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product_collection_photos`
--
ALTER TABLE `product_collection_photos`
  ADD CONSTRAINT `FK_COLLECTION_PRODUCT` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCT_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
