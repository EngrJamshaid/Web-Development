<?php
header("Content-Type: application/json");
$data = [
    "message" => "Hello, this is data from the server!",
    "timestamp" => date("Y-m-d H:i:s"),
    "name"=>"My name is jamsshiad"
];


$books = [
    ["id" => 1, "title" => "To Kill a Mockingbird", "author" => "Harper Lee", "year" => 1960],
    ["id" => 2, "title" => "1984", "author" => "George Orwell", "year" => 1949],
    ["id" => 3, "title" => "The Great Gatsby", "author" => "F. Scott Fitzgerald", "year" => 1925],
    ["id" => 4, "title" => "The Catcher in the Rye", "author" => "J.D. Salinger", "year" => 1951],
    ["id" => 5, "title" => "The Hobbit", "author" => "J.R.R. Tolkien", "year" => 1937],
    ["id" => 6, "title" => "Moby Dick", "author" => "Herman Melville", "year" => 1851],
    ["id" => 7, "title" => "Pride and Prejudice", "author" => "Jane Austen", "year" => 1813],
    ["id" => 8, "title" => "The Diary of a Young Girl", "author" => "Anne Frank", "year" => 1947],
    ["id" => 9, "title" => "War and Peace", "author" => "Leo Tolstoy", "year" => 1869],
    ["id" => 10, "title" => "Crime and Punishment", "author" => "Fyodor Dostoevsky", "year" => 1866],
    ["id" => 11, "title" => "Brave New World", "author" => "Aldous Huxley", "year" => 1932],
    ["id" => 12, "title" => "The Picture of Dorian Gray", "author" => "Oscar Wilde", "year" => 1890],
    ["id" => 13, "title" => "The Brothers Karamazov", "author" => "Fyodor Dostoevsky", "year" => 1880],
    ["id" => 14, "title" => "The Odyssey", "author" => "Homer", "year" => "8th Century BC"],
    ["id" => 15, "title" => "The Lord of the Rings", "author" => "J.R.R. Tolkien", "year" => 1954],
    ["id" => 16, "title" => "The Great Expectations", "author" => "Charles Dickens", "year" => 1861],
    ["id" => 17, "title" => "Frankenstein", "author" => "Mary Shelley", "year" => 1818],
    ["id" => 18, "title" => "Dracula", "author" => "Bram Stoker", "year" => 1897],
    ["id" => 19, "title" => "Fahrenheit 451", "author" => "Ray Bradbury", "year" => 1953],
    ["id" => 20, "title" => "The Shining", "author" => "Stephen King", "year" => 1977]
];
echo json_encode($books);
// echo "<pre>";
// print_r($data);

echo json_encode($data);
// json_encode is useful for APIs or sending data to a frontend application.
?>
