{# <?php die(); ?> #}
{# Root, which is also the search form #}
{% extends 'sbadmin/twig/base.twig.php' %}

{% block body %}
    {% include 'sbadmin/twig/search.twig.php' %}
{% endblock %}

{# vi: set ts=4 sw=4 et ai ff=unix: #}
