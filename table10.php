<?php require_once("dbmovie.php");
if(isset($_GET['id'])){
    $result = $conn-> query("DELETE FROM movie WHERE p_movie=".$_GET['id']);
    if($result){
        header("Location table10.php");
    }else{
        echo"ลบข้อมูลไม่สำเร็จ";
    }
}?>
<body>
    <button onclick="window.location='fromadd.php';">เพิ่มข้อมูล</button>
</body>

<form action="." method="get">
    <input type="text" name="search" id="search" placeholder="ค้นหา">
    <button type="submit" name="serach_click">ค้นหา</button>
</form>
<table style="width:100%;" border="1">

  <tr>
    <th>รหัสภาพยนตร์</th>
    <th>ชื่อภาพยนตร์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>pin</th>
    <th>จัดการ</th>
  </tr>
  <?php
  $sql = "SELECT * FROM movie64";
  if(isset ($_GET['serach_click'])){
    $sql = "SELECT * FROM movie64 WHERE p_movie LIKE '%{$_GET['search']}%' OR s_movie LIKE '%{$_GET['search']}%' ";
 
  }
 $result = $conn ->query($sql);

while($rs = $result->fetch_object()){
  ?>
  <tr>
    <td><?=$rs->รหัสภาพยนตร์?></td>
    <td><?=$rs->ชื่อภาพยนตร์?></td>
    <td><?=$rs->เวลาที่เริ่มฉาย?></td>
    <td><?=$rs->ชื่อผู้ใช้งาน?></td>
    <td><?=$rs->pin?></td>
    <td>
    <td>

    </td>

  </tr>

  <?php } ?>
</table>