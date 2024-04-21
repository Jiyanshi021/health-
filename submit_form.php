<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $file = fopen('contact_form_data.csv', 'a');

        $data = array($name, $email, $phone, $message);
        fputcsv($file, $data);

        fclose($file);
        echo "Data saved successfully.";
    } else {
        echo "No data received.";
    }
?>
