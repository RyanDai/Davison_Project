<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>

    <link href="css/application_white.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="homepage">
    <meta name="author" content="Ryan">
    <meta charset="utf-8">
  </head>

  <body>
    <!--Add logo-->

    <div class="logo">
        <h4><a href="home.html"><strong>CREMS</strong></a></h4>
    </div>


    <!--Add left sidebar-->
    <nav id="sidebar" class="sidebar nav-collapse collapse">
        <ul id="side-nav" class="side-nav">
            <li class="active">
                <a href="#"><i class="fa fa-home"></i> <span class="name">Home</span></a>
            </li>

            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                   data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-area-chart"></i> <span class="name">Curves</span></a>
                <!--
                <ul id="forms-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="form_account.html">Account</a></li>
                    <li class=""><a href="form_article.html">Article</a></li>
                    <li class=""><a href="form_elements.html">Elements</a></li>
                    <li class=""><a href="form_validation.html">Validation</a></li>
                    <li class=""><a href="form_wizard.html">Wizard</a></li>
                </ul> -->
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                   data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-warning"></i> <span class="name">Events</span></a>
                   <!--
                <ul id="stats-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="stat_statistics.html">Stats</a></li>
                    <li class=""><a href="stat_charts.html">Charts</a></li>
                    <li class=""><a href="stat_realtime.html">Realtime</a></li>
                </ul> -->
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                   data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-pencil"></i> <span class="name">Reports</span></a>
                   <!--
                <ul id="ui-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="ui_buttons.html">Buttons</a></li>
                    <li class=""><a href="ui_dialogs.html">Dialogs</a></li>
                    <li class=""><a href="ui_notifications.html">Notifications</a></li>
                    <li class=""><a href="ui_icons.html">Icons</a></li>
                    <li class=""><a href="ui_tabs.html">Tabs</a></li>
                    <li class=""><a href="ui_accordion.html">Accordion</a></li>
                </ul> -->
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                   data-parent="#side-nav" href="#components-collapse"><i class="fa fa-user"></i> <span class="name">Users</span></a>
                   <!--
                <ul id="components-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="component_calendar.html">Calendar</a></li>
                    <li class=""><a href="component_maps.html" data-no-pjax>Maps</a></li>
                    <li class=""><a href="component_gallery.html">Gallery</a></li>
                    <li class=""><a href="component_fileupload.html" data-no-pjax>Fileupload</a></li>
                    <li class=""><a href="component_bootstrap.html">Bootstrap</a></li>
                    <li class=""><a href="component_list_groups.html">List Groups</a></li>
                </ul> -->
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                   data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-th"></i> <span class="name">Licences</span></a>
                   <!--
                <ul id="tables-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="tables_static.html">Static</a></li>
                    <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
                </ul> -->
            </li>
            <li class="panel ">
                <a class="accordion-toggle collapsed" data-toggle="collapse"
                   data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-cog"></i> <span class="name">Configration</span></a>
                   <!--
                <ul id="grid-collapse" class="panel-collapse collapse ">
                    <li class=""><a href="grid_basic.html">Basic</a></li>
                    <li class=""><a href="grid_live.html">Live</a></li>
                </ul> -->
            </li>
        </ul>
    </nav>



    <!--Add top nav bar-->
    <div class="wrap">
      <header class="page-header">
          <div class="navbar">
              <ul class="nav navbar-nav navbar-right pull-right">



                <li><p id="currentTime" class="navWords hidden-xs"></p></li>
                <script>
                    function getTime(){
                      d = new Date();
                      document.getElementById("currentTime").innerHTML = d.toLocaleString();
                    }

                    getTime();

                    var timer = setInterval(myTimer, 1000);
                    function myTimer() {
                      getTime();
                    }

                </script>

                <li class="divider"></li>

                <li class="dropdown">
                    <a href="#" title="Messages" id="messages"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-comment"></i>
                        <span class="count">2</span>
                    </a>
                    <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/controller3.jpg" alt="">
                                <div class="details">
                                    <div class="sender">Controller3</div>
                                    <div class="text">
                                        First message.
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/controller4.jpg" alt="">
                                <div class="details">
                                    <div class="sender">Controller4</div>
                                    <div class="text">
                                        Second message.
                                    </div>
                                </div>
                            </a>
                        </li>
                      </ul>
                </li>

                <li class="divider"></li>

                <li><p class="navWords hidden-xs">super user</p></li>


                <li class="dropdown">
                    <a href="#" title="Account" id="account"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">
                        <li role="presentation" class="account-picture">
                            Super user
                        </li>
                        <li role="presentation">
                            <a class="link">
                                <i class="fa fa-user"></i>
                                TestGuy
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>



                <li class="hidden-xs">
                  <li><p class="navWords hidden-xs">Log out</p></li>
                  <li>
                    <a href="index.php"><i class="glyphicon glyphicon-off"></i></a>
                  </li>
                </li>

              </ul>
          </div>
      </header>



    <!--Add controllers table-->
    <div class="content container">

      <div class="table_search_form">
          <form action="#">
            <input type="text" id="mySearch" onkeyup="search()" style="color: black;">
            <input type="submit" value="Search" class = "searchButtonWords">
          </form>
      </div>





      <h2 class="page-title">Home</h2>
      <!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->


      <!--<script>

        $(document).ready(function(){


          load_table();

          function load_table(query){
            $.ajax({
              url:"fetch.php",
              method:"POST",
              data:{query:query},
              success:function(){
                $('#table').html(data);
              }

            });
          }


        });
      </script>-->

      <!--<button onclick=test() id="tbtb">testButton</button>-->
      <script>
        function test(){
          document.getElementById("ATO").style.display = "none";
        }
      </script>

      <div class="row">
          <div class="col-md-12">
              <section class="widget">

                  <div class="panel-group" id="accordion3">

                        <?php
                          $controllerIndex = 0;
                          require 'dbConnect.php';
                          $companyQuery = "Select * from Company";
                          $companyResult = $conn->query($companyQuery);

                          if($companyResult->num_rows > 0){
                            while($companyRow = $companyResult->fetch_assoc()){ ?>

                                <div class="panel">
                                  <div class="panel-heading" id="<?php echo $companyRow['CompanyName']?>">
                                      <a class="accordion-toggle collapsed" data-toggle="collapse" href="#Company<?php echo $companyRow['CompanyID']?>">
                                        <?php echo $companyRow['CompanyName']?>
                                      </a>
                                  </div>

                                  <!--<p>'.$companyRow['CompanyID'].'</p>-->
                                  <div id="Company<?php echo $companyRow['CompanyID'];?>" class="panel-collapse collapse">
                                      <div class="panel-body" id="body<?php echo $companyRow['CompanyID'];?>">

                                        <?php
                                        $comID = $companyRow['CompanyID'];
                                        $siteQuery = "Select * from SiteInfo Where '$comID' = CompanyID";
                                        $siteResult = $conn->query($siteQuery);
                                        if($siteResult->num_rows > 0){
                                          while($siteRow = $siteResult->fetch_assoc()){ ?>

                                            <div class="panel-heading" id="<?php echo $companyRow['CompanyName'].$siteRow['SiteName']?>">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                    href="#Site<?php echo $siteRow['SiteID'];?>">
                                                   <i class="fa fa-bank"></i>
                                                   <?php echo $siteRow['SiteName']?>
                                                 </a>

                                                 <ul id="Site<?php echo $siteRow['SiteID'];?>" class="panel-collapse collapse">

                                                   <section class="widget">
                                                       <div>
                                                         <?php

                                                         $sID = $siteRow['SiteID'];
                                                         $controllerQuery = "Select * from PanelInfo, SitePanels Where
                                                         PanelInfo.PanelID = SitePanels.PanelID AND SitePanels.SiteID = '$sID'";
                                                         $controllerResult = $conn->query($controllerQuery);
                                                         if($controllerResult->num_rows > 0){
                                                           while($controllerRow = $controllerResult->fetch_assoc()){
                                                             $controllerIndex = $controllerIndex +1;


                                                             ?>


                                                             <table class="table table-striped table-lg mt-sm mb-0 sources-table">

                                                                 <tbody>
                                                                 <tr id="c<?php echo $controllerIndex?>">
                                                                     <td class="noDisplay" id="companyID<?php echo $controllerIndex?>"><?php echo $companyRow['CompanyID']?></td>
                                                                     <td class="noDisplay" id="siteID<?php echo $controllerIndex?>"><?php echo $siteRow['SiteID'];?></td>
                                                                     <td class="noDisplay" id="companyName<?php echo $controllerIndex?>"><?php echo $companyRow['CompanyName']?></td>
                                                                     <td class="noDisplay" id="siteName<?php echo $controllerIndex?>"><?php echo $siteRow['SiteName'];?></td>

                                                                     <td id="cName<?php echo $controllerIndex?>"><?php echo $controllerRow['PanelName']?></td>
                                                                     <td class = "hidden-xs" id="cLocation<?php echo $controllerIndex?>"><?php echo $controllerRow['Location']?></td>

                                                                     <?php
                                                                        if($controllerRow['Status'] == 0){ ?>
                                                                          <td id="cStatus<?php echo $controllerIndex?>"><span class="label label-danger">Offline</span></td>
                                                                      <?php  } ?>
                                                                      <?php
                                                                         if($controllerRow['Status'] == 1){ ?>
                                                                           <td id="cStatus<?php echo $controllerIndex?>"><span class="label label-success">Online</span></td>
                                                                       <?php  } ?>

                                                                     <td id="cAlarms<?php echo $controllerIndex?>"><?php echo $controllerRow['alarmsTotal']?> alarms</td>
                                                                     <td><i class="fa fa-area-chart"></i></td>
                                                                     <td><i class="fa fa-warning"></i></td>


                                                                     <td>
                                                                       <div class="dropdown">
                                                                           <a href="#" title="Messages" id="messages"
                                                                              class="dropdown-toggle"
                                                                              data-toggle="dropdown">
                                                                               <span class="glyphicon glyphicon-book"></span>
                                                                           </a>
                                                                           <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Inputs definition
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Alarm definition
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Timezone definition
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Holiday definition
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           System definition
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                             </ul>
                                                                       </div>
                                                                     </td>

                                                                     <td>
                                                                       <div class="dropdown">
                                                                           <a href="#" title="Messages" id="messages"
                                                                              class="dropdown-toggle"
                                                                              data-toggle="dropdown">
                                                                               <span class="glyphicon glyphicon-download-alt"></span>
                                                                           </a>
                                                                           <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Service report
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Site plan
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Database
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                               <li role="presentation">
                                                                                   <a href="#" >
                                                                                       <div class="text">
                                                                                           Configuration
                                                                                       </div>
                                                                                   </a>
                                                                               </li>
                                                                             </ul>
                                                                        </div>
                                                                     </td>
                                                                 </tr>
                                                               </tbody>
                                                              </table>

                                                        <?php }
                                                         }?>

                                                       </div>
                                                   </section>

                                                 </ul>

                                            </div>

                                      <?php  }
                                        }
                                        ?>

                                      </div>
                                  </div>
                                </div>
                        <?php    }
                      } ?>


                  </div>


              </section>
          </div>
      </div>

      <script>

        function search(){
          var input, filter;
          input = document.getElementById("mySearch");
          filter = input.value.toUpperCase();
          //document.getElementById("tbtb").innerHTML = filter;

          //at first, fisplay nothing.
          for(var i = 1; i < <?php echo $controllerIndex ?> + 1; i++){
            var companyName = (document.getElementById("companyName" + i)).textContent;
            var siteName = (document.getElementById("siteName" + i)).textContent;
            document.getElementById(companyName+siteName).style.display = "none";
            document.getElementById(companyName).style.display = "none";

          }
          //display related after user input something.
          for(var i = 1; i < <?php echo $controllerIndex ?> + 1; i++){
            var cAddress = (document.getElementById("cLocation" + i)).textContent;
            var cName = (document.getElementById("cName" + i)).textContent;
            var companyName = (document.getElementById("companyName" + i)).textContent;
            var siteName = (document.getElementById("siteName" + i)).textContent;
            var companyID = (document.getElementById("companyID" + i)).textContent;
            var siteID = (document.getElementById("siteID" + i)).textContent;

            //check if each row contains input
            if ((cAddress.toUpperCase().indexOf(filter) > -1) ||
                (cName.toUpperCase().indexOf(filter) > -1) ||
                (companyName.toUpperCase().indexOf(filter) > -1) ||
                (siteName.toUpperCase().indexOf(filter) > -1)) {


                  document.getElementById(companyName).style.display = "";
                  document.getElementById(companyName+siteName).style.display = "";
                  document.getElementById("c" + i).style.display = "";

                } else {
                  //$('#Company'+companyID).collapse('hide');
                  document.getElementById("c" + i).style.display = "none";
                }
          }
        }
      </script>

      <h2 class="page-title">Maps</h2>


      <section class="widget large">

        <div id="map" style="width:100%;height:320px"></div>

        <script>




        function myMap() {

        var myCenter = new google.maps.LatLng(27.4698, 153.0251);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 12};
        var map = new google.maps.Map(mapCanvas, mapOptions);

        //get information from html main table
        for(var i = 1; i < <?php echo $controllerIndex ?> + 1; i++){
          var cAddress = (document.getElementById("cLocation" + i)).textContent;
          var cName = (document.getElementById("cName" + i)).textContent;
          var cStatus = (document.getElementById("cStatus" + i)).textContent;
          var cAlarms = (document.getElementById("cAlarms" + i)).textContent;
          var companyID = (document.getElementById("companyID" + i)).textContent;
          var siteID = (document.getElementById("siteID" + i)).textContent;
          var index = i;

          //constructe object to pass into function geocodeAddress()
          var controller = { "address":cAddress, "name":cName, "status":cStatus, "alarms":cAlarms,
            "companyID":companyID, "siteID":siteID, "index":index};
          var geocoder = new google.maps.Geocoder();
          geocodeAddress(geocoder, map, controller);
          }
        }


        function geocodeAddress(geocoder, resultsMap, controller) {
          var infowindow;
          infowindow = new google.maps.InfoWindow();

          geocoder.geocode({'address': controller.address}, function(results, status) {
            if (status === 'OK') {
              resultsMap.setCenter(results[0].geometry.location);
              var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
              });

              //click event, display info window
              google.maps.event.addListener(marker,'click',function() {
                var content = controller.name + '<br>' + "Status: " + controller.status + '<br>' + "Alarms: " + controller.alarms;
                content += '<br>' + "Address: " + controller.address;
                infowindow.setContent(content);
                infowindow.open(resultsMap,marker);
              });

              //double click event, jump to table
              google.maps.event.addListener(marker, "dblclick", function (e) {
                  var siteID = controller.siteID;
                  var companyID = controller.companyID;
                  $('#Company'+companyID).collapse('show');
                  $('#Site'+siteID).collapse('show');
                  window.location.hash = '#cName'+ controller.index;

              });

            } else {
              alert('Geocode was not successful for the following reason: ' + status);
            }
          });



        }

        </script>
        <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0n3sGi1zJRmtGRuzguppVmxHtqKGE8Mk&callback=myMap"
                  type="text/javascript"></script>



      </section>




    </div>








    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>



    <!-- common libraries. required for every page-->
    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/jquery-pjax/jquery.pjax.js"></script>
    <script src="lib/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <script src="lib/widgster/widgster.js"></script>
    <script src="lib/underscore/underscore.js"></script>

    <!-- common application js -->
    <script src="js/app.js"></script>
    <script src="js/settings.js"></script>


    <!-- map js -->
    <!-- page specific scripts -->
        <!-- page specific libs -->
        <!--<script src="https://maps.google.com/maps/api/js?key=AIzaSyAq-ODy3J9WQWCSIIyX4_YXhRn8o9-bys0&sensor=true"></script>-->
        <!--<script src="lib/gmap3/dist/gmap3.min.js"></script>-->
        <!--
        <script src="lib/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="lib/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="lib/jqvmap/dist/maps/jquery.vmap.usa.js"></script>
        <script src="lib/jqvmap/dist/maps/continents/jquery.vmap.australia.js"></script>
        <script src="lib/jqvmap/dist/maps/jquery.vmap.europe.js"></script>-->
        <!--<script src="lib/bootstrap-select/dist/js/bootstrap-select.min.js"></script>-->
        <!-- page application js -->
        <!--<script src="js/component-maps.js"></script>-->





    <!-- page specific scripts -->
    <!-- page specific libs -->
    <script src="lib/jquery.sparkline/index.js"></script>
    <script src="lib/d3/d3.min.js"></script>
    <script src="lib/nvd3/build/nv.d3.min.js"></script>


    <!-- page application js -->
    <script src="js/tables-static.js"></script>
    <script src="js/index.js"></script>




  </body>
</html>
