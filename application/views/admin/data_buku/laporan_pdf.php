<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Buku</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/muaybook.png">
</head>

<body>

    <div class="box-body">
        <h3 align="center">Laporan Data Buku </h3>
        <table border="1" align="center">
            <thead style="background-color: aqua;">
                <tr>
                    <th>No.</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Bahasa</th>
                    <th>Subjek</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data_buku as $buku) :  ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $buku['judul'] ?></td>
                        <td><?php echo $buku['pengarang'] ?></td>
                        <td><?php echo $buku['penerbit'] ?></td>
                        <td><?php echo $buku['tahun'] ?></td>
                        <td><?php echo $buku['kategori'] ?></td>
                        <td><?php echo $buku['jumlah_buku'] ?></td>
                        <td><?php echo $buku['bahasa'] ?></td>
                        <td><?php echo $buku['subjek'] ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>