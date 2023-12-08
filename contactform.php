<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "info@alhashmiinstitute.co.za";
    $headers = "From: ".$mailFrom;
    $txt = "New mail on alhashmiinstitute.co.za website form "."\n\n"."Name: ".$name."\n\n"."Email: ".$mailFrom."\n\n"."Subject: ".$subject."\n\n"."Message: ".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: success.html");
}