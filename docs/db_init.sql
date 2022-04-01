CREATE DATABASE `FiberTalk`;

USE `FiberTalk`;

CREATE TABLE `nutritionist` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_siptgz` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `nutritionist`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `nutritionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


CREATE TABLE `qna` (
  `id_qna` int(11) AUTO_INCREMENT NOT NULL,
  `id_user` int(11),
  `id_nutritionist` int(11),
  `qna_text` varchar(255) NOT NULL,
  `timestamp` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
  `qna_visibility` BOOLEAN NOT NULL,
  `judul_qna` varchar(100) NOT NULL,
  `answer_text` varchar(255) NOT NULL,
  PRIMARY KEY (`id_qna`),
  FOREIGN KEY (`id_nutritionist`) REFERENCES `nutritionist`(`id`),
  FOREIGN KEY (`id_user`) REFERENCES `user`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;