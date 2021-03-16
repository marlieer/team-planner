## Team Planner

By Marlie Dueck

Team Planner is a simple app which allows the user to create a project requiring specific skills and competencies. The app performs a calculation to determine how good the fit is and suggests the best suited team members to join the project.

### Steps Taken to Create the Project
1. Create a Laravel project using composer.

        composer create-project --prefer-dist laravel/laravel:^7.0 team-planner
        
2. Configure the Windows hosts file (found at C:/Windows/System32/drivers/etc/hosts. Add an entry with the following information:

        192.168.10.10  team-planner.test
3. Configure Homestead virtual machine for the development environment. Follow the [Laravel documentation](https://laravel.com/docs/7.x/homestead) to install and configure Homestead requirements. To start the virtual machine, run the following command:

        vagrant up
4. Create a .env file and set the environment variables to connect to the database. Also set the APP_NAME and APP_URL variables.

5. If the APP_KEY is not already set, run the following command from within Homestead at the project root:

        php artisan key:generate


### Steps to Clone the Project for Development
Homestead is the recommended virtual machine for Laravel development. Follow the [Laravel documentation](https://laravel.com/docs/7.x/homestead) to install and configure Homestead.
1. Clone this GitHub repository to your local development environment.

2. Run the following command to install project packages and dependencies:

        composer install
        
3. Create a .env file and set the environment variables. You can find an example .env file for Laravel [here](https://github.com/laravel/laravel/blob/7.x/.env.example).

4. For testing, create a .env.testing file and set the environment variables to connect to the database you plan on using for testing. Also set the APP_* environment variables.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into the comprehensive video library.
