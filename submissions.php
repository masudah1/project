<html>
    <head>
        <style type="text/css">
           table{
               width : 100%;
               color :  red;
               font-family: monospace;
               font-size: 20px;
           } 

           th{
               background-color: lightblue;
               color: white;

           }

            th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            }

            th {
            height: 70px;
            }
            td {
            text-align: center; 
            height: 50px;
            
            }
            tr:nth-child(even) {background-color :#f2f2f2;}
        </style>
    </head>
    <body style="overflow-x:auto;">
        <table>
            <tr>
                <th>Id</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>gender</th>
                <th>staffOrStudent</th>
                <th>studentOrStaffId</th>
                <th>gender</th>
                <th>counsellor</th>
                <th>email</th>
                <th>number</th>
                <th>address</th>
                
            </tr>
            <?php
            $conn = mysqli_connect('db4free.net','rahmatabc12','rahmatabc12','rahmatabc12');
            $sql = "SELECT * FROM registration";
            $result = $conn->query($sql);

            if ($result->num_rows > 0 ){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>".$row["id"] ."</td><td>" .$row["firstName"] ."</td><td>" .$row["lastName"]."</td><td>" .$row["gender"] ."</td><td>" .$row["staffOrStudent"] ."</td><td>" .$row["studentOrStaffId"] ."</td><td>" .$row["gender"]."</td><td>".$row["counsellor"]."</td><td>".$row["email"]."</td><td>".$row["number"]."</td><td>" .$row["address"]."</td><td>";
                }
            } else {
                echo "No results";
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>