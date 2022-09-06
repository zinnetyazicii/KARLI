	
	var url= "http://" + location.hostname;
	var path= window.location.pathname;
	if(path=='/adddevice'){
		RunAfterjQ();
	}

	function linkkarli(x){
		var purl = url + "/view/" + x + ".php";
		
		$.ajax({
			//type: "POST",
			//data: {'data' : x},	
			url: purl,
			success:function(result){
				$("#maincont").html(result);
			},
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
		});
	};
    //login
	    
	function blinker(){
		$('#blinking').fadeOut("slow");
		$('#blinking').fadeIn("slow");
	}
	setInterval(blinker, 1000);
	
	
		
	function modal(durum,metin){
		$('.mymodal').show();
		$('.mymodelhead').html(durum);
		$('.mymodelcontent').html(metin);
	
		
	};
	 
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 86){
		  $("#banner").addClass("shrink");
		}
		else
		{
			$("#banner").removeClass("shrink");
		}
	});
		function topFunction() {
		  $('html, body').animate({scrollTop:0}, 'slow');
		}
		
	//lisans kaydet
	function sifreekle(){
			var site= document.getElementsByName("site")[0].value;
			var tur= document.getElementsByName("tur")[0].value;
			var kullanici_adi= document.getElementsByName("kullanici_adi")[0].value;
			var pass= document.getElementsByName("pass")[0].value;
			var acıklama= document.getElementsByName("acıklama")[0].value;
			if(tur.trim()=='' || kullanici_adi.trim()=='' || pass.trim()==''){
				$("#modalkapatbtn").show();
				modal('Hata','Tüm alanları doldurun')
		
			}else{
				$("#addPasswordForm").submit();
			
			}
	
	}
		//sifre kaydet
	function lisansekle(){
			var tur= document.getElementsByName("tur")[0].value;
			var lisans_suresi= document.getElementsByName("lisans_suresi")[0].value;
			var lisans_kod= document.getElementsByName("lisans_kod")[0].value;
			var acıklama= document.getElementsByName("acıklama")[0].value;
			if(tur.trim()=='' || lisans_suresi.trim()=='' || lisans_kod.trim()=='' || acıklama.trim()==''){
				$("#modalkapatbtn").show();
				modal('Hata','Tüm alanları doldurun')
		
			}else{
				$("#addLicenceForm").submit();
			
			}
	
	}
	//modalkapat butonu click fonksiyonu
	$("#modalkapatbtn").click(function(){
			$(".mymodal").hide();
		});
	
	//lisans sil
	function deleteLicence(id){
			modal('Uyarı!','Lisans silinsinmi ?');
			$('#modalsilbtn').show();
			
			$("#modalsilbtn").click(function(){				
				$.ajax({
			type: "POST",
			data: {'data' : id},
			url: url+'/act/deleteLicence.php',
			success:function(result){
				$(".action").html(result);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
			});
				
			});
			
		};
		
	//şifre sil
	function deletePassword(id){
			modal('Uyarı!','Şifre silinsinmi ?');
			$('#modalsilbtn').show();
			
			$("#modalsilbtn").click(function(){				
				$.ajax({
			type: "POST",
			data: {'data' : id},
			url: url+'/act/deletePassword.php',
			success:function(result){
				$(".action").html(result);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
			});
				
			});
			
		};