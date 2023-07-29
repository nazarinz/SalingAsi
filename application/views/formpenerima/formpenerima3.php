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
        <h3>Keterangan Kebutuhan Asi</h3>
        <form method="post" action="savepagepenerima3">
            <label for="berat_badan_anak">Berat Badan Anak (satuan kilogram):</label>
            <input type="text" id="berat_badan_anak" name="berat_badan_anak" required />

            <label for="jumlah_asi">Jumlah asi yang dibutuhkan (satuan mili liter):</label>
            <input type="text" id="jumlah_asi" name="jumlah_asi" required />

            <label for="alasan">Alasan membutuhkan asi:</label>
            <textarea id="alasan" name="alasan" rows="4" cols="30" required></textarea>

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