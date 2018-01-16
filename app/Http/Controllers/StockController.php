<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Http\Resources\{ Stock as StockResource, StockCollection };
use Illuminate\Http\Request;

use App\Classes\ErrorResponder;

class StockController extends Controller {
    public function __construct () {
        $this->error = new ErrorResponder('stock');
    }

    // GET /stocks
    public function index (Request $request) {
        $stock = Stock::with(['brand', 'manufacturer'])->get();
        return StockCollection::make($stock);
    }

    // POST /stocks
    public function store (Request $request) {
        //
    }

    // GET /stocks/{stock}
    public function show (Stock $stock) {
        return StockResource::make($stock);
    }

    // PATCH /stocks/{stock}
    public function update (Request $request, Stock $stock) {
        //
    }

    // DELETE /stocks/{stock}
    public function destroy (Stock $stock) {
        //
    }
}
