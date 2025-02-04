<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Online Medicine Ordering System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .about-section {
            background: linear-gradient(to right, #333333, #111111);
            color: white;
            padding: 50px 0;
            text-align: center;
            animation: slideIn 1s ease-out;
        }
        .about-section h1 {
            margin: 0;
            font-size: 3em;
            animation: fadeIn 2s;
        }
        .about-section p {
            font-size: 1.2em;
            margin: 20px 0 40px;
            animation: fadeIn 3s;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        .profile {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .profile-card {
            background: #2a2a2a;
            color: #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            margin: 20px;
            padding: 20px;
            max-width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }
        .profile-card:hover {
            transform: translateY(-10px);
        }
        .profile-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .profile-card h2 {
            margin: 10px 0 0;
            font-size: 1.5em;
        }
        .profile-card p {
            margin: 5px 0;
        }
        .contact-list {
            background: #111111;
            padding: 50px 0;
            text-align: center;
            animation: slideIn 1s ease-out;
        }
        .contact-list h2 {
            font-size: 2.5em;
            margin: 0 0 20px;
            color: #f0f0f0;
        }
        .contact-item {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }
        .contact-item i {
            font-size: 1.5em;
            margin-right: 10px;
            color: #007BFF;
        }
        .contact-item span {
            font-size: 1.2em;
            color: #f0f0f0;
        }
        @keyframes slideIn {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="about-section">
        <h1>About Us</h1>
        <p>The Online Medicine Ordering System is a user-friendly web application that allows customers to buy medicines online easily. 
            Users can browse various categories of medicines, view detailed product information, and add items to their shopping cart. 
            They can register, log in, and manage their profiles, including viewing order history and tracking orders, 
            making it convenient for users to access and order medicines anytime, anywhere.</p>
        <div class="profile">
            <div class="profile-card">
                <img src="uploads/about/nandhish.jpg" alt="Profile 1">
                <h2>Nandhish N</h2>
                <p>Email: NandhishN@gmail.com</p>
                <p>Phone: +91 8431304762</p>
            </div>
            <div class="profile-card">
                <img src="uploads/about/n.jpg" alt="Profile 2">
                <h2>Nagaraj A</h2>
                <p>Email: NagarajA@gmail.com</p>
                <p>Phone: +91 9843309486</p>
            </div>
            <div class="profile-card">
                <img src="uploads/about/melwin.jpg" alt="Profile 3">
                <h2>Melwin K P</h2>
                <p>Email: MelwinKP@gmail.com</p>
                <p>Phone: +91 8073741021</p>
            </div>
        </div>
    </section>
    <section class="contact-list">
        <h2>Contact Us</h2>
        <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <span>Email: OMOSteam@gmail.com</span>
        </div>
        <div class="contact-item">
            <i class="fas fa-phone"></i>
            <span>Phone: +91 9843309486</span>
        </div>
        <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Address: Krupanidhi Degree College, Bangalore</span>
        </div>
    </section>
</body>
</html>
