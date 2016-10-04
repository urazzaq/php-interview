# Explanation of files

## Folder Structure

The application uses the Model-View-Controller, or MVC, pattern.
The directories are structured to keep the project organized following this pattern.
The following is a comprehensive explanation of all files in the project:

```
src/                         --> all the source files for the application
  app/                         --> all the code behind the application
    Config/                      --> all classes that configure the application
      AppRoutesProvider.php        --> class for registering routes
      AppServicesProvider.php      --> class for registering dependencies with the DI container
    Controllers/                 --> all controllers for the application
      API/                         --> controllers for API endpoints
        StudentsController.php       --> controller for students API endpoint
      Web/                         --> all controllers for web views
        HomeController.php           --> controller for home page view
        StudentsController.php       --> controller for students view
        WebController.php            --> abstract controller class for web views
      BaseController.php           --> abstract controller class
    Models/                      --> all models for the application
      Student.php                  --> student model
    Services/                    --> all app-specific services
      NameResolver/                --> services for resolving names
        NameResolverInterface.php    --> interface defining a name resolver service
        StudentNameResolver.php      --> name resolver service for students (not implemented yet)
      Repository/                  --> services for interacting with data repositories
        JsonRepository.php           --> basic service for using JSON as a data repository
        RepositoryInterface.php      --> interface defining a repository service
      Serialization/               --> services for serialization
        JsonSerializer.php           --> service for serializing/deserializing JSON
        SerializerInterface.php      --> interface defining a serializer service
    Views/                       --> all web views for the application
      home.html                    --> basic template for home view
      layout.html                  --> base layout for app
      students.html                --> basic template for students view
  public/                      --> root directory for the web server
    index.php                    --> entry point for the application
    main.css                     --> main stylesheet for application
  resources/                   --> resources used by the application
    students.json                --> JSON doc with sample student data
  autoload.php                 --> script for autoloading dependencies
tests/                       --> unit tests for the application and services
  bootstrap.php                --> script for bootstrapping PHPUnit
  StudentNameResolverTest.php  --> unit tests for StudentNameResolver class
vendor/                      --> all 3rd-party dependencies (not included in source control)
```