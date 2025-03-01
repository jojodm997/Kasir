# Cashier Application for Final Project (UKK)

This Cashier application built with CodeIgniter 4 is a project designed for the Final Project (UKK). The actors in this application consist of two roles:

>Cashier and Admin

## Description

Customers can make purchases without creating an account, while administrators are responsible for managing data and facilities. Cashiers, on the other hand, handle financial management for check-ins and check-outs.
Requirements

### Dependencies

- To run this application, the following prerequisites are necessary:
- PHP version 7.4 or newer is required, with the following PHP extensions enabled: intl, mbstring, json.
- MySQL
- Composer
- Git Bash (optional for the download process)

### Installing

- You can either download the zip file or clone the repository (requires Git installed on your PC) by following these steps:
- Open the terminal or command line. Run the following command:
  ```
  git clone https://github.com/jojodm997/Kasir
  ```
- This will download the `Kasir` directory.
- Create a database named `kasir`.
- Import the database file using phpMyAdmin or any other MySQL client tool.
- Update the database settings in the env file.
- Rename the env file to .env (starting with a dot).

### Running the program

- Open VSCode.
- Navigate to the `kasir` directory.
- In the terminal, go to the `Downloads/Kasir` directory and type
  ```
  php spark serve
  ```
- Open a web browser and go to `http://localhost:8080` (or the port specified in the terminal).

### Default crendentials

- Admin
  username = Fauzan
  email = ojantampan@gmail.com
  password = duaribusebelas

- Kasir
  username = Dobleh
  email = dojesmanja@gmail.com
  password = butuhduit

> [!WARNING]
> If you use windows 10 or windows 11 you need to configure the php program
> Go to your project directory
> type this command

```
c:\xampp\php\php spark serve
```

- Or you install globally https://www.sitepoint.com/how-to-install-php-on-windows/

## Authors

ex. FauzanDM  

## Version History
- 1.0.0
  - Lastest Greatest
- 0.3.1
  - Added Create and Delete for Kategori
- 0.3
  - Added detail all user
- 0.2
  - Added a Login page
- 0.1
  - Initial Release

## License

This project is licensed under the MIT License - see the LICENSE.md file for details
