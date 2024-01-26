<?php
    include("conn.php");
    include("template.html");
?>

<form action="data_signup.php" method="POST">
    <div class="container bg-white mt-3 rounded shadow p-3 position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center">สมัครสมาชิก</h1>
        
            <label for="mem_name" class="text-center" >ชื่อผู้ใช้</label>
            <input type="text" class="form-control mb-2 p-1 shadow rounded" name="mem_name" id="mem_name" >

            <label for="mem_name">รหัสผ่าน</label>
            <input type="password" class="form-control mb-2 p-1 shadow rounded" name="mem_pass" id="mem_pass" >
            
            <label for="mem_name">Email</label>
            <input type="Mail" class="form-control mb-2 p-1 shadow rounded" name="mem_mail" id="mem_mail" >

            <label for="mem_name">เบอร์โทรศัพท์</label>
            <input type="text" class="form-control mb-2 p-1 shadow rounded" name="mem_phone" id="mem_phone" >
            
            <input type="hidden" class="form-control mb-2 p-1" name="mem_status" id="mem_status" value="สมาชิก">
            
            <button type="submit" class="btn btn-success" >สมัครสมาชิก</button>
    </div>
</form>
