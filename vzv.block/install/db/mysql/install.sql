create table if not exists vzv_test (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	ACTIVE char(1) not null default 'Y',
	SORT int default 100,
	TEST_MODE char(1) not null default 'N',
	NAME varchar(255) NOT NULL,
	PRICE INT(11) NULL,
	PRIMARY KEY (ID)
);