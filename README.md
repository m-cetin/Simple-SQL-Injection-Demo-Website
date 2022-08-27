# Simple SQL Injection Demo Website

* Written in PHP & MySQL, tested on Kali Linux 2022.1. Works with PHP 7.4.

## Configuration

Install MariaDB and the MySQL extensions on Debian:

`sudo apt-get install mariadb-server`

`sudo apt-get install php-mysql`

Start the Apache2 and MySQL instance.

`sudo service apache2 start`

`sudo service mysql start`

Create a new MySQL user and create the database `simplesqli`:

`sudo mysql`

`CREATE DATABASE simplesqli;` 

`CREATE USER 'user'@'localhost' IDENTIFIED BY 'yourPassword';`

`GRANT ALL PRIVILEGES ON *.* TO 'user'@'localhost';`

`FLUSH PRIVILEGES;`

Add your MySQL user to Line 2 in verify.php:

`$var = mysqli_connect("localhost", "USER", "yourPassword", "simplesqli")`

Load the contents of the sql file into your MySQL server, run your Apache2 server:

`cd /var/www/html`

`sudo git clone https://github.com/m-cetin/Simple-SQL-Injection-Demo-Website`

`sudo cp -r Simple-SQL-Injection-Demo-Website/* ../`

`sudo mysql -u root -p simplesqli < dump_this_database.sql`

Now you can access your SQL demo website at http://localhost.

# Demo

<img src=https://user-images.githubusercontent.com/102237861/187039904-f0b79015-9448-4255-a263-d5d368239f00.png width="500">

<img src=https://user-images.githubusercontent.com/102237861/187039894-1924bf29-4254-4a04-be98-dd961c277d98.png width="300">
