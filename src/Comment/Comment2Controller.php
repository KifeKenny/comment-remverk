<?php

namespace Kifekenny\Comment;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \Kifekenny\Comment\Comment;
use \Kifekenny\Comment\HTMLForm\Com2Create;
use \Kifekenny\Comment\HTMLForm\Com2Update;
use \Kifekenny\Comment\HTMLForm\Com2Delete;
use \Kifekenny\Comment\HTMLForm\Com2Session;

/**
 * A controller class.
 */
class Comment2Controller implements
    ConfigureInterface,
    InjectionAwareInterface
{
    use ConfigureTrait,
        InjectionAwareTrait;



    /**
     * @var $data description
     */
    //private $data;



    /**
     * Show all items.
     *
     * @return void
     */
    public function getIndex()
    {
        $title      = "View | Comments";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $comment2   = new Comment();
        $comment2->setDb($this->di->get("db"));

        $data = [
            "items" => $comment2->findAll(),
        ];

        $view->add("incl/header", ["title" => ["Book", "css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("comment/viewAll", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function comment2Create()
    {
        $session = $this->di->get("session");
        $userId = $session->get("user_id");

        if (!$userId) {
            $this->di->get("response")->redirect("");
        }

        $title      = "Create | Comment";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $comment2   = new Com2Create($this->di);

        $comment2->check();

        $data = [
            "form" => $comment2->getHTML(),
        ];


        $view->add("incl/header", ["title" => ["Book", "../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("comment/create", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function comment2Update($id)
    {
        $session = $this->di->get("session");
        $userId = $session->get("user_id");

        if (!$userId) {
            $this->di->get("response")->redirect("");
        }

        $title      = "Create | Comment";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $comment2   = new Com2Update($this->di, $id);

        $comment2->check();

        $data = [
            "form" => $comment2->getHTML(),
        ];


        $view->add("incl/header", ["title" => ["Book", "../../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("comment/create", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function comment2Delete($id)
    {
        $session = $this->di->get("session");
        $userId = $session->get("user_id");

        if (!$userId) {
            $this->di->get("response")->redirect("");
        }

        $title      = "Delete | Comment";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $comment2   = new Com2Delete($this->di, $id);

        $comment2->check();

        $data = [
            "form" => $comment2->getHTML(),
        ];


        $view->add("incl/header", ["title" => ["Book", "../../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("comment/create", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }

    public function setUser()
    {
        $session = $this->di->get("session");
        $userId = $session->get("user_id");

        $title      = "Set | Session";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $comment2   = new Com2Session($this->di);

        $comment2->check();

        $data = [
            "form" => $comment2->getHTML(),
        ];

        $view->add("incl/header", ["title" => ["Book", "../../css/style.css"]]);
        $view->add("incl/side-bar1");
        $view->add("comment/default", $data);
        $view->add("incl/side-bar2");
        $view->add("incl/footer");

        $pageRender->renderPage(["title" => $title]);
    }
}
