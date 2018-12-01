# MVC - Model-view-controller

Model-view-controller (MVC), is a software architecture standard (not to be confused with a design pattern) that separates the representation of information from user interaction with it. The model consists of application data, business rules, logic, and functions. A view can be any output representation of the data, such as a table or a diagram. You can have multiple views of the same data, such as a bar chart for management and a tabular view for counters. The controller mediates the input, converting it into commands for the model or view. The core ideas behind MVC are code reuse and concept separation.



![](https://i.imgur.com/HUhtjBp.png)


#### Model
* Whenever you think of data manipulation, think of model. He is responsible for reading and writing data, as well as for his validations.

#### View
* The user interaction layer. It just displays the data, being it by means of an html or xml.

#### Controller
* Responsible for receiving all user requests. Its methods called actions are responsible for a page, controlling which model to use and which view will be shown to the user.

## File Structure

```
  MVC
  |
  |--assets/
  |  |--css/
  |  |--img/
  |  |--js/
  |  
  |--controllers/
  |  |--all controllers/
  |
  |--lib/
  |  |--autoloader.php/
  |
  |--models/
  |  |--all models/
  |
  |--views/
  |  |--all views/
  |
  |--index.php/
  |
```

## What is this repository?

It is a simple Lexico and Sintatico parser using the MVC standards in PHP. Project for learning MVC and POO standards in PHP.

All the files that are available in this repository are commented out to make it easier to understand what is happening in the code and so you can build your MVC architecture base to make it easier to organize your application.

## License


This repository is licensed under the MIT License- see the file for details.
