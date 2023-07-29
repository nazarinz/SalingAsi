<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPEhtml>
    <html>

    <head>
        <title>Contoh Formulir</title>
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
            input[type='date'],
            textarea {
                width: 50%;
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
            
            .question-group {
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-bottom: 10px;
            }
            
            .answer {
                margin-right: 20px;
            }
            
            .answer label {
                display: inline-block;
                margin-right: 5px;
            }
        </style>
    </head>

    <body>
        <h2>Daftar Resipien</h2>
        <h3>Bayi Resipien</h3>
        <form method="post" action="savepagepenerima2">
            <label for="nama_bayi">Nama bayi Resipien:</label>
            <input type="text" id="nama_bayi" name="nama_bayi" required />

            <label for="tanggal_lahir">Tanggal Lahir bayi:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required />

            <div class="question-group">
                <label for="jenis_kelamin" class="question">Jenis Kelamin</label>
                <div class="answer">
                    <input type="radio" id="perempuan1" name="jenis_kelamin" value="Perempuan" required />
                    <label for="perempuan1">Perempuan</label>
                </div>
                <div class="answer">
                    <input type="radio" id="Laki_laki1" name="jenis_kelamin" value="Laki-laki" />
                    <label for="Laki_laki1">Laki-laki</label>
                </div>
            </div>

            <h3>Keterangan Tambahan</h3>

            <div class="question-group">
                <label for="bayi_adopsi" class="question">Apakah Resipien adalah bayi adopsi</label>
                <div class="answer">
                    <input type="radio" id="ya2" name="bayi_adopsi" value="ya" required />
                    <label for="ya2">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak2" name="bayi_adopsi" value="tidak" />
                    <label for="tidak2">Tidak</label>
                </div>
            </div>

            <input type="submit" value="Lanjut" />
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