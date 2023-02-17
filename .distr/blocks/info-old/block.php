{% from './data.php' import data as items %}
<section class="program lazy" id="info">
    <div class="container program__container">
        <h2 class="program__title title">Выбери свое направление</h2>
        <div class="program__block">
            <div class="program__block-wrapper">
                <div class="program__block-nav">
                    {% for item in items %}
                        <div class="program__block-nav-link {{ item.class | safe }}" data-link="{{ item.link | safe }}">{{ item.direction | safe }}</div>
                    {% endfor %}
                </div>

                <div class="program__block-select">
                    <div class="program__block-info">
                        <p class="program__block-info-text">Интернет-маркетинг</p>
                    </div>

                    <div class="program__block-sub">
                        {% for item in items %}
                            {% for obj in item.course %}
                            <div class="program__block-sub-link {{ item.class | safe }} {{ obj.courseActive | safe }}" data-course="{{ item.link | safe }}"  data-identification="{{ obj.identification | safe }}">{{ obj.faculty | safe }}</div>
                            {% endfor %}
                        {% endfor %}
                    </div>
                    </div>
            </div>
            
            <div class="program__block-content">
                {% for item in items %}
                    {% for obj in item.content %}
                        <div class="program__item {{ obj.courseActive | safe }}" data-target="{{ obj.target | safe }}">
                            
                            <div class="program__item-main">
                                <div class="program__item-top">
                                    <div class="program__item-top-content">
                                        <h3 class="program__item-title">{{ item.direction | safe }}</h3>
                                        <p class="program__item-description">{{ item.textDescription | safe }}</p>
                                    </div>
                                    <img src="img/info/{{ item.link | safe }}.jpg" alt="pic" class="program__item-top-pic">
                                </div>
                                {% if obj.textHead %}
                                <p class="program__item-text">{{ obj.textHead | safe }}</p>
                                {% endif %}
                            </div>

                            <div class="program__item-swiper-wrap">
                                <div class="swiper-container program__item-swiper program__item-swiper-{{ obj.id | safe }}">
                                    <div class="swiper-wrapper program__item-block">
                                    {% for current in obj.info %}
                                        <div class="swiper-slide program__card">
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


                                    <div class="program__item-swiper-nav-pagination"></div>
                                </div>
                                <div class="program__item-swiper-nav">
                                    <div class="program__item-swiper-nav-prev program__item-swiper-nav-arrow"></div>
                                    <div class="program__item-swiper-nav-next program__item-swiper-nav-arrow"></div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>

        </div> 
    </div>
</section>




