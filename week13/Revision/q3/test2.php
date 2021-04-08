<html>
<body>
    <form>
        Name: <br>
        <input type="text" name="name"><br>
        Course:  <br>
        <input type="text" name="course"><br>
        Score: <br>
        <input type="text" name="score"><br>
        <input type="submit" name="create">
    </form>
</body>
</html>
<?php


    require_once "models/common.php";

    if (isset($_GET["create"])){
        $dao = new CourseDAO();

        $name = $_GET["name"];
        $course = $_GET["course"];
        $score = $_GET["score"];
        $status = $dao->insertCourse($name,$course,$score);

        if ($status){
            echo "Successfully created.";
        }
        else {
            echo "Error.";
        }
    }




?>