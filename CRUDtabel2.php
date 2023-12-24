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



<!DOCTYPE html>
<!-- membuka tag HTML dengan bahasa inggris -->
<html lang="en">
  <!-- membuka tag untuk bagian kepala halaman web -->
  <head>
    <!-- jenis karakter halaman yaitu UTF-8 -->
    <meta charset="UTF-8" />
    <!-- tampilan halaman web pada perangkat dengan lebar layar yang berbeda-beda -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- judul halaman tab browser -->
    <title>Cat Info</title>
    <!-- Menautkan halaman bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"/>
    <!-- menautkan halaman web dengan file CSS -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
  </head>
  <!-- membuka tag untuk bagian body dari halaman web -->
  <body>

<!-- Navbar -->
    <div class="navbar">
      <h3>Semoga harimu menyenangkan, Meow!</h3>
      <!-- mengarahkan pengguna ke bagian halaman web yang memiliki id "Karakteristik" -->
      <a href="#Karakteristik">Karakteristik</a>
      <!-- mengarahkan pengguna ke bagian halaman web yang memiliki id "Perawatan" -->
      <a href="#Perawatan">Perawatan</a>
      <!-- mengarahkan pengguna ke bagian halaman web yang memiliki id "Galeri" -->
      <a href="#Galeri">Galeri</a>
    </div>

<!-- Carousel Bootsrap -->
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <center>
            <img src="img/1.jpg" class="d-block w-25 mx-auto" alt="..." />
            <!-- Adjusted width to 25% and centered the image -->
          </center>
        </div>
        <div class="carousel-item">
          <center>
            <img src="img/2.jpg" class="d-block w-25 mx-auto" alt="..." />
            <!-- Adjusted width to 25% and centered the image -->
          </center>
        </div>
        <div class="carousel-item">
          <center>
            <img src="img/3.jpg" class="d-block w-25 mx-auto" alt="..." />
            <!-- Adjusted width to 25% and centered the image -->
          </center>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

