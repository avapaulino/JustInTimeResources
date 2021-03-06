<?php // Set connection to database

    function connect(){
        $db_host = 'projects.cs.dal.ca';
        $db_database = 'justintime';
        $db_username = 'justintime';
        $db_password = 'quoo6ooFiSoh1eic';
        $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
        if($conn->connect_error){
        echo "This is bad\n";
        die("Connection failed!".mysqli_connect_error);
        }
        return $conn;
    }

    function closeConn($conn){
        $conn->close();
    }

    function getCourse($conn, $pageID){
        $query=$conn->prepare("SELECT SuggestedCourse, Length, Note, Link, Picture FROM just_in_time_resources WHERE CourseNumber = ?");
        $query->bind_param("s", $pageID);
        $query->execute();
        $result = $query->get_result();
        if ($result->num_rows >0){
            while($row=$result->fetch_assoc()){
            $SuggestedCourse=$row["SuggestedCourse"];
            $Length=$row["Length"];
            $Note=$row["Note"];
            $Link=$row["Link"];
            $Picture=$row["Picture"];
            
            echo "\n\t\t\t\t\t\t<div class='col-lg-3 col-md-6 col-sm-6 mb-2'>\n";
            echo "\t\t\t\t\t\t\t<a style='color: black; text-decoration: none;' target=\"_blank\" href=\"".$Link."\">\n";
            echo "\t\t\t\t\t\t\t<div class='card card-block'>\n";
            echo "\t\t\t\t\t\t\t\t<img src='assets/img/".$Picture."' alt='".$Picture."'>\n";
            echo "\t\t\t\t\t\t\t\t<h5 class='card-title ml-2 mr-2 mt-3 mb-3'>".$SuggestedCourse."</h5>\n";
            echo "\t\t\t\t\t\t\t\t<p class='card-text ml-2 mr-2 scrollable'>".$Note."</p>\n";
            echo "\t\t\t\t\t\t\t\t<div class='card-footer text-muted'>".$Length."</div>\n";
            echo "\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</div>\n";
            }
        }

        $query->close();
    }

    function getCourseName($conn, $pageID){
        $query=$conn->prepare("SELECT CourseName FROM courses WHERE WebPage = ?");
        $query->bind_param("s", $pageID);
        $query->execute();
        $result = $query->get_result();

        while($row=$result->fetch_assoc()){
            $CourseName=$row["CourseName"];
        }
        return $CourseName;

        $query->close();
    }

    function getCourseNum($conn, $pageID){
        $query=$conn->prepare("SELECT Code FROM courses WHERE WebPage = ?");
        $query->bind_param("s", $pageID);
        $query->execute();
        $result = $query->get_result();

        while($row=$result->fetch_assoc()){
            $CourseNum=$row["Code"];
        }
        return $CourseNum;

        $query->close();
    }

    function getCourseSubj($conn, $pageID){
        $query=$conn->prepare("SELECT Subject FROM courses WHERE WebPage = ?");
        $query->bind_param("s", $pageID);
        $query->execute();
        $result = $query->get_result();

        while($row=$result->fetch_assoc()){
            $Subj=$row["Subject"];
        }
        return $Subj;

        $query->close();
    }
?>