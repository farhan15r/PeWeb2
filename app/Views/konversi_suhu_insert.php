<form method="post" action="<?= site_url('tb1/konversi_suhu/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Satuan Suhu</td>
      <td>
        <select name="satuan_id">
          <?php foreach ($satuan_suhu as $satuan_list) : ?>
            <option value="<?= $satuan_list['id'] ?>"><?= $satuan_list['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Suhu</td>
      <td>
        <input type="number" name="suhu" value="" />
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