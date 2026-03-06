<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
.col-md-8 {
    background-image: url('https://t3.ftcdn.net/jpg/02/36/66/30/360_F_236663023_rWzCTBGv3OI4TeUsb6MqiZzFgnROq5YX.jpg'); 
    color: white;              
    border-radius: 10px;      
    border: 2px solid black; 
  }
</style>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto shadow p-4" >

            <h1 class="text-center">Profile Form Page</h1>

            <form action="profile.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" id="age" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <input type="text" name="course" id="course" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email_address" class="form-label">Email Address</label>
                    <input type="email" name="email_address" id="email_address" class="form-control" required placeholder="@gmail.com">
                </div>

                <h5>Gender</h5>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" id="male" value="Male" required>
                    <label for="male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" id="female" value="Female">
                    <label for="female" class="form-check-label">Female</label>
                </div>

                <h5 class="mt-3">Select Your Hobbies</h5>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="hobbies[]" id="reading" value="Reading">
                    <label for="reading" class="form-check-label">Reading</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="hobbies[]" id="music" value="Music">
                    <label for="music" class="form-check-label">Music</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="hobbies[]" id="cooking" value="Cooking">
                    <label for="cooking" class="form-check-label">Cooking</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="hobbies[]" id="gaming" value="Gaming">
                    <label for="gaming" class="form-check-label">Gaming</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="hobbies[]" id="sports" value="Sports">
                    <label for="sports" class="form-check-label">Sports</label>
                </div>

                <div class="mt-3">
                    <label class="form-label">Short Biography</label>
                    <textarea name="bio" class="form-control" rows="4"></textarea>
                </div>

                <div class="mt-3">
                    <label for="fileToUpload" class="form-label">Upload File</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                </div>
                <div class="mt-4">
                    <input type="submit" name="submit" value="Submit Form" class="btn btn-primary w-100">
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>