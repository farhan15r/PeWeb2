<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Data Kategori Buku</h1>

<a href="<?= site_url('kategori/insert') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table class="table table-light table-striped " id="dataTable" width="100%" cellspacing="0" style="max-width: 700px;">
  <thead class="table-dark">
    <tr>
      <th style="width: 10px;">No</th>
      <th>Nama</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $num = 1 ?>
    <?php foreach ($list as $row) : ?>
      <tr class="align-middle">
        <td style="text-align: center;"><?= $num++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td nowrap>
          <a href="<?= site_url('kategori/' . $row['id']) ?>" class="btn btn-info"><i class="fas fa-edit"></i> Update</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?= $this->endSection('content'); ?>