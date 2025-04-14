## latar belakang masalah
dalam era digital saat ini yang berkembang sangat pesat kita harus bisa dan mampu mengenganalisa kamasing2 karena itu adalah masalah awal untuk memulai pembuatan web.

### analisa docker dengan 5W 1H ###
Analisis Docker Menggunakan Metode 5W + 1H

1. What (Apa itu Docker?)
Docker adalah sebuah platform open-source yang memungkinkan pengembang untuk membuat, mengemas, dan menjalankan aplikasi dalam container. Container adalah unit perangkat lunak ringan yang berisi semua dependensi yang diperlukan untuk menjalankan aplikasi, sehingga memastikan bahwa aplikasi berjalan secara konsisten di berbagai lingkungan.

2. Why (Mengapa Menggunakan Docker?)
Portabilitas: Aplikasi dapat berjalan di mana saja tanpa masalah kompatibilitas.

Konsistensi Lingkungan: Menghilangkan perbedaan antara lingkungan pengembangan, staging, dan produksi.

Efisiensi Sumber Daya: Lebih ringan dibandingkan virtual machine karena berbagi kernel dengan OS host.

Skalabilitas: Mudah diintegrasikan dengan teknologi seperti Kubernetes untuk mengelola banyak container.

Deployment Cepat: Memungkinkan CI/CD yang lebih efisien dengan otomatisasi proses pengiriman aplikasi.

3. Who (Siapa yang Menggunakan Docker?)
Developer: Untuk mengembangkan aplikasi yang lebih portabel dan stabil.

DevOps Engineer: Untuk mengotomatisasi deployment dan manajemen infrastruktur.

System Administrator: Untuk meningkatkan efisiensi dalam mengelola server dan aplikasi.

Perusahaan Teknologi: Digunakan oleh perusahaan seperti Google, Netflix, dan Spotify untuk menjalankan aplikasi berskala besar.

4. Where (Di Mana Docker Digunakan?)
Cloud Environment: Digunakan di AWS, Azure, GCP untuk deployment berbasis container.

On-Premise Server: Untuk manajemen aplikasi berbasis microservices.

Local Development: Untuk pengujian dan pengembangan aplikasi yang lebih cepat dan stabil.

5. When (Kapan Docker Digunakan?)
Saat Mengembangkan Aplikasi Multiplatform: Untuk memastikan aplikasi berjalan konsisten di berbagai sistem.

Saat Deployment Aplikasi Skala Besar: Untuk mempermudah manajemen layanan dengan microservices.

Saat Membutuhkan Isolasi Lingkungan: Misalnya, menghindari konflik dependensi antar proyek.

6. How (Bagaimana Cara Menggunakan Docker?)
Instalasi Docker

Download dan install Docker dari docker.com.

Membuat Dockerfile

Contoh Dockerfile untuk aplikasi berbasis Node.js:

dockerfile
Salin
Edit
FROM node:16
WORKDIR /app
COPY . .
RUN npm install
CMD ["node", "app.js"]
Build Image

Menjalankan perintah berikut untuk membuat image Docker:

sh
Salin
Edit
docker build -t nama-aplikasi .
Menjalankan Container

Menggunakan perintah berikut untuk menjalankan container:

sh
Salin
Edit
docker run -d -p 3000:3000 nama-aplikasi
Menggunakan Docker Compose

Jika aplikasi memiliki banyak layanan (contoh: database, backend, frontend), gunakan docker-compose.yml:

yaml
Salin
Edit
version: '3'
services:
  web:
    image: nama-aplikasi
    ports:
      - "3000:3000"
  database:
    image: mysql
    environment:
      MYSQL_ROOT_PASSWORD: root
Mengelola Container

Melihat container yang berjalan: docker ps

Menghentikan container: docker stop container_id

Menghapus container: docker rm container_id

### Kesimpulan ###
Docker adalah solusi yang efisien untuk mengelola aplikasi dengan lingkungan yang konsisten dan portabel. Dengan menggunakan container, pengembang dapat dengan mudah membangun, menguji, dan menerapkan aplikasi tanpa masalah kompatibilitas.

