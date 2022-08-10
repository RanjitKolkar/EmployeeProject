# EmployeeProject
1. First Create the database by Importing the SQL (myEmpl.sql) to the database
2. Copy Employee in htdocs folder
3. Makesure Apache database runnning on your localhoset server
4. open a browser to see the output


Employee Project

1. Home page
   Menu- Home, About, Admin Login, Search
2. Admin Login
   Login page - Validation for username aned password,
               fetchind user data from database and checking the credentials
               If success- Go to Admin Home Page along with msg
               If failure- Go to Home page along with msg
3. Search Page-
      Search By ID, Name, Phone, other
      Fetch the data from database and display
4. Admin Home page
      Default data shoen
      Add details
      edit details
      delete details
      and view the details
5. Message service - display the message in the header about the updates, errors.

Data base conncetion
1. Database connector
2. Login table, employee table, course table, other
3. Authenticator- authenticates the admin

Follwoing Files are created

add.php -- adds data to the database
edit.php --  can edit the existing employee data      
insert-process.php  -- insert new employee process
search.php --  searches the databse for employee with ID, Name or other
authentication.php  -- authenticates the admin user
fetchData.php  -- display the data from the databse
logout.php     -- logout admin
session.php -- session creation after login
dbConn.php  -- generic code for database connectivity
header.php    -- generic code for headers in all pages
msg.php      -- Message service for any updates or errorsr
update-process.php -- update the databse 
delete.php         -- delete entry from the databse
index.php  -- home page
readme.txt  -- this file about the project.

