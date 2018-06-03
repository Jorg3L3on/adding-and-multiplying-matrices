
        <?php //Ejemplo aprenderaprogramar.com
		function multiexplode ($delimiters,$string) {	
			$ready = str_replace($delimiters, $delimiters[0], $string);
			$launch = explode($delimiters[0], $ready);
			return  $launch;
        }
        ?>
        <h1>Suma y multiplicación de matrices de 2x2</h1>
        <?php
            $mensaje = $_GET['m'];
            $exp = multiexplode(array("."),$mensaje);
			echo $exp[0]."<br>";
            echo $exp[1]."<br>";
            
            $exp1 = multiexplode(array("n"),$exp[0]);
            $exp3 = multiexplode(array("n"),$exp[1]);
            $exp2 = multiexplode(array(","),$exp1[1]);
            $exp4 = multiexplode(array(","),$exp3[1]);            
            echo $exp1[0]."<br>";
            echo $exp3[0]."<br>";
            echo $exp1[1]."<br>";            
            echo $exp3[1]."<br>";
            echo $exp2[0]."<br>"; //x0 = 0
            echo $exp2[1]."<br>"; //y0 = 0
            echo $exp4[0]."<br>"; //x0 = 0
            echo $exp4[1]."<br>"; //y1 = 1
            

             
            if ($exp2[0] == 0){
                if($exp2[1] == 0){
                    if ($exp4[0] == 0){
                        if ($exp4[1] == 1){
                            $
                            echo ("Fredy es puto");        
                        }
                    }                 
                }
            } 

            

		?>