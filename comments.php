<?php
 
 function setComments($conn){
		if(isset($_POST['commentsubmit'])){
			$stu_id = $_POST['stu_id'];
			$com_date_added = $_POST['com_date_added'];
			$com_time_added = $_POST['com_time_added'];
			$message = $_POST['message'];
			$com_status = $_POST['com_status'];
			
			$sql = "INSERT INTO tbl_comments (stu_id, com_date_added, com_time_added, com_status, message) VALUES ('$stu_id', '$com_date_added', '$com_time_added', '$com_status', '$message')";                      
			$result = $conn->query($sql);
			
			
			
		}
	 
 }


