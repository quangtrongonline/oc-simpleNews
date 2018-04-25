<?php namespace Quangtrong\News\Components;

use Cms\Classes\ComponentBase;
use Quangtrong\News\Models\Subscribers;
use Lang;
use Validator;
use ValidationException;
use Response;
use Flash;
use October\Rain\Exception\AjaxException;

class Unsubscribe extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'quangtrong.news::lang.component.unsubscribe',
            'description' => ''
        ];
    }

    public function onRun()
    {
        $this->page['text_messages'] = Lang::get('quangtrong.news::lang.messages.unsubscribed');
        $this->page['text_email']    = Lang::get('quangtrong.news::lang.form.email');
        $this->page['text_button']   = Lang::get('quangtrong.news::lang.button.unsubscribe');
    }

    public function onUnsubscribe()
    {
        $data = post();
        $subscriber = Subscribers::email($data['email'])->first();

        if ($subscriber === null || !$subscriber->isActive()) {
            return Response::make(Lang::get('quangtrong.news::lang.messages.not_subscribed'), 400);
        }

        $subscriber->unsubscribe();
    }
}
