<?php

    if (isset($_POST['name']) && isset($_POST['db']) && isset($_POST['shelf']))
    {
        $shelf = $_POST['shelf'];
        $name = $_POST['name'];
        $db = $_POST['db'];
        $sql = "INSERT INTO products (name, db, shelf) VALUES ('$name', $db,'$shelf')";
        $sql2 = "SELECT * FROM products WHERE name = '$name' AND shelf = '$shelf'";
        $result = $conn->query($sql2);
    



    }


?>


