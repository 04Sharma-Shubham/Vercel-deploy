# 📚 BookHaven - Simple PHP Bookstore Demo

A simple, elegant one-page bookstore website built with PHP, designed for easy deployment on Vercel.

## 🌟 Features

- **Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Dynamic Content**: PHP-powered book catalog with dynamic data
- **Modern UI**: Clean and professional design with gradient colors
- **Easy Navigation**: Smooth scrolling between sections
- **PHP Functionality**: Demonstrates PHP features like date functions, loops, and data handling

## 📋 What's Included

- **Featured Books Section**: Display of 6 classic books with images, descriptions, and prices
- **About Section**: Information about the bookstore with statistics
- **Contact Section**: Contact information and business hours
- **Responsive Navigation**: Sticky navigation bar for easy access
- **PHP Info Display**: Shows PHP version and server time

## 🚀 Deployment on Vercel

### Prerequisites
- A [Vercel account](https://vercel.com/signup)
- [Vercel CLI](https://vercel.com/cli) (optional, for command-line deployment)

### Method 1: Deploy via Vercel Dashboard (Recommended)

1. **Push to GitHub**:
   ```bash
   git init
   git add .
   git commit -m "Initial commit: BookHaven PHP website"
   git branch -M main
   git remote add origin <your-github-repo-url>
   git push -u origin main
   ```

2. **Import to Vercel**:
   - Go to [Vercel Dashboard](https://vercel.com/dashboard)
   - Click "Add New Project"
   - Import your GitHub repository
   - Vercel will automatically detect the PHP configuration
   - Click "Deploy"

3. **Done!** Your site will be live at `https://your-project-name.vercel.app`

### Method 2: Deploy via Vercel CLI

1. **Install Vercel CLI** (if not already installed):
   ```bash
   npm install -g vercel
   ```

2. **Login to Vercel**:
   ```bash
   vercel login
   ```

3. **Deploy**:
   ```bash
   vercel
   ```

4. **Follow the prompts** and your site will be deployed!

### Method 3: Deploy via Git Integration

1. Connect your repository to Vercel
2. Every push to the main branch will automatically deploy

## 🧪 Local Testing

### Using PHP Built-in Server

1. **Navigate to the project directory**:
   ```bash
   cd Portfolio-php
   ```

2. **Start PHP server**:
   ```bash
   php -S localhost:8000
   ```

3. **Open in browser**:
   ```
   http://localhost:8000
   ```

### Using XAMPP/WAMP/MAMP

1. Copy the project folder to your web server directory (htdocs/www)
2. Access via `http://localhost/Portfolio-php`

## 📁 Project Structure

```
Portfolio-php/
├── index.php          # Main bookstore page
├── vercel.json        # Vercel configuration
└── README.md          # This file
```

## 🛠️ Technologies Used

- **PHP**: Server-side scripting
- **HTML5**: Structure and content
- **CSS3**: Styling and responsive design
- **Vercel**: Hosting and deployment platform

## 🎨 Customization

### Adding More Books

Edit the `$books` array in `index.php`:

```php
$books = [
    [
        'title' => 'Your Book Title',
        'author' => 'Author Name',
        'price' => 19.99,
        'description' => 'Book description here.',
        'image' => 'https://your-image-url.com/image.jpg'
    ],
    // Add more books...
];
```

### Changing Colors

Modify the CSS gradient colors in the `<style>` section:

```css
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
```

### Updating Store Name

Change the `$storeName` variable at the top of `index.php`:

```php
$storeName = "Your Store Name";
```

## 📝 Notes

- The website uses Unsplash images for book covers (free to use)
- PHP version is displayed in the header
- All book data is stored in a PHP array (can be easily connected to a database)
- The design is fully responsive and mobile-friendly

## 🔧 Troubleshooting

### Issue: Site not loading on Vercel
- **Solution**: Make sure `vercel.json` is in the root directory
- Check that PHP runtime is specified correctly

### Issue: Images not loading
- **Solution**: Verify image URLs are accessible
- Check internet connection

### Issue: Styling looks broken
- **Solution**: Clear browser cache
- Check if CSS is properly embedded in the HTML

## 📄 License

This is a demo project for testing purposes. Feel free to use and modify as needed.

## 🤝 Contributing

This is a simple demo project, but suggestions and improvements are welcome!

## 📧 Contact

For questions or support, refer to the contact section on the website.

---

**Built with ❤️ using PHP | Ready for Vercel Deployment**
