<dialog id="course-registration">
    <div class="course-registration">
        <div class="course-registration__title">
            <h1>ЗАПИС НА КУРС</h1>
            <h2>ДРОГОБИЦЬКА СОРОЧКА<br>ЯКА ПАСУЄ ВСІМ!</h2>
        </div>
        <p class="course-registration__additional-information">
            Залишіть, будь ласка, ваші контактні дані для зворотнього зв’язку та виберіть формат курсу.
        </p>
        <form class="course-registration__form">
            <div class="course-registration__form__field">
                <p class="course-registration__form__field__label">Ваше ім’я:</p>
                <input class="course-registration__form__field__input" required type="text" placeholder="Adam">
            </div>
            <div class="course-registration__form__field">
                <p class="course-registration__form__field__label">Ваш номер телефону (Viber):</p>
                <input class="course-registration__form__field__input" required type="text" placeholder="+380989558495">
            </div>
            <div class="course-registration__form__course-selector">
                <p>Оберіть формат курсу:</p>
                <div class="course-registration__form__course-selector__item">
                    <label for="course-online_online">Онлайн</label>
                    <input type="radio" id="course-online_online" name="course" value="online" checked>

                </div>
                <div class="course-registration__form__course-selector__item course-registration__form__course-selector__item_not-selected">
                    <label for="course-online_lviv">Львів</label>
                    <input type="radio" id="course-online_lviv" name="course" value="online">
                </div>
            </div>
            <button onclick="openDialog()" class="course-button course-button_alternative-action course-registration__form__submit-button" type="submit">Записатись на курс</button>
            <button onclick="closeDialog()" class="course-button course-button_main-action course-registration__form__submit-button" type="submit">Закрити вікно</button>
        </form>
    </div>
</dialog>
