<!-- preview image code -->

<div  class="col-md-7">
	<?php 
	$onclick = $cls = $fileinp = '';
	$noimage = base_url().'assets/images/noimage.png';
	if ($userdetails) {  
														// $src = base_url().'public/'.$userdetails->ps_image;$userdetails->ps_image
		$src = base_url().'public/';
														// $onclick = 'onclick="removeimg('.$userdetails->ps_id.');"';
		$fileinp = 'display:none;';
	} else {
		$src = base_url().'assets/images/noimage.png';
		$cls = 'removeimgclass';
		$onclick='style="display: none;" id="removeimgmodal"';
		$fileinp = '';
	}
	?>
	<img src="<?php echo $src; ?>" id="previewimage">
	<!-- <input type="file" style="font-size: 12px;<?php echo $fileinp ?>"  name="image" id="image" /> -->
	<button class="btn-link <?php echo $cls ?>" <?php echo $onclick; ?> name="removebutton" type="button"><i class="icon-remove"></i> Remove Image</button>
</div>

<input type="hidden" name="imgg" id="imgg" value="<?php echo $src; ?>">
</div>
</div>
<script>
	$(document).ready(function() {
		var blahsrc =  '<?php echo $src; ?>';

		$("#removeimgmodal").live('click', function(){
			$('#previewimage').attr('src', $("#imgg").val());
			$("#image").val(null);
			$("#removeimgmodal").hide(500);
		});


		function readURL(input) {

			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#previewimage').attr('src', e.target.result);

					$(".removeimgclass").removeAttr("onclick").attr('id', 'removeimgmodal');
					$("#removeimgmodal").show();
					$(".removeimgclass").removeClass("removeimgclass");
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#image").change(function() {
			readURL(this);
		});

	});
	function removeimg(id)
	{
		if(confirm("Are you sure to do that ?")){
			$.ajax({
				url:"<?php echo base_url(); ?>stocks/removeimage/"+id, 
				method:"post",
				success: function(){

					$('#previewimage').attr('src', '<?php echo $noimage; ?>');
					$("#imgg").val('<?php echo $noimage; ?>');
					$("#image").show();
					$('button[name="removebutton"]').hide();
					$('button[name="image"]').show();
					$('button[name="removebutton"]').removeAttr('onclick');
					$('button[name="removebutton"]').attr('id', 'removeimgmodal');
							                                // $('button[name="removebutton"]').attr('id', 'removeimgmodal')
							                                // $('button[name="removebutton"]').hide(500);
							                            }
							                        });
		}

	}
</script>