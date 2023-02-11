# Hotel_management_system

###### Introduction:
The Hotel Management System in PHP is a small project developed using Laravel framework and PHP, JavaScript, Bootstrap, html and CSS. The project contains an admin side. The admin side manages all the management like manage bookings, checking profit, payment, adding and deleting rooms etc. The admin has an important role in the management of this website.

###### I will try to include required 11 points here.

1. I used GitHub to store my project code. I also used GitHub action for continuous delivery.

Project source code: https://github.com/RKMAMUN/Hotel_management_system/tree/main/Project
Project UI Screenshot: https://github.com/RKMAMUN/Hotel_management_system/tree/main/User%20Interface




2. UML stands for Unified Modeling Language, which is a graphical language used to model and describe software systems. UML provides a standardized way of visualizing the design of a software system, including its structure, behavior, and interactions between objects. UML diagrams can be used to model various aspects of a software system, including Class diagrams, which model the classes, attributes, and methods of a system, and the relationships between them.

Class Diagram: https://github.com/RKMAMUN/Hotel_management_system/blob/main/11%20Points/2/HMS_Class_Diagram.JPG

Use Case Diagram:https://github.com/RKMAMUN/Hotel_management_system/blob/main/11%20Points/2/HMS_use_case_diagram.JPG

Activity Diagram: https://github.com/RKMAMUN/Hotel_management_system/blob/main/11%20Points/2/Activity%20Diagram.jpg


3. Domain-Driven Design (DDD) is an approach to software development that focuses on modeling the core business concepts and processes in a software system. DDD is based on the idea that the most important aspect of software design is understanding the problem domain, and that this understanding should be the driving force behind the design and development of the software.

My DDD: https://github.com/RKMAMUN/Hotel_management_system/blob/main/11%20Points/3/DDD.JPG

4. SonarCloud is a cloud-based platform for continuous code quality analysis and improvement. It is part of the SonarQube family of tools, which provide a comprehensive solution for managing code quality, security, and technical debt. I used SonarCloud for my project. Please, have a look at the provided links below:

https://sonarcloud.io/summary/new_code?id=RKMAMUN_Hotel_management_system

5.Clean Code Development: Clean code refers to code that is well-organized, readable, maintainable, and easy to understand. It follows best practices, coding standards, and design patterns to ensure that the code is of high quality.
In my project I tried to follow clean code.
Here is my clean code points:
 1. Commenting where needed
 2. Proper naming of variables and functions
 3. Proper naming of files
 4. Avoiding repeat
 5. Standard formatting implemented
 6. No useless variables or functions defined

I have also some screenshot as cheat sheet
https://github.com/RKMAMUN/Hotel_management_system/blob/main/11%20Points/5/Cheat%20Sheet.pdf



7. Unit testing is a software testing technique in which individual units or components of a software application are tested in isolation from the rest of the application. The goal of unit testing is to validate that each unit or component of the application works as intended, and to detect and prevent bugs early in the development process. This can help to reduce the overall cost and time required to deliver a quality product.
Unit tests are typically automated and are run frequently during the development process, such as after each change to the code or at least once a day. They are written by developers as part of the development process, and they provide a fast and efficient way to validate that the code works as expected.

some example of tests:
1. https://github.com/RKMAMUN/Hotel_management_system/blob/main/11%20Points/7/reserve_room_test.php
 
The test uses the assertTrue method to verify that the reserveRoom method returns true, indicating that the room was successfully reserved. It then uses the    assertFalse method to verify that the checkAvailability method returns false, indicating that the room is no longer available.

2. https://github.com/RKMAMUN/Hotel_management_system/blob/main/11%20Points/7/room_management_test.php
The testAddRoom method tests the addRoom method by adding a room and verifying that it can be retrieved using the getRoom method.
The testUpdateRoom method tests the updateRoom method by adding a room, updating its information, and verifying that the updated information is returned by the getRoom method.
