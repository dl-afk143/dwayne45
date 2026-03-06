<?php
session_start();


if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $email = $_POST['email_address'];
    $gender = $_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
    $bio = $_POST['bio'];


    if (!empty($hobbies)) {
        $hobbiesDisplay = implode(", ", $hobbies);
    } else {
        $hobbiesDisplay = "None selected";
    }

  
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = $_FILES['fileToUpload']['name'];
    $tmpName = $_FILES['fileToUpload']['tmp_name'];
    $filePath = $uploadDir . basename($fileName);
    $uploadSuccess = false;

    if (!empty($fileName)) {
        if (move_uploaded_file($tmpName, $filePath)) {
            $uploadSuccess = true;
        } else {
            $uploadError = "<p style='color:red;'>Failed to upload file.</p>";
        }
    }
} else {
    $noForm = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <style>
        body {
            background-image: url('https://images.pexels.com/photos/19196727/pexels-photo-19196727.jpeg?cs=srgb&dl=pexels-njeromin-19196727.jpg&fm=jpg'); 
            color: black;           
        }
        .shadow {
            background-image:url('https://t3.ftcdn.net/jpg/03/59/69/06/360_F_359690623_9v5YHNpMraznPWmvDitXMs7EmBs20gv0.jpg');
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col mx-2 shadow p-4">

<?php
if (!empty($noForm)) {
    echo "<p>No form submitted.</p>";
} else {
    echo "<div class= 'text-center'>";
    echo "<h2>User Profile</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Hobbies:</strong> $hobbiesDisplay</p>";
    echo "<p><strong>Biography:</strong> $bio</p>";

    if ($uploadSuccess) {
        echo "<p><strong>Uploaded Image:</strong></p>";
        echo "<img src='$filePath' alt='Uploaded Image' style='max-width:300px;'>";
    } else {
        if (!empty($uploadError)) {
            echo $uploadError;
        } else {
            echo "<p>No image uploaded.</p>";
        }
    }
}
?>

            </div>
        </div>
    </div>
</body>
</html>