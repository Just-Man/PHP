<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 17.02.16
 * Time: 15:30
 */

require_once 'class/autoload.php';

$library = new Library();

$book = new Book('Book', '22.01.06', 'testPublisher', 'Science', 'softCovers', 'testAuthor');
$book1 = new Book('Q', '01.01.06', 'testPublisher1', 'Science', 'hard', 'testAuthor1');
$learnBook = new LearnBook('A', '22.12.96', 20, 'testPublisher', 'Science', 'testAuthor');
$magazine = new Magazine('Magazine', '19.02.16', 20, 'testPublisher', 'Science', 'softCovers', 'testAuthor');


$library->addBook($book);
$library->addBook($book1);

$library->addLearnBook($learnBook);

$library->addMagazine($magazine);

$allInLibrary = $library->getAll();

usort($allInLibrary, function ($a, $b) {

    if ($a->getGenre() < $b->getGenre())
        return -1;
    else if ($a->getGenre() > $b->getGenre())
        return 1;
    if ($a->getTitle() < $b->getTitle())
        return -1;
    else if ($a->getTitle() > $b->getTitle())
        return 1;
    return 0;
});


$customer1 = new Customer('TEstov');

$customer1->setBooksTaken($magazine);

$customer1->returnItem($magazine);

//print_r($allInLibrary);

$customerGetsBook = $customer1->getBooksTaken();

var_dump($customer1);
