$(document).ready(function(){
  const countryList = document.getElementById('country-list');
  fetch('https://restcountries.eu/rest/v2/regionalbloc/usan')
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
        fetch('https://apis.datos.gob.ar/georef/api/provincias')
        .then(function(response) {
          return response.json();
        })
        .then(function(statesArgentina) {
          const states = statesArgentina.provincias;
          for (var state of states) {
            var optionState = document.createElement('option');
            var nameState = document.createTextNode(state.nombre)
            optionState.value = state.nombre;
            optionState.append(nameState);
            stateList.appendChild(optionState);
          }
        });
    } else {
      stateList.disabled = true;
    }
  })
})
