<?PHP

//print_r(PDO::getAvailableDrivers());

try{

    $handler = new PDO ('mysql:host=127.0.0.1;dbname=app','root','');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        //die('Sorry, database problem.');
        echo $e->getMessage();
        die();
    }
    $query = $handler->query('SELECT * FROM guestbook');
    if($query->rowCount()){
       // echo $query->rowCount();
       while($r = $query->fetch(PDO::FETCH_OBJ)){
        echo $r->message, '<br>';
       }
    } else {
        echo 'No Results';
    }
            // $results = $query->fetchAll(PDO::FETCH_ASSOC);
            // print_r($results);
   /* $name = 'Joshua';
    $message = 'Test';

        $sql = "INSERT INTO guestbook (name, message, posted) VALUES (:name, :message, NOW())";
        $query = $handler->prepare($sql);

                    //$query->execute(array($name, $message))
            $query->execute(array(
               ':name' => $name ,
               ':message' => $message
            ));
echo $handler->lastInsertId(); */

    /*$query = $handler->query('SELECT * FROM guestbook LIMIT 0');
        //echo '<pre>', print_r($query->fetchAll(PDO::FETCH_ASSOC)), '</pre>';
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    if(count($results)){
        echo 'There are resultes.';
    } else {
        echo 'There are no resultes.';
    } */

    /*        //echo 'The reset of our page.';
    echo "<br>";
    $query = $handler->query('SELECT * FROM guestbook');

            // while($r = $query->fetch()) {
            //     echo $r['message'], '<br>';
            // }

            //$r = $query->fetch(PDO::FETCH_OBJ);  //FETCH_BOTH, FETCH_NUM, FETCH_ASSOC  
            //echo '<pre>', print_r($r), '<pre>';

    while($r = $query->fetch(PDO::FETCH_OBJ)){
        echo $r->message,'<br>';
    }*/

    /*class guestbookEntry {
        public $id, $name, $message, $posted, 
                $entry;

            public function __construct(){
                $this->entry = "{$this->name} posted:{$this->message}";
            }
    }

    $query = $handler->query('SELECT * FROM guestbook');
    $query->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry');
    while($r = $query->fetch()){
        echo $r->entry, '<br>';
    }*/
?>