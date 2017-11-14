# Simple-PHP-Lib
Efficient library for PHP to simplify development.

# Usage: MySQL.class.php
First include the class using include_once('MySQL.class.php');<Br>
Next save a variable creating a new class passing database details you can then pass a query to it and it will return you the result:<br>
  - $connection = new MySQL($host, $port, $user, $pass, $database);<br>
  - $connection->query("QUERY HERE e.g. SELECT * From Users");<br>
 
