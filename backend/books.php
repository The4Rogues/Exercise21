<?php

/*
 * Search books on multiple criterias or none to list all books
 * return: multi dimentional associtive arrays
 */

function searchBooks(){
    
    // Search input assined to variables
    // Text serch
    $title_s = $_POST['title_search'];
    $isbn_s = $_POST['isbn_search'];
    $author_s =$_POST['author_search'];
    $year_s = $_POST['year_search'];
    $publisher_s = $_POST['publisher_search'];

    // Radio button search
    $genre_s = $_POST['gChoice'];
    $access_s =$_POST['aChoice'];
    $reader_level_s =$_POST['lChoice'];

    // Drop down search
    $age_rest_s = $_POST["age_restriction"];
    $ref_only_s =$_POST["reference_only"];
    
    // Basic query
    $sql =  "SELECT 
                b.id, b.title, b.publisher, b.year, b.isbn, b.edition,  
                b.age_restriction, b.is_reference, 
                a.name 'author', g.genre_name 'genre', ao.name 'accessibility', rl.name 'reader_level'
            FROM 
                books b, books_authors ba, authors a, genres g, accessibility_options ao, reader_levels rl
            WHERE 
                ba.books_id = b.id 
                and ba.Author_id = a.id 
                and b.genre_id = g.id 
                and b.accessibility_options_id = ao.id 
                and b.reader_level_id = rl.id ";

    // Make a string to display the serch criteria
    $searchCriteria = "Search Criteria: </br>";
    
    // Any search inputs, the string will be added to $sql as well as $searchCriteria
    if($title_s){
        $sql .= " and title like '%" . $title_s . "%'";
        $searchCriteria .= "Title includes '" . $title_s . "'</br>";
    }
    if($author_s) {
        $sql .= " and a.name like '%" . $author_s . "%'";
        $searchCriteria .= "Author includes '" . $author_s . "'</br>";
    }
    if($isbn_s) {
        $sql .= " and isbn like '%" . $isbn_s . "%'";
        $searchCriteria .= "ISBN includes '" . $isbn_s . "'</br>";
    }
    if($year_s) {
        $sql .= " and year like '%" . $year_s . "%'";
        $searchCriteria .= "Year includes '" . $year . "'</br>";
    }
    if($publisher_s) {
        $sql .= " and publisher like '%" . $publisher_s  . "%'";
        $searchCriteria .= "Publisher includes '". $publisher_s ."'</br>";
    }
    if ($genre_s!=="none"){
        $sql .= " and b.genre_id =" . $genre_s;
        if($genre_s==1){ 
            $searchCriteria .= "Genre is Horror</br>";        
        } elseif($genre_s==2){ 
            $searchCriteria .= "Genre is Family</br>";    
        } elseif($genre_s==3){ 
            $searchCriteria .= "Genre is Romance</br>";    
        }else{ 
            $searchCriteria .= "Genre is Adventure</br>";
        }
    }
    if ($access_s!=="none"){
        $sql .= " and b.accessibility_options_id =" . $access_s;
        if($access_s==1){ 
            $searchCriteria .= "Accessibility Option is Large Print</br>";        
        } elseif($access_s==2){ 
            $searchCriteria .= "Accessibility Option is Braille</br>";    
        } else{ 
            $searchCriteria .= "Accessibility Option is Audio Book</br>";    
        }
    }
    if ($reader_level_s!=="none"){
        $sql .= " and b.reader_level_id =" . $reader_level_s;
        if($reader_level_s==1){ 
            $searchCriteria .= "Reader Level is Early Leaner</br>";        
        } elseif($reader_level_s==2){ 
            $searchCriteria .= "Reader Level is Begginer Reader</br>";    
        } elseif($reader_level_s==3){ 
            $searchCriteria .= "Reader Level is Early Adult </br>";    
        }else{ 
            $searchCriteria .= "Reader Level is Adult only</br>";
        }
    }
    if($age_rest_s == 1){
        $sql .= " and b.age_restriction = 1";
        $searchCriteria .= "Age restriction is On</br>";
    }
    if($ref_only_s == 1){
        $sql .= " and b.is_reference = 1";
        $searchCriteria .= "Reference only is On</br>";
    }
    echo "<p class='criteria'>".$searchCriteria."</p>";

    // connect to DB (DB class)
    $db = new DB;
    return $db->query($sql);
}

