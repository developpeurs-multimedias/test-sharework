-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 28 Janvier 2018 à 01:28
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `sharework`
--

-- --------------------------------------------------------

--
-- Structure de la table `guides`
--

CREATE TABLE `guides` (
  `id` int(10) NOT NULL,
  `titre_guide` varchar(30) NOT NULL,
  `sous_titre_guide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module_document`
--

CREATE TABLE `module_document` (
  `id` int(10) NOT NULL,
  `fichier_module_document` varchar(100) NOT NULL,
  `titre_module_document` varchar(20) NOT NULL,
  `description_module_document` varchar(500) NOT NULL,
  `id_guide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module_texte`
--

CREATE TABLE `module_texte` (
  `id` int(10) NOT NULL,
  `titre_module_texte` varchar(20) NOT NULL,
  `paragraphe_module_texte` varchar(500) NOT NULL,
  `id_guide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;