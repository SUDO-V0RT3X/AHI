<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "info@alhashmiinstitute.co.za";
    $headers = "From: ".$mailFrom;
    $txt = "New mail on alhashmiinstitute.co.za website form from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: success.html");
}