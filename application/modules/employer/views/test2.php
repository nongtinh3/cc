<?php
	foreach(@$aa as $row)
	{
		$ac = $row->a;		
		$gia = explode(',',$ac);
		foreach($gia as $rows)
		{
			echo $rows."<br>";
		}
		
	}

?>