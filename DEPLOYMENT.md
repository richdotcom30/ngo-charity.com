# NGO Charity Website - Production Deployment Guide

## 🚀 Production Deployment Checklist

### Prerequisites
- ✅ **Domain Name**: Purchase and configure domain (e.g., ngo-australia.org)
- ✅ **Web Hosting**: Choose reliable hosting provider (Recommended: DigitalOcean, AWS, or Vultr)
- ✅ **SSL Certificate**: Free SSL from Let's Encrypt or hosting provider
- ✅ **Database**: MySQL 8.0+ or MariaDB 10.5+
- ✅ **PHP**: Version 8.1 or higher
- ✅ **Composer**: PHP dependency manager
- ✅ **Node.js**: Version 16+ for frontend assets

### 1. Environment Setup

#### Clone Repository
```bash
cd /var/www
git clone https://github.com/your-username/ngo-charity.com.git
cd ngo-charity.com
```

#### Install Dependencies
```bash
# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install Node.js dependencies
npm install --production

# Build frontend assets
npm run build
```

#### Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### Configure Environment Variables
Edit `.env` file with production values:

```env
APP_NAME="NGO Australia"
APP_ENV=production
APP_KEY=base64:your-generated-key
APP_DEBUG=false
APP_URL=https://your-domain.com

# Database
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=ngo_charity_prod
DB_USERNAME=your_db_user
DB_PASSWORD=your_secure_password

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=donations@your-domain.com
MAIL_FROM_NAME="NGO Australia"

# Stripe Payment (Production Keys)
STRIPE_KEY=pk_live_XXXXXXXXXXXXXXXXXXXX
STRIPE_SECRET=sk_live_XXXXXXXXXXXXXXXXXXXX

# NOWPayments Crypto (Production Keys)
NOWPAYMENTS_API_KEY=your_production_api_key
NOWPAYMENTS_IPN_SECRET=your_production_ipn_secret

# Flutterwave (Production Keys)
FLUTTERWAVE_PUBLIC_KEY=FLWPUBK-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-X
FLUTTERWAVE_SECRET_KEY=FLWSECK-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-X
FLUTTERWAVE_ENCRYPTION_KEY=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

# Admin Email
ADMIN_EMAIL=admin@your-domain.com
```

### 2. Database Setup

#### Create Production Database
```sql
CREATE DATABASE ngo_charity_prod CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'ngo_user'@'localhost' IDENTIFIED BY 'secure_password_here';
GRANT ALL PRIVILEGES ON ngo_charity_prod.* TO 'ngo_user'@'localhost';
FLUSH PRIVILEGES;
```

#### Run Migrations
```bash
php artisan migrate --seed
```

#### Create Admin User
```bash
php artisan tinker

# In Tinker console:
User::create([
    'name' => 'NGO Admin',
    'email' => 'admin@your-domain.com',
    'password' => Hash::make('secure_admin_password'),
    'email_verified_at' => now(),
]);
```

### 3. Web Server Configuration

#### Apache (with .htaccess already included)
```apache
<VirtualHost *:80>
    ServerName your-domain.com
    ServerAlias www.your-domain.com
    DocumentRoot /var/www/ngo-charity.com/public

    <Directory /var/www/ngo-charity.com/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/ngo-error.log
    CustomLog ${APACHE_LOG_DIR}/ngo-access.log combined
</VirtualHost>
```

#### Nginx Configuration
```nginx
server {
    listen 80;
    server_name your-domain.com www.your-domain.com;
    root /var/www/ngo-charity.com/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

#### Enable SSL with Let's Encrypt
```bash
# Install Certbot
sudo apt update
sudo apt install certbot python3-certbot-apache

# Get SSL certificate
sudo certbot --apache -d your-domain.com -d www.your-domain.com

# Set up auto-renewal
sudo crontab -e
# Add: 0 12 * * * /usr/bin/certbot renew --quiet
```

### 4. File Permissions & Security

#### Set Correct Permissions
```bash
# Set ownership
sudo chown -R www-data:www-data /var/www/ngo-charity.com

# Set directory permissions
find /var/www/ngo-charity.com -type f -exec chmod 644 {} \;
find /var/www/ngo-charity.com -type d -exec chmod 755 {} \;

# Storage permissions
chmod -R 775 /var/www/ngo-charity.com/storage
chmod -R 775 /var/www/ngo-charity.com/bootstrap/cache
```

#### Security Hardening
```bash
# Disable directory listing
echo "Options -Indexes" > /var/www/ngo-charity.com/public/.htaccess

# Secure .env file
chmod 600 /var/www/ngo-charity.com/.env
```

### 5. Performance Optimization

#### Laravel Optimization
```bash
# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize
```

#### Database Optimization
```bash
# Add database indexes for better performance
php artisan tinker

# In Tinker:
Schema::table('donations', function (Blueprint $table) {
    $table->index(['created_at', 'payment_method']);
    $table->index('email');
});

