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
                $('#title').html("Complaints");
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
                        <p class="margin-0 card-title-text"><b>Anupam</b>
                            <i class="fa fa-ellipsis-v material-icon right" aria-hidden="true"></i>
                        </p>
                        <p class="margin-0 card-sub-text">2 min ago &nbsp;&nbsp;.&nbsp;&nbsp;
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Kothrud, Pune
                        </p>
                        <p>
                    </div>
                    <div class="row margin-0" style="margin-top: 10px !important;">
                        <div class="col s12 card-content-text center">
                             Pot-hole
                        </div>
                    </div>
                    <div class="row margin-0 card-operation">
                        <div class="col s4 center">
                            <a href="Viewcomplaint.php">View</a>
                        </div>
                        <div class="col s4 center">
                            <a href="#">Assign</a>
                        </div>
                        <div class="col s4 center">
                            <a href="#">Reject</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-panel card-margin">
                <div class="row margin-0">
                    <div class="col s2 padding-left-0">
                        <div class="circle pink white-text z-depth-1">
                          <span class="initials">AS</span>
                        </div>
                    </div>
                    <div class="s9">
                        <p class="margin-0 card-title-text"><b>Akshada</b>
                            <i class="fa fa-ellipsis-v material-icon right" aria-hidden="true"></i>
                        </p>
                        <p class="margin-0 card-sub-text">1 hr ago &nbsp;&nbsp;.&nbsp;&nbsp;
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Warje, Pune
                        </p>
                        <p>
                    </div>
                    <div class="row margin-0" style="margin-top: 10px !important;">
                        <div class="col s12 card-content-text center">
                             Over Flow Dustbin.
                        </div>
                    </div>
                    <div class="row margin-0 card-operation">
                        <div class="col s4 center">
                            <a href="Viewcomplaint.php">View</a>
                        </div>
                        <div class="col s4 center">
                            <a href="#">Assign</a>
                        </div>
                        <div class="col s4 center">
                            <a href="#">Reject</a>
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
                        <p class="margin-0 card-title-text"><b>Rajnish</b>
                            <i class="fa fa-ellipsis-v material-icon right" aria-hidden="true"></i>
                        </p>
                        <p class="margin-0 card-sub-text">1 hr ago &nbsp;&nbsp;.&nbsp;&nbsp;
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Karve Road, Pune
                        </p>
                        <p>
                    </div>
                    <div class="row margin-0" style="margin-top: 10px !important;">
                        <div class="col s12 card-content-text center">
                             Pipe-line lekage.
                        </div>
                    </div>
                    <div class="row margin-0 card-operation">
                        <div class="col s4 center">
                            <a href="Viewcomplaint.php">View</a>
                        </div>
                        <div class="col s4 center">
                            <a href="#">Assign</a>
                        </div>
                        <div class="col s4 center">
                            <a href="#">Reject</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
