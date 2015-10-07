<div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    <pre><?=get_class( $this )?></pre>
    <?=$this->section('content')?>
    <div style="border: 2px solid green;  padding: 10px; margin: 10px;">
        <?=$this->section('footer')?>
    </div>
</div>