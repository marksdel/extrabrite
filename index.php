
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Extrabrite Signs</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Setting the standard for sign-writing in Ireland">
    <meta name="keywords" content="signs Ireland">
    <meta name="author" content="Extrabrite Signs">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:title" content="Extrabrite Signs">
	<meta property="og:description" content="Setting the standard for sign-writing in Ireland">
    	
    <?php include 'header-common.php';?>

    
</head>
<body>
    <div id="loading-screen" class="centered-column">
        <div class="spinner centered-column">
            <div class="loader"></div>
        </div>
    </div>
	



    <!-- NAVBAR -->
    <?php include 'menu.php';?>

    <!--SECTION-->
    <section id="home" class="home" style="color:white" >
        <div class="container centered-column home-text">			
            <div class="centered-column col-xs-12 splash-header">			
                <h1 class="centered-row">					
                    <span>“  E x t r a b r i t e  ”</span>
                </h1>
            </div>
        </div>
        <div class="centered-column">
			<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img id="first-splash-image" src="images/6.jpg">
                        <div class="splash-text-holder">
                            <h3 class="splash-text">Specialists in sign-writing</h3>
                        </div>
                    </div>
                    <!-- Loading Script -->
                    <script>
                        $('#first-splash-image').on('load', function() {
                            $('#loading-screen').addClass('loading-slide-up');
                        });
                        setTimeout(function() {
                            $('#loading-screen').addClass('loading-slide-up');
                        }, 1000)
                    </script>
					
                    <!-- Loading Script -->
                    <div class="item">
                        <img src="images/install.jpg">
                        <div class="splash-text-holder">
                            <h3 class="splash-text">Design, Fabrication and Installation</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/7.jpg">
                        <div class="splash-text-holder">
                            <h3 class="splash-text">Contact us for more information </h3>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span style="color: #1d9d73; margin-left: 25%; font-size: 16px; opacity: 0;" class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span style="color: #1d9d73; margin-right: 25%; font-size: 16px; opacity: 0;" class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                <script>
                    $('#home').mouseover(function() {
                        $('#home .glyphicon').css('opacity', '1');
                    });
                    $('#home').mouseout(function() {
                        $('#home .glyphicon').css('opacity', '0');
                    });
                </script>
            </div>
        </div>
    </section>

       
</body>
</html>
