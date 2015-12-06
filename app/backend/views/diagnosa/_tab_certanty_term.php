


<table class="table table-stripped table-bordered">
<tr>
    <th>Kepastian</th>
    <th>Nilia CF </th>
</tr>
<?php 
    foreach ($uncertantyTerm->find()->all() as $key => $value) {
        echo '<tr>';
            echo '<td>'.$value->uncertanty_term.'</td>';
            echo '<td>'.$value->cf.'</td>';
        echo '</tr>';
    }  
?>
</table>