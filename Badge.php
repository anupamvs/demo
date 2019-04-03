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
                $("#title").html("My Badge");
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
        <div class="row blue margin-0" style="height: 230px;">
            <div class="section" style="height: 130px;">
                <div class="col s12">
                    <a href="#user" class="center"><img class="circle padding-left-0 z-depth-2" src="assets/images/topbadge.png" style="height:150px; width: 150px; margin-left: 28%;"></a>
                    <h6 class="white-text center"><b>Small Cup Aquired !</b></h6>
                </div>
            </div>
            
        </div>
        <div class="row">
            <h1 class="center grey-text">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            </h1>
            <p class="center">
                Earn more points to get badges.
            </p>
        </div>
    </body>
</html>
