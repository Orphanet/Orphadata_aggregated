<?php 
echo <<<EOT


<!DOCTYPE html>
<html lang="en">

  <head>
 
  
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-22969175-1"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'UA-22969175-1');
   </script>
  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="shortcut icon" type="image/x-icon" href="img/header/favicon.gif" ><link rel="icon"          type="image/gif"    href="img/header/favicon.gif" ><title>Orphadata</title>
	
	
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


  </head>

  
  
  
  
  <body id="page-top">




    
    <!-- Navigation MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
    <!--    <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a> -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
		  
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#freeproducts">Free Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#ontologies">Ontologies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="private_products.html" target="_blank">On Request Data</a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="ORPHAnomenclature.html" target="_blank">ORPHA NOMENCLATURE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Our Team</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#legal">Legal Issues</a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html" target="_blank">Contact</a>
            </li>

			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="faq.html" target="_blank">FAQ</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top" target="_blank">          </a>
            </li>

			
          </ul>
        </div>
      </div>
    </nav>




    

    
    <!-- Header -->
    
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
      
	<div class="intro-heading text-uppercase">Welcome to <font color="#d9d9d9">Orpha</font><font color="#ff6600">d</font><font color="#fec503">a</font><font color="#e6ccff">t</font><font color="#5cd65c">a</font></div>



			<div style="font-size: 45px;position: relative;top: -40px" class="intro-heading text-capitalize">ACCESS TO AGGREGATED DATA FROM <a href="https://www.orpha.net" target="_blank"><img class="img-fluid" src="img/header/logo_orphanet_transp_white_small.png" alt=""></a><br><font size="5">UPDATED MONTHLY</font></div>

	       <link rel="stylesheet" href="css/1-style-xs.css"> 
	       <div class="row text-center" id="counter_section">
			<script>
			 $(document).ready(function(){
				$.getJSON("counterwww.json",function(data){
					var counter = '';
					$.each(data, function(key,value){
					
						counter += '<div class="col-md-4">';
						counter += '<span class="fa-stack fa-2x">';
				counter += '<i class="fa fa-circle fa-stack-2x text-primary"></i>';
				counter += '<i class="fa ad-disease icon fa-stack-1x fa-inverse"></i>';
                		counter += '</span>';                		
						counter += '<h4 class="section-heading">'+ value.diseases + '</h4>'; 
                		counter += '<h4 class="section-heading">Clinical entities</h4>';
                		counter += '</div>'; 
									
						counter += '<div class="col-md-4">';
						counter += '<span class="fa-stack fa-2x">';
				counter += '<i class="fa fa-circle fa-stack-2x text-primary"></i>';
                  		counter += '<i class="fa ad-gene icon fa-stack-1x fa-inverse"></i>';
                		counter += '</span>';                		
						counter += '<h4 class="section-heading">'+ value.genesdiseases + '</h4>'; 
                		counter += '<h4 class="section-heading">Disease-gene relationships</h4>';
                		counter += '</div>'; 
						
						counter += '<div class="col-md-4">';
						counter += '<span class="fa-stack fa-2x">';
			        counter += '<i class="fa fa-circle fa-stack-2x text-primary"></i>';
				counter += '<i class="fa fa fa-braille fa-stack-1x fa-inverse"></i>';
                		counter += '</span>';                		
						counter += '<h4 class="section-heading">'+ value.hpodiseases + '</h4>'; 
                		counter += '<h4 class="section-heading">Disease-phenotype annotations</h4>';
				counter += '</div>'; 



                                                counter += '<div class="col-md-4">';
                                                counter += '<span class="fa-stack fa-2x">';
                                counter += '<i class="fa fa-circle fa-stack-2x text-primary"></i>';
				counter += '<i class="fa fa fa-bar-chart fa-stack-1x fa-inverse"></i>';
				counter += '</span>';
                                                counter += '<h4 class="section-heading">'+ value.epidemio + '</h4>';
                                counter += '<h4 class="section-heading">Epidemiological data</h4>';
                                counter += '</div>';

                                                counter += '<div class="col-md-4">';
                                                counter += '<span class="fa-stack fa-2x">';
                                counter += '<i class="fa fa-circle fa-stack-2x text-primary"></i>';
				counter += '<i class="fa ad-drugs icon fa-stack-1x fa-inverse"></i>';
                                counter += '</span>';
                                                counter += '<h4 class="section-heading">'+ value.drugs + '</h4>';
                                counter += '<h4 class="section-heading">Orphan designations and drugs</h4>';
                                counter += '</div>';

                                                counter += '<div class="col-md-4">';
                                                counter += '<span class="fa-stack fa-2x">';
                                counter += '<i class="fa fa-circle fa-stack-2x text-primary"></i>';
				counter += '<i class="fa ad-clinicallabs icon fa-stack-1x fa-inverse"></i>';
                                counter += '</span>';
                                                counter += '<h4 class="section-heading">'+ value.testdiags + '</h4>';
                                counter += '<h4 class="section-heading">Diagnostic tests</h4>';
                                counter += '</div>';

					});

					$('#counter_section').append(counter);
						});
			 });
			 </script>


	</div>

  </div>

	
    </header>



	<!-----------------	Ligne de Flottaison ----------------->
	<!-----------------	Ligne de Flottaison ----------------->
	<!-----------------	Ligne de Flottaison ----------------->
	<!-----------------	Ligne de Flottaison ----------------->


    <!-- Products Free Section -->
    
    <section class="bg-light" id="freeproducts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
				<img class="img-fluid" src="img/body/icons/Logo_CDR-small.png" alt="" height="155" width="155"></p>
            <h2 class="section-heading text-uppercase">Free datasets Powered by <img class="img-fluid" src="img/body/logo_orphanet_transp.png" height="200" width="260" alt=""></h2>
            <h3 class="section-subheading text-muted">  
		These data sets are a partial extraction of the Orphanet data base, freely accessible at <a href="http://www.orpha.net" target="_blank">www.orpha.net</a> (for consultation purposes only).</br>
		The data sets are available in nine languages: <b><font color="#4d0f00">English, French, German, Italian, Portuguese, Spanish, Dutch, Polish and Czech.</font></b></br>
		A description of these datasets with annotated samples is <a href="img/PDF/OrphadataFreeAccessProductsDescription.pdf" target="_blank">available</a>.<br>
		</h3>
          </div>
        </div>
        <div class="row">
 
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="rare_free.html" target="_blank">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/body/buttons/rare_button.png" alt="" >
            </a>
            <div class="portfolio-caption">
              <h4>Rare diseases and classifications</h4>
              <p class="text-muted"></p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#genemodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/body/buttons/gene_button.png" alt="">
            </a>
           <div class="portfolio-caption">
              <h4>Genes associated with rare diseases</h4>
              <p class="text-muted"></p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#phenotypesmodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/body/buttons/hpo_button.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Rare diseases with associated phenotypes</h4>
              <p class="text-muted"></p>
            </div>
          </div>


        </div>



        <div class="row">
 
          <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="epidemio.html" target="_blank">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/body/buttons/epidemio_button.png" alt="">
            </a>
           <div class="portfolio-caption">
              <h4>Epidemiological data</h4>
              <p class="text-muted"></p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#disabilitymodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/body/buttons/disability_button.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Rare diseases and functional consequences</h4>
              <p class="text-muted"></p>
            </div>
          </div>
         
	<div class="col-md-4 col-sm-6 portfolio-item">
                              <!-- Empty block  -->
          </div>
	  
        </div>
