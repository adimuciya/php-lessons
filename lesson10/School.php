<?php

require_once 'Director.php';
require_once 'Student.php';
require_once 'Teacher.php';
class School
{
    private string $name;
    private Director $director;
    private array $students = [];
    private array $teachers = [];

    /**
     * School constructor.
     * @param string $name
     * @param Director $director
     */
    public function __construct(string $name, Director $director)
    {
        $this->name = $name;
        $this->director = $director;
    }

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }


    public function addStudent(Student $student): bool {
        if (count($this->students) >=10 ) return false;
        // пуш если несколько элементов
        // array_push($this->students, $student);
        $this->students[] = $student;
        return true;
    }
    public function addTeacher(Teacher $teacher): bool {
        if (count($this->teachers) >=3 ) return false;
        // пуш если несколько элементов
        // array_push($this->teachers, $teacher); пуш если несколько элементов
        $this->teachers[] = $teacher;
        return true;
    }
    public function schoolDay(){
        $this->director->beginLesson();
        foreach ($this->teachers as $teacher){
            foreach ($this->students as $student){
                if ($teacher->getSubject() === $student->getSubject()){
                    $teacher->teach($student);
                }
            }
        }
        $this->director->endLesson();
    }
}