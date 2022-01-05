<?php

$config = require 'config.php';

require 'db/Connection.php';

require 'db/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['databaseconfiguration'])
);