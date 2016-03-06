-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 28 Février 2016 à 11:05
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `GolfApp`
--

-- --------------------------------------------------------

--
-- Structure de la table `golf_users`
--

CREATE TABLE `golf_users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `Match_play` int(11) NOT NULL,
  `Match_play_hcp` int(11) NOT NULL,
  `Stroke_play` int(11) NOT NULL,
  `Stroke_play_hcp` int(11) NOT NULL,
  `Stable_ford` int(11) NOT NULL,
  `Stable_ford_hcp` int(11) NOT NULL,
  `HCP` int(11) NOT NULL,
  `type_parcours` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `golf_users`
--

INSERT INTO `golf_users` (`id`, `pseudo`, `password`, `Match_play`, `Match_play_hcp`, `Stroke_play`, `Stroke_play_hcp`, `Stable_ford`, `Stable_ford_hcp`, `HCP`, `type_parcours`) VALUES
(1, 'justine', 'justine', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'baptiste', 'baptiste', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'julie', 'justine', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'bobi', '', 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `golf_users`
--
ALTER TABLE `golf_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `golf_users`
--
ALTER TABLE `golf_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;