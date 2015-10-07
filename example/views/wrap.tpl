<div style="border: 2px solid red;  padding: 10px; margin: 10px;">
    Smarty handler
    {$view->section('content')}

    {var_dump($view)}

{*    <i>start section...</i><br>
    {$view->start('qwerty')}
    <i>inside section...</i><br>
    <div style="border: 2px solid green;  padding: 10px; margin: 10px;">
        section test smarty
    </div>
    {$view->append()}
    <i>after stop section...</i><br>*}

</div>