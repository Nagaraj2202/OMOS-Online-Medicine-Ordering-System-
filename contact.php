<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .carousel-item > img {
            object-fit: cover !important;
            filter: brightness(70%);
        }
        #carouselExampleControls .carousel-inner {
            height: 35em !important;
        }
        .carousel-item {
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
        }
        .carousel-item-next, .carousel-item-prev, .carousel-item.active {
            display: block;
            opacity: 1;
        }
        .carousel-item {
            opacity: 0;
        }
        .carousel-item.active {
            opacity: 1;
        }
        .card {
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border: none;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .content {
            animation: zoomIn 1s ease-in-out;
        }
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .highlight {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            height: 3px;
            width: 5em;
            margin: 0 auto;
        }
        .text-muted {
            color: #6c757d !important;
        }
        dt {
            color: #333;
        }
        dd {
            color: #555;
        }
        h3 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div id="carouselExampleControls" class="carousel slide bg-dark" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                        $upload_path = "uploads/contact img";
                        if (is_dir(base_app.$upload_path)): 
                        $file= scandir(base_app.$upload_path);
                        $_i = 0;
                            foreach ($file as $img):
                                if (in_array($img, array('.', '..')))
                                    continue;
                        $_i++;
                    ?>
                    <div class="carousel-item h-100 <?php echo $_i == 1 ? 'active' : '' ?>">
                        <img src="<?php echo validate_image($upload_path.'/'.$img) ?>" class="d-block w-100 h-100" alt="<?php echo $img ?>">
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h3 class="text-center"><b>Contact Us</b></h3>
                        <center><div class="highlight"></div></center>
                        <dl>
                            <dt class="text-muted">Email</dt>
                            <dd class="pl-3"><?= $_settings->info('email') ?></dd>
                            
                            <dt class="text-muted">Mobile #</dt>
                            <dd class="pl-3"><?= $_settings->info('mobile') ?></dd>
                            <dt class="text-muted">Address</dt>
                            <dd class="pl-3"><?= $_settings->info('address') ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $('.carousel').carousel();
        })
    </script>
</body>
</html>
