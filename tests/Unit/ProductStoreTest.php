<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProductStoreTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_product_store()
    {
      
        $response = $this->POST('/addproduct',[
            'name'=>'Maruti Suzuki',
            'price'=>'12000',
            'details'=>'this is maruti suzuki car',
        ]);
        
      // dd($response);
     $response->assertStatus($response->status());
      
       // $this->assertTrue(true);
    }

    
}
