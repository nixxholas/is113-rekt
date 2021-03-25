<?php
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );  
?>

<!DOCTYPE html>
<html>
    <body>
       
       <?php
            # Obtain books from BookDAO
            # Display all books in the table
            # ENTER CODE HERE

            $bookDAO = new BookDAO();
            $books = $bookDAO->retrieveAll();
            foreach ($books as $book){
                echo  $book->getISBN13() . "|" . 
                      $book->getTitle() . "|" .
                      $book->getPrice();

                echo "<br/>";
                      
            }
            ?>
        </table>
    </body>
</html>
