-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 07:57 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diario`
--

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `diary_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`id`, `date`, `username`, `diary_data`) VALUES
(6, '2018-04-11', 'Swapnil Tiwari', 'hbjbjhbjhhd\r\nsdfssdnjksdjsd\r\nsdfjksnfdksnjfksdnkfsjdknfjksdndfkjsndjksfksfndkjksnkfsdnkjdfnkj snkj dfnjkdsnkfnskdnfkjnsdjknfskdnfjsk'),
(7, '2018-04-11', 'Swapnil Tiwari', 'Hello whats up'),
(8, '2018-04-17', 'Swapnil Tiwari', 'swapnil what&#039;s		'),
(9, '2018-04-03', 'Swapnil Tiwari', 'Mechandise&#039;s Merchandise			'),
(10, '0000-00-00', 'Swapnil Tiwari', '						zcxzxczxczczxczxczx'),
(11, '2018-04-02', 'Swapnil Tiwari', '// C program to search and replace\r\n// all occurrences of a word with\r\n// other word.\r\n#include &lt;stdio.h&gt;\r\n#include &lt;string.h&gt;\r\n#include &lt;stdlib.h&gt;\r\n \r\n// Function to replace a string with another\r\n// string\r\nchar *replaceWord(const char *s, const char *oldW,\r\n                                 const char *newW)\r\n{\r\n    char *result;\r\n    int i, cnt = 0;\r\n    int newWlen = strlen(newW);\r\n    int oldWlen = strlen(oldW);\r\n \r\n    // Counting the number of times old word\r\n    // occur in the string\r\n    for (i = 0; s[i] != &#039;\0&#039;; i++)\r\n    {\r\n        if (strstr(&amp;s[i], oldW) == &amp;s[i])\r\n        {\r\n            cnt++;\r\n \r\n            // Jumping to index after the old word.\r\n            i += oldWlen - 1;\r\n        }\r\n    }\r\n \r\n    // Making new string of enough length\r\n    result = (char *)malloc(i + cnt * (newWlen - oldWlen) + 1);\r\n \r\n    i = 0;\r\n    while (*s)\r\n    {\r\n        // compare the substring with the result\r\n        if (strstr(s, oldW) == s)\r\n        {\r\n            strcpy(&amp;result[i], newW);\r\n            i += newWlen;\r\n            s += oldWlen;\r\n        }\r\n        else\r\n            result[i++] = *s++;\r\n    }\r\n \r\n    result[i] = &#039;\0&#039;;\r\n    return result;\r\n}\r\n \r\n// Driver Program\r\nint main()\r\n{\r\n    char str[] = &quot;xxforxx&quot;;\r\n    char c[] = &quot;xx&quot;;\r\n    char d[] = &quot;Geeks&quot;;\r\n \r\n    char *result = NULL;\r\n \r\n    // oldW string\r\n    printf(&quot;Old string: %sn&quot;, str);\r\n \r\n    result = replaceWord(str, c, d);\r\n    printf(&quot;New String: %sn&quot;, result);\r\n \r\n    free(result);\r\n    return 0;\r\n}'),
(12, '2018-04-03', 'Urvashi Upadhyay', 'I am writing this to tell my story\r\nTo everyone\r\nYou&#039;re part of it	'),
(13, '0000-00-00', 'Urvashi Upadhyay', 'fdgdgd4\r\nfdgdgfd\r\n\r\ndfgdfgdfgdf'),
(14, '2018-04-10', 'Dawn', 'Hey wolrd			');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `username`, `email`, `title`, `note`) VALUES
(1, 'Dawn', 'swapnil-tiwari@outlook.com', 'Hey', 'This check note'),
(2, 'Dawn', 'swapnil-tiwari@outlook.com', 'My second note', 'My second note is this'),
(3, 'Dawn', 'swapnil-tiwari@outlook.com', 'Swapnil', 'hey Check me'),
(5, 'Dawn', 'swapnil-tiwari@outlook.com', 'Swapnil', '123456'),
(6, 'Dawn', 'swapnil-tiwari@outlook.com', 'hello', 'check'),
(12, 'Dawn', 'swapnil-tiwari@outlook.com', 'hey', 'teset'),
(13, 'Dawn', 'swapnil-tiwari@outlook.com', 'hey', 'teset'),
(14, 'Dawn', 'swapnil-tiwari@outlook.com', 'This is to test', 'hello'),
(15, 'Dawn', 'swapnil-tiwari@outlook.com', 'Heya', 'this is to test'),
(25, 'Dawn', 'swapnil-tiwari@outlook.com', 'My note', 'hello'),
(26, 'Dawn', 'swapnil-tiwari@outlook.com', 'My note', 'hello'),
(28, 'Ehraz ', 'ehrazhasan40@gmail.com', 'Oliver', 'I am queen'),
(29, 'Ehraz ', 'ehrazhasan40@gmail.com', 'malcom', 'merlyn'),
(30, 'Ehraz ', 'ehrazhasan40@gmail.com', '', ''),
(31, 'Ehraz ', 'ehrazhasan40@gmail.com', 'Ehraz ', 'I am queen'),
(33, 'Urvashi Upadhyay', '', 'My morning routine', 'I am sleepy'),
(34, 'Urvashi Upadhyay', '', '', ''),
(35, 'Urvashi Upadhyay', '', '', 'check'),
(36, 'Urvashi Upadhyay', '', 'check', ''),
(37, 'Urvashi Upadhyay', '', 'My Answer', 'check this na'),
(38, 'Ehraz ', 'ehrazhasan40@gmail.com', 'Slade Wilson', 'Hey kid'),
(39, 'Hawsi Bhediya', 'madarchod@gaandu.com', 'My testicles ', 'Mere tate meri pehechan'),
(40, 'Hawsi Bhediya', 'madarchod@gaandu.com', '', ''),
(48, 'Ehraz ', 'ehrazhasan40@gmail.com', '', 'hey ther\r\nsfijsdifjl'),
(49, 'Ehraz ', 'ehrazhasan40@gmail.com', '', ''),
(50, 'Ehraz ', 'ehrazhasan40@gmail.com', '', ''),
(51, 'Ehraz ', 'ehrazhasan40@gmail.com', 'Ehraz Hasan', ''),
(52, 'Ehraz ', 'ehrazhasan40@gmail.com', 'Ehraz Hasan', ''),
(53, 'Swapnil Tiwari', 'swapnil_tiwari@outlook.com', 'Oliver', 'I am not the man,you think I am\r\n'),
(57, 'Swapnil Tiwari', 'swapnil_tiwari@outlook.com', 'My answer to all the questions', 'I do not know'),
(58, 'Swapnil Tiwari', 'swapnil_tiwari@outlook.com', 'The Immpossible&#039;s', 'Hey, I am gonna tell you something impossible, you ain&#039;t '),
(63, 'Urvashi Upadhyay', 'urvashi.mailme@gmail.com', 'Hello', 'Swapnil&#039;s Key'),
(64, 'Urvashi Upadhyay', 'urvashi.mailme@gmail.com', 'Note testing', 'see if you get me there\r\n							');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `pass`) VALUES
('Swapnil', 'email', 'pass'),
('DawnMist', 'email', 'pass'),
('Dawn', 'swapnil-tiwari@outlook.com', '123456'),
('Ehraz ', 'ehrazhasan40@gmail.com', '123456789'),
('Urvashi Upadhyay', 'urvashi.mailme@gmail.com', '123456'),
('Hawsi Bhediya', 'madarchod@gaandu.com', 'susupotty'),
('Swapnil Tiwari', 'swapnil_tiwari@outlook.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
