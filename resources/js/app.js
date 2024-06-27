import "./bootstrap";

async function fetchAllCustomers() {
    const tableBody = document.getElementById("tbody");
    axios.get("http://localhost:8000/api/v1/customers").then((response) => {
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
}

fetchAllCustomers();
