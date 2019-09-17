-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Set-2019 às 21:05
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheff_delivery`
--
CREATE DATABASE IF NOT EXISTS `cheff_delivery` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cheff_delivery`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio_dia`
--

CREATE TABLE `cardapio_dia` (
  `id_cardapio` int(11) NOT NULL,
  `nome_comida` varchar(255) NOT NULL,
  `categoria_comida` enum('cafe_manha','almoco','jantar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cardapio_dia`
--

INSERT INTO `cardapio_dia` (`id_cardapio`, `nome_comida`, `categoria_comida`) VALUES
(1, 'Capuccino', 'cafe_manha'),
(2, 'Café Expresso', 'cafe_manha'),
(3, 'Waffles', 'cafe_manha'),
(4, 'Panquecas', 'cafe_manha'),
(5, 'Brownie', 'cafe_manha'),
(6, 'Cheesecake', 'cafe_manha'),
(13, 'Strogonoff de Frango', 'almoco'),
(14, 'Nuggets', 'almoco'),
(15, 'Batata Frita', 'almoco'),
(16, 'Macarronada', 'almoco'),
(17, 'Bife à Parmegiana', 'almoco'),
(18, 'Risoto de Brócolis', 'almoco'),
(19, 'Pizza Calabresa', 'jantar'),
(20, 'Sopa de macarrão', 'jantar'),
(21, 'Esfiha', 'jantar'),
(22, 'Cachorro Quente', 'jantar'),
(23, 'Lasanha', 'jantar'),
(32, 'Cheeseburger ', 'jantar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero_telefone` int(10) NOT NULL,
  `restricao_alimentar` varchar(255) NOT NULL,
  `preferencia_comida` varchar(255) NOT NULL,
  `preferencia_restaurante` varchar(255) NOT NULL,
  `comentarios` varchar(255) NOT NULL,
  `saldo_cafe` int(11) NOT NULL,
  `saldo_almoco` int(11) NOT NULL,
  `saldo_janta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `estado`, `cidade`, `rua`, `numero_telefone`, `restricao_alimentar`, `preferencia_comida`, `preferencia_restaurante`, `comentarios`, `saldo_cafe`, `saldo_almoco`, `saldo_janta`) VALUES
(1040, 'pedro', 'SC', 'bnu', 'pedro', 33445566, 'acucar', 'vegana', 'mc donalds', 'ODEIO CARNE ', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  `CNPJ` int(11) NOT NULL,
  `numero_funcionarios` int(11) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `tipo_empresa` varchar(255) NOT NULL,
  `numero_empresa` int(11) NOT NULL,
  `cidade_empresa` varchar(255) NOT NULL,
  `rua_empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `nome_empresa`, `CNPJ`, `numero_funcionarios`, `turno`, `tipo_empresa`, `numero_empresa`, `cidade_empresa`, `rua_empresa`) VALUES
(1, 'pacifico', 114563298, 2550, 'Matutino', 'Sociedade EmpresÃ¡ria Limitada (Ltda.)', 33369854, 'Blumenau', 'Rua Bahia, 5800'),
(2, 'pacifico', 114563298, 2550, 'Matutino', 'Sociedade EmpresÃ¡ria Limitada (Ltda.)', 33369854, 'Blumenau', 'Rua Bahia, 5800'),
(3, 'Isadora Zancanaro', 22554250, 25896, 'Matutino', 'Sociedade Simples (SS)', 36985741, 'Blumenau', 'Rua Bahia, 5800'),
(4, '123', 123, 132, 'Matutino', 'Sociedade EmpresÃ¡ria Limitada (Ltda.)', 123, '132', '321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

CREATE TABLE `pacotes` (
  `id` int(11) NOT NULL,
  `nome_pacote` varchar(255) NOT NULL,
  `nome_imagem` varchar(255) NOT NULL,
  `descricao_pacote` varchar(255) NOT NULL,
  `preco_pacote` varchar(255) NOT NULL,
  `quantidade_cafe` int(11) NOT NULL,
  `quantidade_almoco` int(11) NOT NULL,
  `quantidade_jantar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacotes`
--

INSERT INTO `pacotes` (`id`, `nome_pacote`, `nome_imagem`, `descricao_pacote`, `preco_pacote`, `quantidade_cafe`, `quantidade_almoco`, `quantidade_jantar`) VALUES
(5, 'BÃ¡sico', 'batata.jpg', '20 almoï¿½os durante todo o mï¿½s, o usuï¿½rio escolhe os dias em que quer receber e o que quer receber.', 'R$ 260,00', 0, 20, 0),
(6, 'Intermediário', 'combo-cafe.jpg', '20 cafés da manhã e 20 almoços durante o mês, o usuário escolhe os dias em que quer receber e o que quer receber.', 'R$ 500,00', 20, 20, 0),
(7, 'Premium', 'comboo.jpg', '20 cafés da manhã, 20 almoços e 20 jantares durante o mês, o usuário escolhe os dias em que quer receber e o que quer receber.\r\n', 'R$ 760,00', 20, 20, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` int(11) NOT NULL,
  `nome_restaurante` varchar(255) NOT NULL,
  `numero_telefone` int(11) NOT NULL,
  `horario_atendimento` varchar(255) NOT NULL,
  `dias_atendimento` varchar(255) NOT NULL,
  `avaliacao` varchar(255) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `nome_restaurante`, `numero_telefone`, `horario_atendimento`, `dias_atendimento`, `avaliacao`, `localizacao`, `estado`, `categoria`) VALUES
(1, 'habibs', 33695821, 'Segunda Ã  Segunda', '', 'bom', 'rua nao sei', 'SC', 'lanches_e_petiscos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tp_usuario` enum('restaurante','empresa','cliente','administrador') NOT NULL,
  `fk_tipo` int(11) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `tp_usuario`, `fk_tipo`, `ativo`) VALUES
(1036, 'oiaiaiaia@gmail.com', '123', 'empresa', 1, 1),
(1037, 'oiaiaiaia@gmail.com', '123', 'empresa', 2, 1),
(1038, 'oi@oi.com', '123', 'empresa', 3, 1),
(1039, 'habs@gmail.com', '123', 'restaurante', 4, 1),
(1042, 'deliiverycheff@gmail.com', '2019', 'administrador', 5, 1),
(1044, 'eucansei@1.com', '123', 'cliente', 6, 1),
(1047, 'algo@oi.com', '123', 'cliente', 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapio_dia`
--
ALTER TABLE `cardapio_dia`
  ADD PRIMARY KEY (`id_cardapio`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacotes`
--
ALTER TABLE `pacotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapio_dia`
--
ALTER TABLE `cardapio_dia`
  MODIFY `id_cardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1041;

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1048;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
