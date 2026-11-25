<!doctype html>
<html>
  <head>
    <title><?= esc($title) ?></title>
  </head>
  <body>
    <h3>Waroeng Sedhajtera</h3>
    <table border="1">
      <caption>
        Tabel Harga Produk
      </caption>
      <tr>
        <th>Daftar Menu</th>
        <th>Harga</th>
        <th>Gambar</th>
      </tr>
      <tr>
        <td>Nasi Goreng</td>
        <td>10.000</td>
        <td><img src="<?= base_url('img/nasigoreng.jpg') ?>" width="145" height="150" /></td>
      </tr>
      <tr>
        <td>Nasi Pecel</td>
        <td>10.000</td>
        <td><img src="<?= base_url('img/nasipecel.jpg') ?>" width="145" height="150" /></td>
      </tr>
      <tr>
        <td>Ayam Goreng</td>
        <td>15.000</td>
        <td><img src="<?= base_url('img/ayamgoreng.jpg') ?>" width="145" height="150" /></td>
      </tr>
    </table>
  </body>
</html>
