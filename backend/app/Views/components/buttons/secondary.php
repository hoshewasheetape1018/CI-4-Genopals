<?php
$type = isset($btntype) && $btntype === 'submit' ? 'submit' : 'button';
?>

<button class="secondary" type="<?= $type ?>">
<a href="<?= $btnlink ?>"><?= $btntitle ?></a></button></button>