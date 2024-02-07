<?php
/*AQUI VAI SER AS FUNCOES PARA SIGESTOES DE CIDADE PARA O FORMULARIO DE CONTATO*/
         /*(1) ->REGIOES NORTE*/
         /*(2) ->REGIAO NORDESTE*/
         /*(3) ->REGIAO CENTRO-OESTE*/
         /*(4) ->REGIAO SUDESTE*/
         /*(5) ->REGIAO SUL*/

        function sujestao() { 
            $est = isset($_POST["tEst"]) ? $_POST["tEst"] : 1;
            if ($est == 1) {
                echo "Regiao Norte";
            }elseif ($est == 2) {
                echo "Regiao Nordeste";
            }elseif ($est == 3) {
                echo "Regiao Centro-Oeste";
            }elseif ($est == 4) {
                echo "Regiao Sudeste";
            }elseif ($est == 5) {
                echo "Regiao Sul";
            }else {
                echo "";
            }
        }
         
    echo "<optgroup label='Região Norte'>
             <option value='1'>Acre</option>
             <option value='1'>Tocantins</option>
             <option value='1'>Amazônas</option>
             <option value='1'>Amapá</option>
             <option value='1'>Pará</option>
             <option value='1'>Rondônia</option>
             <option value='1'>Roraima</option>
         </optgroup>

         <optgroup label='Região Nordeste'>
             <option value='2'>Alagoas</option>
             <option value='2'>Bahia</option>
             <option value='2'>Ceara</option>
             <option value='2'>Maranhao</option>
             <option value='2'>Piaui</option>
             <option value='2'>Pernambuco</option>
             <option value='2'>Paraiba</option>
             <option value='2'>Sergipe</option>
             <option value='2'>Rio Grande do Norte</option>
         </optgroup>

         <optgroup label='Região Centro-Oeste'>
             <option value='3' selected>Distrito Federal</option>
             <option value='3'>Goias</option>
             <option value='3'>Mato Grosso</option>
             <option value='3'>Mato Grosso do Sul</option>
         </optgroup>

         <optgroup label='Região Sudeste'>
             <option value='4'>Minas Gerais</option>
             <option value='4'>Rio de Janeiro</option>
             <option value='4'>São Paulo</option>
             <option value='4'>Espirito Santo</option>
         </optgroup>

         <optgroup label='Região Sul'>
             <option value='5'>Rio Grande do Sul</option>
             <option value='5'>Parana</option>
             <option value='5'>Santa Catarina</option>
         </optgroup>
     </select>
 </label></p>";
    ?>