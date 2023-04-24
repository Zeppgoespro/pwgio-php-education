<?php

require_once __DIR__ . '/../vendor/autoload.php';

// $dateTime = new DateTime('tomorrow 13:13', new DateTimeZone('UTC'));

// var_dump($dateTime);

// $dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));

// echo '<br />';
// var_dump($dateTime);

// $dateTime->setDate(2023, 04, 26)->setTime(15, 15);

// echo '<br />';
// echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y G:i A') . PHP_EOL;

/**
 * day/month/year - Europe: - .
 * month/day/year - USA: /
*/

// $date = '12/05/2021 3:30PM';

// # $dateTime = new DateTime(str_replace('/', '-', $date));
// $dateTime = DateTime::createFromFormat('d/m/Y G:iA', $date);

// var_dump($dateTime);

// $date = '12/05/2021';

// # $dateTime = new DateTime(str_replace('/', '-', $date));
// $dateTime = DateTime::createFromFormat('d/m/Y', $date)->setTime(0,0);

// var_dump($dateTime);

// $dateTime1 = new DateTime('05/25/2021 9:15 AM');
// $dateTime2 = new DateTime('03/15/2021 3:25 AM');

// var_dump($dateTime1 < $dateTime2);
// var_dump($dateTime1 > $dateTime2);
// var_dump($dateTime1 == $dateTime2);
// var_dump($dateTime1 <=> $dateTime2);

// echo '<pre>';
// var_dump($dateTime2->diff($dateTime1));
// echo '</pre>';

// echo '<br />';
// echo $dateTime2->diff($dateTime1)->days . PHP_EOL;

// echo '<br />';
// echo $dateTime2->diff($dateTime1)->format('%d') . PHP_EOL;

// echo '<br />';
// echo $dateTime2->diff($dateTime1)->format('%R%a') . PHP_EOL; # %Y years, %m months, %d days, %H, %i, %s

// $interval = new DateInterval('P3M2D');

// echo '<pre>';
// var_dump($interval);
// echo '</pre>';

// echo '<pre>';
// print_r($interval);
// echo '</pre>';

// $dateTime = new DateTime('05/25/2021 9:15 AM');

// $interval->invert = 1;

// $dateTime->add($interval);

// echo '<br />';
// echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;

// $dateTime->sub($interval);

// echo '<br />';
// echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;

// $from = new DateTime();

// # $to = (new DateTime())->add(new DateInterval('P1M')); # work
// # $to = $from->add(new DateInterval('P1M')); # not working
// $to = (clone ($from))->add(new DateInterval('P1M'));

// echo '<pre>';
// var_dump($from, $to);
// echo '</pre>';

// echo '<pre>';
// var_dump($from === $to);
// echo '</pre>';

// echo '<br />';
// echo $from->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;

// $from = new DateTimeImmutable();
// $to = $from->add(new DateInterval('P1M'));

// echo '<pre>';
// var_dump($from, $to);
// echo '</pre>';

// var_dump($from === $to);

// echo $from->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;

// $from = new DateTimeImmutable();
// $to = $from->add(new DateInterval('P1M'));

// $to = $to->add(new DateInterval('P1Y'));

// echo $from->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;

# $period = new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P1D'), (new DateTime('05/31/2021'))->modify('+ 1 day'));
$period = new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P3D'), 3, DatePeriod::EXCLUDE_START_DATE);

foreach($period as $date):
  echo $date->format('m/d/Y') . '<br />' . PHP_EOL;
endforeach;