<?php
 
$submit = filter_input(INPUT_POST, 'submit');
 
$paste = filter_input(INPUT_POST, 'paste');
$ham = filter_input(INPUT_POST, 'ham');
$cheese = filter_input(INPUT_POST, 'cheese');
 
?>
 
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generátor pizzy</h1>
 
    <?php
    if(isset($submit)) { ?>
 
        <h2>Potvrzení objednávky</h2>
        <p>Děkujeme za vaši objednávku, kterou vám odvezeme co nejdříve.</p>
        <p>Objednal jste si pizzu s:</p>
        <p><?= $paste ?> těsto</p>
        <?php 
        if(isset($cheese)) { ?>
            <p>se sýrem</p>
        <?php } 
        if(isset($ham)) { ?>
            <p>se šunkou</p>
        <?php } 
        
        ?>
    
 
    <?php } else {
        
 
    ?>
    <form action="index.php" method="post">
        <h2>Typ těsta</h2>
        <input type="radio" name="paste" id="gluten-free" value="gluten-free">
        <label for="gluten-free">Bezlepkové</label>
        
        <input type="radio" name="paste" id="normal" value="normal">
        <label for="normal">Normální</label>
        
        <br>
        <br>
        <h2>Přílohy</h2>
        <input type="checkbox" name="ham" id="ham">
        <label for="ham">Šunka</label>
 
        
        <input type="checkbox" name="cheese" id="cheese">
        <label for="cheese">Sýr</label>
        
        <br>
        <br>
        <input type="submit" name="submit" value="Objednat pizzu">
    </form>
 
    <?php } ?>
</body>
</html>
