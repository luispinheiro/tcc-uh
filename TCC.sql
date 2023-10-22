-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Outubro-2023 às 15:33
-- Versão do servidor: 10.4.27-MariaDB
-- PHP Version: 7.4.33

--
-- Database: tcc
--

-- --------------------------------------------------------

--
-- Estrutura da tabela sensores
--

CREATE TABLE sensores (
  id int(10) UNSIGNED NOT NULL,
  nome varchar(50) NOT NULL,
  valor double NOT NULL,
  timestamp int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--
-- Indexes for table sensores
--
ALTER TABLE sensores
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table sensores
--
ALTER TABLE sensores
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;