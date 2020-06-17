-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 06:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gov2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(255) NOT NULL,
  `Activity` varchar(255) NOT NULL,
  `mainheading` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `Activity`, `mainheading`, `description`) VALUES
(1, 'Our Office', 'THE OFFICE OF THE STATE COMMISSIONER FOR PERSONS WITH DISABILITIES (SCPD): <br><br>', 'The office of the State Commissioner for Persons with Disabilities (SCPD) at the State level has been established as per Section 60 of the Rights of Persons with Disabilities Act, 2016.<br><br>\n\nIn exercise powers conferred under the sub Section (1) of the Section 79 of Rights of Persons with Disabilities Act, 2016 (Central Act No. 49 of 2016), Government of Telangana designated the Director, Welfare of Disabled & Senior Citizens, Telangana, Hyderabad, as State Commissioner for Persons with Disabilities for the purposes of the Act, to perform the functions as stipulated in Section-80 of the Rights of Persons with Disabilities Act, 2016'),
(2, 'Activities', 'hgfh', '<strong>(61)</strong> The Commissioner within the State shall:<br>\r\n   <strong>(a)</strong>   co-ordinate with the departments of the State Government for the programs and schemes for the benefit to persons with disabilities;<br>\r\n   <strong>(b)</strong>  monitor the utilization of funds disbursed by the State Government;<br>\r\n   <strong>(c)</strong>    take steps to safeguard the rights and facilities made available to persons with disabilities;<br>\r\n   <strong>(d)</strong>   submit reports to the State Government on the implementation of the Act at such intervals as that Government may prescribe and forward a copy thereof to the Chief Commissioner.<br>\r\n  <strong>(62)</strong> Without prejudice to the provisions of section 61, the Commissioner may of his own motion or on the application of any aggrieved person or otherwise look into complaints with respect to matters relating to -<br>\r\n   <strong>(a)</strong>  deprivation of rights of persons with disabilities;<br>\r\n   <strong>(b)</strong>  non-implementation of laws, rules, bye-laws, regulations, executive guidelines or    instructions made or issued by the appropriate Governments and the local authorities for the welfare and protection of rights of persons with disabilities and take up the matter with the appropriate authorities.<br>\r\n \r\n   <strong>(63). (1)</strong> The State Commissioners shall, for the purpose of discharging their functions under this Act, have the same powers as are vested in a court under the Code of Civil Procedure, 1908 while trying a suit, in respect of the following matters, namely :-<br>\r\n   <strong>(a)</strong>   Summoning and enforcing the attendance of witnesses;<br>\r\n   <strong>(b)</strong>   Requiring the discovery and production of any document;<br>\r\n   <strong>(c)</strong>    Requisitioning any public record or copy thereof from any court or office;<br>\r\n   <strong>(d)</strong>   Receiving evidence on affidavits; and<br>\r\n   <strong>(e)</strong>    Issuing commissions for the examination of witnesses or documents.<br>\r\n\r\n  <strong>(2)</strong> Every proceeding before the State Commissioners shall be a judicial proceeding within the meaning of sections 193 and 228 of the Indian Penal Code and the State Commissioner, the competent authority, shall be deemed to be a civil court for the purposes of section 195 and Chapter XXVI of the Code of Criminal Procedure, 1973.<br>\r\n\r\n <strong>(65).(1)</strong>  The commissioner shall prepare in such form and at such time for each financial year as may be prescribed by the State Government an annual report giving a full account of his activities during the previous financial year and forward a copy thereof to the State Government.<br>\r\n'),
(3, 'Information Under RTI', 'THE OFFICE OF THE STATE COMMISSIONER FOR PERSONS WITH DISABILITIES (SCPD) IN ACTION:', 'This quasi-judiciary office therefore has to point out the violation of the rights by different agencies, so that what the government seeks to achieve through pro-people steps of a democratically elected government are not negated by acts of omission and commission of bureaucrats at different levels. It also has to monitor that the benefits go to the right persons. Often the State Commissioner has to take suomotu cognizance of the violation and issue notices to the erring parties.The SCPD also takes steps to increase awareness among stakeholders and service providers which helps in implementation of the Act.<br><br>\nThe area of operation extends to the whole of the State of Telangana. The achievements of the office of the SCPD are in ensuring that  the Government Depts. and other agencies implement the mandate of the Act. The office of the SCPD monitors and makes efforts to prevent violation of rights of PwDs by giving directions.'),
(4, 'Achievements', 'Coming Soon', 'Coming Soon..');

