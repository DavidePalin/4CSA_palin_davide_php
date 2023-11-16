<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

</head>

<body>
    <h1 style="text-align:center;color:rgb(222, 164, 135)">Menù del ristorante "Alla Torre"</h1>

    <?php
        $a=["Tagliatelle"=>5.10,"Carbonara"=>4.50,"Amatriciana"=>10.00,"Pizza"=>7.00,"Tiramisù"=>2.00,"Caffè"=>1.00];
        foreach($a as $c=>$v)
        {
        echo "<div class='container text-center'>";
        echo "<div class='row align-items-start'>";
        echo "<div class='col'>";
            if ($c === "Tagliatelle")
            {
                echo "<br><br>";
                echo "<img src='https://media-assets.lacucinaitaliana.it/photos/61fb130ae334e788eab040b9/3:2/w_1200,h_800,c_limit/Tagliatelle-con-rag%C3%B9-alla-bolognese.jpg' style='width:700px'";
            }elseif($c === "Pizza")
            {
                echo "<br><br>";
                echo "<img src='https://www.saporinostri.it/wp-content/uploads/2020/10/le-origini-della-pizza-napoletana-e1601990439881.jpg' style='width:700px'";
            }elseif($c === "Carbonara")
            {
                echo "<br><br>";
                echo "<img src='https://www.casapappagallo.it/storage/17105/carbonara.JPG' style='width:700px'";
            }elseif($c === "Tiramisù")
            {
                echo "<br><br>";
                echo "<img src='https://cdn.cook.stbm.it/thumbnails/ricette/9/9648/hd750x421.jpg' style='width:700px'";
            }elseif($c === "Amatriciana")
            {
                echo "<br><br>";
                echo "<img src='https://cdn.cook.stbm.it/thumbnails/ricette/1/1198/hd750x421.jpg' style='width:700px'";
            }else
            {
                echo "<br><br>";
                echo "<img src='https://www.galbani.it/sites/default/files/comefare_incucina_caffe_big.jpg' style='width:700px'";
            }
            echo "<br><br><br><br><br><br><br>";
        echo "</div>";
        echo "<div class='col'>";
            echo $c." ".$v ;
            echo "€";
            if ($c === "Tagliatelle")
            {
                echo "<p style:'text-align:center'>";
                echo "<br><br>";
                echo "Ingredienti per il ragù: <br>";
                echo "Carne macinata di manzo, ";
                echo "Cipolla, ";
                echo "Carota, ";
                echo "Sedano, ";
                echo "Aglio, ";
                echo "Pomodori pelati o passata di pomodoro, ";
                echo "Concentrato di pomodoro, ";
                echo "Vino rosso, ";
                echo "Brodo di carne, ";
                echo "Olio d'oliva, ";
                echo "Sale e pepe, ";
                echo "Foglie di alloro";
                echo "<br><br>";
                echo "Ingredienti per le tagliatelle: <br>";
                echo "Farina di grano duro, ";
                echo "Uova, ";
                echo "Sale";
                echo "<br>";
                echo "</p>";
            }elseif($c === "Pizza")
            {
                echo "<p style:'text-align:center'>";
                echo "<br><br>";
                echo "Impasto: <br>";
                echo "Classica, ";
                echo "Farina di kamut, ";
                echo "Integrale, ";
                echo "Cereali, ";
                echo "Farro";
                echo "<br><br>";
                echo "Salse: <br>";
                echo "Pomodoro, ";
                echo "Pesto, ";
                echo "Alfredo (bianca)";
                echo "<br><br>";
                echo "Formaggi: <br>";
                echo "Mozzarella, ";
                echo "Parmigiano reggiano, ";
                echo "Gorgonzola, ";
                echo "Fontina";
                echo "<br><br>";
                echo "Condimenti: <br>";
                echo "Patatine fritte, ";
                echo "Salamino piccante, ";
                echo "Tonno, ";
                echo "Cipolla, ";
                echo "Peperoni, ";
                echo "Rucola, ";
                echo "Funghi, ";
                echo "Wurstel, ";
                echo "Prosciutto";
                echo "<br>";
                echo "</p>";
            }elseif($c === "Carbonara")
            {
                echo "<p style:'text-align:center'>";
                echo "<br><br>";
                echo "Ingredienti: <br>";
                echo "Pecorino romano DOP, ";
                echo "Guanciale, ";
                echo "Uova, ";
                echo "Pepe nero";
                echo "<br>";
                echo "</p>";
            }elseif($c === "Tiramisù")
            {
                echo "<p style:'text-align:center'>";
                echo "<br><br>";
                echo "Ingredienti: <br>";
                echo "Uova, ";
                echo "Zucchero, ";
                echo "Mascarpone, ";
                echo "Savoiardi, ";
                echo "Caffè espresso, ";
                echo "Cacao in polvere, ";
                echo "Marsala, ";
                echo "Vaniglia";
                echo "<br>";
                echo "</p>";
            }elseif($c === "Amatriciana")
            {
                echo "<p style:'text-align:center'>";
                echo "<br><br>";
                echo "Ingredienti: <br>";
                echo "Guanciale, ";
                echo "Pomodoro pelato, ";
                echo "Pepe nero, ";
                echo "Pecorino romano DOP, ";
                echo "Peperoncino fresco";
                echo "<br>";
                echo "</p>";
            }else
            {
                echo "<p style:'text-align:center'>";
                echo "<br><br>";
                echo "Tipologie: <br>";
                echo "Espresso, ";
                echo "Macchiato, ";
                echo "Macchiatone, ";
                echo "Capuccino, ";
                echo "Ristretto, ";
                echo "Mocha, ";
                echo "Affogato, ";
                echo "Lungo, ";
                echo "<br>";
                echo "</p>";
            }
        echo "</div>";
        echo "</div>";
        echo "</div>";
        }
    ?>
</body>
<style>
    body
    {
        background-color:rgb(255, 253, 208);
        font-family:'Montserrat';
        padding-left: 3cm;
        padding-right: 3cm;
    }
</style>