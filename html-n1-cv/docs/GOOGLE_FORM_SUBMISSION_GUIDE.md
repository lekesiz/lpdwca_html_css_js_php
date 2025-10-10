# Google Form Submission Guide - HTML N1 CV Homework

## 📋 Genel Bakış

HTML N1 CV ödevini tamamlamak için 2 Google Form doldurmanız gerekiyor:
- **PW N°1 Form:** https://forms.gle/dhDP9hfXxpmVxUBNA
- **PW N°2 Form:** https://forms.gle/XR6vCuMzauhK2kkL6

Her form için aşağıdaki adımları takip edin.

---

## 🚀 Adım Adım Rehber

### Adım 1: W3C Validation Yap

#### 1.1. W3C Nu Html Checker'a Git
**URL:** https://validator.w3.org/nu/#textarea

#### 1.2. HTML Kodunu Kopyala
- PW N°1 için: `cv_pw1.html` dosyasını aç
- Tüm kodu kopyala (Ctrl+A, Ctrl+C)

#### 1.3. Validation Yap
1. "Check by" dropdown'dan **"text input"** seç
2. HTML kodunu textarea'ya yapıştır
3. **"Check"** butonuna tıkla
4. Sonuçları bekle

#### 1.4. Sonucu Kaydet
**Beklenen Sonuç:**
```
Document checking completed. No errors or warnings to show.
```

**Puanlama:**
- ✅ **3pts:** No Errors, No Warnings (Hedef!)
- ⚠️ **2pts:** One or more warnings, but no errors
- ❌ **1pt:** A single Error
- ❌ **0pt:** Several Errors

**Not:** Her iki CV de W3C standartlarına uygun olarak oluşturuldu, 3pts almalısınız.

---

### Adım 2: Code Analysis Yap

#### 2.1. Code Analysis Tool'a Git
**URL:** https://christoffel.alwaysdata.net/mathInfo/codeHTML.php

#### 2.2. HTML Kodunu Kopyala
- Aynı `cv_pw1.html` veya `cv_pw2.html` dosyasından kodu kopyala

#### 2.3. Analiz Yap
1. HTML kodunu büyük textarea'ya yapıştır
2. **"Envoyer"** butonuna tıkla
3. Sonuçları bekle

#### 2.4. Sonuçları Kaydet
**İki önemli bilgi alacaksınız:**
1. **HTML code analysis score:** (örn: 92/100)
2. **Analysis key:** (örn: ABC123XYZ456)

**Beklenen Skorlar:**
- PW N°1: 85-95/100
- PW N°2: 90-100/100 (daha yüksek çünkü daha semantic!)

**Not:** Bu bilgileri not edin veya ekran görüntüsü alın!

---

### Adım 3: Alwaysdata'ya Deploy Et

#### 3.1. Deployment Yöntemi Seç
[ALWAYSDATA_DEPLOYMENT_GUIDE.md](./ALWAYSDATA_DEPLOYMENT_GUIDE.md) dosyasına bakın.

**En Kolay Yöntem:** Web Interface
1. https://admin.alwaysdata.com/ adresine git
2. Giriş yap
3. File Manager'ı aç
4. `www` klasörüne git
5. `cv_pw1.html` ve `cv_pw2.html` dosyalarını upload et

#### 3.2. Test Et
- **PW N°1:** https://mikaillekesiz.alwaysdata.net/cv_pw1.html
- **PW N°2:** https://mikaillekesiz.alwaysdata.net/cv_pw2.html

**Not:** URL'leri not edin, Google Form'da gerekecek!

---

### Adım 4: Google Form'u Doldur

#### 4.1. PW N°1 Form
**URL:** https://forms.gle/dhDP9hfXxpmVxUBNA

**Gerekli Bilgiler:**

| Alan | Değer | Örnek |
|------|-------|-------|
| **Adresse e-mail** | Öğrenci email'i | mikail.lekesiz@etu.unistra.fr |
| **Full Name** | Tam adınız | Mikail Lekesiz |
| **W3C Validation** | Sonuç seçimi | ✅ 3pts: No Errors, No Warnings |
| **HTML code analysis score** | Skorunuz | 92 |
| **Analysis key** | Key kodunuz | ABC123XYZ456 |
| **Section elements kullanıldı mı?** | Seçim | ❌ No |
| **Web page URL** | Alwaysdata URL'i | https://mikaillekesiz.alwaysdata.net/cv_pw1.html |

