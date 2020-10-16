<?php

require_once "connection.php";

        $db = connection();
        $sql = "SELECT * FROM user";
        if($result = $db->query($sql))
        {
            if($result->rowCount() > 0)
            {
                echo "<table class='table table-bordered table-striped'>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>First name</th>";
                            echo "<th>Last name</th>";
                            echo "<th>email</th>";
                            echo "<th>user</th>";
                            echo "<th>password</th>";
                            echo "<th>Action</th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    foreach($db->query($sql) as $row)
                    {
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nom'] . "</td>";
                            echo "<td>" . $row['prenom'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['user'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>";
                                echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";                            
                echo "</table>";
            
                unset($result);
            }else
            {
                echo "<p class='lead'><em>No records were found.</em></p>";
            }
        } else
        {
            echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
        }

        disconnect()
?>