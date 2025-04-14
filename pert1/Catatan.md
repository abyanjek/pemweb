## catatan penting ##
membuka web yang saya buat ketik localhost/index.html
 
 *Pemrograman Web - Pertemuan 1*  
*Waktu: 09.00 - 12.00*

---

### *Materi Hari Ini:*

#### *1. Docker*

- *Apa itu Docker?*
  Docker itu platform buat bikin, ngejalanin, dan nge-manage aplikasi dalam wadah (container) yang ringan, portabel, dan terisolasi.

- *Kenapa Harus Pakai Docker?*
  - Bikin proses deploy aplikasi jadi lebih gampang dan konsisten di berbagai lingkungan.
  - Nambah portabilitas dan efisiensi sumber daya.
  - Ngebantu ngembangin aplikasi lebih cepet.

- *Analisis SWOT (5W 1H) tentang Docker:*
  1. *What (Apa):* Docker itu platform buat bikin, nge-pack, dan ngejalanin aplikasi dalam container yang terisolasi.
  2. *Why (Kenapa):* Biar gampang dipindah-pindahin, efisien, dan lebih simpel pas deploy aplikasi.
  3. *Who (Siapa):* Dipake sama developer, sysadmin, DevOps, dan tim IT yang ngelola aplikasi.
  4. *When (Kapan):* Dipake pas proses ngembangin, ngetes, dan deploy aplikasi.
  5. *Where (Di mana):* Bisa di server lokal, cloud, atau di lingkungan development lokal.
  6. *How (Gimana):* Docker bikin container yang ngejalanin aplikasi sama dependensinya secara terisolasi.

- *Kapan Harus Pakai Docker?*
  - Kalau butuh aplikasi yang bisa jalan di berbagai lingkungan tanpa ribet.
  - Kalau mau efisiensi penggunaan sumber daya server.
  - Kalau butuh proses deployment yang cepat dan konsisten.
  
---

#### *2. Website*

- *Apa itu Website?*
  Website itu kumpulan halaman web yang nyambung satu sama lain dan bisa diakses lewat internet pake browser.

- *Contoh Website:*
  - *E-Commerce:* Tokopedia, Amazon.
  - *Media Sosial:* Facebook, Instagram.
  - *Portal Berita:* BBC, Kompas.
  - *Edukasi:* Coursera, Khan Academy.
  - *Pemerintahan:* Indonesia.go.id, IRS.gov.

- *Fungsi Website:*
  Website berfungsi buat nyediain informasi ke user dengan tampilan yang gampang dipahami dan digunakan.

---

### *3. Project*

- *Project Pra-UTS:*
  Tiap mahasiswa harus bikin website sesuai tema yang dikasih.

- *Project Akhir:*
  - Bikin website company profile.
  - Fitur dan desain harus sesuai sama analisis awal, termasuk workflow, flowchart, dan use case.
  - Gak boleh copas kode dari orang lain.

---

### *4. HTML (HyperText Markup Language)*

- *Apa itu HTML?*
  HTML itu bahasa markup buat ngebangun struktur dan konten halaman web, kayak teks, gambar, video, dan link.

- *Tag Dasar dalam HTML:*
  - <html> : Tag utama yang menampung seluruh elemen halaman web.
  - <head> : Berisi informasi meta, title, dan link ke file CSS atau script.
  - <title> : Menentukan judul halaman yang muncul di tab browser.
  - <body> : Berisi semua konten yang ditampilkan di halaman web.
  - <h1> - <h6> : Heading untuk judul atau subjudul.
  - <p> : Paragraf teks.
  - <a> : Link ke halaman lain atau sumber eksternal.
  - <img> : Menampilkan gambar.
  - <ul> dan <ol> : List tidak berurutan (unordered) dan berurutan (ordered).
  - <table> : Membuat tabel.
  - <form> : Formulir untuk input dari user.

---

### *5. Konfigurasi Nginx (nginx.conf)*

nginx
server {
    listen 80; 
    server_name localhost; 
    
    location / { 
        root /usr/share/nginx/html;
        index index.html;
    }
}


*Penjelasan Konfigurasi:*
- *server:* Bagian ini nge-set satu virtual server di dalam Nginx, yang memungkinkan satu server fisik bisa nge-host beberapa website atau aplikasi.
- *listen 80;* Nginx bakal dengerin koneksi HTTP di port 80.
- *server_name localhost;* Nama domain atau alamat IP buat akses server.
- *location /* Ngatur gimana Nginx nangkep request ke root URL (http://localhost/). Semua request ke root bakal diproses di blok ini.


### Saran Perbaikan ###:
Tambahkan hover effect pada tombol media sosial agar lebih interaktif.

Gunakan Flexbox atau Grid untuk tata letak yang lebih fleksibel.

Tambahkan navigasi menu agar halaman ini bisa terhubung ke halaman lain.

Implementasikan JavaScript ringan untuk efek animasi sederhana.



### *Kesimpulan*
Di pertemuan ini, kita udah bahas dasar-dasar Docker, konsep website, dan proyek yang bakal dikerjain selama kuliah. Selain itu, kita juga udah kenalan sama HTML sebagai dasar pengembangan web dan belajar dasar konfigurasi Nginx buat deployment website.



