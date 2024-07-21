<?php

require_once('php/config.php');



$query = "SELECT id, username, email, dateofbirth, telephone, gender FROM clients";
$result = mysqli_query($con, $query);




// Check for errors in query execution
if (!$result) {
    die('Error in SQL query: ' . mysqli_error($con));
}
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Elit Boxer</title>
        <style>
            h2 {
                justify-content: center;
                align-items: center;
            }
             table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Adjust width of specific columns */
        th:nth-child(3),
        td:nth-child(3) {
            width: 40%; /* Adjust the percentage as needed */
        }
        </style>
    </head>
    <body>
    <a class="navbar-brand brand_desktop" href="index.php">
            <img src="images/logo.png" alt="" />
          </a>
        <h2><strong><center>Elit Boxing Club</center></strong></h2>
        <h2><center>Clients Data</center></h2>

        <button>
            <a href="report.php"><stong>Download data</stong></a>
            
        </button>
        <button>
            
            <a class="downloadBtn"><stong>Print data</stong></a>
        </button>

        

        

                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Telephone</th>
                        <th>Gender</th>
                    </tr>
                    <tr>

                    <?php
                        // Output data of each row
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['dateofbirth']; ?></td>
                        <td><?php echo $row['telephone']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                    </tr>
                    
                    <?php
                        } // End of while loop

                        if (mysqli_error($con)) {
                            die('Error in fetching data: ' . mysqli_error($con));
                        }
                    ?>
                    

                    
                </table>


                <!-- Download link for PDF -->
              

                
        <script>
            const downloadBtn = document.querySelector(".downloadBtn");

            downloadBtn.addEventListener("click", () =>{
                print();
            })
        </script>

    </body>
</html>
