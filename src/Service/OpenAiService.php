<?php
namespace App\Service;

use Orhanerday\OpenAi\OpenAi;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class OpenAiService
{
    public function __construct(private ParameterBagInterface $parameterBag)
    {

    }
    public function getAnswer(string $question): string
    {
        $open_ai_key = $this->parameterBag->get('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);
        $complete = $open_ai->completion([
            'model' => 'text-davinci-002',
            'prompt' => $question,
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
        ]);
        $json = json_decode($complete, true);
        //  if(isset($json['choices'][0]['text']))
        //  {
        $json = $json['choices'][0]['text'];

        // dd($json);
        //  }
        return $json;
    }
}
