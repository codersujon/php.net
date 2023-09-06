<!-- Mix PHP and HTML Code -->
    <p>Try to learn PHP</p>
        <?php 
            $position= "Software Developer";
            echo "I'm going to  be a professional $position.";
        ?>
    <p>Try to learn PHP</p>

<?php 
    /**
     *  Advanced escaping using conditions
     * ? Escaping for IF else, For Loop
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <!-- Example: 1 -->
        <?php $a = 50; if($a == 10): ?> 
            Red Color
        <?php elseif($a == 20): ?>
            Green Color
        <?php else: ?>
            Primary Color
        <?php endif; ?>
    </title>
</head>
<body>
        <!-- Example: 2 -->
        <h1><?php $height = 10; if($height): ?> class="height" <?php endif;?></h1>
            
        <!-- Example: 3 -->
        <h2>
            <?php for($i=0; $i<10; $i++): ?>
                Awhona Ahmed
                <?php echo "<br>"?>
            <?php endfor; ?>
        </h2>
</body>
</html>