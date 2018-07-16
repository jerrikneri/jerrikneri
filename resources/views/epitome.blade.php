<head>
    <meta charset="utf-8">
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
		<link href='https://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'>
    <title> My Portfolio </title>
    <style>
      * {
      font-family: 'Lato', sans-serif;
      }
      body {
        color: #2d3c49;
        font-weight: 300;
      }
      .text-muted {
        color: #7d97ad;
      }
      .text-thin {
        font-weight: 100;
      }
      .title-super {
        font-size: 60px;
      }
      .title-picture {
        margin-top: 50px;
        height: 200px;
        width: 200px;
        border-radius: 50%;
      }
      .portfolio-main {
        width: 1150px;
        height: 350px;
      }
      .project-picture {
        width: 350px;
        height: 200px;
      }
      .title-text {
        margin-top: 40px;
      }
      hr {
        border: none;
        height: 5px;
        background-color: #7d97ad;
      }
      h3 {
        color: #2d3c49;
      }



      /* Responsive CSS document with media queries.
        Breakpoints @650px and @ 1000px */


      @media only screen and (max-width: 650px) {
        .container {
          max-width: 100%;
          margin: 0 auto;
        }
        .title-logo {
          margin: auto;
          margin-top: 20px;
          height: 50px;
          width: 50px;
        }
        .title-text {
          text-align: center;
        }
        .project-picture {
          margin: 0 auto;
        }
        .center-text {
          text-align: center;
        }
      }


      @media only screen and (max-width: 1000px) and (min-width: 651px) {
        .container {
          max-width: 100%;
          margin: 0 auto;
        }
        .title-logo {
          height: 75px;
          width: 75px;
          float: left;
        }
        .title-text {
          text-align: right;
        }
        .project-picture {
          margin: 0 auto;
        }
        .center-text {
          text-align: center;
        }
        .half {
          max-width: 100%;
        }
        .section-flex {
          display: flex;
          flex-flow: row wrap;	
        }
        .proj1 {
          width: 50%;
          order: -1;
        }
        .proj2 {
          width: 100%;
          order: 1;
        }
        .proj3 {
          width: 50%;
        }

      }
    </style>
</head>@extends('base')

@section('epitomeContent')
  <div class="content">
    <div class="links">
      <a href="https://www.linkedin.com/in/jerrik-neri">LinkedIn</a>
    </div>


<!-- JERRIK NERI -->


<!-- Portfolio -->
	

			<!-- Header: Logo, Name, and Role -->
			<div class="container">
				<header class="row">
					<div class="col-md-6 half">
						<img class="img-responsive title-picture" src="http://placehold.it/200x200" alt="Place holder face">
					</div>
					<div class="col-md-6 text-right text-uppercase title-text half">
						<h1 class="text-thin title-super">Jerrik Neri</h1>
            <br>
						<h4>Self taught Front End Web Developer</h4>
            
       
					</div>
				</header>

				<!-- Horizontal Rule across -->
				<div class="row">
					<hr>
				</div>
        
        <div class="container">
          <div class="row">
          <h5> <h5>I am a self-taught Front-End Web Developer who has been diving head first into all of the readily available resources to acquire the tools and skillsets required in this industry. Over the past couple of years, I have taken Computer Programming / Engineering classes at UCSD, Udacity, and Free Code Camp to absorb as many skills and perspectives as I can, to effectively utilize them as I begin to step foot into a Front End Web Development career.

From a young age, I have always been highly passionate about computers and technology, and I hope to bring into this industry the same passion, dedication, and discipline that I have learned in traversing the path to becoming​ a better programmer.<h5></h5>
          </div>
        </div>
				
				<!-- Main picture in middle of portfolio -->
				<section class="row">
					<div class="col-md-12">
						<!-- <img class="img-responsive portfolio-main" src="images/mountainpan.jpg" srcset="images/mountain_medium.jpg 1034w, images/mountain_small.jpg 718w" alt="Main middle picture"> -->
						<!-- Picture element to determin which image size to use based on width viewed. -->
						<picture>
							<source media="(max-width: 650px)" srcset="images/mountain_small.jpg" />
							<source media="(max-width: 1000px)" srcset="images/mountain_medium.jpg" />
							<img class="img-responsive portfolio-main" src="images/mountainpan.jpg" alt="Main middle picture">
						</picture>
					</div>
				</section>
				
				<!-- Featured Work section, selectable projects with modals for more info. -->
				<div class="row">
					<div class="col-md-12 center-text">
						<h2 class="text-muted">Featured Work</h2>
					</div>
				</div>

				<!-- Grid lay out of all projects to be displayed in portfolio -->
				<section class="row section-flex text-center">
					<section class="col-md-4 proj1">
						<img class="img-responsive project-picture" src="images/downtownSD.jpg" alt="Appify" data-toggle="modal" data-target="#project1">
						<h3>Interactive Resume</h3>
						<p>https://github.com/jerrikneri/interactive_resume</p>
					</section>
					<section class="col-md-4 proj2">
						<img class="img-responsive project-picture" src="images/NBAgame.jpg" alt="Sunflower" data-toggle="modal" data-target="#project2">
						<h3>Movie Website</h3>
						<p>https://github.com/jerrikneri/movie_website</p>
					</section>
					<section class="col-md-4 proj3">
						<img class="img-responsive project-picture" src="images/husky.jpg" alt="Bokeh" data-toggle="modal" data-target="#project3">
						<h3>Code Your Own Quiz</h3>
						<p>https://github.com/jerrikneri/quiz</p>
					</section>
				</section>
			</div>

			<!-- Modal for Project 1 -->
		    <div class="modal fade" id="project1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <h4 class="modal-title" id="myModalLabel">Interactive Resume</h4>
		                </div>
		                <div class="modal-body">
		                    <img class="img-responsive" src="images/downtownSD.jpg" alt="Project 1 Image">
		                    Using jQuery, developed an interactive resume application that reads all data from a JSON file and then dynamically modifies the DOM to display the information. Further customized the project by personalizing the design using CSS.
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		    <!-- Modal for Project 2 -->
		    <div class="modal fade" id="project2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <h4 class="modal-title" id="myModalLabel">Movie Website</h4>
		                </div>
		                <div class="modal-body">
		                    <img class="img-responsive" src="images/NBAgame.jpg" alt="Project 2 Image">
		                    Created a simple movie website with images and trailers, this project demonstrates knowledge of Object Oriented Programming.
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
			<!-- Modal for Project 3 -->
		    <div class="modal fade" id="project3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <h4 class="modal-title" id="myModalLabel">Code Your Own Quiz</h4>
		                </div>
		                <div class="modal-body">
		                    <img class="img-responsive" src="images/husky.jpg" alt="Project 3 Image">
		                    Built a fill-in-the blanks type quiz to leverage the power of functions in Python and mastered the ability to automate repetitive tasks that can be done on a computer.
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                </div>
		            </div>
		        </div>
		    </div>

          <div class="row">
            <hr>
          </div>
          <div class="container">
            <div class="row text-center">
              <h4>Contact Me</h4>
            </div>
          </div>

  </div>
@endsection

