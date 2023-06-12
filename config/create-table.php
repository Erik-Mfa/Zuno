<?php
namespace Models;

use Models\ModelConect;

    $table = "CREATE TABLE IF NOT EXISTS events
        (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(30),
        description VARCHAR(100),
        start VARCHAR(20),
        end VARCHAR(20)
        )
    ";

    $con->query($table);


?>
