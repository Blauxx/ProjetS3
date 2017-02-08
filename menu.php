<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Index</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style_menu.css">
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<body>

	<div id="bande">
		<img src="images/user.png" id="img">
  
   <form action=deco.php method='post'>
       <input type="image" id ="img" class="bouton_deco"name="bouton_deco" src="images/deco.jpg" >
   </form>

	</div>

    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Utilisateur
                    </a>
                </li>
                <li>
                    <a href="acceuil.php">Accueil</a>
                </li>
                <li>
                    <a href="#">Mon compte</a>
                </li>
                <li>
                    <a href="html/mes_cours.html">Cours</a>
                </li>
                <li>
                    <a href="#">Exercices</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
		

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          			<span class="hamb-middle"></span>
      				  <span class="hamb-bottom"></span>
            </button>
    
           

            <div class="container">
		

        		</div>

		    	<div class="footer">
			     	<a>..</a>
		    	</div>
       </div>
        <!-- /#page-content-wrapper -->

		

      </div>
    <!-- /#wrapper -->
    <script type="text/javascript">
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>

</body>
</html>
