<?php include_once 'db.php'; ?>

<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Danh sách sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="index.php?action=create">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>PRODUCT DECRIPTION</th>
                        <th>PRODUCER</th>
                        <th>ACT</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($items as $r): ?>
                    <tr>
                        <td><?php echo $r['id'] ?></td>
                        <td><?php echo $r['product_name'] ?></td>
                        <td><?php echo $r['price'] ?></td>
                        <td><?php echo $r['product_description'] ?></td>
                        <td><?php echo $r['producer'] ?></td>
                        <td><a href="index.php?action=destroy&id=<?php echo $r['id']; ?>"
                               class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                            <a href="index.php?action=show&id=<?php echo $r['id'];?>" class="btn btn-info btn-sm">See</a> 
                            <a href="index.php?action=edit&id=<?php echo $r['id']; ?>"
                               class="btn btn-primary btn-sm">Edit</a></td>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
