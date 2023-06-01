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
                        <input type="text" value="<?php echo $r['name']; ?>" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRICE</label>
                        <input type="text" value="<?php echo $r['country']; ?>" class="form-control" name="country">
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