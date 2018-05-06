<?php

/* 
 * 14 columns including id
 * text
 * publisher
 * year
 * edition
 * original price - no need
 * 
 * boolean
 * age restriction
 * is_lost - no need
 * is_reference
 * is_out_for_repair
 * 
 * radio button 
 * accessibility - large 1 brile 2 audio book 3
 * reader_levels - 1 Early_learner 2 Biginner_reader 3 Young_adult 4 Adult
 * 
 */
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Search</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <section class="w3-container">
            <div class="form-wrapper">
                <form action="BookSearchResult.php" method="POST">
                    <fieldset class ="the_fieldset">
                    <legend class="the_legend">Search Books</legend>
                    
                        <div class="search_comment">
                            <p>Search under many criteria as you like</p>
                            <p>Part search available
                            <p>If you would like to see all the list of Library books, please search with no criteria</p>
                        </div>

                    <div class="text_form">           
                        <div class="form-group col-xs-12">
                        <label for="title_search" >Title:</label>
                        <input type="text" name="title_search" class="form-control" autofocus>
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="author_search" >Author:</label>
                            <input type="text" name="author_search" class="form-control">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="publisher_search" >Publisher:</label>
                            <input type="text" name="publisher_search" class="form-control">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="isbn_serch">ISBN:</label>
                            <input type="text" name="isbn_search" class="form-control">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <label for="year_search" >Year of Publish:</label>
                            <input  type="text" name="year_search" class="form-control">
                        </div>
                    </div>    
                    <div class="radio_choice form-group col-xs-12">
                        <p>Please select preferred Genre</p>
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
                        <input type="radio" id="genreChoice5"
                               name="gChoice" value="none" checked>
                        <label for="genreChoice5">No Preference</label>
                    </div>
                    
                    <div class="radio_choice form-group col-xs-12">
                        <p>Please select preferred Accessibility</p>
                        <input type="radio" id="accessChoice1"
                               name="aChoice" value="1">
                        <label for="accessChoice1">Large Print</label>
                        <input type="radio" id="accessChoice2"
                               name="aChoice" value="2">
                        <label for="accessChoice2">Braille</label>
                        <input type="radio" id="accessChoice3"
                               name="aChoice" value="3">
                        <label for="accessChoice3">Audio Book</label>
                        <input type="radio" id="accessChoice4"
                               name="aChoice" value="none" checked>
                        <label for="accessChoice4">No Preference</label>
                    </div>
                    
                    <div class="radio_choice form-group col-xs-12">
                        <p> Please select preferred Reader Levels </p>
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
                               name="lChoice" value="none"  checked>
                        <label for="levelChoice5">No Preference</label>
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
                        <button type="submit" class="btn btn-primary">search</button>
                    </div>
                    
                    </fieldset>                    
                </form>
            </div>
        </section>
    </body>


</html>
