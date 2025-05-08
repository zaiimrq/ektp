## Installation

### Prerequisites
- PHP 7.4 or higher
- Composer (for composer installation)

### Method 1: Install via Composer (Recommended)

```bash
composer require yourname/ektp-generator
```

### Method 2: Manual Installation

1. Download the library files
2. Include the autoloader in your project:

```php
require_once 'path/to/eKTP/src/autoload.php';
```

### Method 3: Using Git Clone

```bash
git clone https://github.com/yourusername/ektp-generator.git
cd ektp-generator
composer install
```

### Verify Installation

Create a test file to verify the installation:

```php
<?php
require 'vendor/autoload.php';

use YourNamespace\eKTP;

$ktp = new eKTP();
echo "Generated NIK: " . $ktp->nik;
```

Run the test file:
```bash
php test.php
```

### Troubleshooting

If you encounter any issues during installation:

1. **Composer not found**:
   ```bash
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php
   php -r "unlink('composer-setup.php');"
   ```

2. **Autoloader issues**:
   - Run `composer dump-autoload`
   - Check your PHP version meets requirements

3. **Class not found**:
   - Verify namespace usage matches your installation
   - Check file permissions
