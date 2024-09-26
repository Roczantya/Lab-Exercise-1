<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramida Palindrome</title>
    <style>
        body {
            display: flex;
            justify-content: center; /* Untuk memusatkan secara horizontal */
            flex-direction: column;
            text-align: center; /* Untuk memusatkan teks */
        }
        .output {
            white-space: pre; /* Mempertahankan spasi putih */
        }
    </style>
</head>
<body>
<h1>Hitung Palindrome</h1>
    <form method="POST" action="">
        <label for="a">Masukkan nilai angka yang akan dipakai:</label>
        <input type="number" name="a" placeholder ="Masukkan Angka" required>
        <br>
        <label for="rows">Masukkan jumlah baris piramida:</label>
        <input type="number" name="rows" placeholder="Masukkan Angka" required>
        <br>
        <input type="submit" value="Hitung">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = intval($_POST['a']);
    $rows = intval($_POST['rows']);

    // Menampilkan piramida palindrome
    echo "<h2>Piramida Palindrome:</h2>";
    echo "<div class='output'>"; // Membungkus output dalam div
    generateCenteredPalindromePyramid($a, $rows);
    echo "</div>"; // Tutup div
}

function generateCenteredPalindromePyramid($base, $rows) {
    for ($i = 1; $i <= $rows; $i++) {
        // Generate repeated '1's string
        $repeatedOnes = str_repeat($base, $i);

        // Calculate the multiplication result
        $result = $repeatedOnes * $repeatedOnes;

        // Determine the total width for the largest line and center align
        $maxLength = strlen(str_repeat($base, $rows) . " x " . str_repeat($base, $rows) . " = " . strval(str_repeat($base, $rows) * str_repeat($base, $rows)));

        // Format the output and center align using str_pad
        $line = "$repeatedOnes x $repeatedOnes = $result";
        echo str_pad($line, $maxLength, " ", STR_PAD_BOTH) . "\n";
    }
}
?>
</body>
</html>
