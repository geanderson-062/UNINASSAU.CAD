CREATE TABLE `praticaprofissionalads5`.`login_adm` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(32) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

  insert into login_adm (cpf,senha) values('123456',md5('654321'));

                        /*    
                              administrador acesso
                                  
                                   cpf = 123456 
                                              
                                   senha = 654321

                        /*