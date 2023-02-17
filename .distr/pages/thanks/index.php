{% extends 'default.php' %}

{% set BODY_CLASS = 'page-thanks' %}

{% block blocks %}
	{% set thanks = true %}
	{% include 'header/block.php' %}
	{% include 'thanks/block.php' %}
	{% set class = 'blockThanks' %}
	{% include 'footer/block.php' %}
{% endblock %}

{% block footerThanks %}
{% endblock %}

