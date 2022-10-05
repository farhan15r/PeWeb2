<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Titik Beku</th>
      <th>Titik Didih</th>
    </tr>
  </thead>
  <tbody>
    <?php $num = 1 ?>
    <?php foreach ($list as $row) : ?>
      <tr>
        <td><?= $num++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['titik_beku']; ?></td>
        <td><?= $row['titik_didih']; ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>