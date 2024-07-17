# AJAX Examples

This repository contains examples of AJAX functionalities including user search, content loading, and form submission. These examples demonstrate how to create more interactive and dynamic web pages using AJAX.

## Files Included

- **index.html**: The main HTML file that contains the structure and layout of the web page.
- **search_users.php**: A PHP script that handles user search functionality by querying the database.
- **ajax_info.txt**: A text file used to demonstrate content loading via AJAX.
- **submit_form.php**: A PHP script that processes form submissions via AJAX.

## Live Example

You can test the AJAX functions discussed in this repository on our live example page: [http://web-programming1.kesug.com](http://web-programming1.kesug.com).

## Local Testing

To test the PHP functionalities locally, you can use XAMPP. Follow these steps to set up your local environment:

1. Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Copy the files from this repository to the `htdocs` directory in your XAMPP installation directory (e.g., `C:\xampp\htdocs\ajax-examples`).
3. Start the Apache server using the XAMPP Control Panel.
4. Open your web browser and go to `http://localhost/ajax-examples/`.

## How AJAX Works

### Main Characteristics of AJAX

1. **Asynchronous Communication**: AJAX allows for the asynchronous exchange of data between the browser and the server, meaning the user can continue interacting with the web page while the data is being fetched in the background.
2. **Use of JavaScript and XML**: AJAX uses JavaScript to send and receive data. Although XML is used traditionally, modern implementations often use JSON (JavaScript Object Notation) because of its simplicity and ease of use.
3. **Partial Page Updates**: Instead of reloading the entire web page, AJAX can update just parts of the page, leading to a smoother and faster user experience.
4. **Improved User Experience**: By reducing the need to reload the entire web page, AJAX improves the speed and interactivity of web applications.

### Existing Standards AJAX is Based On

1. **JavaScript**: JavaScript is the scripting language used to create the AJAX request.
2. **XMLHttpRequest Object**: This is an API in the form of an object provided by the browser's JavaScript environment that transfers data between a client and a server.
3. **DOM (Document Object Model)**: AJAX uses the DOM to dynamically display and interact with the information presented.
4. **XML (Extensible Markup Language)**: Originally, XML was used to format the data received from the server. Nowadays, JSON is more commonly used.
5. **HTML/CSS**: AJAX interacts with HTML and CSS to update the user interface dynamically.

### How AJAX Works

1. **Client Event**: The process begins when an event occurs on the web page, such as a button click.
2. **XMLHttpRequest Creation**: A new instance of the XMLHttpRequest object is created.
3. **Request Initialization**: The request is initialized with the open() method.
4. **Request Sent**: The request is sent to the server using the send() method.
5. **Server Processing**: The server processes the request and sends back a response.
6. **Response Handling**: The response is processed by JavaScript, which then updates the web page accordingly without reloading it.

### AJAX User Search Workflow

```plantuml
@startuml
title AJAX User Search Workflow

actor User as U
participant "HTML Page" as H
participant "JavaScript" as JS
participant "PHP Script\n(search_users.php)" as PHP
participant "Database" as DB

U -> H : Enter name in input field
H -> JS : onkeyup event triggers searchUsers()
JS -> JS : Create XMLHttpRequest object
JS -> PHP : Send GET request with name parameter
PHP -> DB : Query database for matching users
DB -> PHP : Return query results
PHP -> JS : Return response with user data
JS -> H : Update results div with response data

@enduml
