<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afia - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <!--  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
    <div>
      <section class="text-white text-center p-8">
        <h1 class="text-5xl">afia</h1>
        <p class="text-xl mt-4">For a psychologically and socially well Sudan</p>
        <img src="images/banner.jpg" alt="Afia Illustration" class="w-full mx-auto"/>
      </section>
      
      <section class="p-8">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
          <img src="images/about.jpg" alt="Afia Illustration" class="w-1/2 md:w-1/3 mx-auto"/>
          <div class="md:ml-8">
            <h1 class="text-8xl">About us</h1>
            <p class="mt-4">Afia is a non-profit institution. It works on providing mental wellness services in Sudan and conducting studies in the field of social and psychological wellness.</p>
          </div>
          <!-- <div class="w-full md:w-1/2 md:ml-8">
            <h1 class="text-9xl">About us</h1>
            <p class="mt-4 text-2xl">Afia is a non-profit institution. It works on providing mental wellness services in Sudan and conducting studies in the field of social and psychological wellness.</p>
          </div> -->
        </div>
      </section>

      <section class="p-8">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
          <div class='md:ml-8'>
          <h1 class="text-8xl">Vision</h1>
          <p class="mt-4">Creating psychological and social wellness in Sudan.</p>
          </div>
          <img src="images/vision.jpg" alt="Vision Illustration" class="w-1/2 md:w-1/3 mx-auto mt-8"/>
        </div>
      </section>

      <section class="bg-image-section text-white p-8 h-96">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold">Our work</h2>
            <ul class="mt-4 list-disc list-inside">
            <li>Providing mental health care services to individuals and communities.</li>
            <li>Raising the capabilities of mental health service providers.</li>
            <li>Raising the awareness of individuals and communities about mental health.</li>
            <li>Knowledge production in the field of mental and social health in Sudan.</li>
            </ul>
        </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Afia | <a href="mailto:info@afiacpwss.com">info@afiacpwss.com</a></p>
    </footer>
</body>
</html>