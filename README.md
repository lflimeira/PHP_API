# PHP_API

A simple RESTful API PHP without Frameworks, to help you to understand  the concepts and the structure used. This way, you can use this example to develop your own API.

## Installation

1. Clone/download this folder to your computer.
2. Save this folder in your Apache root directory.
3. Access the DB folder and use the api_database.sql file to create your database.
4. Change the connection.class.php file in api\connection path, if it's necessary.

## How does it work

You can use the API from a web front-end application, mobile app and also using the app called Postman in Chrome (you can download it in Chrome's Web Store using this [link] (https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?utm_source=chrome-ntp-icon)).  Here i'm using the Postman to exemplifyed the use of the API.

We have 4 methods of access the API:

1. GET
2. POST
3. PUT
4. DELETE

- `GET method` (used to return an existing client): It's accessed using the URL http://localhost/API_Restful/api/client/(existing client id) as in the following example:

![GET method](https://raw.githubusercontent.com/lflimeira02/PHP_API/master/API_Restful/api/doc_img/get.png)

- `POST method` (used to include a new client): It's accessed using the URL http://localhost/API_Restful/api/client/ and passing as parameter (name, age and gender) as in the following example:

![POST method](https://raw.githubusercontent.com/lflimeira02/PHP_API/master/API_Restful/api/doc_img/post.png)

- `PUT method` (used to alter an existing client): It's accessed using the URL http://localhost/API_Restful/api/client/(existing client id) and passing as parameter (name, age and gender) as in the following example:

![PUT method](https://raw.githubusercontent.com/lflimeira02/PHP_API/master/API_Restful/api/doc_img/put.png)

- `DELETE method` (used to delete an existing client): It's accessed using the URL http://localhost/API_Restful/api/client/(existing client id) as in the following example:

![DELETE method](https://raw.githubusercontent.com/lflimeira02/PHP_API/master/API_Restful/api/doc_img/delete.png)


## Why should you use APIs?

APIs are a great way to separate the back-end from the front-end of your application,  this also makes it possible to develop for different kinds of platforms without change your back-end application and without rewrite your code in differents programming languages. For example: You can have a web application that access an API and develop a mobile application that will access the same API using the same routes. Isn't it awesome?

## Credits

- [Luiz Felipe de Oliva Limeira](https://github.com/lflimeira02)

