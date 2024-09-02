<?php
 include("includes/config.php"); 
 include('libs/phpqrcode/qrlib.php'); 


    $asstQry = fetchAllAsset('tbl_electronics','scan_code');
     $sn = 0;
    while($rows = mysqli_fetch_array($asstQry)){
        $scan_code = $rows['scan_code'];
    }



function getUsernameFromEmail($email) {
	$find = '@';
	$pos = strpos($email, $find);
	$username = substr($email, 0, $pos);
	return $username;
}

if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$email = $_POST['mail'];
	$subject =  $_POST['subject'];
	$body =  $_POST['msg'];
	$filename = getUsernameFromEmail($email);
	
	$codeContents =  "http://209.205.209.34/~odirscom/ict_admin/viewasset.php?scan_code=".$scan_code;
	$txt = "just text";

	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
?>

		<div class="myoutput">
			<h3><strong>(QR) Code Generator</strong></h3>
			<div class="input-field">
				<h3>Please Fill-out All Fields</h3>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="form-group">
						<label>Email</label>
						<!--<input type="email" class="form-control" name="mail" style="width:20em;" placeholder="Enter your Email" value="<?php echo @$email; ?>" required />-->
					</div>
					<div class="form-group">
						<label>Subject</label>
						<!--<input type="text" class="form-control" name="subject" style="width:20em;" placeholder="Enter your Email Subject" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z .]+" />-->
					</div>
					<div class="form-group">
						<label>Message</label>
						<!--<input type="text" class="form-control" name="msg" style="width:20em;" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message"></textarea>-->
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
				</form>
			</div>
			<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<div class="qr-field">
				<h2 style="text-align:center">QR Code Result: <?php echo ++$sn; echo $scan_code; ?></h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			<div class = "dllink" style="text-align:center;margin:-100px 0px 50px 0px;">
				<h4>www.itsourcecode.com</h4>
			</div>
		</div>
	</body>
	<footer></footer>
</html>