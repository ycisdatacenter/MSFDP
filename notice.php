<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

    <title></title>

    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!--<script src="js/jquery.min.js"></script>-->

    <link href="css/normalize.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/responsive.css">

    <link rel="icon" href="images/nitrr.gif">



</head>



<body style="background-image: none; ">



    <div class="container">



        <div class="row">



            <div class="col-xs-12 HomeContentInner">

                <div id="datacontainer" onmouseover=scrollspeed=0 style="left: 0; position: absolute; TOP: 0;" onmouseout=scrollspeed=cache>

                    
                    <article class="post post_mod-e clearfix">

                        <div class="box-date"><span class="number">10</span>January-2026</div>

                        <div class="entry-main">

                            <h3 class="entry-title entry-title_mod-a"><a href="#"><h4>Abstract Submission Deadline</h4></a></h3>

                        </div>

                    </article>
                    
                    <article class="post post_mod-e clearfix">

                        <div class="box-date"><span class="number">15</span> January-2026</div>

                        <div class="entry-main">

                            <h3 class="entry-title entry-title_mod-a"><a href="#"><h4>Full Length Papers</h4></a></h3>

                        </div>

                    </article>
                    
                    <article class="post post_mod-e clearfix">

                     <div class="box-date"><span class="number">15</span> January-2026</div>

                       <div class="entry-main">

                      <h3 class="entry-title entry-title_mod-a"><a href="#"><h4>Registration Deadline</h4></a></h3>

                    </div>

                    </article>

                    <br>
    
                </div>

            </div>

        </div>

    </div>



    <script type=text/javascript>

        //Specify speed of scroll. Larger=faster (ie: 5)

        var scrollspeed = cache = 1



        //Specify intial delay before scroller starts scrolling (in miliseconds):

        var initialdelay = 200



        function initializeScroller() {

            dataobj = document.all ? document.all.datacontainer : document.getElementById("datacontainer")

            dataobj.style.top = "5px"

            setTimeout("getdataheight()", initialdelay)

        }



        function getdataheight() {

            thelength = dataobj.offsetHeight

            if (thelength == 0)

                setTimeout("getdataheight()", 10)

            else

                scrollDiv()

        }



        function scrollDiv() {

            dataobj.style.top = parseInt(dataobj.style.top) - scrollspeed + "px"

            if (parseInt(dataobj.style.top) < thelength * (-1))

                dataobj.style.top = "5px"

            setTimeout("scrollDiv()", 40)

        }



        if (window.addEventListener)

            window.addEventListener("load", initializeScroller, false)

        else if (window.attachEvent)

            window.attachEvent("onload", initializeScroller)

        else

            window.onload = initializeScroller

    </script>



</body>



</html>