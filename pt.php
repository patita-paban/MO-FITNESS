<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Training Page</title>
    <link rel="shortcut icon" type="icon" href="img/LOGO1.png">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>

<?php include 'menu.php'; ?>
  


<!-- Banner Section -->
<section class="banner-section text-center py-5">
    <div class="container">
        <h1>Welcome to Personal Training</h1>
        <p>Get fit and stay healthy with our personalized training programs.</p>
        <a href="members.php" class="btn btn-primary">Get Started</a>
    </div>
</section>

<!-- About Section -->
<section class="about-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>DISCOVER PERSONALIZED FITNESS AT MO-FITNESS</h1>
                <p>Your fitness journey is unique. That’s why at Waves Gym, our internationally certified trainers craft a personal training program tailored just for you. Accelerate your fitness and weight loss goals with our expert blend of cardio, strength training, and the latest in fitness technology.</p>
                <h1><b>Why Choose Waves Gym Personal Trainers?</b><h1>
                
            </div>
            <div class="col-lg-6">
                <img src="img/pt1.jpg" class="img-fluid" alt="About Image">
            </div>
            <p>Your fitness journey is unique. That’s why at MO-FITNESS Gym, our internationally certified trainers craft a personal training program tailored just for you. Accelerate your fitness and weight loss goals with our expert blend of cardio, strength training, and the latest in fitness technology.</p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="img/y3.jpeg" alt="Card image">
                        <h5 class="card-title">Personalized Workouts</h5>
                        <p class="card-text">Tailored workout plans designed specifically for your fitness goals and needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="img/y3.jpeg" alt="Card image">
                        <h5 class="card-title">Nutrition Guidance</h5>
                        <p class="card-text">Expert advice on nutrition and meal planning to complement your fitness regimen.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="img/y3.jpeg" alt="Card image">
                        <h5 class="card-title">One-on-One Coaching</h5>
                        <p class="card-text">Personalized coaching sessions with our certified trainers to maximize your results.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>

<!-- Bootstrap JS (jQuery and Popper.js are required) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    