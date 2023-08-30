--
-- Database: `mixcopia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idusuario`, `nome`, `usuario`) VALUES
(1, ' ', ' '),
(2, 'Manoel Quintino', 'manoelquintino'),
(3, 'Juary Silva', 'juarysilva'),
(4, 'João Nogueira', 'juniornogueira'),
(5, 'Douglas CananÃ©a', 'cananeadouglas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `valorpedido` double NOT NULL,
  `nomecliente` varchar(60) NOT NULL,
  `datapedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descricao` varchar(150) NOT NULL,
  `pagamento` varchar(10) NOT NULL,
  `liberadoproducao` varchar(10) NOT NULL,
  `nomearquivo` varchar(160) NOT NULL,
  `concluido` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `idusuario`, `valorpedido`, `nomecliente`, `datapedido`, `descricao`, `pagamento`, `liberadoproducao`, `nomearquivo`, `concluido`) VALUES
(27, 5, 50, 'Douglas CananÃ©a', '2016-07-17 01:53:55', 'caneca de porcelana', '', '', '[camisa]-[tipo]-[tamanho]-[nÃ£o]', ''),
(26, 2, 12, 'zoe', '2016-07-17 01:51:29', 'caneca acrilica', '', '', 'xana.cdr', ''),
(22, 2, 89.65, 'Marcos', '2016-06-15 15:08:57', 'Camisa BÃ¡sica Branca', 'Sim', '', 'dfdfD', 'Sim'),
(24, 3, 78.45, 'Antonio', '2016-07-07 01:21:10', 'camisa P', 'Sim', '', 'kkkkk.cdr', 'Sim'),
(25, 5, 45.8, 'dougÃ§asÃ§Ã§Ã§Ã§', '2016-07-17 01:47:56', 'aÃ§Ãºcar feijÃ£o', 'Sim', '', 'dfdfdf', 'Sim'),
(23, 2, 58.6, 'Noel', '2016-07-07 00:25:51', 'duas canecas brancas', 'Sim', '', 'azul_marinho.cdr', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `nomeproduto` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `nomeproduto`, `quantidade`) VALUES
(34, 'baby look branca G', 0),
(33, 'baby look branca M', 0),
(32, 'baby look branca P', 0),
(31, 'bÃ¡sica branca G', 0),
(30, 'bÃ¡sica branca GG', 0),
(29, 'bÃ¡sica branca G', 0),
(27, 'bÃ¡sica branca P', 0),
(28, 'bÃ¡sica branca M', 0),
(35, 'baby look branca GG', 0),
(36, 'caneca MÃGICA', 0),
(37, 'caneca ACRÃLICA', 0),
(39, 'caneca ALÃ‡A AZUL', 0),
(40, 'caneca ALÃ‡A LARANJA', 0),
(41, 'caneca ALÃ‡A CORAÃ‡ÃƒO', 0),
(42, 'ALMOFADA quadrada', 0),
(43, 'ALMOFADA redonda', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
