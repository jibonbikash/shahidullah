<?php
/**
 * Template Name: Formation Form
 
 */
get_header();
?>
<style type="text/css">


</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery_002.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery_003.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ui_002.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$('label.required').append('&nbsp;<strong>*</strong>&nbsp;');

	// accordion functions
	var accordion = $("#stepForm").accordion(); 
	var current = 0;
	
	$.validator.addMethod("pageRequired", function(value, element) {
		var $element = $(element)
		function match(index) {
			return current == index && $(element).parents("#sf" + (index + 1)).length;
		}
		if (match(0) || match(1) || match(2)) {
			return !this.optional(element);
		}
		return "dependency-mismatch";
	}, $.validator.messages.required)
	
/*	var v = $("#cmaForm").validate({
		errorClass: "warning",
		onkeyup: false,
		onblur: false

	});*/
	var v = $("#cmaForm").validate({
   errorClass: "warning",
   onkeyup: false,
   onblur: false
	})
	// back buttons do not need to run validation
	$("#sf2 .prevbutton").click(function(){
		accordion.accordion("activate", 0);
		current = 0;
	}); 
	$("#sf3 .prevbutton").click(function(){
		accordion.accordion("activate", 1);
		current = 1;
	}); 
	// these buttons all run the validation, overridden by specific targets above
	$(".open2").click(function() {
	  if (v.form()) {
	    accordion.accordion("activate", 2);
	    current = 2;
	  }
	});
	$(".open1").click(function() {
	  if (v.form()) {
	    accordion.accordion("activate", 1);
	    current = 1;
	  }
	});
	$(".open0").click(function() {
	  if (v.form()) {
	    accordion.accordion("activate", 0);
	    current = 0;
	  }
	});
 
});
</script>

     <div id="inner_contents1">
    <div class="singlepage">
    
    <div id="contents2">
    <?php
	if($_POST["submit"])
	{
		//echo 'Submited';
		$order = "INSERT INTO sha_companyform (id,proposenamecompany,totalsharecapital,natureofbusiness,contactnumber,businesstradingaddress,registeredaddress,dfirstname,dmiddlename,dlastname,daddress,dlineone,dlinetwo,dnationality,doccupation,ddateofbirth,dnumberofshares,dtownofbirth,dmothername,deyecolor,dfathername,dtelephone,dtelephonetwo,dninumber,dpassport,dproofaddress,fproofid,sfirstname,smiddlename,slastname,saddress,slineone,slinetwo,stownofbirth,smothersname,seyecolor,sfathername,stelephone,stelephonetwo,sninumber,spassport,sproofaddress,sproofid,shareholdername,nationality,occupation,dateofbirth,numberofshares)
			VALUES
			('null', '".$_POST["proposecompany"]."', 
			'".$_POST["sharecapital"]."', '".$_POST["busincessnature"]."', '".$_POST["contactnumber"]."', '".$_POST["businessaddress"]."', '".$_POST["registredaddress"]."', '".$_POST["middlename"]."', '".$_POST["lastname"]."', '".$_POST["address"]."', '".$_POST["line2"]."', '".$_POST["line3"]."', '".$_POST["nationality"]."', '".$_POST["occupation"]."', '".$_POST["dateofbirth"]."', '".$_POST["numberofshare"]."', '".$_POST["townofbirth"]."', '".$_POST["mothermiddlename"]."', '".$_POST["eyecolor"]."', '".$_POST["fathermiddle"]."', '".$_POST["telephone"]."', '".$_POST["telephone2"]."', '".$_POST["nimumber"]."', '".$_POST["passpoer"]."', '".$_POST["proofadd"]."', '".$_POST["proofid"]."', '".$_POST["sefirstname"]."', '".$_POST["semiddlename"]."', '".$_POST["selastname"]."', '".$_POST["seaddress"]."', '".$_POST["seline2"]."', '".$_POST["seline3"]."', '".$_POST["setownofbirth"]."', '".$_POST["semothermiddlename"]."', '".$_POST["seeyecolor"]."', '".$_POST["sefathermiddle"]."', '".$_POST["setelephone"]."', '".$_POST["setelephone2"]."', '".$_POST["nimumberse"]."', '".$_POST["sepasspoer"]."', '".$_POST["proofaddse"]."', '".$_POST["proofidse"]."', '".$_POST["shareholderfullname"]."', '".$_POST["nationalityother"]."', '".$_POST["occupationother"]."', '".$_POST["dateofbirthother"]."', '".$_POST["numbershareother"]."','ccvcv')";
			$result = mysql_query($order);
			if($result)
			{
				echo '<div class="success">Thank You</div>';
			}
			else
			{
				echo '<div class="errormsg">Error message</div>';
			}
	}

	?>
    <div class="titlesingle"> <h1> Comapny Formation Form</h1></div>
    
    <form novalidate="novalidate" name="cmaForm" id="cmaForm" method="post">


