$(document).ready(function(){
	var index=10;
	var start=0;
	page_load(index,start);
		
	$('#pre').on('click',function(){
		start=start-10;
		page_load(index,start);
	});
	$('#next').on('click',function(){
		start=start+10;
		page_load(index,start);
	});
	
});

function page_load(index,start) {
	$.ajax({
            type:"POST",
            url:"showData.php",
            data: {'index': index, 'start':start},
            dataType: 'json',
            success: function(data){
            	$("tbody").remove();
            	$("table").append("<tbody>"+data.data+"</tbody");
            	if (start==0) {$('#pre').hide();}
            	else{$('#pre').show();}
            	// alert(data.total);
            	// var temp_start=parseInt(start);
            	//var temp=parseInt(data.total);
            	// debugger;
            	if ((start+10)>=data.total) {$('#next').hide();}
            	else{$('#next').show();}
            	addHighLight();
            }
      		});	
}
function addHighLight(){
	$('table tbody tr').click(function(){
		$('table tbody tr').removeClass('selected');
		$(this).addClass('selected');
	});
	var rows = document.getElementById("table").rows;
	for(var i = 0, ceiling = rows.length; i < ceiling; i++) {
	    rows[i].onclick = function() 
	    {
	        
	        // alert(this.cells[0].innerHTML);
	    
	        document.getElementById("ID").value=this.cells[0].innerHTML;
	    }
	    
}
}

