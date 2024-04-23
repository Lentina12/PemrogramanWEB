<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h3> Time </h3> <!--Heading 3-->
    <?php
        // zona waktu yang digunakan adalah asia/jakarta
        date_default_timezone_set("asia/jakarta");
        // menampilkan waktu dalam format h:m:s (hour, minute, second) 
        echo date("h:i:sa");
    ?>
</body>
</html>