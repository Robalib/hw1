const new_images = [
  'img/cropped_t-shirt_change.webp',
  'img/bikini_change.webp',
  'img/tank_change.webp',
  'img/socks_change.webp',
  'img/swim_short_change.webp',
  'img/hat_change.webp']

  const original_images = [
    'img/cropped_t-shirt.webp',
    'img/bikini.webp',
    'img/tank_top.webp',
    'img/socks.webp',
    'img/swim_shorts.webp',
    'img/hat.webp']

function changeImg(event)
{
  const image = event.currentTarget;
  const index = parseInt(image.dataset.index);
  image.src = new_images[index];
  image.addEventListener('mouseout',originalImg);
}

function originalImg(event)
{
  const image = event.currentTarget;
  const index = parseInt(image.dataset.index);
  image.src = original_images[index];
}

const images = document.querySelectorAll('#container img');
for (const image of images)
{
  image.addEventListener('mouseover', changeImg);
}

function hideNuoviArrivi() {
  const nuoviArrivi = document.querySelector('.nuoviArrivi');
  if(window.scrollY > 0){
    nuoviArrivi.classList.add('hidden');
  } else {
    nuoviArrivi.classList.remove('hidden');
  }
}

window.addEventListener('scroll', hideNuoviArrivi);


function showTendinaUomo() {
  const tendina = document.querySelector('#tendina_uomo');
  tendina.classList.remove('hidden');
  tendina.addEventListener('mouseleave', hideTendinaUomo);
}

function showTendinaDonna() {
  const tendina = document.querySelector('#tendina_donna');
  tendina.classList.remove('hidden');
  tendina.addEventListener('mouseleave', hideTendinaDonna);
}

function hideTendinaUomo() {
  document.querySelector('#tendina_uomo').classList.add('hidden');
}

function hideTendinaDonna() {
  document.querySelector('#tendina_donna').classList.add('hidden');
}

const headerlinks = document.querySelectorAll('#headerLink div');
let i = 0;
for (const headerlink of headerlinks)
{
  if(i !== 1){
  headerlink.addEventListener('mouseover', hideTendinaUomo);
  }
  if(i !== 2){
    headerlink.addEventListener('mouseover', hideTendinaDonna);
    }
  i = i+1;
}

const elements = document.querySelectorAll('.nuoviArrivi, #logo, #simbols');
for (const element of elements) {
element.addEventListener('mouseover', hideTendinaUomo);
element.addEventListener('mouseover', hideTendinaDonna);
}

document.querySelector('.nuoviArrivi').addEventListener('mouseover', hideTendinaUomo);
document.querySelector('.nuoviArrivi').addEventListener('mouseover', hideTendinaDonna);

const uomo = document.querySelector('#uomo');
uomo.addEventListener('mouseover', showTendinaUomo);

const donna = document.querySelector('#donna');
donna.addEventListener('mouseover', showTendinaDonna);


function searchCountry() {
  const iteu = document.querySelector('#it-eu');
  iteu.classList.remove('hidden');
  iteu.addEventListener('click', closeSearchCountry);
}

function closeSearchCountry(event) {
  event.currentTarget.classList.add('hidden');
}

function handlerSearchCountry(event) {
  event.stopPropagation();
}

document.querySelector('#simbol_iteu').addEventListener('click', searchCountry);
document.querySelector('#cercaPaese').addEventListener('click', handlerSearchCountry);

function openWallet() {
  const wallet = document.querySelector('#wallet');
  wallet.classList.remove('hidden');
  wallet.addEventListener('click', closeWallet);
  document.body.classList.add('no-scroll');
}

function closeWallet(event) {
  event.currentTarget.classList.add('hidden');
  document.body.classList.remove('no-scroll');
}

function handlerWallet(event) {
  event.stopPropagation();
}

document.querySelector('#simbol_wallet').addEventListener('click', openWallet);
document.querySelector('#wallet div').addEventListener('click', handlerWallet);

function showLogin() {
  const login = document.querySelector('#login');
  login.classList.remove('hidden');
  login.addEventListener('click', hideLogin);
}

function hideLogin(event) {
  event.currentTarget.classList.add('hidden');
}

function handlerLogin(event) {
  event.stopPropagation();
}

document.querySelector('#simbol_login').addEventListener('click', showLogin);
document.querySelector('#tendina_login').addEventListener('click', handlerLogin);

function onJson1(json){
  console.log('json ricevuto inizio verifica mail');
  console.log(json);
  if(json.disposable){
    const output = document.querySelector('#email input');
    output.classList.add('red');
    output.value = "Le email temporanee non sono accettate!";
  }
}

function onResponse1(response) {
  console.log('risposta ricevuta');
  return response.json();
}

function checkMail(event)
{
  event.preventDefault();
  const input_email = document.querySelector('#email input');
  const email = encodeURIComponent(input_email.value);
  console.log('controllo: ' + email);
  rest_url = 'https://api.mailcheck.ai/email/' + email;
  console.log('URL: ' + rest_url);
  fetch(rest_url).then(onResponse1).then(onJson1);
}

function reset(event) {
  const input = event.currentTarget;
  if(input.value === "Le email temporanee non sono accettate!"){
    input.classList.remove('red')
  }
  input.value = "";
}

const form = document.querySelector('#email');
form.addEventListener('submit', checkMail);
const input = document.querySelector('#email input');
input.addEventListener('click', reset);


// Controlla se il valore 'showLogin' è presente nel local storage
if (localStorage.getItem('showLogin') === 'true') {
  console.log('showLogin===true');
  showLogin();
  localStorage.removeItem('showLogin'); // Rimuove il valore dopo averlo utilizzato
}

function setLoginFlag() {
  localStorage.setItem('showLogin', 'true');
}

document.querySelector("#login form").addEventListener('submit', setLoginFlag);