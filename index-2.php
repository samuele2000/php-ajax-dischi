<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php Dischi</title>
</head>

<body>
    <header>
        <div>
            <img src="./asset/img/Spotify_icon.svg" alt="Logo Spotify">
        </div>
    </header>

    <main>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div v-for="element in arraySong" class="card">
                        <img :src="`${element.poster}`" alt="">
                        <h3>{{element.title}}</h3>
                        <h4>{{element.author}}</h4>
                        <h4>{{element.year}}</h4>
                    </div>

                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>