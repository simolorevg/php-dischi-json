<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP CSS LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--VUE JS LINK-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--AXIOS LINK-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>

<body>
    <div id='app'>
        <div class="my-header d-flex justify-content-center">
            <h1>From Disco to Disco</h1>
        </div>
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center">
                <div class="row row-cols-3">
                    <div class="col g-3" v-for="(data,index) in disks" :key="index">
                        <div class="my-card">
                            <div class="img-content">
                                <img :src='data.poster' class="card-img-top" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <h2>{{data.title}}</h2>
                                <p>{{data.author}}</p>
                                <h3>{{data.year}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>