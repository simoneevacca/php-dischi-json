<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
</head>

<body>


    <div id="app">

        <header>
            <div class="container">
                <img src="./assets/image/Spotify_icon.svg.png" alt="">
            </div>
        </header>
        <main>

            <div class="container">
                <div class="row">
                    <div class="col-4" v-for="(disk, index) in content">
                        <div class="card" @click="saveId(index)">
                            <img :src="disk.poster" alt="">
                            <div><strong>{{disk.title}}</strong></div>
                            <div>{{disk.author}}</div>
                            <div><strong>{{disk.year}}</strong></div>

                        </div>
                    </div>

                </div>
            </div>

        </main>

        <div class="preview show" v-show="showPreview == true" >
        <div>
            {{content[idCard]}}

        </div>
        
    </div>


    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"
        integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>