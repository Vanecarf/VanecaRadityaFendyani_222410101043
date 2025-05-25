<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Login
     public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == 'Vaneca' && $password == 'seungmin') {
            return redirect()->route('dashboard', ['username'=>$username]);
        }

        return back()->withErrors(['login'=>'Username atau Password salah!']);
    }
    
    //Dashboard
    public function dashboard (Request $request) 
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Anda belum melakukan login.']);
        }

        $AlbumItems = [
            [
                'images'=> 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR6L-4u8yF38fTFBqO1BpeG-sAppqGHmg3faBskFIdDqGHmf8oTTqpChzYhVNl_NPWCLaJJDmlMIqrQ4FoqodIp-lUy3fC5J45zQIb143E',
                'nama_barang'=> 'Stray Kids - 9th Mini Album [ATE] (Platform ver.)',
                'kategori'=> 'Album',
                'jumlah'=> 45,
                'harga'=> 'Rp250.000',
                'images_detail'=> 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR1uPhJR1lajtzCCJBy_NHIi-eAqfvWdrwV9I6FmWInYd6OirvKIYbm_MU-sDV8qDPxwUQ2JoJCnwNhMLfszYvDDktXQ_qexn3B0gJ-f9Aj6VK41e6SVeVYrGM',
            ],

            [
                'images'=> 'https://down-id.img.susercontent.com/file/id-11134207-7rase-m4st8f75yc2lb2@resize_w450_nl.webp',
                'nama_barang'=> 'TWICE - 14th Mini Album [STRATEGY]',
                'kategori'=> 'Album',
                'jumlah'=> 70,
                'harga'=> 'Rp300.000',
                'images_detail'=> 'https://down-id.img.susercontent.com/file/id-11134207-7rasa-m4st8f75zqn1df.webp',
            ],

            [
                'images'=> 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQPDYSWBKdU1e8j3RDQGGQE3jYmBZg4ZwbT1A7OwxcnsUzMCeOhe-4ex7YVu4q89IxS8ZQAmfVbAoDOrey2XTEgTc3f5LxJ',
                'nama_barang'=> 'Stray Kids - 3rd Album [5-STAR]',
                'kategori'=> 'Album',
                'jumlah'=> 30,
                'harga'=> 'Rp250.000',
                'images_detail'=> 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQSX0GYpy_mqBO1YPXbe4DMMvSeyCpgOtpfBSaH-BdUrB5KHwpo2okDFvcgTK742Va0PFaMYQD3URAuueuFoVW5bax7JQgwBUcPy8MspRvAGhf_jkSs51LGfAs',
            ],  
        ];

        $MerchItems = [
            [
                'images'=> 'https://pbs.twimg.com/media/Gj-j-AjbIAAmgoj?format=jpg&name=medium',
                'nama_barang'=> 'Stray Kids SKZOO PLUSH TEDDYBEAR Ver. - SKZ 5\'CLOCK',
                'kategori'=> 'Merchandise',
                'jumlah'=> 50,
                'harga'=> 'Rp550.000',
                'images_detail'=> 'https://pbs.twimg.com/media/Gj-j-AjbIAAmgoj?format=jpg&name=medium',
            ],

            [
                'images'=> 'https://twiceshop.com/cdn/shop/files/tumbler.png?v=1737126898&width=800',
                'nama_barang'=> 'TWICE - STRATEGY Tumbler',
                'kategori'=> 'Merchandise',
                'jumlah'=> 40,
                'harga'=> 'Rp250.000',
                'images_detail'=> 'https://twiceshop.com/cdn/shop/files/tumbler.png?v=1737126898&width=800',
            ],

            [
                'images'=> asset('nmixx.jpeg'),
                'nama_barang'=> 'NMIXX GRAPHIC T-SHIRT - \'Fe3O4: FORWARD\' POP-UP STORE',
                'kategori'=> 'Merchandise',
                'jumlah'=> 25,
                'harga'=> 'Rp400.000',
                'images_detail'=> asset('nmixx.jpeg'),
            ],
        ];

        $LightStick = [
            [
                'images'=> 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTIxQu7OSyNYURMzMy3_vgDCmYwq0CTckVbZNtHtwrH7UG2HpEwdXzu-97tMwk_6j-PN9KYW-JBuKdqiIy9ynDi4ml--9z5ClLQqKel_WQy56pwA_YvVLYTPg',
                'nama_barang'=> 'SEVENTEEN - Official Light Stick Ver.3',
                'kategori'=> 'Light Stick',
                'jumlah'=> 25,
                'harga'=> 'Rp900.000',
                'images_detail'=> 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRLhizxil8yR_QRGQHIjKBwSQGiJ6avPbywgP7pG5rW8j7q-atWkXbr4PBFrguTtVq7Fto6qVvS5cBvEvdlyjG5lNBx5IkXM0-KiFDKIPS92_aw52d2pXD1xw',
            ],

            [
                'images'=> 'https://pbs.twimg.com/media/FytrZGwaUAA3Ivz?format=jpg&name=4096x4096',
                'nama_barang'=> 'Stray Kids - Official Light Stick Ver.2',
                'kategori'=> 'Light Stick',
                'jumlah'=> 40,
                'harga'=> 'Rp850.000',
                'images_detail'=> 'https://pbs.twimg.com/media/FytrZGwaUAA3Ivz?format=jpg&name=4096x4096',
            ],

            [
                'images'=> 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR0A-1rYyHEUgGHR4rDphWResCy_NMi8ZYQUE_EXlZLM77ckm4VZ52bzfyqClbS3VL5P8PzcWMJQQm0t0RnPor-CREbLjuYS6CMqL1tMM9xA7Yql9ZF3ig9uA',
                'nama_barang'=> 'IVE - Official Light Stick',
                'kategori'=> 'light Stick',
                'jumlah'=> 25,
                'harga'=> 'Rp700.000',
                'images_detail'=> 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQZUKEqV9JGIZCf1AaOLSVsqJtWuua0ST6kyJu1ZfktfXX18qri66IypTuC1C4g9wLjC-eXiDTRFbPuqfujb9v8c7NO3WQjIefS98GAUYoZkcWkHVGNX9xYpw',
            ],
        ];

        return view('dashboard',compact('username','AlbumItems','MerchItems','LightStick'));
    } 
    
    //Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');

        return view('profile',compact('username'));
    } 

    //Edit
    public function edit($kategori, $index)
    {
        $data = $this->getDataByKategori($kategori);

        if (!isset($data[$index])) {
            return redirect()->back()->withErrors(['error' => 'Data tidak ditemukan.']);
        }

        $item = $data[$index];
        return view('edit_barang', compact('item', 'kategori', 'index'));
    }

    public function update(Request $request, $kategori, $index)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|string',
        ]);

        return redirect()->route('dashboard', ['username' => $request->input('username')])
                         ->with('Data berhasil diperbarui.');
    }

    //Logout
    public function logout()
    {
        return redirect()->route('login');
    }
  
}
