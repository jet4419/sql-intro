CREATE TABLE employees (
	id INT AUTO_INCREMENT,
	name VARCHAR(255),
	age INT,
	address VARCHAR(255),
	PRIMARY KEY(id)
);

INSERT INTO employees (name, age, address) VALUES ('John Doe', 21, 'Quezon City');

/* Multiple Insert of Records */

INSERT INTO employees (name, age, address) VALUES ('Juan Dela Cruz', 25, 'Manila City'), ('Erick Santos', 32, 'Zamboanga City');

-- SELECT * FROM employees WHERE id = 1;


-- CREATE TABLE students(
-- id INT AUTO_INCREMENT,
--    name VARCHAR(255),
--    age INT,
--    year_level VARCHAR(255),
--    PRIMARY KEY(id)
-- );