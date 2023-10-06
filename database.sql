CREATE TABLE STUDENTS(
ROLLNO INT(2) PRIMARY KEY,
NAME VARCHAR(20),
DOB DATE,
FATHERSNAME VARCHAR(20)
);

CREATE TABLE SUBJECTS (
ID INT(5) PRIMARY KEY,
ROLLNO INT(2),
MATHS INT(3),
ENGLISH INT(3),
PHYSICS INT(3),
CHEMISTRY INT(3),
BIOLOGY INT(3),
FOREIGN KEY (ROLLNO) REFERENCES STUDENTS(ROLLNO)
);


INSERT INTO STUDENTS
VALUES
(1, 'ANKUSH', '2000-01-23','RAM  SHANKAR'),
(2, 'JOHN', '2001-03-20', 'NOBI SUKI'),
(3, 'SALLY', '1999-11-05', 'ROBERT'),
(4, 'MARRY','2002-12-10', 'KANACHI');


INSERT INTO SUBJECTS
VALUES
(101,1,89,94,65,90,77),
(102,4,56,49,95,88,91),
(103,3,34,92,93,76,55),
(104,2,67,90,59,82,73);


SELECT * FROM STUDENTS;
SELECT * FROM SUBJECTS;


SELECT S.ROLLNO, S.NAME, S.DOB, S.FATHERSNAME, SB.MATHS, SB.ENGLISH, SB.PHYSICS, SB.CHEMISTRY, SB.BIOLOGY
FROM STUDENTS AS S
JOIN
SUBJECTS AS SB
ON 
S.ROLLNO = SB.ROLLNO
WHERE S.ROLLNO = 2;



SELECT 100 AS TOTALMARKS, 35 AS PASSINGMARKS, S.NAME, S.DOB, S.FATHERSNAME, SB.MATHS, SB.ENGLISH, SB.PHYSICS, SB.CHEMISTRY, SB.BIOLOGY
FROM STUDENTS AS S
JOIN
SUBJECTS AS SB
ON 
S.ROLLNO = SB.ROLLNO
WHERE S.ROLLNO = 2;