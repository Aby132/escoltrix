# Escoltrix Lightning Protection Solutions

A professional website for Escoltrix Lightning Protection Solutions, built with PHP and modern web technologies.

## Features

- **Responsive Design**: Mobile-first approach with modern UI/UX
- **Product Catalog**: Comprehensive lightning protection products
- **Service Information**: Detailed service offerings and expertise
- **Quote System**: Advanced quote request form with validation
- **Contact Forms**: Multiple contact methods and forms
- **SEO Optimized**: Search engine friendly structure

## Technology Stack

- **Backend**: PHP 8.1+
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: Custom CSS with modern design patterns
- **Animations**: AOS (Animate On Scroll) library
- **Icons**: Font Awesome
- **Hosting**: XAMPP/Apache (local development)

## Project Structure

```
├── index.php              # Homepage
├── about.php              # About page
├── products.php           # Products catalog
├── product-detail.php     # Individual product pages
├── services.php           # Services page
├── contact.php            # Contact page
├── quote.php              # Quote request page
├── contact_handler.php    # Contact form handler
├── includes/
│   ├── header.php         # Site header
│   └── footer.php         # Site footer
├── Images/                # Image assets
└── package.json          # Project metadata
```

## Deployment Options

### Option 1: Shared Hosting (Recommended)

For the most reliable PHP hosting, consider traditional shared hosting providers:

- **cPanel Hosting**: Most shared hosting providers
- **DigitalOcean**: Droplet with LAMP stack
- **AWS EC2**: Elastic Compute Cloud with PHP
- **Google Cloud**: Compute Engine with PHP

### Option 2: VPS/Dedicated Server

For maximum control and performance:

1. **Set up LAMP/LEMP stack**
2. **Upload files via FTP/SFTP**
3. **Configure Apache/Nginx**
4. **Set up SSL certificate**

### Environment Variables

If you need environment variables (for email configuration, etc.), you can:

1. **Create a .env file** in your project root
2. **Use PHP's $_ENV superglobal** or getenv() function
3. **Configure in your hosting provider's control panel**

### Custom Domain

1. **Purchase a domain** from a domain registrar
2. **Point DNS** to your hosting provider's nameservers
3. **Configure SSL certificate** through your hosting provider

## Local Development

### Using PHP Built-in Server

```bash
# Start development server
php -S localhost:3000

# Or using npm script
npm run dev
```

### Using XAMPP (Current Setup)

1. Place files in `xampp/htdocs/cult/`
2. Start XAMPP services (Apache and MySQL)
3. Access at `http://localhost/cult/`

## Configuration

### Email Settings

Update email configuration in `contact_handler.php`:

```php
// Update these settings for your email provider
$to = "your-email@domain.com";
$smtp_host = "your-smtp-host";
$smtp_port = 587;
$smtp_username = "your-username";
$smtp_password = "your-password";
```

### Form Handlers

- **Contact Form**: `contact_handler.php`
- **Quote Form**: `quote_handler.php` (create if needed)

## Features Overview

### Pages

- **Homepage** (`index.php`): Hero section, products showcase, news, contact
- **About** (`about.php`): Company information, mission, vision, values
- **Products** (`products.php`): Product catalog with filtering
- **Product Detail** (`product-detail.php`): Individual product information
- **Services** (`services.php`): Service offerings and expertise
- **Contact** (`contact.php`): Contact information and form
- **Quote** (`quote.php`): Advanced quote request system

### Key Features

- **Responsive Design**: Works on all devices
- **Modern UI**: Clean, professional design
- **Fast Loading**: Optimized images and code
- **SEO Friendly**: Proper meta tags and structure
- **Form Validation**: Client and server-side validation
- **Animations**: Smooth scroll animations

## Support

For technical support or questions about deployment:

- **Email**: info@escoltrix.com
- **Phone**: +91 98187 47608

## License

This project is proprietary software owned by Escoltrix Lightning Protection Solutions.

---

**Note**: This website is optimized for traditional PHP hosting environments like XAMPP, shared hosting, or VPS with LAMP/LEMP stack.