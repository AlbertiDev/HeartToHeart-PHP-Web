
<div class="rrethina">
	<form action="inc/contact_insert.php" name="myForm" onsubmit="return validateForm()" method="post">

<div class="contactform">

  <div class="formhedertxt">
    <h2>Contact US</h2>
     </div>
 
  <div>
    <label class="desc" id="title1" for="fname">Full Name</label>
    <div>
      <input id="fname" name="fname" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
    
  <div>
    <label class="desc" id="title3" for="email">
      Email
    </label>
    <div>
      <input id="email" name="email" type="email" spellcheck="false" value="" maxlength="255" tabindex="2"> 
   </div>
  </div>
    
  <div>
    <label class="desc" id="title4" for="komentet">
      Message
    </label>
  
    <div>
      <textarea id="Field4" name="msg" spellcheck="true" rows="1" cols="25" tabindex="3"></textarea>
    </div>
  </div>
    
  <div>
    <fieldset>
    
      <legend id="title5" class="desc">
        Select a Choice
      </legend>
      
      <div>

      	<div>
      		<input id="rdo_0" name="rdo" type="radio" value="First Choice" tabindex="4" checked="checked">
      		<label class="choice" for="rdo_0">First Choice</label>
      	</div>
        <div>
        	<input id="rdo_1" name="rdo" type="radio" value="Second Choice" tabindex="5">
        	<label class="choice" for="rdo_1">Second Choice</label>
        </div>
      </div>
    </fieldset>
  </div>
  
  <div>
    <fieldset>
      <legend id="title6" class="desc">
        Check All That Apply
      </legend>
      <div class="nirresht">
      <div>
      	<input id="ckb1" name="ckb[]" type="checkbox" value="First Choice" tabindex="7">
      	<label class="choice" for="ckb1">First Choice</label>
      </div>
      <div>
      	<input id="ckb2" name="ckb[]" type="checkbox" value="Second Choice" tabindex="8">
      	<label class="choice" for="ckb2">Second Choice</label>
      </div>
      <div>
      	<input id="ckb3" name="ckb[]" type="checkbox" value="Third Choice" tabindex="9">
      	<label class="choice" for="ckb3">Third Choice</label>
      
      </div>
    </div></fieldset>
  </div>
  
  <div>
    <label class="desc" id="title106" for="Field106">
    	Select a Choice
    </label>
    <div>
    <select id="Field106" name="Field" class="field select medium" tabindex="10"> 
      <option value="First Choice">First Choice</option>
      <option value="Second Choice">Second Choice</option>
      <option value="Third Choice">Third Choice</option>
    </select>
    </div>
  </div>
  
  <div>
		<div>
	<input type="submit" name="submit" value="Submit" class="btnSend" tabindex="11"/>
<input type="button" name="cancel" value="Cancel" class="btnSend bscc" tabindex="12"/>
	</div>
	</div>

  </div>
  </div>
</form>
								
<?php include "inc/meny.php"?>
