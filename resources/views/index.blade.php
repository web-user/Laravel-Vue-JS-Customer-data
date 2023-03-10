<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Project PHP</title>
</head>
<body>
    <div id="app">

        <header-componen></header-componen>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <main>
            <section class="py-5 text-center container">
            <div class="py-lg-5">
                <router-view></router-view>
            </div>
            </section>
        </main>
  
    </div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>