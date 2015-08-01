# php-app-console-example
Example of how to provide an interactive console in your php web application

## Why
An interactive console is common in ruby-land thanks to IRB. Now that php has the -a option php can haz console too!

## When
The use-case is fairly broad, anytime you have a php web application you might want to have interactive access to. This is useful for debugging during development time, trouble shooting bugs or even maintenance on a running system.

## How
This only relies on being able to load an init.php file to include everything you will want to use in the conosle. 
This works best with a good separation of concerns in your web application. Your http end points should be separate from your main application logic like in MVC architecture. 

Notice in this example I am not including the index.php file. Index.php is the http endpoint that is not part of the core applcation logic but only an interface to the application.

The script provided includes the commands: `run`, `conosle`. 

`run` will run php's built-in webserver for quick easy development without deploying to Apache httpd or other web server.

`conolse` will start an interactive shell that has your code loaded so you can work with it in real time.

### Example

```
$ ./my_app
usage: ./my_app <command>
 commands:
 	run : run with built-in webserver in foreground
 	console : run interactive php console
```

```
$ ./my_app run
PHP 5.5.24 Development Server started at Sat Aug  1 08:48:42 2015
Listening on http://localhost:9999
Document root is /Users/mjb2k/Test/php/php-app-console-example
Press Ctrl-C to quit.
```

```
$ ./my_app console
Interactive shell

php > $car = new Car();
php > $car->setColor('green');
php > echo $car->getColor();
green
php > $car->drive();
Vroom!
php > quit
```
