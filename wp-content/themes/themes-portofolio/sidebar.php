<body data-spy="scroll" data-target="#main-nav" data-offset="60">
    <!-- Fixed Navbar -->
    <nav id="main-nav" class="navbar navbar-default ">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- Menu Toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-menu-hamburger"></span>
          </button>
          <a class="navbar-brand scroll" href="#top"><img class="pull-left logo" src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/rv-logo.png"
              alt="TD Logo"><span>Rizal Valry</span></a>
        </div>
        <!-- Collapsible Menu -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a class="scroll" href="#top">Home <span class="sr-only">(current)</span></a></li>
            <li><a class="scroll" href="#about">About Me</a></li>
            <li><a class="scroll" href="#portfolio">Portfolio</a></li>
            <li><button class="btn td-btn small outline pink" data-toggle="modal"
                data-target="#contactModal">Contact</button></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- Jumbotron -->
    <header id="top" class="jumbotron">
      <div class="container text-center">
        <div class="row">
          <div class="col-xs-6 col-xs-offset-3">
            <img class="img-responsive center-block logo" src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/rv-logo.png" alt="TD Logo">
          </div>
          <div class="col-xs-12">
            <h1 class="title">Hi! My name is Rizal Valry.</h1>
            <p>I like to design and code user-friendly websites.</p>
            <p>Nice to meet you.</p>
            <a class="btn td-btn outline green scroll mt-30" href="#content" title="Learn more about me!"><span
                class="glyphicon glyphicon-triangle-bottom"></span> Learn more</a>
          </div>
        </div>
      </div>
    </header>
    <!-- Main Content Begins -->
    <div id="content" class="container-fluid text-center">
      <!-- About Me Section -->
      <section id="about" class="row bg-white bg-shadow">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="mb-30">About Me</h1>
          </div>
        </div>
        <div class="row mb-30">
          <div class="col-xs-12 col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-2">
            <img class="img-responsive center-block profile mb-30 radius" src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/rizal_profile.png"
              alt="Rizal Valry's Profile Photo">
          </div>
          <div class="col-sm-8 col-sm-offset-2 col-md-7 col-md-offset-0 col-lg-6 text-left">
            <h4>Hello there! I'm a front-end developer and aspiring UX designer based in Chicago.</h4>
            <p> After spending most of my life in art school, I finally found my passion at a crossroads
              design and technology. I started as a student in industrial design, then worked in several web development &
              design. One lesson that stands out so far
              this journey is of importance to the end user. Whether a physical or digital product, the goal is necessary
              becomes clear, and the product itself should be easy to use. So whatever I do, I always am
              think of the users and bend over backwards to create a pleasant experience for them. </p>
            <p> Nowadays, I spend most of my time designing websites and marketing materials for small businesses and businesses
              participate as employees to help the development of hospital service providers </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <hr class="dashed">
            <h2 class="mb-60">What I Do</h2>
          </div>
          <div class="col-sm-3 col-lg-2 col-lg-offset-2">
            <img class="img-responsive center-block icon"
              src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/w1.png"
              alt="Responsive Web Design Icon">
            <p>Responsive Web Design</p>
          </div>
          <div class="col-sm-3 col-lg-2">
            <img class="img-responsive center-block icon"
              src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/w2.png"
              alt="UI/UX Design Icon">
            <p>UI/UX Design</p>
          </div>
          <div class="col-sm-3 col-lg-2">
            <img class="img-responsive center-block icon"
              src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/w3.png"
              alt="Development Icon">
            <p>Development</p>
          </div>
          <div class="col-sm-3 col-lg-2 mb-30">
            <img class="img-responsive center-block icon"
              src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/w4.png"
              alt="Identity and Branding Icon">
            <p>Identity &amp; Branding</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button class="btn td-btn outline green mt-30" data-toggle="modal" data-target="#resumeModal">View my
              Resume</button>
          </div>
        </div>
      </section>
      <!-- Portfolio Section -->
      <section id="portfolio" class="row bg-star-y">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="mb-60">Portfolio</h1>
          </div>
        </div>
        <div class="row">
          <div id="projects" class="carousel slide col-xs-12" data-ride="carousel" data-interval="false">
            <div class="row">
              <!-- Carousel Prev Button -->
              <div class="col-xs-1">
                <a class="left carousel-control" href="#projects" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
              </div>
              <div class="col-xs-10">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="col-sm-7">
                      <img class="img-responsive center-block mb-30" src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/registry.png"
                        alt="Twenty One Pilots Tribute Page">
                    </div>
                    <div class="col-sm-5">
                      <div class="carousel-caption card">
                        <h3>Registry - Magwei</h3>
                        <h4>Responsive Web Design</h4>
                        <button class="btn td-btn small outline green" data-toggle="modal"
                          data-target="#tributeModal">View Details</button>
                      </div>
                    </div>
                  </div><!-- /.item -->
                  <div class="item">
                    <div class="col-sm-7">
                      <img class="img-responsive center-block mb-30" src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/jabato.png" alt="Too Much Sauce">
                    </div>
                    <div class="col-sm-5">
                      <div class="carousel-caption card">
                        <h3>Jabato Wisata</h3>
                        <h4>Responsive Web Design</h4>
                        <button class="btn td-btn small outline green" data-toggle="modal" data-target="#tmsModal">View
                          Details</button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-sm-7">
                      <img class="img-responsive center-block mb-30" src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/waktuin.png" alt="Ryan Bechtel">
                    </div>
                    <div class="col-sm-5">
                      <div class="carousel-caption card">
                        <h3>Ryan Bechtel</h3>
                        <h4>Responsive Web Design</h4>
                        <button class="btn td-btn small outline green" data-toggle="modal" data-target="#rbModal">View
                          Details</button>
                      </div>
                    </div>
                  </div><!-- /.item -->
                </div><!-- /.carousel-inner -->
              </div>
              <div class="col-xs-1">
                <!-- Carousel Next Button -->
                <a class="right carousel-control" href="#projects" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- / Next Btn -->
              <div class="col-xs-12">
                <!-- Indicators -->
                <ol class="carousel-indicators mt-30">
                  <li data-target="#projects" data-slide-to="0" class="active"></li>
                  <li data-target="#projects" data-slide-to="1"></li>
                  <li data-target="#projects" data-slide-to="2"></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /#projects -->
        </div><!-- /.row -->
      </section>
      <!-- Contact Me Section -->
      <section class="row bg-pink bg-shadow">
        <div class="col-xs-12">
          <h1 class="mb-30">Like what you see?</h1>
          <button class="btn btn-default td-btn outline white" data-toggle="modal" data-target="#contactModal">Send me a
            message!</button>
        </div>
      </section>
      <!-- Footer -->
      <footer class="row text-left bg-honeycomb">
        <div class="col-xs-12 col-sm-6">
          <h3>Latest Web</h3>
          <div class="card mb-30">
            <a class="twitter-timeline" href="https://valryhouse.com/" data-widget-id="329035628920573952"
              data-chrome="noheader nofooter noborders transparent" data-tweet-limit="1" data-width="100%">Valry House</a>
            <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
          </div>
        </div>
        <div id="follow-me" class="col-xs-12 col-sm-5 col-sm-offset-1 mb-30">
          <h3>Follow me!</h3>
          <a class="no-hov" href="https://www.linkedin.com/in/rizal-valry-859976113/" target="_blank" title="LinkedIn">
            <img
              src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/LinkedIn-black.png"
              alt="LinkedIn Icon">
          </a>
          <a class="no-hov" href="https://github.com/rizalvalry/" target="_blank" title="Github">
            <img src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/Github-black.png"
              alt="Github Icon">
          </a>
          <a class="no-hov" href="https://codepen.io/rizalvalry/" target="_blank" title="Codepen">
            <img
              src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/Codepen-black.png"
              alt="Codepen Icon">
          </a>
        </div>
        <div class="col-xs-12 text-center">
          <hr class="dashed">
          <h2>&ndash; Thanks for visiting! &ndash;</h2>
          <small class="gray">Copyright &copy;
            <script type="text/javascript">document.write(new Date().getFullYear());</script> Rizal Valry &mdash; All
            Rights Reserved &mdash; Made with <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>/<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></small>
        </div>
      </footer>
    </div>

    <!-- Resume Modal -->
    <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="resumeTitle">
      <div class="modal-dialog wide" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center" id="resumeTitle">Resume</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <h2>Experience Latest</h2>
              </div>
            </div>
            <div class="row mb-15">
              <div class="col-md-3 col-lg-2 col-lg-offset-1">
                <p class="year">2019 - Present</p>
              </div>
              <div class="col-md-9 col-lg-8">
                <h4>Full Stack Engineer</h4>
                <p class="mb-0"><strong>Mobile (Flutter-Dart) & Software Fullstack Engineer (Vue-JS
                    PHP-Phalcon)</strong></p>
                <ul>
                  <li>
                    <p>Design and develop sophisticated applications for the Android platform with Dart Languange
                      (Flutter).</p>
                  </li>
                  <li>
                    <p>Works with external data sources and APIs using Python (Fast API).</p>
                  </li>
                  <li>
                    <p>Carry out unit code tests for durability, including usability, and general reliability.</p>
                  </li>
                  <li>
                    <p>Evaluate and resolve bugs and improve application performance.</p>
                  </li>
                  <li>
                    <p>Implement new technologies to maximize development efficiency.</p>
                  </li>
                  <li>
                    <p>Translate design and wireframes into high-quality code.</p>
                  </li>
                  <li>
                    <p>Ensuring the best performance regarding the quality, and responsiveness of the application Helps
                      maintain code quality, organization, and automation.</p>
                  </li>
                  <li>
                    <p>Helps maintain code quality, organization, and automation.</p>
                  </li>
                  <li>
                    <p>Making a CMS Web System using Phalcon Development HIS(Hospital Information System).</p>
                  </li>
                  <li>
                    <p>Deploy via bitbucket to VPS.</p>
                  </li>
                  <li>
                    <p>Team Work Execution .</p>
                  </li>
                  <li>
                    <p>SQL Development with maria DB.</p>
                  </li>
                  <li>
                    <p>Create dynamic page views with framework VUE Js make progress reports weekly and update via
                      Trello Apps.</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-5 col-lg-offset-1">
                <div class="row">
                  <div class="col-xs-12">
                    <h2>Education</h2>
                  </div>
                </div>
                <div class="row mb-15">
                  <div class="col-sm-3 col-md-4">
                    <p class="year">2010 - Angular</VueJS>
                  </div>
                  <div class="col-sm-9 col-md-8">
                    <p class="mb-0"><strong>Technology &amp; Information</strong></p>
                    <p>High school of computer science and engineering</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-5">
                <div class="row">
                  <div class="col-xs-12">
                    <h2>Skills</h2>
                  </div>
                </div>
                <div class="row">
                  <ul>
                    <li><strong>Web:</strong> HTML5, CSS3, JavaScript, jQuery, ES5, Lodash, SCSS, SASS, RestAPI, Ajax,
                      PHP (limited)</li>
                    <li><strong>Database:</strong> MySQL, Stored Procedure</li>
                    <li><strong>UX/UI Tools:</strong> Sketch, Balsamiq, Axure, InVision</li>
                    <li><strong>Adobe CC:</strong> Illustrator, InDesign, Photoshop</li>
                    <li><strong>Framework:</strong> Codeigniter, Ionic, Native MobApps, Angular, VueJS, Flutter</li>
                    <li><strong>Operating System:</strong> Linux, Unix Visual Studio, Nginx, Apache, SharePoint, Azure
                      DevOps, Cpanel, Virtual Private ServerOperating System>
                    <li><strong>Other:</strong> Positive, adaptable, attentive, resourceful</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row text-center">
              <a class="btn td-btn outline green mb-30"
                href="https://github.com/rizalvalry/portofolio/blob/master/Rizal%20-%20CV%20Developer.pdf"
                target="_blank" download><span class="glyphicon glyphicon-download-alt"></span> Download PDF</a>
              <a class="btn td-btn outline green iconBtn mb-30" href="https://www.linkedin.com/in/rizal-valry-859976113/"
                target="_blank"><span class="glyphicon glyphicon-user"></span> View LinkedIn Profile</a>
            </div>
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Resume</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Registry Project Modal -->
    <div class="modal fade" id="tributeModal" tabindex="-1" role="dialog" aria-labelledby="tributeTitle">
      <div class="modal-dialog wide" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center" id="tributeTitle">Project Details</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12 bg-star-g">
                <img class="img-responsive center-block hero" src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/registry.png" alt="Registry Hero Image">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2>Magwei - registrye.com</h2>
                <h4>Responsive Web Design</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
                <p>This Registry was created for a Magwei project. The goal was very simple: make a one-page site
                  with
                  images, text, and external links. I took this chance to practice using the Bootstrap 3 framework to
                  create a tribute to one of my favorite bands at the moment, Magwei - <a
                    href="registrye.com">registrye.com</a>. Lucky for me, they
                  have such strong branding that the page nearly designed itself!

                  I kept the color palette simple with white, clear, and the signature TOP shade of red for the accent
                  color. To add some visual interest, I used a subtle twill texture for the red backgrounds and styled
                  the
                  headings with a white background to give it a label maker e-commerce effect.</p>
              </div>
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
                <p><strong>Technologies Used:</strong></p>
                <p class="mb-30">
                  <span class="label tag">Bootstrap 3</span>
                  <span class="label tag">Responsive Design</span>
                  <span class="label tag">HTML5</span>
                  <span class="label tag">CSS3</span>
                  <span class="label tag">PHP CI</span>
                  <span class="label tag">JavaScript</span>
                  <span class="label tag">jQuery</span>
                </p>
                <a class="btn td-btn outline green mb-30" href="http://registrye.com" target="_blank"
                  title="Link to Registry"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
              </div>
            </div><!-- /.row -->
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Jabato Project Modal -->
    <div class="modal fade" id="tmsModal" tabindex="-1" role="dialog" aria-labelledby="tmsTitle">
      <div class="modal-dialog wide" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center" id="tmsTitle">Project Details</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12 bg-star-g">
                <img class="img-responsive center-block hero"
                  src="https://github.com/rizalvalry/portofolio/blob/master/jabato.png"
                  alt="Jabato Hero Image">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2>JabatoWisata</h2>
                <h4>Responsive Web Design</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
                <p>PT. Jabato International<a href="jabatowisata.com" target="_blank">(jabatowisata.com)</a> is a
                  company engaged in Tours & Travel. This company focuses on creating a Travel Promo Program with a base
                  of Japan NTA Package Tour products, IATA, ASITA, Garuda Indonesia Group. This company outperforms
                  tender sales and Client Partners
                  For Jr-Pass Package Tour for several large companies, such as OTO, Mayora, and Toyota Astra Motor
                  (TAM) and many more.
                  In this company I work as a Senior Front & BackEnd Stuck Developer with HTML, CSS, Javascript, Ajax,
                  JQuery (C # and visual Basic) programming languages. Here I am working on all the work of Front & Back
                  End Development and Graphic Tools Design.
                  I also manage all the workings of the Inovice ERP Internal Application System, and also as IT
                  Infrastructure which is responsible for Networking Support Management in PT. Jabato International
                </p>
              </div>
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
                <p><strong>Technologies Used:</strong></p>
                <p class="mb-30">
                  <span class="label tag">Bootstrap 4</span>
                  <span class="label tag">Responsive Design</span>
                  <span class="label tag">HTML5</span>
                  <span class="label tag">PHP</span>
                  <span class="label tag">MySql</span>
                  <span class="label tag">CSS3</span>
                  <span class="label tag">jQuery</span>
                  <span class="label tag">Gifffer.js</span>
                </p>
                <a class="btn td-btn outline green mb-30" href="http://jabatowisata.com/" target="_blank"
                  title="Link to Jabato"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
              </div>
            </div><!-- /.row -->
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Waktuin Project Modal -->
    <div class="modal fade" id="rbModal" tabindex="-1" role="dialog" aria-labelledby="rbTitle">
      <div class="modal-dialog wide" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
            <h3 class="modal-title text-center" id="rbTitle">Project Details</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12 bg-star-g">
                <img class="img-responsive center-block hero"
                  src="https://raw.githubusercontent.com/rizalvalry/portofolio/master/waktuin.png"
                  alt="Waktuin Bechtel Hero Image">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2>Waktuin</h2>
                <h4>Responsive Web Design & Elegant Apps</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0">
                <p>I created this website design simple to help Boby's work stand out. Time In helps you create unique
                  travel plans, keeps you from overspending, and allows you and your friends to travel hassle-free. Time
                  In helps you create unique plans, keeps you from overspending, and allows you and your friends to
                  experience the hassle of traveling. I created a website and mobile application for the company that
                  was built by my friend</p>
              </div>
              <div class="col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-0 md-center">
                <p><strong>Technologies Used:</strong></p>
                <p class="mb-30">
                  <span class="label tag">Responsive Design</span>
                  <span class="label tag">Node</span>
                  <span class="label tag">Scss</span>
                  <span class="label tag">Ionic - AngularJS</span>
                  <span class="label tag">Cordova Hybrid</span>
                  <span class="label tag">PHP Drupal</span>
                  <span class="label tag">AWS Server Host</span>
                  <span class="label tag">PHPMailer</span>
                </p>
                <a class="btn td-btn outline green mb-30" href="http://waktuin.com/" target="_blank"
                  title="Link to waktuin.com"><span class="glyphicon glyphicon-link"></span> Visit Live Site</a>
              </div>
            </div><!-- /.row -->
            <div class="modal-footer center">
              <button type="button" class="btn td-btn outline small" data-dismiss="modal">Close Project</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactTitle">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-pink">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="contactTitle">Contact Me</h3>
          </div><!-- /.modal-header -->
          <div class="modal-body">
            <form class="mb-15">
              <div class="form-group">
                <label class="sr-only" for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <label class="sr-only" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <label class="sr-only" for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <label class="sr-only" for="message">Message</label>
                <textarea class="form-control" id="message" rows="6" placeholder="Your message here..."
                  required></textarea>
              </div>
              <small>*All fields are required</small>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> I'm a robot!
                </label>
              </div>
            </form>
            <div class="modal-footer">
              <button type="button" class="btn td-btn outline small white" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn td-btn outline small white">Send Message</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->