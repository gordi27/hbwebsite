<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand shadow-none" href="index.php">Отель</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class='ms-auto d-flex'>
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Войти
                </button>

                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Регистрация
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Всплывающие окна для Входа/Регистрации -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="loginLabel">
                        <i class="bi bi-person fs-3 me-2"></i> Вход
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Почта</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Пароль</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class='d-flex align-items-center justify-content-between mb-2'>
                        <button type='submit' class='btn btn-dark shadown-none'>OK</button>
                        <a href="javascript: void(0)" class='text-secondary text-decoration-none'>Забыли пароль?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="registerLabel">
                        <i class="bi bi-person fs-3 me-2"></i> Регистрация
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class='row'>
                        <div class="mb-3">
                            <label class="form-label">ФИО</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Почта</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Телефон</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Придумайте пароль</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Подтвердите пароль</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <button type="submit" class="btn btn-dark shadow-none mt-3">Зарегистрироваться</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>