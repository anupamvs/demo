<html>
    <head>
        <?php
            require_once 'support.php';
        ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
                $('#top').removeClass('white-text').addClass('grey-text');
                $('.materialboxed').materialbox();
            });
        </script>
        <style type="text/css">
            body{
                font-family: 'Roboto' !important;
                font-weight: lighter !important;
            }
            
        </style>
    </head>
    <body>
        <?php
            require_once './topnav.php';
            require_once './sidenav.php';
            require_once './tabs.php';
        ?>
        <div class="row">
            <div class="card-panel card-margin gold-badge">
                <div class="row margin-0">
                    <div class="col s2 padding-left-0">
                        <div class="circle green white-text z-depth-1">
                          <span class="initials">AK</span>
                        </div>
                    </div>
                    <div class="col s8">
                        <p class="margin-0 card-title-text white-text"><b>Anupam Kumar</b></p>
                        </p>
                        <p class="margin-0 card-sub-text white-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Kothrud, Pune
                        </p>
                    </div>
                    <div class="col s2">
                        <h3 class="margin-0 white-text">1</h3>
                    </div>
                </div>
            </div>
            <div class="card-panel card-margin gold-badge">
                <div class="row margin-0">
                    <div class="col s2 padding-left-0">
                        <div class="circle orange white-text z-depth-1">
                          <span class="initials">DN</span>
                        </div>
                    </div>
                    <div class="col s8">
                        <p class="margin-0 card-title-text white-text"><b>Dhananjay Nirmal</b></p>
                        </p>
                        <p class="margin-0 card-sub-text white-text"><i class="fa fa-map-marker" aria-hidden="true"></i> Kothrud, Pune
                        </p>
                    </div>
                    <div class="col s2">
                        <h3 class="margin-0 white-text">2</h3>
                    </div>
                </div>
            </div>
            <div class="center" style="margin-top: 20px;">
                <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
            </div>
        </div>
    </body>
</html>
