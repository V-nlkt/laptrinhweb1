// Lấy ID từ URL
const urlParams = new URLSearchParams(window.location.search);
const userId = urlParams.get("id");

// Dữ liệu mẫu
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

// Tìm user theo ID
const user = users.find(u => u.id == userId);

if (user) {
    document.getElementById("username").innerText = user.username;
    document.getElementById("email").innerText = user.email;
} else {
    document.querySelector(".container").innerHTML = "<h2>Người dùng không tồn tại!</h2>";
}

// Chuyển đến trang chỉnh sửa
function goToEdit() {
    if (userId) {
        window.location.href = `edit.html?id=${userId}`;
    }
}
