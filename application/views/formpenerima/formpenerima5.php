<!DOCTYPE html>
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
    <h4>Pertanyaan Kondisi ibu</h4>
    <form method="post" action="savepagepenerima5">
        <div class="question-group">
            <label for="ibu_sadar" class="question">Apakah ibu tidak sadarkan diri?</label>
            <div class="answer">
                <input type="radio" id="ya1" name="ibu_sadar" value="ya" required />
                <label for="ya1">Ya</label>
            </div>
            <div class="answer">
                <input type="radio" id="tidak1" name="ibu_sadar" value="tidak" />
                <label for="tidak1">Tidak</label>
            </div>
        </div>

        <div class="question-group">
            <label for="ibu_terpisah" class="question">Apakah ibu terpisah dari bayi?</label>
            <div class="answer">
                <input type="radio" id="ya2" name="ibu_terpisah" value="ya" required />
                <label for="ya2">Ya</label>
            </div>
            <div class="answer">
                <input type="radio" id="tidak2" name="ibu_terpisah" value="tidak" />
                <label for="tidak2">Tidak</label>
            </div>
        </div>

        <div class="question-group">
            <label for="ibu_meninggal" class="question">Apakah ibu meninggal dunia?</label>
            <div class="answer">
                <input type="radio" id="ya4" name="ibu_meninggal" value="ya" required />
                <label for="ya4">Ya</label>
            </div>
            <div class="answer">
                <input type="radio" id="tidak4" name="ibu_meninggal" value="tidak" />
                <label for="tidak4">Tidak</label>
            </div>
        </div>

        <div class="question-group">
            <label for="ibu_gangguanmental" class="question">Apakah ibu mengalami gangguan mental?</label>
            <div class="answer">
                <input type="radio" id="ya6" name="ibu_gangguanmental" value="ya" required />
                <label for="ya6">Ya</label>
            </div>
            <div class="answer">
                <input type="radio" id="tidak6" name="ibu_gangguanmental" value="tidak" />
                <label for="tidak6">Tidak</label>
            </div>
        </div>

        <div class="question-group">
            <label for="ibu_infeksimenular" class="question">Apakah ibu mengalami sakit infeksi yang menular lewat asi? (HIV, Hepatitis B, Hepatitis C, syphilis, CMV)</label>
            <div class="answer">
                <input type="radio" id="ya7" name="ibu_infeksimenular" value="ya" required />
                <label for="ya7">Ya</label>
            </div>
            <div class="answer">
                <input type="radio" id="tidak7" name="ibu_infeksimenular" value="tidak" />
                <label for="tidak7">Tidak</label>
            </div>
        </div>

        <div class="question-group">
            <label for="ibu_hormon" class="question">Apakah ibu mengalami ketidakseimbangan hormon sehingga menebabkan hormon sehingga menyebabkan hormon menyusui tidak optimal?</label>
            <div class="answer">
                <input type="radio" id="ya8" name="ibu_hormon" value="ya" required />
                <label for="ya8">Ya</label>
            </div>
            <div class="answer">
                <input type="radio" id="tidak8" name="ibu_hormon" value="tidak" />
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