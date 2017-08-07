###careers includes


Login and registration
Job seeker dashboard of


Personal information
Education
Experience
Achievments
Courses
certifications
skills
languages


Administrator/recreutor panel


post new job
filter and search applicant for job
change applicant status




####Requirements
Apache, Nginx, or Microsoft IIS
PHP 5.4 or higher
MySQL 5.6 or higher, for im using Full-text index in search module.

####Installation
create the database and configure it in app/config/database.php
In Artisan run

Php artisan migrate
Then

Php artisan db:seed
Or import \lara.sql file.

After database creating and seeding there will be two default users:

Admin user: admin@localhost.com with password: demo.

Job seeker account login: user@demo.com with password: demo.

###Email configuration
Navigate to app/config/mail.php

To customize email template; navigate to app/view/emails
