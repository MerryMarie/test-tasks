<?php
namespace Helper;

class TextModifier{

    /**
     * Получение текста анонса 
     * 
     * @param string $text 
     * @param string $link 
     * @param int $limit
     * 
     * @return string 
     */
    static public function getPreviewText(string $text, string $link="/", int $limit = 250):string
    {

        $buff = explode(" ",substr($text, 0, $limit));
        array_pop($buff);

        if(count($buff) > 4){
            $output = implode(" ", array_slice($buff, 0, -3))." <a href='{$link}'>".implode(" ", array_slice($buff, -3))."</a>...";
        }else{
            $output = "<a href='{$link}'>".implode(" ", $buff)."</a>...";
        }
        
        return $output;
        
    }
}

//ПРИМЕР ИСПОЛЬЗОВАНИЯ
/*
$testArticle = array(
    "LINK" => "https://google.com",
    "DETAIL_TEXT" => "Картельные сговоры не допускают ситуации, при которой реплицированные с зарубежных источников, современные исследования являются только методом политического участия и в равной степени предоставлены сами себе. Как принято считать, явные признаки победы институционализации будут указаны как претенденты на роль ключевых факторов. Безусловно, современная методология разработки выявляет срочную потребность соответствующих условий активизации. И нет сомнений, что базовые сценарии поведения пользователей представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть ограничены исключительно образом мышления. А ещё реплицированные с зарубежных источников, современные исследования лишь добавляют фракционных разногласий и рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Внезапно, сделанные на базе интернет-аналитики выводы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут ассоциативно распределены по отраслям. А ещё акционеры крупнейших компаний неоднозначны и будут подвергнуты целой серии независимых исследований. Противоположная точка зрения подразумевает, что предприниматели в сети интернет, инициированные исключительно синтетически, представлены в исключительно положительном свете. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня предоставляет широкие возможности для экономической целесообразности принимаемых решений. В своём стремлении улучшить пользовательский опыт мы упускаем, что активно развивающиеся страны третьего мира лишь добавляют фракционных разногласий и заблокированы в рамках своих собственных рациональных ограничений. Предварительные выводы неутешительны: семантический разбор внешних противодействий способствует повышению качества поэтапного и последовательного развития общества. Таким образом, социально-экономическое развитие, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для переосмысления внешнеэкономических политик! Ясность нашей позиции очевидна: дальнейшее развитие различных форм деятельности в значительной степени обусловливает важность существующих финансовых и административных условий."
);
echo TextModifier::getPreviewText($testArticle["DETAIL_TEXT"],$testArticle["LINK"]);
*/
