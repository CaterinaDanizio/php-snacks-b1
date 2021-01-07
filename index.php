<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
      include 'data/data.php';
    ?>
</head>
<body>
  <div class="container">
      <h1>Scopri i nostri migliori hotel</h1>
        <ul class="flex">
                <?php
                    foreach ($hotels as $key => $values) {
                ?>
                <li>
                    <?php
                        foreach ($values as $data => $text) {
                            if ($text === true) {
                                $text = "Sì";
                            } else if ($text === false) {
                                $text = "No";
                            };
                            ?>
                                <h2><?php echo $data .":" . " " . $text ?></h2>
                            <?php
                        }
                    ?>
                </li>
            <?php
            }
        ?>    
        </ul>
  </div>
</body>
</html>

