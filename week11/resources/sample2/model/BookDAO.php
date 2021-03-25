<?php
class BookDAO {

    public function getBook($isbn13) {
        $connMgr = new ConnectionManager();      
        $pdo = $connMgr->getConnection(); 
        $sql = 'select * from book where isbn13=:isbn13';         
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':isbn13', $isbn13, PDO::PARAM_STR);
        $stmt->execute();
        $result = null;
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($row = $stmt->fetch()) {
            $result = new Book($row['title'], $row['isbn13'], $row['price']);
        }
        $stmt = null;
        $pdo = null;
        return $result;
    }

    public function retrieveAll() {
        $connMgr = new ConnectionManager();      
        $pdo = $connMgr->getConnection();  
        $sql = 'SELECT * FROM book';         
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = [];
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {
            $result[] = new Book($row['title'], $row['isbn13'], $row['price']);
        }
        $stmt = null;
        $pdo = null;
        return $result;
    }

    public function addBook($book) {
        $connMgr = new ConnectionManager();      
        $pdo = $connMgr->getConnection(); 
        $sql = 'iinsert into book (title, isbn13, price)
                values (:title, :isbn13, :price)';
        $stmt = $pdo->prepare($sql); 
        $title = $book->getTitle(); 
        $isbn13 = $book->getISBN13(); 
        $price = $book->getPrice();
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':isbn13', $isbn13, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $isAddOK = $stmt->execute();
        $stmt = null;
        $pdo = null;
        return $isAddOK;
     }
}

?>
