<?php

if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mailTo = "davidfhan@brown.edu";
    $header = "KASA Contact Form Submission: ".$first." ".$last;
    $txt = "Return Email: ".$email.".\n\n".$message;

    mail($mailTo, $header, $txt, $header);
    header("Location: index.html?mailsent");
}

?>