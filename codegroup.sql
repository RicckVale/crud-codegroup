--
-- Database: `codegroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(100) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(240) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rua` varchar(240) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(20) NOT NULL,
  `datacriacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `telefone`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `datacriacao`) VALUES
(8, 'Valéria Conceição Vogas', '38157361613', 'valeria.vogas@geradornv.com.br', '37 225358811', '35703-45', 'Rua Mário Sérgio Cipriano', '432', '', 'Condomínio Lago Azul', 'Sete Lagoas', 'MG', '2022-04-17 22:26:05'),
(9, 'Elvis Sarmanto de Arruda', '57715476200', 'elvis.arruda@geradornv.com.br', '68 381741709', '69909141', 'Avenida Afif Arão', '435', '', 'Cidade do Povo', 'Rio Branco', 'AC', '2022-04-17 22:28:02'),
(10, 'Emanuel Norte Bon', '42851874772', 'emanuel.bon@geradornv.com.br', '27 31376716', '29936-80', 'Rua Doze', '543', '', 'Cohab', 'São Mateus', 'ES', '2022-04-17 22:29:23'),
(11, 'Firmino Valle Anjos', '62666253341', 'firmino.anjos@geradornv.com.br', '86 25186487', '64028-81', 'Rua Juçara', '731', '', 'Santa Cruz', 'Teresina', 'PI', '2022-04-17 22:29:50'),
(12, 'Vinícius Pontes Furtado', '56817403901', 'vinicius.furtado@geradornv.com.br', '42 20808011', '86087600', 'Rua José de Paula Sobrinho', '8812', '', 'Residencial Quadra Norte', 'Londrina', 'PR', '2022-04-17 22:30:31'),
(13, 'Adso Marica Anastacio', '55223951689', 'adso.anastacio@geradornv.com.br', '37 34970351', '38401624', 'Alameda Maria Ferreira dos Santos', '612', '', 'Residencial Gramado', 'Uberlândia', 'MG', '2022-04-17 22:31:53'),
(14, 'Telma Velasco Machado', '58345788106', 'telma.machado@geradornv.com.br', '62 30751528', '72885113', 'Quadra 23', '912', '', 'Parque Nápolis A', 'Cidade Ocidental', 'GO', '2022-04-17 22:33:36'),
(15, 'Rosimere Duarte Brito', '56672704396', 'rosimere.brito@geradornv.com.br', '86 20776144', '64078200', 'Quadra 227', '6312', '', 'Itararé', 'Teresina', 'PI', '2022-04-17 22:34:02'),
(16, 'Katyene Peçanha Paes', '17022456593', 'katyene.paes@geradornv.com.br', '79 27856162', '49097-40', 'Rua Manoel Santos Silva', '1013', '', 'Ponto Novo', 'Aracaju', 'SE', '2022-04-17 22:34:45'),
(18, 'Julliana Rodrigues Robadey', '27213024183', 'julliana.robadey@geradornv.com.br', '66 24169489', '78715352', 'Rua Oito', '132', '', 'Jardim Ebenezer', 'Rondonópolis', 'MT', '2022-04-17 22:36:14'),
(19, 'Vanderlei Braga Sarmento', '71163379891', 'vanderlei.sarmento@geradornv.com.br', '19 23346398', '08568150', 'Avenida Esperidião Gosson', '513', '', 'Jardim Nova Poá', 'Poá', 'SP', '2022-04-17 22:36:49'),
(20, 'Dhiego Leal Valle', '862651548', 'dhiego.valle@geradornv.com.br', '15 27838127', '13632632', 'Rua Manoel Pagoti', '1234', '', 'Pólo Industrial Guilherme Müller Filho', 'Pirassununga', 'SP', '2022-04-17 22:37:18'),
(21, 'Aldemar Alfradique Saraiva', '35865274899', 'aldemar.saraiva@geradornv.com.br', '14 36158038', '18051020', 'Rua Giuseppina Cagliero', '461', '', 'Central Parque Sorocaba', 'Sorocaba', 'SP', '2022-04-17 22:37:45'),
(22, 'James Luis', '5589414564', 'jamesrluis@superrito.com', '18 36127674', '13480475', 'Rua João Machado Gomes Júnior', '123', '', 'Vila Claudia', 'Limeira', 'SP', '2022-04-18 00:44:31'),
(23, 'Mara Gualberto Assis', '30787612820', 'mara.assis@geradornv.com.br', '11 31417186', '18271010', 'Rua Simeão Sobral', '812', '', 'Jardim São Paulo', 'Tatuí', 'SP', '2022-04-18 00:44:55'),
(24, 'Elio Teles Celestino', '13711398812', 'elio.celestino@geradornv.com.br', '19 27797273', '13033210', 'Rua Antônio Nunes dos Santos', '901', '', 'Jardim do Vovô', 'Campinas', 'SP', '2022-04-18 00:45:19'),
(25, 'Marly Firmino Chiles', '55485245854', 'marly.chiles@geradornv.com.br', '12 32843866', '14307202', 'Rua José Antônio de Moura', '913', '', 'Araras', 'Batatais', 'SP', '2022-04-18 00:45:53'),
(26, 'Clevisson Pontes Quintanilha', '65880529878', 'clevisson.quintanilha@geradornv.com.br', '15 21723867', '19051-18', 'Rua Geraldo Alves', '152', '', 'Residencial Anita Tiezzi', 'Presidente Prudente', 'SP', '2022-04-18 00:46:15'),
(27, 'Soraia Bochimpani Valansuela', '81684833833', 'soraia.valansuela@geradornv.com.br', '14 21518451', '14056349', 'Rua Ministro Gustavo Capanema de Almeida', '812', '', 'Planalto Verde', 'Ribeirão Preto', 'SP', '2022-04-18 00:46:37'),
(28, 'Daniel Darmont Mota', '11766624812', 'daniel.mota@geradornv.com.br', '16 25759747', '13167790', 'Rua Américo Amaral', '679', '', 'Recanto Vale do Sol', 'Artur Nogueira', 'SP', '2022-04-18 02:09:16'),
(29, 'Dora Anjos Ervano', '96787546815', 'algemira.alves@geradornv.com.br', '17 33537546', '11085330', 'Rua João Rolando Lima', '834', '', 'Chico de Paula', 'Santos', 'SP', '2022-04-18 02:09:42'),
(30, 'Fransiscano Temperini Sodre', '88092819858', 'fransiscano.sodre@geradornv.com.br', '19 982585', '08573050', 'Rua Vereador Maurício Alvez Braz', '1', '', 'Vila Virgínia', 'Itaquaquecetuba', 'SP', '2022-04-18 02:21:40'),
(31, 'Sheila Amancio Souza', '65213536832', 'sheila.souza@geradornv.com.br', '18 30720416', '13179286', 'Rua João Bonifácio', '6', '', 'Jardim Santa Rosa (Nova Veneza)', 'Sumaré', 'SP', '2022-04-18 02:22:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