-- --------------------------------------------------------

--
-- Table structure for table `active_guests`
--

CREATE TABLE `active_guests` (
  `ip` varchar(10) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_guests`
--

INSERT INTO `active_guests` (`ip`, `timestamp`) VALUES
('14.141.244', 1544530626),
('14.141.244', 1544530632),
('14.141.244', 1544530625),
('14.141.244', 1544530464),
('14.141.244', 1544530461);

-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

CREATE TABLE `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` int(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `timestamp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banned_users`
--

CREATE TABLE `banned_users` (
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `complaints_comments`
--

CREATE TABLE `complaints_comments` (
  `id` int(11) NOT NULL,
  `unid` int(11) NOT NULL,
  `forward_type` tinyint(4) NOT NULL,
  `forward_to` varchar(35) NOT NULL,
  `reasons` text NOT NULL,
  `department_name` varchar(55) NOT NULL,
  `other_reasons` text NOT NULL,
  `username` varchar(35) NOT NULL,
  `timestamp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints_comments`
--

INSERT INTO `complaints_comments` (`id`, `unid`, `forward_type`, `forward_to`, `reasons`, `department_name`, `other_reasons`, `username`, `timestamp`) VALUES
(1, 123477, 1, '1', 'Test01', '', '', 'admin', '1539090106'),
(2, 123477, 1, '1', 'Test02', '', '', 'wdscadb', '1539090654'),
(3, 123477, 1, '1', 'Test03', '', '', 'admin', '1539090834'),
(4, 123477, 1, '1', 'Test04', '', '', 'wdscadb', '1539091104'),
(5, 123477, 1, '1', 'Test05', '', '', 'admin', '1539091120'),
(6, 123475, 2, '', 'Test - O - 02', '', '', 'admin', '1539091454'),
(7, 123475, 2, '', 'Test - O -022', '', '', 'admin', '1539091710'),
(8, 123474, 1, '1', 'Check this Issue', '', '', 'admin', '1539151066'),
(9, 123474, 1, '1', 'Issue Resolved', '', '', 'wdscadb', '1539151319'),
(10, 123474, 1, '1', 'Issue Closed', '', '', 'admin', '1539151365'),
(11, 123473, 1, '1', 'Test-05', '', '', 'admin', '1539758553'),
(12, 123473, 1, '1', 'test-05-reply', '', '', 'wdscadb', '1539758638'),
(13, 123473, 1, '1', 'test-05-close', '', '', 'admin', '1539758740'),
(14, 11817124, 1, '1', 'Test Adb1', '', '', 'admin', '1540624287'),
(15, 11817124, 1, '1', 'Test Adb', '', '', 'wdscadb', '1540624775'),
(16, 11817124, 1, '1', 'Test Adb22', '', '', 'admin', '1540624800'),
(17, 11817124, 1, '1', 'Test4', '', '', 'wdscadb', '1540624819'),
(18, 11817124, 1, '1', 'Test5', '', '', 'admin', '1540624835'),
(19, 118184, 1, '1', 'test11111', '', '', 'admin', '1540881437'),
(20, 118184, 1, '1', 'test22222', '', '', 'wdscadb', '1540881486'),
(21, 118184, 1, '1', 'test33333', '', '', 'admin', '1540881523');

-- --------------------------------------------------------

--
-- Table structure for table `complaints_form`
--

CREATE TABLE `complaints_form` (
  `id` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `unid` varchar(15) NOT NULL,
  `name` varchar(35) NOT NULL,
  `age` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `perm_address` tinytext NOT NULL,
  `correspondence_address` tinytext NOT NULL,
  `district` int(11) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `disability_type` int(11) NOT NULL,
  `disability_certificate_no` varchar(15) NOT NULL,
  `disability_percentage` varchar(10) NOT NULL,
  `disability_proof` tinytext NOT NULL,
  `issuing_authority` tinytext NOT NULL,
  `valid_upto` varchar(20) NOT NULL,
  `complaint_description` text NOT NULL,
  `supplementary_proof` text NOT NULL,
  `respondent_name` varchar(35) NOT NULL,
  `respondent_address` tinytext NOT NULL,
  `status` tinyint(2) NOT NULL,
  `forward_type` tinyint(2) NOT NULL,
  `forward_to` varchar(35) NOT NULL,
  `reasons` text NOT NULL,
  `department_name` varchar(55) NOT NULL,
  `other_reasons` text NOT NULL,
  `timestamp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints_form`
--

INSERT INTO `complaints_form` (`id`, `date`, `unid`, `name`, `age`, `sex`, `perm_address`, `correspondence_address`, `district`, `contact_no`, `disability_type`, `disability_certificate_no`, `disability_percentage`, `disability_proof`, `issuing_authority`, `valid_upto`, `complaint_description`, `supplementary_proof`, `respondent_name`, `respondent_address`, `status`, `forward_type`, `forward_to`, `reasons`, `department_name`, `other_reasons`, `timestamp`) VALUES
(1, '', '123456', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 1, 0, '', '', '', '', '1538987095'),
(2, '', '123457', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 1, 0, '', '', '', '', '1538987095'),
(3, '', '123458', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 1, 0, '', '', '', '', '1538987095'),
(4, '', '123459', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 1, 0, '', '', '', '', '1538987095'),
(5, '', '123471', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 1, 0, '', '', '', '', '1538987095'),
(6, '', '123472', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 3, 2, '', '', 'ite', 'test', '1538987095'),
(7, '', '123473', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 8, 1, '1', 'test-05-close', '', '', '1538987095'),
(8, '', '123474', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 8, 1, '1', 'Issue Closed', '', '', '1538987095'),
(9, '', '123475', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 7, 2, '', 'Test - O -022', 'Excise', 'Test - O - 01', '1538987095'),
(10, '', '123477', 'Suresh', '45', 'MALE', 'ASFBIUbef\r\nanfuihEF\r\nLKNFOIWENF\r\nWDNWEIUFH\r\nFJWEOIHF\r\nAJHFIUQgefu', 'asfhiuqhgefiugqfiu\r\nfbhwevf\r\njdbiugwef\r\njdbvuywge', 1, '2147483647', 1, '1215', '50', '', 'State Govt', '25-05-2025', 'idfhouwef\r\njfoiwehjf\r\n4jbfiuwbef\r\nudhgiwugf\r\nafhiuwefiuw\r\nnfiuwhgefiuw\r\nsiuwgf', '', 'Naresh', 'bdfiuwehfb\r\nofihwuhgw\r\nkjdbiuwbg\r\njhdvbywvfgiuwe\r\nkjdvhiuwhgefu\r\nkjdviuwgf\r\njsdhvgvw', 8, 1, '1', 'Test05', '', '', '1538987095'),
(15, '27-10-2018', '011818289', 'Test Adb', '', '1', '', '', 1, '', 0, '', '', '4daf75950e90779b25f1cb701c3602aa.jpg', '', '', '', 'eb223ff8e798bb3f3f5946f503a6fd8e.jpg,03c56d4176608a81b7ebe9506d63677e.jpg', '', '', 8, 1, '1', 'Test5', '', '', '1540624240'),
(16, '30-10-2018', '0118184', '', '', '', '', '', 1, '', 0, '', '', '53f30f86584976d1d97d6cbcb1e8d686.jpg', '', '', '', '5ba8816073156e2d17675d7a23abeadf.jpg', '', '', 8, 1, '1', 'test33333', '', '', '1540881389'),
(17, '31-10-2018', '11181461', '', '', '', '', '', 11, '', 0, '', '', '05a5b098dbdaa19d1e63d807325ba644.pdf', '', '', '', '0c3f315629257301ecc2cfc45e92f4a3.pdf', '', '', 1, 0, '', '', '', '', '1540969264');

-- --------------------------------------------------------

--
-- Table structure for table `createemployees`
--

CREATE TABLE `createemployees` (
  `id` int(23) NOT NULL,
  `name` varchar(33) NOT NULL,
  `mobilenumber` varchar(33) NOT NULL,
  `aadhar` int(16) NOT NULL,
  `emailid` varchar(33) NOT NULL,
  `employeeid` varchar(33) NOT NULL,
  `employee_district` varchar(33) NOT NULL,
  `address` longtext NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `timstamp` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disabilities`
--

CREATE TABLE `disabilities` (
  `id` int(11) NOT NULL,
  `disability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disabilities`
--

INSERT INTO `disabilities` (`id`, `disability`) VALUES
(1, 'Blindness'),
(2, 'Low-Vision'),
(3, 'Leprosy Cured Persons'),
(4, 'Hearing Impaired'),
(5, 'Locomotor Disability'),
(6, 'Dwarfism'),
(7, 'Intellectual Disability'),
(8, 'Mental Illness'),
(9, 'Autism Spectrum Disorder'),
(10, 'Cerebral Palsy'),
(11, 'Muscular Dystrophy'),
(12, 'Chronic Neurological conditions'),
(13, 'Specific Learning Disabilities'),
(14, 'Multiple Sclerosis'),
(15, 'Speech and Language disability'),
(16, 'Thalassemia'),
(17, 'Hemophilia'),
(18, 'Sickle Cell disease'),
(19, 'Multiple Disabilities including deafblindness'),
(20, 'Acid Attack Victim'),
(21, 'Parkinson''s Disease');

-- --------------------------------------------------------

--
-- Table structure for table `gallerytable`
--

CREATE TABLE `gallerytable` (
  `id` int(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallerytable`
--

INSERT INTO `gallerytable` (`id`, `image_name`, `image_path`) VALUES
(1, '1.jpg', 'images/gallery/1.jpg'),
(2, '2.jpg', 'images/gallery/2.jpg'),
(3, '3.jpg', 'images/gallery/3.jpg'),
(4, '4.jpg', 'images/gallery/4.jpg'),
(5, '5.jpg', 'images/gallery/5.jpg'),
(6, '6.jpg', 'images/gallery/6.jpg'),
(7, '7.jpg', 'images/gallery/7.jpg'),
(8, '8.jpg', 'images/gallery/8.jpg'),
(9, '9.jpg', 'images/gallery/9.jpg'),
(10, '10.jpg', 'images/gallery/10.jpg'),
(11, '11.jpg', 'images/gallery/11.jpg'),
(12, '12.jpg', 'images/gallery/12.jpg'),
(13, '13.jpg', 'images/gallery/13.jpg'),
(14, '14.jpg', 'images/gallery/14.jpg'),
(15, '15.jpg', 'images/gallery/15.jpg'),
(16, '16.jpg', 'images/gallery/16.jpg'),
(17, '17.jpg', 'images/gallery/17.jpg'),
(18, '18.jpg', 'images/gallery/18.jpg'),
(19, '19.jpg', 'images/gallery/19.jpg'),
(20, '20.jpg', 'images/gallery/20.jpg'),
(21, '21.jpg', 'images/gallery/21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `global_districts`
--

CREATE TABLE `global_districts` (
  `uid` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `region` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global_districts`
--

INSERT INTO `global_districts` (`uid`, `district`, `region`) VALUES
(1, 'ADILABAD                      ', 'T'),
(2, 'MANCHERIAL                    ', 'T'),
(3, 'NIRMAL                        ', 'T'),
(4, 'KUMURAM BHEEM (ASIFABAD)      ', 'T'),
(5, 'KARIMNAGAR                    ', 'T'),
(6, 'JAGITHYAL                     ', 'T'),
(7, 'PEDDAPALLI                    ', 'T'),
(8, 'RAJANNA SIRCILLA              ', 'T'),
(9, 'NIZAMABAD                     ', 'T'),
(10, 'KAMAREDDY                     ', 'T'),
(11, 'WARANGAL URBAN                ', 'T'),
(12, 'WARANGAL RURAL                ', 'T'),
(13, 'JAYASHANKAR                   ', 'T'),
(14, 'JANGAON                       ', 'T'),
(15, 'MAHABUBABAD                   ', 'T'),
(16, 'KHAMMAM                       ', 'T'),
(17, 'BHADRADRI KOTHAGUDEM          ', 'T'),
(18, 'MEDAK                         ', 'T'),
(19, 'SANGAREDDY                    ', 'T'),
(20, 'SIDDIPET                      ', 'T'),
(21, 'MAHABUBNAGAR                  ', 'T'),
(22, 'WANAPARTHY                    ', 'T'),
(23, 'NAGARKURNOOL                  ', 'T'),
(24, 'JOGULAMBA GADWAL              ', 'T'),
(25, 'NALGONDA                      ', 'T'),
(26, 'SURYAPET                      ', 'T'),
(27, 'YADADRI BHUVANAGIRI           ', 'T'),
(28, 'VIKARABAD                     ', 'T'),
(29, 'MEDCHAL-MALKAJGIRI            ', 'T'),
(30, 'RANGA REDDY                   ', 'T'),
(31, 'HYDERABAD                     ', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `headerfooter`
--

CREATE TABLE `headerfooter` (
  `id` int(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `text4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `text5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headerfooter`
--

INSERT INTO `headerfooter` (`id`, `image1`, `text1`, `image2`, `image3`, `text3`, `image4`, `text4`, `image5`, `text5`) VALUES
(1, 'kcr.jpg', 'Sri K Chandrashekar Rao Garu,Hon''ble Chief Minister Telangana State', 'logo.png', 'emblem.png', 'Office of the State Commissioner For Persons with Disabilities', 'ada.png', 'Government of Telangana', 'minister.jpg', 'Shri Koppula Eshwar Garu \r\nMinister for SCD,BC,Minority,Disabled&Senior citizen welfare,\r\nTelangana state');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `userlevel` tinyint(1) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `hash_generated` int(11) NOT NULL,
  `eid` varchar(40) NOT NULL,
  `city` varchar(55) NOT NULL,
  `branch` varchar(44) NOT NULL,
  `employee_district` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `userid`, `userlevel`, `mobile`, `email`, `timestamp`, `valid`, `name`, `hash`, `hash_generated`, `eid`, `city`, `branch`, `employee_district`) VALUES
('admin', 'admin@uct', 'f7853dc173783915a19ed5520a75005f', 9, '', '', 1540962087, 0, 'admin', 'cdb0ceccca08c2a05064a11de292dd1f', 1540881190, '', '', '', ''),
('arun', 'arun', '404561cc1a00ec4e7b61f57e95a4cfdf', 9, '9827198271', 'arun@entrolab.com', 1517551834, 1, 'Arun', 'fc58467904f91bebc47830bd21161d29', 1517294016, '212121', 'cochin', 'Tiruvanathapuram', ''),
('wdscadb', 'wdscadb', '7e819c3f5297f3029003dd8476c40831', 6, '7288877887', 'deop_adilabad@gmail.com', 1540981780, 1, 'DWO Adilabad', '65420f1004ee04cc72522385ce638eaa', 1540896770, '', '', '', '1'),
('vamsi', 'vamsi', 'b7afb03d1f36e3e0012a2b00088e95ab', 9, '', '', 1517554254, 1, 'vamsi', '675b706141a032aee63e9e5160f6d418', 1517300848, '', '', '', ''),
('dwobhadradri', 'dwobhadradri', '', 6, '', '', 0, 1, 'DWO BHADRADRI', '', 0, '', '', '', '17'),
('wdschyd', 'wdschyd', 'b3c4cac1b42737f8f230dea99899ce2b', 6, '', '', 1538114480, 1, 'DWO HYDERABAD', '410da86969e767430d41fce8326c5b79', 1537871681, '', '', '', '31'),
('dwojagithyal', 'dwojagithyal', '', 6, '', '', 0, 1, 'DWO JAGITHYAL', '', 0, '', '', '', '6'),
('dwojangaon', 'dwojangaon', '', 6, '', '', 0, 1, 'DWO JANGAON', '', 0, '', '', '', '14'),
('dwojayashankar', 'dwojayashankar', '', 6, '', '', 0, 1, 'DWO JAYASHANKAR', '', 0, '', '', '', '13'),
('dwojogulambagadwal', 'dwojogulambagadwal', '', 6, '', '', 0, 1, 'DWO JOGULAMBA GADWAL', '', 0, '', '', '', '24'),
('dwokamareddy', 'dwokamareddy', '', 6, '', '', 0, 1, 'DWO KAMAREDDY', '', 0, '', '', '', '10'),
('dwokarimnagar', 'dwokarimnagar', '', 6, '', '', 0, 1, 'DWO KARIMNAGAR', '', 0, '', '', '', '5'),
('dwokhammam', 'dwokhammam', 'ae39cc616ae678ecabe9f71c1c36c83f', 6, '', '', 1537947033, 1, 'DWO KHAMMAM', 'dd4e103bd83364242e5b56af2ec07f93', 1537943450, '', '', '', '16'),
('dwokumarambheem', 'dwokumarambheem', '', 6, '', '', 0, 1, 'DWO KUMARAM BHEEM', '', 0, '', '', '', '4'),
('dwomahabubabad', 'dwomahabubabad', '', 6, '', '', 0, 1, 'DWO MAHABUBABAD', '', 0, '', '', '', '15'),
('dwomahabubnagar', 'dwomahabubnagar', '', 6, '', '', 0, 1, 'DWO MAHABUBNAGAR', '', 0, '', '', '', '21'),
('test@m', 'test@m', '7772ce1e8b59a32ecb9af7d8d67248a9', 6, '7288877887', 'avinash@entrolabs.com', 1539758377, 1, 'Test Login', 'f68cf436718648eeba6ae1b974e87131', 1539673753, '', '', '', '2'),
('dwomedak', 'dwomedak', '', 6, '', '', 0, 1, 'DWO MEDAK', '', 0, '', '', '', '18'),
('dwomedchal', 'dwomedchal', '', 6, '', '', 0, 1, 'DWO MEDCHAL-MALKAJGIRI', '', 0, '', '', '', '29'),
('dwonagarkurnool', 'dwonagarkurnool', '', 6, '', '', 0, 1, 'DWO NAGARKURNOOL', '', 0, '', '', '', '23'),
('dwonalgonda', 'dwonalgonda', '', 6, '', '', 0, 1, 'DWO NALGONDA', '', 0, '', '', '', '25'),
('dwonirmal', 'dwonirmal', '', 6, '', '', 0, 1, 'DWO NIRMAL', '', 0, '', '', '', '3'),
('dwonizamabad', 'dwonizamabad', '', 6, '', '', 0, 1, 'DWO NIZAMABAD', '', 0, '', '', '', '9'),
('dwopeddapalli', 'dwopeddapalli', '', 6, '', '', 0, 1, 'DWO PEDDAPALLI', '', 0, '', '', '', '7'),
('dworajannasircilla', 'dworajannasircilla', '', 6, '', '', 0, 1, 'DWO RAJANNA SIRCILLA', '', 0, '', '', '', '8'),
('wdscrrd', 'wdscrrd', 'f0aabc2e855cfd5f9b67c6798cbd8c33', 6, '', '', 1543912992, 1, 'DWO RANGAREDDY', 'cb882e1576c1944147a47a0ff8db4b7e', 1543912676, '', '', '', '30'),
('dwosangareddy', 'dwosangareddy', '', 6, '', '', 0, 1, 'DWO SANGAREDDY', '', 0, '', '', '', '19'),
('dwosiddipet', 'dwosiddipet', '', 6, '', '', 0, 1, 'DWO SIDDIPET', '', 0, '', '', '', '20'),
('dwosuryapet', 'dwosuryapet', '', 6, '', '', 0, 1, 'DWO SURYAPET', '', 0, '', '', '', '26'),
('dwovikarabad', 'dwovikarabad', '', 6, '', '', 0, 1, 'DWO VIKARABAD', '', 0, '', '', '', '28'),
('dwowanaparthy', 'dwowanaparthy', '', 6, '', '', 0, 1, 'DWO WANAPARTHY', '', 0, '', '', '', '22'),
('dwowarangalrural', 'dwowarangalrural', 'e3c8ceb9a07599349303c2b9418eb293', 6, '', '', 1536321714, 1, 'DWO WARANGAL RURAL', 'f8fd9a23da463391fd32fbb495e57780', 1536317563, '', '', '', '12'),
('wdscwglu', 'wdscwglu', '6aa8ac0778df8d9ea849e56f5586f153', 6, '', '', 1537964869, 1, 'DWO WARANGAL URBAN', '8970415ca60ce57a79172c79e34df3ba', 1537964856, '', '', '', '11'),
('dwoyadadribhuvanagiri', 'dwoyadadribhuvanagiri', '', 6, '', '', 0, 1, 'DWO YADADRI BHUVANAGIRI', '', 0, '', '', '', '27'),
('voadb', 'voadb', 'c998ab0f1defb594889114e8a6106490', 5, '', '', 1535459210, 1, 'RDO ADILABAD', 'c302e337082ed327f96b090a1cc84a3f', 1535459163, '', '', '', '1'),
('rdonizamabad', 'rdonizamabad', '', 5, '', '', 1535459613, 1, 'RDO NIZAMABAD', '', 1535459613, '', '', '', '9'),
('rdomancherial', 'rdomancherial', '', 5, '', '', 1536218285, 1, 'RDO MANCHERIAL', '', 1536218285, '', '', '', '2'),
('rdonirmal', 'rdonirmal', '', 5, '', '', 1536218285, 1, 'RDO NIRMAL', '', 1536218285, '', '', '', '3'),
('rdokumarambheem', 'rdokumarambheem', '', 5, '', '', 1536218285, 1, 'RDO KUMARAM BHEEM', '', 1536218285, '', '', '', '4'),
('rdokarimnagar', 'rdokarimnagar', '', 5, '', '', 1536218488, 1, 'RDO KARIMNAGAR', '', 1536218488, '', '', '', '5'),
('rdojagithyal', 'rdojagithyal', '', 5, '', '', 1536218488, 1, 'RDO JAGITHYAL', '', 1536218488, '', '', '', '6'),
('rdopeddapalli', 'rdopeddapalli', '', 5, '', '', 1536218488, 1, 'RDO PEDDAPALLI', '', 1536218488, '', '', '', '7'),
('rdorajannasircilla', 'rdorajannasircilla', '', 5, '', '', 1536220327, 1, 'RDO RAJANNA SIRCILLA', '', 1536220327, '', '', '', '8'),
('rdokamareddy', 'rdokamareddy', '', 5, '', '', 1536220327, 1, 'RDO KAMAREDDY', '', 1536220327, '', '', '', '10'),
('rdowarangalurban', 'rdowarangalurban', '', 5, '', '', 1536220327, 1, 'RDO WARANGAL URBAN', '', 1536220327, '', '', '', '11'),
('vowglu', 'vowglu', '', 5, '', '', 1536220327, 1, 'RDO WARANGAL RURAL', '', 1536220327, '', '', '', '12'),
('rdojayashankar', 'rdojayashankar', '', 5, '', '', 1536220327, 1, 'RDO JAYASHANKAR', '', 1536220327, '', '', '', '13'),
('rdojangaon', 'rdojangaon', '', 5, '', '', 1536220327, 1, 'RDO JANGAON', '', 1536220327, '', '', '', '14'),
('rdomahabubabad', 'rdomahabubabad', '', 5, '', '', 1536220805, 1, 'RDO MAHABUBABAD', '', 1536220805, '', '', '', '15'),
('rdokhammam', 'rdokhammam', '', 5, '', '', 1536220805, 1, 'RDO KHAMMAM', '', 1536220805, '', '', '', '16'),
('rdobhadradri', 'rdobhadradri', '', 5, '', '', 1536220805, 1, 'RDO BHADRADRI', '', 1536220805, '', '', '', '17'),
('rdomedak', 'rdomedak', '', 5, '', '', 1536220805, 1, 'RDO MEDAK', '', 1536220805, '', '', '', '18'),
('rdosangareddy', 'rdosangareddy', '', 5, '', '', 1536220805, 1, 'RDO SANGAREDDY', '', 1536220805, '', '', '', '19'),
('rdosiddipet', 'rdosiddipet', '', 5, '', '', 1536221109, 1, 'RDO SIDDIPET', '', 1536221109, '', '', '', '20'),
('rdomahabubnagar', 'rdomahabubnagar', '', 5, '', '', 1536221109, 1, 'RDO MAHABUBNAGAR', '', 1536221109, '', '', '', '21'),
('rdowanaparthy', 'rdowanaparthy', '', 5, '', '', 1536221109, 1, 'RDO WANAPARTHY', '', 1536221109, '', '', '', '22'),
('rdonagarkurnool', 'rdonagarkurnool', '', 5, '', '', 1536221415, 1, 'RDO NAGARKURNOOL', '', 1536221415, '', '', '', '23'),
('rdojogulambagadwal', 'rdojogulambagadwal', '', 5, '', '', 1536221415, 1, 'RDO JOGULAMBA GADWAL', '', 1536221415, '', '', '', '24'),
('rdonalgonda', 'rdonalgonda', '', 5, '', '', 1536221415, 1, 'RDO NALGONDA', '', 1536221415, '', '', '', '25'),
('rdosuryapet', 'rdosuryapet', '', 5, '', '', 1536221415, 1, 'RDO SURYAPET', '', 1536221624, '', '', '', '26'),
('rdoyadadribhuvanagiri', 'rdoyadadribhuvanagiri', '', 5, '', '', 1536222015, 1, 'RDO YADADRI BHUVANAGIRI', '', 1536222015, '', '', '', '27'),
('rdovikarabad', 'rdovikarabad', '', 5, '', '', 1536222015, 1, 'RDO VIKARABAD', '', 1536222015, '', '', '', '28'),
('rdomedchal', 'rdomedchal', '', 5, '', '', 1536222015, 1, 'RDO MEDCHAL', '', 1536222015, '', '', '', '29'),
('vorrd', 'vorrd', '', 5, '', '', 1536222216, 1, 'RDO RANGA REDDY', '', 1536222216, '', '', '', '30'),
('vohyd', 'vohyd', '', 5, '', '', 1536222271, 1, 'RDO HYDERABAD', '', 1536222271, '', '', '', '31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banned_users`
--
ALTER TABLE `banned_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `complaints_comments`
--
ALTER TABLE `complaints_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints_form`
--
ALTER TABLE `complaints_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createemployees`
--
ALTER TABLE `createemployees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employeeid` (`employeeid`);

--
-- Indexes for table `disabilities`
--
ALTER TABLE `disabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerytable`
--
ALTER TABLE `gallerytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_districts`
--
ALTER TABLE `global_districts`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `headerfooter`
--
ALTER TABLE `headerfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `complaints_comments`
--
ALTER TABLE `complaints_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `complaints_form`
--
ALTER TABLE `complaints_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `createemployees`
--
ALTER TABLE `createemployees`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disabilities`
--
ALTER TABLE `disabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `gallerytable`
--
ALTER TABLE `gallerytable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `global_districts`
--
ALTER TABLE `global_districts`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `headerfooter`
--
ALTER TABLE `headerfooter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
