# _Contacts_

#### _Epicodus-PHP, Week 1 Independent Project, 06.30.2017_

#### By _**Nathan Stewart**_

## Description

_This PHP exercise allows the user to enter information that creates a viewable contact list, as well as delete the list if desired._

## Prerequisites

_You will need the following properly installed on your computer:_

* [MAMP](https://www.mamp.info/en/) for Windows or MacOS
* [PHP](https://secure.php.net/)
* [Composer](https://getcomposer.org/)

## Configuration/Dependencies

_The app will use Silex and Twig._

## Setup/Installation

* Open GitHub site on your browser: https://github.com/GStewartN/Contacts
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then paste the repository link and press enter
  * type 'cd Contacts' to access the path on your computer
  * type 'composer install' in terminal to download dependencies
  * type 'cd web' to enter the web folder, then type 'php -S localhost:8000' to open local server
* In your browser, enter 'localhost:8000' to view the webpage on your browser


## Specifications

| Behavior | Input | Output |
|----------|-------|--------|
| User visits landing page | User enters details into form and clicks add contact button | A formatted contact of the entered information displays on a new page with a link back to landing page |
| User visits contact created confirmation page | User clicks link back to landing page | Original landing page now displays the created contact, as well as the add contact form with add and delete buttons |
| User visits landing page with list of previously created contacts | User clicks delete all contacts button | A page confirming contacts cleared displays, with a link back to the landing page |
| User visits delete confirmation page | User clicks link back to landing page | The original landing page with no previous contacts is displayed

## Technologies Used

* _PHP_
* _HTML_
* _Bootstrap_
*  _CSS_
* _Silex_
* _Twig_
* _Composer_
* _MAMP_

### License

MIT License

Copyright &copy; 2017 Nathan Stewart

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
