<?php

if(isset($_POST['download_bill']))
{
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment; Filename=bill.doc");
}

$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];

$sale_rep=$_POST['sale_rep'];
$date=$_POST['date'];
$ship_via=$_POST['ship_via'];
$terms=$_POST['terms'];

$des1=$_POST['description1'];
$des2=$_POST['description2'];
$des3=$_POST['description3'];
$des4=$_POST['description4'];
$des5=$_POST['description5'];
$des6=$_POST['description6'];
$des7=$_POST['description7'];


$u_price1 = $_POST['unit_price1'];
$u_price2 = $_POST['unit_price2'];
$u_price3 = $_POST['unit_price3'];
$u_price4 = $_POST['unit_price4'];
$u_price5 = $_POST['unit_price5'];
$u_price6 = $_POST['unit_price6'];
$u_price7 = $_POST['unit_price7'];

$quantity1 = $_POST['quantity1'];
$quantity2 = $_POST['quantity2'];
$quantity3 = $_POST['quantity3'];
$quantity4 = $_POST['quantity4'];
$quantity5 = $_POST['quantity5'];
$quantity6 = $_POST['quantity6'];
$quantity7 = $_POST['quantity7'];

$price1 = $u_price1 * $quantity1;
$price2 = $u_price2 * $quantity2;
$price3 = $u_price3 * $quantity3;
$price4 = $u_price4 * $quantity4;
$price5 = $u_price5 * $quantity5;
$price6 = $u_price6 * $quantity6;
$price7 = $u_price7 * $quantity7;

$sub_total = 0;
$sub_total = $price1 + $price2 + $price3 + $price4 + $price5 + $price6 + $price7;

$discount=0;
$pst=0;
$gst=0;
$total=$discount + $pst + $sub_total;





?>




<!DOCTYPE html>
<html lang="">
<head>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>MotoFit</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-red.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-analytics.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">


</head>
<body>
<form action="bill_info.php" method="post">


    <div
        class="mdl-layout mdl-js-layout mdl-layout--fixed-header
                    mdl-layout--fixed-tabs">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Motofit Admin Panel</span>
            </div>
        </header>
        <div class="mdl-layout__drawer" style="background: #f7f7f7">
            <span class="mdl-layout-title"><a href="index.html"><img src="motofit_img.jpg" height="150px" width="150px"></a></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="Customer_Information.html">Customer Information</a>
                <a class="mdl-navigation__link" href="Service_Booking.html">Service Booked</a>
                <a class="mdl-navigation__link" href="Breakdown_Service.html">Breakdown Service</a>
                <a class="mdl-navigation__link" href="bill_layout.html">Billing Tab</a>
                <a class="mdl-navigation__link" href="Delivering_Service.html">Delivering Two Wheeler</a>
            </nav>
        </div>
        <main class="mdl-layout__content" style="background: #f7f7f7">
            <!--User List Tab-->
            <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
                <div class="page-content">
                    <div class="card text-center">
                        <div class="card-header">
                            <h2>Motofit Service Bill</h2>
                        </div>
                        <div class="card-body">
                            <center>
                                <table border="1" style="background: #f7f7f7">
                                    <tr>
                                        <td width="100" colspan="8"><center>Bill To</center></td>
                                    </tr>
                                    <tr>
                                        <td width="100">Name :</td>
                                        <td width="100" colspan="7"><?php echo "".$name; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100">Contact :</td>
                                        <td width="100" colspan="7"><?php echo "".$contact; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100">Address :</td>
                                        <td width="100" colspan="7"><?php echo "".$address; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100">Email :</td>
                                        <td width="100" colspan="7"><?php echo "".$email; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><hr></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="2"><center>Sales Rep. Name</center></td>
                                        <td width="100" colspan="2"><center>Ship Date</center></td>
                                        <td width="100" colspan="2"><center>Ship Via</center></td>
                                        <td width="100" colspan="2"><center>Terms</center></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="2"><?php echo "".$sale_rep; ?></td>
                                        <td width="100" colspan="2"><?php echo "".$date; ?></td>
                                        <td width="100" colspan="2"><?php echo "".$ship_via; ?></td>
                                        <td width="100" colspan="2"><?php echo "".$terms; ?></td>
                                    </tr>


                                    <tr>
                                        <td colspan="8"><hr></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><center>Description</center></td>
                                        <td width="100" ><center>Quantity</center></td>
                                        <td width="100" ><center>Unit Price</center></td>
                                        <td width="100" ><center>Total Price</center></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><?php echo "".$des1; ?></td>
                                        <td width="100"><?php echo "".$quantity1; ?></td>
                                        <td width="100"><?php echo "".$u_price1; ?></td>
                                        <td width="100"><?php echo "".$price1; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><?php echo "".$des2; ?></td>
                                        <td width="100"><?php echo "".$quantity2; ?></td>
                                        <td width="100"><?php echo "".$u_price2; ?></td>
                                        <td width="100"><?php echo "".$price2; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><?php echo "".$des3; ?></td>
                                        <td width="100"><?php echo "".$quantity3; ?></td>
                                        <td width="100"><?php echo "".$u_price3; ?></td>
                                        <td width="100"><?php echo "".$price3; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><?php echo "".$des4; ?></td>
                                        <td width="100"><?php echo "".$quantity4; ?></td>
                                        <td width="100"><?php echo "".$u_price4; ?></td>
                                        <td width="100"><?php echo "".$price4; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><?php echo "".$des5; ?></td>
                                        <td width="100"><?php echo "".$quantity5; ?></td>
                                        <td width="100"><?php echo "".$u_price5; ?></td>
                                        <td width="100"><?php echo "".$price5; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><?php echo "".$des6; ?></td>
                                        <td width="100"><?php echo "".$quantity6; ?></td>
                                        <td width="100"><?php echo "".$u_price6; ?></td>
                                        <td width="100"><?php echo "".$price6; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="4"><?php echo "".$des7; ?></td>
                                        <td width="100"><?php echo "".$quantity7; ?></td>
                                        <td width="100"><?php echo "".$u_price7; ?></td>
                                        <td width="100"><?php echo "".$price7; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><hr></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="5">Notes :</td>
                                        <td width="100"><center>SUB-TOTAL</center></td>
                                        <td width="100"><?php echo "".$sub_total; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="5"><center>- - -</center></td>
                                        <td width="100"><center>DISCOUNT (%)</center></td>
                                        <td width="100"><?php echo "".$discount."%"; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="5"><center>- - -</center></td>
                                        <td width="100"><center>PST :</center></td>
                                        <td width="100"><?php echo "".$pst; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="5"><center>- - -</center></td>

                                        <td width="100"><center>GST :</center></td>
                                        <td width="100"><?php echo "".$gst; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="5"><center>- - -</center></td>

                                        <td width="100"><center>TOTAL COST :</center></td>
                                        <td width="100"><?php echo "".$total; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><hr></td>
                                    </tr>
                                    <tr>
                                        <td width="100" colspan="8"><center>Thanks You For You Choose Our Service Station</center></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"><hr></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><hr></td>
                                        <td><input type="submit" value="Download Bill" name="download_bill" ></td>
                                    </tr>


                                </table>
                            </center>
                        </div>
                    </div>
                </div>
            </section>
            <!--END-->

        </main>
    </div>
</form>

</body>
</html>

