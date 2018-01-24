-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Jan-2018 às 14:25
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
-- Estrutura da tabela `cad_cadastro`
--

DROP TABLE IF EXISTS `cad_cadastro`;
CREATE TABLE IF NOT EXISTS `cad_cadastro` (
  `cad_id` int(11) NOT NULL AUTO_INCREMENT,
  `cad_idProprio` int(11) NOT NULL,
  `cad_idPoste` int(11) NOT NULL,
  `cad_Data_Cadastro` date NOT NULL,
  `cad_CPF_Usuario` int(11) NOT NULL,
  `cad_Nome_Usuario` varchar(70) NOT NULL,
  `cad_dg_p2_utmx` double NOT NULL,
  `cad_dg_p2_utmy` double NOT NULL,
  `cad_dg_p3_utmx` double NOT NULL,
  `cad_dg_p4_utmx` double NOT NULL,
  `cad_dg_p4_utmy` double NOT NULL,
  `cad_dg_p5_utmx` double NOT NULL,
  `cad_dg_p5_utmy` double NOT NULL,
  `cad_dg_p6_utmx` double NOT NULL,
  `cad_dg_p6_utmy` double NOT NULL,
  `cad_dt_potencia_lampada` int(11) NOT NULL,
  `cad_dt_tipo_lampada` varchar(25) NOT NULL,
  `cad_dt_tipo_luminaria` varchar(25) NOT NULL,
  `cad_dt_tipo_braco` varchar(25) NOT NULL,
  `cad_dt_altura_poste` decimal(10,0) NOT NULL,
  `cad_dt_material_poste` varchar(25) NOT NULL,
  `cad_dt_uso_poste` varchar(45) NOT NULL,
  `cad_dt_tipo_rele` varchar(45) NOT NULL,
  `cad_dt_tipo_reator` varchar(45) NOT NULL,
  `cad_dt_forma_distribuicao_energia` varchar(45) NOT NULL,
  `cad_df_aparencia_ponto_luminoso` varchar(45) NOT NULL,
  `cad_df_estado_lampada` varchar(45) NOT NULL,
  `cad_df_arvore_ofuscando_iluminacao` tinyint(4) NOT NULL,
  `cad_df_posicionamento_poste` varchar(45) NOT NULL,
  `cad_df_proximidade_luminaria_rede_energia` varchar(45) NOT NULL,
  `cad_df_local_dificil_acesso` tinyint(4) NOT NULL,
  `cad_md_distancia_postes_p1_p3` decimal(10,0) DEFAULT NULL,
  `cad_md_distancia_postes_p3_p5` decimal(10,0) NOT NULL,
  `cad_md_distancia_postes_p2_p4` decimal(10,0) NOT NULL,
  `cad_md_distancia_postes_p4_p6` decimal(10,0) NOT NULL,
  `cad_md_distancia_postes_p1_p2` decimal(10,0) NOT NULL,
  `cad_md_distancia_postes_p5_p6` decimal(10,0) NOT NULL,
  `cad_md_altura_luminaria_a2` decimal(10,0) NOT NULL,
  `cad_md_altura_luminaria_a3` decimal(10,0) NOT NULL,
  `cad_md_altura_luminaria_a4` decimal(10,0) NOT NULL,
  `cad_md_altura_luminaria_a5` decimal(10,0) NOT NULL,
  `cad_md_altura_luminaria_a6` decimal(10,0) NOT NULL,
  `cad_md_largura_via_publica_l1_l2` decimal(10,0) NOT NULL,
  `cad_md_largura_via_publica_l5_l6` decimal(10,0) NOT NULL,
  PRIMARY KEY (`cad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pp_posteprincipal`
--

DROP TABLE IF EXISTS `pp_posteprincipal`;
CREATE TABLE IF NOT EXISTS `pp_posteprincipal` (
  `pp_id_proprio` int(11) NOT NULL AUTO_INCREMENT,
  `pp_id` double NOT NULL,
  `pp_Estado` varchar(10) NOT NULL,
  `pp_Cidade` varchar(100) NOT NULL,
  `pp_Endereco` varchar(100) NOT NULL,
  `pp_Regiao_Administrativa` varchar(45) NOT NULL,
  `pp_UMTX` double NOT NULL,
  `pp_UTMY` double NOT NULL,
  `pp_LATDD` double NOT NULL,
  `pp_LNGDD` double NOT NULL,
  `pp_Classe_Via` varchar(2) NOT NULL,
  `pp_md_altura_luminaria_a1` decimal(10,0) NOT NULL,
  `pp_rua_proxima_x_dd` double NOT NULL,
  `pp_rua_proxima_y_dd` double NOT NULL,
  PRIMARY KEY (`pp_id_proprio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`usu_CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usu_usuario`
--

INSERT INTO `usu_usuario` (`usu_CPF`, `usu_Nome`, `usu_Email`, `usu_Senha`) VALUES
(1234, 'teste', 'teste', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
