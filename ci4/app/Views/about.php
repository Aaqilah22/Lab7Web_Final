<?php
// Data isi halaman About
$title = "Tentang Kami";
$content = "
    <p>
        Selamat datang di situs web kami. Website ini merupakan bagian dari tugas akhir mata kuliah <strong>Pengembangan Web</strong>
        di <strong>Universitas Pelita Bangsa</strong>. 
    </p>
    <p>
        Tujuan utama dari situs ini adalah untuk menampilkan contoh implementasi layout website sederhana dengan menggunakan HTML, CSS, dan PHP secara terstruktur.
    </p>
    <p>
        Website ini dikembangkan oleh mahasiswa sebagai media pembelajaran dalam merancang antarmuka pengguna, serta memahami konsep <em>template reuse</em> menggunakan teknik <code>include</code> pada PHP.
    </p>
    <p>
        Semoga tampilan dan isi dari website ini dapat memberikan inspirasi dan manfaat bagi para pengunjung.
    </p>
";
?>

<?= include 'template/header.php'; ?>

<h1><?= $title; ?></h1>
<hr>
<?= $content; ?>

<?= include 'template/footer.php'; ?>
