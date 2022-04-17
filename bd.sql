
CREATE TABLE `cliente` (
  `id` int(100) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(240) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `cep` varchar(7) NOT NULL,
  `rua` varchar(240) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `uf` varchar(20) NOT NULL,
  `datacriacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
