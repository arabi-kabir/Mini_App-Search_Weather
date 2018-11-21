<?php
    include('backend/magic.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Information of <?php echo $_GET['city']; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Weather Information of <?php echo $_GET['city']; ?></h1>
    <div class="container" id="info-sec">
        <div id="weather_info">
            <table class="table table-hover table-dark">
                <tbody>
                    <tr>
                        <td>Temperature</td>
                        <td><?php echo $temp ?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><?php echo $desc ?></td>
                    </tr>
                    <tr>
                        <td>Clouds</td>
                        <td><?php echo $clouds ?></td>
                    </tr>
                    <tr>
                        <td>Humidity</td>
                        <td><?php echo $humidity ?></td>
                    </tr>
                    <tr>
                        <td>Wind Speed</td>
                        <td><?php echo $windspeed ?></td>
                    </tr>
                    <tr>
                        <td>Pressure</td>
                        <td><?php echo $pressure ?></td>
                    </tr>
                    <tr>
                        <td>Sunrise</td>
                        <td><?php echo $sunrise ?></td>
                    </tr>
                    <tr>
                        <td>Sunset</td>
                        <td><?php echo $sunset ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="btn btn-success btn-lg btn-block" href="index.php">Search Again</a>
    </div>
    
    <footer>Copyright &copy; 2018 by arabi_kabir. All rights reserved.</footer>
</body>
</html>