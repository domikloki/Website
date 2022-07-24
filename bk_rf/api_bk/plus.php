<?php
    require_once('api_bk/db_connect.php');
    if (isset($_POST['name']) && isset($_POST['shf']))
    {
        $fname = $_POST['name'];
        $fshelf = $_POST['shf'];
        $sql = "UPDATE products SET db=db+1 WHERE name='$fname' AND shelf='$fshelf'";
        if ($conn->query($sql) === TRUE) {
            echo"Mennyiség növelve";
            switch ($fshelf) {
                case '1':
                    header("Location: menu.php?page=1");
                    break;
                case '2':
                    header("Location: menu.php?page=2");
                    break;
                case '3':
                    header("Location: menu.php?page=3");
                    break;
                case '4':
                    header("Location: menu.php?page=4");
                    break;
                case '5':
                    header("Location: menu.php?page=5");
                    break;
                case '6':
                    header("Location: menu.php?page=6");
                    break;
                case '7':
                    header("Location: menu.php?page=7");
                    break;
                default:
                    # code...
                    break;
            }
        } else
        {
            echo"Gáz van";
        }

    }


?>