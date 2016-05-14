<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accueil');
            }

            return array (  '_controller' => 'AccueilBundle\\Controller\\AccueilController::indexAction',  '_route' => 'accueil',);
        }

        // date_reserve
        if (rtrim($pathinfo, '/') === '/reserve') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'date_reserve');
            }

            return array (  '_controller' => 'AccueilBundle\\Controller\\BilletController::dateAction',  '_route' => 'date_reserve',);
        }

        // famille
        if (rtrim($pathinfo, '/') === '/famille') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'famille');
            }

            return array (  '_controller' => 'AccueilBundle\\Controller\\BilletController::datefAction',  '_route' => 'famille',);
        }

        // reservation_billet
        if (0 === strpos($pathinfo, '/reserve') && preg_match('#^/reserve/(?P<date>[^/]++)/(?P<dj>[^/]++)/(?P<places>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_billet')), array (  '_controller' => 'AccueilBundle\\Controller\\BilletController::billetAction',));
        }

        // famille_billet
        if (0 === strpos($pathinfo, '/famille') && preg_match('#^/famille/(?P<date>[^/]++)/(?P<dj>[^/]++)/(?P<nom>[^/]++)/(?P<pays>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_billet')), array (  '_controller' => 'AccueilBundle\\Controller\\BilletController::billetfAction',));
        }

        if (0 === strpos($pathinfo, '/resume')) {
            // resume
            if (preg_match('#^/resume/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resume')), array (  '_controller' => 'AccueilBundle\\Controller\\BilletController::recapAction',));
            }

            // resumef
            if (0 === strpos($pathinfo, '/resumef') && preg_match('#^/resumef/(?P<idf>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resumef')), array (  '_controller' => 'AccueilBundle\\Controller\\BilletController::recapfAction',));
            }

        }

        // validation
        if (0 === strpos($pathinfo, '/validation') && preg_match('#^/validation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation')), array (  '_controller' => 'AccueilBundle\\Controller\\BilletController::valideAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
