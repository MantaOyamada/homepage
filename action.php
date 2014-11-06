<?php $request='www.google.ru/search?q='.($_POST['name']);
header ('Location:https://'.$request)
;?>