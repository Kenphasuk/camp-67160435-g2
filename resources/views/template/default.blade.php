<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>

    <!-- stylesheet" -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- link ฟอนต์  -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {  /* พื้นหลัง */
            background-color: #BEA9DF; /* สีม่วง */
            font-family: "Poppins" , sans-serif; /* ฟอนต์ */
        }
        .center-box { /* กล่องตรงกลาง */
            max-width: 500px;
            margin: 0 auto; /* จัดกึ่งกลาง */
            background: white;
            padding: 30px;
            border-radius: 10px;
        }
        h1 { /* หัวข้อ Workshop #HTML - FORM  */
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <h1>default template</h1>
    @yield('content')
</body>
    @stack('scripts')
</body>
</html>
