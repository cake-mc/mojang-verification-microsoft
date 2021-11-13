<?php

namespace CakeMC\Microsoft;

class Configuration
{
    public function render()
    {
        $form = Option::form(
            'mojang_verification_microsoft',
            trans('CakeMC\Microsoft::config.score_config'),
            function ($form) {
                $form->text(
                    'mojang_verification_score_award',
                    trans('CakeMC\Microsoft::config.score_award')
                )->placeholder(trans('CakeMC\Microsoft::config.default'))
                    ->description(trans('CakeMC\Microsoft::config.description'));
            })->handle();

        return view('CakeMC\Microsoft::config', compact('form'));
    }
}