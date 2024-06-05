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
      cuore.classList.add("fill");
      cuore.addEventListener('click',removeFromFavourites);
      picture.appendChild(img);
      picture.appendChild(caption);
      picture.appendChild(price);
      picture.appendChild(cuore);
      gallery.appendChild(picture);
    }
  }
  
  function likeTracking() {
    console.log('traking in funzione');
    fetch("favourites_get.php").then(onResponse).then(onJson);
  }
  
  function removeFromFavourites(event) {
    const cuore = event.currentTarget;
    cuore.classList.remove('fill');
    const product_id = event.currentTarget.dataset.product_id;
    fetch("remove_from_favourites.php?product_id="+ product_id).then(likeTracking);;
    console.log("elemento rimosso dai preferiti");
  }
  
  likeTracking();
  
  
  
  