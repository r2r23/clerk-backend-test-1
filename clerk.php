<?
function balance(string $stringLeft, string $stringRight) :string
{
    // положим веса в массив, чтобы удобно было расширять, если потребуется
    $weights = [
        '!' => 2,
        '?' => 3,
    ]; 

    // обработка обоих входных стрингов одинаковая, поэтому их тоже положим в массив
    $arguments = [$stringLeft, $stringRight];

    // обработка
    foreach($arguments as $argument)
    {
        $sumWeight = 0;
        $symbolsArray = str_split($argument);
        foreach($symbolsArray as $symbol) // перебираем все символы...
        {
            foreach($weights as $key => $weight) 
            {
                if($symbol === $key) $sumWeight += $weight; // ...но учитываем в суммарный вес только те, которые есть в массиве весов
            }
        }
        $sumWeights[] = $sumWeight;
    }

    // сравниваем суммы и возвращаем результат
        if($sumWeights[0]  >  $sumWeights[1]) return 'left';
    elseif($sumWeights[0]  <  $sumWeights[1]) return 'right';
      else                                    return 'balance!';
}




echo balance('May I?', 'Sure!');

echo "<br><br>";

echo balance('Hello!', 'World!!');

echo "<br><br>";

echo balance('a2sd!!asf?df', '31?23!sdf!12');

?>