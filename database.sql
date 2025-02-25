CREATE DATABASE mini_site;
USE mini_site;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL /* Mot de passe stocké en clair (non sécurisé) */
);