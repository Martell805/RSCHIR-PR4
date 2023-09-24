USE appDB;

CREATE TABLE IF NOT EXISTS clients (
  ID INT(11) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  phone VARCHAR(10)
);

CREATE TABLE IF NOT EXISTS employees (
  ID INT(11) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  salary INTEGER NOT NULL
);

INSERT INTO clients (name, surname, phone) VALUES ('Name1', 'Surname1', '12345');
INSERT INTO clients (name, surname, phone) VALUES ('Name2', 'Surname2', '54321');
INSERT INTO clients (name, surname, phone) VALUES ('Client', 'Good', '09876');
INSERT INTO clients (name, surname, phone) VALUES ('Client', 'Bad', '67890');

INSERT INTO employees (name, surname, salary) VALUES ('Emp', 'One', 5000);
INSERT INTO employees (name, surname, salary) VALUES ('Emp', 'Two', 2000);
INSERT INTO employees (name, surname, salary) VALUES ('Last', 'Emp', 15000);
