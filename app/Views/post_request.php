<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
</head>

<body>

    <form method="post" action="<?= site_url('post_response') ?>">
        Nama: <input type="text" name="nama" value="" />
        <br>
        Umur: <input type="text" name="umur" value="" />
        <button>Submit</button>
    </form>

</body>

</html>