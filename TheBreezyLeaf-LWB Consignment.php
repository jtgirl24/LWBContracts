<?php /*
thebreezyleaf@gmail.com
lwbooktique@gmail.com
contract-1575383069.php
data:image/png;base64,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

###################################
1. If you got this file from GitHub and its name is still contract.php, you should RENAME the file to something harder to guess.
The 4th line is a timestamp outputed by the online generator and an example of a more secure filename.

2. The 2nd and 3rd lines (the emails) are read by this PHP script (from itself).
When a signature is submitted, this script will send both parties an email with a link to the signed contract.

3. The 5th line ($lines[4] below) is the data for $DEV_SIGNATURE.
If you got this file from GitHub, the default developer signature just says "John Doe".
You can generate a new signature @ http://cdpn.io/JYpjvE and replace the data above.

4. The $CLIENT_SIGNATURE is received by this script from itself when Client signs the contract.
*/
$CLIENT_SIGNATURE = isset($_POST['client_signature']) ? $_POST['client_signature'] : null;
if (substr( $CLIENT_SIGNATURE, 0, 22 ) === 'data:image/png;base64,') {
    $CLIENT_SIGNATURE = '<img id="hk" src="' . htmlspecialchars($CLIENT_SIGNATURE) . '" >';
} else {
  $CLIENT_SIGNATURE = null;
}

$lines = file(__FILE__);
$clientEmail = trim($lines[1]);
$devEmail = trim($lines[2]);
$DEV_SIGNATURE = trim($lines[4]);
$DEV_SIGNATURE = '<img id="dev_signature" src="' . $DEV_SIGNATURE . '" >';

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4);
$htmlName = $fileName.'.html';

// If the filename is (or starts with) "test" or "demo" the PHP file won't delete itself, nor will it redirect to the HTML contract (when one exists)
if ( substr($fileName,0,4) == 'test' || substr($fileName,0,4) == 'demo' ) { $selfDelete = 0; }
else { $selfDelete = 1; }

/**
The HTML code (and some PHP) is kept in PHP variables like $HEADER, $CONTRACT_HTML, $FOOTER_UNSIGNED, and $FOOTER_SIGNED_PHP.
**/
$HEADER ='<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Signed Contract</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta name="robots" content="noindex">
<style>
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);
@import url(http://fonts.googleapis.com/css?family=Arapey);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
body {
    font-family: "Libre Baskerville", serif;
    font-size:16px;
    line-height:1.5em;
    color:#000;
    margin:0;
    background:#fff;
}
@media (max-width:600px) {
    body { font-size:14px; }
}
@media print {
   .noprint { display:none !important; }
}
.hidden {
    display:none;
}
#content {
    max-width: 600px;
    margin: 0 auto;
    margin-bottom: 3em;
    padding: 0 2em;
    background: #fff;
}
h1 {
    font-size: 2em;
    line-height: 1.2em;
    letter-spacing: 0.15em;
    font-family: "Arapey", serif;
    font-weight: normal;
    margin: 1em 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    padding: .5em 0;
}
h2 {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
    font-weight:700;
}
#signature {
    width:auto;
    border:dashed 2px #53777A;
    margin:0;
    text-align:center;
}
#hk,
#dev_signature {
    max-width:333px;
    display:block;
}
#date-ip {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
    font-weight:400;
}
#print-pdf {
    text-align:center;
    padding:1.5em 0;
    margin-top:2em;
    border-top:solid 1px #ccc;
}
.buttons {
    text-align:center;
    margin:1.5em auto;
}
button {
    margin: 0 .5em;
    font-size:1.2em;
    line-height:1.5em;
    font-family: "Open Sans Condensed",sans-serif;
    font-weight: 700;
    text-transform:uppercase;
    color: #0a3666;
}
button:hover {
    color: #136fd2;
}
</style>
</head>

<body>

<div id="content">

