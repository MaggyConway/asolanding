<div id="modal-form-container">
    <div class="modal--background"></div>
    <div class="modal">
        <h2>Заказать звонок</h2>

        <form action="/ajax/send.php" method="POST" class="request__form">
            <input type="text" name="name" placeholder="Ваше имя" required >
            <input type="text" name="phone" class="number_phone" placeholder="Ваш телефон" required>
            <input type="hidden" name="event" value="REQUEST" />
            <button type="submit" class="btn">Отправить</button>
        </form>

        <svg class="modal--svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"><rect x="0" y="0" fill="none" rx="3" ry="3"></rect>
        </svg>
        <span class="modal-close"></span>
    </div>
</div>