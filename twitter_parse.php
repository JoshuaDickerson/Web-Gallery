<?php


$url = 'http://twitter.com/statuses/user_timeline/joshuadickerson.xml';
$xml = simplexml_load_file($url);


function parse_feed($xml){
	for ($N = 0; $N < 6; $N++){
    	if(isset($xml->status[$N]->text))
    	{  
        echo '<li><span class="twit_text">' . $xml->status[$N]->text . "</span><br />";
        echo '<span class="twit_date">' . $xml->status[$N]->created_at . "</span></li>";
    	}
	}
}

?>

<div id="twitter_feed" style="float:right; width:400px;">
	<ul id="twit_nest"  style=" list-style-type:none; background:#ddd;" >				
		<? echo parse_feed($xml); ?>
	</ul>
</div>