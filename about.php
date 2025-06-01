<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,700;1,400&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="app.css">

  <title>Prediksi Kebakaran</title>
</head>

<body>
  <?php
  $tittle = 'about';
  include "./template/navbar.php";

  ?>

  <div class="container">
    <div class="row justify-content-center my-4">
      <div class="col-md-8 rounded p-3 mt-4">
         <div class="my-4">
        <h4 class="fw-bold">Suhu (°C)</h4>
        <p class="text-secondary">Menunjukkan suhu udara di suatu daerah. Semakin tinggi nilainya, semakin panas daerah tersebut. Dalam program ini digunakan satuan Celsius (°C).</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Kelembapan (%)</h4>
        <p class="text-secondary">Menggambarkan seberapa banyak kandungan uap air di udara. Nilai ideal RH adalah 50–55%, yang berarti udara mengandung setengah dari kapasitas maksimum uap air yang bisa ditampung.</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Angin (km/jam)</h4>
        <p class="text-secondary">Kecepatan angin atau aliran udara dari daerah bertekanan tinggi ke rendah. Biasanya berkisar antara 5–30 km/jam.</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Hujan (mm/m<sup>2</sup>)</h4>
        <p class="text-secondary">Mengukur tinggi air hujan yang terkumpul di suatu area. Dalam program ini digunakan satuan milimeter per meter persegi (mm/m²).</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Fire Fuel Moisture Code (FFMC)</h4>
        <p class="text-secondary">Menunjukkan seberapa mudah api bisa menyala pada lapisan permukaan tanah yang kering.</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Duff Moisture Code (DMC)</h4>
        <p class="text-secondary">Menunjukkan kelembaban rata-rata tanah organik yang longgar dan tidak padat.</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Drought Code (DC)</h4>
        <p class="text-secondary">Mengukur potensi kemudahan kebakaran akibat kondisi kekeringan pada lapisan bawah tanah dan bahan kayu.</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Initial Spread Index (ISI)</h4>
        <p class="text-secondary">Nilai angka yang menunjukkan seberapa cepat api dapat menyebar saat terjadi kebakaran.</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Build Up Index (BUI)</h4>
        <p class="text-secondary">Angka yang menggambarkan total bahan bakar (seperti daun kering dan ranting) yang tersedia untuk terbakar.</p>
      </div>

      <div class="my-4">
        <h4 class="fw-bold">Fire Weather Index (FWI)</h4>
        <p class="text-secondary">Menunjukkan potensi besarnya kebakaran jika api muncul, berdasarkan kombinasi semua faktor cuaca di atas.</p>
      </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>
</body>

</html>