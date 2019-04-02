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
            input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]), input[type=password]:not(.browser-default):focus:not([readonly]), input[type=email]:not(.browser-default):focus:not([readonly]), input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]), input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]), input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]), input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
                border-bottom: 1px solid orange;
                -webkit-box-shadow: 0 1px 0 0 orange;
                box-shadow: 0 1px 0 0 orange;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="row blue" style="height: 200px;">
                <div class="col s10" style="margin-top: 10px;">
                    <h5 class="margin-0 white-text" style="">SmartCitizen</h5>
                </div>
                <div class="col s2">
                    <i class="material-icons white-text" style="margin-top: 12px; margin-left: 15px;">close</i>
                </div>
                <div class="section" style="height: 130px;">
                </div>
                <div class="row">
                    <div class="col s8">
                        <p class="white-text">
                            Please enter your details to continue
                        </p>
                    </div>
                    <div class="col s4">
                    </div>
                </div>
            </div>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="" id="first_name" type="text" class="validate">
                          <label for="first_name" class="orange-text">Email/Mobile No.</label>
                        </div>
                        <div class="col s12" style="height: 20px">
                        </div>
                        <div class="col s12">
                            <button class="btn orange white-text" style="width: 100%"> CONTINUE </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>        
    </body>
</html>
