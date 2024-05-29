var config = {
    cUrl: 'https://api.countrystatecity.in/v1/countries',
    ckey: 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA=='
}
//  AIzaSyDSlWnDJ6E7pybaGowK_cz1qIEgant9PEY 

var countrySelect = document.querySelector('.country'),
    stateSelect = document.querySelector('.state'),
    citySelect = document.querySelector('.city'),
    pincodeSelect = document.querySelector('.pincode'); // Define pincodeSelect

function loadCountries() {
    let apiEndPoint = config.cUrl

    fetch(apiEndPoint, {headers: {"X-CSCAPI-KEY": config.ckey}})
    .then(Response => Response.json())
    .then(data => {
        data.forEach(country => {
            const option = document.createElement('option')
            option.value = country.iso2
            option.textContent = country.name 
            countrySelect.appendChild(option)
        })
    })
    .catch(error => console.error('Error loading countries:', error))

    stateSelect.disabled = true
    citySelect.disabled = true
    stateSelect.style.pointerEvents = 'none'
    citySelect.style.pointerEvents = 'none'
}

function loadStates() {
    stateSelect.disabled = false
    citySelect.disabled = true
    stateSelect.style.pointerEvents = 'auto'
    citySelect.style.pointerEvents = 'none'

    const selectedCountryCode = countrySelect.value
    stateSelect.innerHTML = '<option value="">Select State</option>' // for clearing the existing states
    citySelect.innerHTML = '<option value="">Select City</option>' // Clear existing city options

    fetch(`${config.cUrl}/${selectedCountryCode}/states`, {headers: {"X-CSCAPI-KEY": config.ckey}})
    .then(response => response.json())
    .then(data => {
        data.forEach(state => {
            const option = document.createElement('option')
            option.value = state.iso2
            option.textContent = state.name 
            stateSelect.appendChild(option)
        })
    })
    .catch(error => console.error('Error loading states:', error))
}

function loadCities() {
    citySelect.disabled = false
    citySelect.style.pointerEvents = 'auto'

    const selectedCountryCode = countrySelect.value
    const selectedStateCode = stateSelect.value

    citySelect.innerHTML = '<option value="">Select City</option>' // Clear existing city options

    fetch(`${config.cUrl}/${selectedCountryCode}/states/${selectedStateCode}/cities`, {headers: {"X-CSCAPI-KEY": config.ckey}})
    .then(response => response.json())
    .then(data => {
        data.forEach(city => {
            const option = document.createElement('option')
            option.value = city.iso2
            option.textContent = city.name 
            citySelect.appendChild(option)
        })
    })
    .catch(error => console.error('Error loading cities:', error))

    // Call loadPincodes when city is selected
    loadPincodes();
}

// JavaScript function to load pincodes
function loadPincodes() {
    // Enable pincode select dropdown
    pincodeSelect.disabled = false;
    pincodeSelect.style.pointerEvents = 'auto';

    // Get selected country, state, and city codes
    const selectedCountryCode = countrySelect.value;
    const selectedStateCode = stateSelect.value;
    const selectedCityCode = citySelect.value;

    // Fetch pincodes for the selected country, state, and city
    fetch(`${config.cUrl}/${selectedCountryCode}/states/${selectedStateCode}/cities/${selectedCityCode}/pincodes`, { headers: { "X-CSCAPI-KEY": config.ckey } })
        .then(response => response.json())
        .then(data => {
            // Clear existing pincode options
            pincodeSelect.innerHTML = '<option value="">Select Pincode</option>';

            // Populate pincode options
            data.forEach(pincode => {
                const option = document.createElement('option');
                option.value = pincode;
                option.textContent = pincode;
                pincodeSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error loading pincodes:', error));
}

window.onload = loadCountries;
