<?php
include 'connection.php';
// Operasi CRUD untuk tabel ras_kucing
// Contoh INSERT (Create)
$queryInsert = "INSERT INTO RAS_KUCING (nama_kucing, deskripsi) 
                VALUES  ('Domestik', 'Kucing domestik atau kucing kampung mempunyai karakter yang setia, memiliki sifat cukup aktif, dan senang bermain di lingkungan baru. Jenis kucing ini mudah kamu temui di mana pun kamu berada. Jika kamu memutuskan untuk mengadopsi kucing kampung liar, sebaiknya periksakan terlebih dulu ke dokter hewan agar terjamin kesehatannya.'),
                        ('Persia', 'Kucing persia termasuk salah satu jenis kucing yang paling banyak dipelihara. Karakteristik rambut panjang, lebat, berwajah bulat, dan hidungnya yang pesek membuat banyak orang menjadi gemas melihatnya. Jika memutuskan untuk memelihara jenis ini, kamu harus menyisihkan anggaran lebih banyak untuk perawatannya. Pasalnya, kamu harus memerhatikan kesehatan hewan dan kebersihannya secara keseluruhan.'),
                        ('Anggora', 'Kucing yang berasal dari Turki ini memiliki bulu yang seputih salju. Banyak orang kesulitan membedakan antara kucing Anggora dan Persia. Namun, salah satu ciri yang bisa menjadi pembeda keduanya adalah Persia biasanya berbadan gemuk, sedangkan Anggora cenderung memiliki ukuran tubuh yang lebih kurus. Selain cantik dan berbulu indah, Anggora juga sangat aktif dan lincah.'),
                        ('Siam', 'Kucing Siam atau yang dikenal dengan Siamese berasal dari Thailand. Hewan ini memiliki tubuh yang ramping, ekor panjang, mata biru, berbulu pendek, dan memiliki warna gelap di bagian muka, kaki, telinga, serta ekor. Selain sangat bersahabat dengan manusia, hewan satu ini juga memiliki suara yang lembut, cerdas, dan lincah.'),
                        ('Maine Coon', 'Maine Coon menjadi jenis kucing yang bersahabat meski memiliki tubuh yang sangat besar. Meski terlihat menyeramkan karena ukuran tubuhnya 2-3 kali lipat kucing biasa, Maine Coon memiliki pembawaan yang sangat ramah. Bobot tubuh kucing betina mencapai 6 kilogram. Sedangkan bobot kucing jantan Maine Coon mencapai 8 kilogram.'),
                        ('Ragdoll', 'Jenis kucing yang satu ini dikenal akan sifatnya yang lembut dan santai, serta suka mengikuti ke manapun majikannya pergi. Mereka suka berada di pangkuan majikannya dan gemar menyapa anggota keluarga yang pulang ke rumah. Menariknya, mereka bisa belajar bermain tangkap seperti anjing. Temperamennya juga manis, sehingga Ragdolls bisa rukun dengan kucing dan anjing lain.'),
                        ('Sphynx', 'Penampilannya yang unik karena tidak berbulu membuat banyak orang tertarik dengan hewan yang satu ini. Sphynx dikenal sebagai kucing yang ramah, supel dan cerdas. Mereka juga sangat suka menjadi pusat perhatian. Hewan ini bahkan bisa membuat masalah hanya untuk mendapatkan perhatian dari kamu. Namun, kecintaan mereka pada perhatian membuat Sphynx juga bisa menjadi hewan yang sangat penyayang. Mereka selalu ingin menghabiskan waktu bersama kamu atau pamer di depan kamu.'),
                        ('Scottish Fold', 'Ciri yang paling mencolok dari kucing Scottish Fold adalah telinganya yang kecil dan terlipat rapat ke depan untuk menutupi lubang telinga. Ujung telinganya juga membulat. Scottish Fold berukuran sedang dengan bentuk badan yang kokoh. Kepalanya bulat dengan bantalan kumis yang jelas, terletak di leher mereka yang pendek. Mereka memiliki mata yang besar dengan ekspresi manis. Rambut dari kucing jenis Scottish Fold pendek dan padat dan datang dalam berbagai warna serta pola.'),
                        ('British Shorthair', 'British shorthair adalah salah satu ras kucing Inggris tertua yang memiliki sifat yang tenang dan pendiam. Bentuk mukanya yang bulat dengan pipi yang chubby dan mata yang bulat membuat kucing ini sangat menggemaskan, sehingga tidak heran bila banyak orang ingin memeliharanya.'),
                        ('Birman', 'Mata birunya yang cantik dan rambut yang panjang membuat Birman menjadi salah satu kucing primadona yang digemari banyak orang. Mereka juga sangat manis, lembut dan mudah bergaul. Hewan ini senang bersama orang-orang dan mereka pandai bersosialisasi dengan manusia serta hewan lainnya. Birman juga santai dan sabar, yang menjadikannya pilihan tepat untuk keluarga dengan anak-anak. Selain itu, meskipun mereka menyukai perhatian, kucing ini umumnya pendiam.'),
                        ('Abyssinian', 'Abyssinian adalah kucing elegan berukuran sedang dengan badan yang kuat, lentur, serta kaki yang ramping dan panjang. Mereka memiliki kepala bundar berbentuk baji dengan rumbai kecil di ujung telinganya, serta sepasang mata berbentuk kacang almond. Rambut-rambut kucing Abyssinian pendek dan padat, serta terlihat tebal karena terdapat beragam warna di tiap helainya. Warna yang paling terkenal adalah kemerahan tetapi ada juga warna lainnya.'),
                        ('Tonkinese', 'Tonkinese adalah campuran antara kucing Siamese dan Burmese. Jenis kucing Tonkinese adalah kucing Oriental berukuran sedang dengan kepala bulat lembut dengan telinga lebar. Memiliki mata lebih terbuka daripada bentuk Oriental klasik biasanya dan berwarna hijau hingga biru muda. Tubuhnya kokoh, kencang dan berotot. Rambut kucing Tonkinese pendek dan terasa halus dan lembut. Wajah, telinga, kaki dan ekor lebih gelap dari tubuhnya dan menyatu dengan warna tubuh. Jenis kucing Tonkinese hadir dalam berbagai warna.'),
                        ('Devon Rex', 'Walau ada yang menyebutnya mirip alien, tetapi banyak juga yang menggemari jenis kucing devon rex. Ciri uniknya adalah bentuk telinganya yang menyerupai segitiga. Jangan terkecoh dengan penampilannya yang agak creepy, karena kucing ini penuh semangat dan senang berinteraksi dengan anak-anak.'),
                        ('American Shorthair', 'Karakteristik kucing yang satu ini yaitu mudah beradaptasi dengan lingkungan, senang bermain, dan punya naluri berburu yang kuat. Kelebihan lainnya adalah bulunya yang pendek, tebal, dan tidak mudah rontok sehingga mudah dirawat. Ibu cukup menyisir bulunya dua kali seminggu untuk membersihkan kotoran dan sel-sel kulit mati.'),
                        ('Manx', 'Manx punya karakter yang lembut dan suka bermain, terutama permainan lempar bola. Apabila Si Kecil senang memeluk dan bersentuhan dengan hewan peliharaan, kucing Manx adalah pilihan tepat. Sebab, mereka sangat senang berinteraksi dengan majikannya'),
                        ('Bengal', 'Kucing yang menyerupai macan tutul mini ini juga bisa menjadi teman yang energik untuk Si Kecil. Pasalnya, mereka sangat lincah dan tidak mudah bosan. Bengal juga mudah terhibur dengan berbagai jenis mainan. Perawatannya pun tergolong praktis karena kucing ini berbulu pendek, mirip dengan kucing domestik. Bedanya, Bengal punya tubuh yang lebih besar karena posturnya tegap.'),
                        ('Himalaya', 'Kucing ras jenis ini merupakan hasil persilangan antara anjing Siam dan Persia. Kucing Himalaya pada dasarnya manis, suka bermain, dan tidak asing dengan pangkuan hangat. Dengan penampilannya yang memikat (wajah bulat, mata biru, mulut cemberut, dan hidung pesek), dan temperamen yang menyenangkan, membuatnya menjadi pilihan favorit kucing ras untuk dipelihara'),
                        ('Norwegian', 'Kucing Norwegian adalah jenis hewan berbulu dengan ukuran besar dan sifatnya yang penyayang. Hewan ini juga dijuluki Wegies oleh para penggemar ras ini. Memang, jenis kucing ini telah termasuk populer di seluruh dunia dan bahkan di negara asalnya.'),
                        ('American Wirehair', 'Seperti namanya, American Wirehire memiliki ciri khas pada rambutnya. Kucing berukuran besar ini memiliki rambut kucing berukuran besar ini memiliki rambut kasar dan terlihat seperti kawat - setiap rambut berukuran pendek - mediumnya tipis dan berkerut atau bengkok. Terkadang kumisnya juga berbentuk keriting. Bentuk sempurna rambut wiring hanya akan muncul saat kucing tersebut menyentuh usia dewasa, anak kucing American Wirehair yang memiliki rambut yang sangat keriting biasanya akan berubah menjadi bergelombang ketika dewasa alih-alih berambut keriting seperti kawat, dan sebaliknya. Kucing ini memiliki beberapa warna, motif, dan pola.'),
                        ('Balinese', 'Kucing Balinese adalah kucing cantik elegan berukuran sedang dengan tubuh ramping seperti ras Siamese. Tubuhnya ramping dan anggun dan kepalanya berprofil lurus dengan telinga lebar yang terkadang memiliki rumbai. Mereka memiliki rambut yang lembut seperti sutra yang panjangnya dapat mencapai satu hingga beberapa sentimeter, dan rambut-rambut itu berbaring datar di tubuh mereka. Ekornya panjang dan dihiasi dengan rambut-rambut yang lebih panjang lagi. Kucing Balinese tidak memiliki lapisan rambut bawah dan oleh sebab itu dikategorikan sebagai semi-longhair. Matanya berwarna biru cerah dan berbentuk oriental. Rambutnya memiliki titik-titik berwarna senada (di telinga, wajah, tungkai, kaki dan ekor) dan mirip dengan ras Siamese.')";
