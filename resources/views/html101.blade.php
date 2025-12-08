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
<div class="container pt-5">
    <h1>Workshop #HTML - FORM</h1>

    <div class="center-box">
        <form>

            <!-- ชื่อ -->
            <div class="mb-3">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="name" placeholder="ชื่อ">
            </div>

            <!-- นามสกุล -->
            <div class="mb-3">
                <label for="surname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="surname" placeholder="นามสกุล">
            </div>

            <!-- อายุ -->
            <div class="mb-3">
                <label for="ages" class="form-label">อายุ</label>
                <input type="number" class="form-control" id="ages" placeholder="อายุ">
            </div>

            <!-- วันเกิด -->
            <div class="mb-3">
                <label for="birthday" class="form-label">วัน/เดือน/ปีเกิด</label>
                <input type="date" class="form-control" id="birthday">
            </div>

            <!-- เพศ -->
            <div class="mb-3">
                <label class="form-label">เพศ</label><br>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">ชาย</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked>
                    <label class="form-check-label" for="female">หญิง</label>
                </div>
            </div>

            <!-- รูป -->
            <div class="mb-3">
                <label for="formFile" class="form-label">รูป</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <!-- ที่อยู่ -->
            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" rows="3"></textarea>
            </div>

            <!-- สีที่ชอบ -->
            <div class="mb-3">
                <label for="favoriteColor" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="favoriteColor" value="#563d7c" title="Choose your color">
            </div>

            <!-- แนวเพลงที่ชอบ -->
            <div class="mb-3">
                <label for="musicGenre" class="form-label">แนวเพลงที่ชอบ</label>
                <select class="form-select" id="musicGenre" multiple>
                    <option value="ป็อป">ป็อป</option>
                    <option value="ร็อค">ร็อค</option>
                    <option value="ฮิปฮอป">ฮิปฮอป</option>
                    <option value="แจ๊ส">แจ๊ส</option>
                    <option value="คลาสสิค">คลาสสิค</option>
                    <option value="คลาสสิค">อื่นๆ</option>
                </select>
            </div>

            <!-- ยินยอมให้เก็บข้อมูล -->
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agree" checked>
                    <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>

            <!-- ปุ่ม -->
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

</div>
</body>
</html>
