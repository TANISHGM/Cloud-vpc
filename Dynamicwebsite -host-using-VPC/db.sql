-- Run this on the DB (private EC2) as root or admin user:
--   mysql -u root -p < db.sql
CREATE DATABASE IF NOT EXISTS mydb;
CREATE USER IF NOT EXISTS 'webuser'@'10.0.%.%' IDENTIFIED BY 'StrongPass!123';
GRANT ALL PRIVILEGES ON mydb.* TO 'webuser'@'10.0.%.%';
FLUSH PRIVILEGES;
USE mydb;
CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  txt VARCHAR(255) NOT NULL
);
