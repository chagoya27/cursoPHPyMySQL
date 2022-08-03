

<?php
    
    echo '<html>

    <head>
        <title>Chicharronera</title>
    </head>
    <body>
        <form method = "POST">
            <input type="text" name="a">
            <label >x^2 +</label>
            

            <input type="text" name = "b">
            <label> x +</label>
            
    

            
            <input type="" name="c">
            <label> = 0</label>

            <br>
            <button type ="submit">Calcular</button>
            <label>El resultado es: </label>

        </form>
    </body>

    </html>';

    function calcular(){
        $a = $_POST['a']; //termino cuadrado
        $b=$_POST['b']; //termino de x
        $c = $_POST['c']; //termino independiente

        $raiz = ($b*$b) - (4*$a*$c); //valor de la raiz


        if($raiz<0){
            $raiz = sqrt ( (-1) *$raiz);
            
            echo 'x1 = '.round( (-$b)/(2*$a),2).' + '.round(($raiz)/(2*$a),2)  .'i <br>';
            echo 'x2 = ' .round ( (-$b)/(2*$a),2 ).' - '.round(($raiz)/(2*$a),2) .'i <br>';
        }
        else{
            $raiz = sqrt($raiz);
            echo 'x1 = '.( (-$b)+($raiz) )/(2*$a).'<br>';
            echo 'x2 = '.( (-$b)-($raiz) )/(2*$a).'<br>';
        }
    }
    echo calcular();

?>