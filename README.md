# php-starter
How to start a PHP project? 

This is a basic php system website for extend. 

Includes a basic database ORM.

A simple blog is included.

### Theme features
1. Base theme folder: `/theme`
2. Included Booststrap 5.3 and Jquery
3. Navigation: `/theme/nav.php`, a dynamic navbar from 'lang.json'.

### Database installation
1. Put your database configuration at `config.php`.
2. Import database demo data from `database.sql`.
3. Ready!

### Back-Office Authentication
An administrator panel is available by login page.
Modify credentials in `config.php` file.
Demo credentials: `admin/admin`.

### Routes and pages 
Example pages: home, cars, about-us, blog and contact.
Create a new page simply:
1. Declare your new route at `/routes.php` file.
2. Create page template at `/pages` folder with the same name as the route.

### Navigation 
Extend navigation navbar at `lang.json`.

### Routing configuration
Create your your routes in  `routes.php` file.

### Custom tags `lang.json`
Define page title page and meta description in this file.


![A snaphot of this aplication](snapshot.jpg)