<?php
$date_for_rss = date('D, d M Y H:i:s O');
echo $date_for_rss."\n";

$date_for_rss = new DateTime('now');
echo $date_for_rss->format(DateTime::RSS);

?>
