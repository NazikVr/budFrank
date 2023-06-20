const select = document.querySelector('select');
const allLang = ['ua', 'rus', 'en', 'de', 'sp']

select.addEventListener('change', changeURLLanguage);

function changeURLLanguage() {
  let lang = select.value;
  location.href = window.location.pathname + '#' + lang;
  location.reload();
}

function changeLanguage() {
  let hash = window.location.hash;
  hash = hash.substring(1);
  console.log(hash);
  if (!allLang.includes(hash)) {
    location.href = window.location.pathname + '#ua';
    location.reload();
  }
  select.value = hash;
  document.querySelector('title').innerHTML = langArr['gallery'][hash];
  for (let key in langArr) {
    let elem = document.querySelector('.lng-' + key);
    if (elem) {
      elem.innerHTML = langArr[key][hash];
    }
  }
  // Беремо ссилку з елемента і добавляємо до неї hash який дорівнює в нас select value тобто абревіатура мови включеної, таким чином нас перекидає на другу сторінку з включеною мовою як і на цій
  let linkLog = document.getElementById('logoG');
  linkLog.href += '#' + hash;
  let linkCont = document.getElementById('contactG');
  linkCont.href += '#' + hash;
  let linkGal = document.getElementById('galleryG');
  linkGal.href += '#' + hash;
}

changeLanguage();