-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 02:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `Blog_name` varchar(255) NOT NULL,
  `Poster` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Description` text NOT NULL,
  `Time` datetime NOT NULL,
  `Hot` int(11) DEFAULT NULL,
  `View` int(11) NOT NULL,
  `cate_blog_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `Blog_name`, `Poster`, `Image`, `Description`, `Time`, `Hot`, `View`, `cate_blog_id`) VALUES
(1, 'Watch and travel', 'HuuDandy', 'public/uploads/blog/img1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio quibusdam voluptate dvoluptate uvoluptate voluptate cvoluptate ivoluptate musoluptate ducimus vitae autem ', '2018-03-25 14:47:59', 1, 231, 1),
(2, 'Member and watch', 'TuJohnny', 'public/uploads/blog/img2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio quibusdam voluptate ducimusoluptate ducimus vitae autem voluptate ', '2018-03-25 14:48:21', 1, 563, 1),
(3, 'Defaul and errorr watch', 'LinhThuy', 'public/uploads/blog/img3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio quibusdam voluptate ducimusoluptate ducimus vitae autem voluptate voluptate voluptate ', '2018-03-25 14:48:49', 1, 864, 1),
(4, 'Love my watch', 'BaoAnh', 'public/uploads/blog/img2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio quibusdam voluptate ducimusoluptate ducimus vitae autem voluptate voluptate ', '2018-03-25 14:49:12', 0, 342, 1),
(5, 'Error watch', 'NinhToan', 'public/uploads/blog/img3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio quibusdam voluptate voluptate dvoluptate uvoluptate cimus voluptate vitae autem ', '2018-03-25 14:49:23', 0, 896, 1),
(6, 'Watcher and project', 'KimTrang', 'public/uploads/blog/img1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio qducimusptio uducimusptio ibusdam voluptate ducimusoluptate ducimus vitae autem ', '2018-03-25 18:07:26', 0, 673, 1),
(7, 'Watcher and project', 'LongLan', 'public/uploads/blog/img2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio quibusdam voluptate ducimus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis optio quibusdam voluptate ducimusptio quibusdam voluptate ducimusoluptate ducimus vvoluptate ivoluptate tvoluptate ae autem  oluptate ducimus vitae autem ', '2018-03-25 18:39:00', 1, 454, 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_detail`
--

CREATE TABLE `blog_detail` (
  `ID` int(11) NOT NULL,
  `Description` text,
  `Comment` varchar(255) DEFAULT NULL,
  `Hot` varchar(255) DEFAULT NULL,
  `Cate_blog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_detail`
--

INSERT INTO `blog_detail` (`ID`, `Description`, `Comment`, `Hot`, `Cate_blog`) VALUES
(1, 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, '1', 1),
(2, 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, '1', 2),
(3, 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `Link` varchar(255) DEFAULT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` text,
  `Parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Link`, `Name`, `Description`, `Parent_id`) VALUES
(1, 'dong-ho-nam.php', 'Đồng hồ nam', 'Cha-ưeqwq', 0),
(2, 'dong-ho-nu', 'Đồng hồ nữ', 'Cha-fhhfhg', 0),
(3, ' dong-ho-giam-gia', 'Đồng hồ giảm giá', 'Cha-sfdggfh', 0),
(10, NULL, 'Đồng hồ Quantify', 'dfdf', 5),
(11, NULL, 'Đồng hồ Nova', 'fdgfg', 6),
(12, NULL, 'Đồng hồ DTTE_TD', 'fdgfdgdfg', 7),
(13, NULL, 'Đồng hồ 78_LAW', 'fgfdg', 8),
(16, NULL, 'sgdgfdgf', '<p>fdgfdgfdgf</p>', 16);

-- --------------------------------------------------------

--
-- Table structure for table `cate_blog`
--

CREATE TABLE `cate_blog` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Kind` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cate_blog`
--

INSERT INTO `cate_blog` (`ID`, `Name`, `Kind`) VALUES
(1, 'Tin tức mới', 'tin-tuc-moi'),
(2, 'Tin tức hot', 'tin-tuc-hot'),
(3, 'Đồng hồ nam', 'dong-ho-nam'),
(4, 'Đồng hồ nữ', 'dong-ho-nu');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `C_name` varchar(255) NOT NULL,
  `Star` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Comment` text NOT NULL,
  `Time_send` datetime NOT NULL,
  `Product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `Avatar`, `C_name`, `Star`, `Email`, `Comment`, `Time_send`, `Product_id`) VALUES
