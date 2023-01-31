<?php

namespace Shopper\Framework\Models\Shop\Order;

class OrderStatus
{
    public const PENDING = 'pending';

    public const REGISTER = 'confirmed';

    public const SHIPPED = 'shipped';

    public const DELIVERY = 'out-for-delivery';

    public const COMPLETED = 'completed';

    public const CANCELLED = 'cancelled';

    public const FAILED = 'failed';

    public static function values(): array
    {
        return [
            self::PENDING => __('Pending'),
            self::REGISTER => __('Confirmed'),
            self::COMPLETED => __('Completed'),
            self::SHIPPED => __('Shipped'),
            self::DELIVERY => __('Out for Delivery'),
            self::CANCELLED => __('Cancelled'),
            self::FAILED => __('Failed'),
        ];
    }
}
