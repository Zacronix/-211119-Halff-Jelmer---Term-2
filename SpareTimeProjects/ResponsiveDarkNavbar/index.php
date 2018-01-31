<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/components/base.css">
    <link rel="stylesheet" type="text/css" href="css/components/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/components/banner.css">
    <link rel="stylesheet" type="text/css" href="css/components/footer.css">
</head>
<body>

<!--------------------------------------------------------------------
                               NAVBAR
--------------------------------------------------------------------->

<nav>
    <h1 class="brand"><a href="#">NAME</a></h1>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">DESIGNS</a></li>
        <li><a href="#">PRICES</a></li>
        <li><a href="#">LOGIN</a></li>
    </ul>
    <div style="clear: both"></div>
</nav>
<div class="responsive-navbar">
    <h3 class="brand"><a href="#">NAME</a></h3>
    <h4 class="menu"><i class="fas fa-align-justify"></i></h4>
    <div style="clear: both"></div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".menu").click(function () {
            $("nav").slideToggle(500);
        })
    })
</script>

<br>

<div class="navbarbanner">
    <h4>WELCOME TO NAME, MODERN & SIMPLE DESIGNS</h4>
</div>

<!--------------------------------------------------------------------
                                BANNER
--------------------------------------------------------------------->

<div class="banner">

</div>

</body>
</html>