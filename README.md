Installation

1) Download the ANAX-MVC framework (only 669,5 files). 
https://github.com/mosbth/Anax-MVC

2) Go to DIR Anax and add code to the composer.json file 

"require": { 
"ng/flashmessage": "dev-master"
},



3) Run composer from the commando line. Be sure to choose right DIR or try several other strategies at the same time. Use commando

compose update --no-dev
compose install --no-dev




3) Add flash service to Anax-mvc/webroot/index.php 

$di->setShared('flash', function() {
$flash = new \ng\CFlashMessage\CFlashMessage();
return $flash;
});


4) Call a friend for more help.
