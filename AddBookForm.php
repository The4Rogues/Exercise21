<?php

/* 
 * Add books form

 * 
 */
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Books</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header>
        <div id = "navbar">
            <ul>
                <li><a href ="index.php">Home</a></li>
                <li><a href ="login.php">Borrower Log in</a></li>
                <li><a href ="librarian.php">Library Log In</a></li>
            </ul>
        </div>
    </header>
        <section class="w3-container">
            <div class="form-wrapper">
                <form action="addBookAction.php" method="POST">
                    <fieldset class ="the_fieldset">
                    <legend class="the_legend">Add Books</legend>
                    
                        <div class="add_comment">
                            <p>Add all the details for the new book</p>
                            
                        </div>

                    <div class="text_form">           
                        <div class="form-group col-xs-12">
                        <label for="title_add" >Title:</label>
                        <input type="text" name="title_add" class="form-control" autofocus>
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="author_add" >Author:</label>
                            <input type="text" name="author_add" class="form-control">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="publisher_add" >Publisher:</label>
                            <input type="text" name="publisher_add" class="form-control">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="isbn_add">ISBN:</label>
                            <input type="text" name="isbn_add" class="form-control">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="year_add" >Year of Publish:</label>
                            <input  type="text" name="year_add" class="form-control">
                        </div>
                        
                        <div class="form-group col-xs-12 col-md-6">
                            <label for="year_add" >Edition:</label>
                            <input  type="text" name="edition_add" class="form-control">
                        </div>
                        
                        <div class="form-group col-xs-12 col-md-6">
                            <label for="year_add" >Price:</label>
                            <input  type="text" name="price_add" class="form-control">
                        </div>
                    </div>    
                    <div class="radio_choice form-group col-xs-12">
                        <p>Select Genre</p>
                        <input type="radio" id="genreChoice1"
                               name="gChoice" value="1">
                        <label for="genreChoice1">Horror</label>
                        <input type="radio" id="genreChoice2"
                               name="gChoice" value="2">
                        <label for="genreChoice2">Family</label>
                        <input type="radio" id="genreChoice3"
                               name="gChoice" value="3">
                        <label for="agenreChoice3">Romance</label>
                        <input type="radio" id="genreChoice4"
                               name="gChoice" value="4" >
                        <label for="genreChoice4">Adventure</label>
                    </div>
                    
                    <div class="radio_choice form-group col-xs-12">
                        <p>Select Accessibility</p>
                        <input type="radio" id="accessChoice1"
                               name="aChoice" value="1">
                        <label for="accessChoice1">Large Print</label>
                        <input type="radio" id="accessChoice2"
                               name="aChoice" value="2">
                        <label for="accessChoice2">Braille</label>
                        <input type="radio" id="accessChoice3"
                               name="aChoice" value="3">
                        <label for="accessChoice3">Audio Book</label>
                    </div>
                    
                    <div class="radio_choice form-group col-xs-12">
                        <p> Select Reader Levels </p>
                        <input type="radio" id="levelChoice1"
                               name="lChoice" value="1">
                        <label for="levelChoice1">Early Learner</label>
                        <input type="radio" id="levelChoice2"
                               name="lChoice" value="2">
                        <label for="levelChoice2">Beginner Reader</label>
                        <input type="radio" id="levelChoice3"
                               name="lChoice" value="3">
                        <label for="levelChoice3">Young Adult</label>
                        <input type="radio" id="levelChoice4"
                               name="lChoice" value="4" >
                        <label for="levelChoice4">Adult</label>
                        <input type="radio" id="levelChoice5"
                    </div>
                    
                    <div class="form-group col-xs-6">
                        <p>Age Restriction</p>
                        <select name="age_restriction">
                            <option value="0">No</option>
                            <option value="1">Yes</option>    
                        </select>
                    </div>
                    
                    <div class="form-group col-xs-6">
                        <p>Reference Only</p>
                        <select name="reference_only">
                            <option value="0">No</option>
                            <option value="1">Yes</option>    
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">add</button>
                    </div>
                    
                    </fieldset>                    
                </form>
            </div>
        </section>
    </body>


</html>

