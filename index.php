<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<f, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Generátoe Pizzy </h1>
    <form action="index.php" method="post">
    <h2> Typ těsta <h2>

       <label for="gluten-free"> Bezlepkové </label>
       <input type="radio" name="dough" id="" value="gluten-free">

       <label for="normal"> Normální </label>
       <input type="radio" name="paste" id="normal" value="normal">

       <br>
       <br>

       <h2> Přílohy </h2>

       <label for="ham"> Šunka </label>
       <input type="checkbox" name="ham" id="ham">

       <label for="cheese"> Sýr </label>
       <input type="checkbox" name="cheese" id="cheese">

       <br>
       <br>
       <input type="submit" value="Objednat pizzu">
       
    </form>
</body>
</html>