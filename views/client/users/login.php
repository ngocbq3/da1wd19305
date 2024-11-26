<?php include_once ROOT_DIR . "views/client/header.php" ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php if ($message != '') : ?>
                <div class="alert alert-success">
                    <?= $message ?>
                </div>
            <?php endif ?>
            <?php if ($error) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif ?>
            <!--THông báo đăng nhập thất bại-->

            <!-- Đăng nhập -->
            <div class="container">
                <h3>Đăng nhập</h3>
                <form action="<?= ROOT_URL . '?ctl=login' ?>" method="POST">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="loginEmail" placeholder="Nhập email">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "views/client/footer.php" ?>