<?php //dd($data)
?>

<form method="post" action="<?= site_url('provinsidd/' . $data['id']) ?>">
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
        <select name="wilayah" id="">
          <option value="WIB" <?= $data['wilayah'] == 'WIB' ? 'selected' : '' ?>>WIB</option>
          <option value="WITA" <?= $data['wilayah'] == 'WITA' ? 'selected' : '' ?>>WITA</option>
          <option value="WIT" <?= $data['wilayah'] == 'WIT' ? 'selected' : '' ?>>WIT</option>
        </select>
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