<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="index.php?action=update&id=<?= $r['id'];?>" >
                    <input type="hidden" name="id" value="<?php echo $r['id']; ?>"/>
                    <div class="mb-3">
                        <label class="form-label">NAME</label>
                        <input type="text" value="<?php echo $r['product_name']; ?>" name="product_name" class="form-control">
                        <?php if (isset($errors['product_name'])): ?>
                            <p class="text-danger"><?php echo $errors['product_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRICE</label>
                        <input type="text" value="<?php echo $r['price']; ?>" class="form-control" name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRODUCT DESCRIPTION</label>
                        <input type="text" value="<?php echo $r['product_description']; ?>" class="form-control" name="product_description">
                        <?php if (isset($errors['product_description'])): ?>
                            <p class="text-danger"><?php echo $errors['product_description'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRODUCER</label>
                        <input type="text" value="<?php echo $r['producer']; ?>" class="form-control" name="producer">
                        <?php if (isset($errors['producer'])): ?>
                            <p class="text-danger"><?php echo $errors['producer'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <a type="button" href="index.php" class="btn btn-secondary">BACK</a>
                </form>
            </div>
        </div>
    </div>
</div>