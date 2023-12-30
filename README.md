# IIT-WebPage
# Happy22Kids Registration Form

This PHP application is designed to handle registrations for the "Chain-for-Children's-Cheer" initiative. Users can fill out the registration form, and the information will be stored in a MySQL database.

## Prerequisites

- PHP installed on your server (https://www.php.net/)
- MySQL server installed and running
- Web server (e.g., Apache, Nginx) configured to run PHP scripts

## Database Setup

1. Create a MySQL database named `iit`:

   ```sql
   CREATE DATABASE iit;
2. Create a Table named 'kids':
	CREATE TABLE kids (
    id INT AUTO_INCREMENT PRIMARY KEY,
    volevel VARCHAR(255),
    name VARCHAR(255),
    prof VARCHAR(255),
    city VARCHAR(255),
    country VARCHAR(255),
    vol VARCHAR(255),
    contact INT,
    remarks TEXT
);
3. Configration:
	the database connection in 'connect.php':
// Replace 'your_password' with the actual password for the 'root' user
$conn = new mysqli('localhost', 'root', 'your_password', 'iit');
if your MySQL server is running at by default port i.e 3306 then code would be
$conn = new mysqli('localhost', 'root', 'your_password', 'iit');
if you are changin the port address of your MySQL server you need to mention it in your code
$conn = new mysqli('localhost', 'root', 'your_password', 'iit', port_number);

## Running the Application:
1. Clone this repository to your web server's document root:
	git clone https://github.com/yourusername/happy22kids.git
	Start Apache and MySQL server
2. Open the application in your Web browser:
	http://localhost/happy22kids/index.html
3. Fill out the registration form and submit.

## Additional Information
The success and error messages are styled for better presentation. You can customize the styles in connect.php.
Make sure to read the privacy policy provided in the registration form.