<ul role="tablist" id="stepForm" class="ui-accordion-container ui-accordion ui-widget ui-helper-reset">
	<li class="ui-accordion-li-fix" id="sf1"><a tabindex="0" aria-expanded="true" role="tab" href="#" class="ui-accordion-link ui-accordion-header ui-helper-reset ui-state-active ui-corner-top"><span class="ui-icon ui-icon-triangle-1-s"></span> </a>
	<div role="tabpanel" style="height: 300px;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active firstform">
	<fieldset><legend> Step 1 of 3 </legend>
	<div class="requiredNotice">*Required Field</div>

	
	<div class="formspacer"></div>
    <table width="100%" border="0">
  <tr>
    <td width="22%"><label for="recordshareholderfullname" class="input required">Proposed Company name&nbsp;&nbsp;</label> </td>
    <td width="1%">&nbsp;</td>
    <td width="77%">    <input type="text" name="proposecompany" id="proposecompany" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordnationality" class="input required">Total Share capital:</label> </td>
    <td>&nbsp;</td>
    <td>    <input type="text" name="sharecapital" id="sharecapital" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordoccupation" class="input required">Nature of Business:</label></td>
    <td>&nbsp;</td>
    <td>   <input type="text" name="busincessnature" id="busincessnature" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordPurchaseState" class="input required">Contact number:</label></td>
    <td>&nbsp;</td>
    <td>     <input type="text" name="contactnumber" id="contactnumber" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordnumbershare" class="input required">Business Trading Address:</label></td>
    <td>&nbsp;</td>
    <td> <input type="text" name="businessaddress" id="businessaddress" class="inputclass pageRequired" /></td>
  </tr>
  
  <tr>
    <td><label for="recordnumbershare" class="input required">Registered Address:</label></td>
    <td>&nbsp;</td>
    <td> <input type="text" name="registredaddress" id="registredaddress" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div class="buttonWrapper"><input name="formNext1" class="open1 nextbutton" value="Next" alt="Next" title="Next" type="button"></div></td>
  </tr>

    </table>

	</fieldset>
	</div>
	</li>
	<li class="ui-accordion-li-fix" id="sf2">
	<a tabindex="-1" aria-expanded="false" role="tab" href="#" class="ui-accordion-link ui-accordion-header ui-helper-reset ui-state-default ui-corner-all"><span class="ui-icon ui-icon-triangle-1-e"></span>
	</a>
	<div role="tabpanel" style="height: 640px; display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
	<fieldset><legend> Step 2 of 3 </legend>
	<div class="requiredNotice">*Required Field</div>
	<h3 class="stepHeader">Directors</h3>
    <table width="100%" border="0">
       <tr>
    <td width="20%" valign="top"><label for="recordClientTimeFrameID" class="input required">Name</label></td>
    <td width="1%">&nbsp;</td>
    <td width="79%"><label class="assss">First name: </label><input type="text" name="firstname" id="firstname" class="inputclass pageRequired"/><br /><label class="assss">Middle name: </label><input type="text" name="middlename" id="middlename" class="inputclass pageRequired"/><br /><label class="assss">Last name:</label><input type="text" name="lastname" id="lastname" class="inputclass pageRequired"/></td>
  </tr>
  
  <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Address</label></td>
    <td>&nbsp;</td>
    <td><label class="assss">Address: </label><input type="text" name="address" id="address" class="inputclass pageRequired"/>&nbsp;&nbsp;<br /><label class="assss">Line 2: </label><input type="text" name="line2" id="line2" class="inputclass"/><br /><label class="assss">Line 3: </label><input type="text" name="line3" id="line3" class="inputclass"/></td>
  </tr>
  
  
    <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Other information</label></td>
    <td>&nbsp;</td>
    <td><label class="assss">Nationality: </label><input type="text" name="nationality" id="nationality" class="inputclass pageRequired"/>&nbsp;&nbsp;<br /><label class="assss">Occupation:</label> <input type="text" name="occupation" id="occupation" class="inputclass"/><br /><label class="assss">Date of birth: </label><input type="text" name="dateofbirth" id="dateofbirth" class="inputclass"/>
    <br />
    <label for="recordClientTimeFrameID" class="input required assss">Number of shares</label>
    <input type="text" name="numberofshare" id="numberofshare" class="inputclass pageRequired"/>
    </td>
  </tr>
  
      <?php /*?><tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Number of shares</label></td>
    <td>&nbsp;</td>
    <td><input type="text" name="numberofshare" id="numberofshare" class="inputclass pageRequired"/></td>
  </tr><?php */?>
  
    <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Electronic Signiture</label></td>
    <td>&nbsp;</td>
    <td><label class="assss">Town of Birth:</label> <input type="text" name="townofbirth" id="townofbirth" class="inputclass pageRequired"/>&nbsp;&nbsp;<br /><label class="assss">Mothers maiden name:</label> <input type="text" name="mothermiddlename" id="mothermiddlename" class="inputclass"/><br /><label class="assss">Eye colour:</label> <input type="text" name="eyecolor" id="eyecolor" class="inputclass"/><br />
   <label class="assss"> Fathers first name: </label><input type="text" name="fathermiddle" id="fathermiddle" class="inputclass"/>
    
    <br />
   <label class="assss"> Telephone: </label><input type="text" name="telephone" id="telephone" class="inputclass"/>
    <br />
   <label class="assss"> Telephone: </label><input type="text" name="telephone2" id="telephone2" class="inputclass"/>
     <br /><label class="assss">NI number:</label> <input type="text" name="nimumber" id="nimumber" class="inputclass"/>
     <br /><label class="assss">Passport number:</label> <input type="text" name="passpoer" id="passpoer" class="inputclass"/>
     
    </td>
  </tr>
   <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Upload Proof of address</label></td>
    <td>&nbsp;</td>
    <td><input type="file" name="proofadd" id="proofadd" /></td>
  </tr>
  
  <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Upload Proof of ID</label></td>
    <td>&nbsp;</td>
    <td><input type="file" name="proofid" id="proofid" /></td>
  </tr>
  
  <tr>
    <td valign="top"></td>
    <td>&nbsp;</td>
    <td><div class="buttonWrapper"><input name="formBack0" class="open0 prevbutton" value="Back" alt="Back" title="Back" type="button"> <input name="formNext2" class="open2 nextbutton" value="Next" alt="Next" title="Next" type="button"></div></td>
  </tr>
  
