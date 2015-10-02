<?php $this->layout('layout.php'); ?>
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