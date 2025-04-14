<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Imprenta 3D</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .hero {
      background-color: #0d1b2a;
      color: white;
      padding: 4rem 2rem;
      text-align: center;
    }
    .btn-gold {
      background-color: #d4af37;
      color: white;
    }
    .product-card img {
      max-height: 150px;
      object-fit: contain;
    }
    .custom-section {
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d1b2a;">
    <div class="container">
      <a class="navbar-brand" href="#">La Imprenta 3D</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
          <li class="nav-item"><a class="nav-link" href="#personalizados">Personalizados</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <h1 class="display-5">IMPRESIONES 3D</h1>
    <p>Productos en 3D para crear y personalizar</p>
    <a href="#productos" class="btn btn-gold mt-3">Ver productos</a>
  </section>

  <!-- PRODUCTOS -->
  <section id="productos" class="container my-5">
    <h2 class="mb-4">Productos</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card product-card text-center p-3">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Producto 1">
          <div class="card-body">
            <button class="btn btn-gold">Agregar</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card product-card text-center p-3">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Producto 2">
          <div class="card-body">
            <button class="btn btn-gold">Agregar</button>
          </div>
        </div>
      </div>
      <!-- Más productos aquí -->
    </div>
  </section>

  <!-- PERSONALIZADOS -->
  <section id="personalizados" class="container my-5">
    <h2 class="mb-4">Personalizados</h2>
    <div class="custom-section">
      <form>
        <div class="mb-3">
          <label for="archivoSTL" class="form-label">Subí tu archivo STL</label>
          <input class="form-control" type="file" id="archivoSTL">
        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción del proyecto</label>
          <textarea class="form-control" id="descripcion" rows="3" placeholder="Quiero un llavero con mi logo..."></textarea>
        </div>
        <button type="submit" class="btn btn-gold">Enviar</button>
      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
