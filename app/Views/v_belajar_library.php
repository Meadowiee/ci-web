<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
    <h1>Library Things</h1>

<?php 
$session = session();
if($session->has('logged_in')) { ?>
    <h3>Anda sudah login, <?=session()->get('username')?></h3>
    <a href="logout" name="logout">Logout</a>
    <?php echo '<a href="'.site_url('belajar-library/cobaLib').'" name="cobaLib">Check nama</a>' ?>
<?php } else {?>
    <h3>Anda belum login </h3>
    <a href="login" name="login">Login</a>
<?php } ?>
</body>
</html>