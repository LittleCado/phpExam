<?php
require 'db.php';

if(isset($_POST['first_question'])) {

    // INSERT NEW SESSION INTO THE DATABASE
    $query = mysqli_query($conn, "SELECT id FROM `sessions` ORDER BY id DESC LIMIT 1;");
    while ($row = mysqli_fetch_assoc($query)) {
        $session_id = $row['id'] + 1;
        $link = 'link' . $session_id;
        $insert_query = mysqli_query($conn, "INSERT INTO `sessions` (link, status) VALUES ('$link','Working')");
    }

    $first_question = mysqli_real_escape_string($conn, htmlspecialchars($_POST['first_question']));
    $insert_query = mysqli_query($conn, "INSERT INTO `first_type` (session_id, question) VALUES ($session_id,'$first_question')");

    $second_question = mysqli_real_escape_string($conn, htmlspecialchars($_POST['second_question']));
    $insert_query = mysqli_query($conn, "INSERT INTO `second_type` (session_id, question) VALUES ($session_id,'$second_question')");

    $third_question = mysqli_real_escape_string($conn, htmlspecialchars($_POST['third_question']));
    $insert_query = mysqli_query($conn, "INSERT INTO `third_type` (session_id, question) VALUES ($session_id,'$third_question')");

    $fourth_question = mysqli_real_escape_string($conn, htmlspecialchars($_POST['fourth_question']));
    $insert_query = mysqli_query($conn, "INSERT INTO `fourth_type` (session_id, question) VALUES ($session_id,'$fourth_question')");

}