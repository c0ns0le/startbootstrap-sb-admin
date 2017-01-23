{# <?php die(); ?>
main.twig.php: Main file for howto.  Based on
https://github.com/BlackrockDigital/startbootstrap-sb-admin by
David Miller at Blackrock Digital
#}<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ title }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{skin}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{skin}}/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{skin}}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {% block header %}{% endblock %}
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                {% if sideitems is defined %}
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {% endif %}{# topitems #}
                <a class="navbar-brand" href="{{gen('root')}}">{{ short_title }}</a>
            </div>

            <!-- Top Menu Items -->
            {% if topitems is defined %}
            <ul class="nav navbar-right top-nav">
                {% for topitem in topitems %}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope {{ topitem.class }}"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        {% for entry in topitem.entries %}
                        <li class="message-preview">
                            {{ entry }}
                            {#
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                            #}
                        </li>
                        {% endfor %}{# entry#}
                        {% if topitem.footer is defined %}
                        <li class="message-footer">
                            {{ topitem.footer }}
                            {#<a href="#">Read All New Messages</a>#}
                        </li>
                        {% endif %}
                    </ul>
                </li>
                {% endfor %}{# topitem #}

            </ul>
            {% endif %}{# topitems #}

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            {% if sideitems is defined %}
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    {% for sideitem in sideitems %}
                    <li>
                        <a href="{{ sideitem.href }}">{#
                            #}<i class="fa fa-fw {#
                            #}{{ sideitem.icon_class|default('') }}"></i> {{ sideitem.text }}</a>
                    </li>
                    {% endfor %}{# sideitem #}
                    {#
                    <li>
                        <a href="{{gen('search')}}"><i class="fa fa-fw fa-dashboard"></i> Search</a>
                    </li>
                    <li>
                        <a href="{{skin}}//charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="{{skin}}//tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="{{skin}}/forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="{{skin}}/bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="{{skin}}/bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="{{skin}}/blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="{{skin}}/index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                    #}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            {% endif %}{# sideitems #}
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            {{ content.title }}
                            {% if content.subtitle is defined %}
                            <small>{{content.subtitle}}</small>
                            {% endif %}
                        </h1>
                        {% block crumbnav %}
                        {# So you can disable it entirely if you want. #}
                        {% if crumbs is defined %}
                        <ol class="breadcrumb">
                            {% for crumb in crumbs %}
                            <li {% if loop.last %}class="active"{% endif %}>
                                <i class="fa {#
                                    #}{{ crumb.icon_class|default('')}}"></i>
                                    <a href="{{crumb.href}}">{{crumb.text}}</a>
                            </li>
                            {% endfor %}
                        </ol>
                        {% endif %}{# crumbs #}
                        {% endblock %}{# crumbnav #}
                    </div>
                </div>
                <!-- /.row -->

                {% block body %}
                {% for row in rows %}
                <div class="row">
                    {{row}}
                </div>
                <!-- /.row -->
                {% endfor %}
                {% endblock %}{# body #}

                {% block body2 %}{% endblock %}

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div id="footer">
    Brought to you by <a href="https://bitbucket.org/inclinescene/public">Incline</a>.  Code by <a href="http://www.devwrench.com">cxw</a>.
    Hosted by <a href="http://planet-d.net">Guardian</a>.
    <a href="https://github.com/cxw42/startbootstrap-sb-admin">Theme</a>
    based on
    <a href="https://startbootstrap.com/template-overviews/sb-admin/">SB Admin</a>
    by <a href="http://davidmiller.io/">David Miller</a>.
    </div>

    <!-- jQuery -->
    <script src="{{skin}}/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{skin}}/js/bootstrap.min.js"></script>

</body>

</html>
{# vi: set ts=4 sw=4 et ai ff=unix: #}
