<?php

namespace Mpyw\LaravelRetryOnDuplicateKey\Connections;

use Illuminate\Database\SQLiteConnection as BaseSQLiteConnection;
use Mpyw\LaravelRetryOnDuplicateKey\RetriesOnDuplicateKey;

class SQLiteConnection extends BaseSQLiteConnection
{
    use RetriesOnDuplicateKey;
}
