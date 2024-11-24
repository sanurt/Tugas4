<?php
session_start();
if (!isset($_SESSION['data'])) {
    die('Tidak ada data yang ditemukan');
}

$data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Hasil Pendaftaran</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo htmlspecialchars($data['name']); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo htmlspecialchars($data['password']); ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?php echo htmlspecialchars($data['age']); ?></td>
        </tr>
        <tr>
            <th>Isi File</th>
            <td>
                <table>
                    <?php foreach ($data['fileContent'] as $line): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($line); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
        <tr>
            <th>Browser/OS</th>
            <td><?php echo htmlspecialchars($data['userAgent']); ?></td>
        </tr>
    </table>
</body>

</html>
