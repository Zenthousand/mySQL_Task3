-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2026 at 12:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abuton_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `hire_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `department`, `salary`, `hire_date`) VALUES
(1, 'John', 'Doe', 'IT', 55000.00, '2020-03-12'),
(2, 'Jane', 'Smith', 'HR', 48000.00, '2019-06-22'),
(3, 'Carlos', 'Mendez', 'Finance', 62000.00, '2021-01-15'),
(4, 'Anna', 'Lopez', 'Marketing', 51000.00, '2020-09-30'),
(5, 'Peter', 'Brown', 'Sales', 47000.00, '2018-12-05'),
(6, 'Maria', 'Gonzales', 'IT', 58000.00, '2022-02-19'),
(7, 'David', 'Wilson', 'Finance', 63000.00, '2021-07-01'),
(8, 'Sophia', 'Anderson', 'Marketing', 49500.00, '2019-11-20'),
(9, 'Michael', 'Johnson', 'HR', 46000.00, '2020-04-11'),
(10, 'Olivia', 'Martinez', 'Sales', 52000.00, '2023-05-08'),
(11, 'James', 'Clark', 'IT', 60000.00, '2020-10-10'),
(12, 'Emily', 'Lewis', 'Finance', 61500.00, '2021-03-17'),
(13, 'Daniel', 'Walker', 'Marketing', 50500.00, '2022-06-02'),
(14, 'Isabella', 'Young', 'HR', 48000.00, '2018-08-09'),
(15, 'Henry', 'Hall', 'Sales', 49000.00, '2019-09-25'),
(16, 'Grace', 'Allen', 'Finance', 64000.00, '2023-02-13'),
(17, 'Lucas', 'Wright', 'IT', 59000.00, '2020-12-29'),
(18, 'Ella', 'King', 'Marketing', 53000.00, '2021-08-21'),
(19, 'Ethan', 'Scott', 'Sales', 51000.00, '2022-04-16'),
(20, 'Ava', 'Baker', 'HR', 47500.00, '2023-01-04'),
(21, 'Ruel', 'Parsan', 'IT', 67000.00, '2026-02-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
