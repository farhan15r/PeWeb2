<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Update Data Buku</h1>

<form method="post" action="<?= site_url('buku/' . $data['id']) ?>">
  <?= csrf_field() ?>

  <div class="mb-3 row">
    <div class="col-sm-2 col-form-label">Kategori</div>
    <div class="col-sm-10">
      <select name="kategori_id" class="form-control form-select">
        <?php foreach ($data_kategori as $kategori) : ?>
          <?php if ($kategori['id'] == $data['kategori_id']) : ?>
            <option value="<?= $kategori['id'] ?>" selected><?= $kategori['nama'] ?></option>
          <?php else : ?>
            <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
          <?php endif ?>
        <?php endforeach ?>
      </select>
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col-sm-2 col-form-label">Judul</div>
    <div class="col-sm-10">
      <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control" />
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
      <a href="<?= site_url('buku/delete/' . $data['id']) ?>" onclick="return confirm('Yakin bro?')" class="btn btn-outline-secondary"><i class="fas fa-trash"></i></a>
    </div>
  </div>

</form>

<?= $this->endSection('content'); ?>