<?php

use App\Enums;

enum OrderStatusEnum: int 
{
  case CART = 1;
  case PENDING = 2;
  case PAID = 3;
  case CANCELED = 4;
  case REJECTED = 5;
  

  public function getName()
  {
    return match ($this) {
       self::CART => 'Created',
       self::PENDING => 'Pending',
       self::PAID => 'Paid',
       self::CANCELED => 'Canceled',
       self::REJECTED => 'Rejected',
       default => 'not found'
    };
  }

}