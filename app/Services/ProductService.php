<?php
namespace App\Services;

use App\Models\Product;
use App\Models\OutgingProductModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Excel;
use App\Imports\ProductsImport;

class ProductService{

    /**
     * Read data from file and update 
     * @param object $file
     */
    private function readAndUpdateData(object $file){
        $filename = pathinfo($file->getFilename(), PATHINFO_FILENAME);
        $path = $file->getPathname();

        $datas = Excel::toArray(new ProductsImport, $path);
        
        foreach($datas[0] as $data){
            $product = Product::where('user_id',$filename)
            ->where('barcode',$data['barcode'])->first();
            
            if(!$product){
                OutgingProductModel::create([
                    'quantity' => $data['quantity'],
                    'barcode' => $data['barcode'],
                    'user_id' => $filename,
                ]);
            }else{
                $product->quantity =  $data['quantity'];
                $product->save();
            }
        }

    }
    /**
     * Cron function
     */
    public function cron(){
        $date = Carbon::now()->isoFormat('YYYY-MM-DD');
        $path = public_path("excel/$date");

        if(!File::exists($path)) {
            return false;
        }

        $files = File::files($path);

        if(!count($files)){
            return 0;
        }

        foreach($files as $file){
            $this->readAndUpdateData($file);
        }
    }

    /**
     * Get products by user id
     * @param int $user_id
     */
    function getProductsByUserId(int $user_id){
        return Product::where('user_id',$user_id)->get();
    }

    /**
     * Store product
     * @param int $user_id
     * @param int $barcode
     * @param int $quantity
     */
    function store(int $user_id,int $barcode, int $quantity){
        return Product::create([
            'user_id' => $user_id,
            'barcode' => $barcode,
            'quantity' => $quantity
        ]);
    }
}

?>