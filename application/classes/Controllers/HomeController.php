<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 * @copyright ©2009-2015
 */
namespace Controllers;

use Spiral\Core\Controller;
use Spiral\Http\Responses\RedirectResponse;
use Spiral\Http\Routing\Router;

class HomeController extends Controller
{
    /**
     * Method available by /home/index or /home or /
     *
     * @return mixed
     */
    public function index()
    {
        return $this->views->render('welcome');
    }

    /**
     * Method available by /home/index or /home or /
     *
     * @return mixed
     */
    public function keeper()
    {
        return $this->views->render('overviews');
    }

    /**
     * Method available by /home/index or /home or /
     *
     * @return mixed
     */
    public function keeper2()
    {
        return $this->views->render('discount');
    }


    /**
     * Method available by /home/json or /short-url
     *
     * @return array
     */
    public function json()
    {
        return [
            'status' => 200,
            'data' => [
                1, 2, 3, 4, 5, 6, 7,
            ]
        ];
    }

    /**
     * Method available by /home/redirect
     *
     * @return RedirectResponse
     */
    public function redirect()
    {
        return new RedirectResponse('http://google.com/');
    }

    /**
     * Method available by /home/internalRedirect
     *
     * @return RedirectResponse
     */
    public function internalRedirect(Router $router)
    {
        return new RedirectResponse($router->createUri('jsonRoute'));
    }
}