</p>
                        All files are available under the <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">Commons Attribution 4.0 International (CC BY 4.0)</a> licence &nbsp;<img class="img-fluid" src="img/body/legal/cc-by.png" height="25" width="60" alt="">
</p>
			These products have been recognised as an <a href="https://www.elixir-europe.org/platforms/data/core-data-resources" target="_blank">Elixir Core Data Resource</a>&nbsp;&nbsp;<img class="img-fluid" src="img/body/icons/Logo_CDR-mini.png" alt=""> 

      </div>
    </section>




    <!-- Ontologies Grid -->
	
	
    <section class="bg-light" id="ontologies">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
				<img class="img-fluid" src="img/body/icons/Logo_CDR-small.png" alt="" height="155" width="155"></p>
            <h2 class="section-heading text-uppercase">Orphadata Ontologies <br> Powered by <img class="img-fluid" src="img/body/logo_orphanet_transp.png" height="200" width="260" alt=""></a></h2></h2>
            <h3 class="section-subheading text-muted">
			An ontology is a structured vocabulary that describes concepts within the same domain, capturing relationships between these concepts.<br>
			Documents describing <a href="img/PDF/WhatIsORDO.pdf" target="_blank">ORDO</a> and <a href="img/PDF/WhatIsHOOM.pdf" target="_blank">HOOM</a> are available for consultation.			
			</h3>
          </div>
        </div>



	
        <div class="row">
		
		
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#ordomodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
	      <img class="img-fluid" src="img/body/buttons/ordo_button.png" alt="">
              
            </a>
            <div class="portfolio-caption">
              <h4>ORDO</h4>
              <p class="text-muted" align="justify">