(1, 'public/uploads/user/avatar1.jpg', 'Tú Jonhny', 4, NULL, '?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised PageMaker including versions of Lorem Ipsum.', '2018-03-22 13:01:55', 1),
(2, 'public/uploads/user/avatar2.jpg', 'Linh Thùy', 5, NULL, '?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and five essentially release of Letraset l', '2018-03-22 13:03:26', 1),
(3, 'public/uploads/user/avatar1.jpg', 'Ngô Toàn', 3, NULL, '?Lorem Ipsum is simply dummy text of the industry\'s standard specimen with the release of Letraset sheets ', '2018-03-28 12:51:32', 1),
(4, 'public/uploads/user/avatar1.jpg', 'Linh Thu', 2, NULL, '?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It versions of Lorem Ipsum.', '2018-03-28 12:51:35', 2),
(6, 'public/uploads/user/avatar3.jpg', 'Lam Tham', 1, NULL, 'software like Aldus PageMaker including versions with the release of Letraset sheets ', '2018-03-28 12:51:41', 2),
(15, 'public/uploads/user/avatar1.jpg', 'Trung', 5, NULL, 'GOOD', '2018-03-29 23:16:10', 3),
(16, '', 'H?u', 4, 'Robotmeo@gmail.com.vn', 'GOGOOGOGOGOOGOGOGOGOGGOGOG', '0000-00-00 00:00:00', 0),
(18, '', 'Sá', 4, 'sadsd@gmail.com', 'q?ewqesadsadasdasdsad', '0000-00-00 00:00:00', 3),
(19, '', 'HUU', 0, 'Robotmeo@gmail.com.vn', 'GOOOOOD', '0000-00-00 00:00:00', 4),
(20, '', 'Quy dep trai', 1, 'taonoiphet@gmail.com', 'dsjsdfjdjfsjbfjsdfbsdsd', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Customer_name` varchar(255) DEFAULT NULL,
  `Customer_address` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Customer_name`, `Customer_address`, `Phone`, `Email`) VALUES
(56, 'Minh to', 'Hà Nội', '086878672312', 'mapminh@gmail.co'),
(57, 'Hữu', 'Hà Nội', '0852874562', 'lieuthieugia00@yahoo.com.vn'),
(58, 'Hữu', 'Hà Nội', '086878672312', 'admin@gmail.com'),
(59, 'Hữu123', 'Hà Nội', '0852874562', 'lieuthieugia00@yahoo.com.vn'),
(60, 'Hữu', 'Hà Nội', '0852874562', 'robotmeo1999@gmail.com'),
(61, 'Bảo a', 'Hà Nội', '0852874562', 'robotmeo1999@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID_order` int(11) NOT NULL,
  `Customer_id` varchar(200) NOT NULL,
  `Payment_method` int(11) NOT NULL DEFAULT '1',
  `Notes` text,
  `Total_price` bigint(10) DEFAULT NULL,
  `Order_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID_order`, `Customer_id`, `Payment_method`, `Notes`, `Total_price`, `Order_date`) VALUES
(32, '59', 1, 'Ko có gì', 159000, NULL),
(33, '60', 1, 'Ko có gì hetttttttttttttttttttttttttttttttttttttttt', 1197000, NULL),
(34, '61', 1, 'Ko thêm yêu cầu', 4692240, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `Order_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`Order_id`, `Product_id`, `Quantity`, `Price`) VALUES
(32, 1, 1, 99000),
(32, 2, 1, 50000),
(32, 3, 1, 10000),
(33, 1, 3, 99000),
(33, 4, 1, 900000),
(34, 3, 2, 10000),
(34, 9, 1, 5000),
(34, 11, 1, 2324000),
(34, 12, 1, 2343240);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `ID` int(11) NOT NULL,
  `Photo_link` varchar(255) DEFAULT NULL,
  `Pro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`ID`, `Photo_link`, `Pro_id`) VALUES
