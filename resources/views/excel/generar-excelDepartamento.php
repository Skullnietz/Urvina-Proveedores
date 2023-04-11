
<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=consumo-dept-".$pFrom."-".$pTo.".xls");
?>
<table border="1">

                            <tr class="bg-secondary">
                                <th> <?php echo __('Departamento') ?> </th>
                                <th><?php echo __('Cantidad')?></th>
                                <th><?php echo __('Importe')?></th>
                            </tr>

                            <?php foreach ($dataConsulta as $dataD){ echo '
                                <tr>
                                <td>'.$dataD->Departamento.'</td>
                                <td>'.number_format($dataD->Cantidad).'</td>
                                <td>'.number_format($dataD->Importe, 2, '.', '').'</td>
                                </tr> ';
                            }
                                ?>

</table>
