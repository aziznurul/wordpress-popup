# WordPress Pop-Up Plugin  

## 🎯 Deskripsi  
Plugin ini menampilkan **pop-up modal** di halaman WordPress berdasarkan Custom Post Type (CPT). Pop-up dapat dikonfigurasi melalui admin panel WordPress dan hanya ditampilkan pada halaman tertentu sesuai pengaturan.  

## 🚀 Fitur  
- **OOP & Singleton Pattern** untuk struktur kode yang rapi  
- **Custom Post Type (CPT)** untuk mengelola pop-up dari admin WordPress  
- **Custom Fields** untuk menentukan halaman tempat pop-up muncul  
- **Modal Pop-up** dengan tombol **Close (✖)**  
- **WordPress REST API** untuk mengambil data pop-up  
- **SASS untuk styling**  
- **Keamanan**: Endpoint REST API hanya bisa diakses oleh pengguna yang login  

---

## 📂 Instalasi  
Ikuti langkah-langkah berikut untuk menginstal dan menjalankan plugin ini di **XAMPP + WordPress**:

### 1️⃣ **Persiapan Environment**
- **Pastikan XAMPP sudah berjalan**
- **WordPress sudah terinstal** di `htdocs/wordpress`
- **Buka terminal atau cmd** dan navigasikan ke folder `plugins`:
  cd C:\xampp\htdocs\wordpress\wp-content\plugins
  
##2️⃣ Clone Repository
Jalankan perintah berikut di terminal/cmd:
git clone https://github.com/username/repo-popup-plugin.git popup-plugin

##3️⃣ Aktifkan Plugin
Login ke WordPress Admin (http://localhost/wordpress/wp-admin/)
Buka "Plugins" > "Installed Plugins"
Aktifkan "Pop-Up Plugin"

📌 Konfigurasi di WordPress
Di Admin Panel, klik "Popups"
Tambahkan Pop-up Baru
Isi Title (judul pop-up)
Isi Content (isi pop-up)
Pilih halaman di mana pop-up akan muncul
Klik "Publish"

🛠️ Cara Kerja
Saat halaman dimuat, plugin akan mengambil pop-up terbaru dari database
Pop-up akan ditampilkan secara otomatis menggunakan JavaScript
Jika pengguna menekan tombol Close (✖), pop-up akan hilang

📜 REST API
1. Endpoint untuk mengambil pop-up:
GET /wp-json/artistudio/v1/popup
2. Hanya dapat diakses oleh pengguna yang login!

### **💡 Cara Menggunakannya**
1. **Copy-paste isi di atas ke dalam file `README.md` di root folder repository GitHub**  
2. **Ganti `username/repo-popup-plugin.git` dengan link repository kamu**  
3. **Edit bagian "Dibuat oleh" dengan nama GitHub kamu**  

🚀 Sekarang repo kamu siap untuk di-publish di GitHub! Semangat! 😃🔥

