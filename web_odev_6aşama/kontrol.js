

    function formKontrol()
    {
        adi= document.getElementById("name").value;
        sadi= document.getElementById("soyad").value;
        msg= document.getElementById("mesaj").value;
        
	var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
 
      if (adi==""){
           alert(" Lütfen ad alanını boş bırakmayınız");
        }          
       if (sadi==""){
        alert(" Lütfen soyad alanını boş bırakmayınız");
        }  
        if (msg==""){
        alert(" Lütfen mesaj alanını boş bırakmayınız");
        }  
        
    
  }
