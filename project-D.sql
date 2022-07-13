-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.6.7-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 테이블 데이터 project.a_board:~8 rows (대략적) 내보내기
/*!40000 ALTER TABLE `a_board` DISABLE KEYS */;
INSERT IGNORE INTO `a_board` (`ansr_no`, `ansr_ctnt`, `m_no`, `qust_no`, `created_at`) VALUES
	(11, '회원가입은 우측상단 로그인 옆에 버튼을 클릭하여 필수정보 입력후 가입 진행해주시면 됩니다.^^', 1, 11, '2022-05-19 11:33:48'),
	(12, '영상은 유튜브에 업로드하셔서 주소만 동영상URL입력창에 복사하여주시면 업로드 가능합니다.^^', 1, 9, '2022-05-19 11:34:45'),
	(13, '동남아 카테고리는 현재 준비중에 있습니다. 추후 일정발표 공지사항으로 남겨드리겠스니다. 감사합니다.^^', 1, 8, '2022-05-19 11:35:15'),
	(14, '흐흐흐흐', 1, 12, '2022-05-19 12:15:20'),
	(15, 'ㅓㅓㅗㅓㅗㅗㅓㅗㅓㅗㅓㅗㅓㅗㅓㅗ', 1, 8, '2022-05-19 12:16:47'),
	(16, 'ㅀㄹㄹㄹㄹㄹ', 1, 7, '2022-05-19 12:17:09'),
	(17, '오늘 점심은 지지고', 1, 13, '2022-05-19 12:28:24'),
	(18, '오늘 점심은 지지고', 1, 13, '2022-05-19 12:28:25'),
	(19, 'ㅁㄴㅇㅁㄴㅇㄹㄴㅁㅇㄹ', 1, 9, '2022-05-19 12:29:21');
/*!40000 ALTER TABLE `a_board` ENABLE KEYS */;

-- 테이블 데이터 project.c_board:~4 rows (대략적) 내보내기
/*!40000 ALTER TABLE `c_board` DISABLE KEYS */;
INSERT IGNORE INTO `c_board` (`ctgr_no`, `ctgr_nm`) VALUES
	(1, '한식'),
	(2, '양식'),
	(3, '일식'),
	(4, '중식');
/*!40000 ALTER TABLE `c_board` ENABLE KEYS */;

-- 테이블 데이터 project.f_board:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `f_board` DISABLE KEYS */;
/*!40000 ALTER TABLE `f_board` ENABLE KEYS */;

-- 테이블 데이터 project.manager:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT IGNORE INTO `manager` (`m_no`, `mid`, `mpw`, `m_nm`, `created_at`) VALUES
	(1, '123', '123', '관리자', '2022-05-17 17:21:38');
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;

-- 테이블 데이터 project.q_board:~7 rows (대략적) 내보내기
/*!40000 ALTER TABLE `q_board` DISABLE KEYS */;
INSERT IGNORE INTO `q_board` (`qust_no`, `qust_title`, `qust_ctnt`, `user_no`, `created_at`) VALUES
	(6, '레시피올리기', '동영상은 어떻게 올리나요?', 6, '2022-05-19 10:49:56'),
	(7, '글쓰기관련', '글쓰기는 어떻게 하는건가요? ', 3, '2022-05-19 11:26:19'),
	(8, '카테고리', '동남아 카테고리는 없나요?', 1, '2022-05-19 11:30:00'),
	(9, '영상첨부가 안되요~~', '레시피 글쓰기 영상첨부가 안되네요~~~~', 1, '2022-05-19 11:30:45'),
	(11, '회원가입', '회원가입은 어떻게하나요?', 2, '2022-05-19 11:32:29'),
	(12, '질문있어요', '사이트가 참 이쁜데 어떻게 사용하는건가요', 1, '2022-05-19 12:08:28'),
	(13, '오늘 점심 지지고 ㄱ?', 'ㄱㄱ?', 7, '2022-05-19 12:27:44');
/*!40000 ALTER TABLE `q_board` ENABLE KEYS */;

-- 테이블 데이터 project.r_board:~4 rows (대략적) 내보내기
/*!40000 ALTER TABLE `r_board` DISABLE KEYS */;
INSERT IGNORE INTO `r_board` (`reply_no`, `reply_ctnt`, `user_no`, `food_no`, `created_at`) VALUES
	(19, 'ㄿㄹㄹㄹㅇㄹㅇㄹㅇㄹㄹㅇㄹㅇ', 3, 47, '2022-05-19 12:19:18'),
	(20, '안녕하세요 텐동 맛있겠네요', 7, 45, '2022-05-19 12:25:48'),
	(22, 'ㅎㅎ', 7, 49, '2022-05-19 12:37:18'),
	(23, 'ㅇㄹㅇㄹㅇㄹ', 1, 51, '2022-05-19 17:26:04');
/*!40000 ALTER TABLE `r_board` ENABLE KEYS */;

-- 테이블 데이터 project.t_user:~7 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT IGNORE INTO `t_user` (`user_no`, `uid`, `upw`, `nm`, `birth`, `gender`, `created_at`, `profile_img`, `ctnt`) VALUES
	(1, 'qqq', '123', '강도윤', '1997-02-04', 0, '2022-05-12 16:20:23', 'd5551b0c-719b-486e-ac29-0b35a4dfd4e1.jpg', '짧지않은 미국생활 후 귀국했습니다. 한식포함 다문화 음식들을 건강하고 맛있는 것만 추려 내 보겠습니다:)'),
	(2, 'www', '123', '박나라', '1982-05-02', 1, '2022-05-13 14:59:51', '5a982ac6-bea0-4d15-a436-21221ba259f7.jpg', 'http://blog.naver.com/berry__chu'),
	(3, 'eee', '123', '김민준', '1998-05-24', 1, '2022-05-13 15:08:27', '5e52628a-f81f-4022-bae4-dd0076ce5376.jpg', '독학이지만 요리를 사랑하는.요리하는 남자. 마음이 따뜻해지는 요리.치유의요리'),
	(4, 'rrr', '123', '박준우', '1984-05-05', 0, '2022-05-16 12:16:16', '7875094d-1e1f-4387-9389-52cd5f328ad4.jpg', '두율이아빠의 쿡잇TV 놀러가기 : https://bit.ly/3aWUFTq'),
	(5, '1', '1', '1', '2000-01-01', 0, '2022-05-18 11:58:04', NULL, NULL),
	(6, 'ttt', '123', '진수현', '1998-12-12', 0, '2022-05-18 12:42:01', '5e4bb17f-fe65-478a-9c7a-d530d29aa0d0.jpg', '한식을 사랑하는 남자 진수현입니다. 많이들 놀러와주세요~'),
	(7, 'bondu', '1234', '지지고', '2000-02-01', 1, '2022-05-19 12:24:55', 'c7df4c42-2735-41d5-881b-e435e72333e3.jpg', '구경하러 왔습니다');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
