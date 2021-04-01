<html>
    <head>
        <title>SpeedRUN Bedankt</title>
    </head>
    <style>
        body{
            background-color: #89CFF1;
            text-align: center;
            font-family: arial;
            font-size: 40px;
        }
        </style>
    <body>
        <?php
            error_reporting(0);
            $naam = $_POST[firstname];
            echo "Beste $naam, <br/> Bedankt voor uw bestelling.";
            echo "<meta http-equiv=\"refresh\" content=\"1; url=../index.html\" />";
        ?>
    </body>   
</html>