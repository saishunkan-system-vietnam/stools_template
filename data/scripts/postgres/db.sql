CREATE EXTENSION IF NOT EXISTS "uuid-ossp";

CREATE TABLE m_company
(
    id BIGINT NOT NULL GENERATED ALWAYS AS IDENTITY (START WITH 1000 INCREMENT BY 1) PRIMARY KEY,
    company_uuid VARCHAR(50) UNIQUE NOT NULL DEFAULT uuid_generate_v4 (), -- company unique id
	name VARCHAR(200) NOT NULL, -- full name
	abbreviation_name VARCHAR(20), -- short name
	domain VARCHAR(20) UNIQUE NOT NULL, -- sub-domain
	address VARCHAR(200) NOT NULL DEFAULT '', -- company address
	phone VARCHAR (20) UNIQUE NOT NULL, -- company phone
	email VARCHAR(100) UNIQUE NOT NULL, -- company email
	logo_path VARCHAR(100) NOT NULL DEFAULT '/default-logo.png', -- company logo
	registration_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	country_code VARCHAR(2) NOT NULL DEFAULT 'VN',
	del_flg SMALLINT DEFAULT 0,
	created_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	created_user VARCHAR(20) DEFAULT 'SYSTEM',
	updated_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	updated_user VARCHAR(20) DEFAULT 'SYSTEM'
);

CREATE TABLE m_company_license
(
    id BIGINT NOT NULL GENERATED ALWAYS AS IDENTITY (START WITH 10000 INCREMENT BY 1) PRIMARY KEY,
    company_uuid VARCHAR(50)  NOT NULL, -- company unique id
	module_type VARCHAR(2) NOT NULL, -- 01: Timesheet, 02: Inventory
	license_type VARCHAR(2) NOT NULL, -- 01: Trial, 02: Paid
	from_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	to_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	del_flg SMALLINT DEFAULT 0,
	created_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	created_user VARCHAR(20) DEFAULT 'SYSTEM',
	updated_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	updated_user VARCHAR(20) DEFAULT 'SYSTEM'
);

CREATE TABLE m_account
(
    id BIGINT NOT NULL GENERATED ALWAYS AS IDENTITY (START WITH 20000 INCREMENT BY 1) PRIMARY KEY,
    company_uuid VARCHAR(50)  NOT NULL, -- company unique id
	user_name VARCHAR(50) NOT NULL, -- login id
	password varchar(150) NOT NULL,
	full_name VARCHAR(200) NOT NULL,
	birthday DATE DEFAULT '1000-01-01',
	gender VARCHAR(2) DEFAULT '01', -- 01: Male, 02: Female, 03: Unspecified
	phone VARCHAR (20) NOT NULL,
	email VARCHAR(100) NOT NULL,
	avatar_path VARCHAR(100) NOT NULL DEFAULT '/default-avatar.png',
	root_flg SMALLINT DEFAULT 0, -- 0 : Not root account ( Regular user), 1: Root account ( Master user)
	status_type VARCHAR(2) DEFAULT '01', -- 01: Inactive, 02: Active
	del_flg SMALLINT DEFAULT 0,
	created_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	created_user VARCHAR(20) DEFAULT 'SYSTEM',
	updated_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	updated_user VARCHAR(20) DEFAULT 'SYSTEM',
	UNIQUE(company_uuid,user_name),
	UNIQUE(company_uuid,email)
);

CREATE TABLE m_verification_code
(
    id BIGINT NOT NULL GENERATED ALWAYS AS IDENTITY (START WITH 10000 INCREMENT BY 1) PRIMARY KEY,
    company_uuid VARCHAR(50)  NOT NULL DEFAULT '', -- company unique id
	account_id BIGINT NOT NULL DEFAULT 0,
	module_type VARCHAR(2) NOT NULL DEFAULT '00', -- 00: All, 01: Timesheet, 02: Inventory
	verification_type VARCHAR(2) NOT NULL, -- 01: Active account, 02: Change password, 03: Recover password
	verification_code VARCHAR(50) NOT NULL DEFAULT  md5(random()::text),
	valid_from timestamp(0) without time zone DEFAULT clock_timestamp(),
	valid_to timestamp(0) without time zone DEFAULT clock_timestamp() + interval '1 hour',
	del_flg SMALLINT DEFAULT 0,
	created_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	created_user VARCHAR(20) DEFAULT 'SYSTEM',
	updated_date timestamp(0) without time zone DEFAULT clock_timestamp(),
	updated_user VARCHAR(20) DEFAULT 'SYSTEM'
);