The Orphanet Rare Disease Ontology (ORDO) was jointly developed by Orphanet and the European Bioinformatics Institute (EMBL-EBI) to provide a structured vocabulary for rare diseases, capturing relationships between diseases, genes and other relevant features, forming a useful resource for the computational analysis of rare diseases.
			  </p></div>
          </div>


          <div class="col-md-4 col-sm-6 portfolio-item">
	    <a href="sparql.html" target="_blank">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
	      <img class="img-fluid" src="img/body/buttons/sparql_button.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Sparql endpoint</h4>
              <p class="text-muted" align="justify">
			Our freely available data sets can be queried using this SPARQL endpoint.
		</p>
            </div>
	
          </div>


	  
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#hoommodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/body/buttons/hoom_button.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>HOOM</h4>
              <p class="text-muted" align="justify">
		The HPO – ORDO Ontological Module (HOOM) qualifies the annotations between a clinical entity (from ORDO) and phenotypic abnormalities from HPO (Human Phenotype Ontology) according to frequency and by integrating the notion of diagnostic criterion.
		</p>
            </div>
          </div>
        </div>
		
		
      </div>
    </section>





    

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <a href="#page-top" ><img class="rounded-circle img-fluid" src="img/body/about/logo-orphadata.png" alt=""></a>
                </div>


                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Orphadata</h4>

                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><p align="justify">Orphadata provides the scientific community with comprehensive, quality data sets related to rare diseases and orphan drugs from the Orphanet knowledge base, in reusable formats.</p>
                  </p></div>
                </div>
              </li>


              <li class="timeline-inverted">
                <div class="timeline-image">
                  <a href="#ontologies"><img class="rounded-circle img-fluid" src="img/body/about/ontologies.png" alt=""></a>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Orphadata Ontologies</h4>

                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><p align="justify">Orphanet maintains the Orphanet Rare Disease Ontology (ORDO), a structured, machine computable vocabulary for rare diseases derived from the Orphanet knowledge base. HOOM, the HPO-ORDO Ontological Module qualifies annotations between clinical entities (ORDO) and phenotypic abnormalities (HPO).</p>
                  </p></div>
                </div>
              </li>

              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/body/about/endpoint.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Sparql endpoint</h4>

                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> <p align="justify">Currently, we are working to provide a SPARQL endpoint, based on the Blazegraph technology and allowing users to query our freely data sets.<br><img class="img-fluid" src="img/body/about/works.png" height="60" width="60" alt=""></p>
                  </p></div>
                </div>
              </li>

              <li class="timeline-inverted">
                <div class="timeline-image">
                  <a href="https://www.orpha.net" target="_blank" ><img class="rounded-circle img-fluid" src="img/body/about/orphanet.png" alt=""></a>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Orphanet</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> <p align="justify">Orphanet is the international reference knowledge base for rare diseases and orphan drugs. Orphanet provides freely-accessible information on rare diseases with the aim of helping improve the diagnosis, care and treatment of patients with rare diseases.</div>
                </p></div>
              </li>

           
            </ul>
          </div>
        </div>
      </div>
    </section>










	
	
	
	


    

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Orphadata Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/body/team/marc.png" alt="">
              <h4>Marc Hanauer</h4>
              <p class="text-muted">Deputy Director & Chief Technology Officer</p>

              <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://fr.linkedin.com/in/marc-hanauer-442b78136" target="_blank">
                  <i class="fa fa-linkedin"></i>
		  </a>
              </ul>

            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/body/team/charlotte.png" alt="">
              <h4>Charlotte Rodwell</h4>
              <p class="text-muted">Partnerships, Business Development & Strategic Communications Officer</p>
	      
              <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://fr.linkedin.com/in/charlotte-rodwell-696a0bb" target="_blank">
                  <i class="fa fa-linkedin"></i>
		  </a>
              </ul>

	      
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/body/team/david.png" alt="">
              <h4>David Lagorce</h4>
              <p class="text-muted">Lead Technology Officer</p>
	      
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://fr.linkedin.com/in/david-lagorce-7a689b4" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">The Orphadata team is based at the Orphanet coordination offices in Paris (Inserm US14). We are ready to answer any questions you may have about accessing and using Orphadata. <br><br>
				You can also consult the Orphadata product catalogue <a href="img/PDF/Catalogue_Orphadata.pdf" target="_blank"><img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="20" width="20" alt=""></a> to learn more about the data we offer.
					</p>
          </div>
        </div>
      </div>
    </section>


	
	

    
    <!-- Legal Issues -->
    <section id="legal">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Legal Issues</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
			<li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/body/legal/creative-commons.png" alt="">
                </div>


                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Licence</h4>

				</div>
                  <div class="timeline-body">
                    <p class="text-muted"> <p align="justify">We have chosen to apply the <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">Commons Attribution 4.0 International (CC BY 4.0)</a> to all <a href="https://wiki.creativecommons.org/wiki/Data" target="_blank">copyrightable</a>
					parts of our databases. This means that you are free to copy, distribute, display and make commercial use of these databases in all legislations, provided you give us credit.<br>
					You must indicate if you have made changes to the data. This can be done so in a reasonable manner, but not in any way that suggests that Orphanet endorses you or your use.<br>
					You may not apply legal terms or technological measures that legally restrict others from doing anything the license permits.<br>
					<strong>Please consult the terms of the licence for more information.</strong>
					</p></p>
                  </div>
                </div>
              </li>
					
								
					
		             <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/body/legal/Fotolia_185365416_legal.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">How to quote?</h4>

                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> <p align="justify">The appropriate form when quoting Orphanet is:<br><cite><font color="#ff9900">
									Orphanet: an online rare disease and orphan drug data base. © INSERM 1999.
									Available on http://www.orpha.net. Accessed (date accessed).</font></cite><br>
										  The appropriate form when quoting Orphadata is:<br><cite><font color="#ff9900">
                                    Orphadata: Free access data from Orphanet. © INSERM 1999.
                                    Available on http://www.orphadata.org. Data version (XML data version).</font></cite>
									</p><br>
                           On demand, it's possible to use one of our logos. Please use the <a href="contact.html" target="_blank">contact form</a> to ask.
                  </p></div>
                </div>
              </li>
			  
			  
			  
			  
			  

              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/body/legal/Fotolia_185365416_legal.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Disclaimer</h4>

                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> <p align="justify">We make no warranties regarding the correctness of the data, and disclaim liability for damages resulting from its use.<br>
                                          Any medical or genetic information is provided for research, educational and informational purposes only. It is not in any 
										  way intended to be used as a substitute for professional medical advice, diagnosis, treatment or care.
