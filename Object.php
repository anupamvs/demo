<html>
    <head>
        <?php
            require_once 'support.php';
        ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
                $('.slider').slider({ 
        full_width: true,
        height : 250, // default - height : 400
        indicators:false
    });
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

fieldset, label { margin: 0; padding: 0; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
        </style>
    </head>
    <body>
        <nav class="blue">
            <div class="nav-wrapper">
                <a href="#" data-target="slide-out" class="sidenav-trigger left">
                    <i class="material-icons">arrow_back</i>
                </a>
                <a href="">
                    Tekdi Technologies
                </a>
            </div>
        </nav>
        <div class="slider">
            <ul class="slides" >
              <li>
                  <img src="assets/images/1.jpg"> <!-- random image -->
              </li>
              <li>
                  <img src="assets/images/2.jpg"> <!-- random image -->
              </li>
            </ul>
        </div>
        <div class="row">
            <div class="col s12">
                <div style="height:20px;"></div>
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <h3 class="center-align blue-text">
                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                </h3>
                <p class="center-align">Direction</p>
            </div>
            <div class="col s4">
                <h3 class="center-align">
                    <i class="fa fa-phone green-text" aria-hidden="true"></i>
                </h3>
                <p class="center-align">Phone</p>
            </div>
            <div class="col s4">
                <h3 class="center-align yellow-text">
                    <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                </h3>
                <p class="center-align">Mark</p>
            </div>
            <div class="col s4">
                <h3 class="center-align grey-text">
                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                </h3>
                <p class="center-align">Share</p>
            </div>
            <div class="col s4">
                <h3 class="center-align red-text">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                </h3>
                <p class="center-align">Complaint</p>
            </div>
            <div class="col s4">
                <h3 class="center-align">
                    <i class="fa fa-sticky-note lime-text" aria-hidden="true"></i>
                </h3>
                <p class="center-align">Demand</p>
            </div>
        </div>        
    </body>
</html>
