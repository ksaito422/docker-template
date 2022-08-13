\c default

CREATE TABLE users (
	user_id varchar(32) NOT NULL,
	user_name varchar(100) NOT NULL,
	created_at timestamp with time zone default CURRENT_TIMESTAMP,
	CONSTRAINT pk_users PRIMARY KEY (user_id)
);

INSERT INTO users
	(user_id, user_name)
VALUES
	('0001', 'Gopher'),
	('0002', 'Ferris');
