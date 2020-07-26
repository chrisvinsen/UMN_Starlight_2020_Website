function nextMember() {
    if ($(".formfull").valid()) {
        $(".previous").removeClass("disable");
        $(".previous").css("color", "blue");
        $("#member" + index).css("display", "none");
        index++;
        if (index == $("#membersvalueinput").val()) {
            $(".next").addClass("disable");
            $(".next").css("color", "white");
            $("#finishbtn").removeClass("hideBtn");
        }
        $("#membernumber").text("Member " + index);
        $("#member" + index).css("display", "block");
    } else {
        if ($("#studentid" + index).get(0).files.length === 0) {
            $("#studentid" + index + "label").css("border-color", "#dc3545");
            $("#studentid" + index + "label").css("color", "#b10000");
        }
    }
}
function prevMember() {
    $("#finishbtn").addClass("hideBtn");
    $(".next").removeClass("disable");
    $(".next").css("color", "blue");
    $("#member" + index).css("display", "none");
    index--;
    if (index == 1) {
        $(".previous").addClass("disable");
        $(".previous").css("color", "white");
    }
    $("#membernumber").text("Member " + index);
    $("#member" + index).css("display", "block");
}
function checkFile(input) {
    var filename = $(input).val().split("\\").pop();
    var result = filename.slice(0, 20) + (filename.length > 20 ? "..." : "");
    $("#" + input.id + "label").text(result);
    $("#" + input.id + "label").css("border-color", "#ced4da");
    $("#" + input.id + "label").css("color", "#495057");
}
function donwloadCheck() {
    if ($("#validaterules").is(":checked")) {
        $("#nextbtn").removeClass("hideBtn");
        $("#downloadbtn").addClass("hideBtn");
        $("#finishbtn").removeClass("hideBtn");
        $(".linav").removeClass("active");
        $("#li-sologroupcheck").addClass("active");
        $("#a-sologroupcheck").removeClass("disable");

    }
}
function nextcheck() {
    $("#finishbtn").removeClass("hideBtn");
    if ($("#validation").hasClass("active")) {
        if ($("#validaterules").is(":checked")) {
            $(".linav").removeClass("active");
            $("#li-sologroupcheck").addClass("active");
            $("#a-sologroupcheck").removeClass("disable");
        }
    }
    if ($("#sologroupcheck").hasClass("active")) {
        $(".linav").removeClass("active");
        $("#li-formgeneral").addClass("active");
        $("#a-formgeneral").removeClass("disable");
        if ($("#solocheck").is(":checked")) {
            $("#membersvalue").css("display", "none");
            // $("#membersvalueinput").val(1);
        } else {
            $("#membersvalue").css("display", "block");
            // $("#membersvalueinput").val(5);
        }
    }
    if ($("#formgeneral").hasClass("active")) {
        if ($("#payment").get(0).files.length === 0) {
            $("#paymentlabel").css("border-color", "#dc3545");
            $("#paymentlabel").css("color", "#b10000");
        }
        if ($(".formfull").valid()) {
            $(".linav").removeClass("active");
            $("#li-formindividual").addClass("active");
            $("#a-formindividual").removeClass("disable");
            if ($("#solocheck").is(":checked")) {
                $("#groupform").css("display", "none");
                $("#soloform").css("display", "block");
            } else {
                $(".next").removeClass("disable");
                $(".next").css("color", "blue");
                $("#member" + index).css("display", "none");
                index = 1;
                $(".previous").addClass("disable");
                $(".previous").css("color", "white");
                $("#membernumber").text("Member " + index);
                $("#member1").css("display", "block");
                $("#soloform").css("display", "none");
                $("#groupform").css("display", "block");
                $("#membernumber").css("display", "inline-block");
                $(".previous").css("display", "inline-block");
                $(".next").css("display", "inline-block");
                $("#finishbtn").addClass("hideBtn");
            }
        }
    }
}
function prevcheck() {
    $("#finishbtn").removeClass("hideBtn");
    $(".linav").removeClass("active");
    if ($("#formgeneral").hasClass("active")) {
        $("#li-sologroupcheck").addClass("active");
    }
    if ($("#formindividual").hasClass("active")) {
        $("#li-formgeneral").addClass("active");
    }
    if ($("#validation").hasClass("active")) {
        $("#li-formindividual").addClass("active");
    }
}
function finishcheck(){
    if ($("#solocheck").is(":checked")) {
        if ($("#studentid0").get(0).files.length === 0) {
            $("#studentid0label").css("border-color", "#dc3545");
            $("#studentid0label").css("color", "#b10000");
        }
    } else {
        if (
            $("#studentid" + $("#membersvalueinput").val()).get(0).files
                .length === 0
        ) {
            $("#studentid" + $("#membersvalueinput").val() + "label").css(
                "border-color",
                "#dc3545"
            );
            $("#studentid" + $("#membersvalueinput").val() + "label").css(
                "color",
                "#b10000"
            );
        }
    }
}
function setsologroupcheck() {
    $(".linav").removeClass("active");
    $("#li-sologroupcheck").addClass("active");
}
function setformgeneral() {
    $(".linav").removeClass("active");
    $("#li-formgeneral").addClass("active");
    $("#a-formgeneral").removeClass("disable");
    if ($("#solocheck").is(":checked")) {
        $("#membersvalue").css("display", "none");
    } else {
        $("#membersvalue").css("display", "block");
    }
}
function setformindividual() {
    $("#finishbtn").removeClass("hideBtn");
    if ($("#payment").get(0).files.length === 0) {
        $("#paymentlabel").css("border-color", "#dc3545");
        $("#paymentlabel").css("color", "#b10000");
    }
    if ($(".formfull").valid()) {
        $(".linav").removeClass("active");
        $("#li-formindividual").addClass("active");
        $("#a-formindividual").removeClass("disable");
        if ($("#solocheck").is(":checked")) {
            $("#groupform").css("display", "none");
            $("#soloform").css("display", "block");
        } else {
            $(".next").removeClass("disable");
            $(".next").css("color", "blue");
            $("#member" + index).css("display", "none");
            index = 1;
            $(".previous").addClass("disable");
            $(".previous").css("color", "white");
            $("#membernumber").text("Member " + index);
            $("#member1").css("display", "block");
            $("#soloform").css("display", "none");
            $("#groupform").css("display", "block");
            $("#membernumber").css("display", "inline-block");
            $(".previous").css("display", "inline-block");
            $(".next").css("display", "inline-block");
            $("#finishbtn").addClass("hideBtn");
        }
    }
}
function setvalidation() {
    $(".linav").removeClass("active");
    $("#li-validation").addClass("active");
}
function solo() {
    // $("#a-validation").addClass("disable");
    $("#a-formgeneral").addClass("disable");
    $("#a-formindividual").addClass("disable");
    // $("#circle-validation").removeClass("checked");
    $("#circle-formgeneral").removeClass("checked");
    $("#circle-formindividual").removeClass("checked");

    if (!$("#groupchoice").hasClass("active")) {
        $("#groupchoice").addClass("active");
        $("#groupcheck").attr("checked", true);
    } else {
        $("#groupchoice").removeClass("active");
        $("#groupcheck").removeAttr("checked");
    }
}
function group() {
    // $("#a-validation").addClass("disable");
    $("#a-formgeneral").addClass("disable");
    $("#a-formindividual").addClass("disable");
    // $("#circle-validation").removeClass("checked");
    $("#circle-formgeneral").removeClass("checked");
    $("#circle-formindividual").removeClass("checked");

    if (!$("#solochoice").hasClass("active")) {
        $("#solochoice").addClass("active");
        $("#solocheck").attr("checked", true);
    } else {
        $("#solochoice").removeClass("active");
        $("#solocheck").removeAttr("checked");
    }
}
function changeMembers() {
    // $("#a-validation").addClass("disable");
    $("#a-formindividual").addClass("disable");
    // $("#circle-validation").removeClass("checked");
    $("#circle-formindividual").removeClass("checked");
}
(function ($) {
    $.fn.usPhoneFormat = function (options) {
        var params = $.extend(
            {
                format: "xxx-xxx-xxxx",
                international: false,
            },
            options
        );

        if (params.format === "xxx-xxx-xxxx") {
            $(this).bind("paste", function (e) {
                e.preventDefault();
                var inputValue = e.originalEvent.clipboardData.getData("Text");
                if (!$.isNumeric(inputValue)) {
                    return false;
                } else {
                    inputValue = String(
                        inputValue.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3")
                    );
                    $(this).val(inputValue);
                    $(this).val("");
                    inputValue = inputValue.substring(0, 12);
                    $(this).val(inputValue);
                }
            });
            $(this).on("keypress", function (e) {
                if (
                    e.which != 8 &&
                    e.which != 0 &&
                    (e.which < 48 || e.which > 57)
                ) {
                    return false;
                }
                var curchr = this.value.length;
                var curval = $(this).val();
                if (curchr == 3) {
                    $(this).val(curval + "-");
                } else if (curchr == 7) {
                    $(this).val(curval + "-");
                }
                $(this).attr("maxlength", "12");
            });
        } else if (params.format === "(xxx) xxx-xxxx") {
            $(this).on("keypress", function (e) {
                if (
                    e.which != 8 &&
                    e.which != 0 &&
                    (e.which < 48 || e.which > 57)
                ) {
                    return false;
                }
                var curchr = this.value.length;
                var curval = $(this).val();
                if (curchr == 3) {
                    $(this).val("(" + curval + ")" + " ");
                } else if (curchr == 9 || curchr == 13) {
                    $(this).val(curval + "-");
                }
                $(this).attr("maxlength", "19");
            });
            $(this).bind("paste", function (e) {
                e.preventDefault();
                var inputValue = e.originalEvent.clipboardData.getData("Text");
                if (!$.isNumeric(inputValue)) {
                    return false;
                } else {
                    inputValue = String(
                        inputValue.replace(
                            /(\d{3})(\d{3})(\d{3})(\d{3})/,
                            "($1) $2-$3-$4"
                        )
                    );
                    $(this).val(inputValue);
                    $(this).val("");
                    inputValue = inputValue.substring(0, 18);
                    $(this).val(inputValue);
                }
            });
        }
    };
})(jQuery);
$(document).ready(function () {
    $(".phone").usPhoneFormat({
        format: "(xxx) xxx-xxxx",
    });
    $("#validaterules").required = true;
});
