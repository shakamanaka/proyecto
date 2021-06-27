<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/custom_bootstrap.css">
    
    
    
   
    <title>Algoritmos De Ordenamiento</title>
</head>
<body>
    <div class="card">
        <div class="card-body" style="margin-left: 10%; margin-right: 10%; width: 80%; ">
            <h1 style="text-align: center;">Algoritmos De Ordenamiento</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body d-flex" id="contenido" style="margin-left: 10%; margin-right: 10%; width: 80%; ">  
            <div style="margin: inherit; width: -webkit-fill-available;">
                <nav style="display: flex; align-items: center; justify-content: center;">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Burbuja</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Insertion</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Merge</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-files" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">QuickSort</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
                        <div class="d-flex align-items-center justify-content-center">
                            <button id="burbuja" onclick="iniciar(1)"  type="button"   class="btn btn-primary m-2">Iniciar  </button>
                        </div>
                        <div id="canvas">
                            <canvas id="myChart"></canvas>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="d-flex align-items-center justify-content-center">
                            <button id="insertion" onclick="iniciar(2)" type="button"   class="btn btn-primary m-2">Iniciar  </button>
                        </div>
                        <div id="canvas2">
                            <canvas id="myChart2"></canvas>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="d-flex align-items-center justify-content-center">
                            <button id="merge" onclick="iniciar(3)" type="button"   class="btn btn-primary m-2">Iniciar  </button>
                        </div>
                        <div id="canvas3">
                            <canvas id="myChart3"></canvas>
                        </div>

                        
                    </div>
                    <div class="tab-pane fade" id="nav-files" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="d-flex align-items-center justify-content-center">
                            <button id="quick" onclick="iniciar(4)" type="button"   class="btn btn-primary m-2">Iniciar  </button>
                        </div>
                        <div id="canvas4">
                            <canvas id="myChart4"></canvas>
                        </div>

                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!--Scripts jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
    
    
    
</body>
</html>