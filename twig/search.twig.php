{# <?php die(); ?> #}
{# search.twig.php: The search form.
   Usually included in a block body.
#}

<!-- Search form -->
<div class="row">
    <div class="col-lg-6">

        <form role="form" method="get" action="/">{# TODO gen these #}

            <div class="form-group">
                <label>Search query:</label>
                <input id="q" name="q" type="text" class="form-control" {##}
                    {% if query is defined %} value="{{query}}" {% endif %}
                    autofocus="autofocus"
                />
                <p class="help-block">Enter a <a target="_blank" href="https://framework.zend.com/manual/1.12/en/zend.search.lucene.query-language.html">Zend Lucene query string</a></p>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">{#
                    #}{{ search_label|default('Search')}}</button>
            </div>

            <input type="hidden" name="p" value="/results" />
                {# TODO gen this URL #}

        </form>
    </div>
</div>
{# vi: set ts=4 sw=4 et ai ff=unix: #}
