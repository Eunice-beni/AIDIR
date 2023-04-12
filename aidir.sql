-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 avr. 2023 à 15:51
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aidir`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `choix` text NOT NULL,
  `lieu_de_examen` text NOT NULL,
  `genre` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `sexe` text NOT NULL,
  `date_de_naissance` date NOT NULL,
  `nationalite` text NOT NULL,
  `residence` text NOT NULL,
  `profession` text NOT NULL,
  `contact` int(11) NOT NULL,
  `email` text NOT NULL,
  `groupe_sanguin` text NOT NULL,
  `date_du_debut_de_la_dialyse` date NOT NULL,
  `centre_de_dialyse` text NOT NULL,
  `jour_de_dialyse` date NOT NULL,
  `personne_a_contacter` text NOT NULL,
  `profession_` text NOT NULL,
  `contact_` int(11) NOT NULL,
  `a_une_carte_de_dialyse` text NOT NULL,
  `en_veux_une` text NOT NULL,
  `region` varchar(50) NOT NULL,
  `centre` varchar(25) NOT NULL,
  `matricule` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`image`, `id`, `choix`, `lieu_de_examen`, `genre`, `nom`, `prenom`, `sexe`, `date_de_naissance`, `nationalite`, `residence`, `profession`, `contact`, `email`, `groupe_sanguin`, `date_du_debut_de_la_dialyse`, `centre_de_dialyse`, `jour_de_dialyse`, `personne_a_contacter`, `profession_`, `contact_`, `a_une_carte_de_dialyse`, `en_veux_une`, `region`, `centre`, `matricule`) VALUES
('', 31, 'oui', '01', 'Masculin', 'Adiey', 'Aboman Eunice', 'erty', '2023-03-01', 'Ivoiriens', 'Abidjan', 'Proffesseur', 2147483647, 'abomaneunice@gmail.com', 'AB+', '2023-03-10', 'bing', '2023-03-20', 'mama', 'profession_', 123455544, 'non', 'oui', '01', 'A', '0101000031A'),
('', 32, 'oui', '01', 'Masculin', 'adae', 'paul', 'feminin', '2008-10-16', 'ivoiriens', 'yop', 'notable', 2147483647, 'niceadey@gmail.com', 'AB+', '2023-03-01', 'A', '2023-03-04', 'persone', 'profession_', 707665544, 'oui', 'oui', '01', 'A', '0101000032A'),
('', 33, 'oui', '01', 'Masculin', 'adae', 'yao', 'masculin', '2023-03-02', 'ivoiriens', 'yop', 'notable', 2147483647, 'orange@gmail.com', 'A+', '2023-03-17', 'A', '2023-03-19', 'persone', 'profession_', 707665544, 'oui', 'oui', '01', 'A', '0101000033A'),
('', 34, 'oui', '01', 'Masculin', 'adae', 'yao', 'masculin', '2023-03-02', 'ivoiriens', 'yop', 'notable', 2147483647, 'orange@gmail.com', 'A+', '2023-03-17', 'A', '2023-03-19', 'persone', 'profession_', 707665544, 'oui', 'oui', '01', 'A', '0101000034A'),
('', 35, 'oui', '00', 'Masculin', 'adou', 'andré', 'Masculin', '1999-01-18', 'Ivoiriens', 'Abidjan', 'maçon', 2147483647, 'adou@gmail.com', 'AB+', '2010-12-10', 'A', '2012-12-12', 'Mr Yao', 'Docteur', 123455544, 'non', 'oui', '04', 'H', '0400000035H');

-- --------------------------------------------------------

--
-- Structure de la table `recup_mdp`
--

CREATE TABLE `recup_mdp` (
  `id` int(11) NOT NULL,
  `code` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `recup_mdp`
--

INSERT INTO `recup_mdp` (`id`, `code`, `email`) VALUES
(1, 'e80e50d9ec4b76c94286874f1f4c4c6d', 'euniceadiey1@gmail.com'),
(2, '651f3608a377cbf57a1d652072222e82', 'euniceadiey1@gmail.com'),
(3, '5f8f00afa89472a7d1d95814a8dc1e7f', 'euniceadiey1@gmail.com'),
(4, '027f148fab91b5f7ae48c2c39f8052c3', 'euniceadiey1@gmail.com'),
(5, 'a39dbd2a0e5422423399f9d3ac6eb89c', 'euniceadiey1@gmail.com'),
(6, 'f04588851bbbd34f13f04618da5da9d6', 'euniceadiey1@gmail.com'),
(7, '7303bb9ca58aa506008fa93491a34b79', 'euniceadiey1@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Eunice', 'euniceadiey1@gmail.com', 'e959389d83cf29b80a569bf41c65bfe2c0ccbdd8865835b81ab3786710c450dc');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recup_mdp`
--
ALTER TABLE `recup_mdp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `recup_mdp`
--
ALTER TABLE `recup_mdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
