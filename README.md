<p align="center">
  <img src="https://github.com/w4lidi/tugas_web/blob/main/prong.png" width="500px">
</p>

<h1 align="center">Fire Shark</h1>

<span align="center">
  <p>Aplikasi Fire Shark ini adalah sebuah aplikasi file upload yang memudahkan dalam proses pertukaran file sesama mahasiswa pada linkungan kampus</p>
</span>

<hr/>

<br/>
<h3>Teknologi yang digunakan</h3>

<ul>
  <li>Front End : HTML, Bootstrap</li>
  <li>Backend : PHP </li>
  <li>Server : MySQL server, Apache sever </li>
</ul>

<br/>

<h3>Fitur</h3>
<ul>
  <li><strong>Authentications</strong>
    <ul>
      <li>Login</li>
      <li>Register</li>
      <li>Logut</li>
    </ul>
  </li>
  
  <li><strong>File Management</strong>
    <ul>
      <li>Upload</li>
      <li>Download</li>
      <li>Delete</li>
    </ul>
  </li>
</ul>

<br/>

<h3>Development Team</h3>
<ul>
  <li> Walidi Wahyu Pratama : Project Manager, Back End Development, Databases Design</li>
  <li> Riska Indah Cahyanti : Front End - Dashboard Page</li>
  <li> Baiq. Evi Pratiwi : Front End - Register Page & Login Page</li>
  <li> Arjunaldi : Front End - Upload Page</li>
  <li> Ovin Satriawan : Front End - Daftar file di dasboard page
</ul>

<h3>Tampilan Aplikasi</h3>

<table>
<!-- row -->
<tr>
<td>
<small>Home (Halaman Depan)</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/beranda.jpg' width='100%'>
</td>
<td>
<small>Menu Order</small>
<img src='https://s3-id-jkt-1.kilatstorage.id/nadhamedia/screenshoot/Nadha-Resto/menu_order_1.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Menu List</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/menu_order_1.jpg' width='100%'>
</td>
<td>
<small>Cart</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/menu_order_3.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Checkout</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/checkout.jpg' width='100%'>
</td>
<td>
<small>Notifikasi Email</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/email.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Beranda</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/beranda.jpg' width='100%'>
</td>
<td>
<small>Form Pesanan</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/form_pesanan.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Pilih Menu</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/form_pilih_menu.jpg' width='100%'>
</td>
<td>
<small>Pembayaran</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/form_pembayaran.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Data Menu</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/data_menu.jpeg' width='100%'>
</td>
<td>
<small>Form Tambah Menu</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/form_tambah_menu.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Data Pelanggan</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/data_pelanggan.jpg' width='100%'>
</td>
<td>
<small>Pembelian Bahan Baku</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/pembelian_bahan_baku.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Form Pembelian Bahan Baku</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/form_pembelian_bahan_baku.jpg' width='100%'>
</td>
<td>
<small>Laporan Transaksi</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/laporan_transaksi.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Arus Kas</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/arus_kas.jpg' width='100%'>
</td>
<td>
<small>Statistik</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/statistik.jpg' width='100%'>
</td>
</tr>
<!-- row -->
<tr>
<td>
<small>Setting Resto</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/setting.jpg' width='100%'>
</td>
<td>
<small>Setting Front End</small>
<img src='https://media.publit.io/file/cloudladun/NadhaResto/setting_slider_utama.jpg' width='100%'>
</td>
</tr>
<!-- row -->
</table>

<h4><b>Persiapan sebelum menggunakan aplikasi</b></h4>

<ul>
<li> Pastikan yang di download/clone adalah versi release dari aplikasi ini</li>
<li> Konfigurasi path server di file <code>engine/rule/base.php</code></li>
<li> Konfigurasi database di file <code>engine/rule/database.php</code></li>
<li> Untuk database, silahkan buka halaman <code>path-to-app/dbMigrate</code>. Namun pastikan settingan path server & konfigurasi database sudah benar.</li>
<li> Untuk printer cetak struk, tipe yang disarankan adalah (Epson TM-T82, Thermal Printer GP-5890XIII, Epson T-88IIIP, MiniPOS MP-RP58L), atau tipe lain yang mendukung sdk escopos</li>
<li> Untuk notifikasi ke whatsapp pelanggan, kami mengintegrasikan ke layanan woowa, silahkan berlangganan untuk mendapatkan key & mengaktifkan di aplikasi ini.</li>
<li> Konfigurasi pengaturan restoran sebelum menggunakan aplikasi ini</li>
<li> Untuk mengaktifkan pemesanan delivery order membutukan service firebase, silahkan buat akun firebase & setting di menu aplikasi</li>
</ul>

<h5><a href='https://www.youtube.com/watch?v=aPx-HhC87-0'>Demo (Youtube) </a></h5>
<h5><a href='http://nadha-resto.justhasnah.me/'>Demo Website (user : admin, password : admin)</a></h5>

<i><small>Kami nonaktifkan beberapa fungsi untuk menghindari form bomb dari pengakses demo</small></i>

<p>Jika mengalami masalah dalam instalasi, ataupun operasional dari aplikasinya, silahkan hubungi kami di email <b>alditha.forum@gmail.com</b>. Aplikasi ini kami beri lisensi opensource (MIT) jadi teman teman bebas untuk menggunakan & mengembangkannya kembali. Apabila teman" menemukan bug yang ada di aplikasi ini,
kami berharap dapat membantu pemgembangan aplikasi ini untuk lebih bagus lagi.</p>

<p>Silahkan subs channel Haxors Update di telegram untuk mendapatkan informasi terbaru seputar perkembangan aplikasi" yang sedang dikembangkan oleh haxorsprogramming : 
<h3><a href='https://t.me/haxorsupdate'>Channel Telegram Haxorsprogramming</a></h3></p>

<p align='justify'>
Ingin berkontribusi untuk pengembangan club programming ini? atau anda meraasa terbantu dengan aplikasi ini? bantu kami melalui donasi lewat saweria di <h2><a href='https://saweria.co/donate/haxorsprogramming'>Saweria Haxorsprogramming</a></h2>sedikit banyaknya donasi dapat memberi kontribusi yang positif bagi perkembangan club ini. Terima kasih, salam koding .. ^_^
</p>
