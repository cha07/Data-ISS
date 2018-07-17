<?php

echo (file_get_contents('http://api.open-notify.org/iss-pass.json?lat='.$_GET['lat'].'&lon='.$_GET['lon']));