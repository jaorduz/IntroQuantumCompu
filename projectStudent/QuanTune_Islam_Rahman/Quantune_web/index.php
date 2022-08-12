<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantune</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" /> 
    <link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/buttons.css">
<!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
</head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="cd-slider-nav">
              <nav class="navbar navbar-expand-lg" id="tm-nav">
                <a class="navbar-brand" href="#">Quantune</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-supported-content">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item selected">
                        <a class="nav-link" aria-current="page" href="#0" data-no="1">Home</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="2">Music Gallery</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="3">Implementation</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="4">Contact</a>
                        <div class="circle"></div>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
          </div>          
        </div>        
      </div>      
      <div class="container-fluid tm-content-container">
        <ul class="cd-hero-slider mb-0 py-5">
          <li class="px-3" data-page-no="1">
            <div class="page-width-1 page-left">
              <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                <div class="intro-left tm-bg-dark">
                  <h2 class="mb-4">Welcome to Quantune</h2> 
                  <p class="mb-4">
                    Music helps our health and well-being, which eventually impacts our daily life. Researchers did many beneficial analyses to compose and generate tunes using classical computation. However, the quantum method for doing so is less. So let's walk through the quantum way of generating music. </p>
                </div>
                <div class="intro-right">
                  <img src="img/home-lat-1.jpg" alt="Image" class="img-fluid intro-img-1">
                  <img src="img/home-lat-2.jpg" alt="Image" class="img-fluid intro-img-2">
                </div>
                <div class="circle intro-circle-1"></div>
                <div class="circle intro-circle-2"></div>
                <div class="circle intro-circle-3"></div>
                <div class="circle intro-circle-4"></div>
              </div>
              <div class="text-center">
                <a href="#0" data-page-no="2" class="btn btn-primary tm-intro-btn tm-page-link">
                  View Music Gallery
                </a>
              </div>            
            </div>            
          </li>
          <li data-page-no="2">
            <!-- Image Carousel -->
            <div class="mx-auto position-relative gallery-container">
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="mx-auto tm-border-top gallery-slider">
                <figure class="effect-julia item">
                    <img src="img/qpos.jpg" alt="Image">
                    <figcaption>
                        <div class="play-button-outer">
							Quantum Music Sample 1 using superposition
							<div  id="b1" class="play-button" onclick="playNote(0)"></div>
						</div>
                        
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/qpos.jpg" alt="Image">
                    <figcaption>
                        <div class="play-button-outer">
							Quantum Music Sample 2 using superposition
							<div  id="b2"  class="play-button" onclick="playNote(0)"></div>
						</div>
                        
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/qpos.jpg" alt="Image">
                    <figcaption>
                        <div class="play-button-outer">
							Quantum Music Sample 3 using superposition
							<div  id="b3"  class="play-button" onclick="playNote(2)"></div>
						</div>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/qwalk.png" alt="Image">
                    <figcaption>
                        <div class="play-button-outer">
							Quantum Music Sample 4 using random walk
							<div  id="b4"  class="play-button" onclick="playmyfile('1')"></div>
						</div>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/qwalk.png" alt="Image">
                    <figcaption>
						
                        <div class="play-button-outer">
							Quantum Music Sample 5 using random walk
							<div  id="b5"  class="play-button" onclick="playmyfile('2')"></div>
						</div>
                    </figcaption>
                </figure>
				<!--
                <figure class="effect-julia item">
                    <img src="img/gallery-img-06.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>Julia dances in the deep dark</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/gallery-img-07.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>Julia dances in the deep dark</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/gallery-img-08.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>Julia dances in the deep dark</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/gallery-img-09.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>Julia dances in the deep dark</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
				
				-->
              </div>
            </div>
          </li>
          <li data-page-no="3" class="px-3">
            <div class="mx-auto position-relative gallery-container">
            <div class="circle intro-circle-1"></div>
                 <div class="circle intro-circle-2"></div>
             <div>
              <p align="justify">In this project, the two notes were first superimposed to create the frequency of the notes. This was only done with the developed quantum music for experimental purposes. The random walk approach was then used to create the frequency of the notes and rhythms. Finally, we created the midi file utilizing these frequencies. The following quantum circuit was utilized to create music using the frequencies of notes and rhythms.
			  Public project information and source code are accessible on <a href="https://github.com/agmislam1/IntroQuantumCompu/tree/qtune_islam_rahman/projectStudent/QuanTune_Islam_Rahman">github.</a>
			  </p>
              

              <div class="image123">
                <div class="imgContainer">
                  <img src="img/ckt.png" style="margin-top: 30px; margin-left: 190px;">
                  <div class="caption" style="text-align:center; margin-left: 10px; margin-top: 10px">Figure 5: Quantum circuit for our implementation</div>
                </div>
              </div>

            </div>

          </div>

          </li>
          <li data-page-no="4">
            <div class="mx-auto page-width-2">
              <div class="row">
                <div class="col-md-6 me-0 ms-auto">
                  <h2 class="mb-4">Contact Us</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 tm-contact-left">
                  <div class="image123">
                  <div class="imgContainer">
                    <img src="img/him.jpg" style="margin-left:40px; width: 170px; height: 180px;">
                    <div class="caption" style=" margin-top: 10px; text-align: justify;">Md Shahidur Rahaman is a gradute PhD student in Computer Science Department at Baylor University. His Primary Research interest is Software Engineering along with Natural Language Processing(NLP), and Quantum Computing. Currently he is doing research on the topic of Security Aspect of Microservice Architecture. Shahidur has 5 years of experience in software engineering in several organizations of Bangladesh and Germany</div>
                    <a href="mdshahidur_rahaman1@baylor.edu" style="font-size: 14px;"> Email: mdshahidur_rahaman1@baylor.edu</a>
                  </div>
                </div>
                </div>
                <div class="col-md-4 tm-contact-left">
                  <div class="image123">
                  <div class="imgContainer">
                    <img src="img/saad.jpg" style="margin-left:40px; width: 170px; height: 180px;">
                    <div class="caption" style=" margin-top: 10px; text-align: justify;">Agm Islam is a gradute student in Computer Science Department at Baylor University. His Primary Research interest is Cloud Computing. Currently he is doing research on the topic of converting sequential program to parallel program. Islam has a decade-long experience in the software industry.</div>
                    <a href="agm_islam1@baylor.edu" style="font-size: 14px;"> Email: agm_islam1@baylor.edu</a>
                  </div>
                </div>
                </div>
                <div class="col-md-4 tm-contact-right">                  
                  <div class="image123">
                  <div class="imgContainer">
                    <img src="img/jo.jpg" style="margin-left:40px; width: 170px; height: 180px;">
                    <div class="caption" style=" margin-top: 10px; text-align: justify;">Dr. Javier Orduz is a Research Scholar and instructor of Computer Science at Baylor University in Texas. He worked in UNAM (Mexico) for five years as a Postdoctoral and Associate Professor before arriving in the USA and work with Dr. Erich Baker and Dr. Pablo Rivas. He has has experience teaching and researching Quantum Machine Learning, Quantum Computing, Machine Learning, and High Energy Physics. Dr. Orduz loves Mathematics, Physics, and Computing, and he promotes science in Latin America with a high interest in technology.</div>
                    <a href="javier_orduzducuara@baylor.edu" style="font-size: 14px;"> Email: javier_orduzducuara@baylor.edu</a>
                  </div>
                </div>
                </div>
              </div>
            </div>            
          </li>
        </ul>
    </div>
    <div class="container-fluid">
      <footer class="row mx-auto tm-footer">
        <div class="col-md-6 px-0">
          
        </div>
        <div class="col-md-6 px-0 tm-footer-right">
          Quantune
        </div>
      </footer>
    </div>
  </div>
  <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
  <div id="loader-wrapper">            
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>  
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/templatemo-script.js"></script>
  <script src="js/playtune.js"></script>
</body>
</html>