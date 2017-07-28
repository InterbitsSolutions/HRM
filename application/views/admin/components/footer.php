
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
    	
        $('#cke_1_bottom').hide();
    	$(document).on("keyup blur","#first_name,#last_name,#father_name",function(){
        	var $th = $(this);
        	$th.val( $th.val().replace(/[^a-zA-Z!@#$&()\\-`.+,/\%* ]/g, function(str) { return ''; } ) );
    	});
    	$(document).on("keyup blur","#phone,#mobile",function(){
        	var $th = $(this);
        	$th.val( $th.val().replace(/[^0-9+ -]/g, function(str) { return ''; } ) );
    	});
    	$(document).on("click","#submit",function(){
    		var startDate = Date.parse($('#start_date_event').val());
    		var endDate = Date.parse($('#end_date_event').val());
    		if(startDate > endDate){
			   alert("Invalid Date Range ! Please check again..");
			   return false;
			}else{
			   return true;
			}
    	});
    	/*$('.start-calender').click(function(event){
            event.preventDefault();
            $('#start_date_event').focus();
        });
        $('.end-calender').click(function(event){
            event.preventDefault();
            $('#end_date_event').focus();
        });
        $('.emp_dob').click(function(event){
            event.preventDefault();
            $('#emp_date_picker').focus();
        });
        $('.emp_join').click(function(event){
            event.preventDefault();
            $('#joining_date').focus();
        });
        $('.empawrd').click(function(event){
            event.preventDefault();
            $('#award_date').focus();
        });*/
        $(document).on("keyup blur","input[name='award_amount']",function(){
            var $th = $(this);
            $th.val( $th.val().replace(/[^0-9.]/g, function(str) { return ''; } ) );
        });
        $(document).on("keyup blur","input[name='amount']",function(){
            var $th = $(this);
            $th.val( $th.val().replace(/[^0-9.]/g, function(str) { return ''; } ) );
        });
        $('.entypo-calendar').click(function(event){
            event.preventDefault();
            $(this).parent().parent().parent().find('input').focus();
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
	  });
	</script>

</body>
</html>