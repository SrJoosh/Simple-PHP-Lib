# Simple-PHP-Lib
Efficient library for PHP to simplify development.

# Usage: MySQL.class.php
First include the class using include_once('MySQL.class.php');<Br>
Next save a variable creating a new class passing database details:<br>
  - $connection = new MySQL($host, $port, $user, $pass, $database);<br>
/To run a query then simply do:<br>
  - $connection->query("QUERY HERE e.g. SELECT * From Users");<br>
 
