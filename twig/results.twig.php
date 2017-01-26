{# <?php die(); ?> #}
{# Search results #}
{% extends 'sbadmin/twig/base.twig.php' %}

{% block body %}
    {% include 'sbadmin/twig/search.twig.php' %}
{% endblock %}

{###############################}

{% block body2 %}

{% if hits is defined %}
<!-- Results -->
<div class="row">
    <div class="col-lg-6">
        {% if hits|length > 0 %}
            <h4>{{ hits|length }} results:</h4>
            <ol>
            {% for hit in hits %}
                <li>[{{ hit.score }}] <a href="{{hit.href|raw}}">"{{ hit.title|default('Unknown title') }}"</a>, {#
                    #}a {{ hit.world|default('unknown-world') }} resource</li>
            {% endfor %}
            </ol>
        {% else %}{# no hits #}
            <h4><i class="fa fa-frown-o">&nbsp;</i>No results.</h4>
        {% endif %}

    </div>
</div>
{% endif %}{# hits #}

{% endblock %}

{# vi: set ts=4 sw=4 et ai ff=unix: #}
