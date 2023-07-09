<header class="bgImage">
    <nav class="navbar" style="background:red !important;">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php
               # require_once 'utils/functions.php';
                echo '<a href = "index.php">
                    Event Management Systems
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php
                //links to database contents. *if logged in
              /*  if(is_logged_in()){
                    require_once 'utils/functions.php';
                    echo '<li><a href = "index.php">Home</a></li>';
                   # echo '<li><a href = "viewEvents.php">View Events</a></li>';
                   # echo '<li><a href = "contact.php">Contact Us</a></li>';
                   echo '<li class="btn btn-primary"><a class = "btn btn-primary" href = "logout.php">Logout</a></li>';
                   # echo '<li><a href = "viewLocations.php">Our Locations</a></li>';
                }*/
                //links non database contents. *if logged out
                
                    echo '<li><a href = "index.php">Home</a></li>';
                   # echo '<li><a href = "events2.php"View>See Events</a></li>';
                  #  echo '<li><a href = "locations2.php">Our Locations</a></li>';
                    echo '<li><a href = "User_login.php">Login</a></li>';
                   # echo '<button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "">Login</button>';
                
                ?>

                
                                    </div>
                                </div><!--modal body div-->
                            </div><!--row div-->
                            <div class="modal-footer"><!--modal footer-->
                            
                            </div><!--modal footer div-->
                        </div><!--modal content div-->
                    </div><!--modal dialog div-->
                </div><!--modal div-->
            </ul>
        </div><!--container div-->
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron" style="color:black;"><!--jumbotron-->
                <h1>We host the best events for you across India in any city with proper management</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                  Controlling chaos is what event management is all about. There’s  a lot to manage with conferences, marketing events, and similar productions. Fortunately, today’s best event management processes help you with every aspect of your event journey.
                </p>
            </div>
        </div>
    </div>
</header>
