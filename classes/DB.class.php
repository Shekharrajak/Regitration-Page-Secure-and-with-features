<? php 
class DB {
	protected $db_name = 'spr_Reg_Sys';
	protected $db_user = 'shekhar';
	protected $db_pass = 'chintoo';
	protected $db_host ='localhost';

	public function connect(){
		$connection = mysql_connect($this->db_host,$this->db_user,$this->db_pass);
		mysql_select_db($this->db_name);

		return true;
	}

	public function processRowSet($rowSet,$singleRow=false){
		$resultArray =array();
		while($row = mysql_fetch_assoc($rowSet)){
			array_push($resultArray, $row);	
		}
		if($singleRow ==true){
			retrun $resultArray[0];
		}
		return $resultArray;
	}
	public function select($table,$where){
		$sql = "select * from $table where $where";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) ==1){
			return $this->processRowSet($result,true);
		}
		return $this->processRowSet($result);
	}
	public function update($data,$table,$where){
		foreach($data as $column=>$value){
			$sql="update $table SET $column =$value WHERE $where";
			mysql_query($sql) or die(mysql_error());
		}
		return true;
	}

	public function insert($data,$table){
		$column="";
		$values="";

		foreach ($data as $column => $value) {
			$columns .=($column=="") ? "":",";
			$columns .=$column;
			$values .=($values =="")?"":",";
			$values .=$value;
		}
		sql = "insert into $table ($columns) values ($values)";
		mysql_query($sql) or die(mysql_error());
		return mysql_insert_id();
	}


}
?>