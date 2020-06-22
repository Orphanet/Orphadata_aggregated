<!DOCTYPE html>

<?php

// VERIFICATION CAPTCHA
// IMPORTANT EN PHP 64bits ce n'est pas la même façon de calculer qu'en 32...

/* fonction pour 32

function rpHash($value) {
	$hash = 5381;
	$value = strtoupper($value);
	for($i = 0; $i < strlen($value); $i++) {
		$hash = (($hash << 5) + $hash) + ord(substr($value, $i));
	}
	return $hash;
}
*/

// fonction pour 64
function rpHash($value) { 
    $hash = 5381; 
    $value = strtoupper($value); 
    for($i = 0; $i < strlen($value); $i++) { 
        $hash = (leftShift32($hash, 5) + $hash) + ord(substr($value, $i)); 
    } 
    return $hash; 
} 
 
// Perform a 32bit left shift 
function leftShift32($number, $steps) { 
    // convert to binary (string) 
    $binary = decbin($number); 
    // left-pad with 0's if necessary 
    $binary = str_pad($binary, 32, "0", STR_PAD_LEFT); 
    // left shift manually 
    $binary = $binary.str_repeat("0", $steps); 
    // get the last 32 bits 
    $binary = substr($binary, strlen($binary) - 32); 
    // if it's a positive number return it 
    // otherwise return the 2's complement 
    return ($binary{0} == "0" ? bindec($binary) : 
        -(pow(2, 31) - bindec(substr($binary, 1)))); 
} 


// activer ligne ci-dessous pour mode debug et lister le contenu du post
       //       print_r($_POST);

if (rpHash($_POST['defaultReal']) == $_POST['defaultRealHash']) {

//MODE DEBUG POUR BYPASS DU TEST
// if (rpHash($_POST['defaultReal']) != $_POST['defaultRealHash']) {
// echo "OK";

} else { include 'error.html';

die ();
}
echo "
</div>
</div>
<br />
</div>
";




// MAIL

$institution = $_POST['institution'];  
$instit_type = $_POST['instit_type'];
$position = $_POST['position'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];
$message = strip_tags ( $message ); // on vire les balises
$purpose = $_POST['purpose'];

// Module de génération d'un ticket ?
$refdate= date("YmdHi");
$ref= '[ORPHADATA'.$refdate.']';
$date = date(DATE_RFC2822);
 



// Mail pour le formulaire de contact
$contactmail = 'data.orphanet@inserm.fr';
//$contactmail = 'david.lagorce@inserm.fr';

$to = $contactmail;
$to .= " , ";
$to .= $email;


$subject = $ref.' From: ' . $firstname.' '.$lastname.' <'.$email.'>';
$debutmsg= '<b>Message from Orphadata contact form.</b> <br/>';
$content= '<html><body>'.$debutmsg.$date.'<br/><br/>Institution type : '.$instit_type.'<br/>'.'Institution : '.$institution.'<br/>'.'First Name : '.$firstname.'<br/>'.'Last name : '.$lastname.'<br/>'.'Position : '.$position.'<br/>'.'Email : '.$email.'<br/>'.'Country : '.$country.'<br/>'.'Purpose: '.$purpose.'<br/><br/>Message:<br/>'.$message.'</body></html>';


// OLD
$from = 'orphadata@orphadata.org';
//$replyto = "Reply-To: " . $email;
//$headers = "From:" . $from."\r\n"."Reply-To: data.orphanet@inserm.fr\r\n"."Content-Type: text/html; charset=\"iso-8859-1\"\r\n";
//$headers = "From: " . $from . "\r\n" . $replyto . "\r\n"."Content-Type: text/html; charset=\"iso-8859-1\"\r\n";
//echo $headers;


// NEW
$headers = "From: $from \r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n";


mail($to,$subject,$content,$headers);
?>
	 


    <!-- Contact form JavaScript -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" /><title>OrphaData Contact</title>
<meta name="keywords" content="<?= $keywords ?>" />
<meta name="description" content="<?= $description ?>" />
	<script src="js/jquery.min.js"></script>
	<script src="js/breedjs.min.js"></script>
	<script src="js/query.min.js"></script>
	<script src="js/jquery-validate/jquery.validate.min.js"></script>
	<script src="js/jshashtable-2.1.js"></script>
	<script src="js/jquery.numberformatter-1.2.1.jsmin.js"></script>
	 <link href="css/jquery.realperson.css" rel="stylesheet">

	<script src="js/jquery.realperson.js"></script>

 
     <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
 
     <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Custom styles for this template -->
	<script src="js/jquery.min.js"></script>
	<script src="js/breedjs.min.js"></script>
	<script src="js/query.min.js"></script>
	<script src="js/jquery-validate/jquery.validate.min.js"></script>
	<script src="js/jshashtable-2.1.js"></script>
	<script src="js/jquery.numberformatter-1.2.1.jsmin.js"></script>
	 <link href="css/jquery.realperson.css" rel="stylesheet">
	<script src="js/jquery.realperson.js"></script>
	
  </head>
  
  <body id="page-top">

	
	   <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Your message has been sent</h2>
          </div>
		 

<?php
  $color = "#fed136";
  
$date = date(DATE_RFC2822);
  ?>
 			<h3 class="col-lg-12 text-center">
			<b style="color: <?php echo $color; ?>; font-weight: normal; font-size: small"><?php echo $date; ?></b> 
		  
        </div>
        <div class="row">
          <div class="col-lg-12">

		  
		  <h1></h1>
	

		  
		  
              </div>
			  
            </form>
          </div>
        </div>
      </div>
</section>
    	
	
	
	
	
	
    
    <!-- Clients And LOGOS -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/blank.jpg" alt="" style="height:50px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/logo-inserm-rvb.jpg" alt="" style="height:60px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/Co-Funded_by_the_EU_logo_ok.png" alt="" style="height:50px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/blank.jpg" alt="" style="height:50px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/irdirc.jpg" alt="" style="height:60px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/Global_Alliance.jpg" alt="" style="height:60px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/HVP Logo.png" alt="" style="height:80px;">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logo_support/ifb.jpg" alt="" style="height:60px;">
            </a>
          </div>
        </div>
      </div>
    </section>

	
	    
    <!-- Footer -->
    
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
             <span class="copyright">&copy; 2011 Orphanet Inserm US14 <br> Last update:  27 May 20</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/orphanet" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://fr-fr.facebook.com/orphanet/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
		
          <div class="col-md-4">
            <span class="copyright">&copy; alice_photo / Fotolia <br>
									&copy; Vlad Kochelaevskiy / Fotolia <br>
									&copy; golubovy / Fotolia <br>
									&copy; Julien Eichinger / stock.adobe.com <br>
									&copy; Jakub Jirsák / stock.adobe.com</span>
          </div>  
		  
        </div>
      </div>
    </footer>




	
  </body>

</html>
