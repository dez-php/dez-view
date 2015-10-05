<?php $this->layout('layout.php'); ?>

<?php $this->start('footer'); ?>
<hr><hr>
<div style="background: #ccc; padding: 20px 30px;"><i>dev-view 2015 =)</i></div>
<?php $this->stop(); ?>

<?php $this->start('header'); ?>
<header>
    <h2>Site name</h2>
    <h3>Slogan</h3>
</header>
<?php $this->stop(); ?>

<?php $this->start('header'); ?>
<div><i>append</i></div>
<?php $this->append(); ?>

<?php $this->start('header'); ?>
<div><i><b>prepend</b></i></div>
<?php $this->prepend(); ?>

<?php $this->start('left-sidebar'); ?>
<div class="left-sidebar">
    <ul>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
    </ul>
</div>
<?php $this->prepend(); ?>

<h1>
    users
</h1>

<h3>
    inner content
</h3>
<hr>
<div>
    <?=$this->section('content')?>
</div>