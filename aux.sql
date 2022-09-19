CREATE DATABASE great_brother;
USE great_brother;
CREATE TABLE IF NOT EXISTS students(
    id INT PRIMARY KEY,
    name VARCHAR(100),
    password VARCHAR(100)
);
CREATE TABLE IF NOT EXISTS parents(
    email VARCHAR(100),
    password VARCHAR(100),

    students_id INT,
    FOREIGN KEY(students_id) REFERENCES students(id)
);
INSERT INTO students(id, name, password) VALUES
(1034400029, 'Diego Alejandro Agudelo Vasquez', '12345Dieguito'),
(1019604047, 'Alejandra Alvarez Mora', 'we_love_the_truth'),
(1013097421, 'Perdomo Velasquez Sebastian', 'im_not_your_boyfriend');

INSERT INTO parents(students_id, email, password) VALUES
(1034400029, 'agudelodiego10.a@gmail.com', 'its_just_a_burning_memory'),
(1019604047, 'alvarezalejandra10b@gmail.com', 'c4lm1ng_n0t10n'),
(1013097421, 'perdomovelasquezsebastian10c@gmail.com', 'without_you_i_will_die');
