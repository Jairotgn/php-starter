# php-starter
How to start with PHP project? Look this basic starter php project. 

Build fast responsive themes with Bootstrap css.

### Theme features
1. Base theme: `theme/index.php`
2. Head: `theme/head.php`, set title and meta from `lang.json`.
3. Navigation: `theme/nav.php`, a dynamic navbar from 'lang.json'.

### Instructions
1. Put your database configuration at `config.php`.
2. Import database demo data from `database.sql`.
3. Ready!

### Back-Office Authentication
An administrator panel is avaiable by login page.
Modify credentials in `config.php` file.
Demo credientials: `admin/passbarcelona`.

### Subpages definition at `/pages` folder.
Example pages: home, cars, about-us, blog and contact
Create a new page simply creating new file, example `/pages/cars.php`  then go to the browser and open server.com/cars.

### Navigation 
Extend navigation navbar at `lang.json`.

### Rotuting configuration
Extend your routes a the `router.php` file.

### Custom tags `lang.json`
Define page title page and meta description in this file.


![A snaphot of this aplication](snapshot.jpg)