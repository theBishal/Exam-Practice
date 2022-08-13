To create a database table for the user to store their data in the database
we need to start our xampp server and open phpmyadmin to create a database and a table.
under php myadmin, select new and under its sql query we write following code.
*/



//Creating Database

CREATE DATABASE institute;

After Creating databse we need to create a table in the databse.
so we select the database and under its sql query we write following code.


//Creating Table in Database
CREATE TABLE tbl_users(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
roll INT(10) NOT NULL,
mobile_number INT(10) NOT NULL,
email VARCHAR(50) NOT NULL,
status VARCHAR(10) NOT NULL);