CREATE EXTENSION IF NOT EXISTS "uuid-ossp";
DROP TABLE IF EXISTS demo;
CREATE TABLE demo(
	id serial PRIMARY KEY,
	name VARCHAR (255) NOT NULL
);