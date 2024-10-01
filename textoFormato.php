<?php
    $nombre = 'Pepe';
    $apellidos = 'López Pérez';
    $edad = 39;
    $telefono = 666666777;
    
    printf("<table>
                <tr>
                    <td>Nombre: </td>
                    <td> %s </td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td> %s </td>
                </tr>
                <tr>
                    <td>Edad :</td>
                    <td> %d </td>
                </tr>
                <tr>
                    <td> Telefono:</td>
                    <td> %s </td>
                </tr>
            </table>", $nombre, $apellidos,$edad,$telefono);
?>