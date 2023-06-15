<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer-container {
            background: linear-gradient(to right, #3E7CB1, #65C1E4);
            transition: background 0.3 ease;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ffffff;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
            margin-right: 10px;
        }

        .footer-info {
            font-size: 12px;
        }
    </style>
</head>

<body>

</body>

</html>

<footer>
    <div class="footer-container">
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </div>
        <div class="footer-info">
            <p>&copy; <?php echo date("Y"); ?> Your Website Name. All rights reserved.</p>
        </div>
    </div>
</footer>