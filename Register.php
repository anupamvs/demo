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
            input-field label {
                color: orange;
            }
        </style>
    </head>
    <body>
        <nav class="blue">
            <div class="nav-wrapper">
                <h5 class="center margin-0" style="padding-top: 12px">Sign Up</h5>
            </div>
        </nav>
        <div class="row">
            <div class="col s12" style="height: 20px"></div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Enter Name" id="fname" type="text" class="validate">
                        <label for="fname" class="orange-text">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Enter Password" id="pwd" type="password" class="validate">
                        <label for="pwd" class="orange-text">Password</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Enter Confirm Password" id="cpwd" type="password" class="validate">
                        <label for="cpwd" class="orange-text">Confirm Password</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Enter Nick Name" id="nick" type="text" class="validate">
                        <label for="nick" class="orange-text">Nick Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Enter OTP send on email/mobile" id="opt" type="text" class="validate">
                        <label for="opt" class="orange-text">Enter OTP</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="desc" class="materialize-textarea" rows="5" placeholder="Enter Address"></textarea>
                        <label for="desc" class="orange-text">Address</label>
                    </div>
                    <div class="col s12">
                        <button class="btn orange white-text" style="width: 100%"> sign up </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>