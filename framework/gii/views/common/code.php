<?php
if(in_array($file->type,array('php','js','vue','json')))
{
	echo '<div class="content">';
	highlight_string("<?php " . $file->content);
	echo '</div>';
}
elseif(in_array($file->type,array('txt','css')))
{
	echo '<div class="content">';
	echo nl2br($file->content);
	echo '</div>';
}
else
	echo '<div class="error">Preview is not available for this file type.</div>';
?>