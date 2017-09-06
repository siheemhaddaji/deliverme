<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // frontend_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontend_homepage');
            }

            return array (  '_controller' => 'Front\\endBundle\\Controller\\frontController::indexAction',  '_route' => 'frontend_homepage',);
        }

        // frontend_menue
        if ($pathinfo === '/menue') {
            return array (  '_controller' => 'Front\\endBundle\\Controller\\frontController::menueAction',  '_route' => 'frontend_menue',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/packet')) {
            if (0 === strpos($pathinfo, '/packetdetails')) {
                // packetdetails
                if (rtrim($pathinfo, '/') === '/packetdetails') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'packetdetails');
                    }

                    return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketDetailsController::indexAction',  '_route' => 'packetdetails',);
                }

                // packetdetails_show
                if (preg_match('#^/packetdetails/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'packetdetails_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketDetailsController::showAction',));
                }

                // packetdetails_new
                if ($pathinfo === '/packetdetails/new') {
                    return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketDetailsController::newAction',  '_route' => 'packetdetails_new',);
                }

                // packetdetails_create
                if ($pathinfo === '/packetdetails/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_packetdetails_create;
                    }

                    return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketDetailsController::createAction',  '_route' => 'packetdetails_create',);
                }
                not_packetdetails_create:

                // packetdetails_edit
                if (preg_match('#^/packetdetails/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'packetdetails_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketDetailsController::editAction',));
                }

                // packetdetails_update
                if (preg_match('#^/packetdetails/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_packetdetails_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'packetdetails_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketDetailsController::updateAction',));
                }
                not_packetdetails_update:

                // packetdetails_delete
                if (preg_match('#^/packetdetails/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_packetdetails_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'packetdetails_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketDetailsController::deleteAction',));
                }
                not_packetdetails_delete:

            }

            // packet
            if (rtrim($pathinfo, '/') === '/packet') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'packet');
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketController::indexAction',  '_route' => 'packet',);
            }

            // packet_show
            if (preg_match('#^/packet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'packet_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketController::showAction',));
            }

            // packet_new
            if ($pathinfo === '/packet/new') {
                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketController::newAction',  '_route' => 'packet_new',);
            }

            // packet_create
            if ($pathinfo === '/packet/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_packet_create;
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketController::createAction',  '_route' => 'packet_create',);
            }
            not_packet_create:

            // packet_edit
            if (preg_match('#^/packet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'packet_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketController::editAction',));
            }

            // packet_update
            if (preg_match('#^/packet/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_packet_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'packet_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketController::updateAction',));
            }
            not_packet_update:

            // packet_delete
            if (preg_match('#^/packet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_packet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'packet_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\PacketController::deleteAction',));
            }
            not_packet_delete:

        }

        if (0 === strpos($pathinfo, '/deliveryman')) {
            // deliveryman
            if (rtrim($pathinfo, '/') === '/deliveryman') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'deliveryman');
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DeliveryManController::indexAction',  '_route' => 'deliveryman',);
            }

            // deliveryman_show
            if (preg_match('#^/deliveryman/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deliveryman_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DeliveryManController::showAction',));
            }

            // deliveryman_new
            if ($pathinfo === '/deliveryman/new') {
                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DeliveryManController::newAction',  '_route' => 'deliveryman_new',);
            }

            // deliveryman_create
            if ($pathinfo === '/deliveryman/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deliveryman_create;
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DeliveryManController::createAction',  '_route' => 'deliveryman_create',);
            }
            not_deliveryman_create:

            // deliveryman_edit
            if (preg_match('#^/deliveryman/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deliveryman_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DeliveryManController::editAction',));
            }

            // deliveryman_update
            if (preg_match('#^/deliveryman/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_deliveryman_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deliveryman_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DeliveryManController::updateAction',));
            }
            not_deliveryman_update:

            // deliveryman_delete
            if (preg_match('#^/deliveryman/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_deliveryman_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deliveryman_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DeliveryManController::deleteAction',));
            }
            not_deliveryman_delete:

        }

        if (0 === strpos($pathinfo, '/client')) {
            if (0 === strpos($pathinfo, '/clientadress')) {
                // clientadress
                if (rtrim($pathinfo, '/') === '/clientadress') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'clientadress');
                    }

                    return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientAdressController::indexAction',  '_route' => 'clientadress',);
                }

                // clientadress_show
                if (preg_match('#^/clientadress/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientadress_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientAdressController::showAction',));
                }

                // clientadress_new
                if ($pathinfo === '/clientadress/new') {
                    return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientAdressController::newAction',  '_route' => 'clientadress_new',);
                }

                // clientadress_create
                if ($pathinfo === '/clientadress/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_clientadress_create;
                    }

                    return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientAdressController::createAction',  '_route' => 'clientadress_create',);
                }
                not_clientadress_create:

                // clientadress_edit
                if (preg_match('#^/clientadress/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientadress_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientAdressController::editAction',));
                }

                // clientadress_update
                if (preg_match('#^/clientadress/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_clientadress_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientadress_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientAdressController::updateAction',));
                }
                not_clientadress_update:

                // clientadress_delete
                if (preg_match('#^/clientadress/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_clientadress_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientadress_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientAdressController::deleteAction',));
                }
                not_clientadress_delete:

            }

            // client
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client');
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientController::showAction',));
            }

            // client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }

            // client_create
            if ($pathinfo === '/client/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_create;
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
            }
            not_client_create:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientController::editAction',));
            }

            // client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientController::updateAction',));
            }
            not_client_update:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

        }

        if (0 === strpos($pathinfo, '/dishestype')) {
            // dishestype
            if (rtrim($pathinfo, '/') === '/dishestype') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dishestype');
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesTypeController::indexAction',  '_route' => 'dishestype',);
            }

            // dishestype_show
            if (preg_match('#^/dishestype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishestype_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesTypeController::showAction',));
            }

            // dishestype_new
            if ($pathinfo === '/dishestype/new') {
                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesTypeController::newAction',  '_route' => 'dishestype_new',);
            }

            // dishestype_create
            if ($pathinfo === '/dishestype/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_dishestype_create;
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesTypeController::createAction',  '_route' => 'dishestype_create',);
            }
            not_dishestype_create:

            // dishestype_edit
            if (preg_match('#^/dishestype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishestype_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesTypeController::editAction',));
            }

            // dishestype_update
            if (preg_match('#^/dishestype/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_dishestype_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishestype_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesTypeController::updateAction',));
            }
            not_dishestype_update:

            // dishestype_delete
            if (preg_match('#^/dishestype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_dishestype_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishestype_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesTypeController::deleteAction',));
            }
            not_dishestype_delete:

        }

        if (0 === strpos($pathinfo, '/areas')) {
            // areas
            if (rtrim($pathinfo, '/') === '/areas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'areas');
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\AreasController::indexAction',  '_route' => 'areas',);
            }

            // areas_show
            if (preg_match('#^/areas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\AreasController::showAction',));
            }

            // areas_new
            if ($pathinfo === '/areas/new') {
                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\AreasController::newAction',  '_route' => 'areas_new',);
            }

            // areas_create
            if ($pathinfo === '/areas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_areas_create;
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\AreasController::createAction',  '_route' => 'areas_create',);
            }
            not_areas_create:

            // areas_edit
            if (preg_match('#^/areas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\AreasController::editAction',));
            }

            // areas_update
            if (preg_match('#^/areas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_areas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\AreasController::updateAction',));
            }
            not_areas_update:

            // areas_delete
            if (preg_match('#^/areas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_areas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\AreasController::deleteAction',));
            }
            not_areas_delete:

        }

        if (0 === strpos($pathinfo, '/dishes')) {
            // dishes
            if (rtrim($pathinfo, '/') === '/dishes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dishes');
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesController::indexAction',  '_route' => 'dishes',);
            }

            // dishes_show
            if (preg_match('#^/dishes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishes_show')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesController::showAction',));
            }

            // dishes_new
            if ($pathinfo === '/dishes/new') {
                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesController::newAction',  '_route' => 'dishes_new',);
            }

            // dishes_create
            if ($pathinfo === '/dishes/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_dishes_create;
                }

                return array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesController::createAction',  '_route' => 'dishes_create',);
            }
            not_dishes_create:

            // dishes_edit
            if (preg_match('#^/dishes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishes_edit')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesController::editAction',));
            }

            // dishes_update
            if (preg_match('#^/dishes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_dishes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishes_update')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesController::updateAction',));
            }
            not_dishes_update:

            // dishes_delete
            if (preg_match('#^/dishes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_dishes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dishes_delete')), array (  '_controller' => 'Deliverme\\MenuBundle\\Controller\\DishesController::deleteAction',));
            }
            not_dishes_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
