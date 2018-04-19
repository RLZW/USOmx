<?php
  
  //Change the password to match your configuration
$link = mysqli_connect("localhost", "root", "yourPassword", "cse");
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  echo "<br>";
  
  
  $sql = "SELECT id, name, salary FROM instructor";
  $result = $link->query($sql);
        
    echo "<div class='container'>";
        echo "<div class='row-fluid'>";
        
            echo "<div class='col-xs-6'>";
            echo "<div class='table-responsive'>";
            
                echo "<table class='table table-hover table-inverse'>";
                
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Salary</th>";
                echo "</tr>";
          
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["salary"] . "</td>";
                        echo "</tr>";           
                    }
                } else {
                    echo "0 results";
                }
                
                echo "</table>";
                    echo "</div>";
            echo "</div>";
        echo "</div>";
        
    echo "</div>";
  // Close connection
  mysqli_close($link);
  ?>