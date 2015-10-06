<?php $this->layout('layout.php'); ?>

<?php $this->start('footer'); ?>
<div style="background: #ccc; padding: 20px 30px;"><i>dev-view 2015 =)</i></div>
<?php $this->stop(); ?>

<?php $this->start('header'); ?>
<header>
    <h1>Header</h1>
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

<?php $this->start('test'); ?>

<h4>test</h4>

<?php $this->start('test-inner'); ?>
<i><h5>inner test</h5></i>
<?php $this->stop(); ?>

<?=$this->section('footer')?>
<br>---------<br>
<?=$this->section('test-inner')?>



<?php $this->stop(); ?>

<h1>
    users
</h1>
<h3>
    content users.php
</h3>
<hr>
<div>
    <?=$this->section('content')?>
</div>