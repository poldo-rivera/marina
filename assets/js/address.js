// Country, Province, City Data
const countryData = {
    USA: {
        provinces: ["California", "Texas", "Florida", "New York"],
        cities: {
            "California": ["Los Angeles", "San Francisco", "San Diego"],
            "Texas": ["Houston", "Dallas", "Austin"],
            "Florida": ["Miami", "Orlando", "Tampa"],
            "New York": ["New York City", "Buffalo", "Albany"]
        }
    },
    Canada: {
        provinces: ["Ontario", "Quebec", "British Columbia", "Alberta"],
        cities: {
            "Ontario": ["Toronto", "Ottawa", "Hamilton"],
            "Quebec": ["Montreal", "Quebec City", "Gatineau"],
            "British Columbia": ["Vancouver", "Victoria", "Surrey"],
            "Alberta": ["Calgary", "Edmonton", "Red Deer"]
        }
    },
    Philippines: {
        provinces: ["Metro Manila", "Cebu", "Davao", "Batangas", "Bulacan"],
        cities: {
            "Metro Manila": ["Quezon City", "Manila", "Makati", "Taguig"],
            "Cebu": ["Cebu City", "Mandaue", "Lapu-Lapu"],
            "Davao": ["Davao City", "Tagum", "Digos"],
            "Batangas": ["Batangas City", "Lipa", "Tanauan"],
            "Bulacan": ["Malolos", "Meycauayan", "San Jose del Monte"]
        }
    },
    // More countries can be added here
};

// Country Input Change Event
document.getElementById("country").addEventListener("input", function() {
    const selectedCountry = this.value;
    const provinceInput = document.getElementById("province");
    const cityInput = document.getElementById("city");

    // Clear previous options
    provinceInput.value = '';
    cityInput.value = '';

    // Populate provinces and cities
    const provinceOptions = document.getElementById("province-options");
    const cityOptions = document.getElementById("city-options");
    
    provinceOptions.innerHTML = '<option value="Other">';
    cityOptions.innerHTML = '<option value="Other">';

    if (countryData[selectedCountry]) {
        const provinces = countryData[selectedCountry].provinces;
        const cities = countryData[selectedCountry].cities;

        // Populate provinces
        provinces.forEach(function(province) {
            const option = document.createElement("option");
            option.value = province;
            provinceOptions.appendChild(option);
        });

        // Populate cities
        for (let province in cities) {
            cities[province].forEach(function(city) {
                const option = document.createElement("option");
                option.value = city;
                cityOptions.appendChild(option);
            });
        }
    }
});

// Province Input Change Event
document.getElementById("province").addEventListener("input", function() {
    const selectedProvince = this.value;
    const cityInput = document.getElementById("city");

    // Clear city options if "Other" is selected in Province/State
    if (selectedProvince === "Other") {
        cityInput.value = '';
    }
});

// City Input Change Event
document.getElementById("city").addEventListener("input", function() {
    const selectedCity = this.value;

    // Allow manual input if "Other" is selected in City
    if (selectedCity === "Other") {
        this.placeholder = "Please type your city";
    } else {
        this.placeholder = "Select or type your city";
    }
});