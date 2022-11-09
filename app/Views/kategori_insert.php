<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Insert Data Kategori</h1>

<form method="post" action="<?= site_url('kategori/insert') ?>">
  <?= csrf_field() ?>

  <div class="mb-3 row">
    <div class="col-sm-2 col-form-label">Nama</div>
    <div class="col-sm-10">
      <input type="text" name="nama" value="" class="form-control" />
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </div>
  </div>

</form>

<?= $this->endSection('content'); ?>