';
$CONTRACT_HTML='<p>&nbsp;</p>
<p>&nbsp;</p>
<p>HANDMADE CRAFTS CONSIGNMENT CONTRACT</p>
<p>This Consignment Agreement (this "Agreement") is made effective as of December 09, 2019 between The Breezy Leaf, of 1164 Lower Ferry Road, Ewing, New Jersey 08618, and Lighthouse Workshops &amp; BookTique, of 176 York Road, Warminster, Pennsylvania 18974.</p>
<p>The parties agree as follows:</p>
<p><strong>I. RIGHT TO SELL,</strong></p>
<p>The Breezy Leaf owns Handmade Crafts ("Handmade Crafts").&nbsp; In accordance with this Agreement, The Breezy Leaf grants Lighthouse Workshops &amp; BookTique a non-exlusive right to sell the Handmade Crafts under the terms of this Agreement.&nbsp; This right to sell only applies to the following described territory:&nbsp; the State of Pennsylvania.&nbsp; The Breezy Leaf agrees to deliver to Lighthouse Workshops &amp; BookTique, on consignment, the Handmade Crafts.&nbsp; All sales prices and terms of sale shall be determined by mutual consent of the parties.&nbsp;&nbsp;</p>
<p>The agreed payment plan is at the end of the document.</p>
<p><strong>II.&nbsp;PROCEEDS OF SALES.</strong></p>
<p>Lighthouse Workshops &amp; BookTique will pay to The Breezy Leaf a portion of the sales proceeds which shall be calculated as follows: 25 percent of the proceeds from the sale of the Handmade Crafts.&nbsp; The amount determined in the pervious sentence shall be paid to The Breezy Leaf in weekly installment(s) on or before the first day following the installment period in which proceeds were obtained.&nbsp; With each net proceeds payment,&nbsp;Lighthouse Workshops &amp; BookTique will submit to The Breezy Leaf a written report that sets forth the calculation of the amount of the net proceeds payment and the extent of current inventory.&nbsp;&nbsp;</p>
<p><strong>III. RECORDS</strong></p>
<p>Lighthouse Workshops &amp; BookTique shall keep accurate records regarding the quantities of the Handmade Crafts that are sold. The Breezy Leaf shall have right to inspect such records from time to time after providing reasonable notice of such intent to Lighthouse Workshops &amp; BookTique.</p>
<p><strong>IV. TILE TO MERCHANDISE.</strong></p>
<p>Consigned merchandise shall remain the property of The Breezy Leaf until sold.</p>
<p><strong>V. LOSS AND INSURANCE.</strong></p>
<p>Lighthouse Workshops &amp; BookTique shall be responsible for all shortages, loss, or damage, while the merchandise is under the control of Lighthouse Workshops &amp; BookTique. Lighthouse Workshops &amp; BookTique shall maintain insurance in adequate amounts to pay for replacement of the merchandise in the event of such shortages, loss, or damage.</p>
<p><strong>VI. PAYROLL TAXES. </strong></p>
<p>Lighthouse Workshops &amp; shall be exclusively liable for, and shall indemnify The Breezy Leaf against such liability for, all employee payroll taxes and insurance arising out of wages payable to persons employed by Lighthouse Workshops &amp; BookTique in connection with the performance of this Agreement.</p>
<p><strong>VII. DEFAULTS.</strong></p>
<p>Lighthouse Workshops &amp; BookTique fails to abide by the obligations of this Agreement, including the obligation to remit the consignment payment to The Breezy Leaf when due, The Breezy Leaf shall have the option to cancel this Agreement by providing 10 days&rsquo; written notice to Lighthouse Workshops &amp; BookTique. Lighthouse Workshops &amp; BookTique shall have the option to preventing the termination of this agreement by taking corrective action that cures the default, if such corrective action is taken prior to the end of the time period stated in the previous sentence, and if there are no other defaults during such time period.</p>
<p><strong>VIII. DISPUTE RESOLUTION.</strong></p>
<p>The parties will attempt to resolve any dispute arising out of o relating to this Agreement through friendly negotiations amongst the parties. If the matter is not resolved by negotiations, the parties will resolve the dispute using the below Alternative Dispute Resolution (ADR) procedure.</p>
<p>Any controversies or disputes arising out of or relating to this Agreement will be submitted to mediation in accordance with any statutory rules of mediation. If mediation is not successful in resolving the entire dispute or is unavailable, any outstanding issues will be submitted to binding arbitration under the rules of the American Arbitration Association. The arbitrator&rsquo;s award will be final, and judgment may be entered upon it by any court having proper jurisdiction.</p>
<p><strong>IX. WARRANTIES.</strong></p>
<p>Neither party makes any warranties with respect to the use, sales or other transfer of the Handmade Crafts by the other party or by any third party. In no event will The Breezy Leaf be liable for direct, indirect, special, incidental, or consequential damages, that are in any way related to the Handmade Crafts.</p>
<p><strong>X. TRANSFER OF RIGHTS. </strong></p>
<p>This Agreement shall be binding on any successors of the parties. Neither party shall have the right to assign its interests in this Agreement unless the prior written consent of the other party is obtained.</p>
<p><strong>XI. TERMINATION. </strong></p>
<p>This Agreement may be terminated by either party by providing 30 days&rsquo; written notice to the other party.</p>
<p><strong>XII. ENTIRE AGREEMENT. </strong></p>
<p>The Agreement contains the entire agreement of the parties with respect to the subject maters of this Agreement and there are no other promises or conditions in any other Agreement, whether oral or written. This Agreement supersedes any prior written or oral agreements between the parties with respect to the subject matter of this agreement.</p>
<p><strong>XIII. AMENDMENT.</strong></p>
<p>This Agreement may be modified or amended, if the amendment is made in writing and is signed by both parties.</p>
<p><strong>XIV. SEVERABILITY.</strong></p>
<p>If any provision of this Agreement shall be held to be invalid or unenforceable for any reason, the remaining provisions shall continue to be valid and enforceable. If a court finds that any provision of this Agreement is invalid or unenforceable, but that by limiting such provisions it would be valid or enforceable, then such provision shall be deemed to be written, construed, and enforced as so limited.</p>
<p><strong>XV. WAIVER OF CONTRACTUAL RIGHT.</strong></p>
<p>The failure of either party to enforce any provision of this Agreement shall not be construed as a waiver or limitation of that party&rsquo;s right to subsequently enforce and compel strict compliance with every provision of this Agreement.</p>
<p><strong>XVI. APPLICABLE LAW.</strong></p>
<p>This Agreement shall be governed by the laws of the Commonwealth of Pennsylvania.</p>
<p><strong>XVII. SIGNATORIES.</strong></p>
<p>This Agreement shall be signed on behalf of The Breezy Leaf by Stephanie Remington, Owner and on behalf of Lighthouse Workshops &amp; BookTique by Wendy Bryson, Owner and Jenny Korpalski, Owner. This Agreement is effective as of the date first written above.</p>
<p>Consignee:</p>
<p>Lighthouse Workshops &amp; BookTique</p>
<p>&nbsp; &nbsp; &nbsp;Jenny Korpalski &amp; Wendy Bryson</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; Owners</p>
<p>&nbsp;&nbsp;</p>
<p>Consignor:</p>
<p>The Breezy Leaf</p>
<p>&nbsp; &nbsp; &nbsp;Stephanie Remington</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; Owner</p>';
$FOOTER_UNSIGNED = '
  <form method="post" class="noprint" id="signature_form">
    <div id="signature">
      <!-- Client Signature Canvas -->
    </div>

    <div class="buttons">
      <button id="reset" type="button">Reset</button>
      <button id="submit" type="submit">Done &rarr;</button>
    </div>

    <input type="hidden" id="client_signature" name="client_signature" />
  </form>

