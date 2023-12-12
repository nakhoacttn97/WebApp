CREATE DATABASE Store;
USE Store;
CREATE TABLE Category(
	CategoryId SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	CategoryName VARCHAR(64) NOT NULL,
	ImageUrl VARCHAR(32),
	ParentId SMALLINT,
    CONSTRAINT FK_Cataegory_ParentId FOREIGN KEY (ParentId)  REFERENCES Category(CategoryId)
)ENGINE = INNODB;
INSERT INTO Category(CategoryId, CategoryName, ParentId) VALUES
	(1, 'Laptop', NULL),
	(2, 'Sản phẩm Apple', NULL),
	(3, 'PC - Máy tính bộ', NULL),
	(4, 'PC - Linh kiện máy tính', NULL),
	(5, 'Laptop theo thương hiệu', 1),
	(6, 'Laptop theo cấu hình', 1),
	(7, 'Laptop theo nhu cầu', 1),
	(8, 'Laptop theo giá', 1),
	(9, 'Apple (Macbook)', 5),
	(10, 'Acer', 5),
	(11, 'Asus', 5),
	(12, 'DELL', 5),
	(13, 'HP', 5),
	(14, 'Intel Core i3', 6),
	(15, 'Intel Core i5', 6),
	(16, 'Intel Core i7', 6),
	(17, 'Intel Core i9', 6),
	(18, 'Laptop Gaming', 7),
	(19, 'Laptop văn phòng', 7),
	(20, 'Laptop đồ họa', 7),
	(21, 'Dưới 10 triệu', 8),
	(22, '10 đến 15 triệu', 8),
	(23, '15 đến 20 triệu', 8),
	(24, 'Macbook', 2),
	(25, 'IMac', 2),
	(26, 'IPhone IPad', 2),
	(27, 'Macbook Air', 24),
	(28, 'Macbook Pro', 24),
	(29, 'Imac Mini', 25),
	(30, 'IPhone', 26),
	(31, 'IPad', 26);