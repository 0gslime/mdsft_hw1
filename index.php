<?php
$str = 'Я вырос там, где не было камня на камне
Мне никогда не забыть те времена
Мой Бог все видит и слышит, он где-то над нами
Всегда помогает мне верить в себя
Даже когда я по уши увяз, он все равно со мной на связи
Помогает мне выбираться из этой жуткой грязи';

$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);

$words_count = [];

foreach ($words as $word) {

    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}


foreach ($words_count as $word => $word_count) {
    $entry_count = count($word_count[0]);
    echo "{$word}: {$entry_count}" . '<br>';
}

echo "Всего слов: {$count}";