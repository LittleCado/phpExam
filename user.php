<?php
require 'db.php';

$session_id = $_GET['session_id'];

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Create Session</title>
</head>
<body class="min-vh-100 d-flex">

<div class="container">
    <form>
        <?php
        $get_data = mysqli_query($conn, "SELECT question FROM `first_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($first_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $first_type['question'] . '</label>
                    <input type="number" class="form-control" id="first_type" placeholder="Answer" name="first_question">
                </div>
               
                ';
            }
        } else {
            echo "<h3>No records found. Please insert some records</h3>";
        }
        ?>

        <?php
        $get_data = mysqli_query($conn, "SELECT question FROM `second_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($second_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $second_type['question'] . '</label>
                    <input type="number" min="0" class="form-control" id="first_type" placeholder="Answer" name="first_question">
                </div>
               
                ';
            }
        } else {
            echo "<h3>No records found. Please insert some records</h3>";
        }
        ?>

        <?php
        $get_data = mysqli_query($conn, "SELECT question FROM `third_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($third_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $third_type['question'] . '</label>
                    <input type="text" maxlength="30" class="form-control" id="first_type" placeholder="Answer" name="first_question">
                </div>
               
                ';
            }
        } else {
            echo "<h3>No records found. Please insert some records</h3>";
        }
        ?>

        <?php
        $get_data = mysqli_query($conn, "SELECT question FROM `fourth_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($fourth_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $fourth_type['question'] . '</label>
                    <textarea maxlength="255" type="text" class="form-control" id="first_type" placeholder="Answer" name="first_question"></textarea>
                </div>
               
                ';
            }
        } else {
            echo "<h3>No records found. Please insert some records</h3>";
        }
        ?>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>