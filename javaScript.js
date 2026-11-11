let propertyGrid = document.getElementById("property-grid");
let loadMoreButton = document.getElementById("load-more");


let newProperties = [
    {
        status: "Në Shitje",
        image: "img/new-property1.jpg",
        title: "Apartament",
        location: "Prishtinë",
        size: "80m²",
        price: "120,000 €",
    },
    {
        status: "Me Qira",
        image: "img/new-property2.jpg",
        title: "Shtëpi",
        location: "Pejë",
        size: "150m²",
        price: "600 €/muaj",
    },
    {
        status: "Në Shitje",
        image: "img/new-property3.jpg",
        title: "Villa",
        location: "Ulqin",
        size: "300m²",
        price: "450,000 €",
    },
];

let propertiesLoaded = 0;


function createPropertyCard(property) {
    let card = document.createElement("div");
    card.classList.add("property-card");

    card.innerHTML = `
        <div class="status">${property.status}</div>
        <img src="${property.image}" alt="${property.title}">
        <div class="property-info">
            <h3>${property.title}</h3>
            <p>&#128205 Lokacioni: ${property.location}</p>  
            <p>Sipërfaqja: ${property.size}</p>
            <p>Çmimi: ${property.price}</p>
        </div>
        <a href="#"><button>Shiko Detajet</button></a>
    `;

    return card;
}


function loadMoreProperties() {
    let propertiesToLoad = newProperties.slice(propertiesLoaded, propertiesLoaded + 2);
    propertiesToLoad.forEach((property) => {
        const card = createPropertyCard(property);
        propertyGrid.appendChild(card);
    });

    propertiesLoaded += propertiesToLoad.length;

  
    if (propertiesLoaded >= newProperties.length) {
        loadMoreButton.style.display = "none";
    }
}

loadMoreButton.addEventListener("click", loadMoreProperties);
