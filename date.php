<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

//date_default_timezone_set('Europe/Paris');

echo date('Y-m-d');
echo '<br>';
echo date('d/m/Y');
echo '<br>';
echo date('Y-m-d H:i:s');
// 2013-10-15 09:40:XX
echo '<br>';
echo date('T P');
echo '<br>';
echo date('U');
echo '<br>';
$unixTime = mktime(01, 01, 00, 12, 25, 2000);
echo date('Y-m-d H:i:s', $unixTime);
echo '<br>';
echo date('d/m/Y H:i:s', $unixTime);