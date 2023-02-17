{% macro form(form, form_class='', title_class='', text_class='', button_class='button-link', text='', title='Оставьте заявку и&nbsp;начните обучениепо новой профессии', button='Отправить', add_fields, exclude_fields) %}
<form action="<?= $action ?>&form={{ form }}" class="form {{form_class}}">
    <div class="form__wrapper">
        {% if title.length %}
        <h3 class="form__title {{ title_class }}">{{ title | safe }}</h3>
        {% endif %}
        {% if text.length %}
        <p class="form__text {{ text_class }}">{{ text | safe }}</p>
        {% endif %}
        <div class="form__items">
            {% if not exclude_fields.name %}
            {{ form_item( 'name', 'text', 'Имя', true ) }}
            {% endif %}

            {% if not exclude_fields.phone %}
            {{ form_item( 'phone', 'text', 'Телефон', true ) }}
            {% endif %}

            {% if not exclude_fields.email %}
            {{ form_item( 'email', 'email', 'E-mail', true ) }}
            {% endif %}

            {% if add_fields.length %}
            {% for item in add_fields %}
            {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
            {% endfor %}
            {% endif %}
        </div><!-- form__items -->
        <div class="form__more">
            <label class="form__footer {{ form__footer_class }}">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на кнопку, вы соглашаетесь с <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и на получение рассылок</div>
            </label>
        </div>
        <button class="form__button button" type="submit">{{ button }}</button>
    </div>
</form>
{% endmacro %}

{% macro form_item(name, type, placeholder, required, value) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }}">
    {% if type == 'textarea' %}
    <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__input_textarea" {{ 'required' if required }}></textarea>
    {% else %}
    <input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input" {{ 'pattern=^[0-9]+$' if type == 'number' }} {{ 'min=1' if type == 'number' }} {{ 'required' if required }} value="{{ value }}">
    {% endif %}
</div><!-- form__item -->
{% endmacro %}