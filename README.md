## CO-PO-PSO Accreditation webapp details

Every dependencies used during development will be updated here.I kindly request every one to visit this website frequently.

### Install Laravel

The Laravel framework has a few system requirements. You will need to make sure your server meets the following requirements:

PHP >= 5.6.4
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension

Run the following command to make it happen:

```
sudo apt-get install pdo-mysql php7.0-mbstring php7.0-zip php7.0-xml php7.0-mysql 
```

Composer, a dependency manager for PHP has to be installed to use Laravel. Run this to get the latest version of Composer:

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

To install Composer globally, run this to move composer.phar to a directory that is in your path:

```
mv composer.phar /usr/local/bin/composer
```

If it fails due to permissions, run using sudo. 

To install the laravel installer, 

```
composer global require "laravel/installer"
```

To be able to use the laraval executable, add it to the PATH variable. 

```
export PATH="$PATH:~/.config/.composer/vendor/bin"```
```

Restart apache now with:

```sudo service apache2 restart
```

Now, create a working directory of laravel:

```
laravel new foldername
```

To ensure that Laravel has been properly installed, run 

```
php artsian serve
```

If you're able to view the welcome page, you're all set up!


### Support or Contact

Having trouble with Installing or any doubt..?
Ask on our whatsapp group.

With 
Love
### CO-PO-PSO Team
