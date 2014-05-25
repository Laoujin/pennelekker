<?
define("DEBUG", false);

Class MySqlWrapper
{
	var $Connection;
	var $Server = 'localhost';
	var $Login = 'root';
	var $Password = '';
	var $Database = 'ttc';
	
	function MySqlWrapper()
	{
		if (false)
		{
			$this->Server = 'ttc-erembodegem.be.mysql';
			$this->Login = 'ttc_erembodegem';
			$this->Password = '';
			$this->Database = 'ttc_erembodegem';
		}
		
		$this->Connection = mysql_connect($this->Server, $this->Login, $this->Password)
		or $this->Error('Failed to connect to host!');

		mysql_select_db($this->Database)
		or $this->Error('Failed to select database: '.$this->Database);
	}

	function Query($request, $update = "")
	{
		if ($update != "")
			$this->SetLastUpdate($update);
		
		if ($result = mysql_query($request)) return $result;
		$this->Error("Failed request:<br>$request<br><br>".mysql_error());
	}
	
	function Escape($str)
	{
		return addslashes($str);
	}
	
	function Html($to_change)
	{
		if (!$to_change) return "&nbsp;";
		return stripslashes(htmlentities($to_change, ENT_QUOTES));
	}
	
	function ParseDate($date)
	{
		return substr($date, 6).substr($date, 3, 2).substr($date, 0, 2);
	}
	
	function ParseDateCombine($jaar, $maand, $dag)
	{
		return $jaar.str_pad($maand, 2, "0", STR_PAD_LEFT).str_pad($dag, 2, "0", STR_PAD_LEFT); 
	}
	
	function GetParams($keys = null)
	{
		$values = array();
		$where = "";
		if (isset($keys))
		{
			if (is_array($keys)) $keys = implode("', '", $keys);
			$where = "WHERE sleutel IN ('".$keys."')";
		}
		$result = $this->Query("SELECT sleutel, value FROM parameter $where");
		while ($record = mysql_fetch_array($result))
		{
			$values[$record['sleutel']] = $record['value'];
		}
		return $values;
	}
	
	function SetParam($key, $value)
	{
		$this->Query("UPDATE parameter SET value='".$this->Escape($value)."' WHERE sleutel='".$key."'");
	}
	
	function SetLastUpdate($value)
	{
		$value = date("d/m/Y H:i")." van ".$value;
		if (isset($_SESSION['user'])) $value .= " door ".$_SESSION['user'];
		$this->SetParam(PARAM_LASTUPDATE, $value);
	}
	
	function Close()
	{
		 mysql_close($this->Connection);
	}
	
	function ExecuteScalar($query)
	{
		$result = $this->Query($query);
		if ($record = mysql_fetch_array($result))
			return $record[0];
		else
			return "";
	}
	
	function Error($msg)
	{
		die($msg);
	}
}
?>