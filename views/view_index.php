<script src="<?php echo base_url('asset/jquery-3.3.1.min.js');?>"></script>


<body>
	<div id="api_id" class="api_class">
		
	</div>
</body>


<script>
	$(document).ready(function(){
		console.log("success");

		var url = "127.0.0.1/rest_ci/kontak/index_get";


		$.ajax({ 
		    type: 'GET', 
		    url: url, 
		    data: { get_param: 'value' }, 
		    dataType: 'json',
		    success: function (data) { 
		        $.each(data, function(index, element) {
		            $('body').append($('<div>', {
		                text: element.name
		            }));
		        });
		    }
		});


		
	
	});
</script>

<!-- 
$.ajax({ 
    type: 'GET', 
    url: 'http://example/functions.php', 
    data: { get_param: 'value' }, 
    dataType: 'json',
    success: function (data) { 
        $.each(data, function(index, element) {
            $('body').append($('<div>', {
                text: element.name
            }));
        });
    }
}); -->