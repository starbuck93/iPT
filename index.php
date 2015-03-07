<?php
    //http://stackoverflow.com/questions/5722990/first-time-visitor-cookie
      //http://stackoverflow.com/questions/3079925/display-welcome-message-to-first-time-visitors
    // Top of the page, before sending out ANY output to the page.
    $user_is_first_timer = !isset( $_COOKIE["FirstTimer"] );

    // Set the cookie so that the message doesn't show again
    setcookie( "FirstTimer", 1, strtotime( '+1 year' ) );

    $name = 0;
    
    if(isset($_COOKIE["username"]))
      $name = $_COOKIE["username"];
    else $name = 0;
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> -->
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="application-name" content="iPT Web App">
    <meta name="apple-mobile-web-app-title" content="iPT Web App">
    <title>iPrimetime Employees</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="dist/css/framework7.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="css/my-app.css">
    <!-- Path to the font awesome-->
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">

    <!--Not sure if these work yet-->
    <link rel="apple-touch-icon" href="img/Icon-60@2x.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/Icon-60@3x.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/Icon-76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/Icon-76@2x.png" />
    <link rel="apple-touch-icon" sizes="58x58" href="img/Icon-Small@2x.png" />
    <link rel="icon" sizes="192x192" href="img/icon2.png"> <!--For Chrome/Android-->

    <link rel="manifest" href="manifest.json"> <!--For Chrome/Android-->
    <meta name="theme-color" content="#0059FF"> <!--For Chrome/Android or use orange here #FFA500-->
    <meta name="apple-mobile-web-app-status-bar-style" content="#0059FF"> <!--For Safari/iOS-->
    <link rel="apple-touch-startup-image" href="img/startup.png"> <!--For Safari/iOS-->

</head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <?php if(!isset($_COOKIE["username"])) { ?>
        <form method="POST" action="username.php">
          <input type="hidden" name="setName" value="true">
          <p>Type in your name here and I'll save it for you for use in the closing procedures.</p>
          <div class="list-block">
            <ul>
              <li>
                <div class="item-content">
                  <div class="item-inner">
                    <div class="item-input">
                      <input type="text" placeholder="Your name" name="username">
                    </div>
                  </div>
                </div>
              </li>         
            </ul>
          </div> 
          <input type="submit" value="Submit" class="button button-big button-fill color-green">
        </form>
        <?php } else { ?>
        <p>Welcome back, <?php print($name);?>. Want to change your username? <br> Too bad.</p>
        <?php } ?>
        <br>
        <span style="display: block !important; width: 180px; text-align: center; font-family: sans-serif; font-size: 12px;"><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:79601.1.99999&bannertypeclick=wu_simplewhite" title="Abilene, Texas Weather Forecast" target="_blank" class="external"><img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_simplewhite&airportcode=KABI&ForcedCity=Abilene&ForcedState=TX&zip=79601&language=EN" alt="Find more about Weather in Abilene, TX" width="160" /></a><br><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:79601.1.99999&bannertypeclick=wu_simplewhite" title="Get latest Weather Forecast updates" style="font-family: sans-serif; font-size: 12px" target="_blank" class="external">Click for weather forecast</a></span>      
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>
          Link to first time page! <a href="#first-time">first time</a>.       
        </p>
      </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar color-orange border-blue">
          <!-- Navbar inner for Index page-->
          <div data-page="index" class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding">PrimeTime Employees</div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
<!-- Navbar inner for Arcade Errors page-->
          <div data-page="errors" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Arcade Error Reporting</div>
          </div>
          <div data-page="ccerrors" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">CC Error Reporting</div>
          </div>
          <div data-page="othererrors" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Misc. Error Reporting</div>
          </div>
<!-- Navbar inner for Arcade Training page-->
          <div data-page="training" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Arcade Training Checklist</div>
          </div>
<!-- Navbar inner for CC Training page-->
          <div data-page="cc-training" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">CC Training Checklist</div>
          </div>
<!-- Navbar inner for Control Counter Closing page-->
          <div data-page="CCclosing" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">CC Closing Procedures</div>
          </div>
<!-- Navbar inner for Control Counter Closing page CCclosing2-->
          <div data-page="CCclosing2" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Need to be done</div>
          </div>