</table>

	
	
	</fieldset>
	</div>
	</li>
	<li class="ui-accordion-li-fix" id="sf3">
	<a tabindex="-1" aria-expanded="false" role="tab" href="#" class="ui-accordion-link ui-accordion-header ui-helper-reset ui-state-default ui-corner-all"><span class="ui-icon ui-icon-triangle-1-e"></span>
	</a>
	<div role="tabpanel" style="height: 800px; display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
	<fieldset><legend> Step 3 of 3 </legend>
	<div class="requiredNotice">*Required Field</div>
	
		<h3 class="stepHeaderfff">Secretary</h3>
    <table width="100%" border="0">
       <tr>
     <td width="20%" valign="top"><label for="recordClientTimeFrameID" class="input required">Name</label></td>
    <td width="1%">&nbsp;</td>
    <td width="79%"><label class="assss">First name: </label><input type="text" name="sefirstname" id="sefirstname" class="inputclass pageRequired"/><br /><label class="assss">Middle name: </label><input type="text" name="semiddlename" id="semiddlename" class="inputclass pageRequired"/><br /><label class="assss">Last name:</label> <input type="text" name="selastname" id="selastname" class="inputclass pageRequired"/></td>
  </tr>
  
  <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Address</label></td>
    <td>&nbsp;</td>
    <td><label class="assss">Address: </label><input type="text" name="seaddress" id="seaddress" class="inputclass pageRequired"/><br /><label class="assss">Line 2:</label> <input type="text" name="seline2" id="seline2" class="inputclass"/><br /><label class="assss">Line 3:</label> <input type="text" name="seline3" id="seline3" class="inputclass"/></td>
  </tr>
  
  
    <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Electronic Signiture</label></td>
    <td>&nbsp;</td>
    <td><label class="assss">Town of Birth:</label> <input type="text" name="setownofbirth" id="setownofbirth" class="inputclass pageRequired"/>&nbsp;&nbsp;<br /><label class="assss">Mothers maiden name: </label><input type="text" name="semothermiddlename" id="semothermiddlename" class="inputclass"/><br /><label class="assss">Eye colour: </label><input type="text" name="seeyecolor" id="seeyecolor" class="inputclass"/><br />
   <label class="assss"> Fathers first name:</label> <input type="text" name="sefathermiddle" id="sefathermiddle" class="inputclass"/>
    
    <br />
  <label class="assss">  Telephone: </label><input type="text" name="setelephone" id="setelephone" class="inputclass"/>
    <br />
 <label class="assss">   Telephone:</label> <input type="text" name="setelephone2" id="tseelephone2" class="inputclass"/>
     <br /><label class="assss">NI number:</label> <input type="text" name="nimumberse" id="nimumberse" class="inputclass"/>
     <br /><label class="assss">Passport number: </label><input type="text" name="sepasspoer" id="sepasspoer" class="inputclass"/>
     
    </td>
  </tr>
   <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Upload Proof of address</label></td>
    <td>&nbsp;</td>
    <td><input type="file" name="proofaddse" id="proofaddse" /></td>
  </tr>
  
  <tr>
    <td valign="top"><label for="recordClientTimeFrameID" class="input required">Upload Proof of ID</label></td>
    <td>&nbsp;</td>
    <td><input type="file" name="proofidse" id="proofidse" /></td>
  </tr>
  
