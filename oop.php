<?php
class Book
{
    // TODO: Add properties as Private
    private $title, $availableCopies;

    public function __construct($title, $availableCopies)
    {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle()
    {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    // TODO: Add borrowBook method
    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        }
    }

    // TODO: Add returnBook method
    public function returnBook()
    {
        $this->availableCopies++;
    }
}

class Member
{
    // TODO: Add properties as Private
    private $name;

    public function __construct($name)
    {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    public function getName()
    {
        return $this->name;
    }

    // TODO: Add borrowBook method
    public function borrowBook($book)
    {
        $book->borrowBook();
    }

    // TODO: Add returnBook method
    public function returnBook($book)
    {
        $book->returnBook();
    }
}

// Usage

// TODO: Create 2 books with the following properties
// Creating 2 books instances
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
// Creating 2 members instances
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// TODO: Apply Borrow book method to each member

// Member One borrows book 1
$member1->borrowBook($book1);

// Member Two borrows book 2
$member2->borrowBook($book2);

// TODO: Print Available Copies with their names:
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}" . "<br>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}" . "<br>";
echo "<br>";

/*
// The point 5 of the assignment mentioned that i should demonstrate the returnBook method, so i will do it here,
// Commented the code below after getting the instructions from the support instructor.


$member1->returnBook($book1);
echo "> Printing the book 1 after returning by member 1." . "<br><br>";
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}" . "<br>";
*/
?>