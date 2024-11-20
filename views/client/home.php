<?php include_once ROOT_DIR . "views/client/header.php" ?>

<div class="container mt-5">
    <h1>Thú cưng mới nhất</h1>
    <div class="row g-4">
        <?php foreach ($pets as $pet) : ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3">
                <div class="product-box">
                    <img src="<?= $pet['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="<?= ROOT_URL . '?ctl=detail&id=' . $pet['id'] ?>">
                            <h5 class="product-name"><?= $pet['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price">
                                <?= number_format($pet['price']) ?> vnđ
                            </span>
                        </div>
                        <div class="product-buttons">

                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <h1 class="mt-3">Sản phẩm cho thú cưng</h1>
    <div class="row g-4">
        <?php foreach ($list_products as $pro): ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3">
                <div class="product-box">
                    <img src="<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="<?= ROOT_URL . '?ctl=detail&id=' . $pro['id'] ?>">
                            <h5 class="product-name"><?= $pro['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price">
                                <?= number_format($pro['price']) ?> vnđ
                            </span>
                        </div>
                        <div class="product-buttons">

                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php include_once ROOT_DIR . "views/client/footer.php" ?>