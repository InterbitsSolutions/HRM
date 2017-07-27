
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>asset/js/menu.js" type="text/javascript"></script>  
<script src="<?php echo base_url(); ?>asset/js/custom-validation.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.validate.js" type="text/javascript"></script>
<!-- Jasny Bootstrap for NIce Image Change -->
<script src="<?php echo base_url() ?>asset/js/jasny-bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap-datepicker.js" ></script>      
<script src="<?php echo base_url() ?>asset/js/timepicker.js" ></script>  

<!-- Data Table -->
<script src="<?php echo base_url(); ?>asset/js/plugins/metisMenu/metisMenu.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>asset/js/plugins/dataTables/jquery.dataTables.js" type="text/javascript"></script>  
<script src="<?php echo base_url(); ?>asset/js/plugins/dataTables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
    	
    	$(document).on("keyup blur","#first_name,#last_name,#father_name",function(){
        	var $th = $(this);
        	$th.val( $th.val().replace(/[^a-zA-Z!@#$&()\\-`.+,/\%* ]/g, function(str) { return ''; } ) );
    	});
    	$(document).on("keyup blur","#phone,#mobile",function(){
        	var $th = $(this);
        	$th.val( $th.val().replace(/[^0-9+ -]/g, function(str) { return ''; } ) );
    	});
    	$(document).on("click","#submit",function(){
    		var startDate = $('#start_date_event').val();
    		var endDate = $('#end_date_event').val();
    		alert(Date.parse(startDate)+'=='+endDate);return false;
    		if(Date.parse(startDate) < Date.parse(endDate)){
			   alert("Invalid Date Range");
			   return false;
			}
			else{
			   return true;
			}
    	});
    	
        $("[id^=dataTables-example]").dataTable();        
    });
    </script>
    <script type="text/javascript">
	  $(function() {
	     $(".document_employee").change(function (event){
	       var fileExtension = ['pdf', 'doc','txt'];
        	if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            	alert("Only formats are allowed : "+fileExtension.join(', '));
            	$(this).val('');
            	return false;
        	}
	     });
		 
		 $('.cal_startdt').click(function(event){
            event.preventDefault();
            $('#start_date').focus();
        });
		
		$('.cal_enddt').click(function(event){
            event.preventDefault();
            $('#end_date').focus();
        });
		
	  });
	</script>

</body>
</html>