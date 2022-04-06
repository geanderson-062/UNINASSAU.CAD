

CREATE TABLE `cadastra_visitas` (
  `usuario` varchar(120) NOT NULL,
  `setor` varchar(120) NOT NULL,
  `escola` varchar(120) NOT NULL,
  `alunos` varchar(120) NOT NULL,
  `conteudo` varchar(120) NOT NULL,
  `professor` varchar(120) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*tabela de cadastrar visitas sql*/