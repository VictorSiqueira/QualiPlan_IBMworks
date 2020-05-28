<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>QualiPlace</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

                    <!--STYLE DO MAP-->
                    <style type="text/css">
                      #map-canvas { height: 100%;width:100%; }
                    </style>


                    <!--<script type="text/javascript"
                     src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDnYQAf8lBovOht6c2J38tGB5dwAWNYFXM&sensor=true&language=en-us">
                    </script>-->
                    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>

    <style>
        #results {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            right: 5px;
            top: 50%;
            margin-top: -195px;
            height: 380px;
            width: 200px;
            padding: 5px;
            z-index: 5;
            border: 1px solid #999;
            background: #fff;
            overflow-y: scroll;
        }
        h2 #mapa-place{
            font-size: 22px;
            margin: 0 0 5px 0;
        }
        #places{
           
            padding: 0;
            margin: 0;
           
        }
        #resultado{
            background-color: #f1f1f1;
            padding: 10px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        #resultado:nth-child(odd) {
            background-color: #fcfcfc;
        }
        #more {
            width: 100%;
            margin: 5px 0 0 0;
        }
    </style>



    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="img/LOGO.png">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since 26/08/2012</small>
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                   
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="qmap-where" id="qmap-where" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat" onclick="findAddress(); return false;"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active" >
                            <a href="index.html" style="color:#fff;background-color:#008000">
                                <i class="fa fa-plus"></i> <span>Add Offer</span>
                            </a>
                        </li>
                       




                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-home"></i>
                                <span>Situation</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>


                                <ul class="treeview-menu cd-filter-content cd-filters list">
                                    <form>
                                    <li>
                                        <span> <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                                        <label class="radio-label" for="radio1">New</label>
                                        </span>
                                    </li>

                                    <li>
                                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                                        <label class="radio-label" for="radio2">Old</label>
                                    </li>
                                </form>
                                </ul> <!-- cd-filter-content -->
                            
                        </li>




                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list-alt"></i>
                                <span>Offer Type</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>


                                <ul class="treeview-menu cd-filter-content cd-filters list">
                                    <li>
                                        <form>
                                        <span> <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                                        <label class="radio-label" for="radio1">For Sale</label>
                                        </span>
                                    </li>

                                    <li>
                                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                                        <label class="radio-label" for="radio2">For Rent</label>
                                    </form>
                                    </li>
                                </ul> <!-- cd-filter-content -->
                            
                        </li>




                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-usd"></i>
                                <span>Values</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>


                                <ul class="treeview-menu cd-filter-content cd-filters list">
                                    <li>
                                        <div class="cd-filter-content">
                                            <div class="cd-select cd-filters">
                                                <form>
                                                <select style="max-width: 195px" class="filter sidebar-form form-control" name="selectThis" id="selectThis">
                                                    <option value="">Choose an option</option>
                                                    <option value=".option1">Option 1</option>
                                                    <option value=".option2">Option 2</option>
                                                    <option value=".option3">Option 3</option>
                                                    <option value=".option4">Option 4</option>
                                                </select>
                                            </form>
                                            </div> <!-- cd-select -->
                                        </div> <!-- cd-filter-content -->
                                    </li>
                                </ul>                            
                        </li>




                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Rooms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>


                                <ul class="treeview-menu cd-filter-content cd-filters list">
                                    <form>
                                    <li>
                                        <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                                        <label class="checkbox-label" for="checkbox1">1 Room</label>
                                    </li>

                                    <li>
                                        <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                                        <label class="checkbox-label" for="checkbox2">2 Rooms</label>
                                    </li>

                                    <li>
                                        <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                                        <label class="checkbox-label" for="checkbox3">3 Rooms</label>
                                    </li>

                                    <li>
                                        <input class="" data-filter=".check3" type="checkbox" id="checkbox3">
                                        <label class="checkbox-label" for="checkbox3">4 or more</label>
                                    </li>

                                </form>
                                </ul> <!-- cd-filter-content -->
                            
                        </li>









                      
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side" style="height:700px;">
                <!-- Content Header (Page header) -->
               
                    <div id="map-canvas" class="sidebar content" style="height:100%;margin-top:"></div>
                        <div id="results">
                            <h2 id="mapa-place">Results</h2>
                            <ul id="places"></ul>
                            <button id="more">More results</button>
                        </div>
                

            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
     
       
        

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
    <script>
        var geocoder;
        var map;
        var markers = Array();
        var infos = Array();

        var placesList;
        var prymont;

        function initialize() {
            // prepare Geocoder
             geocoder = new google.maps.Geocoder();


            function setMarkers(map, locations) {
            // Add markers to the map

            // Marker sizes are expressed as a Size of X,Y
            // where the origin of the image (0,0) is located
            // in the top left of the image.

            // Origins, anchor positions and coordinates of the marker
            // increase in the X direction to the right and in
            // the Y direction down.
            var image = {
                url: 'img/building.png',
                // This marker is 20 pixels wide by 32 pixels tall.
                size: new google.maps.Size(46, 46),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0,0),
                // The anchor for this image is the base of the flagpole at 0,32.
                anchor: new google.maps.Point(0, 32)
            };

            // Shapes define the clickable region of the icon.
            // The type defines an HTML &lt;area&gt; element 'poly' which
            // traces out a polygon as a series of X,Y points. The final
            // coordinate closes the poly by connecting to the first
            // coordinate.
            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18 , 1],
                type: 'poly'
            };

            for (var i = 0; i < locations.length; i++) {
                var beach = locations[i];
                var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    shape: shape,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
        }

            

            //pyrmont = new google.maps.LatLng(-23.580800, -46.650057);

            map = new google.maps.Map(document.getElementById('map-canvas'), {
                zoom: 17
            });

            var pontos = [
                <?php
                    $conn = new PDO('mysql:host=177.135.167.12;dbname=quali', 'root', 'smd!2014tibr');
                    $sql = 'SELECT * FROM IMOVEL';
                    $rows = $conn->query($sql);

                    foreach ($rows as $row) {
                        echo "[' {$row['nome']} ', '{$row['longitude']}', '{$row['latitude']}' ],";
                    }
                ?>
            ];

            setMarkers(map, pontos);

                        if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {

                    var request = {
                        location: new google.maps.LatLng(position.coords.latitude,
                            position.coords.longitude),
                        radius: 500,
                        types: ["police", "hospital", "fire_station", "grocery_or_supermarket", "university"]
                    };

                    placesList = document.getElementById('places');

                    var service = new google.maps.places.PlacesService(map);
                    service.nearbySearch(request, callback);

                }, function() {
                    handleNoGeolocation(true);
                });
            } else {
                // Browser doesn't support Geolocation
                handleNoGeolocation(false);
            }
        }

        // clear overlays function
        function clearOverlays() {
            if (markers) {
                for (i in markers) {
                    markers[i].setMap(null);
                }
                markers = [];
                infos = [];
            }
        }

        // clear infos function
        function clearInfos() {
            if (infos) {
                for (i in infos) {
                    if (infos[i].getMap()) {
                        infos[i].close();
                    }
                }
            }
        }

        // find address function
        function findAddress() {
            var address = document.getElementById("qmap-where").value;

            // script uses our 'geocoder' in order to find location by address name
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) { // and, if everything is ok

                    // we will center map
                    var addrLocation = results[0].geometry.location;
                    map.setCenter(addrLocation);


                    // and then - add new custom marker
                    var addrMarker = new google.maps.Marker({
                        position: addrLocation,
                        map: map,
                        content: 'You are here !',  
                        title: results[0].formatted_address,
                    });

                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        // find custom places function
        function findPlaces() {

            // prepare variables (filter)
            var type = document.getElementById('gmap_type').value;
            var radius = document.getElementById('gmap_radius').value;
            var keyword = document.getElementById('gmap_keyword').value;

            var lat = document.getElementById('lat').value;
            var lng = document.getElementById('lng').value;
            var cur_location = new google.maps.LatLng(lat, lng);

            // prepare request to Places
            var request = {
                location: cur_location,
                radius: radius,
                types: [type]
            };
            if (keyword) {
                request.keyword = [keyword];
            }

            // send request
            service = new google.maps.places.PlacesService(map);
            service.search(request, createMarkers);
        }

        // create markers (from 'findPlaces' function)
        function createMarkers(results, status) {
            if (status == google.maps.places.PlacesServiceStatus.OK) {

                // if we have found something - clear map (overlays)
                clearOverlays();

                // and create new markers by search result
                for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
            } else if (status == google.maps.places.PlacesServiceStatus.ZERO_RESULTS) {
                alert('Sorry, nothing is found');
            }
        }

        function callback(results, status, pagination) {
            if (status != google.maps.places.PlacesServiceStatus.OK) {
                return;
            } else {
                createMarkers(results);

                if (pagination.hasNextPage) {
                    var moreButton = document.getElementById('more');

                    moreButton.disabled = false;

                    google.maps.event.addDomListenerOnce(moreButton, 'click',
                        function() {
                            moreButton.disabled = true;
                            pagination.nextPage();
                        });
                }
            }
        }

        function createMarkers(places) {
            var bounds = new google.maps.LatLngBounds();

            for (var i = 0, place; place = places[i]; i++) {
                var image = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                var marker = new google.maps.Marker({
                    map: map,
                    icon: image,
                    title: place.name,
                    position: place.geometry.location
                });

                placesList.innerHTML += '<li id="resultado">' + place.name + '</li>';

                bounds.extend(place.geometry.location);
            }
            map.fitBounds(bounds);
        }
        function handleNoGeolocation(errorFlag) {
            if (errorFlag) {
                var content = 'Error: The Geolocation service failed.';
            } else {
                var content = 'Error: Your browser doesn\'t support geolocation.';
            }

            var options = {
                map: map,
                position: new google.maps.LatLng(60, 105),
                content: content
            };

            var infowindow = new google.maps.InfoWindow(options);
            map.setCenter(options.position);
        }
        // initialization
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </body>
</html>