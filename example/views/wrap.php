<div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    <pre><?=get_class( $this )?></pre>
    <?=$this->section('content')?>

    <?php $this->start('test'); ?>
    <div style="border: 2px solid red;  padding: 10px; margin: 10px;">
        section test
    </div>
    <?php $this->append(); ?>

</div>