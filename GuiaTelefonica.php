

<?php
    
    echo '<html>

    <head>
        <title>Chicharronera</title>
    </head>
    <body>
        <form method = "POST">
            <label >Nombre:</label>
            <input type="text" name="nombre">
            <br>
            
            <label>Telefono</label>
            <input type="text" name = "telefono">
            
            
            <br>
            <button type ="Agregar">Calcular</button>
            <label>Se ha agregado el usuario </label>
        </form>
    </body>

    </html>';

    function agregar(){


        $nombre = $_POST['nombre']; //
        $telefono = $_POST['telefono']; //

        $persona = array(
            "name" => $nombre,
            "phone" =>$telefono
        );
        
        echo $contactos;
        $contactos = array($persona);
        echo $contactos;


        echo '<ul>
            <li type = "circle">'.$contactos[0]["name"].'</li>
            <li type = "circle">'.$contactos[0]["phone"].'</li>
        </ul>';
    }

    echo agregar();

?>