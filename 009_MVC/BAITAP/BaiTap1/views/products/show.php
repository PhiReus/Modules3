
Chi tiết sản phẩm
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">PRODUCT DESCRIPTION</th>
      <th scope="col">PRODUCER</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $r['id'];?></th>
      <td><?= $r['product_name'];?></td>
      <td><?= $r['price'];?></td>
      <td><?= $r['product_description'];?></td>
      <td><?= $r['producer'];?></td>
    </tr>
  </tbody>
</table>
