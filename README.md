<p align="center"><a href="https://kpiinstitute.org/" target="_blank"><img src="https://kpiinstitute.org/wp-content/uploads/2016/09/institute-logo.png"></a></p>

This project is developed with Laravel, Tailwind CSS and Livewire.

For an easier binding between a country and it's related counntry phone prefix I used [Laravel-Countries](https://github.com/lwwcas/laravel-countries), a package that contains everything you need to start a new project and have all countries, information and translations on hand. And all this optimized for Laravel 8, 9 and now 10.

Follow this steps to clone the project locally.
- Run git clone https://github.com/marianDdev/kpi-institute.git
- Run composer install
- Run cp .env.example .env
- Add your own database credentials in .env file
- Run php artisan key:generate
- Run php artisan migrate && php artisan db:seed

After successfully submitting the data from the form:
- a new user is persisted in the database
- the "user created" event triggers an email notification
  - for easier local testing that email is received, I added log as default value for MAILER. Go to 'storage/logs/laravel.log and search the user's email address.
  - ![](public/email_example.png)
- the pdf brochure is downloaded on user's local disk
