window.addEventListener('load', function(){
  const countryList = document.getElementById('country-list');
  fetch('https://restcountries.eu/rest/v2/all')
  .then(function(response) {
    return response.json();
  })
  .then(function(countries) {
    for (var country of countries) {
      var optionCountry = document.createElement('option');
	    var nameCountry = document.createTextNode(country.name)
	    optionCountry.value = country.name;
      optionCountry.append(nameCountry);
    	countryList.appendChild(optionCountry);
    }
  });

  countryList.addEventListener('change', function(e){
    let stateList = document.getElementById('state-list');
    if (e.target.value == 'Argentina') {
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
