<!DOCTYPE html>
<html>
	  <head>
    		<meta charset="UTF-8">
			<title>Currículo</title>
      <!-- CSS  -->
			<link href="css/style.css" type="text/css" rel="stylesheet">
      <!-- JQUERY -->
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  <!-- BOOTSTRAP -->
	  		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	
	
      <!-- BNT LER MAIS -->
            
            <script>
                $(document).ready(function(){
                  $(".button-ler").click(function(){
                    $(".conteudo-site").fadeIn();
                    $(".conteudo-site-en").hide();
                  });
                });
            </script>
            
            <!-- BNT LER MAIS EM INGLÊS-->
            
            <script>
                $(document).ready(function(){
                  $(".button-read").click(function(){
                	  $(".conteudo-site-en").fadeIn();
                      $(".conteudo-site").hide();
                  });
                });
            </script>

      <!-- BNT APARECE PROJ/SKILLS E SOME APRESENTAÇÃO -->
      
            <script>
                $(document).ready(function(){
                  $(".button-proj").click(function(){
                    $(".proj").fadeIn();
                    $(".apresent").hide();
                    
                  });
                });
            </script>
               
                <!-- BNT APARECE PROJ/SKILLS E SOME APRESENTAÇÃO EM INGLÊS -->
      
            <script>
                $(document).ready(function(){
                  $(".button-proj-en").click(function(){
                    $(".proj-en").fadeIn();
                    $(".apresent-en").hide();
                    
                  });
                });
            </script>
        <!-- BNT VOLTA APRESENTAÇÃO E SOME PROJ -->
      
            <script>
                $(document).ready(function(){
                  $(".button-voltar").click(function(){
                    $(".apresent").fadeIn();
                    $(".proj").hide();
                    
                  });
                });
                
            </script>
          <!-- BNT VOLTA APRESENTAÇÃO E SOME PROJ EM INGLÊS -->
      
            <script>
                $(document).ready(function(){
                  $(".button-return").click(function(){
                    $(".apresent-en").fadeIn();
                    $(".proj-en").hide();
                    
                  });
                });
                
            </script>
          

        <!-- BNT APARECE CONT SOBRE NAVBAR -->
                     
             <script>
                $(document).ready(function(){
                  $("#bntsobre").click(function(){
                    $(".conteudo-site").fadeIn();
                    $(".conteudo-site-en").hide();
                  });
                });
            </script>	
            
            <!-- BNT APARECE CONT SOBRE NAVBAR EM INGLÊS -->
                     
             <script>
                $(document).ready(function(){
                  $("#bntabout").click(function(){
                    $(".conteudo-site-en").fadeIn();
                    $(".conteudo-site").hide();
                  });
                });
            </script>
    	</head>

	<body>
		<div class="container-fluid">
        	<header>
          <!-- BANNER-->
                	<div class="site-banner col-lg-12">
                    	<div class="container">
                        	<div class="row ">
                            	<div class="col-lg-3 align-self-center site-title">
                               		<h1 class="mb-4 title-text text-uppercase">Oi, Eu sou a Kimberly!</h1>    	
                  					<h5 class="title-text text-uppercase">Bem-vindo(a) ao meu currículo</h5>
                                   	<br>
                                    <div class="button-ler">
              						<a class="btn btn-primary button mr-4  title-text text-uppercase" id="bntlermais" href="#cont-site">Ler mais</a>          	 
                               		</div>
                               		<br/>
                            	</div>
                          		<div class="col-lg-6">
                            
                            	</div>	
                            		<div class="col-lg-3 align-self-center site-title">
                               		<h1 class="mb-4 title-text text-uppercase">Hi, i'm Kimberly!</h1>    	
                  					<h5 class="title-text text-uppercase">Welcome to my resume</h5>
                                   	<br>
                                    <div class="button-read">
              						<a class="btn btn-primary button mr-4  title-text text-uppercase" id="bntread" href="#cont-site-en">Read more</a>          	 
                               		</div>
                               		</div>
                            	
                        	</div>
                    	</div>
                	</div>
        	</header>
    	
    	  <!-- MENU TRANSPARENTE -->
    	  <div id="header">        
         	<div class="container">
       		 <nav class="navbar navbar-expand-lg fixed-top navbar-light navbar-custom">
    			<div class="container">
    			    <button class="navbar-toggler" 
    			    type="button" data-bs-toggle="collapse" 
    			    data-bs-target="#navbarSupportedContent" 
    			    aria-controls="navbarSupportedContent" 
    			    aria-expanded="false" 
    			    aria-label="Toggle navigation">
          				<span class="navbar-toggler-icon"></span>
        			</button>
         			<div class="collapse navbar-collapse" id="navbarSupportedContent">
            			<ul class="navbar-nav">
            				<li>
            						<a class="nav-link" href="http://localhost/testecurriculophp/front.php">Home</a>
            					</li>
            					<li>
            						<a class="nav-link" id="bntsobre" href="#cont-site">Sobre</a>
            					</li>
            					<li>
            						<a class="nav-link" id="bntabout" href="#cont-site-en">About</a>
            					</li>
            				 </ul>
            			</div>
        			</div>	  
    			</nav>	
    		</div>	
    	</div>		
    	
         
             <!-- TITULO  INGLÊS-->	
            <div class="conteudo-site-en" id="cont-site-en">
            	<div class="container pt-5">
                	<div class="row">
                    	<div class="col-lg-12">
                    		<div class="center_titulo">
                        		<div class="titulos text-uppercase">
                        			 <h5>About me</h5>
                        		</div>
                        	</div>	
            			</div>
               		</div>
            	</div>
             <!-- ESPAÇO -->		
            	<div class="container pt-4">
                	<div class="row">
                    	<div class="col-lg-12 ">  
            			</div>
               		</div>
            	</div>	
          
            <!-- FOTO PERFIL EM INGLÊS--> 
             <div class="container">	  
                	<div class="row">       
                        <div class="col-lg-4" style="max-width: 540px;" >
                            <div class="card align-self-center">
                              	<img src="img/fotooperfil.jpeg" class="card-img-top" alt="...">
                              <div class="card-body card-text">
                                <h6 class="card-title card-text text-uppercase">Contacts:</h6>
                                 <a href="https://github.com/kimberlyledio"><i class="bi bi-github"></i>
                                 </a>
                                 <a href="https://www.instagram.com/kimberlyledio/"><i class="bi bi-instagram"></i>
                                 </a> 
                                 kimberlyledio@gmail.com
							</div>
						</div>     
                    </div>
           	
	
        		<!-- TEXTO SOBRE MIM INGÊS-->
	  			<div class="col-lg-8 align-self-center text-uppercase">
              	 	<div class="apresent-en">
                          <div class="card-body">
                               <h6 class="card-title text-uppercase">Presentation</h6>
                               <p class="card-text text-uppercase">
                                   <p>- Name: Kimberly Pinheiro L. Barreto.</p>
                                   <p>- Age: 18 years old.</p>
                              	   <p>- City: Guarulhos SP</p>
                                   <p>- Institution: Federal Institute of Science and Technology.</p>
                                   <p>- Formation: Internet IT Technician (studying).</p>
                                   <p>- Skills: Creativity, flexibility at work and collaboration.</p>
              				 		<p>-languages: basic english.</p>
              				   <div class="button-proj-en">
              				   		<button type="button" class="btn btn-primary text-uppercase ">Projects</button>          	 
    						   </div>
    					</div>
    	            </div>
    	                       
    			
              	 	<div class="proj-en">
                          <div class="card-body">
                               <h6 class="card-title text-uppercase">Projects</h6>
                               <p class="card-text">
                                   <p>- Project:
                                    "Em Foco: Skills development of children and adolescents with dyslexia" (2020-2021). </p>
                              	   <p>- Members: Bianca Toledo, Kimberly Pinheiro e Luana Alves.</p>
                              	   <p>- Prizes:
                              	     Silver Medal in Engineering and Technical Knowledge, at the Annual Exhibition of Technology, Education, Culture, Science and Art (EXATECCA).</p>
                              	   <p>  Silver Medal in Best Technical High School Project, VIII FECEG - Knowledge Week 2021.</p>
     							<div class="button-return">
              				   		<button type="button" class="btn btn-primary text-uppercase">Return</button>          	 
    						  	</div>
                           </div>
                      </div>
                </div>
      	 
         	</div>
    	</div>		
        	<!-- RODAPÉ -->	
            	<div class="rodape">
                	<div class="container pt-5">
                    	<div class="row">
                        	<div class="col-lg-12"> 
                
                			</div>
                   		</div>
                	</div>	
                </div>		
            </div>  	
	    
     		 <!-- TITULO -->	
            <div class="conteudo-site" id="cont-site">
            	<div class="container pt-5">
                	<div class="row">
                    	<div class="col-lg-12">
                    		<div class="center_titulo">
                        		<div class="titulos text-uppercase">
                        			 <h5>Sobre mim</h5>
                        		</div>
                        	</div>	
            			</div>
               		</div>
            	</div>
            
             <!-- ESPAÇO -->		
            	<div class="container pt-4">
                	<div class="row">
                    	<div class="col-lg-12 ">  
            			</div>
               		</div>
            	</div>	
          
            <!-- FOTO PERFIL--> 
             <div class="container">	  
                	<div class="row">       
                        <div class="col-lg-4" style="max-width: 540px;" >
                            <div class="card align-self-center">
                              	<img src="img/fotooperfil.jpeg" class="card-img-top" alt="...">
                              <div class="card-body card-text">
                                <h6 class="card-title card-text text-uppercase">Contatos:</h6>
                                 <a href="https://github.com/kimberlyledio"><i class="bi bi-github"></i>
                                 </a>
                                 <a href="https://www.instagram.com/kimberlyledio/"><i class="bi bi-instagram"></i>
                                 </a> 
                                 kimberlyledio@gmail.com
							</div>
						</div>     
                    </div>
           	
     
            <!-- TEXTO SOBRE MIM -->
	  			<div class="col-lg-8 align-self-center text-uppercase">
              	 	<div class="apresent">
                          <div class="card-body">
                               <h6 class="card-title text-uppercase">Apresentação</h6>
                               <p class="card-text text-uppercase">
                                   <p>- Nome: Kimberly Pinheiro L. Barreto.</p>
                                   <p>- Idade: 18 anos.</p>
                              	   <p>- Cidade: Guarulhos SP</p>
                                   <p>- Instituição: Instituto Federal de Ciências e Tecnologia.</p>
                                   <p>- Formação: Técnico em Informática para Internet (cursando).</p>
                                   <p>- Habilidades: Criatividade, flexibilidade no trabalho e
                                   colaboração.</p>
                                    <p>- Idiomas: Inglês básico.</p>
              				   <div class="button-proj">
              				   		<button type="button" class="btn btn-primary text-uppercase ">Projetos</button>          	 
    						   </div>
    					</div>
    	            </div>
    	                       
    			
              	 	<div class="proj">
                          <div class="card-body">
                               <h6 class="card-title text-uppercase">Projetos</h6>
                               <p class="card-text">
                                   <p>- Projeto:
                                    "Em Foco: Desenvolvimento de habilidades de crianças e adolescentes com Dislexia" (2020-2021). </p>
                              	   <p>- Integrantes: Bianca Toledo, Kimberly Pinheiro e Luana Alves.</p>
                              	   <p>- Prêmios:
                              	     Medalha de prata em Engenharia e Conhecimentos técnicos, na Exposição Anual de Tecnologia, Educação, Cultura, Ciências e Arte (EXATECCA).</p>
                              	   <p>  Medalha de prata em Melhor Projeto Ensino Médio Técnico, VIII FECEG - Semana do Conhecimento 2021.</p>
     							<div class="button-voltar">
              				   		<button type="button" class="btn btn-primary text-uppercase">Voltar</button>          	 
    						  	</div>
                           </div>
                      </div>
                </div>
      	 
         	</div>
    	</div>		
        		
        	<!-- RODAPÉ -->	
            	<div class="rodape">
                	<div class="container pt-5">
                    	<div class="row">
                        	<div class="col-lg-12"> 
                
                			</div>
                   		</div>
                	</div>	
                </div>		
            </div>  	
	   	  </div>	
     		
   </body>
</html>   
   