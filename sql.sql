CREATE TABLE IF NOT EXISTS 'users' (
	'id' int(11) NOT NULL AUTO_INCREAMENT ,
	'username' varchar(50) NOT NULL,
	'password' varchar(50) NOT NULL,
	'email' varchar(50) not null,
	'join_date' datetime not null,
	primary key ('id'),
	unique key 'username' ('username')
) engine =MyISM default charset = lattin1;
