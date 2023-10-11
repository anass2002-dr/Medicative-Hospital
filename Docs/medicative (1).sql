-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 oct. 2023 à 18:49
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
-- Base de données : `medicative`
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
  `PICTURE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `USER_NAME`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`, `PICTURE`) VALUES
(1, 'anass@dermaj', 'anass123', 'anass', 'dermaj', '1688916765281.jpg');

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
  `CREATED_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`BLOG_ID`, `TITLE`, `CATEGORY_ID`, `PHOTO`, `VIDEO`, `PRODUCT_LINK`, `CONTENT`, `BLOG_SHORT`, `CREATED_DATE`) VALUES
(1, 'Nébuliseur électrique', 7, '1696932119.jpg', '1696932119.', 'https://www.mlslabo.ma/nebuliseur-electrique.html', '- Pour le traitement des voies respiratoires supérieures et inférieures<br />\r\n- Nébulisation de médicaments liquides par technologie à compresseur, air comprimé<br />\r\n- à utiliser en cas de rhumes, asthme, maladie respiratoire<br />\r\n- Forte proportion de particules respirables<br />\r\n- Haute capacité de nébulisation (env. 0,3 mL/min) <br />\r\n- court temps d\'inhalation<br />\r\n<b> Accessoires :</b><br />\r\nembout buccal, embout nasal, masque pour adulte, masque pour enfant, tuyau à air comprimé extra long, filtre<br />\r\nAvec compartiment de rangement pratique pour les accessoires<br />\r\n- Peut être désinfecté<br />\r\n- Pression de travail 0,8 - 1,45 bar<br />\r\n- Fonctionnement sur secteur<br />\r\n- Produit médical', 'Pour le traitement des voies respiratoires supérieures et inférieures\r\nNébulisation de médicaments liquides par technologie à compresseur, air comprimé\r\nà utiliser en cas de rhumes, asthme, maladie respiratoire\r\nForte proportion de particules respirables\r\nHaute capacité de nébulisation (env. 0,3 mL/min) \r\ncourt temps d\'inhalation', '2023-10-10'),
(2, 'Cardiotocographe', 8, '1696932446.jpg', '1696932446.', 'https://www.mlslabo.ma/cardiotocographe.html', '<p>Le moniteur fœtal peut enregistrer le rythme cardiaque fœtal et les contractions utérines maternelles dans les grossesses de plus de 28 semaines.<br>Le moniteur peut afficher simultanément les valeurs FCF, TOCO et FMOV (mouvement fœtal) en analysant leurs relations afin d’évaluer, entre autres, l’état physiologique et pathologique du fœtal et le développement de grossesses.<br>Conçu pour l’utilisation en milieu hospitalier, les clinques, les cabinets médicaux et les services de santé à domicile.</p>\r\n<p><strong><span style=\"color: rgb(71, 85, 119);\">Caractéristiques :</span></strong></p>\r\n<ul>\r\n    <li>Design léger et facile à utiliser.</li>\r\n    <li>Ecran LCD 8 couleurs rabattable sur 60°.</li>\r\n    <li>Fonction de base ; FHR, TOCO, mouvement fœtal, monitoring gémellaire et canal de la mère.</li>\r\n    <li>Affichage claire des donnes au patient et de la courbe.</li>\r\n    <li>Logiciel pour stockage et l’analyse des données.</li>\r\n    <li>Plage normale FCF 120-160 bpm.</li>\r\n    <li>Enregistrement manuel des mouvements fœtaux.</li>\r\n    <li>Alarmes sonores et visuelles pour indiquer que la fréquence cardiaque est haute ou basse.</li>\r\n    <li>Fonction de surveillance continue 24 heures en temps réel.</li>\r\n    <li>Stockage continu de la courbe patient et de données pendant 12 heures, reproduction et impression.</li>\r\n    <li>Fonction d’image Frozen.</li>\r\n    <li>Sonde onde puisée large bande 9 cristaux.</li>\r\n    <li>Imprimante thermique intégrée de haute résolution et longue durée.</li>\r\n    <li>Connexion à PC et connexion réseau (interface RJ45).</li>\r\n    <li>Deux batteries rechargeables intégrées.</li>\r\n    <li>L’appareil peut fonctionner pendant deux heures sans alimentation externe.</li>\r\n</ul>\r\n<p><strong><span style=\"color: rgb(40, 50, 78);\">Accessoires inclus :</span></strong></p>\r\n<ul>\r\n    <li>Sonde à ultrasons.</li>\r\n    <li>Sonde TOCO et interrupteur à distance.</li>\r\n    <li>Ceinture abdominale.</li>\r\n    <li>Papier d’impression (type Z, 112mm).</li>\r\n</ul>\r\n<p><br></p>', 'Le moniteur fœtal peut enregistrer le rythme cardiaque fœtal et les contractions utérines maternelles dans les grossesses de plus de 28 semaines.', '2023-10-10'),
(3, 'NETTOYEUR DE PORES', 1, '1696933244.jpg', '1696933244.', 'https://www.mlslabo.ma/nettoyeur-de-pores.html', 'Affichage de la batterie et de l\'intensité<BR>\r\n3 embouts de différentes tailles pour différents domaines d\'application sur le visage<BR>\r\nNettoyage des pores en profondeur grâce à la technologie de vide<BR>\r\nCombat efficacement les impuretés de la peau et favorise une apparence saine de la peau du visage<BR>\r\nMultifonction grâce aux 3 embouts différents<BR>\r\nÉcran LCD pour afficher l’état de la batterie et le niveau d’intensité<BR>\r\n5 niveaux d’intensité<BR>\r\nFiltre de rechange inclus<BR>\r\nDesign moderne<BR>\r\nAdapté à tous les types de peau<BR>\r\nFonctionnement sur batterie – Environ 1.5 h d’autonomie (à l’intensité 5)<BR>', 'Affichage de la batterie et de l\'intensité\r\n3 embouts de différentes tailles pour différents domaines d\'application sur le visage\r\nNettoyage des pores en profondeur grâce à la technologie de vide', '2023-10-10');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_NAME` varchar(20) DEFAULT NULL,
  `DESCRIPTION` text NOT NULL,
  `PHOTO_PATH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_NAME`, `DESCRIPTION`, `PHOTO_PATH`) VALUES
