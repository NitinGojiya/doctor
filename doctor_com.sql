
DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `d_name` text NOT NULL,
  `c_name` text NOT NULL,
  `d_username` varchar(250) NOT NULL,
  `c_username` varchar(250) NOT NULL,
  `mobile` int NOT NULL,
  `address` varchar(500) NOT NULL,
  `type` text NOT NULL,
  `di` text NOT NULL,
  `status` text NOT NULL,
  UNIQUE KEY `id` (`id`)
);



INSERT INTO `book` (`id`, `d_name`, `c_name`, `d_username`, `c_username`, `mobile`, `address`, `type`, `di`, `status`) VALUES
(17, 'uday', 'nitin ahir', 'uday@', '123@', 5656656, 'dwarka', 'buffalo', 'primary', 'visited'),
(19, '', 'nitin ahir', 'uday@', '123@', 5656656, 'surat', 'buffalo', 'extra', 'pending'),
(18, 'uday', 'nitin ahir', 'uday@', '123@', 5656656, 'dwarka', 'buffalo', 'extra', 'visited');



DROP TABLE IF EXISTS `user_customer`;
CREATE TABLE IF NOT EXISTS `user_customer` (
  `name` text NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `city` text NOT NULL,
  `profile_name` varchar(400) NOT NULL,
  UNIQUE KEY `username` (`username`)
);


INSERT INTO `user_customer` (`name`, `username`, `password`, `city`, `profile_name`) VALUES
('niti', 'nitin@', '123', 'Jamnagar', 'profile_image/nitin@nitin.png'),
('POKETON', 'poketon@', '123', 'Jamnagar', 'profile_image/poketon@Screenshot 2024-01-16 202111.png'),
('aryan n', '123@', '123', 'Jamnagar', 'profile_image/123@uday.png'),
('nn12', '1234@', '123', 'Rajkot', 'profile_image/1234@uday.png'),
('vallabh gagliya', 'vallabh@', '123', 'Jamnagar', 'profile_image/vallabh@Dr.-Eric-Wood-ND.jpg');



DROP TABLE IF EXISTS `user_doctor`;
CREATE TABLE IF NOT EXISTS `user_doctor` (
  `d_name` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `e_year` int NOT NULL,
  `c_no` varchar(100) ,
  `city` text NOT NULL,
  `profile_name` varchar(400) NOT NULL,
  `charge` double NOT NULL,
  `work_r_no` text NOT NULL,
  UNIQUE KEY `username` (`username`)
) ;


INSERT INTO `user_doctor` (`d_name`, `username`, `password`, `e_year`, `c_no`, `city`, `profile_name`, `charge`, `work_r_no`) VALUES
('vallabh', 'vallabh@', '123', 3, '345678', 'Jamnagar', 'profile_image/vallabh@vallabh.png', 500, 'yes'),
('aryan', 'aryan@', '123', 2, '5567', 'Surat', 'profile_image/aryan@aryan.png', 500, 'yes'),
('uday', 'uday@', '1234', 89, '6786', 'Jamnagar', 'profile_image/uday@uday.png', 78, 'Yes'),
('nitin ahir', '1@', '123', 3, '345678', 'Jamnagar', 'profile_image/1@n.png', 0, ''),
('nitin', '2@', '123', 4, '456', 'Anand', 'profile_image/2@aryan.png', 0, ''),
('dinesh', '3@', '123', 2, '23445', 'Jamnagar', 'profile_image/3@vallabh.png', 0, ''),
('sahil', '4@', '123', 4, '4545', 'Rajkot', 'profile_image/4@Screenshot 2024-01-16 202111.png', 0, ''),
('kaushik', 'k@', '123', 6, '345678', 'Jamnagar', 'profile_image/k@1681388444818.jpeg', 0, ''),
('ramesh', 'ramesh@', '123', 7, '5676776', 'Mahesana', 'profile_image/ramesh@rrr.png', 0, ''),
('vaibhav', 'vaibhav@', '123', 5, '56788', 'Anand', 'profile_image/vaibhav@Screenshot 2024-02-07 144211.png', 0, '');



DROP TABLE IF EXISTS `user_medical`;
CREATE TABLE IF NOT EXISTS `user_medical` (
  `m_name` text ,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(400)  NOT NULL,
  `city` text NOT NULL,
  UNIQUE KEY `username` (`username`)
)  ;



INSERT INTO `user_medical` (`m_name`, `username`, `password`, `address`, `city`) VALUES
('kano', 'murlidhar@', '123', 'dwarka,jamnagar', 'Jamnagar');
COMMIT;


