<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Kosong(Bagian Belakang)</title>
</head>
<body>
<h1>Array Kosong (Bagian Belakang)</h1>
    <form method="POST" action="">
        <label for="nums1">Masukkan angka untuk array pertama (pisahkan dengan koma):</label>
        <input type="text" name="nums1" placeholder="Cth:1,2,3" required>
        <br>
        <label for="nums2">Masukkan angka untuk array kedua (pisahkan dengan koma, kosongkan jika tidak ada):</label>
        <input type="text" name="nums2" placeholder="[]">
        <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $inputNums1 = $_POST['nums1'];
        $inputNums2 = $_POST['nums2'];

        // Mengonversi input string menjadi array
        $nums1 = array_map('intval', explode(',', $inputNums1));
        $nums2 = $inputNums2 ? array_map('intval', explode(',', $inputNums2)) : []; // Mengatasi array kosong
         
        // Menghitung panjang array
        $m = count($nums1);
        $n = count($nums2);

        // Menggabungkan kedua array
        $merged = array_merge($nums1, $nums2);

        // Mengurutkan array gabungan dari terkecil ke terbesar
        sort($merged);

        // Menampilkan hasil dalam format array
        echo "<h2>Hasil dari Angka di input (Terkecil ke Terbesar):</h2>";
        echo "<pre>[" . implode(', ', $merged) . "]</pre>";
    }
    ?>
</body>
</html>
