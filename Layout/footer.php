
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Footer</title>
   <!-- <link rel="stylesheet" href="style.css">-->
    <style type="text/css">
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

footer {
    background-color: #333;
    color: white;
    padding: 20px 0;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-container > div {
    flex: 1;
    margin: 10px;
}

.footer-about h2, .footer-links h2, .footer-contact h2, .footer-social h2 {
    margin-top: 0;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links ul li {
    margin-bottom: 10px;
}

.footer-links ul li a {
    color: white;
    text-decoration: none;
}

.footer-links ul li a:hover {
    text-decoration: underline;
}

.footer-social {
    display: flex;
    gap: 10px;
}

.social-icon {
    color: white;
    text-decoration: none;
    padding: 10px;
    border: 1px solid white;
    border-radius: 5px;
}

.social-icon:hover {
    background-color: #555;
}

.footer-bottom {
    text-align: center;
    padding: 10px 0;
    background-color: #222;
}

.footer-bottom p {
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
    }

    .footer-container > div {
        margin: 10px 0;
    }
}
</style>
</head>
<body>
    <!-- Main content goes here -->

    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna velit.</p>
            </div>
            <div class="footer-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Service.php">Services</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h2>Contact Us</h2>
                <p>Email: info@mywebsite.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Street Name, City, Country</p>
            </div>
            <div class="footer-social">
                <h2>Follow Us</h2>
                <a href="#" class="social-icon">Facebook</a>
                <a href="#" class="social-icon">Twitter</a>
                <a href="#" class="social-icon">Instagram</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 MyWebsite. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>