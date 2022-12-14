<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mpesa Intergration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="initiateStk.php" method="POST">
        <img src="mpesa.png" class="img-fluid.max-width = 100%" alt="M-pesa Logo" height="180px" width="265px"><br>
        <label for="telephone">Phone Number:</label>
        <div class="form-group">
            <input type="text" name="phoneNumber" id="">
        </div>
        <label for="Amount">Amount:</label>
        <div class="form-group">
            <input type="number" name="amount" id="">
        </div>
        <div class="form-group">
        <button type="submit" name="submit" value="submit"><i class="fa-solid fa-circle-dollar-to-slot"></i> Donate</button>
        </div>
        <div class="social-menu">
            <a href="github.com/SandersonNyange" style="color: black;"><i class="fa-brands fa-github"></i></a>
            <a href="twitter.com/itsnyange" style="color: black;"><i class="fa-brands fa-twitter"></i></a>
            <a href="instagram.com/itsnyange" style="color: black;"><i class="fa-brands fa-instagram"></i></a>
            <a href="sandersonnyange@gmail.com" style="color: black;"><i class="fa-solid fa-envelope"></i></a>
        </div>
    </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>