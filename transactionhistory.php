<!DOCTYPE html>
<html lang="en">

<head>
  <head>
    <meta charset="utf-8">

    <title>SPARKS BANK</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="CSS/styles.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;
        }

        * {
            font-family: Merriweather, serif;;
        }
    </style>
</head>

<body style="background-color: #8ac4d0;">

  <section id="title">
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
    <nav class="navbar navbar-light navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
  <img src="favicon-32x32.png" width="60" height="60" class="d-inline-block align-center heading " alt="">
  SPARKS BANK
  </a>
  </nav>

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  </div>
  </nav>
  </section>



    <div class="container" style="background-color: #8ac4d0;">
        <br>
        <div class="container-fluid table-responsive-sm"  >
            <table class="table table-hover table-striped table-condensed table-bordered table table-dark table-striped" class="table">
                  <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Sr No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Recipient</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include './connection.php';

                    $sql = "SELECT * from transaction";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                    ?>

                        <tr>
                            <td class="center py-2"><?php echo $rows['sr_no']; ?></td>
                            <td class="center py-2"><?php echo $rows['sender']; ?></td>
                            <td class="center py-2"><?php echo $rows['receiver']; ?></td>
                            <td class="center py-2"><?php echo $rows['balance']; ?> </td>
                            <td class="center py-2"><?php echo $rows['date_time']; ?> </td>

                        <?php
                    }
                    mysqli_close($conn);
                        ?>
                </tbody>
            </table>

        </div>
    </div>
    <footer class="center footer">

    </body>

</html>
