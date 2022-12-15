EasyHellar-PHP
===============

A simple class for making calls to Hellar's API using PHP.

Getting Started
---------------
1. Include easyhellar.php into your PHP script:

	`require_once('easyhellar.php');`
        
        `use easyhellar\EasyHellarn as EasyHellar;`

2. Initialize Hellar connection/object:

	`$hellar = new EasyHellar('username','password');`

	Optionally, you can specify a host, port. Default is HTTP on localhost port 9989.

	`$hellar = new EasyHellar('username','password','localhost','9989');`

	If you wish to make an SSL connection you can set an optional CA certificate or leave blank
	`$hellar->setSSL('/full/path/to/mycertificate.cert');`

3. Make calls to hellard as methods for your object. Examples:

	`$hellar->getinfo();`
	`$hellar->getrawtransaction('6f3ea24fece8662adf981cbc1aae199579c825d0f594f4f1c16b3e38c2e1539c',1);`
	`$hellar->getblock('00000005608dfb4814f3ccb8ecfbbf648ed1f563063b5c96b6eb64f21d43e74b');`

        You can find full example in easyhellar_example.php

Additional Info
---------------
* When a call fails for any reason, it will throw easyhellar\EasyHellarException

* The HTTP status code can be found in $hellar->status and will either be a valid HTTP status code or will be 0 if cURL was unable to connect.

* The full response (not usually needed) is stored in $hellar->response while the raw JSON is stored in $hellar->raw_response
