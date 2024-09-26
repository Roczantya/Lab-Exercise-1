<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Kosong(Bagian Depan)</title>
</head>
<body>
<h1>Array Kosong(Bagian Depan)</h1>
    <form method="POST" action="">
        <label for="nums1">Masukkan angka untuk array pertama (pisahkan dengan koma, kosongkan jika tidak ada):</label>
        <input type="text" name="nums1" placeholder = "[]">
        <br>
        <label for="nums2">Masukkan angka untuk array kedua (pisahkan dengan koma):</label>
        <input type="text" name="nums2" placeholder ="Cth:[1,2,3]" required>
        <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $inputNums1 = $_POST['nums1'];
        $inputNums2 = $_POST['nums2'];

        // Mengonversi input string menjadi array
        // Jika input nums1 kosong, set menjadi array kosong
        $nums1 = $inputNums1 ? array_map('intval', explode(',', $inputNums1)) : [];
        $nums2 = array_map('intval', explode(',', $inputNums2));

        // Menghitung panjang array
        $m = count($nums1);
        $n = count($nums2);

        // Menggabungkan kedua array (meskipun nums1 kosong)
        $merged = array_merge($nums1, $nums2);

        // Mengurutkan array gabungan dari terkecil ke terbesar
        sort($merged);

        // Menampilkan hasil dalam format array
        echo "<h2>Hasil Array Kosong(Bagian Depan):</h2>";
        echo "<pre>[" . implode(', ', $merged) . "]</pre>";
    }
    ?>
</body>
</html>
