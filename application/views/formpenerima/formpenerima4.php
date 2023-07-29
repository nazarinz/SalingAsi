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
                padding: 20px;
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
            
            input[type='radio'] {
                margin-right: 5px;
            }
            
            .question-group {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            
            .question {
                flex: 1;
            }
            
            .answer {
                display: flex;
                align-items: center;
                margin-right: 20px;
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
        <h2>Daftar Resipien</h2>
        <h4>Pertanyaan kondisi Bayi</h4>
        <form method="post" action="savepagepenerima4">
            <div class="question-group">
                <label for="bayi_prematur" class="question">Apakah bayi terlahir prematur?</label>
                <div class="answer">
                    <input type="radio" id="ya1" name="bayi_prematur" value="ya" required />
                    <label for="ya1">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak1" name="bayi_prematur" value="tidak" />
                    <label for="tidak1">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="bayi_giziburuk" class="question">Apakah bayi mengalami gizi buruk?</label>
                <div class="answer">
                    <input type="radio" id="ya2" name="bayi_giziburuk" value="ya" required />
                    <label for="ya2">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak2" name="bayi_giziburuk" value="tidak" />
                    <label for="tidak2">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="bayi_kelainan" class="question">Apakah bayi mengalami kelainan bawaan?</label>
                <div class="answer">
                    <input type="radio" id="ya3" name="bayi_kelainan" value="ya" required />
                    <label for="ya3">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak3" name="bayi_kelainan" value="tidak" />
                    <label for="tidak3">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="bayi_sakitberat" class="question">Apakah bayi sedang sakit atau mengalami sakit berat?</label>
                <div class="answer">
                    <input type="radio" id="ya4" name="bayi_sakitberat" value="ya" required />
                    <label for="ya4">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak4" name="bayi_sakitberat" value="tidak" />
                    <label for="tidak4">Tidak</label>
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