(1, 'public/uploads/product/zoommyt.jpg', 1),
(2, 'public/uploads/product/zoommyt2.jpg', 1),
(3, 'public/uploads/product/sp-demo2.jpg', 1),
(4, 'public/uploads/product/gala5.jpg', 2),
(5, 'public/uploads/product/gala3.jpg', 2),
(6, 'public/uploads/product/gala1.jpg', 2),
(7, 'public/uploads/product/gala4.jpg', 3),
(8, 'public/uploads/product/ghost.jpg', 3),
(9, 'public/uploads/product/gala1.jpg', 3),
(10, 'public/uploads/product/gala1.jpg', 4),
(11, 'public/uploads/product/gotham.jpg', 4),
(12, 'public/uploads/product/gotham.jpg', 4),
(13, 'public/uploads/product/gala3.jpg', 5),
(14, 'public/uploads/product/gala4.jpg', 5),
(15, 'public/uploads/product/gala3.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `List_price` bigint(20) DEFAULT NULL,
  `Sell_price` bigint(20) NOT NULL,
  `Star` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `Feature_image` varchar(200) DEFAULT NULL,
  `Detail` text,
  `Cate_id` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Hot` int(11) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `List_price`, `Sell_price`, `Star`, `Status`, `Feature_image`, `Detail`, `Cate_id`, `Description`, `Hot`, `Stock`) VALUES
(1, 'Đồng hồ Nova-Yellow', 100000, 99000, 0, 0, 'zoommyt.jpg', 'adsdadads', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeweeeeeeeeeee', 1, 342),
(2, 'Đồng hồ Nova-Gold', 88000, 50000, 4, 1, 'gala5.jpg', 'oooooooooooooooo', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưeqewqewqeqweqw', 0, 234),
(3, 'Đồng hồ Nova-Siler', 99000, 10000, 5, 1, 'gala4.jpg', '90879676', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.', 0, 234),
(4, 'Đồng hồ Over-Watch-1234', 12321321, 900000, 4, 0, 'gala1.jpg', 'ưqeqweqweew', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.qưeqeeeeeeeeeee', 1, 780),
(5, 'Đồng hồ Over-Watch-1299', 43544400, 400000, 4, 0, 'gala3.jpg', 'ẻ39fdjfu', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqewewqe', 0, 230),
(6, 'Đồng hồ Quan', 44344000, 870000, 5, 1, 'gala3.jpg', 'gtytr5t55', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưeqqwewqe', 0, 234),
(7, 'Đồng hồ Nova-TFKD-Siler', 65456000, 90000, 3, 0, 'ghost.jpg', '493842309', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqewqewqe', 1, 232),
(8, 'Đồng hồ Nova-TJDK', 14324000, 400000, 5, 0, 'gotham.jpg', '12kdefkfmdfk', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqewqeqwe', 0, 678),
(9, 'Đồng hồ Nova-Gold', 13423000, 5000, 3, 0, 'sig2.jpg', '324jdifmejwfek', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewqe', 1, 654),
(10, 'Đồng hồ Nova-KC', 32423000, 52440000, 5, 0, 'ghost.jpg', '32423dsa', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưeqqweqwe', 1, 546),
(11, 'Đồng hồ OFR', 2343200, 2324000, 4, 1, 'gala5.jpg', '32432', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 1, 266),
(12, 'Đồng hồ NFL', 343000, 2343240, 4, 1, 'gala2-malibu.jpg', 'rewffdf34343', 1, 'Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 324),
(14, ' Đồng hồ CC=llwe', 2343200, 2142000, 5, 0, 'gotham.jpg', '12421dsfsf', 2, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 200),
(15, ' Đồng hồ CC=llwe', 324320, 4324320, 5, 0, 'gotham.jpg', '13423032432', 3, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 213),
(16, 'Đồng hồ Nova-KC', 43240, 234320, 5, 0, 'ghost.jpg', '2343dsdsd', 1, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 23),
(17, 'Đồng hồ Nova-KC', 435400, 435400, 4, 0, 'gotham.jpg', 'fsdfsdfdsf', 2, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 23),
(18, 'Đồng hồ Nova-KC', 435400, 435400, 4, 0, 'ghost.jpg', 'erewrewrw ', 2, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 23),
(19, 'Đồng hồ FFFFFF', 435400, 435400, 3, 0, 'gala1.jpg', 'sdfsdf', 2, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 342),
(20, 'Đồng hồ FFFFFF', 435400, 435400, 2, 1, 'ghost.jpg', 'dfdsfsdfdsf', 2, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 435),
(21, 'Đồng hồ ĐVVV', 435400, 435400, 4, 1, 'gotham.jpg', 'dsfsdfsd', 1, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 454),
(22, '435400', 435400, 435400, 5, 0, 'gala1.jpg', '435400sdfdsf', 3, '412Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 1, 675),
(23, 'Đồng hồ ĐC', 435400, 435400, 2, 0, 'ghost.jpg', 'dsfdfds', 3, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 676),
(24, 'Đồng hồ RFFF', 435400, 435400, 5, 0, 'gotham.jpg', 'dfdsf', 3, '12Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.ưqeqwewq', 0, 454),
(28, 'Đồng hồ mới', 123456, 654321, 2, 0, '5abdfb933c434-cat.jpg', 'Xam xam xam', 0, '<p>tedsdsdsdsdlsflmdfsdfff</p>', 0, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `ID` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Detail_pro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`ID`, `Product_id`, `Name`, `Detail_pro`) VALUES
(1, 1, 'Wait', '25 cm'),
(2, 1, 'Lenght', '35 cm'),
(3, 1, 'Chest', '35 inches'),
(4, 1, 'Color', 'Read, Blue, Green & Black'),
(5, 2, 'Wait', '40 cm'),
(6, 2, 'Color', 'Read, Blue, Green & Black');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `Name_role` varchar(255) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `Name_role`, `User_id`) VALUES
(1, 'Admin', 0),
(2, 'Manager', 1),
(3, 'CEO', 2),
(4, 'Member', 3);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `ID` int(11) NOT NULL,
  `Slide_url` varchar(255) DEFAULT NULL,
  `Parent_id` int(11) DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`ID`, `Slide_url`, `Parent_id`, `Comment`) VALUES
(1, 'public/uploads/slide/slide5.jpg', 0, 'Chất lượng hàng đầu'),
(2, 'public/uploads/slide/slide2.jpg', 0, 'Khẳng định đẳng cấp'),
(3, 'public/uploads/slide/slide3.jpg', 0, 'Vươn tới tầm cao'),
(4, 'public/uploads/blog/img4.jpg', 1, NULL),
(5, 'public/uploads/blog/img2.jpg', 1, NULL),
(6, 'public/uploads/blog/img1.jpg', 1, NULL),
(7, 'public/uploads/blog/img2.jpg', 2, NULL),
(8, 'public/uploads/blog/img3.jpg', 2, NULL),
(9, 'public/uploads/blog/img3.jpg', 2, NULL),
(10, 'public/uploads/blog/img3.jpg', 3, NULL),
(11, 'public/uploads/blog/img3.jpg', 3, NULL),
(12, 'public/uploads/blog/img3.jpg', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(191) DEFAULT NULL,
  `Role` int(11) DEFAULT NULL,
  `Short_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Avatar`, `Name`, `Email`, `Password`, `Role`, `Short_description`) VALUES
(1, 'public/uploads/user/avatar2.jpg', 'HữuDandy', 'admin@gmail.com', '$2y$10$JIjqd6sh3OwZRuEYeMAePu6Qh2hcjjYxaowyP0wxuADjzMfVGqp4u', 0, ' <h4>Tôi yêu thích code</h4>\r\n                                        <p>Tôi muốn tạo ra trang wed cho riêng mình và cho các bạn</p>'),
(2, 'public/uploads/user/avatar1.jpg', 'member1', 'member@gmail.com', '$2y$10$IfOvf7xwjIgEVDHFKQDu9uGx4mKFfPjQqzW1wfxgeIPuoaqIpP2Ey', 3, ''),
(4, 'public/uploads/user/avatar3.jpg', 'Linh', 'linhthuy@gmail.com', '$2y$10$JIjqd6sh3OwZRuEYeMAePu6Qh2hcjjYxaowyP0wxuADjzMfVGqp4u', 2, '<h4>Tôi yêu công việc</h4>\r\n                                        <p>Hãy cùng tôi bắt tay ngay vào công việc nào</p>'),
(5, 'public/uploads/user/avatar1.jpg', 'Tú Trần', 'trantu@gmail.com', '$2y$10$JIjqd6sh3OwZRuEYeMAePu6Qh2hcjjYxaowyP0wxuADjzMfVGqp4u', 1, '<h4>Tôi là một nhà quản lý</h4>\r\n                                        <p>Tôi muốn đem lại lợi ích cho các bạn và cho chính tôi</p>'),
(6, 'public/uploads/user/avatar2.jpg', 'Ninh', 'ninh@gmail.com', '$2y$10$JIjqd6sh3OwZRuEYeMAePu6Qh2hcjjYxaowyP0wxuADjzMfVGqp4u', 3, NULL),
(8, NULL, 'Long', 'Long@gmail.com', '$2y$10$JIjqd6sh3OwZRuEYeMAePu6Qh2hcjjYxaowyP0wxuADjzMfVGqp4u', 3, NULL),
(9, NULL, 'Tâm', 'Tam123@gmail.com', '$2y$10$JIjqd6sh3OwZRuEYeMAePu6Qh2hcjjYxaowyP0wxuADjzMfVGqp4u', 3, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog_detail`
--
ALTER TABLE `blog_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cate_blog`
--
ALTER TABLE `cate_blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_order`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Order_id`,`Product_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_detail`
--
ALTER TABLE `blog_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cate_blog`
--
ALTER TABLE `cate_blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
