{# <?php die(); ?> #}
{# Root, which is also the search form #}
{% extends 'sbadmin/twig/base.twig.php' %}

{% block body %}
    {% if not nosearch|default(false) %}{# Ugly hack #}
        {% include 'sbadmin/twig/search.twig.php' %}
    {% else %}
        {% for row in rows %}
        <div class="row">
            {{row|raw}}
        </div>
        <!-- /.row -->
        {% endfor %}
    {% endif %}
{% endblock %}

{# vi: set ts=4 sw=4 et ai ff=unix: #}
