-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Jan-2018 às 22:21
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_ceb`
--

DROP TABLE IF EXISTS `cad_ceb`;
CREATE TABLE IF NOT EXISTS `cad_ceb` (
  `cad_id` int(11) NOT NULL AUTO_INCREMENT,
  `cad_idPoste` int(11) NOT NULL,
  `cad_Data_Cadastro` date DEFAULT NULL,
  `cad_CPF_Usuario` int(11) DEFAULT NULL,
  `cad_Nome_Usuario` varchar(70) DEFAULT NULL,
  `cad_dg_cg_p2_utmx` double DEFAULT NULL,
  `cad_dg_cg_p2_utmy` double DEFAULT NULL,
  `cad_dg_cg_p3_utmx` double DEFAULT NULL,
  `cad_dg_cg_p3_utmy` double DEFAULT NULL,
  `cad_dg_cg_p4_utmx` double DEFAULT NULL,
  `cad_dg_cg_p4_utmy` double DEFAULT NULL,
  `cad_dg_cg_p5_utmx` double DEFAULT NULL,
  `cad_dg_cg_p5_utmy` double DEFAULT NULL,
  `cad_dg_cg_p6_utmx` double DEFAULT NULL,
  `cad_dg_cg_p6_utmy` double DEFAULT NULL,
  `cad_dt_potencia_lampada` int(11) DEFAULT NULL,
  `cad_dt_tipo_lampada` varchar(25) DEFAULT NULL,
  `cad_dt_tipo_luminaria` varchar(25) DEFAULT NULL,
  `cad_dt_tipo_braco` varchar(25) DEFAULT NULL,
  `cad_dt_altura_poste` double DEFAULT NULL,
  `cad_dt_material_poste` varchar(50) DEFAULT NULL,
  `cad_dt_uso_poste` varchar(45) DEFAULT NULL,
  `cad_dt_tipo_rele` varchar(45) DEFAULT NULL,
  `cad_dt_tipo_reator` varchar(45) DEFAULT NULL,
  `cad_dt_forma_distribuicao_energia` varchar(45) DEFAULT NULL,
  `cad_df_aparencia_ponto_luminoso` varchar(45) DEFAULT NULL,
  `cad_df_estado_lampada` varchar(45) DEFAULT NULL,
  `cad_df_arvore_ofuscando_iluminacao` varchar(3) DEFAULT NULL,
  `cad_df_posicionamento_poste` varchar(45) DEFAULT NULL,
  `cad_df_proximidade_luminaria_rede_energia` varchar(45) DEFAULT NULL,
  `cad_df_local_dificil_acesso` varchar(3) DEFAULT NULL,
  `cad_md_configuracao` varchar(3) DEFAULT NULL,
  `cad_md_largura_via_l1` double DEFAULT NULL,
  `cad_md_largura_via_l2` double DEFAULT NULL,
  `cad_md_largura_calcada_l1` double DEFAULT NULL,
  `cad_md_largura_calcada_l2` double DEFAULT NULL,
  `cad_md_altura_montagem` double DEFAULT NULL,
  `cad_md_projecao_horizontal_braco` double DEFAULT NULL,
  `cad_md_espacamento_entre_postes` double DEFAULT NULL,
  `cad_md_c1_l1` double DEFAULT NULL,
  `cad_md_c2_l1` double DEFAULT NULL,
  `cad_md_c3_l1` double DEFAULT NULL,
  `cad_md_c4_l1` double DEFAULT NULL,
  `cad_md_c5_l1` double DEFAULT NULL,
  `cad_md_c1_l2` double DEFAULT NULL,
  `cad_md_c2_l2` double DEFAULT NULL,
  `cad_md_c3_l2` double DEFAULT NULL,
  `cad_md_c4_l2` double DEFAULT NULL,
  `cad_md_c5_l2` double DEFAULT NULL,
  `cad_md_c1_l3` double DEFAULT NULL,
  `cad_md_c2_l3` double DEFAULT NULL,
  `cad_md_c3_l3` double DEFAULT NULL,
  `cad_md_c4_l3` double DEFAULT NULL,
  `cad_md_c5_l3` double DEFAULT NULL,
  `cad_md_c1_l4` double DEFAULT NULL,
  `cad_md_c2_l4` double DEFAULT NULL,
  `cad_md_c3_l4` double DEFAULT NULL,
  `cad_md_c4_l4` double DEFAULT NULL,
  `cad_md_c5_l4` double DEFAULT NULL,
  `cad_md_c1_l5` double DEFAULT NULL,
  `cad_md_c2_l5` double DEFAULT NULL,
  `cad_md_c3_l5` double DEFAULT NULL,
  `cad_md_c4_l5` double DEFAULT NULL,
  `cad_md_c5_l5` double DEFAULT NULL,
  `cad_md_c1_l6` double DEFAULT NULL,
  `cad_md_c2_l6` double DEFAULT NULL,
  `cad_md_c3_l6` double DEFAULT NULL,
  `cad_md_c4_l6` double DEFAULT NULL,
  `cad_md_c5_l6` double DEFAULT NULL,
  PRIMARY KEY (`cad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_ceb`
--

INSERT INTO `cad_ceb` (`cad_id`, `cad_idPoste`, `cad_Data_Cadastro`, `cad_CPF_Usuario`, `cad_Nome_Usuario`, `cad_dg_cg_p2_utmx`, `cad_dg_cg_p2_utmy`, `cad_dg_cg_p3_utmx`, `cad_dg_cg_p3_utmy`, `cad_dg_cg_p4_utmx`, `cad_dg_cg_p4_utmy`, `cad_dg_cg_p5_utmx`, `cad_dg_cg_p5_utmy`, `cad_dg_cg_p6_utmx`, `cad_dg_cg_p6_utmy`, `cad_dt_potencia_lampada`, `cad_dt_tipo_lampada`, `cad_dt_tipo_luminaria`, `cad_dt_tipo_braco`, `cad_dt_altura_poste`, `cad_dt_material_poste`, `cad_dt_uso_poste`, `cad_dt_tipo_rele`, `cad_dt_tipo_reator`, `cad_dt_forma_distribuicao_energia`, `cad_df_aparencia_ponto_luminoso`, `cad_df_estado_lampada`, `cad_df_arvore_ofuscando_iluminacao`, `cad_df_posicionamento_poste`, `cad_df_proximidade_luminaria_rede_energia`, `cad_df_local_dificil_acesso`, `cad_md_configuracao`, `cad_md_largura_via_l1`, `cad_md_largura_via_l2`, `cad_md_largura_calcada_l1`, `cad_md_largura_calcada_l2`, `cad_md_altura_montagem`, `cad_md_projecao_horizontal_braco`, `cad_md_espacamento_entre_postes`, `cad_md_c1_l1`, `cad_md_c2_l1`, `cad_md_c3_l1`, `cad_md_c4_l1`, `cad_md_c5_l1`, `cad_md_c1_l2`, `cad_md_c2_l2`, `cad_md_c3_l2`, `cad_md_c4_l2`, `cad_md_c5_l2`, `cad_md_c1_l3`, `cad_md_c2_l3`, `cad_md_c3_l3`, `cad_md_c4_l3`, `cad_md_c5_l3`, `cad_md_c1_l4`, `cad_md_c2_l4`, `cad_md_c3_l4`, `cad_md_c4_l4`, `cad_md_c5_l4`, `cad_md_c1_l5`, `cad_md_c2_l5`, `cad_md_c3_l5`, `cad_md_c4_l5`, `cad_md_c5_l5`, `cad_md_c1_l6`, `cad_md_c2_l6`, `cad_md_c3_l6`, `cad_md_c4_l6`, `cad_md_c5_l6`) VALUES
(1, 5957359, '2018-01-24', 1234, 'nome', 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 20, 'compacta', NULL, '', 0, 'abrigo projetor alvenaria', 'exclusivo p/ iluminacao publica', 'fotoeletrico', 'externo', 'aerea', 'bem instalado', 'acesa', 'sim', 'normal', 'normal', 'sim', 'pu', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49),
(2, 5957359, '2018-01-14', 1234, 'nome', 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 20, 'compacta', 'aberta', 'cruzeta n1.1', 0, 'abrigo projetor alvenaria', 'exclusivo p/ iluminacao publica', 'fotoeletrico', 'externo', 'aerea', 'bem instalado', 'acesa', 'sim', 'normal', 'normal', 'sim', 'pu', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49),
(3, 5957359, '2018-01-27', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 250, 'compacta', 'aberta', 'cruzeta n1.1', 0, 'abrigo projetor alvenaria', 'exclusivo p/ iluminacao publica', 'fotoeletrico', 'externo', 'aerea', 'bem instalado', 'acesa', 'sim', 'normal', 'normal', 'sim', 'pu', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49),
(4, 5957359, '2018-01-28', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 500, 'Compacta', 'Aberta', 'Cruzeta n1.1', 0, 'abrigo projetor alvenaria', 'Exclusivo p/ iluminaÃ§Ã£o pÃºblica', 'fotoeletrico', 'Externo', 'AÃ©rea', 'Bem instalado', 'acesa', 'Sim', 'Normal', 'Normal', 'Sim', 'PCC', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_convencional`
--

