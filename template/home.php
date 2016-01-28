<header class="jumbotron">
  <div class="container">
    <div class="row row-header">
      <div class="col-xs-12 col-sm-8">
        <h1>Diogo Mesquita</h1>
        <p style="padding:10px;"></p>
        <p>Computer Science student</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div><img src="img/dim.png"></div>
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
              <li class="active"><a role="button" href="#aboutMe" data-toggle="collapse" aria-controls="aboutMe" aria-expanded="true">About</a></li>
              <li><a role="button" href="#activities" data-toggle="collapse" aria-contrlos="activities" aria-expanded="false">Current activities</a></li>
              <li><a role="button" href="#projects" data-toggle="collapse" aria-controls="projects" aria-expanded="false">Projects</a></li>
              <li><a role="button" href="#past"data-toggle="collapse" aria-controls="projects" aria-expanded="false">Past</a></li>
              <li><a role="button" href="#other" data-toggle="collapse" aria-controls="projects" aria-expanded="false">Other</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="row row-content">
        <div class="col-xs-12 col-sm-9 col-sm-push-2">
          <div class="collapse in" id="aboutMe">
            <h2>About Me</h2>
            <div class="longTextFont"><?=$about?></div>
          </div>
          <div class="collapse" id="activities">
            <h2>Current Activities</h2>
            <div class="longTextFont"><?=$activities?></div>
          </div>
          <div class="collapse" id="projects">
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
          <div class="collapse" id="past">
            <h2>Past</h2>
            <div class="longTextFont"><?=$past?></div>
          </div>
          <div class="collapse" id="other">
            <h2>Other</h2>
            <div class="longTextFont"><?=$other?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/collapse_from_navbar.js"></script>

    