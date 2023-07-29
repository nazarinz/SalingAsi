<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPEhtml>
    <html>

    <head>
        <title>Formulir Pendonor 3/3</title>
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
        <h4>Pada hari ini <span id="tanggal"></span>, Saya bersedia menyumbangkan ASI secara sukarela melalui SalingAsi dengan identitas pendonor sebagai berikut.</h4>
        <form method="post" action="savepagependonor3">

            <div class="question-group">
                <label for="q_andahivaids" class="question">Apakah Anda pernah menyidap HIV/AIDS?</label>
                <div class="answer">
                    <input type="radio" id="ya1" name="q_andahivaids" value="ya" required />
                    <label for="ya1">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak1" name="q_andahivaids" value="tidak" />
                    <label for="tidak1">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andahepatitis" class="question">Apakah anda pernah menyidap Hepatitis B?</label>
                <div class="answer">
                    <input type="radio" id="ya2" name="q_andahepatitis" value="ya" required />
                    <label for="ya2">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak2" name="q_andahepatitis" value="tidak" />
                    <label for="tidak2">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andahepatitisc" class="question">Apakah Anda pernah menyidap Hepatitis C?</label>
                <div class="answer">
                    <input type="radio" id="ya3" name="q_andahepatitisc" value="ya" required />
                    <label for="ya3">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak3" name="q_andahepatitisc" value="tidak" />
                    <label for="tidak3">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andasifilis" class="question">Apakah Anda pernah menyidap Sifilis?</label>
                <div class="answer">
                    <input type="radio" id="ya4" name="q_andasifilis" value="ya" required />
                    <label for="ya4">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak4" name="q_andasifilis" value="tidak" />
                    <label for="tidak4">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andahpv" class="question">Apakah Anda pernah menyidap Human Papiloma Virus (HPV)?</label>
                <div class="answer">
                    <input type="radio" id="ya5" name="q_andahpv" value="ya" required />
                    <label for="ya3">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak5" name="q_andahpv" value="tidak" />
                    <label for="tidak5">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andakanker" class="question">Apakah Anda pernah pernah menyidap Kanker?</label>
                <div class="answer">
                    <input type="radio" id="ya6" name="q_andakanker" value="ya" required />
                    <label for="ya6">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak6" name="q_andakanker" value="tidak" />
                    <label for="tidak6">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andatbc" class="question">Apakah Anda pernah pernah menyidap TBC?</label>
                <div class="answer">
                    <input type="radio" id="ya7" name="q_andatbc" value="ya" required />
                    <label for="ya7">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak7" name="q_andatbc" value="tidak" />
                    <label for="tidak7">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andaepilepsy" class="question">Apakah Anda pernah menyidap Epilepsy?</label>
                <div class="answer">
                    <input type="radio" id="ya8" name="q_andaepilepsy" value="ya" required />
                    <label for="ya8">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak8" name="q_andaepilepsy" value="tidak" />
                    <label for="tidak8">Tidak</label>
                </div>
            </div>

            <div class="question-group">
                <label for="q_andainfeksipayudara" class="question">Apakah Anda pernah menyidap infeksi payudara?</label>
                <div class="answer">
                    <input type="radio" id="ya9" name="q_andainfeksipayudara" value="ya" required />
                    <label for="ya9">Ya</label>
                </div>
                <div class="answer">
                    <input type="radio" id="tidak9" name="q_andainfeksipayudara" value="tidak" />
                    <label for="tidak9">Tidak</label>
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