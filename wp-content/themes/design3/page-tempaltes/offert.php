<?php

/*

Template name: offerttest

*/

get_header();

?>



<?php

// define variables and set to empty values

$name = $email = $subject = $ovrigt = $nameErr = $emailErr = $tack = $phone =  "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["customer_name"]);

  $subject = test_input($_POST["customer_subject"]);

  $email = test_input($_POST["customer_email"]);

  $phone = test_input($_POST["customer_phone"]);

  $ovrigt = test_input($_POST["ovrigt"]);





  if (empty($_POST["customer_name"])) {

    $nameErr = "Name is required";

  } else {

    $name = test_input($_POST["customer_name"]);

  }



  if (empty($_POST["customer_email"])) {

    $emailErr = "Email is required";

  } else {

    $email = test_input($_POST["customer_email"]);



$headers[] = 'Content-Type: text/html; charset=UTF-8';

$headers[] = 'From: Hemsidan - Förfrågan <info@stilog.mediahelpcrm.se>';

$body = "Namn: ".$name."<br />Telefon: ".$phone."<br />Email: ".$email."<br />".$ovrigt;

$recipients = array($email, 'johanwendin@gmail.com','malin@stilog.se');



    if(wp_mail( $recipients, $subject, $body, $headers)){



    	$tack = "Tack! Vi återkopplar inom kort!";

    }





  }





}



function test_input($data) {

  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;

}

?>



  <?php 



  	if (isset($_GET['subject'])) { 



  		$subject = "";



}



$subject = $_GET['subject'];



  ?>





<section class="section-white single offert">

	<div class="container">

	<div class="container-wrap">

	<div class="content">

		<?php 

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post(); 

					//print_r($post);

					the_title('<h1>', '</h1>');

					// Post Content here

					the_content();

					//

				} // end while

			} // end if

?>



<?php $query8 = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 7, 'post_per_page' => -1) );

//print_r($query8);

					  while ( $query8->have_posts() ) : $query8->the_post(); ?>



		<?php the_title('<h2>', '</h2>');  ?>



		<?php the_content();?>

	    <?php endwhile;?>



</div>









	    <div class="form col-md-12">

<form method="POST" name="offert"  onsubmit="return form_validation()" action="<?php the_permalink(); ?>">

<div class="row">

<div class="col-md-4 col-sm-4">Ditt namn: <span class="error">* <?php echo $nameErr;?></span></div><div class="col-md-8 col-sm-8"><input type="text" id="customer_name" name="customer_name" /><br /></div>

</div>

<div class="row">

<div class="col-md-4 col-sm-4">

  Din Email: 

  <span class="error">* <?php echo $emailErr;?></span>

</div>

<div class="col-md-8 col-sm-8"><input type="text" id="customer_email" name="customer_email" /><br /></div>

</div>

<div class="row">

<div class="col-md-4 col-sm-4">Ditt Ämne: </div><div class="col-md-8 col-sm-8"><input type="text" id="customer_name" name="customer_subject" value="<?php echo $subject; ?>"/><br /></div>

</div>

<div class="row">

<div class="col-md-4 col-sm-4">Ditt Telefonnummer: </div><div class="col-md-8 col-sm-8"><input type="text" id="customer_phone" name="customer_phone" value=""/><br /></div>

</div>

<div class="row">

<div class="col-md-4 col-sm-4">Övrigt: </div><div class="col-md-8 col-sm-8"><textarea id="ovrigt" name="ovrigt"></textarea><br/></div>

</div>

<div class="row">

<input type="submit" value="Skicka Förfrågan"/>

</div>

</form>

<div class="tack">

	<h2><?php echo $tack; ?></h2>

</div>

</div>



</div>

</div>

</section>



<?php 

get_footer();

?>