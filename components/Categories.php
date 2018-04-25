<?php namespace Quangtrong\News\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Lang;
use Quangtrong\News\Models\Categories as NewsCategories;

class Categories extends ComponentBase
{
    public $categories;

    public $noPostsMessage;

    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'quangtrong.news::lang.component.categories',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'noPostsMessage' => [
                'title'             => 'quangtrong.news::lang.settings.no_posts_title',
                'description'       => 'quangtrong.news::lang.settings.no_posts_description',
                'type'              => 'string',
                'default'           => Lang::get('quangtrong.news::lang.settings.no_posts_found'),
                'showExternalParam' => false
            ],
            'categoryPage' => [
                'title'       => 'quangtrong.news::lang.settings.category_page_title',
                'description' => 'quangtrong.news::lang.settings.category_page_description',
                'type'        => 'dropdown',
                'default'     => ''
            ]
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->page['noPostsMessage'] = $this->property('noPostsMessage');
        $this->categories = $this->page['categories'] = $this->listCategories();
    }

    protected function listCategories()
    {
        $categories = NewsCategories::all();

        $categories->each(function($category) {
            $category->setUrl($this->categoryPage, $this->controller);
        });

        return $categories;
    }
}
