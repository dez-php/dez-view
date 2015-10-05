<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dez View Component Test</title>
</head>
<body>

<?=$this->section('header')?>

    <div class="content">

    	<?php if($this->isSection('left-sidebar')): ?>
        	<?=$this->section('left-sidebar')?>
    	<?php else: ?>
    		<i>default left side</i>
    	<?php endif; ?>

        <?=$this->section('content')?>

    </div>

    <?=$this->section('footer')?>

</body>
</html>