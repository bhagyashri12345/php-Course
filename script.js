function call(){
	$.get("demo.php",show);

}
function show(data, status){
	console.log(status)
	return false;
}