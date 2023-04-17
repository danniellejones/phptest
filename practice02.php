<?php
$site_root = '/phptest';

$test_name = "Reeba";

// Decision structures - if, else if, else
if ($test_name == "Dannielle") {
    echo "That is me!";
} elseif ($test_name == "Reeba") {
    echo "That is my dog";
} else {
    echo "It is not me or my dog";
}

// Decision structure - switch
switch ($test_name) {
    case "Dannielle":
        echo "That is me!";
        break;
    case "Reeba":
        echo "That is my dog";
        break;
    default:
        echo "It is not me or my dog";
}

// Decision structure - ternary operator
$result = ($test_name == "Dannielle") ? "Me!" : "Who is it then?";


?>
<?php $member = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Practice</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Practice 02 Output</h1>
<section>
    <div class="both">
        <p>Both</p>
    </div>

    <?php if (!$member) : ?>
        <div class="non-members">
            <p>Non-members</p>
        </div>
    <?php endif; ?>


    <?php if ($member) : ?>
        <div class="members">
            <p>Members</p>
        </div>
    <?php endif; ?>
</section>

<br>
<a href="<?= $site_root; ?>/index.php">Return to Home</a>

</body>
</html>