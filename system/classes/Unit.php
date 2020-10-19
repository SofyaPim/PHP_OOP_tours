<?php
abstract class Unit {
	
	protected static $db_host = DB_HOST;
	protected static $db_user = DB_USER;	
    protected static $db_password = DB_PASSWORD;     
    protected static $db_name = DB_NAME;
    
    
	
	
    public function __construct(int $id){   
        $this->id = $id;
        $this->mysqli = new mysqli(self::$db_host, self::$db_user, self::$db_password, self::$db_name);       
        $this->mysqli->query("SET 1c_time_names = 'ru_RU'");
        $this->mysqli->query("SET NAMES 'utf8'");
    }
    public function getTable($table){
        $this->table = $table;
    }

    public function setTable(){
        return $this->table;
    }

    public function getLine(): array {
        $result = mysqli_query($this->mysqli, 'SELECT * FROM '.$this->setTable().' WHERE id='.$this->id);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
	
	public function deleteLine(){
        $result = mysqli_query($this->mysqli, 'DELETE FROM '.$this->setTable().' WHERE id='.$this->id);
		if($result){
			return true;
		}
		return false;
	}
	
	public function createLine($data){  
		$keys = '';
		$values ='';
		foreach($data as $key=>$value){
			$keys =  $keys.','.$key;
			$value =  $values.",'".$value."'";
		}
		$keys = trim($keys,',');
		$values = trim($values,',');
		
        $result = mysqli_query($this->mysqli, "INSERT INTO".$this->setTable()."($keys) VALUES ($values)");
		if($result){
			return true;
		}
		return false;
	}
	
	
    public function getField($field){
        return ($this->getLine())[$field];
    }
    public function title(){
        return ($this->getLine())['title'];
    }
    public function getElementsId() : array{
        $arr =   [];
        $result = mysqli_query($this->mysqli, 'SELECT id FROM '.$this->setTable());
        while($row = mysqli_fetch_assoc($result)){
            $arr[] = $row['id'];
        }
        return $arr;
    }
}