</p></p>
                  </div>
                </div>
              </li>

              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/body/legal/Fotolia_185365416_legal.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Privacy policy</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Data submitted through this website will never be shared with any third parties.
			  </p>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </section>


    
	

    
    <!-- Clients And LOGOS -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/blank.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/logo-inserm-rvb_transparent.png" alt="" style="height:90px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/Co-Funded_by_the_EU_logo_ok.png" alt="" style="height:70px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/blank.jpg" alt="" style="height:50px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/IRR_edited_transparent.png" alt="" style="height:80px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/Global_Alliance_transparent.png" alt="" style="height:100px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/HVP Logo.png" alt="" style="height:100px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/body/support/ifb_transparent.png" alt="" style="height:80px;">
            </a>
          </div>
        </div>
      </div>
    </section>


	
	
	
	
	
	
	
    
    <!-- Footer -->
 
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
             <span class="copyright">&copy; 2011 Orphanet Inserm US14 <br> Last update:  27 May 20</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/orphanet" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://fr-fr.facebook.com/orphanet/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
		
          <div class="col-md-4">
            <span class="copyright">&copy; alice_photo / Fotolia <br>
									&copy; Vlad Kochelaevskiy / Fotolia <br>
									&copy; golubovy / Fotolia <br>
									&copy; Julien Eichinger / stock.adobe.com <br>
									&copy; Jakub Jirsák / stock.adobe.com</span>
          </div>  
		  
        </div>
      </div>
    </footer>


	
	
	
	
	
	
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->	
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->	
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->	
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->
<!--	@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   -->	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


    
    <!-- Portfolio Modals -->
    
    <!-- Genes -->
    
    <div class="portfolio-modal modal fade" id="genemodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">


              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
				
				
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Genes associated with rare diseases<br><img class="img-fluid" src="img/body/free/gene_circle.png" height="200" width="260" alt=""></h2>
                  <p class="item-intro text-muted" align="justify">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                         Table with ORPHAcode of the disease linked to the associated genes, with a characterisation of the relationship between gene and disease 
									 (causative, modifier, susceptibility, or playing a role in the phenotype) and the kind of mutation germline or somatic. 
									 In addition, the table includes the name of the gene in English, its ORPHAcode, chromosomal location, symbol and synonyms and cross-referenced 
									 with UniProtKB, HGNC, OMIM, Genatlas, ensembl, Reactome and IUPHAR-DB.<br>
									Here are XSD <a href="img/fair/product6_2020_v2.xsd" target="_blank"><img class="img-fluid" src="img/body/icons/xsd.png" height="25" width="25" alt=""></a> (XML Schema Definitions) and JPG <a href="img/fair/product6_2020_v2.jpg" target="_blank"><img class="img-fluid" src="img/body/icons/logo_jpg.png" height="25" width="25" alt=""></a> representations for this product.	  
	
				<p class="aligncenter">
    					<img src="img/body/free/new_product.png" align="middle" height="100" width="100" alt="centered image" />
				</p>
				If you need a generation using the old format, do not hesitate to contact us by email
				<br>
				<strong>data.orphanet@inserm.fr</strong>	
					<br><br>
		
					<div class="container">
						<div class="table-responsive">
							
							<table class="table table-hover" id="product6_table">
								<tr>
									<th>Language</th>
									<th>File <img class="img-fluid" src="img/body/icons/xml.png" height="25" width="25" alt=""></th>
									<th>Size</th>
									<th>Date</th>
									<th>Amount</th>
								</tr>
							</table>
						</div>
					</div>

			<script>
			 $(document).ready(function(){
				$.getJSON("free_product6_genes.json",function(data){
					var free_data = '';
					$.each(data, function(key,value){
						free_data += '<tr>';
						free_data += '<td>' + value.aLanguage + '</td>';
						free_data += '<td><a href="' + value.anUrl +'" download target="_blank">' + value.anUrl + '</a></td>';
						free_data += '<td>' + value.aSize + '</td>';
						free_data += '<td>' + value.aDate + '</td>';
						free_data += '<td>' + value.anAmount + '</td>';
						free_data += '</tr>';
					});
					$('#product6_table').append(free_data);
					});
			 });
			 </script>
	 
					                                <br>
                                        Here is a <a href="img/PDF/OrphadataFreeAccessProductsDescription.pdf" target="_blank">PDF</a> file describing Orphanet free access products.
 <br><br><br>


                                In order to visualise previous versions <strong>(since April 2020)</strong><br>
                                please consult the <a href="https://github.com/Orphanet/Orphadata_aggregated" target="_blank">Orphadata Github</a>&nbsp;<img class="img-fluid" src="img/body/icons/3rdparty-github.png" height="30" width="30" alt="">
                                <br>
                                In order to visualise historical versions <strong>(until March 2020)</strong><br>
                                please consult the <a href="https://github.com/Orphanet/Orphadata.org" target="_blank">deprecated Orphadata Github</a>&nbsp;<img class="img-fluid" src="img/body/icons/3rdparty-github.png" height="30" width="30" alt="">

                                         <br>
 
					 <br><br><br><br><br><br>
					 

				  			
					 <h3>Video tutorials</h3><br><br>
			 
				  <iframe width="200" height="100" src="https://www.youtube.com/embed/fvmfiXtLHtg" frameborder="0" allowfullscreen></iframe>
					<p class="section-subheading text-muted">What is the Orphanet nomenclature of rare disorders?</p><br>
					

                     <h3><a href="faq.html" target="_blank">Frequently Asked Questions</a></h3><br>


							<br>
							<a href="img/PDF/OrphadataFreeAccessProductsDescription.pdf" target="_blank"><img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
							<p class="section-subheading text-muted">Free access products description</p>
							<br>


					
								 <h3>Orphanet procedures</h3>					
					<br>
				<a href="https://www.orpha.net/orphacom/cahiers/docs/GB/eproc_disease_inventory_R1_Nom_Dis_EP_04.pdf" target="_blank">
                                        <img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
                                <p class="section-subheading text-muted">Orphanet nomenclature and classification of rare diseases</p>
                        <br>
				<a href="https://www.orpha.net/orphacom/cahiers/docs/GB/eproc_GAB_V01.pdf" target="_blank">
					<img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
					<p class="section-subheading text-muted">Orphanet Advisory Board on Genetics Rules of procedures</p>	
			<br>
				<a href="http://www.orpha.net/orphacom/special/eproc_SOPs.pdf" target="_blank">
					<img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
					<p class="section-subheading text-muted">Orphanet Standard Operating Procedures</p>

					
                </div>
              </div>
            </div>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Screen</button>

          </div>
          </br>
             <div class="column">
               <img class="center" src="img/body/support/inserm_orphanet_modals.png" alt="" >
             </div>
                <br>
             <div class="column">
                Orphanet is part of the Gene Curation Coalition, a global effort to harmonise gene-level resources.<br><br>
                <a href="https://thegencc.org/" target="_blank"><img class="img-fluid" src="img/body/support/The_GenCC_Home_Page.png" height="50" width="150" alt=""></a>
             </div>

      </div>
     </div>
    </section>
	
        


