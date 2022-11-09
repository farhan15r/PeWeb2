<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Data Buku</h1>

<a href="<?= site_url('buku/insert') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table class="table table-light table-striped" id="dataTable" width="100%" cellspacing="0">
  <thead class="table-dark">
    <tr>
      <th style="width: 10px;">No</th>
      <th>Kategori</th>
      <th>Judul</th>
      <th>Stok</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $num = 1 ?>
    <?php foreach ($list as $row) : ?>
      <tr class="align-middle">
        <td style="text-align: center;"><?= $num++; ?></td>
        <td><?= $row['kategori_nama']; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['stok']; ?></td>
        <td nowrap>
          <a href="<?= site_url('buku/' . $row['id']) ?>" class="btn btn-info"><i class="fas fa-edit"></i> Update</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br />
<a href="<?= site_url('buku_export_xls') ?>" class="btn btn-success"><i class="fas fa-download"></i> Export Excel</a>
<a href="<?= site_url('buku_export_pdf') ?>" class="btn btn-danger"><i class="fas fa-download"></i> Export PDF</a>

<?= $this->endSection('content'); ?>