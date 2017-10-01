
--
-- Table structure for table `tbl_products`
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


 


-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_name`, `price`, `category`) VALUES
(1, 'Samsung Galaxy S7 Edge', '$600', 'Mobile Phone'),
(2, 'Google nexus', '$450', 'Mobile Phone'),
(3, 'Apple IPhone 6', '$630', 'Mobile Phone'),
(4, 'Sony Vio', '$1200', 'Laptop'),
(5, 'Samsung T.V', '$900', 'T.V'),
(6, 'Apple IPAD', '$710', 'Tablet'),
(7, 'MacBook Pro', '$1000', 'Laptop'),
(8, 'Dell Laptop', '$950', 'Laptop'),
(9, 'Canon EOS 700D DSLR Camera', '$550', 'Camera'),
(10, 'Nikon D7100 DSLR Camera ', '$670', 'Camera'),
(11, 'Nokia Lumia 930', '349', 'Mobile Phone'),
(12, 'HTC Phone', '123', 'Mobile Phone'),
(13, 'LG Monitor', '210', 'Electronics'),
(14, 'Samsung Printer', '120', 'Electronics'),
(15, 'Samsung Gear Live Black - Made for Android', '125', 'Smart Watch'),
(16, 'Apple Watch', '250', 'Smart Watch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
(
	
	
		(
			  1,
			 'John',
			  'Smith',
			  'John@gmail.com',
			  '(444)-83388-9999',
			  'United States'
		),
		(
			  2,
			 'Mohamed',
			  'Akmal',
			  'Mohamed@gmail.com',
			  '(222)-888-9999',
			  'India'
		),
		(
			  3,
			 'Roshan',
			  'Vikram',
			  'Roshan@gmail.com',
			  '(111)-888-9999',
			  'Netherland'
		),		
		(
			  4,
			 'Williams',
			  'Smith',
			  'Williams@gmail.com',
			  '(000)-888-9999',
			  'United States'
		),
		(
			  5,
			 'Ronaldo',
			  'Thinker',
			  'Ronaldo@gmail.com',
			  '(444)-83388-99991',
			  'United States'
		),
		(
			  6,
			 'Virendra',
			  'Sharma',
			  'Virendra@gmail.com',
			  '(222)-888-99992',
			  'India'
		),
		(
			  7,
			 'Sachin',
			  'Tendulkar',
			  'Sachin@gmail.com',
			  '(111)-888-99993',
			  'Netherland'
		),
		(
			  8,
			 'Abdul',
			  'Kalam',
			  'Abdul@gmail.com',
			  '(777)-888-99994',
			  'Australia'
		),
		(
			  9,
			 'Pranab',
			  'Mukerji',
			  'Pranab@gmail.com',
			  '(000)-888-99995',
			  'United States'
		),
		(
			  10,
			 'Barak',
			  'Obama',
			  'Barak@gmail.com',
			  '(444)-83388-99996',
			  'United States'
		),
		(
			  11,
			 'Clinton',
			  'Smith',
			  'Clinton@gmail.com',
			  '(222)-888-99997',
			  'India'
		),
		(
			  12,
			 'John',
			  'Mike',
			  'Mike@gmail.com',
			  '(111)-888-99998',
			  'Netherland'
		)
	]
)