# BÖTE Web Programlama Projesi 🎓

İstanbul Üniversitesi-Cerrahpaşa (İÜC) Hasan Âli Yücel Eğitim Fakültesi (HAYEF) BÖTE Bölümü Web Programlama dersi kapsamında geliştirilen web sitesi projesi.

## 📁 Proje İçeriği
- `böteWebsite.php` - Ana sayfa
- `dersler.php` - Ders programı ve ders bilgileri
- `ogrenciler.php` - Öğrenci listesi ve öğrenci paneli
- `ogretimElemanlari.php` - Akademik kadro ve öğretim elemanları bilgisi
- `signupLoginPage.php` - Kullanıcı kayıt ve giriş sayfası
- `sinavlar.php` - Sınav takvimi ve duyurular
- `images/` - Görseller ve logolar (İÜC Logosu vb.)

## 🚀 Okulda ve Evde Çalıştırma (XAMPP / WampServer)

1. Projeyi XAMPP'ın `htdocs` klasörüne klonlayın:
   ```bash
   cd C:/xampp/htdocs
   git clone https://github.com/HarunKemalGokmen/web_programming_php.git boteWebsite
   ```
2. XAMPP Control Panel üzerinden **Apache** servisini başlatın.
3. Tarayıcınızdan şu adrese gidin:
   ```text
   http://localhost/boteWebsite/böteWebsite.php
   ```

## 🔄 Okul & Ev Senkronizasyon Komutları

### Okulda Ders Bitince (Değişiklikleri Göndermek İçin):
```bash
git add .
git commit -m "Okulda yapılan güncellemeler"
git push
```

### Eve Gelince / Okula Gidince (Son Hali Çekmek İçin):
```bash
git pull
```
