<html>
    <head>
        <?php
            require_once 'support.php';
        ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
                $("#title").html("Dashboard");
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
        ?>
    </body>
</html>
