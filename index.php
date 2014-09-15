<?php
$title ="Chhhut !!! Bistro Restaurant";
$meta_description ="Le Chhhut, Restaurant Familial et Bistronomique à Paris 3è";
include "header.php";
?>
   <body>
    	<div class="logo">
			<img src="Images/Logo4.jpg" alt="Logo Chhhut"/>
		</div>
		<div>	
  			<h1>Cuisine Familiale et Bistronomique</h1>
  		</div>
  	<div class="container">	
			<div class="row text-center height">
				<div class="col-md-4">
					<div class="parent">
						<div class="jour" data-toggle="modal" data-target="#myModal">
						<img src="Images/Home1.jpg" alt="Menu du Jour" class="img-circle rounded"/>
						<div class="hidden_message">
							<p><strong>Menu du Jour</strong></p>
						</div>
					</div>	
					</div>	
					<div>
						<h3>Aujourd'hui</h3>
						<p>Découvrez le Menu du Jour et venez vous régaler avec nos produits Frais.</p>
						<!-- Button trigger modal -->
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Menu du Jour</h4>
		      </div>
		      <div class="modal-body">
		        	<p>-Carpaccio de Courgettes 
	        		<Br>-Cheeseburger Roquefort
	        		<Br>-Tiramisu</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-info btn-lg" data-dismiss="modal">FERMER</button>
		      </div>
		    </div>
		  </div>
		</div>
	        		</div>	
	    		</div>		
	    		<div class="col-md-4">
	    			<div class="parent">
	    				<img src="Images/Home2.jpg" alt="La Presse parle de Chhhut" class="img-circle rounded"/>    	
						<div class="hidden_message">
							<p><strong>La Presse dit</strong></p>
						</div>
					</div>	
					<h3>On Parle de Chhhut !!!</h3>
					<p>Avec un nom pareil ce n'est pas faute de vouloir rester discret, malgré ça la presse parle quand même de Nous.</p>
					
				</div>
				<div class="col-md-4">
						<div class="parent">
							<img src="Images/Home3.jpg" alt="A Propos de Nous" class="img-circle rounded"/>
							<div class="hidden_message">
								<p><strong>Dam & Nad</strong></p>
							</div>
						</div>		
					<h3>A Propos de Nous</h3>
					<p>Une Cuisine Familiale, des Produits Frais renouvellés quotidiennement et cuisinés avec Amour.</p>
					
				</div>	
			</div>
			<div class="row height">
				<div class="col-md-7 text-center bord">	
					<h3>Suivez l'actualité de Chhhut sur les Réseaux Sociaux</h3>
						<ul class="list-inline">
	        			<li><a href:"#"><i class="fa fa-facebook-square fa-3x"></i></a></li>
						<li><a href:"#"><i class="fa fa-twitter-square fa-3x"></i></a></li>
						<li><a href:"#"><i class="fa fa-google-plus-square fa-3x"></i></a></li>
	        			</ul>
	        	</div>		
	        	<div class="col-md-offset-1 col-md-4 text-center cadre">	   	
	        		<h3>Passez nous votre email</h3>
	        		<p>On vous enverra des trucs sympa... de temps en temps</p>
	        		<form>
						<input type="text">
						<button type="submit" class="fa fa-envelope"></button>
					</form>
				</div>
			</div>
	</div>				
	  	<footer>
	    	<div class="row">
	    			<p class="text-center">22, rue Béranger - 75003 PARIS</p>
	    			<p class="text-center">09 53 76 74 22</p>
	    			<p class="text-center">Copyright 2014 - Chhhut !!!</p>
	    	</div>		
	    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="global.js"></script>
</body>
</html>
