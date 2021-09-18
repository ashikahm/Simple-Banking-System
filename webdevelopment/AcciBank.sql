CREATE TABLE `branch` (
  `branchId` int(11) NOT NULL,
  `branchNo` varchar(20) NOT NULL,
  `branchName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `branch` (`branchId`, `branchNo`, `branchName`) VALUES
(1, '100101', 'Mysore'),
(2, '100102', 'Bangalore'),
(3, '100103', 'Chitradurga');


CREATE TABLE `transaction` (
  `transactionId` int(11) NOT NULL,
  `action` varchar(30) NOT NULL,
  `credit` varchar(30) NOT NULL,
  `debit` varchar(30) NOT NULL,

  `other` varchar(50) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `transaction` (`transactionId`, `action`, `credit`, `debit`, `other`, `userId`, `date`) VALUES
(4, 'transfer', '', '200',  '12001122', 1, '2017-12-14 12:33:40'),
(5, 'transfer', '', '200', '10054777', 1, '2017-12-14 12:56:48'),
(6, 'transfer', '', '333',  '10054777', 1, '2017-12-14 12:57:20'),
(7, 'transfer', '', '222', '10054777', 1, '2017-12-14 12:58:19'),
(8, 'transfer', '', '333','10054777', 1, '2017-12-14 13:00:23'),
(16, 'withdraw', '', '100','23423', 1, '2017-12-15 08:31:59'),
(17, 'deposit', '1200', '', '234232', 1, '2017-12-15 08:32:17'),
(18, 'transfer', '', '467', '12001122', 1, '2017-12-17 06:44:48'),
(22, 'deposit', '1200', '', '32424', 2, '2017-12-17 06:56:29'),
(23, 'withdraw', '', '12',  '23423', 2, '2017-12-17 06:59:02'),
(24, 'deposit', '12', '', '21321', 2, '2017-12-17 06:59:20'),
(25, 'transfer', '', '1200',  '10054777', 1, '2017-12-17 07:01:37'),
(26, 'deposit', '600', '', '342342', 2, '2017-12-17 07:04:39'),
(27, 'withdraw', '', '1012',  '23423', 2, '2017-12-17 07:04:58');



CREATE TABLE `useraccounts` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` varchar(111) NOT NULL,
  `balance` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `accountNo` varchar(111) NOT NULL,
  `branch` varchar(111) NOT NULL,
  `accountType` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `useraccounts` (`id`, `email`, `password`, `name`, `balance`, `city`, `address`, `accountNo`, `branch`, `accountType`, `date`) VALUES
(1, 'abc@gmail.com', 'abc', 'ABC', '9800',  'Bangalore', 'Some where in Bangalore', '1005469', '1', 'Current', '2017-12-14 05:50:06'),
(2, 'akshay@gmail.com', 'akshay', 'Akshay', '15000',  'Bangalore', 'Some where in Bangalore', '10054777', '1', 'Saving', '2017-12-14 04:50:06'),
(6, 'abhishek@gmail.com', 'abhishek', 'Abhishek patil', '200000',  'Vijayapur', 'Karnataka',  '1513410739', '2', 'saving', '2017-12-16 07:52:40'),
(7, 'sindhu@gmail.com', 'sindhu', 'sindhu H M', '300000',  'Chitradurga', 'BVN Layout, Hosadurga', '1513410837', '3', 'current', '2017-12-16 07:54:18');



ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchId`);


  ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionId`);

  ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `branch`
  MODIFY `branchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

  ALTER TABLE `transaction`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

  ALTER TABLE `useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