DROP TABLE IF EXISTS `cad_convencional`;
CREATE TABLE IF NOT EXISTS `cad_convencional` (
  `cad_id` int(11) NOT NULL AUTO_INCREMENT,
  `cad_idPoste` int(11) NOT NULL,
  `cad_Data_Cadastro` date DEFAULT NULL,
  `cad_CPF_Usuario` int(11) DEFAULT NULL,
  `cad_Nome_Usuario` varchar(70) DEFAULT NULL,
  `cad_dg_cg_p2_utmx` double DEFAULT NULL,
  `cad_dg_cg_p2_utmy` double DEFAULT NULL,
  `cad_dg_cg_p3_utmx` double DEFAULT NULL,
  `cad_dg_cg_p3_utmy` double DEFAULT NULL,
  `cad_dg_cg_p4_utmx` double DEFAULT NULL,
  `cad_dg_cg_p4_utmy` double DEFAULT NULL,
  `cad_dg_cg_p5_utmx` double DEFAULT NULL,
  `cad_dg_cg_p5_utmy` double DEFAULT NULL,
  `cad_dg_cg_p6_utmx` double DEFAULT NULL,
  `cad_dg_cg_p6_utmy` double DEFAULT NULL,
  `cad_dt_potencia_lampada` int(11) DEFAULT NULL,
  `cad_dt_tipo_lampada` varchar(50) DEFAULT NULL,
  `cad_dt_tipo_luminaria` varchar(25) DEFAULT NULL,
  `cad_dt_material_poste` varchar(50) DEFAULT NULL,
  `cad_dt_uso_poste` varchar(45) DEFAULT NULL,
  `cad_dt_altura_poste` double DEFAULT NULL,
  `cad_dt_tipo_braco` varchar(30) DEFAULT NULL,
  `cad_dt_tamanho_braco` varchar(10) DEFAULT NULL,
  `cad_dt_tipo_comando` varchar(25) DEFAULT NULL,
  `cad_dt_tipo_reator` varchar(45) DEFAULT NULL,
  `cad_dt_rede_alimentacao` varchar(45) DEFAULT NULL,
  `cad_dt_numero_petalas` int(11) DEFAULT NULL,
  `cad_dt_nome_luminaria` varchar(50) DEFAULT NULL,
  `cad_dt_fabricante_luminaria` varchar(50) DEFAULT NULL,
  `cad_df_aparencia_ponto_luminoso` varchar(45) DEFAULT NULL,
  `cad_df_observacao_ponto_luminoso` varchar(100) DEFAULT NULL,
  `cad_df_estado_lampada` varchar(45) DEFAULT NULL,
  `cad_df_arvore_ofuscando_iluminacao` varchar(3) DEFAULT NULL,
  `cad_df_posicionamento_poste` varchar(45) DEFAULT NULL,
  `cad_df_proximidade_luminaria_rede_energia` varchar(45) DEFAULT NULL,
  `cad_df_local_dificil_acesso` varchar(3) DEFAULT NULL,
  `cad_md_configuracao` varchar(3) DEFAULT NULL,
  `cad_md_largura_via_l1` double DEFAULT NULL,
  `cad_md_largura_via_l2` double DEFAULT NULL,
  `cad_md_largura_calcada_l1` double DEFAULT NULL,
  `cad_md_largura_calcada_l2` double DEFAULT NULL,
  `cad_md_altura_montagem` double DEFAULT NULL,
  `cad_md_projecao_horizontal_braco` double DEFAULT NULL,
  `cad_md_espacamento_entre_postes` double DEFAULT NULL,
  `cad_md_c1_l1` double DEFAULT NULL,
  `cad_md_c2_l1` double DEFAULT NULL,
  `cad_md_c3_l1` double DEFAULT NULL,
  `cad_md_c4_l1` double DEFAULT NULL,
  `cad_md_c5_l1` double DEFAULT NULL,
  `cad_md_c1_l2` double DEFAULT NULL,
  `cad_md_c2_l2` double DEFAULT NULL,
  `cad_md_c3_l2` double DEFAULT NULL,
  `cad_md_c4_l2` double DEFAULT NULL,
  `cad_md_c5_l2` double DEFAULT NULL,
  `cad_md_c1_l3` double DEFAULT NULL,
  `cad_md_c2_l3` double DEFAULT NULL,
  `cad_md_c3_l3` double DEFAULT NULL,
  `cad_md_c4_l3` double DEFAULT NULL,
  `cad_md_c5_l3` double DEFAULT NULL,
  `cad_md_c1_l4` double DEFAULT NULL,
  `cad_md_c2_l4` double DEFAULT NULL,
  `cad_md_c3_l4` double DEFAULT NULL,
  `cad_md_c4_l4` double DEFAULT NULL,
  `cad_md_c5_l4` double DEFAULT NULL,
  `cad_md_c1_l5` double DEFAULT NULL,
  `cad_md_c2_l5` double DEFAULT NULL,
  `cad_md_c3_l5` double DEFAULT NULL,
  `cad_md_c4_l5` double DEFAULT NULL,
  `cad_md_c5_l5` double DEFAULT NULL,
  `cad_md_c1_l6` double DEFAULT NULL,
  `cad_md_c2_l6` double DEFAULT NULL,
  `cad_md_c3_l6` double DEFAULT NULL,
  `cad_md_c4_l6` double DEFAULT NULL,
  `cad_md_c5_l6` double DEFAULT NULL,
  PRIMARY KEY (`cad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_convencional`
--

INSERT INTO `cad_convencional` (`cad_id`, `cad_idPoste`, `cad_Data_Cadastro`, `cad_CPF_Usuario`, `cad_Nome_Usuario`, `cad_dg_cg_p2_utmx`, `cad_dg_cg_p2_utmy`, `cad_dg_cg_p3_utmx`, `cad_dg_cg_p3_utmy`, `cad_dg_cg_p4_utmx`, `cad_dg_cg_p4_utmy`, `cad_dg_cg_p5_utmx`, `cad_dg_cg_p5_utmy`, `cad_dg_cg_p6_utmx`, `cad_dg_cg_p6_utmy`, `cad_dt_potencia_lampada`, `cad_dt_tipo_lampada`, `cad_dt_tipo_luminaria`, `cad_dt_material_poste`, `cad_dt_uso_poste`, `cad_dt_altura_poste`, `cad_dt_tipo_braco`, `cad_dt_tamanho_braco`, `cad_dt_tipo_comando`, `cad_dt_tipo_reator`, `cad_dt_rede_alimentacao`, `cad_dt_numero_petalas`, `cad_dt_nome_luminaria`, `cad_dt_fabricante_luminaria`, `cad_df_aparencia_ponto_luminoso`, `cad_df_observacao_ponto_luminoso`, `cad_df_estado_lampada`, `cad_df_arvore_ofuscando_iluminacao`, `cad_df_posicionamento_poste`, `cad_df_proximidade_luminaria_rede_energia`, `cad_df_local_dificil_acesso`, `cad_md_configuracao`, `cad_md_largura_via_l1`, `cad_md_largura_via_l2`, `cad_md_largura_calcada_l1`, `cad_md_largura_calcada_l2`, `cad_md_altura_montagem`, `cad_md_projecao_horizontal_braco`, `cad_md_espacamento_entre_postes`, `cad_md_c1_l1`, `cad_md_c2_l1`, `cad_md_c3_l1`, `cad_md_c4_l1`, `cad_md_c5_l1`, `cad_md_c1_l2`, `cad_md_c2_l2`, `cad_md_c3_l2`, `cad_md_c4_l2`, `cad_md_c5_l2`, `cad_md_c1_l3`, `cad_md_c2_l3`, `cad_md_c3_l3`, `cad_md_c4_l3`, `cad_md_c5_l3`, `cad_md_c1_l4`, `cad_md_c2_l4`, `cad_md_c3_l4`, `cad_md_c4_l4`, `cad_md_c5_l4`, `cad_md_c1_l5`, `cad_md_c2_l5`, `cad_md_c3_l5`, `cad_md_c4_l5`, `cad_md_c5_l5`, `cad_md_c1_l6`, `cad_md_c2_l6`, `cad_md_c3_l6`, `cad_md_c4_l6`, `cad_md_c5_l6`) VALUES
(1, 5957359, '2018-01-27', 1234, 'nome', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pu', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49),
(2, 5957359, '2018-01-26', 1234, 'nome', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nao conforme', '53', 'acesa', 'sim', 'normal', 'normal', 'sim', 'pu', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49),
(3, 5957359, '2018-01-19', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 20, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 2, '51', '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 5957359, '2018-01-24', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 20, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 1, '51', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5957359, '2018-01-20', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 26, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 2, '51', '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 5957359, '2018-01-19', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 20, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 3, '51', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 5957359, '2018-01-11', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 20, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 2, '', '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 5957359, '2018-01-13', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 20, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 2, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 5957359, '2018-01-06', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 10, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 1, '51', '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 5957359, '2018-01-20', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 20, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 1, '51', '52', 'conforme', '53', 'acesa', 'sim', 'normal', 'normal', 'sim', 'pu', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49),
(11, 5957359, '2018-01-28', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 20, 'compacta', 'aberta', 'aco com base teleconico curvado', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 0, '51', '52', 'luminaria suja', '53', 'acesa', 'sim', 'normal', 'normal', 'sim', 'pu', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49),
(12, 5957359, '2018-01-26', 1234, 'nome', 2, 4, 5, 7, 6, 8, 9, 11, 10, 12, 5, 'teste1', 'teste2', 'teste3', 'exclusivo p/ iluminacao publica', 0, 'normal', NULL, 'individual', 'externo', 'aerea convencional', 0, '51', '52', 'luminaria suja', '53', 'acesa de dia', 'nao', 'fletido', 'distante', 'nao', 'pba', 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 47, 47, 48, 49);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pp_posteprincipal`
--

DROP TABLE IF EXISTS `pp_posteprincipal`;
CREATE TABLE IF NOT EXISTS `pp_posteprincipal` (
  `pp_id_proprio` int(11) NOT NULL AUTO_INCREMENT,
  `pp_id` double DEFAULT NULL,
  `pp_Estado` varchar(10) DEFAULT NULL,
  `pp_Cidade` varchar(100) DEFAULT NULL,
  `pp_Endereco` varchar(255) DEFAULT NULL,
  `pp_Regiao_Administrativa` varchar(45) DEFAULT NULL,
  `pp_UTMX` double DEFAULT NULL,
  `pp_UTMY` double DEFAULT NULL,
  `pp_LAT_DD` double DEFAULT NULL,
  `pp_LAT_END_DD` double DEFAULT NULL,
  `pp_LNG_DD` double DEFAULT NULL,
  `pp_LNG_END_DD` double DEFAULT NULL,
  `pp_Classe_Via` varchar(2) DEFAULT NULL,
  `pp_rua_proxima_x_dd` double DEFAULT NULL,
  `pp_rua_proxima_y_dd` double DEFAULT NULL,
  PRIMARY KEY (`pp_id_proprio`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pp_posteprincipal`
--

INSERT INTO `pp_posteprincipal` (`pp_id_proprio`, `pp_id`, `pp_Estado`, `pp_Cidade`, `pp_Endereco`, `pp_Regiao_Administrativa`, `pp_UTMX`, `pp_UTMY`, `pp_LAT_DD`, `pp_LAT_END_DD`, `pp_LNG_DD`, `pp_LNG_END_DD`, `pp_Classe_Via`, `pp_rua_proxima_x_dd`, `pp_rua_proxima_y_dd`) VALUES
(1, 5957359, 'DF', 'BSB', NULL, 'Recanto das Emas', 1536605, 8234662, -15.7525126, NULL, -35.3617898, NULL, 'V1', NULL, NULL),
(2, 8184830, 'DF', 'BSB', NULL, 'Gama', 1707292, 8228469, -15.7318206, NULL, -33.7921298, NULL, NULL, NULL, NULL),
(3, 5847886, 'DF', 'BSB', NULL, 'Recanto das Emas', 1707955, 8239297, -15.6354916, NULL, -33.7913708, NULL, NULL, NULL, NULL),
(4, 5891328, 'DF', 'BSB', NULL, 'Recanto das Emas', 1721914, 8237966, -15.6406406, NULL, -33.6630068, NULL, NULL, NULL, NULL),
(5, 6001768, 'DF', 'BSB', NULL, 'Santa Maria', 1750478, 8224114, -15.7494626, NULL, -33.3948308, NULL, NULL, NULL, NULL),
(6, 8226726, 'DF', 'BSB', NULL, 'Guará', 1784679, 8253156, -15.4754866, NULL, -33.0973578, NULL, NULL, NULL, NULL),
(7, 8224611, 'DF', 'BSB', NULL, 'Núc. Bandeirante', 1809192, 8243940, -15.5446306, NULL, -32.8690458, NULL, NULL, NULL, NULL),
(8, 8223988, 'DF', 'BSB', NULL, 'Núc. Bandeirante', 1811176, 8242446, -15.5568226, NULL, -32.8501728, NULL, NULL, NULL, NULL),
(9, 8224493, 'DF', 'BSB', NULL, 'Núc. Bandeirante', 1812467, 8244041, -15.5420686, NULL, -32.8392448, NULL, NULL, NULL, NULL),
(10, 5803466, 'DF', 'BSB', NULL, 'Núc. Bandeirante', 1816008, 8241753, -15.5604756, NULL, -32.8057618, NULL, NULL, NULL, NULL),
(11, 8224546, 'DF', 'BSB', NULL, 'Núc. Bandeirante', 1822419, 8243767, -15.5393926, NULL, -32.7484018, NULL, NULL, NULL, NULL),
(12, 8277262, 'DF', 'BSB', NULL, 'Núc. Bandeirante', 1856994, 8240236, -15.5525596, NULL, -32.4316398, NULL, NULL, NULL, NULL),
(13, 8241769, 'DF', 'BSB', NULL, 'Lago Sul', 1881559, 8245449, -15.4935396, NULL, -32.2110478, NULL, NULL, NULL, NULL),
(14, 8220008, 'DF', 'BSB', NULL, 'Brasília', 1910709, 8253528, -15.4066596, NULL, -31.9507268, NULL, NULL, NULL, NULL),
(15, 5886801, 'DF', 'BSB', NULL, 'Lago Sul', 1922595, 8245337, -15.4722856, NULL, -31.8382278, NULL, NULL, NULL, NULL),
(16, 5878501, 'DF', 'BSB', NULL, 'Lago Norte', 1929804, 8257902, -15.3577476, NULL, -31.7799268, NULL, NULL, NULL, NULL),
(17, 8222399, 'DF', 'BSB', NULL, 'Lago Sul', 1978068, 8243919, -15.4537306, NULL, -31.3344678, NULL, NULL, NULL, NULL),
(18, 8231864, 'DF', 'BSB', NULL, 'São Sebastião', 1986774, 8243370, -15.4535816, NULL, -31.2553128, NULL, NULL, NULL, NULL),
(19, 8232064, 'DF', 'BSB', NULL, 'São Sebastião', 1999326, 8243054, -15.4491426, NULL, -31.1415168, NULL, NULL, NULL, NULL),
(20, 5753685, 'DF', 'BSB', NULL, 'São Sebastião', 2022689, 8242296, -15.4422146, NULL, -30.9297568, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu_usuario`
--

DROP TABLE IF EXISTS `usu_usuario`;
CREATE TABLE IF NOT EXISTS `usu_usuario` (
  `usu_CPF` double NOT NULL,
  `usu_Nome` varchar(70) NOT NULL,
  `usu_Email` varchar(45) NOT NULL,
  `usu_Senha` varchar(45) NOT NULL,
  `usu_Perfil` varchar(15) NOT NULL,
  PRIMARY KEY (`usu_CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usu_usuario`
--

INSERT INTO `usu_usuario` (`usu_CPF`, `usu_Nome`, `usu_Email`, `usu_Senha`, `usu_Perfil`) VALUES
(1234, 'nome', 'email', '1234', 'adm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
