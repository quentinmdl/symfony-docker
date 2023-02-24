<?php

    $api_url = "";
    $users = json_decode(file_get_contents($api_url));
?>


<?php
foreach ($users as $user): ?>
	<p><?= $user->username ?></p>
	<p><?= $user->email ?></p>
<?php endforeach; ?>