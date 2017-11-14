# Simple-PHP-Lib
Efficient library for PHP to simplify development.

# Usage: MySQL.class.php
First include the class using include_once('MySQL.class.php');
Next save a variable creating a new class passing database details:
  $connection = new MySQL($host, $port, $user, $pass, $database);
To run a query then simply do:
  $connection->query("QUERY HERE e.g. SELECT * From Users");
 
