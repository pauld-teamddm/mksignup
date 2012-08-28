CREATE TABLE players (
player_id INTEGER PRIMARY KEY AUTOINCREMENT,
email VARCHAR(255) NOT NULL UNIQUE,
name VARCHAR(255) NOT NULL,
wins INT(11) DEFAULT 0,
`slug` VARCHAR(255),
matches int(11) default 0,
points int(11) default 0
);

CREATE TABLE characters (
`id` INTEGER PRIMARY KEY AUTOINCREMENT,
`name` VARCHAR(20) NOT NULL,
`icon` VARCHAR(20) NOT NULL
);

INSERT INTO characters (`name`, `icon`) VALUES ('Mario', 'mario.png'), ('Luigi', 'luigi.png'), ('Peach', 'peach.png'), ('Yoshi', 'yoshi.png'), ('Toad', 'toad.png'), ('Wario', 'wario.png'), ('Donkey Kong', 'dk.png'), ('Bowser', 'bowser.png');

CREATE TABLE `play` ( 
`id` INTEGER PRIMARY KEY AUTOINCREMENT,
`player_id` INTEGER DEFAULT 0,
`character_id` INTEGER DEFAULT 0,
`match` INTEGER DEFAULT 0,
`division` VARCHAR(20) DEFAULT '',
`points` INTEGER DEFAULT 0
);