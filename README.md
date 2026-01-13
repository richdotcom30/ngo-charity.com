# 🏠 NGO Charity Website

A comprehensive, full-stack web application built with Laravel for NGO Australia, featuring secure donation processing, admin management, and modern responsive design.

## ✨ Features

### 💳 **Multi-Gateway Payment System**
- **Stripe** - Credit/Debit card payments with 3D Secure
- **NOWPayments** - Cryptocurrency donations (100+ coins)
- **Flutterwave** - Global payments with multiple methods
- **Real-time Processing** - Instant confirmations and notifications

### 👨‍💼 **Admin Dashboard**
- **Donation Management** - Complete transaction tracking with detailed modals
- **Volunteer Applications** - Application review and status management
- **Program Management** - CRUD operations for NGO programs
- **Blog Management** - Content creation and publishing
- **Analytics Dashboard** - Real-time statistics and reporting
- **Contact Inquiries** - Customer support management

### 🎨 **Modern UI/UX**
- **Responsive Design** - Mobile-first approach
- **Dark/Light Mode** - User preference support
- **Material Design** - Professional interface components
- **Accessibility** - WCAG compliant design
- **Progressive Web App** - PWA capabilities

### 🔒 **Security & Compliance**
- **PCI DSS Compliance** - Secure payment processing
- **CSRF Protection** - Laravel built-in security
- **Input Validation** - Server-side validation
- **Role-Based Access** - Admin authentication
- **Data Encryption** - Sensitive data protection

## 🚀 **Quick Start with Docker**

### Prerequisites
- Docker & Docker Compose
- Git

### Development Setup
```bash
# Clone the repository
git clone https://github.com/your-username/ngo-charity.com.git
cd ngo-charity.com

# Copy Docker environment file
cp .env.docker .env

# Start Docker containers
docker-compose up -d

# Install dependencies (if needed)
docker-compose exec app composer install
docker-compose exec app npm install

# Run database migrations
docker-compose exec app php artisan migrate --seed

# Generate application key
docker-compose exec app php artisan key:generate

# Build frontend assets
docker-compose exec app npm run build
```

### Access the Application
- **Frontend**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin/login
- **Database**: localhost:3306 (ngo_user/password)
- **Redis**: localhost:6379

### Useful Docker Commands
```bash
# View container logs
docker-compose logs -f

# Access container shell
docker-compose exec app bash

# Stop containers
docker-compose down

# Rebuild containers
docker-compose up --build
```

## 🛠️ **Manual Installation**

### Requirements
- PHP 8.1+
- MySQL 8.0+ / MariaDB 10.5+
- Composer
- Node.js 16+
- npm

### Installation Steps
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file
# Run migrations
php artisan migrate --seed

# Build assets
npm run build

# Start development server
php artisan serve
```

## 🔑 **Payment Gateway Setup**

### Stripe (Test Mode)
```env
STRIPE_KEY=pk_test_51EXAMPLE...
STRIPE_SECRET=sk_test_51EXAMPLE...
```

**Test Cards:**
- Success: `4242 4242 4242 4242`
- Decline: `4000 0000 0000 0002`

### NOWPayments (Test Mode)
```env
NOWPAYMENTS_API_KEY=your_test_api_key
NOWPAYMENTS_IPN_SECRET=your_test_secret
```

### Flutterwave (Test Mode)
```env
FLUTTERWAVE_PUBLIC_KEY=FLWPUBK_TEST-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-X
FLUTTERWAVE_SECRET_KEY=FLWSECK_TEST-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-X
```

## 👨‍💼 **Admin Access**

### Default Admin Account
- **Email**: admin@ngo-australia.test
- **Password**: password (change in production)

### Admin Features
- **Dashboard**: Analytics and quick stats
- **Donations**: Transaction management with detail modals
- **Volunteers**: Application processing
- **Programs**: NGO program management
- **Blog**: Content publishing
- **Analytics**: Reporting and insights

## 📊 **Database Structure**

### Key Tables
- `users` - Admin authentication
- `donations` - Payment transactions
- `volunteers` - Volunteer applications
- `programs` - NGO programs
- `blog_posts` - Content management
- `contact_inquiries` - Support tickets

## 🏗️ **Architecture**

### Tech Stack
- **Backend**: Laravel 10.x (PHP 8.1+)
- **Frontend**: Tailwind CSS + Alpine.js
- **Database**: MySQL 8.0
- **Cache**: Redis
- **Payments**: Stripe, NOWPayments, Flutterwave
- **Deployment**: Docker + Nginx

### Project Structure
```
├── app/                    # Laravel application code
│   ├── Http/Controllers/   # Controllers
│   ├── Models/            # Eloquent models
│   └── Mail/              # Email templates
├── resources/             # Views and assets
│   ├── views/             # Blade templates
│   └── asset/             # CSS/JS assets
├── routes/                # Route definitions
├── database/              # Migrations and seeders
├── docker/                # Docker configuration
└── public/                # Public assets
```

## 🚀 **Production Deployment**

See [DEPLOYMENT.md](DEPLOYMENT.md) for comprehensive production deployment guide including:
- Server requirements
- SSL configuration
- Performance optimization
- Backup strategies
- Monitoring setup

## 🧪 **Testing**

```bash
# Run PHP tests
php artisan test

# Run frontend tests
npm test

# Code analysis
./vendor/bin/phpstan analyse

# Check code style
./vendor/bin/pint --test
```

## 📝 **API Documentation**

RESTful API endpoints are available for:
- Donation processing
- Volunteer applications
- Program management
- Blog content
- Admin operations

## 🤝 **Contributing**

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## 📄 **License**

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 **Support**

- **Issues**: [GitHub Issues](https://github.com/your-username/ngo-charity.com/issues)
- **Documentation**: [DEPLOYMENT.md](DEPLOYMENT.md)
- **Email**: support@ngo-australia.org

---

**🇦🇺 Built with ❤️ for NGO Australia - Supporting Communities Across the Nation**
