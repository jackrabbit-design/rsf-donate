/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($){

    $('#startdate').datepicker({
        minDate: 0,
        beforeShow: function(textbox, instance) {
            $(this).datepicker('option', 'maxDate', $('#enddate').val());
            var txtBoxOffset = $(this).offset();
            var txtBoxOffset = $(this).offset();
            var top = txtBoxOffset.top;
            var textBoxWidth = $(this).outerWidth();
            setTimeout(function () {
                instance.dpDiv.css({
                    top: top + 48 //you can adjust this value accordingly
                });
            }, 0);
        }
    });
    $('#enddate').datepicker({
        defaultDate: "+1w",
        beforeShow: function(textbox,instance) {
            $(this).datepicker('option', 'minDate', $('#startdate').val());
            if($('#startdate').val() === ''){
                $(this).datepicker('option', 'minDate', 0);

            }
            var txtBoxOffset = $(this).offset();
            var top = txtBoxOffset.top;
            var textBoxWidth = $(this).outerWidth();
            setTimeout(function () {
                instance.dpDiv.css({
                    top: top + 48 //you can adjust this value accordingly
                });
            }, 0);
        }
    });

    $('select#honor').change(function(){
        var v = $(this).val();
        var l = $('label[for=honorname] span');
        if(v == 'no'){
            $('.honor').slideUp(200).children('input').val('');
        }else{
            $('.honor').slideDown(200);
            if(v == 'honor'){
                l.text('Honor');
            }else{
                l.text('Memory');
            }
        }
    });

    $('input#recurring').change(function(){
        if($(this).is(':checked')){
            $('.recurno').slideUp(200).children('input').val('');
            $('.recuryes').slideDown(200);
        }else{
            $('.recuryes').slideUp(200).children('input').val('');
            $('.recurno').slideDown(200);
        }
    });

    $.validator.addMethod("currency", function (value, element) {
        return this.optional(element) || /^(\d{1,3}(\,\d{3})*|(\d+))(\.\d{2})?$/.test(value);
    }, "Please specify a valid amount");

    $('input[name=phone]').mask('(999) 999-9999');

    $('#donate').validate({
        submitHandler: function(form) {
            form.submit();
        },
        errorPlacement: function(error, element) {
            //error.insertAfter('label[for=frequency]')
            if($(element).parent().hasClass('select-menu')){
                var id = $(element).attr('id');
                error.insertAfter($(element).parent('.select-menu'));
            }else{
                error.insertAfter(element);
            }
        },
        rules: {
            fname: "required",
            lname: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                phoneUS: true
            },
            honorname: {
                required: {
                    depends: function(element){
                        return $('select#honor').val() != 'no';
                    }
                }
            },
            donationamt: {
                required: {
                    depends: function(element){
                        return !$('input#recurring').is(':checked');
                    }
                },
                min: 20,
                currency: true

            },
            installmentamt: {
                required: {
                    depends: function(element){
                        return $('input#recurring').is(':checked');
                    }
                },
                min: 20,
                currency: true

            },
            frequency: {
                required: {
                    depends: function(element){
                        return $('input#recurring').is(':checked');
                    }
                }
            },
            startdate: {
                required: {
                    depends: function(element){
                        return $('input#recurring').is(':checked');
                    }
                },
                dpDate: true
            },
            enddate: {
                required: {
                    depends: function(element){
                        return $('input#recurring').is(':checked');
                    }
                },
                dpDate: true
            }
        }
    })

    // PARALLAX
    $(document).scroll(function(){
        var nm = $("html").scrollTop();
        var nw = $("body").scrollTop();
        var n = (nm > nw ? nm : nw);

        $('body').css({
            'background-position' : 'center ' + n * -0.3 + 'px'
        });

        // if transform3d isn't available, use top over background-position
        //$('#element').css('top', Math.ceil(n/2) + 'px');

    });



    /* ====== Twitter API Call =============================================
        Note: Script Automatically adds <li> before and after template. Don't forget to setup Auth info in /twitter/index.php */
    /*
    $('#tweets-loading').tweet({
        modpath: '/path/to/twitter/', // only needed if twitter folder is not in root
        username: 'jackrabbits',
        count: 1,
		template: '<p>{text}</p><p class="tweetlink">{time}</p>'
	});
    */

});
