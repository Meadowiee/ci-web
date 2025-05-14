<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h2>Register Data</h2>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Registration Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($source as $row) {?>
                    <tr>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['status']?></td>
                        <td><?=$row['regDate']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>