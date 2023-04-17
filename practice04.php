<?php
$site_root = '/phptest';

echo "PHP Version: " . phpversion();
echo '<br>';

// Upper, lower and Capital case
$first_name = "dannielle";
echo strtoupper($first_name);
echo '<br>';
$fixed_name = ucfirst(strtolower($first_name));
echo $fixed_name;
echo '<br>';

// Sort
$hobbies = array('Writing', 'Singing', 'Gaming');
sort($hobbies);
loop_through_array($hobbies);
rsort($hobbies);
loop_through_array($hobbies);

// Function - pass by value
function loop_through_array($my_items): void
{
    foreach ($my_items as $item) {
        echo $item . '<br>';
    }
}

$numbers = array(1, 2, 3);
loop_through_array($numbers);
loop_through_array_ref($numbers);

// Function - pass by reference
function loop_through_array_ref(&$my_items): void
{
    foreach ($my_items as $item) {
        $item += 2;
        echo $item . '<br>';
    }
}

$pets_to_breeds = [['Name' => 'Reeba', "Breed" => 'Border Collie x Koolie'], ['Name' => 'Scarlet', "Breed" => 'Border Collie x Kelpie']];

// Anonymous Function
usort($pets_to_breeds, function($breed1, $breed2) {
    return $breed1['Breed'] <=> $breed2['Breed'];
});

foreach ($pets_to_breeds as $pet_to_breed) {
    echo '<li>' . implode(" ", $pet_to_breed) . '</li>';
}
?>
<br>
<h1>Practice 04 Output Above</h1>


<a href="<?= $site_root; ?>/index.php">Return to Home</a>