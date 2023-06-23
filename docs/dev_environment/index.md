## Setup a Development environment

### Getting the code

```bash
# Clone the repository
git clone git@github.com:php-portugal/meetups.git

# Enter the repository
cd meetups

# While implementing, use this branch
git switch port-to-php
```

## Setup a development environment with Docker

```bash
# Stop every container running
docker stop $(docker ps -q)
cp .env.example .env
./run composerInstallInsideAnEphemeralContainer
./run build
./run start

# Optional: if you want to see Docker output. Open another terminal for next commands.
./run logs

# This command will take you inside the `webapp` container, so next you can run commands as usual, but with all the infrastructure as code, since you're running with all the specs in the repository's Dockerfile.
./run webapp
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link

## In another terminal session
./run webapp
npm install
npm run dev

#### Ready, open the app :)
open http://localhost

```

## Setup a development environment without Docker

```bash
# Copy the .env.example to .env
cp .env.example .env

# You will always have to adapt the .env vars - to get started quickly with sqlite:
# - Otherwise, you will have to setup a Postgres database and update the .env file accordingly.
#
# 1 - Comment out the # Postgres connection section inside the .env file
# 2 - Uncomment the # Sqlite connection section.
# 3 - Create the database file
touch /database/database.sqlite

# Install dependencies
composer install

# Generate the key
php artisan key:generate

# Run the migrations
php artisan migrate:fresh --seed

# Install the frontend dependencies
npm install

# Build the frontend
npm run dev

# Start the server
php artisan serve

# Ready, open the app :)
open http://localhost:8000
```
