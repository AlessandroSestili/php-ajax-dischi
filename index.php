<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./sass/dist/app.css">
    <title>Document</title>
</head>
<body>
    
    <div id="app">
        <div class="container_input">

        <form action="" @submit.prevent="callData()">
            <input type="text" placeholder="Genere" v-model="filters.genre">
            <select name="itemToPage" id="" v-model="filters.itemToPage">
                <option selected value="">All</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="12">12</option>
            </select>
            <button type="submit">Filtra</button>
        </form>
        <div v-if="respCall.total_page > 1" class="change_page">
            <h4>Pagine totali: {{respCall.total_page}}</h4>
            <div :class="{red: !respCall.prevPage}" @click.prevent="changePage('previous')"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
            <div :class="{red: !respCall.nextPage}" @click.prevent="changePage('next')"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
            <h4>Pagine corrente: {{currentPage}}</h4>
        </div>
        
        </div>

        <div class="container">

            <div v-for="album in discsList" class="card">

                <div class="content_card">

                    <div class="box_img">
                        <img :src="album.poster" alt="">
                    </div>

                    <div class="box_text">    
                        <h3>{{album.title}} - <em>{{album.author}}</em></h3>
                        <h4>{{album.year}} - {{album.genre}}</h4>
                    </div>

                </div>

            </div>

            
        </div>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>