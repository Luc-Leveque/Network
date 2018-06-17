-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Mai 2017 à 22:40
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rs`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id_a` int(10) UNSIGNED ZEROFILL NOT NULL,
  `id_u` int(10) UNSIGNED NOT NULL,
  `titre` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `amitier`
--

CREATE TABLE `amitier` (
  `id_amie` int(11) UNSIGNED NOT NULL,
  `a1` int(11) UNSIGNED NOT NULL,
  `a2` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `amitier`
--

INSERT INTO `amitier` (`id_amie`, `a1`, `a2`) VALUES
(4, 14, 15),
(3, 14, 15),
(5, 14, 16),
(10, 14, 14),
(9, 13, 12);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_com` int(10) UNSIGNED NOT NULL,
  `id_u` int(10) UNSIGNED NOT NULL,
  `contenu` text NOT NULL,
  `date_post` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id_com`, `id_u`, `contenu`, `date_post`) VALUES
(1, 13, 'finit', '2017-05-15 00:09:40'),
(2, 13, 'la vie', '2017-05-15 00:10:47'),
(3, 13, 'scsvdsv ds', '2017-05-15 00:11:59');

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `id_d` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demande_amie`
--

CREATE TABLE `demande_amie` (
  `id_da` int(11) UNSIGNED NOT NULL,
  `a1` int(11) UNSIGNED NOT NULL,
  `a2` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demande_amie`
--

INSERT INTO `demande_amie` (`id_da`, `a1`, `a2`) VALUES
(15, 14, 12),
(14, 13, 16),
(12, 13, 14),
(13, 13, 15);

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `id_e` int(10) UNSIGNED NOT NULL,
  `id_u` int(10) UNSIGNED NOT NULL,
  `titre` varchar(50) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_i` int(10) UNSIGNED NOT NULL,
  `id_u` int(10) UNSIGNED NOT NULL,
  `id_a` int(10) UNSIGNED NOT NULL,
  `lien` varchar(255) NOT NULL,
  `profil` varchar(50) NOT NULL DEFAULT 'profil.png'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id_i`, `id_u`, `id_a`, `lien`, `profil`) VALUES
(1, 13, 1, 'img/a1.jpeg', 'profil.png'),
(2, 14, 1, 'img/a1.jpeg', 'profil.png'),
(3, 16, 1, 'img/a1.jpeg', 'profil.png'),
(4, 15, 1, 'img/a1.jpeg', 'profil.png'),
(9, 13, 3, 'img/a3.jpeg', 'profil.png'),
(6, 14, 2, 'img/a2.jpeg', 'profil.png'),
(7, 15, 2, 'img/a2.jpeg', 'profil.png'),
(8, 16, 2, 'img/a2.jpeg', 'profil.png'),
(10, 13, 3, 'img/a1.jpeg', 'profil.png');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_m` smallint(5) UNSIGNED NOT NULL,
  `contenu` text,
  `id_exp` smallint(5) UNSIGNED NOT NULL,
  `id_dest` smallint(5) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_msg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id_m`, `contenu`, `id_exp`, `id_dest`, `titre`, `date_msg`) VALUES
(5, 'coucou', 4, 3, '', '2017-05-14 22:42:56'),
(7, 'la vie', 14, 13, 'aaaaa', '2017-05-14 22:42:56');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(10) UNSIGNED NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_last_co` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_profil` varchar(255) DEFAULT 'img/profil.png',
  `description` text,
  `ld` varchar(255) DEFAULT NULL,
  `nj` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`, `nom`, `prenom`, `tel`, `email`, `date_inscription`, `date_last_co`, `image_profil`, `description`, `ld`, `nj`) VALUES
(12, 'ZAEEAZ', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Admin', 'Admin', '01 15 45 78 98', 'admin@gmail.com', '2017-05-14 08:38:19', '2017-05-14 10:52:48', 'img/profil.png', 'la vie est belle', 'montesson', 'quentin e'),
(13, 'lu', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 'Leveque', 'Luc', '0695954917', 'luc.leveque78@gmail.com', '2017-05-14 10:57:36', '2017-05-14 22:51:23', 'img/profil.png', NULL, NULL, NULL),
(14, 'romeo', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 'Romeo', 'Juliette', '01 15 45 78 98', 'romeo@juliette.com', '2017-05-14 15:51:53', '2017-05-14 20:57:50', 'img/profil.png', NULL, NULL, NULL),
(15, 'romeo', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 'Tomeo', 'Tuliette', '01 15 45 78 98', 'gromeo@juliette.com', '2017-05-14 15:53:29', '2017-05-14 15:53:29', 'img/profil.png', NULL, NULL, NULL),
(16, 'aaa', 'f1abd670358e036c31296e66b3b66c382ac00812', 'Dcgz', 'Czocih', '01 15 45 78 98', 'aaa@aa.com', '2017-05-14 16:55:34', '2017-05-14 16:55:34', 'img/profil.png', NULL, NULL, NULL),
(17, 'AAa', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 'Zaa', 'Aaa', '01 15 45 78 98', 'aaa@aa.com', '2017-05-14 22:21:26', '2017-05-14 22:21:26', 'img/profil.png', NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `id_u` (`id_u`);

--
-- Index pour la table `amitier`
--
ALTER TABLE `amitier`
  ADD PRIMARY KEY (`id_amie`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_u` (`id_u`);

--
-- Index pour la table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id_d`);

--
-- Index pour la table `demande_amie`
--
ALTER TABLE `demande_amie`
  ADD PRIMARY KEY (`id_da`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `id_u` (`id_u`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_i`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_a` (`id_a`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_exp` (`id_exp`),
  ADD KEY `id_dest` (`id_dest`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id_a` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `amitier`
--
ALTER TABLE `amitier`
  MODIFY `id_amie` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_com` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `date`
--
ALTER TABLE `date`
  MODIFY `id_d` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `demande_amie`
--
ALTER TABLE `demande_amie`
  MODIFY `id_da` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id_e` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_i` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_m` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
