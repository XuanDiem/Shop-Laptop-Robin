<?php /** @noinspection ALL */


namespace App;


use http\Env\Request;

class Cart
{
    public $items = null;
    public $totalAmount = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalAmount = $oldCart->totalAmount;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

//    public function add($item, $id)
//    {
//
//
//        $storedItems = ['amount' => 0, 'price' => $item->price, 'item' => $item];
//
//        $storedItems['amount']++;
//        $storedItems['price'] = $item->price * $storedItems['amount'];
//
//        $this->items[$id] = $storedItems;
//        $this->totalAmount += $storedItems['amount'];
//        $this->totalPrice += $storedItems['price'];
//
//    }
//
//    public function remove($id)
//    {
//        if ($this->items) {
//            $productsIntoCart = $this->items;
//            if (array_key_exists($id, $productsIntoCart)) {
//                $priceProductsDelete = $productsIntoCart[$id]['price'];
//                $this->totalPrice -= $priceProductsDelete;
//                $this->totalAmount--;
//                unset($productsIntoCart[$id]);
//                $this->items = $productsIntoCart;
//            }
//        }
//    }
//
//    public function update($request, $id)
//    {
//        if ($this->items) {
//            $itemsIntoCart = $this->items;
//            if (array_key_exists($id, $itemsIntoCart)) {
//                $itemsUpdate = $itemsIntoCart[$id];
//
//                $amountUpdate = $request->amount - $itemsUpdate['amount'];
//                $this->totalAmount += $amountUpdate;
//
//                $priceUpdate = $itemsUpdate['item']->price * $request->amount - $itemsUpdate['price'];
//                $this->totalPrice += $priceUpdate;
//
//                $itemsUpdate['amount'] = $request->amount;
//
//                $itemsUpdate['price'] = $itemsUpdate['item']->price * $request->amount;
//                $this->items[$id] = $itemsUpdate;
//            }
//        }
//
//    }


    public function changeCart($item, $request)
    {
        $storeProduct = ['amount' => 0, 'price' => $item->price, 'item' => $item];

//        if (array_key_exists($item->id, $storeProduct)) {
//            $storeProduct = $storeProduct['amount']++;
//        }
        if ($this->isAnyProductInCart()) {
            $this->updateOrCreateProduct($item, $request, $storeProduct);
        } else {
            $this->createFirstProductInCart($item, $request, $storeProduct);
        }
    }

    public function addInToCart($item, $request, $storeProduct)
    {
//        $storeProduct = ['amount' => 0, 'price' => $item->price, 'item' => $item];

        if ($request->qty) {
            $storeProduct['amount'] = $request->qty;
            $storeProduct['amount']++;
        } else {
            $storeProduct['amount']++;

        }


        $storeProduct['price'] = $item->price * $storeProduct['amount'];
        $this->items[$item->id] = $storeProduct;
        $this->totalPrice += $storeProduct['price'];
        $this->totalAmount += $storeProduct['amount'];

    }

    public function removeFromCart($item, $storeProduct)
    {
        if ($storeProduct['amount'] > 1) {
            $storeProduct['amount']--;
            $this->totalAmount--;
            $this->totalPrice -= $item->price;
        }
        $storeProduct['price'] = $item->price * $storeProduct['amount'];
        $this->items[$item->id] = $storeProduct;
    }

    public function deleteInCart($item)
    {
        $storeProduct = $this->items[$item->id];
        $this->totalPrice -= $storeProduct['price'];
        $this->totalAmount -= $storeProduct['amount'];
        unset($this->items[$item->id]);
    }

    public function createFirstProductInCart($item, $request, $storeProduct)
    {
        $this->addInToCart($item, $request, $storeProduct);
    }

    public function listenIncreaseOrDecreaseProduct($request, $item, $storeProduct)
    {
        if ($storeProduct['amount'] < $request->qty) {
            $this->totalAmount -= ($request->qty - 1);
            $this->totalPrice = ($this->totalPrice - $storeProduct['price']);
            $this->addInToCart($item, $request, $storeProduct);
        } else {
            $this->removeFromCart($item, $storeProduct);
        }
    }

    public function createIfNotUpdate($item, $request, $storeProduct)
    {
        $this->addInToCart($item, $request, $storeProduct);
    }

    public function getDataToUpdate($item)
    {
        return $this->items[$item->id];
    }

    /**
     * @param $item
     * @return bool
     */
    public function isProductExistInCart($item): bool
    {
        return array_key_exists($item->id, $this->items);
    }

    /**
     * @param $item
     * @param $request
     */
    public function updateProductInCart($item, $request): void
    {
        $storeProduct = $this->getDataToUpdate($item);
        $this->listenIncreaseOrDecreaseProduct($request, $item, $storeProduct);
    }

    /**
     * @param $item
     * @param $request
     * @param array $storeProduct
     */
    public function updateOrCreateProduct($item, $request, array $storeProduct): void
    {
        if ($this->isProductExistInCart($item)) {
            $this->updateProductInCart($item, $request);
        } else {
            $this->createIfNotUpdate($item, $request, $storeProduct);
        }
    }

    /**
     * @return mixed
     */
    public function isAnyProductInCart()
    {
        return $this->items;
    }
}
