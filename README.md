
## DSTest dev **[UAT Demo](http://dev-dstest.dredward.site)** || DSTest uat **[UAT Demo](http://uat-dstest.dredward.site)**

## Status: 
* Frontend: Terminado
* Backend: Terminado
* API: Terminado
* Integración continua: Terminado con CircleCi
* Pruebas de integración: Pendiente
* Pruebas unitarias: al 50%

## Instalación rápida

1. Clonar este repo
2. Correr composer install
3. Crear un archivo de entorno (.env) con las configuraciónes de la su base de datos local y su app key (No hay que agregar el archivo .env al repositorio). Se puede tomar el archivo `.env.example` como base
4. Correr npm install
5. Correr npm run prod (o npm run dev si se quiere en modo de pruebas)
6. Si desea el modo desarrollo - Correr php artisan build:development:refresh (ejecuta migraciones, seeders de desarrollo, limpia la carpeta storage, crea link simbólico y genera keys de passport)
6. Si desea el modo producción - Correr php artisan build:production:refresh (ejecuta migraciones, seeders de producción, limpia la carpeta storage, crea link simbólico y genera keys de passport)

## Acceso

* Usuario: dstest@dredward.site
* Contraseña: 5uDtqvaXLoZLziQk
