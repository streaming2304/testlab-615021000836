<h2>เพิ่มข้อมูล</h2>
 
<form action="addmovie.php" method="post">
<table cellspacing="0" cellpadding="5" border="1">
 
  <tr>
    <td>รหัสภาพยนตร์</td>
    <td><input type="text" name="p_movie"id="p_movie"></td>
    </tr>
    <tr>
    <td>ชื่อภาพยนตร์</td>
    <td><input type="text" name="s_movie"id="s_movie"></td>
    </tr>
    <tr>
    <td>เวลาที่เริ่มฉาย</td>
    <td><input type="text" name="bday"id="bday"></td>
    </tr>
    <tr>
    <td>ชื่อผู้ใช้งาน</td>
    <td> <input type="date" name="bady"id="bady"></td>
    </tr>
    <tr>
    <td>pin</td>
    <td><input type="text" name="pin"id="pin"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="cmdSave" value="บันทึกข้อมูล"></td>
    </tr>
</form>