<?php

namespace Mpyw\LaravelRetryOnDuplicateKey;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Database\Connection;
use Mpyw\LaravelRetryOnDuplicateKey\Connections\MySqlConnection;
use Mpyw\LaravelRetryOnDuplicateKey\Connections\PostgresConnection;
use Mpyw\LaravelRetryOnDuplicateKey\Connections\SQLiteConnection;
use Mpyw\LaravelRetryOnDuplicateKey\Connections\SqlServerConnection;

class ConnectionServiceProvider extends ServiceProvider
{
    /**
     * You can optionally register these default connection implementations.
     */
    public function register(): void
    {
        Connection::resolverFor('mysql', function (...$args) {
            return new MySqlConnection(...$args);
        });
        Connection::resolverFor('pgsql', function (...$args) {
            return new PostgresConnection(...$args);
        });
        Connection::resolverFor('sqlite', function (...$args) {
            return new SQLiteConnection(...$args);
        });
        Connection::resolverFor('sqlsrv', function (...$args) {
            return new SqlServerConnection(...$args);
        });
    }
}
