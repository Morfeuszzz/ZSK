<?php
echo "dzień-miesiąc-rok ".date('d-m-Y')."<br>";
echo "dzień-miesiąc-rok ".date('m-d-Y')."<br>";
echo "dzień-miesiąc-rok ".date('d-M-Y')."<br>";

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y')."<br>";

echo date("G:i:s")."<br>";
echo date("H:i:sa");
?>
<!--
<script type="text/javascript">
    setTimeout(function() {
      window.location.reload();
    })
</script> -->
<?php
$data = getdate();
echo "<pre>";
print_r($data);
echo "</pre>";
echo $data['wday']."<br>";
echo $data['yday']."<br>";
echo date('L')."<br>";

$today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
echo $today."<br>";
$year = $today/(60*60*24*365);
echo (int)$year."<br>";

$today = mktime(0, 0, 0, date('m'), date('d'), date('Y')-1);
$year = $today/(60*60*24*365);
echo (int)$year."<br>";

?>
