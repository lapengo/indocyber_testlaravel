<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Soal Laravel

1. Buatlah source code PHP yang menghasilkan data sebagai berikut:
'+
'- -
'***
'++++
'-----
'****
'+++
'- -
'*
 
2. Ibu ingin mengambil uang tabungan sejumlah Rp. 1.575.250,- yang dimilikinya di sebuah bank.
Misalkan  pada  saat  itu  uang  pecahan  yang  berlaku  adalah  Rp.  100.000,-;  Rp. 50.000,-; Rp.20.000,-; Rp. 5.000,-; Rp. 100,- dan Rp. 50. Dengan menggunakan script PHP, tentukan banyaknya masing-masing uang pecahan yang diperoleh ibu tadi. 

 
Buatlah 2 buah tabel dengan spesifikasi berikut :
1. tbl_user dengan kolom : id (primary key => auto increment), email, password, nohp, dan alamat
2. tbl_produk dengan kolom : id (primary key => auto increment), nama_produk, image, harga,
stock
 
3. Dengan menggunakan framework laravel buatlah fungsi registrasi dan login (fungsi registrasi
masuk ke dalam tbl_user dan fungsi login menggunakan kolom email dan password untuk
loginnya), serta buatkan validasi untuk registrasinya seperti berikut:
a. Email: ‘email harus valid’,’maximal char 50’ dan harus menggunakan format email ex :
contoh@contoh.com (required)
b. Password : (required) 
* Minimal 6 char
* uppercase characters (A – Z)
* lowercase characters (a – z)
* Base 10 digits (0 – 9)
* Non-alphanumeric (Contoh: !, $, #, or %)
* Unicode char 
c. Nohp: ‘must a number’ (required)
d. Konfirmasi password (harus sama dengan password)
 
4. Setelah login, Buatkan satu menu untuk menampilkan list data produk (diambil dari
tbl_produk) yang berisi no (urutan dimulai dari 1), image (diatur width dan heighnya agar
bisa responsive), nama produk, stock, harga (gunakan format rupiah) dan aksi (berisi tombol 
lihat, ubah dan hapus). Buatkan juga tombol tambah produk di atas list produk untuk fungsi
menambahkan produk.
 
5. Buatkan fungsi CRUD (creat, read, update delete) pada menu list produk tersebut dengan
rincian :
a. Ketika klik tombol tambah produk tampilan akan dialihkan ke tampilan form untuk
menambahkan produk. Tampilan tersebut berisi nama produk, image, stock, dan
harga. Buatkan juga validasinya sebagai berikut
* Nama produk => required, tidak boleh sama dengan nama produk yang
sudah ada
* Image => required, maksimum size 5 mb, ekstensi yang diperbolehkan (jpg,
jpeg, png)
* Stock => required, only number
* Harga => required, only number, dan menggunakan format rupiah

b. Ketika klik tombol lihat tampilkan akan dialihkan ke tampilan baru yang berisi detail
dari produk tersebut, sediakan tombol kembali untuk kembali ke halaman list
produk.
 
 
c. Ketika klik tombol ubah, tampilan akan dialihkan ke tampilan ubah produk yang
berisikan sama persis dengan tampilan tambah produk, validasi di ubah produk
sama dengan tambah produk, sediakan tombol ubah dan tombol kembali
 
d. Ketika klik tombol hapus, akan memunculkan alert notifikasi yang bertuliskan
“apakah anda yakin ingin menghapus produk tersebut!”, ketika di klik oke data dari
produk tersebut akan terhapus. 
 
 
 
