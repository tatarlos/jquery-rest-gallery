jQuery(document).ready(function($){

	var dataURL ="data/data.json",
	dataModel ={};

	function loadData(){
		 $.getJSON(dataURL, function(data){
		 	console.log(data);
		 	dataModel.images = data;
		 });
	}
	loadData();
});