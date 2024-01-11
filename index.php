<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div id="app">
        <header>
            <div class="logo"></div>
        </header>
        <main>
            <!-- Disco -->
            <article v-for="disco in dischi" @click="getJson(disco[0])">
                <img class="image" :src="disco[1]" :alt="disco[0]"/>
                <div class="text">
                    <h3>{{ disco[0] }}</h3>
                    <div v-if="info[0] === disco[0]">
                        <h4>{{ info[1]['artist'] }}</h4>
                        <h3>{{ info[1]['release'] }}</h3>
                    </div>
                </div>
            </article>
            <!-- Fine Disco -->
        </main>
    </div>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- fine axios -->
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- fine vue -->
    <script src="js/main.js"></script>
</body>

</html>