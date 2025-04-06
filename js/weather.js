const apiKey = "c72e3a8aa9c26de3efbfe20f12a13674"; // Reemplaza con tu API Key de OpenWeatherMap

// Obtener la ubicación del usuario
function obtenerUbicacion() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(obtenerClima, mostrarError);
    } else {
        document.getElementById("weather-info").innerHTML = "Geolocalización no soportada";
    }
}

// Obtener el clima con la ubicación del usuario
async function obtenerClima(position) {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric&lang=es`;

    try {
        const respuesta = await fetch(apiUrl);
        const datos = await respuesta.json();
        console.log("Datos del clima:", datos); // 🛠 Verifica los datos en la consola

        if (datos.cod === 200) {
            const ciudad = datos.name;
            const temperatura = Math.round(datos.main.temp);
            const icono = datos.weather[0].icon;
            const descripcion = datos.weather[0].description;

            document.getElementById("weather-info").innerHTML = `
                <img src="https://openweathermap.org/img/wn/${icono}.png" alt="${descripcion}" title="${descripcion}">
                <span>${ciudad}: ${temperatura}°C</span>
            `;
        } else {
            console.error("Error en la API:", datos.message);
            document.getElementById("weather-info").innerHTML = "No disponible";
        }
    } catch (error) {
        console.error("Error de conexión:", error);
        document.getElementById("weather-info").innerHTML = "Error";
    }
}

// Manejar errores de geolocalización
function mostrarError(error) {
    console.warn("Error de geolocalización:", error);
    document.getElementById("weather-info").innerHTML = "Ubicación no disponible";
}

// Ejecutar cuando la página cargue
document.addEventListener("DOMContentLoaded", obtenerUbicacion);