</div>
      </div>
    </div>











	
<!-- HPO-Phenotypes -->


    <div class="portfolio-modal modal fade" id="phenotypesmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
				
				
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Phenotypes associated with rare disorders</h2>
					  <img class="img-fluid" src="img/body/free/phenotypes_circle.png" height="150" width="150" alt=""></h2>
                 <p class="item-intro text-muted" align="justify">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				  
				Table with diseases listed in Orphanet annotated with <strong>HPO phenotypes</strong>.<br>
				The alignment is characterised by frequency (obligatory, very frequent, frequent, occasional, very rare or excluded)
				and whether the annotated HPO term is a major diagnostic criterion or a pathognomonic sign of the rare disease.<br>
				The source, the date and the validation status of the association between the rare disease and HPO terms are also indicated.<br>
				Here are XSD (XML Schema Definitions) <a href="img/fair/Product4_HPO_2020_full_v3.xsd" target="_blank"><img class="img-fluid" src="img/body/icons/xsd.png" height="25" width="25" alt=""></a> and JPEG <a href="img/fair/Product4_HPO_2020_full_v3.jpg" target="_blank"><img class="img-fluid" src="img/body/icons/logo_jpg.png" height="25" width="25" alt=""></a> representations for this product that contains rare disorders listed in Orphanet annotated with HPO phenotypes, and which embeds the status of validation of the association.</p>


                                <p class="aligncenter">
                                        <img src="img/body/free/new_product.png" align="middle" height="100" width="100" alt="centered image" />
                                </p>
                                If you need a generation using the old format, do not hesitate to contact us by email
                                <br>
                                <strong>data.orphanet@inserm.fr</strong>
                                        <br><br>


	
					<div class="container">
						<div class="table-responsive">
							
							<table class="table table-hover" id="product4_table">
								<tr>
									<th>Language</th>
									<th>Files <img class="img-fluid" src="img/body/icons/xml.png" height="25" width="25" alt=""></th>
									<th>Size</th>
									<th>Date</th>
									<th>Amount</th>
								</tr>
							</table>
						</div>
					</div>

			<script>
			 $(document).ready(function(){
				$.getJSON("free_product4_hpo.json",function(data){
					var free_data = '';
					$.each(data, function(key,value){
						free_data += '<tr>';
						free_data += '<td>' + value.aLanguage + '</td>';
						free_data += '<td><a href="' + value.anUrl +'" download target="_blank">' + value.anUrl + '</a></td>';
						free_data += '<td>' + value.aSize + '</td>';
						free_data += '<td>' + value.aDate + '</td>';
						free_data += '<td>' + value.anAmount + '</td>';
						free_data += '</tr>';
					});
					$('#product4_table').append(free_data);
					});
			 });
			 </script>
					
						<br>
			Here is a <a href="img/PDF/OrphadataFreeAccessProductsDescription.pdf" target="_blank">PDF</a> file describing Orphanet free access products.
<br><br><br>


                                In order to visualise previous versions <strong>(since April 2020)</strong><br>
                                please consult the <a href="https://github.com/Orphanet/Orphadata_aggregated" target="_blank">Orphadata Github</a>&nbsp;<img class="img-fluid" src="img/body/icons/3rdparty-github.png" height="30" width="30" alt="">
                                <br>
                                In order to visualise historical versions <strong>(until March 2020)</strong><br>
                                please consult the <a href="https://github.com/Orphanet/Orphadata.org" target="_blank">deprecated Orphadata Github</a>&nbsp;<img class="img-fluid" src="img/body/icons/3rdparty-github.png" height="30" width="30" alt="">

                                         <br>
 
	
 
					 <br>
					 
                  </ul>
				  
	</p>			  
				  
				  
                </div>
              </div>
            </div>
			
						<br><br><br><br><br>
						
						
									 <h3>Video tutorials</h3><br><br>
			 
				  <iframe width="200" height="100" src="https://www.youtube.com/embed/fvmfiXtLHtg" frameborder="0" allowfullscreen></iframe>
					<p class="section-subheading text-muted">What is the Orphanet nomenclature of rare disorders?</p><br>



                     <h3><a href="faq.html" target="_blank">Frequently Asked Questions</a></h3><br>


							<br>
							<a href="img/PDF/OrphadataFreeAccessProductsDescription.pdf" target="_blank"><img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
							<p class="section-subheading text-muted">Free access products description</p>
							<br>

					
								 <h3>Orphanet procedures</h3>					
					<br>
				<a href="http://www.orpha.net/orphacom/special/eproc_SOPs.pdf" target="_blank">
					<img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
                                 <p class="section-subheading text-muted">Orphanet Standard Operating Procedures</p>		
						
	
				  <br><br>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Screen</button>

			
			
			
          </div>
          </br>
             <div class="column">
               <img class="center" src="img/body/support/inserm_orphanet_modals.png" alt="" >
             </div>
 
        </div>
      </div>
    </div>



