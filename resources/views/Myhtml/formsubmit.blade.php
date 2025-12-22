<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลที่คุณกรอก</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #bb94eeff;
        }
        .result-card {
            max-width: 700px;
            margin: auto;
        }
        .result-title {
            font-weight: 600;
        }
        .result-row {
            margin-bottom: 10px;
        }
        .result-label {
            font-weight: 500;
            display: inline-block;
            width: 120px;
        }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="bg-white p-5 rounded-4 shadow result-card">

        <h2 class="text-center mb-4 result-title">ข้อมูลของคุณ</h2>

        <div class="result-row">
            <span class="result-label">ชื่อ :</span> {{ $fname }}
        </div>

        <div class="result-row">
            <span class="result-label">นามสกุล :</span> {{ $lname }}
        </div>

        <div class="result-row">
            <span class="result-label">วันเกิด :</span> {{ $birthdate }}
        </div>

        <div class="result-row">
            <span class="result-label">เพศ :</span> {{ $gender }}
        </div>

        <div class="result-row">
            <span class="result-label">ที่อยู่ :</span> {{ $address }}
        </div>

        <div class="result-row">
            <span class="result-label">สีที่ชอบ :</span>
            <span style="
                display: inline-block;
                width: 20px;
                height: 20px;
                background-color: {{ $color }};
                border-radius: 4px;
                vertical-align: middle;
            "></span>
        </div>

        <div class="result-row">
            <span class="result-label">เพลงที่ชอบ :</span>
            {{ implode(', ', $music) }}
        </div>

        <div class="text-center mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-primary px-4">
                Return to Form
            </a>
        </div>

    </div>
</div>

</body>
</html>
