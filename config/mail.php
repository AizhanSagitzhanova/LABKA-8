'driver' => env('MAIL_DRIVER', 'sendmail'),
'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
'port' => env ('MAIL_PORT' , 587),
'form' => [
'address' => env ('MAIL_FORM_ADDRESS' , 'aizhans2018@example.com'),
'name' => env('MAIL_FORM_NAME' , 'Example'),
],
'encryption' => env('MAIL_ENCRYPTION' , 'tis'),
'username' => env('MAIL_USERNAME'),
'password' => env('MAIL_PASSWORD'),
