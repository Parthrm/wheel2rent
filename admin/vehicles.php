<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <?php 
        if(isset($_SESSION))
        {
            
        }
        require("../req/header.php");    
    ?>

    <div class="vehicles-container">
        <?php
            require("../req/dbconnect.php");
            $sql = "SELECT * FROM vehicle";
            $result = $con->query($sql);


        ?>
    </div>

</body>
</html>