**Önemli:**
- "Section elements kullanıldı mı?" sorusuna **NO** deyin
- PW N°1'de header, footer, section, article, nav, aside, main KULLANILMADI

#### 4.2. PW N°2 Form
**URL:** https://forms.gle/XR6vCuMzauhK2kkL6

**Gerekli Bilgiler:**

| Alan | Değer | Örnek |
|------|-------|-------|
| **Adresse e-mail** | Öğrenci email'i | mikail.lekesiz@etu.unistra.fr |
| **Full Name** | Tam adınız | Mikail Lekesiz |
| **W3C Validation** | Sonuç seçimi | ✅ 3pts: No Errors, No Warnings |
| **HTML code analysis score** | Skorunuz | 95 |
| **Analysis key** | Key kodunuz | XYZ789DEF012 |
| **Section elements kullanıldı mı?** | Seçim | ❌ No |
| **Web page URL** | Alwaysdata URL'i | https://mikaillekesiz.alwaysdata.net/cv_pw2.html |

**Önemli:**
- PW N°2 için **YENİ** W3C validation ve code analysis yapın
- Yeni analysis key alacaksınız
- Skor muhtemelen daha yüksek olacak (daha semantic!)

---

## ✅ Checklist

### PW N°1
- [ ] W3C validation yaptım (3pts aldım)
- [ ] Code analysis yaptım (score ve key aldım)
- [ ] Alwaysdata'ya deploy ettim
- [ ] URL'i test ettim (çalışıyor)
- [ ] Google Form'u doldurdum
- [ ] "Envoyer" butonuna tıkladım

### PW N°2
- [ ] W3C validation yaptım (3pts aldım)
- [ ] Code analysis yaptım (YENİ score ve key aldım)
- [ ] Alwaysdata'ya deploy ettim
- [ ] URL'i test ettim (çalışıyor)
- [ ] Google Form'u doldurdum
- [ ] "Envoyer" butonuna tıkladım

---

## 🔧 Sorun Giderme

### W3C Validation Hatası Alırsam?
1. Hata mesajını okuyun
2. Satır numarasını bulun
3. Hatayı düzeltin
4. Tekrar validate edin

**Not:** Oluşturulan CV'ler zaten W3C uyumlu, hata almamalısınız.

### Code Analysis Düşük Skor Verirse?
1. Semantic HTML5 elementleri kullanın
2. Hiyerarşiyi kontrol edin (h1 → h2 → h3)
3. Meta tags ekleyin
4. Proper nesting yapın

**Not:** PW N°2'de skor daha yüksek olmalı çünkü daha semantic!

### Alwaysdata'ya Upload Edemiyorsam?
1. Giriş bilgilerinizi kontrol edin
2. Farklı bir yöntem deneyin (FTP, SFTP, SCP)
3. [ALWAYSDATA_DEPLOYMENT_GUIDE.md](./ALWAYSDATA_DEPLOYMENT_GUIDE.md) dosyasına bakın

### Google Form Gönderemiyorsam?
1. Tüm zorunlu alanları doldurduğunuzdan emin olun
2. Email adresinizin doğru olduğunu kontrol edin
3. Farklı bir browser deneyin
4. JavaScript'in aktif olduğundan emin olun

---

## 📧 Email Confirmation

Form gönderildikten sonra:
1. ✅ Email ile onay alacaksınız
2. ✅ Yanıtlarınızın bir kopyası gönderilecek
3. ✅ Profesör sonuçları görecek

**Önemli:** Email gelmezse spam klasörünü kontrol edin!

---

## 🎯 Final Checklist

Her iki form için:
- [ ] W3C validation: 3pts
- [ ] Code analysis: 85+ (PW N°1), 90+ (PW N°2)
- [ ] Analysis keys kaydedildi
- [ ] Alwaysdata deployment başarılı
- [ ] URL'ler çalışıyor
- [ ] Google Forms gönderildi
- [ ] Email confirmation alındı

---

## 🎊 Tebrikler!

Tüm adımları tamamladıysanız, HTML N1 CV ödevini başarıyla bitirdiniz! 🚀

**Başarılar dilerim!**

---

**© 2025 - HTML N1 CV Homework - Mikail Lekesiz - LP DWCA**

