
--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `role_id` tinyint NOT NULL DEFAULT '2',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL
);

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `is_active`, `role_id`, `created`, `modified`) VALUES
(1, 'Aryan', 'Kumar', 'kumar.aryan@example.com', 'password', 1, 2, '2025-05-19 06:47:05', '2025-05-19 06:47:05'),
(2, 'Ryan', 'Burch', 'ryan@example.com', '881976d53c624f1f1b3367ee0f121ce08e346fbccf311ac813b0a0f865e08968', 1, 2, '2025-05-19 07:01:28', '2025-05-19 07:01:28'),
(3, 'Yogesh', 'Kumar', 'kumar.yogesh@example.com', '881976d53c624f1f1b3367ee0f121ce08e346fbccf311ac813b0a0f865e08968', 1, 2, '2025-05-19 07:25:21', '2025-05-19 07:25:21'),
(4, 'Armando', 'Nichols', 'gabozesu@mailinator.com', '9faf4c0169ffc40e98a40842d7d3b760a41dd28f251171c6a739683825ddb20a', 1, 2, '2025-05-19 07:45:07', '2025-05-19 07:45:07'),
(5, 'Wang', 'Pickett', 'rowspin@mailinator.com', '881976d53c624f1f1b3367ee0f121ce08e346fbccf311ac813b0a0f865e08968', 1, 2, '2025-05-19 07:45:34', '2025-05-19 07:45:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

