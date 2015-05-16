function regex(){
	var rx = new RegExp();
	this.preg = Function(elem){
		var tf = document.getElementById(elem);
		if(elem == 'email'){
			rx = /[A-Za-z0-9._\%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}/gi;
		}
		tf.value = tf.value.replace(rx,"");
		alert('helloworld');
	}
}