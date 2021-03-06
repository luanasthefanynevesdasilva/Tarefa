-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Ago-2021 às 16:43
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dados3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `idaluguel` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `diaria` varchar(200) NOT NULL,
  `datalocacao` date NOT NULL,
  `combustivelatual` varchar(200) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluguel`
--

INSERT INTO `aluguel` (`idaluguel`, `idcliente`, `diaria`, `datalocacao`, `combustivelatual`, `ativo`) VALUES
(1, 3, '220', '2021-08-07', '1000', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `email`, `endereco`, `telefone`) VALUES
(3, 'luana silva', 'luanacocos22@gmail.com', 'rua seis de agosto', '(77) 9812-1212');

-- --------------------------------------------------------

--
-- Estrutura da tabela `devolucao`
--

CREATE TABLE `devolucao` (
  `iddevolucao` int(11) NOT NULL,
  `total` varchar(200) NOT NULL,
  `idaluguel` int(11) NOT NULL,
  `combustiveldevolucao` varchar(200) NOT NULL,
  `extra` varchar(200) NOT NULL,
  `datadevolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemaluguel`
--

CREATE TABLE `itemaluguel` (
  `iditemaluguel` int(11) NOT NULL,
  `idaluguel` int(11) NOT NULL,
  `idveiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itemaluguel`
--

INSERT INTO `itemaluguel` (`iditemaluguel`, `idaluguel`, `idveiculo`) VALUES
(3, 3, 2),
(4, 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`idmodelo`, `descricao`) VALUES
(2, 'ford');

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguro`
--

CREATE TABLE `seguro` (
  `idseguro` int(11) NOT NULL,
  `datafinal` date NOT NULL,
  `datainicio` date NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `seguro`
--

INSERT INTO `seguro` (`idseguro`, `datafinal`, `datainicio`, `valor`) VALUES
(2, '2021-08-06', '2021-08-06', 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoveiculo`
--

CREATE TABLE `tipoveiculo` (
  `idtipoveiculo` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipoveiculo`
--

INSERT INTO `tipoveiculo` (`idtipoveiculo`, `descricao`) VALUES
(2, 'carro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `idveiculo` int(11) NOT NULL,
  `idtipoveiculo` int(11) NOT NULL,
  `idmodelo` int(11) NOT NULL,
  `idseguro` int(11) NOT NULL,
  `ano` varchar(200) NOT NULL,
  `cor` varchar(200) NOT NULL,
  `placa` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`idveiculo`, `idtipoveiculo`, `idmodelo`, `idseguro`, `ano`, `cor`, `placa`, `status`, `nome`) VALUES
(2, 2, 2, 2, '2010', 'rosa', 'i9i1e9', 'indisponivel', 'carro1'),
(4, 2, 2, 2, '2012', 'rosa', 'i9i1e12', 'indisponivel', 'carro2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`idaluguel`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `devolucao`
--
ALTER TABLE `devolucao`
  ADD PRIMARY KEY (`iddevolucao`),
  ADD KEY `idaluguel` (`idaluguel`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `itemaluguel`
--
ALTER TABLE `itemaluguel`
  ADD PRIMARY KEY (`iditemaluguel`),
  ADD KEY `idaluguel` (`idaluguel`),
  ADD KEY `idveiculo` (`idveiculo`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idmodelo`);

--
-- Indexes for table `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`idseguro`);

--
-- Indexes for table `tipoveiculo`
--
ALTER TABLE `tipoveiculo`
  ADD PRIMARY KEY (`idtipoveiculo`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`idveiculo`),
  ADD KEY `idmodelo` (`idmodelo`),
  ADD KEY `idseguro` (`idseguro`),
  ADD KEY `idtipoveiculo` (`idtipoveiculo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `idaluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `devolucao`
--
ALTER TABLE `devolucao`
  MODIFY `iddevolucao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `itemaluguel`
--
ALTER TABLE `itemaluguel`
  MODIFY `iditemaluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seguro`
--
ALTER TABLE `seguro`
  MODIFY `idseguro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipoveiculo`
--
ALTER TABLE `tipoveiculo`
  MODIFY `idtipoveiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `idveiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD CONSTRAINT `aluguel_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `devolucao`
--
ALTER TABLE `devolucao`
  ADD CONSTRAINT `devolucao_ibfk_1` FOREIGN KEY (`idaluguel`) REFERENCES `aluguel` (`idaluguel`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `itemaluguel`
--
ALTER TABLE `itemaluguel`
  ADD CONSTRAINT `itemaluguel_ibfk_1` FOREIGN KEY (`idaluguel`) REFERENCES `aluguel` (`idaluguel`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `itemaluguel_ibfk_2` FOREIGN KEY (`idveiculo`) REFERENCES `veiculo` (`idveiculo`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `veiculo_ibfk_1` FOREIGN KEY (`idmodelo`) REFERENCES `modelo` (`idmodelo`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`idseguro`) REFERENCES `seguro` (`idseguro`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `veiculo_ibfk_3` FOREIGN KEY (`idtipoveiculo`) REFERENCES `tipoveiculo` (`idtipoveiculo`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
