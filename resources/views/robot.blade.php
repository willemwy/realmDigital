<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            body {
                background-color: #666;
                margin: 10px;
            }

            /*! Light */
            #light {
                background-color: #000;
                box-shadow: 0 0 5px rgba(0,0,0, .8);
                overflow: hidden;
                padding: 0 0 4px;
                width: 40px;
            }

            #light span {
                border-radius: 50px;
                display: block;
                height: 30px;
                margin: 4px auto 0;
                opacity: .5;
                width: 30px;
            }

            /*! Lightbig */
            #lightbig {
                background-color: #000;
                box-shadow: 0 0 5px rgba(0,0,0, .8);
                overflow: hidden;
                padding: 0 0 4px;
                width: 200px;
            }

            #lightbig span {
                border-radius: 250px;
                display: block;
                height: 150px;
                margin: 4px auto 0;
                opacity: .5;
                width: 150px;
            }

            /*! Light colours */
            .red    { background-color: red; }
            .orange { background-color: orange; }
            .green  { background-color: green; }

            /*! Active states */
            #light span.active    { opacity: 1; }
            #lightbig span.active    { opacity: 1; }
            .red.active    { box-shadow: 0 0 10px red; }
            .orange.active { box-shadow: 0 0 10px orange; }
            .green.active  { box-shadow: 0 0 10px green; }

        </style>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="application/javascript">
            $(document).ready(function(){
                $(".colour").hover(function(){
                    $("#showColour").text($(this).data("colour"));
                });
                $(".colour").click(function(){
                    $(this).toggleClass("active");
                });
            });
        </script>
    </head>
    <body>
    <div id="light">
        <span class="colour red" data-colour="red"></span>
        <span class="colour orange" data-colour="orange"></span>
        <span class="colour green" data-colour="green"></span>
    </div>
    <br>
    <br>
    <div id="lightbig">
        <span class="colour red" data-colour="red"></span>
        <span class="colour orange" data-colour="orange"></span>
        <span class="colour green" data-colour="green"></span>
    </div>
    <br>
    <br>
    Colour: <span id="showColour"></span>
    </body>
</html>
