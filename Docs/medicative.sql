-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 10 oct. 2023 à 12:55
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
(1, 'Nébuliseur électrique', 7, '1696932119.jpg', '1696932119.', 'https://www.mlslabo.ma/nebuliseur-electrique.html', '- Pour le traitement des voies respiratoires supérieures et inférieures<br />\r\n- Nébulisation de médicaments liquides par technologie à compresseur, air comprimé<br />\r\n- à utiliser en cas de rhumes, asthme, maladie respiratoire<br />\r\n- Forte proportion de particules respirables<br />\r\n- Haute capacité de nébulisation (env. 0,3 mL/min) <br />\r\n- court temps d\'inhalation<br />\r\n<b> Accessoires :</b><br />\r\nembout buccal, embout nasal, masque pour adulte, masque pour enfant, tuyau à air comprimé extra long, filtre<br />\r\nAvec compartiment de rangement pratique pour les accessoires<br />\r\n- Peut être désinfecté<br />\r\n- Pression de travail 0,8 - 1,45 bar<br />\r\n- Fonctionnement sur secteur<br />\r\n- Produit médical', 'Pour le traitement des voies respiratoires supérieures et inférieures<br />\r\nNébulisation de médicaments liquides par technologie à compresseur, air comprimé<br />\r\nà utiliser en cas de rhumes, asthme, maladie respiratoire<br />\r\nForte proportion de particules respirables<br />\r\nHaute capacité de nébulisation (env. 0,3 mL/min) <br />\r\ncourt temps d\'inhalation<br />', '2023-10-10'),
(2, 'Cardiotocographe', 8, '1696932446.jpg', '1696932446.', 'https://www.mlslabo.ma/cardiotocographe.html', '<p>Le moniteur fœtal peut enregistrer le rythme cardiaque fœtal et les contractions utérines maternelles dans les grossesses de plus de 28 semaines.<br>Le moniteur peut afficher simultanément les valeurs FCF, TOCO et FMOV (mouvement fœtal) en analysant leurs relations afin d’évaluer, entre autres, l’état physiologique et pathologique du fœtal et le développement de grossesses.<br>Conçu pour l’utilisation en milieu hospitalier, les clinques, les cabinets médicaux et les services de santé à domicile.</p>\r\n<p><strong><span style=\"color: rgb(71, 85, 119);\">Caractéristiques :</span></strong></p>\r\n<ul>\r\n    <li>Design léger et facile à utiliser.</li>\r\n    <li>Ecran LCD 8 couleurs rabattable sur 60°.</li>\r\n    <li>Fonction de base ; FHR, TOCO, mouvement fœtal, monitoring gémellaire et canal de la mère.</li>\r\n    <li>Affichage claire des donnes au patient et de la courbe.</li>\r\n    <li>Logiciel pour stockage et l’analyse des données.</li>\r\n    <li>Plage normale FCF 120-160 bpm.</li>\r\n    <li>Enregistrement manuel des mouvements fœtaux.</li>\r\n    <li>Alarmes sonores et visuelles pour indiquer que la fréquence cardiaque est haute ou basse.</li>\r\n    <li>Fonction de surveillance continue 24 heures en temps réel.</li>\r\n    <li>Stockage continu de la courbe patient et de données pendant 12 heures, reproduction et impression.</li>\r\n    <li>Fonction d’image Frozen.</li>\r\n    <li>Sonde onde puisée large bande 9 cristaux.</li>\r\n    <li>Imprimante thermique intégrée de haute résolution et longue durée.</li>\r\n    <li>Connexion à PC et connexion réseau (interface RJ45).</li>\r\n    <li>Deux batteries rechargeables intégrées.</li>\r\n    <li>L’appareil peut fonctionner pendant deux heures sans alimentation externe.</li>\r\n</ul>\r\n<p><strong><span style=\"color: rgb(40, 50, 78);\">Accessoires inclus :</span></strong></p>\r\n<ul>\r\n    <li>Sonde à ultrasons.</li>\r\n    <li>Sonde TOCO et interrupteur à distance.</li>\r\n    <li>Ceinture abdominale.</li>\r\n    <li>Papier d’impression (type Z, 112mm).</li>\r\n</ul>\r\n<p><br></p>', '<p>&nbsp;Le moniteur f&oelig;tal peut enregistrer le rythme cardiaque f&oelig;tal et les contractions ut&eacute;rines maternelles dans les grossesses de plus de 28 semaines.</p>', '2023-10-10'),
(3, 'NETTOYEUR DE PORES', 1, '1696933244.jpg', '1696933244.', 'https://www.mlslabo.ma/nettoyeur-de-pores.html', 'Affichage de la batterie et de l\'intensité<BR>\r\n3 embouts de différentes tailles pour différents domaines d\'application sur le visage<BR>\r\nNettoyage des pores en profondeur grâce à la technologie de vide<BR>\r\nCombat efficacement les impuretés de la peau et favorise une apparence saine de la peau du visage<BR>\r\nMultifonction grâce aux 3 embouts différents<BR>\r\nÉcran LCD pour afficher l’état de la batterie et le niveau d’intensité<BR>\r\n5 niveaux d’intensité<BR>\r\nFiltre de rechange inclus<BR>\r\nDesign moderne<BR>\r\nAdapté à tous les types de peau<BR>\r\nFonctionnement sur batterie – Environ 1.5 h d’autonomie (à l’intensité 5)<BR>', 'Affichage de la batterie et de l\'intensité<BR>\r\n3 embouts de différentes tailles pour différents domaines d\'application sur le visage<BR>\r\nNettoyage des pores en profondeur grâce à la technologie de vide<BR>', '2023-10-10');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_NAME` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_NAME`) VALUES
(1, 'Body care'),
(2, 'Makeup'),
(3, 'Hair care'),
(4, 'Nail care'),
(5, 'Fragrance'),
(6, 'accessories'),
(7, 'tools'),
(8, 'devices');

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
