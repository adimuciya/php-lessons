<?php
require_once 'School.php';

$student_one = new Student();
$student_one->setName('Вася Первый');
$student_one->setAge(12);
$student_one->setSubject('Физика');

$student_two = new Student();
$student_two->setName('Петя Второй');
$student_two->setAge(7);
$student_two->setSubject('Математика');

$student_three = new Student();
$student_three->setName('Пипка Третий');
$student_three->setAge(15);
$student_three->setSubject('Математика');

$teacher_one = new Teacher();
$teacher_one->setName('Аккакий Аккакиевич');
$teacher_one->setAge(32);
$teacher_one->setSubject('Математика');

$teacher_two = new Teacher();
$teacher_two->setName('Валентин Эдуардович');
$teacher_two->setAge(56);
$teacher_two->setSubject('Физика');

$director = new Director();
$director->setName('Арнольд Петрович');
$director->setAge(44);

$school = new School('Лицей №4', $director);
$school->addStudent($student_one);
$school->addStudent($student_two);
$school->addStudent($student_three);

$school->addTeacher($teacher_one);
$school->addTeacher($teacher_two);

var_dump($school);

$school->schoolDay();
$school->schoolDay();

$students = $school->getStudents();
foreach ($students as $student){
    var_dump($student->getName() . ': ' . $student->getLevel());
}

