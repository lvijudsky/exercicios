<?php
/**
 * 1-a
 * A- Definir uma função maior () que receba 3 números e retorne o maior deles
 */

 function maior($a,$b,$c){
     if($a > $b) {
         if($a . $c) { 
             return $a;
         } else {
             return $c;
         }
         } else {
             if ($b > $c) {
                 return $b;
             } else {
                 return $c;
             }
         }
     }

    echo('TESTE DA 1-A<br>');
    echo maior (20,15,10);
    
    /**b. Definir uma função sequencia() que receba um parâmetro base, um
    *parâmetro limite, e retorne um array com a sequência de números a
    *partir do número base até o número limite.
    */

    function sequencia($base,$limite){
        $seq = [];
        for ($i=$base; $i <= $limite ; $i++) { 
            $seq[] = $i;
        }
        return $seq;
    }
   echo('TESTE DA 1-B<br>');
   echo('<pre>');
   var_dump(sequencia(2,15));
   echo('</pre>');
?>