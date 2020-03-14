$(document).ready(function(e){
   $('#registration-form').submit(function(event){
       let $password = $('#password');
       let $confirm = $('#confirmPassword');
       let $error = $('#confirm_error');
       if($password.val() === $confirm.val()){
           return true;
       }else{
           $error.text("Le password devono essere uguali");
           event.preventDefault();
       }
   })
});