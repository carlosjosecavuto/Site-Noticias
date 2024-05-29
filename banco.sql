CREATE DATABASE if NOT EXISTS SiteNoticia;
USE SiteNoticia;
-- DROP DATABASE SiteNoticia;

CREATE TABLE tb_login(
id_login					INT NOT NULL AUTO_INCREMENT,
usuario					VARCHAR (255) NOT NULL,
senha						VARCHAR (255) NOT NULL,
PRIMARY KEY (id_login)
);
INSERT INTO tb_login (usuario, senha) VALUES 
( 'admin ', '123');
SELECT * FROM tb_login;

CREATE TABLE tb_noticias (
id_noticia				INT NOT NULL AUTO_INCREMENT,
titulo					VARCHAR (255) NOT NULL,
noticia					TEXT NOT NULL,
datahora					TIMESTAMP NOT NULL DEFAULT  CURRENT_TIMESTAMP,
imagem					VARCHAR (255),
fonte						VARCHAR (255),
autor						VARCHAR (255),
PRIMARY KEY (id_noticia)
);
INSERT INTO tb_noticias (titulo,noticia,imagem,fonte,autor) VALUES
('Nosso primeiro POST','Criando um site de notícia','foto1.jpg','Etec Pinhal','Jorge');
SELECT * FROM tb_noticias;