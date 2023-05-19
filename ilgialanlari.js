fetch("https://online-movie-database.p.rapidapi.com/auto-complete?q=game",{
    "method":"GET",
    "headers":{
        "x-rapidapi-host": "online-movie-database.p.rapidapi.com",
        "x-rapidapi-key": "4be044b303msh97783c72345f7b1p16bd7djsn02d4b9e43ebf"
    }
})
.then(response => response.json())
.then(data => {
    const list = data.d;
    list.map((item) => {
        const name = item.l;
        const poster = item.i.imageUrl;
        const movie = `<li><img src="${poster}"> <h2>${name}</h2></li>`
        document.querySelector('.movies').innerHTML += movie;
    })
})
.catch(err => {
    console.error(err);
})


