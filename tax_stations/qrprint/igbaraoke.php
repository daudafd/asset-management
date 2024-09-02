<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>ODIRS Asset Management System</title>
</head>
<style>
    .column{
        float: left;
        width: 20%;
       
        background: darkorange;
        margin-right: 36px;
        border: 1px solid #000;
    }
    .row::after{
        content: "";
        clear: both;
        display: table;
    }
    .qrTitle1{
        font-size: 0.6rem;
        text-align: center;
        color: #ffffff;
        font-weight: 600;
        transform: translateY(5px);
    }
    .qrImg img{
        margin-left: 30px;
    }
    .qrTitle{
        text-align: center;
        color: #ffffff;
        font-size: 0.9rem;
        font-weight: 500;
        transform: translateY(5px);
    }
</style>
<body>
    <div class="container">
        <div class="row mt-4 ">
            <?php
            function displayICT(){
                $dirname = "../qrimage/Igbaraoke/";
                $images = glob($dirname."*.png");
                foreach($images as $image){ ?>
                    <div class="column qrSticker mb-5">
                        <h5 class="qrTitle1"><?php $NoExt = preg_replace("/\.[^.]+$/", "", $image); echo basename($NoExt);?></h5>
                        <div class="qrImg d-block">
                            <img src="<?php echo $image; ?>" alt="">
                            <h6 class="qrTitle">PROPERTY OF</h6>
                        </div>
                        <div class="bg-white mt-2" style="transform: translatex(-21px) translateY(-1px); margin-left: 22px">
                            <img src="../img/logo5.png" width="195" height="59" alt="" style="background: #ffffff; padding: 6px;">
                        </div>
                    </div>
            <?php
                    }
                }
                displayICT();
            ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>