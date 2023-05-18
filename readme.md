# Run all commands as root user

1. sudo apt install apache2 apache2-utils -y
2. sudo apt install mariadb-server mariadb-client -y
3. sudo mysql_secure_installation
4. sudo apt install php php-mysql libapache2-mod-php -y
5. sudo systemctl restart apache2
6. sudo apt install net-tools

#How to make entries into db

1. mysql -u root -p
2. CREATE DATABASE testdb;
3. USE testdb;
4. CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50),
            email VARCHAR(50)
   );
5. INSERT INTO users (name, email) VALUES 
     ('Rahul' 'test@example.com');

6. DELETE FROM users where name = 'Rahul';

7. SELECT * from users;
