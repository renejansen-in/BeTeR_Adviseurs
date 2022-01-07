$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#noclou_form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                company: {
                    required: false
                },
                email: {
                    required: true,
                    email: true
                },
                number: {
                    required: true,
                    minlength: 10
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                comment: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Naam is verplicht voor dit formulier",
                    minlength: "Naam bestaat minimaal uit 2 tekens"
                },
                company: {
                },
                email: {
                    required: "Zonder email adres kunnen we je niet helpen"
                },
                number: {
                    required: "Vul hier je telefoonnummer in",
                    minlength: "Telefoonummer heeft minimaal 10 cijfers"
                },
                subject: {
                    required: "Waar gaat je vraag over?",
                    minlength: "Het onderwerp bevat minimaal 4 tekens"
                },
                comment: {
                    required: "Wat is de reden of aanleiding voor het contact?",
                    minlength: "Kun je er iets meer over zeggen?"
                }
            },

        })
    })
        
 })(jQuery)
})