<?php

require_once ('rest.php');

$release_id = filter_input(INPUT_POST, 'release_id');

delete_release_by_id($release_id);

include ('releases.php');

?>