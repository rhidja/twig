<?php

namespace Rhidja\Twig\Tag;

use Twig\TokenParser\AbstractTokenParser;
use Twig\Token;

class CustomSetTokenParser extends AbstractTokenParser
{
    public function parse(Token $token)
    {
        $parser = $this->parser;
        $lineno = $token->getLine();
        $stream = $parser->getStream();

        $name = $stream->expect(Token::NAME_TYPE)->getValue();
        $stream->expect(Token::OPERATOR_TYPE, '=');
        $value = $parser->getExpressionParser()->parseExpression();
        $stream->expect(Token::BLOCK_END_TYPE);

        return new CustomSetNode($name, $value, $lineno);
    }

    public function getTag()
    {
        return 'tag_set';
    }
}
