<?php
$type = isset($btntype) && $btntype === 'submit' ? 'submit' : 'button';
?>

<button class="action" type="<?= $type ?>">
<a href="<?= $btnlink ?>"><?= $btntitle ?></a></button></button>