CREATE TABLE CAR
(
    CarType VARCHAR (50),
    CarRegNo VARCHAR (25),
    CarPrice int,
    SellDate Date
)

INSERT INTO PUBLIC.CAR
(
    CarType, CarRegNo, CarPrice, SellDate
)
VALUES
('Mercedes', 'KDE 865L', 5000000, '16-05-2023'),
('Toyota', 'KCT 129G', 3800000, '18-05-2023'),
('BMW','KDB 374K', 4000000, '20-05-2023');

CREATE TABLE EMPLOYEE
(
    EmpID int,
    EmpName VARCHAR(50),
    EmpEmail VARCHAR(50),
)

INSERT INTO PUBLIC.EMPLOYEE
(
    EmpID, EmpName, EmpEmail
)
VALUES
(19346723, 'Austin', 'austinF@Stan.com'),
(45362786, 'Phillip', 'phillipM@Stan.com'),
(56723323, 'Stanley', 'stanleyK@Stan.com');
