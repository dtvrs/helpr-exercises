# Installation

 1. cd to Laravel installation root folder;
 2. composer install;
 3. npm install / yarn;
 4. cp .env.example .env;
 5. php artisan key:generate;
 4. php artisan migrate --seed / mysql -u [USERNAME] -p [DATABASE] < attic/local/helpr_exercises.sql;

**Note:** Present "in project" installation of homestead;

##Exercise 1
**Location (from project root folder):** app\interfaces\;

##Exercise 2
Through a browser and with the project running locally access:

 - **[DOMAIN]/register** (perform registration);
 - **[DOMAIN]/register** (authentication after registration);

**Note:** Project configured by default to register in the Laravel logs the entries of e-mails to be dispatched;
