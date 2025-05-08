# eKTP Generator

📄 **eKTP Generator** adalah library PHP untuk menghasilkan data identitas e-KTP Indonesia secara otomatis. Cocok untuk kebutuhan simulasi, testing, dan data dummy. Data yang dihasilkan mencakup NIK valid (16 digit), informasi wilayah (provinsi, kota/kabupaten, kecamatan), serta detail pengguna seperti tempat/tanggal lahir, agama, pekerjaan, status pernikahan, dan jenis kelamin.

---

## 🛠️ Installation

### ✅ Prerequisites
- PHP 8.2 or higher
- Composer

### 📦 Method 1: Install via Composer (Recommended)

```bash
composer require zmrq/ektp
```


### 🚀 How To Use ?

```php
<?php
require 'vendor/autoload.php';

use Zmrq\Ektp\eKTP;

$ktp = new eKTP();
```

```php
// Generate Province

echo "Generated Province Name: " . $ktp->province->name;
echo "Generated Province Code: " . $ktp->province->code;
```

```php
//Generate District

echo "Generated District Code: " . $ktp->district->code;
echo "Generated District Name: " . $ktp->district->name;
```

```php
// Generate City

echo "Generated City Code: " . $ktp->city->code;
echo "Generated City Name: " . $ktp->city->name;
```

```php
// User details
echo "NIK: ". $ktp->nik
echo "Born City: " . $ktp->user->bornCity;
echo "Born Date: " . $ktp->user->bornDate;
echo "Gender: " . $ktp->user->gender;
echo "Religion: " . $ktp->user->religion;
echo "Work: " . $ktp->user->work;
echo "Married Status: " . $ktp->user->marriedStatus;
```

### 📌 Format NIK
NIK disusun berdasarkan format standar nasional:
```
AA BB CC DD MM YY SSSS
```
- AA: Kode Provinsi
- BB: Kode Kota/Kabupaten
- CC: Kode Kecamatan
- DDMMYY: Tanggal lahir (jika perempuan, DD ditambah 40)
- SSSS: Nomor urut registrasi (acak)
