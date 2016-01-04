<?php
// This file may be used and distributed under the terms of the WTF public license.

class YellowPageTxt
{
	const Version = "0.1.1";
	var $yellow;				//access to API

	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
	}
	
	// Handle page meta data parsing
	function onParseMeta($page)
	{
		if($this->yellow->page == $page)
		{
			$language = $this->yellow->page->get("language");		
			$data = $this->yellow->text->getData("", $language);
			foreach($data as $key=>$value)
			{
				if ($this->yellow->page->isExisting($key) && $key != "language")
					$this->yellow->text->setText($key, $this->yellow->page->get($key), $language);	
			}
		}
	}
}

$yellow->plugins->register("pagetxt", "YellowPageTxt", YellowPageTxt::Version);
?>
