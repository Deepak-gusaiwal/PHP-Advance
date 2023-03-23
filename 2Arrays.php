<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<style>
    .container{
        min-width: 200px;
        min-height: 200px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 1rem;
        border-radius: 3rem;
        box-shadow: 2px 2px 5px black;
        font-size: 3rem;
        gap: 0.5rem;
    }
</style>
<body>
    <h1>Arrays in PHP</h1>
    <?php
    $Students = [
            [
                "name"=>"Ram",
                "Age"=>"23"
            ],
            [
                "name"=>"Shyam",
                "Age"=>"20"
            ],
            [
                "name"=>"Mohan",
                "Age"=>"21"
            ],
        ];

    foreach ($Students as $data) {
       echo '
       <div class="container">
       <h5>'.$data['name'].'</h5>
       <h5>'.$data['Age'].'</h5>
       </div>
       ';
    };

    // Switchs in php
    $favColor = 'fsfs';
    switch ($favColor) {
        case 'red':
            echo "favorite color is red";
            break;
        case 'yellow':
            echo "favorite color is yellow";
            break;
        
        default:
          echo 'your favorite color is'. $favColor;
            break;
    }
    ?>
</body>
</html>