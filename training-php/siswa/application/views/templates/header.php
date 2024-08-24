<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $judul; ?></title>
  </head>
  <body style="background-color: #171f2e;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #394252; padding: 10px 0; font-size: 20px; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    <div class="container">
        <a class="navbar-brand text-primary" href="#" style="font-size: 25px; margin-right: 50px;">S I A K A D</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav" style="margin: 5px; font-weight: 400;">
            <a style="color: #fcfdfc; margin-right: 10px;" class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
            <a style="color: #fcfdfc;" class="nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
        </div>
        </div>
    </div>
    </nav>
