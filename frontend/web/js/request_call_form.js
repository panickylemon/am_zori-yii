

var name_regexp = /^[a-zA-ZА-Яа-яёЁ-]{2,32}$/i;
var phone_regexp = /^\+[0-9]{11,12}$/;


var checker = '<span class="checker">&#10004</span>';

$(document).ready(function(){

    if(typeof String.prototype.trim !== 'function') {
        String.prototype.trim = function() {
            return this.replace(/^\s+|\s+$/g, '');
        }
    }

    var validate_firstname = function (check_zero) {
        var elem = $(".firstname");
        var value = $(".firstname").val();
        $(".firstname").val(value.trim());
        var string_length = value.trim().length;
        var elem_result = $(".firstname").parent().next();
        if (check_zero) {
            if (value.trim().match(name_regexp) == null) {
                var error_text = $(".firstname_error_text").text();
                elem_result.html(error_text);
                elem.addClass("field_incorrect");
            } else {
                elem_result.html(checker);
                elem.removeClass("field_incorrect");
            }
        } else {
            if(string_length != 0) {
                if (value.trim().match(name_regexp) == null) {
                    var error_text = $(".firstname_error_text").text();
                    elem_result.html(error_text);
                    elem.addClass("field_incorrect");
                } else {
                    elem_result.html(checker);
                    elem.removeClass("field_incorrect");
                }
            }
        }
    };

    var validate_phone = function (check_zero) {
        var elem = $(".phone");
        var value = $(".phone").val();
        $(".phone").val(value.trim());
        var string_length = value.trim().length;
        var elem_result = $(".phone").parent().next();
        if (check_zero) {
            if (value.trim().match(phone_regexp) == null) {
                var error_text = $(".phone_error_text").text();
                elem_result.html(error_text);
                elem.addClass("field_incorrect");
            } else {
                elem_result.html(checker);
                elem.removeClass("field_incorrect");
            }
        } else {
            if(string_length != 0) {
                if (value.trim().match(phone_regexp) == null) {
                    var error_text = $(".phone_error_text").text();
                    elem_result.html(error_text);
                    elem.addClass("field_incorrect");
                } else {
                    elem_result.html(checker);
                    elem.removeClass("field_incorrect");
                }
            }
        }
    };



    $(".firstname").on("keyup change", function () {
        validate_firstname(true);
    });
    $(".phone").on("keyup change", function () {
        validate_phone(true);
    });

    validate_firstname(false);
    validate_phone(false);

    $("form[name=request_call_form]").submit(function () {
        var field_incorrect_count = $("form[name=request_call_form] .field_incorrect").size();
        if (field_incorrect_count == 0) {
            return true;
            //продолжение действия функции submit
        } else {

            var review_value = $(".phone").val();
            var review_string_length = review_value.trim().length;
            if (review_string_length == 0) {
                var review_elem_result = $(".phone").parent().next();
                var review_error_text = $(".phone_error_text").text();
                review_elem_result.html(review_error_text);
            }

            var firstname_value = $(".firstname").val();
            var firstname_string_length = firstname_value.trim().length;
            if (firstname_string_length == 0) {
                var firstname_elem_result = $(".firstname").parent().next();
                var firstname_error_text = $(".firstname_error_text").text();
                firstname_elem_result.html(firstname_error_text);
            }
            return false;
            //остановка выполнения функции (submit)
        }
    });

});