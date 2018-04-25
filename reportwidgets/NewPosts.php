<?php namespace Quangtrong\News\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Quangtrong\News\Models\Posts as Post;

class NewPosts extends ReportWidgetBase
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
                'default'           => 'quangtrong.news::lang.widget.newposts',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'piece' => [
                'title'             => 'quangtrong.news::lang.widget.show_piece',
                'default'           => 5,
                'type'              => 'dropdown',
                'options'           => [3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12]
            ],
            'date' => [
                'title'             => 'quangtrong.news::lang.widget.show_date',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }

    protected function loadData()
    {
        $this->vars['posts'] = Post::where('status', 1)->orderBy('published_at', 'desc')->take($this->property('piece'))->get()->all();
    }
}
