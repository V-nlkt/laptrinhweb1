const users = [
    { id: 1, username: "UPVH", email: "ATW@gmail.com" },
    { id: 2, username: "IFUX", email: "KLUB@gmail.com" },
    { id: 3, username: "DZQZ", email: "RENB@gmail.com" },
    { id: 4, username: "NIJY", email: "ROIF@gmail.com" },
    { id: 5, username: "YUMG", email: "KITN@gmail.com" },
    { id: 6, username: "WSZU", email: "CYLV@gmail.com" },
    { id: 7, username: "WZKQ", email: "MILB@gmail.com" },
    { id: 8, username: "XFOR", email: "YIZV@gmail.com" },
    { id: 9, username: "HGGO", email: "OYXM@gmail.com" },
    { id: 10, username: "PZXZ", email: "YSML@gmail.com" },
];

let currentPage = 1;
const rowsPerPage = 5;

function displayTable(page) {
    const tableBody = document.getElementById("userTable");
    tableBody.innerHTML = "";

    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const paginatedUsers = users.slice(start, end);

    paginatedUsers.forEach(user => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${user.id}</td>
            <td>${user.username}</td>
            <td>${user.email}</td>
            <td>
                <a href="edit.html?id=${user.id}">Edit</a> |
                <a href="view.html?id=${user.id}">View</a> |
                <a href="#" onclick="deleteUser(${user.id})">Delete</a>
            </td>
        `;
        tableBody.appendChild(row);
    });

    updatePagination();
}

function updatePagination() {
    const totalPages = Math.ceil(users.length / rowsPerPage);
    document.getElementById("pageNumbers").innerText = `${currentPage} / ${totalPages}`;

    document.getElementById("prevPage").disabled = currentPage === 1;
    document.getElementById("nextPage").disabled = currentPage === totalPages;
}

document.getElementById("prevPage").addEventListener("click", function() {
    if (currentPage > 1) {
        currentPage--;
        displayTable(currentPage);
    }
});

document.getElementById("nextPage").addEventListener("click", function() {
    if (currentPage < Math.ceil(users.length / rowsPerPage)) {
        currentPage++;
        displayTable(currentPage);
    }
});

function deleteUser(id) {
    const index = users.findIndex(user => user.id === id);
    if (index !== -1) {
        users.splice(index, 1);
        displayTable(currentPage);
    }
}

displayTable(currentPage);
