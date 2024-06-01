# PHP MVC Educational Project

This project is a simple PHP MVC (Model-View-Controller) application designed for educational purposes. The main goal of this project is to demonstrate the correct way to structure and write code in an MVC pattern, adhering to the SOLID principles.

## SOLID Principles

SOLID is an acronym for the first five object-oriented design principles recommended by Robert C. Martin. These principles make it easier to understand, develop, and maintain software.

- **S**ingle Responsibility Principle (SRP)
- **O**pen/Closed Principle (OCP)
- **L**iskov Substitution Principle (LSP)
- **I**nterface Segregation Principle (ISP)
- **D**ependency Inversion Principle (DIP)

## Project Structure

The project is structured into different modules, each representing a different aspect of a typical educational institution. These modules include `Department`, `Filier`, `Module`, `Professeur`, `Etudiant`, `Salle`, and `User`.

Each module is represented by a class that extends a `BaseModel` class, following the MVC pattern. The `BaseModel` class provides basic functionality that can be used by all models.

The project also includes a `Database` class for handling database connections and operations.

## Usage

To use this project, you need to have PHP installed on your system. You can then clone the project, configure your database connection in the `Database` class, and start using the application.

## Contributing

Contributions are welcome. Please feel free to fork the project, make your changes, and submit a pull request.

## License

This project is open-source and is licensed under the MIT License.
