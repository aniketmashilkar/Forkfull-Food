<?php

	class Input{
		public static function exists($type = "POST")
		{
			return (!empty($_POST))? true:false;
		}
		public static function get($item)
		{
			if(isset($_POST[$item]))
			{
				return $_POST[$item];
			}
			return '';
		}
	}



?>