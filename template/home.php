<header class="jumbotron">
  <div class="container">
    <div class="row row-header">
      <div class="col-xs-12 col-sm-8">
        <h1><div id="name"> Diogo Mesquita</div></h1>
        <p style="padding:5px;"></p>
        <p><small>Computer Science student @IST Lisbon</small></p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div id="my_image"><img src="img/dim.png" width="120" height="120"></div>
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
            <span class="visible-xs navbar-brand">Sidebar menu</span>
          </div>
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <ul class="nav navbar-nav">
              <li id="about_button"><a role="button" href="#aboutMe" data-toggle="collapse" aria-controls="aboutMe" aria-expanded="true">About</a></li>
              <li><a id="act_button" role="button" href="#activities" data-toggle="collapse" aria-contrlos="activities" aria-expanded="false">Current activities</a></li>
              <li><a id="proj_button" role="button" href="#projects" data-toggle="collapse" aria-controls="projects" aria-expanded="false">Projects</a></li>
              <li><a id="past_button" role="button" href="#past" data-toggle="collapse" aria-controls="past" aria-expanded="false">Past</a></li>
              <li><a id="other_button" role="button" href="#other" data-toggle="collapse" aria-controls="other" aria-expanded="false">Other</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="row row-content">
        <div class="col-xs-12 col-sm-9 col-sm-push-2">
          <div class="collapse in sections" id="aboutMe">
            <h2>About Me</h2>
            <div class="longTextFont"><?=$about?></div>
          </div>
          <div class="collapse sections" id="activities">
            <h2>Current Activities</h2>
            <div class="longTextFont"><?=$activities?></div>
          </div>
          <div class="collapse sections" id="projects">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="neuralNetwork">
                    <h3 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#neuralnet" aria-expanded="false" aria-controls="neuralnet">
                          Multi-purpose ANN <small>Applied in digit recognition</small>
                        </a>
                    </h3>
                </div>
                <div role="tabpanel" class="panel-collapse collapse" id="neuralnet" aria-labelledby="neuralNetwork">
                    <div class="panel-body">
                        <p> Whaaaat</p>
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="plataformaJuni">
                    <h3 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#plataforma" aria-expanded="false" aria-controls="plataforma">
                          3D Printing Platform <small>Junitec project</small>
                        </a>
                    </h3>
                </div>
                <div role="tabpanel" class="panel-collapse collapse" id="plataforma" aria-labelledby="plataformaJuni">
                    <div class="panel-body">
                        <p> Whaaaat</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="collapse sections" id="past">
            <h2>Past</h2>
            <div class="longTextFont"><?=$past?></div>
          </div>
          <div class="collapse sections" id="other">
            <h2>Other Interests</h2>
            <div class="longTextFont"><?=$other?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    