As part of my final project, we added the feature  of sending an email when some one register.  In order to do that, we need to us 
Mailtrap.io. 

Maitrap.IO
1) Go to Mailtrap.io
2) Login to Mailtrap.io and click on the inbox being used to test the functionality.
3) When your in the inbox, select settings to see the username and password hash and copy them.
4) Then within the project go to .env file and update the section related to mail:

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=XXXXXXXXXXXXX
    MAIL_PASSWORD=XXXXXXXXXXXXX
    MAIL_FROM_ADDRESS=from@example.com
    MAIL_FROM_NAME=Example

5) THen save your .env file
6) In order to test the queue, run php artisan queue:listen on command line.  This turns on the server to listen to the queue
and waits to se if an email is triggered.
Then go and register to get an email, which will trigger after a 5 sec.