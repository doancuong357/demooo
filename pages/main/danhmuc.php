<h3>Danh mục sản phẩm: Váy</h3>
<ul class="list_product">
    <li>
        <a href="#" onclick="showDetails('Váy body Louis Vuitton', 500, 'images/vay1.jpg')">
            <img src="images/vay1.jpg">
            <p class="title_product">Tên sản phẩm: Váy body Louis Vuitton</p>
            <p class="price_product">Giá: 500$</p>
            <div class="button_group">
                <button class="btn_buy">Mua</button>
                <button class="btn_add_to_cart">Thêm 🛒</button>
            </div>
        </a>
    </li>
    <li>
        <a href="#" onclick="showDetails('Váy công sở nữ cao cấp', 190, 'images/vay2.jpg')">
            <img src="images/vay2.jpg">
            <p class="title_product">Tên sản phẩm: Váy công sở nữ cao cấp</p>
            <p class="price_product">Giá: 190$</p>
            <div class="button_group">
                <button class="btn_buy">Mua</button>
                <button class="btn_add_to_cart">Thêm 🛒</button>
            </div>
        </a>
    </li>
    <li>
        <a href="#" onclick="showDetails('Set váy thiết kế công sở', 130, 'images/vay3.jpg')">
            <img src="images/vay3.jpg">
            <p class="title_product">Tên sản phẩm: Set váy thiết kế công sở</p>
            <p class="price_product">Giá: 130$</p>
            <div class="button_group">
                <button class="btn_buy">Mua</button>
                <button class="btn_add_to_cart">Thêm 🛒</button>
            </div>
        </a>
    </li>
    <li>
        <a href="#" onclick="showDetails('Váy nữ hở vai trẻ trung', 120, 'images/vay4.jpg')">
            <img src="images/vay4.jpg">
            <p class="title_product">Tên sản phẩm: Váy nữ hở vai trẻ trung</p>
            <p class="price_product">Giá: 120$</p>
            <div class="button_group">
                <button class="btn_buy">Mua</button>
                <button class="btn_add_to_cart">Thêm 🛒</button>
            </div>
        </a>
    </li>
    <li>
        <a href="#" onclick="showDetails('Set chân váy dáng dài', 200, 'images/vay5.jpg')">
            <img src="images/vay5.jpg">
            <p class="title_product">Tên sản phẩm: Set chân váy dáng dài</p>
            <p class="price_product">Giá: 200$</p>
            <div class="button_group">
                <button class="btn_buy">Mua</button>
                <button class="btn_add_to_cart">Thêm 🛒</button>
            </div>
        </a>
    </li>
</ul>

<!-- Phần hiển thị chi tiết sản phẩm -->
<div id="product_details" style="display:none; border: 1px solid #ccc; padding: 20px; margin-top: 20px;">
    <h4 id="product_title"></h4>
    <h5 id="mota">Đánh giá:⭐⭐⭐⭐⭐</h5>
    <h5 id="mota">Số luợng:130</h5>
    <h5 id="mota">Cam kết: Chính hãng 100%, lỗi 1 đổi 1 nếu lỗi từ nhà sản xuất </h5>   
    <img id="product_image" src="" alt="" style="max-width: 250px;">
    <p id="product_price"></p>
</div>

<script>
function showDetails(title, price, image) {
    document.getElementById('product_title').innerText = title;
    document.getElementById('product_price').innerText = 'Giá: ' + price + '$';
    document.getElementById('product_image').src = image;
    document.getElementById('product_details').style.display = 'block';
}
</script>