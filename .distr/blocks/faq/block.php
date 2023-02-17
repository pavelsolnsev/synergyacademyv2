{% from './data.njk' import data as faq %}
<section class="faq" id="faq">
    <div class="container">
        <h2 class="faq__title title">Часто задаваемые вопросы</h2>
        <ul class="faq__acco">
            {% for item in faq %}
            <li class="faq__acco-item">
                <div class="faq__acco-trigger">
                    <div class="faq__acco-title"><span>{{ item.title | safe }}</span>
                        <div class="faq__acco-img"><img src="img/faq/theme.svg" alt=""></div>
                    </div>
                </div>
                <p class="faq__acco-text">{{ item.text | safe }}</p>
            </li>
            {% endfor %}
        </ul>
        <a href="#popup-reg" class="faq__button button" data-fancybox>Задать свой вопрос</a>
    </div>
</section>