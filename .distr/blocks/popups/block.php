<div class="popup-reg" id="popup-reg">
    {{ form.form( 'reg', title='Оставь заявку и&nbsp;начни обучение прямо сейчас') }}
</div>
<div class="popup-reg" id="popup-bakalavar">
    {{ form.form( 'reg', title='Оставь заявку и&nbsp;начни обучение прямо сейчас со&nbsp;стоимостью от&nbsp;4&nbsp;499 рублей в&nbsp;месяц') }}
</div>

<div class="popup-reg" id="popup-prof">
    {{ form.form( 'reg', title='Оставь заявку и&nbsp;начни обучение прямо сейчас со&nbsp;стоимостью от&nbsp;2&nbsp;099 рублей в&nbsp;месяц') }}
</div>

<div class="popup-reg" id="popup-course">
    {{ form.form( 'reg', title='Оставь заявку и&nbsp;начни обучение прямо сейчас со&nbsp;стоимостью от&nbsp;2&nbsp;399 рублей в&nbsp;месяц') }}
</div>

<div class="popup-reg" id="popup-info">
    {% set add_fields = [{name: 'form', type: 'hidden', value: 'form'}, {name: 'lidforma', type: 'hidden', value: ''} ] %}
    {{ form.form( 'reg',  title='Оставь заявку и&nbsp;начни обучение прямо сейчас', add_fields=add_fields) }}
</div>


<div class="popup-menu" id="popup-menu">
    <ul class="popup-menu__menu">
        <li>
            <a href="#info" class="scroll">Направления</a>
        </li>
        <li>
            <a href="#career" class="scroll">Центр карьеры</a>
        </li>
        <li>
            <a href="#partner" class="scroll">Партнеры</a>
        </li>
        <li>
            <a href="#faq" class="scroll">FAQ</a>
        </li>
    </ul>
    <a href="#popup-reg" data-fancybox class="button popup-menu__button">Записаться</a>
    {#<a  href="#popup-online_schol" style="margin-top: 10px" data-fancybox class="button popup-menu__button">Онлайн-школа</a>#}
</div>

{#<div class="popup-reg popup-exit_full" id="popup-online_schol">
    {{ form.form( 'reg', title='Получите полноформатное школьное образование с&nbsp;аттестатом гос. образца в&nbsp;удобном онлайн-формате. Современная интерактивная платформа для обучения, самая большая команда поддержки ученика, удобное отслеживание успеваемости, бесплатные курсы подготовки к&nbsp;ОГЭ/ЕГЭ и&nbsp;скидки до&nbsp;30% при поступлении в&nbsp;колледж/вуз Синергии после школы. Попробуйте бесплатный демо-период и&nbsp;получите консультацию профориентолога.') }}
</div>

<div class="popup popup-reg popup-exit" id="popup-exit">
    <h2>Кстати, у&nbsp;нас есть своя онлайн-школа c&nbsp;5&nbsp;по&nbsp;11&nbsp;класс!</h2>
    <a href="#popup-online_schol" data-fancybox>Узнать подробнее</a>
</div>#}
