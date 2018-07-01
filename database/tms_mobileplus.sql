 -- https://www.phpmyadmin.net/
 --
 -- Máy chủ: localhost:3306
--- Thời gian đã tạo: Th6 27, 2018 lúc 10:30 AM
+-- Thời gian đã tạo: Th6 27, 2018 lúc 02:16 PM
 -- Phiên bản máy phục vụ: 5.6.38
 -- Phiên bản PHP: 5.6.32
 
 (28, 17, 'asdsadasd', 1000000, 1),
 (29, 17, 'asdasdsad', 111111, 1),
 (30, 17, 'tung lam lam lam', 1111111, 1),
-(31, 13, 'asdasdasd', 1000000, 1);
+(31, 13, 'asdasdasd', 1000000, 1),
+(32, 3, 'TTTTTTTB', 1000000, 1),
+(33, 10, 'lmamnbgga\r\nsakjdajksdkjlasd', 1000000, -1);
 
 -- --------------------------------------------------------
 
 --
 
 INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `address`, `status`) VALUES
-(1, 'nguyen tung lam', 'lambaei6@gmail.com', '0948795490', 'jsjjsjsjsjsjsjsjs', 1),
-(2, 'Nguyen Xuan Quyet', 'quyetnx@mobileplus.vn', '0906018345', 'Bac Ninh', 1);
+(1, 'nguyen tung lam', 'lambaei6@gmail.com', '0948795490', 'jsjjsjsjsjsjsjsjs', 0),
+(2, 'Nguyen Xuan Quyett', 'quyetnx@mobileplus.vn', '0906018345', 'Bac Ninh - Lim', 1),
+(3, 'lam', 'supremedreams96@gmail.com', '0915240896', 'gam cau`', 1);
+
+-- --------------------------------------------------------
+
+--
+-- Cấu trúc bảng cho bảng `file`
+--
+
+CREATE TABLE `file` (
+  `id` int(11) NOT NULL,
+  `o_id` int(11) NOT NULL,
+  `type` int(11) NOT NULL,
+  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
+  `status` int(2) NOT NULL
+) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 
 -- --------------------------------------------------------
 
 (6, 1, 'asdasdasd', 'asfasf', '2018-06-11', '2018-06-05', 1000000, -1),
 (8, 1, 'nguyen tung lam', 'sadasdsdasdasd', '2018-06-04', '2018-06-13', 1000000, -1),
 (10, 2, 'nguyen tung lam', 'sadjjsdjkfajksdfjkasdjkfasdf\r\nasdfl;\r\n\r\nasdl;fkla;sdfk;lasdkflaskld;\r\njkldsajkdsjgksdjklgjaskldjads\r\njaklsdgkjasdgjkasdjkgjaksdgjkasdgjklasdjg\r\njklasdgkjasdgjkasdjkgjasdgjasdgkjasdkjgasdg\r\naksjdlkjalsdjkasdgjkasdgkjasdkjgasdg\r\nkljasdgkjlasdgkjdsjkgsakjdgjkasdgjkasdg\r\n\r\nlam\r\nlaml\r\nlamm', '2018-06-18', '2018-06-29', 1000000, 1),
-(11, 1, '123qwd', 'qweqwe\r\nqwe\r\nqwe', '2018-06-20', '2018-06-29', 1111, 1),
+(11, 1, '123qwd', 'qweqwe\r\nqwe\r\nqwe', '2018-06-20', '2018-06-29', 1111, -1),
 (12, 1, '123qwd', 'qweqwe\r\nqwe\r\nqwe', '2018-06-20', '2018-06-29', 1111, -1),
-(13, 1, '123123213', '123123213', '2018-06-04', '2018-06-28', 121221, 1),
+(13, 1, 'lam lam lam lam', '123123213', '2018-06-04', '2018-06-28', 121221, -1),
 (14, 1, 'nguyen tung lam', '123\r\n123\r\n123', '2018-06-14', '2018-06-12', 100000, 1),
 (15, 1, 'nguyen tung lam', '12212121', '2018-05-29', '2018-06-14', 1000000, 1),
 (16, 1, 'nguyen tung lam', 'sasasa', '2018-06-04', '2018-06-06', 1000000, 1),
-(17, 1, 'nguyen thanh duy', 'fgffggf', '2018-06-04', '2018-06-12', 1000000, 1);
+(17, 1, 'nguyen thanh duy', 'fgffggf', '2018-06-04', '2018-06-12', 1000000, 1),
+(18, 1, 'nguyen tung lam', 'sgsggsgssgsg', '2018-06-03', '2018-06-21', 1000000, 1),
+(19, 1, 'nguyen tung lam duy', 'sdsssssssssdsD', '2018-06-04', '2018-06-28', 1000000, 1),
+(20, 1, 'nguyen tung sss', 'eeeeeeeeeeeeee', '2018-06-04', '2018-06-30', 1000000, -1),
+(21, 1, 'tms_mobileplus', 'qweasfwrhqweqg', '2018-06-11', '2018-06-29', 1000000, -1);
 
 -- --------------------------------------------------------
 
   ADD PRIMARY KEY (`id`);
 
 --
+-- Chỉ mục cho bảng `file`
+--
+ALTER TABLE `file`
+  ADD PRIMARY KEY (`id`);
+
+--
 -- Chỉ mục cho bảng `project`
 --
 ALTER TABLE `project`
 -- AUTO_INCREMENT cho bảng `cost`
 --
 ALTER TABLE `cost`
-  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
+  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
 
 --
 -- AUTO_INCREMENT cho bảng `customer`
 --
 ALTER TABLE `customer`
-  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
+  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
 
 --
 -- AUTO_INCREMENT cho bảng `project`
 --
 ALTER TABLE `project`
-  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
+  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
 
 --
 -- AUTO_INCREMENT cho bảng `users`
