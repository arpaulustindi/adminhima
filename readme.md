# TEMPLATE WEB ADMIN PANEL "ADMIN HIMA"

> Template ini menggunakan template AdminLTE yang telah dimodifikasi khusus untuk pembelajaran khususnya mahasiswa Sistem Informasi Politeknik Negeri Nusa Utara, dan tidak menutup kemungkinan untuk dipelajari oleh mahasiswa dari kampus lain



Template ini telah dimodifikasi agar dapat dapat digunakan dalam web server. Syarat kebutuhan system untuk menggunakan template ini adalah :

1. System Operasi : Linux / Windows 10 / Mac OS
2. Web Server : Apache 2.4 >=
3. Database : MySql 5 >=
4. Browser : Seluruh Browser yang diupdate/versi 2019 >=
5. Code Editor : Visual Studio Code (disarankan) / Atom/ Sublime/ Note++/Dreamweaver, dll

*Template ini didevelop menggunakan Linux Ubuntu 18.04 (versi stabil), Apache 2.4.9, MySQL 5.7.9, dengan code editor Visual Studio Code. Disarankan untuk menggunakan versi yang sama atau lebih tinggi*



## TENTANG CORE TEMPLATE :

![01.Struktur_Folder](/htdocs/adminhima/gambar_readme/01.Struktur_Folder.png)



- **FOLDER aset/adminlte**

  Berisi template ADMIN LTE, folder ini disarankan untuk dikelola APABILA ingin menambahkan Library/Plugin yang baru.

- **FOLDER config**

  Berisi file konfigurasi, disarankan untuk disetting saat pertam kali menggunakan.

  *Akan dibahas lebih lanjut di bagian contoh*

- **FOLDER gambar_readme**

  Berisi gambar dari tutorial, tidak termasuk dalam struktur aplikasi, tidak perlu diubah.

- **FOLDER halaman**

  Berisi kumpulan halaman contoh, dan akan menjadi tempat pengerjaan. Sangat disarankan tidak menghapus/rename file beranda.php, tapi cukup dimodifikasi sesuai keperluan kita.

  *Akan dibahas lebih lanjut di bagian contoh*

- **FOLDER part**

  Berisi kumpulan part dari template AdminLTE yang telah dimodifikasi, yang paling sering akan digunakan untuk melakukan perubahan adalah file body.sidebar.menu.php yang akan menyesuaikan dengan aplikasi kita nanti

  *Akan dibahas lebih lanjut di bagian contoh*

- **FILE index.php**

  Merupakan file index dari aplikasi kita, tidak perlu diubah

- **FILE readme.md**

  Merupakan file dari petunjuk yang sedang anda baca, tidak termasuk dalam aplikasi, dan tidak perlu diubah



## CARA INSTALL

1. Extract file zip yang telah didownload

2. Rename folder hasil extract (huruf kecil tanpa spasi)

3. Copykan ke folder www atau htdocs kalian

4. Buka folder menggunakan code editor pilihan anda (Open Folder)

5. Buka file **config/global.php** kemudian ubah nilai parameter `$GLOBALS`.

   Contoh kasus :

   * nama folder hasil rename : **latihanlayout**
   * nama aplikasi : **Belajar Layout Admin**

   Pada file **config/global.php**, ubalah seperti berikut :

   ```php
   <?php
   $GLOBALS['aplikasi'] = "Belajar Layout Admin";
   $GLOBALS['index'] = "http://localhost/latihanlayout"
   ?>
   ```

6. Jalankan web server apache (Bisa melalui panel XAMPP/WAMP/LAM dll)

7. Buka url http://localhost/latihanlayout

8. Misalkan pada folder **halaman** kalian menambahkan dan mendesain contoh **coba.php** , maka untuk membukanya cukup ketikan link http://localhost/latihanlayout/?page=coba . Hal ini bisa juga disetting untuk ditambahkan pada menu (file **part/body.sidebar.menu.php**) pada link menu `<a href="?page=coba" tag-lainnya... >Coba Halaman</a>`. Untuk konfigurasi menu akan ditampilkan pada kesempatan berikutnya.

## PEMAHAMAN SINGKAT LAYOUT

Dalam pemahaman content, sangat disarankan untuk membaca komentar. Bagian yang akan digunakan sebagai awal  <!--Contoh Komentar--> dan bagian yang akan dibahas ada di bawah/dalamnya yang diakhiri dengan <!--/.Contoh Komentar-->. Sangat disarankan untuk melihat tanda komentar tersebut.

*Dalam gambar yang muncul pada pemahaman singkat, **nomor baris hanya contoh** dan **dapat berubah sesuai dengan posisi pada editor anda**. **Nomor Baris hanya memudahkan dalam pemahan**, **untuk baris yang tidak memiliki nomor, artinya code tersebut masih satu baris dengan baris sebelumnya di atas***.

- **CONTENT**

  ![02.Conten_Basic](/htdocs/adminhima/gambar_readme/02.Conten_Basic.png)

  Contoh :

  ```html
  <!-- SELURUH KONTEN FORM/TABLE/GRAFIK/dll -->
  <h3 class="card-title">BERANDA APLIKASI</h3>
  <!-- /.SELURUH KONTEN FORM/TABLE/GRAFIK/dll -->
  ```

  Yang akan kita ubah adalah `<h3 class="card-title">BERANDA APLIKASI</h3>`

  hasil dari code di atasa adalah sebagai berikut :

  ![02.Conten_Basic_Preview](/htdocs/adminhima/gambar_readme/02.Conten_Basic_Preview.png)

  

