var ContactForm = function () {

    return {
        
        //Contact Form
        initContactForm: function () {
	        // Validation
	        $("#sky-form3").validate({
	            // Rules for form validation
	            rules:
	            {
	                name:
	                {
	                    required: true
	                },
	                email:
	                {
	                    required: true,
	                    email: true
	                },
	                message:
	                {
	                    required: true,
	                    minlength: 10
	                },
					phone:
					{
						required:true
					},
	                captcha:
	                {
	                    required: true,
	                    remote: 'assets/plugins/sky-forms-pro/skyforms/captcha/process.php'
	                }
	            },
	                                
	            // Messages for form validation
	            messages:
	            {
	                name:
	                {
	                    required: 'Por favor entre com seu nome',
	                },
	                email:
	                {
	                    required: 'Por favor entre com seu email',
	                    email: 'Por favor entre com um email válido'
	                },
	                message:
	                {
	                    required: 'Por favor digite sua mensagem'
	                },
					phone:
					{
						required: 'Por favor nos informe seu telefone',
						// digits: 'Por favor entre com um formato de telefone válido',
						// phoneUs: 'Por favor entre com um formato de telefone válido'
					},
					subject:
					{
						required: 'Nos diga por faovr qual o assunto'
					},
	                captcha:
	                {
	                    required: 'Please enter characters',
	                    remote: 'Correct captcha is required'
	                }
	            },
	                                
	            // Ajax form submition                  
	            submitHandler: function(form)
	            {
	                $(form).ajaxSubmit(
	                {
	                    beforeSend: function()
	                    {
	                        $('#sky-form3 button[type="submit"]').attr('disabled', true);
	                    },
	                    success: function(data)
	                    {
	                        $("#sky-form3").addClass('submited');
	                    }
	                });
	            },
	            
	            // Do not change code below
	            errorPlacement: function(error, element)
	            {
	                error.insertAfter(element.parent());
	            }
	        });
        }

    };
    
}();