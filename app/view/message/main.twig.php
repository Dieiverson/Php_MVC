{% extends 'partials/body.twig.php' %}
{% block title %}Página não encontrada{% endblock %}
{% block body %}
<div class="card border-danger mb-3" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
    <h4 class="card-title" style="color:white">{{title}}</h4>
    <p class="card-text" style="color:white">{{message}}</p>
  </div>
{% endblock %}