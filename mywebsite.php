<!DOCTYPE html>
<html>
    <head>
        <title>
            Dana's website
        </title>
        <style type = "text/css">
            body{
                background-image:url(back.jpg);
                background-size: cover;
                background-attachment: fixed;
            }
            .blocK{
            display: block;
            width:40%;
            border : none;
            background-color: white;
            padding: 10px 10px;
            cursor: pointer;
            margin-left : auto;
            margin-right: auto; 
        }
        .buttonsAll{
            display: block;
            width:30%;
            border : none;
            background-color: white;
            padding: 10px 15px;
            cursor: pointer;
            text-align: center;
            margin-left : auto;
            margin-right: auto; 
           
        }
            </style>
        <meta charset = "utf-8">
    </head>

    <body>
        <p style = "text-align:center;">
                 <button type = "button" > 
                    <?php $link_name = "Forward"; ?>
                    <a href = "F.php"><?php echo $link_name;?></a>
                    <img src = "up.jpg" alt ="website" class = "buttonsAll">
                </button>
        </p>

        <p style = "text-align:left;">
            <button type = "button" > 
                     <?php $link_name = "Left"; ?>
                    <a href = "L.php"><?php echo $link_name;?></a>
                <img src = "l.jpg" alt ="website" class = "buttonsAll">
            </button>
        </p>

        <p style = text-align:center;> 
            <button type = "button" > 
                <?php $link_name = "STOP"; ?>
                <a href = "main.php"><?php echo $link_name;?></a>
            </button>
        </p>

        <p style = "text-align:right;">
            <button type = "button" > 
                    <?php $link_name = "Right"; ?>
                    <a href = "R.php"><?php echo $link_name;?></a>
                <img src = "r.jpg" alt ="website" class = "buttonsAll">
            </button>
        </p>

       <p style = "text-align:center;">
            <button type = "button" > 
                <?php $link_name = "Downward"; ?>
                <a href = "D.php"><?php echo $link_name;?></a>
                <img src = "d.jpg" alt ="website" class = "buttonsAll">
            </button>
        </p>
                <a href = "main.php">
                <img src = "well.jpg" alt ="website" class = "block">

             <button type = "button" class= "block">


            </button>
        </a>
    </body>
</html>

