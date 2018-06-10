
        <?php
		function multiexplode ($delimiters,$string) {	
			$ready = str_replace($delimiters, $delimiters[0], $string);
			$launch = explode($delimiters[0], $ready);
			return  $launch;
        }
            $mensaje = $_GET['m'];
            $exp = multiexplode(array("s"),$mensaje);
            $exp99 = multiexplode(array(","),$mensaje);
            $exp11 = multiexplode(array("*"),$mensaje);
            //echo count($exp99)."<br>";
            $count_matrix = count($exp99);
            $count_matrix = $count_matrix - 1;
            //echo $count_matrix."<br>";
            //echo $exp11[0]."<br>";
            //echo $exp[0]."<br>";
            //echo $exp[1]."<br>";
            if (isset($exp11[1])) {
                if ($count_matrix == 2){
                    ?>
                        <h1>Multiplicación de matrices de 1x1</h1>
                    <?php   
                    $exp1 = multiexplode(array("."),$exp11[0]);
                    $exp2 = multiexplode(array("."),$exp11[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        echo "Matriz 1: {" . $exp3[0] . "}<br><br>";
                        echo "Matriz 2: {" . $exp7[0] . "}<br><br>";
                        $mult1 = $exp3[0] * $exp7[0];
                        echo "El resultado de la operación es:<br> {" .$mult1."}<br>";
                    }else{
                        echo ("La posicion 0,0 no es correcta en alguna de las matrices");
                    }
                    
                }
                if ($count_matrix == 4){
                   
                    $exp1 = multiexplode(array("."),$exp11[0]);
                    $exp2 = multiexplode(array("."),$exp11[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp4 = multiexplode(array("n"),$exp1[1]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    $exp8 = multiexplode(array("m"),$exp2[1]);
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        if ($exp4[1] == "0,1" && $exp8[1] == "1,0"){
                            ?>
                                <h1>Multiplicacion de matrices de 1x2 por 2x1</h1>
                            <?php
                            // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n0,1*4m0,0.9m1,0
                            echo "Matriz 1: {" . $exp3[0] . "," . $exp4[0] . "}<br><br>";
                            echo "Matriz 2: {" . $exp7[0] .  "}<br>";
                            echo "Matriz 2: {" . $exp8[0] .  "}<br><br>";
                            $mult = $exp3[0] * $exp7[0];
                            $mult2 = $exp4[0] * $exp8[0];
                            $res = $mult + $mult2 ; 
                            echo "El resultado de la operación es:<br> {" .$res."}<br>";

                        }elseif ($exp4[1] == "1,0" && $exp8[1] == "0,1"){
                            ?>
                                <h1>Multiplicación de matrices de 2x1 por 1x2</h1>
                            <?php
                            // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n1,0*4m0,0.5m0,1
                            echo "Matriz 1: {" . $exp3[0] . "}<br>";
                            echo "Matriz 1: {" . $exp4[0] . "}<br><br>";
                            echo "Matriz 2: {" . $exp7[0] . ",".$exp8[0]."}<br><br>";
                            $mult = $exp3[0] * $exp7[0];
                            $mult2 = $exp4[0] * $exp8[0];
                            $res = $mult + $mult2;
                            echo "El resultado de la operación es:<br> {" .$res."}";

                        }else{
                            echo ("No se a colocado la posición 1,0 u 0,1 en alguna de las dos matrices correctamente");
                        }

                    }else{
                        echo ("No se a colocado la posición 0,0 en alguna de las dos matrices correctamente");
                    }
                     
                }
                if ($count_matrix == 6){
                    
                    $exp1 = multiexplode(array("."),$exp11[0]);
                    $exp2 = multiexplode(array("."),$exp11[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp4 = multiexplode(array("n"),$exp1[1]);
                    $exp5 = multiexplode(array("n"),$exp1[2]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    $exp8 = multiexplode(array("m"),$exp2[1]);
                    $exp9 = multiexplode(array("m"),$exp2[2]);
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        if ($exp4[1] == "0,1" && $exp8[1] == "1,0"){
                            if ($exp5[1] == "0,2" && $exp9[1] == "2,0"){
                                ?>
                                    <h1>Multiplicación de matrices de 1x3 por 3x1 </h1>
                                <?php       
                                // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n0,1.4n0,2*4m0,0.5m1,0.2m2,0
                                echo "Matriz 1: {" . $exp3[0] . "," . $exp4[0] . ",". $exp5[0]. "}<br><br>";
                                echo "Matriz 2: {" . $exp7[0] . "}<br>";
                                echo "Matriz 2: {" . $exp8[0] . "}<br>";
                                echo "Matriz 2: {" . $exp9[0] . "}<br><br>";
                                $mult = $exp3[0] * $exp7[0];
                                $mult2 = $exp4[0] * $exp8[0];
                                $mult3 = $exp5[0] * $exp9[0];
                                $res = $mult + $mult2 + $mult3;
                                echo "El resultado de la operación es:<br> {" .$res."}<br>";
                            }else {
                                echo ("No se a colocado la posición 0,2 u 2,0 en alguna de las dos matrices correctamente");
                            }
                        }elseif ($exp4[1] == "1,0" && $exp8[1] == "0,1"){
                            if ($exp5[1] == "2,0" && $exp9[1] == "0,2"){
                                ?>
                                    <h1>Multiplicación de matrices de 3x1 por 1x3 </h1>
                                <?php
                                // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n1,0.4n2,0*4m0,0.5m0,1.2m0,2
                                echo "Matriz 1: {" . $exp3[0] . "}<br>";
                                echo "Matriz 1: {" .$exp4[0]. "}<br>";
                                echo "Matriz 1: {" .$exp5[0]. "}<br><br>";
                                echo "Matriz 2: {" . $exp7[0] . "," . $exp8[0] . ",". $exp9[0]. "}<br><br>";
                                $mult = $exp3[0] * $exp7[0];
                                $mult2 = $exp4[0] * $exp8[0];
                                $mult3 = $exp5[0] * $exp9[0];
                                $res = $mult + $mult2 + $mult3;
                                echo "El resultado de la operación es:<br> {" .$res."}<br>";
                            }else{
                                echo ("No se a colocado la posición 2,0 u 0,2 en alguna de las dos matrices correctamente");
                            }

                        }else {
                            echo ("No se a colocado la posición 1,0 u 0,1 en alguna de las dos matrices correctamente");
                        }
                            

                    }else{
                        echo ("No se a colocado la posición 0,0 en alguna de las dos matrices correctamente");
                    }
                    
                }
                if ($count_matrix == 8){

                    $exp1 = multiexplode(array("."),$exp11[0]);
                    $exp2 = multiexplode(array("."),$exp11[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp4 = multiexplode(array("n"),$exp1[1]);
                    $exp5 = multiexplode(array("n"),$exp1[2]);
                    $exp6 = multiexplode(array("n"),$exp1[3]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    $exp8 = multiexplode(array("m"),$exp2[1]);
                    $exp9 = multiexplode(array("m"),$exp2[2]);
                    $exp10 = multiexplode(array("m"),$exp2[3]);
                    
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        if ($exp4[1] == "0,1" && $exp8[1] == "1,0"){
                            if ($exp5[1] == "0,2" && $exp9[1] == "2,0"){
                                if ($exp6[1] == "0,3" && $exp10[1] == "3,0"){
                                    ?>
                                        <h1>Multiplicación de matrices de 1x4 por 4x1</h1>
                                    <?php
                                    // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n0,1.4n0,2.4n0,3*4m0,0.5m1,0.2m2,0.5m3,0
                                    echo "Matriz 1: {" . $exp3[0] . "," . $exp4[0] . ",". $exp5[0]. ",".$exp6[0]. "}<br><br>";
                                    echo "Matriz 2: {" . $exp7[0] . "}<br>";
                                    echo "Matriz 2: {" .$exp8[0]. "}<br>";
                                    echo "Matriz 2: {" .$exp9[0]. "}<br>";
                                    echo "Matriz 2: {" .$exp10[0]. "}<br><br>";
                                    
                                    $mult = $exp3[0] * $exp7[0];
                                    $mult2 = $exp4[0] * $exp8[0];
                                    $mult3 = $exp5[0] * $exp9[0];
                                    $mult4 = $exp6[0] * $exp10[0];
                                    $res = $mult + $mult2 + $mult3 + $mult4;
                                    echo "El resultado de la operación es:<br> {" .$res."}<br>";
                                }else{
                                    echo ("No se a colocado la posición 0,3 u 3,0 en alguna de las dos matrices correctamente");
                                }
                            }

                        }elseif ($exp4[1] == "1,0" && $exp8[1] == "0,1"){
                            if ($exp5[1] == "2,0" && $exp9[1] == "0,2"){
                                if ($exp6[1] == "3,0" && $exp10[1] == "0,3"){
                                    ?>
                                        <h1>Multiplicación de matrices de 4x1 por 1x4</h1>
                                    <?php
                                    // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n1,0.4n2,0.4n3,0*4m0,0.5m0,1.2m0,2.5m0,3
                                    echo "Matriz 1: {" . $exp3[0] . "}<br>";
                                    echo "Matriz 1: {" .$exp4[0]. "}<br>";
                                    echo "Matriz 1: {" .$exp5[0]. "}<br>";
                                    echo "Matriz 1: {" .$exp6[0]. "}<br><br>";
                                    echo "Matriz 2: {" . $exp7[0] . "," . $exp8[0] . ",". $exp9[0]. ",".$exp10[0]. "}<br><br>";
                                    $suma1 = $exp3[0] * $exp7[0];
                                    $suma2 = $exp4[0] * $exp8[0];
                                    $suma3 = $exp5[0] * $exp9[0];
                                    $suma4 = $exp6[0] * $exp10[0];
                                    $res = $suma1 + $suma2 + $suma3 + $suma4;
                                    echo "El resultado de la operación es:<br>";
                                    echo "{" . $res. "}<br>";
                                }else{
                                    echo ("No se a colocado la posición 3,0 u 0,3 en alguna de las dos matrices correctamente");
                                }
                            }else {
                                echo ("No se a colocado la posición 2,0 u 0,2 en alguna de las dos matrices correctamente");
                            }
                        }elseif($exp4[1] == "0,1" && $exp8[1] == "0,1") {
                            if ($exp5[1] == "1,0" && $exp9[1] == "1,0"){
                                if ($exp6[1] == "1,1" && $exp10[1] == "1,1"){
                                    ?>
                                        <h1>Multiplicación de matrices de 2x2</h1>
                                    <?php
                                    //ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n0,1.4n1,0.4n1,1*4m0,0.5m0,1.2m1,0.5m1,1
                                    echo "Matriz 1: {" . $exp3[0] . ", " . $exp4[0] . "}<br>";
                                    echo "Matriz 1: {" . $exp5[0] . ", " . $exp6[0] . "}<br>";
                                    echo "Matriz 2: {" . $exp7[0] . ", " . $exp8[0] . "}<br>";
                                    echo "Matriz 2: {" . $exp9[0] . ", " . $exp10[0] . "}<br><br>";
                                    $mult = $exp3[0] * $exp7[0];
                                    $mult2 = $exp4[0] * $exp9[0];
                                    $suma1 = $mult + $mult2;
                                    $mult3 = $exp3[0] * $exp8[0];
                                    $mult4 = $exp4[0] * $exp10[0];
                                    $suma2 = $mult3 + $mult4;
                                    $mult5 = $exp5[0] * $exp7[0];
                                    $mult6 = $exp6[0] * $exp9[0];
                                    $suma3 = $mult5 + $mult6;
                                    $mult7 = $exp5[0] * $exp8[0];
                                    $mult8 = $exp6[0] * $exp10[0];
                                    $suma4 = $mult7 + $mult8;
                                    echo "El resultado de la operación es:<br> {" .$suma1.",".$suma2."}<br>{".$suma3.",".$suma4."}<br>";
                                }else {
                                    echo ("No se a colocado la posicion 1,1 en alguna de las dos matrices correctamente");
                                }
                            }else{
                                echo ("No se a colocado la posición 1,0 en alguna de las dos matrices correctamente");
                            }
    
                        }
                    
                    }else {
                        echo ("No se a colocado la posición 0,0 en alguna de las dos matrices correctamente");
                    }
                    
                    
                }
                
            }
            if (isset($exp[1])){
                if ($count_matrix == 2){
                    ?>
                        <h1>Suma de matrices de 1x1</h1>
                    <?php   
                    $exp1 = multiexplode(array("."),$exp[0]);
                    $exp2 = multiexplode(array("."),$exp[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        echo "Matriz 1: {" . $exp3[0] . "}<br><br>";
                        echo "Matriz 2: {" . $exp7[0] . "}<br><br>";
                        $suma1 = $exp3[0] + $exp7[0];
                        echo "El resultado de la operación es:<br> {" .$suma1."}<br>";
                    }else{
                        echo ("La posicion 0,0 no es correcta en alguna de las matrices");
                    }
                    
                }
                if ($count_matrix == 4){
                   
                    $exp1 = multiexplode(array("."),$exp[0]);
                    $exp2 = multiexplode(array("."),$exp[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp4 = multiexplode(array("n"),$exp1[1]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    $exp8 = multiexplode(array("m"),$exp2[1]);
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        if ($exp4[1] == "0,1" && $exp8[1] == "0,1"){
                            ?>
                                <h1>Suma de matrices de 1x2</h1>
                            <?php
                            // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n0,1s4m0,0.5m0,1
                            echo "Matriz 1: {" . $exp3[0] . "," . $exp4[0] . "}<br><br>";
                            echo "Matriz 2: {" . $exp7[0] . ","  . $exp8[0] . "}<br><br>";
                            $suma1 = $exp3[0] + $exp7[0];
                            $suma2 = $exp4[0] + $exp8[0];
                            echo "El resultado de la operación es:<br> {" .$suma1.",".$suma2."}<br>";

                        }elseif ($exp4[1] == "1,0" && $exp8[1] == "1,0"){
                            ?>
                                <h1>Suma de matrices de 2x1</h1>
                            <?php
                            // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n1,0s4m0,0.5m1,0
                            echo "Matriz 1: {" . $exp3[0] . "}<br>";
                            echo "Matriz 1: {" . $exp4[0] . "}<br><br>";
                            echo "Matriz 2: {" . $exp7[0] . "}<br>";
                            echo "Matriz 2: {" . $exp8[0] . "}<br><br>";
                            $suma1 = $exp3[0] + $exp7[0];
                            $suma2 = $exp4[0] + $exp8[0];
                            echo "El resultado de la operación es:<br> {" .$suma1."}<br>{".$suma2."}<br>";

                        }else{
                            echo ("No se a colocado la posición 1,0 u 0,1 en alguna de las dos matrices correctamente");
                        }

                    }else{
                        echo ("No se a colocado la posición 0,0 en alguna de las dos matrices correctamente");
                    }
                     
                }
                if ($count_matrix == 6){
                    
                    $exp1 = multiexplode(array("."),$exp[0]);
                    $exp2 = multiexplode(array("."),$exp[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp4 = multiexplode(array("n"),$exp1[1]);
                    $exp5 = multiexplode(array("n"),$exp1[2]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    $exp8 = multiexplode(array("m"),$exp2[1]);
                    $exp9 = multiexplode(array("m"),$exp2[2]);
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        if ($exp4[1] == "0,1" && $exp8[1] == "0,1"){
                            if ($exp5[1] == "0,2" && $exp9[1] == "0,2"){
                                ?>
                                    <h1>Suma de matrices de 1x3 </h1>
                                <?php       
                                // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n0,1.8n0,2s4m0,0.5m0,1.3m0,2
                                echo "Matriz 1: {" . $exp3[0] . "," . $exp4[0] . ",". $exp5[0]. "}<br><br>";
                                echo "Matriz 2: {" . $exp7[0] . ","  . $exp8[0] . ",".$exp9[0]."}<br><br>";
                                $suma1 = $exp3[0] + $exp7[0];
                                $suma2 = $exp4[0] + $exp8[0];
                                $suma3 = $exp5[0] + $exp9[0];
                                echo "El resultado de la operación es:<br> {" .$suma1.",".$suma2.",".$suma3."}<br>";
                            }else {
                                echo ("No se a colocado la posición 0,2 en alguna de las dos matrices correctamente");
                            }
                        }elseif ($exp4[1] == "1,0" && $exp8[1] == "1,0"){
                            if ($exp5[1] == "2,0" && $exp9[1] == "2,0"){
                                ?>
                                    <h1>Suma de matrices de 3x1 </h1>
                                <?php
                                // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n1,0.8n2,0s4m0,0.5m1,0.3m2,0
                                echo "Matriz 1: {" . $exp3[0] . "}<br>";
                                echo "Matriz 1: {" .$exp4[0]. "}<br>";
                                echo "Matriz 1: {" .$exp5[0]. "}<br><br>";
                                echo "Matriz 2: {" .$exp7[0]. "}<br>";
                                echo "Matriz 2: {" .$exp8[0]. "}<br>";
                                echo "Matriz 2: {" .$exp9[0]. "}<br>";
                                $suma1 = $exp3[0] + $exp7[0];
                                $suma2 = $exp4[0] + $exp8[0];
                                $suma3 = $exp5[0] + $exp9[0];
                                echo "El resultado de la operación es:<br>";
                                echo "{" . $suma1. "}<br>";
                                echo "{" .$suma2. "}<br>";
                                echo "{" .$suma3. "}<br><br>";
                            }else{
                                echo ("No se a colocado la posición 2,0 en alguna de las dos matrices correctamente");
                            }

                        }else {
                            echo ("No se a colocado la posición 1,0 u 0,1 en alguna de las dos matrices correctamente");
                        }
                            

                    }else{
                        echo ("No se a colocado la posición 0,0 en alguna de las dos matrices correctamente");
                    }
                    
                }
                if ($count_matrix == 8){

                    $exp1 = multiexplode(array("."),$exp[0]);
                    $exp2 = multiexplode(array("."),$exp[1]);
                    $exp3 = multiexplode(array("n"),$exp1[0]);
                    $exp4 = multiexplode(array("n"),$exp1[1]);
                    $exp5 = multiexplode(array("n"),$exp1[2]);
                    $exp6 = multiexplode(array("n"),$exp1[3]);
                    $exp7 = multiexplode(array("m"),$exp2[0]);
                    $exp8 = multiexplode(array("m"),$exp2[1]);
                    $exp9 = multiexplode(array("m"),$exp2[2]);
                    $exp10 = multiexplode(array("m"),$exp2[3]);
                    if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                        if ($exp4[1] == "0,1" && $exp8[1] == "0,1"){
                            if ($exp5[1] == "0,2" && $exp9[1] == "0,2"){
                                if ($exp6[1] == "0,3" && $exp10[1] == "0,3"){
                                    ?>
                                        <h1>Suma de matrices de 1x4</h1>
                                    <?php
                                    // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n0,1.5n0,2s4m0,0.5m0,1.9m0,2
                                    echo "Matriz 1: {" . $exp3[0] . "," . $exp4[0] . ",". $exp5[0]. ",".$exp6[0]. "}<br><br>";
                                    echo "Matriz 2: {" . $exp7[0] . ","  . $exp8[0] . ",".$exp9[0]."," .$exp10[0].  "}<br><br>";
                                    $suma1 = $exp3[0] + $exp7[0];
                                    $suma2 = $exp4[0] + $exp8[0];
                                    $suma3 = $exp5[0] + $exp9[0];
                                    $suma4 = $exp6[0] + $exp10[0];
                                    echo "El resultado de la operación es:<br> {" .$suma1.",".$suma2.",".$suma3.",".$suma4."}<br>";
                                }else{
                                    echo ("No se a colocado la posición 0,3 en alguna de las dos matrices correctamente");
                                }
                            }elseif ($exp5[1] == "1,0" && $exp9[1] == "1,0"){
                                if ($exp6[1] == "1,1" && $exp10[1] == "1,1"){
                                    ?>
                                        <h1>Suma de matrices de 2x2</h1>
                                    <?php
                                    //ejemplo http://localhost/Automatas/matrices3.php?m=2n0,0.3n0,1.7n1,0.9n1,1s4m0,0.5m0,1.6m1,0.8m1,1
                                    echo "Matriz 1: {" . $exp3[0] . ", " . $exp4[0] . "}<br>";
                                    echo "Matriz 1: {" . $exp5[0] . ", " . $exp6[0] . "}<br>";
                                    echo "Matriz 2: {" . $exp7[0] . ", " . $exp8[0] . "}<br>";
                                    echo "Matriz 2: {" . $exp9[0] . ", " . $exp10[0] . "}<br><br>";
                                    $suma1 = $exp3[0] + $exp7[0];
                                    $suma2 = $exp4[0] + $exp8[0];
                                    $suma3 = $exp5[0] + $exp9[0];
                                    $suma4 = $exp6[0] + $exp10[0];
                                    echo "El resultado de la operación es:<br> {" .$suma1.",".$suma2."}<br>{".$suma3.",".$suma4."}<br>";
                                }else {
                                    echo ("No se a colocado la posicion 1,1 en alguna de las dos matrices correctamente");
                                }
                            }else{
                                echo ("No se a colocado la posición 1,0 en alguna de las dos matrices correctamente");
                            }

                        }elseif ($exp4[1] == "1,0" && $exp8[1] == "1,0"){
                            if ($exp5[1] == "2,0" && $exp9[1] == "2,0"){
                                if ($exp6[1] == "3,0" && $exp10[1] == "3,0"){
                                    ?>
                                        <h1>Suma de matrices de 4x1</h1>
                                    <?php
                                    // Ejemplo http://localhost/Automatas/matrices2.php?m=2n0,0.3n1,0.5n2,0s4m0,0.5m1,0.9m2,0
                                    echo "Matriz 1: {" . $exp3[0] . "}<br>";
                                    echo "Matriz 1: {" .$exp4[0]. "}<br>";
                                    echo "Matriz 1: {" .$exp5[0]. "}<br>";
                                    echo "Matriz 1: {" .$exp6[0]. "}<br><br>";
                                    echo "Matriz 2: {" .$exp7[0]. "}<br>";
                                    echo "Matriz 2: {" .$exp8[0]. "}<br>";
                                    echo "Matriz 2: {" .$exp9[0]. "}<br>";
                                    echo "Matriz 2: {" .$exp10[0]. "}<br><br>";
                                    $suma1 = $exp3[0] + $exp7[0];
                                    $suma2 = $exp4[0] + $exp8[0];
                                    $suma3 = $exp5[0] + $exp9[0];
                                    $suma4 = $exp6[0] + $exp10[0];
                                    echo "El resultado de la operación es:<br>";
                                    echo "{" . $suma1. "}<br>";
                                    echo "{" .$suma2. "}<br>";
                                    echo "{" .$suma3. "}<br>";
                                    echo "{" .$suma4. "}<br><br>";
                                }else{
                                    echo ("No se a colocado la posición 3,0 en alguna de las dos matrices correctamente");
                                }
                            }else {
                                echo ("No se a colocado la posición 2,0 en alguna de las dos matrices correctamente");
                            }
                        }else {
                            echo ("No se a colocado la posición 1,0 u 0,1 en alguna de las dos matrices correctamente");
                        }
                    
                    }else {
                        echo ("No se a colocado la posición 0,0 en alguna de las dos matrices correctamente");
                    }

                }
                
            }
            
            

		?>