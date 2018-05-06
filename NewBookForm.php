<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  session_start();
?>

<html>
    <head>
        <title>New Book Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php
        
       
        echo "New Book Form ";
        echo '<br>';
        echo '<br>';
       
        ?>
        
        <div>
            
           <form action="" method="post">
            Book Id: <input type="number" name="book id" />
            </br>
            </br>
            ISBN: <input type="number" name="isbn" required autofocus />
            </br>
            </br>
            Title: <input type="text" name="title" required />
            </br>
            </br>
            Author: <input type="text" name="author" required/>
            </br>
            </br>
            Publisher: <input type="text" name="publisher" />
            </br>
            </br>
            Year: <input type="date" name="year" />
            </br>
            </br>
            Genre: <input type="text" name="genre" required />
            </br>
            </br>
            Reader Level: <input type="text" name="reader level" required />
            </br>
            </br>
            Accessibility options: <input type="text" name="accessibility options" />
            </br>
            </br>
            Edition: <input type="text" name="edition" />
            </br>
            </br>
            Age Restriction: <input type="text" name="age restriction"/>
            </br>
            </br>
             Original Price £: <input type="text" name="origianl cost" required />
            </br>
            </br>
            <input type="submit" value="Save" />
        </form>
           
        </div>
        
        <?php
            
            echo '<br>';
            
       
            
            echo "<a href='NewBookForm.php'>Add another Book</a><br>";
            echo '<br>';
            echo "<a href='LibrarianAdminPage.php'>Return to Admin Page</a><br>";
            echo '<br>';
       // }
        
        ?>       
    
    </body>
</html>

