# Sistem Manajemen Sepatu — Cibaduyut Shoes

Proyek ini merupakan tugas praktikum pembuatan antarmuka web interaktif menggunakan **HTML**, **CSS**, **Bootstrap 5**, dan **JavaScript** untuk mensimulasikan sistem manajemen produk sepatu.

---

## Deskripsi Proyek

**Cibaduyut Shoes** adalah sistem manajemen sepatu berbasis web yang memungkinkan pengguna untuk:
- Melihat ringkasan data produk melalui dashboard (total produk, stok, dan kategori)
- Menelusuri daftar produk sepatu beserta detail harga dan stok
- Membeli produk secara simulasi dengan pengurangan stok otomatis
- Menyimpan produk favorit ke dalam daftar wishlist
- Menambahkan data sepatu baru melalui form input
- Beralih antara tampilan terang (light mode) dan gelap (dark mode)

---

## Struktur Direktori

```
project/
│
├── index.php           # Halaman utama aplikasi
├── script.js           # JavaScript utama (dark mode, beli, wishlist)
├── css/
│   └── style.css       # Custom stylesheet
└── assets/
    ├── background.jpg          # Gambar hero section
    ├── NIKE_P_6000.jpg         # Gambar produk Nike P 6000
    ├── AIR_FORCE_1.jpg         # Gambar produk Nike Air Force 1
    └── AIR_JORDAN_1_LOW.jpg    # Gambar produk Nike Air Jordan 1 Low
```

---

## Teknologi yang Digunakan

| Teknologi | Keterangan |
|-----------|------------|
| HTML5 | Struktur halaman web |
| CSS3 | Kustomisasi tampilan |
| Bootstrap 5.3.2 | Framework CSS responsif |
| JavaScript (ES6) | Interaktivitas, dark mode, wishlist, fitur beli |
| localStorage | Menyimpan preferensi tema dark mode |
| sessionStorage | Menyimpan data wishlist selama sesi aktif |

---

## Fitur

### 1. Navbar
Navigasi bagian atas dengan nama brand **CIBADUYUT SHOES** yang responsif untuk perangkat mobile. Terdapat tombol akses Wishlist dan toggle Dark Mode.

### 2. Hero Section
Bagian banner dengan background image dan teks selamat datang.

### 3. Dashboard Card
Tiga kartu ringkasan yang menampilkan:
- **Total Produk** — 12
- **Stok Tersedia** — 85
- **Kategori** — 3

Kartu memiliki efek hover berupa scale dan shadow.

### 4. Daftar Sepatu
Menampilkan produk dalam format card grid (3 kolom), masing-masing berisi gambar, nama, harga, stok, tombol Beli, dan tombol Wishlist. Produk yang tersedia:
- Nike P 6000 — Rp 1.420.000
- Nike Air Force 1 — Rp 1.529.000
- Nike Air Jordan 1 — Rp 2.500.000

### 5. Fitur Beli (JavaScript — Event Listener & DOM)
Tombol **Beli** pada setiap kartu produk memiliki fungsi:
- Mengurangi jumlah stok secara langsung di halaman (manipulasi DOM)
- Menampilkan notifikasi `alert` berisi nama produk yang berhasil dibeli
- Menonaktifkan tombol dan mengubah teksnya menjadi **"Habis"** ketika stok mencapai 0

### 6. Fitur Wishlist (JavaScript — sessionStorage + Modal Bootstrap)
Tombol **❤️ Wishlist** pada setiap kartu produk memiliki fungsi:
- Menyimpan nama produk ke dalam `sessionStorage` (data hilang saat browser ditutup)
- Menampilkan jumlah item wishlist secara real-time di badge navbar
- Membuka modal **Daftar Wishlist** yang menampilkan semua produk yang telah disimpan
- Menyediakan tombol **Hapus** per item untuk menghapus produk satu per satu
- Menyediakan tombol **Kosongkan** untuk menghapus seluruh wishlist sekaligus
- Mencegah produk yang sama ditambahkan lebih dari sekali

### 7. Fitur Dark Mode (JavaScript — localStorage + DOM)
Tombol **Mode Gelap / Mode Terang** di navbar memiliki fungsi:
- Mengaktifkan atau menonaktifkan tampilan gelap dengan menambahkan class `dark-mode` pada `<body>`
- Menyimpan preferensi tema pengguna ke `localStorage` sehingga tema tetap terjaga meski halaman di-refresh
- Mengubah label tombol secara dinamis sesuai mode yang aktif

### 8. Form Tambah Sepatu
Form input untuk menambah data sepatu baru, meliputi:
- Nama Sepatu
- Harga
- Stok
- Kategori (Running / Basketball / Casual)

---

## Cara Menjalankan

1. Clone atau unduh repositori ini.
2. Pastikan semua file aset gambar tersedia di folder `assets/`.
3. Buka file `index.php` melalui server lokal (XAMPP, Laragon, atau sejenisnya), atau gunakan ekstensi **Live Server** di VS Code.

---

## Catatan Penyimpanan Data

| Fitur | Storage | Keterangan |
|-------|---------|------------|
| Dark Mode | `localStorage` | Persisten — tetap tersimpan setelah browser ditutup |
| Wishlist | `sessionStorage` | Sementara — terhapus saat tab atau browser ditutup |

---

## Tampilan

Halaman terdiri dari satu halaman utama (`index.php`) dengan layout responsif yang dapat diakses dari desktop maupun perangkat mobile, dilengkapi dukungan dark mode untuk kenyamanan pengguna.

---

## Informasi Tugas Modul Praktikum

| | |
|---|---|
| **Mata Kuliah** | Praktikum ISB-310BB Sistem Informasi Web |
| **Tahun** | 2026 |
| **Tema** | Sistem Manajemen Produk — Cibaduyut Shoes |