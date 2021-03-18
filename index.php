<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>SPARKS BANK</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://kit.fontawesome.com/7cd36e9da9.js" crossorigin="anonymous">
    </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">
<style>
td {
padding: 5px;
text-align:center;

}

</style>
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
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link one" href="#about" >ABOUT US</a>
        </li>
        <li class="nav-item">
            <a class="nav-link two" href="#transfer">TRANSFER</a>
        </li>
        <li class="nav-item">
            <a class="nav-link three" href="transactionhistory.php">TRANSACTION HISTORY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link four" href="#Contact">CONTACT US</a>
        </li>
    </ul>
 </div>
</nav>
</section>

<section id="about">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
  <div class="carousel-inner">
<div class="carousel-item active">
  <div class="row">
    <div class="col col-lg-6">
      <h2 >ABOUT SPARKS BANK <img class="image1"src="card.gif" alt="card gif" style="width:450px;height:300px;" ></h2>
    </div>
    <div class="col col-lg-6">
      <p >SPARKS Bank is one of India's most established and reliable banks.
         We supply quality services to our customers.We are
        a public sector banking and financial services statutory body </p>
<p>We accept deposits from people in the form of savings, fixed,
  current, and recurring deposit accounts. Based on the security of stocks, securities,
  SPARKS gives advances and loans to the public.
   SPARKS gives the facility of drawings, accepting, and buying and selling the bills of exchange. </p>

    </div>
  </div>
  </div>

<div class="carousel-item ">
    <div class="row rows">
      <div class="col col-lg-6">
      <h2 class="vision">OUR VISION<img class="image2"src="cash.gif" alt="cash image" style="width:450px;height:300px;"></h2>
</div>
<div class="col col-lg-6">

    <p class="para2">To be a financially viable community bank committed to improving the quality of life of the communities we serve is our primary vision. We also aim to earn the loyalty of employees,
      customers and the community by operating with integrity and fairness at all times.</p>
    <p class="para3">We aim to provide a conducive banking environment to customers with a commitment to values and unshaken confidence, giving the best technology, standards, processes and procedures
      where customer convenience is of significant
       importance and increases the stakeholders' value.</p> </div>
</div></div>

</div>

