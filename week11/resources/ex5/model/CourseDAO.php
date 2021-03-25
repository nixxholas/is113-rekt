<?php

require_once "autoload.php";

class CourseDAO {

    public  function retrieveAll() {
        $sql = 'SELECT * FROM course';
        
        $connMgr = new ConnectionManager();          
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $result = array();

        while($row = $stmt->fetch()) {
            $result[] = new Course($row['title'], $row['section'], $row['instructor']);
        }

        $stmt->closeCursor();
        $conn = null;

        return $result;
    }
    
    public function add($course) {
        $sql = 'insert into course (title, section, instructor) values (:title, :section, :instructor)';
        
        $connMgr = new ConnectionManager();       
        $conn = $connMgr->getConnection();
         
        $stmt = $conn->prepare($sql); 

        $title = $course->getTitle();
        $section  = $course->getSection();
        $instructor = $course->getInstructor();

        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':section', $section, PDO::PARAM_STR);
        $stmt->bindParam(':instructor', $instructor, PDO::PARAM_STR);
        
        $isAddOK = $stmt->execute();

        $stmt->closeCursor();
        $conn = null;

        return $isAddOK;
    }
}


?>