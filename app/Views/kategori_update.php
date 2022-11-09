<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Update Data Buku</h1>

<form method="post" action="<?= site_url('kategori/' . $data['id']) ?>">
  <?= csrf_field() ?>

  <div class="mb-3 row">
    <div class="col-sm-2 col-form-label">Nama</div>
    <div class="col-sm-10">
      <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" />
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
      <a href="<?= site_url('kategori/delete/' . $data['id']) ?>" onclick="return confirm('Yakin bro?')" class="btn btn-outline-secondary"><i class="fas fa-trash"></i></a>
    </div>
  </div>

</form>

<?= $this->endSection('content'); ?>