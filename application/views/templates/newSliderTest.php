<!DOCTYPE html>
<html lang="en">
    <head>
        <?php foreach ($headertitle as $header) {
            ?>
            <title><?php echo $header->description; ?></title>
        <?php } ?>
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>contents/uploads/styles/stylesForView.css" type="text/css" />


        <?php
        if ($meta) {
            $i = 0;
            foreach ($meta as $data) {
                $meta_data[$i] = $data->value;
                $i++;
            }
        }
        ?>
        <meta charset="utf-8">
        <meta content="initial-scale=1.0, user-scalable=no" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <title>Welcome | Chitwan Gaida Lodge</title>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>contents/uploads/styles/styles.css" />
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>contents/uploads/images/favicon.png"/>
        <meta content="widht=device-widht, initial-scale=1" name="viewport">

        <script src="<?php echo base_url() . "contents/uploads/scripts/popup.js"; ?>"></script>
        <script src="<?php echo base_url() . "contents/uploads/scripts/jquery.js"; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url() . "contents/uploads/styles/tableStyles.css"; ?>"> 
        <link rel="stylesheet" href="<?php echo base_url() . "contents/uploads/styles/pop-up-booking.css"; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . "contents/uploads/styles/tripadvisor.css"; ?>">

        <style>

            .contentContainerFooterLeft
            {
                float: left;


            }
            .contentContainerFooterRight
            {

                float: left;
            }
            .sliderTable
            {
                border: 0px solid #000;
            }
            .slide
            {
                zoom: 1; 
                border:none;
                text-align:left; 
                margin:0;
                padding:0;
                float:left;
                width: 1350px;
                height: 600px;
                position: relative;
            }
            #sliderImage
            {
                position: relative;
                left:0;
                top:0;
                width:100%;
                height:550px;
                overflow:hidden;
            }
            #slideshow
            {
                zoom: 1; 
                position: relative;
                margin:0 auto;
                border:none;
                text-align:left;
            }
            #slideshow #slideshowWindow {
                width:100%;
                margin:0;
                padding:0;
                position:relative;
                overflow:hidden;
                height: 550px;
            }

            #slideshow #slideshowWindow .slide .slideText {
                position: relative;
                margin:0;
                padding:0;
                color:#ffffff;
                font-family:Myriad Pro, Arial, Helvetica, sans-serif;
            }

            #slideshow #slideshowWindow .slide .slideText a:link, 
            #slideshow #slideshowWindow .slide .slideText a:visited {
                color:#ffffff;
                text-decoration:none;
            }

            #slideshow #slideshowWindow .slide .slideText h2, 
            #slideshow #slideshowWindow .slide .slideText p {
                margin:10px 0 0 10px;
                padding:0;
            }

            .nav {
                display:block;
                text-indent:-10000px;
                position:relative;
                cursor:pointer;
            }

            #leftNav {
                top:223px;
                left:10px;
                position: relative;
                z-index:999;
            }

            #rightNav {
                //left:400px;      
                position: relative;      
                z-index:999;
            }
            .sliderTable
            {
                width: 100%;
            }
            .slideContents
            {
                top:-167px;
                background-color: #000;
                color: #fff;
                left:6.5%;
                position:relative;
                margin: 0px;
                padding: 10px;
                width: 400px;
                opacity: 0.5;
                border-radius: 5px;
            }


        </style>



        <script type="text/javascript">
   
            
    
            $(document).ready(function() {

                slider();
                var currentPosition = 0;
                var slideWidth = 1350;
                var slides = $('.slide');
                var numberOfSlides = slides.length;
                var slideShowInterval;
                var speed = 5000;

                //Assign a timer, so it will run periodically
                slideShowInterval = setInterval(changePosition, speed);

                slides.wrapAll('<div id="slidesHolder"></div>')

                //slides.css({ 'float' : 'left' });

                //set #slidesHolder width equal to the total width of all the slides
                $('#slidesHolder').css('width', slideWidth * numberOfSlides);

                $('#slideshow')
                .append('<span class="nav" id="leftNav">Move Left</span>')
                .append('<span class="nav" id="rightNav">Move Right</span>');

                manageNav(currentPosition);

                //tell the buttons what to do when clicked
                $('.nav').bind('click', function() {

                    //determine new position
                    currentPosition = ($(this).attr('id') == 'rightNav')
                        ? currentPosition + 1 : currentPosition - 1;

                    //hide/show controls
                    manageNav(currentPosition);
                    clearInterval(slideShowInterval);
                    slideShowInterval = setInterval(changePosition, speed);
                    moveSlide();
                });

                function manageNav(position) {
                    //hide left arrow if position is first slide
                    if (position == 0) {
                        $('#leftNav').hide()
                    }
                    else {
                        $('#leftNav').show()
                    }
                    //hide right arrow is slide position is last slide
                    if (position == numberOfSlides - 1) {
                        $('#rightNav').hide()
                    }
                    else {
                        $('#rightNav').show()
                    }
                }


                /*changePosition: this is called when the slide is moved by the 
                 timer and NOT when the next or previous buttons are clicked*/
                function changePosition() {
                    if (currentPosition == numberOfSlides - 1) {
                        currentPosition = 0;
                        manageNav(currentPosition);
                    } else {
                        currentPosition++;
                        manageNav(currentPosition);
                    }
                    moveSlide();
                }


                //moveSlide: this function moves the slide 
                function moveSlide() {
                    $('#slidesHolder')
                    .animate({'marginLeft': slideWidth * (-currentPosition)});
                }
                
                function slider()
            {
                var i = 0;
                var base_url = '<?php echo base_url(); ?>';
                var sliderJson = <?php echo $slider_json ?>;
      
                var tbl = "";
                for (i = 0; i < sliderJson.length; i++)
                {
                    var ftbl = '<div class="slide"><table class="sliderTable">';
                    tbl = '<tr><td><img src=' +
                        base_url + 'contents/uploads/images/' +
                        sliderJson[i].slide_image + ' id="sliderImage" ></td></tr><tr><td><div class="slideContents"><h2>' +
                        sliderJson[i].slide_name +
                        '</h2><p>' +
                        sliderJson[i].slide_content + '</p> <div class="sliderContent"><div class="contentContainerFooterLeft"><h4>' +
                        '</h4></div></div></div></td>';
                    var ltbl = '</table></div>';
                    $("#slideshowWindow").append(ftbl + tbl + ltbl);
                }
            }
                

            });
        </script>       

    </head>

    <body>














        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '798589833503780',
                    status     : true,
                    xfbml      : true
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>



        <div id="full">

            <!--slider is called here-->
            <div id="slider">
                <div id="slideshow">
                    <div id="slideshowWindow">
                        <!-- from here the details starts and it must be replaced by slider-->

                        <!-- here the details ends-->


                    </div></div>
                <!-- Start WOWSlider.com BODY section 
                <div id="wowSlider">
                    <div class="ws_images"><ul>
                                  
                <?php // foreach ($slidequery as $data) {
                ?>  
                            
                            <li><div class='ws-title' ><?PHP //echo $data->slide_name."<br/>".$data->slide_content;   ?></div> <img src="<?php //echo base_url();   ?>contents/uploads/images/<?php //echo $data->slide_image;   ?>" /> </li> <?php // }   ?>
                           
                          
                        </ul>
                    </div>
                    
                </div>
                -->


                <div id="header">

                    <?php foreach ($headerlogo as $header) {
                        ?>


                        <img src="<?php echo base_url() . 'contents/uploads/images/' . $header->description; ?>"  />

                    <?php } ?>



                </div>





                <div id="facebookLikeButton">
                    <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fchitwangaidalodge&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:65px;" allowTransparency="true"></iframe>


                </div>   







                <div id="home"> <img src="<?php echo base_url(); ?>contents/uploads/images/desktop.png" /> </div>
                <div id="navigation">
                    <ul>
                        <?php
                        $this->load->helper('menumaker_helper');

                        fetch_menu(query(0));
                        ?>

                    </ul>
                </div>         
                <div id="search">
    <!--                <img src="<?php echo base_url(); ?>contents/uploads/images/ic_action_search.png" /> -->
                    <script>
                        (function() {
                            var cx = '003019572812212623629:qfw16gumyik';
                            var gcse = document.createElement('script');
                            gcse.type = 'text/javascript';
                            gcse.async = true;
                            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                                '//www.google.com/cse/cse.js?cx=' + cx;
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(gcse, s);
                        })();
                    </script>
                    <style>
                        .gsc-search-box td.gsc-search-button
                        {
                            display: none;
                        }

                        .cse .gsc-control-cse, .gsc-control-cse {
                            padding: 0px;
                            margin: 0px -10px 0px 0px;
                            width: 99%;
                            max-height: 0px;
                        }
                        #___gcse_0
                        {
                            width:90%;
                            margin: 0px -40px 0px 0px;
                            padding: 10px 10px 0px 0px;
                        }
                        .gsc-control-wrapper-cse{
                            width: 150%;
                            margin: 0px 12px 0px -53px;
                        }
                        .gsc-control-cse gsc-control-cse-en
                        {
                            display: none; 
                        }
                        .gsc-search-box-tools .gsc-search-box .gsc-input {
                            padding: 0px;
                        }
                        form.gsc-search-box {
                            font-size: 13px;
                            margin: -2px 0 4px;
                            width: 106%;
                        }
                    </style>
                    <gcse:search></gcse:search>
                </div>
            </div>

            <!-- slider div with navigation and header image is closed here-->   


            <div class="clear"></div>
            <div class="full_view">
                <!-- Check in check out div is closed here-->   

