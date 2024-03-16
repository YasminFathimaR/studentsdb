# studentsdb


A basic web application to save and view Students Details using HTML (CSS, Javascript) for the front end, PHP for server-side scripting, and MySQL database (managed via phpMyAdmin) for data storage.

Step 1: Setup
Setup a web server running with PHP and MySQL support. 
Use tools like XAMPP to set up a local development environment.
Download and install XAMPP and run Apache and MySQL modules in the XAMPP Control Panel.

Step 2: Create HTML Form
Create an HTML file named ‘Form.html’ with code to create a table where the user enters their data like Name, Email, Age and Date of Birth and create a Function to validate the details entered by the user. Upon successful entry of data in HTML Form, the message “Student Details Saved Successfully” appears.

Step 3: Create Database and Table
Using phpMyAdmin or any MySQL client, create a Database named ‘register’ and create a table named ‘studentsdb’ in this Database.

Step 4: Create PHP Script to Store Data
Create a PHP file named ‘save.php’. This PHP file connects to the Database and inserts the data entered by the user into the Database.

Step 5: Create HTML Page to Retrieve Data
Create an HTML file named ‘Studentsdatabase.html’ which simply displays a button to fetch data.

Step 6: Create PHP Script to Retrieve Data and Display Data in HTML Table
Create a PHP file named ‘fetch.php’. This PHP file connects to the Database and fetches the data already saved in the Database.

Step 7: Run the App
Place all the files (Form.html, save.php, Studentsdatabase.html, fetch.php) in your web server's root directory i,e., ‘ htdocs’ for XAMPP.
Enter http://localhost/Form.html in your web browser to access the web application. Here, we can enter and save the Student Details such as Name, Email, Age and Date of Birth.Data will be stored in the MySQL database created as in Step 3.
Enter http://localhost/Studentsdatabase.html in your web browser to fetch the data by clicking on the “Fetch” button and see it displayed in a table format.
