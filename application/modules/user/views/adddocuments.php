<?php include 'header.php'; ?>

<?php if($userdetails)if($userdetails->usertype == 1 ){ include 'sidebar-admin.php'; }else{ include 'sidebar-user.php'; }?>


<section id="main-content">
	<div class="row">
		<div class="col-lg-12">
			<h2>Add Documents</h2>

			<div class="container" >
				<div class="p-20">
					<div class="form-validation">
						<form class="form-valide" action="<?php echo base_url(); ?>user/addingdocumnets" method="post">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label" for="documentname">Document Name <span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<input type="text" class="form-control input-focus" id="documentname" name="documentname" placeholder="Enter a Document Name.." value="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label" for="documentno">Doocument Number<span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<input type="text" class="form-control input-focus" id="documentno" name="documentno" placeholder="Enter Document Number.." value="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label" for="expiratndate">Expiration Date <span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<input type="text" class="form-control input-focus"  id="expiratndate" name="expiratndate" placeholder="Enter Expiration Date" value="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-2 col-form-label" for="remaindbfr">Remaind me before (days) <span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<select class="form-control input-focus" name="remaindbfr" id="remaindbfr">
										<option value="">Select</option>
										<option value="3">3 days</option>
										<option value="5">5 days</option>
										<option value="7">7 days</option>
										<option value="14">14 days</option>
										<option value="30">30 days</option>
									</select>
									
								</div>
							</div>


							<div class="form-group row">
								<label class="col-lg-2 col-form-label " for="remaindmeby">Remaind me by <span class="text-danger">*</span></label>
								<div class="col-lg-8">
									<select class="form-control input-focus" name="remaindmeby" id="remaindmeby">
										<option value="">Select</option>
										<option value="sms">SMS</option>
										<option value="email">Email</option>
									</select>
								</div>
							</div>
							<div class="alert alert-info col-lg-10">
									<strong>Maximum of 10 Documents</strong> If you need to Add more,Please Provide a request to Admin. <br>
									You can upload Document as <b>pdf</b> and images with extensions <b>jpeg/png/jpg</b>.
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label" for="file_doc1">Add Document<span class="text-danger">*</span></label>
								<div class="col-lg-8" id="files">
									<p><input type="file" class="input-focus" id="file_doc1" name="file_doc1" onchange="ValidateSingleInput(this);">
										<input type="button" class="btn btn-small btn-success" value="Add More" onclick="addfile()">
									</p>

								</div>
							</div>

							<p>&nbsp;</p>

							<div class="form-group row">
								<div class="col-lg-8 ml-auto">
									<button type="submit"   class="btn btn-primary">Submit</button>
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>





		</div>
	</div>
</section>
<script type="text/javascript">
	function addElement(parentId, elementTag, elementId, html) {
    // Adds an element to the document
    var p = document.getElementById(parentId);
    var newElement = document.createElement(elementTag);
    newElement.setAttribute('id', elementId);
    newElement.innerHTML = html;
    p.appendChild(newElement);
}

function removeElement(elementId) {
    // Removes an element from the document
    var element = document.getElementById(elementId);
    element.parentNode.removeChild(element);
}


var fileId = 0; // used by the addFile() function to keep track of IDs
function addfile() {

	if(fileId>8){
		alert("OOPs. You have reached the max number of uploads");
		return false;
	}
    fileId++; // increment fileId to get a unique ID for the new element
    // alert(fileId)
    var html = '<input type="file" class="input-focus"  name="file_doc'+fileId+'" onchange="ValidateSingleInput(this);" /> ' + '<a href="javascript:removeElement(\'file-'+fileId+'\');" class="btn btn-small btn-danger">Remove</a>';
    // alert(html)
    addElement('files', 'p', 'file-' + fileId, html);
}


var _validFileExtensions = [".jpg", ".jpeg", ".png", ".txt", ".pdf", ".doc", ".docx", ".odt"];    
function ValidateSingleInput(oInput) {
	if (oInput.type == "file") {
		var sFileName = oInput.value;
		if (sFileName.length > 0) {
			var blnValid = false;
			for (var j = 0; j < _validFileExtensions.length; j++) {
				var sCurExtension = _validFileExtensions[j];
				if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
					blnValid = true;
					break;
				}
			}

			if (!blnValid) {
				alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
				oInput.value = "";
				oInput.focus();
				return false;
			}
		}
	}
	return true;
}

</script>



<?php include 'footer.php'; ?>
<script src="<?php echo base_url(); ?>assests/template/assets/js/lib/chartist/chartist.min.js"></script>
