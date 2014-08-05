<?php
/*

The XMLObject class is an abstract to be extended by classes which represent data from an XML file.

DEPENDANCIES
	
	NONE

PROPERTIES

	$xml_file_name
                
                The name of the file to read.
					
METHODS

	__construct($filename)
	
		$filename should be the name of an XML file. If the file does not exist, calling Save() will attempt to write it.
		If this is overloaded, ensure that parent->__construct($filename) is called.
	
	

	Save()
	
		This function writes the object data to the specified XML file. If the file does not exist it will be created.
		To provide additional functionality, this should be overloaded in the extending class, calling parent::Save().
		
		
	Delete()
		
		Similar to the save function this will delete the XML file.
		This can also be overloaded, and called via parent::Delete() to extend functionality.		
	
*/
	
class XMLObject extends DomDocument {

	private $xml_file_name = "";
	private $error;
	
	function __construct($filename = null)
	{
		$this->error = false;
		parent::__construct('1.0', 'iso-8859-1');
		if($filename)
		{
			$this->ImportXML($filename);
		}
	}
	
	public function GetError()
	{
		return $this->error;
	}
		
	public function ImportArray($vars)
	{
		//
	}
	
	public function ExportArray($node = null)
	{
		global $once;
		$arr = null;
		$xp = new domxpath($this);
		if(!$node)
		{
			$elements = $xp->query("/*");
		} else {
			if($node->hasChildNodes())
			{
				$elements = $xp->query("*",$node);
			} else {
				return null;
				
			}
		}
		if($elements->length)
		{
			foreach($elements as $f=>$n)
			{
				$name = $n->tagName;
				if(isset($arr[$name]))
				{
					if(is_array($arr[$name]))
					{
						$arr[$name][] = $this->ExportArray($n);
					} else {
						$arr[$name] = array(0=>$arr[$name], $this->ExportArray($n));
					}
				} else {
					$arr[$name] = $this->ExportArray($n);
				}
			}
		
		} else {
			return $node->textContent;
		}
		return $arr;
	}
	
	public function GetXML()
	{
		$this->error = false;
		$s = simplexml_import_dom($this);
		return $s->asXML();
	}
	
	public function ImportXML($filename = null, $module = null)
	{
		$this->error = false;
		
		if($filename)
			$this->xml_file_name = $filename;
		//$folder = $_SERVER['DOCUMENT_ROOT']."modules/".($module? $module."/" : "");
		$file = $this->xml_file_name;
		
		if(file_exists($file))
		{
			@$this->Load($file);
			return true;
		} else {
			$this->error = "Unable to load XML file: $file.";
		}
		return false;
	}
			
	public function Save()
	{
		$this->error = false;			
		$file = $this->xml_file_name;
		parent::save($file);
		return true;
	}	
		
	
	public function Delete()
	{
		$this->error = false;			
		$file = $this->xml_file_name;
		if(@file_exists($file))
		{
			unlink($file);
			return true;	
		}
		$this->error = "Cannot find XML file to delete.";
		return false;
	}
}
