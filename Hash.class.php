<?php
class Hash {

    function __construct($hash, $salt) {
      return password_hash($hash . $salt, PASSWORD_DEFAULT);
    }

}
?>
