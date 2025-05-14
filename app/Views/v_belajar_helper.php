<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Helper</title>
</head>
<body>
    hello
    <?php 
        $name = [
            'name' => 'nama',
            'placeholder' => 'Enter your name'
        ];
        $opsi = [
            'sma' => 'Sekolah Menengah Atas',
            's1' => 'Strata 1'
        ];

        echo form_open();
        echo 'Nama: ';
        echo form_input($name);
        echo '<br>';
        echo 'Pendidikan : ';
        echo form_dropdown('pendidikan', $opsi, 'sma');
        echo form_close();
    ?>
</body>
</html>