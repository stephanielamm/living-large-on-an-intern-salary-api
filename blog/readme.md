# Living Large On An Intern Salary- An API for choosing a place to live
------
I created this application as I was looking for a place to live after graduation. After a few weeks of trying to work with a messy Google doc and spreadsheet, I thought I could code a way to keep track of my housing preferences.

This application allows users to store information such as location, price, bedrooms, bathrooms and distance to work in one database.

I have divided my housing preferences into three categories: downtown, midtown and suburban.

This API was built using PHP with Laravel as the framework. Users are able to create, read, update and delete items from the database via AJAX.

## Installation
------
1. Clone this repository.

2. Download composer following the instructions here: https://getcomposer.org/download/

3. Download and Launch MAMP following the instructions here: https://www.mamp.info/en/

4. In MAMP, go to 'Preferences'>'Web Server' and set the document root to the 'Public' folder within the downloaded repository.

5. Still in MAMP's Preferences, go to 'Ports' and set the Apache Port to 8888.

6. Start the MAMP server.

7. From the MAMP landing page, go to phpMyAdmin and create a database called 'app.'

8. Open the Terminal, CD into the downloaded repository and run 'php artisan:migrate.'

9. Open the browser to localhost:8888

10. Use Advanced REST Client or another application to Get, Post, Put and Delete items in the database. 


## Documentation
------
View API documentation here https://stephanielamm.gitbooks.io/housing-choice-api.

## More from Stephanie Lamm
------
View my portfolio at http://www.stephanielamm.com.
