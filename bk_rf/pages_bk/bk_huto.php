<form action="menu.php?page=add_prod" method="post">
    <div class="d-flex justify-content-center pb-2 pt-2">
        <div class="form-group">
            <label for="shelf" class="control-label"></label>
            <select class="form-control" name="shelf" id="shelf">
                <option selected>Polc</option>
                <option value="1">1. Polc</option>
                <option value="2">2. Polc</option>
                <option value="3">3. Polc</option>
                <option value="4">4. Polc</option>
                <option value="5">5. Polc</option>
                <option value="6">1. Fiók</option>
                <option value="7">2. Fiók</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Termék neve</label>
            <input class="form-control" id="name" name="name" type="text">
        </div>
        <div class="form-group">
            <label for="db" class="control-label">Mennyiség</label>
            <input type="text" class="form-control" size="4" maxlength="4" id="db" name="db" list="nums">
        </div>
        <datalist id="nums" >
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


<form action="menu.php?page=1" method="post" id="one"></form>
<form action="menu.php?page=2" method="post" id="two"></form>
<form action="menu.php?page=3" method="post" id="three"></form>
<form action="menu.php?page=4" method="post" id="four"></form>
<form action="menu.php?page=5" method="post" id="five"></form>
<form action="menu.php?page=6" method="post" id="six"></form>
<form action="menu.php?page=7" method="post" id="seven"></form>

<div class="d-flex justify-content-center" role="group">
        <div  class="btn-group btn-group-lg btn-group-vertical p-5">
            <button type="submit" form="one" class="btn btn-default btn-primary">1. Polc</button>
            <button type="submit" form="two" class="btn btn-default btn-primary">2. Polc</button>
            <button type="submit" form="three" class="btn btn-default btn-primary">3. Polc</button>
            <button type="submit" form="four" class="btn btn-default btn-primary">4. Polc</button>
            <button type="submit" form="five" class="btn btn-default btn-primary">5. Polc</button>
            <button type="submit" form="six" class="btn btn-default btn-primary">1. Fiók</button>
            <button type="submit" form="seven" class="btn btn-default btn-primary">2. Fiók</button>
        </div>
</div>

<?php
    if (isset($_POST['name']) && isset($_POST['db']) && isset($_POST['shelf']) && strlen($_POST['shelf']) == 1)
    {
        require_once('api_bk/db_connect.php');
        require_once('api_bk/add_product.php');
        if ($result->num_rows == 0 && $conn->query($sql) === TRUE)
        {
            echo '<div class="alert alert-success">Termék(ek) hozzáadva!</div>';
        } else
        {
            echo '<div class="alert alert-warning">Ezen a polcon ilyen termék már van!</div>';
        }
    }


?>
    
