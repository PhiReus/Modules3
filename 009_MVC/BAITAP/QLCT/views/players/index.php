<div class="main-panel">
    <div class="content-wrapper">
        <!-- @yield('content') -->
        <div class="page-header">
            <h3 class="page-title">Quản lý cầu thủ</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://localhost/m3/009_MVC/BAITAP/QLCT/index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Quản lý cầu thủ </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <form action="index.php" method="get">
                            <div class="row mb-2">
                                <div class="col">
                                    <a href="http://localhost/m3/009_MVC/BAITAP/QLCT/index.php?action=create" class="btn btn-primary"> Thêm mới </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Nhập ID" class="form-control" name="s1" />
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Nhập thông tin" class="form-control" name="s" />
                                </div>
                                
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary "> Tìm </button>
                                    <a href="http://localhost/m3/009_MVC/BAITAP/QLCT/index.php" class="btn btn-info"> Đặt lại </a>
                                    <!-- <button  type="button" class="btn btn-info"> Đặt lại </button> -->
                                </div>
                            </div>
                        </form>

                        <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="list.php" method="get">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..." name="s" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form> -->

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>STT</th>
                                        <th>NAME</th>
                                        <th>DATE</th>
                                        <th>COUNTRY</th>
                                        <th>IMAGE</th>
                                        <th>CLB</th>
                                        <th>ATC</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($players['players'] as $r) : ?>
                                        <tr>
                                            <td><?php echo $r->id ?></td>
                                            <td><?php echo $r->name ?></td>
                                            <td><?php echo $r->date ?></td>
                                            <td><?php echo $r->country ?></td>
                                            <td><img width="100" src="<?php echo ROOT_URL . $r->image; ?>" alt=""> </td>
                                            <td><?php echo $r->team_name ?></td>
                                            <td><a href="index.php?action=destroy&id=<?php echo $r->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                                                <a href="index.php?action=show&id=<?php echo $r->id; ?>" class="btn btn-info btn-sm">See</a>
                                                <a href="index.php?action=edit&id=<?php echo $r->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                        <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php if ($players['total_records'] > $players['players_per_page']) : ?>
                        <div class="pagination justify-content-center">
                            <?php
                            $total_pages = ceil($players['total_records'] / $players['players_per_page']);
                            $visible_pages = min($total_pages, 3);
                            $start_page = max(1, $players['current_page'] - 1);
                            $end_page = min($start_page + $visible_pages - 1, $total_pages);
                            ?>

                            <?php if ($players['current_page'] > 1) : ?>
                                <a class="page-link" href="?page=<?php echo $players['current_page'] - 1; ?>" aria-label="Trang trước">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            <?php endif; ?>

                            <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
                                <?php if ($i == $players['current_page']) : ?>
                                    <a class="page-link active" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                <?php else : ?>
                                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if ($players['current_page'] < $total_pages) : ?>
                                <a class="page-link" href="?page=<?php echo $players['current_page'] + 1; ?>" aria-label="Trang sau">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
