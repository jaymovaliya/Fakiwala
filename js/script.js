function validateForm(form) {
    var nvalid = true;
    var cvalid = true;
    var avalid = true;
    var tnvalid = true;
    var chvalid = true;
    var fvalid = true;
    var qvalid = true;
    var valid = true;
    var valNum = /^[0]?[789]\d{9}$/;
    var valQua = /^[0-9]+$/;




  var name = form.fname.value;
    var contact = form.contact.value;
    var address = form.address.value;
    var tamaku = form.tamaku.value;
    var chuno = form.chuno.value;
    var faki = form.faki.value;
    var quantity = form.quantity.value;
   

    if (name==null||name=="") {
    	document.getElementById('fnerr').innerHTML = "*Please fill name...";
      nvalid = false;
      } 
      //console.log("oh yeah...")
    else{
    document.getElementById('fnerr').innerHTML = "";
    nvalid = true;
     }  
    	
    
    if (contact==null||contact==""|| !(valNum.test(contact))) {
    	document.getElementById('coerr').innerHTML = "*Please enter valid contact no.";
      cvalid = false;
    	}
    else{
    document.getElementById('coerr').innerHTML = "";
    cvalid = true;
     }  



    if (address==null||address=="") {
    	document.getElementById('adderr').innerHTML = "*Please fill address...";
    	avalid = false;
    }
    else{
    document.getElementById('adderr').innerHTML = "";
    avalid = true;
     }  




    if (tamaku==null||tamaku=="") {
    	document.getElementById('tamerr').innerHTML = "*Please select tamaku";
    	tvalid = false;
    }
    else{
    document.getElementById('tamerr').innerHTML = "";
    tvalid = true;
     }  




    if (chuno==null||chuno=="") {
    	document.getElementById('cherr').innerHTML = "*Please select chuno...";
    	chvalid = false;
    }
    else{
    document.getElementById('cherr').innerHTML = "";
    chvalid = true;
     }  




    if (faki==null||faki=="") {
    	document.getElementById('faerr').innerHTML = "*Please select type of faki";
    	fvalid = false;
    }
    else{
    document.getElementById('faerr').innerHTML = "";
    fvalid = true;
     }  




    if (quantity==null||quantity=="") {
    	document.getElementById('querr').innerHTML = "*Please fill quantity";
    	qvalid = false;
    }
    else if(!(valQua.test(quantity))) {
      document.getElementById('querr').innerHTML = "please enter valid quantity";
      qvalid = false; 
    }

   else if(quantity<5) {
      document.getElementById('querr').innerHTML = "quantity should be minimum 5";
      qvalid = false; 
    }
    else{
    document.getElementById('querr').innerHTML = "";
    qvalid = true;
     }  


valid = nvalid && cvalid && avalid && tvalid && chvalid && fvalid && qvalid;

return valid;
} ;