

//<![CDATA[
$(window).load(function(){
$(document).ready(function () {
$('#contact-form').validate({
rules: {
name: {
minlength: 2,
required: true
},
email: {
required: true,
email: true
},
contact: {
minlength: 10,
maxlength: 14,
number: true,
required: true
},
message: {
minlength: 2,
required: true
}
},
highlight: function (element) {
$(element).closest('.control-group').removeClass('success').addClass('error');
},
success: function (element) {
element.text('OK!').addClass('valid')
.closest('.control-group').removeClass('error').addClass('success');
}
});
var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();
var contact = $("#contact").val();

$.post("contact-form-submission.php", {
name1: name,
email1: email,
message1: message,
contact1: contact
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "Your Query has been received, We will contact you soon.") {
$("#contact-form")[0].reset(); // To reset form fields on success.
}
});
});
});//]]>


