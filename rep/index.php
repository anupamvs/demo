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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30704515.49345261!2d64.37107640195963!3d20.04584308555379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1554194804220!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </body>
</html>
