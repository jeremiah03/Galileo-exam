<?php

echo "Hello World!";

$create = fopen('hello_there.php', 'w');

$txt = "<?php \n // this is a comment \n echo 'This is a test page!'; \n echo 'Exam number two!'; \n // this is the end of a comment";

$write = fwrite($create, $txt);