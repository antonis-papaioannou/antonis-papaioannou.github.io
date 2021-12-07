<?PHP

###################### Set up the following variables ######################
# #
$filename = "data.txt"; #CHMOD to 666 # kalutera 722
$forward = 0; # redirect? 1 : yes || 0 : no
$location = "thankyou.htm"; #set page to redirect to, if 1 is above
# #
##################### No need to edit below this line ######################

## set time up ##

$date = date ("l, F jS, Y");
$time = date ("h:i A");

$author = $_POST['author'];
$mail = $_POST['email'];
$URL = $_POST['URL'];

$msg = "Data from $author [email: $mail ]. Submitted on $date at $time.\n";
$msg .= $URL . "\n" ;
#foreach ($_POST as $key => $value) {
#	$msg .= ucfirst ($key) ." : ". $value . "\n";
#}

$msg .= "-----------\n\n";

$fp = fopen ($filename, "a"); # w = write to the file only, create file if it does not exist, discard existing contents
if ($fp) {
	fwrite ($fp, $msg);
	fclose ($fp);
} else {
	$forward = 2;
}

if ($forward == 1) {
	header ("Location:$location");
} else if ($forward == 0) {
	echo ("<h3>Thank you for your help</h3> ");
	echo ("<br /> Submit more URLs <a href='http://www.csd.uoc.gr/~papaioan/likepages/'> Submit Page </a>");
} else {
	"Error processing form. Please contact the webmaster";
}

?>
