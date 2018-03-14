window.fetch('https://api.openweathermap.org/data/2.5/weather?q=Commentry&lang=fr&units=metric&appid=1f8c14072d202a541d6d06d2415fb1f9')
        .then(res => res.json())
        .then(function(res){
          console.log(res);
          document.getElementById('ville').innerHTML = '<h2>'+res.name+'</h2>';
          document.getElementById('temperature').innerHTML = '<h2>'+res.main.temp+' °C</h2>';
          // document.getElementById('icone').innerHTML = '<h2>'+res.weather[0].main+'</h2>';
          document.getElementById('description').innerHTML = '<h2>'+res.weather[0].description+'</h2>';
        document.getElementById('icon').setAttribute('src', 'https://openweathermap.org/img/w/'+res.weather[0].icon+'.png');
          document.getElementById('sunrise').innerHTML = '<h2>'+res.sys.sunrise+'</h2>';
          document.getElementById('sunset').innerHTML = '<h2>'+res.sys.sunset+'</h2>';
        });
