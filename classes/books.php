<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 *  All as
 */
//namespace book;

class books {
    
    private $id;
    private $isbn;
    private $title;
    private $publisher;
    private $year;
    private $age_restriction;
    private $edition;
    // bool using int
    private $is_lost;
    // bool using int
    private $is_reference;
    // bool using int
    private $is_out_for_repair;
    private $original_price;
    private $accessibility_options_id;
    private $genre_id;
    private $reader_level_id;
    
    public function __construct($title, $isbn, $publisher, $year, $edition, $original_price, $genre_id, $accessibility_options_id, $reader_level_id, $age_restriction, $is_reference) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->age_restriction = $age_restriction;
        $this->edition = $edition;
        $this->is_reference = $is_reference;
        $this->original_price = $original_price;
        $this->accessibility_options_id = $accessibility_options_id;
        $this->genre_id = $genre_id;
        $this->reader_level_id = $reader_level_id;
    }
  
    public function get_id() {
        return $this->id;
    }

    public function get_isbn() {
        return $this->isbn;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_publisher() {
        return $this->publisher;
    }

    public function get_year() {
        return $this->year;
    }

    public function get_age_restriction() {
        return $this->age_restriction;
    }

    public function get_edition() {
        return $this->edition;
    }

    public function get_is_lost() {
        return $this->is_lost;
    }

    public function get_is_reference() {
        return $this->is_reference;
    }

    public function get_is_out_for_repair() {
        return $this->is_out_for_repair;
    }

    public function get_original_price() {
        return $this->original_price;
    }

    public function get_accessibility_options_id() {
        return $this->accessibility_options_id;
    }

    public function get_genre_id() {
        return $this->genre_id;
    }

    public function get_reader_level_id() {
        return $this->reader_level_id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_isbn($isbn) {
        $this->isbn = $isbn;
    }

    public function set_title($title) {
        $this->title = $title;
    }

    public function set_publisher($publisher) {
        $this->publisher = $publisher;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function set_age_restriction($age_restriction) {
        $this->age_restriction = $age_restriction;
    }

    public function set_edition($edition) {
        $this->edition = $edition;
    }

    public function set_is_lost($is_lost) {
        $this->is_lost = $is_lost;
    }

    public function set_is_reference($is_reference) {
        $this->is_reference = $is_reference;
    }

    public function set_is_out_for_repair($is_out_for_repair) {
        $this->is_out_for_repair = $is_out_for_repair;
    }

    public function set_original_price($original_price) {
        $this->original_price = $original_price;
    }

    public function set_accessibility_options_id($accessibility_options_id) {
        $this->accessibility_options_id = $accessibility_options_id;
    }

    public function set_genre_id($genre_id) {
        $this->genre_id = $genre_id;
    }

    public function set_reader_level_id($reader_level_id) {
        $this->reader_level_id = $reader_level_id;
    }
    
}
?>


