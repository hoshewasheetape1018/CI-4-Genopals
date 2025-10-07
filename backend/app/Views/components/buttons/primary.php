<?php
$type = isset($btntype) && $btntype === 'submit' ? 'submit' : 'button';
?>

<button class="primary" type="<?= $type ?>">
<a href="<?= $btnlink ?>"><?= $btntitle ?></a></button></button>