- **FORM BASIC**

  Struktur awal dari form basic adalah sebagai berikut :

  ![02.Form_Basic_Empty](/htdocs/adminhima/gambar_readme/02.Form_Basic_Empty.png)

  

  yang dimulai dengan `<form role="form" action="#" method="POST" enctype="multipart/form-data">` dan diakhiri dengan `</form>`. Yang perlu diperhatikan adalah bagiaan `action="link untuk memproses data dari form"`, pada contoh menggunakan tanda `#` karena belum ditentukan untuk link file pemrosesan form.

  Sedangkan fungsi tombol form terbagi 2, yaitu Reset (untuk mengembalikan isian form ke awal saat halaman diload) dan Submit (untuk mengirim data isian form yang akan diproses).

  Hasil dari code diatas adalah sebagai berikut :

  ![02.Form_Basic_Empty_Preview](/htdocs/adminhima/gambar_readme/02.Form_Basic_Empty_Preview.png)

  

  Selanjutnya kita akan mengisi form dengan komponen inputan/opsi/pilihan, yang harus menjadi catatan, sebisa mungkin untuk tag `name="nama_element"` dan `id="id_element"`disesuaikan agar sama dengan nama kolom pada tabel di database. Pada template ini, untuk form basic contoh dapat ditemukan pada **halaman/form.php**, yang terdiri dari :

  1. **Group Input Text**

     Group input teks digunakan untuk inputan bertipe teks singkat seperti user name/akun/nama/tempat lahir/kecamatan/ dll. 

     ![02.Form_Basic_01.Input_text](/htdocs/adminhima/gambar_readme/02.Form_Basic_01.Input_text.png)
     

  2. **Group Input Angka**

     Group input angka digunakan untuk inputan bertipe angka (input hanya menerima angka 0 - 9) dapat digunakan untuk umur, mata uang, dan hal-hal lainnya yang akan digunakan untuk proses kalkulasi.

     ![02.Form_Basic_02.Input_angka](/htdocs/adminhima/gambar_readme/02.Form_Basic_02.Input_angka.png)

     

  3. **Group Input Email**

     Group input email digunakan untuk inputan email yang akan memvalidasi tanda **@** sebagai struktur email. Apabila inputan tidak valid, maka form tidak dapat disubmit.

     ![02.Form_Basic_03.Input_email](/htdocs/adminhima/gambar_readme/02.Form_Basic_03.Input_email.png)

     

  4. **Group Input Sandi**

     Group input sandi digunakan untuk inputan sandi/password, hasil inputan disamarkan dengan karakter `*` ataupun `.`

     ![02.Form_Basic_04.Input_sandi](/htdocs/adminhima/gambar_readme/02.Form_Basic_04.Input_sandi.png)

     

  5. **Group Text Area**

     Group text area pada prinsipnya sama dengan input text, namun dengan sedikit perbedaan penulisan. Text Area cenderung digunakan untuk inputan text yang panjang (kalimat) seperti komentar, alamat, dll.

     ![02.Form_Basic_05.text_area](/htdocs/adminhima/gambar_readme/02.Form_Basic_05.text_area.png)

     

  6. **Group Input File**

     Group input file digunakan untuk input file dari perangkat, file yang biasa digunakan adalah file dokumen, gambar ataupun file multimedia, dan tidak menutup kemungkinan untuk file-file lainnya.

     ![02.Form_Basic_06.input_file](/htdocs/adminhima/gambar_readme/02.Form_Basic_06.input_file.png)

     

  7. **Group Select**

     Group Select digunakan untuk opsi daftar pilihan dinamis, yang bisa bertambah/berukurang (biasanya dari tabel di database).

     ![02.Form_Basic_07.select](/htdocs/adminhima/gambar_readme/02.Form_Basic_07.select.png)

     Yang menjadi catatan dalam group select ini, bahwa data yang akan dikirim ada pada tag `value="nilai"`, dan tag `selected` merupakan penanda bahwa nilai yang akan dikirm ada pada option yang terpilih.

     

  8. **Group Opsi Check**

     Group opsi check digunakan untuk pilihan statis yang opsinya dapat dipilih lebih dari 1, misalnya hobby, favorit, dll.

     ![02.Form_Basic_07.check](/htdocs/adminhima/gambar_readme/02.Form_Basic_07.check.png)

     

  9. **Group Opsi Radio**

     Group opsi radio digunakan untuk pilihan statis yang opsinya hanya dapat dipilih 1, misalnya agama, gender, dll.

     ![02.Form_Basic_07.radio](/htdocs/adminhima/gambar_readme/02.Form_Basic_07.radio.png)

     

  10. **Group Input Hidden**

      Group opsi hidden inputannya menggunakan code, tidak terlihat, dan tidak bisa diubah oleh user, biasanya berisi id, mode, dan fungsi-fungsi tambahan lainnya. Pada tutorial ini labe hanya penanda , pada implementasi, sebaiknya tidak menggunakan elemn `<label></label>` dan `value="nilai"` langsung diprogram

      ![02.Form_Basic_08.hidden](/htdocs/adminhima/gambar_readme/02.Form_Basic_08.hidden.png)

  

  Berikut kode lengkap form basic pada **halaman/form.php**  :

  ![02.Form_Basic_full](/htdocs/adminhima/gambar_readme/02.Form_Basic_full.png)


  Dan hasil dari kode diatas sebagai berikut :

  ![02.Form_Basic_full_preview](/htdocs/adminhima/gambar_readme/02.Form_Basic_full_preview.png)

  

- **FORM ADVANCE**

  Coming Soon

- **TABLE**

  Coming Soon

- **GRAFIK**

  Coming Soon

[^]: Oleh : Arifin Paulus Tindi, Prodi Sistem Informasi, Jurusan Teknik Komputer dan Komunikasi Politeknik Negeri Nusa Utara (POLNUSTAR).

