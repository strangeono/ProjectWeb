<div class="container my-5">
    <form action = "../login.php" class="p-4 p-md-5 border rounded-3 bg-body-tertiary" style="max-width: 400px; margin: 0 auto;" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="login" name = "loginauth">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name = "passwordauth">
                <label for="floatingPassword">Пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-warning" type="submit">Войти</button>
    </form>
</div>