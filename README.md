# The pipalbot API 
## A larevel take on the api

This is an API for the Pipalbot server. It probably does not make any sense to you if you came across it. So. Unless you know what it is, don't waste your time with it.

## Usage

none

## Configuration

none


## Database
The pipalbot database is a Postgres/PostGIS database. Our environment user postgres 9.6 and postgis 2.3

We use a specific driver to enable GIS functionality.
https://github.com/Bosnadev/Database. This is defined in composer.json and will be included automatically.

Ensure that the database has PostGis enabled (you should have a version of postgres running with PostGIS).

```bash
sudo -u postgres psql -c "CREATE EXTENSION postgis;CREATE EXTENSION postgis_topology;" gisdata

```

### Migrations
We use migrations to keep the database in sync. All the migration files are found in `database/migrations/`

To set up the initial database, just run
```bash
php artisan migrate
```

Read the documentation for more [https://laravel.com/docs/5.5/migrations]
