$(document).ready( function(e){
    let $uploadFile = $('#register .upload-profile-image input[type="file"]');
    $uploadFile.change(function(){
        readURL(this);
    });

   $('#registration-form').submit(function(event){
       let $password = $('#password');
       let $confirm = $('#confirmPassword');
       let $error = $('#confirm_error');
       if($password.val() === $confirm.val()){
           return true;
       }else{
           $error.text("Le password devono essere uguali");
           // event.preventDefault();
       }
   })
});

function readURL(input){
   if(input.files && input.files[0]){
       let reader = new FileReader();
       reader.onload = function(e){
           $('#register .upload-profile-image .img').attr('src', e.target.result);
       }, reader.readAsDataURL(input.files[0]);
   }
};