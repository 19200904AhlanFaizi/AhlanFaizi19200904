<html> 
    <head>

        <title>Tampil Data Mahasiswa</title> 
    </head> 
    <body>
    <center> 
        <table> 
            <tr> <th colspan="3"> Tampil Data Mahasiswa </th> </tr> 
            <tr> <td colspan="3"> <hr> </td> </tr> 
            <tr> <th>Nim</th> <th>:</th> <td> <?= $nim; ?> </td> </tr> 
            <tr> <td>Nama </td> <td>:</td> <td> <?= $nama; ?> </td> </tr> 
            <tr> <td>Alamat</td> <td>:</td> <td> <?= $alamat; ?> </td> </tr> 
            <tr> <td>Umur</td> <td>:</td> <td> <?= $umur; ?> </td> </tr> 
            <tr> <td colspan="3" align="center"> 
                    <a href="<?= base_url('mahasiswa'); ?>">Kembali</a> </td>


            </tr> 
        </table> 
    </center> 
</body> 
</html>