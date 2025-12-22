<!-- resouces/views/html101.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css"/>

    <!-- Google Font -->
    <link href= "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom Font -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .form-card {
             max-width: 600px;
            margin: auto;
            }

    </style>

</head>
<body style="background-color: #bb94eeff;">
<div class="container pt-5">

    <div class="p-5 shadow-lg bg-white rounded-4 form-card">
        <h1 class="mb-4 text-primary">Workshop #HTML - Form</h1>

        <form method="POST" action="{{ route('form.submit') }}" onsubmit="return validateForm();">
    @csrf

            <!-- ชื่อ -->
            <div class="mb-3">
                <label for="fname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="กรอกชื่อ">
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="กรอกนามสกุล">
            </div>
            <!-- วันเกิด -->
            <div class="mb-3">
                <label for="birthdate" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate">
            </div>

            <!-- เพศ -->
            <div class="mb-3">
                <label for="gender" class="form-label">เพศ</label>
                <select class="form-select" id="gender" name="gender">
                    <option value="" selected>เลือกเพศ</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                </select>
            </div>

            <!-- รูปภาพ -->
            <div class="mb-3">
                <label for="photo" class="form-label">รูปภาพ</label>
                <input class="form-control" type="file" id="photo">
            </div>

            <!-- ที่อยู่ -->
            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="กรอกที่อยู่"></textarea>
            </div>

            <!-- สีที่ชอบ -->
            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="color" name="color">
            </div>

           <!-- แนวเพลง -->
            <div class="mb-3">
                <label class="form-label">เลือกแนวเพลงที่ชอบ</label>
               <select class="form-select" multiple name="music[]">
                    <option value="rock">ร็อค</option>
                    <option value="life">เพื่อชีวิต</option>
                    <option value="classic">คลาสิค</option>
                    <option value="pop">ป๊อป</option>
                    <option value="other">อื่นๆ</option>
                </select>
            </div>


            <!-- ยินยอม -->
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" id="agree">
                <label class="form-check-label text-dark fw-bold" for="agree">
                    ยินยอมให้เก็บข้อมูลตามข้อกำหนด
                </label>
            </div>

            <!-- ปุ่มยืนยัน -->
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>

    </div>
</div>
<script>
function setInvalid(id) {
    document.getElementById(id).classList.add("is-invalid");
}

function setValid(id) {
    document.getElementById(id).classList.remove("is-invalid");
}

function validateForm() {

    let valid = true;

    let fname = document.getElementById("fname");
    let lname = document.getElementById("lname");
    let birthdate = document.getElementById("birthdate");
    let gender = document.getElementById("gender");
    let photo = document.getElementById("photo");
    let address = document.getElementById("address");
    let color = document.getElementById("color");
    let agree = document.getElementById("agree");

    // ===== ชื่อ =====
    if (fname.value.trim() === "") {
        setInvalid("fname");
        valid = false;
    } else {
        setValid("fname");
    }

    // ===== นามสกุล =====
    if (lname.value.trim() === "") {
        setInvalid("lname");
        valid = false;
    } else {
        setValid("lname");
    }

    // ===== วันเกิด =====
    if (birthdate.value === "") {
        setInvalid("birthdate");
        valid = false;
    } else {
        setValid("birthdate");
    }

    // ===== เพศ =====
    if (gender.value === "") {
        setInvalid("gender");
        valid = false;
    } else {
        setValid("gender");
    }

    // ===== รูป =====
    if (photo.value === "") {
        setInvalid("photo");
        valid = false;
    } else {
        setValid("photo");
    }

    // ===== ที่อยู่ =====
    if (address.value.trim() === "") {
        setInvalid("address");
        valid = false;
    } else {
        setValid("address");
    }

    // ===== สี =====
    if (color.value === "") {
        setInvalid("color");
        valid = false;
    } else {
        setValid("color");
    }

    // ===== แนวเพลง =====
    let musicChecked =
        document.getElementById("rock").checked ||
        document.getElementById("life").checked ||
        document.getElementById("pop").checked ||
        document.getElementById("other").checked;

    if (!musicChecked) {
        alert("กรุณาเลือกแนวเพลงที่ชอบอย่างน้อย 1 แนว");
        valid = false;
    }

    // ===== ยินยอม =====
    if (!agree.checked) {
        agree.classList.add("is-invalid");
        valid = false;
    } else {
        agree.classList.remove("is-invalid");
    }

    // ===== สรุปผล =====
    if (!valid) {
        return false;
    }

    alert("บันทึกข้อมูลสำเร็จ");
    return true;
}
</script>

</body>
</html>
