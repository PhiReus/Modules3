<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <form action="index.php?action=store" method="post">
                    <div class="mb-3">
                        <label class="form-label">NAME</label>
                        <input type="text" name="product_name" class="form-control">
                        <?php if (isset($errors['product_name'])): ?>
                        <p class="text-danger"><?php echo $errors['product_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRICE</label>
                        <input type="text" class="form-control" name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRODUCT DESCRIPTION</label>
                        <input type="text" class="form-control" name="product_description">
                        <?php if (isset($errors['product_description'])): ?>
                            <p class="text-danger"><?php echo $errors['product_description'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRODUCER</label>
                        <input type="text" class="form-control" name="producer">
                        <?php if (isset($errors['producer'])): ?>
                            <p class="text-danger"><?php echo $errors['producer'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <a type="button" href="index.php" class="btn btn-secondary">COME BACK</a>
                </form>
            </div>
        </div>
    </div>
</div>