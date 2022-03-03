-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2019 às 20:56
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awcs`
--
CREATE DATABASE IF NOT EXISTS `awcs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `awcs`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `localiza` varchar(100) DEFAULT NULL,
  `CNPJ` varchar(15) DEFAULT NULL,
  `Usuario` int(11) DEFAULT NULL,
  `Resumo` text,
  `data_alt` date DEFAULT NULL,
  `data_cad` date DEFAULT NULL,
  `Usuario_alt` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `localiza`, `CNPJ`, `Usuario`, `Resumo`, `data_alt`, `data_cad`, `Usuario_alt`) VALUES
(1, 'empresa gerall', NULL, NULL, 1, NULL, NULL, '2019-12-08', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecer`
--

CREATE TABLE `fornecer` (
  `id` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecer`
--

INSERT INTO `fornecer` (`id`, `idempresa`, `idproduto`, `valor`) VALUES
(73, 1, 29, 6.6),
(72, 1, 28, 15.18),
(71, 1, 27, 25.12),
(70, 1, 26, 191.5),
(69, 1, 25, 22.77),
(68, 1, 24, 3.37),
(67, 1, 23, 19.94),
(66, 1, 22, 15.82),
(65, 1, 21, 12.68),
(64, 1, 20, 16.97),
(63, 1, 19, 12.18),
(62, 1, 18, 54.58),
(61, 1, 17, 12),
(60, 1, 16, 15.7),
(59, 1, 15, 66.7),
(58, 1, 14, 2.46),
(57, 1, 13, 59.36),
(56, 1, 12, 59.36),
(55, 1, 11, 59.36),
(54, 1, 10, 59.36),
(53, 1, 9, 59.36),
(52, 1, 8, 59.36),
(51, 1, 7, 16.74),
(50, 1, 6, 16.98),
(49, 1, 5, 52.9),
(48, 1, 4, 65.65),
(47, 1, 3, 16.98),
(46, 1, 2, 7.9),
(45, 1, 1, 178.73),
(74, 1, 30, 6.6),
(75, 1, 31, 6.6),
(76, 1, 32, 2.51),
(77, 1, 33, 2.52),
(78, 1, 34, 14.3),
(79, 1, 35, 12.52),
(80, 1, 36, 73.48),
(81, 1, 37, 74.73),
(82, 1, 38, 53.4),
(83, 1, 39, 364.25),
(84, 1, 40, 356.75),
(85, 1, 41, 131.5),
(86, 1, 42, 126.5),
(87, 1, 43, 257.6),
(88, 1, 44, 25.52),
(89, 1, 45, 25.12),
(90, 1, 46, 20.81),
(91, 1, 47, 18.7),
(92, 1, 48, 32.24),
(93, 1, 49, 60.75),
(94, 1, 50, 11.87),
(95, 1, 51, 54.5),
(96, 1, 52, 6.12),
(97, 1, 53, 6.55),
(98, 1, 54, 25.44),
(99, 1, 55, 419.6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valortotal` int(11) DEFAULT NULL,
  `idproduto` int(11) DEFAULT NULL,
  `idlista` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `quantidade`, `valortotal`, `idproduto`, `idlista`) VALUES
(54, 110, 1868, 6, 1),
(53, 100, 5290, 5, 1),
(52, 25, 1641, 4, 1),
(51, 110, 1868, 3, 1),
(50, 150, 1185, 2, 1),
(49, 450, 80428, 1, 1),
(55, 250, 4185, 7, 1),
(56, 15, 890, 8, 1),
(57, 25, 1484, 9, 1),
(58, 30, 1781, 10, 1),
(59, 20, 1187, 11, 1),
(60, 25, 1484, 12, 1),
(61, 20, 1187, 13, 1),
(62, 850, 2091, 14, 1),
(63, 35, 2334, 15, 1),
(64, 150, 2355, 16, 1),
(65, 100, 1200, 17, 1),
(66, 400, 21832, 18, 1),
(67, 450, 5481, 19, 1),
(69, 560, 9503, 20, 1),
(70, 455, 5769, 21, 1),
(71, 550, 8701, 22, 1),
(72, 250, 4985, 23, 1),
(73, 5000, 16850, 24, 1),
(74, 400, 9108, 25, 1),
(76, 150, 28725, 26, 1),
(77, 500, 12560, 27, 1),
(78, 315, 4782, 28, 1),
(79, 350, 2310, 29, 1),
(80, 450, 2970, 30, 1),
(81, 400, 2640, 31, 1),
(82, 5000, 12550, 32, 1),
(83, 5000, 12600, 33, 1),
(84, 35, 501, 34, 1),
(85, 25, 313, 35, 1),
(86, 550, 40414, 36, 1),
(87, 1050, 78467, 37, 1),
(88, 450, 24030, 38, 1),
(89, 400, 52600, 41, 1),
(90, 400, 50600, 42, 1),
(91, 6, 1546, 43, 1),
(92, 25, 638, 44, 1),
(93, 20, 502, 45, 1),
(94, 350, 7283, 46, 1),
(95, 500, 9350, 47, 1),
(96, 105, 3385, 48, 1),
(97, 100, 6075, 49, 1),
(98, 1000, 54500, 51, 1),
(99, 10000, 61200, 52, 1),
(100, 1000, 6550, 53, 1),
(101, 50, 1272, 54, 1),
(102, 10, 4196, 55, 1),
(103, 400, 145700, 39, 1),
(104, 400, 142700, 40, 1),
(105, 8000, 94960, 50, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` text,
  `Divulga` int(1) DEFAULT '0',
  `datahora_registro` varchar(45) DEFAULT NULL,
  `datahora_publicacao` varchar(45) DEFAULT NULL,
  `usuario_cad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lista`
--

INSERT INTO `lista` (`id`, `nome`, `descricao`, `Divulga`, `datahora_registro`, `datahora_publicacao`, `usuario_cad`) VALUES
(1, 'Lista Geral', NULL, 1, '08-12-19 20:07:49', '08-12-19 20:27:15', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `Tipo` varchar(20) DEFAULT NULL,
  `descricao` text NOT NULL,
  `data_alt` date DEFAULT NULL,
  `data_cad` date DEFAULT NULL,
  `Usuario_alt` varchar(30) DEFAULT NULL,
  `Usuario_cad` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `Tipo`, `descricao`, `data_alt`, `data_cad`, `Usuario_alt`, `Usuario_cad`) VALUES
(3, 'item  3', 'Frascos', 'Líquido fixador para película radiográfica dentária, a base de\ntiossulfato de amônio (5-10%), tiocinato de amônio (5-10%) e\nágua (80-85%), frasco com 475ml. Com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(1, 'item 1', 'unid', 'SISTEMA DE UNIÃO monocomponente (primer e adesivo num\nsó frasco), que promova união de resinas compostas\nfotopolimerizáveis ou compômeros à estrutura dental, tanto em\nesmalte como em dentina, para todas as classes de\nrestaurações; Apresentação Frasco com 5ml, Solvente a base\nde água. Composição: Bis-GMA, HEMA, resinas dimetracrilatos,\ncopolímeros do ácido polialquenoico, água e etanol, com data de\nvalidade de 24 meses após a data de entrega do produto. Com\nregistro na ANVISA. Garantia de no mínimo 2 anos.', '2019-12-08', '2019-12-08', '1', '1'),
(2, 'item  2', 'Frascos', 'Flúor gel acidulado a 1,23%, para uso tópico, sabor tutti-fruti,\ntubo com no mínimo 200m. Com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(4, 'item 4', 'Caixas', 'Agulha descartável longa para uso gengival esterilizada,\nsiliconada, tri biselada com bisel interno, com indicador de bisel,\ncom canhão pré rosqueado, caixa com 100 agulhas. Com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(5, 'item  5', 'Caixas', 'Esponja Hemostática, caixa com 40 esponjas embaladas individualmente. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(6, 'item 6', 'Frascos', 'Líquido revelador para película radiográfica dentária, a base de\nmetassulfito de sódio (5-10%), hidroquinona (2%) e água (85-\n90%), frasco com 475ml. Com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(7, 'item 7', 'Caixas', 'Pincel regular 2,0mm para adesivo com no mínimo 100\naplicadores. Com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(8, 'item 8', 'Seringa', 'Resina fotopolimerizável micro híbrida a base de microglass,\nradiopaca com liberação de fluoreto, com tamanho médio de\npartículas de 0,7mm com 4g, cor A1 – esmalte. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(9, 'item 9', 'Seringa', 'Resina fotopolimerizável micro híbrida a base de microglass,\nradiopaca com liberação de fluoreto, com tamanho médio de\npartículas de 0,7mm com 4g, cor A2- esmalte. Com registro na\nANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(10, 'item 10', 'Seringa', 'Resina fotopolimerizável micro híbrida a base de microglass,\nradiopaca com liberação de fluoreto, com tamanho médio de\npartículas de 0,7mm com 4g, cor A3,5 – esmalte. Com registro\nna ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(11, 'item 11', 'Seringa', 'Resina fotopolimerizável micro híbrida a base de microglass,\nradiopaca com liberação de fluoreto com tamanho médio de\npartículas de 0,7mm com 4g, cor A2 – dentina. Com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(12, 'item 12', 'Seringa', 'Resina fotopolimerizável micro híbrida a base de microglass,\nradiopaca com liberação de fluoreto, com tamanho médio de\npartículas de 0,7mm com 4g, cor B2. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(13, 'item 13', 'Seringa', 'Resina fotopolimerizável micro híbrida a base de microglass,\nradiopaca com liberação de fluoreto, com tamanho médio de\npartículas de 0,7mm com 4g, cor C2. Com registro na ANVISA.\nGarantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(14, 'item 14', 'Embalagem', 'Luva cirúrgica estéril de látex nº6 Anatômica; Superfície\nmicrotexturizada na extremidade dos dedos. Levemente talcada;\nEsterilizada por radiação. Indicada para proteger os profissionais\nda área da saúde, em todos os tipos de procedimento cirúrgicos,\nevitando que sangue e fluídos corporais dos pacientes entrem\nem contato com suas mãos. Deve possuir na embalagem\nindicação de mão direita e esquerda proporcionando abertura\nasséptica. Com registro na ANVISA. Garantia de no mínimo 2\nanos.', NULL, '2019-12-08', NULL, '1'),
(15, 'item 15', 'unid', 'Instrumentos em aço, farpados, pré esterilizados. Indicados para\na remoção de tecido vivo (polpa) no interior do canal. Possui\ncerca de 40 farpas flexíveis em disposição espiralada ao redor\ndo núcleo cônico. O tamanho das farpas corresponde a meio\ndiâmetro do núcleo. São farpas resilientes que, usadas\ncorretamente, não se fragmentam dentro do canal radicular;\nCabo CC-Cord em aço inox. 21Mm sortida 20-30. Com devido\nregistro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(16, 'item 16', 'unid', 'Gel anestésico tópico. Benzocaína a 20%, sabor menta ou tuti-\nfruti. Com devido registro no Ministério da Saúde, com registro\nna ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(17, 'item 17', 'unid', 'Hidróxido de Cálcio P.A, indicado como material curativo\nintracanal, quando estimulado à formação de dentina\nreparadora. Composta por 100% de hidróxido de cálcio puro na\nforma de pó. Com devido registro na ANVISA. Garantia de no\nmínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(18, 'item 18', 'Caixas', 'Agulha descartável curta para uso gengival esterilizada,\nsiliconada, tri biselada com bisel interno, com indicador de bisel,\ncom canhão pré rosqueado, caixa com 100 agulhas. Com\nregistro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(19, 'item 19', 'Caixas', 'Máscara cirúrgica, retangular com 3 camadas de proteção e\nfiltro, hipoalérgica, com elástico redondo, caixa com no mínimo\n50 máscaras, com ajuste anatômico perfeito sobre a face por\nconta do clip nasal. Com filtragem bacteriana superior a 96%.\nCor branca ou azul, com devido registro na ANVISA, caixa com\nno mínimo 50 unidades. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(20, 'item 20', 'Pacotes', 'Algodão hidrofílico, embalagem de 500 gramas. Utilizado para\nhigienização, antissepsia da pele além de amplo uso no\nambiente odontológico, que proporciona um melhor\naproveitamento do produto. Não estéril; 100% puro algodão:\nmacio e extra absorvente; Cor: branco; Peso: 500g;\nDermatologicamente testado. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(21, 'item 21', 'Frascos', 'Álcool etílico 70º – desinfetante hospitalar líquido para superfície\nfixas, frascos com 1 litro. Com registro na ANVISA. Garantia de\nno mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(22, 'item 22', 'Pacotes', 'Touca sanfonada em TNT, descartável, embalagem com no\nmínimo 100 unidades cada. Com registro na ANVISA. Garantia\nde no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(23, 'item 23', 'Pacotes', 'Babeiro odontológico impermeável e absorvente, descartável\ncom 2 camadas de papel e uma camada de plástico, tamanho\n33x48cm, pacote com no mínimo 100 unidades. Com registro na\nANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(24, 'item 24', 'Pacotes', 'Rolete dental de algodão; Confeccionadas com fibras 100%\nalgodão. Super absorvente, pacote com 100 roletes, nº2 mais\ngrosso. Com registro na ANVISA. Indicado para afastamento de\nbochecha e absorção de líquidos em tratamento odontológico.\nGarantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(25, 'item 25', 'Pacotes', 'Compressa de gaze não estéril 7,5x7,5cm, 11 fios, pacote com\n500 unidades. Com registro na ANVISA. Garantia de no mínimo\n2 anos.', NULL, '2019-12-08', NULL, '1'),
(26, 'item 26', 'Caixas', 'Amálgama capsulado 1 dose (partícula fina e esférica, 600mg\nalloy e 552mg de mercúrio), caixa com 50 cápsulas. Com\nregistro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(27, 'item 27', 'Caixas', 'Luva de procedimento não cirúrgico tamanho PP de látex,\ndescartável, hipoalérgica, não estéril. Levemente pulverizada e\nde acordo com as normas da RDC nº5 de 15 de fevereiro de\n2008. Caixa com no mínimo 50 pares com validade igual ou\nsuperior a 36 meses. Com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(28, 'item 28', 'Frascos', 'Água oxigenada líquida 10v com 1 litro. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(29, 'item 29', 'unid', 'Broca de aço para baixa rotação esférica nº6. São indicadas\npara o preparo de cavidades, acabamento das margens da\ncavidade e restaurações, remoção de restaurações antigas.\nAjuste, correção, remoção e separação de próteses e em\nimplantes dentais. Com registro na ANVISA e selo do INMETRO.\nGarantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(30, 'item 30', 'unid', 'Broca de aço para baixa rotação esférica nº4. São indicadas\npara o preparo de cavidades, acabamento das margens da\ncavidade e de restaurações, remoção de restaurações antigas.\nAjuste, correção, remoção e separação de próteses e em\nimplantes dentais. Com registro na ANVISA e selo do INMETRO.\nGarantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(31, 'item 31', 'unid', 'Broca de aço para baixa rotação esférica nº2. São indicadas\npara o preparo de cavidades, acabamento das margens da\ncavidade e de restaurações, remoção de restaurações antigas.\nAjuste, correção, remoção e separação de próteses e em\nimplantes dentais. Com registro na ANVISA e selo do INMETRO.\nGarantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(32, 'item 32', 'Embalagem', 'Luva cirúrgica estéril de látex nº7 Anatômica; Superfície\nmicrotexturizada na extremidade dos dedos. Levemente talcada.\nEsterilizada por radiação. Indicada para proteger os profissionais\nna área da saúde, em todos os tipos de procedimentos\ncirúrgicos, evitando que sangue e fluídos corporais dos\npacientes entrem em contato com suas mãos. Deve possuir na\nembalagem indicação de mão direita e esquerda proporcionando\nabertura asséptica. Com registro na ANVISA e selo do\nINMETRO. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(33, 'item 33', 'Embalagem', 'Luva cirúrgica estéril de látex nº6 Anatômica; Superfície\nmicrotexturizada na extremidade dos dedos. Levemente talcada.\nEsterilizada por radiação. Indicada para proteger os profissionais\nda área da saúde, em todos os tipos de procedimentos\ncirúrgicos, evitando que sangue e fluídos corporais dos\npacientes entrem em contato com suas mãos. Deve possuir na\nembalagem indicação de mão direita e esquerda proporcionando\nabertura asséptica. Com registro na ANVISA e selo do\nINMETRO. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(34, 'item 34', 'Frascos de 10 mil', 'Tricresol Formalina: antisséptico e desinfetante usado como\ncurativo de demora em caos de necrose pulpar, que alie as\npropriedades do Formaldeído com o Cresol. Possuir potente\nação bactericida. Material para desinfecção de canal radicular. O\nproduto antisséptico, desinfetante para canais radiculares, que\nalia as propriedades do formaldeído com orto-Cresol. Com alto\nteor de pureza, com registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(35, 'item 35', 'Frascos1 de 10 mil', 'Formocresol: utilizado como medicação curativa intra canal e em\ntratamentos endodônticos de dentes decíduos com a finalidade\nde mumificar o tecido pulpar. Sua função é fixas as polpas vivas,\nmantendo-as inertes e possibilitando a conservação do dente\ndecíduo até uma época próxima da queda fisiológica. *Possui\nação antibacteriana potente pela ação de seus componentes, o\nque justifica seu uso em curativos de demora em tratamentos\nendodônticos. Garantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(36, 'item 36', 'Embalagem', 'Anestésico solução injetável de cloridrato de lidocaína 2% sem\nvasoconstritor. Tubete de plástico com 1,8ml. Êmbolo sem látex.\nCom registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(37, 'item 37', 'Caixas', 'Anestésico injetável – solução injetável de Cloridrato de\nLidocaína a 2% com Hemitartarato de Norepinefrina 1:50.000.\nCada carpule contém 36mg de cloridrato de lidocaína e 0,072mg\nde hemitartarato de norepinefrina (equivalente a 0,036mg de\nnorepinefrina). Lidocaína: sal tendo como agente anestésico do\ntipo amida mais antigo do grupo, considerado droga padrão.\nCom registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(38, 'item 38', 'unid', 'Luva para Carpule em forma de bichinhos Jacarezinho ou outro.\nRevestimento para seringa. Indicado para diminuição da\nansiedade causada pelo medo da agulha no ato da anestesia.\nDesign lúdico e diferenciado produzido em elastômero\nesterilizável; Permite uso com agulhas convencionais e extra\ncurtas. Esterilizável em autoclave. Com registro na ANVISA.\nGarantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(39, 'item 39', 'Kits', 'Kit de discos de lixa flexíveis, em 4 granulações (Grossa, Média,\nFina e Extra Fina) e nos tamanhos de 8 e 12mm de diâmetro.\nDotados de sistema de encaixe rápido que facilita seu\nacoplamento ao mandril. Sem partes metálicas na superfície do\ndisco nos Tamanhos de 8 e 12mm. Garantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(40, 'item 40', 'Kits', ' Kit de discos de lixa de acabamento e polimento de restaurações\nem resina de lixa com mandril de pressão para proporcionar\nagilidade na inversão e na substituição dos discos. Os discos\napresentados nos diâmetros de 3/8” e 1/2” e em quatro\ngranulações codificadas por cores. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(41, 'item 41', 'unidd', 'Refil para discos de lixa grossa 1/2”, acabamento e polimento de\nrestaurações em resina. Garantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(42, 'item 42', 'unidd', 'Refil para discos de lixa média. 3/8” acabamento e polimento de\nrestaurações em resina. Garantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(43, 'item 43', 'unid', 'Câmara escura para revelação de radiografias, com 4\nreservatórios para líquido (água, removedor, fixador e água);\nUtilizada em revelações de radiografias periapicais,\ninterproximais e oclusais (22x35mm ou 31x41mm). Angulagem\npara entrada das mãos, tornando fácil o acesso às cubas,\nevitando o mau posicionamento do operador;\n-Material resistente a produtos químicos, ácidos, substâncias alcalinas e detergentes;\n-Fácil remoção das luvas para assepsia;\n-Base removível e não existem bordas retentivas, facilitando a limpeza e desinfecção;\n\n-Possuir alojamento para os recipientes que contenham líquido,\nevitando que os mesmos fiquem soltos, proporcionando maior\n\nsegurança para o operador;\n\n-Visor acrílico destacável, com transparência e total filtragem da\n\nluz;\n\n-Batentes de silicone no fundo da base, que proporcione total\naderência no local de trabalho, a fim de facilitar o manuseio.\nGarantia de no mínimo 2 anos, Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(44, 'item 44', 'unid', 'Afastador Labial adulto\nAfasta lábios e bochecha.\n-Autoclavável;\n-Transparente;\n\nFabricado com matérias-primas bastante flexíveis, que\npossibilitam um encaixe perfeito na boca do paciente, colocando\nem evidência os dentes, afastando os lábios e bochechas.\nGarantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(45, 'item 45', 'unid', 'Afastador Labial infantil\nAfasta lábios e bochecha.\n-Autoclavável;\n-Transparente;\n\nFabricado com matérias-primas bastante flexíveis, que\npossibilitam um encaixe perfeito na boca do paciente, colocando\nem evidência os dentes, afastando lábios e bochechas. Garantia\nde no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(46, 'item 46', 'Frascos', 'Bicabornato de sódio para ser utilizado em qualquer aparelho de\njateamento para profilaxia. Sua granulometria e alto grau de\npureza permitem uma excelente qualidade para o uso, evitando-\nse a lesão do esmalte e gengiva. Proporciona completa limpeza\nnos interproximais. Completa limpeza na Sub-Gengival (local\naonde a gengiva cobre o dente). Não causa sangramento nas\ngengivas sadias. Eliminação completa de materiais orgânicos.\nGarantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(47, 'item 47', 'Frascos com 100 mil', 'Clorhexidina 2% Solução: antisséptico com atividade\nantibacteriana. Indicado para desinfecção de preparos cavitários,\npreparos em coroas, inlays, antissepsia das mãos do\nprofissional, do pessoal auxiliar, na antissepsia extra oral prévia\nem áreas que sofrerão intervenção cirúrgica, das superfícies e\ninstrumentos. Forte ação antibacteriana;\n-Produto de baixa toxidade;\n-Fácil aplicação;\nGarantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(48, 'item 48', 'Embalagem', 'Tesoura reta 13cm. Utilizada em procedimentos cirúrgicos em\ngeral, proporcionando ao cirurgião maior segurança e facilidades\nna hora de cortar suturas, fios cirúrgicos, tecidos moles, entre outros. Em aço inoxidável;\n-Autoclavável;\n-Tamanho: 13cm;\n\nGarantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(49, 'item 49', 'Embalagem', 'Colgadura de inox para radiografia, prendedor (clips) para filme –\nsimples, indicado para prender e/ou pendurar radiografias\nperiapicais, auxiliando no manuseio do raio-X. Confeccionado em aço inox AISI 420;\nEmbalagem com 10 colgaduras simples;\nGarantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(50, 'item 50', 'Pacotes', 'Abaixador de língua de madeira\nMaterial não estéril, de uso médico, descartável e uso único.\nGarantia de no mínimo 2 anos. Com registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(51, 'item 51', 'Caixas', 'Agulha descartável curta para uso gengival esterilizada,\nsiliconada, tri biselada com bisel interno, com indicador de bisel,\ncom canhão pré rosqueado . Caixa com 100 agulhas. Com\nregistro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(52, 'item 52', 'Embalagem', 'Sugador descartável indicado para sucção da saliva e outros\nlíquidos, que ficam na cavidade bucal durante procedimentos\nodontológicos. Com ótima flexibilidade e memória de forma, não\nobstrui o fluxo ao se tubo e ponteira atóxicos;\n*Arame em aço especial;\n\n*Desenvolvido para fixação imediata na posição desejada pelo profissional;\n\n*Ponteira macia e aromatizada sabor tutti-frutti.\nCom registro na ANVISA. Garantia de no mínimo 2 anos.', NULL, '2019-12-08', NULL, '1'),
(53, 'item 53', 'Embalagem', 'Fio dental; ajuda na higiene bucal, mantendo as gengivas sadias.\n\nBanhados por cera, suave para as gengivas e com total\nresistência ao desfiamento e rompimento.\n*Composto de um único filamento com no mínimo 34 fios de nylon.\n\nIndicado para higienização bucal onde a escova dental não alcança.\nFácil inserção entre os dentes.\n*Fácil manuseio, mesmo quando molhado.\n\n*No sabor menta.\n\nEmbalagem com 50 metros. Com registro na ANVISA. Garantia  de no mínimo 2 anos. Com selo da ABO.', NULL, '2019-12-08', NULL, '1'),
(54, 'item 54', 'unid', 'Porta amálgama de plástico utilizado para o transporte e\ninserção do amálgama na cavidade dentária.\nEsterilizável em autoclave a 121ºC;\nNas cores verde ou rosa;\nValidade: no mínimo 5 anos.\nCom registro na ANVISA.', NULL, '2019-12-08', NULL, '1'),
(55, 'item 55', 'unid', 'Suporte de Avental RX em aço para armazenamento das\nvestimentas de proteção radiológica. Produzido em aço, pintado\nem epóxi com dimensões apropriadas para conservação dos aventais;\n\nMedidas: 650mm x 76,2mm diâmetro – área útil. Suporta até 3 aventais.', NULL, '2019-12-08', NULL, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cpf` varchar(12) DEFAULT NULL,
  `cargo` set('Membro','Moderador','Administrador','Gerenciador') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(18) DEFAULT NULL,
  `data_alt` date DEFAULT NULL,
  `data_cad` date DEFAULT NULL,
  `Usuario_alt` varchar(30) DEFAULT NULL,
  `Usuario_cad` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `cargo`, `email`, `senha`, `data_alt`, `data_cad`, `Usuario_alt`, `Usuario_cad`) VALUES
(1, 'Master', '', 'Gerenciador', 'rafa10_nogueira@hotmail.com', '123', '0000-00-00', '2019-12-08', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `CNPJ` (`CNPJ`),
  ADD KEY `Usuario` (`Usuario`),
  ADD KEY `Localizao` (`localiza`) USING BTREE;

--
-- Indexes for table `fornecer`
--
ALTER TABLE `fornecer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduto` (`idempresa`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduto` (`idlista`);

--
-- Indexes for table `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fornecer`
--
ALTER TABLE `fornecer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
