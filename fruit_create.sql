CREATE TABLE member_tab(
	mem_id VARCHAR(10) DEFAULT '' NOT NULL,
	mem_email VARCHAR(50),
	mem_password VARCHAR(50) DEFAULT '' NOT NULL,
	mem_name VARCHAR(10) DEFAULT '' NOT NULL,
	mem_address VARCHAR(100),
	mem_zipcode VARCHAR(8),
	mem_telephone VARCHAR(15),
	mem_jumin CHAR(13) DEFAULT '' NOT NULL,
	mem_date VARCHAR(10),
	PRIMARY KEY (mem_id)
);

CREATE TABLE goods_tab(
	goods_id INT NOT NULL AUTO_INCREMENT,
	goods_code VARCHAR(10) DEFAULT '' NOT NULL,
	goods_name VARCHAR(20) DEFAULT '' NOT NULL,
	goods_country VARCHAR(20) DEFAULT '' NOT NULL,
	goods_price INT,
	goods_image VARCHAR(50),
	goods_explain TEXT,
	goods_date VARCHAR(10),
	PRIMARY KEY(goods_id)
);

CREATE TABLE buy_tab (
	buy_id INT AUTO_INCREMENT,
	goods_id INT DEFAULT '0' NOT NULL,
	mem_id VARCHAR(10) DEFAULT '' NOT NULL,
	buy_price INT,
	buy_state VARCHAR(10) COMMENT '주문 현황',
	buy_date VARCHAR(10),
	buy_num INT COMMENT '구매 수량',
	goods_name VARCHAR(10),
	PRIMARY KEY(buy_id)
);