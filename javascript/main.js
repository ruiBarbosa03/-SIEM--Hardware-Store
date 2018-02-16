var BASE_URL = 'https://gnomo.fe.up.pt/~ee12195/SIEMTrabalho3/';
$(document).ready(function() {
  initMessageClosers();
});


function initMessageClosers() {
  $('.close').click(function() {
    $(this).parent().slideUp();
  });
}
setTimeout(function() {
    $('#error_messages').slideUp('fast');
}, 5000); 

setTimeout(function() {
    $('#success_messages').slideUp('fast');
}, 5000); 

