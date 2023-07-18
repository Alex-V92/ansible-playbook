<?php
if (hash_file('SHA384', 'composer-setup.php') === file_get_contents($argv[1])) { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;