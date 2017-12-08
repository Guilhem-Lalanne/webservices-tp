# Webservices TP

Objectives :
- Create an API which converts currencies
- Interact with it with a client


## 1. Setup

Everything I did to setup the server is described in the doc/setup file.
That is : 
- Configuration of Apache 2.4 VirtualHost
- Installation of Symfony, a famous PHP framework.

## 2. Commands passed during the project

I regrouped every command passed during the project in the file doc/bundle_creation.
The title could be misleading, it regroups :
- Symfony Bundle creation
- Database creation
- Entity (database object) creation

## 3. Operation

The project is divided in 2 distinct parts (3 counting the documentation), the frontend and the backend.
These two parts interact as a webservice : the backend generates the data requested by the frontend.

#### Backend

Written in Symfony, it uses its architecture, using many design patterns, such as MVC, front controller, ...

**backend/src/Webservices/ApiBundle/Entity/Currency.php**
Data stored in DB is accessed from the class Currency. Each DB line can be declared as a Currency instance.

**backend/src/Webservices/ApiBundle/Repository/CurrencyRepository.php**
The class Currency is used by a class CurrencyRepository, which adds functions to process data.

**backend/src/Webservices/ApiBundle/Controller/DefaultController.php**
The controller uses the function declared in the repository.
It contains different public functions, named ***Action(). Each one of them is a different page of the website.
Here, the function convertAction() uses the functions of the repository, with 3 parameters : 
- $initialCurrencyCode is the currency to convert
- $targetCurrencyCode is the currency wanted by the user
- $amount is ... the amount to convert.

As we do not need the page to be printed onscreen, no view completes this "MVC" model.
Instead, the page will return a single value, based on the address sent by the client.

**backend/src/Webservices/ApiBundle/Resources/config/routing.yml**
This file routes the requests of the address bar to the right controller.
It is the one allowing us to pass variables from the address, as GET.


#### Frontend

The frontend simply processes input of user into an address. This address is then sent to the backend, and the response displayed using curl.

**Note : you have to setup your server address in the controller file !**