</div> <!-- #content -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- https://github.com/brinley/jSignature/blob/master/README.md -->
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>
<script>
$(document).ready(function() {
  $("#signature").jSignature();
  var $sigdiv = $("#signature");
  var datapair = $sigdiv.jSignature("getData", "svgbase64");

  $("#signature").bind("change", function(e) {
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val(data);
  });

  $("#reset").click(function(e){
    $("#signature").jSignature("clear");
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val("");
    e.preventDefault();
  });

  $("#submit").click(function(e) {
    $("#signature_form").slideUp(200);
    //$(".buttons").slideUp(300);
    $("#signature_form").after("<img id=\"hk\" class=\"hidden\" />");
    var data = $("#signature").jSignature("getData");
    $("#hk").attr("src", data );
    $("#hk").slideDown(200);
    // Loading text
    $("#dev_signature").css("opacity",".625")
    $("#content").css({"color":"#aaa","list-style-color":"#aaa !important"}).append("<div id=\"loading_area\"></div>");
    $("#loading_area").append("<h2 id=\"loading\" style=\"text-align:center; color:green; display:none;\">Saving Contract…</h2>");
    $("#loading_area").append("<p id=\"loading2\" style=\"text-align:center; color:#222; display:none;\">This shouldn\'t take more than a minute.</p>");
    $("#loading").slideDown(300, function() {
		 		$("#loading2").delay(2000).slideDown(300);
  	});
	});
});
</script>
</body>
</html>';

