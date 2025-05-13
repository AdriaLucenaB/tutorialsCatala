<?php

namespace App\Services;

use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationService
{
    protected $translator;

    public function __construct()
    {
        $this->translator = new GoogleTranslate('ca'); // 'ca' = Català
    }

    public function translate($text, $from = 'en')
    {
        $this->translator->setSource($from);
        return $this->translator->translate($text);
    }
}
