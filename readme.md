# Sistem Manajemen Sepatu — Cibaduyut Shoes

Proyek ini merupakan tugas praktikum pembuatan antarmuka web statis menggunakan **HTML**, **CSS**, dan **Bootstrap 5** untuk mensimulasikan sistem manajemen produk sepatu.

---

## Deskripsi Proyek

**Cibaduyut Shoes** adalah sistem manajemen sepatu berbasis web yang memungkinkan pengguna untuk:
- Melihat ringkasan data produk melalui dashboard (total produk, stok, dan kategori)
- Menelusuri daftar produk sepatu beserta detail harga dan stok
- Menambahkan data sepatu baru melalui form input

---

## Struktur Direktori

```
project/
│
├── index.html          # Halaman utama aplikasi
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

---

## Fitur

### 1. Navbar
Navigasi bagian atas dengan nama brand **CIBADUYUT SHOES** yang responsif untuk perangkat mobile.

### 2. Hero Section
Bagian banner dengan background image dan teks selamat datang.

### 3. Dashboard Card
Tiga kartu ringkasan yang menampilkan:
- **Total Produk** — 12
- **Stok Tersedia** — 85
- **Kategori** — 3

Kartu memiliki efek hover berupa scale dan shadow.

### 4. Daftar Sepatu
Menampilkan produk dalam format card grid (3 kolom), masing-masing berisi gambar, nama, harga, stok, dan tombol detail. Produk yang tersedia:
- Nike P 6000 — Rp 1.420.000
- Nike Air Force 1 — Rp 1.529.000
- Nike Air Jordan 1 Low — Rp 1.729.000

### 5. Form Tambah Sepatu
Form input untuk menambah data sepatu baru, meliputi:
- Nama Sepatu
- Harga
- Stok
- Kategori (Running / Basketball / Casual)

---

## Cara Menjalankan

1. Clone atau unduh repositori ini.
2. Pastikan semua file aset gambar tersedia di folder `assets/`.
3. Buka file `index.html` langsung di browser, atau gunakan ekstensi **Live Server** di VS Code.

---

## Tampilan

Halaman terdiri dari satu halaman utama (`index.html`) dengan layout responsif yang dapat diakses dari desktop maupun perangkat mobile.

---

## Informasi Tugas Modul Praktikum

| | |
|---|---|
| **Mata Kuliah** | Praktikum ISB-310BB Sistem Informasi Web |
| **Tahun** | 2026 |
| **Tema** | Sistem Manajemen Produk — Cibaduyut Shoes |