$resultInsert = pg_query($conn, $queryInsert);
if (!$resultInsert) {
    die("Error in SQL query: " . pg_last_error());
}
// Contoh SELECT (Read)
$querySelect = "SELECT * FROM RAS_KUCING";
$resultSelect = pg_query($conn, $querySelect);
$rows = pg_fetch_all($resultSelect);
// Contoh UPDATE (Update)
// $queryUpdate = "UPDATE RAS_KUCING SET 
//     nama_kucing = 'nama baru', 
//     deskripsi = 'deskripsi baru' 
// WHERE id = '0'";
// $queryUpdate = "UPDATE RAS_KUCING SET deskripsi = 'Bismillah lancar' WHERE id = 1";
// $resultUpdate = pg_query($conn, $queryUpdate);
// $idToUpdate = 2; 
// $newDeskripsi = "Bismillah Lancar";
// $queryUpdate = "UPDATE RAS_KUCING SET 
//     deskripsi = '$newDeskripsi'
// WHERE id = $idToUpdate";
// $resultUpdate = pg_query($conn, $queryUpdate);
// if (!$resultUpdate) {
//     die("Error in SQL query: " . pg_last_error($conn));
// }
// Contoh DELETE (Delete)
// $idToDelete = 0; // Ganti dengan ID yang ingin dihapus
// $queryDelete = "DELETE FROM RAS_KUCING WHERE id = $idToDelete";
// $resultDelete = pg_query($conn, $queryDelete);
// Untuk menghapus berdasarkan ID tertentu
// $queryDeleteById = "DELETE FROM RAS_KUCING WHERE id = '0'";
// $resultDeleteById = pg_query($conn, $queryDeleteById);
// Untuk menghapus semua data
// $queryDeleteAll = "DELETE FROM RAS_KUCING";
// $resultDeleteAll = pg_query($conn, $queryDeleteAll);
$query = "SELECT * FROM RAS_KUCING";
$result = pg_query($conn, $query);
$rows = pg_fetch_all($result);
?>

