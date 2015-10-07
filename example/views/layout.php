<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dez View Component Test</title>
</head>
<body style="border: 1px solid blue; padding: 30px;">

    layout.php

    <div style="border: 1px solid red; padding: 30px; margin-bottom: 20px">
        header section
        <?=$this->section('header')?>
    </div>

    <div class="content">

    	<div style="border: 1px solid dodgerblue; padding: 30px; margin-bottom: 20px">
            left-sidebar section
            <?php if($this->isSection('left-sidebar')): ?>
                <?=$this->section('left-sidebar')?>
            <?php else: ?>
                <i>default left side</i>
            <?php endif; ?>
        </div>

        <div style="border: 1px solid green; padding: 30px; margin-bottom: 20px">
            content section
            <?=$this->section('content')?>
        </div>

    </div>

    <div style="border: 1px solid coral; padding: 30px; margin-bottom: 20px">
        test section
        <?=$this->section('test')?>
    </div>

    <div>
        <?=$this->section('footer')?>
    </div>

    <div>
        <?=$this->section('test')?>
    </div>

</body>
</html>