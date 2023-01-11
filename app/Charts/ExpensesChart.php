<?php
namespace App\Charts;
use ArielMejiaDev\LarapexCharts\LarapexChart;
class ExpensesChart
{
    protected $chart;
    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('My July Expenses.')
            ->setSubtitle('Weekly expenses in july.')
            ->addData('Bills', [100, 10, 100,100])
            ->addData('Vacation', [70, 13, 36, 80])
            ->addData('EatOuts',[50, 60, 70, 30,20])
            ->addData('Apple',[35,25,55,50,100])

            ->setXAxis(['Week1', 'Week2', 'Week3', 'Week4','Week5']);
    }
}