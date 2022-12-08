$(document).ready(() => {
    $('#form').on('input', (e) => {

        let searchText = $('#pesquisa').val();

        if (searchText == null) {
            console.log(true);
        }

        getMovies(searchText);
        e.preventDefault();
    })
})

function popularMovies() {
    axios.get('https://api.themoviedb.org/3/movie/popular?api_key=9c6499b1291ce4d96d4f86d40a440f0a&language=pt-BR&page=1')
        .then((response) => {
            console.log(response);

            let movies = response.data.results;
            let output = '';
            $.each(movies, (index, movie) => {

                if (movie.poster_path === null) {
                    poster = "../image/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
                }

                let date = movie.release_date;

                let year = date.slice(0, 4);
                output += `
                    <div class="col-md-3 box">
                      <div class="movieBox">
                      <a href="#" onclick="movieSelected('${movie.id}')" class="movie-title">
                      <img src="${poster}" alt="poster" class="img"></a>
                        <div class="movie-bottom">
                            <a href="#" onclick="movieSelected('${movie.id}')" class="movie-title">${movie.title}</a>
                            <div class="movie-year">${year}</div>
                        </div>
                        </div>
                    </div>
            `
            });
            $('#filmes').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}


function getMovies(searchText) {

    axios.get('https://api.themoviedb.org/3/search/movie?api_key=9c6499b1291ce4d96d4f86d40a440f0a&language=pt-BR&query=' + searchText)

        .then((response) => {
            console.log(response);

            let movies = response.data.results;
            let output = '';
            let output1 = '';
            $.each(movies, (index, movie) => {

                if (movie.poster_path === null) {
                    poster = "../image/default-movie.png";
                } else {
                    poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
                }

                let date = movie.release_date;

                let year = date.slice(0, 4);
                output += `
                        <div class="col-md-3 box">
                          <div class="movieBox">
                          <a href="#" onclick="movieSelected('${movie.id}')" class="movie-title">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img"></a>
                            <div class="movie-bottom">
                                <a href="#" onclick="movieSelected('${movie.id}')" class="movie-title">${movie.title}</a>
                                <div class="movie-year">${year}</div>
                            </div>
                            </div>
                        </div>
                `
            });
            $('#filmes').html(output);
        })
        .catch((error) => {
            console.log(error);
        });
}

function movieSelected(id) {
    sessionStorage.setItem('id', id);
    window.location = 'MoviePG';
    return false;
}

function getMovie() {
    let movieId = sessionStorage.getItem('id');
    axios.get(`https://api.themoviedb.org/3/movie/${movieId}?api_key=9c6499b1291ce4d96d4f86d40a440f0a&language=pt-BR`)
        .then((response) => {
        
            console.log(response);
            let movie = response.data;

            if (movie.poster_path === null) {
                poster = "../image/default-movie.png";
            } else {
                poster = "https://image.tmdb.org/t/p/w185_and_h278_bestv2" + movie.poster_path;
            }

            let date = movie.release_date;

            let year = date.slice(0, 4);
            let Rated;

            let genre = [];
            movie.genres.forEach(element => {
                genre.push(element.name);
            });

            genres = genre.join(' / ');

            let output1 = `
            <div class="row">
                <div class="container2">
                    <div class="col-md-4 box1">
                        <img src="${poster}" class="poster-image">
                        <img src="${poster}" class="poster-image">
                        <img src="${poster}" class="poster-image">
                        <img src="${poster}" class="poster-image">
                        <img src="${poster}" class="poster-image">
                        <img src="${poster}" class="poster-image">


                    </div>
                    <br>
                    <div class="col-md-4 box2">
                        <h1 class="movie-title">${movie.title}<hr></h1>
                    </div>
                    </div>
                <div class="col-9">
                    <ul class="list-group">
                        <li class="list-group-item active">
                            <h1>Sinopse: </h1> ${movie.overview}</li>
                    </ul>
                    <div class="col-8">
                    <ul class="list-group">
                        <li class="list-group-item active">
                        <h1 class="ficha">FICHA TÉCNICA</h1></li>
                        <li class="list-group-item active">
                            <strong>Notas: </strong> ${movie.vote_average} / 10</li>
                        <li class="list-group-item active">
                            <strong>Ano: </strong> ${year}</li>
                        <li class="list-group-item active">
                            <strong>Status: </strong> ${movie.status}</li>
                        <li class="list-group-item active">
                            <strong>Duração: </strong> ${movie.runtime} min</li>
                    </div>
                    
                </div>
            `
            $('#filmes').html(output1);
        })
        .catch((error) => {
            console.log(error);
        });
}
{/* <h5 style="color: white; font-weight:bold">${year}</h5>
<h5 style="color: white; font-weight:bold; margin-top: -10px;">${genres}</h5> */}