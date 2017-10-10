$(document).ready(function(){
    alert("validation for this page is called");
    /* Add Method*/
    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s\-\_]+$/i.test(value);
    }, "Hanya berupa huruf, angka, spasi, tanda hubung dan underscore"); 

    /** Validator custom message */
    jQuery.extend(jQuery.validator.messages, {
        required: "Wajib diisi",
        remote: "Please fix this field.",
        email: "Masukkan format email yang benar",
        url: "Masukkan format URL yang benar",
        number: "Masukkan hanya angka",
        digits: "Please enter only digits.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Konfirmasi password tidak sesuai",
        maxlength: jQuery.validator.format("Maksimal {0} karakter."),
        minlength: jQuery.validator.format("Minimal {0} karakter.")
    });

     $("#form-acc-setting").validate({
        rules: {
            old : {
              required: true,
              minlength: 8,
              maxlength : 30,
              alphanumeric: true
            }
            password: {
              required: true,
              minlength: 8,
              maxlength : 30,
              alphanumeric: true
            },
            confirm_password: {
              equalTo : "#password"
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
     });
});

