
--
-- 資料庫： `mytest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `hobbies`
--

CREATE TABLE `hobbies` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seq` int(11) NOT NULL DEFAULT 100,
  `visible` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `hobbies`
--

INSERT INTO `hobbies` (`sid`, `name`, `seq`, `visible`) VALUES
(1, '游泳', 100, 1),
(2, '跑步', 100, 1),
(3, '爬山', 100, 1),
(4, '琴', 120, 1),
(5, '棋', 180, 1),
(6, '書', 110, 1),
(7, '畫', 200, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
