<html>
    <head>
        <?php
            require_once 'support.php';
        ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
                $("#title").html("Add Missing Object");
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
        <?php
        require_once './topnav2.php';
        require_once './sidenav.php';
        ?>
        <div class="row">
            <div class="col s12" style="height: 20px"></div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Add Name" id="name" type="text" class="validate">
                        <label for="name" class="orange-text">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Add Category" id="cat" type="text" class="validate">
                        <label for="cat" class="orange-text">Category</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Add Location" id="location" type="text" class="validate">
                        <label for="location" class="orange-text">Location</label>
                    </div>
                    <div class="input-field col s12">
                        <img src="assets/images/mapview.png" style="max-width: 100%;">
                    </div>
                    <div class="input-field col s12">
                        <textarea id="desc" placeholder="Description" class="materialize-textarea" rows="5"></textarea>
                        <label for="desc" class="orange-text">Add Description</label>
                    </div>
                    <div class="col s12">
                        <button class="btn orange white-text" style="width: 100%"> ADD </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>