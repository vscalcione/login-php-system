<?php
    include('header.php');
?>

<!-- Start Registration area -->
 <section id="register">
     <div class="row m-0">
         <div class="col-lg-4 offset-lg-2">
             <div class="text-center pb-5">
                 <h1 class="login-title text-dark">Registrati</h1>
                 <p class="p-1 m-0 font-ubuntu text-black-50">Registrati e goditi le funzionalità aggiuntive </p>
                 <span class="font-ubuntu text-black-50"> Ho già effettuato la <a href="login.php">Login</a></span>
             </div>
             <div class="upload-profile-image d-flex justify-content-center pb-5">
                 <div class="text-center">
                     <div class="d-flex justify-content-center">
                         <img class="camera-icon" src="../assets/camera-solid.svg" alt="profile-photo" />
                     </div>
                     <img src="../assets/profile/beard.png" class="img rounded-circle" alt="profile" style="width:200px; height: 200px;"/>
                     <small class="form-text text-black-50">Scegli un'immagine</small>
                     <input type="file" class="form-control-file" name="profileUpload" id="upload-profile">
                 </div>
             </div>
             <div class="d-flex justify-content-center">
                 <form action="register.php" method="post" enctype="multipart/form-data" id="registration-form">
                     <!-- Nome e cognome input -->
                     <div class="form-row">
                         <div class="col">
                             <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Nome">
                         </div>
                         <div class="col">
                             <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Cognome">
                         </div>
                     </div>

                     <!-- Email input -->
                     <div class="form-row my-4">
                         <div class="col">
                             <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                         </div>
                     </div>

                     <!-- Password -->
                     <div class="form-row my-4">
                         <div class="col">
                             <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>

<?php
    include('footer.php');
?>
