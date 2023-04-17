<?php
$i = 10;

// While loops
while ($i > 0) {
    $i--;
    echo $i . '<br>';
}

// Do While Loop
do {
    echo "Hello again <br>";
    $i++;
} while ($i < 10);

$hobbies = array('Writing', 'Singing', 'Gaming');
echo '<br>';

// For loop
$number_of_items = count($hobbies);
for ($i = 0; $i < $number_of_items; $i += 2) {
    echo $hobbies[$i] . '<br>';
}

// For each loop
foreach ($hobbies as $hobby) {
    echo $hobby . '<br>';
}

?>
<br>
<h1>Practice 03 Output</h1>

<table>
    <?php
    // Table Headers
    echo '<tr>';
    echo '<th>&nbsp;</th>';
    for ($col = 1; $col <= 3; $col++) {
        echo "<th>$col</th>";
    }
    echo '</tr>';
    // Table rows
    for ($row = 1, $col = 1; $row <= 3; $row++) {
        echo '<tr>';
        if ($col == 1) {
            echo "<th>$row</th>";
        }
        while ($col <= 3) {
            echo '<td>' . $row * $col++ . '</td>';
        }
        echo '</tr>';
        // Reset column at end of row
        $col = 1;
    }
    ?>
</table>

<a href="index.html">Return to Home</a>