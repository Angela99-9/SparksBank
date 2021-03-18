<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>SPARKS BANK</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/7cd36e9da9.js" crossorigin="anonymous">
    </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">
  </head>

<body>
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

    <div class="center mt-0 #ffab00 amber accent-3">

    </div>
    <div class="container-fluid">

        <?php
        include './connection.php';
        if (isset($_REQUEST['ID'])) {
            $sid = $_GET['ID'];
            $sql = "SELECT * FROM  clients where ID=$sid";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            $rows = mysqli_fetch_assoc($result);
        }
        ?>
        <form method="post" name="tcredit" class="tabletext" ><br>

             <div class="container-fluid" style="font-family: 'Merriweather', serif;" >
                <table class="table table-sm table-striped table-condensed table-bordered" class="table">
                    <thead class="thead-dark">
                    <tr>

                        <th class="text-center">ID</th>
                        <th class="text-center">Customer Name</th>
                        <th class="text-center">Email ID</th>
                        <th class="text-center">Amount</th>
                    </tr>
                    <tr>
                        <td class="center py-2"><?php echo (isset($rows['ID']) ? $rows['ID'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['Customer Name']) ? $rows['Customer Name'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['Email ID']) ? $rows['Email ID'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['Amount']) ? $rows['Amount'] : ''); ?></td>
                    </tr>
                </table>
            </div>
            <div class="container" style="font-family: 'Merriweather', serif;">
                <br><br><br>
                <label for="to">Transfer To:</label>
                <select id="to" name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                    include 'config.php';
                    $sid = $_REQUEST['ID'];
                    $sql = "SELECT * FROM clients where ID!=$sid";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        echo "Error " . $sql . "<br>" . mysqli_error($conn);
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <option class="table" value="<?php echo $rows['ID']; ?>">

                            <?php echo $rows['Customer Name']; ?> (Balance:
                            <?php echo $rows['Amount']; ?> )

                        </option>
                    <?php
                    }
                    ?>
            </div>
            </select>
            <br>
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
            <div class="text-center">
                <button  name="submit" type="submit" id="myBtn" type="button" class="btn btn-primary">Transfer</button>
            </div>
            <br>
        </form>
    </div>
    </div>


</body>

</html>
<?php
include './connection.php';

if (isset($_POST['submit'])) {

    $from = $_GET['ID'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from clients where ID=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array from which the amount is to be transferred.

    // check input of negative value by user
    if (($amount) < 0) {
        echo '<script>';
        echo ' alert("Please enter correct amount.")';  // showing an alert box.
        echo '</script>';
    }

    // check insufficient balance.
    else if ($amount > $sql1['Amount']) {
        echo '<script>';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $sql = "SELECT * from clients where ID=$to";
        $query = mysqli_query($conn, $sql);
        $sql2 = mysqli_fetch_array($query);

        $sender = $sql1['Customer Name'];
        $receiver = $sql2['Customer Name'];

        // deducting amount from sender's account
        $newbalance = $sql1['Amount'] - $amount;
        $sql = "UPDATE clients set Amount=$newbalance where ID=$from";
        mysqli_query($conn, $sql);

        // adding amount to reciever's account
        $newbalance = $sql2['Amount'] + $amount;
        $sql = "UPDATE clients set Amount=$newbalance where ID=$to";
        mysqli_query($conn, $sql);


        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful !!');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>
