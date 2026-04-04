-- Use UTF8MB4 for full Unicode support
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- Drop tables in reverse order to avoid FK conflicts
DROP TABLE IF EXISTS Task;

SET FOREIGN_KEY_CHECKS = 1;

-- Creation dse table Tasks
CREATE TABLE IF NOT EXISTS Task (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) ,
        description VARCHAR(1000)
          );


-- les echantillons de test:
insert into Task(title,description)VALUES("task1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquid in excepturi explicabo? Unde ea nemo blanditiis "),
("task2", "et obcaecati. Laboriosam maiores commodi doloremque dignissimos? Iusto omnis adipisci voluptatum veniam sequi."),
("task3", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquid in excepturi explicabo? Unde ea nemo blanditiis "),
("task4", "et obcaecati. Laboriosam maiores commodi doloremque dignissimos? Iusto omnis adipisci voluptatum veniam sequi."),
("task5", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquid in excepturi explicabo? Unde ea nemo blanditiis "),
("task6", "et obcaecati. Laboriosam maiores commodi doloremque dignissimos? Iusto omnis adipisci voluptatum veniam sequi.");