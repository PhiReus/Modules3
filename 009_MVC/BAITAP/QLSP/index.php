<?php
// Ket noi voi DB
require_once 'db.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý khách hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Trang chủ</a>
                <!DOCTYPE html>
                </div>
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="list.php" method="get">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." name="s" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </nav>
        <?php
        // Client gui yeu cau den  ProductController, toi PT index, de lay toan bo du lieu ra

        /*
        index.php?controller=product&action=index
        index.php?controller=product&action=create
        index.php?controller=product&action=edit&id=5
        index.php?controller=product&action=show&id=5

        index.php?controller=customer&action=index
        */
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'product';
        switch ($controller) {
            case 'product':
                require_once 'controllers/ProductController.php';
                $objController = new CustomerController();
                break;
                // case 'user':
                //     require_once 'controllers/UserController.php';
                //     $objController = new UserController();
                //     break;
                // case 'customer':
                //     require_once 'controllers/CustomerController.php';
                //     $objController = new CustomerController();
                //     break;
            default:
                # code...
                break;
        }
        switch ($action) {
            case 'index':
                $objController->index();
                break;
            case 'create':
                $objController->create();
                break;
            case 'store':
                $objController->store();
                break;
            case 'edit':
                $objController->edit();
                break;
            case 'update':
                $objController->update();
                break;
            case 'show':
                $objController->show();
                break;
            case 'destroy':
                $objController->destroy();
                break;
            default:
                # code...
                break;
        }
        ?>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>