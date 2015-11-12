<?php

/* PointWebFicheBundle:Default:index.html.twig */
class __TwigTemplate_187148cf4bc5969270182f55edf0e2b9d4cf360c647d64becc1c97b80fdbf228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebFicheBundle::base.html.twig", "PointWebFicheBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebFicheBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <i class=\"fa fa-info-circle\"></i> <strong>Bienvenue ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullname", array()), "html", null, true);
        echo "</strong>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class=\"row\">

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-comments fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["fichefrais"]) ? $context["fichefrais"] : $this->getContext($context, "fichefrais"))), "html", null, true);
        echo "</div>
                            <div>Fiche de Frais </div>
                        </div>
                    </div>
                </div>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_frais");
        echo "\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Plus de détail</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>

                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-tasks fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">???</div>
                            <div>Fiche de frais Validé</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Plus de détail</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>

                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-yellow\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-shopping-cart fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">???</div>
                            <div>Fiche de frais en Attente</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Plus de détail</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>

                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-support fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">???</div>
                            <div>Fiche de frais refusé</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Plus de détail</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>

                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart</h3>
                </div>
                <div class=\"panel-body\">
                    <div id=\"morris-donut-chart\"></div>
                    <div class=\"text-right\">
                        <a href=\"#\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> Dernières Fiches de frais</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"list-group\">
                        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichefrais"]) ? $context["fichefrais"] : $this->getContext($context, "fichefrais")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 135
            echo "                            <a href=\"#\" class=\"list-group-item\">
                                <span class=\"badge\">date</span>
                                <i class=\"fa fa-fw fa-calendar\"></i> Fiche de frais n°";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                    </div>
                    <div class=\"text-right\">
                        <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("admin_frais");
        echo "\">Voir plus d'activité.<i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Transactions Panel</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-striped\">
                            <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Order Date</th>
                                <th>Order Time</th>
                                <th>Amount (USD)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>3326</td>
                                <td>10/21/2013</td>
                                <td>3:29 PM</td>
                                <td>\$321.33</td>
                            </tr>
                            <tr>
                                <td>3325</td>
                                <td>10/21/2013</td>
                                <td>3:20 PM</td>
                                <td>\$234.34</td>
                            </tr>
                            <tr>
                                <td>3324</td>
                                <td>10/21/2013</td>
                                <td>3:03 PM</td>
                                <td>\$724.17</td>
                            </tr>
                            <tr>
                                <td>3323</td>
                                <td>10/21/2013</td>
                                <td>3:00 PM</td>
                                <td>\$23.71</td>
                            </tr>
                            <tr>
                                <td>3322</td>
                                <td>10/21/2013</td>
                                <td>2:49 PM</td>
                                <td>\$8345.23</td>
                            </tr>
                            <tr>
                                <td>3321</td>
                                <td>10/21/2013</td>
                                <td>2:23 PM</td>
                                <td>\$245.12</td>
                            </tr>
                            <tr>
                                <td>3320</td>
                                <td>10/21/2013</td>
                                <td>2:15 PM</td>
                                <td>\$5663.54</td>
                            </tr>
                            <tr>
                                <td>3319</td>
                                <td>10/21/2013</td>
                                <td>2:13 PM</td>
                                <td>\$943.45</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"text-right\">
                        <a href=\"#\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Graphique Fiche de Frais</h3>
                </div>
                <div class=\"panel-body\">
                    <div id=\"Graphique\"></div>
                </div>
            </div>
        </div>
        <script>
            // Area Chart
            Morris.Area({
                element: 'Graphique',
                data: [{
                    period: '2010 Q1',
                    iphone: 2666,
                    ipad: null,
                    itouch: 2647
                }, {
                    period: '2010 Q2',
                    iphone: 2778,
                    ipad: 2294,
                    itouch: 2441
                }, {
                    period: '2010 Q3',
                    iphone: 4912,
                    ipad: 1969,
                    itouch: 2501
                }, {
                    period: '2010 Q4',
                    iphone: 3767,
                    ipad: 3597,
                    itouch: 5689
                }, {
                    period: '2011 Q1',
                    iphone: 6810,
                    ipad: 1914,
                    itouch: 2293
                }, {
                    period: '2011 Q2',
                    iphone: 5670,
                    ipad: 4293,
                    itouch: 1881
                }, {
                    period: '2011 Q3',
                    iphone: 4820,
                    ipad: 3795,
                    itouch: 1588
                }, {
                    period: '2011 Q4',
                    iphone: 15073,
                    ipad: 5967,
                    itouch: 5175
                }, {
                    period: '2012 Q1',
                    iphone: 10687,
                    ipad: 4460,
                    itouch: 2028
                }, {
                    period: '2012 Q2',
                    iphone: 8432,
                    ipad: 5713,
                    itouch: 1791
                }],
                xkey: 'period',
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['iPhone', 'iPad', 'iPod Touch'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });

        </script>
    </div>



";
    }

    public function getTemplateName()
    {
        return "PointWebFicheBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 142,  190 => 140,  181 => 137,  177 => 135,  173 => 134,  64 => 28,  56 => 23,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebFicheBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="alert alert-info alert-dismissable">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*                 <i class="fa fa-info-circle"></i> <strong>Bienvenue {{ app.user.fullname }}</strong>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-lg-3 col-md-6">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-3">*/
/*                             <i class="fa fa-comments fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-9 text-right">*/
/*                             <div class="huge">{{ fichefrais|length}}</div>*/
/*                             <div>Fiche de Frais </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <a href="{{ path('admin_frais') }}">*/
/*                     <div class="panel-footer">*/
/*                         <span class="pull-left">Plus de détail</span>*/
/*                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* */
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-lg-3 col-md-6">*/
/*             <div class="panel panel-green">*/
/*                 <div class="panel-heading">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-3">*/
/*                             <i class="fa fa-tasks fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-9 text-right">*/
/*                             <div class="huge">???</div>*/
/*                             <div>Fiche de frais Validé</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <a href="#">*/
/*                     <div class="panel-footer">*/
/*                         <span class="pull-left">Plus de détail</span>*/
/*                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* */
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-3 col-md-6">*/
/*             <div class="panel panel-yellow">*/
/*                 <div class="panel-heading">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-3">*/
/*                             <i class="fa fa-shopping-cart fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-9 text-right">*/
/*                             <div class="huge">???</div>*/
/*                             <div>Fiche de frais en Attente</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <a href="#">*/
/*                     <div class="panel-footer">*/
/*                         <span class="pull-left">Plus de détail</span>*/
/*                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* */
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-3 col-md-6">*/
/*             <div class="panel panel-red">*/
/*                 <div class="panel-heading">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-3">*/
/*                             <i class="fa fa-support fa-5x"></i>*/
/*                         </div>*/
/*                         <div class="col-xs-9 text-right">*/
/*                             <div class="huge">???</div>*/
/*                             <div>Fiche de frais refusé</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <a href="#">*/
/*                     <div class="panel-footer">*/
/*                         <span class="pull-left">Plus de détail</span>*/
/*                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/* */
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- /.row -->*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-4">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div id="morris-donut-chart"></div>*/
/*                     <div class="text-right">*/
/*                         <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-lg-4">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Dernières Fiches de frais</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="list-group">*/
/*                         {% for fiche in fichefrais %}*/
/*                             <a href="#" class="list-group-item">*/
/*                                 <span class="badge">date</span>*/
/*                                 <i class="fa fa-fw fa-calendar"></i> Fiche de frais n°{{ fiche.id }}*/
/*                             </a>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="text-right">*/
/*                         <a href="{{ path('admin_frais') }}">Voir plus d'activité.<i class="fa fa-arrow-circle-right"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-lg-4">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover table-striped">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Order #</th>*/
/*                                 <th>Order Date</th>*/
/*                                 <th>Order Time</th>*/
/*                                 <th>Amount (USD)</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             <tr>*/
/*                                 <td>3326</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>3:29 PM</td>*/
/*                                 <td>$321.33</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3325</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>3:20 PM</td>*/
/*                                 <td>$234.34</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3324</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>3:03 PM</td>*/
/*                                 <td>$724.17</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3323</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>3:00 PM</td>*/
/*                                 <td>$23.71</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3322</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>2:49 PM</td>*/
/*                                 <td>$8345.23</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3321</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>2:23 PM</td>*/
/*                                 <td>$245.12</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3320</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>2:15 PM</td>*/
/*                                 <td>$5663.54</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>3319</td>*/
/*                                 <td>10/21/2013</td>*/
/*                                 <td>2:13 PM</td>*/
/*                                 <td>$943.45</td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="text-right">*/
/*                         <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Graphique Fiche de Frais</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div id="Graphique"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <script>*/
/*             // Area Chart*/
/*             Morris.Area({*/
/*                 element: 'Graphique',*/
/*                 data: [{*/
/*                     period: '2010 Q1',*/
/*                     iphone: 2666,*/
/*                     ipad: null,*/
/*                     itouch: 2647*/
/*                 }, {*/
/*                     period: '2010 Q2',*/
/*                     iphone: 2778,*/
/*                     ipad: 2294,*/
/*                     itouch: 2441*/
/*                 }, {*/
/*                     period: '2010 Q3',*/
/*                     iphone: 4912,*/
/*                     ipad: 1969,*/
/*                     itouch: 2501*/
/*                 }, {*/
/*                     period: '2010 Q4',*/
/*                     iphone: 3767,*/
/*                     ipad: 3597,*/
/*                     itouch: 5689*/
/*                 }, {*/
/*                     period: '2011 Q1',*/
/*                     iphone: 6810,*/
/*                     ipad: 1914,*/
/*                     itouch: 2293*/
/*                 }, {*/
/*                     period: '2011 Q2',*/
/*                     iphone: 5670,*/
/*                     ipad: 4293,*/
/*                     itouch: 1881*/
/*                 }, {*/
/*                     period: '2011 Q3',*/
/*                     iphone: 4820,*/
/*                     ipad: 3795,*/
/*                     itouch: 1588*/
/*                 }, {*/
/*                     period: '2011 Q4',*/
/*                     iphone: 15073,*/
/*                     ipad: 5967,*/
/*                     itouch: 5175*/
/*                 }, {*/
/*                     period: '2012 Q1',*/
/*                     iphone: 10687,*/
/*                     ipad: 4460,*/
/*                     itouch: 2028*/
/*                 }, {*/
/*                     period: '2012 Q2',*/
/*                     iphone: 8432,*/
/*                     ipad: 5713,*/
/*                     itouch: 1791*/
/*                 }],*/
/*                 xkey: 'period',*/
/*                 ykeys: ['iphone', 'ipad', 'itouch'],*/
/*                 labels: ['iPhone', 'iPad', 'iPod Touch'],*/
/*                 pointSize: 2,*/
/*                 hideHover: 'auto',*/
/*                 resize: true*/
/*             });*/
/* */
/*         </script>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
