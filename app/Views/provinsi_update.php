<?php //dd($data)
?>

<form method="post" action="<?= site_url('provinsi/' . $data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" />
      </td>
    </tr>
    <tr>
      <td>Wilayah</td>
      <td>
        <input type="radio" name="wilayah" value="WIB" <?= $data['wilayah'] == 'WIB' ? 'checked' : '' ?> /> <label for="wilayah">WIB</label>
        <input type="radio" name="wilayah" value="WITA" <?= $data['wilayah'] == 'WITA' ? 'checked' : '' ?> /> <label for="wilayah">WITA</label>
        <input type="radio" name="wilayah" value="WIT" <?= $data['wilayah'] == 'WIT' ? 'checked' : '' ?> /> <label for="wilayah">WIT</label>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">update</button>
      </td>
    </tr>
  </table>
</form>