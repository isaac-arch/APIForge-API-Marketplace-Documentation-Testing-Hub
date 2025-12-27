CREATE DATABASE apiforge;
USE apiforge;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(150) UNIQUE,
 password VARCHAR(255),
 role ENUM('user','admin') DEFAULT 'user',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE apis (
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT,
 name VARCHAR(150),
 base_url VARCHAR(255),
 description TEXT,
 category VARCHAR(100),
 status ENUM('pending','approved') DEFAULT 'pending',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE api_endpoints (
 id INT AUTO_INCREMENT PRIMARY KEY,
 api_id INT,
 method VARCHAR(10),
 endpoint VARCHAR(255),
 description TEXT
);

CREATE TABLE api_keys (
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT,
 api_key VARCHAR(255),
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE api_logs (
 id INT AUTO_INCREMENT PRIMARY KEY,
 api_id INT,
 user_id INT,
 endpoint VARCHAR(255),
 method VARCHAR(10),
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);