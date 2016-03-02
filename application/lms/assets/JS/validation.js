$(function(){
    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight: function(element){
            $(element)
                .closest('.form-group')
                .addClass('has-error');
        },

        unhighlight: function(element){
            $(element)
                .closest('.form-group')
                .removeClass('has-error');
        },

        errorPlacement: function(error,element){
            if (element.prop('type') === 'checkbox'){
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });


    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please");

    $.validator.addMethod('strongPassword',function(value,element){
        return this.optional(element)
            || value.length >= 6
            && /\d/.test(value)
            && /[a-z]/i.test(value);
    }, 'Your password must be at least 6 characters long and contain at least one number and one character.');


    $.validator.addMethod("nowhitespace", function(value, element) {
        return this.optional(element) || /^\S+$/i.test(value);
    }, "No white space please");

    $.validator.addMethod("integer", function(value, element) {
        return this.optional(element) || /^-?\d+$/.test(value);
    }, "A Valid number please");


    $.validator.addMethod("positiveNumberr", function (value, element) {
        return this.optional(element) || /^\+?[0-9]*\.?[0-9]+$/.test(value);
        }, "Enter a positive number.");

    $.validator.addMethod("lettersNumbers", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
    }, "Id must contain only letters, numbers, or dashes.");

    $.validator.addMethod('ppositiveNumber',
        function (value) {
            return Number(value) > 0;
        }, 'Enter a positive number.');





});

