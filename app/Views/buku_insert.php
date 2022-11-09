<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Insert Data Buku</h1>

<form method="post" action="<?= site_url('buku/insert') ?>">
  <?= csrf_field() ?>

  <div class="mb-3 row">
    <div class="col-sm-2 col-form-label">Kategori</div>
    <div class="col-sm-10">
      <select name="kategori_id" class="form-control form-select">
        <?php foreach ($data_kategori as $kategori) : ?>
          <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col-sm-2 col-form-label">Judul</div>
    <div class="col-sm-10">
      <input type="text" name="judul" class="form-control" />
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