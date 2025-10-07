<?php
$type = isset($btntype) && $btntype === 'submit' ? 'submit' : 'button';
?>

<button class="bordered" type="<?= $type ?>">
<a href="<?= $btnlink ?>"><?= $btntitle ?></a></button></button>