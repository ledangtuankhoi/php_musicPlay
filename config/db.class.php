<?php // IDEA:


//TODO: Kết nối PDO:
class   Db
    {
        protected static $connection;
        
        public function connect()
        {
            try{
                # code...
                $config = parse_ini_file("config.ini");
                // self::$connection = new PDO('mysql:host=' . 'localhost' . ';dbname=' . $config["databasename"], $config["username"], $config["password"]);
                // $connection = mysqli_connect('localhost', $config["username"], $config["password"], $config["databasename"]);
                self::$connection =new  mysqli("localhost", $config["username"], $config["password"], $config["databasename"]);

            }
            catch(PDOException $err){

                echo "database không kết nối dc". $err->getMessage();

                exit();
            }
            return self::$connection;

            // self::$connection = mysqli_connect('localhost', $config["username"], $config["password"], $config["databasename"]);
            
            // if (!$connection) {
            //     die("Connection failed: " . mysqli_connect_error());
            // }
            // echo "Connected successfully";
            // mysqli_close($connection);
            



        }
        public function query_execute($queryString){
            $connection = $this->connect();
            $connection->query("SET NAMES utf8");
            $result = $connection->query($queryString);
            return $result;
            $connection -> close;
            // echo $result;
        }

        
        public function select_to_array($queryString){
            $rows = array();
            $result = $this->query_execute($queryString);
            if($result == false){
                return false;
            }
            while($item = $result->fetch_assoc()){
                $rows[] = $item;
            }
            return $rows;
            print_r($rows);
            // $stmt = $connection->prepare("SELECT * FROM product");
            // $stmt->execute();
            // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        }
    }

















?>


