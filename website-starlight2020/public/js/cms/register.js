$("#validaterules").change(function() {
    if(this.checked) {
        $('#finishbtn').removeClass('hideBtn');
    }
    else{
        $('#finishbtn').addClass('hideBtn');
    }
});
function nextMember(){
    if($(".formfull").valid()){
        $(".previous").removeClass("disable");
        $('.previous').css('color','blue');
        $('#member'+index).css('display','none');
        index++;
        if(index == $('#membersvalueinput').val()){
            $(".next").addClass("disable");
            $('.next').css('color','white');
            $('#nextbtn').removeClass('hideBtn');
        }
        $('#membernumber').text("Member " + index);
        $('#member'+index).css('display','block');
    }
    else{
        if($('#ktp' + index).get(0).files.length === 0){
            $('#ktp' + index + 'label').css('border-color','#dc3545');
            $('#ktp' + index + 'label').css('color','#EB5E28');
        }
        if($('#studentid' + index).get(0).files.length === 0){
            $('#studentid' + index + 'label').css('border-color','#dc3545');
            $('#studentid' + index + 'label').css('color','#EB5E28');
        }
    }
}
function prevMember(){
    $('#nextbtn').addClass('hideBtn');
    $(".next").removeClass("disable");
    $('.next').css('color','blue');
    $('#member'+index).css('display','none');
    index--;
    if(index == 1){
        $(".previous").addClass("disable");
        $('.previous').css('color','white');
    }
    $('#membernumber').text("Member " + index);
    $('#member'+index).css('display','block');
}
function checkFile(input){
    var filename = $(input).val().split('\\').pop();
    var result = filename.slice(0, 20) + (filename.length > 20 ? "..." : "");
    $("#" + input.id + "label").text(result);
    $("#" + input.id + "label").css('border-color','#ced4da');
    $("#" + input.id + "label").css('color','#495057');
}
function nextcheck(){
    $('#nextbtn').removeClass('hideBtn');
    if($("#sologroupcheck").hasClass("active")){
        $('.linav').removeClass('active');
        $('#li-formgeneral').addClass('active');
        $("#a-formgeneral").removeClass("disable");
        if($("#solocheck").is(':checked')){
            $('#membersvalue').css('display','none');
            $("#membersvalueinput").val(1);
        }
        else{
            $('#membersvalue').css('display','block');
            // $("#membersvalueinput").val(5);
        }
    }
    if($("#formgeneral").hasClass("active")){
        if($('#payment').get(0).files.length === 0){
            $('#paymentlabel').css('border-color','#dc3545');
            $('#paymentlabel').css('color','#EB5E28');
        }
        if($(".formfull").valid()){
            $('.linav').removeClass('active');
            $('#li-formindividual').addClass('active');
            $("#a-formindividual").removeClass("disable");
            if($("#solocheck").is(':checked')){
                $('#groupform').css('display','none');
                $('#soloform').css('display','block');
            }
            else{
                $(".next").removeClass("disable");
                $('.next').css('color','blue');
                $('#member'+index).css('display','none');
                index = 1;
                $(".previous").addClass("disable");
                $('.previous').css('color','white');
                $('#membernumber').text("Member " + index);
                $('#member1').css('display','block');
                $('#soloform').css('display','none');
                $('#groupform').css('display','block');
                $('#membernumber').css('display','inline-block');
                $('.previous').css('display','inline-block');
                $('.next').css('display','inline-block');
                $('#nextbtn').addClass('hideBtn');
            }
        }
    }
    if($("#formindividual").hasClass("active")){
        if($("#solocheck").is(':checked')){
            if($('#ktp0').get(0).files.length === 0){
                $('#ktp0label').css('border-color','#dc3545');
                $('#ktp0label').css('color','#EB5E28');
            }
            if($('#studentid0').get(0).files.length === 0){
                $('#studentid0label').css('border-color','#dc3545');
                $('#studentid0label').css('color','#EB5E28');
            }
        }
        else{
            if($('#ktp' + $('#membersvalueinput').val()).get(0).files.length === 0){
                $('#ktp' + $('#membersvalueinput').val() + 'label').css('border-color','#dc3545');
                $('#ktp' + $('#membersvalueinput').val() + 'label').css('color','#EB5E28');
            }
            if($('#studentid' + $('#membersvalueinput').val()).get(0).files.length === 0){
                $('#studentid' + $('#membersvalueinput').val() + 'label').css('border-color','#dc3545');
                $('#studentid' + $('#membersvalueinput').val() + 'label').css('color','#EB5E28');
            }
        } 
        if($(".formfull").valid()){
            $('.linav').removeClass('active');
            $('#li-validation').addClass('active');
            $("#a-validation").removeClass("disable");
        }
    }
}
function prevcheck(){
    $('.linav').removeClass('active');
    $('#nextbtn').removeClass('hideBtn');
    if($("#formgeneral").hasClass("active")){
        $('#li-sologroupcheck').addClass('active');
    }
    if($("#formindividual").hasClass("active")){
        $('#li-formgeneral').addClass('active');
    }
    if($("#validation").hasClass("active")){
        $('#li-formindividual').addClass('active');
    }
}
function setsologroupcheck(){
    if($(".formfull").valid()){
        $('#nextbtn').removeClass('hideBtn');
        $('.linav').removeClass('active');
        $('#li-sologroupcheck').addClass('active');
    }
    else{
        if($("#formgeneral").hasClass("active")){
            if($('#payment').get(0).files.length === 0){
                $('#paymentlabel').css('border-color','#dc3545');
                $('#paymentlabel').css('color','#EB5E28');
            }
        }
        if($("#formindividual").hasClass("active")){
            if($("#solocheck").is(':checked')){
                if($('#ktp0').get(0).files.length === 0){
                    $('#ktp0label').css('border-color','#dc3545');
                    $('#ktp0label').css('color','#EB5E28');
                }
                if($('#studentid0').get(0).files.length === 0){
                    $('#studentid0label').css('border-color','#dc3545');
                    $('#studentid0label').css('color','#EB5E28');
                }
            }
            else{
                if($('#ktp' + index).get(0).files.length === 0){
                    $('#ktp' + index + 'label').css('border-color','#dc3545');
                    $('#ktp' + index + 'label').css('color','#EB5E28');
                }
                if($('#studentid' + index).get(0).files.length === 0){
                    $('#studentid' + index + 'label').css('border-color','#dc3545');
                    $('#studentid' + index + 'label').css('color','#EB5E28');
                }
            } 
        }
    }
}
function setformgeneral(){
    if($(".formfull").valid()){
        $('#nextbtn').removeClass('hideBtn');
        $('.linav').removeClass('active');
        $('#li-formgeneral').addClass('active');
        $('#nextbtn').removeClass('hideBtn');
        $("#a-formgeneral").removeClass("disable");
        if($("#solocheck").is(':checked')){
            $('#membersvalue').css('display','none');
            $("#membersvalueinput").val(1);
        }
        else{
            $('#membersvalue').css('display','block');
            // $("#membersvalueinput").val(5);
        }
    }
    else{
        if($("#formindividual").hasClass("active")){
            if($("#solocheck").is(':checked')){
                if($('#ktp0').get(0).files.length === 0){
                    $('#ktp0label').css('border-color','#dc3545');
                    $('#ktp0label').css('color','#EB5E28');
                }
                if($('#studentid0').get(0).files.length === 0){
                    $('#studentid0label').css('border-color','#dc3545');
                    $('#studentid0label').css('color','#EB5E28');
                }
            }
            else{
                if($('#ktp' + index).get(0).files.length === 0){
                    $('#ktp' + index + 'label').css('border-color','#dc3545');
                    $('#ktp' + index + 'label').css('color','#EB5E28');
                }
                if($('#studentid' + index).get(0).files.length === 0){
                    $('#studentid' + index + 'label').css('border-color','#dc3545');
                    $('#studentid' + index + 'label').css('color','#EB5E28');
                }
            } 
        }
    }
}
function setformindividual(){
    if($(".formfull").valid()){
        $('#nextbtn').removeClass('hideBtn');
        $('.linav').removeClass('active');
        $('#li-formindividual').addClass('active');
        $('#nextbtn').removeClass('hideBtn');
        if($("#solocheck").is(':checked')){
            $('#groupform').css('display','none');
            $('#soloform').css('display','block');
        }
        else{
            $(".next").removeClass("disable");
            $('.next').css('color','blue');
            $('#member'+index).css('display','none');
            index = 1;
            $(".previous").addClass("disable");
            $('.previous').css('color','white');
            $('#membernumber').text("Member " + index);
            $('#member1').css('display','block');
            $('#soloform').css('display','none');
            $('#groupform').css('display','block');
            $('#membernumber').css('display','inline-block');
            $('.previous').css('display','inline-block');
            $('.next').css('display','inline-block');
            $('#nextbtn').addClass('hideBtn');
        }
    }
    else{
        if($("#formgeneral").hasClass("active")){
            if($('#payment').get(0).files.length === 0){
                $('#paymentlabel').css('border-color','#dc3545');
                $('#paymentlabel').css('color','#EB5E28');
            }
        }
    }
}
function setvalidation(){
    if($(".formfull").valid()){
        $('.linav').removeClass('active');
        $('#li-validation').addClass('active');
    }
    else{
        if($("#formgeneral").hasClass("active")){
            if($('#payment').get(0).files.length === 0){
                $('#paymentlabel').css('border-color','#dc3545');
                $('#paymentlabel').css('color','#EB5E28');
            }
        }
        if($("#formindividual").hasClass("active")){
            if($("#solocheck").is(':checked')){
                if($('#ktp0').get(0).files.length === 0){
                    $('#ktp0label').css('border-color','#dc3545');
                    $('#ktp0label').css('color','#EB5E28');
                }
                if($('#studentid0').get(0).files.length === 0){
                    $('#studentid0label').css('border-color','#dc3545');
                    $('#studentid0label').css('color','#EB5E28');
                }
            }
            else{
                if($('#ktp' + index).get(0).files.length === 0){
                    $('#ktp' + index + 'label').css('border-color','#dc3545');
                    $('#ktp' + index + 'label').css('color','#EB5E28');
                }
                if($('#studentid' + index).get(0).files.length === 0){
                    $('#studentid' + index + 'label').css('border-color','#dc3545');
                    $('#studentid' + index + 'label').css('color','#EB5E28');
                }
            } 
        }
    }
}
function solo(){
    $("#a-validation").addClass("disable");
    $("#a-formgeneral").addClass("disable");
    $("#a-formindividual").addClass("disable");
    $("#circle-validation").removeClass("checked");
    $("#circle-formgeneral").removeClass("checked");
    $("#circle-formindividual").removeClass("checked");

    if(!$("#groupchoice").hasClass("active")){
        $("#groupchoice").addClass("active");
        $("#groupcheck").attr('checked',true);
    }
    else{
        $("#groupchoice").removeClass("active");
        $("#groupcheck").removeAttr('checked');
    }
}
function group(){
    $("#a-validation").addClass("disable");
    $("#a-formgeneral").addClass("disable");
    $("#a-formindividual").addClass("disable");
    $("#circle-validation").removeClass("checked");
    $("#circle-formgeneral").removeClass("checked");
    $("#circle-formindividual").removeClass("checked");


    if(!$("#solochoice").hasClass("active")){
        $("#solochoice").addClass("active");
        $("#solocheck").attr('checked',true);
    }
    else{
        $("#solochoice").removeClass("active");
        $("#solocheck").removeAttr('checked');
    }
}
function changeMembers(){
    $("#a-validation").addClass("disable");
    $("#a-formindividual").addClass("disable");
    $("#circle-validation").removeClass("checked");
    $("#circle-formindividual").removeClass("checked");
}