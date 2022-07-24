<form action="menu.php?page=huto" method="post">
    <button class="btn btn-primary" type="submit">Vissza</button>
</form>
<?php
/*
<?php
    $tempshelf = $page;
?>

<form action="menu.php?page=add_prod" method="post">
    <div class="d-flex justify-content-center pb-2 pt-2">
        <input type="hidden" id="shelf" name="shelf" value="<?php $tempshelf ?>">
        <div class="form-group">
            <label for="name" class="control-label">Termék neve</label>
            <input class="form-control easyui-textbox" id="name" name="name" type="text">
        </div>
        <div class="form-group">
            <label for="db" class="control-label">Mennyiség</label>
            <input class="form-control" size="4" maxlength="4" id="db" name="db" type="text" list="nums">
        </div>
        <datalist id="nums">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </datalist>

    </div>
    <div class="d-flex justify-content-center pb-2 pt-2">
        <button type="submit" class="btn btn-default btn-primary" style="width: 120px">Hozzáadás</button>
    </div>
</form>
*/
?>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <td>+</td>
            <td>Termék Neve</td>
            <td>Mennyiség</td>
            <td>-</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $name = "";
        require_once("api_bk/db_connect.php");
        require_once("api_bk/get_products.php");
        $name = "";
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                if ((int)$page == $row['shelf']) {
                    echo '
                    <tr>
                        <td>
                            <form action="menu.php?page=plus" id="plus" method="post">
                                <button value="'.$row['name'].'" id="'.$row['name'].'" class="btn-primary" type="submit"><img src="img/gblue.png" width="20" height="20"></button>'.'
                                <input type="hidden" name="name" id="name" value="'.$row['name'].'">
                                <input type="hidden" name="shf" id="shf" value="'.$row['shelf'].'">
                            </form>
                        </td>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['db'] . '</td>
                        <td>
                            <form action="menu.php?page=take" id="take" method="post">
                                <button value="'.$row['name'].'" id="'.$row['name'].'" class="btn-primary" type="submit"><img src="img/red.png" width="20" height="20"></button>'.'
                                <input type="hidden" name="name" id="name" value="'.$row['name'].'">
                                <input type="hidden" name="shf" id="shf" value="'.$row['shelf'].'">
                            </form>
                        </td>
                    </tr>
                ';
                }

            }
        }


        ?>
    </tbody>
</table>


