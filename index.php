<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./img/disc.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi JSON</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>


<body>
    <div id="app">
        <section class="position-relative">
            <div class="container">
                <div class="row gap-5 justify-content-center ">
                    <div class="title d-flex justify-content-center gap-3 mb-3 ">
                        <img src="./img/vinyl.png" alt="disc" class="img-fluid">
                        <h1 class="text-center mt-3 fs-sm-6">Disc List PHP</h1><img src="./img/vinyl.png" alt="disc" class="img-fluid">
                    </div>

                    <div class="card my-home-card col-12 col-md-5 col-lg-3 text-center " v-for="(album,index) in albums" @click="showInfo(index) ">
                        <img class="mb-3" :src="album.poster" alt="">
                        <p class="fw-bolder fs-5">{{album.title}}</p>
                        <p class="fw-bold">{{album.author}}</p>
                    </div>
                    <div v-if="showOverlayInfo" class="position-absolute desc-overlay">
                        <div class="card-album d-flex align-items-center justify-content-center position-relative rounded-4 flex-wrap flex-lg-nowrap ">
                            <i @click="hideInfo()" class="fa-solid fa-xmark position-absolute top-0 end-0 fs-4 p-4 "></i>
                            <div class="img-box">
                                <img class="img-fluid" :src="singleAlbum.poster" alt="">
                            </div>
                            <div>
                                <h5 class="fs-2">{{singleAlbum.title}}</h5>
                                <p class="fs-4">{{singleAlbum.author}}</p>
                                <p class="fs-5">Genre: {{singleAlbum.genre}}</p>
                                <p class="fs-5">Released Year: {{singleAlbum.year}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>