<?php 
session_start(); 
include "conn.php";

if (isset($_POST['qrcode_text'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $qrcode_text = validate($_POST['qrcode_text']);

    if (empty($qrcode_text)) {
        header("Location: index.php?error=QR CODE is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE qrcode='$qrcode_text'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

            if ($row['qrcode'] === $qrcode_text) {
                $_SESSION['qrcode'] = $row['qrcode'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['type'] = $row['type'];
                $_SESSION['name'] = $row['name'];

                if ($row['type'] === 'student') {
                    header('location: ../student/');
                } else if ($row['type'] === 'administrator') {
                    header('location: ../administrator/');
                } else {
                    header('location: ../index.php?type=error&message=Invalid user type');
                }
                exit();
            } else {
                header('location: ../index.php?type=error&message=Invalid QR Code');
                exit();
            }
        } else {
            header('location: ../index.php?type=error&message=Invalid QR Code');
            exit();
        }
    }
} else {
    header('location: index.php');
    exit();
}
