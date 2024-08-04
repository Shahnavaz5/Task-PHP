
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <!--<link rel="stylesheet" href="style.css">-->
    <style type="text/css">
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.8em;
    color: white;
    text-decoration: none;
    margin: 0;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1em;
}

nav ul li a:hover {
    text-decoration: underline;
}

.search-bar {
    display: flex;
    align-items: center;
}

.search-bar input {
    padding: 5px;
    font-size: 1em;
    border: none;
    border-radius: 5px 0 0 5px;
}

.search-bar button {
    padding: 5px 10px;
    border: none;
    background-color: #555;
    color: white;
    cursor: pointer;
    border-radius: 0 5px 5px 0;
}

.search-bar button:hover {
    background-color: #777;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: flex-start;
    }
    
    nav ul {
        flex-direction: column;
        width: 100%;
    }
    
    nav ul li {
        margin: 10px 0;
    }
    
    .search-bar {
        width: 100%;
        margin-top: 10px;
    }
    
    .search-bar input {
        flex: 1;
    }
}
</style>
</head>
<body>
    <header>
        <div class="container">
            <a href="#" class="logo">MyLogo</a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Service.php">Services</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </div>
        </div>
    </header>
</body>
</html>
