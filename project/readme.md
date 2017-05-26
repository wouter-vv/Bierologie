stappenplan:
1. maak een lege databank aan op je computer genaamd 'bierologie'
2. navigeer naar de folder '/project'
3. kopieer en pas de .env file aan met de inloggegevens van het databanksysteem
4. voer volgende commando's uit:
    composer install
    php artisan migrate
    php artisan db:seed
    php artisan serve
5. open nu de site op http://localhost:8000/