<!-- Navbar inner for Control Counter Closing page CCclosing1-->
          <div data-page="CCclosing1" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Done!</div>
          </div>
<!-- Navbar inner for Arcade Closing page-->
          <div data-page="closing" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Arcade Closing Procedures</div>
          </div>
<!-- Navbar inner for Arcade Closing page arcadeclosing2-->
          <div data-page="arcadeclosing2" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Need to be done</div>
          </div>
<!-- Navbar inner for Arcade Closing page arcadeclosing1-->
          <div data-page="arcadeclosing1" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Done!</div>
          </div>
<!-- Navbar inner for Promos page-->
          <div data-page="promos" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Promotions</div>
          </div>
<!-- Navbar inner for First Time page-->
          <div data-page="first-time" class="navbar-inner cached">
            <!-- <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div> -->
            <div class="center sliding">How-To</div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Index Page-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <?php if( $user_is_first_timer ): ?>
                <div class="content-block">
                  <div class="content-block-inner">
                    <p></p>
                    <h2>Hello, first time user!!<br> <a href="#first-time"><i class="fa fa-info-circle color-blue"></i> Click Here!</a></h2>
                  </div>
                </div>
              <?php endif; ?> 
              <?php if(!isset($_COOKIE["username"])) { ?>
              <div class="content-block-title">oh, hi... who are you?</div>
              <div class="card">
                <div class="card-content">
                  <div class="card-content-inner">
                    <form method="POST" action="username.php">
                      <input type="hidden" name="setName" value="true">
                      <p>Type in your name here so I can make good use of it.</p>
                      <div class="list-block">
                        <ul>
                          <li>
                            <div class="item-content">
                              <div class="item-inner">
                                <div class="item-input">
                                  <input type="text" placeholder="Your name" name="username">
                                </div>
                              </div>
                            </div>
                          </li>         
                        </ul>
                      </div> 
                      <input type="submit" value="Submit" class="button button-fill color-green">
                    </form>
                  </div>
                </div>
              </div>
              <?php } else { ?>

              <div class="content-block-title">Hey, <?php print($name);?>!</div>
              <div class="card">
                <div class="card-content">
                  <div class="card-content-inner">Welcome back, <?php print($name);?>. Want to change your username? <br> Well, I have no idea how to.</div>
                </div>
              </div>

              <?php } ?>
              <div class="content-block-title"><i class="fa fa-ticket color-blue"></i> Arcade Employees</div>
              <div class="list-block">
                <ul>
                  <li><a href="#errors" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title"><i class="fa fa-exclamation-circle color-red"></i> Error Reporting</div>
                        </div>
                      </div></a></li>
                  <li><a href="#training" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-check-circle color-yellow"></i> Training Checklist</div>
                        </div>
                      </div></a></li>
                  <li><a href="#closing" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-clock-o"></i> Closing Procedures</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>              
              <div class="content-block-title"><i class="fa fa-dashboard color-blue"></i> Control Counter Employees</div>
              <div class="list-block">
                <ul>
                  <li><a href="#promos" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title"><i class="fa fa-usd color-green"></i> Weekly Promotions</div>
                        </div>
                      </div></a></li>
                  <li><a href="#ccerrors" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title"><i class="fa fa-exclamation-circle color-red"></i> Error Reporting</div>
                        </div>
                      </div></a></li>
                  <li><a href="#cc-training" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-check-circle color-yellow"></i> Training Checklist</div>
                        </div>
                      </div></a></li>
                  <li><a href="#CCclosing" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-clock-o"></i> Closing Procedures</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>              
              <div class="content-block-title"><i class="fa fa-globe color-blue"></i> Everything Else</div>
              <div class="list-block">
                <ul>
                  <li><a href="#othererrors" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title"><i class="fa fa-exclamation-circle color-red"></i> Misc. Error Reporting</div>
                        </div>
                      </div></a></li>
                  <li><a href="#" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-check-circle color-yellow"></i> Link2</div>
                        </div>
                      </div></a></li>
                  <li><a href="#" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-clock-o"></i> Link3</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>              
              <div class="content-block">
                <div class="content-block-inner bg-lightblue border-orange">
                  <p>Made by StarbucksTech. Which is really just one guy working for the fun of it because learning new things is fun.</p>
                </div>
              </div>
              <div class="list-block">
                <ul>
                  <li>
                    <a href="https://whentowork.com/mob/logins.htm" class="external item-link list-button">WhenToWork Mobile</a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/groups/228830403837342/" class="external item-link list-button">Facebook Group</a>
                  </li>
                </ul>
              </div>
            </div> <!-- End Scrollable page content-->
          </div>
          <!-- Arcade Errors Page-->
          <div data-page="errors" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p><a href="https://docs.google.com/forms/d/1ELefS6RUAT2ceAwQKHHlg8KzJkOuHR_Fkn--Hg_S3gA/viewform" class="external button button-big">Laser Tag Errors</a></p>
                <p><a href="https://docs.google.com/forms/d/1xvqciUTfL4_HCS3b0dIbKgQMV_fOlrqS5WB8Y5im7ao/viewform" class="external button button-big">Bumper Car Errors</a></p>
                <p><a href="https://docs.google.com/forms/d/1kKL8uH2d-YBkSzPdk0cmieosCYD0cweiYnWBrqN3ID8/viewform" class="external button button-big">All Other Arcade Errors</a></p>
                <p>These links take you away from this app and will immediately notifi the appropriate mantinance.</p>
              </div>
            </div>
          </div><!-- End Arcade Errors Page-->
          <!-- CC Errors Page-->
          <div data-page="ccerrors" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p><a href="#" class="external button button-big">Bowling Errors</a></p>
                <p><a href="#" class="external button button-big">NASCAR Errors</a></p>
                <p><a href="#" class="external button button-big">All Other CC Errors</a></p>
                <p>These links take you away from this app and will immediately notify the appropriate mantinance.</p>
              </div>
            </div>
          </div><!-- End CC Errors Page-->
          <!-- Micelaneous Errors Page-->
          <div data-page="othererrors" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p><a href="#" class="external button button-round">All Other Errors</a></p>
                <p>This link takes you away from this app and immediately notifies the appropriate mantinance.</p>
              </div>
            </div>
          </div><!-- End CC Errors Page-->
          <!-- Arcade Training Page-->
          <div data-page="training" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <div class="list-block accordion-list">
                  <ul>
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-flash fa-lg"></i> Laser Tag</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> Watch video, swipe cards, help them put on vests.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Reiterate no running, no physical contact.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Kick out if necessary.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Stay inside the ENTIRE time for insurance reasons and making sure no one gets hurt.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Scores are outside on the big TV.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Make the vests look nice before the next group because our customers like it when things look nice.</p>
                        </div>
                      </div>
                    </li>                      
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-car fa-lg"></i> Bumper Cars</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> Height minimum.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Push go to go once everyone has the strap on correctly.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Push stop if you really need to.</p>
                        </div>
                      </div>
                    </li>                      
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-rocket fa-lg"></i> XD Theater</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                            <p><i class="fa fa-check-square-o color-orange"></i> Swipe cards and check height minimum.</p>
                            <p><i class="fa fa-check-square-o color-orange"></i> Ask which movie they want to watch.</p>
                            <p><i class="fa fa-check-square-o color-orange"></i> Give them glasses.</p>
                            <p><i class="fa fa-check-square-o color-orange"></i> After they are all buckled up, start the movie and make sure all their seats move.</p>
                            <p><i class="fa fa-check-square-o color-orange"></i> Clean the dirty glasses while you wait for them to finish.</p>
                            <p><i class="fa fa-check-square-o color-orange"></i> Open the door and turn on the light as they finish.</p>
                        </div>
                      </div>
                    </li>
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-trophy fa-lg"></i> Redemption</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> Try not to grab things off of the wall.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Scan everything!!</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Count WOZ coins.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Keep the glass clean.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> No drinks on the XD counter.</p>
                        </div>
                      </div>
                    </li>
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-ticket fa-lg"></i> Refilling Tickets</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> 3 different ticket dispenser types</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Filling tickets in each type.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Lick it and stick it!!!!!!</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Fixing jams.</p>
                        </div>
                      </div>
                    </li>
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-ticket fa-lg"></i> Ticket Counter</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> Watch for the red light on top of the machine.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Fixing jams.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Arcade Training Page-->
          <!-- CC Training Page-->
          <div data-page="cc-training" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <div class="list-block accordion-list">
                  <ul>
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-usd fa-lg"></i> Point of Sale (POS)</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> </p>
                          <p><i class="fa fa-check-square-o color-orange"></i> </p>
                          <p><i class="fa fa-check-square-o color-orange"></i> </p>
                          <p><i class="fa fa-check-square-o color-orange"></i> </p>
                          <p><i class="fa fa-check-square-o color-orange"></i> </p>
                          <p><i class="fa fa-check-square-o color-orange"></i> </p>
                        </div>
                      </div>
                    </li>                      
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-car fa-lg"></i> NASCAR</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> Height minimum.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Push go to go once everyone has the strap on correctly.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> Push stop if you really need to.</p>
                        </div>
                      </div>
                    </li>                      
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-sun-o fa-lg"></i> Mini-Golf</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                            <p><i class="fa fa-check-square-o color-orange"></i> Blee.</p>
                            <p><i class="fa fa-check-square-o color-orange"></i> Blue.</p>

                        </div>
                      </div>
                    </li>
                    <li class="accordion-item"><a href="#" class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-trophy fa-lg"></i> Customer Service Tips</div>
                        </div></a>
                      <div class="accordion-item-content">
                        <div class="content-block">
                          <p><i class="fa fa-check-square-o color-orange"></i> Stuff goes here.</p>
                          <p><i class="fa fa-check-square-o color-orange"></i> And more stuff happens here.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End CC Training Page-->

          <!-- Arcade Closing Page-->
          <div data-page="closing" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <div class="list-block">
                  <ul>
                    <li>
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-input">
                            <input type="text" placeholder="Select date" readonly id="calendar-date-format">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>  
              <div class="list-block">
                <ul>
                  <li><a href="#arcadeclosing1" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-check"></i> Things that are done</div>
                        </div>
                      </div></a></li>
                  <li><a href="#arcadeclosing2" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-close"></i> Things that are NOT done</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" class="back button button-big button-fill color-red">Cancel</a></div>
                  <div class="col-50">
                    <input type="submit" value="Submit" class="button button-big button-fill color-green">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Arcade Closing Page 1-->
          <div data-page="arcadeclosing1" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p></p>
              </div>
            </div>
          </div><!-- End Arcade Closing Page 1-->
          <!-- Arcade Closing Page 2-->
          <div data-page="arcadeclosing2" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p>Choose a thing that you are doing and sign it off.</p>
                <ul>
                  <li>Empty ticket stations and sweep them out.</li>
                  <li>Wipe down counters and glass, get rid of any clutter.</li>
                  <li>Restock redemption counter.</li>
                  <li>Make sure every type of item has a visible ticket amount.</li>
                  <li>Replace ALL stuffed animals on the walls.</li>
                  <li>Make sure nothing is behind the white cabinet.</li>
                  <li>Wipe down arcade tables and chairs.</li>
                  <li>Sweep floors.</li>
                  <li>Make sure all laser tag vests and remote are plugged in.</li>
                  <li>Shut down Laser Tag and XD Theater.</li>
                  <li>Vacuum Laser Tag and XD Theater.</li>
                  <li>Declutter all counters and cabinets (including Laser Tag).</li>
                  <li>Count Wizard of Oz coins and return to game.</li>
                  <li>Empty Wizard of Oz drop trays.</li>
                  <li>Stock all games with tickets.</li>
                  <li>Make sure all games listed under your day have been cleaned.</li>
                  <li>Record all game issues on the Arcade Error Reporting page.</li>
                  <li>Turn off all breakers marked with an "A".</li>
                  <li>Turn off lights by XD and merchandise closet.</li>
                  <li>Return promo card and key to cabinet.</li>
                  <li>Return walkie to manager.</li>
                </ul>
              </div>
            </div>
          </div><!-- End Arcade Closing Page 2-->
          <!-- CC Closing Page-->
          <div data-page="CCclosing" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <div class="list-block">
                  <ul>
                    <li>
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-input">
                            <input type="text" placeholder="Select date" readonly id="calendar-date-format">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>  
              <div class="list-block">
                <ul>
                  <li><a href="#CCclosing1" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-check"></i> Things that are done</div>
                        </div>
                      </div></a></li>
                  <li><a href="#CCclosing2" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title"><i class="fa fa-close"></i> Things that are NOT done</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" class="back button button-big button-fill color-red">Cancel</a></div>
                  <div class="col-50">
                    <input type="submit" value="Submit" class="button button-big button-fill color-green">
                  </div>
                </div>
              </div>
            </div>
          </div> <!--End CC Closing Page-->
          <!-- CC Closing Page 1-->
          <div data-page="CCclosing1" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p>Apparently nothing has been done.</p>
              </div>
            </div>
          </div><!-- End CC Closing Page 1-->
          <!-- CC Closing Page 2-->
          <div data-page="CCclosing2" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p>Choose a thing that you are doing and sign it off.</p>
                <ul>
                  <li>Put up bowling balls.</li>
                  <li>Take 6, 7 & 8 lb. bowling balls to control counter.</li>
                  <li>Clean bowling lane tables and screens.</li>
                  <li>Sweep bowling area.</li>
                  <li>Clean concourse tables.</li>
                  <li>Vacuum carpet.</li>
                  <li>Clean bathrooms and take out trash every night.</li>
                  <li>Sweep entrance area (including under candy machines).</li>
                  <li>Clean and turn off NASCAR.</li>
                  <li>Turn off TVs and bowling monitors.</li>
                  <li>Declutter mini-golf and bat/helmet area.</li>
                  <li>Make sure all shoes are put up neatly and correctly.</li>
                  <li>Sand bowling shoes weekly.</li>
                  <li>Reorganize control counter (remove clutter).</li>
                  <li>Organize all cabinets (including the inside).</li>
                  <li>Clean control counter tops.</li>
                  <li>Take out control counter trash.</li>
                  <li>Vacuum control counter.</li>
                  <li>Turn lighs off.</li>
                  <li>Return walkie to charging station.</li>
                </ul>
              </div>
            </div>
          </div><!-- End CC Closing Page 2-->
          <!-- CC Promo Page-->
          <div data-page="promos" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p>Promos listed here!</p>
                <p>UNLMITED PASS</p>
                <p>Thursday Thunder</p>
                <p>College Night</p>
                <p>Laser Tag Night</p>
              </div>
            </div>
          </div><!-- End CC Promo Page-->
          <!-- First Time Page-->
          <div data-page="first-time" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <div class="content-block-title"><i class="fa fa-info-circle"></i> Check it out!</div>
                <div class="card">
                  <div class="card-content">
                    <div class="card-content-inner">Read these real quick and text me if you have any questions!</div>
                  </div>
                </div>
                <div class="content-block-title"><i class="fa fa-smile-o"></i> Fill in your name</div>
                <div class="card">
                  <div class="card-content">
                    <div class="card-content-inner">Filling in your name will let us keep track of who's done what for closing procedures.</div>
                  </div>
                </div>
                <div class="content-block-title"><i class="fa fa-exclamation-circle"></i> Error Reporting!</div>
                <div class="card">
                  <div class="card-content">
                    <div class="card-content-inner">Each section of PrimeTime now has online error tracking. This means managers can get instant notifications when bowling lanes brake, when arcade games won't turn on and when batting cages need assistance.</div>
                  </div>
                </div>
                <div class="content-block-title"><i class="fa fa-clock-o"></i> Closing Procedures!</div>
                <div class="card">
                  <div class="card-content">
                    <div class="card-content-inner">Instead of writing your initals inside of a binder every time you wipe down the counters, now you'll type in your name once and mark off things as you do them every day. Managers in the morning can now see who did what the night before, before they even get to work.</div>
                  </div>
                </div>
                <div class="content-block-title"><i class="fa fa-check-circle"></i> Training Checklists!</div>
                <div class="card">
                  <div class="card-content">
                    <div class="card-content-inner">The idea behind these is to remind people who are training of the rules that we know to follow and how to do the simple things.</div>
                  </div>
                </div>
                <br>
                <a href="javascript:history.go(0)" class="external button button-fill color-green">Click to go back.</a>
              </div>
            </div>
          </div><!-- End First Time Page-->
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" data-panel="left" class="link open-panel">Left Panel</a><a href="#" data-panel="right" class="link open-panel">Right Panel</a></div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="dist/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/my-app.js"></script>
  </body>
</html>