<!-- Disability -->


    <div class="portfolio-modal modal fade" id="disabilitymodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
				
				
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Rare diseases and functional consequences</h2>
					  <img class="img-fluid" src="img/body/free/disability_circle.png" height="150" width="150" alt=""></h2>
                 <p class="item-intro text-muted" align="justify">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					Table with diseases listed in Orphanet annotated with <strong>functional consequences or environmental factors leading to limitation of activity or restriction of participation</strong>.<br>
				  Here are xsd <a href="img/fair/funct_consequences.xsd" target="_blank"><img class="img-fluid" src="img/body/icons/xsd.png" height="25" width="25" alt=""></a> (XML Schema Definitions) and JPEG <a href="img/fair/funct_consequences.jpg" target="_blank"><img class="img-fluid" src="img/body/icons/logo_jpg.png" height="25" width="25" alt=""></a> representations for this product.



                                <p class="aligncenter">
                                        <img src="img/body/free/new_product.png" align="middle" height="100" width="100" alt="centered image" />
                                </p>
                                        <br><br>



					<div class="container">
						<div class="table-responsive">
							
							<table class="table table-hover" id="disability_table">
								<tr>
									<th>Language</th>
									<th>Files <img class="img-fluid" src="img/body/icons/xml.png" height="25" width="25" alt=""></th>
									<th>Size</th>
									<th>Date</th>
									<th>Amount</th>
								</tr>
							</table>
						</div>
					</div>

			<script>
			 $(document).ready(function(){
				$.getJSON("free_disability.json",function(data){
					var free_data = '';
					$.each(data, function(key,value){
						free_data += '<tr>';
						free_data += '<td>' + value.aLanguage + '</td>';
						free_data += '<td><a href="' + value.anUrl +'" download target="_blank">' + value.anUrl + '</a></td>';
						free_data += '<td>' + value.aSize + '</td>';
						free_data += '<td>' + value.aDate + '</td>';
						free_data += '<td>' + value.anAmount + '</td>';
						free_data += '</tr>';
					});
					$('#disability_table').append(free_data);
					});
			 });
			 </script>
			 
				<br>
					Here is a <a href="img/PDF/OrphadataFreeAccessProductsDescription.pdf" target="_blank">PDF</a> file describing Orphanet free access products.
					
