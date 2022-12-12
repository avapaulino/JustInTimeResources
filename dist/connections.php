<?php // Set connection to database

    function connect(){
        $db_host = 'projects.cs.dal.ca';
        $db_database = 'justintime';
        $db_username = 'justintime';
        $db_password = 'quoo6ooFiSoh1eic';
        $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);
        if($conn->connect_error){
        echo "This is bad\n";
        die("Connection failed!");
        }
        return $conn;
    }

    function closeConn($conn){
        $conn->close();
    }



    function getCourse($conn, $pageID){
        $query=$conn->prepare("SELECT ID, SuggestedCourse, Length, Note, Link, Picture FROM just_in_time_resources WHERE CourseNumber = ?");
        $query->bind_param("s", $pageID);
        $query->execute();
        $result = $query->get_result();


        if ($result->num_rows >0){
            while($row=$result->fetch_assoc()){
                $courseID=$row["ID"];
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
                echo "\t\t\t\t\t\t\t\t<form action=\"feedback.php\" method=\"POST\">\n";
                echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"courseID\" id=\"courseID\" value=\"".$courseID."\" >\n";
                echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-secondary btn-sm\" value=\"Rate this course!\">\n";
                echo "\t\t\t\t\t\t\t\t</form>\n";
                echo "\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</div>\n";
            }
        }


        $query->close();
    }

    function getAllCourses($conn){
        $query=$conn->prepare("SELECT ID, SuggestedCourse, Length, Note, Link, Picture FROM just_in_time_resources");
        $query->execute();
        $result = $query->get_result();


        if ($result->num_rows >0){
            while($row=$result->fetch_assoc()){
                $courseID=$row["ID"];
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
                echo "\t\t\t\t\t\t\t\t<form action=\"feedback.php\" method=\"POST\">\n";
                echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"courseID\" id=\"courseID\" value=\"".$courseID."\" >\n";
                echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-secondary btn-sm\" value=\"Rate this course!\">\n";
                echo "\t\t\t\t\t\t\t\t</form>\n";
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

    function submitForm($conn, $dalCourse, $suggCourse, $comment){
        $query = $conn->prepare("INSERT INTO course_suggestion(Dal_course, suggested_course, note) VALUES (?,?,?)");
        $query->bind_param("sss", $dalCourse, $suggCourse, $comment);
        $query->execute();

        $query->close();
    }

    function poll($courseID, $conn){
        $query=$conn->prepare("SELECT link FROM polls WHERE courseID=?");
        $query->bind_param("i", $courseID);
        $query->execute();

        $result = $query->get_result();
        while($row=$result->fetch_assoc()){
            $link=$row["link"];
        }
        
        echo "<iframe width=\"700px\" height= \"750px\" src= \"".$link."&embed=true\" frameborder= \"0\" marginwidth= \"0\" marginheight= \"0\" style= \"border: none; max-width:100%; max-height:100vh\" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>\n";

        $query->close();
    }

    function description(){
        echo "\t\t\t\t\t\t<p>LinkedIn Learning, formally Lynda, is a website that offers different video courses taught by industry experts regarding software, creative, and business skills. It is a subsidiary of LinkedIn.</p>";
        echo "\t\t\t\t\t\t<p><strong>All the resources are free (unless indicated)</strong>. You only need to create a Halifax Public Libraries account to access the LinkedIn Learning resources.</p>";
        echo "<br>\t\t\t\t\t\t<p><strong>IMPORTANT: The library ID for LinkedInLearning is halifaxca</strong></p>";
    }
?>
