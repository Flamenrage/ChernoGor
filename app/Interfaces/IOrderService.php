<?php


namespace App\Interfaces;


use App\BindingModels\OrderBindingModel;

interface IOrderService
{
    public function createOrder(OrderBindingModel $model): void;
}