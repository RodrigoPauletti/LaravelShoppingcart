<?php
namespace Gloudemans\Shoppingcart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string currentInstance()
 * @method static \Gloudemans\Shoppingcart\Cart instance(?string $instance = null)
 * 
 * @method static \Gloudemans\Shoppingcart\CartItem get($rowId)
 * @method static \Gloudemans\Shoppingcart\CartItem|\Gloudemans\Shoppingcart\CartItem[] add($id, $name = null, $qty = null, $price = null, array $options = [])
 * @method static ?\Gloudemans\Shoppingcart\CartItem update($rowId, $qty)
 * @method static void remove($rowId)
 * 
 * @method static void destroy()
 * @method static Illuminate\Support\Collection content()
 * @method static int|float count()
 * @method static void associate($orwId, $model)
 * @method static void store($identifier)
 * @method static void restore($identifier)
 * @method static Illuminate\Support\Collection search(Closure $search)
 * 
 * @method static void addCost(string $name, float $price)
 * @method static string getCost(string $name, ?int $decimals = null, ?string $decimalPoint = null, ?string $thousandSeparator = null)
 * @method static void setTax($rowId, $taxRate)
 * 
 * @method static string total($decimals = null, $decimalPoint = null, $thousandSeparator = null)
 * @method static string tax($decimals = null, $decimalPoint = null, $thousandSeparator = null)
 * @method static string subtotal($decimals = null, $decimalPoint = null, $thousandSeparator = null)
 * 
 * 
 * @see \Gloudemans\Shoppingcart\Cart
 */
class Cart extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
