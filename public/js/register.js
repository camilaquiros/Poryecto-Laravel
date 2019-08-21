$(document).ready(function(){
  const countryList = document.getElementById('country-list');
  fetch('https://restcountries.eu/rest/v2/regionalbloc/usan')
  .then(function(response) {
    return response.json();
  })
  .then(function(countries) {
    for (var i = 0; i < countries.length; i++) {
      var optionCountry = document.createElement('option');
      optionCountry.innerHTML = countries[i].name;
      optionCountry.value = countries[i].alpha2Code;
      countryList.appendChild(optionCountry);
    }
  });

  countryList.addEventListener('change', function(e){
    let stateList = document.getElementById('state-list');
    if (e.target.value == 'AR') {
        stateList.disabled = false;
        fetch('https://dev.digitalhouse.com/api/getProvincias')
        .then(function(response) {
          return response.json();
        })
        .then(function(statesArgentina) {
          const states = statesArgentina.data;
          for (var i = 0; i < states.length; i++) {
            var optionState = document.createElement('option');
            optionState.innerHTML = states[i].state;
            optionState.value = states[i].state;
            stateList.appendChild(optionState);
          }
        });
    } else {
      stateList.disabled = true;
    }
  })

})
