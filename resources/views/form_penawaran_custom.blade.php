<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengguna</title>
</head>
<body>

    <h2>Formulir Pengguna</h2>

    <form action="/form/submit_form" method="POST">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <label for="no_telp">No Telepon:</label>
        <input type="text" id="no_telepon" name="no_telepon" required>

        <br>

        <label for="nama_perusahaan">Nama Perusahaan:</label>
        <input type="text" id="nama_perusahaan" name="nama_perusahaan" required>

        <br>

        <label for="alamat">Alamat Lengkap:</label>
        <textarea id="alamat" name="alamat" required></textarea>

        <br>

        <label for="website">Website:</label>
        <input type="text" id="website" name="website" required>

        <br>

        <label for="referensi_web">Referensi:</label>
        <input type="text" id="referensi_web" name="referensi_web" required>

        <br>

        <label for="layanan">Layanan yang Diinginkan:</label>
        <select id="layanan" name="layanan[]">
            <option value="layanan1">Layanan 1</option>
            <option value="layanan2">Layanan 2</option>
            <option value="layanan3">Layanan 3</option>
            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
        </select>

        <br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>