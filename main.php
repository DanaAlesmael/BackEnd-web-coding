
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
        .content{
            text-align: center;
            color: blue;
            font-size: 50px; 
            font-weight: bold;
        }
        .center{
            display: block;
            margin-left: auto;
            margin-right:auto; 
        }
        .blocK{
            display: block;
            width:80%;
            border : none;
            background-color: Lightgray;
            padding: 14px 28px;
            cursor: pointer;
            text-align: center;
            margin-left : auto;
            margin-right: auto; 
            font-size:20px; 
            font-weight: bold;
            color: blue;
        }

        </style>
    </head>
    <body>
        <p type="write" class= "content"> Dana's Robotic controlling website
        </p>

        <img src = "3.jpg" alt ="website" class = "center">
                <button type = "button" class= "block">
                     <?php $link_name = "START"; ?>
                <a href = "mywebsite.php"><?php echo $link_name;?></a>  
           </button>
       </a>
    </body>
</html>

