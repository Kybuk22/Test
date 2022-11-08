DROP DATABASE IF EXISTS baza;
CREATE DATABASE baza;
USE baza;

CREATE TABLE restaurant (
    id INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    nName VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    adress VARCHAR(255) NOT NULL,
    postcode VARCHAR(10) NOT NULL
);

CREATE TABLE employee_position (
    id INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE employee (
    id INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    personal_id_number VARCHAR(11) NOT NULL
);
CREATE TABLE restaurant_table (
    id INT IDENTITY(1,1) NOT NULL  PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    number_of_guests INT  NOT NULL,
    restaurant_id INT  NOT NULL,
    CONSTRAINT FK_Restaurant_Table_Restaurant FOREIGN KEY (restaurant_id) REFERENCES restaurant(id),
)

CREATE TABLE employment (
    restaurant_id INT  NOT NULL,
    employee_id INT  NOT NULL,
    employee_position_id INT  NOT NULL,
    PRIMARY KEY (restaurant_id, employee_id),
    CONSTRAINT FK_Restaurant_Employee_Restaurant FOREIGN KEY (restaurant_id) REFERENCES restaurant(id),
    CONSTRAINT FK_Restaurant_Employee_Employee FOREIGN KEY (employee_id) REFERENCES employee(id),
    CONSTRAINT FK_Restaurant_Employee_Roles FOREIGN KEY (employee_position_id) REFERENCES employee_position(id)
);

CREATE TABLE reservation (
    id INT IDENTITY(1,1) NOT NULL  PRIMARY KEY,
    restaurant_id INT  NOT NULL,
    restaurant_table_id INT NOT NULL,
    surname VARCHAR(50) NOT NULL,
    reservation_date DATE NOT NULL,
    phone VARCHAR(12) NOT NULL,
    guests INT NOT NULL,
    CONSTRAINT FK_Reservation_Restaurant FOREIGN KEY (restaurant_id) REFERENCES restaurant(id),
    CONSTRAINT FK_Reservation_Restaurant_Table FOREIGN KEY (restaurant_table_id) REFERENCES restaurant_table(id)
);

CREATE TABLE meal_type (
    id INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    title VARCHAR(50) NOT NULL
);

CREATE TABLE meal (
    id INT IDENTITY(1,1) NOT NULL  PRIMARY KEY,
    meal_type_id INT  NOT NULL,
    restaurant_id INT  NOT NULL,
    price INT NOT NULL,
    meal_name VARCHAR(100) NOT NULL,
    CONSTRAINT FK_Meal_Meal_Type FOREIGN KEY (meal_type_id) REFERENCES meal_type(id),
    CONSTRAINT FK_Meal_Restaurant FOREIGN KEY (restaurant_id) REFERENCES restaurant(id)
);

