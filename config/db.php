<?php

    class Db extends PDO {
        function __construct() {
            $servername = "localhost";
            $username = "root";
            $password = "dn180388zsv";
            $dbname = "db_prod_doc";
            parent::__construct("mysql:host=$servername;dbname=$dbname", "$username", "$password");
        }
    }