<?php
$int = 15;
$float = 3.14;
$string = "Bonjour";
$bool = true;

echo "<table border='1'>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Booléen</td>
                    <td>bool</td>
                    <td>".($bool ? 'true': 'false')."</td>
                </tr>
                <tr>
                    <td>Entier</td>
                    <td>int</td>
                    <td>$int</td>
                </tr>
                <tr>
                    <td>Flottant</td>
                    <td>float</td>
                    <td>$float</td>
                </tr>
                <tr>
                    <td>Chaîne</td>
                    <td>string</td>
                    <td>$string</td>
                </tr>
            </tbody>
        </table>";
?>