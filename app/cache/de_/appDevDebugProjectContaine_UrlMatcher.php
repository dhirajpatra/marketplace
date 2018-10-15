<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContaine_UrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContaine_UrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // en__RG__cocorico_booking_new
            if (0 === strpos($pathinfo, '/en/booking') && preg_match('#^/en/booking/(?P<listing_id>\\d+)/(?P<start>[^/]++)/(?P<end>[^/]++)/(?P<start_time>[^/]++)/(?P<end_time>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_booking_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_booking_new')), array (  'start_time' => '00:00',  'end_time' => '00:00',  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingController::newAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_booking_new:

            // ee__RG__cocorico_booking_new
            if (0 === strpos($pathinfo, '/ee/booking') && preg_match('#^/ee/booking/(?P<listing_id>\\d+)/(?P<start>[^/]++)/(?P<end>[^/]++)/(?P<start_time>[^/]++)/(?P<end_time>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_booking_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_booking_new')), array (  'start_time' => '00:00',  'end_time' => '00:00',  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingController::newAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_booking_new:

            // en__RG__cocorico_booking_price
            if (0 === strpos($pathinfo, '/en/booking') && preg_match('#^/en/booking/(?P<listing_id>\\d+)/price$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_en__RG__cocorico_booking_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_booking_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingPriceController::getBookingPriceAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_booking_price:

            // ee__RG__cocorico_booking_price
            if (0 === strpos($pathinfo, '/ee/booking') && preg_match('#^/ee/booking/(?P<listing_id>\\d+)/price$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ee__RG__cocorico_booking_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_booking_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingPriceController::getBookingPriceAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_booking_price:

            // en__RG__cocorico_currency_switch
            if (0 === strpos($pathinfo, '/en/currency') && preg_match('#^/en/currency/(?P<currency>EUR)/switch$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_currency_switch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_currency_switch')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\CurrencyController::switchAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_currency_switch:

            // ee__RG__cocorico_currency_switch
            if (0 === strpos($pathinfo, '/ee/currency') && preg_match('#^/ee/currency/(?P<currency>EUR)/switch$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_currency_switch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_currency_switch')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\CurrencyController::switchAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_currency_switch:

            // en__RG__cocorico_home
            if (rtrim($pathinfo, '/') === '/en') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'en__RG__cocorico_home');
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\HomeController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_home',);
            }

            // ee__RG__cocorico_home
            if (rtrim($pathinfo, '/') === '/ee') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ee__RG__cocorico_home');
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\HomeController::indexAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_home',);
            }

            // en__RG__cocorico_language_translate
            if ($pathinfo === '/en/language/translate') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_en__RG__cocorico_language_translate;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\LanguageController::translateDataAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_language_translate',);
            }
            not_en__RG__cocorico_language_translate:

            // ee__RG__cocorico_language_translate
            if ($pathinfo === '/ee/language/translate') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ee__RG__cocorico_language_translate;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\LanguageController::translateDataAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_language_translate',);
            }
            not_ee__RG__cocorico_language_translate:

            // en__RG__cocorico_listing_availabilities
            if (0 === strpos($pathinfo, '/en/listing-availabilities') && preg_match('#^/en/listing\\-availabilities/(?P<listing_id>\\d+)/(?P<start>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<end>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_listing_availabilities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_availabilities')), array (  '_format' => 'json',  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingAvailabilityController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_listing_availabilities:

            // ee__RG__cocorico_listing_availabilities
            if (0 === strpos($pathinfo, '/ee/listing-availabilities') && preg_match('#^/ee/listing\\-availabilities/(?P<listing_id>\\d+)/(?P<start>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<end>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_listing_availabilities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_listing_availabilities')), array (  '_format' => 'json',  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingAvailabilityController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_listing_availabilities:

            // en__RG__cocorico_dashboard_listing_new_categories
            if ($pathinfo === '/en/listing/new_categories') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_new_categories;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingCategoriesController::newCategoriesAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_listing_new_categories',);
            }
            not_en__RG__cocorico_dashboard_listing_new_categories:

            // ee__RG__cocorico_dashboard_listing_new_categories
            if ($pathinfo === '/ee/listing/new_categories') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_new_categories;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingCategoriesController::newCategoriesAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_dashboard_listing_new_categories',);
            }
            not_ee__RG__cocorico_dashboard_listing_new_categories:

            // en__RG__cocorico_listing_new
            if ($pathinfo === '/en/listing/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_listing_new;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::newAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_listing_new',);
            }
            not_en__RG__cocorico_listing_new:

            // ee__RG__cocorico_listing_new
            if ($pathinfo === '/ee/listing/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_listing_new;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::newAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_listing_new',);
            }
            not_ee__RG__cocorico_listing_new:

            // en__RG__cocorico_listing_show
            if (0 === strpos($pathinfo, '/en/listing') && preg_match('#^/en/listing/(?P<slug>[a-z0-9-]+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_listing_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_show')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::showAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_listing_show:

            // ee__RG__cocorico_listing_show
            if (0 === strpos($pathinfo, '/ee/listing') && preg_match('#^/ee/listing/(?P<slug>[a-z0-9-]+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_listing_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_listing_show')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::showAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_listing_show:

            // en__RG__cocorico_listing_favourite
            if ($pathinfo === '/en/listing/favourite') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_listing_favourite;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingFavouriteController::indexFavouriteAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_listing_favourite',);
            }
            not_en__RG__cocorico_listing_favourite:

            // ee__RG__cocorico_listing_favourite
            if ($pathinfo === '/ee/listing/favourite') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_listing_favourite;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingFavouriteController::indexFavouriteAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_listing_favourite',);
            }
            not_ee__RG__cocorico_listing_favourite:

            // en__RG__cocorico_listing_search_result
            if ($pathinfo === '/en/listing/search_result') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_listing_search_result;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::searchAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_listing_search_result',);
            }
            not_en__RG__cocorico_listing_search_result:

            // ee__RG__cocorico_listing_search_result
            if ($pathinfo === '/ee/listing/search_result') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_listing_search_result;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::searchAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_listing_search_result',);
            }
            not_ee__RG__cocorico_listing_search_result:

            // en__RG__cocorico_listing_similar
            if (0 === strpos($pathinfo, '/en/listing/similar_result') && preg_match('#^/en/listing/similar_result(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_listing_similar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_similar')), array (  'id' => NULL,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::similarListingAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_listing_similar:

            // ee__RG__cocorico_listing_similar
            if (0 === strpos($pathinfo, '/ee/listing/similar_result') && preg_match('#^/ee/listing/similar_result(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_listing_similar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_listing_similar')), array (  'id' => NULL,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::similarListingAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_listing_similar:

            // en__RG__cocorico_dashboard_booking_asker
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking') && preg_match('#^/en/dashboard/asker/booking(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_asker:

            // ee__RG__cocorico_dashboard_booking_asker
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking') && preg_match('#^/ee/dashboard/asker/booking(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_asker:

            // en__RG__cocorico_dashboard_booking_show_asker
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking') && preg_match('#^/en/dashboard/asker/booking/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_show_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_show_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_show_asker:

            // ee__RG__cocorico_dashboard_booking_show_asker
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking') && preg_match('#^/ee/dashboard/asker/booking/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_show_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_show_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_show_asker:

            // en__RG__cocorico_dashboard_booking_edit_asker
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking') && preg_match('#^/en/dashboard/asker/booking/(?P<id>\\d+)/edit/(?P<type>cancel)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_edit_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_edit_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::editAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_edit_asker:

            // ee__RG__cocorico_dashboard_booking_edit_asker
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking') && preg_match('#^/ee/dashboard/asker/booking/(?P<id>\\d+)/edit/(?P<type>cancel)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_edit_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_edit_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::editAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_edit_asker:

            // en__RG__cocorico_dashboard_booking_show_voucher
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking') && preg_match('#^/en/dashboard/asker/booking/(?P<id>\\d+)/show\\-voucher$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_show_voucher;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_show_voucher')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showVoucherAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_show_voucher:

            // ee__RG__cocorico_dashboard_booking_show_voucher
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking') && preg_match('#^/ee/dashboard/asker/booking/(?P<id>\\d+)/show\\-voucher$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_show_voucher;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_show_voucher')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showVoucherAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_show_voucher:

            // en__RG__cocorico_dashboard_booking_payin_asker
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking-payin') && preg_match('#^/en/dashboard/asker/booking\\-payin(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_payin_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_payin_asker:

            // ee__RG__cocorico_dashboard_booking_payin_asker
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking-payin') && preg_match('#^/ee/dashboard/asker/booking\\-payin(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_payin_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_payin_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_payin_asker:

            // en__RG__cocorico_dashboard_booking_payin_show_bill_asker
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking-payin') && preg_match('#^/en/dashboard/asker/booking\\-payin/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_payin_show_bill_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::showBillAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_payin_show_bill_asker:

            // ee__RG__cocorico_dashboard_booking_payin_show_bill_asker
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking-payin') && preg_match('#^/ee/dashboard/asker/booking\\-payin/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_payin_show_bill_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_payin_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::showBillAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_payin_show_bill_asker:

            // en__RG__cocorico_dashboard_booking_payin_refund_asker
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking-payin-refund') && preg_match('#^/en/dashboard/asker/booking\\-payin\\-refund(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_payin_refund_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_refund_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_payin_refund_asker:

            // ee__RG__cocorico_dashboard_booking_payin_refund_asker
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking-payin-refund') && preg_match('#^/ee/dashboard/asker/booking\\-payin\\-refund(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_payin_refund_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_payin_refund_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_payin_refund_asker:

            // en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker
            if (0 === strpos($pathinfo, '/en/dashboard/asker/booking-payin-refund') && preg_match('#^/en/dashboard/asker/booking\\-payin\\-refund/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::showBillAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker:

            // ee__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker
            if (0 === strpos($pathinfo, '/ee/dashboard/asker/booking-payin-refund') && preg_match('#^/ee/dashboard/asker/booking\\-payin\\-refund/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::showBillAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker:

            // en__RG__cocorico_dashboard_booking_bank_wire_offerer
            if (0 === strpos($pathinfo, '/en/dashboard/offerer/booking-bank-wire') && preg_match('#^/en/dashboard/offerer/booking\\-bank\\-wire(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_bank_wire_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_bank_wire_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_bank_wire_offerer:

            // ee__RG__cocorico_dashboard_booking_bank_wire_offerer
            if (0 === strpos($pathinfo, '/ee/dashboard/offerer/booking-bank-wire') && preg_match('#^/ee/dashboard/offerer/booking\\-bank\\-wire(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_bank_wire_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_bank_wire_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_bank_wire_offerer:

            // en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer
            if (0 === strpos($pathinfo, '/en/dashboard/offerer/booking-bank-wire') && preg_match('#^/en/dashboard/offerer/booking\\-bank\\-wire/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::showBillAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer:

            // ee__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer
            if (0 === strpos($pathinfo, '/ee/dashboard/offerer/booking-bank-wire') && preg_match('#^/ee/dashboard/offerer/booking\\-bank\\-wire/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::showBillAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer:

            // en__RG__cocorico_dashboard_booking_offerer
            if (0 === strpos($pathinfo, '/en/dashboard/offerer/booking') && preg_match('#^/en/dashboard/offerer/booking(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_offerer:

            // ee__RG__cocorico_dashboard_booking_offerer
            if (0 === strpos($pathinfo, '/ee/dashboard/offerer/booking') && preg_match('#^/ee/dashboard/offerer/booking(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_offerer:

            // en__RG__cocorico_dashboard_booking_show_offerer
            if (0 === strpos($pathinfo, '/en/dashboard/offerer/booking') && preg_match('#^/en/dashboard/offerer/booking/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_show_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_show_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::showAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_show_offerer:

            // ee__RG__cocorico_dashboard_booking_show_offerer
            if (0 === strpos($pathinfo, '/ee/dashboard/offerer/booking') && preg_match('#^/ee/dashboard/offerer/booking/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_show_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_show_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::showAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_show_offerer:

            // en__RG__cocorico_dashboard_booking_edit_offerer
            if (0 === strpos($pathinfo, '/en/dashboard/offerer/booking') && preg_match('#^/en/dashboard/offerer/booking/(?P<id>\\d+)/edit/(?P<type>accept|refuse)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_booking_edit_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_edit_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::editAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_booking_edit_offerer:

            // ee__RG__cocorico_dashboard_booking_edit_offerer
            if (0 === strpos($pathinfo, '/ee/dashboard/offerer/booking') && preg_match('#^/ee/dashboard/offerer/booking/(?P<id>\\d+)/edit/(?P<type>accept|refuse)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_booking_edit_offerer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_booking_edit_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::editAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_booking_edit_offerer:

            // en__RG__cocorico_dashboard_listing_edit_availabilities_prices
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/edit_availabilities_prices$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_availabilities_prices;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availabilities_prices')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAvailabilitiesPricesAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_availabilities_prices:

            // ee__RG__cocorico_dashboard_listing_edit_availabilities_prices
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<listing_id>\\d+)/edit_availabilities_prices$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_availabilities_prices;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_availabilities_prices')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAvailabilitiesPricesAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_availabilities_prices:

            // en__RG__cocorico_dashboard_listing_new_availability_price
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/new_availability_price$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_new_availability_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_new_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::newAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_new_availability_price:

            // ee__RG__cocorico_dashboard_listing_new_availability_price
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/new_availability_price$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_new_availability_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_new_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::newAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_new_availability_price:

            // en__RG__cocorico_dashboard_listing_edit_availability_price
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<id>[a-z0-9]+)/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/edit_availability_price$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_availability_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_availability_price:

            // ee__RG__cocorico_dashboard_listing_edit_availability_price
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<listing_id>\\d+)/(?P<id>[a-z0-9]+)/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/edit_availability_price$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_availability_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_availability_price:

            // en__RG__cocorico_dashboard_listing_edit_availabilities_status
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/edit_availabilities_status$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_availabilities_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availabilities_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAvailabilitiesStatusAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_availabilities_status:

            // ee__RG__cocorico_dashboard_listing_edit_availabilities_status
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<listing_id>\\d+)/edit_availabilities_status$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_availabilities_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_availabilities_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAvailabilitiesStatusAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_availabilities_status:

            // en__RG__cocorico_dashboard_listing_new_availability_status
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/new_availability_status$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_new_availability_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_new_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::newAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_new_availability_status:

            // ee__RG__cocorico_dashboard_listing_new_availability_status
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/new_availability_status$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_new_availability_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_new_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::newAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_new_availability_status:

            // en__RG__cocorico_dashboard_listing_edit_availability_status
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<id>[a-z0-9]+)/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/edit_availability_status$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_availability_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_availability_status:

            // ee__RG__cocorico_dashboard_listing_edit_availability_status
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<listing_id>\\d+)/(?P<id>[a-z0-9]+)/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/edit_availability_status$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_availability_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_availability_status:

            // en__RG__cocorico_dashboard_listing_edit_categories_ajax
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_categories_ajax$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_categories_ajax;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_categories_ajax')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesAjaxController::editCategoriesAjaxAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_categories_ajax:

            // ee__RG__cocorico_dashboard_listing_edit_categories_ajax
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_categories_ajax$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_categories_ajax;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_categories_ajax')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesAjaxController::editCategoriesAjaxAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_categories_ajax:

            // en__RG__cocorico_dashboard_listing_edit_categories
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_categories$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_categories;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_categories')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesController::editCategoriesAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_categories:

            // ee__RG__cocorico_dashboard_listing_edit_categories
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_categories$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_categories;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_categories')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesController::editCategoriesAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_categories:

            // en__RG__cocorico_dashboard_listing_edit_characteristic
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_characteristic$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_characteristic;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_characteristic')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCharacteristicController::editCharacteristicAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_characteristic:

            // ee__RG__cocorico_dashboard_listing_edit_characteristic
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_characteristic$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_characteristic;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_characteristic')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCharacteristicController::editCharacteristicAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_characteristic:

            // en__RG__cocorico_dashboard_listing_edit_status
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_status$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_en__RG__cocorico_dashboard_listing_edit_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editStatusAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_status:

            // ee__RG__cocorico_dashboard_listing_edit_status
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_status$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ee__RG__cocorico_dashboard_listing_edit_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editStatusAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_status:

            // en__RG__cocorico_dashboard_listing_edit_price
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_price$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editPriceAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_price:

            // ee__RG__cocorico_dashboard_listing_edit_price
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_price$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_price;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editPriceAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_price:

            // en__RG__cocorico_dashboard_listing_edit_duration
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_duration$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_en__RG__cocorico_dashboard_listing_edit_duration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_duration')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editDurationAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_duration:

            // ee__RG__cocorico_dashboard_listing_edit_duration
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_duration$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ee__RG__cocorico_dashboard_listing_edit_duration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_duration')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editDurationAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_duration:

            // en__RG__cocorico_dashboard_listing
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing:

            // ee__RG__cocorico_dashboard_listing
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing:

            // en__RG__cocorico_dashboard_listing_edit_discount
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_discount$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_discount;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_discount')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDiscountController::editDiscountAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_discount:

            // ee__RG__cocorico_dashboard_listing_edit_discount
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_discount$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_discount;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_discount')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDiscountController::editDiscountAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_discount:

            // en__RG__cocorico_dashboard_listing_duplicate
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/duplicate$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_duplicate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_duplicate')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDuplicateController::duplicateAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_duplicate:

            // ee__RG__cocorico_dashboard_listing_duplicate
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/duplicate$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_duplicate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_duplicate')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDuplicateController::duplicateAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_duplicate:

            // en__RG__cocorico_dashboard_listing_edit_images
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_images$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_images;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_images')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingImageController::editImagesAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_images:

            // ee__RG__cocorico_dashboard_listing_edit_images
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_images$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_images;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_images')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingImageController::editImagesAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_images:

            // en__RG__cocorico_dashboard_listing_edit_location
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_location$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_location;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_location')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingLocationController::editLocationAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_location:

            // ee__RG__cocorico_dashboard_listing_edit_location
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_location$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_location;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_location')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingLocationController::editLocationAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_location:

            // en__RG__cocorico_dashboard_listing_edit_presentation
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_presentation$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_listing_edit_presentation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_presentation')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPresentationController::editPresentationAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_edit_presentation:

            // ee__RG__cocorico_dashboard_listing_edit_presentation
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/edit_presentation$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'PUT', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_listing_edit_presentation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_edit_presentation')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPresentationController::editPresentationAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_edit_presentation:

            // en__RG__cocorico_dashboard_listing_price_simulator
            if (0 === strpos($pathinfo, '/en/dashboard/listing') && preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/price_simulator$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_en__RG__cocorico_dashboard_listing_price_simulator;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_price_simulator')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPriceSimulatorController::priceSimulatorAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_listing_price_simulator:

            // ee__RG__cocorico_dashboard_listing_price_simulator
            if (0 === strpos($pathinfo, '/ee/dashboard/listing') && preg_match('#^/ee/dashboard/listing/(?P<id>\\d+)/price_simulator$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ee__RG__cocorico_dashboard_listing_price_simulator;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_listing_price_simulator')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPriceSimulatorController::priceSimulatorAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_listing_price_simulator:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/listing')) {
                // admin_cocorico_core_listing_list
                if ($pathinfo === '/admin/listing/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_list',  '_route' => 'admin_cocorico_core_listing_list',);
                }

                // admin_cocorico_core_listing_batch
                if ($pathinfo === '/admin/listing/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_batch',  '_route' => 'admin_cocorico_core_listing_batch',);
                }

                // admin_cocorico_core_listing_edit
                if (preg_match('#^/admin/listing/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listing_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_edit',));
                }

                // admin_cocorico_core_listing_show
                if (preg_match('#^/admin/listing/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listing_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_show',));
                }

                // admin_cocorico_core_listing_export
                if ($pathinfo === '/admin/listing/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_export',  '_route' => 'admin_cocorico_core_listing_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/booking')) {
                // admin_cocorico_core_booking_list
                if ($pathinfo === '/admin/booking/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_list',  '_route' => 'admin_cocorico_core_booking_list',);
                }

                // admin_cocorico_core_booking_batch
                if ($pathinfo === '/admin/booking/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_batch',  '_route' => 'admin_cocorico_core_booking_batch',);
                }

                // admin_cocorico_core_booking_edit
                if (preg_match('#^/admin/booking/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_booking_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_edit',));
                }

                // admin_cocorico_core_booking_show
                if (preg_match('#^/admin/booking/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_booking_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_show',));
                }

                // admin_cocorico_core_booking_export
                if ($pathinfo === '/admin/booking/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_export',  '_route' => 'admin_cocorico_core_booking_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/listing-c')) {
                if (0 === strpos($pathinfo, '/admin/listing-characteristic')) {
                    // admin_cocorico_core_listingcharacteristic_list
                    if ($pathinfo === '/admin/listing-characteristic/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_list',  '_route' => 'admin_cocorico_core_listingcharacteristic_list',);
                    }

                    // admin_cocorico_core_listingcharacteristic_create
                    if ($pathinfo === '/admin/listing-characteristic/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_create',  '_route' => 'admin_cocorico_core_listingcharacteristic_create',);
                    }

                    // admin_cocorico_core_listingcharacteristic_batch
                    if ($pathinfo === '/admin/listing-characteristic/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_batch',  '_route' => 'admin_cocorico_core_listingcharacteristic_batch',);
                    }

                    // admin_cocorico_core_listingcharacteristic_edit
                    if (preg_match('#^/admin/listing\\-characteristic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristic_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_edit',));
                    }

                    // admin_cocorico_core_listingcharacteristic_delete
                    if (preg_match('#^/admin/listing\\-characteristic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristic_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_delete',));
                    }

                    // admin_cocorico_core_listingcharacteristic_show
                    if (preg_match('#^/admin/listing\\-characteristic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristic_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_show',));
                    }

                    // admin_cocorico_core_listingcharacteristic_export
                    if ($pathinfo === '/admin/listing-characteristic/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_export',  '_route' => 'admin_cocorico_core_listingcharacteristic_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/listing-characteristic-')) {
                        if (0 === strpos($pathinfo, '/admin/listing-characteristic-group')) {
                            // admin_cocorico_core_listingcharacteristicgroup_list
                            if ($pathinfo === '/admin/listing-characteristic-group/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_list',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_list',);
                            }

                            // admin_cocorico_core_listingcharacteristicgroup_create
                            if ($pathinfo === '/admin/listing-characteristic-group/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_create',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_create',);
                            }

                            // admin_cocorico_core_listingcharacteristicgroup_batch
                            if ($pathinfo === '/admin/listing-characteristic-group/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_batch',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_batch',);
                            }

                            // admin_cocorico_core_listingcharacteristicgroup_edit
                            if (preg_match('#^/admin/listing\\-characteristic\\-group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicgroup_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_edit',));
                            }

                            // admin_cocorico_core_listingcharacteristicgroup_delete
                            if (preg_match('#^/admin/listing\\-characteristic\\-group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicgroup_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_delete',));
                            }

                            // admin_cocorico_core_listingcharacteristicgroup_show
                            if (preg_match('#^/admin/listing\\-characteristic\\-group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicgroup_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_show',));
                            }

                            // admin_cocorico_core_listingcharacteristicgroup_export
                            if ($pathinfo === '/admin/listing-characteristic-group/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_export',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/listing-characteristic-type')) {
                            // admin_cocorico_core_listingcharacteristictype_list
                            if ($pathinfo === '/admin/listing-characteristic-type/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_list',  '_route' => 'admin_cocorico_core_listingcharacteristictype_list',);
                            }

                            // admin_cocorico_core_listingcharacteristictype_create
                            if ($pathinfo === '/admin/listing-characteristic-type/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_create',  '_route' => 'admin_cocorico_core_listingcharacteristictype_create',);
                            }

                            // admin_cocorico_core_listingcharacteristictype_batch
                            if ($pathinfo === '/admin/listing-characteristic-type/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_batch',  '_route' => 'admin_cocorico_core_listingcharacteristictype_batch',);
                            }

                            // admin_cocorico_core_listingcharacteristictype_edit
                            if (preg_match('#^/admin/listing\\-characteristic\\-type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristictype_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_edit',));
                            }

                            // admin_cocorico_core_listingcharacteristictype_delete
                            if (preg_match('#^/admin/listing\\-characteristic\\-type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristictype_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_delete',));
                            }

                            // admin_cocorico_core_listingcharacteristictype_show
                            if (preg_match('#^/admin/listing\\-characteristic\\-type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristictype_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_show',));
                            }

                            // admin_cocorico_core_listingcharacteristictype_export
                            if ($pathinfo === '/admin/listing-characteristic-type/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_export',  '_route' => 'admin_cocorico_core_listingcharacteristictype_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/listing-characteristic-value')) {
                            // admin_cocorico_core_listingcharacteristicvalue_list
                            if ($pathinfo === '/admin/listing-characteristic-value/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_list',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_list',);
                            }

                            // admin_cocorico_core_listingcharacteristicvalue_create
                            if ($pathinfo === '/admin/listing-characteristic-value/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_create',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_create',);
                            }

                            // admin_cocorico_core_listingcharacteristicvalue_batch
                            if ($pathinfo === '/admin/listing-characteristic-value/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_batch',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_batch',);
                            }

                            // admin_cocorico_core_listingcharacteristicvalue_edit
                            if (preg_match('#^/admin/listing\\-characteristic\\-value/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicvalue_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_edit',));
                            }

                            // admin_cocorico_core_listingcharacteristicvalue_delete
                            if (preg_match('#^/admin/listing\\-characteristic\\-value/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicvalue_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_delete',));
                            }

                            // admin_cocorico_core_listingcharacteristicvalue_show
                            if (preg_match('#^/admin/listing\\-characteristic\\-value/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicvalue_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_show',));
                            }

                            // admin_cocorico_core_listingcharacteristicvalue_export
                            if ($pathinfo === '/admin/listing-characteristic-value/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_export',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/listing-category')) {
                    // admin_cocorico_core_listingcategory_list
                    if ($pathinfo === '/admin/listing-category/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_list',  '_route' => 'admin_cocorico_core_listingcategory_list',);
                    }

                    // admin_cocorico_core_listingcategory_create
                    if ($pathinfo === '/admin/listing-category/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_create',  '_route' => 'admin_cocorico_core_listingcategory_create',);
                    }

                    // admin_cocorico_core_listingcategory_batch
                    if ($pathinfo === '/admin/listing-category/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_batch',  '_route' => 'admin_cocorico_core_listingcategory_batch',);
                    }

                    // admin_cocorico_core_listingcategory_edit
                    if (preg_match('#^/admin/listing\\-category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_edit',));
                    }

                    // admin_cocorico_core_listingcategory_delete
                    if (preg_match('#^/admin/listing\\-category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_delete',));
                    }

                    // admin_cocorico_core_listingcategory_show
                    if (preg_match('#^/admin/listing\\-category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_show',));
                    }

                    // admin_cocorico_core_listingcategory_export
                    if ($pathinfo === '/admin/listing-category/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_export',  '_route' => 'admin_cocorico_core_listingcategory_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/booking-')) {
                if (0 === strpos($pathinfo, '/admin/booking-bank-wire')) {
                    // admin_cocorico_core_bookingbankwire_list
                    if ($pathinfo === '/admin/booking-bank-wire/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_list',  '_route' => 'admin_cocorico_core_bookingbankwire_list',);
                    }

                    // admin_cocorico_core_bookingbankwire_batch
                    if ($pathinfo === '/admin/booking-bank-wire/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_batch',  '_route' => 'admin_cocorico_core_bookingbankwire_batch',);
                    }

                    // admin_cocorico_core_bookingbankwire_edit
                    if (preg_match('#^/admin/booking\\-bank\\-wire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingbankwire_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_edit',));
                    }

                    // admin_cocorico_core_bookingbankwire_show
                    if (preg_match('#^/admin/booking\\-bank\\-wire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingbankwire_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_show',));
                    }

                    // admin_cocorico_core_bookingbankwire_export
                    if ($pathinfo === '/admin/booking-bank-wire/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_export',  '_route' => 'admin_cocorico_core_bookingbankwire_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/booking-payin-refund')) {
                    // admin_cocorico_core_bookingpayinrefund_list
                    if ($pathinfo === '/admin/booking-payin-refund/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_list',  '_route' => 'admin_cocorico_core_bookingpayinrefund_list',);
                    }

                    // admin_cocorico_core_bookingpayinrefund_batch
                    if ($pathinfo === '/admin/booking-payin-refund/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_batch',  '_route' => 'admin_cocorico_core_bookingpayinrefund_batch',);
                    }

                    // admin_cocorico_core_bookingpayinrefund_edit
                    if (preg_match('#^/admin/booking\\-payin\\-refund/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingpayinrefund_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_edit',));
                    }

                    // admin_cocorico_core_bookingpayinrefund_show
                    if (preg_match('#^/admin/booking\\-payin\\-refund/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingpayinrefund_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_show',));
                    }

                    // admin_cocorico_core_bookingpayinrefund_export
                    if ($pathinfo === '/admin/booking-payin-refund/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_export',  '_route' => 'admin_cocorico_core_bookingpayinrefund_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_cocorico_user_user_list
                if ($pathinfo === '/admin/user/list') {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_list',  '_route' => 'admin_cocorico_user_user_list',);
                }

                // admin_cocorico_user_user_batch
                if ($pathinfo === '/admin/user/batch') {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_batch',  '_route' => 'admin_cocorico_user_user_batch',);
                }

                // admin_cocorico_user_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_user_user_edit')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_edit',));
                }

                // admin_cocorico_user_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_user_user_show')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_show',));
                }

                // admin_cocorico_user_user_export
                if ($pathinfo === '/admin/user/export') {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_export',  '_route' => 'admin_cocorico_user_user_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/page')) {
                // admin_cocorico_page_page_list
                if ($pathinfo === '/admin/page/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_list',  '_route' => 'admin_cocorico_page_page_list',);
                }

                // admin_cocorico_page_page_create
                if ($pathinfo === '/admin/page/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_create',  '_route' => 'admin_cocorico_page_page_create',);
                }

                // admin_cocorico_page_page_batch
                if ($pathinfo === '/admin/page/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_batch',  '_route' => 'admin_cocorico_page_page_batch',);
                }

                // admin_cocorico_page_page_edit
                if (preg_match('#^/admin/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_page_page_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_edit',));
                }

                // admin_cocorico_page_page_delete
                if (preg_match('#^/admin/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_page_page_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_delete',));
                }

                // admin_cocorico_page_page_show
                if (preg_match('#^/admin/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_page_page_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_show',));
                }

                // admin_cocorico_page_page_export
                if ($pathinfo === '/admin/page/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_export',  '_route' => 'admin_cocorico_page_page_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/footer')) {
                // admin_cocorico_cms_footer_list
                if ($pathinfo === '/admin/footer/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_list',  '_route' => 'admin_cocorico_cms_footer_list',);
                }

                // admin_cocorico_cms_footer_create
                if ($pathinfo === '/admin/footer/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_create',  '_route' => 'admin_cocorico_cms_footer_create',);
                }

                // admin_cocorico_cms_footer_batch
                if ($pathinfo === '/admin/footer/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_batch',  '_route' => 'admin_cocorico_cms_footer_batch',);
                }

                // admin_cocorico_cms_footer_edit
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_cms_footer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_edit',));
                }

                // admin_cocorico_cms_footer_delete
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_cms_footer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_delete',));
                }

                // admin_cocorico_cms_footer_show
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_cms_footer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_show',));
                }

                // admin_cocorico_cms_footer_export
                if ($pathinfo === '/admin/footer/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_export',  '_route' => 'admin_cocorico_cms_footer_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/thread')) {
                // admin_cocorico_message_thread_list
                if ($pathinfo === '/admin/thread/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_list',  '_route' => 'admin_cocorico_message_thread_list',);
                }

                // admin_cocorico_message_thread_batch
                if ($pathinfo === '/admin/thread/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_batch',  '_route' => 'admin_cocorico_message_thread_batch',);
                }

                // admin_cocorico_message_thread_edit
                if (preg_match('#^/admin/thread/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_thread_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_edit',));
                }

                // admin_cocorico_message_thread_show
                if (preg_match('#^/admin/thread/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_thread_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_show',));
                }

                // admin_cocorico_message_thread_export
                if ($pathinfo === '/admin/thread/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_export',  '_route' => 'admin_cocorico_message_thread_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/message')) {
                // admin_cocorico_message_message_list
                if ($pathinfo === '/admin/message/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_list',  '_route' => 'admin_cocorico_message_message_list',);
                }

                // admin_cocorico_message_message_batch
                if ($pathinfo === '/admin/message/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_batch',  '_route' => 'admin_cocorico_message_message_batch',);
                }

                // admin_cocorico_message_message_edit
                if (preg_match('#^/admin/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_message_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_edit',));
                }

                // admin_cocorico_message_message_show
                if (preg_match('#^/admin/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_message_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_show',));
                }

                // admin_cocorico_message_message_export
                if ($pathinfo === '/admin/message/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_export',  '_route' => 'admin_cocorico_message_message_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/contact')) {
                // admin_cocorico_contact_contact_list
                if ($pathinfo === '/admin/contact/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_list',  '_route' => 'admin_cocorico_contact_contact_list',);
                }

                // admin_cocorico_contact_contact_batch
                if ($pathinfo === '/admin/contact/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_batch',  '_route' => 'admin_cocorico_contact_contact_batch',);
                }

                // admin_cocorico_contact_contact_edit
                if (preg_match('#^/admin/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_contact_contact_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_edit',));
                }

                // admin_cocorico_contact_contact_show
                if (preg_match('#^/admin/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_contact_contact_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_show',));
                }

                // admin_cocorico_contact_contact_export
                if ($pathinfo === '/admin/contact/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_export',  '_route' => 'admin_cocorico_contact_contact_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/review')) {
                // admin_cocorico_review_review_list
                if ($pathinfo === '/admin/review/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_list',  '_route' => 'admin_cocorico_review_review_list',);
                }

                // admin_cocorico_review_review_batch
                if ($pathinfo === '/admin/review/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_batch',  '_route' => 'admin_cocorico_review_review_batch',);
                }

                // admin_cocorico_review_review_edit
                if (preg_match('#^/admin/review/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_review_review_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_edit',));
                }

                // admin_cocorico_review_review_show
                if (preg_match('#^/admin/review/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_review_review_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_show',));
                }

                // admin_cocorico_review_review_export
                if ($pathinfo === '/admin/review/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_export',  '_route' => 'admin_cocorico_review_review_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/parameter')) {
                // admin_cocorico_config_parameter_list
                if ($pathinfo === '/admin/parameter/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_list',  '_route' => 'admin_cocorico_config_parameter_list',);
                }

                // admin_cocorico_config_parameter_batch
                if ($pathinfo === '/admin/parameter/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_batch',  '_route' => 'admin_cocorico_config_parameter_batch',);
                }

                // admin_cocorico_config_parameter_edit
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_edit',));
                }

                // admin_cocorico_config_parameter_show
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_show',));
                }

                // admin_cocorico_config_parameter_export
                if ($pathinfo === '/admin/parameter/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_export',  '_route' => 'admin_cocorico_config_parameter_export',);
                }

                // admin_cocorico_config_parameter_history
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_history',));
                }

                // admin_cocorico_config_parameter_history_view_revision
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_history_view_revision',));
                }

                // admin_cocorico_config_parameter_history_compare_revisions
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/history/(?P<base_revision>[^/]++)/(?P<compare_revision>[^/]++)/compare$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_history_compare_revisions')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyCompareRevisionsAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_history_compare_revisions',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/__translations')) {
                // jms_translation_update_message
                if (0 === strpos($pathinfo, '/admin/__translations/api/configs') && preg_match('#^/admin/__translations/api/configs/(?P<config>[^/]++)/domains/(?P<domain>[^/]++)/locales/(?P<locale>[^/]++)/messages$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_jms_translation_update_message;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jms_translation_update_message')), array (  'id' => NULL,  '_controller' => 'JMS\\TranslationBundle\\Controller\\ApiController::updateMessageAction',));
                }
                not_jms_translation_update_message:

                // jms_translation_index
                if (rtrim($pathinfo, '/') === '/admin/__translations') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'jms_translation_index');
                    }

                    return array (  '_controller' => 'JMS\\TranslationBundle\\Controller\\TranslateController::indexAction',  '_route' => 'jms_translation_index',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_uploader')) {
            if (0 === strpos($pathinfo, '/_uploader/listing_images')) {
                // _uploader_progress_listing_images
                if ($pathinfo === '/_uploader/listing_images/progress') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__uploader_progress_listing_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.listing_images:progress',  '_format' => 'json',  '_route' => '_uploader_progress_listing_images',);
                }
                not__uploader_progress_listing_images:

                // _uploader_upload_listing_images
                if ($pathinfo === '/_uploader/listing_images/upload') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                        goto not__uploader_upload_listing_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.listing_images:upload',  '_format' => 'json',  '_route' => '_uploader_upload_listing_images',);
                }
                not__uploader_upload_listing_images:

            }

            if (0 === strpos($pathinfo, '/_uploader/user_images')) {
                // _uploader_progress_user_images
                if ($pathinfo === '/_uploader/user_images/progress') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__uploader_progress_user_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.user_images:progress',  '_format' => 'json',  '_route' => '_uploader_progress_user_images',);
                }
                not__uploader_progress_user_images:

                // _uploader_upload_user_images
                if ($pathinfo === '/_uploader/user_images/upload') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                        goto not__uploader_upload_user_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.user_images:upload',  '_format' => 'json',  '_route' => '_uploader_upload_user_images',);
                }
                not__uploader_upload_user_images:

            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // en__RG__liip_imagine_filter_runtime
            if (0 === strpos($pathinfo, '/en/media/cache/resolve') && preg_match('#^/en/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',  '_locale' => 'en',));
            }
            not_en__RG__liip_imagine_filter_runtime:

            // ee__RG__liip_imagine_filter_runtime
            if (0 === strpos($pathinfo, '/ee/media/cache/resolve') && preg_match('#^/ee/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',  '_locale' => 'ee',));
            }
            not_ee__RG__liip_imagine_filter_runtime:

            // en__RG__liip_imagine_filter
            if (0 === strpos($pathinfo, '/en/media/cache/resolve') && preg_match('#^/en/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',  '_locale' => 'en',));
            }
            not_en__RG__liip_imagine_filter:

            // ee__RG__liip_imagine_filter
            if (0 === strpos($pathinfo, '/ee/media/cache/resolve') && preg_match('#^/ee/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',  '_locale' => 'ee',));
            }
            not_ee__RG__liip_imagine_filter:

            // en__RG__cocorico_user_change_password
            if ($pathinfo === '/en/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_user_change_password;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_change_password',);
            }
            not_en__RG__cocorico_user_change_password:

            // ee__RG__cocorico_user_change_password
            if ($pathinfo === '/ee/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_user_change_password;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ChangePasswordController::changePasswordAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_change_password',);
            }
            not_ee__RG__cocorico_user_change_password:

            // en__RG__cocorico_user_profile_show
            if (0 === strpos($pathinfo, '/en/user') && preg_match('#^/en/user/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_user_profile_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_user_profile_show')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ProfileController::showAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_user_profile_show:

            // ee__RG__cocorico_user_profile_show
            if (0 === strpos($pathinfo, '/ee/user') && preg_match('#^/ee/user/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_user_profile_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_user_profile_show')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ProfileController::showAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_user_profile_show:

            // en__RG__cocorico_user_register
            if ($pathinfo === '/en/register') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_register',);
            }

            // ee__RG__cocorico_user_register
            if ($pathinfo === '/ee/register') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::registerAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_register',);
            }

            // en__RG__cocorico_user_registration_check_email
            if ($pathinfo === '/en/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_user_registration_check_email;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_registration_check_email',);
            }
            not_en__RG__cocorico_user_registration_check_email:

            // ee__RG__cocorico_user_registration_check_email
            if ($pathinfo === '/ee/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_user_registration_check_email;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::checkEmailAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_registration_check_email',);
            }
            not_ee__RG__cocorico_user_registration_check_email:

            // en__RG__cocorico_user_register_confirmation
            if (0 === strpos($pathinfo, '/en/register-confirmation') && preg_match('#^/en/register\\-confirmation/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_user_register_confirmation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_user_register_confirmation')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_user_register_confirmation:

            // ee__RG__cocorico_user_register_confirmation
            if (0 === strpos($pathinfo, '/ee/register-confirmation') && preg_match('#^/ee/register\\-confirmation/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_user_register_confirmation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_user_register_confirmation')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_user_register_confirmation:

            // en__RG__cocorico_user_register_confirmed
            if ($pathinfo === '/en/register-confirmed') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_register_confirmed',);
            }

            // ee__RG__cocorico_user_register_confirmed
            if ($pathinfo === '/ee/register-confirmed') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmedAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_register_confirmed',);
            }

            // en__RG__cocorico_user_resetting_request
            if ($pathinfo === '/en/password-resetting-request') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_resetting_request',);
            }

            // ee__RG__cocorico_user_resetting_request
            if ($pathinfo === '/ee/password-resetting-request') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::requestAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_resetting_request',);
            }

            // en__RG__cocorico_user_resetting_send_email
            if ($pathinfo === '/en/password-resetting-send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_en__RG__cocorico_user_resetting_send_email;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_resetting_send_email',);
            }
            not_en__RG__cocorico_user_resetting_send_email:

            // ee__RG__cocorico_user_resetting_send_email
            if ($pathinfo === '/ee/password-resetting-send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ee__RG__cocorico_user_resetting_send_email;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::sendEmailAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_resetting_send_email',);
            }
            not_ee__RG__cocorico_user_resetting_send_email:

            // en__RG__cocorico_user_resetting_check_email
            if ($pathinfo === '/en/password-resetting-check-email') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_resetting_check_email',);
            }

            // ee__RG__cocorico_user_resetting_check_email
            if ($pathinfo === '/ee/password-resetting-check-email') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::checkEmailAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_resetting_check_email',);
            }

            // en__RG__cocorico_user_resetting_reset
            if (0 === strpos($pathinfo, '/en/password-resetting-reset') && preg_match('#^/en/password\\-resetting\\-reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_user_resetting_reset')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::resetAction',  '_locale' => 'en',));
            }

            // ee__RG__cocorico_user_resetting_reset
            if (0 === strpos($pathinfo, '/ee/password-resetting-reset') && preg_match('#^/ee/password\\-resetting\\-reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_user_resetting_reset')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::resetAction',  '_locale' => 'ee',));
            }

            // en__RG__cocorico_user_login
            if ($pathinfo === '/en/login') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_login',);
            }

            // ee__RG__cocorico_user_login
            if ($pathinfo === '/ee/login') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::loginAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_login',);
            }

            // en__RG__cocorico_user_login_check
            if ($pathinfo === '/en/login-check') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_login_check',);
            }

            // ee__RG__cocorico_user_login_check
            if ($pathinfo === '/ee/login-check') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::checkAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_login_check',);
            }

            // en__RG__cocorico_user_logout
            if ($pathinfo === '/en/logout') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_logout',);
            }

            // ee__RG__cocorico_user_logout
            if ($pathinfo === '/ee/logout') {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::logoutAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_logout',);
            }

            // en__RG__cocorico_user_image
            if (rtrim($pathinfo, '/') === '/en/user_image') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_user_image;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'en__RG__cocorico_user_image');
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_image',);
            }
            not_en__RG__cocorico_user_image:

            // ee__RG__cocorico_user_image
            if (rtrim($pathinfo, '/') === '/ee/user_image') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_user_image;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ee__RG__cocorico_user_image');
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::indexAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_image',);
            }
            not_ee__RG__cocorico_user_image:

            // en__RG__cocorico_listing_image_delete
            if (0 === strpos($pathinfo, '/en/listing_image') && preg_match('#^/en/listing_image/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_en__RG__cocorico_listing_image_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_image_delete')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::deleteAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_listing_image_delete:

            // ee__RG__cocorico_listing_image_delete
            if (0 === strpos($pathinfo, '/ee/listing_image') && preg_match('#^/ee/listing_image/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ee__RG__cocorico_listing_image_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_listing_image_delete')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::deleteAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_listing_image_delete:

            // en__RG__cocorico_user_dashboard_profile_edit_about_me
            if ($pathinfo === '/en/dashboard/user/edit-about-me') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_user_dashboard_profile_edit_about_me;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileAboutMeController::ediAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_edit_about_me',);
            }
            not_en__RG__cocorico_user_dashboard_profile_edit_about_me:

            // ee__RG__cocorico_user_dashboard_profile_edit_about_me
            if ($pathinfo === '/ee/dashboard/user/edit-about-me') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_user_dashboard_profile_edit_about_me;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileAboutMeController::ediAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_dashboard_profile_edit_about_me',);
            }
            not_ee__RG__cocorico_user_dashboard_profile_edit_about_me:

            // en__RG__cocorico_user_dashboard_profile_edit_bank_account
            if ($pathinfo === '/en/dashboard/user/edit-bank-account') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_user_dashboard_profile_edit_bank_account;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileBankAccountController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_edit_bank_account',);
            }
            not_en__RG__cocorico_user_dashboard_profile_edit_bank_account:

            // ee__RG__cocorico_user_dashboard_profile_edit_bank_account
            if ($pathinfo === '/ee/dashboard/user/edit-bank-account') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_user_dashboard_profile_edit_bank_account;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileBankAccountController::editAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_dashboard_profile_edit_bank_account',);
            }
            not_ee__RG__cocorico_user_dashboard_profile_edit_bank_account:

            // en__RG__cocorico_user_dashboard_profile_edit_contact
            if ($pathinfo === '/en/dashboard/user/edit-contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_user_dashboard_profile_edit_contact;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileContactController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_edit_contact',);
            }
            not_en__RG__cocorico_user_dashboard_profile_edit_contact:

            // ee__RG__cocorico_user_dashboard_profile_edit_contact
            if ($pathinfo === '/ee/dashboard/user/edit-contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_user_dashboard_profile_edit_contact;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileContactController::editAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_dashboard_profile_edit_contact',);
            }
            not_ee__RG__cocorico_user_dashboard_profile_edit_contact:

            // en__RG__cocorico_user_dashboard_profile_switch
            if ($pathinfo === '/en/dashboard/user/profile-switch') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_user_dashboard_profile_switch;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileController::profileSwitchAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_switch',);
            }
            not_en__RG__cocorico_user_dashboard_profile_switch:

            // ee__RG__cocorico_user_dashboard_profile_switch
            if ($pathinfo === '/ee/dashboard/user/profile-switch') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_user_dashboard_profile_switch;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileController::profileSwitchAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_user_dashboard_profile_switch',);
            }
            not_ee__RG__cocorico_user_dashboard_profile_switch:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                if (0 === strpos($pathinfo, '/admin/user/edit-')) {
                    // fos_user_profile_edit_authentication
                    if ($pathinfo === '/admin/user/edit-authentication') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                    }

                    // fos_user_profile_edit
                    if ($pathinfo === '/admin/user/edit-profile') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                    }

                }

                // sonata_user_profile_show
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
                }
                not_sonata_user_profile_show:

                if (0 === strpos($pathinfo, '/admin/user/edit-')) {
                    // sonata_user_profile_edit_authentication
                    if ($pathinfo === '/admin/user/edit-authentication') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                    }

                    // sonata_user_profile_edit
                    if ($pathinfo === '/admin/user/edit-profile') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // en__RG__hwi_oauth_service_redirect
            if (0 === strpos($pathinfo, '/en/oauth/connect') && preg_match('#^/en/oauth/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'en',));
            }

            // ee__RG__hwi_oauth_service_redirect
            if (0 === strpos($pathinfo, '/ee/oauth/connect') && preg_match('#^/ee/oauth/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'ee',));
            }

            // en__RG__hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/en/oauth/connect') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'en__RG__hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'en',  '_route' => 'en__RG__hwi_oauth_connect',);
            }

            // ee__RG__hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/ee/oauth/connect') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ee__RG__hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'ee',  '_route' => 'ee__RG__hwi_oauth_connect',);
            }

            // en__RG__hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/en/oauth/connect/service') && preg_match('#^/en/oauth/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',  '_locale' => 'en',));
            }

            // ee__RG__hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/ee/oauth/connect/service') && preg_match('#^/ee/oauth/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',  '_locale' => 'ee',));
            }

            // en__RG__hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/en/oauth/connect/registration') && preg_match('#^/en/oauth/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',  '_locale' => 'en',));
            }

            // ee__RG__hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/ee/oauth/connect/registration') && preg_match('#^/ee/oauth/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',  '_locale' => 'ee',));
            }

            // en__RG__hwi_facebook_login
            if ($pathinfo === '/en/oauth/fb-login') {
                return array (  '_locale' => 'en',  '_route' => 'en__RG__hwi_facebook_login',);
            }

            // ee__RG__hwi_facebook_login
            if ($pathinfo === '/ee/oauth/fb-login') {
                return array (  '_locale' => 'ee',  '_route' => 'ee__RG__hwi_facebook_login',);
            }

            // en__RG__cocorico_page_show
            if (0 === strpos($pathinfo, '/en/page') && preg_match('#^/en/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_page_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_page_show')), array (  '_controller' => 'Cocorico\\PageBundle\\Controller\\Frontend\\PageController::showAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_page_show:

            // ee__RG__cocorico_page_show
            if (0 === strpos($pathinfo, '/ee/page') && preg_match('#^/ee/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_page_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_page_show')), array (  '_controller' => 'Cocorico\\PageBundle\\Controller\\Frontend\\PageController::showAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_page_show:

            // en__RG__ef_connect
            if (0 === strpos($pathinfo, '/en/efconnect') && preg_match('#^/en/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'en',));
            }

            // ee__RG__ef_connect
            if (0 === strpos($pathinfo, '/ee/efconnect') && preg_match('#^/ee/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'ee',));
            }

            // en__RG__elfinder
            if (0 === strpos($pathinfo, '/en/elfinder') && preg_match('#^/en/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'en',));
            }

            // ee__RG__elfinder
            if (0 === strpos($pathinfo, '/ee/elfinder') && preg_match('#^/ee/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'ee',));
            }

            // en__RG__cocorico_dashboard_message
            if (0 === strpos($pathinfo, '/en/dashboard/message') && preg_match('#^/en/dashboard/message(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_message;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message')), array (  'page' => 1,  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::indexAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_message:

            // ee__RG__cocorico_dashboard_message
            if (0 === strpos($pathinfo, '/ee/dashboard/message') && preg_match('#^/ee/dashboard/message(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_message;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_message')), array (  'page' => 1,  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::indexAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_message:

            // en__RG__cocorico_dashboard_message_new
            if (0 === strpos($pathinfo, '/en/dashboard/message') && preg_match('#^/en/dashboard/message/(?P<listingId>\\d+)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message_new')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::newThreadAction',  '_locale' => 'en',));
            }

            // ee__RG__cocorico_dashboard_message_new
            if (0 === strpos($pathinfo, '/ee/dashboard/message') && preg_match('#^/ee/dashboard/message/(?P<listingId>\\d+)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_message_new')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::newThreadAction',  '_locale' => 'ee',));
            }

            // en__RG__cocorico_dashboard_message_thread_view
            if (0 === strpos($pathinfo, '/en/dashboard/message/conversation') && preg_match('#^/en/dashboard/message/conversation/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message_thread_view')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::threadAction',  '_locale' => 'en',));
            }

            // ee__RG__cocorico_dashboard_message_thread_view
            if (0 === strpos($pathinfo, '/ee/dashboard/message/conversation') && preg_match('#^/ee/dashboard/message/conversation/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_message_thread_view')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::threadAction',  '_locale' => 'ee',));
            }

            // en__RG__cocorico_dashboard_message_thread_delete
            if (0 === strpos($pathinfo, '/en/dashboard/message/delete') && preg_match('#^/en/dashboard/message/delete/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message_thread_delete')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::deleteAction',  '_locale' => 'en',));
            }

            // ee__RG__cocorico_dashboard_message_thread_delete
            if (0 === strpos($pathinfo, '/ee/dashboard/message/delete') && preg_match('#^/ee/dashboard/message/delete/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_message_thread_delete')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::deleteAction',  '_locale' => 'ee',));
            }

            // en__RG__cocorico_dashboard_message_nb_unread
            if ($pathinfo === '/en/dashboard/message/get-nb-unread-messages') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_message_nb_unread;
                }

                return array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::nbUnReadMessagesAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_message_nb_unread',);
            }
            not_en__RG__cocorico_dashboard_message_nb_unread:

            // ee__RG__cocorico_dashboard_message_nb_unread
            if ($pathinfo === '/ee/dashboard/message/get-nb-unread-messages') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_message_nb_unread;
                }

                return array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::nbUnReadMessagesAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_dashboard_message_nb_unread',);
            }
            not_ee__RG__cocorico_dashboard_message_nb_unread:

            // en__RG__cocorico_dashboard_review_new
            if (0 === strpos($pathinfo, '/en/dashboard/review/new') && preg_match('#^/en/dashboard/review/new/(?P<booking_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_review_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_review_new')), array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::newAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_dashboard_review_new:

            // ee__RG__cocorico_dashboard_review_new
            if (0 === strpos($pathinfo, '/ee/dashboard/review/new') && preg_match('#^/ee/dashboard/review/new/(?P<booking_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_review_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_dashboard_review_new')), array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::newAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_dashboard_review_new:

            // en__RG__cocorico_dashboard_reviews_made
            if ($pathinfo === '/en/dashboard/review/reviews-made') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_reviews_made;
                }

                return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::madeReviewsAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_reviews_made',);
            }
            not_en__RG__cocorico_dashboard_reviews_made:

            // ee__RG__cocorico_dashboard_reviews_made
            if ($pathinfo === '/ee/dashboard/review/reviews-made') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_reviews_made;
                }

                return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::madeReviewsAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_dashboard_reviews_made',);
            }
            not_ee__RG__cocorico_dashboard_reviews_made:

            // en__RG__cocorico_dashboard_reviews_received
            if ($pathinfo === '/en/dashboard/review/reviews-received') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_en__RG__cocorico_dashboard_reviews_received;
                }

                return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::receivedReviewsAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_reviews_received',);
            }
            not_en__RG__cocorico_dashboard_reviews_received:

            // ee__RG__cocorico_dashboard_reviews_received
            if ($pathinfo === '/ee/dashboard/review/reviews-received') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ee__RG__cocorico_dashboard_reviews_received;
                }

                return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::receivedReviewsAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_dashboard_reviews_received',);
            }
            not_ee__RG__cocorico_dashboard_reviews_received:

            // en__RG__cocorico_contact_new
            if ($pathinfo === '/en/contact/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_en__RG__cocorico_contact_new;
                }

                return array (  '_controller' => 'Cocorico\\ContactBundle\\Controller\\Frontend\\ContactController::newAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_contact_new',);
            }
            not_en__RG__cocorico_contact_new:

            // ee__RG__cocorico_contact_new
            if ($pathinfo === '/ee/contact/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ee__RG__cocorico_contact_new;
                }

                return array (  '_controller' => 'Cocorico\\ContactBundle\\Controller\\Frontend\\ContactController::newAction',  '_locale' => 'ee',  '_route' => 'ee__RG__cocorico_contact_new',);
            }
            not_ee__RG__cocorico_contact_new:

            // en__RG__cocorico_geo_create
            if (0 === strpos($pathinfo, '/en/geocoding') && preg_match('#^/en/geocoding/(?P<id>\\d+)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_en__RG__cocorico_geo_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_geo_create')), array (  '_controller' => 'Cocorico\\GeoBundle\\Controller\\GeocodingController::createAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_geo_create:

            // ee__RG__cocorico_geo_create
            if (0 === strpos($pathinfo, '/ee/geocoding') && preg_match('#^/ee/geocoding/(?P<id>\\d+)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ee__RG__cocorico_geo_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ee__RG__cocorico_geo_create')), array (  '_controller' => 'Cocorico\\GeoBundle\\Controller\\GeocodingController::createAction',  '_locale' => 'ee',));
            }
            not_ee__RG__cocorico_geo_create:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