<!-- mungkin nnti dibuat 3x -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/shop.css">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <h3>Selamat Berbelanja!</h3>
    <a href="index.html">Beranda</a>
    <div class="dropdown">
        <a href="#Info">Tentang Kucing<span class="arrow">&#9660;</span></a>
        <ul class="dropdown-content">
            <li><a href="index.html#cats-section">Ras - Ras Kucing</a></li>
            <li><a href="page2.html#Karakteristik">Karakteristik</a></li>
            <li><a href="page2.html#Perawatan">Perawatan</a></li>
        </ul>
    </div>
</div>

<!-- Judul -->
<h1>Kebutuhan Kucing Anda</h1>

<!-- Tabel Produk -->
    <div class="cat-container">
        <div class="cat-table">
            <img src="img/kalung1.jpg" alt="Kalung Kucing" class="cat-image">
            <br>
            <p class="cat-name">Kalung Kucing</p>
            <p>20.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/makanan.jpg" alt="Makanan Kucing" class="cat-image">
            <br>
            <p class="cat-name">Makanan Kering Kucing</p>
            <p>30.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/tasku.jpeg" alt="Tas Kucing" class="cat-image">
            <br>
            <p class="cat-name">Tas Kucing</p>
            <p>180.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/litter.jpg" alt="Litter Box" class="cat-image">
            <br>
            <p class="cat-name">Wadah Kucing</p>
            <p>60.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/skop.jpeg" alt="Sekop Kucing" class="cat-image">
            <br>
            <p class="cat-name">Sekop Wadah Kucing</p>
            <p>10.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/pasir.jpg" alt="Pasir Kucing" class="cat-image">
            <br>
            <p class="cat-name">Pasir Kucing</p>
            <p>70.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/comb.jpg" alt="Sisir Kucing" class="cat-image">
            <br>
            <p class="cat-name">Sisir Kucing</p>
            <p>20.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/capek.jpg" alt="Food DIspenser" class="cat-image">
            <br>
            <p class="cat-name">Alat Makan Kucing</p>
            <p>140.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>

        <div class="cat-table">
            <img src="img/wf.jpg" alt="Makanan Basah Kucing" class="cat-image">
            <br>
            <p class="cat-name">Makanan Basah Kucing</p>
            <p>27.000</p>
            <!-- Kotak aksi -->
            <div class="action-box">
                <button class="action-btn">&#8722;</button>
                <span class="quantity">1</span>
                <button class="action-btn">&#43;</button>
            </div>
        </div>
        
<!-- Footer -->
    <div class="footer" id="footerid">
        KYLA ZAHRA WINNETOU 221401106
        <br />
        RIZKI AMALINA TRIWAHYUNI 221401123
        <br />
        UTS Pemrograman Website 6
        <br>
        Gambar referensi diambil dari Google dan Pinterest.
      </div>

<!-- Java Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>