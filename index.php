<?php
 
$submit = filter_input(INPUT_POST, 'submit');
 
$paste = filter_input(INPUT_POST, 'paste');
$ham = filter_input(INPUT_POST, 'ham');
$cheese = filter_input(INPUT_POST, 'cheese');
$ananas = filter_input(INPUT_POST, 'ananas');
$feferonky = filter_input(INPUT_POST, 'peperoni');
$salam = filter_input(INPUT_POST, 'salam');
$spenat = filter_input(INPUT_POST, 'spenat');
$krevety = filter_input(INPUT_POST, 'krevety');
$tunak = filter_input(INPUT_POST, 'tunak');
$slanina = filter_input(INPUT_POST, 'slanina');
$parmazam = filter_input(INPUT_POST, 'parmazan');
 
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
            <p> se sýrem </p>
        <?php } 
        if(isset($ham)) { ?>
            <p> se šunkou </p>
        <?php }
        if(isset($ananas)) { ?>
            <p> s ananasem </p>
        <?php }
        if (isset($feferonky)) { ?>
            <p> s feferonky </p>
        <?php }
        if (isset($salam)) { ?>
            <p> se salámem </p>
        <?php }
        if (isset($spenat)) { ?>
            <p> se špenátem </p>
        <?php }
        if (isset($krevety)) { ?>
            <p> s krevetama </p>
        <?php }
        if (isset($tunak)) { ?>
            <p> s tuňákem </p>
        <?php }
        if (isset($slanina)) { ?>
            <p> se slaninou </p>
        <?php }
        if (isset($parmazam)) { ?>
            <p> s parmazánem </p>
    
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

        <input type="checkbox" name="ananas" id="ananas">
        <label for="ananas"> Ananas </label>
        
        <input type="checkbox" name="peperoni" id="peperoni">
        <label for="peperoni"> Feferonky </label>

        <input type="checkbox" name="salam" id="salam">
        <label for="salam"> Salám </label>

        <input type="checkbox" name="spenat" id="spenat">
        <label for="spenat"> Špenát </label>

        <input type="checkbox" name="krevety" id="krevety">
        <label for="krevety"> Krevety </label>

        <input type="checkbox" name="tunak" id="tunak">
        <label for="tunak"> Tuňák </label>

        <input type="checkbox" name="slanina" id="slanina">
        <label for="slanina"> Slanina </label>

        <input type="checkbox" name="parmazan" id="parmazan">
        <label for="parmazan"> Parmazán </label>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <input type="submit" name="submit" value="Objednat pizzu">
    </form>
</body>
</html>