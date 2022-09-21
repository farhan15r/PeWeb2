<form method="post" action="<?= site_url('provinsidd/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="" />
      </td>
    </tr>
    <tr>
      <td>Wilayah</td>
      <td>
        <select name="wilayah" id="">
          <option value="WIB">WIB</option>
          <option value="WITA">WITA</option>
          <option value="WIT">WIT</option>
        </select>
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