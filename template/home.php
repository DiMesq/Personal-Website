<header class="jumbotron">
  <div class="container">
    <div class="row row-header center">
      <div class="col-xs-12">
        <div id="header">
          <h1><div id="name"> Diogo Mesquita</div></h1>
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div id="social">
                <p><small>Computer Science student @IST Lisbon</small></p>
                <div class="row">
                  <div class="col-xs-12">
                    <ul>
                      <li><a href="mailto:d.mesquita285@gmail.com" target="_blank"><i class="fa fa-envelope fa-lg"></i></a></li>
                      <li><a href="https://github.com/DiMesq" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>
                      <li><a href="https://www.facebook.com/diogo.mesquita.31" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2"></div>
          </div>
        </div>
        <!--<div class="col-xs-12 col-sm-4">
          <div id="my_image"><img src="img/dim.png" width="120" height="120"></div>
        </div>-->
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="sidebar-nav">
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span class="visible-xs navbar-brand">Menu</span>
          </div>
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav">
              <li id="about_button"><a role="button" href="#aboutMe" data-toggle="collapse" aria-controls="aboutMe" aria-expanded="true">About Me</a></li>
              <li><a id="act_button" role="button" href="#activities" data-toggle="collapse" aria-contrlos="activities" aria-expanded="false">Current Activities</a></li>
              <li><a id="past_button" role="button" href="#past" data-toggle="collapse" aria-controls="past" aria-expanded="false">Past Experience</a></li>
              <li><a id="proj_button" role="button" href="#projects" data-toggle="collapse" aria-controls="projects" aria-expanded="false">Projects</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      <div id="resume_button">
        <a href="pdfs/DiogoMesquitaCV.pdf" class="my-btn-shape my-btn" role="button" target="_blank"><i class="fa fa-download"></i> Resume</a>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="row row-content">
        <div class="col-xs-12 col-sm-9 col-sm-push-2">
          <div class="collapse in sections" id="aboutMe">
            <h2>About Me</h2>
            <div class="longTextFont justifyText"><p><?=$about?></p></div>
          </div>
          <div class="collapse sections" id="activities">
            <h2>Current Activities</h2>
            <div class="longTextFont justifyText"><p><?=$activities?></p></div>
          </div>
          <div class="collapse sections" id="projects">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="plataformaJuni">
                    <h3 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#plataforma" aria-expanded="false" aria-controls="plataforma">
                          3D Printing Platform <small>Junitec project</small>
                        </a>
                    </h3>
                </div>
                <div role="tabpanel" class="panel-collapse collapse" id="plataforma" aria-labelledby="plataformaJuni">
                    <div class="panel-body longTextFont">
                        <p>I am part of a team developing this web application for 3D printing as a service.</p>
                        <p>This is a <a href="http://junitec.ist.utl.pt/" target="_blank">Junitec</a> project and it is really close to being released.</p>
                        <p><a href="http://51.254.215.163" target="_blank">Here</a> you can take a peek at the current version.</p>

                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="neuralNetwork">
                    <h3 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#neuralnet" aria-expanded="false" aria-controls="neuralnet">
                          General-purpose Artificial Neural Network <small>Applied in digit recognition</small>
                        </a>
                    </h3>
                </div>
                <div role="tabpanel" class="panel-collapse collapse" id="neuralnet" aria-labelledby="neuralNetwork">
                    <div class="panel-body longTextFont">
                        <p> A general-purposed Neural Network written from scratch.</p> 
                            <p>I applied it to the Kaggle's <a href="https://www.kaggle.com/c/digit-recognizer" target="_blank">Digit Recognizer Competition</a>. 
                            You can check the code <a href="https://github.com/DiMesq/DigitRecognizer_kaggle" target="_blank">here</a>.</p>
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="documentText">
                    <h3 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#documentApp" aria-expanded="false" aria-controls="documentApp">
                          Text Document App <small>Local application</small>
                        </a>
                    </h3>
                </div>
                <div role="tabpanel" class="panel-collapse collapse" id="documentApp" aria-labelledby="documentText">
                    <div class="panel-body longTextFont">
                        <p>This app allows you to create, edit and manage text Documents.</p> 
                        <p>This was a course project for the Object-Oriented Programming class.</p>
                        <p>You can find more about it <a href="https://github.com/DiMesq/Projeto-PO" target="_blank">here</a>.</p>
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="noteBookApp">
                    <h3 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#noteBook" aria-expanded="false" aria-controls="noteBook">
                          Note Book App <small>Web based application</small>
                        </a>
                    </h3>
                </div>
                <div role="tabpanel" class="panel-collapse collapse" id="noteBook" aria-labelledby="noteBookApp">
                    <div class="panel-body longTextFont">
                        <p>In this note taking app each Note that you take follows a certain Type created by you.
                            This means that every Note of the same theme will have the same structure.</p> 
                        <p>This app was part of the final project for the Databases class.</p>
                        <p>Find out more about this project <a href="https://github.com/DiMesq/BD-PROJETO" target="_blank">here</a>.</p>
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="ticTacToe">
                    <h3 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tic" aria-expanded="false" aria-controls="tic">
                          Tic Tac Toe: Human vs CPU <small>Local application</small>
                        </a>
                    </h3>
                </div>
                <div role="tabpanel" class="panel-collapse collapse" id="tic" aria-labelledby="ticTacToe">
                    <div class="panel-body longTextFont">
                        <p>A user plays Tic Tac Toe against a Tic Tac Toe playing agent.</p> 
                        <p>Find out more about this project <a href="https://github.com/DiMesq/AI-TicTacToe" target="_blank">here</a>.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="collapse sections" id="past">
            <h2>Past Experience</h2>
            <div class="longTextFont justifyText"><p><?=$past?></p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    