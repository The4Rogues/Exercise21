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
        <title>Books Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
          <?php
        
       
        echo "Catelogue Search ";
        echo '<br>';
        echo '<br>';
       
        ?>
        
        <div>
            
           <form action="" method="post">
            Book Id: <input type="number" name="book id" autofocus=""/>  
            </br>
            </br>
            ISBN: <input type="number" name="isbn" />
            </br>
            </br>
            Title: <input type="text" name="title" />
            </br>
            </br>
            Author: <input type="text" name="author" />
            </br>
            </br>
            Publisher: <input type="text" name="publisher" />
            </br>
            </br>
            Year: <input type="number" name="year" />
            </br>
            </br>
            Edition: <input type="text" name="edition" />
            </br>
            </br>
            Genre: <input type="text" name="genre" />
            </br>
            </br>
            Reader Level: <input type="text" name="reader level" />
            </br>
            </br>
            Accessibility options: <input type="text" name="accessibility options" />
            </br>
            </br>
            Age Restriction: <input type="text" name="age restriction" />
            </br>
            </br>
            Is Lost: <input type="text" name="is_lost" />
            </br>
            </br>
            Is Reference: <input type="text" name="is_reference" />
            </br>
            </br>
            Is Out For Repair: <input type="text" name="is_out_for_repair" />
            </br>
            </br>
            Original Price: <input type="number" name="origianl cost" />
            </br>
            </br>
            <input type="submit" value="Search" />
        </form>
           
        </div>
        
        <?php
     
            echo '<br>';
            
            //The if statement below was supposed to be the code for when the 
            //search can not find the book but don't think it is right
            
        if(empty($_SESSION)){
            echo "Book Not Found" . $_SESSION['book not found'] . '<br>';
            echo '<br>';
        }
            echo "<a href='BooksPage.php'>New Search</a><br>";
            echo '<br>';
            echo "<a href='LibrarianAdminPage.php'> Enter (Return to Admin Page)</a><br>";
            echo '<br>';
       // }
       // }
        ?>       
    
    </body>
</html>

