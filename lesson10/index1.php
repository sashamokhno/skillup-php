<?php
/* не получиолсь
$file_name="users.txt";
$data=file($file_name);


foreach ($data as $value):
    $value=explode(' ',$value);
echo '<table border="1">';
    {
        echo '<tr>';
        echo '<td>'. $value [0].'</td>>';
        echo '</tr>';
    }
    echo '</table>';
    endforeach;
*/
// не получается разбить по ячейкам
$a = file('users.txt');
echo '<table width="500" border="1"><tr><th>№</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Phone</th><th>Check</th></tr>';
for($i=0;$i<sizeof($a);$i++){
    $sub = explode("\t", $a[$i]);
    echo '<tr><td>' . ($i+1) . '</td><td>' . $sub[0] .'</td>.<td>' . $sub[1] .'</td>.<td>' . $sub[2] .'</td>.<td>' . $sub[3] .'</td>.<td>' . $sub[4] .'</td></tr>' ;
}
echo '</table>';
    ?>