(1, 'Body care', '<p>Body care refers to a set of practices and products that are used to maintain and improve the health, hygiene, and appearance of the body. It involves taking care of your skin, hair, nails, and overall physical well-being. Body care can encompass a wide range of activities and products, including:</p>\r\n\r\n<ol>\r\n	<li><strong>Skincare:</strong> This involves cleansing, exfoliating, moisturizing, and protecting your skin from the sun and environmental factors. Skincare products can include cleansers, toners, serums, moisturizers, sunscreen, and more.</li>\r\n	<li><strong>Haircare: </strong>Haircare includes washing, conditioning, and styling your hair to keep it clean, healthy, and manageable. Haircare products include shampoos, conditioners, hair treatments, and styling products like gels, mousses, and hairsprays.</li>\r\n	<li><strong>Nail Care:</strong> Nail care involves keeping your nails clean, trimmed, and well-maintained. This can include regular nail trimming, filing, and using nail polish or treatments.</li>\r\n	<li><strong>Bathing and Showering:</strong> Regular bathing or showering is essential for maintaining personal hygiene and keeping the body clean. It often involves using soap, body wash, and other cleansing products.</li>\r\n	<li><strong>Body Hydration:</strong> Keeping your body properly hydrated by drinking enough water is a crucial aspect of body care. Proper hydration helps maintain healthy skin, hair, and overall well-being.</li>\r\n	<li><strong>Dental Care: </strong>Taking care of your teeth and gums is an important part of overall body care. This includes brushing, flossing, and regular dental check-ups.</li>\r\n	<li><strong>Deodorant and Perfume:</strong> Using deodorant and perfume helps control body odor and enhance personal grooming.</li>\r\n	<li><strong>Nutrition and Diet:</strong> Eating a balanced and nutritious diet is essential for maintaining good health and well-being. Proper nutrition can have a significant impact on the condition of your skin, hair, and nails.</li>\r\n	<li><strong>Exercise and Physical Activity: </strong>Regular physical activity contributes to overall body health and can improve your skin&#39;s appearance, promote circulation, and boost your mood.</li>\r\n	<li><strong>Relaxation and Stress Management:</strong> Reducing stress and getting adequate rest and sleep are important aspects of body care, as they can impact your overall health and appearance.</li>\r\n	<li><strong>Specialized Treatments:</strong> Some people may opt for specialized body care treatments such as massages, facials, body scrubs, or spa therapies to address specific concerns or relax and rejuvenate.</li>\r\n</ol>\r\n\r\n<p>Body care practices can vary widely from person to person and may be influenced by individual preferences, cultural norms, and personal needs. The goal of body care is to promote physical health, hygiene, and overall well-being, as well as to enhance one&#39;s self-esteem and confidence.</p>\r\n', ''),
(2, 'ORTHOPAEDICS', '<p>Orthopedics, also spelled orthopaedics, is a branch of medicine that focuses on the diagnosis, treatment, prevention, and rehabilitation of conditions and injuries related to the musculoskeletal system. The musculoskeletal system consists of the bones, joints, muscles, tendons, ligaments, and other connective tissues that enable the body to move, support its structure, and perform various functions. Orthopedic surgeons, also known as orthopedists, are medical doctors who specialize in this field. They are trained to diagnose and treat a wide range of musculoskeletal issues, including:</p>\r\n\r\n<ol>\r\n	<li><strong>Fractures and Trauma:</strong> Orthopedic surgeons treat broken bones, dislocations, and other traumatic injuries to the musculoskeletal system. This includes setting fractures and performing surgeries to repair severe fractures.</li>\r\n	<li><strong>Joint Problems:</strong> Conditions affecting the joints, such as osteoarthritis, rheumatoid arthritis, and other forms of arthritis, are within the scope of orthopedics. Orthopedic surgeons can perform joint replacement surgeries, like knee and hip replacements, to alleviate pain and restore joint function.</li>\r\n	<li><strong>Sports Injuries:</strong> Orthopedic specialists often work with athletes to diagnose and treat sports-related injuries, such as torn ligaments (e.g., ACL tears), muscle strains, and overuse injuries.</li>\r\n	<li><strong>Spinal Conditions:</strong> Orthopedic surgeons can treat spinal conditions like herniated discs, scoliosis, and spinal stenosis. They may perform surgeries like spinal fusion or disc decompression to address these issues.</li>\r\n	<li><strong>Hand and Wrist Conditions:</strong> Orthopedists treat hand and wrist conditions, including carpal tunnel syndrome, tendonitis, and fractures of the hand and wrist bones.</li>\r\n	<li><strong>Foot and Ankle Problems:</strong> Conditions affecting the feet and ankles, such as bunions, plantar fasciitis, and Achilles tendon injuries, are also treated by orthopedic specialists.</li>\r\n	<li><strong>Pediatric Orthopedics:</strong> Pediatric orthopedic surgeons focus on musculoskeletal issues in children, including developmental abnormalities and injuries specific to pediatric patients.</li>\r\n	<li><strong>Orthopedic Oncology:</strong> Orthopedic oncologists diagnose and treat bone and soft tissue tumors, both benign and malignant.</li>\r\n	<li><strong>Rehabilitation:</strong> Orthopedic surgeons often work closely with physical therapists to develop rehabilitation programs for patients recovering from surgery or injuries.</li>\r\n	<li><strong>Preventive Care:</strong> Orthopedists provide guidance on preventing musculoskeletal injuries and offer advice on maintaining healthy bones and joints through lifestyle modifications and exercises.</li>\r\n</ol>\r\n\r\n<p>Orthopedic treatments can range from conservative approaches like physical therapy and medication to surgical interventions when necessary. The goal of orthopedics is to restore mobility, alleviate pain, improve quality of life, and prevent further musculoskeletal issues. Orthopedic surgeons play a crucial role in helping individuals of all ages maintain or regain their musculoskeletal health.</p>\r\n', ''),
(3, 'HAIRCARE PRODUCTS', '<p>Hair care refers to the practices and products used to maintain and improve the health, cleanliness, and appearance of hair. Proper hair care is essential for keeping your hair clean, strong, and looking its best. Hair care routines can vary depending on your hair type, texture, and specific needs, but they often include a combination of the following:<br />\r\nShampooing:Regularly washing your hair with a suitable shampoo helps remove dirt, excess oils, and product buildup. Choose a shampoo that matches your hair type (e.g., oily, dry, curly, fine) for the best results. How often you should shampoo can vary depending on your hair type and lifestyle.</p>\r\n\r\n<ol>\r\n	<li><strong>Conditioning:&nbsp;</strong>Conditioning helps to moisturize and detangle hair, making it easier to manage and preventing breakage. Conditioners can be used after shampooing or as a leave-in treatment.</li>\r\n	<li><strong>Deep Conditioning:&nbsp;</strong>Deep conditioning treatments are used to provide extra moisture and nourishment to your hair. They are especially beneficial for dry, damaged, or chemically treated hair and are typically done once a week or as needed.</li>\r\n	<li><strong>Hair Masks:&nbsp;</strong>Hair masks are intensive treatments designed to address specific hair concerns, such as frizz control, repair, or hydration. They are typically applied to damp hair and left on for a specified time before rinsing.</li>\r\n	<li><strong>Scalp Care:&nbsp;</strong>A healthy scalp is essential for healthy hair growth. Scalp care includes practices like regular cleansing, exfoliation, and using products specifically formulated to address scalp issues like dandruff or excess oil.</li>\r\n	<li><strong>Protective Styling:&nbsp;</strong>Avoiding excessive heat styling, tight hairstyles, and using protective styles (e.g., braids, twists, buns) can help minimize damage and breakage.</li>\r\n	<li><strong>Heat Styling:&nbsp;</strong>When using heat styling tools like hair dryers, straighteners, or curling irons, it&#39;s important to use heat protectant sprays to minimize damage. Use these tools on lower heat settings whenever possible.</li>\r\n	<li><strong>Trimming:&nbsp;</strong>Regularly trimming your hair helps get rid of split ends and keeps your hair looking neat and healthy. How often you should trim depends on your hair type and the rate of growth.</li>\r\n	<li><strong>Nutrition and Hydration:&nbsp;</strong>A balanced diet with essential vitamins and minerals, along with adequate hydration, contributes to the health and appearance of your hair.</li>\r\n	<li><strong>Choosing the Right Products:&nbsp;</strong>Selecting hair care products that are appropriate for your hair type and concerns is crucial. This includes shampoos, conditioners, styling products, and treatments.</li>\r\n	<li><strong>Avoiding Harsh Chemicals:&nbsp;</strong>Minimizing the use of harsh chemicals, such as excessive bleach or hair dyes, can help maintain the health of your hair.</li>\r\n	<li><strong>Protecting Hair from Environmental Damage:&nbsp;</strong>Using hats or scarves to shield your hair from sun exposure, wind, and pollution can help prevent damage.</li>\r\n</ol>\r\n\r\n<p>Hair care routines can vary widely from person to person, depending on individual preferences and hair types. It&#39;s important to pay attention to the unique needs of your hair and adjust your hair care practices accordingly to keep your hair healthy and looking its best. Consulting with a professional hairstylist or trichologist can also provide valuable guidance for maintaining healthy hair.</p>\r\n', ''),
(4, 'FACE CARE', '<p>Face care is a term that refers to the practice of taking care of your facial skin to maintain its health, appearance, and overall well-being. It encompasses a range of skincare routines and practices designed to keep your face looking its best and feeling healthy. Face care involves various steps and products aimed at cleansing, moisturizing, protecting, and addressing specific skin concerns, such as acne, aging, or dryness.</p>\r\n<p><span style=\"color:#2c3e50\"><strong>Common elements of a face care routine include:</strong></span></p>\r\n\r\n<ol>\r\n	<li><strong>Cleansing:</strong> This involves using a facial cleanser to remove dirt, oil, makeup, and impurities from your skin.</li>\r\n	<li><strong>Exfoliation:</strong> The process of exfoliation removes dead skin cells, promoting a more radiant complexion.</li>\r\n	<li><strong>Toning:</strong> Toner is applied to balance the skin&#39;s pH, tighten pores, and prep the skin for the next steps.</li>\r\n	<li><strong>Moisturizing:</strong> Moisturizers help keep the skin hydrated and prevent dryness or excessive oiliness.</li>\r\n	<li><strong>Sunscreen:</strong> Daily sunscreen application is crucial for protecting the skin from the harmful effects of UV radiation and preventing premature aging.</li>\r\n	<li><strong>Serums:</strong> Serums with active ingredients, such as vitamins or antioxidants, can target specific skin concerns, like brightening, hydration, or anti-aging.</li>\r\n	<li><strong>Masks: </strong>Face masks are used periodically for deep cleansing, hydration, or addressing specific issues.</li>\r\n</ol>\r\n\r\n<p>Face care routines are often tailored to individual skin types and concerns, such as oily, dry, combination, sensitive, or acne-prone skin. It&#39;s important to use products suitable for your skin type to achieve the best results and to avoid any potential skin issues.</p>\r\n\r\n<p>Taking care of your face is not just about enhancing your appearance; it&#39;s also about maintaining the health and function of your skin, which serves as a protective barrier against environmental factors. Proper face care can help keep your skin clear, soft, and youthful, and it can also contribute to your overall sense of well-being and confidence.</p>\r\n', ''),
(5, 'COSMETICS AND MAKEUP', '<p>Cosmetics and makeup are products and techniques used to enhance and beautify the appearance of the face and body. They are widely used in the beauty and fashion industries to achieve various looks, from natural and subtle to bold and dramatic. Here&#39;s an overview of cosmetics and makeup:</p>\r\n\r\n<ol>\r\n	<li><strong>Cosmetics:</strong>&nbsp;Cosmetics refer to a broad category of products designed to improve or alter the appearance of the skin, hair, and nails. They include skincare products like moisturizers and sunscreen, as well as makeup products like foundation, lipstick, and eyeshadow.&nbsp;Common cosmetic products include skincare items, fragrances, haircare products, nail polish, and more. Cosmetics&nbsp;are often used for general skincare, protection from environmental factors, and enhancing natural beauty.</li>\r\n	<li><strong>Makeup:</strong>Makeup specifically refers to products and techniques used to enhance and transform the appearance of the face. It is a subset of cosmetics.&nbsp;Makeup products include foundation, concealer, blush, eyeshadow, eyeliner, mascara, lipstick, and more. These are used to add color, definition, and texture to the face. Makeup can be used for everyday wear, special occasions, and theatrical or artistic purposes.</li>\r\n</ol>\r\n\r\n<p><span style=\"color:#2c3e50\"><strong>Common types of makeup products and their purposes include:</strong></span></p>\r\n\r\n<p>-Foundation: Used to even out the skin tone and create a smooth base for other makeup.<br />\r\n-Concealer: Applied to cover blemishes, dark circles, or imperfections.<br />\r\n-Blush: Adds color to the cheeks and provides a healthy flush.<br />\r\n-Eyeshadow: Used to add color and dimension to the eyelids.<br />\r\n-Eyeliner: Defines the eyes and enhances their shape.<br />\r\n-Mascara: Darkens, lengthens, and volumizes the eyelashes.<br />\r\n-Lipstick/Lip Gloss: Adds color and shine to the lips.<br />\r\nMakeup techniques can range from simple, natural looks for everyday wear to elaborate and artistic designs for special occasions, fashion shows, or photo shoots. Professional makeup artists are skilled in applying makeup to achieve various desired effects.</p>\r\n\r\n<p>It&#39;s important to note that while cosmetics and makeup can be fun and creative, they should be used in moderation, and the skin should be properly cared for both before and after makeup application to maintain its health and vitality. Removing makeup at the end of the day and following a good skincare routine is essential to keep the skin in good condition.</p>\r\n', ''),
(6, 'ELECTRIC MASSAGERS', '<p>Electric massagers, also known as electric massage devices or electric massaging tools, are mechanical devices designed to provide various forms of massage and relief to the body. These devices use electricity to power their mechanisms, allowing them to deliver consistent and targeted massage techniques. Electric massagers come in a wide range of types and designs, each tailored to address specific muscle and relaxation needs.</p>\r\n\r\n<p><span style=\"color:#2c3e50\"><strong>Here are some common types of electric massagers:</strong></span></p>\r\n\r\n<ol>\r\n	<li><strong>Handheld Electric Massagers:</strong> These are portable, compact devices designed to be held in the hand. They typically feature various massage attachments, such as rollers, nodes, or heads, that can be used to target specific areas of the body, like the neck, shoulders, back, or limbs.</li>\r\n	<li><strong>Percussion Massagers:</strong> These devices use rapid, percussive motions to provide deep tissue massage. They are particularly effective for releasing muscle tension and increasing blood circulation. Percussion massagers are often used by athletes and individuals with tight or sore muscles.</li>\r\n	<li><strong>Vibrating Massagers:</strong> Vibrating massagers use high-frequency vibrations to relax and soothe muscles. They can be used on different body parts and are suitable for both relaxation and stimulating blood flow.</li>\r\n	<li><strong>Shiatsu Massagers: </strong>Shiatsu massagers simulate the Japanese Shiatsu massage technique, which involves applying pressure to specific points on the body. These massagers often use rotating nodes to mimic the kneading and pressing motions of a Shiatsu massage therapist.</li>\r\n	<li><strong>Foot Massagers:</strong> Foot massagers are designed specifically for the feet and lower legs. They may feature rollers, air compression, or kneading mechanisms to relieve foot pain, tension, and improve circulation.</li>\r\n	<li><strong>Neck and Shoulder Massagers:</strong> These are electric massagers designed to target the neck and shoulder areas, which are common areas of tension. They often feature a U-shaped design that fits comfortably around the neck.</li>\r\n	<li><strong>Back Massagers:</strong> Back massagers are often larger and designed to be used on the back. They may have multiple massage nodes or a rolling mechanism to cover a larger area of the body.</li>\r\n	<li><strong>Chair Massagers:</strong> These are integrated into massage chairs and offer a full-body massage experience. They are often equipped with various massage techniques, including kneading, rolling, tapping, and more.</li>\r\n</ol>\r\n\r\n<p>Electric massagers are popular for their convenience and the ability to deliver consistent pressure and motions, which can be difficult to achieve with manual massages. They are used for relaxation, pain relief, muscle recovery, stress reduction, and general well-being. However, it&#39;s essential to use them according to the manufacturer&#39;s instructions and avoid excessive pressure or prolonged use to prevent any potential injuries or discomfort. If you have any underlying medical conditions or concerns, it&#39;s advisable to consult with a healthcare professional before using electric massagers.</p>\r\n', ''),
(7, 'tools', '', ''),
(8, 'devices', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `collection_photos`
--

CREATE TABLE `collection_photos` (
  `PHOTO_ID` int(11) NOT NULL,
  `BLOG_ID` int(11) DEFAULT NULL,
  `PHOTO_PATH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `collection_photos`
--

INSERT INTO `collection_photos` (`PHOTO_ID`, `BLOG_ID`, `PHOTO_PATH`) VALUES
(1, 1, '963677423.jpg'),
(2, 2, '428103936.jpg'),
(3, 3, '1448866239.jpg'),
(4, 3, '1109703348.jpg'),
(5, 3, '1722979113.jpg');

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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `PHONE_NUMBER` varchar(30) DEFAULT NULL
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
  MODIFY `BLOG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `collection_photos`
--
ALTER TABLE `collection_photos`
  MODIFY `PHOTO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `FK_BLOG_CATEGORY` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`);

--
-- Contraintes pour la table `collection_photos`
--
ALTER TABLE `collection_photos`
  ADD CONSTRAINT `FK_COLLECTION_PHOTO_BLOG` FOREIGN KEY (`BLOG_ID`) REFERENCES `blog` (`BLOG_ID`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_COMMENTING` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`),
  ADD CONSTRAINT `FK_CONTAINE` FOREIGN KEY (`BLOG_ID`) REFERENCES `blog` (`BLOG_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