</section>
<section id="transfer">
  <h2 class="cust" style="background-color: #e3f2fd;"> CUSTOMERS LIST</h2>
  <div class="trans" style="background-color: #e3f2fd;">

    <!-- <table class="table">
      <thead class="thead-dark">

        <tr>
          <th scope="col">ID</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Email ID</th>
          <th scope="col">Amount</th>
          <th scope="col" >Transfer</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark Masy</td>
          <td>mark@gmail.com</td>
          <td>1000000 </td>
          <td><button type="button" class="btn btn-link" > <a href="userdetails.php?ID=1" class="btn btn-primary" role="button"> Transfer</a></button>
          </td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jenn An</td>
          <td>jenny@gmail.com</td>
          <td>2000000 </td>
          <td><button type="button" class="btn btn-link"
            > <a href="userdetails.php?ID=2" class="btn btn-primary" role="button">Transfer</a></button>
          </td>

        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry Jacob</td>
          <td>larry@gmail.com</td>
          <td>30263555 </td>
          <td><button type="button" class="btn btn-link"> <a href="userdetails.php?ID=3" class="btn btn-primary" role="button">Transfer</a></button>
          </td>

        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Matthew Mc</td>
          <td>matthew@gmail.com</td>
          <td>40000 </td>
          <td><button type="button" class="btn btn-link" ><a href="userdetails.php?ID=4" class="btn btn-primary" role="button">Transfer</a></button>
          </td>

        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Victor J</td>
          <td>victor@gmail.com</td>
          <td>700000 </td>
          <td><button type="button" class="btn btn-link"><a href="userdetails.php?ID=5" class="btn btn-primary" role="button">Transfer</a></button>
          </td>

        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Angela Philip</td>
          <td>angela@gmail.com</td>
            <td>90000 </td>
            <td><button type="button" class="btn btn-link"><a href="userdetails.php?ID=6" class="btn btn-primary" role="button">Transfer</a></button>
            </td>

        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Phil Dunphy</td>
          <td>philD@gmail.com</td>
          <td>340000 </td>
          <td><button type="button" class="btn btn-link"><a href="userdetails.php?ID=7" class="btn btn-primary" role="button">Transfer</a></button>
          </td>

        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Gloria P</td>
          <td>gloria@gmail.com</td>
          <td>740000 </td>
          <td><button type="button" class="btn btn-link"><a href="userdetails.php?ID=8" class="btn btn-primary" role="button">Transfer</a></button>
          </td>

        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Jay P</td>
          <td>jay@gmail.com</td>
          <td>850000 </td>
          <td><button type="button" class="btn btn-link"><a href="userdetails.php?ID=9" class="btn btn-primary" role="button">Transfer</a></button>
          </td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Mitchelle P</td>
          <td>mitchcam@gmail.com</td>
          <td>650000 </td>
          <td><button type="button" class="btn btn-link"><a href="userdetails.php?ID=10" class="btn btn-primary" role="button">Transfer</a></button>
          </td>
        </tr>
      </tbody>
    </table> -->
    <?php
    include './connection.php';
    $sql = "SELECT * FROM clients";
    $result = mysqli_query($conn, $sql);
    ?>
    <table class="table table-hover table-sm table-striped table-condensed table-bordered" class="table">
      <thead class="thead-dark">

                            <tr>
                                <th scope="col" class="text-center py-2">ID</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Amount</th>
                                <th scope="col" class="text-center py-2">Transaction</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php
                            if (isset($result)) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr >
                                        <td class="center py-2"><?php echo (isset($rows['ID']) ? $rows['ID'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['Customer Name']) ? $rows['Customer Name'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['Email ID']) ? $rows['Email ID'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['Amount']) ? $rows['Amount'] : ''); ?></td>
                                        <td class="center"><button type="button" class="btn btn-link" > <a href="userdetails.php?ID=<?php echo $rows['ID']; ?>" class="btn btn-primary" role="button"> Transfer</a></button>
                                        <!-- <td class="center"><a href="userdetails.php?ID=<?php echo $rows['ID']; ?>"> <button type="button" class="btn ">Transfer Money<i class="material-icons right">attach_money</i></button></a></td> -->
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
  </div>

</section>


  <!-- Footer -->

  <!-- <footer id="footer">
<p><a target="_blank" href="https://www.facebook.com/" class=" logo fab fa-facebook-f fb"></a>
<i class="logo fab fa-instagram in"></i>
<i class="logo fab fa-twitter tw"></i><br></p>
  </footer> -->

  <footer id="Contact" class="site-footer" style="background-color: #8ac4d0;" style="font-family: 'Merriweather', serif;">
        <div class="container"  style="background-color: #8ac4d0;" style="font-family: 'Merriweather', serif;">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6 style="font-family: 'Merriweather', serif;">About</h6>
              <p class="text-justify" style="font-family: 'Merriweather', serif;"><i>SPARKS Bank is simple to use. We will help you start an account and make transactions with ease and hassle free. We also provide other services. We take customer deposits in return for paying customers an annual interest payment.We use majority of these deposits to lend to other customers for a variety of loans.</p>
            </i></div>

            <div class="col-xs-6 col-md-3">
              <h6 style="font-family: 'Merriweather', serif;">Categories</h6>
              <ul class="footer-links">
                <li><a href style="font-family: 'Merriweather', serif;">Loan</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">Mutual Funds</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">Account</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">PF</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">Fixed Deposits</a></li>
              </ul>
            </div>

            <div class="col-xs-6 col-md-3 foot">
              <h6 style="font-family: 'Merriweather', serif;">Quick Links</h6>
              <ul class="footer-links">
                <li><a href style="font-family: 'Merriweather', serif;">About Us</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">Contact Us</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">Location</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">Privacy Policy</a></li>
                <li><a href style="font-family: 'Merriweather', serif;">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text" style="font-family: 'Merriweather', serif;">Copyright &copy; 2021 All Rights Reserved by
           <a href="#" style="font-family: 'Merriweather', serif;">SPARKS BANK</a>.
              </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                <li><a class="linkedin" href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
  </footer>
</body>

</html>
