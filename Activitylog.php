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
        <div class="row">
            <div class="card-panel card-margin">
                <div class="row margin-0">
                    <div class="col s2 padding-left-0">
                        <div class="circle green white-text z-depth-1">
                          <span class="initials">AK</span>
                        </div>
                    </div>
                    <div class="s9">
                        <p class="margin-0 card-title-text"><b>Anupam</b> posted an <b>complain</b>
                            <i class="fa fa-ellipsis-v material-icon right" aria-hidden="true"></i>
                        </p>
                        <p class="margin-0 card-sub-text">2 min ago &nbsp;&nbsp;.&nbsp;&nbsp;
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Kothrud, Pune
                        </p>
                    </div>
                    <div class="row margin-0" style="margin-top: 10px !important;">
                        <div class="col s12">
                            <img src="assets/images/pothole.jpeg" align="center" class="card-content-image materialboxed" />
                        </div>
                        <div class="col s12 card-content-text">
                             I have noticed a large number of potholes found on karve road near kothrud bus stand, some of which are very large. And this must need to fix soon.
                        </div>
                    </div>
                    <div class="row margin-0 card-operation">
                        <div class="col s4 center">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div>
                        <div class="col s4 center">
                            <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                        </div>
                        <div class="col s4 center">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-panel card-margin">
                <div class="row margin-0">
                    <div class="col s2 padding-left-0">
                        <div class="circle pink white-text z-depth-1">
                          <span class="initials">RD</span>
                        </div>
                    </div>
                    <div class="s9">
                        <p class="margin-0 card-title-text"><b>Rajnish</b> posted an <b>demand</b>
                            <i class="fa fa-ellipsis-v material-icon right" aria-hidden="true"></i>
                        </p>
                        <p class="margin-0 card-sub-text">1 hour ago &nbsp;&nbsp;.&nbsp;&nbsp;
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Kothrud, Pune
                        </p>
                    </div>
                    <div class="row margin-0" style="margin-top: 10px !important;">
                        <div class="col s12 card-content-text">
                             If you lack a treadmill and the weather is lousy, jogging in place might be your only option if you want to run that day. While jogging in place burns calories and increases your heart rate, you miss out on some of the benefits gained by jogging outside or on a treadmill.
                             So we need a jogging park in our locality.
                        </div>
                    </div>
                    <div class="row margin-0 card-operation">
                        <div class="col s4 center">
                            <i class="fa fa-thumbs-up blue-text" aria-hidden="true"></i>
                        </div>
                        <div class="col s4 center">
                            <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                        </div>
                        <div class="col s4 center">
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center" style="margin-top: 20px;">
                <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
            </div>
            <div class="fixed-action-btn ">
                <a class="btn-floating btn blue click-to-toggle">
                    <i class="fa fa-plus material-icon" aria-hidden="true"></i>
                    
                </a>
                <ul>
                    <li><a class="btn-floating red"><i class="fa fa-exclamation-circle material-icon" aria-hidden="true"></i></a></li>
                    <li><a class="btn-floating green"><i class="fa fa-sticky-note material-icon" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
