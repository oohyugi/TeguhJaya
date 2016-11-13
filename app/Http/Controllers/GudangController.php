<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stok_gudang;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudang = Stok_gudang::all();
         
         
      //    foreach ($gudang as $value) {
      //       $nama_barang = $value->nama_barang;

      //      // $jumlah_barang = $value->jumlah_barang;
      //       if ($value->jumlah_barang >=12 ) {
      //          // $jumlah_barang = (number_format($value->jumlah_barang/12,0))." Lusin";

      //          $lusin = (floor($value->jumlah_barang/12));
      //          $pcs = $value->jumlah_barang%$lusin;
      //          if ($pcs != 0) {
      //               $jumlah_barang = $lusin. " Lusin  ". $pcs. " Pcs";
      //          }else{
      //           $jumlah_barang = $lusin. " Lusin  ";
      //          }
              


      //       }else{
      //           $jumlah_barang = ($value->jumlah_barang). " Pcs"; 
      //       }

      //       // $angka_format = number_format($jumlah_barang)." Lusin ";
      //       $dats[]= array(
      //           'id' => $value ["id"],
      //           'nama_barang' =>$value["nama_barang"] ,
      //           'pabrik'=>$value["pabrik"],
      //           'jumlah_barang' => $jumlah_barang,
      //           'harga_atas'=> $value["harga_atas"],
      //           'harga_bawah'=> $value["harga_bawah"],
      //           'created_at'=>$value["created_at"],
      //           'updated_at'=>$value["updated_at"],

      //            );
            
      //       // echo json_encode($data);

      //    }
      // $datanya = json_encode($dats);
   

//         $barang = 200;
//         $hitung = 200/12;
//        // echo $hitung;
//         $num = 15/4; // or $num = 3.75;
// $hasil = list($int, $dec) = explode('.', $num);
// echo substr(strrchr($num, "."), 1); 

//         $var = "1.25";
// $whole = floor($var);     // 1
//  $decimal = fmod($var, 1);
//  echo substr(strrchr($decimal,"."),1);
 //0.25
         
//          $x = 200; 
// $y = 12; 
// $z = $x % $y; 

// echo $z; // 4 -> ket : 10 dibagi 6 hasilnya 1 nah sisa hasil baginya 4
        
         return view('gudang_index',['data'=>$gudang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
