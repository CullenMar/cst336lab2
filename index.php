<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        
        <img src="/lab/777/img/cherry.png"/>
        
        <?php
            $randomValue = rand(0,2);
            if ($randomValue == 0) {
                echo '<img src="/lab/777/img/seven.png" alt="seven" title="Seven" width="70" />';
            } else if ($randomValue == 1) {
                echo '<img src="/lab/777/img/cherry.png" alt="cherry" title="Cherry" width="70" />';
            } else if ($randomValue == 2) {
                echo '<img src="/lab/777/img/lemon.png" alt="lemon" title="Lemon" width="70" />';
            }
        ?>
        
    </body>
</html>