<html>
    <head>
        <link rel="stylesheet" href="puestoDeFrutas.css">
    </head>
    <body>
        <h1>Verduleria de pepe</h1>
        <div class="kgDeFrutas">
            <h2>Consumo final</h2>
            <h3>A continuacion se detallan los totales de su compra.</h3>
        
            <?php 
            $kiloBananas = 3;
            $kiloManzanas = 3;
            $precioBan = 40;
            $precioMan = 45;

            $multiBan = $kiloBananas * $precioBan;
            $multiMan = $kiloManzanas * $precioMan;

            $sumaKilosDeFrutas= $multiBan + $multiMan;

            echo $kiloBananas." kg de bananas *$ ".$multiBan."<br>".$kiloManzanas." kg de manzanas *$ ".$multiMan."<br>";
            echo "Total: $".$sumaKilosDeFrutas;
            
            ?>
        </div>

</body>
</html>