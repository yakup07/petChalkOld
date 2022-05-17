<!-- header -->
<header class="container mt-3">
  <div class="row">
  <!-- deze button gaat terug naar de vorgige pagina  -->
      <div id="backBTN" class="col-3">
          <button type= "button"(click)="back()" class="btn btn-dark"><i class="bi bi-arrow-left"></i></button>
      </div>
  <!-- als je op deze button klikt verschijnen alle notificaties in een dropdown -->
      <div id="notifBTN" class="col-3">
        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-bell"></i></button>
      </div>
  <!-- dit is gwn een extra div om de buttons uit elkaar te halen  -->
      <div class="col-3">
      </div>
  <!-- als je op deze button klikt ga je terug naar de login page en word de sessie beeindigd! -->
      <div id="logoutBTN" class="col-3">
          <button type="button" (click)= "logout()" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i></button>
      </div>
  </div>
  <hr />
</header>
<br>
    <div class="row">
    	<div class="col-sm-12 d-flex justify-content-center">
    	    <img src="../../assets/images/cat.png" (click)="selectGenre(1)" class="medButton mx-4" alt="Avatar" width="100" height="100">
            <img src="../../assets/images/dog.png" (click)="selectGenre(2)" class="medButton mx-1" alt="Avatar" width="100" height="100">
    	</div>
   </div>
  
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><strong>Name</strong></div>
    <div class="col-sm-4"></div>
  </div>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="text" #name required></div>
    <div class="col-sm-4"></div>
  </div>
  <br>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><strong>Genre</strong></div>
    <div class="col-sm-4"></div>
  </div>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="text" [(ngModel)]="genreType" #genre id="genre" required></div>
    <div class="col-sm-4"></div>
  </div>
  <br>

  
  
   <div class="row">
    <div class="col-sm-4"></div>
     <div class="col-sm-4 text-center"><strong>Breed</strong></div>
     <div class="col-sm-4"></div>
  </div>

   <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="text" #breed required disable></div>
    <div class="col-sm-4"></div>
  </div>
  <br>
  
   <div class="row">
    <div class="col-sm-4"></div>
     <div class="col-sm-4 text-center"><strong>Birthday</strong></div>
     <div class="col-sm-4"></div>
  </div>
  
  
   <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="date" #date required></div>
    <div class="col-sm-4"></div>
  </div>
  <br>
  
   <div class="row">
    <div class="col-sm-4"></div>
     <div class="col-sm-4 text-center"><strong>Weight</strong></div>
     <div class="col-sm-4"></div>
  </div>
  
  
   <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="number" #weight required></div>
    <div class="col-sm-4"></div>
  </div>
  <br>
  
  
  
   <div class="row">
    <div class="col-sm-4"></div>
     <div class="col-sm-4 text-center"><strong>Size</strong></div>
     <div class="col-sm-4"></div>
  </div>
  
  
   <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="number" #size required></div>
    <div class="col-sm-4"></div>
  </div>
  <br>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><strong>Chip Number</strong></div>
    <div class="col-sm-4"></div>
  </div>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="text" #chipnumber required></div>
    <div class="col-sm-4"></div>
  </div>
  <br>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><strong>Insurance</strong></div>
    <div class="col-sm-4"></div>
  </div>

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center"><input type="text" #insurance required></div>
    <div class="col-sm-4"></div>
  </div>
  <br>

  <br>
  
    

   <div class="row">
    <div class="col-sm-12 d-flex justify-content-center">
    	    <button type="button" (click)="addAnimal(name.value,genre.value,breed.value,date.value,weight.value,size.value,chipnumber.value,insurance.value)" class="medButton mx-1">Animal Toev</button>
            <button type="button" (click)="addAnimal(name.value,genre.value,breed.value,date.value,weight.value,size.value,chipnumber.value,insurance.value)" class="medButton mx-1">Animal Toev</button>
    </div>
    
  </div>
  <br>