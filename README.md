# php-starter
How to start with PHP project? Look this basic starter php structure.

### Theme structure
1. Base theme: index.php
2. Head: head.php, set title and meta from 'lang.json'. Load css anf js files.
3. Navigation: nav.php, a dinamic navbar from 'lang.json'
4. Footer: footer.php

### Subpages definition at '/pages' folder.
Example pages: home, services, about-us, blog and contact
Create a new page simply creating new file, example /pages/cars.php  then go to the browser and open server.com/cars.

### Navigation 
Extend navigation navbar at 'lang.json'

### Database
Put your database config at 'includes/database.php'

### Rotuting configuration
Extend your routes a the router.php file.

### Custom tags lang.json 
Define page title page and meta description in this file.

### Extra
Bootrstrap 5.2 Built fast css themes.
Jquery 3.6 -> Javascript tools

![A snaphot of this aplication](snapshot.jpg)