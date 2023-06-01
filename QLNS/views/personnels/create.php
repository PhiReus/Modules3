<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mới nhân sự
        </div>
        <div class="card-body">
            <div class="col-12">
                <form action="index.php?action=store" method="post">
                    <div class="mb-3">
                        <label class="form-label">TEN</label>
                        <input type="text" name="ten" class="form-control">
                        <?php if (isset($errors['ten'])) : ?>
                            <p class="text-danger"><?php echo $errors['ten'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">VI TRI</label>
                        <input type="text" class="form-control" name="vi_tri">
                        <?php if (isset($errors['vi_tri'])) : ?>
                            <p class="text-danger"><?php echo $errors['vi_tri'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CHI NHANH</label>
                        <input type="text" class="form-control" name="chi_nhanh">
                        <?php if (isset($errors['chi_nhanh'])) : ?>
                            <p class="text-danger"><?php echo $errors['chi_nhanh'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">TUOI</label>
                        <input type="text" class="form-control" name="tuoi">
                        <?php if (isset($errors['tuoi'])) : ?>
                            <p class="text-danger"><?php echo $errors['tuoi'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NGAY LAM VIEC</label>
                        <input type="date" class="form-control" name="ngay_lam_viec">
                        <?php if (isset($errors['ngay_lam_viec'])) : ?>
                            <p class="text-danger"><?php echo $errors['ngay_lam_viec'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">LUONG</label>
                        <input type="text" class="form-control" name="luong">
                        <?php if (isset($errors['luong'])) : ?>
                            <p class="text-danger"><?php echo $errors['luong'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <a type="button" href="index.php" class="btn btn-secondary">BACK</a>
                </form>
            </div>
        </div>
    </div>
</div>