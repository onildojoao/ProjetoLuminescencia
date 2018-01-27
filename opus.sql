-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Jan-2018 às 18:07
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
  `cad_dt_material_poste` varchar(25) DEFAULT NULL,
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
  `cad_md_configuracao` varchar(2) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
  `cad_dt_tipo_lampada` varchar(25) DEFAULT NULL,
  `cad_dt_tipo_luminaria` varchar(25) DEFAULT NULL,
  `cad_dt_material_poste` varchar(25) DEFAULT NULL,
  `cad_dt_uso_poste` varchar(45) DEFAULT NULL,
  `cad_dt_altura_poste` double DEFAULT NULL,
  `cad_dt_tipo_braco` varchar(30) DEFAULT NULL,
  `cad_dt_tamanho_braco` varchar(10) DEFAULT NULL,
  `cad_dt_tipo_comando` varchar(25) DEFAULT NULL,
  `cad_dt_tipo_reator` varchar(45) DEFAULT NULL,
  `cad_dt_forma_rede_alimentacao` varchar(45) DEFAULT NULL,
  `cad_dt_numero_petalas` varchar(30) DEFAULT NULL,
  `cad_dt_fabricante_luminaria` varchar(50) DEFAULT NULL,
  `cad_df_aparencia_ponto_luminoso` varchar(45) DEFAULT NULL,
  `cad_df_observacao_ponto_luminoso` varchar(100) DEFAULT NULL,
  `cad_df_estado_lampada` varchar(45) DEFAULT NULL,
  `cad_df_arvore_ofuscando_iluminacao` varchar(3) DEFAULT NULL,
  `cad_df_posicionamento_poste` varchar(45) DEFAULT NULL,
  `cad_df_proximidade_luminaria_rede_energia` varchar(45) DEFAULT NULL,
  `cad_df_local_dificil_acesso` varchar(3) DEFAULT NULL,
  `cad_md_configuracao` varchar(2) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
  `usu_Perfil` varchar(15) NOT NULL,
  PRIMARY KEY (`usu_CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
