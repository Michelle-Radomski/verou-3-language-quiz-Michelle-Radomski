<?php

function pre($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}
pre($_POST);

class LanguageGame
{
    private array $words;
    public Word $randomObject;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }
        //pre(array_rand(Data::words(), 1));
        //pre($this->words);
        //pre($this->words[0]);
        //pre($this->words[array_rand($this->words, 1)]->word);
        //pre($this->words[array_rand($this->words, 1)]->answer);

        //pre(array_rand($this->words, 1));
    }

    public function randomObject()
    {
        $randomObject = $this->words[array_rand($this->words, 1)];
        return $randomObject;
    }

    public function run(): void
    {
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        if (empty($_POST['englishWord'])) {
            $this->randomObject = $this->randomObject();
            var_dump($this->randomObject);
        }

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        if (!empty($_POST['englishWord'])) {
        }
        // TODO: generate a message for the user that can be shown

    }
}
