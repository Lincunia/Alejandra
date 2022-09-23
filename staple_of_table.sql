CREATE DATABASE great_brother;
USE great_brother;
CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100),
    -- PRIMARY KEY (id, name)
    PRIMARY KEY (id)
);
CREATE TABLE IF NOT EXISTS parents(
    email VARCHAR(100),
    password VARCHAR(100),

    students_id INT,
    FOREIGN KEY(students_id) REFERENCES students(id)
);
CREATE TABLE IF NOT EXISTS shopping(
    name_prod VARCHAR(50),
    date_of_purch DATETIME DEFAULT CURRENT_TIMESTAMP,
    amount_mon INT,

    name_student VARCHAR(100)
    /*
    I got no success on doing a foreign key
    FOREIGN KEY(name_student) REFERENCES students(name)
    */
);
CREATE TABLE IF NOT EXISTS products(
    name VARCHAR(50),
    prize INT
);

INSERT INTO products(name, prize) VALUES
('lapiz', 1200),
('papas_Margarita', 2200),
('marcador_permanente', 1500),
('marcador_borrable', 1200),
('un_pliego_de_cartulina', 1800),
('medio_pliego_de_cartulina', 1600),
('un_cuarto_de_cartulina', 1400),
('un_octavo_de_cartulina', 700),
('blog_de_hojas_de_origami', 1500),
('arepa', 1200), 
('empanada', 1200), 
('perro_caliente', 3500), 
('pastel_de_pollo', 3500), 
('pastel_de_carne', 3500), 
('pepsi', 1200);
INSERT INTO students(id, name, password) VALUES
(1034400029, 'Diego Alejandro Agudelo Vasquez', '12345Dieguito'),
(1019604047, 'Alejandra Alvarez Mora', 'we_love_the_truth'),
(1013097421, 'Perdomo Velasquez Sebastian', 'im_not_your_boyfriend');

INSERT INTO parents(students_id, email, password) VALUES
(1034400029, 'agudelodiego10.a@gmail.com', 'its_just_a_burning_memory'),
(1019604047, 'alvarezalejandra10b@gmail.com', 'c4lm1ng_n0t10n'),
(1013097421, 'perdomovelasquezsebastian10c@gmail.com', 'without_you_i_will_die');
