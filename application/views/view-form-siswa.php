<html>

<head>
    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('Siswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('nama');?></div>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('nis');?></div>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('kelas');?></div>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tglLahir" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('tanggal lahir');?></div>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tptLahir" id="tptLahir" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('tempat lahir');?></div>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Required">
                        <div class="col-sm-6 col-danger"><?= form_error('alamat');?></div>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jnsKelamin" id="jnsKelamin" value="Laki-laki">Laki-laki<br>
                        <input type="radio" name="jnsKelamin" id="jnsKelamin" value="Perempuan">Perempuan<br> 
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                            <option value="proyestan">Protestan</option>
                            <option value="khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>