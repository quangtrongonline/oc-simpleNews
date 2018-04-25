<?php namespace Quangtrong\News\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Quangtrong\News\Models\Posts as Post;

class Posts extends ReportWidgetBase
{
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'quangtrong.news::lang.widget.posts',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'total' => [
                'title'             => 'quangtrong.news::lang.widget.show_total',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'active' => [
                'title'             => 'quangtrong.news::lang.widget.show_active',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'inactive' => [
                'title'             => 'quangtrong.news::lang.widget.show_inactive',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'draft' => [
                'title'             => 'quangtrong.news::lang.widget.show_draft',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['active']   = Post::where('status', 1)->count();
        $this->vars['inactive'] = Post::where('status', 2)->count();
        $this->vars['draft']    = Post::where('status', 3)->count();
        $this->vars['total']    = $this->vars['active'] + $this->vars['inactive'] + $this->vars['draft'];
    }
}
