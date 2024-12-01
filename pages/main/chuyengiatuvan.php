<h3>Chuyên gia thiết kế thời trang</h3>
<ul class="list_product">
    <li>
        <a href="">
            <img src="images/stylist2.jpg" alt="Stylist 1">
            <p class="tilte_product">Stylist: Ralphital Mila Laurent</p>
        </a>
        <div class="button_group">
            <button class="btn_buy" onclick="openChat('Ralphital Mila Laurent')">Tư vấn online ☎️</button>
        </div>
    </li>
    <li>
        <a href="">
            <img src="images/stylist1.jpg" alt="Stylist 2">
            <p class="tilte_product">Stylist: Stella Obana McCartney</p>
        </a>
        <div class="button_group">
            <button class="btn_buy" onclick="openChat('Stella Obana McCartney')">Tư vấn online ☎️</button>
        </div>
    </li>
    <li>
        <a href="">
            <img src="images/stylist5.jpg" alt="Stylist 3">
            <p class="tilte_product">Stylist: Francisco Sanchez Ruiz</p>
        </a>
        <div class="button_group">
            <button class="btn_buy" onclick="openChat('Francisco Sanchez Ruiz')">Tư vấn online ☎️</button>
        </div>
    </li>
    <li>
        <a href="">
            <img src="images/stylist4.jpg" alt="Stylist 4">
            <p class="tilte_product">Stylist: Duong Quoc Hoang VN</p>
        </a>
        <div class="button_group">
            <button class="btn_buy" onclick="openChat('Duong Quoc Hoang VN')">Tư vấn online ☎️</button>
        </div>
    </li>
</ul>

<div class="chatbox" id="chatbox">
    <div class="chatbox-header" id="chatbox-header">Chat với <span id="stylist-name"></span></div>
    <div class="messages" id="messages"></div>
    <div class="input-group">
        <input type="text" id="user-input" placeholder="Nhập tin nhắn...">
        <button onclick="sendMessage()">Gửi</button>
    </div>
</div>
<script>
    function openChat(stylistName) {
        document.getElementById('stylist-name').innerText = stylistName;
        document.getElementById('chatbox').style.display = 'block'; // Hiển thị chatbox
        document.getElementById('messages').innerHTML = ''; // Xóa tin nhắn trước đó
    }

    function sendMessage() {
        const userInput = document.getElementById('user-input').value;
        if (userInput.trim() === '') return; // Không gửi nếu không có nội dung
        // Hiển thị tin nhắn của người dùng
        const messagesDiv = document.getElementById('messages');
        messagesDiv.innerHTML += `<div class="message user">${userInput}</div>`;
        document.getElementById('user-input').value = ''; // Xóa ô nhập
        // Gọi stylist (giả lập phản hồi)
        setTimeout(() => {
            messagesDiv.innerHTML += `<div class="message stylist">Stylist: Cảm ơn bạn! Tôi đã nhận được thông điệp của bạn: ${userInput}</div>`;
            messagesDiv.scrollTop = messagesDiv.scrollHeight; // Cuộn xuống cuối
        }, 1000);
    }
</script>