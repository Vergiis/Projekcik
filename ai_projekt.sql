-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Sty 2021, 16:24
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ai_projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_vatId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `devices`
--

CREATE TABLE `devices` (
  `device_id` int(11) NOT NULL,
  `device_code` varchar(25) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `device_serialNumber` varchar(25) NOT NULL,
  `device_buyDate` date NOT NULL,
  `device_invoiceId` int(11) NOT NULL,
  `device_warrantyExpiryDate` date NOT NULL,
  `device_nettoValue` decimal(10,2) NOT NULL,
  `device_ownerId` int(11) NOT NULL,
  `device_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `devices`
--

INSERT INTO `devices` (`device_id`, `device_code`, `device_name`, `device_serialNumber`, `device_buyDate`, `device_invoiceId`, `device_warrantyExpiryDate`, `device_nettoValue`, `device_ownerId`, `device_notes`) VALUES
(1, 'aa', 'ee', '22', '2021-01-28', 44, '2021-01-23', '11.00', 1, 'aa'),
(2, '11', '4', '3', '2021-01-08', 2, '2021-01-29', '5.00', 1, '3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `documents`
--

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL,
  `document_date` date NOT NULL,
  `document_client1` int(11) NOT NULL,
  `document_client2` int(11) NOT NULL,
  `document_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `invoice_type` varchar(10) NOT NULL,
  `invoice_identifier` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `invoice_nettoValue` decimal(10,2) NOT NULL,
  `invoice_vat` decimal(10,2) NOT NULL,
  `invoite_bruttoValue` decimal(10,2) NOT NULL,
  `invoice_currencyType` varchar(3) NOT NULL,
  `invoice_convertedValue` decimal(10,0) NOT NULL,
  `user_id` int(11) NOT NULL,
  `detailsFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `invoice_type`, `invoice_identifier`, `client_id`, `invoice_nettoValue`, `invoice_vat`, `invoite_bruttoValue`, `invoice_currencyType`, `invoice_convertedValue`, `user_id`, `detailsFile`) VALUES
(2, 'buy', 'aa', 2, '3.00', '1.00', '2.00', 'PLN', '3', 1, 'uploadedInvoices/aa.pdf'),
(3, 'sale', '221', 231, '231.00', '321.00', '321.00', 'PLN', '321', 1, 'uploadedInvoices/221.pdf'),
(4, 'buy', '656', 54, '4.00', '65.00', '4.00', 'PLN', '6545', 1, 'uploadedInvoices/656.pdf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `licences`
--

CREATE TABLE `licences` (
  `licence_id` int(11) NOT NULL,
  `licence_number` varchar(25) NOT NULL,
  `licence_nameAndDesc` varchar(255) NOT NULL,
  `licence_serialKey` varchar(50) NOT NULL,
  `licence_orderDate` date NOT NULL,
  `licence_invoiceId` int(11) NOT NULL,
  `licence_supportExpiryDate` date NOT NULL,
  `licence_expiryDate` date NOT NULL,
  `licence_userId` int(11) NOT NULL,
  `licence_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `licences`
--

INSERT INTO `licences` (`licence_id`, `licence_number`, `licence_nameAndDesc`, `licence_serialKey`, `licence_orderDate`, `licence_invoiceId`, `licence_supportExpiryDate`, `licence_expiryDate`, `licence_userId`, `licence_notes`) VALUES
(1, '22', 'aa', '33', '2021-01-12', 2, '2021-01-13', '2021-01-16', 1, 'aaa'),
(2, '1', '1', '33', '2021-01-14', 412, '2021-01-22', '2021-01-19', 1, 'aaaad'),
(3, '22', '22', '1111', '2021-01-22', 444, '2021-01-21', '2021-01-21', 1, 'afsd22'),
(4, '1', '1', '4', '2021-01-14', 5, '2021-01-13', '2021-01-28', 1, '2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstName` varchar(50) NOT NULL,
  `user_lastName` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_salt` varchar(10) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `user_login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `user_firstName`, `user_lastName`, `user_password`, `user_salt`, `user_role`, `user_login`) VALUES
(1, 'Adam', 'Polak', '202cb962ac59075b964b07152d234b70', '72kaj@xxa2', 'admin', 'xx'),
(3, 'Jan', 'Test', '202cb962ac59075b964b07152d234b70', 'xxx', 'audytor', 'yy');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indeksy dla tabeli `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`);

--
-- Indeksy dla tabeli `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_id`);

--
-- Indeksy dla tabeli `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indeksy dla tabeli `licences`
--
ALTER TABLE `licences`
  ADD PRIMARY KEY (`licence_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `documents`
--
ALTER TABLE `documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `licences`
--
ALTER TABLE `licences`
  MODIFY `licence_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