Schema::table('volunteers', function (Blueprint $table) {
    $table->index('status');
    $table->index(['created_at', 'status']);
});
```

### 6. Monitoring & Maintenance

#### Set Up Log Rotation
```bash
# Create logrotate configuration
sudo nano /etc/logrotate.d/laravel-ngo

# Add:
/var/www/ngo-charity.com/storage/logs/*.log {
    daily
    missingok
    rotate 52
    compress
    notifempty
    create 644 www-data www-data
}
```

#### Backup Strategy
```bash
# Create backup script
sudo nano /usr/local/bin/ngo-backup.sh

# Add:
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_DIR="/var/backups/ngo-charity"

mkdir -p $BACKUP_DIR

# Database backup
mysqldump -u ngo_user -p'your_password' ngo_charity_prod > $BACKUP_DIR/db_$DATE.sql

# Files backup
tar -czf $BACKUP_DIR/files_$DATE.tar.gz /var/www/ngo-charity.com/storage/app/public

# Keep only last 30 days
find $BACKUP_DIR -name "*.sql" -mtime +30 -delete
find $BACKUP_DIR -name "*.tar.gz" -mtime +30 -delete

echo "Backup completed: $DATE"
```

#### Set Up Cron Jobs
```bash
# Edit crontab
crontab -e

# Add these lines:
# Run Laravel scheduler every minute
* * * * * cd /var/www/ngo-charity.com && php artisan schedule:run >> /dev/null 2>&1

# Daily backup at 2 AM
0 2 * * * /usr/local/bin/ngo-backup.sh

# Clear expired password reset tokens daily
0 3 * * * cd /var/www/ngo-charity.com && php artisan auth:clear-resets >> /dev/null 2>&1
```

### 7. Testing Checklist

#### Pre-Launch Testing
- [ ] **Domain DNS**: Verify domain points to server IP
- [ ] **SSL Certificate**: Confirm HTTPS works properly
- [ ] **Database Connection**: Test database connectivity
- [ ] **Email Configuration**: Send test emails
- [ ] **Payment Gateways**: Test with production keys (small amounts)
- [ ] **File Uploads**: Test image uploads and permissions
- [ ] **Admin Panel**: Verify all admin functions work
- [ ] **Responsive Design**: Test on mobile devices
- [ ] **Form Submissions**: Test contact forms and donations
- [ ] **Performance**: Check page load times

#### Payment Testing (Production)
```bash
# Test small payments with real cards
# Stripe: Use test cards in production mode (carefully)
# NOWPayments: Test with small crypto amounts
# Flutterwave: Test with various payment methods
```

### 8. Go-Live Process

#### Final Steps
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Set maintenance mode off
php artisan down  # If currently in maintenance
php artisan up

# Verify application health
curl -I https://your-domain.com
```

#### Post-Launch Monitoring
1. **Monitor Error Logs**: Check Laravel logs regularly
2. **Payment Verification**: Monitor payment gateway dashboards
3. **Performance Monitoring**: Track response times
4. **User Feedback**: Monitor contact form submissions
5. **Security Scans**: Regular security audits

### 9. Emergency Contacts

#### Support Information
- **Hosting Provider**: [Provider contact details]
- **Domain Registrar**: [Registrar contact details]
- **Payment Gateways**: Support contacts for Stripe, NOWPayments, Flutterwave
- **Development Team**: [Your contact information]

### 10. Rollback Plan

#### If Issues Occur
```bash
# Quick rollback to previous version
cd /var/www/ngo-charity.com
git checkout previous-commit-hash
composer install --no-dev
npm run build
php artisan migrate:rollback --step=1  # If needed
```

---

## 🔧 Quick Troubleshooting

### Common Issues & Solutions

#### 500 Internal Server Error
```bash
# Check Laravel logs
tail -f /var/www/ngo-charity.com/storage/logs/laravel.log

# Check permissions
ls -la /var/www/ngo-charity.com/storage/
```

#### Database Connection Issues
```bash
# Test database connection
php artisan tinker
# DB::connection()->getPdo();
```

#### Permission Issues
```bash
# Fix storage permissions
chmod -R 775 /var/www/ngo-charity.com/storage
chown -R www-data:www-data /var/www/ngo-charity.com
```

#### SSL Issues
```bash
# Renew SSL certificate
sudo certbot renew

# Check SSL configuration
openssl s_client -connect your-domain.com:443
```

---

## 📞 Support & Maintenance

### Regular Maintenance Tasks
- **Weekly**: Check error logs and payment statuses
- **Monthly**: Update dependencies and security patches
- **Quarterly**: Performance audits and database optimization
- **Annually**: Security assessment and infrastructure review

### Contact Information
- **Technical Support**: [Your email/phone]
- **Emergency Contact**: [Emergency contact details]
- **Documentation**: This deployment guide

---

**🎉 Your NGO Charity website is now ready for production! Follow this guide carefully for a successful deployment.**
