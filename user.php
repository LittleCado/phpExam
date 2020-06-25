<?php
require 'db.php';

$session_id = $_GET['session_id'];

    $get_data = mysqli_query($conn, "SELECT question FROM `first_type` WHERE session_id == '$session_id'");
    if (mysqli_num_rows($get_data) > 0) {
        while ($first_type = mysqli_fetch_assoc($get_data)) {

            echo '
               <form>
                <div class="form-group">
                    <label for="first_type">First type question</label>
                    <input type="text" class="form-control" id="first_type" placeholder="Question" name="first_question">
                </div>
               </form>
                ';
        }
    } else {
        echo "<h3>No records found. Please insert some records</h3>";
    }