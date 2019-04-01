<html>
    <head>
        <?php
            require_once 'support.php';
        ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
            });
        </script>
    </head>
    <body>
        <?php
        require_once './sidenav.php';
        ?>
    </body>
</html>
