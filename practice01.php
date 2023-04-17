<?php
$site_root = '/phptest';

/* Example multiline comment.
   Allows a second line. */

$first_name = "Dannielle";
$last_name = "Jones";
$progress_to_learn_php = 10;

// Echo displays multiple values comma separated
echo $first_name, " ", $last_name;
// Print displays single value
print $progress_to_learn_php;
// Use of double quotes with variable in string
echo "My name is $first_name $last_name";

// String concatenation
$full_name = $first_name . ' ' . $last_name;
echo '<br>' . $full_name . '<br>';
echo "My progress is: ", $progress_to_learn_php, '<br>';

$message = "My name is $full_name. ";
$message .= "My progress is: ";
$message .= "$progress_to_learn_php";
echo "My message: ", $message, '<br>';

// Syntax to send to MySQL - heredoc syntax
$heredoc = <<< EOT
My name is $full_name and I have created this "PHP page". My progress towards this goal is $progress_to_learn_php
EOT;

// Arrays
$hobbies = array('Writing', 'Singing', 'Gaming');
$pets = ['Scarlet'];  // Shorthand
print_r($hobbies);
print('<br>');
print_r($pets);
$pets[] = 'Reeba';
print('<br>');
print_r($pets);
echo "My oldest pet is $pets[0]";

// Associative array (dictionary)
$pet_to_breed = ['Scarlet' => 'Border Collie x Kelpie'];
$pet_to_breed['Reeba'] = 'Border Collie x Koolie';
echo $pet_to_breed['Scarlet'];
print_r($pet_to_breed);
// Cannot put associative array directly inside double-quoted string use {}
print_r("My most energetic pet is {$pet_to_breed['Reeba']}");




?>
<br>

<h1>Practice 01 Output</h1>

<h2>About Me</h2>
<p>My name is: <?= $full_name;?></p>
<p>My oldest dog is: <?= $pets[0];?></p>
<p>My most energetic dog is: <?= $pets[1];?> because she is a <?= $pet_to_breed[$pets[1]];?> </p>
<p>My Hobbies are: </p>
<ul>
    <li><?= $hobbies[0];?></li>
    <li><?= $hobbies[1];?></li>
    <li><?= $hobbies[2];?></li>
</ul>



<a href="<?= $site_root; ?>/index.php">Return to Home</a>