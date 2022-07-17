# ADV 102

## Setup Local machine
```sh
git clone https://github.com/JOMARSARENO/adv102.git adv102
cd adv102
composer install
php artisan serve
```

## Add Authorized Recipient
1. Go to [https://app.mailgun.com/app/sending/domains/sandbox6fa98ecfa6f64286abd4636b2001e85f.mailgun.org](https://app.mailgun.com/app/sending/domains/sandbox6fa98ecfa6f64286abd4636b2001e85f.mailgun.org)
1. Add an authorized recipient
1. Confirm the email verification for the added email
1. Go to [http://adv102-hcdc.azuzu.xyz/](http://adv102-hcdc.azuzu.xyz/) then start sending emails to authorized emails

## Mailgun
1. Mailgun login [https://app.mailgun.com/](https://app.mailgun.com/)
1. Max number of authorized email is 5
1. Email authorization and the max 5 limit are due to mailgun free account
1. Jomar Sareno has the mailgun login credentials

## Server
1. To access the server, run `ssh -i phplaravel-ec2.cer ec2-user@adv102-hcdc.azuzu.xyz`
1. Get the SSH key from Jomar Sareno