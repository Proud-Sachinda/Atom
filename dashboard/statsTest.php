<?php

	class StatsTesting{
		public function listClasses(){
			$link = mysqli_connect("localhost","root","", "risk");

            if (mysqli_connect_error()){
                die ("Error!");
            }

            $query2 = "SELECT course_code,course_id FROM course";
            
            $result2= mysqli_query($link, $query2);

            while ($row2 = mysqli_fetch_array($result2)) {
                echo "<li><a href='stats.php?course_id=".$row2['course_id']."'>".$row2['course_code']."</a></li>";
            }
		}
        /*
        public function course(){
            if($_GET['course_id']==1)
            {
                $course_name="Basic Computer Organisation"
            }
            if($_GET['course_id']==2)
            {
                $course_name="Introduction to Algorithms and Programming"
            }
        }
        */
	}

?>

