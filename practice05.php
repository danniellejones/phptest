<?php
/* Store files outside the root */
$site_root = '/phptest';

// Include - attempt to process regardless
echo "<br>Include: ";
include "./includes/about.html";

// Include once - prevents more than once
echo "<br>Include Once: ";
include_once "./includes/about.html";

// Require - stops processing if not available
echo "<br>Require: ";
require "./includes/about.html";

// Require once - prevents more than once
echo "<br>Require Once: ";
require_once "./includes/about.html";

?>
<br>
<h1>Practice 05 Output</h1>

<a href="<?= $site_root; ?>/index.php">Return to Home</a>