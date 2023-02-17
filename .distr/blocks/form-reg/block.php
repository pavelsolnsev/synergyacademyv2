{% if section1 %}
<section class="form-reg section_1">
    <div class="container">
    {{ form.form( 'reg', title='Получи востребованную профессию', text='Начни зарабатывать в&nbsp;два раза больше!', button='Оставить заявку') }}
    </div>
</section>
{% elif section2 %}
<section class="form-reg section_2">
    <div class="container">
    {{ form.form( 'reg', title='Не&nbsp;определились с&nbsp;программой? Поможем в&nbsp;выборе') }}
    </div>
</section>
{% endif %}

 

