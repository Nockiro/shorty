# Shorty

Shorty is a simple URL shortener for PHP.

## Installation

1\. Download and extract the files to your web directory.

2\. Use the included `database.sql` file to create a table to hold your URLs.

3\. Configure your webserver.

For **Apache**, edit your `.htaccess` file with the following:

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?q=$1 [QSA,L]

For **Nginx**, add the following to your server declaration:

    server {
        location / {
            rewrite ^/(.*)$ /index.php?q=$1;
        }
    }

4\. Save the `config.sample.php` file as `config.php`.

## Generating short URLs

To generate a short URL, simply use the form provided at `/add` ..

    http://example.com/add/
	
.. or use the direct link via query.

    http://example.com/add/?url=http://www.google.com

This will return a shortened URL such as:

    http://example.com/9xq

When a user opens the short URL they will be redirected to the long URL location.

By default, Shorty will generate an HTML response for all saved URLs.
You can alter the response format by passing in a `format` query parameter.

    http://example.com/?url=http://www.google.com&format=text

The possible formats are `html`, `xml`, `text`, and `json`.

## Whitelist

By default anyone is allowed to enter a new URL for shortening. To restrict the saving of URLs to 
certain IP addresses, use the `allow` function:

    $shorty->allow('192.168.0.10');

## Authentication

To protect the link generation against bots or unwanted additional users, you can use a .htpasswd file to protect the entire `add/` folder.
For the apache webserver, the .htaccess in the `add/` folder could for example look like that:


    AuthType Basic
    AuthName "No link generation without password"
    AuthUserFile  /absolute/path/to/.htpasswd
    Require valid-user



## Requirements

* PHP 5.1+
* PDO extension

## License

Shorty is licensed under the [MIT](https://github.com/mikecao/shorty/blob/master/LICENSE) license.
