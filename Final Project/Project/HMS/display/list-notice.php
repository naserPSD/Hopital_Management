<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.btn{
        background-color: #228B22;
        color: white;
         padding: 5px 12px;
        border: none;
        border-radius: 2px;
        cursor: pointer;
        float: left;
        font-size:20px;
     }
  input[type=text] {
  width: 10%;
  padding: 8px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
.container{
			
      padding-bottom:10px;


		}
		table{
		border-collapse:collapse;
		color:black;
		width:100%;
		font-family:sans-serif;
		font-size:25px;
		text-align:left;
		padding-left:15px;
	}
	table,th,td{
		border:1px solid black;
	}
	th{
	 	background-color:#4CAF50;
		color:white;
		height:50px;
	}
	td{
		height:10px;
		vertical-align:bottom;
	}
    tr:nth-child(even){background-color: #f2f2f2}	
	</style>
</head>
<body>
	<div class="container">
		<form action="search-notice.php" method="post">
			<input type="text" name="search" >
			<button class="btn">search</button>	
		</form>	
	</div>
	<table>
		<tr>
			<th>SL</th>
			<th>Department</th>
			<th>Notice</th>
			<th>End_Date</th>
			<th>Assign_By</th>
			<th>Status</th>
		</tr>
		<?php 
		 $conn =mysqli_connect("localhost", "root", "", "hospital");
      if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
              }
            $sql = "SELECT sl, department_name,notice,end_date,assign_by,status FROM notice";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr><td> " . $row["sl"]. "</td><td> " . $row["department_name"]. " </td><td>" . $row["notice"]. "</td><td>".$row["end_date"]. "</td><td> " .$row["assign_by"]. "</td><td> " .$row["status"]."</td></tr>";
                  }
              echo"</table>";
               } 
              else {
              echo "0 results";
              }
             $conn->close();




		?>
	</table>

</body>
</html>