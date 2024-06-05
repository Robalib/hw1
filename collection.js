function update() {
  console.log('update in funzione');
  fetch("products.php").then(onResponse).then(onJson).then(likeTracking);
}

function onResponse(response) {
  console.log('Risposta ricevuta');
  return response.json();
}

function onJson(json) {
  console.log('JSON ricevuto');
  console.log(json);
  const gallery = document.querySelector('#gallery');
  gallery.innerHTML = '';
  for(product of json)
  {
    const name = product.name;
    const product_price = product.price;
    const selected_image = product.url;
    const picture = document.createElement('div');
    picture.classList.add('picture');
    const img = document.createElement('img');
    img.src = selected_image;
    const caption = document.createElement('span');
    const price = document.createElement('span');
    const cuore = document.createElement('span');
    cuore.classList.add("material-symbols-outlined");
    cuore.textContent = 'favorite';
    price.classList.add('price');
    caption.textContent = name;
    price.textContent = "€"+product_price;
    cuore.dataset.product_id = product.id;
    cuore.addEventListener('click',addToFavourites);
    picture.appendChild(img);
    picture.appendChild(caption);
    picture.appendChild(price);
    picture.appendChild(cuore);
    gallery.appendChild(picture);
  }
}

function onResponseLike(response) {
  console.log('Risposta ricevuta like');
  return response.json();
}

function onJsonLike(json) {
  console.log('JSON Like ricevuto');
  console.log(json);
  for(like of json)
  {
    const prodotti=document.querySelectorAll(".material-symbols-outlined");
    for(const prodotto of prodotti){
      if(prodotto.dataset.product_id === like.id){
        prodotto.classList.add("fill");
        prodotto.removeEventListener('click',addToFavourites);
        prodotto.addEventListener('click', removeFromFavourites);
      }
    }
  }
}

function likeTracking() {
  console.log('traking in funzione');
  fetch("favourites_get.php").then(onResponseLike).then(onJsonLike);
}

function addToFavourites(event) {
  const cuore = event.currentTarget;
  cuore.classList.add('fill');
  const product_id = event.currentTarget.dataset.product_id;
  fetch("add_to_favourites.php?product_id="+ product_id);
  console.log("elemento aggiunto ai preferiti");
  cuore.removeEventListener('click',addToFavourites);
  cuore.addEventListener('click', removeFromFavourites);
}

function removeFromFavourites(event) {
  const cuore = event.currentTarget;
  cuore.classList.remove('fill');
  const product_id = event.currentTarget.dataset.product_id;
  fetch("remove_from_favourites.php?product_id="+ product_id);
  console.log("elemento rimosso dai preferiti");
  cuore.removeEventListener('click', removeFromFavourites);
  cuore.addEventListener('click', addToFavourites);
}

update();