</table>
<h3>Other Sharholders</h3>
<table width="100%" border="0" id="lastt">
  <tr>
    <td width="20%" ><label for="recordshareholderfullname" class="input required">Shareholder Full name&nbsp;&nbsp;</label> </td>
    <td width="1%">&nbsp;</td>
    <td width="79%">    <input type="text" name="shareholderfullname" id="shareholderfullname" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordnationality" class="input required">Nationality:</label> </td>
    <td>&nbsp;</td>
    <td>    <input type="text" name="nationalityother" id="nationalityother" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordoccupation" class="input required">Occupation:</label></td>
    <td>&nbsp;</td>
    <td>   <input type="text" name="occupationother" id="occupationother" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordPurchaseState" class="input required">Date of birth:</label></td>
    <td>&nbsp;</td>
    <td>     <input type="text" name="occupation" id="dateofbirthother" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
    <td><label for="recordnumbershare" class="input required">Number of shares:</label></td>
    <td>&nbsp;</td>
    <td> <input type="text" name="numbershare" id="numbershareother" class="inputclass pageRequired" /></td>
  </tr>
  <tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td> </td>
  </tr>
  <tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td> 	<div class="buttonWrapper"><input name="formBack1" class="open1 prevbutton" value="Back" alt="Back" title="Back" type="button"> <input name="submit" id="submit" value="Submit" class="submitbutton" alt="Submit" title="Submit" type="submit"></div></td>
  </tr>
  <tr>
   

    </table>
  


	</fieldset>
	</div>
	</li>
</ul>
</form>

                    
    
   			 
            
    </div>
    </div>
    </div>
<?php
get_footer();
?>