<?php
// Simple Bookstore Demo Website
$storeName = "BookHaven";
$currentYear = date("Y");

// Sample books data
$books = [
    [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'price' => 12.99,
        'description' => 'A classic American novel set in the Jazz Age.',
        'image' => 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?w=300&h=400&fit=crop'
    ],
    [
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'price' => 14.99,
        'description' => 'A gripping tale of racial injustice and childhood innocence.',
        'image' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=300&h=400&fit=crop'
    ],
    [
        'title' => '1984',
        'author' => 'George Orwell',
        'price' => 13.99,
        'description' => 'A dystopian social science fiction novel.',
        'image' => 'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=300&h=400&fit=crop'
    ],
    [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'price' => 11.99,
        'description' => 'A romantic novel of manners set in Georgian England.',
        'image' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=400&fit=crop'
    ],
    [
        'title' => 'The Catcher in the Rye',
        'author' => 'J.D. Salinger',
        'price' => 13.49,
        'description' => 'A story about teenage rebellion and alienation.',
        'image' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=300&h=400&fit=crop'
    ],
    [
        'title' => 'The Hobbit',
        'author' => 'J.R.R. Tolkien',
        'price' => 15.99,
        'description' => 'A fantasy adventure of Bilbo Baggins.',
        'image' => 'https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?w=300&h=400&fit=crop'
    ]
];

$totalBooks = count($books);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $storeName; ?> - Your Online Bookstore</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .php-info {
            background: rgba(255,255,255,0.1);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        /* Navigation */
        nav {
            background: #fff;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: #667eea;
            font-weight: 600;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #764ba2;
        }

        /* Section Styles */
        section {
            padding: 3rem 0;
        }

        section h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #667eea;
        }

        /* Books Grid */
        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .book-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }

        .book-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .book-info {
            padding: 1.5rem;
        }

        .book-info h3 {
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }

        .book-info .author {
            color: #666;
            font-style: italic;
            margin-bottom: 0.5rem;
        }

        .book-info .description {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            line-height: 1.4;
        }

        .book-info .price {
            font-size: 1.5rem;
            color: #667eea;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            transition: opacity 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* About Section */
        #about {
            background: white;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            line-height: 1.8;
        }

        .about-content p {
            margin-bottom: 1rem;
            color: #555;
        }

        .stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            color: #667eea;
            font-weight: bold;
        }

        .stat-label {
            color: #666;
            margin-top: 0.5rem;
        }

        /* Contact Section */
        #contact {
            background: #f9f9f9;
        }

        .contact-info {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .contact-item {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-item strong {
            color: #667eea;
            min-width: 100px;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        footer p {
            margin-bottom: 0.5rem;
        }

        .footer-links {
            margin-top: 1rem;
        }

        .footer-links a {
            color: #667eea;
            text-decoration: none;
            margin: 0 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            nav ul {
                flex-direction: column;
                gap: 1rem;
            }

            .stats {
                flex-direction: column;
                gap: 1.5rem;
            }

            .books-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>📚 <?php echo $storeName; ?></h1>
            <p>Your Gateway to Literary Adventures</p>
            <div class="php-info">
                ⚡ Powered by PHP <?php echo phpversion(); ?> | Server Time: <?php echo date('F j, Y, g:i a'); ?>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <div class="container">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#books">Books</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Books Section -->
    <section id="books">
        <div class="container">
            <h2>Featured Books</h2>
            <p style="text-align: center; color: #666; margin-bottom: 2rem;">
                Discover our collection of <?php echo $totalBooks; ?> amazing books
            </p>
            <div class="books-grid">
                <?php foreach ($books as $book): ?>
                    <div class="book-card">
                        <img src="<?php echo $book['image']; ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
                        <div class="book-info">
                            <h3><?php echo htmlspecialchars($book['title']); ?></h3>
                            <p class="author">by <?php echo htmlspecialchars($book['author']); ?></p>
                            <p class="description"><?php echo htmlspecialchars($book['description']); ?></p>
                            <p class="price">$<?php echo number_format($book['price'], 2); ?></p>
                            <button class="btn">Add to Cart</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About <?php echo $storeName; ?></h2>
            <div class="about-content">
                <p>
                    Welcome to <?php echo $storeName; ?>, your premier destination for discovering and purchasing 
                    the finest books from around the world. Since our founding, we've been committed to bringing 
                    readers closer to the stories they love.
                </p>
                <p>
                    Our carefully curated collection spans multiple genres, from timeless classics to contemporary 
                    bestsellers. Whether you're a casual reader or a devoted bibliophile, you'll find something 
                    special in our collection.
                </p>
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo $totalBooks; ?>+</div>
                        <div class="stat-label">Books Available</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5000+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Customer Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <strong>📧 Email:</strong>
                    <span>info@bookhaven.com</span>
                </div>
                <div class="contact-item">
                    <strong>📞 Phone:</strong>
                    <span>+1 (555) 123-4567</span>
                </div>
                <div class="contact-item">
                    <strong>📍 Address:</strong>
                    <span>123 Book Street, Reading City, RC 12345</span>
                </div>
                <div class="contact-item">
                    <strong>🕐 Hours:</strong>
                    <span>Mon-Fri: 9AM-6PM, Sat-Sun: 10AM-4PM</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo $currentYear; ?> <?php echo $storeName; ?>. All rights reserved.</p>
            <p>Built with PHP for Vercel Deployment Demo</p>
            <div class="footer-links">
                <a href="#books">Books</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </footer>
</body>
</html>
