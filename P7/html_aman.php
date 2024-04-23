<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML aman</title>
</head>
<body>

<h2>Form Input PHP</h2>
<!-- Pembuatan Form dengan metode POST -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label for="input">Inputan: </label> 
<input type="text" name="input" id="input"> <br><br>
<label for="email">Email: </label> <!-- Input untuk email-->
<input type="email" name="email" id="email"> <br><br>
<input type="submit" name="submit" value="Submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Pemeriksaan data yang dikirimkan dengan method POST
// Mengambil nilai
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); // untuk membersihkan karakter

echo "Inputan yang diterima = " . $input; //Untuk menampilkan hasil yang telah dibersihkan

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lanjutkan dengan pengolahan email yang aman
    echo "<br> Email yang diterima: " .$email;
} else {
    // Menangani input yang tidak valid
    echo "<br>Input email tidak valid";
}
}
?>

</body>
</html>
<?php

