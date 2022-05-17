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
<!-- einde header -->

<!-- container met alles er in -->
<main class="container mt-3">
    <div class="row mt-3">
        <div class="col-1"></div>
        <!-- button om nieuwe dier aan te maken -->
        <div class="col-10">
            <button type="button"(click)="make()" class="btn btn-primary">+</button>
            <b>nieuw dier aanmaken</b>
        </div>
        <div class="col-1"></div>
    </div>
    <hr/>
    <div *ngFor="let useranimal of useranimals$" (click)="gotoAnimalProfile(useranimal.id)" class="row mt-3">
        <!--spacer div-->
        <div class="col-1"></div>
        
        <!--exclamation mark for medication-->
        <div *ngIf="useranimal.medid; then exclBlock"></div>
            <ng-template #exclBlock>
                <div class="col-1 petAlert">
                    !
                </div>
            </ng-template>

        <!--animal image, should replace with a data64 from sql at some point-->
        <div *ngIf="useranimal.animal_id == 1; then thenBlock else elseBlock" class="col-3"></div>
            <ng-template #thenBlock>
                <img src="../../assets/images/dog.png"/>
            </ng-template>
            <ng-template #elseBlock>
                <img src="../../assets/images/cat.png"/>
            </ng-template>
        
        <!--main display div-->
        <div *ngIf="useranimal.medid; then medBlock else normBlock"></div>
        <ng-template #normBlock>
            <div (click)="gotoAnimalProfile(useranimal.id)" class="col-7">
                
                <p class="petName mt-3"> useranimal.name </p>
            </div>
        </ng-template>
        <ng-template #medBlock>
            <div class="col-6">
                
                <p class="petName mt-1"> useranimal.name </p>
                
                <p class="alertInfo"> useranimal.description </p>
            </div>
        </ng-template>

        <!--spacer div-->
        <div class="col-1"></div>
        <hr/>
    </div>
</main>