<br><br><br>


                                In order to visualise previous versions <strong>(since April 2020)</strong><br>
                                please consult the <a href="https://github.com/Orphanet/Orphadata_aggregated" target="_blank">Orphadata Github</a>&nbsp;<img class="img-fluid" src="img/body/icons/3rdparty-github.png" height="30" width="30" alt="">
                                <br>
                                In order to visualise historical versions <strong>(until March 2020)</strong><br>
                                please consult the <a href="https://github.com/Orphanet/Orphadata.org" target="_blank">deprecated Orphadata Github</a>&nbsp;<img class="img-fluid" src="img/body/icons/3rdparty-github.png" height="30" width="30" alt="">

                                         <br>


 
                  </ul>
				  
	</p>			  
				  
				  
                </div>
              </div>
            </div>
			
						<br><br><br><br><br>
						
						
									 <h3>Video tutorials</h3><br><br>
			 
				  <iframe width="200" height="100" src="https://www.youtube.com/embed/fvmfiXtLHtg" frameborder="0" allowfullscreen></iframe>
					<p class="section-subheading text-muted">What is the Orphanet nomenclature of rare disorders?</p><br>



                     <h3><a href="faq.html" target="_blank">Frequently Asked Questions</a></h3><br>


							<br>
							<a href="img/PDF/OrphadataFreeAccessProductsDescription.pdf" target="_blank"><img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
							<p class="section-subheading text-muted">Free access products description</p>
							<br>

					
								 <h3>Orphanet procedures</h3>					
					<br>
				<a href="http://www.orpha.net/orphacom/special/eproc_SOPs.pdf" target="_blank">
					<img class="img-fluid" src="img/body/icons/PDF-exploit.png" height="35" width="35" alt=""></a>
                                 <p class="section-subheading text-muted">Orphanet Standard Operating Procedures</p>		
						
	
				  <br><br>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Screen</button>

			
			
			
          </div>
          </br>
             <div class="column">
               <img class="center" src="img/body/support/inserm_orphanet_modals.png" alt="" >
             </div>
 
        </div>
      </div>
    </div>



	
	
	
	
    <!-- ORDO -->
    <div class="portfolio-modal modal fade" id="ordomodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Orphanet Rare <br>Disease Ontology <br></h2>
                  <p class="item-intro text-muted" align="justify">
				  The Orphanet Rare Disease ontology (ORDO) was jointly developed by Orphanet and the EBI to provide a structured vocabulary for rare diseases
				  capturing relationships between diseases, genes and other relevant features which will form a useful resource for the computational analysis of rare diseases. It derived from 
				  the Orphanet database (<a href="https://www.orpha.net/consor/cgi-bin/index.php?lng=EN" target="_blank">www.orpha.net</a>) , a multilingual database dedicated to rare diseases populated from literature and validated by international experts.
				  It integrates a nosology (classification of rare diseases), relationships (gene-disease relations, epidemiological data) and connections with other terminologies (MeSH, SNOMED CT,
				  UMLS, MedDRA),databases (OMIM, UniProtKB, HGNC, ensembl, Reactome, IUPHAR, Geantlas) or classifications (ICD-10). The ontology will be maintained by Orphanet and further populated with new data.
				  Orphanet classifications can be browsed in the OLS view. The Orphanet Rare Disease Ontology is updated every six months and follows the OBO guidelines on deprecation of terms.
				  It constitutes the official ontology of rare diseases produced and maintained by Orphanet (INSERM, US14).
				  <br><br>
				  A document describing ORDO is <a href="img/PDF/WhatIsORDO.pdf" target="_blank">available</a> for consultation.
				  <br>
				  
				  These products have been recognised as an <a href="https://www.elixir-europe.org/platforms/data/core-data-resources" target="_blank">Elixir Core Data Resource</a>&nbsp;&nbsp;<img class="img-fluid" src="img/body/icons/Logo_CDR-mini.png" alt=""> 

					</p>



					
					

					<div class="container">
						<div class="table-responsive">
							<table class="table table-hover" id="ordo1_table">
								<tr>
								  <th>Site</th>
								  <th>Link</th>
								  <th>Type</th>
								</tr>
								<tr>
								<td>Bioportal</td>
							        <td><a href="http://bioportal.bioontology.org/ontologies/ORDO" target="_blank">http://bioportal.bioontology.org/ontologies/ORDO</td>
								<td>OWL format</td>
								</tr>
								<tr>
								<td>EBI Ontologies Lookup Service</td>
							        <td><a href="https://www.ebi.ac.uk/ols/ontologies/ordo" target="_blank">https://www.ebi.ac.uk/ols/ontologies/ordo</td>
								<td>OBO view</td>
								  
								  </tr>
								
							</table>
						</div>
					</div>


					<p>


			  				
					<div class="container">
						<div class="table-responsive">
								Last versions in different languages and powered by <img class="img-fluid" src="img/body/logo_orphanet_transp.png" height="50" width="100" alt=""></a> are available below<br>
							<table class="table table-hover" id="ordo_table">
								<tr>
								  <th>Version</th>
								  <th>Language</th>
								  <th>OWL file</th>
								  <th>Size</th>
								  <th>Date</th>
								  <th>Release Notes</th>
								</tr>
							</table>
						</div>
					</div>


				  
			<script>
			 $(document).ready(function(){
				$.getJSON("LastORDOs.json",function(data){
					var ordo_data = '';
					$.each(data, function(key,value){
			                   ordo_data += '<tr>';
			                   ordo_data += '<td>' + value.aVersionordo + '</td>';
							   ordo_data += '<td>' + value.lang + '</td>';
		 	                   ordo_data += '<td><a href="' + value.ordoURL +'" download target="_blank"><img class="img-fluid" src="img/body/icons/owl.png" height="20" width="20" alt=""></a></td>';
								ordo_data += '<td>' + value.aSize + '</td>';
			                   ordo_data += '<td>' + value.aDate + '</td>';
		 	                   ordo_data += '<td><a href="' + value.aNote +'" download target="_blank"><img class="img-fluid" src="img/body/icons/txt.png" height="25" width="25" alt=""></a></td>';
					   ordo_data += '</tr>';
					});
					$('#ordo_table').append(ordo_data);
					});
			 });
			 </script>
			 

					<p>
					

					
				
					<div class="container">
						<div class="table-responsive">
								Old versions powered by <img class="img-fluid" src="img/body/logo_orphanet_transp.png" height="50" width="100" alt=""></a> are available below (<strong>only in English</strong>)<br>
							<table class="table table-hover" id="ordo2_table">
								<tr>
								  <th>Version</th>
								  <th>OWL file</th>
								  <th>Size</th>
								  <th>Date</th>
								  <th>Release Notes</th>
								</tr>
							</table>
						</div>
					</div>

			<script>
			 $(document).ready(function(){
				$.getJSON("OldORDOs.json",function(data){
					var ordo_data = '';
					$.each(data, function(key,value){
			                   ordo_data += '<tr>';
			                   ordo_data += '<td>' + value.aVersionordo + '</td>';
		 	                   ordo_data += '<td><a href="' + value.ordoURL +'" download target="_blank"><img class="img-fluid" src="img/body/icons/owl.png" height="20" width="20" alt=""></a></td>';
								ordo_data += '<td>' + value.aSize + '</td>';
			                   ordo_data += '<td>' + value.aDate + '</td>';
		 	                   ordo_data += '<td><a href="' + value.aNote +'" download target="_blank"><img class="img-fluid" src="img/body/icons/txt.png" height="25" width="25" alt=""></a></td>';
					   ordo_data += '</tr>';
					});
					$('#ordo2_table').append(ordo_data);
					});
			 });
			 </script>
			 
					 
                  </ul>
				  
</p>


				  
				  
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Screen</button>
                </div>
          </br>
             <div class="column">
               <img class="center" src="img/body/support/inserm_orphanet_modals.png" alt="" >
             </div>
		<br>
	     <div class="column">
		Orphanet is part of the Gene Curation Coalition, a global effort to harmonise gene-level resources.<br><br>
		<a href="https://thegencc.org/" target="_blank"><img class="img-fluid" src="img/body/support/The_GenCC_Home_Page.png" height="50" width="150" alt=""></a>
             </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- HOOM -->
    <div class="portfolio-modal modal fade" id="hoommodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">HPO - ORDO Ontological Module<br></h2>

		  
                  <p class="item-intro text-muted" align="justify">
Orphanet provides phenotypic annotations of the rare diseases in the Orphanet nomenclature using the Human Phenotype Ontology (HPO). HOOM is a module that qualifies the annotation between a clinical entity and phenotypic abnormalities according to a frequency and by integrating the notion of diagnostic criterion. In ORDO a clinical entity is either a group of rare disorders, a rare disorder or a subtype of disorder. The &#34;Clinical Entity&#34; branch of ORDO has been refactored as a logical import of HPO, and the HPO-ORDO phenotype disease-annotations have been provided in a series of triples in OBAN format in which associations, frequency and provenance are modeled.

