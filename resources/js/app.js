import "./bootstrap";

const form = document.getElementById("searchForm");
const idInput = document.getElementById("searchId");
const nameInput = document.getElementById("searchName");
const emailInput = document.getElementById("searchEmail");
const stateInput = document.getElementById("searchState");
const zipCodeInput = document.getElementById("searchZipCode");
const typeInput = document.getElementById("searchType");
const baseUrl = "http://localhost:8000/api/v1/customers";
const searchButton = document.getElementById("searchButton");
let hasData = false;

async function fetchAllCustomers(e) {
    e.preventDefault();
    if (!hasData) {
        const tableBody = document.getElementById("tbody");
        axios.get(baseUrl).then((response) => {
            console.log("data: ", response.data.data);
            for (const customer of response.data.data) {
                const tr = document.createElement("tr");
                tr.innerHTML = `
                <td>${customer.id}</td>
                <td>${customer.name}</td>
                <td>${customer.email}</td>
                <td>${customer.address}</td>
                <td>${customer.city}</td>
                <td>${customer.state}</td>
                <td>${customer.zipCode}</td>
                <td>${customer.type === "I" ? "Individual" : "Business"}</td>
            `;
                tr.className =
                    "border-black hover:bg-gray-100 px-4 divide-x-2 divide-y-2";
                tableBody.appendChild(tr);
            }
        });
        hasData = true;
        searchButton.className = "hidden";
    }
}

searchButton.addEventListener("click", fetchAllCustomers);
function getInputValues() {
    const id = idInput.value;
    console.log(id);
    const name = nameInput.value;
    console.log(name);
    const email = emailInput.value;
    console.log(email);
    const state = stateInput.value;
    console.log(state);
    const zipCode = zipCodeInput.value;
    console.log(zipCode);
    const type = typeInput.value;
    console.log(type);
    return {
        id: id,
        name: name,
        email: email,
        state: state,
        zipCode: zipCode,
        type: type,
    };
}
function fetchCustomQuery(e) {
    e.preventDefault();
    const { id, name, email, state, zipCode, type } = getInputValues();
    let query = baseUrl + "?";
    if (id !== "") {
        query += `id[eq]=${id}`;
    }
    if (name !== "") {
        query += `&name[eq]=${name}`;
    }
    if (email !== "") {
        query += `&email[eq]=${email}`;
    }
    if (state !== "") {
        if (state !== "any") {
            query += `&state[eq]=${state}`;
        }
    }
    if (zipCode !== "") {
        query += `&postalCode[eq]=${zipCode}`;
    }
    if (type !== "") {
        if (type !== "any") {
            let typeValue;
            if (type === "individual") {
                typeValue = "I";
            } else {
                typeValue = "B";
            }
            query += `&type[eq]=${typeValue}`;
        }
    }
    console.log(query);
    axios.get(query).then((response) => {
        console.log("data: ", response.data.data);
        const tableBody = document.getElementById("tbody");
        tableBody.innerHTML = "";
        for (const customer of response.data.data) {
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td>${customer.id}</td>
                <td>${customer.name}</td>
                <td>${customer.email}</td>
                <td>${customer.address}</td>
                <td>${customer.city}</td>
                <td>${customer.state}</td>
                <td>${customer.zipCode}</td>
                <td>${customer.type === "I" ? "Individual" : "Business"}</td>
            `;
            tr.className =
                "border-black hover:bg-gray-100 px-4 divide-x-2 divide-y-2";
            tableBody.appendChild(tr);
        }
    });
}
form.addEventListener("change", fetchCustomQuery);
