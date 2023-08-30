<?php
if (!isset($_REQUEST['input']) || strlen($_REQUEST['input']) == 0) {
    die('/?input={payload}');
}

echo $_REQUEST['input'];
