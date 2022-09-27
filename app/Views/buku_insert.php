<form method="post" action="<?= site_url('buku/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Kategori</td>
      <td>
        <select name="kategori_id">
          <?php foreach($data_kategori as $kategori):?>
          <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Judul</td>
      <td>
        <input type="text" name="judul" value="" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
      </td>
    </tr>
  </table>
</form>