<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\AccueilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date_reserve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\BilletController::dateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reserve/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'famille' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\BilletController::datefAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/famille/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_billet' => array (  0 =>   array (    0 => 'date',    1 => 'dj',    2 => 'places',  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\BilletController::billetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'places',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dj',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    3 =>     array (      0 => 'text',      1 => '/reserve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'famille_billet' => array (  0 =>   array (    0 => 'date',    1 => 'dj',    2 => 'nom',    3 => 'pays',  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\BilletController::billetfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pays',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dj',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    4 =>     array (      0 => 'text',      1 => '/famille',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resume' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\BilletController::recapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resume',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resumef' => array (  0 =>   array (    0 => 'idf',  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\BilletController::recapfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idf',    ),    1 =>     array (      0 => 'text',      1 => '/resumef',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccueilBundle\\Controller\\BilletController::valideAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
