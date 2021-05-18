-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 19:22
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bazarculturelle`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idA` int(11) NOT NULL,
  `titre` varchar(120) NOT NULL,
  `nomAuteur` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `dateA` date NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idA`, `titre`, `nomAuteur`, `description`, `dateA`, `image`) VALUES
(22, 'le bazar ', 'celine', 'bonjoure', '2021-04-07', 'blog2.jpg'),
(23, 'le bazar culturel', 'Cécile Martet', 'Le 30 mars 1853 naissait Vincent Van Gogh aux Pays-Bas. Plus d’un siècle et demi plus tard, Le bazar culturel rend hommage à l’un des plus grands peintres néerlandais dans un nouveau numéro de L’Œuvre à la loupe ! Lumière sur l’histoire et la symbolique de l’une des…', '2021-04-17', 'blog2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Numero` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Postal` varchar(50) NOT NULL,
  `Code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`id`, `Nom`, `Prenom`, `Email`, `Numero`, `Type`, `Adresse`, `Postal`, `Code`) VALUES
(0, 'Admin', 'Admin', 'Admin@gmail.com', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin'),
(4, 'Picq', 'JB', 'loui@gmail.com', '01', 'Photograpie', '11 rue carves', '92120', 'a'),
(5, 'zoe', 'Gaspard', 'enfrofffet@gmail.com', '0663314563', 'Sculture', '11 rue carves', '92120', 'd'),
(6, 'Roffet', 'Simon', 'natole92120@gmail.com', 'd', 'Photograpie', '11 rue carves', '92120', 'a'),
(56, 'az', 'a', 'ana@gmail.com', '0663314563', 'Photograpie', '11 rue carves', '92120', 'a'),
(57, 'az', 'a', 'anaaa@gmail.com', '0663314563', 'Photograpie', '11 rue carves', '92120', 'a'),
(58, 'azaa', 'add', 'aeeee@gmail.com', '0663314563', 'Photograpie', '11 rue carves', '92120', 'a'),
(59, 'Roffet', 'Simon', 'mpol@gmail.com', '0663314563', 'Photographie', '11 rue carves', '92120', 'p'),
(60, 'Roffet', 'Simon', 'mpolkiuj@gmail.com', '0663314563', 'Sculture', '11 rue carves', '92120', 't');

-- --------------------------------------------------------

--
-- Structure de la table `attente`
--

CREATE TABLE `attente` (
  `REFERENCE` int(12) NOT NULL,
  `NOM` varchar(150) NOT NULL,
  `PRIX` float NOT NULL,
  `DATE` date NOT NULL,
  `QTE` int(11) NOT NULL,
  `IMAGE` varchar(250) NOT NULL,
  `DESCP` varchar(250) NOT NULL,
  `CATEGORIE` int(12) NOT NULL,
  `USER` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `CODE` int(12) NOT NULL,
  `NOM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`CODE`, `NOM`) VALUES
(10, 'Livres'),
(11, 'Instruments'),
(12, 'ART'),
(13, ' celine');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_produit`, `date`, `id_user`) VALUES
(1, 145, '2021-05-14', 65),
(2, 145, '2021-05-19', 64),
(3, 145, '2021-05-19', 64);

-- --------------------------------------------------------

--
-- Structure de la table `msg`
--

CREATE TABLE `msg` (
  `id_m` int(11) NOT NULL,
  `id_s` int(11) NOT NULL,
  `id_r` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `msg`
--

INSERT INTO `msg` (`id_m`, `id_s`, `id_r`, `date`, `message`) VALUES
(298, 63, 64, '2013-05-21', 'ok'),
(299, 64, 63, '2013-05-21', 'by'),
(300, 63, 64, '2013-05-21', 'by');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `REFERENCE` int(12) NOT NULL,
  `NOM` varchar(150) NOT NULL,
  `PRIX` float NOT NULL,
  `DATE` date NOT NULL,
  `QTE` int(11) NOT NULL,
  `IMAGE` varchar(250) NOT NULL,
  `DESCP` varchar(250) NOT NULL,
  `CATEGORIE` int(12) NOT NULL,
  `USER` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`REFERENCE`, `NOM`, `PRIX`, `DATE`, `QTE`, `IMAGE`, `DESCP`, `CATEGORIE`, `USER`) VALUES
(145, 'Lilas', 17, '2021-05-13', 6, 'image1.jpg', ' Is this a fuc.....ing joke?!?I have spend all this diamonds,I have Two green meliodas and with a ticket i have her!?! Netmarble likes to make jokes with us!!!', 11, 52),
(146, 'Rostom', 11, '2021-05-14', 5, 'album7.jpg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.', 11, 63),
(147, 'Celine', 4, '2021-05-14', 4, 'a.png', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.', 11, 64),
(148, 'HBAIB', 2, '2021-05-14', 3, 'aaaa.png', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.', 12, 64);

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE `promo` (
  `idPromo` int(11) NOT NULL,
  `taux` int(11) DEFAULT NULL,
  `dateD` date DEFAULT NULL,
  `dateF` date DEFAULT NULL,
  `pourcentage` int(11) NOT NULL,
  `REFERENCE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `Reference` int(11) NOT NULL,
  `Prix` decimal(6,2) NOT NULL,
  `Description` text NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Id_A` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`Reference`, `Prix`, `Description`, `Type`, `Id_A`) VALUES
(45, '98.99', 'La musique c\'est trop bien', 'Instrument', 4),
(46, '9999.99', 'J\'ai une nouvelle passion pour la littérature', 'Livre', 5),
(47, '145.00', 'Petite photo?', 'Photographie', 6),
(49, '145.00', 'Je souhaite aprendre à lire', 'Peinture', 56),
(50, '1458.00', 'Qui est d\'attaque pour me peindre?', 'Livre', 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `TEL` int(11) NOT NULL,
  `ADRESSE` varchar(50) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSE` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(100) DEFAULT NULL,
  `IMG` varchar(100) NOT NULL,
  `BLOQUER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `NOM`, `TEL`, `ADRESSE`, `EMAIL`, `PASSE`, `SEX`, `TYPE`, `DESCRIPTION`, `IMG`, `BLOQUER`) VALUES
(51, 'fire ', 3, 'klsqdlk', 'ros@gmail.com', 'd', 'male', 'Buyer', 'Buyer', 'dhia.png', 0),
(52, 'Dhia', 7, '1    ', '2@gmail.com', '1    ', 'female', 'Buyer', 'TUNISIA', 'dhia.png', 1),
(63, 'rostom', 7, '7    ', '8', '7    ', 'male', 'Buyer', '“Everything you can imagine is real.”\r\n  ', 'rostom.png', 1),
(64, '7', 0, '7', 'rostom.charni@gmail.com', '7', 'female', 'Buyer', NULL, 'dhia.png', 0),
(65, 'admin', 87, 'admin ', 'admin@gmail.com', 'admin ', 'male', 'administrateur', ' maroc', 'dhia.png', 0),
(66, 'Dhia', 6, 'aaa', 'dhi@gmail.com', '1234', 'male', 'Buyer', NULL, 'dhia.png', 0),
(67, 'Celine', 16515616, 'esfdsfdwd', 'cel@gmail.com', '1234', 'female', 'Buyer', NULL, 'img4.jpg', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idA`);

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdA` (`id`),
  ADD KEY `IdA_2` (`id`);

--
-- Index pour la table `attente`
--
ALTER TABLE `attente`
  ADD PRIMARY KEY (`REFERENCE`),
  ADD KEY `Fk_attente` (`CATEGORIE`),
  ADD KEY `Fk2_attente` (`USER`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CODE`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idp_idf` (`id_produit`),
  ADD KEY `fk_idu_idf` (`id_user`);

--
-- Index pour la table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `fk_idu_ids` (`id_s`),
  ADD KEY `fk_idu_idr` (`id_r`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`REFERENCE`),
  ADD KEY `Fk_Produits` (`CATEGORIE`),
  ADD KEY `Fk2_Produits` (`USER`);

--
-- Index pour la table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`idPromo`),
  ADD KEY `REFERENCE` (`REFERENCE`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Reference`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `attente`
--
ALTER TABLE `attente`
  MODIFY `REFERENCE` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `CODE` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `msg`
--
ALTER TABLE `msg`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `REFERENCE` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT pour la table `promo`
--
ALTER TABLE `promo`
  MODIFY `idPromo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `Reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `attente`
--
ALTER TABLE `attente`
  ADD CONSTRAINT `Fk2_attente` FOREIGN KEY (`USER`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_attente` FOREIGN KEY (`CATEGORIE`) REFERENCES `categories` (`CODE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`REFERENCE`),
  ADD CONSTRAINT `favoris_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`);

--
-- Contraintes pour la table `msg`
--
ALTER TABLE `msg`
  ADD CONSTRAINT `msg_ibfk_1` FOREIGN KEY (`id_r`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `msg_ibfk_2` FOREIGN KEY (`id_s`) REFERENCES `user` (`ID`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `Fk2_Produits` FOREIGN KEY (`USER`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_Produits` FOREIGN KEY (`CATEGORIE`) REFERENCES `categories` (`CODE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`REFERENCE`) REFERENCES `produits` (`REFERENCE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
