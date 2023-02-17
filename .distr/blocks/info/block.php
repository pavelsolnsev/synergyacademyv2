{% from './data.php' import data as items, course as course %}
<section class="program lazy" id="info">
    <div class="container program__container">
        <h2 class="program__title title">Выбери свое направление</h2>
        <div class="program__block">
            <div class="program__block-wrapper">
                <div class="program__block-select">
                    <div class="program__block-sub">
                        {% for item in course %}
                        <div class="program__block-sub-link {{ item.class | safe }} active {{ item.courseActive | safe }}" data-identification="{{ item.identification | safe }}">{{ item.faculty | safe }}</div>
                        {% endfor %}
                    </div>
                </div>
            </div>

            <div class="program__block-content">
                {% for item in items %}
                {% for obj in item.content %}
                <div class="program__item {{ obj.courseActive | safe }}" data-target="{{ obj.target | safe }}">
                    <div class="program__item-main">
                        {% if obj.textHead %}
                        <p class="program__item-text">{{ obj.textHead | safe }}</p>
                        {% endif %}
                    </div>
                    <div class="program__item-title {{ item.subclass | safe }}">{{ item.direction | safe }}</div>
                    <div class="program__item-slider">
                        {% for current in obj.info %}
                        <div class="program__card">
                            <div class="program__card-img">
                                <img src="img/info/icon/{{ current.icon | safe }}.svg" alt="pic" class="program__card-pic">
                            </div>
                            <p class="program__card-title" data-title>{{ current.title | safe }}</p>
                            {% if current.text %}
                            <p class="program__card-text">{{ current.text | safe }}</p>
                            {% endif %}
                            <p class="program__card-description">{{ current.desc | safe }}</p>
                            <a href="#popup-info" class="program__card-link" data-fancybox data-form="{{ obj.target | safe }}">Узнать больше</a>
                        </div>
                        {% endfor %}
                    </div>
                </div>
                {% endfor %}
                {% endfor %}
            </div>
        </div>
    </div>
</section>