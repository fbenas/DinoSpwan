<!DOCTYPE html>
<html>
<head>
    <title>DinoSpawn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css"></link>
    <link rel="stylesheet" href="../css/custom.css"></link>
    <script src="/jquery/jquery-min.js" type="text/javascript"></script>
</head>

<body onkeypress="check_enter(event)">
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button"></button>
            <a class="brand" href="#">DinoSpawn</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li><a href="#About">About</a></li>
                </ul>
            </div>
      <!--/.nav-collapse -->
    </div>
</div>
</div>
<div class="container" id="container">

    <div class="hero-unit hero-main">

        <h1>DinoSpawn</h1>
        <p>Spawn Dinasaurs. What more do you want?</p>
        <p class="inline">
            <button type="button" onclick="spawn_dino()" class="btn btn-primary btn-large btn-go">Spawn</button>
            <a href="#" onclick="advanced()" class="advanced">advanced options</a>
        </p>
        <p class="advanced">Enter also spawns. Refresh to clear.</p>
    </div>
</div>
      <!-- /container -->
    
      <!-- Le javascript
    ================================================== -->
    
      <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/bootstrap-min.js"></script>

    <!--===================================================-->
    <!-- Custom javascript -->
    <script  type="text/javascript">

        function check_enter(event) 
        {
            if (event.keyCode == 13)
            {
                spawn_dino();
                return false;
            }
        }

        function advanced()
        {
            alert("Options");
        }

        function spawn_dino()
        {
                var image_Element = document.createElement("img");
                image_Element.src = get_random_image();

                var src = document.getElementById("container");
                
                src.appendChild(image_Element);

                
                var window_Height = window.innerHeight +400;
                var window_Width = window.innerWidth +400;

                availSpace_V = window_Height;
                availSpace_H = window_Width;

                var randNum_V = Math.round(Math.random() * availSpace_V) -200;
                var randNum_H = Math.round(Math.random() * availSpace_H) -200;
                
                image_Element.style.top = randNum_V + "px";
                image_Element.style.left = randNum_H + "px";       
        }

        function get_random_image()
        {
            

            var images = new Array();
            images[0] = "http://dc426.4shared.com/img/cN-PjCE9/s7/Dinosaur_Trex.png";
            images[1] = "http://content.mycutegraphics.com/graphics/dinosaur/baby-dinosaur.png";
            images[2] = "http://i454.photobucket.com/albums/qq262/HunterDX77M/dinosaur-1.png";
            images[3] = "http://clipartist.info/Holidays/Xmas/Dinosaurs/jazzynico_dino_simple_t_rex_dinosaur_xmas_christmas_stuffed_animal-555px.png";
            images[4] = "http://icons.iconseeker.com/png/fullsize/sticker-pack-1/dinosaur.png";
            images[5] = "http://th00.deviantart.net/fs71/PRE/f/2010/142/0/d/Dinosaur_by_easterbonnie.png";
            images[6] = "http://clipartist.net/RSS/openclipart.org/2012/June/dinosaur_dino_comic_animal-555px.png";
            images[7] = "http://icons-search.com/img/fasticon/Dinosaur_Toy_lnx.zip/Dinosaur_Toy_lnx-brontosaurus_256x256.png-256x256.png";
            images[8] = "http://www.walkingwithdinosaurs.com/suploads/dinosaur-details/dinosaur-tyrannosaurus/tyrannosaur-dino-large.png";
            images[9] = "http://icons-search.com/img/fasticon/Dinosaur_Toy_lnx.zip/Dinosaur_Toy_lnx-pterodactyl_256x256.png-256x256.png";
            images[10] = "http://icons-search.com/img/fasticon/Dinosaur_Toy_lnx.zip/Dinosaur_Toy_lnx-stegosaurus_256x256.png-256x256.png";
            images[11] = "http://icons-search.com/img/fasticon/Dinosaur_Toy_lnx.zip/Dinosaur_Toy_lnx-Triceratops_256x256.png-256x256.png";
            images[12] = "http://icons-search.com/img/fasticon/Dinosaur_Toy_lnx.zip/Dinosaur_Toy_lnx-tyrannosaurus_rex_256x256.png-256x256.png";
            images[13] = "http://clipartist.info/SVG/CLIPARTIST.ORG/CARTOON/cartoon_pterodactyl_dinosaur-555px.png";
            images[14] = "http://images4.wikia.nocookie.net/__cb20120131155222/nitrome/images/thumb/5/52/Dinosaur_BC_Bow_Contest.png/200px-Dinosaur_BC_Bow_Contest.png";
            images[15] = "http://static.spore.com/static/image/500/386/500/500386500555_lrg.png";
            images[16] = "http://static.spore.com/static/image/500/603/091/500603091350_lrg.png";
            images[16] = "http://static.spore.com/static/image/500/603/102/500603102299_lrg.png";
            
            var rand = Math.round(Math.random()*images.length);
            return images[rand];
        }

    </script>
    <!--===================================================-->
</body>
</html>