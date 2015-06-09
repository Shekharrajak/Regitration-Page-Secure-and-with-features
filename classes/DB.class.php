<? php 
class DB {
	protected $db_name = 'spr_Reg_Sys';
	protected $db_user = 'shekhar';
	protected $db_pass = 'chintoo';
	protected $db_host ='localhost';

	public function connect(){
		$connection = mysql_connect($this->db_host,$this->db_user,$this->db_pass);
		mysql_select_db($this->db_name);

		retrun true;
	}

	public function processRowSet($rowSet,$singleRow=false){
		
	}

}
