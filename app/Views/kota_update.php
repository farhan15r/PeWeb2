<form method="post" action="<?= site_url('kota/' . $data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Provinsi</td>
      <td>
        <?php foreach ($data_provinsi as $option) : ?>
          <input type="radio" name="provinsi_id" value="<?= $option['id'] ?>" <?= $data['provinsi_id'] == $option['id'] ? 'checked' : '' ?> />
          <label for="wilayah"><?= $option['nama'] ?></label>
        <?php endforeach ?>
      </td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('kota/delete/' . $data['id']) ?>" onclick="return confirm('yakin cuy?????')">Delete</a>
      </td>
    </tr>
  </table>
</form>