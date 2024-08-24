
<?php
include_once '../functions/student/db_connection.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location: administrator/index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $civil_status = $_POST['civil'];
    $batch = $_POST['batch'];
    $children = $_POST['children'];
    $phone = $_POST['phone'];
    $present_address = $_POST['present_address'];
    $work_address = $_POST['work_address'];
    
    // Handle profile picture upload if provided
    if (!empty($_FILES['profile_picture']['name'])) {
        $profile_picture = $_FILES['profile_picture']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($profile_picture);

        // Upload the file
        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
            // Update the profile picture in the database
            $sql = "UPDATE students SET profile_picture='$profile_picture' WHERE username='$username'";
            mysqli_query($conn, $sql);
        }
    }

    // Update the student's profile information
    $sql = "UPDATE students SET firstname='$firstname', lastname='$lastname', birthdate='$birthdate', email='$email', course='$course', civil_status='$civil_status', batch='$batch', children='$children', phone='$phone', present_address='$present_address', work_address='$work_address' WHERE username='$username'";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Profile updated successfully!";
    } else {
        $_SESSION['error'] = "Failed to update profile!";
    }

    header('Location: ../student/dashboard.php');
    exit();
} else {
    header('Location: ../student/dashboard.php');
    exit();
}
?>
