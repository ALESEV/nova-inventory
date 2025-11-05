docker-compose up -d --build

docker exec -it inventory_management_system bash

composer install
npm install
npm run dev

docker exec -it inventory_management_system bash

cp .env.example .env

php artisan config:clear
php artisan route:clear
php artisan view:clear 
php artisan key:generate
php artisan storage:link
php artisan migrate

docker exec -it inventory_management_system bash

npm install tailwindcss @tailwindcss/vite
