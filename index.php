<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi</title>

  <!-- Bootstrap 5.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--  Fontawesome 6.1-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <!-- Importo Montserrat da Google Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
  <!-- Importo il foglio di stile custom -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Vue 2.6.14 -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <!-- Importo Axios per le chiamate API -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
  <?php include_once __DIR__ . '/partials/header.php'; ?>
  <?php include_once __DIR__ . '/server/data.php'; ?>
  <main id="app">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4 py-5">
        <!-- Single card che viene ciclata con v-for -->
          <div class="col" v-for="disc in discList">
            <div class="card h-100 text-center">
              <img class="card-img-top" :src="disc.poster" :alt="disc.title" />
              <div class="card-body">
                <h3 class="card-title">{{ disc.title }}</h3>
              </div>
              <div class="card-footer">
                <p class="card-text m-0">{{ disc.author }}</p>
                <p class="card-text">{{ disc.year }}</p>
              </div>
            </div>
          </div>
        <!-- /Single card che viene ciclata con v-for -->
      </div>
    </div>

  </main>
  <!-- Importo il custom JS -->
  <script src="js/script.js"></script>
</body>
</html>
