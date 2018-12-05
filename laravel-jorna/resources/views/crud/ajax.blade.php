<input type ="checkbox" onclick="data_insert(this)"id="insert" value="0">
<span id="response"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jequery/3.3.1/jquery.min.js"></script>
<script type="text/javasript">
	function data_insert(data){
	id = $(data).attr('value');
	$.ajax({
	type: "get",
	url: "{{ url ('check')}}",
	dataType:"json",
	data:{ new _id:id},
	success: function(data){
	if(data.status == "success"){
	$("#respons").text(data.message);

}
},
error: function(data){
	alert('nok');
}

});
	
}
</script>