<?php
$type = isset($btntype) && $btntype === 'submit' ? 'submit' : 'button';
?>

<button class="disabled" type="<?= $type ?>">
<a href="<?= $btnlink ?>"><?= $btntitle ?></a></button></button>