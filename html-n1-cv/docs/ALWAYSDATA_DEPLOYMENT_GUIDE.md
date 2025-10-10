# Alwaysdata Deployment Guide

## 🌐 Alwaysdata Nedir?

Alwaysdata, Fransız bir web hosting ve cloud platform sağlayıcısıdır. Ücretsiz plan ile:
- 100 MB disk alanı
- PHP, Python, Node.js, Ruby desteği
- MySQL veritabanı
- FTP/SFTP erişimi
- SSH erişimi
- Özel domain desteği

---

## 📋 Ön Hazırlık

### Gerekli Bilgiler
- **Alwaysdata Hesabı:** mikaillekesiz.alwaysdata.net
- **FTP/SFTP Bilgileri:**
  - Host: ssh-mikaillekesiz.alwaysdata.net
  - Port: 22 (SFTP) veya 21 (FTP)
  - Username: (alwaysdata kullanıcı adınız)
  - Password: (alwaysdata şifreniz)

### Dosyalar
- `cv_pw1.html` - PW N°1 için
- `cv_pw2.html` - PW N°2 için

---

## 🚀 Deployment Yöntemleri

### Yöntem 1: Web Interface (En Kolay)

#### Adım 1: Alwaysdata'ya Giriş Yap
1. https://admin.alwaysdata.com/ adresine git
2. Kullanıcı adı ve şifre ile giriş yap

#### Adım 2: File Manager'ı Aç
1. Sol menüden "Web" → "Sites" seç
2. Sitenizi bulun (mikaillekesiz.alwaysdata.net)
3. "File Manager" butonuna tıkla

#### Adım 3: Dosyaları Upload Et
1. `www` klasörüne git
2. "Upload" butonuna tıkla
3. `cv_pw1.html` dosyasını seç ve upload et
4. `cv_pw2.html` dosyasını seç ve upload et

#### Adım 4: Test Et
1. https://mikaillekesiz.alwaysdata.net/cv_pw1.html
2. https://mikaillekesiz.alwaysdata.net/cv_pw2.html

---

### Yöntem 2: FTP Client (FileZilla)

#### Adım 1: FileZilla'yı İndir ve Kur
- https://filezilla-project.org/download.php?type=client

#### Adım 2: Bağlantı Ayarları
```
Host: ftp-mikaillekesiz.alwaysdata.net
Protocol: FTP
Port: 21
Username: (alwaysdata kullanıcı adınız)
Password: (alwaysdata şifreniz)
```

#### Adım 3: Bağlan ve Upload Et
1. "Quickconnect" butonuna tıkla
2. Sağ tarafta `www` klasörüne git
3. Sol taraftan dosyaları sürükle-bırak

---

### Yöntem 3: SFTP (Secure FTP)

#### Adım 1: Terminal'i Aç

#### Adım 2: SFTP ile Bağlan
```bash
sftp mikaillekesiz@ssh-mikaillekesiz.alwaysdata.net
```

#### Adım 3: Dosyaları Upload Et
```bash
cd www
put cv_pw1.html
put cv_pw2.html
ls
exit
```

---

### Yöntem 4: SCP (Secure Copy)

#### Tek Komut ile Upload
```bash
scp cv_pw1.html cv_pw2.html mikaillekesiz@ssh-mikaillekesiz.alwaysdata.net:www/
```

---

## ✅ Deployment Sonrası Kontroller

### 1. Dosyaların Yüklendiğini Kontrol Et
```bash
# SSH ile bağlan
ssh mikaillekesiz@ssh-mikaillekesiz.alwaysdata.net

# Dosyaları listele
cd www
ls -lh cv_pw*.html

# Çıkış
exit
```

### 2. Web'de Test Et
- https://mikaillekesiz.alwaysdata.net/cv_pw1.html
- https://mikaillekesiz.alwaysdata.net/cv_pw2.html

### 3. W3C Validation Yap (URL ile)
1. https://validator.w3.org/ adresine git
2. "Validate by URI" seç
3. URL'i yapıştır:
   - https://mikaillekesiz.alwaysdata.net/cv_pw1.html
4. "Check" butonuna tıkla

### 4. Responsive Test
- Chrome DevTools → Toggle device toolbar (Ctrl+Shift+M)
- Farklı ekran boyutlarını test et

### 5. Performance Test
- Chrome DevTools → Lighthouse
- Performance, Accessibility, SEO skorlarını kontrol et

---

## 📝 Google Form İçin URL'ler

**PW N°1:**
```
https://mikaillekesiz.alwaysdata.net/cv_pw1.html
```

**PW N°2:**
```
https://mikaillekesiz.alwaysdata.net/cv_pw2.html
```

---

## 🔧 Sorun Giderme

### Dosya Görünmüyor
1. Dosya adını kontrol et (case-sensitive)
2. `www` klasöründe olduğundan emin ol
3. Dosya izinlerini kontrol et (644 olmalı)

### 403 Forbidden Hatası
```bash
# SSH ile bağlan ve izinleri düzelt
ssh mikaillekesiz@ssh-mikaillekesiz.alwaysdata.net
cd www
chmod 644 cv_pw1.html cv_pw2.html
```

### 404 Not Found Hatası
1. URL'i kontrol et (typo var mı?)
2. Dosya adını kontrol et
3. Dosyanın `www` klasöründe olduğunu kontrol et

### Değişiklikler Görünmüyor
1. Browser cache'i temizle (Ctrl+Shift+R)
2. Incognito/Private mode'da test et
3. Dosyanın güncel versiyonunu upload ettiğinizden emin olun

---

## 🎯 Deployment Checklist

- [ ] Alwaysdata hesabına giriş yaptım
- [ ] `cv_pw1.html` dosyasını upload ettim
- [ ] `cv_pw2.html` dosyasını upload ettim
- [ ] Her iki URL'i de test ettim
- [ ] W3C validation yaptım (URL ile)
- [ ] Responsive test yaptım
- [ ] URL'leri Google Form'a yazdım

---

## 📚 Ek Kaynaklar

**Alwaysdata Dokümantasyon:**
- https://help.alwaysdata.com/en/

**FTP/SFTP Tutorials:**
- https://www.youtube.com/results?search_query=filezilla+tutorial

**SSH Basics:**
- https://www.ssh.com/academy/ssh/command

---

## 🎊 Sonuç

Deployment tamamlandıktan sonra:
1. ✅ W3C validation yapın
2. ✅ Code analysis yapın
3. ✅ Google Form'u doldurun
4. ✅ Profesöre email gönderin

**Başarılar! 🚀**

