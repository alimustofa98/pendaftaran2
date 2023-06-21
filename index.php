<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran SMK PGR 07</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>


<body>
    <div class="wrap">
        <div class="container">
            <h1 style="color: white;">Pendaftaran Smk PGRI 07 Malang</h1>
            <form action="simpan-data.php" method="POST">

                <marquee>Silahkan Mendaftar Di SMKN 03 Malang Sesui Juruhan Pilihan</marquee>

                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input style="border-radius: 4px;" type=" text" name="nama_lengkap"></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><input style="border-radius: 4px;" type="text" name="asal_sekolah"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" style="border-radius: 4px;"></textarea></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir" style="border-radius: 4px;"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                        </td>
                    <tr>
                        <td>No Telpon</td>
                        <td>:</td>
                        <td><input style="border-radius: 4px;" type="number" name="no_telpon"></td>
                    </tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input style="border-radius: 4px;" type="email" name="email"></td>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select style="border-radius: 4px;" name="kota">
                                <option>--Pilih Jurusan--</option>
                                <option>APK</option>
                                <option>TKJ</option>
                                <option>RPL</option>
                                <option>TTB</option>
                                <option>Teknik Listrik</option>
                                <option>Teknik Mesin</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button style="background-color: greenyellow;" type=" submit" name="kirim" value="kirim">kirim</button>

                            <button style="background-color: red;" type="reset" name="batal" value="batal">Batal</button>
                        </td>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align: center; font-size: 65%; color:black; ">&copy;Copyright 2023 Alimustofa.com</td>
                    </tr>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</body>

</html>