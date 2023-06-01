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
                        <input type="text" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                        <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">COUNTRY</label>
                        <input type="text" class="form-control" name="country">
                        <?php if (isset($errors['country'])): ?>
                            <p class="text-danger"><?php echo $errors['country'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <a type="button" href="index.php" class="btn btn-secondary">BACK</a>
                </form>
            </div>
        </div>
    </div>
</div>