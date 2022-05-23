<?php
$xmlfile = 'zaposlenici.xml';
$zaposlenici = simplexml_load_file($xmlfile) or die("Cant load xml");
$zaposleniciList = '<h2 align="center">Tablica Zaposlenika</h2><title>XML Projekt</title>';
$zaposleniciList .= '<table border="1" align = "center" cellpadding = "5">
        <tr>
            <th>Id</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Dob</th>
            <th>Spol</th>
            <th>Email</th>
        </tr>';
foreach ($zaposlenici as $zap):
    $zaposleniciList .= "<tr>
                <td>".$zap->ID."</td>
                <td>".$zap->Ime."</td>
                <td>".$zap->Prezime."</td>
                <td>".$zap->Dob."</td>
                <td>".$zap->Spol."</td>
                <td>".$zap->Email."</td>
            </tr>";
endforeach;
$zaposleniciList .= '</table>';
echo $zaposleniciList;
?>




        
    