function get_primes(arr) {

	var res = arr.filter(function(value){
	  	for(var i =2 ; i< value; i++){(function(e){
	  		if(value/i !== (value/i).parseInt){
	      		return false;
	    	}
	  	})(i)}
		//return true;
	});    

	return res;

}



//求素数正确写法
function get_primes(arr){
	return arr.filter(function(value){
		if(value == 1){
			return false;
		}

		for(var i = 2; i <= Math.sqrt(value); i++){
			if(value%i == 0){
				return false
			}
		}

		return true;
	});
}