<?php

    $database = new PDO ("mysql:host=localhost;dbname=latihan","root","");
    $query =$database->query ("select* from test");

    while($data = $query->fetch()){
        echo "<p>".$data["nama"]."</p>";

    }

