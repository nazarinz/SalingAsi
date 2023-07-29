<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulir Penerima</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #5FBECD;
            padding: 20px;
        }
        
        h2 {
            color: #333;
        }
        
        h4 {
            color: #666;
        }
        
        form {
            background-color: #fff;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        
        input[type='text'],
        input[type='email'],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        
        input[type='submit'] {
            background-color: #5FBECD;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type='submit']:hover {
            background-color: #5FBECD;
        }
    </style>
</head>

<body>
    <h2>Daftar Penerima</h2>
    <h4>Pada hari ini <span id="tanggal"></span>, Saya bersedia menjadi resipen ASI melalui Saling Asi dengan identitas sebagai berikut.</h4>
    <form method="post" action="<?php echo base_url('FormPenerima/savepagepenerima1'); ?>">
        <label for="no_kk">Nomor Kartu Keluarga:</label>
        <input type="text" id="no_kk" name="no_kk" required>

        <label for="nama_ibu_penerima">Nama ibu resipen:</label>
        <input type="text" id="nama_ibu_penerima" name="nama_ibu_penerima" required>

        <label for="agama_ibu_penerima">Agama ibu resipen:</label>
        <input type="text" id="agama_ibu_penerima" name="agama_ibu_penerima" required>

        <label for="pekerjaan">Pekerjaan:</label>
        <input type="text" id="pekerjaan" name="pekerjaan" required>

        <label for="no_hp">Nomor HP:</label>
        <input type="text" id="no_hp" name="no_hp" required>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" cols="30" required></textarea>

        <input type="submit" value="Lanjut">
    </form>

    <script>
        var today = new Date();
        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        var formattedDate = today.toLocaleDateString('id-ID', options);
        document.getElementById('tanggal').textContent = formattedDate;
    </script>
</body>

</html>