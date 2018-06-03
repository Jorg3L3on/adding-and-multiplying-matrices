
        <?php //Ejemplo aprenderaprogramar.com
		function multiexplode ($delimiters,$string) {	
			$ready = str_replace($delimiters, $delimiters[0], $string);
			$launch = explode($delimiters[0], $ready);
			return  $launch;
        }
            $mensaje = $_GET['m'];
            $exp = multiexplode(array("s"),$mensaje);
            $exp11 = multiexplode(array("*"),$mensaje);
            //echo $exp11[0]."<br>";
            //echo $exp[0]."<br>";
            //echo $exp[1]."<br>";
            if (isset($exp11[1])) {
                ?>
                <h1>Multiplicación de matrices de 1x2 por 2x1</h1>
                 <?php
                echo 'ass'."<br>";
            }
            if (isset($exp[1])){
                ?>
                <h1>Suma de matrices de 2x2</h1>
                 <?php
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
                
                /*                 
                echo $exp1[0]."<br>";
                echo $exp1[1]."<br>";
                echo $exp1[2]."<br>";
                echo $exp1[3]."<br>";
                echo $exp2[0]."<br>";
                echo $exp2[1]."<br>";
                echo $exp2[2]."<br>";
                echo $exp2[3]."<br>";
                echo $exp3[0]."<br>"; //znx0 = 2 *
                echo $exp3[1]."<br>"; //nx0 = 0,0
                echo $exp4[0]."<br>"; //ny0 = 3 *
                echo $exp4[1]."<br>"; //zmx1 = 0,1
                echo $exp5[0]."<br>"; //mx1 = 4 *
                echo $exp5[1]."<br>"; //y1 = 0,0
                echo $exp6[0]."<br>"; //zmy1 = 5 *  
                echo $exp6[1]."<br>"; //my1 = 0,1
                echo $exp7[0]."<br>"; //my1 = 0,1
                echo $exp7[1]."<br>"; //my1 = 0,1
                echo $exp8[0]."<br>"; //my1 = 0,1
                echo $exp8[1]."<br>"; //my1 = 0,1
                echo $exp9[0]."<br>"; //my1 = 0,1
                echo $exp9[1]."<br>"; //my1 = 0,1
                echo $exp10[0]."<br>"; //my1 = 0,1
                echo $exp10[1]."<br>"; //my1 = 0,1 
                */
                echo "Matriz 1: {" . $exp3[0] . ", " . $exp4[0] . "}<br>";
                echo "Matriz 1: {" . $exp5[0] . ", " . $exp6[0] . "}<br>";
                echo "Matriz 2: {" . $exp7[0] . ", " . $exp8[0] . "}<br>";
                echo "Matriz 2: {" . $exp9[0] . ", " . $exp10[0] . "}<br><br>";

                if ($exp3[1] == "0,0" && $exp7[1] == "0,0"){
                    if ($exp4[1] == "0,1" && $exp8[1] == "0,1"){
                        if ($exp5[1] == "1,0" && $exp9[1] == "1,0"){
                            if ($exp6[1] == "1,1" && $exp10[1] == "1,1"){
                            }
                        }
    
                        $suma1 = $exp3[0] + $exp7[0];
                        $suma2 = $exp4[0] + $exp8[0];
                        $suma3 = $exp5[0] + $exp9[0];
                        $suma4 = $exp6[0] + $exp10[0];
                        echo "El resultado de la operación es:<br> {" .$suma1.",".$suma2."}<br>{".$suma3.",".$suma4."}<br>";
                    }else{
                        echo ("No se a colocado la posicion 0,1 en las dos matrices correctamente");
                    }
                }else{
                    echo ("No se a colocado la posición 0,0 en las dos matrices correctamente");
                }

            }
            
            

		?>