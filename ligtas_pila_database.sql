-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 11, 2026 at 04:50 PM
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
-- Database: `ligtas_pila_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `USERNAME` varchar(128) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`USERNAME`, `PASSWORD`, `ID`) VALUES
('NEIL', 'NEIL-LP-PS', 1),
('JUSTIN', 'JUSTIN-LP-PS', 2),
('JAE', 'JAE-LP-PS', 3),
('RACHELLE', 'RACHELLE-LP-PS', 4),
('ERNILYN', 'ERNILYN-LP-PS', 5);

-- --------------------------------------------------------

--
-- Table structure for table `burial-table`
--

CREATE TABLE `burial-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE_TYPE` varchar(128) DEFAULT NULL,
  `IMAGE` varchar(128) DEFAULT NULL,
  `ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER` varchar(128) DEFAULT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER (A.A.)` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `burial-table`
--

INSERT INTO `burial-table` (`INFO_ID`, `CASE_TYPE`, `IMAGE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) VALUES
(0000014, 'Burial Assistance', 'N/A', 'Wake (Lamay) Expense Assistance', '', 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `education-table`
--

CREATE TABLE `education-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE_TYPE` varchar(128) DEFAULT NULL,
  `IMAGE` varchar(128) DEFAULT NULL,
  `ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER` varchar(128) DEFAULT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER (A.A.)` varchar(128) DEFAULT NULL,
  `LOANS` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education-table`
--

INSERT INTO `education-table` (`INFO_ID`, `CASE_TYPE`, `IMAGE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`, `LOANS`) VALUES
(0000011, 'Educational Assistance', 'N/A', 'School Supplies Assistance', '', 'N/A', '', NULL),
(0000021, 'Educational Assistance', 'N/A', 'Student Loan Assistance', '', 'N/A', '', NULL),
(0000022, 'Educational Assistance', 'N/A', 'Student Loan Assistance', '', 'N/A', '', 'Php 5000');

-- --------------------------------------------------------

--
-- Table structure for table `information_list`
--

CREATE TABLE `information_list` (
  `DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `NUMBER ID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `LAST_NAME` varchar(128) DEFAULT NULL,
  `FIRST_NAME` varchar(128) DEFAULT NULL,
  `MIDDLE_NAME` varchar(128) DEFAULT NULL,
  `SUFFIX` varchar(128) DEFAULT NULL,
  `REGION` varchar(128) DEFAULT NULL,
  `CITY` varchar(128) DEFAULT NULL,
  `DISTRICT` varchar(128) DEFAULT NULL,
  `BARANGAY` varchar(128) DEFAULT NULL,
  `CURRENT_ADDRESS` varchar(128) DEFAULT NULL,
  `NUMBER` varchar(128) DEFAULT NULL,
  `EMAIL` varchar(128) DEFAULT NULL,
  `MONTHLY_INCOME` varchar(128) DEFAULT NULL,
  `CASE_TYPE` varchar(128) DEFAULT NULL,
  `ID` varchar(128) DEFAULT NULL,
  `ID FILE NAME` varchar(128) DEFAULT NULL,
  `STATUS` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information_list`
--

INSERT INTO `information_list` (`DATE`, `NUMBER ID`, `LAST_NAME`, `FIRST_NAME`, `MIDDLE_NAME`, `SUFFIX`, `REGION`, `CITY`, `DISTRICT`, `BARANGAY`, `CURRENT_ADDRESS`, `NUMBER`, `EMAIL`, `MONTHLY_INCOME`, `CASE_TYPE`, `ID`, `ID FILE NAME`, `STATUS`) VALUES
('2026-06-06 22:55:19', 0000001, 'testing #7', '', '', '', 'NULL', 'Select', 'select', 'Select', '', '', '', 'NULL', 'unemployed', 'NULL', 'N/A', 'Pending'),
('2026-06-06 22:55:19', 0000002, 'testing #2', '', '', '', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', '', '112314221', 'bdrbrw', 'Less than PhP 12,000 per month', 'Transport Worker', 'AFPSLAI ID', 'N/A', 'Completed'),
('2026-06-06 22:55:19', 0000003, 'validation', 'efqwf', 'qwdq', 'wqdwqd', 'NCR', 'Quezon City', 'select', 'Select', 'wda', '213', '1231', 'Less than PhP 12,000 per month', 'Natural Disaster Victims', 'BIR (TIN)', 'N/A', 'Completed'),
('2026-06-06 23:00:32', 0000004, 'testing #3', 'dd', 'dd', 'dd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'dasda', '1334', 'sdvsdv', 'Less than PhP 12,000 per month', 'PWD', 'Senior Citizen ID', 'uploads/id/WIN_20251004_11_37_41_Pro.jpg', 'Pending'),
('2026-06-10 22:20:32', 0000005, 'testing natural', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'd', 'd', 'd', 'Above PhP 48,000', 'Natural Disaster Victims', 'Integrated Bar of the Philippines (IBP) ID', 'N/A', 'Completed'),
('2026-06-10 22:27:49', 0000006, 'avove 48k', 'wda', 'wd', 'w', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'wdwa', 'wadawd', 'awda', 'Above PhP 48,000', 'Educational Assistance', 'AFP Beneficiary ID', 'N/A', 'Pending'),
('2026-06-10 22:28:54', 0000007, 'avove 48k', 'wda', 'wd', 'w', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'wdwa', 'wadawd', 'awda', 'Above PhP 48,000', 'Educational Assistance', 'AFP Beneficiary ID', 'N/A', 'Pending'),
('2026-06-10 22:30:54', 0000008, 'avove 48k', 'wda', 'wd', 'w', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'wdwa', 'wadawd', 'awda', 'Above PhP 48,000', 'Educational Assistance', 'AFP Beneficiary ID', 'N/A', 'Pending'),
('2026-06-10 22:31:22', 0000009, 'avove 48k', 'wda', 'wd', 'w', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'wdwa', 'wadawd', 'awda', 'Above PhP 48,000', 'Medical Assistance', 'AFP Beneficiary ID', 'N/A', 'Completed'),
('2026-06-10 22:32:38', 0000010, 'educ', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'dasda', '231', '1312', 'Above PhP 48,000', 'Educational Assistance', 'PVAO ID', 'N/A', 'Pending'),
('2026-06-10 22:34:04', 0000011, 'educ', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'dasda', '231', '1312', 'Above PhP 48,000', 'Educational Assistance', 'PVAO ID', 'N/A', 'Pending'),
('2026-06-10 22:34:29', 0000012, 'burial', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'adqw', '14124', 'adsas', 'Above PhP 48,000', 'Burial Assistance', 'AFP Beneficiary ID', 'N/A', 'Pending'),
('2026-06-10 22:35:47', 0000013, 'burial', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'adqw', '14124', 'adsas', 'Above PhP 48,000', 'Burial Assistance', 'AFP Beneficiary ID', 'N/A', 'Pending'),
('2026-06-10 22:35:56', 0000014, 'burial', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'adqw', '14124', 'adsas', 'Above PhP 48,000', 'Burial Assistance', 'AFP Beneficiary ID', 'N/A', 'Pending'),
('2026-06-10 22:41:11', 0000015, 'SENIOR', 'D', 'D', 'D', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'ASDASDA', '24324', 'DASAS', 'Above PhP 48,000', 'Senior Citizen', 'Pag-ibig ID', 'N/A', 'Pending'),
('2026-06-10 22:42:29', 0000016, 'SENIOR 2', 'D', 'D', 'D', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'SDFSD', '12432', 'DFSDF', 'Above PhP 48,000', 'Senior Citizen', 'Pag-ibig ID', 'N/A', 'Pending'),
('2026-06-10 22:48:36', 0000017, 'senior 3', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'awdawd', '2312', 'adc', 'Above PhP 48,000', 'Senior Citizen', 'NULL', 'N/A', 'Pending'),
('2026-06-10 22:50:13', 0000018, 'senior 4', 'dvfdfv', 'fdvs', 'svsdv', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'fvf', '34', 'tbrt', 'Above PhP 48,000', 'Senior Citizen', 'NULL', 'N/A', 'Pending'),
('2026-06-10 22:52:45', 0000019, 'medical #2', 'ada', 'wd', 'awd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'wadaw', '12', 'sf', 'Above PhP 48,000', 'Medical Assistance', 'Professional Regulation Commission (PRC) ID', 'N/A', 'Pending'),
('2026-06-10 22:54:08', 0000020, 'meidcal #3', 'd', 'd', 'd', 'NCR', 'Quezon City', 'District_2', 'Batasan Hills', 'das', 'w12', '31dqwq', 'Between PhP 24,000 to PhP 48,000 per month', 'Medical Assistance', 'NULL', 'N/A', 'Pending'),
('2026-06-10 22:57:57', 0000021, 'educ', 'da', 'wada', 'awd', 'NCR', 'Quezon City', 'select', 'Select', 'awdawd', '12412', 'fdaffa', 'No income', 'Educational Assistance', 'AFPSLAI ID', 'N/A', 'Pending'),
('2026-06-10 22:59:10', 0000022, 'educ 3', 'da', 'wada', 'awd', 'NCR', 'Quezon City', 'select', 'Select', 'awdawd', '12412', 'fdaffa', 'No income', 'Educational Assistance', 'NULL', 'N/A', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `medical-table`
--

CREATE TABLE `medical-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE_TYPE` varchar(128) DEFAULT NULL,
  `IMAGE` varchar(128) DEFAULT NULL,
  `ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER` varchar(128) DEFAULT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER (A.A.)` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical-table`
--

INSERT INTO `medical-table` (`INFO_ID`, `CASE_TYPE`, `IMAGE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) VALUES
(0000009, 'Medical Assistance', 'N/A', 'Tuition Fee Assistance', '', 'N/A', ''),
(0000019, 'Medical Assistance', 'N/A', 'Medical Bill', '', 'N/A', ''),
(0000020, 'Medical Assistance', 'N/A', 'Therapy and Rehabilitation Assistance', '', 'Speech Therapy', '');

-- --------------------------------------------------------

--
-- Table structure for table `natural_disaster_victim-table`
--

CREATE TABLE `natural_disaster_victim-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE_TYPE` varchar(128) DEFAULT NULL,
  `ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER` varchar(128) DEFAULT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER (A.A.)` varchar(128) DEFAULT NULL,
  `DISASTER` varchar(128) DEFAULT NULL,
  `No. of Members Affected` int(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `natural_disaster_victim-table`
--

INSERT INTO `natural_disaster_victim-table` (`INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`, `DISASTER`, `No. of Members Affected`) VALUES
(0000003, 'Natural Disaster Victims', 'Temporary Shelter Assistance', '', 'Emergency Shelter', '', 'Typhoons', 4),
(0000005, 'Natural Disaster Victims', 'Temporary Shelter Assistance', '', 'Emergency Shelter', '', 'Typhoons', 4);

-- --------------------------------------------------------

--
-- Table structure for table `person_with_disability-table`
--

CREATE TABLE `person_with_disability-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE_TYPE` varchar(128) DEFAULT NULL,
  `COMMON ASSISTANCE` varchar(128) DEFAULT NULL,
  `PWD_TYPE` varchar(128) DEFAULT NULL,
  `ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER` varchar(128) DEFAULT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER (A.A.)` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person_with_disability-table`
--

INSERT INTO `person_with_disability-table` (`INFO_ID`, `CASE_TYPE`, `COMMON ASSISTANCE`, `PWD_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) VALUES
(0000004, 'PWD', 'Medical Assistance', 'Speech and Language Disability', 'Assistive Devices Assistance', '', 'Hospitalization', '');

-- --------------------------------------------------------

--
-- Table structure for table `senior_citizen-table`
--

CREATE TABLE `senior_citizen-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE_TYPE` varchar(128) DEFAULT NULL,
  `ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER` varchar(128) DEFAULT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER (A.A.)` varchar(128) DEFAULT NULL,
  `SENIOR_STATUS` varchar(128) DEFAULT NULL,
  `SENIOR_MEDICAL_CONDITION` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `senior_citizen-table`
--

INSERT INTO `senior_citizen-table` (`INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`, `SENIOR_STATUS`, `SENIOR_MEDICAL_CONDITION`) VALUES
(0000015, 'Senior Citizen', 'Home Care and Companion Support Services', '', 'N/A', '', 'Mobile/active', 'N/A'),
(0000016, 'Senior Citizen', 'Medical Assistance Senior', '', 'Hospitalization', '', 'Mobile/active', 'N/A'),
(0000017, 'Senior Citizen', 'Medical Assistance Senior', '', 'Hospitalization', '', 'Mobile/active', 'N/A'),
(0000018, 'Senior Citizen', 'Medical Assistance Senior', '', 'Medicines / Prescription Drugs', '', 'Mobile/active', 'Hypertension');

-- --------------------------------------------------------

--
-- Table structure for table `transport_worker-table`
--

CREATE TABLE `transport_worker-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE-TYPE` varchar(128) DEFAULT NULL,
  `ASSISTANCE` varchar(128) DEFAULT NULL,
  `OTHER` varchar(128) DEFAULT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) NOT NULL,
  `OTHER (A.A.)` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport_worker-table`
--

INSERT INTO `transport_worker-table` (`INFO_ID`, `CASE-TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) VALUES
(0000002, 'Transport Worker', 'Financial Assistance (Cash Aid)', '', 'Emergency Cash Aid', '');

-- --------------------------------------------------------

--
-- Table structure for table `unemployed-table`
--

CREATE TABLE `unemployed-table` (
  `INFO_ID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `CASE_TYPE` varchar(128) NOT NULL,
  `ASSISTANCE` varchar(128) NOT NULL,
  `OTHER` varchar(128) NOT NULL,
  `AVAILABLE ASSISTANCE` varchar(128) NOT NULL,
  `OTHER (A.A.)` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unemployed-table`
--

INSERT INTO `unemployed-table` (`INFO_ID`, `CASE_TYPE`, `ASSISTANCE`, `OTHER`, `AVAILABLE ASSISTANCE`, `OTHER (A.A.)`) VALUES
(0000001, 'unemployed', 'Financial Assistance (Cash Aid)', '', 'N/A', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `information_list`
--
ALTER TABLE `information_list`
  ADD PRIMARY KEY (`NUMBER ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `information_list`
--
ALTER TABLE `information_list`
  MODIFY `NUMBER ID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
