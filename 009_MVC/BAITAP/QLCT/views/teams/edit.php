<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <form method="post" action="?controller=team&action=update&id=<?= $r['id']; ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $r['id']; ?>" />
                            <div class="mb-3">
                                <label class="form-label">NAME</label>
                                <input type="text" value="<?php echo $r['name']; ?>" name="name" class="form-control">
                                <?php if (isset($errors['name'])) : ?>
                                    <p class="text-danger"><?php echo $errors['name'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">COUNTRY</label>
                                <input type="country" value="<?php echo $r['country']; ?>" class="form-control" name="country">
                                <?php if (isset($errors['country'])) : ?>
                                    <p class="text-danger"><?php echo $errors['country'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">IMAGE</label>
                                <?php if ($r['image']) : ?>
                                    <img src="<?= ROOT_URL . $r['image']; ?>" alt="<?= ROOT_URL . $r['name']; ?>" style="max-width: 200px;">
                                <?php endif; ?>
                                <input type="file" class="form-control" name="image">
                                <?php if (isset($errors['image'])) : ?>
                                    <p class="text-danger"><?php echo $errors['image'] ?></p>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary">SAVE</button>
                            <a type="button" href="?controller=team&action=index" class="btn btn-secondary">BACK</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: @yield('content') -->
    </div>
    <!-- @include('includes.footer') -->