if ($CLIENT_SIGNATURE) { $FOOTER_SIGNED_PHP ='
  $phpName  = basename($_SERVER["PHP_SELF"]) ? basename($_SERVER["PHP_SELF"]) : "index.php";
  $fileName = substr($phpName , 0, -4);
  $htmlName = $fileName.".html";
  $pdfName = $fileName.".pdf";
  ?>

  <div id="date-ip">
    <strong>Signed on:</strong> <?php echo date("j F Y"); ?>
    <br><strong>IP address:</strong>
    <?php echo get_client_ip_env(); ?><br>
  </div>

  <?php // Function to get the client ip address
  function get_client_ip_env() {
  	$ipaddress = "";
  	if (getenv("HTTP_CLIENT_IP"))
  		$ipaddress = getenv("HTTP_CLIENT_IP");
  	else if(getenv("HTTP_X_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_X_FORWARDED_FOR");
  	else if(getenv("HTTP_X_FORWARDED"))
  		$ipaddress = getenv("HTTP_X_FORWARDED");
  	else if(getenv("HTTP_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_FORWARDED_FOR");
  	else if(getenv("HTTP_FORWARDED"))
  		$ipaddress = getenv("HTTP_FORWARDED");
  	else if(getenv("REMOTE_ADDR"))
  		$ipaddress = getenv("REMOTE_ADDR");
  	else
  		$ipaddress = "UNKNOWN";
  	return $ipaddress;
  } ?>

  <div class="noprint" id="print-pdf">
    <button id="print" type="button" class="button-secondary" onclick="printContract()">
    Print contract
    </button>
    <button id="pdf" type="button" class="button-secondary" onclick="generatePdf()">
    Download as PDF
    </button>
  </div>

</div> <!--#content-->

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script>
function printContract() {
  window.print();
}
function generatePdf() {
  // http://pdfcrowd.com/save-to-pdf/
  window.location.href = "//pdfcrowd.com/url_to_pdf/?use_print_media=1&height=-1&pdf_name=<?php echo $pdfName; ?>";
}
</script>

</body>
</html>';
} else $FOOTER_SIGNED_PHP = null;


if($CLIENT_SIGNATURE==null) {
  if ( $selfDelete && file_exists($htmlName) ) {
    header('Location: '.$htmlName.'#hk');
    die();
  }
  /** Waiting for Client to sign: include signature elements and javascript **/
  echo $HEADER;
  echo $CONTRACT_HTML;
  echo $DEV_SIGNATURE;
  eval (' ?>'. $FOOTER_UNSIGNED .'<?php ');
}
else {
  /** Contract was just signed: put $CLIENT_SIGNATURE and the other parts in the .html file **/
  file_put_contents($htmlName, $HEADER);
  file_put_contents($htmlName, $CONTRACT_HTML, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $DEV_SIGNATURE, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $CLIENT_SIGNATURE, FILE_APPEND | LOCK_EX);
  ob_start();
  eval($FOOTER_SIGNED_PHP); // https://cgd.io/2008/how-to-execute-php-code-in-a-php-string/
  $FOOTER_SIGNED_COMPILED = ob_get_contents();
  ob_end_clean();
  file_put_contents($htmlName, $FOOTER_SIGNED_COMPILED, FILE_APPEND | LOCK_EX);

  // Email client & dev, delete php, redirect to html
  if ($clientEmail) {
    $headers = "From: " . $devEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = 'The contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.';
    mail($clientEmail,'Contract signed', $msg, $headers);
  }
  if ($devEmail) {
    $headers = "From: " . $clientEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = '<p>A new contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.</p>';
    $msg.= 'The contract was signed by: ' .$clientEmail;
    mail($devEmail,'Contract signed!', $msg, $headers);
  }
  if ($selfDelete) unlink(__FILE__);
  header('Location: '.$htmlName.'#hk');
  die();
}

// Get the current file URL and replaces the .php extension with .html
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  $url = substr($url,0,-4) . '.html';
  return $url;
}
?>