HOOM is provided as an OWL (Ontologies Web Languages) file, using OBAN, the Orphanet Rare Disease Ontology (ORDO), and HPO ontological models.

HOOM provides extra possibilities for researchers, pharmaceutical companies and others wishing to co-analyse rare and common disease phenotype associations, or re-use the integrated ontologies in genomic variants repositories or match-making tools.
	  <br><br>
	  A document describing HOOM is <a href="img/PDF/WhatIsHOOM.pdf" target="_blank">available</a> for consultation.
	  <br>
	  These products have been recognised as an <a href="https://www.elixir-europe.org/platforms/data/core-data-resources" target="_blank">Elixir Core Data Resource</a>&nbsp;&nbsp;<img class="img-fluid" src="img/body/icons/Logo_CDR-mini.png" alt=""> 

<p><br>





<!-- OLD VERSION

	
          <div class="container">
            <div class="table-responsive">
              
              <table class="table table-hover" id="ordo_table">
                <tr>
                  <th>Site</th>
                  <th>Link</th>
                  <th>Type</th>
                  <th>Date</th>
                </tr>

                <tr>
                <td>EBI Ontologies Lookup Service</td>
                      <td><a href="https://www.ebi.ac.uk/ols/ontologies/" target="_blank">in progress</td>
                <td>in progress</td>
                <td> - </td>
                </tr>
                
		
		<tr>
                <td>Orphadata</td>
                      <td><a href="http://www.orphadata.org/data/HOOM/hoom_orphanet.zip" target="_blank">HOOM v1.2</td>
                <td>OWL/RDF (zip)</td>
                <td> 31 May 2019 </td>
                </tr>
                

		<tr>
                <td>Orphadata</td>
                      <td><a href="http://www.orphadata.org/data/HOOM/release_notes_v1.1_v1.2.txt" target="_blank">Release Notes</td>
                <td>TXT file</td>
                <td> 31 May 2019 </td>
                </tr>                


              </table>
            </div>
          </div>

<br><br>

  HPO & ORDO Ontological Module (HOOM) versions
          <div class="container">
            <div class="table-responsive">
              
              <table class="table table-hover" id="ordo_table">
                <tr>
                  <th>Site</th>
                  <th>Link</th>
                  <th>Type</th>
                  <th>Date</th>
                </tr>

                <tr>
                <td>Orphadata</td>
                      <td><a href="http://www.orphadata.org/data/HOOM/hoom_orphanet_1.1.zip" target="_blank">HOOM v1.1</td>
                <td>OWL/RDF (zip)</td>
                <td> 01 December 2018 </td>
                </tr>


                <tr>
                <td>Orphadata</td>
                      <td><a href="http://www.orphadata.org/data/HOOM/hoom_orphanet_1.0.zip" target="_blank">HOOM v1.0</td>
                <td>OWL/RDF (zip)</td>
                <td> 08 March 2018 </td>
                </tr>              


              </table>
            </div>
          </div>

-->






  HPO & ORDO Ontological Module (HOOM) versions
          <div class="container">
            <div class="table-responsive">

              <table class="table table-hover" id="hoom_table">
                <tr>
                  <th>Version</th>
                  <th>Link</th>
                  <th>Size</th>
                  <th>Date</th>
		  <th>Release Notes</th>
                </tr>

              </table>
            </div>
          </div>


                        <script>
                         $(document).ready(function(){
                                $.getJSON("HOOM.json",function(data){
                                        var hoom_data = '';
                                        $.each(data, function(key,value){
                                           hoom_data += '<tr>';
                                           hoom_data += '<td>' + value.aVersionhoom + '</td>';
                                           hoom_data += '<td><a href="' + value.hoomURL +'" download target="_blank"><img class="img-fluid" src="img/body/icons/owl.png" height="20" width="20" alt=""></a></td>';
					   hoom_data += '<td>' + value.aSize + '</td>';
                                           hoom_data += '<td>' + value.aDate + '</td>';
                                           hoom_data += '<td><a href="' + value.aNote +'" download target="_blank"><img class="img-fluid" src="img/body/icons/txt.png" height="25" width="25" alt=""></a></td>';
                                           hoom_data += '</tr>';
                                        });
                                        $('#hoom_table').append(hoom_data);
                                        });
                         });
                         </script>

<br>





          <div class="container">
            <div class="table-responsive">

              <table class="table table-hover" id="ordo_table">
                <tr>
                  <th>Site</th>
                  <th>Link</th>
                  <th>Type</th>
                  <th>Date</th>
                </tr>

                <tr>
                <td>Bioportal</td>
                      <td><a href="http://bioportal.bioontology.org/ontologies/HOOM" target="_blank">http://bioportal.bioontology.org/ontologies/HOOM</td>
                <td>OWL</td>
                <td>31 May 2019</td>
                </tr>

              </table>
            </div>
          </div>



<br><br>







          
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Screen</button>
                </div>
             
          </br>
             <div class="column">
               <img class="center" src="img/body/support/inserm_orphanet_modals.png" alt="" >
             </div>
 

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>








    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

	<!-- Scripts for Tables -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!--Start Cookie Script-->
<script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/cd11d6f1b758de348b5f6181e6c8e352.js"></script>
<!--End Cookie Script-->
	
	
  </body>

</html>
EOT;
?>
