$( document ).ready(function() {/*
		$('input[type=tel]').mask("+38 (999) 999-99-99");
		        $('input[type=tel]').keyup
				(function() {
		            var log = $(this).val();

					var log = log.match(/\d/g);
					var log = log.length;
					if(log == 11)
						$(this).css("color","#1b8ad8");
					else
						$(this).css("color","#1b8ad8");
		        });
	});*//*
		function getClass (Class){
				if(!document.getElementsByClassName) {
					return document.querySelectorAll('.'+Class);
					}
					else return document.getElementsByClassName(Class);
			}			

			function checkSubmitForm(n){

			function clearString(){
				this.value = '';
				this.style.border = borderStyle;
				this.style.color = formColor;
				// for(var i=0;i<clientWarning.length;i++){
				// 	clientWarning[i].style.opacity = 0;
				// }
			}					
			function submitForm() {

			    var http = new XMLHttpRequest();
			    http.open("POST", "/wp-content/themes/4U/flib/form.php", true);
			    // http.open("POST", "/sitemap-index.xml", true);
			    http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			    var params = "firstname="+clientName.value+"&tel="+clientContact.value+"&info="+(clientInfo !=undefined ? clientInfo.value.replace(/\r\n|\r|\n/g,'<br />') : '');

       			http.send(params);

			    http.onreadystatechange = function(){

			    	if (http.status==200 && http.readyState==4){

				    	button.textContent = 'отправлено';
				    	$('.fancybox-close').click();
                        dataLayer.push({'event': 'EVENT_NAME'});
                        
                        
			    	}
			    }
			}	
			var clientName = getClass('clientName'+n)[0],
				clientContact = getClass('clientTel'+n)[0],
				clientMail = getClass('clientMail'+n)[0],
				clientInfo = getClass('clientInfo'+n)[0],
				button = getClass('button_send'+n)[0],
				borderStyle = getComputedStyle(clientName)['border'],
				formColor = getComputedStyle(clientName)['color'];

				if(clientName.value=='' || clientName.value=='Ваше имя' || clientName.value=='Введите имя'){
					clientName.style.border = '1px solid darkred';
					clientName.style.color = 'darkred';
					clientName.value = 'Введите имя';
					
					clientName.onfocus = clearString;
					
					
				}
				else if(clientContact.value==undefined || clientContact.value=='' || clientContact.value=='Телефон или E-mail' ){
					clientContact.style.border = '1px solid darkred';
					clientContact.style.color = 'darkred';
					clientContact.value = 'Введите телефон';
					clientContact.onfocus = clearString;
					
				}
				else if( $("#cfirst").is(':checked')==false )  {
                                             $(".cfirst").css('border', '1px solid red');

                				}
                				else {
                			        	$(".cfirst").css('border', 'none');
                                       submitForm();
                				}			
			*/}
);
		