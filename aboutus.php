<?php
    session_start();
    if(!isset($_SESSION["login_status"]) || !isset($_SESSION["logged_in"])) {
        $_SESSION["login_status"] = "LOGIN";
    } 
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/navstyle.css">
  <link rel="stylesheet" href="css/aboutusstyle.css">
</head>
<body id="about-us-page">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <img class="website-brand" id="website-logo" src="assets/website-logo.png" alt="Tundra"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    </div>
    <div>
      <a href="login.php">
        <button class="btn btn-logout" type="button"><?php echo $_SESSION["login_status"]; ?></button>
      </a>
    </div>
  </nav>

  <div>
    <div class="about-section">
      <h1>OUR TEAM</h1>
    </div>

    <div id="headline-content">
      <p>
        Established in 2022, Tundra is a  video game digital distribution service. Tundra gives users around the world access to well-known and captivating PC online games that it gathers, and localizes. It promotes games as a platform for social interaction and entertainment for its communities.
        Founded by Kenneth Acerado, Caryll Carino, Rainmier Darang, Jhad Domingo and led by Leader Aloysius Butac, Tundra is headquartered in CT 303. Tundra also provides  an end-to-end digital ecosystem for developers and content producers to create, market, and run games and other digital products.
      </p>
    </div>
  </div>


  <div class="text-center mx-lg-2 px-0">
    <!-- ROW -->
    <div class="row mx-auto">
      <!-- CELL -->
      <div class="col-sm-4 px-0">
        <div class="card">
          <img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.15752-9/316798288_1505806146591872_8265156950246990500_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHC7vbnWUedO78fW1Je7ndaGFGN3XYwP4QYUY3ddjA_hLryCdRKnYzZcaOlDpxzczKdbDInkvRgjz1dbU6hfftf&_nc_ohc=wV9436v-bjsAX_ShGlx&_nc_ht=scontent.fmnl8-1.fna&oh=03_AdRabBeY1lTAgguYSulfnPQxZQWwubIk4YjLmGXOJTCoaw&oe=63B1A786" alt="kenneth">
          <div class="card-info">
            <h2>Jhon Kenneth Acerado</h2>
            <p class="title">Lead Designer</p>
            <p>jhon.kenneth.acerado@adamson.edu.ph</p>
            <p>09998799373</p>
          </div>
        </div>
      </div>
      <!-- CELL -->
      <div class="col-sm-4 px-0">
        <div class="card">
          <img src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t1.15752-9/317607652_3384424448460845_1249525736481939168_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFF6VJvR55ieWHHU8oUqyjqVxp4e4wpNrhXGnh7jCk2uFmQJfQe4qvIQ0nxxddKzA4LmKeEdtlwHGDxfACHWp6W&_nc_ohc=RhAO2dlOtc8AX-AqxmU&_nc_ht=scontent.fmnl8-3.fna&oh=03_AdT4ZEUfIdERWdj6_SU-uhOvepSnNx_ldy7FWB3PIvy16A&oe=63B1A93A" alt="Aloysius">
          
          <div class="card-info">
            <h2>Aloysius Atheos L. Butac</h2>
            <p class="title">Programmer</p>
            <p>aloysius.atheos.butac@adamson.edu.ph</p>
            <p>09693497979</p>
          </div>
        </div>
      </div>
      <!-- CELL -->
      <div class="col-sm-4 px-0">
        <div class="card">
          <img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.15752-9/316056476_493877395889935_2747853612077415336_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeH3w9mAqaWNZQu5ZNRJxVEeHcctNb_cT5Idxy01v9xPko2pWup7t4zkreVgTYiZBuwJ8R5doNu87_MyQQR7hoT-&_nc_ohc=ufolVPnsGG8AX9JJjQW&tn=fYL4blRZoHotfyCB&_nc_ht=scontent.fmnl8-1.fna&oh=03_AdQEY3LZp8Jxoxt9ZuE7W4OSxGj8jXgaKwXRJPkvYQlZuw&oe=63B18F4D" alt="jhad">
          <div class="card-info">
            <h2>Caryll Franz M. Carino</h2>
            <p class="title">Programmer</p>
            <p>caryll.franz.carino@adamson.edu.ph</p>
            <p>09687056320</p>
          </div>
        </div>
      </div>
      </div>

      <!-- ROW -->
      <div class="row mx-auto justify-content-center">
        <!-- CELL -->
        <div class="col-sm-4 px-0">
          <div class="card">
            <img src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t1.15752-9/317131337_6797363140280978_7402222248698183711_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFnu-hD9bQpYoGOxb7f9Rb_iJreyRGx_ZOImt7JEbH9kwdS3R-956shwohyvIu1LI597Ql6T7VMFqA8cfhIecgJ&_nc_ohc=vwP0vU7l0aEAX_3PNTB&_nc_ht=scontent.fmnl8-3.fna&oh=03_AdQP4lPNdHvKoXEpKEdWB6WiishUgQDuGYA8rCo7Q82RlQ&oe=63B18751" alt="Jhad">
            <div class="card-info">
              <h2>Jhad Aldrich Domingo</h2>
              <p class="title">Programmer</p>
              <p>jhad.aldrich.domingo@adamson.edu.ph</p>           
            </div>
          </div> 
        </div>
        <!-- CELL -->
        <div class="col-sm-4 px-0">
          <div class="card">
            <img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.15752-9/312700091_693134855515387_1603006125652346083_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHwbe01haWhYIrPkaoPxEBx1MVILVhgN-3UxUgtWGA37bQmoQxMvIhMA1OKnTsNXHvTBhtImDl0I8FaAMcpYMx9&_nc_ohc=wC48mQx306YAX97J0U7&_nc_ht=scontent.fmnl8-1.fna&oh=03_AdTpcGQ2fWI4JAVJUmd6PKiB96emRzsUqcnha_sG9aCnYg&oe=63B18ADE" alt="rain">
            <div class="card-info">
              <h2>Rainmer Darang</h2>
              <p class="title">Assistant Designer</p>
              <p>rainmier.darang@adamson.edu.ph</p>
              <p>0969886981699</p>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
