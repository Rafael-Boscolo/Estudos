<h2>Definindo uma Função</h2><br/>

<?php 

function tabuadaMultiplicar() {

    for($i=1;$i<=10;$i++) {
        for($j=1;$j<=10;$j++) {
            echo "$i * $j = ".($i*$j)."<br/>";
        }

        echo '<hr/>';
    }

}

tabuadaMultiplicar();


?>