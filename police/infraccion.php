<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>TransitNet</title>
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.css">
    <script src="../js/jquery-1.10.2.js"></script>
	<script src="../js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>
</head>

<body>
    <div data-role="page" id="inicio">
        <div data-role="header" data-theme="a">
            <img src="../img/logo.png">
        </div>
        <div data-role="content">          
            <form name="Multa" action="" method="POST">
                <label for="numero_placa">Numero de placa:</label>
                <input type="text" name="numero_placa" id="pumero_placa">
                <label for="nom_conductor">Nombre del Conductor:</label>
                <input type="text" name="fname" id="nom_conductor">
                <label for="l_infraccion">Lugar de infraccion:</label>
                <input type="text" name="l_infraccion" id="l_infraccion">
                <label for="placa">Placa:</label>
                <input type="text" name="placa" id="placa">
                <label for="observacion">Observación:</label>
                <textarea name="observacion" id="observacion"></textarea>
                <label for="dia_multa">Fecha</label>
                <input type="date" name="dia_multa" id="dia_multa">
                <label for="doc_retenido">Documento Retenido</label>
                <select>
                    <option>Licencia Motociclista</option>
                    <option>Licencia Automovilista</option>
                    <option>Licencia Chofer</option>
                    <option>Tarjeta de Circulacion</option>
                </select>
                <label for="N_unidad">Numero de unidad</label>
                <input type="text" name="N_unidad">

                <input type="submit" value="Enviar" name="Enviar">
                <input type="reset" value="Cancelar" name="Cancelar">
            </form>
        </div>
        <div data-role="footer" data-position="fixed" data-theme="a">
            <img src="../img/cancun_logo.png">
        </div>
    </div>
    <!-- PAGINA DE INICIO -->


    
</body>
</html> 