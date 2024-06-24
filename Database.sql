CREATE TABLE CAR (
  CarType VARCHAR(50),
  CarRegNo VARCHAR(25) PRIMARY KEY,  -- Added primary key constraint
  CarPrice INT,
  SellDate DATE
);

INSERT INTO CAR (
  CarType, CarRegNo, CarPrice, SellDate
)
VALUES
  ('Mercedes', 'KDE 865L', 5000000, '2023-05-16'),
  ('Toyota', 'KCT 129G', 3800000, '2023-05-18'),
  ('BMW', 'KDB 374K', 4000000, '2023-05-20');

CREATE TABLE EMPLOYEE (
  EmpID INT PRIMARY KEY, -- Added primary key constraint
  EmpName VARCHAR(50),
  EmpEmail VARCHAR(50)
);

INSERT INTO EMPLOYEE (
  EmpID, EmpName, EmpEmail
)
VALUES
  (19346723, 'Austin', 'austinF@Stan.com'),
  (45362786, 'Phillip', 'phillipM@Stan.com'),
  (56723323, 'Stanley', 'stanleyK@Stan.com');
