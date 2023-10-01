<?php include "blueshop.php" ?>
<html>
<head><meta charset="utf-8"></head>
    <body>
        <form>
            <input type="text" name="keyword">
            <input type="submit" name="ค้นหา">
        </form>
        <div style="display:flex">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");
            if (!empty($_GET)) 
            $value = '%' . $_GET["keyword"] . '%'; 
            $stmt->bindParam(1, $value); 
            $stmt->execute();
            
            while ($row = $stmt->fetch()) {
            ?>
            ชื่อสมาชิก : <?=$row ["name"]?><br>
            ที่อยู่ : <?=$row ["address"]?><br>
            อีเมล : <?=$row ["email"]?><br>
            
            <img src='member_photo/<?=$row ["username"]?>.jpg' width='100'><br>
            
            <hr>
        <?php } 
        ?>
    </body>
</html>