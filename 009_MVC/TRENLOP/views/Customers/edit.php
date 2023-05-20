<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin khách hàng
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="index.php?action=update&id=<?= $r['id'];?>" >
                    <input type="hidden" name="id" value="<?php echo $r['id']; ?>"/>
                    <div class="mb-3">
                        <label class="form-label">NAME</label>
                        <input type="text" value="<?php echo $r['name']; ?>" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">EMAIL</label>
                        <input type="email" value="<?php echo $r['email']; ?>" class="form-control" name="email">
                        <?php if (isset($errors['email'])): ?>
                            <p class="text-danger"><?php echo $errors['email'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ADDRESS</label>
                        <input type="text" value="<?php echo $r['address']; ?>" class="form-control" name="address">
                        <?php if (isset($errors['address'])): ?>
                            <p class="text-danger"><?php echo $errors['address'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <a type="button" href="index.php" class="btn btn-secondary">COME BACK</a>
                </form>
            </div>
        </div>
    </div>
</div>