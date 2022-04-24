<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <div id="app">
        <?php include_once __DIR__ . '/server/data.php'; ?>
        <?php include_once __DIR__ . '/partials/header.php'; ?>

        <main>
            <div class="ms-container">
                <div class="row justify-content-center m-0">
                    <div class="col-12 d-flex justify-content-center flex-wrap py-5 gap text-white">
                        <div v-for="disc in discs" class="ms-card text-center">
                            <img class="img-fluid p-3" :src="disc.poster" :alt="disc.title">
                            <h5 class="fw-bold mb-2 px-2 text-uppercase">{{disc.title}}</h5>
                            <p class="m-0 lh-sm">{{disc.author}}</p>
                            <p class="m-0 lh-sm">{{disc.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>