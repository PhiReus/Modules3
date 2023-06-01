<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">TEN</th>
      <th scope="col">VI TRI</th>
      <th scope="col">CHI NHANH</th>
      <th scope="col">TUOI</th>
      <th scope="col">NGAY LAM VIEC</th>
      <th scope="col">LUONG</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $r['id'];?></th>
      <td><?= $r['ten'];?></td>
      <td><?= $r['vi_tri'];?></td>
      <td><?= $r['chi_nhanh'];?></td>
      <td><?= $r['tuoi'];?></td>
      <td><?= $r['ngay_lam_viec'];?></td>
      <td><?= $r['luong'];?></td>
    </tr>
  </tbody>
</table>
<a type="button" href="index.php" class="btn btn-secondary">BACK</a>