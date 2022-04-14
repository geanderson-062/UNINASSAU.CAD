CREATE TABLE `praticaprofissionalads5`.`login_coordenador` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(32) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

  insert into login_coordenador (cpf,senha) values('123456',md5('marcones'));

                        /*    
                                coordenador acesso
                                  
                                   cpf = 123456 
                                              
                                   senha = marcones

                        /*