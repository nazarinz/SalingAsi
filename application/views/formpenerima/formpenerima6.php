<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPEhtml>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pernyataan dan Tombol Setuju</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding: 20px;
            }
            
            #statement {
                font-size: 20px;
                margin-bottom: 20px;
            }
            
            #agreeButton {
                padding: 10px 20px;
                font-size: 16px;
                background-color: #5FBECD;
                color: white;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }
        </style>
    </head>

    <body>
        <h1>Halaman Persetujuan Penerima ASI</h1>
        <p id="statement">Demikian formulir pendaftaran calon Resipen ASI ini saya isi dengan sebenar-benarnya:</p>
        <!-- Ganti teks pernyataan sesuai kebutuhan -->
        <p>Dan dengan ini saya menyetujui dan bersedia mengikuti prosedur lanjutan dalam proses Donor ASI SalingAsi yang sesuai kaidah medis dan agama.</p>
        <button id="agreeButton">Setuju</button>

        <script>
            // Menggunakan event listener untuk menangani klik tombol "Setuju"
            document.getElementById('agreeButton').addEventListener('click', function() {
                alert('Anda telah menyetujui pernyataan.');
                window.location.href = "https://asikita.framer.website/";
            });
        </script>
    </body>

    </html>