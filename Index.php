<!DOCTYPE html>
<html>

<head>
    <title>Test Technique</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./format.css"/>
</head>

<body>
<?php include 'APIControleur.php';?>
<script type="text/javascript">

        function getDate() {
            debugger;
            var date = document.getElementById("dat").value;
                $.ajax({
                    type: "POST",
                    data: {val: date}
                });
        }
</script>
<div class="jumbotron text-center">
    <h3>Test Technique pour Zerospam Sécurité</h3>
    <h1>Convertisseur CAD au USD</h1>
</div>
<div class="container">
    <form class="form-inline" method = "post" action="Index.php" >
      <p> Veuillez choisir une date:</p>
        <div class="form-group">
            <input id="dat" name="dt" type="date" value = "<?php echo isset($_POST['dt'])? $_POST['dt']: date("Y-m-d")?>" max="<?php echo date("Y-m-d")?>">

            <input name="submit" type = "submit" value="OK" onclick="getDate();">
            <label for="LCAD">CAD:</label>
            <input type="LCAD" class="form-control"  placeholder="1.00">

            <label for="LUSD">USD:</label>
            <input type="LUSD" class="form-control"  placeholder="<?php echo getUSD(); ?>">
        </div>
    </form>
</div>
<footer >

    <p> Projet réalisé par:Elalia BRENKIA</p>
    <p>2021</p>

</footer>

</body>

</html>