### Analisa menggunakan 5W 1H ###
What (Apa yang dibuat?)
Anda telah membuat halaman web sederhana menggunakan HTML dan CSS yang berisi informasi profil pribadi, termasuk nama, tempat tanggal lahir, alamat, hobi, serta gambar profil dan tautan media sosial.

Who (Siapa yang menggunakannya?)
Halaman ini dibuat untuk diri Anda sendiri sebagai profil pribadi. Pengguna yang mengaksesnya bisa berupa teman, rekan kerja, atau siapa saja yang ingin mengetahui informasi tentang Anda.

When (Kapan digunakan?)
Halaman ini bisa digunakan kapan saja, terutama ketika Anda ingin memperkenalkan diri secara digital, misalnya untuk portofolio online, aplikasi kerja, atau keperluan networking di media sosial.

Where (Di mana digunakan?)
Halaman ini bisa digunakan di berbagai platform, seperti situs web pribadi, portofolio online, atau bahkan sebagai bagian dari profil profesional di LinkedIn atau GitHub Pages.

Why (Mengapa dibuat?)
Tujuan utama pembuatan halaman ini adalah untuk menyajikan informasi pribadi dengan tampilan yang menarik dan mudah diakses. Hal ini membantu dalam membangun identitas digital yang profesional dan modern.

How (Bagaimana cara membuatnya?)
Halaman ini dibuat dengan:

HTML untuk struktur dasar halaman (judul, paragraf, gambar, dan tautan media sosial).

CSS untuk desain tampilan yang lebih menarik, termasuk tata letak, warna, dan efek visual.

Gaya responsif untuk memastikan halaman dapat tampil dengan baik di berbagai perangkat.

Tautan media sosial untuk menghubungkan profil ini dengan platform lainnya.

### Kelebihan dan Kekurangan Halaman Profil yang Dibuat ###

### Kelebihan ### :
Desain Sederhana & Elegan

Menggunakan CSS yang bersih dengan background netral dan shadow untuk tampilan modern.

Teks berpusat (text-align: center) memberikan kesan rapi dan terstruktur.

Responsif & Mudah Dibaca

Menggunakan max-width pada .container untuk menjaga tampilan tetap baik di berbagai ukuran layar.

Gambar profil dibulatkan (border-radius: 50%), memberikan kesan lebih menarik.

Struktur HTML yang Jelas & Terorganisir

Penggunaan elemen-elemen semantik seperti <h1>, <p>, dan <div> untuk meningkatkan keterbacaan kode.

Menampilkan Informasi dengan Jelas

Informasi penting seperti nama, tempat tanggal lahir, alamat, dan hobi tersusun dengan baik.

Tambahan tautan sosial media memberi akses lebih untuk pengguna yang ingin terhubung.

### Kekurangan ### :
Kurangnya Interaktivitas

Tidak ada efek hover atau animasi transisi untuk pengalaman pengguna yang lebih menarik.

Bisa ditambahkan efek hover pada tautan media sosial atau efek transisi pada gambar.

Belum Menggunakan Grid atau Flexbox

Tata letak masih menggunakan margin manual yang kurang fleksibel dibandingkan CSS Grid atau Flexbox.

Dengan Flexbox, konten bisa lebih mudah diatur ulang jika ditampilkan di layar kecil.

Tidak Ada Tombol Navigasi

Jika halaman ini bagian dari situs yang lebih besar, sebaiknya ada tombol "Home", "About", atau "Contact" untuk memudahkan navigasi.

Gambar Profil Tidak Dinamis

Gambar masih ditampilkan dalam ukuran tetap (width: 150px; height: 150px;).

Bisa ditingkatkan dengan penggunaan ukuran gambar yang lebih responsif (max-width: 100%; untuk layar kecil).


### Kesimpulan ###
Halaman profil yang telah dibuat memiliki desain sederhana namun rapi dan menarik. Dengan menggunakan HTML dan CSS, informasi dasar seperti nama, tempat tanggal lahir, alamat, serta hobi ditampilkan dengan jelas.