<form method="post" action="<?= site_url('tb1/konversi_suhu/' . $data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Satuan</td>
      <td>
        <select name="satuan_id">
          <?php foreach ($data_satuan as $satuan_list) : ?>
            <option value="<?= $satuan_list['id'] ?>" <?= $satuan_list['id'] == $data['satuan_id'] ? 'selected' : '' ?>><?= $satuan_list['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Suhu</td>
      <td>
        <input type="number" name="suhu" value="<?= $data['suhu'] ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('tb1/konversi_suhu/delete/' . $data['id']) ?>" onclick="return confirm('yakin cuy?????')">Delete</a>
      </td>
    </tr>
  </table>
</form>