/*
 *  Check availability of the book
 *  @param book.id
 *  return: string
 */
Function check_status ($book_id){      
    $sql2 = "SELECT b.books_id FROM borrowed_items as b WHERE b.date_in = 0000-00-00";
    $db = new DB();
    $status = $db->query($sql2);
    foreach ($status as $state){
        $book_status = "This book is available";
        if ($book_id == $state['books_id']){
            $book_status = "This book is not available";
        }  
    }
    return $book_status;
} 

/*
 * Adding book functions
 * no returns. Should direct to a different page
 */

function addBooks(){
    $title_a = $_POST['title_add'];
    $isbn_a = $_POST['isbn_add'];
    $publisher_a = $_POST['publisher_add'];
    $year_a = $_POST['year_add'];

    // new additions to add books
    $edition_a = $_POST['edition_add'];
    $price_a = $_POST['price_add'];

    // Radio button value numbers
    $genre_a = $_POST['gChoice'];
    $access_a =$_POST['aChoice'];
    $reader_level_a =$_POST['lChoice'];

    // Drop down value 0 or 1
    $age_rest_a = $_POST["age_restriction"];
    $ref_only_a =$_POST["reference_only"];

    // author table
    $author_a = $_POST['author_add'];

    // using books class constractor
    $newBook = new books ($title_a, $isbn_a, $publisher_a, 
                            $year_a, $edition_a, $price_a, 
                            $genre_a, $access_a, $reader_level_a, 
                            $age_rest_a, $ref_only_a);

    // Prep for SQL
    $isbn = $newBook->get_isbn();
    $title = $newBook->get_title();
    $publisher = $newBook->get_publisher();
    $year = $newBook->get_year();
    $age_restriction = $newBook->get_age_restriction();
    // 0
    $reference = $newBook->get_is_reference();
    $edition = $newBook->get_edition();
    // 0
    $price = $newBook->get_original_price();
    $accessibility_o = $newBook->get_accessibility_options_id();
    $genre = $newBook->get_genre_id();
    $reader_level = $newBook->get_reader_level_id();

    // SQL for add books
    $sql = "INSERT INTO books 
                            (isbn, title, publisher,
                            year, age_restriction,
                            is_lost, is_reference,
                            edition, is_out_for_repair,
                            original_price, accessibility_options_id,
                            genre_id, reader_level_id) 
                    VALUES ('$isbn',
                            '$title',
                            '$publisher',
                            $year,
                            $age_restriction,
                            0,
                            $reference,
                            '$edition',
                            0,
                            '$price',
                            $accessibility_o,
                            $genre,
                            $reader_level)";


    // connect to DB (DB class)
    // $db = new DB;
    // $db->insert($sql);

    // SQL for adding author
    $sql_add_author = "INSERT INTO authors (name) VALUES ('$author_a')";

    // connect sql
    $dsn= 'mysql:host=localhost;dbname=library';
    $pdo = new PDO($dsn, 'root','');

    // SQL for checking author exists
    $sql_authors = "SELECT * FROM authors";

    $stmt_author = $pdo->prepare($sql_authors);
    $stmt_author->execute();
    $results = $stmt_author->fetchAll(PDO::FETCH_ASSOC);
    // print_r($results);

    $author_id = 'no';

    forEach($results as $result){
        if ($result['name']==$author_a){
            $author_id = $result['id'];
        }
    }

    If ($author_id === 'no'){
        $stmt_add_author = $pdo->prepare($sql_add_author);
        $stmt_add_author->execute();
        $author_id = $pdo->lastInsertId();
        print_r($stmt_add_author);
    }
    // Adding books
    $stmt_book = $pdo->prepare($sql);
    $stmt_book->execute();
    $book_id = $pdo->lastInsertId();

    // SQL for add author_id and book id
    $SQL_author_book = "INSERT INTO books_authors (books_id, author_id) VALUES('$book_id', '$author_id')";

    $stmd_b_a = $pdo->prepare($SQL_author_book);
    $stmd_b_a->execute();
    //echo "book id ". $book_id."</br>";
    //echo "author id ". $author_id."</br>";
     echo "book added   ";
     echo "This should re-direct to somewhere";
 }
?>