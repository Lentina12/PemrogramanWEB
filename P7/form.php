<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2> <!-- Header 2 -->
    <!-- Membuat form dengan method post dan action ke proses_form.php -->
    <form method="post" action="proses_form.php"> 
        <label for="nama">Nama:</label> <!--Pembuatan Label untuk nama -->
        <input type="text" name="nama" id="nama" required><br><br> <!-- Input teks dengan id 'nama' -->
        
        <label for="email">Email:</label> <!-- Pembuatan Label untuk email-->
        <input type="email" name="email" id="email" required><br><br> <!-- Input email dengan nama 'email' --> 

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>