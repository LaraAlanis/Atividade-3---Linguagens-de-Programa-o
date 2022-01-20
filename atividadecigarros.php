<?php
# Para iniciar o código criei as constantes para calcular os resultados da problemática
      const ano_em_dias = 365; 
      const minutos_de_vida = 11; 

      #número de cigarros consumidos por dia
      $cigarros = 10; 
      #periodo determinado pelo enunciado
      $periodo_de_tempo = 3;
      #Para saber quantos dias tem 3 anos
      $numero_dias = $periodo_de_tempo * ano_em_dias;
      #Para saber quantos cigarros foram fumados durante os 3 anos
      $total_de_cigarros = $cigarros * $numero_dias; 
      $total_de_minutos_de_vida = minutos_de_vida * $total_de_cigarros; 

      #Dividindo Números Inteiros - INTDIV
     $total_de_horas_de_vida = intdiv($total_de_minutos_de_vida, 60);
     $minutos_perdidos = $total_de_minutos_de_vida - (60 * intdiv($total_de_minutos_de_vida, 60)); 

     $total_dias_perdidos = intdiv($total_de_horas_de_vida, 24); 
     $horas_perdidas = $total_de_horas_de_vida - (24 * intdiv($total_de_horas_de_vida, 24));

     $meses_perdidos = intdiv($total_dias_perdidos, 30); 
     $dias_perdidos = $total_dias_perdidos - (30 * intdiv($total_dias_perdidos, 30));

     $resultado = "<p> Consumindo cigarros <strong> 10 </strong> vezes ao dia, por <strong > 3 </strong> anos uma pessoa perderia aproximadamente:</p>
     <p> {$meses_perdiso} <strong> meses </strong>, {$dias_perdidos} <strong> dias </strong>, {$horas_perdidas} <strong> horas </strong> e {$minutos_perdidos} <strong> minutos </strong></p>";
 echo $resultado; 


