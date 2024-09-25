CREATE DATABASE sillas_db;
USE sillas_db;
CREATE TABLE silla (
    id INT PRIMARY KEY,
    material VARCHAR(50),
    dimensiones VARCHAR(50),
    peso VARCHAR(10),
    uso VARCHAR(20)
);
