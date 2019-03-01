<?php

// Pour être sûr que la requête est en POST
if ('POST' === $SERVER['REQUEST_METHOD']) {
    echo strtoupper($_POST['foo']);
}

echo 'Ajax'; 