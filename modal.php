<link href="css/styles.css" rel="stylesheet">
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center mdtext" id="loginModalLabel">Авторизация</h5>
                <span aria-hidden="true" class="mdspan" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 feather feather-x-circle" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M15 9l-6 6M9 9l6 6" />
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <!-- Форма входа в личный кабинет -->
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" placeholder="Логин">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Пароль">
                    </div>
                    <div class="mb-3 text-left">
                        <a href="#" class="text-decoration-none mdhref" >Забыли пароль?</a>
                    </div>
                    <div class="mb-3 text-center">
                        <a href="lk.php" class="btn btn-primary w-100" style="background-color: #4170B7">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>