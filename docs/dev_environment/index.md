## Start a Development environment

```bash
# Stop every container running
docker stop $(docker ps -q)
git clone git@github.com:php-portugal/meetups.git
cd meetups
# While implementing, use this branch
git switch port-to-php
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
