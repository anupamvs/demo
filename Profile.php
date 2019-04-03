<html>
    <head>
        <?php
            require_once 'support.php';
        ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
                $('#activity').removeClass('white-text').addClass('grey-text');
                $('.materialboxed').materialbox();
                $('.fixed-action-btn').floatingActionButton();
                $("#title").html("My Profile");
            });
        </script>
        <style type="text/css">
            body{
                font-family: 'Roboto' !important;
                font-weight: lighter !important;
            }
            .fixed-action-btn {
                position: fixed;
                right: 23px;
                bottom: 4em;
                padding-top: 15px;
                margin-bottom: 0;
                z-index: 997;
            }
        </style>
    </head>
    <body>
        <?php
            require_once './topnav.php';
            require_once './sidenav.php';
            require_once './tabs.php';
        ?>
        <div class="row blue margin-0" style="height: 200px;">
            <div class="section" style="height: 130px;">
                <div class="col s12">
                    <a href="#user" class="center"><img class="circle padding-left-0 z-depth-2" src="assets/images/avatar.png" style="height:70px; width: 70px; margin-left: 40%;"></a>
                    <h6 class="white-text center"><b>Anupam Kumar</b></h6>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col s12">
                    <p class="white-text center">
                        anupam@tekdi.com
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card card-margin card-panel">
                <div class="card-content pdding-0" style="padding: 0px;">
                  <span class="card-title" style="font-size: 15px; border-bottom: 0.1px #e0e0e0 solid;">Name</span>
                  <p class="gray-text">Anupam Kumar <a href="#" class="right">EDIT</a></p>
                </div>
                <div class="" style="padding: 0px;">
                  
                </div>
            </div>
            <div class="card card-margin card-panel">
                <div class="card-content pdding-0" style="padding: 0px;">
                  <span class="card-title" style="font-size: 15px; border-bottom: 0.1px #e0e0e0 solid;">Location</span>
                  <p>Kothrud, Pune MH<a href="#" class="right">CHANGE</a></p>
                </div>
                <div class="" style="padding: 0px;">
                  
                </div>
            </div>
            <div class="card card-margin card-panel">
                <div class="card-content pdding-0" style="padding: 0px;">
                  <span class="card-title" style="font-size: 15px; border-bottom: 0.1px #e0e0e0 solid;">Mobile</span>
                  <p>+91 9876543210<a href="#" class="right">CHANGE</a></p>
                </div>
                <div class="" style="padding: 0px;">
                  
                </div>
            </div>
            <div class="card card-margin card-panel" style="z-index: -10;">
                <div class="card-content pdding-0" style="padding: 0px;">
                  <span class="card-title" style="font-size: 15px; border-bottom: 0.1px #e0e0e0 solid;">Points</span>
                  <p>1001</p>
                </div>
                <div class="" style="padding: 0px;">
                  
                </div>
            </div>
        </div>
    </body>
</html>
