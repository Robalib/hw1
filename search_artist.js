const container = document.getElementById('results');

function search(event){
    const form_data = new FormData(document.querySelector("#ricerca form"));
    console.log(form_data.get('search'));
    fetch("spotify.php?q="+encodeURIComponent(form_data.get('search'))).then(searchResponse).then(searchJson);
    container.innerHTML = '';
    event.preventDefault();
}

function searchResponse(response)
{
    console.log(response);
    return response.json();
}

function searchJson(json) {
    console.log('JSON ricevuto');
    const results = json.artists.items;
    let num_results = results.length;
    if(num_results > 10)
      num_results = 10;
    for(let i=0; i<num_results; i++)
    {
      const artist_data = results[i]
      const name = artist_data.name;
      const selected_image = artist_data.images[0].url;
      const div= document.createElement('div')
      const caption = document.createElement('span');
      caption.textContent = name;
      div.classList='image';
      const img = document.createElement("img");
      img.src=selected_image;
      div.appendChild(img);
      div.appendChild(caption);
      container.appendChild(div);
      img.addEventListener('click', apriModale);
    }
  }

function apriModale(event) {
  const modale = document.getElementById('modale');
	const image = document.createElement('img');
	image.id = 'immagine_post';
	image.src = event.currentTarget.src;
	modale.appendChild(image);
	modale.classList.remove('hidden');
  modale.addEventListener('click',chiudiModale);
	document.body.classList.add('no-scroll');
}


function chiudiModale() {
		modale.classList.add('hidden');
		img = modale.querySelector('img');
		img.remove();
		document.body.classList.remove('no-scroll');
}

function reset(event) {
  const input = event.currentTarget;
  input.value = "";
}


const cerca = document.querySelector("form");
const errore = document.getElementById("errore");
const input = document.querySelector("#searchbox");

cerca.addEventListener("submit",search);
input.addEventListener('click', reset);


