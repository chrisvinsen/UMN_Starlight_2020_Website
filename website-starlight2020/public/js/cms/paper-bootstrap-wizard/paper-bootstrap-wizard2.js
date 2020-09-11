/*! =========================================================
 *
 Paper Bootstrap Wizard - V1.0.1
*
* =========================================================
*
* Copyright 2016 Creative Tim (http://www.creative-tim.com/product/paper-bootstrap-wizard)
 *
 *                       _oo0oo_
 *                      o8888888o
 *                      88" . "88
 *                      (| -_- |)
 *                      0\  =  /0
 *                    ___/`---'\___
 *                  .' \|     |// '.
 *                 / \|||  :  |||// \
 *                / _||||| -:- |||||- \
 *               |   | \\  -  /// |   |
 *               | \_|  ''\---/''  |_/ |
 *               \  .-\__  '-'  ___/-. /
 *             ___'. .'  /--.--\  `. .'___
 *          ."" '<  `.___\_<|>_/___.' >' "".
 *         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *         \  \ `_.   \_ __\ /__ _/   .-` /  /
 *     =====`-.____`.___ \_____/___.-`___.-'=====
 *                       `=---='
 *
 *     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *
 *               Buddha Bless:  "No Bugs"
 *
 * ========================================================= */

// Paper Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;

        $(document).ready(function(){
            jQuery.validator.addMethod("optdate", function(value, element) {
                var startDate= new Date("1970-01-01");
                var endDate= new Date("2009-12-31");
                var d = new Date(value);
                return (d.getTime() <= endDate.getTime() && d.getTime() >= startDate.getTime())
            }, "Masukkan tahun yang sah."
            );
            jQuery.validator.addMethod('uniquestagename', function (value, element){
                let check = true;
                for (let i = 0; i < stagename_list.length; ++i) {
                    if(stagename_list[i].toLowerCase() === value.toLowerCase() ){
                        check = false;
                    }
                }                 
                return check;
            }, "Nama panggung sudah digunakan."
            );
            jQuery.validator.addMethod('uniqueemail', function (value, element){
                let check = true;
                for (let i = 0; i < email_list.length; ++i) {
                    if(email_list[i].toLowerCase() === value.toLowerCase() ){
                        check = false;
                    }
                }                 
                return check;
            }, "Email sudah digunakan."
            );
            /*  Activate the tooltips      */
            $('[rel="tooltip"]').tooltip();
            $.validator.messages.required = "Kamu perlu memasukkan data ini.";
            // Code for the Validator
            var $validator = $('.wizard-card form').validate({
        		    rules: {
                        payment_number: {
                            minlength: 10,
                            maxlength: 18
                        },
                        phonenumber: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber0: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber1: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber2: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber3: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber4: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber5: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber6: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber7: {
                            minlength: 13,
                            maxlength: 15
                        },
                        phonenumber8: {
                            minlength: 13,
                            maxlength: 15
                        },
                        membersvalue: {
                            min: 2,
                            max: 8
                        },
                        validaterules:{
                            required: true
                        }
                    },
                    messages: {
                        payment_number:{
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Kamu tidak boleh memasukkan lebih dari 18 nomor."
                        },
                        phonenumber: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber0: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber1: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber2: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber3: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber4: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber5: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber6: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber7: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        phonenumber8: {
                            minlength: "Kamu harus memasukkan setidaknya 10 nomor.",
                            maxlength: "Please enter no more than 14 numbers."
                        },
                        membersvalue: {
                            min: "Jumlah anggota harus lebih dari satu anggota.",
                            max: "Jumlah anggota tidak boleh lebih dari delapan anggota."
                        },
                        validaterules:{
                            required: "Kamu perlu menyetujui peraturan dan ketentuan performance Starlight."
                        }
                    },
                    errorPlacement: function(error, element) {
                        if (!$("#validaterules").is(":checked")) {
                            error.insertAfter("#cstm-label");
                        } else {
                            error.insertAfter(element);
                        }
                    }
        	});

            // Wizard Initialization
          	$('.wizard-card').bootstrapWizard({
                'tabClass': 'nav nav-pills',
                'nextSelector': '.btn-next',
                'previousSelector': '.btn-previous',

                onNext: function(tab, navigation, index) {
                	var $valid = $('.wizard-card form').valid();
                	if(!$valid) {
                		$validator.focusInvalid();
                		return false;
                	}
                },

                onInit : function(tab, navigation, index){

                  //check number of tabs and fill the entire row
                  var $total = navigation.find('li').length;
                  $width = 100/$total;

                  navigation.find('li').css('width',$width + '%');

                },

                onTabClick : function(tab, navigation, index){

                    // var $valid = $('.wizard-card form').valid();

                    // if(!$valid){
                    //     return false;
                    // } else{
                        return true;
                    // }

                },

                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;

                    var $wizard = navigation.closest('.wizard-card');

                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $($wizard).find('.btn-next').hide();
                        $($wizard).find('.btn-finish').show();
                    } else {
                        $($wizard).find('.btn-next').show();
                        $($wizard).find('.btn-finish').hide();
                    }

                    //update progress
                    var move_distance = 100 / $total;
                    move_distance = move_distance * (index) + move_distance / 2;

                    $wizard.find($('.progress-bar')).css({width: move_distance + '%'});
                    //e.relatedTarget // previous tab

                    $wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');

                }
	        });


                // Prepare the preview for profile picture
                $("#wizard-picture").change(function(){
                    readURL(this);
                });

                $('[data-toggle="wizard-radio"]').click(function(){
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('[type="radio"]').removeAttr('checked');
                    $(this).find('[type="radio"]').attr('checked','true');
                });

                $('[data-toggle="wizard-checkbox"]').click(function(){
                    if( $(this).hasClass('active')){
                        $(this).removeClass('active');
                        $(this).find('[type="checkbox"]').removeAttr('checked');
                    } else {
                        $(this).addClass('active');
                        $(this).find('[type="checkbox"]').attr('checked','true');
                    }
                });

                $('.set-full-height').css('height', 'auto');

            });



         //Function to show image before upload

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


        function debounce(func, wait, immediate) {
        	var timeout;
        	return function() {
        		var context = this, args = arguments;
        		clearTimeout(timeout);
        		timeout = setTimeout(function() {
        			timeout = null;
        			if (!immediate) func.apply(context, args);
        		}, wait);
        		if (immediate && !timeout) func.apply(context, args);
        	};
        };


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-46172202-1', 'auto');
ga('send', 'pageview');
