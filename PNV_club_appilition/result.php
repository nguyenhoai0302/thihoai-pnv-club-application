<!DOCTYPE html>
<html>
<head>
    <title>PNV Club application</title>  
    <link rel="stylesheet" href="index.css">
</head>
<body >
    <div class="container" style="width: 30%">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQns56n6aMCdwyEVyHVe0cfiFt8hsaNccTHWkKtTDvul_ZcadgN">
        <div class="form">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $club = $_POST["clubname"];
                $time = $_POST["time"];
                $skills = $_POST["skills"];
            }
            ?>
            <h1>Thank you <?php echo $name; ?> !!</h1>
            <p>We received your application for the <?php echo $club; ?></p>
            <?php 
                if (isset($skills)) {
                    $nameskill = implode(" and ", $skills);
                    echo "You are $nameskill";

                } else {
                    echo "No skills selected";
                }
            ?>
            <p>You will be available on <?php echo $time; ?></p>
        </div>
       
    </div>
   
</body>
</html>