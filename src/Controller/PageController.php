<?php
namespace App\Controller;

/**
 * PageController is used for static pages
 */
class PageController extends BaseController {

    /**
     * Index Action
     * 
     * @param \Slim\Http\Request $request
     * @param \Slim\Http\Response $response
     * @param array $args
     * @return \Slim\Http\Response
     */
    public function index($request, $response, $args) {
        if ($this->currentUser === NULL) {
            return $this->view->render($response, 'user/login.html.twig', array_merge($args, []));
        } else {
            return $response->withRedirect($this->router->pathFor('user-show-' . $this->currentLocale));
        }
        
        // Render view
        return $this->view->render($response, 'page/index.html.twig', array_merge($args, []));
    }
}
