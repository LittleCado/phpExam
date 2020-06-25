<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Create Session</title>
</head>
<body class="min-vh-100 d-flex">

<div class="container">
    <h1>Create Session</h1>
    <form action="addSessionData.php" method="post">
        <div class="form-group">
            <label for="first_type">First type question</label>
            <input type="text" class="form-control" id="first_type" placeholder="Question" name="first_question">
        </div>
        <div class="form-group">
            <label for="second_type">Second type question</label>
            <input type="text" class="form-control" id="second_type" placeholder="Question" name="second_question">
        </div>
        <div class="form-group">
            <label for="third_type">Third type question</label>
            <input type="text" class="form-control" id="third_type" placeholder="Question" name="third_question">
        </div>
        <div class="form-group">
            <label for="fourth_type">Fourth type question</label>
            <input type="text" class="form-control" id="fourth_type" placeholder="Question" name="fourth_question">
        </div>

        <hr>
        <div class="form-group">
            <label for="fourth_type">Fifth type question</label>
            <input type="text" class="form-control" id="fourth_type" placeholder="Question">
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label for="first_rbutton">First radio button</label>
                <input type="text" class="form-control" id="first_rbutton">
            </div>
            <div class="form-group col-4">
                <label for="second_rbutton">Second radio button</label>
                <input type="text" class="form-control" id="second_rbutton">
            </div>
            <div class="form-group col-4">
                <label for="third_rbutton">Third radio button</label>
                <input type="text" class="form-control" id="third_rbutton">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label for="fourth_type">Sixth type question</label>
            <input type="text" class="form-control" id="fourth_type" placeholder="Question">
        </div>

        <div class="form-row">
            <div class="form-group col-4">
                <label for="first_checkbox">First checkbox</label>
                <input type="text" class="form-control" id="first_checkbox">
            </div>
            <div class="form-group col-4">
                <label for="second_rcheckbox">Second checkbox</label>
                <input type="text" class="form-control" id="second_checkbox">
            </div>
            <div class="form-group col-4">
                <label for="third_checkbox">Third checkbox</label>
                <input type="text" class="form-control" id="third_checkbox">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>