<!-- 
    Nama    : NUR ANISAH
    NIM     : 200170015
    MK      : Pemograman Web
    Kelas   : A2
 -->

<?php
    $buku = [
        [
            "Judul Buku" => "Atomic Habits",
            "Penulis" => "James Clear",
            "Deskripsi" => "Pada buku ini, James Clear, seorang pakar kelas dunia ingin menjelaskan 
                            bahwa kebiasaan kecil yang biasa kita lakukan bisa menjadi hal yang 
                            membawa pengaruh besar pada kehidupan dan keberhasilan kamu nantinya",
            "Gambar" => "image1.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 103.000"
        ],
        [
            "Judul Buku" => "Filosofi Teras",
            "Penulis" => "Henry Manampiring",
            "Deskripsi" => "Henry Manampiring, seorang praktisi periklanan & komunikasi, menjelaskan 
                            mengenai filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi 
                            emosi negatif dan membentuk mental yang tangguh dalam menghadapi masalah 
                            hidup.",
            "Gambar" => "image2.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 98.000"
        ],
        [
            "Judul Buku" => "Insecurity is My Middle Name",
            "Penulis" => "Alvi Syahrin",
            "Deskripsi" => "Setiap orang pastinya pernah mengalami perasaan insecure. Jadi buku ini 
                            merupakan buku self improvement sekaligus self healing yang bermanfaat 
                            bagi kamu yang mungkin saat ini sedang merasa insecure.",
            "Gambar" => "image3.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 93.000"
        ],
        [
            "Judul Buku" => "You Do You: Discovering Life through Experiments & Self-Awareness",
            "Penulis" => "Fellexandro Ruby",
            "Deskripsi" => "Buku You Do You lebih membahas tentang quarter life crisis yang terkadang 
                            akan terasa menakutkan bagi sebagian orang. Tetapi dengan adanya ilustrasi 
                            dan bahasa yang mudah dimengerti, buku satu ini adalah pilihan yang buat 
                            kamu yang sering merasa bosan saat membaca buku.",
            "Gambar" => "image4.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 128.000"
        ],
        [
            "Judul Buku" => "Berani Tidak Disukai",
            "Penulis" => "Ichiro Kisimi & Fumitake Koga",
            "Deskripsi" => "Buku ini memaparkan ajaran dari Alfred Adler mengenai bagaimana seharusnya 
                            manusia menjalani hidupnya dan menemukan sebuah kebahagiaan. Buku ini juga
                            mengangkat tema untuk mencintai diri sendiri agar mendapatkan kebahagiaan. 
                            Karena terkadang kita terlalu fokus pada kehidupan orang lain yang akhirnya 
                            membuat kita tidak mencintai diri sendiri.",
            "Gambar" => "image5.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 98.000"
        ],
        [
            "Judul Buku" => "Sebuah Seni untuk Bersikap Bodo Amat",
            "Penulis" => "Mark Manson",
            "Deskripsi" => "Dibahas dengan bahasa yang sederhana, isi dari buku ini banyak menceritakan 
                            kisah nyata sang penulis yang hidupnya sering diterpa oleh badai. Walau 
                            demikian, Mark Manson tak berhenti dan justru semakin kuat dalam meraih 
                            cita-citanya.",
            "Gambar" => "image6.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 76.000"
        ],
        [
            "Judul Buku" => "Tak Apa-Apa Tak Sempurna",
            "Penulis" => "Brene Brown",
            "Deskripsi" => "Tidak perlu memikirkan kata orang lain, pada buku ini Dokter Brown akan 
                            membantu kamu belajar menerima diri apa adanya dan tidak perlu cemas akan 
                            apa kata orang lain tentang diri kita. Jadi, kita bisa fokus lebih mencintai 
                            diri sendiri dan menumbuhkan keberanian untuk mendobrak kemampuan diri. 
                            Buku ini masuk dalam jajaran buku best seller di New York Times dan telah 
                            direkomendasikan oleh banyak orang di Goodreads, lho.",
            "Gambar" => "image7.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 76.000"
        ],
        [
            "Judul Buku" => "Esok Lebih Baik",
            "Penulis" => "Dr. Abdullah Al-Maghluts",
            "Deskripsi" => "Buku ini ditulis oleh seorang jurnalis cum motivator Timur Tengah yang sangat 
                            piawai membangun kepercayaan diri dan memperkukuh keyakinan kita untuk mengatasi 
                            masalah dan tantangan apa pun yang menghambat kemajuan dan kesuksesan. Materinya 
                            sangat praktis dan tepat serta mudah dilakukan siapa saja. Karena, didasarkan 
                            pada pengalaman pribadi, dan hasil-hasil penelitian ilmiah para ahli psikologi 
                            mutakhir.",
            "Gambar" => "image8.jpg",
            "Penerbit" => "Pustaka Alvabet",
            "Harga" => "Rp. 63.000"
        ],
        [
            "Judul Buku" => "The Lessons of Life",
            "Penulis" => "Chairawan Nusjirwan",
            "Deskripsi" => "Pengalaman hidup dan perjalanan karier membuta Chairawan Nusjirwan merenungkan arti 
                            kehidupan tentang pentingnya memelihara dan menggapai impian, harapan, dan cita-cita. 
                            Semuannya ditulis berdasrkan perjuangannnya yang tegar menjalani kehidupan sebagai 
                            tentara yang mengemban banyak operasi militer, yang tentunya memiliki tanggung 
                            jawab yang besar dan siap menghadapi apapun risiko jabatan.",
            "Gambar" => "image9.jpg",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Harga" => "Rp. 125.000"
        ],
        [
            "Judul Buku" => "Untuk Bertahan : Tentang Kita Yang Belajar Menerima",
            "Penulis" => "Elda Rina",
            "Deskripsi" => "Untuk Bertahan: Tentang Kita yang Belajar Menerima' dipersembahkan untuk
                            jiwa-jiwa yang sedang terluka dalam bermacam keadaan. Perjalanan mengikhlaskan
                            dimulai saat kamu berani memilih hari ini. Hatimu berhak bahagia. Duniamu harus 
                            kembali berwarna setelah berhasil menjalani dan menyembuhkan.",
            "Gambar" => "image10.png",
            "Penerbit" => "Gema Insani",
            "Harga" => "Rp. 72.000"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Assosiative Array</title>
</head>
<?php ?>
<body>
    <h1>Rekomendasi Buku Self Improvement</h1>
    <?php foreach ($buku as $bk) : ?>
        <ul>
            <li>
                <img src="img/<?php echo $bk["Gambar"]; ?>" width="150px">
            </li>
            <b><li>Judul Buku : <?php echo $bk["Judul Buku"]; ?> </li></b>
            <li>Penulis : <?php echo $bk["Penulis"]; ?> </li>
            <li>Penerbit : <?php echo $bk["Penerbit"]; ?> </li>
            <li>Harga : <?php echo $bk["Harga"]; ?> </li>
            <li>Deskripsi : <?php echo $bk["Deskripsi"]; ?> </li>
            <br><br><br>
        </ul>
    <?php endforeach; ?>
</body>
</html>