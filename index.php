<!DOCTYPE html>
<html lang="it" data-bs-theme=dark>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <div id="app">
        <div class="container py-5">
            <div class="row row-gap-4">
                <div class="col-4" v-for="disc in discs">
                    <div class="card">
                        <img :src="disc.poster" class="card-img-top" alt="Cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ disc.title }}</h5>
                            <p class="card-text">{{ disc.author }}</p>
                            <p class="card-text">{{ disc.year }}</p>
                            <p class="card-text">{{ disc.genre }}</p>
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