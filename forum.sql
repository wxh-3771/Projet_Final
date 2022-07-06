-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 juil. 2022 à 15:19
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`email`, `pseudo`, `password`) VALUES
('admin.forum.myspace.1@gmail.com', 'Administrateur', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `email_auteur` varchar(255) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `email_auteur`, `pseudo_auteur`, `id_question`, `contenu`, `date_publication`) VALUES
(47, 'adc@gmail.com', 'zz1111111f', 43, 'ouiiiiiiiiiiiiiiiiiiiii', '05/07/2022'),
(48, 'adc@gmail.com', 'zz1111111f', 43, 'fghj,n;k,,,,,,,,nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '05/07/2022');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `code` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`code`, `nom`) VALUES
(51, 'Système d\'Exploitation 2'),
(52, 'Compilation'),
(53, 'Génie Logiciel'),
(54, 'Interface Homme Machine'),
(55, 'Programmation Linéaire'),
(56, 'Probabilités et Statistiques '),
(57, 'Économie '),
(61, 'Application Mobile'),
(62, 'Sécurité Informatique'),
(63, 'Intelligence Artificielle '),
(64, 'Données Semi Structurées'),
(65, 'Projet de Fin D\'étude '),
(66, 'Rédaction Scientifique'),
(67, 'Start-Up '),
(99, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `categorie` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `email_auteur` varchar(255) NOT NULL,
  `pseudo_auteur` text NOT NULL,
  `date_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `categorie`, `contenu`, `email_auteur`, `pseudo_auteur`, `date_publication`) VALUES
(43, 'je suis laa ', 99, 'c&#039;est riennnnnnnnnnnn', 'adc@gmail.com', 'zz1111111f', '05/07/2022');

-- --------------------------------------------------------

--
-- Structure de la table `signales`
--

CREATE TABLE `signales` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `rep_id` int(255) NOT NULL,
  `user_signaled` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `signales`
--

INSERT INTO `signales` (`id`, `user_email`, `rep_id`, `user_signaled`) VALUES
(38, 'adc@gmail.com', 47, 'adc@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `valeur_par_defaut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`email`, `pseudo`, `nom`, `prenom`, `mdp`, `valeur_par_defaut`) VALUES
('adc@gmail.com', 'zz1111111f', 'Ra', 'xx', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 0),
('benane.flora.1501@gmail.com', 'what', 'Ra', 'Flo', '$2y$10$CEV/qf/iZZe4NU2zS6/49O164Y362otiuOhSN0hUX44UpLxagezZG', 0),
('dfsl@gmail.com', 'ww', 'xx', 'min', '7c2ecd07f155648431e0f94b89247d713c5786e1e73e953f2fe7eca39534cd6d', 1),
('fd@gmail.com', 'zz1111111', 'xx', 'flo', '576d1184c541e9f92af74363eeeedd61f3aecd1b265347025e8368e5a153dcd3', 0),
('fdx@gmail.com', 'wxh-3771', 'Ra', 'Flo', '7c2ecd07f155648431e0f94b89247d713c5786e1e73e953f2fe7eca39534cd6d', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`code`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signales`
--
ALTER TABLE `signales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_signaled` (`user_signaled`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `signales`
--
ALTER TABLE `signales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `signales`
--
ALTER TABLE `signales`
  ADD CONSTRAINT `user_signaled` FOREIGN KEY (`user_signaled`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
