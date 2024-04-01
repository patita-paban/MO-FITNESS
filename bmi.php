<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="icon" href="img/LOGO1.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  <style>
body  {
  background-image: url("img/bmi.jpg" );
  background-color: #cccccc;
}
</style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <?php include 'menu.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-end">
    <div>
      <iframe width="570" height="338" src="https://www.youtube.com/embed/z_3S2_41_FE?si=1MgGXZKirI8nqzQQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>BMI Calculator</h4>
        </div>
        <div class="card-body">
          <form id="bmiForm">
            <div class="form-group">
              <label for="height">Height (in cm)</label>
              <input type="number" class="form-control" id="height" name="height" required>
            </div>
            <div class="form-group">
              <label for="weight">Weight (in kg)</label>
              <input type="number" class="form-control" id="weight" name="weight" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Calculate BMI</button>
          </form>
          <div id="result" class="mt-3"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Function to calculate BMI
  function calculateBMI() {
    var height = parseFloat(document.getElementById('height').value) / 100; // Convert height to meters
    var weight = parseFloat(document.getElementById('weight').value);
    var bmi = weight / (height * height);
    return bmi.toFixed(2); // Return BMI rounded to 2 decimal places
  }

  // Event listener for form submission
  document.getElementById('bmiForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission behavior
    var bmi = calculateBMI();
    document.getElementById('result').innerHTML = '<strong>Your BMI:</strong> ' + bmi;
  });
</script>
</body>
</html>
