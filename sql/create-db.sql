--- Create table user ---
CREATE TABLE user(
    user_id INT(11) NOT NULL PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    data_nascita VARCHAR(100),
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    profile_image VARCHAR(255),
    register_date TIMESTAMP
);