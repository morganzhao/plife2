CREATE TABLE IF NOT EXISTS `pl_games` (
`game_id` INT,
`cp_name` VARCHAR(200),
`game_name` VARCHAR(100),
`game_tag` INT,
`game_class` INT COMMENT '11:单击 12:网游',
`create_time` DATETIME,
`modify_time` DATETIME,
`online_status` ENUM('1', '0') COMMENT '1:商用; 0:下线',
`channel_id` VARCHAR(20),
`introduction` TEXT,
PRIMARY KEY(`game_id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `pl_game_image` (
`image_id` INT,
`game_id` INT,
`image_type` INT COMMENT 'icon:200 截图:203 推广广告图:400',
`image_size` INT,
`image_height` INT,
`image_width` INT,
`image_index` INT COMMENT '图片顺序 0-6',
`image_url` VARCHAR(200),
PRIMARY KEY(`image_id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `pl_game_file` (
`file_id` INT,
`game_id` INT,
`channel_id` INT,
`file_type` INT COMMENT '1:apk源包  2:渠道包',
`file_size` INT,
`version_code` VARCHAR(32),
`version_name` VARCHAR(32),
`package_name` VARCHAR(100),
`file_url` VARCHAR(200),
`update_time` DATETIME,
PRIMARY KEY(`file_id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE `pl_records` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`mac` varchar(20) DEFAULT '',
	`ip` varchar(15) DEFAULT NULL,
	`os` varchar(16) DEFAULT '',
	`os_version` varchar(16) DEFAULT '',
	`type` enum('play','download') DEFAULT 'play',
	`third_id` varchar(64) DEFAULT NULL,
	`create_date` datetime DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
ALTER TABLE `pl_category` ADD COLUMN `category` VARCHAR(30) DEFAULT '' COMMENT '不同分类的类型：video games book shop country'
