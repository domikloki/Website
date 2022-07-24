



<form action="menu.php?page=login&add=1" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Felhasználónév</label>
        <input type="text" class="form-control" id="username" name="username" value="test">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Jelszó</label>
        <input type="password" class="form-control" id="password" name="password" value="test">
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Jogosultság</label>
        <select name="role" id="role" class="form-select" aria-label="Select example">
            <option value="1" selected>Jogosultság</option>
            <option value="0">Admin</option>
            <option value="1">Átlagos</option>
        </select>
    </div>
    <input type="submit" value="Hozzáadás" class="btn btn-primary">
</form>











