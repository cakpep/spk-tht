<?php
use backend\widgets\Panel;


 Panel::begin([
            'title'=>"Hasil Diagnosa",
            'type'=>Panel::TYPE_DEFAULT
        ]);

    $cfmax=array();
    $cfmaxp=array();

        echo "<table class='table'>";
        echo "<tr>";
                echo "<td>nama_penyakit<td>";
                echo "<td>mb<td>";
                echo "<td>md<td>";
                echo "<td>hitung mb<td>";
                echo "<td>hitung md<td>";
                echo "<td>hitung cf<td>";
        echo "</tr>";
        foreach ($dd as $key => $value) {

                $mbh=$diagnosa->mbHtg(explode(',', $value['mb']));
                $mdh=$diagnosa->mbHtg(explode(',', $value['md']));
                $cfh=$diagnosa->cfHtg($mbh,$mdh);                

                $cfmax[]=$cfh;                        
                $cfmaxp[]=$value['nama_penyakit'];

                echo "<tr>";
                    echo "<td>".$value['nama_penyakit']."<td>";
                    echo "<td>".$value['mb']."<td>";
                    echo "<td>".$value['md']."<td>";
                    echo "<td>".$mbh."<td>";
                    echo "<td>".$mdh."<td>";
                    echo "<td>".$cfh."<td>";
                echo "</tr>";
            }
    echo "</table>";

    Panel::end();