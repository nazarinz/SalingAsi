<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPEhtml>
    <html>

    <head>
        <title>Formulir Pendonor 2/3</title>
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
        <h2>Daftar Pendonor</h2>
        <h3>Pertanyaan Kesehatan Pendonor</h3>
        <h4>SalingAsi berkomitmen untuk menjaga kerahasiaan data kesehatan anda. Harap isi data dengan benar</h4>
        <form method="post" action="savepagependonor2">
            <div class="question-group">
                <label for="q_kelebihanasi" class="question">Apakah Anda memiliki kelebihan ASI?</label>
                <div class="answer">
                    <input type="radio" id="ya1" name="q_kelebihanasi" value="ya" required />
                    <label for="ya1">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak1" name="q_kelebihanasi" value="tidak" />
                    <label for="tidak1">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andasehat" class="question">Apakah hari ini Anda sehat?</label>
                <div class="answer">
                    <input type="radio" id="ya2" name="q_andasehat" value="ya" required />
                    <label for="ya2">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak2" name="q_andasehat" value="tidak" />
                    <label for="tidak2">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andaperokok" class="question">Apakah Anda perokok aktif?</label>
                <div class="answer">
                    <input type="radio" id="ya3" name="q_andaperokok" value="ya" required />
                    <label for="ya3">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak3" name="q_andaperokok" value="tidak" />
                    <label for="tidak3">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andaalkohol" class="question">Apakah Anda mengomsumsi alkohol?</label>
                <div class="answer">
                    <input type="radio" id="ya4" name="q_andaalkohol" value="ya" required />
                    <label for="ya4">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak4" name="q_andaalkohol" value="tidak" />
                    <label for="tidak4">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andavege" class="question">Apakah Anda vegetarian murni dan tidak mendapatkan B6, B12?</label>
                <div class="answer">
                    <input type="radio" id="ya5" name="q_andavege" value="ya" required />
                    <label for="ya3">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak5" name="q_andavege" value="tidak" />
                    <label for="tidak5">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andaseks" class="question">Apakah Anda pernah melakukan seks bebas?</label>
                <div class="answer">
                    <input type="radio" id="ya6" name="q_andaseks" value="ya" required />
                    <label for="ya6">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak6" name="q_andaseks" value="tidak" />
                    <label for="tidak6">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andanarkoba" class="question">Apakah Anda pernah atau sedang menggunakan narkotika dan obat terlarang?</label>
                <div class="answer">
                    <input type="radio" id="ya7" name="q_andanarkoba" value="ya" required />
                    <label for="ya7">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak7" name="q_andanarkoba" value="tidak" />
                    <label for="tidak7">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andatato" class="question">Apakah Anda memilki tato dan tindik?</label>
                <div class="answer">
                    <input type="radio" id="ya8" name="q_andatato" value="ya" required />
                    <label for="ya8">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak8" name="q_andatato" value="tidak" />
                    <label for="tidak8">Tidak</label>
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