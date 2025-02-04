<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        body {
            font-family: 'Open Sans', Arial, sans-serif;
            color: rgb(0, 0, 0);
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: DauphinPlain;
            font-size: 70px;
            line-height: 90px;
            animation: fadeIn 2s ease-in-out;
        }

        h4, h5 {
            margin: 10px 10px 5px;
            padding: 0;
            font-size: 14px;
            line-height: 18px;
            animation: fadeIn 2s ease-in-out;
        }

        h4 {
            font-style: italic;
        }

        hr {
            margin: 20px 0;
            padding: 0;
            border: none;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }

        #Content {
            position: relative;
            animation: fadeIn 2s ease-in-out;
        }

        #bannerL, #bannerR {
            position: sticky;
            top: 20px;
            width: 160px;
            height: 10px;
        }

        #bannerL {
            float: left;
            text-align: right;
            animation: slideIn 2s ease-in-out;
        }

        #bannerR {
            float: right;
            text-align: left;
            animation: slideInRight 2s ease-in-out;
        }

        .boxed {
            margin: 10px 28.7969px;
            padding: 0;
            clear: both;
            animation: fadeIn 2s ease-in-out;
        }

        #Medicine {
            text-align: justify;
        }

        #Medicine p {
            margin-right: 0;
            margin-bottom: 15px;
            margin-left: 0;
            padding: 0;
            animation: fadeIn 2s ease-in-out;
        }
    </style>
</head>
<body>
    <h1>About Us</h1>
    <h4>"Online Medicine Ordering System..."</h4>
    <h5>"here is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</h5>
    <hr>
    <div id="Content">
        <div id="bannerL"></div>
        <div id="bannerR"></div>
        <div class="boxed">
            <div id="Medicine">
                <p>A digital platform that allows users to browse, purchase, and manage prescription and over-the-counter medications via the internet. This system streamlines the process of acquiring medications by integrating various functionalities such as user registration, product catalog browsing, prescription verification, online payment, and order tracking. It ensures convenience, security, and efficiency in the medicine procurement process, often including features like customer support and an admin panel for managing orders, inventory, and user data...</p>
            </div>
        </div>
    </div>
</body>
</html>