<!-- Main Content -->
    <div class="main-content">
      <!-- buka tag untuk membuat sebuah section dengan id "Karakteristik" -->
      <section id="Karakteristik">
        <h1>Karakteristik</h1>
        <h3>Fisik :</h3>
        <ul>
          <li>Berbulu tebal</li>
          <li>Memiliki kuku panjang untuk menaiki tembok</li>
          <li>Memiliki kelenjar susu berbulu</li>
          <li>Bertaring</li>
          <li>
            Sebelum memakan sesuatu mengendus makan itu dahulu sebelum
            memakannya
          </li>
          <li>Pup dipasir</li>
          <li>
            Memiliki satu ekor, berkaki empat, bentuk kuping lancip dan berbulu
            seperti kemocheng
          </li>
          <li>
            Ukuran tubuh bervariasi tergantung pada ras, namun pada umumnya
            kucing memiliki panjang tubuh hingga 76 cm dan berat tubuh antara
            2-4 kg
          </li>
        </ul>
        <h3>Perilaku :</h3>
        <ul>
          <li>Mendengkur</li>
          <li>Memanjat</li>
          <li>Memiliki refleks meluruskan badannya ketika terjatuh</li>
          <li>Bersahabat</li>
          <li>Aktif</li>
          <li>Suka bermain</li>
          <li>Memiliki rasa keingintahuan tinggi</li>
          <li>Mandiri</li>
          <li>Sering bermalas-malasan</li>
          <li>
            Memiliki suara dengkuran untuk menghilangkan stres dan memperkuat
            tulang
          </li>
        </ul>
        <h3>Biologis :</h3>
        <ul>
          <li>Kucing adalah hewan mamalia karnivora dari keluarga Felidae</li>
          <li>
            Ada banyak jenis kucing, seperti kucing hutan, kucing liar, dan
            kucing domestik
          </li>
          <li>
            Semua kucing dalam genus ini berbagi nenek moyang yang sama yang
            mungkin hidup sekitar 6-7 juta tahun yang lalu di Asia
          </li>
          <li>Kucing berkembang biak dengan cara melahirkan</li>
          <li>
            Kucing memiliki satu ekor, berkaki empat, bentuk kuping lancip, dan
            memiliki kelopak mata ketiga yang disebut membrana niktitans
          </li>
        </ul>
        <h3>Ukuran :</h3>
        <ul>
          <li>Ukuran tubuh kucing bervariasi tergantung pada ras</li>
          <li>
            Pada umumnya, kucing memiliki panjang tubuh hingga 76 cm dan berat
            tubuh antara 2-4 kg
          </li>
        </ul>
        <h3>Kebersihan :</h3>
        <ul>
          <li>
            Kucing termasuk hewan paling bersih karena sering membersihkan
            tubuhnya dengan jilatan air liurnya
          </li>
          <li>
            Kucing mandi dengan menjilat tubuhnya sendiri untuk membersihkan
            bulu dan menghilangkan sel kulit mati
          </li>
        </ul>
        <!-- menutup tag untuk section dengan id "Karakteristik" -->
      </section>

      <!-- buka tag untuk membuat sebuah section dengan id "Perawatan" -->
      <section id="Perawatan">
        <h1>Perawatan</h1>
        <h3>Bulu</h3>
        <ul>
          <li>
            Menyisir bulu kucing secara teratur untuk menghilangkan bulu mati
            dan kotoran yang menempel pada bulu
          </li>
          <li>
            Memberikan makanan yang sehat dan bergizi untuk menjaga kesehatan
            bulu kucing
          </li>
          <li>
            Memberikan suplemen omega-3 untuk menjaga kelembaban dan kilau bulu
            kucing
          </li>
          <li>
            Memberikan perawatan khusus seperti shampoo dan conditioner untuk
            menjaga kebersihan dan kesehatan bulu kucing
          </li>
        </ul>
        <h3>Kuku</h3>
        <ul>
          <li>
            Memotong kuku kucing secara teratur untuk mencegah kuku tumbuh
            terlalu panjang dan melukai kucing atau merusak perabotan rumah
          </li>
          <li>
            Memberikan papan gores atau tiang gores untuk memfasilitasi kucing
            mengasah kuku
          </li>
        </ul>
        <h3>Gigi</h3>
        <ul>
          <li>
            Menyikat gigi kucing secara teratur untuk mencegah terjadinya
            masalah gigi dan mulut pada kucing
          </li>
          <li>
            Memberikan makanan khusus yang dapat membantu membersihkan gigi
            kucing
          </li>
        </ul>
        <h3>Telinga</h3>
        <ul>
          <li>
            Membersihkan telinga kucing secara teratur untuk mencegah terjadinya
            infeksi telinga pada kucing
          </li>
          <li>
            Memberikan perawatan khusus seperti tetes telinga untuk menjaga
            kebersihan telinga kucing
          </li>
        </ul>
        <h3>Mata</h3>
        <ul>
          <li>
            Membersihkan mata kucing secara teratur untuk mencegah terjadinya
            infeksi mata pada kucing
          </li>
          <li>
            Memberikan perawatan khusus seperti tetes mata untuk menjaga
            kesehatan mata kucing
          </li>
        </ul>
        <h3>Kesehatan</h3>
        <ul>
          <li>
            Memberikan vaksinasi dan obat cacing secara teratur untuk menjaga
            kesehatan kucing
          </li>
          <li>
            Membawa kucing ke dokter hewan secara teratur untuk pemeriksaan
            kesehatan dan perawatan medis jika diperlukan
          </li>
        </ul>
        <!-- menutup tag untuk section dengan id "Perawatan" -->
      </section>

      <!-- buka tag untuk membuat sebuah section dengan id "Galeri" -->
      <section id="Galeri">
        <h2>Galeri</h2>
        <div class="galeri">
          <!-- menampilkan enam belas gambar dengan tampilan yang rapi dan teratur  -->
          <img src="img2/1.jpeg" alt="1" />
          <img src="img2/2.jpeg" alt="2" />
          <img src="img2/3.jpeg" alt="3" />
          <img src="img2/4.jpeg" alt="4" />
          <img src="img2/5.jpeg" alt="5" />
          <img src="img2/6.jpeg" alt="6" />
          <img src="img2/7.jpeg" alt="7" />
          <img src="img2/8.jpeg" alt="8" />
          <img src="img2/9.jpeg" alt="9" />
          <img src="img2/10.jpeg" alt="10" />
          <img src="img2/11.jpeg" alt="11" />
          <img src="img2/12.jpeg" alt="12" />
          <img src="img2/13.jpeg" alt="13" />
          <img src="img2/14.jpeg" alt="14" />
          <img src="img2/15.jpeg" alt="15" />
        </div>
        <!-- menutup tag untuk section dengan id "Galeri" -->
      </section>
      <!-- menutup tag untuk div dengan kelas "main-content" -->
    </div>

<!-- Previous Page -->
    <!-- buka tag untuk membuat sebuah div dengan kelas "link" -->
    <div class="link">
      <!-- buka tag untuk membuat sebuah tombol dengan kelas "button" -->
      <button class="button button_bawah">
        <!-- menampilkan tautan yang akan membuka halaman web baru ketika tombol tersebut ditekan -->
        <a href="https://rizkiamalina1984.github.io/"
          ><img src="assets/panah.svg" alt="" />
          <!-- menutup tag untuk tautan -->
        </a>
        <!-- menutup tag untuk tombol -->
      </button>
      <!-- menampilkan teks "Previous Website" pada halaman web dengan tag <h3> -->
      <h3>Halaman Sebelumnya</h3>
      <!-- menutup tag untuk div dengan kelas "link" -->
    </div>

<!-- Footer -->
    <div class="footer" id="footerid">
      KYLA ZAHRA WINNETOU 221401106
      <br />
      RIZKI AMALINA TRIWAHYUNI 221401123
      <br />
      UTS Pemrograman Website 6
      <br />
      Gambar referensi diambil dari Google dan Pinterest.
      <!-- menutup tag untuk div dengan kelas "footer" -->
    </div>

<!-- Java Script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <!-- menutup tag untuk bagian body dari halaman web -->
  </body>
  <!-- menutup tag untuk halaman web -->
</html>