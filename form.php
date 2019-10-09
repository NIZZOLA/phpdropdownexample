<?php
error_reporting(0);

$estado = "AC,AL,AM,AP,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RO,RS,RR,SC,SE,SP,TO";
$nomee = "Acre,Alagoas,Amazonas,Amap&aacute;,Bahia,Cear&aacute;,Distrito Federal, Esp&iacute;rito Santo, Goi&aacute;s, 
Maranh&atilde;o, Mato Grosso, Mato Grosso do Sul, Minas Gerais, Par&aacute;, Par&iacute;ba, Paran&aacute;, 
Pernambuco, Piau&iacute;,Rio de Janeiro, Rio Grande do Norte, Rond&ocirc;nia, Rio Grande do Sul, Roraima, Santa Catarina, 
Sergipe, S&atilde;o Paulo, Tocantins";

$sigla = explode( ",", $estado);
$estnom = explode( ",", $nomee);

$cliente_estado = $_GET['cmb_estado'];
?>

<body>
    <table>
    <tr>
        <td><label for="ready">Estado*:</label></td>
        <td colspan="3">

            <select name="cmb_estado" id="cmb_estado" class="caixa" >
            <?php
                        if ($cmb_estado == "") {  echo '<option selected="selected" value="">Selecione</option>';  }
                        
                        for ($a = 0;$a < 27; $a=$a+1) 
                        {
                                if ( $sigla[$a] == $cliente_estado )
                                {
                                ?>
                                <option selected="selected" value="<?php echo $sigla[$a]; ?>"><?php echo $estnom[$a]; ?></option>
                <?php            }
                                else
                                { ?>
                                    <option value="<?php echo $sigla[$a]; ?>"><?php echo $estnom[$a]; ?></option>
            <?php	           }
                        }
            ?>      
            </select>
            
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td><label for="ready">Cidade*:</label></td>
        <td colspan="3">
            
            <select name="cmb_cidade" id="cmb_cidade" class="caixa" >
            <option value="">Selecione um estado</option>
            </select>

        </td>
        <td></td>
        <td></td>
        </tr>
    </table>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('#cmb_estado').change(function(){
                $('#cmb_cidade').load('cmbcidades.php?estado='+$('#cmb_estado').val()+'&cidade='+$('#cmb_cidade').val() );
            });
        });
</script>