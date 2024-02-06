USE SoftwayDB;

CREATE TABLE medical_units
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    index_value  INT          NOT NULL,
    medical_unit VARCHAR(255) NOT NULL
);

INSERT INTO medical_units (index_value, medical_unit)
VALUES (3, 'Cardiologie'),
       (5, 'Traumatologie');
