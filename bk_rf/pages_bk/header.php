<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" style="font-size: 20px" id="mt" type="submit">Hűtött Élelmiszerek Weboldala</a>
        <div class="justify-content-end" id="navbarNav">    
        </div>
    </div>
    </nav>
    
    <?php
    switch ($page) {
        case '1':
            echo'    <script>
            document.getElementById("mt").innerText = "1. Polc";
            </script>';
            break;
        case '2':
            echo'    <script>
            document.getElementById("mt").innerText = "2. Polc";
            </script>';
            break;
        case '3':
            echo'    <script>
            document.getElementById("mt").innerText = "3. Polc";
            </script>';
            break;
        case '4':
            echo'    <script>
            document.getElementById("mt").innerText = "4. Polc";
            </script>';
            break;
        case '5':
            echo'    <script>
            document.getElementById("mt").innerText = "5. Polc";
            </script>';
            break;
        case '6':
            echo'    <script>
            document.getElementById("mt").innerText = "1. Fiók";
            </script>';
            break;
        case '7':
            echo'    <script>
            document.getElementById("mt").innerText = "2. Fiók";
            </script>';
            break;
        case 'main':
            echo'    <script>
            document.getElementById("mt").innerText = "Hűtött Élelmiszerek Weboldala";
            </script>';
            break;
        case 'add':
            echo'    <script>
            document.getElementById("mt").innerText = "Regisztrálás";
            </script>';
            break;
        case 'login':
            echo'    <script>
            document.getElementById("mt").innerText = "Bejelentkezés";
            </script>';
            break;
        default:
            # code...
            break;
    }

    ?>




</body>
</html>