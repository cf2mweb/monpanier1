-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 23 Mai 2014 à 11:56
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `pourpan`
--
CREATE DATABASE IF NOT EXISTS `pourpan` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE pourpan;

-- --------------------------------------------------------

--
-- Structure de la table `arme`
--

CREATE TABLE IF NOT EXISTS "arme" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "nom" varchar(200) DEFAULT NULL,
  "desc" text,
  "prix" decimal(8,2) unsigned DEFAULT NULL,
  "tva" decimal(8,2) unsigned DEFAULT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=5 ;

--
-- Vider la table avant d'insérer `arme`
--

TRUNCATE TABLE `arme`;
--
-- Contenu de la table `arme`
--

INSERT DELAYED IGNORE INTO `arme` (`id`, `nom`, `desc`, `prix`, `tva`) VALUES
(1, 'Baïonnette AK47', 'Longueur 32,5cm. Avec gaine. Très bon état.', '16.50', '21.00'),
(2, 'SIG Sauer Carabine semi-auto SIG 716 Patrol', 'Fonctionnement semi-auto par prise d''emprunt des gaz, rail de montage de lunette M1913, canon flottant, garde-main 4 fois Picatinny, crosse téléscopique et chargeur Magpul P-Mag.\r\nEvent des gaz à 4 positions\r\nAccessoires Magpul\r\nVisée Flip-Up\r\n\r\nDonnées techniques\r\nCapacité du chargeur: 10\r\nLongueur du canon: 420\r\nLongueur totale: 871 - 950 mm\r\nPoids: 4370 grammes\r\nCrosse: téléscopique\r\nGarde main Picatinny\r\nAmmortisseur QD', '2699.00', '21.00'),
(3, 'Walkstool Trépied Walkstool Comfort 55', 'Nouvelle version améliorée du siège de fabrication suédoise. Plus confortable en raison de la position plus haute du siège et de sa surface d’assise bien plus large. Vous pouvez donc rester assis plus longtemps. Pieds en caoutchouc plus larges pour éviter que le siège ne s’enfonce dans un sol trop meuble. Supportant une charge allant jusqu’à 200kg. Livré avec sac de transport. Hauteur d’assise 55cm, largeur d’assise 37,5cm. Poids : 800g.', '84.95', '19.50'),
(4, 'Parforce Épieu eucalyptus', 'Accompagnateur traditionnel du chasseur en un seul outil. Utilisable en dague de vénerie en dévissant la lame du manche, manche en eucalyptus robuste utilisable aussi bien pour le sanglier que pour les cerfs.\r\nLame de 38cm et 5 mm d''épaisseur en acier inoxydable AUS-440C\r\nGarde de 15cm\r\nLongueur du manche: 1,5m', '199.00', '19.50');

-- --------------------------------------------------------

--
-- Structure de la table `arme_has_section`
--

CREATE TABLE IF NOT EXISTS "arme_has_section" (
  "arme_id" int(10) unsigned NOT NULL,
  "section_id" smallint(5) unsigned NOT NULL,
  PRIMARY KEY ("arme_id","section_id"),
  KEY "fk_arme_has_section_section1_idx" ("section_id"),
  KEY "fk_arme_has_section_arme_idx" ("arme_id")
);

--
-- Vider la table avant d'insérer `arme_has_section`
--

TRUNCATE TABLE `arme_has_section`;
--
-- Contenu de la table `arme_has_section`
--

INSERT DELAYED IGNORE INTO `arme_has_section` (`arme_id`, `section_id`) VALUES
(1, 1),
(4, 1),
(2, 2),
(3, 3),
(4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE IF NOT EXISTS "section" (
  "id" smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  "intitule" varchar(80) DEFAULT NULL,
  "slug" varchar(120) NOT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "slug" ("slug")
) AUTO_INCREMENT=4 ;

--
-- Vider la table avant d'insérer `section`
--

TRUNCATE TABLE `section`;
--
-- Contenu de la table `section`
--

INSERT DELAYED IGNORE INTO `section` (`id`, `intitule`, `slug`) VALUES
(1, 'Armes blanches', 'armes-blanches'),
(2, 'Armes à feu', 'armes-a-feu'),
(3, 'Autres', 'autres');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `arme_has_section`
--
ALTER TABLE `arme_has_section`
  ADD CONSTRAINT "fk_arme_has_section_arme" FOREIGN KEY ("arme_id") REFERENCES "arme" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT "fk_arme_has_section_section1" FOREIGN KEY ("section_id") REFERENCES "section" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
