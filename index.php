<!DOCTYPE html>
<html lang="it" data-bs-theme=dark>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <div id="app" style="background-color: #1d2d3c;">

        <div class="container-fluid px-0">
            <nav class="d-flex align-items-center px-5 py-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
            </nav>
        </div>

        <div id="disc-box" class="container py-5">
            <div class="row row-cols-sm-2 row-cols-lg-3 row-gap-4">
                <div class="col" v-for="disc in discs">
                    <div class="card">
                        <img :src="disc.poster" class="card-img-top p-5" alt="Cover">
                        <div class="card-body px-4 pt-0 pb-5 text-center ">
                            <h4 class="card-title"><strong>{{ disc.title }}</strong></h4>
                            <h5 class="card-text">{{ disc.author }}</h5>
                            <h4 class="card-text"><strong>{{ disc.year }}</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>