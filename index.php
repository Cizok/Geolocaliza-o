<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <title>Geolocalização</title>
    <link rel="icon" type="" href="png-transparent-letter-case-letter-t-alphabet-times-new-roman-angle-text-rectangle.png">
</head>
 
<body>
   
  <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" style="color: white" href="#">Mapa</a>
          <button class="navbar-toggler" type="button" style="color: grey" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Mapa</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                </li>
              </form>
            </div>
          </div>
        </div>
      </nav>

      <div id="mapid"></div>
     <button onclick="botao()" class="button_slide slide_right">Veja sua Localização</button>

     
    <script>
         var map = L.map('mapid').setView([51.5, -0.09 ], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

        function botao (){

          function success (position){
            console.log(position)
            
            map.setView([position.coords.latitude, position.coords.longitude], 20);
 
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
 
            L.marker([position.coords.latitude, position.coords.longitude]).addTo(map).bindPopup(`Latitude: ${position.coords.latitude} <br> Longitude: ${position.coords.longitude}`).openPopup();
            
            alert(`Latitude: ${position.coords.latitude} |  Longitude: ${position.coords.longitude}`);

          }
 
        function error (){
            console.log("Não pegou a loc")
        }
 
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, error);
           
        } else {
            console.log("Erro. Navegador não suporta geoloc");
        }
        }
        </script>
</body>
</html>